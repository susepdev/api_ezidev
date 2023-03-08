<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrtFileUpload extends Model
{
    use HasFactory;
    protected $table = 'prt_fileupload';
    protected $fillable = [
        'pr_ticket_no',
        'uploaded_file',
        'status_work',
        'updated_by'
    ];
}
