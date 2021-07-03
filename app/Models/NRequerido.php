<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NRequerido extends Model
{
    public $timestamps = false;
    protected $table = 'NRequerido';
    protected $primaryKey = 'RNRequeridoID';
    protected $fillable = ['Nombre', 'url'];
    // Search tipos by url
    public function getRouteKeyName()
    {
        return 'url';
    }
}
