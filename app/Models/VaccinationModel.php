<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VaccinationModel extends Model
{
    use HasFactory;

    protected $table = 't_hpv_vaccination';

    protected $fillable = [
        'hpv_patient_id', 
        'hpv_dose_1', 
        'hpv_dose_2', 
        'hpv_dose_3', 
        'hpv_deworming_date', 
        'hpv_lmp', 
        'hpv_edc', 
        'hpv_birthplan'
    ];
}
