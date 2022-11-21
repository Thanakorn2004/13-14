<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Workhistory extends Model
{
    use HasFactory;
    protected $table = 'workhistories';
    protected $fillable = ['name','history','history_image'];
}
