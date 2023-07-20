<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Promotion extends Model
{
    use HasFactory;

    protected $casts
        = [
            'custom_promo'       => 'boolean',
            'status'             => 'string',
        ];
    public const STATUS_LIVE     = 'live';
    public const STATUS_UPCOMING = 'upcoming';
    public const STATUS_ARCHIVED = 'archived';

    public function shops(): BelongsToMany
    {
        return $this->belongsToMany(Shop::class);
    }
}
