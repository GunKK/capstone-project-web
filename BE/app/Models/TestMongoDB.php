<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MongoDB\Laravel\Eloquent\SoftDeletes;
use MongoDB\Laravel\Eloquent\Model;
use MongoDB\Laravel\Relations\HasMany;

class TestMongoDB extends Model
{
    use HasFactory, SoftDeletes;

    protected $collection = 'tests';
    protected $connection = 'mongodb';
    protected $dates = ['deleted_at'];
    protected $fillable = ['name'];
    protected $atributes = [
        'deleted_at' => null,
    ];

    // public function getIdAttribute($value = null) {
    //     return $this->attributes['_id'];
    // }

    public function questions(): HasMany
    {
        return $this->hasMany(QuestionMongoDB::class, 'test_id');
    }
}
