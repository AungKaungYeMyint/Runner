<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    public $table = 'cities';

    protected $fillable = ['name'];

    protected $dates = ['created_at','updated_at','deleted_at'];
}
