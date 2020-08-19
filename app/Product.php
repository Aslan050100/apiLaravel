<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $table = 'products';

    public function images(){
        return $this->hasMany('App\Image','product_id','id');
    }
    public function itemtypes(){
        return $this->belongsTo('App\ItemType','itemtype_id','id');
    }


}
