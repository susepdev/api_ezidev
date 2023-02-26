<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerType extends Model
{
    use HasFactory;
    protected $table = 'customer_type';
    protected $fillable = [
        'alias', 
        'name', 
        'desc', 
        'is_active', 
        'updated_by'
    ];
}
