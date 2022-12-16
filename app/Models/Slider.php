<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Slider extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = ['badge', 'title', 'button', 'link', 'image'];

    protected $searchableFields = ['*'];
}
