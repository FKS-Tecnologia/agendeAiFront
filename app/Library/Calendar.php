<?php namespace App\Library;

use Jenssegers\Date\Date;

class Calendar {

	static function render() {
        $days=array('Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sabádo', 'Domingo');

        $begin = Date::now();
        $end = Date::now()->addDay(7);
        $interval = \DateInterval::createFromDateString('1 day');
        $days = new \DatePeriod($begin, $interval, $end);

        $begin = new Date( '08:00:00' );
        $end = new Date( '22:31:00' );
        $interval = \DateInterval::createFromDateString('15 minutes');
        $period = new \DatePeriod($begin, $interval, $end);


        return view('modules/calendar')
                        ->with('period', $period)
                        ->with('days', $days);
    }

}
