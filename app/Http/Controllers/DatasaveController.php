<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class DatasaveController extends Controller {
    public function DataSave(Request $request) {
        Cookie::queue('name', 'Alamgir Hossain', 40000);
    }
}
