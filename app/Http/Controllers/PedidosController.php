<?php

namespace App\Http\Controllers;

use App\Models\Funcionario;
use App\Models\Pedido;
use App\Models\Prato;
use Illuminate\Http\Request;

class PedidosController extends Controller
{

    public function index()
    {
        $pedidos = Pedido::all();
        return view('pedido.index', ['pedidos' => $pedidos]);
    }
    public function create()
    {
        $funcionario = Funcionario::where('funcao', 'ga')->get();
        $pratos = Prato::all();

        return view('pedido.create', ['pratos' => $pratos, 'funcionarios' => $funcionario]);
    }

    public function store(Request $request)
    {
        $data = Prato::find($request->pratos);
        $pedido = [
            'cliente' => $request->cliente,
            'mesa' => $request->mesa,
            'pratos' => $data->id,
            'status_id' => 2,
            'valor' => floatval($data->valor),
            'funcionarios_id' => $request->funcionarios_id
        ];

        json_encode($pedido);


        Pedido::create($pedido);

        return redirect()->route('pedidos.index');
    }
}
