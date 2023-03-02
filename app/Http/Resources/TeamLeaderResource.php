<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TeamLeaderResource extends JsonResource
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
            'tl_id' => $this->tl_id,
            'mgr_id' => $this->manager->mgr_id,
            'alias' => $this->user->alias,
            'name' => $this->user->name,
            'is_active' => $this->is_active,
            'time_zone_id' => $this->user->time_zone->name,
            'last_updated' => $this->updated_at,
            'updated_by' => $this->updated_by
        ];
    }
}
