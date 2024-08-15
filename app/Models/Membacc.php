<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Membacc extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'password',
        'repeat_password',
        'memb_id',
        
    ];
}
