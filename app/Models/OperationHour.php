<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OperationHour extends Model
{
    use HasFactory;
    protected $table = 'operation_hour';
    protected $fillable = [
        'name', 
        'desc', 
        'open_hour', 
        'close_hour', 
        'days', 
        'is_active', 
        'updated_by'
    ];
}
