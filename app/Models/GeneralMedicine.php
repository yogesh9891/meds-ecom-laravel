<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GeneralMedicine extends Model
{
    use HasFactory;

     public function general_disease()
    {
    	return $this->belongsTo(HomeGeneralDiseases::class,'general_disease_id','id');
    }

     public function generic_medcine_info()
    {
    	return $this->belongsTo(MedsInfo::class,'generic_med_no','c_1_1_1_generic_id_no');
    }
}
