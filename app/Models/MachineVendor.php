<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MachineVendor extends Model
{
    use HasFactory;
    protected $table = 'machine_vendor';
    protected $fillable = [
        'name',
        'desc',
        'is_active',
        'updated_by',
    ];
}
