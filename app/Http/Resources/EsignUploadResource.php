<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class EsignUploadResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $url = url('').'/images/esign_image/'.$this->e_sign_image;
        return [
            'id' => $this->id,
            'so_ticket_no' => $this->so_ticket_no,
            'date_created' => $this->created_at,
            'e_sign_image' => $url,
            'last_updated' => $this->updated_at,
            'updated_by' => $this->updated_by,
        ];
    }
}
