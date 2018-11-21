<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Calendar;
use App\Turn;

class TurnController extends Controller
{
    public function index(){
        $turns = Turn::all();
        if( Auth::User()->role == 'admin'){
            return view('user_admin.turns.index', compact('turns'));
        }else{
            if( Auth::User()->role == 'health_agent'){
                return view('user_sanitary.turns.index', compact('turns'));
            }else{
                return view('user_patients.turns.index', compact('turns'));
            }
        }
    }

    public function create(){
        if(Auth::User()->role == 'admin'){
            return view('user_admin.turns.create');
        }else{
            if(Auth::User()->role == 'health_agent'){
                return view('user_sanitary.turns.create');
            }else{
                return view('user_patients.turns.create');
            }
        }
    }

    public function store(Request $request){
        Turn::create($request->all());
        return redirect()->route('turns.index');
    }

    public function show($id){
        $turn = Turn::find($id);
        if(Auth::User()->role == 'admin'){
            return view('user_admin.turns.show', compact('turn'));
        }else{
            if(Auth::User()->role == 'health_agent'){
                return view('user_sanitary.turns.show', compact('turn'));
            }else{
                return view('user_patients.turns.show', compact('turn'));
            }
        }
    }

    public function edit($id){
        $turn = Turn::find($id);
        if(Auth::User()->role == 'admin'){
            return view('user_admin.turns.edit', compact('turn'));
        }else{
            if(Auth::User()->role == 'health_agent'){
                return view('user_sanitary.turns.edit', compact('turn'));
            }else{
                return view('user_patients.turns.edit', compact('turn'));
            }
        }
    }

    public function update(Request $request, $id){
        request()->validate([
            'name' => 'required',
        ]);
        Turn::find($id)->update($request->all());
        if(Auth::User()->role == 'admin'){
            return redirect()->route('turns.index')->with('succes','Turno actualizado éxitosamente!!!');
        }else{
            if(Auth::User()->role == 'health_agent'){
                return redirect()->route('turns.index')->with('succes','Turno actualizado éxitosamente!!!');
            }else{
                return redirect()->route('turns.index')->with('succes','Turno actualizado éxitosamente!!!');
            }
        }
    }

    public function destroy($id){
        Turn::find($id)->delete();
        if(Auth::User()->role == 'admin'){
            return redirect()->route('turns.index')->with('success','Turno eliminado exitozamente!!!');
        }else{
            if(Auth::User()->role == 'health_agent'){
                return redirect()->route('turns.index')->with('success','Turno eliminado exitozamente!!!');
            }
        }
    }
}
