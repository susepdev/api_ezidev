<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PartReturned extends Model
{
    use HasFactory;
    protected $table = 'part_returned';
    protected $fillable = [
        'rr_ticket_no',
        'part_name',
        'part_sn',
        'part_no',
        'part_return_notes',
        'part_return_date',
        'updated_by'
    ];
}
