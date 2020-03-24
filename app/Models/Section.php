<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Course;
use App\Models\Module;

class Section extends Model
{
    protected $fillable = [
        'title', 'description', 'course_id'
    ];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
    public function modules()
    {
        return $this->hasMany(Module::class);
    }
}
