<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $fillable = ['clave','nombre','slug','descripcion','extract','imagen','visible','category_id'];

    //Relation with Category
    public function category()
    {
    	return $this->belongsTo('App\Category');
    }

    //Relation with Brand
    public function brand()
    {
        return $this->belongsTo('App\Brand');
    }

    //Relation with Flag
    public function flag()
    {
        return $this->belongsTo('App\Flag');
    }

    //Relación con OrderItem
    public function order_item()
    {
    	return $this->hasOne('App\OrderItem');
    }
    //Relation with Scala
    public function scala()
    {
        return $this->hasMany('App\Scala');
    }
     //Relation with Zone
    public function zone()
    {
        return $this->hasMany('App\Zone');
    }
}
