<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    protected $fillable = [
        'job_offer_id',
        'full_name',
        'email',
        'phone',
        'cv',
        'message',
    ];

    public function jobOffer()
    {
        return $this->belongsTo(\App\Models\JobOffer::class);
    }
}
