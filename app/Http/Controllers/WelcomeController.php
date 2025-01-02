<?php

namespace App\Http\Controllers;

use App\Models\Aluno;

class WelcomeController extends Controller
{
    public function index()
    {
        $alunos = Aluno::with('skills')->get();
        return view('welcome', compact('alunos'));
    }
} 