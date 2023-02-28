<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RepairedPartStatus extends Model
{
    use HasFactory;
    protected $table = 'repaired_part_status';
    protected $fillable = [
        'name',
        'sq_no',
        'desc',
        'date_created',
        'is_active',
        'updated_by'
    ];
}
