<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perro extends Model
{
    use HasFactory;
    protected $table = 'perro';
    protected $primaryKey = 'id';
    public $incrementing = true;
}
