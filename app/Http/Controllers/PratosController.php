<?php

namespace App\Http\Controllers;

use App\Models\Prato;
use Illuminate\Http\Request;

class PratosController extends Controller
{

    public function index()
    {
        $pratos = Prato::all();
        return view('pratos.index', ['pratos' => $pratos]);
    }
    public function create()
    {
        return view('pratos.create');
    }

    public function store(Request $request)
    {
        Prato::create($request->all());
        return redirect()->route('prato.index');
    }
    public function edit($id)
    {
        $prato = Prato::find($id);
        return view('pratos.edit', ['prato' => $prato]);

    }
    public function update(Request $request, $id)
    {
        $data = [
            'nome' => $request->nome,
            'descricao' => $request->descricao,
            'valor' => $request->valor
        ];

        Prato::where('id', $id)->update($data);
        return redirect()->route('prato.index');
    }
    public function destroy($id)
    {
        Prato::destroy($id);
        return redirect()->route('prato.index');

    }

}
