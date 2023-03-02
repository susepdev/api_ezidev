<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RepairCenterEngineer extends Model
{
    use HasFactory;
    protected $table = 'repair_center_engineer';
    protected $fillable = [
        'rce_id',
        'alias',
        'name',
        'is_active',
        'time_zone_id',
        'updated_by'
    ];
}
