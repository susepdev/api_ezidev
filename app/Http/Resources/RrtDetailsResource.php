<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class RrtDetailsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'rr_ticket_no' => $this->rr_ticket_no,
            'so_ticket_no' => $this->so_ticket_no,
            'pr_ticket_no' => $this->pr_ticket_no,
            'part_id' => $this->part_id,
            'part_name' => $this->part_name,
            'part_sn' => $this->part_sn,
            'customer_id' => $this->customer_id,
            'service_type_id' => $this->service_type_id,
            'contract_id' => $this->contract_id,
            'created_date' => $this->created_date,
            'accepted_date' => $this->accepted_date,
            'repair_center_engineer_id' => $this->repair_center_engineer_id,
            'repair_started_date' => $this->repair_started_date,
            'repair_action' => $this->repair_action,
            'part_usage_id' => $this->part_usage_id,
            'part_usage_name' => $this->part_usage_name,
            'part_usage_quantity' => $this->part_usage_quantity,
            'last_repaired_part_status' => $this->last_repaired_part_status,
            'last_repaired_progress_status' => $this->last_repaired_progress_status,
            'repair_stopped_date' => $this->repair_stopped_date,
            'part_return_notes' => $this->part_return_notes,
            'part_return_date' => $this->part_return_date,
            'last_status_work_id' => $this->last_status_work_id,
            'ticket_duration' => $this->ticket_duration,
            'last_updated' => $this->updated_at,
            'updated_by' => $this->updated_by
        ];
    }
}
