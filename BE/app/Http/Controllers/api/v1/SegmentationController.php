<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use GuzzleHttp\Client;

class SegmentationController extends Controller
{
    public function predict(Request $request)
    {
        // return response()->json($request->hasFile('dicom_file'));
        if ($request->hasFile('dicom_file')) {
            $dicomFile = $request->file('dicom_file');

            $client = new Client();

            $dicomFile = new UploadedFile(
                storage_path('app/' . $dicomFile->store('dicom')),
                $dicomFile->getClientOriginalName(),
                $dicomFile->getClientMimeType(),
                $dicomFile->getSize(),
                $dicomFile->getError()
            );

            $url = '127.0.0.1:5000/predict';
            $response = $client->request('POST', $url, [
                'multipart' => [
                    [
                        'name'     => 'dicom_file',
                        'contents' => fopen($dicomFile->getPathname(), 'r'),
                        'filename' => $dicomFile->getClientOriginalName(),
                    ],
                ]
            ]);
            return response()->json($response->getBody()->getContents());
        }
    }
}
