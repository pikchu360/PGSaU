<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Patient;

class PatientController extends Controller
{
    public function index(Request $request){
        
        //========================================
        //=========Para buscar un dato============

        /*$firstname = $request->get('firstname');
        $lastname  = $request->get('lastname');
        $dni       = $request->get('dni');
        $email     = $request->get('email');
        $address   = $request->get('address');
        $phone     = $request->get('phone');*/

        //========================================

        $patients = Patient::latest()->paginate(5);
        /*$patients = Patient::orderBy('id','desc')
            ->LastName($lastname)
            ->FirstName($firstname)
            ->DNI($dni)
            ->Email($email)
            ->Address($address)
            ->Phone($phone)
        ->paginate(5);*/
        
        if( Auth::User()->role == 'admin' ){
            return view('user_admin.patients.index', compact('patients'))->with('i', (request()->input('page', 1) - 1) * 5);
        }else{
            if(Auth::User()->role == 'health_agent' ){
                return view('user_sanitary.patients.index', compact('patients'))->with('i', (request()->input('page', 1) - 1) * 5);
            }
            return view('user_patients.patients.index', compact('patients'))->with('i', (request()->input('page', 1) - 1) * 5);
        }
    }

    public function create(){
        if(Auth::User()->role == 'admin'){
            return view('user_admin.patients.create');
        }else{
            if(Auth::User()->role == 'health_agent'){
                return view('user_sanitary.patients.create');
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

        Patient::create($request->all());

        if( Auth::User()->role == 'admin' ){
            return redirect()->route('patients.index')->with('success','Paciente creado con éxito!!!');
        }else{
            if( Auth::User()->role == 'health_agent' ){
                return redirect()->route('patients.index')->with('success','Paciente creado con éxito!!!');
            }
        }
    }

    public function show($id){
        $patient = Patient::find($id);
        if(Auth::User()->role == 'admin'){
            return view('user_admin.patients.show', compact('patient'));
        }else{
            if(Auth::User()->role == 'health_agent'){
                return view('user_sanitary.patients.show', compact('patient'));
            }
        }
    }

    public function edit($id){
        $patient = Patient::find($id);
        if(Auth::User()->role == 'admin'){
            return view('user_admin.patients.edit', compact('patient'));
        }else{
            if(Auth::User()->role == 'health_agent'){
                return view('user_sanitary.patients.edit', compact('patient'));
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
        Patient::find($id)->update($request->all());
        if(Auth::User()->role == 'admin'){
            return redirect()->route('patients.index')->with('succes','Paciente actualizado éxitosamente!!!');
        }else{
            if(Auth::User()->role == 'health_agent'){
                return redirect()->route('patients.index')->with('succes','Paciente actualizado éxitosamente!!!');
            }
        }
    }

    public function destroy($id){
        Patient::find($id)->delete();
        if(Auth::User()->role == 'admin'){
            return redirect()->route('patients.index')->with('success','Paciente eliminado exitozamente!!!');
        }else{
            if(Auth::User()->role == 'health_agent'){
                return redirect()->route('patients.index')->with('success','Paciente eliminado exitozamente!!!');
            }
        }
    }
}
