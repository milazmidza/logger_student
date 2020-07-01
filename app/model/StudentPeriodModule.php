<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class StudentPeriodModule extends Model
{
    //
    protected $fillable = [
        'id', 'student_id', 'period_module_id',
    ];

    public function student()
    {
        return $this->belongsTo('App\model\Student', 'student_id', 'id');
    }

    public function periodModule()
    {
        return $this->belongsTo('App\model\PeriodModule', 'period_module_id', 'id');
    }
}
