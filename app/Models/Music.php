<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Music extends Model
{
    use HasFactory;

    protected $table = 'musics';
    protected $primaryKey = 'id';
    protected $fillable = ['title', 'artist', 'album','audio','type_id'];


    public function type()
    {
        return $this->belongsTo(Type::class, 'type_id');
    }



}
