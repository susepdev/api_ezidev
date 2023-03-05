<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PartReceived extends Model
{
    use HasFactory;
    protected $table = 'part_received';
    protected $fillable = [
        'so_ticket_no',
        'pr_ticket_no',
        'rr_ticket_no',
        'part_order_request_no',
        'supplier_id',
        'supplier_name',
        'part_no',
        'part_name',
        'part_sn',
        'quantity',
        'updated_by'
    ];
}
