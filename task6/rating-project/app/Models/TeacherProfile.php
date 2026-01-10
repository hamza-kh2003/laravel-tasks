<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TeacherProfile extends Model
{
    //
    protected $fillable = [
        'user_id',
        'image',
        'subject',
        'branch',
        'experience',
        'phone',
        'about',
        'is_approved',
    ];
}
