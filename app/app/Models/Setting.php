<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = [ 'logo', 'site_name', 'site_phone', 'site_email', 'site_copyright', 'footer_menu', 'opening_hours', 'facebook', 'twitter', 'linkedIn', 'instagram', 'address', 'about'];
}
