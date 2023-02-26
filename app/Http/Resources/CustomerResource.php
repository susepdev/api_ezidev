<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CustomerResource extends JsonResource
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
            'desc' => $this->desc,
            'customer_type_id' => $this->customer_type_id,
            'is_active' => $this->is_active,
            'adr' => $this->adr,
            'prov' => $this->prov,
            'pic' => $this->pic,
            'pic_hp' => $this->pic_hp,
            'last_updated' => $this->updated_at,
            'updated_by' => $this->updated_by
        ];
    }
}
