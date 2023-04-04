<?php

namespace App\Http\Controllers;

use App\Models\Funcionario;
use App\Models\User;
use Illuminate\Http\Request;

class FuncionariosController extends Controller
{
    public function index(){
        $funcinarios = Funcionario::all();

        return view('user.index', ['funcionarios' => $funcinarios]);
    }

}
