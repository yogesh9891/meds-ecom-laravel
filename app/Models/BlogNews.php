<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BlogNews extends Model
{
    use HasFactory,SoftDeletes;


    public function blog_reviews()
    {
    	return $this->hasMany(BlogReview::class,'post_on_blog')->where('status',1);
    }

    public function medication()
    {
    	return $this->hasOne(MedsInfo::class,'c_1_1_1_generic_id_no','medication');
    }
}
