<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class DatagetController extends Controller {
    public function DataGet(Request $request) {
        return Cookie::get('name');
    }
}
