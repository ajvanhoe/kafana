<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    protected $table = 'menu_items';
    protected $fillable = [
        'name_sr',
        'name_en',
        'type',         // food, drink
        'category',        
        'description_sr',
        'description_en',
        'price',
        'image'
    ];






}
