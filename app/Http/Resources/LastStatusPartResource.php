<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class LastStatusPartResource extends JsonResource
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
            'so_ticket_no' => $this->so_ticket_no,
            'pr_ticket_no' => $this->pr_ticket_no,
            'rr_ticket_no' => $this->rr_ticket_no,
            'part_status_id' => $this->part_status_id,
            'date_created' => $this->created_at,
            'notes' => $this->notes,
            'last_updated' => $this->updated_at,
            'updated_by' => $this->updated_by,
        ];
    }
}
