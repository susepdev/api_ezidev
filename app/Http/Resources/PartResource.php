<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PartResource extends JsonResource
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
            'name' => $this->name,
            'part_no' => $this->part_no,
            'part_sn' => $this->part_sn,
            'desc' => $this->desc,
            'bin_location_id' => $this->bin_location_id,
            'part_status_id' => $this->part_status_id,
            'last_repaired_part_status_id' => $this->repaired_part_status_id,
            'is_active' => $this->nais_activeme,
            'last_updated' => $this->updated_at,
            'updated_by' => $this->updated_by
        ];
    }
}
