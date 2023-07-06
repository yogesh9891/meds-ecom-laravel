<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedsProduct extends Model
{
    use HasFactory;
    protected $table = '2-1-meds-products';

    public function meds_price()
    {
    	return $this->hasOne(MedsPrice::class,'c_2_2_2_product_no','c_2_1_2_product_no');
    }

	 public function meds_name()
    {
    	return $this->belongsTo(MedsInfo::class,'c_2_1_1_generic_id_no','c_1_1_1_generic_id_no');
    }
}
