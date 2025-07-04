<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = ['image', 'contents', 'galleries', 'title', 'views', 'posted_by', 'status'];
    protected $table = 'blogs';
}
