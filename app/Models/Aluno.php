<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'telefone',
        'image',
        'description',
        'company',
        'github'
    ];

    public function skills()
    {
        return $this->belongsToMany(Skill::class);
    }
}
