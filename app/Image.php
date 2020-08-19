<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    //
    protected $table = 'images';

    public function products(){
        return $this->belongsTo('App\Product','product_id','id');
    }
}
