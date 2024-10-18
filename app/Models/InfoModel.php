<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InfoModel extends Model
{
    
    use HasFactory;
     // Suggested Model Fillable
     protected $table = 't_patient_information';
     protected $fillable = [
        'info_name',
        'info_address',
        'info_civil_status',
        'info_religion',
        'info_philhealth',
        'info_philhealth_num',
        'info_age',
        'info_bloodtype',
        'info_birthdate',
        'info_weight',
        'info_contact_num',
        'info_gavida',
        'info_term',
        'info_preterm',
        'info_abortion',
        'info_live',
    ];
}
