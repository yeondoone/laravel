<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
   $timestamps = false;  
   $fillable = ['title', 'body'];
}
