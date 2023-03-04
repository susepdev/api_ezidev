<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SotStatusWorkResource extends JsonResource
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
            'sq_no' => $this->sq_no,
            'service_order_ticket_no' => $this->service_order_ticket_no,
            'status_work_id' => $this->status_work_id,
            'date_created' => $this->date_created,
            'notes' => $this->notes,
            'updated_by' => $this->updated_by
        ];
    }
}
