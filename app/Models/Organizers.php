<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organizers extends Model
{

    use HasFactory;

    protected $table = 'organizers';
    protected $primaryKey = 'organizer_id';
    protected $fillable = [

        'name',
        'username',
        'phone',
        'role',
        'organizer_image',
        
    ];

}
