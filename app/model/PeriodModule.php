<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class PeriodModule extends Model
{
    //
    protected $fillable = [
        'id', 'period_id', 'module_id', 'level_id',
    ];

    public function period()
    {
        return $this->belongsTo('App\model\Period', 'period_id', 'id');
    }

    public function module()
    {
        return $this->belongsTo('App\model\Module', 'module_id', 'id');
    }

    public function level()
    {
        return $this->belongsTo('App\model\Level', 'level_id', 'id');
    }
}
