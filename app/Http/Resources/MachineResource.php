<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class MachineResource extends JsonResource
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
            'ws_id' => $this->ws_id,
            'location_name' => $this->location_name,
            'location_adr' => $this->location_adr,
            'customer_id' => $this->customer->id,
            'contract_id' => $this->contract->id,
            'pm_period_id' => $this->pm_period->id,
            'operation_hour_id' => $this->operation_hour->id,
            'service_base_id' => $this->service_base->id,
            'is_active' => $this->is_active,
            'last_updated' => $this->updated_at,
            'updated_by' => $this->updated_by
        ];
    }
}
