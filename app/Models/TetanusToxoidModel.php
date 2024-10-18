<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TetanusToxoidModel extends Model
{
    use HasFactory;
    protected $table = 't_tetanus_toxoids';
    protected $fillable = [
        'patient_id',
        'tt_tt1',
        'tt_tt2',
        'tt_tt3',
        'tt_tt4',
        'tt_tt5',
        'tt_fim',
    ];
}
