<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plan;
use FFI\Exception;
use Illuminate\Support\Facades\Storage;

class PLanController extends Controller
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
       $planes=Plan::all();
       $titulos=['Plan'];

       return view('administration.plan.table',['titulos'=>$titulos,'datos'=>$planes]);
    }

    
    public function viewOne($id)
    {
      $plan=Plan::where('id',$id)->get();
      $plan=$plan[0];
      return view('administration.plan.view',['plan'=>$plan]);
    }

   
    public function showFormCreate(Request $request)
    {
         return view('administration.plan.create');
    }

    public function showFormEdit($id)
    {
      $plan=Plan::where('id',$id)->get();
      $plan=$plan[0];
      return view('administration.plan.edit',['plan'=>$plan]);
    }

    public function create(Request $request)
    { 
          if(!$request->file()){
           return redirect('/planes');
         }
         
         $fileName=$request->file('pdf')->store('public/planespdf');
         $plan=new Plan();
         $plan->archivo=$fileName;
         $plan->plan=$request->input('plan');
         try{
            $plan->save();
         }catch(\Exception $e){
            dd($e);    
         }
         return redirect('/planes');
    }

    public function edit(Request $request)
    {
      if(!$request->file()){
         return redirect('/planes');
       }
       $id=$request->input('id');
       $fileName=$request->file('pdf')->store('public/planespdf');
       $plan=Plan::where('id',$id)->get();
       $plan=$plan[0];
       $plan->archivo=$fileName;
       $plan->plan=$request->input('plan');
       try{
          $plan->save();
       }catch(\Exception $e){
          dd($e);    
       }
       return redirect('/planes');
    }

    public function delete(Request $request)
    {  
       $id=$request->input('id');
       $plan=Plan::where('id',$id)->delete();
       return redirect('/planes');
    }

}
