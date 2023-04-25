<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    // Untuk menjaga hanya id yg tidak boleh di isi
    protected $guarded = ['id'];

    // Relasi ke tabel Post
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}