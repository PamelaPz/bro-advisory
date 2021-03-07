<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clients extends Model
{
    use HasFactory;

    protected $fillable = ([
        'h4',
        'span',
        'h4_2',
        'client1',
        'client2',
        'client3',
        'client4',
        'client5',
        'client6',
        'client7',
        'client8',
    ]);
}
