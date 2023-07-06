<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class HomeCriticalDiseases extends Model
{
    use HasFactory,SoftDeletes;
    protected $table = '3-4-critical-diseases';

     

      public function crtical_medicines()
    {
        return $this->hasMany(CriticalMedicine::class,'critical_disease_id','id');
    }

	
}
