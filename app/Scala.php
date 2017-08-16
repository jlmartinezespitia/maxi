<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Scala extends Model
{
    protected $table = 'scalas';
    protected $fillable = ['escala','precio','precioimp','product_id'];
    public $timestamps = false;
    //Relation with Product
    public function product()
    {
    	return $this->belongsTo('App\Product');
    }

}
