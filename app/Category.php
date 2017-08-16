<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $table = 'categories';
    protected $fillable = ['nombre','slug','descripcion','color'];
    public $timestamps = false;

    //Relation with Products
    public function products()
    {
    	return $this->hasMany('App\Product');
    }
}
