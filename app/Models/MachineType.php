<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MachineType extends Model
{
    use HasFactory;
    protected $table = 'machine_type';
    protected $fillable = [
        'alias', 
        'name', 
        'desc', 
        'is_active', 
        'updated_by'
    ];
}
