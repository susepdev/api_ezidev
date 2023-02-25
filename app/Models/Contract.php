<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    use HasFactory;
    protected $table = 'contract';
    protected $fillable = [
        'contract_no',
        'customer_id',
        'sla_response_id',
        'sla_resolve_id',
        'sla_resolution_id',
        'sla_pm_id',
        'start_date',
        'end_date',
        'renewal_status',
        'is_active',
        'updated_by'
    ];

    public function customer(){
        return $this->belongsTo(Customer::class);
    }

    public function sla_response(){
        return $this->belongsTo(SlaResponse::class);
    }

    public function sla_resolve(){
        return $this->belongsTo(SlaResolve::class);
    }

    public function sla_resolution(){
        return $this->belongsTo(SlaResolution::class);
    }

    public function sla_pm(){
        return $this->belongsTo(SlaPm::class);
    }
}
