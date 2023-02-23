<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entity extends Model
{
    use HasFactory;
    protected $table = 'entity';
    protected $fillable = [
        'alias', 'name', 'desc', 'is_active', 'adr', 'prov', 'owner', 'hp', 'updated_by'
    ];
}
