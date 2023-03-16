<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Professor_serie extends Model
{
    use HasFactory;

    protected $fillable = [
        'professor_id',
        'serie_id',
        'tipo',
    ];

    public function professor()
    {
        return $this->belongsTo(Professor::class, 'professor_id', 'id');
    }

    public function serie()
    {
        return $this->belongsTo(Serie::class, 'serie_id', 'id');
    }
}
