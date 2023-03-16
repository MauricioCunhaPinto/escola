<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'turno',
        'qtd_aluno',
        'sala',
    ];

    public function alunos()
    {
        return $this->hasMany(Aluno::class, 'serie_id', 'id');
    }

    public function professor_serie()
    {
        return $this->hasMany(Professor_serie::class, 'serie_id', 'id');
    }
}
