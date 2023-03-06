<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PartTransferResource extends JsonResource
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
            'part_transfer_no' => $this->part_transfer_no,
            'location_id' => $this->location_id,
            'part_type_id' => $this->part_type_id,
            'part_type_name' => $this->part_type_name,
            'part_no' => $this->part_no,
            'part_sn' => $this->part_sn,
            'quantity' => $this->quantity,
            'last_part_status_id' => $this->last_part_status_id,
            'notes' => $this->notes,
            'last_updated' => $this->updated_at,
            'updated_by' => $this->updated_by
        ];
    }
}
