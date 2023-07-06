<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BlogReview extends Model
{
    use HasFactory,SoftDeletes;


     public function blog()
    {
    	return $this->hasOne(BlogNews::class,'id','post_on_blog');
    }
}
