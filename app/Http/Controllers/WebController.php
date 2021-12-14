<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rol;
use App\Models\WebText;
use App\Models\Noticia;
use App\Models\Legajo;
use Illuminate\Support\Facades\Auth;

class WebController extends Controller
{
        /**
     * Create a new controller instance.
     *
     * @return void
     */
    
    public function welcome()
    {   
        $textoswelcome=WebText::where('vista','welcome')->get();
        $noticias=Noticia::all();

        $params=['webText'=>$textoswelcome,'noticias'=>$noticias];
        return view('welcome',$params);
    }

    
    public function about()
    {
        $textoswelcome=WebText::where('vista','about')->get();
        $params=['webText'=>$textoswelcome];
        return view('about',$params);
    }

   
    public function contacts(Request $request)
    {
        $msg=$request->old("OK")?$request->old("OK"):$request->old("ERROR");
        return view('contacts',["msg"=>$msg]);
    }

    public function verplan()
    {
        if(is_numeric(Auth::user()->email)){
            $legajo=Legajo::where('legajo',Auth::user()->email)->get();
            $legajo=$legajo[0];
        }else{
            $legajo=Legajo::where('email',Auth::user()->email)->get();
            $legajo=$legajo[0];
        }

        return view('verplan',["legajo"=>$legajo]);
    }

    public function mantenimiento()
    {   
        
        return view('mantenimiento');
    }


}
