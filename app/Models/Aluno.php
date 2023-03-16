<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'responsavel',
        'contato',
        'serie_id',
    ];

    public function serie()
    {
        return $this->belongsTo(Serie::class);
    }
}
