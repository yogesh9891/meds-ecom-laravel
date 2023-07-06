<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class HomeGeneralDiseases extends Model
{
    use HasFactory,SoftDeletes;
    protected $table = '3-3-general-diseases';
    public function generic_medicines()
    {
        return $this->hasMany(GeneralMedicine::class,'general_disease_id','id');
    }
   
	
}
