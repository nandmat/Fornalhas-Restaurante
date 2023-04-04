<?php

namespace App\Http\Controllers;

use App\Models\Funcionario;
use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{

    public function create(){
        return view('user.create');
    }
    public function store(Request $request){


       $user = [
            'cpf' => $request->cpf,
            'status' => true
        ];

        json_encode($user);

        $newUser = User::create($user);


        $funcionario = [
            'name' => $request->name,
            'funcao' => $request->funcao,
            'users_id' => $newUser->id,
            'status' => true,
            'salario' => $request->salario
        ];
        json_encode($funcionario);
        Funcionario::create($funcionario);
        return redirect()->route('users.funcionarios.index');
    }

    public function destroy($id, $users_id){
        Funcionario::destroy($id);
        User::destroy($users_id);

        return redirect()->route('users.funcionarios.index');

    }
}
