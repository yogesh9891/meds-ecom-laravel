<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PromoDiscount extends Model
{
    use HasFactory,SoftDeletes;
    protected $table = '12-promo-discount';
}
