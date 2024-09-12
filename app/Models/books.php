<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; // Correct import for SoftDeletes trait

class Books extends Model
{
    use SoftDeletes;

    // Tentukan bahwa kolom 'deleted_at' akan diisi secara otomatis saat soft delete
    protected $dates = ['deleted_at'];

    // Tentukan atribut lain jika ada
    protected $fillable = ['title', 'author', 'publisher', 'published_year', 'isbn', 'pages', 'status'];
}