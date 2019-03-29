<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $table = 'hoppins_addresses';
    public function users() {
        return $this->hasMany('App\User');
    }

}
