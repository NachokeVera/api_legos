<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Lego extends Model
{
    use HasFactory,SoftDeletes;
    
    protected $table='legos';
    protected $primaryKey = 'numero';
    protected $fillable = [
        'numero',
        'nombre',
        'tema',
        'precio',
        'cantidad',
    ];
    public $timestamps = false;
}
