<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Period extends Model
{
    //
    protected $fillable = [
        'id', 'name', 'start_date', 'end_date', 'is_active',
    ];

    public function periodModules()
    {
        return $this->hasMany('App\model\PeriodModule', 'period_id', 'id');
    }

}
