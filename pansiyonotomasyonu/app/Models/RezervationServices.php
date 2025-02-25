<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RezervationServices extends Model
{
    protected $table = 'rezervation_services';
    protected $fillable = [
        'rezervation_id',
        'service_id'
    ];
}
