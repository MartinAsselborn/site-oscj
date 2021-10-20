<?php

namespace App\Exports;

use App\Models\Legajo;
use DB;
use Dotenv\Parser\Lexer;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class LegajoExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $select=[
            'id',
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

        $legajos=Legajo::whereNotNull('legajo')
        ->select($select)
        ->get();
         $collection= $this->formatEloquentCollection($legajos);
         
       return $collection;
    }

    public function headings(): array
    {
        return [
        'parent_legajo',
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
        'plan',
        'contacts',
        'name',
        'lastname',
        'dni',
        'legajo',
        'email',
        ];
    }

    
    private function formatEloquentCollection($collection)
    {   
        return  collect($collection->toArray())->map(function ($i, $k) {
           
            $legajo=Legajo::where('id', $i['id'])->get();
            $legajo[0]->getParentLegajo();
            $i['parent_legajo_id']=$legajo[0]->parent_legajo;
            $plan=$legajo[0]->getPlan();
            $i['plan_id']=$plan?$plan->plan:$i['plan_id'];
            $obra_social=$legajo[0]->getObraSocial();
            $i['obra_social']=$obra_social?$obra_social->obra_social:$i['obra_social'];;
           
            unset($i['id']);
            //$i['parent_legajo_id']=$legajo->legajo;
           return $i;
        });
    }
}
