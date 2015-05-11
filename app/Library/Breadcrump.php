<?php namespace App\Library;

use App\Http\Requests;
use App\Library\Calendar;
use App\Http\Controllers\Controller;

class Breadcrump {

	static function render($links=null) {
        if(!is_array($links)) {
            $links=[];
        };

        return view('associate/modules/breadcrump')
                ->with('links', $links);
    }

}
