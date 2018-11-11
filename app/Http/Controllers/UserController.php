<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Role;
use Carbon\Carbon;

class UserController extends Controller
{
    public function index(){
        $users = User::latest()->paginate(5);
        if( Auth::User()->role == 'admin' ){
            return view('user_admin.users.index', compact('users'))->with('i', (request()->input('page', 1) - 1) * 5);
        }else{
            if(Auth::User()->role == 'health_agent' ){
                return view('user_sanitary.users.index', compact('users'))->with('i', (request()->input('page', 1) - 1) * 5);
            }
            return view('user_users.users.index', compact('users'))->with('i', (request()->input('page', 1) - 1) * 5);
        }
    }

    public function create(){
        if(Auth::User()->role == 'admin'){
            $roles = Role::all();
            return view('user_admin.users.create', compact('roles'));
        }else{
            if(Auth::User()->role == 'health_agent'){
                return view('user_sanitary.users.create');
            }
        }
    }

    public function store(Request $request){
        request()->validate([
            'name' => 'required',
            'email' => 'required',
        ]);
        //User::create($request->all());
        
        if( Auth::User()->role == 'admin' ){
            $now = Carbon::now();
            $user = new User();

            $user->name = $request->name;
            $user->email = $request->email;
            $user->role = $request->role;
            $user->password = bcrypt($request->password); // Se encripta la contraseña usando la función bcrypt().
            $user->created_at = $now;
            $user->updated_at = $now;
            $user->save();                                 // Se guarda el registro en la base de datos.
           
            return redirect()->route('users.index')->with('success','Usuario creado con éxito!!!');
        }else{
            if( Auth::User()->role == 'health_agent' ){
                return redirect()->route('users.index')->with('success','Usuario creado con éxito!!!');
            }
        }
    }

    public function show($id){
        $user = User::find($id);
        if(Auth::User()->role == 'admin'){
            return view('user_admin.users.show', compact('user'));
        }else{
            if(Auth::User()->role == 'health_agent'){
                return view('user_sanitary.users.show', compact('user'));
            }
        }
    }

    public function edit($id){
        $user = User::find($id);
        $roles = Role::all();

        if(Auth::User()->role == 'admin'){
            return view('user_admin.users.edit', compact('user','roles'));
        }else{
            if(Auth::User()->role == 'health_agent'){
                return view('user_sanitary.users.edit', compact('user'));
            }
        }
    }

    public function update(Request $request, $id){
        request()->validate([
            'email' => 'required',
            'role' => 'required',
        ]);
        User::find($id)->update($request->all());
        if(Auth::User()->role == 'admin'){
            return redirect()->route('users.index')->with('succes','Usuario actualizado éxitosamente!!!');
        }else{
            if(Auth::User()->role == 'health_agent'){
                return redirect()->route('users.index')->with('succes','Usuario actualizado éxitosamente!!!');
            }
        }
    }

    public function destroy($id){
        User::find($id)->delete();
        if(Auth::User()->role == 'admin'){
            return redirect()->route('users.index')->with('success','Usuario eliminado exitozamente!!!');
        }else{
            if(Auth::User()->role == 'health_agent'){
                return redirect()->route('users.index')->with('success','Usuario eliminado exitozamente!!!');
            }
        }
    }
}
