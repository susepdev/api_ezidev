<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PartUsageResource extends JsonResource
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
            'rr_ticket_no' => $this->rr_ticket_no,
            'part_name' => $this->part_name,
            'part_quantity' => $this->part_quantity,
            'last_updated' => $this->updated_at,
            'updated_by' => $this->updated_by
        ];
    }
}
