<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'has_child', 'slug', 'status', 'image'];
    protected $table = 'menus';




    public function subMenu(){
        return $this->hasMany(SubMenu::class)->where('is_active', 1);
    }


}
