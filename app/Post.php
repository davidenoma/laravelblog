<?php

namespace flashnet;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $fillable = ['title', 'body'];
    public $timestamps = false;
    
}
