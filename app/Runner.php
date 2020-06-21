<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Runner extends Authenticatable
{
    use SoftDeletes;

    public $table = 'runners';

    protected $fillable = [
        'username','phone','email','gender','city','birthday',
        'google_id','facebook_id','weight','point','run_level','image_id'
    ];

    protected $hidden = [
        'password','remember_token'
    ];

    protected $dates = [
        'created_at','updated_at','deleted_at'
    ];

    protected $casts = [
        'phone_number_verified_at' => 'datetime'
    ];

    public function imagable() {
        return $this->morphOne(Image::class,'imagable');
    }
}
