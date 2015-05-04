<?php namespace App\Http\Controllers\Associate;

use App\Http\Requests;
use App\Library\Calendar;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class AssociateController extends Controller {

    function getIndex() {
        return redirect('associado/calendario');
    }

    function getCalendario() {

        $calendar=Calendar::render();
        $services=['Banho', 'Tosa - Pequeno', 'Tosa - Grande'];

        return view('associate/calendar')
                    ->with('title', 'Calendário')
                    ->with('breads', ['Calendário' => 'associado/calendario'])
                    ->with('calendar', $calendar)
                    ->with('services', $services);
    }

}
