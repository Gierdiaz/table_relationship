<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Preference extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [

        'notify_emails',
        'notify',
        'description',
        'title',
        'address',
        'number',
        'difficult'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
