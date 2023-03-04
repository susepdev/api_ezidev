<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RrtDetails extends Model
{
    use HasFactory;
    protected $table = 'rrt_details';
    protected $fillable = [
        'rr_ticket_no',
        'so_ticket_no',
        'pr_ticket_no',
        'part_id',
        'part_name',
        'part_sn',
        'customer_id',
        'service_type_id',
        'contract_id',
        'created_date',
        'accepted_date',
        'repair_center_engineer_id',
        'repair_started_date',
        'repair_action',
        'part_usage_id',
        'part_usage_name',
        'part_usage_quantity',
        'last_repaired_part_status',
        'last_repaired_progress_status',
        'repair_stopped_date',
        'part_return_notes',
        'part_return_date',
        'last_status_work_id',
        'ticket_duration',
        'updated_by'
    ];
}
