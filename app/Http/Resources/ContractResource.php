<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ContractResource extends JsonResource
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
            'contract_no' => $this->contract_no,
            'customer_id' => $this->customer_id,
            'sla_response_name' => $this->sla_response->name,
            'sla_resolve_name' => $this->sla_resolve->name,
            'sla_resolution_name' => $this->sla_resolution->name,
            'sla_pm_id' => $this->sla_pm_id,
            'start_date' => $this->start_date,
            'end_date' => $this->end_date,
            'renewal_status' => $this->renewal_status,
            'is_active' => $this->is_active,
            'last_update' => $this->updated_at,
            'updated_by' => $this->updated_by
        ];
    }
}
