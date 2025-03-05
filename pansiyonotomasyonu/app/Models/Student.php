<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'first_name', 'last_name', 'tc', 'phone', 'email',
        'address_id', 'birth_date', 'registration_date', 'room_id',
         'medical_condition', 'emergency_contact', 'is_active'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function address()
    {
        return $this->belongsTo(Address::class);
    }

    public function room()
    {
        return $this->belongsTo(Room::class);
    }
}
