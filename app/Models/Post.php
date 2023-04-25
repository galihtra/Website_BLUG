<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model
{
    use HasFactory;
    // use Sluggable;

    protected $fillable = ['user_id','title', 'category_id', 'image', 'slug', 'excerpt', 'body'];
    // protected $with = ['category', 'author'];

    // public function scopeFilter($query, array $filters)
    // {
    //     // menggunakan when
    //     // use digunakan agar paramater $search terpanggil
    //     $query->when($filters['search'] ?? false, function($query, $search) {
    //         return $query->where(function($query) use ($search) {
    //              $query->where('title', 'like', '%' . $search . '%')
    //                          ->orWhere('body', 'like', '%' . $search . '%');
    //          });
    //      });

    //     //  mencari kata kunci dan di kategori yg sama
    //     $query->when($filters['category'] ?? false, function($query, $category) {
    //         return $query->whereHas('category', function($query) use ($category) {
    //             $query->where('slug', $category);
    //         });
    //     });

    //     //  mencari kata kunci dan di author yg sama
    //     $query->when($filters['author'] ?? false, function($query, $author) {
    //         return $query->whereHas('author', function($query) use ($author) {
    //             $query->where('username', $author);
    //         });
    //     });
    // }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    // public function author()
    // {
    //     return $this->belongsTo(User::class, 'user_id');
    // }

    // // setiap route mencari slug bukan id
    // public function getRouteKeyName()
    // {
    //     return 'slug';
    // }

    // public function sluggable(): array
    // {
    //     return [
    //         'slug' => [
    //             'source' => 'title'
    //         ]
    //     ];
    // }

}
