<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TourismInfo extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'location', 'image_url'];
}

