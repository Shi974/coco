<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VetoController extends Controller {
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this -> middleware('auth:veto');
    }
    /**
     * show dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return view('veto_home');
    }
}
