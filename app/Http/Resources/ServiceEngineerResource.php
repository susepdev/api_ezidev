<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ServiceEngineerResource extends JsonResource
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
            'user_id' => $this->user->user_id,
            'se_id' => $this->se_id,
            'alias' => $this->user->alias,
            'name' => $this->user->name,
            'hp_no' => $this->hp_no,
            'tl_id' => $this->team_leader->tl_id,
            'is_active' => $this->is_active,
            'service_base_id' => $this->service_base_id,
            'region_id' => $this->region_id,
            'time_zone_id' => $this->user->time_zone->name,
            'last_updated' => $this->updated_at,
            'updated_by' => $this->updated_by
        ];
    }
}
