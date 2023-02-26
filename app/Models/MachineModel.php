<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MachineModel extends Model
{
    use HasFactory;
    protected $table = 'machine_model';
    protected $fillable = [
        'name', 
        'desc', 
        'is_active', 
        'updated_by'
    ];
}
