<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RrtStatusWork extends Model
{
    use HasFactory;
    protected $table = 'rrt_statuswork';
    protected $fillable = [
        'sq_no',
        'rr_ticket_no',
        'status_work_id',
        'notes',
        'updated_by',
    ];
}
