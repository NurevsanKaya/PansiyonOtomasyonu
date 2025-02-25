<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rezervations extends Model
{
    protected $table = 'rezervations';
    protected $fillable = [
        'user_id',
        'room_id',
        'check_in',
        'check_out',
        'total_price',
        'status',
        'payment_type',
        'created_at',
        'update_at'
    ];
}
