<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Models\HealthRecord;
use Auth;

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
        $carnet = HealthRecord::where('id', $id) -> with('animals') -> first();
        $url = str_replace(url('/'), '', url()->previous());
        if ($url == "/home") {
            $this -> authorize ('userIsOwner', $carnet); 
            return view ('auth.carnet_user', ['carnet' => $carnet]);
        } else if ($url == "/veto") {
            $veto_view = true;
            //TODO mettre un gate
            // $veto = Auth::guard('veto') -> user();
            // $this -> authorize ('vetIsAllowed', [$veto, $carnet]); 
            return view ('auth.carnet_user', ['carnet' => $carnet, 'veto_view' => $veto_view]);
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
}
