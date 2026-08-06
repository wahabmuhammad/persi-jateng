<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Event extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'title', 'slug', 'description', 'date', 'time', 
        'end_date', 'location', 'type', 'image', 
        'is_published', 'views', 'capacity', 'price',
        'contact_person', 'contact_phone', 'contact_email'
    ];

    protected $casts = [
        'date' => 'datetime',
        'end_date' => 'datetime',
        'is_published' => 'boolean',
        'price' => 'decimal:2'
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function scopeUpcoming($query)
    {
        return $query->where('date', '>=', now())->where('is_published', true);
    }
}