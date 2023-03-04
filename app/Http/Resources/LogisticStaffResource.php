<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class LogisticStaffResource extends JsonResource
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
            'staff_id' => $this->staff_id,
            'alias' => $this->alias,
            'name' => $this->name,
            'team_leader_id' => $this->team_leader_id,
            'is_active' => $this->is_active,
            'time_zone_id' => $this->time_zone_id,
            'last_updated' => $this->updated_at,
            'updated_by' => $this->updated_by
        ];
    }
}
