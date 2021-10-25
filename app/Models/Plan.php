<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class Plan extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'plan','archivo'
    ];

    public function getArchivo(){
        return "/".$this->archivo;
    }
}
