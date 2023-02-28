<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Part extends Model
{
    use HasFactory;
    protected $table = 'part';
    protected $fillable = [
        'name',
        'part_no',
        'part_sn',
        'desc',
        'bin_location_id',
        'part_status_id',
        'repaired_part_status_id',
        'is_active',
        'updated_by'
    ];
}
