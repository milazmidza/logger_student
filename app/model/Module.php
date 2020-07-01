<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    //
    protected $fillable = [
        'id', 'name', 'program_id',
    ];

    public function program()
    {
        return $this->belongsTo('App\model\Program', 'program_id', 'id');
    }
}
