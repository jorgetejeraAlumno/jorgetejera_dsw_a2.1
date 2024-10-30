<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doubt extends Model
{
    use HasFactory;
    protected $table = 'doubts';
    protected $fillable = ['id','email','modulo','asunto','desc','color'];
}
