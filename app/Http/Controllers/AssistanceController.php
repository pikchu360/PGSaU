<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Calendar;
use App\Assistance;

class AssistanceController extends Controller
{
    public function index(){
        $assists = Assistance::latest()->paginate(5);
        if( Auth::User()->role == 'admin' ){
            return view('user_admin.assists.index', compact('assists'))->with('i', (request()->input('page', 1) - 1) * 5);
        }else{
            if(Auth::User()->role == 'health_agent' ){
                return view('user_sanitary.assists.index', compact('assists'))->with('i', (request()->input('page', 1) - 1) * 5);
            }
            return view('user_assists.assists.index', compact('assists'))->with('i', (request()->input('page', 1) - 1) * 5);
        }
    }

    public function create(){
        if(Auth::User()->role == 'admin'){
            return view('user_admin.assists.calendar');
        }else{
            if(Auth::User()->role == 'health_agent'){
                return view('user_sanitary.assists.calendar');
            }
        }
    }

    public function store(Request $request){
        request()->validate([
            'lastname' => 'required',
            'firstname' => 'required',
            'dni' => 'required',
            'email' => 'required',
        ]);

        Assistance::create($request->all());

        if( Auth::User()->role == 'admin' ){
            return redirect()->route('assists.index')->with('success','Paciente creado con éxito!!!');
        }else{
            if( Auth::User()->role == 'health_agent' ){
                return redirect()->route('assists.index')->with('success','Paciente creado con éxito!!!');
            }
        }
    }

    public function show($id){
        $assistance = Assistance::find($id);
        if(Auth::User()->role == 'admin'){
            return view('user_admin.assists.show', compact('assistance'));
        }else{
            if(Auth::User()->role == 'health_agent'){
                return view('user_sanitary.assists.show', compact('assistance'));
            }
        }
    }

    public function edit($id){
        $assistance = Assistance::find($id);
        if(Auth::User()->role == 'admin'){
            return view('user_admin.assists.edit', compact('assistance'));
        }else{
            if(Auth::User()->role == 'health_agent'){
                return view('user_sanitary.assists.edit', compact('assistance'));
            }
        }
    }

    public function update(Request $request, $id){
        request()->validate([
            'lastname' => 'required',
            'firstname' => 'required',
            'dni' => 'required',
            'email' => 'required',
        ]);
        Assistance::find($id)->update($request->all());
        if(Auth::User()->role == 'admin'){
            return redirect()->route('assists.index')->with('succes','Paciente actualizado éxitosamente!!!');
        }else{
            if(Auth::User()->role == 'health_agent'){
                return redirect()->route('assists.index')->with('succes','Paciente actualizado éxitosamente!!!');
            }
        }
    }

    public function destroy($id){
        Assistance::find($id)->delete();
        if(Auth::User()->role == 'admin'){
            return redirect()->route('assists.index')->with('success','Paciente eliminado exitozamente!!!');
        }else{
            if(Auth::User()->role == 'health_agent'){
                return redirect()->route('assists.index')->with('success','Paciente eliminado exitozamente!!!');
            }
        }
    }
}
