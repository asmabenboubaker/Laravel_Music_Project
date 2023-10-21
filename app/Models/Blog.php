<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'content', 'category_id','image'];
    protected $table = 'blog';
    public function Categorie()
    {
        return $this->belongsTo(Categorie::class);
    }
    public function comments()
{
    return $this->hasMany(Comment::class);
}

    
}
