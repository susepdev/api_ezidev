<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PrtFileUploadResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $url = url('').'/images/prt_uploaded_file/'.$this->uploaded_file;
        return [
            'id' => $this->id,
            'pr_ticket_no' => $this->pr_ticket_no,
            'uploaded_file' => $url,
            'date_created' => $this->created_at,
            'status_work' => $this->status_work,
            'last_updated' => $this->updated_at,
            'updated_by' => $this->updated_by
        ];
    }
}
