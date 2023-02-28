<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class RepairedPartStatusResource extends JsonResource
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
            'sq_no' => $this->sq_no,
            'desc' => $this->desc,
            'date_created' => $this->date_created,
            'is_active' => $this->is_active,
            'last_updated' => $this->updated_at,
            'updated_by' => $this->updated_by,
        ];
    }
}
