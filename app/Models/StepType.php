<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StepType extends Model
{
    protected $fillable = [
        'title', 'description', 'title_en', 'description_en',
    ];
    
}
