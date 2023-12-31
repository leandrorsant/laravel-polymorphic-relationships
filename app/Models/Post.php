<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        "name"
    ];

    public function images() : MorphToMany
    {
        return $this->morthToMany(Image::class,"imageable");
    }
}
