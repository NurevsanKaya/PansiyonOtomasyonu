<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $table = 'rooms';

    protected $fillable = [
        'room_number',
        'type',
        'price',
        'status',
        'capacity',
        'bad_count',
        'size',
        'room_amenity_id',//olanaklar wifi gibi
        'description',
        'created_at',
        'update_at'
    ];
}
