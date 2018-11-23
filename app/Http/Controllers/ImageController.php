<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Image;

class ImageController extends Controller
{
    public function index()
    {
        $imagen = Image::where('users_id',Auth::user()->id)->get();   
        return view('imagenes.index', compact('imagen'))->with('images',$imagen);
    }
    
    public function edit($id)
    {
        $imagen = Image::find($id);
        return view('imagenes.edit',compact('imagen'));
    }
    
    public function update(Request $request, $id)
    {
        $imagene = Image::find($id);
        $imagene->title = $request->input('title');
        $imagene->description = $request->input('description');
      //  $imagene->estado = $request->input('estado');
        $imagene->save();
        return redirect()->route('imagenes.index')->with('success','Actividad modificada successfully');
    }

    public function destroy($id)
    {
        Image::find($id)->delete();
        return redirect()->route('imagenes.index')->with('success','Actividad deleted successfully');
    }
}
