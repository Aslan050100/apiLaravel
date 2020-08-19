<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //

    protected $table = 'categories';

    public function pays(){
        return $this->belongsToMany('App\Pay','pro_pays','pro_id','pay_id');
    }
    public function itemtypes(){
        return $this->belongsToMany('App\ItemType','category_itemtype','category_id','itemtype_id');
    }

}
