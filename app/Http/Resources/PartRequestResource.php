<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PartRequestResource extends JsonResource
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
            'prt_no' => $this->prt_no,
            'sot_no' => $this->sot_no,
            'part_no' => $this->part_no,
            'part_name' => $this->part_name,
            'last_updated' => $this->updated_at,
            'updated_by' => $this->updated_by
        ];
    }
}
