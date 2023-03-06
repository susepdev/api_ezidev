<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PartTransfer extends Model
{
    use HasFactory;
    protected $table = 'part_transfer';
    protected $fillable = [
        'part_transfer_no',
        'location_id',
        'part_type_id',
        'part_type_name',
        'part_no',
        'part_sn',
        'quantity',
        'last_part_status_id',
        'notes',
        'updated_by'
    ];
}
