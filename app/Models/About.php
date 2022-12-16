<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class About extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'title',
        'description',
        'sort_description',
        'image',
        'logo',
        'phone',
        'email',
        'address',
        'link_tokped',
        'link_shopee',
        'link_wa',
    ];

    protected $searchableFields = ['*'];
}
