<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $fillable = [
        'course_id',//pk
        'teacher_id',//fk
        'course_name',
        'course_introduction',
        'pic',
    ];
}
