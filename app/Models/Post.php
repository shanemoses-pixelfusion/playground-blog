<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasTimestamps;
use Jenssegers\Mongodb\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    use HasTimestamps;

    protected $fillable = [
        'title',
        'slug',
        'body',
        'published',
        'user_id',
    ];

    /**
     * User which post belongs to
     *
     * @return BelongsTo
     */
    public function user() : BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}