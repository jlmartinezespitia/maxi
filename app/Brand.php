<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    //
    protected $table = 'brands';
    protected $fillable = ['nombre','imagen'];
    public $timestamps = false;

    //Relation with Products
    public function products()
    {
    	return $this->hasMany('App\Product');
    }
}
