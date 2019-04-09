<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dailymodel extends Model
{
   protected $table='dailymodels';
    protected $primaryKey='id';
    protected $fillable=['Routine','class','Status'];
}
