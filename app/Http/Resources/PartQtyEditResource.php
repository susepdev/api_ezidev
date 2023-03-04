<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PartQtyEditResource extends JsonResource
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
            'part_sn' => $this->part_sn,
            'notes' => $this->notes,
            'supporting_doc' => $this->supporting_doc,
            'updated_by' => $this->updated_by
        ];
    }
}
