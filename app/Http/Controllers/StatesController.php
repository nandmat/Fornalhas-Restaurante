<?php

namespace App\Http\Controllers;

use App\Models\State;
use Illuminate\Http\Request;

class StatesController extends Controller
{
    public function create(){
        return view('state.create');
    }

    public function store(Request $request){
        State::create($request->all());
        return redirect()->route('status.index');
    }

    public function index()
    {
        $states = State::all();
        return view('state.index', ['states' => $states]);
    }

    public function destroy($id){
        State::destroy($id);
        return redirect()->route('status.index');
    }

    public function edit($id)
    {
        $state = State::find($id);
        return view('state.edit', ['state' => $state]);

    }
    public function update(Request $request, $id)
    {
        $data = [
            'status' => $request->status,
        ];

        State::where('id', $id)->update($data);
        return redirect()->route('status.index');
    }
}
