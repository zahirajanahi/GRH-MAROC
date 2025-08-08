<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobOffer extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'sector',
        'description',
        'contract_type',
        'education_level',
        'experience_years',
        'city',
        'address',
        'publication_date',
    ];
}
