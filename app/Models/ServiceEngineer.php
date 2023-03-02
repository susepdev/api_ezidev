<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceEngineer extends Model
{
    use HasFactory;
    protected $table = 'service_engineer';
    protected $fillable = [
        'user_id',
        'se_id',
        'hp_no',
        'team_leader_id',
        'is_active',
        'service_base_id',
        'region_id',
        'updated_by'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function team_leader()
    {
        return $this->belongsTo(TeamLeader::class);
    }

    public function service_base()
    {
        return $this->belongsTo(ServiceBase::class);
    }

    public function region()
    {
        return $this->belongsTo(Region::class);
    }
}
