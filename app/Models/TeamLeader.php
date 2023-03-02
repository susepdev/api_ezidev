<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeamLeader extends Model
{
    use HasFactory;
    protected $table = 'team_leader';
    protected $fillable = [
        'user_id',
        'tl_id',
        'manager_id',
        'is_active',
        'updated_by'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function manager()
    {
        return $this->belongsTo(Manager::class);
    }
}
