<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class QueryDetails extends Model
{
    use HasFactory,SoftDeletes;

    public function summary()
    {
    	return $this->hasOne(Summary::class,'c_14_2_online_invoice_no','c_10_11_order_ref');
    }

      public function order()
    {
    	return $this->hasOne(Summary::class,'c_14_2_online_invoice_no','c_10_1_s_no');
    }

     public function medicine()
    {
    	return $this->hasOne(MedsInfo::class,'c_1_1_1_generic_id_no','c_10_1_s_no');
    }
}
