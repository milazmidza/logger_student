<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    //
    protected $fillable = [
        'id', 'name',
    ];

    public function periodModules()
    {
        return $this->hasMany('App\model\PeriodModule', 'period_id', 'id');
    }
}
