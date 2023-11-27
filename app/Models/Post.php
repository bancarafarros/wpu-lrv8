<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // protected $fillable = ['title', 'excerpt', 'body']; // field di array boleh diisi, sisanya gk boleh
    protected $guarded = ['id']; // field di array gk boleh diisi, sisanya boleh

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
