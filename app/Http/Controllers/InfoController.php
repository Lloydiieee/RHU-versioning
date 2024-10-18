<?php

namespace App\Http\Controllers;
use App\Models\InfoModel;
use App\Models\HealthModel;
use App\Models\RisksModel;
use App\Models\HistoryModel;
use App\Models\VaccinationModel;
use App\Models\TetanusToxoidModel;
use Illuminate\Http\Request;

class InfoController extends Controller
{
    public static function index(){
        $info = InfoModel::get();
        return view('pages.information.index')->with(['info' => $info]);
    }

    public static function registration(){
        $info = InfoModel::get();
        return view('pages.information.registration')->with(['info' => $info]);
    }

    public static function details(){
        $info = InfoModel::get();
        return view('pages.patients.details')->with(['info' => $info]);
    }

    public static function health(){
        $info = HealthModel::get();
        return view('pages.patients.health')->with(['info' => $info]);
    }
    public static function risk(){
        $info = RisksModel::get();
        return view('pages.patients.risk')->with(['info' => $info]);
    }
    public static function history(){
        $info = HistoryModel::get();
        return view('pages.patients.history')->with(['info' => $info]);
    }
    public static function vaccination(){
        $info = VaccinationModel::get();
        return view('pages.patients.vaccination')->with(['info' => $info]);
    }
    public static function tetanus_toxoid(){
        $info = TetanusToxoidModel::get();
        return view('pages.patients.tetanus-toxoid')->with(['info' => $info]);
    }
    public static function store(Request $request){
        // Validate the request
        $request->validate([
            'inp_name' => 'required|string|max:255',
            'inp_address' => 'required|string|max:255',
            'inp_civil_status' => 'required|string|max:255',
            'inp_religion' => 'required|string|max:255',
            'inp_philhealth' => 'required|string|max:255',
            'inp_philhealth_num' => 'required|string|max:255',
            'inp_age' => 'required|string|max:255',
            'inp_bloodtype' => 'required|string|max:255',
            'inp_birthdate' => 'required|string|max:255',
            'inp_weight' => 'required|string|max:255',
            'inp_contact_num' => 'required|string|max:255',
            'inp_gavida' => 'required|string|max:255',
            'inp_term' => 'required|string|max:255',
            'inp_preterm' => 'required|string|max:255',
            'inp_abortion' => 'required|string|max:255',
            'inp_live' => 'required|string|max:255',
        ]);

        InfoModel::create([
            'info_name' => $request->inp_name,
            'info_address' => $request->inp_address,
            'info_civil_status' => $request->inp_civil_status,
            'info_religion' => $request->inp_religion,
            'info_philhealth' => $request->inp_philhealth,
            'info_philhealth_num' => $request->inp_philhealth_num,
            'info_age' => $request->inp_age,
            'info_bloodtype' => $request->inp_bloodtype,
            'info_birthdate' => $request->inp_birthdate,
            'info_weight' => $request->inp_weight,
            'info_contact_num' => $request->inp_contact_num,
            'info_gavida' => $request->inp_gavida,
            'info_term' => $request->inp_term,
            'info_preterm' => $request->inp_preterm,
            'info_abortion' => $request->inp_abortion,
            'info_live' => $request->inp_live,
            
        ]);
    
        // Redirect back with success message
        return redirect()->back()->with( 'success', 'Information added successfully!');
    }
    public static function health_store(Request $request){
        // Validate the request
        $request->validate([
           
            'inp_hypertension' => 'required|string|max:255',
            'inp_tuberculosis' => 'required|string|max:255',
            'inp_diabetes' => 'required|string|max:255',
            'inp_bronchial' => 'required|string|max:255',
            'inp_goiter' => 'required|string|max:255',
            'inp_hepatitis' => 'required|string|max:255',
            'inp_smoking' => 'required|string|max:255',
            'inp_alcohol' => 'required|string|max:255',
            'inp_drugs' => 'required|string|max:255',
            'inp_abuse' => 'required|string|max:255',
            'inp_mp' => 'required|string|max:255',
            'inp_others' => 'required|string|max:255',
        ]);

        HealthModel::create([
            
            'h_hypertension' => $request->inp_hypertension,
            'h_tuberculosis' => $request->inp_tuberculosis,
            'h_diabetes' => $request->inp_diabetes,
            'h_bronchial' => $request->inp_bronchial,
            'h_goiter' => $request->inp_goiter,
            'h_hepatitis' => $request->inp_hepatitis,
            'h_smoking' => $request->inp_smoking,
            'h_alcohol' => $request->inp_alcohol,
            'h_drugs' => $request->inp_drugs,
            'h_abuse' => $request->inp_abuse,
            'h_multiple_partners' => $request->inp_mp,
            'h_others' => $request->inp_others,
            
        ]);
    
        // Redirect back with success message
        return redirect()->back()->with( 'success', 'Information added successfully!');
    }
    public static function risk_store(Request $request)
    {
        // Validate the request
        $request->validate([
            
            'r_age' => 'required|string|max:255',
            'r_multiparity' => 'required|string|max:255',
            'r_previous_cs' => 'required|string|max:255',
            'r_consecutive_miscarriages' => 'required|string|max:255',
            'r_stillbirth' => 'required|string|max:255',
            'r_malnourished' => 'required|string|max:255',
            'r_co_morbidity' => 'required|string|max:255',
            'r_postpartum_hemorrhage' => 'required|string|max:255',
            'r_menarchy' => 'required|string|max:255',
            'r_menstrual_flow_duration' => 'required|string|max:255',
            'r_pads_per_day' => 'required|string|max:255',
        ]);

        RisksModel::create([
           
            'r_age' => $request->r_age,
            'r_multiparity' => $request->r_multiparity,
            'r_previous_cs' => $request->r_previous_cs,
            'r_consecutive_miscarriages' => $request->r_consecutive_miscarriages,
            'r_stillbirth' => $request->r_stillbirth,
            'r_malnourished' => $request->r_malnourished,
            'r_co_morbidity' => $request->r_co_morbidity,
            'r_postpartum_hemorrhage' => $request->r_postpartum_hemorrhage,
            'r_menarchy' => $request->r_menarchy,
            'r_menstrual_flow_duration' => $request->r_menstrual_flow_duration,
            'r_pads_per_day' => $request->r_pads_per_day,
        ]);
        
        return redirect()->back()->with( 'success', 'Information added successfully!');
    }
    public static function history_store(Request $request){
        // Validate the request
    $request->validate([
        'inp_yod' => 'required|string|max:255',
        'inp_tod' => 'required|string|max:255',
        'inp_pod' => 'required|string|max:255',
        'inp_ba' => 'required|string|max:255',
        'inp_comp' => 'nullable|string|max:255',
        'inp_oop' => 'nullable|string|max:255',
        ]);

        HistoryModel::create([
            'obs_year_of_delivery'=> $request->inp_yod, 
            'obs_type_of_delivery'=> $request->inp_tod,
            'obs_place_of_delivery'=> $request->inp_pod,
            'obs_birth_attendant'=> $request->inp_ba,
            'obs_complications'=> $request->inp_comp,
            'obs_outcome_of_pregnancy'=> $request->inp_oop,
        ]);
    
        // Redirect back with success message
        return redirect()->back()->with( 'success', 'Record added successfully!');
    }
    public static function vaccination_store(Request $request)
    {
        // Validation
        $request->validate([
            'inp_hpv_dose_1' => 'required|date',
            'inp_hpv_dose_2' => 'required|date',
            'inp_hpv_dose_3' => 'required|date',
            'inp_hpv_deworming_date' => 'required|date',
            'inp_hpv_lmp' => 'required|string|max:255',
            'inp_hpv_edc' => 'required|string|max:255',
            'inp_hpv_birthplan' => 'required|string|max:255',
        ]);

        // Store data
        VaccinationModel::create([
            'hpv_dose_1' => $request->inp_hpv_dose_1,
            'hpv_dose_2' => $request->inp_hpv_dose_2,
            'hpv_dose_3' => $request->inp_hpv_dose_3,
            'hpv_deworming_date' => $request->inp_hpv_deworming_date,
            'hpv_lmp' => $request->inp_hpv_lmp,
            'hpv_edc' => $request->inp_hpv_edc,
            'hpv_birthplan' => $request->inp_hpv_birthplan,
        ]);

        return redirect()->back()->with('success', 'HPV Vaccination record added successfully!');
    }
    public static function tetanus_toxoid_store(Request $request)
    {
        // Validate the request
        $request->validate([
            'tt_tt1' => 'required|string|max:255',
            'tt_tt2' => 'required|string|max:255',
            'tt_tt3' => 'required|string|max:255',
            'tt_tt4' => 'required|string|max:255',
            'tt_tt5' => 'required|string|max:255',
            'tt_fim' => 'required|string|max:255',
        ]);

        // Create a new Tetanus Toxoid record
        TetanusToxoidModel::create([
            'tt_tt1' => $request->tt_tt1,
            'tt_tt2' => $request->tt_tt2,
            'tt_tt3' => $request->tt_tt3,
            'tt_tt4' => $request->tt_tt4,
            'tt_tt5' => $request->tt_tt5,
            'tt_fim' => $request->tt_fim,
        ]);
        
        return redirect()->back()->with('success', 'Tetanus Toxoid record added successfully!');
    }
}