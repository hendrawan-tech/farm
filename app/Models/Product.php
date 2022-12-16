<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'slug',
        'name',
        'price',
        'description',
        'image',
        'category_id',
    ];

    protected $searchableFields = ['*'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
