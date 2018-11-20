<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function index()
    {
        $imagen = Image::where('users_id',Auth::user()->id)->get();   
        return view('images.index')->with('images',$imagen);
    }
    
    public function edit($id)
    {
        $imagen = Image::find($id);
        return view('images.edit',compact('imagen'));
    }
    
    public function update(Request $request, $id)
    {
        $imagene = Image::find($id);
        $imagene->titulos = $request->input('title');
        $imagene->descripcion = $request->input('description');
      //  $imagene->estado = $request->input('estado');
        $imagene->save();
        return redirect()->route('images.index')->with('success','Actividad modificada successfully');
    }

    public function destroy($id)
    {
        $imagen = Image::find($id);
        Storage::delete($imagen->name);
        Image::find($id)->delete();
        return redirect()->route('images.index')->with('success','Actividad deleted successfully');
    }
}
