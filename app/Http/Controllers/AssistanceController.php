<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Calendar;
use App\Assistance;
use App\License;
use App\Patient;

class AssistanceController extends Controller
{
    public function index(){
        $assists = Assistance::latest()->paginate(5);
        $license = License::all();
        $patient = Patient::all();
        if( Auth::User()->role == 'admin' ){
            return view('user_admin.assists.index', compact('patient', 'assists', 'license'))->with('i', (request()->input('page', 1) - 1) * 5);
        }else{
            if(Auth::User()->role == 'health_agent' ){
                return view('user_sanitary.assists.index', compact('patient', 'assists', 'license'))->with('i', (request()->input('page', 1) - 1) * 5);
            }
            return view('user_assists.assists.index', compact('assists'))->with('i', (request()->input('page', 1) - 1) * 5);
        }
    }

    public function create(){
        if(Auth::User()->role == 'admin'){
            return view('user_admin.assists.create');
        }else{
            if(Auth::User()->role == 'health_agent'){
                return view('user_sanitary.assists.create');
            }
        }
    }

    public function store(Request $request){
        request()->validate([
            'start_date' => 'required',
            'end_date' => 'required',
        ]);
        //Assistance::create($request->all());
        $assist = new Assistance();
        $assist->patient_id = $request->input('patient_id');
        $assist->license_id = $request->get('license_id');
        $assist->start_date = $request->input('start_date');
        $assist->end_date   = $request->input('end_date');
        $assist->save();
        if( Auth::User()->role == 'admin' ){
            return redirect()->route('assists.index')->with('success','Paciente creado con éxito!!!');
        }else{
            if( Auth::User()->role == 'health_agent' ){
                return redirect()->route('assists.index')->with('success','Paciente creado con éxito!!!');
            }
        }
    }

    public function createInassist($id){
        $patient = Patient::find($id);
        $license = License::all();
        return view('user_admin.assists.create', compact('patient','license'));
    }

    public function show($id){
        $assistance = Assistance::find($id);
        $patient = Patient::find($assistance->patient_id);
        $license = License::find($assistance->license_id);
        if(Auth::User()->role == 'admin'){
            return view('user_admin.assists.show', compact('assistance','patient','license'));
        }else{
            if(Auth::User()->role == 'health_agent'){
                return view('user_sanitary.assists.show', compact('assistance','patient','license'));
            }
        }
    }

    public function edit($id){
        $assistance = Assistance::find($id);
        $patient = Patient::find($assistance->patient_id);
        $license1 = License::find($assistance->license_id);
        $license = License::all();
        if(Auth::User()->role == 'admin'){
            return view('user_admin.assists.edit', compact('assistance','patient','license', 'license1'));
        }else{
            if(Auth::User()->role == 'health_agent'){
                return view('user_sanitary.assists.edit', compact('assistance','patient','license', 'license1'));
            }
        }
    }

    public function update(Request $request, $id){
        request()->validate([
            'start_date' => 'required',
            'end_date' => 'required',
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
