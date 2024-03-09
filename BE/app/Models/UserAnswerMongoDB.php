<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MongoDB\Laravel\Eloquent\SoftDeletes;
use MongoDB\Laravel\Eloquent\Model;
use MongoDB\Laravel\Relations\BelongsTo;

class UserAnswerMongoDB extends Model
{
    use HasFactory, SoftDeletes;

    protected $collection = 'user_answers';
    protected $connection = 'mongodb';
    protected $dates = ['deleted_at'];
    protected $fillable = [
        'user_id',
        'test_id',
        'test',
        'deleted_at' => null,

    ];
    protected $atributes = [
        'test' => [],
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
