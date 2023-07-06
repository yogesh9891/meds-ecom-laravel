<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TextReview extends Model
{
    use HasFactory,SoftDeletes;

     public function medication()
    {
    	return $this->hasOne(MedsInfo::class,'c_1_1_1_generic_id_no','medicine');
    }
}
