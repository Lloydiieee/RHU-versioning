<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HealthModel extends Model
{
    use HasFactory;
    protected $table = 't_health';
    protected $fillable = [
        'h_hypertension',
        'h_tuberculosis',
        'h_diabetes',
        'h_bronchial',
        'h_goiter',
        'h_hepatitis',
        'h_smoking',
        'h_alcohol',
        'h_drugs',
        'h_abuse',
        'h_multiple_partners',
        'h_others',
    ];
}
