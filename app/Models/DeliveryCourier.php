<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeliveryCourier extends Model
{
    use HasFactory;
    protected $table = 'delivery_courier';
    protected $fillable = [
        'name',
        'desc',
        'is_active',
        'updated_by',
    ];
}
