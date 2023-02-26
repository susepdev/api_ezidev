<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class OperationHourResource extends JsonResource
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
            'desc' => $this->desc,
            'open_hour' => $this->open_hour,
            'close_hour' => $this->close_hour,
            'days' => $this->days,
            'is_active' => $this->desc,
            'updated_by' => $this->updated_by,
            'last_updated' => $this->updated_at
        ];
    }
}
