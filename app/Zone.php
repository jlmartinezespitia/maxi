<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Zone extends Model
{
    protected $table = 'zones';
    protected $fillable = ['zona','area','product_id'];
    public $timestamps = false;
    //Relation with Product
    public function product()
    {
    	return $this->belongsTo('App\Product');
    }//
}
