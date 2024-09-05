<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; // Correct import for SoftDeletes trait

class Books extends Model
{
    use SoftDeletes; // Apply the SoftDeletes trait

    protected $fillable = [
        'title', 'author', 'publisher', 'published_year', 'isbn', 'pages', 'status',
    ];

    // If needed, declare $dates for deleted_at
    protected $dates = ['deleted_at']; 
}