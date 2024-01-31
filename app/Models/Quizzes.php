<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quizzes extends Model
{
    use HasFactory;

    protected $table = 'quizzes';
    protected $fillable = [
        'course_id',
        'title',
        'description',
        'pass_score',
    ];

    public function course()
    {
        return $this->belongsTo(Courses::class, 'course_id');
    }
}
