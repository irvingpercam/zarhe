<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    public $timestamps = false;
    protected $table = 'Rol';
    protected $primaryKey = 'RolID';
    protected $fillable = ['Nombre', 'url'];
    // Search tipos by url
    public function getRouteKeyName()
    {
        return 'url';
    }
    use HasFactory;
}
