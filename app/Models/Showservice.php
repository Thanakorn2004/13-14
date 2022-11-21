<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Showservice extends Model
{

    use HasFactory;

    protected $teble = 'showservices';

    protected $fillable = [

        'name',
        'details'

    ];

}
