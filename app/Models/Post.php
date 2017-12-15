<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasTimestamps;
use Jenssegers\Mongodb\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

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
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Topics related to post
     *
     * @return BelongsToMany
     */
    public function topics(): BelongsToMany
    {
        return $this->belongsToMany(Topic::class)->withTimestamps();
    }

    /**
     * Get the route key for the model
     *
     * @return string
     */
    public function getRouteKeyName(): string
    {
        return 'slug';
    }
}
