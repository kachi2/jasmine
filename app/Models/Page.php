<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;


    protected $table = "pages";
    protected $fillable = [
        'sub_menu_id', 'title', 'contents', 'metas', 'links', 'slug', 'menu_id', 'status'
    ];

    public function subMenu(){
        return $this->belongsTo(SubMenu::class);
    }

    public function Menu(){
        return $this->belongsTo(Menu::class);
    }
}
