<?php 

namespace App\Http\Traits;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Rol;
use League\Config\Exception\ValidationException as ExceptionValidationException;
use Maatwebsite\Excel\Validators\ValidationException;

trait ExcelTrait{

    public function import($obj,$file)
    {   
        try{
        
            Excel::import($obj, $file);
        
        }catch(ValidationException $e){
          
            $fails=$e->failures();
          
            foreach($fails as $fail){
               $fail->row();
               $fail->attribute();
               $fail->errors();
               $fail->values();

           } 

        }catch(\Exeption $e){
            //NO FUNCO
        }   
    }

    public function export($obj,$file){

        return Excel::download($obj, $file);
    
    }

 }


?>