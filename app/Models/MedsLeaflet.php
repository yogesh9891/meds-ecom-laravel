<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedsLeaflet extends Model
{
    use HasFactory;
    protected $table = '1-3-meds-leaflets';
         protected $fillable = ['c_1_3_1_generic_id_no','c_1_3_3_language'];  
}
