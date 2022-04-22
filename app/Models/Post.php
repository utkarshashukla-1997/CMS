<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function cat(){
      return $this->belongsTo('App\Models\Categories','category_id');
    }
    public function tagg(){
        return $this->belongsTo('App\Models\Tags','tag_id');
    }
    public function usr(){
        return $this->belongsTo('App\Models\User','user_id');
    }
}
