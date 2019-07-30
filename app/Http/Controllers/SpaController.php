<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class SpaController extends Controller
{

    /**
     * Return main page, list employee
     *
     * @return void
     */
    public function index(){
        return response()->file(public_path("client/index.html"));
    }
}
