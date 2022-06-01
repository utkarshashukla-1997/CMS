<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function cat(){
        return $this->belongsToMany('App\Models\Category','product_category');
    }
    public function sub(){
        return $this->belongsToMany('App\Models\SubCategory','product_subcategory');
    }
    public function tagg(){
        return $this->belongsToMany('App\Models\Tag','product_tag');
    }
    public function brandd(){
        return $this->belongsTo('App\Models\Brand','brand_id');
    }
    public function usr(){
        return $this->belongsTo('App\Models\User','recorded_by');
    }
}
