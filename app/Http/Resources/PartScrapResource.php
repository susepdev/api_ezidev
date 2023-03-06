<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PartScrapResource extends JsonResource
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
            'part_scrap_no' => $this->part_nopart_scrap_no,
            'part_no' => $this->part_no,
            'part_name' => $this->part_name,
            'quantity' => $this->quantity,
            'last_part_status_id' => $this->last_part_status_id,
            'notes' => $this->notes,
            'updated_by' => $this->updated_by
        ];
    }
}
