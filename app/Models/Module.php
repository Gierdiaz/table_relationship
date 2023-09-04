<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    //Um módulo pertence a um único curso (belongs to course)
    public function course()
    {
        return $this->belongsTo(Course::class);
    }


    //Um módulo tem várias lições (has many lessons)
    public function lessons()
    {
        return $this->hasMany(Lesson::class);
    }

}
