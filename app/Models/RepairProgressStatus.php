<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RepairProgressStatus extends Model
{
    use HasFactory;
    protected $table = 'repair_progress_status';
    protected $fillable = [
        'name',
        'sq_no',
        'desc',
        'date_created',
        'is_active',
        'updated_by'
    ];
}
