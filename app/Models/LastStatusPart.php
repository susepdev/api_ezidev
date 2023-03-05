<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LastStatusPart extends Model
{
    use HasFactory;
    protected $table = 'last_status_part';
    protected $fillable = [
        'sq_no',
        'so_ticket_no',
        'pr_ticket_no',
        'rr_ticket_no',
        'part_status_id',
        'notes',
        'updated_by',
    ];
}
