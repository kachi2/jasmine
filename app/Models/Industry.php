<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Industry extends Model
{
    use HasFactory;

    protected $table = 'industries';
    protected $fillable = ['name'];

    
    public function ClientJobs(){
        return $this->hasMany(ClientJob::class);
    }

}
