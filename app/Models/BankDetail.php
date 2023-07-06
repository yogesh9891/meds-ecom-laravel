<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BankDetail extends Model
{
    use HasFactory,SoftDeletes;
    protected $table = '5-bank-detail';
  protected $fillable = ['c_5_12_usd_rate']; 

	
}
