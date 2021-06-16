<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Product extends Model
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'userId',
        'name',
        'category',
        'product_value',
        'description',
        'image',
        'sys_active',
    ];

}
