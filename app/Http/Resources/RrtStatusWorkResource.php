<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class RrtStatusWorkResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'sq_no' => $this->sq_no,
            'rr_ticket_no' => $this->rr_ticket_no,
            'status_work_id' => $this->status_work_id,
            'date_created' => $this->created_at,
            'notes' => $this->notes,
            'last_updated' => $this->updated_at,
            'updated_by' => $this->updated_by,
        ];
    }
}
