<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PartOrderRequest extends Model
{
    use HasFactory;
    protected $table = 'part_order_request';
    protected $fillable = [
        'part_order_request_no',
        'part_no',
        'part_name',
        'quantity',
        'notes',
        'supporting_doc',
        'updated_by'
    ];
}
