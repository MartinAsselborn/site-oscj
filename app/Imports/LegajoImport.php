<?php

namespace App\Imports;

use App\Models\Legajo;
use App\Models\Plan;
use App\Models\User;
use Exception;
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
        try{ 
            foreach($rows as $key=>$row){
                if(is_numeric($row['legajo'])){
                    $legajo=Legajo::where('legajo',$row['legajo'])->get();
                    if(isset($legajo[0])){
                        $legajo=$legajo[0];
                        if($legajo->legajo==$row['legajo']){
                            $legajo->getParentLegajoId($row['parent_legajo']);
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
                            $plan=Plan::where('plan',$row['plan'])->get();
                            $legajo->plan_id=$plan[0]['plan'];
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
            
                    
                    $plan=Plan::where('plan',$row['plan'])->get();     
                    Legajo::create([
                        'parent_legajo_id'=>Legajo::getParentId($row['parent_legajo']),
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
                        'plan_id'=>$plan[0]['plan'],
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

        }catch(Exception $e){    
        $message=$e->getMessage();
        $message=str_replace("`","",$message);
        echo $message;
        echo "<script>
                let m=`$message`;
                alert('ERROR:'+m);
                window.history.back();
              </script>";     
        die();         
        }    

    }

    public function onError(Throwable $e)
    {
        dd($e);
    }

   
}
