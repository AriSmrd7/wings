<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transactions extends Model
{
    use HasFactory;

    protected $table = 'transactions';
    protected $primaryKey = 'trxNo';
    protected $keyType = 'string';
    protected $fillable = [
        'trxNo',
        'trxCode',
        'user',
        'total',
        'trxDate',
    ];
}
