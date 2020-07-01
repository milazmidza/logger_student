<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class StudentAttendance extends Model
{
    //
    protected $fillable = [
        'id', 'student_id', 'session_id'
    ];

    public function student()
    {
        return $this->belongsTo('App\model\Student', 'student_id', 'id');
    }

    public function session()
    {
        return $this->belongsTo('App\model\Session', 'session_id', 'id');
    }
}
