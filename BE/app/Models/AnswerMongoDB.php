<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MongoDB\Laravel\Eloquent\SoftDeletes;
use MongoDB\Laravel\Eloquent\Model;
use MongoDB\Laravel\Relations\BelongsTo;

class AnswerMongoDB extends Model
{
    use HasFactory, SoftDeletes;
    protected $collection = 'answers';
    protected $connection = 'mongodb';
    protected $dates = ['deleted_at'];
    protected $fillable = [
        'content',
        'is_correct'
    ];
    protected $attributes = [
        'content' => 'All answers are correct',
        'is_correct' => false,
        'deleted_at' => null,
    ];

    public function question(): BelongsTo
    {
        return $this->belongsTo(QuestionMongoDB::class);
    }
}
