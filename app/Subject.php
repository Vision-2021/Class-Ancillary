<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $table='subjects';
    protected $primaryKey='id';
    protected $fillable=['Course_Code','Course_Title','Color']; 
}
