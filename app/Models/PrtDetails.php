<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrtDetails extends Model
{
    use HasFactory;
    protected $table = 'prt_details';
    protected $fillable = [
        'part_request_ticket_no',
        'service_order_ticket_no',
        'customer_name',
        'machine_id',
        'service_engineer_id',
        'problem_finding',
        'error_code',
        'last_requested_part_id',
        'quantity',
        'logistic_staff_id',
        'last_status_work_id',
        'ticket_duration',
        'approval_by',
        'approval_date',
        'created_date',
        'part_waiting_preparation_notes',
        'accepted_date',
        'prepared_part_no',
        'prepared_part_quantity',
        'prepared_by',
        'part_on_preparation_notes',
        'part_preparation_date',
        'delivery_courier_id',
        'tracking_no',
        'part_delivery_date',
        'part_eta',
        'delivery_by',
        'received_part_date',
        'part_received_status',
        'updated_by'
    ];
}
