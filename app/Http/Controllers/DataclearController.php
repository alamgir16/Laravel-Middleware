<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class DataclearController extends Controller {
    public function DataClear(Request $request) {
        Cookie::queue(Cookie::forget('name'));
    }
}
