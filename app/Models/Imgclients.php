<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imgclients extends Model
{
    use HasFactory;

    protected $fillable = ([
        'img_cliente',
        'category_id',
    ]);
}