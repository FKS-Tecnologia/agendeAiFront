<?php namespace App\Http\Controllers\Associate;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class UserController extends Controller {

	function getIndex() {
        $users=['Felipe Signorini', 'Priscila Shimeji', 'Carlos'];

        return view('associate/user_index')
            ->with('title', 'Usuários')
            ->with('breads', ['Usuários' => 'associado/usuarios'])
            ->with('users', $users);
    }

}
