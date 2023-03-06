<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PartSalesResource extends JsonResource
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
            'part_sales_no' => $this->part_sales_no,
            'part_no' => $this->part_no,
            'part_name' => $this->part_name,
            'last_part_status_id' => $this->last_part_status_id,
            'quantity' => $this->quantity,
            'customer_id' => $this->customer_id,
            'customer_name' => $this->customer_name,
            'notes' => $this->notes,
            'pic_name' => $this->pic_name,
            'pic_hp' => $this->pic_hp,
            'last_updated' => $this->updated_at,
            'updated_by' => $this->updated_by
        ];
    }
}
