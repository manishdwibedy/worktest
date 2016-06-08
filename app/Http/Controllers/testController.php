<?php

namespace App\Http\Controllers;

use App\testUser;
use Illuminate\Http\Request;

use App\Http\Requests;

class testController extends Controller
{
    function __construct() {
        $user = new testUser();
    }

    function index() {
        return view('testView');
    }

    function arrayOfProperties() {
        // TO DO
    }
}
