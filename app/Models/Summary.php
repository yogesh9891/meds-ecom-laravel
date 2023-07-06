<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Summary extends Model
{
    use HasFactory,SoftDeletes;
    protected $table = '14-summary';

    public function order_details()
    {
    	return $this->hasMany(OrderDetail::class,'order_id','id');
    }

	public function country(){

	return $this->hasOne(CountryFreight::class,'id','arrival_country');

	}

		public function payment_country(){

	return $this->hasOne(CountryFreight::class,'c_4_1_2_country_name','c_14_17_payer_country');

	}

	public function reorder(){

	return $this->hasOne(Summary::class,'c_14_2_online_invoice_no','reorder_invoice_no');

	}

	public function coupon(){

	return $this->hasOne(PromoDiscount::class,'c_12_2_coupon_code','c_14_75_coupon_code_used');

	}

		public function user()
		{
			return $this->belongsTo(User::class);
		}

}
