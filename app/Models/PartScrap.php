<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PartScrap extends Model
{
    use HasFactory;
    protected $table = 'part_scrap';
    protected $fillable = [
        'part_scrap_no',
        'part_no',
        'part_name',
        'quantity',
        'last_part_status_id',
        'notes',
        'updated_by'
    ];
}
