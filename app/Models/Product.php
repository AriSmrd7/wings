<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';
    protected $primaryKey = 'productCode';
    protected $keyType = 'string';
    protected $fillable = [
        'productCode',
        'productName',
        'productImage',
        'price',
        'currenty',
        'discount',
        'dimension',
        'unit',
    ];
}
