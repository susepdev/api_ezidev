<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PartReturnedResource extends JsonResource
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
            'part_name' => $this->part_name,
            'part_sn' => $this->part_sn,
            'part_no' => $this->part_no,
            'part_return_notes' => $this->part_return_notes,
            'part_return_date' => $this->part_return_date,
            'last_updated' => $this->updated_at,
            'updated_by' => $this->updated_by
        ];
    }
}
