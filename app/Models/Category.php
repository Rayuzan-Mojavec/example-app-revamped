<?php

namespace App\Models;

use App\Models\Blog;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    public $table = "categories";
    protected $fillable = [
        'category_name',
    ];
    public $timestamps = false;

    public function blogs()
    {
        return $this->hasMany(Blog::class);
    }
}
