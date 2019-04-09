<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Routinemodel extends Model
{
    protected $table='routinemodels';
    protected $primaryKey='id';
    protected $fillable=['Routine','Class1','Class2','Class3','Class4','Class5','Class6']; 
}
