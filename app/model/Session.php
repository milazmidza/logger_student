<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    //
    protected $fillable = [
        'id', 'lecturer_id', 'period_module_id',
    ];

    public function lecturer()
    {
        return $this->belongsTo('App\model\Lecturer', 'lecturer_id', 'id');
    }

    public function periodModule()
    {
        return $this->belongsTo('App\model\Period_Module', 'period_module_id', 'id');
    }
}
