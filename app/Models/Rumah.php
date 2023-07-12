<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Rumah extends Model
{
    use HasFactory;
    protected $table = 'rumahs', $guarded = ['id'];

    public function pengguna(): BelongsTo
    {
        return $this->belongsTo(Pengguna::class, 'pengguna_id', 'id');
    }

    // protected $guarded = ['id'], $table = 'pengaduans';

}
