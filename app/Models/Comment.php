<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function pos(){
        return $this->belongsTo('App\Models\Post','post_id');
    }
    public function usr(){
        return $this->belongsTo('App\Models\User','user_id');
    }
}
