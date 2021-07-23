<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class User extends Model
{
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [ ];

    public function takeOffs()
    {
        return $this->hasMany('App\TimeOff', 'nomor_induk', 'nomor_induk');
    }
}
