<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_Progress extends Model
{
    use HasFactory;

    protected $table = 'user_progress';
    protected $fillable = [
        'user_id',
        'course_id',
        'last_lesson_completed',
        'last_quiz_completed',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function course()
    {
        return $this->belongsTo(Courses::class, 'course_id');
    }
}
