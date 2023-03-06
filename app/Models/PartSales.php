<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PartSales extends Model
{
    use HasFactory;
    protected $table = 'part_sales';
    protected $fillable = [
        'part_sales_no',
        'part_no',
        'part_name',
        'last_part_status_id',
        'quantity',
        'customer_id',
        'customer_name',
        'notes',
        'pic_name',
        'pic_hp',
        'updated_by'
    ];
}
