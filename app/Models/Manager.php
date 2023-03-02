<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manager extends Model
{
    use HasFactory;
    protected $table = 'manager';
    protected $fillable = [
        'user_id',
        'mgr_id',
        'is_active',
        'updated_by'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
