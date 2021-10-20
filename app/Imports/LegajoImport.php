<?php

namespace App\Imports;

use App\Models\Legajo;
use App\Models\User;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\SkipsErrors;
use Maatwebsite\Excel\Concerns\SkipsOnError;
use Maatwebsite\Excel\Concerns\ToCollection;
use Throwable;

class LegajoImport implements ToCollection,WithHeadingRow,SkipsOnError
{
    use Importable;
    /**
    * @param array $row
    *
    */
    public function collection(Collection $rows)
    {   
        foreach($rows as $key=>$row){
            if(is_numeric($row['legajo'])){
                $legajo=Legajo::where('legajo',$row['legajo'])->get();
                if(isset($legajo[0])){
                    $legajo=$legajo[0];
                    if($legajo->legajo==$row['legajo']){
                        $legajo->getParentLegajoId($row['parent_legajo_id']);
                        $legajo->cuil_real=$row['cuil_real'];
                        $legajo->credencial=$row['credencial'];
                        $legajo->parentesco=$row['parentesco'];
                        $legajo->fecha_nac=$row['fecha_nac'];
                        $legajo->edad=$row['edad'];
                        $legajo->obra_social=$row['obra_social'];
                        $legajo->fecha_alta=$row['fecha_alta'];
                        $legajo->baja_scj=$row['baja_scj'];
                        $legajo->baja_obra_social=$row['baja_obra_social'];
                        $legajo->cuit=$row['cuit'];
                        $legajo->plan_id=$row['plan'];
                        $legajo->contacts=$row['contacts'];
                        $legajo->email=$row['email'];
                        $legajo->save();
    
                   
                    
                    }
      

                }else{
                    User::create([
                   "name"=>$row['name'].$row['lastname'],
                   "email"=>$row['legajo'],
                   "password"=>Hash::make($row['dni']),
                   "rol_id"=>3]);
           
           
                   Legajo::create([
                       'parent_legajo_id'=>Legajo::getParentId($row['parent_legajo_id']),
                       'cuil_real'=>$row['cuil_real'],
                       'credencial'=>$row['credencial'],
                       'parentesco'=>$row['parentesco'],
                       'fecha_nac'=>$row['fecha_nac'],
                       'edad'=>$row['edad'],
                       'obra_social'=>$row['obra_social'],
                       'fecha_alta'=>$row['fecha_alta'],
                       'baja_scj'=>$row['baja_scj'],
                       'baja_obra_social'=>$row['baja_obra_social'],
                       'cuit'=>$row['cuit'],
                       'plan_id'=>$row['plan'],
                       'contacts'=>$row['contacts'],
                       'name'=>$row['name'],
                       'lastname'=>$row['lastname'],
                       'dni'=>$row['dni'],
                       'legajo'=>$row['legajo'],
                       'email'=>$row['email'],
                   ]);
                   

               }
                
            }    
            
        }            

            
        
        


    }

    public function onError(Throwable $e)
    {
        dd($e);
    }

   
}
