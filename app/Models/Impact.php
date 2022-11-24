<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Impact extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'published_at' => 'datetime',
        'event_date' => 'datetime',
    ];

    public function scopePublished(Builder $builder): Builder
    {
        return $builder->whereNotNull('published_at');
    }
}
