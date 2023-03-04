<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LogisticStaff extends Model
{
    use HasFactory;
    protected $table = 'logistic_staff';
    protected $fillable = [
        'user_id',
        'staff_id',
        'alias',
        'name',
        'team_leader_id',
        'is_active',
        'time_zone_id',
        'updated_by'
    ];
}
