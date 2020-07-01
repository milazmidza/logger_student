<?php

namespace App\mode;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    //
    protected $fillable = [
        'id', 'name', 
    ];

    public function modules()
    {
        return $this->hasMany('App\model\Module', 'program_id', 'id');
    }

    public function students()
    {
        return $this->hasMany('App\model\Student', 'program_id', 'id');
    }

}
