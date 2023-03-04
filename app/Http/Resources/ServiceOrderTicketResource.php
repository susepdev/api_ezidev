<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ServiceOrderTicketResource extends JsonResource
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
            'so_ticket_no' => $this->so_ticket_no,
            'contract_id' => $this->contract_id,
            'customer_id' => $this->customer_id,
            'service_engineer_id' => $this->service_engineer_id,
            'on_duty_se_id' => $this->on_duty_se_id,
            'on_duty_se_hp' => $this->on_duty_se_hp,
            'entity_id' => $this->entity_id,
            'machine_vendor_id' => $this->machine_vendor_id,
            'machine_model_id' => $this->machine_model_id,
            'machine_id' => $this->machine_id,
            'machine_location' => $this->machine_location,
            'operation_hour_id' => $this->operation_hour_id,
            'operation_hour_name' => $this->operation_hour_name,
            'priority_id' => $this->priority_id,
            'severity_id' => $this->severity_id,
            'service_type_id' => $this->service_type_id,
            'problem_type_id' => $this->problem_type_id,
            'problem_desc' => $this->problem_desc,
            'pic_name' => $this->pic_name,
            'pic_hp' => $this->pic_hp,
            'pic_vendor' => $this->pic_vendor,
            'service_base_id' => $this->service_base_id,
            'reported_date' => $this->reported_date,
            'created_date' => $this->created_date,
            'closed_date' => $this->closed_date,
            'last_status_work_id' => $this->last_status_work_id,
            'problem_finding' => $this->problem_finding,
            'corrective_action' => $this->corrective_action,
            'prt_no' => $this->prt_no,
            'ticket_duration' => $this->ticket_duration,
            'sla_response_id' => $this->sla_response_id,
            'sla_resolve_id' => $this->sla_resolve_id,
            'sla_resolution_id' => $this->sla_resolution_id,
            'last_updated' => $this->updated_at,
            'updated_by' => $this->updated_by
        ];
    }
}
