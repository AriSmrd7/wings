<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $table = 'cart';
    protected $keyType = 'string';
    protected $fillable = [
        'productCode',
        'price',
        'qty',
    ];
}
