<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PartInventoryResource extends JsonResource
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
            'part_no' => $this->part_no,
            'part_name' => $this->part_name,
            'part_desc' => $this->part_desc,
            'machine_model' => $this->machine_model,
            'part_type' => $this->part_type,
            'part_sn' => $this->part_sn,
            'part_status' => $this->part_status,
            'part_location' => $this->part_location,
            'bin_location' => $this->bin_location,
            'quantity' => $this->quantity,
            'last_updated' => $this->updated_at,
            'updated_by' => $this->updated_by
        ];
    }
}
