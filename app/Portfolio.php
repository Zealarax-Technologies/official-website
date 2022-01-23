<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;
    protected  $fillable = [
        'title',
        'product_name',
        'description',
        'url',
        'featured_image',
        'service_id',
        'slug',
        'ui_position_x',
    ];
}

