<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Exception;
use Illuminate\Support\Facades\Mail;


class MailController extends Controller
{
        /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function enviarMail(Request $request)
    {   
        if(!$request->input('email')){
            return;
        }
        $name=$request->input('name');
        $tel=$request->input('tel');
        $msj=$request->input('message');
        $email=$request->input('email');


        try{
            Mail::to("vguercio@scj.com")->send(new ContactMail($name,$tel,$msj,$email));
            return redirect("/contacts")->withInput(['OK'=>'Se envio correctamente.']);
  
        }catch(Exception $e){
            return redirect("/contacts")->with('ERROR', 'El mensaje no fue enviado');
        }
    }
    


}
