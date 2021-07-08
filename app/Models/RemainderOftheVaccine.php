<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RemainderOftheVaccine extends Model
{
    use HasFactory;
    protected $table = 'the_remainder_of_the_vaccine';
    protected $fillable = ['hospitalId', 'typeOfVaccineId', 'count'];

    public function hospitalName(){
        return $this->hasOne('App\Models\Hospital', 'id', 'hospitalId');
    }
}
