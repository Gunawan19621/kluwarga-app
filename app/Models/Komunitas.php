<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Komunitas extends Model
{
    use HasFactory;
    protected $table = 'komunitas', $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
