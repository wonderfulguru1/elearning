<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CourseOwner extends Model
{
    protected $table = 'course_owners';
    protected $fillable = ['user_id', 'course_id', 'created_at','updated_at'];
}
