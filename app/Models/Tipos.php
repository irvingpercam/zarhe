<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipos extends Model
{
    public $timestamps = false;
    protected $table = 'Tipo';
    protected $primaryKey = 'TipoID';
    protected $fillable = ['Nombre', 'Siglas', 'url'];
    // Search tipos by url
    public function getRouteKeyName()
    {
        return 'url';
    }
    use HasFactory;
}
