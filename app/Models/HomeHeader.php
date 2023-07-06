<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class HomeHeader extends Model
{
    use HasFactory,SoftDeletes;
    protected $table = '3-1-home-header';
}
