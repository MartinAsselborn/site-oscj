<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\Rol;
use App\Models\Plan;
use App\Models\Legajo;
use App\Models\User;
use App\Models\ObraSocial;
use App\Http\Traits\ExcelTrait;
use App\Imports\LegajoImport;
use App\Exports\LegajoExport;


class LegajosController extends Controller
{
   use ExcelTrait;
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
       $legajos=Legajo::all();

       $titulos=['Nombre','Legajo','Email'];

       return view('administration.legajos.table',['titulos'=>$titulos,'datos'=>$legajos]);
    }

    
    public function viewOne($id)
    {
      $rols=Rol::all(); 
      $legajo=Legajo::where('id',$id)->get();
      $legajo=$legajo[0];
      $legajo->getParentLegajo();
      $sons=[];
      if($legajo->parent_legajo_id==NULL || $legajo->parent_legajo_id==$legajo->id){
         $sons=Legajo::where('parent_legajo_id',$legajo->id)->get();
      }
      $campos=$this->campos();
      $campos1=$campos[0];
      $campos2=$campos[1];
      $titulos=['Nombre','Legajo','Email'];
      
      return view('administration.legajos.view',[
         'campos1'=>$campos1,'campos2'=>$campos2,
         'legajo'=>$legajo,'sons'=>$sons,'titulos'=>$titulos]);
   
    }   

   
    public function showFormCreate(Request $request)
    {
      $campos=$this->campos();
      $campos1=$campos[0];
      $campos2=$campos[1];
      return view('administration.legajos.create',['campos1'=>$campos1,'campos2'=>$campos2]);
    }

    public function showFormEdit($id)
    {
      $rols=Rol::all(); 
      $legajo=Legajo::where('id',$id)->get();
      $legajo=$legajo[0];
      $legajo->getParentLegajo();
      $sons=[];
      if($legajo->parent_legajo_id==NULL || $legajo->parent_legajo_id==$legajo->id){
         $sons=Legajo::where('parent_legajo_id',$legajo->id)->get();
      }
      $campos=$this->campos();
      $campos1=$campos[0];
      $campos2=$campos[1];
      $titulos=['Nombre','Legajo','Email'];
      
      return view('administration.legajos.edit',[
         'campos1'=>$campos1,'campos2'=>$campos2,
         'legajo'=>$legajo,'sons'=>$sons,'titulos'=>$titulos]);
   
    }

    public function create(Request $request)
    {
         //faltan validaciones;
         try{
            $legajo=Legajo::create([
            'parent_legajo_id'=>Legajo::getParentId($request->input('parent_legajo')),
            'cuil_real'=>$request->input('cuil_real'),
            'credencial'=>$request->input('credencial'),
            'parentesco'=>$request->input('parentesco'),
            'fecha_nac'=>$request->input('fecha_nac'),
            'edad'=>$request->input('edad'),
            'obra_social'=>$request->input('obra_social'),
            'fecha_alta'=>$request->input('fecha_alta'),
            'baja_scj'=>$request->input('fecha_baja'),
            'baja_obra_social'=>$request->input('baja_obra_social'),
            'cuit'=>$request->input('cuit'),
            'plan_id'=>$request->input('plan'),
            'contacts'=>$request->input('contacts'),
            'name'=>$request->input('name'),
            'lastname'=>$request->input('lastname'),
            'dni'=>$request->input('dni'),
            'legajo'=>$request->input('legajo'),
            'email'=>$request->input('email'),
         ]);
         $user=User::create([
            "name"=>$request->input('name').$request->input('apellido'),
            "email"=>$request->input('legajo'),
            "password"=>Hash::make($request->input('dni')),
            "rol"=>3
        ]);
         }catch(\PDOException $e){
            dd($e);
            return redirect('/legajos');
         }

         return redirect('/legajos');
    }

    public function edit(Request $request)
    {
      
      try{
         $legajo=Legajo::where('id',$request->input('id'))->get();
         $legajo=$legajo[0];
         $legajo->getParentLegajoId(trim($request->input('parent_legajo')));
         $legajo->cuil_real=$request->input('cuil_real');
         $legajo->credencial=$request->input('credencial');
         $legajo->parentesco=$request->input('parentesco');
         $legajo->fecha_nac=$request->input('fecha_nac');
         $legajo->edad=$request->input('edad');
         $legajo->obra_social=$request->input('obra_social');
         $legajo->fecha_alta=$request->input('fecha_alta');
         $legajo->baja_scj=$request->input('baja_scj');
         $legajo->baja_obra_social=$request->input('baja_obra_social');
         $legajo->cuit=$request->input('cuit');
         $legajo->plan_id=$request->input('plan');
         $legajo->contacts=$request->input('contacts');
         $legajo->name=$request->input('name');
         $legajo->lastname=$request->input('lastname');
         $legajo->dni=$request->input('dni');
         $legajo->legajo=$request->input('legajo');
         $legajo->email=$request->input('email');
         $legajo->save();
         
      }catch(\PDOException $e){
         return redirect('/legajos');
      }
      return redirect('/legajos');
    }

    public function delete(Request $request)
    {  
       $id=$request->input('id');
       $legajo=Legajo::where('id',$id)->delete();
       return redirect('/legajos');
    }

    public function campos(){
      $planes=Plan::all();
      $obrasocial=ObraSocial::all();
          $campos1=array(
         ["name"=>'name',"titulo"=>'Nombre',"type"=>'text'],
         ["name"=>'lastname',"titulo"=>'Apellido',"type"=>'text'],
         ["name"=>'dni',"titulo"=>'DNI',"type"=>'text'],
         ["name"=>'legajo',"titulo"=>'Legajo',"type"=>'text'],
         ["name"=>'parent_legajo',"titulo"=>'Legajo Tutor',"type"=>'text'],
         ["name"=>'plan',"titulo"=>'Plan',"type"=>'select',"datos"=>$planes],
         ["name"=>'cuil_real',"titulo"=>'CUIL Real',"type"=>'text'],
         ["name"=>'credencial',"titulo"=>'Credencial',"type"=>'text'],
         ["name"=>'parentesco',"titulo"=>'Parentesco',"type"=>'text']);
   
         $campos2=array(
         ["name"=>'fecha_nac',"titulo"=>'Fecha Nacimiento',"type"=>'date'],
         ["name"=>'edad',"titulo"=>'Edad',"type"=>'text'],
         ["name"=>'obra_social',"titulo"=>'Obra Social',"type"=>'select','datos'=>$obrasocial],
         ["name"=>'fecha_alta',"titulo"=>'Fecha Alta',"type"=>'date'],
         ["name"=>'baja_scj',"titulo"=>'Fecha Baja',"type"=>'date'],
         ["name"=>'baja_obra_social',"titulo"=>'Fecha Baja Obra Social',"type"=>'date'],
         ["name"=>'cuit',"titulo"=>'Cuit',"type"=>'text'],
         ["name"=>'contacts',"titulo"=>'Contacto',"type"=>'text'],
         ["name"=>'email',"titulo"=>'Email',"type"=>'text']);

         return array($campos1,$campos2);   
    }

    public function importarLegajos(Request $request){
      if(!$request->file('legajos_excel')){
         return back();
      }

      $file=$request->file('legajos_excel');

      $this->import(new LegajoImport,$file);
      return back();
    }

    public function exportarLegajos(Request $request){
      return $this->export(new LegajoExport,"legajos.xlsx");
      
    }

}
