<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class LecturerModule extends Model
{
    //
    protected $fillable = [
        'id', 'period_module_id', 'lecturer_id'
    ];

    public function lecturer()
    {
        return $this->belongsTo('App\model\Lecturer', 'lecturer_id', 'id');
    }

    public function periodModule()
    {
        return $this->belongsTo('App\model\PeriodModule', 'period_module_id', 'id');
    }
}
