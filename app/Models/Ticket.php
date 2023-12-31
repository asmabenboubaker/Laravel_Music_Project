<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;
    protected $table = 'ticket';
    protected $primaryKey = 'id';
    protected $fillable = [
        'prix',
        'date_achat',
        'event_id',
        'user_id',
        
    ];
    public function event()
    {
        return $this->belongsTo(Type::class, 'event_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
