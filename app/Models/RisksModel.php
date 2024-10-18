<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RisksModel extends Model
{
    use HasFactory;

    protected $table = 't_risks';

    protected $fillable = [
        'r_age', 
        'r_multiparity', 
        'r_previous_cs', 
        'r_consecutive_miscarriages', 
        'r_stillbirth', 
        'r_malnourished', 
        'r_co_morbidity', 
        'r_postpartum_hemorrhage', 
        'r_menarchy', 
        'r_menstrual_flow_duration', 
        'r_pads_per_day',
    ];

}
