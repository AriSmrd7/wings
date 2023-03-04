<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionDetail extends Model
{
    use HasFactory;

    public $table = 'transaction_detail';
    public $primaryKey = NULL;
    public $incrementing = FALSE;
    public $keyType = 'string';
    public $fillable = [
        'trxNo',
        'trxCode',
        'productCode',
        'price',
        'qty',
        'unit',
        'subtotal',
        'currency',
    ];
}
