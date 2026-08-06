<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Training extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'title', 'slug', 'description', 'objectives', 
        'start_date', 'end_date', 'location', 'type',
        'instructor', 'price', 'quota', 'participants_count',
        'registration_deadline', 'is_published', 'image',
        'contact_person', 'contact_phone', 'contact_email'
    ];

    protected $casts = [
        'start_date' => 'datetime',
        'end_date' => 'datetime',
        'registration_deadline' => 'datetime',
        'is_published' => 'boolean',
        'price' => 'decimal:2'
    ];

    // public function registrations()
    // {
    //     return $this->hasMany(TrainingRegistration::class);
    // }

    public function isFull()
    {
        if (!$this->quota) return false;
        return $this->participants_count >= $this->quota;
    }

    public function isRegistrationOpen()
    {
        if (!$this->registration_deadline) return true;
        return $this->registration_deadline > now();
    }
}