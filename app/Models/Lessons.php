<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lessons extends Model
{
    use HasFactory;

    protected $table = 'lessons';
    protected $fillable = [
        'course_id',
        'title',
        'content',
        'video_url',
        'sequence_number',
    ];

    public function course()
    {
        return $this->belongsTo(Courses::class, 'course_id');
    }
}
