<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WebText;

class WebTextController extends Controller
{
        /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function viewAll()
    {
       $webtext=WebText::all();

       $titulos=['ID','Texto','Vista'];
       $vistas=["about"=>"Sobre Nosotros",
       "welcome"=>"Inicio"];
      
       return view('administration.webtext.table',['titulos'=>$titulos,'datos'=>$webtext,'vistas'=>$vistas]);
    }

    
    public function viewOne($id)
    {
      $webtext=WebText::where('id',$id)->get();
      $webtext=$webtext[0];
     
      
      return view('administration.webtext.view',['webtext'=>$webtext]);
    }

   
    public function showFormCreate(Request $request)
    {
      $webtext=WebText::all();
      
      return view('administration.legajos.create',['rols'=>$webtext]);
    }

    public function showFormEdit($id)
    {
      $webtext=WebText::where('id',$id)->get();
      $webtext=$webtext[0];
     
      
      return view('administration.webtext.edit',['webtext'=>$webtext]);
    }

    public function create(Request $request)
    {
       return dd($request->input());
    }

    public function edit(Request $request)
    {
      if(!$request->input()){
        return redirect('/webtext');
      }
      $id=$request->input('id');
      $webtext=WebText::where('id',$id)->get();
      $webtext=$webtext[0];
      $webtext->textweb=$request->input('textweb');
      try{
         $webtext->save();
      }catch(\Exception $e){
         dd($e);    
      }
      return redirect('/webtext');
    }

    public function delete(Request $request)
    {  
       return redirect('/legajos');;
    }

}
