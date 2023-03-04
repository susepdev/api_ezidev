<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PartOrderRequestResource extends JsonResource
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
            'part_order_request_no' => $this->part_order_request_no,
            'part_no' => $this->part_no,
            'part_name' => $this->part_name,
            'quantity' => $this->quantity,
            'notes' => $this->notes,
            'supporting_doc' => $this->supporting_doc,
            'last_updated' => $this->updated_at,
            'updated_by' => $this->updated_by
        ];
    }
}
