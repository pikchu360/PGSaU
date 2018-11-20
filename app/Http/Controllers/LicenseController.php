<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\License;

class LicenseController extends Controller
{
    public function index(){
        $lic = License::latest()->paginate(5);
        if( Auth::User()->role == 'admin' ){
            return view('user_admin.licenses.index', compact('lic'))->with('i', (request()->input('page', 1) - 1) * 5);
        }else{
            if(Auth::User()->role == 'health_agent' ){
                return view('user_sanitary.licenses.index', compact('lic'))->with('i', (request()->input('page', 1) - 1) * 5);
            }
            return view('user_patients.licenses.index', compact('lic'))->with('i', (request()->input('page', 1) - 1) * 5);
        }
    }

    public function create(){
        if(Auth::User()->role == 'admin'){
            return view('user_admin.licenses.create');
        }else{
            if(Auth::User()->role == 'health_agent'){
                return view('user_sanitary.licenses.create');
            }
        }
    }

    public function store(Request $request){
        request()->validate([
            'name' => 'required',
            'description' => 'required',
            'days' => 'required',
        ]);

        License::create($request->all());

        if( Auth::User()->role == 'admin' ){
            return redirect()->route('licenses.index')->with('success','Paciente creado con éxito!!!');
        }else{
            if( Auth::User()->role == 'health_agent' ){
                return redirect()->route('licenses.index')->with('success','Paciente creado con éxito!!!');
            }
        }
    }

    public function show($id){
        $lic = License::find($id);
        if(Auth::User()->role == 'admin'){
            return view('user_admin.licenses.show', compact('lic'));
        }else{
            if(Auth::User()->role == 'health_agent'){
                return view('user_sanitary.licenses.show', compact('lic'));
            }
        }
    }

    public function edit($id){
        $lic = License::find($id);
        if(Auth::User()->role == 'admin'){
            return view('user_admin.licenses.edit', compact('lic'));
        }else{
            if(Auth::User()->role == 'health_agent'){
                return view('user_sanitary.licenses.edit', compact('lic'));
            }
        }
    }

    public function update(Request $request, $id){
        request()->validate([
            'name' => 'required',
            'description' => 'required',
            'days' => 'required',
        ]);
        License::find($id)->update($request->all());
        if(Auth::User()->role == 'admin'){
            return redirect()->route('licenses.index')->with('succes','Paciente actualizado éxitosamente!!!');
        }else{
            if(Auth::User()->role == 'health_agent'){
                return redirect()->route('licenses.index')->with('succes','Paciente actualizado éxitosamente!!!');
            }
        }
    }

    //Funcion agregada para controlar el update desde un modal.
    function editLicense(Request $request){
        $lic = License::find ($request->id);
        $lic->name = $request->name;
        $lic->description = $request->description;
        $lic->days = $request->days;
        $lic->save();
        return response()->json($lic);
    }

    public function destroy($id){
        License::find($id)->delete();
        if(Auth::User()->role == 'admin'){
            return redirect()->route('licenses.index')->with('success','Paciente eliminado exitozamente!!!');
        }else{
            if(Auth::User()->role == 'health_agent'){
                return redirect()->route('licenses.index')->with('success','Paciente eliminado exitozamente!!!');
            }
        }
    }
}
