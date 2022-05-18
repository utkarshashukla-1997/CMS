<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function usr(){
        return $this->belongsTo('App\Models\User','user_id');
    }
    public function tagg(){
        return $this->belongsToMany('App\Models\Tag','page_tag');
    }
}
