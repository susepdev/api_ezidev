<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PartUsage extends Model
{
    use HasFactory;
    protected $table = 'part_usage';
    protected $fillable = [
        'so_ticket_no',
        'rr_ticket_no',
        'part_name',
        'part_quantity',
        'updated_by'
    ];
}
