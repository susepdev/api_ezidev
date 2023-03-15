<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
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
            'user_id' => $this->user_id,
            'alias' => $this->alias,
            'name' => $this->name,
            'role' => $this->role,
            'is_active' => $this->is_active,
            'adr' => $this->adr,
            'city' => $this->city,
            'prov' => $this->prov,
            'service_base_id' => $this->service_base_id,
            'time_zone_id' => $this->time_zone->name ?? '',
            'email' => $this->email,
            'last_updated' => $this->updated_at,
            'updated_by' => $this->updated_by
        ];
    }
}
