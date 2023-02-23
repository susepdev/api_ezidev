<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Timezone extends Model
{
    use HasFactory;

    protected $table = 'time_zone';
    protected $fillable = [
        'name', 'last_update', 'updated_by'
    ];
}
