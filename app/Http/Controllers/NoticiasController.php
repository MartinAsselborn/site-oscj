<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Noticia;

class NoticiasController extends Controller
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
       $noticias=Noticia::all();

       $titulos=['Titulo','subtitulo'];
       
       return view('administration.noticias.table',['titulos'=>$titulos,'datos'=>$noticias]);
    }

    
    public function viewOne($id)
    {
      $noticias=Noticia::where('id',$id)->get();
      $noticias=$noticias[0];
     
      
      return view('administration.noticias.view',['noticias'=>$noticias]);
    }

   
    public function showFormCreate(Request $request)
    {
      return view('administration.noticias.create');
    }

    public function showFormEdit($id)
    {
      $noticias=Noticia::where('id',$id)->get();
      $noticias=$noticias[0];
     
      
      return view('administration.noticias.edit',['noticias'=>$noticias]);
    }

    public function create(Request $request)
    { 
          if(!$request->file()){
           return redirect('/noticias');
         }
         
         $fileName=$request->file('imagen')->store('public/noticias','public');
         $noticias=new Noticia();
         $noticias->imagen=$fileName;
         $noticias->titulo=$request->input('titulo');
         $noticias->subtitulo=$request->input('subtitulo');
         $noticias->noticia=$request->input('noticia');
         $noticias->leermas=$request->input('leermas');
         try{
            $noticias->save();
         }catch(\Exception $e){
            dd($e);    
         }
         return redirect('/noticias');
    }


    public function edit(Request $request)
    {
      if(!$request->input()){
        return redirect('/noticias');
      }
     
      $id=$request->input('id');
      $noticias=Noticia::where('id',$id)->get();
      $noticias=$noticias[0];
      $noticias->titulo=$request->input('titulo');
      $noticias->subtitulo=$request->input('subtitulo');
      $noticias->noticia=$request->input('noticia');
      $noticias->leermas=$request->input('leermas');
      if($request->file()){
         $fileName=$request->file('imagen')->store('public/noticias','public');
         $noticias->imagen=$fileName;
      }
      
      try{
         $noticias->save();
      }catch(\Exception $e){
         dd($e);    
      }
      return redirect('/noticias');
    }

    public function delete(Request $request)
    {  
     
      $noticias=Noticia::find($request->input('id'));
      $noticias->delete();
      return redirect('/noticias');
    }

}
