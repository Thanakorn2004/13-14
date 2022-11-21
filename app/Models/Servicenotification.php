<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicenotification extends Model
{
    use HasFactory;
    protected $teble = 'servicenotifications';
    protected $fillable = ['name','phone','date','image','details'];
}
