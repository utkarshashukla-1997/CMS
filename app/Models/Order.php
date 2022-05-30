<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function prod(){
        return $this->belongsToMany('App\Models\Product','order_product');
    }
    public function usr(){
        return $this->belongsTo('App\Models\User','recorded_by');
    }
}
