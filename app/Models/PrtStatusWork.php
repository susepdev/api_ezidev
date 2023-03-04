<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrtStatusWork extends Model
{
    use HasFactory;
    protected $table = 'prt_statuswork';
    protected $fillable = [
        'sq_no',
        'pr_ticket_no',
        'status_work_id',
        'date_created',
        'notes',
        'updated_by'
    ];
}
