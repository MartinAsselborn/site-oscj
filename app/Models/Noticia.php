<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class Noticia extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'titulo','subtitulo','noticia','imagen','leermas'
    ];

    public function getArchivo(){
        $path="/public/".$this->imagen;
        if(strpos($path, "http")!==FALSE){
            $path=str_replace("/public/","",$path);
        }
        return $path;
    }
}
