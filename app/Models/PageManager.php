<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PageManager extends Model
{
    use HasFactory;
    protected $table='page_managers';
    protected $fillable=['menu_name','menu_slug','position','feature_image','page_content','redirect_url','status'];
}
