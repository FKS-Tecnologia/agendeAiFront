<?php namespace App\Http\Controllers\Associate;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class AssociateController extends Controller {

    function index() {
        return view('associate/index');
    }

}
