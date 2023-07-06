<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MedsInfo extends Model
{
    use HasFactory,SoftDeletes;
	protected $table = '1-1-meds-names';

protected $fillable = ['c_1_1_2_main_generic_name'];
		
 public function meds_seo()
    {
    	return $this->hasOne(MedsSeo::class,'c_1_5_1_generic_id_no','c_1_1_1_generic_id_no');
    }
 public function meds_questions()
    {
    	return $this->hasMany(MedsQuestion::class,'c_1_2_1_generic_id_no','c_1_1_1_generic_id_no')->orderBy('c_1_2_2_qs_no')->orderBy('c_1_2_3_question');
    }
 public function meds_videos()
    {
    	return $this->hasMany(MedsVideo::class,'c_1_4_1_generic_id_no','c_1_1_1_generic_id_no')->orderBy('c_1_4_2_video_no')->orderBy('c_1_4_3_video_title');;
    }
 public function meds_leaflets()
    {
    	return $this->hasMany(MedsLeaflet::class,'c_1_3_1_generic_id_no','c_1_1_1_generic_id_no')->distinct();
    }


		public function meds_products()
	{
		return $this->hasmany(MedsProduct::class,'c_2_1_1_generic_id_no','c_1_1_1_generic_id_no')->orderBy('c_2_1_4_display_at');
	}
	
	
		public function meds_prices()
	{
		return $this->hasmany(MedsPrice::class,'c_2_2_1_generic_id_no','c_1_1_1_generic_id_no')->select('c_2_2_1_generic_id_no','generic_med_image','generic_med_image_alt_tag','branded_med_image','branded_icon_alt_tag','c_2_2_7_g_name_in_h3_tag','c_2_2_29_b_name_in_h3_tag');
	}
}
