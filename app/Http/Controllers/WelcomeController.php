<?php

namespace App\Http\Controllers;

class WelcomeController extends Controller {
    public function __construct() {
        $this->middleware('demo');
    }

    public function WelcomePage() {
        return view('welcome');
    }
}
