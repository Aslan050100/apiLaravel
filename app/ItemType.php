<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ItemType extends Model
{
    //
    protected $table = 'item_types';

    public function products(){
        return $this->hasMany('App\Product','id','itemtype_id');
    }
    public function categories(){
        return $this->belongsToMany('App\Category','category_itemtype','category_id','itemtype_id');
    }
}
