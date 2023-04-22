<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppliedJob extends Model
{
    use HasFactory;

    protected $table = 'applied_jobs';
    protected $fillable = ['client_jobs_id', 'name', 'email', 'phone', 'cv', 'job_info'];

    public function CientJobs(){
        return $this->belongsTo(ClientJob::class, 'client_jobs_id', 'id');
    }
}
