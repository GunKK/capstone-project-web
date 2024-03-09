<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\api\v1\auth\LoginRequest;
use App\Http\Requests\api\v1\auth\RegisterRequest;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Hash;
use PHPOpenSourceSaver\JWTAuth\Exceptions\JWTException;
use PHPOpenSourceSaver\JWTAuth\Facades\JWTAuth;

class AuthController extends Controller
{
    public function register(RegisterRequest $request)
    {
        $user = User::create(
            $request->only('name', 'email')
            + ['password' => Hash::make($request->input('password'))]
        );

        return response()->json($user, Response::HTTP_CREATED);
    }

    /**
     * Get a JWT via given credentials.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function login(LoginRequest $request): JsonResponse
    {
        $credentials = $request->only('email', 'password');
        $token = Auth::attempt($credentials);
        if (! $token) {
            return response()->json([
                'error' => 'Invalid username or Password',
            ], Response::HTTP_UNAUTHORIZED);
        }


        $user = User::where('email',$request->input('email'))->first();
        $refreshToken = JWTAuth::claims( [
            'key' => env('JWT_REFRESH_SECRET'),
            'exp' => Carbon::now()->addDays(7)
        ])->fromUser($user);

        $cookieAccessToken = cookie('access_token', $token, 3600); // 1 hour
        $cookieRefreshToken = cookie('refresh_token', $refreshToken, 60*24*7); // 7 days

        return response()->json([
            'status' => 'success',
            'user' => $user,
            'token' => $token,
            'refresh_token' => $refreshToken,
            'type' => 'bearer',
        ], Response::HTTP_OK)
        ->withCookie($cookieAccessToken)
        ->withCookie($cookieRefreshToken);
    }
    /**
     * Log the user out (Invalidate the token).
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout()
    {
        Auth::logout();
        $cookieAccessToken = Cookie::forget('access_token');
        $cookieRefreshToken = Cookie::forget('refresh_token');

        return response()->json([
            'message' => 'Successfully logged out'
            ])
            ->withCookie($cookieAccessToken)
            ->withCookie($cookieRefreshToken);
    }
    /**
     * Get the authenticated User.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function me(): JsonResponse
    {
        return response()->json(Auth::user());
    }
    public function refresh(Request $request)
    {
        $refreshToken = $request->cookie('refresh_token');

        if ($refreshToken) {
            try {
                $payload = JWTAuth::setToken($refreshToken)->getPayload();
                $expiresAt = Carbon::createFromTimestamp($payload['exp']);

                if ($expiresAt->isPast()) {
                    $user = Auth::user();

                    $refreshToken = JWTAuth::claims( [
                        'key' => env('JWT_REFRESH_SECRET'),
                        'exp' => Carbon::now()->addDays(7)
                    ])->fromUser($user);
                    $newToken = Auth::refresh();
                    $cookieAccessToken = cookie('access_token', $newToken, 3600); // 1 hour
                    $cookieRefreshToken = cookie('refresh_token', $refreshToken, Carbon::now()->addDays(7)->timestamp);

                    return response()->json([
                        'status' => 'success',
                        'user' => $user,
                        'token' => $newToken,
                        'type' => 'bearer',
                    ], Response::HTTP_OK)
                    ->withCookie($cookieAccessToken)
                    ->withCookie($cookieRefreshToken);
                }
            } catch (JWTException $e) {
                return response()->json([
                    'error' => 'trace ' . $e->getMessage(),
                ]. Response::HTTP_INTERNAL_SERVER_ERROR);
            }
        }
    }
}
