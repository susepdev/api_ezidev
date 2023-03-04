<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PrtDetailsResource extends JsonResource
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
            'part_request_ticket_no' => $this->part_request_ticket_no,
            'service_order_ticket_no' => $this->service_order_ticket_no,
            'customer_name' => $this->customer_name,
            'machine_id' => $this->machine_id,
            'service_engineer_id' => $this->service_engineer_id,
            'problem_finding' => $this->problem_finding,
            'error_code' => $this->error_code,
            'last_requested_part_id' => $this->last_requested_part_id,
            'quantity' => $this->quantity,
            'logistic_staff_id' => $this->logistic_staff_id,
            'last_status_work_id' => $this->last_status_work_id,
            'ticket_duration' => $this->ticket_duration,
            'approval_by' => $this->approval_by,
            'approval_date' => $this->approval_date,
            'created_date' => $this->created_date,
            'part_waiting_preparation_notes' => $this->part_waiting_preparation_notes,
            'accepted_date' => $this->accepted_date,
            'prepared_part_no' => $this->prepared_part_no,
            'prepared_part_quantity' => $this->prepared_part_quantity,
            'prepared_by' => $this->prepared_by,
            'part_on_preparation_notes' => $this->part_on_preparation_notes,
            'part_preparation_date' => $this->part_preparation_date,
            'delivery_courier_id' => $this->delivery_courier_id,
            'tracking_no' => $this->tracking_no,
            'part_delivery_date' => $this->part_delivery_date,
            'part_eta' => $this->part_eta,
            'delivery_by' => $this->delivery_by,
            'received_part_date' => $this->received_part_date,
            'part_received_status' => $this->part_received_status,
            'last_updated' => $this->updated_at,
            'updated_by' => $this->updated_by
        ];
    }
}
