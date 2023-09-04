<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'video'
    ];

    //Uma lição pertece apenas a um único módulo (belongs to module)
    public function module()
    {
        return $this->belongsTo(Module::class);
    }

}
