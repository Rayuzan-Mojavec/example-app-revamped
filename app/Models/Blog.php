<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Blog extends Model
{
    use HasFactory;

    public $table = "blogs";
    protected $fillable = [
        'title',
        'body',
    ];
    public $timestamps = false;
    protected $with = ['categories'];

    public function categories()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false, function ($query, $search) {
            return $query->where(function ($query) use ($search) {
                $query->where('title', 'like', '%' . $search .  '%');
            });
        });

        $query->when($filters['categories'] ?? false, function ($query, $categories) {
            return $query->whereHas('categories', function ($query) use ($categories) {
                $query->where('category_name', $categories);
            });
        });
    }
}
