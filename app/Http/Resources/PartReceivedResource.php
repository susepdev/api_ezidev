<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PartReceivedResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'if' => $this->if,
            'so_ticket_no' => $this->so_ticket_no,
            'pr_ticket_no' => $this->pr_ticket_no,
            'rr_ticket_no' => $this->rr_ticket_no,
            'part_order_request_no' => $this->part_order_request_no,
            'supplier_id' => $this->supplier_id,
            'supplier_name' => $this->supplier_name,
            'part_no' => $this->part_no,
            'part_name' => $this->part_name,
            'part_sn' => $this->part_sn,
            'quantity' => $this->quantity,
            'last_updated' => $this->updated_at,
            'updated_by' => $this->updated_by
        ];
    }
}
