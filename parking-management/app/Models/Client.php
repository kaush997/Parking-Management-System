<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'client',
        'email',
        'phone',
        'register',
        'payment',
        'active_status',
    ];
    use HasFactory;
}
