<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MongoDB\Laravel\Eloquent\SoftDeletes;
use MongoDB\Laravel\Eloquent\Model;
use MongoDB\Laravel\Relations\BelongsTo;
use MongoDB\Laravel\Relations\EmbedsMany;
use MongoDB\Laravel\Relations\HasMany;

class QuestionMongoDB extends Model
{
    use HasFactory, SoftDeletes;

    protected $collection = 'questions';
    protected $connection = 'mongodb';
    protected $dates = ['deleted_at'];
    protected $fillable = [
        'test_id',
        'title',
        'description',
        'score'
    ];
    protected $atributes = [
        'score' => 10,
        'deleted_at' => null,

    ];

    public function answers(): EmbedsMany
    {
        return $this->embedsMany(AnswerMongoDB::class, 'answer_id', '_id');
    }

    public function test(): BelongsTo
    {
        return $this->belongsTo(TestMongoDB::class);
    }
}
