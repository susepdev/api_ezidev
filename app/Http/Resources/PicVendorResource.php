<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PicVendorResource extends JsonResource
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
            'alias' => $this->alias,
            'name' => $this->name,
            'no_hp' => $this->no_hp,
            'is_active' => $this->is_active,
            'last_updated' => $this->updated_at,
            'updated_by' => $this->updated_by
        ];
    }
}
