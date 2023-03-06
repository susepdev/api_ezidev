<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PartInventory extends Model
{
    use HasFactory;
    protected $table = 'part_inventory';
    protected $fillable = [
        'part_no',
        'part_name',
        'part_desc',
        'machine_model',
        'part_type',
        'part_sn',
        'part_status',
        'part_location',
        'bin_location',
        'quantity',
        'updated_by'
    ];
}
