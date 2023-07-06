<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedsKeyword extends Model
{
    use HasFactory;
    protected  $fillable = ['generic_id_no','generic_name','frontend_url','other_names'];
}
