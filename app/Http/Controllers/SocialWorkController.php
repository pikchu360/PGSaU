<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\SocialWork;

class SocialWorkController extends Controller
{

    public function index(){
        $sworks = SocialWork::latest()->paginate(5);
        if( Auth::User()->role == 'admin'){
            return view('user_admin.social_works.index', compact('sworks'))->with('i', (request()->input('page', 1) - 1) * 5);
        }else{
            if( Auth::User()->role == 'health_agent'){
                return view('user_sanitary.social_works.index', compact('sworks'))->with('i', (request()->input('page', 1) - 1) * 5);
            }
        }
    }

    public function create(){
        if(Auth::User()->role == 'admin'){
            return view('user_admin.social_works.create');
        }else{
            if(Auth::User()->role == 'health_agent'){
                return view('user_sanitary.social_works.create');
            }
        }
    }

    public function store(Request $request){
        request()->validate([
            'name' => 'required',
        ]);

        SocialWork::create($request->all());

        if( Auth::User()->role == 'admin' ){
            return redirect()->route('social_works.index')->with('success','Paciente creado con éxito!!!');
        }else{
            if( Auth::User()->role == 'health_agent' ){
                return redirect()->route('social_works.index')->with('success','Paciente creado con éxito!!!');
            }
        }
    }

    public function show($id){
        $social_work = SocialWork::find($id);
        if(Auth::User()->role == 'admin'){
            return view('user_admin.social_works.show', compact('social_work'));
        }else{
            if(Auth::User()->role == 'health_agent'){
                return view('user_sanitary.social_works.show', compact('social_work'));
            }
        }
    }

    public function edit($id){
        $social_work = SocialWork::find($id);
        if(Auth::User()->role == 'admin'){
            return view('user_admin.social_works.edit', compact('social_work'));
        }else{
            if(Auth::User()->role == 'health_agent'){
                return view('user_sanitary.social_works.edit', compact('social_work'));
            }
        }
    }

    public function update(Request $request, $id){
        request()->validate([
            'name' => 'required',
        ]);
        SocialWork::find($id)->update($request->all());
        if(Auth::User()->role == 'admin'){
            return redirect()->route('social_works.index')->with('succes','Paciente actualizado éxitosamente!!!');
        }else{
            if(Auth::User()->role == 'health_agent'){
                return redirect()->route('social_works.index')->with('succes','Paciente actualizado éxitosamente!!!');
            }
        }
    }

    public function destroy($id){
        SocialWork::find($id)->delete();
        if(Auth::User()->role == 'health_agent'){
            return redirect()->route('social_works.index')->with('success','Paciente eliminado exitozamente!!!');
        }else{
            if(Auth::User()->role == 'admin'){
                return redirect()->route('social_works.index')->with('success','Paciente eliminado exitozamente!!!');
            }
        }
    }
}
