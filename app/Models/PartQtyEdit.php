<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PartQtyEdit extends Model
{
    use HasFactory;
    protected $table = 'part_qty_edit';
    protected $fillable = [
        'part_no',
        'part_name',
        'part_sn',
        'notes',
        'supporting_doc',
        'updated_by'
    ];
}
