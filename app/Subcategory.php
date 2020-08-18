<?php

namespace App;
use App\Category;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    protected $fillable = [
        'name', 'category_id'
    ];

     public function category($value='') 
    {
        return $this->belongsTo('App\Category');
    }
     public function items($value='') 
    {
        return $this->hasMany('App\Item');
 	}
}
