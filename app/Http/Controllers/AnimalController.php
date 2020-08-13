<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animal;
use App\Mail\Mail_geolocalisation;
use Illuminate\Support\Facades\Mail;

class AnimalController extends Controller {
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

    public function showCard($id) {
        $animal = Animal::where('id', $id) -> first();
        return view('fiche', ['animal' => $animal]);
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

    public function sendLocation (Request $request) {
        $request -> validate([
            'latitude' => 'required',
            'longitude' => 'required',
            'id' => 'required|digits_between:1,11',
            'username' => 'required',
            'name' => 'required',
        ]);
    
        $data = [
            'latitude' => $request -> latitude,
            'longitude' => $request -> longitude,
            'id' => $request -> id,
            'username' => $request -> username,
            'name' => $request -> first_name,
        ];

        $proprio = Animal::where('id', $request -> id) -> first();
        $mail = $proprio -> user -> email;

        //TODO tester mail
        Mail::to ($mail) -> send (new Mail_geolocalisation ($data));
        return view ('confirmation_envoi');
    }
}
