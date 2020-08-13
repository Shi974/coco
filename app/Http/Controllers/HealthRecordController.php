<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Models\HealthRecord;
use App\Models\Treatment;
use Auth;
use Carbon\Carbon;

class HealthRecordController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
    }

    // Show le carnet de santé si propriétaire de l'animal
    // TODO donner autorisation vétérinaire + faire multiple gates
    // https://laravel.com/docs/7.x/authorization#introduction
    public function showCarnet($id) {
        $carnet = HealthRecord::where('id', $id) -> with('animals', 'treatments') -> first();
        $appointment = [];
        foreach ($carnet -> treatments as $item) {
            if ($item -> type == "Consultation vétérinaire") {
                array_push($appointment, array(
                    'rdv' => $item -> date
                ));
            }
        }
        if (count($appointment) > 1) {
            $appointment = max($appointment);
            $appointment = implode($appointment);
            if($appointment < Carbon::now()){
                $appointment = null;
            }
        } else if (count($appointment) == 0 ) {
            $appointment = null;
        } else if (count($appointment) == 1) {
            $appointment = implode($appointment[0]);
            if($appointment < Carbon::now()){
                $appointment = null;
            }
        }
        $url = str_replace(url('/'), '', url() -> previous());
        if ($url == "/home") {
            $this -> authorize ('userIsOwner', $carnet); 
            return view ('auth.carnet_user', ['carnet' => $carnet, 'appointment' => $appointment]);
        } else if ($url == "/veto") {
            $veto_view = true;
            //TODO mettre un gate
            // $veto = Auth::guard('veto') -> user();
            // $this -> authorize ('vetIsAllowed', [$veto, $carnet]); 
            return view ('auth.carnet_user', ['carnet' => $carnet, 'veto_view' => $veto_view, 'appointment' => $appointment]);
        } else {
            return view ('errors.403');
        }
    }

    public function showCarnet_veto ($id) {
        $carnet = HealthRecord::where('id', $id) -> with('animals') -> first();
        $this -> authorize ('vetIsAllowed', $carnet); 
        return view ('auth.carnet_user', ['carnet' => $carnet]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
    }

    // ___________ TREATMENTS
    public function addSoin ($id) {
        return view ('auth.soin_nouveau', ['id' => $id]);
    }

    public function storeSoin (Request $request, $id) {
        $treatment = new Treatment;
        $request -> validate([
            "sante_soin" => "required|string|max:5",
            "type" => "required|string|max:255",
            "date" => "required",            
            "produit_nom" => "nullable|string|max:255",
            "effectue_par" => "nullable|string|max:255",
            "remarques" => "nullable|string|max:255",
            "rappel" => "nullable|string|max:3",
        ]);

        $treatment -> sante_soin = $request -> sante_soin;
        $treatment -> type = $request -> type;
        $treatment -> date = $request -> date;
        $treatment -> nom_produit = $request -> produit_nom;
        $treatment -> effectue_par = $request -> effectue_par;
        $treatment -> remarques = $request -> remarques;
        $treatment -> rappel = $request -> rappel;
        $treatment -> created_at = now();
        $treatment -> health_records_id = $id;
        $treatment -> save();

        //TODO rajouter message flash
        return redirect("/home") -> with ('message', "Soin ajouté <i class='fas fa-check-circle ml-1'></i>");
    }
}
