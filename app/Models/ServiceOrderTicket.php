<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceOrderTicket extends Model
{
    use HasFactory;
    protected $table = 'service_order_ticket';
    protected $fillable = [
        'so_ticket_no',
        'contract_id',
        'customer_id',
        'service_engineer_id',
        'on_duty_se_id',
        'on_duty_se_hp',
        'entity_id',
        'machine_vendor_id',
        'machine_model_id',
        'machine_id',
        'machine_location',
        'operation_hour_id',
        'operation_hour_name',
        'priority_id',
        'severity_id',
        'service_type_id',
        'problem_type_id',
        'problem_desc',
        'pic_name',
        'pic_hp',
        'pic_vendor',
        'service_base_id',
        'reported_date',
        'created_date',
        'closed_date',
        'last_status_work_id',
        'problem_finding',
        'corrective_action',
        'prt_no',
        'ticket_duration',
        'sla_response_id',
        'sla_resolve_id',
        'sla_resolution_id',
        'updated_by'
    ];
}
