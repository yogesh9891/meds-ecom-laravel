<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;

	public function meds_price(){

	return $this->hasOne(MedsPrice::class,'c_2_2_2_product_no','product_id');

	}
}
