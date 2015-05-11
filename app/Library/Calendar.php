<?php namespace App\Library;

use Jenssegers\Date\Date;
use Illuminate\Support\Facades\Input as Input;

class Calendar {

	static function render($view='day') {
        $view=Input::get('view');

        if(!in_array($view, ['day', 'week', 'month'])) {
            $view='day';
        }

        return call_user_func('self::calendar_'.$view);
    }

    static function calendar_day($step='15') {
        $begin = Date::now();
        $end = Date::now()->addDay(1);
        $interval = \DateInterval::createFromDateString('1 day');
        $days = new \DatePeriod($begin, $interval, $end);

        $begin = new Date( '08:00:00' );
        $end = new Date( '22:31:00' );
        $interval = \DateInterval::createFromDateString($step.' minutes');
        $period = new \DatePeriod($begin, $interval, $end);

        return view('associate/modules/calendar_day')
            ->with('period', $period)
            ->with('days', $days);
    }

    static function calendar_week($step='15') {
        $begin = Date::now();
        $end = Date::now()->addDay(7);
        $interval = \DateInterval::createFromDateString('1 day');
        $days = new \DatePeriod($begin, $interval, $end);

        $begin = new Date( '08:00:00' );
        $end = new Date( '22:31:00' );
        $interval = \DateInterval::createFromDateString($step.' minutes');
        $period = new \DatePeriod($begin, $interval, $end);


        return view('associate/modules/calendar_week')
            ->with('period', $period)
            ->with('days', $days);
    }

    static function calendar_month() {
        $begin = Date::createFromDate(Date::now()->year, '01', '01');

        $end = Date::createFromDate(Date::now()->year, '01', '01')->addYear(1);
        $interval = \DateInterval::createFromDateString('1 month');
        $moths = new \DatePeriod($begin, $interval, $end);

        return view('associate/modules/calendar_moth')
            ->with('moths', $moths);
    }

    static function holyday_choose() {
        return view('associate/modules/holyday_choose');
    }

}
