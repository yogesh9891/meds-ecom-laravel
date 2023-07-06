<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MedsQuestion extends Model
{
    use HasFactory,SoftDeletes;
protected $table = '1-2-meds-info';

}