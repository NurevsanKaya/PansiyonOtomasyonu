<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $table = 'payments';
    protected $fillable = [
        'rezervation_id',
        'amount', //ücret
        'payment_method',
        'status',
        'created_at'
    ];
}
