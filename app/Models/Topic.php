<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasTimestamps;
use Jenssegers\Mongodb\Eloquent\Model;

class Topic extends Model
{
    use HasTimestamps;

    protected $fillable = [
        'name',
    ];
}
