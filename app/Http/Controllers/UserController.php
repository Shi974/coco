<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller {
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $user = User::where('id', $id) -> first();
        return view('auth.profil_update', ['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        $user = $request -> all ();

        $request -> validate ([
            "email" => 'required|email',
            "phone" => 'required|min:10|max:10',
            "phone_plus" => 'nullable|min:10|max:10',
            "address" => 'required|min:5|max:255',
            "address_plus" => 'nullable|min:5|max:255',
            "postal_code" => 'required|min:5|max:5',
            "city" => 'required|min:3|max:50'
        ]);
         
        User::where('id', $id) -> update ([
            'email' => $request -> email,
            'phone' => $request -> phone,
            'phone_plus' => $request -> phone_plus,
            'address' => $request -> address,
            'address_plus' => $request -> address_plus,
            'postal_code' => $request -> postal_code,
            'city' => $request -> city
        ]);
 
        return redirect() -> route('home') -> with ('message', "Informations mises à jour.");
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
