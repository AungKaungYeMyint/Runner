<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Image extends Model
{
    use SoftDeletes;
    
    public $table = 'images';

    protected $fillable = ['imagable_type','imagable_id','url'];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];
}
