<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeOfVaccine extends Model
{
    use HasFactory;
    protected $table = 'type_of_vaccine';
    protected $fillable = ['name'];
}
