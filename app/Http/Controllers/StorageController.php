<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\Image;
use App\Assistance;

class StorageController extends Controller
{
    public function index()
    {
        return \View::make('new');
    }

    public function save(Request $request)
    {
        $file = $request->file('file');
        $nombre = $file->getClientOriginalName(); 
        //indicamos que queremos guardar un nuevo archivo en el disco local
        $path = Storage::putFileAs('images/slider',  $file, Auth::user()->id.'_'.$nombre);
        
        $imagenes = Image::all();
        $band = true;
        foreach ($imagenes as $imagene){
            if ($imagene->url == 'app/'.$path){
                $band = false;
            }
        }
        if($band){
            $imagen = new Image;
            $imagen->title = $nombre;
            $imagen->name = Auth::user()->id.'_'.$nombre;
            $imagen->description = $nombre;
            $imagen->url = 'app/'.$path;
            $imagen->users_id = Auth::user()->id;
            $imagen->save();
        }
        return \View::make('home');
    }

    public function saveCertificate(Request $request, $id)
    {
        $file = $request->file('file');
        $nombre = $file->getClientOriginalName(); 
        //indicamos que queremos guardar un nuevo archivo en el disco local
        $path = Storage::putFileAs('images/cert',  $file, Auth::user()->id.'_'.$nombre);
        
        $assist = Assistance::find($id);
        $assist->url_certificate = 'app/'.$path;
        $assist->save();
        
        return \View::make('home');
    }
}
