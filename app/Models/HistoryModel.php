<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistoryModel extends Model
{
    use HasFactory;
    protected $table = 't_history';
    protected $fillable = [
        'obs_patient_id',
        'obs_year_of_delivery',
        'obs_type_of_delivery',
        'obs_place_of_delivery',
        'obs_birth_attendant',
        'obs_complications',
        'obs_outcome_of_pregnancy',

        ];
}
