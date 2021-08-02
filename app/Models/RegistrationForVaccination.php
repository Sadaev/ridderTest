<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property string email
 * @property string status
 */
class RegistrationForVaccination extends Model
{
    use HasFactory;
    protected $table = 'registration_for_vaccination';
    protected $fillable = ['fio', 'tel', 'vaccinationTypeId', 'hospitalId', 'dateOfVaccination', 'iin', 'status','email'];
}
