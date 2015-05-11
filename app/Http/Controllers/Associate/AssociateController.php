<?php namespace App\Http\Controllers\Associate;

use App\Http\Requests;
use App\Library\Calendar;
use App\Http\Controllers\Controller;
use Jenssegers\Date\Date;

use Illuminate\Http\Request;

class AssociateController extends Controller {

    function getIndex() {
        return redirect('associado/calendario');
    }

    function getCalendario() {

        $calendar=Calendar::render();


        $services=['Banho', 'Tosa', 'Corte'];
        $clients=['Anitta', 'Felipe', 'Roberto'];
        $sizes=['Pequeno', 'Medio', 'Grande'];

        return view('associate/calendar')
                    ->with('title', 'Calendário - '.Date::now()->format('d/m/Y'))
                    ->with('breads', ['Calendário' => 'associado/calendario'])
                    ->with('calendar', $calendar)
                    ->with('clients', $clients)
                    ->with('sizes', $sizes)
                    ->with('services', $services);
    }

}
