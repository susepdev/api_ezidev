<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SotStatusWork extends Model
{
    use HasFactory;
    protected $table = 'sot_status_work';
    protected $fillable = [
        'sq_no',
        'service_order_ticket_no',
        'status_work_id',
        'date_created',
        'notes',
        'updated_by'
    ];
}
