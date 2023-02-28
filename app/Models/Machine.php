<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Machine extends Model
{
    use HasFactory;
    protected $table = 'machine';
    protected $fillable = [
        'ws_id',
        'location_name',
        'location_adr',
        'customer_id',
        'contract_id',
        'pm_period_id',
        'operation_hour_id',
        'service_base_id',
        'is_active',
        'updated_by'
    ];

    public function customer(){
        return $this->belongsTo(Customer::class);
    }

    public function contract(){
        return $this->belongsTo(Contract::class);
    }

    public function pm_period(){
        return $this->belongsTo(PmPeriod::class);
    }

    public function operation_hour(){
        return $this->belongsTo(OperationHour::class);
    }

    public function service_base(){
        return $this->belongsTo(ServiceBase::class);
    }
}
