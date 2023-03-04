<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PartRequest extends Model
{
    use HasFactory;
    protected $table = 'part_request';
    protected $fillable = [
        'sq_no',
        'prt_no',
        'sot_no',
        'part_no',
        'part_name',
        'updated_by'
    ];
}
