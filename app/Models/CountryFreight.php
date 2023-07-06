<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CountryFreight extends Model
{
	protected $table = '4-country-freight';
    use HasFactory,SoftDeletes;
}
