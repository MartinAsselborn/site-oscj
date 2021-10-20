<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Plan;
use App\Models\ObraSocial;

class Legajo extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = [
        'parent_legajo_id',
        'cuil_real',
        'credencial',
        'parentesco',
        'fecha_nac',
        'edad',
        'obra_social',
        'fecha_alta',
        'baja_scj',
        'baja_obra_social',
        'cuit',
        'plan_id',
        'contacts',
        'name',
        'lastname',
        'dni',
        'legajo',
        'email',
    ];

    public function getParentLegajoId($parentLegajo)
    {
        $legajo=$this::where('legajo',$parentLegajo)->get();
        if(isset($legajo[0])){
            $this->parent_legajo_id=$legajo[0]->id;
        }else{
            $this->parent_legajo_id=NULL;
        }
    }   
    public function getPlan(){
        $plan=Plan::where('id',$this->plan_id)->get();
        if(isset($plan[0])){
            return $plan[0];
        }else{
             return NULL;
        }
    }
    
    public static function getParentId($parentLegajo)
    {
        $legajo=Legajo::where('legajo',$parentLegajo)->get();
        if(isset($legajo[0])){
            return $legajo[0]->id;
        }else{
             return NULL;
        }
    } 

    public function getParentLegajo()
    {   
        $legajo=$this::where('id',$this->parent_legajo_id)->get();
        if(isset($legajo[0])){
            $this->parent_legajo = $legajo[0]->legajo;
        }else{
            $this->parent_legajo= NULL;
        }
    } 

    public function getObraSocial(){
        $obra_social=ObraSocial::where('id',$this->obra_social)->get();
        if(isset($obra_social[0])){
            return $obra_social[0];
        }else{
             return NULL;
        }
    }
    
}
