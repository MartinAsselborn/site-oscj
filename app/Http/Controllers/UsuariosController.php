<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Rol;
use App\Models\Legajo;
use PDOException;

class UsuariosController extends Controller
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
       $users=User::all();

       $titulos=['Usuario','Email'];

       return view('administration.usuarios.table',['titulos'=>$titulos,'datos'=>$users]);
    }

    
    public function viewOne($id)
    {
      $rols=Rol::all(); 
      $user=User::where('id',$id)->get();
      $user=$user[0];

       $titulos=['Usuario','Email'];

       return view('administration.usuarios.view',['user'=>$user,'rols'=>$rols]);
    }

   
    public function showFormCreate(Request $request)
    {
      $rols=Rol::all();
      
      return view('administration.usuarios.create',['rols'=>$rols]);
    }

    public function showFormEdit($id)
    {
      $rols=Rol::all();
      $user=User::where('id',$id)->get();
      $user=$user[0];
     
      return view('administration.usuarios.edit',['user'=>$user,'rols'=>$rols]);
    }

    public function create(Request $request)
    {
       //faltan validaciones;
      try{
         $user=User::create([
            "name"=>$request->input('nombreyapellido'),
            "email"=>$request->input('email'),
            "password"=>Hash::make($request->input('password')),
            "rol"=>$request->input('rol')
        ]);
      }catch(\PDOException $e){
         return redirect('/usuarios');
      }

      return redirect('/usuarios');
   }

    public function edit(Request $request){
      if(!$request->input()){
        return redirect('/usuarios');
      }
      $id=$request->input('id');
      $user=User::where('id',$id)->get();
      $user=$user[0];
      $user->name=$request->input('nombreyapellido');
      $user->email=$request->input('email');
      $user->rol_id=$request->input('rol');
      try{
         $user->save();
      }catch(\Exception $e){
         dd($e);    
      }
      return redirect('/usuarios'); 
        
    }

    public function delete(Request $request)
    { 
      $id=$request->input('id');
      $legajo=User::where('id',$id)->delete();
      return redirect('/usuarios');
    }

    public function renovarPass($id){
      $user=User::where('id',$id)->get();
      $legajo=Legajo::where('legajo',$user[0]->email)->get();
      if(isset($legajo[0])){
         $pass=$legajo[0]->dni;
      }else{
         $pass="oscjpass";
      }
      $user[0]->password=Hash::make($pass);
      $user[0]->save();

      print_r($pass);
      return;
    }

}
