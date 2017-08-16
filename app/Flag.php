<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flag extends Model
{
    //
    protected $table = 'flags';
    protected $fillable = ['nombre','imagen'];
    public $timestamps = false;

    //Relation with Products
    public function products()
    {
    	return $this->hasMany('App\Product');
    }
}
