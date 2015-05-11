<?php namespace App\Library;

use Illuminate\Support\Facades\Input as Input;
use Jenssegers\Date\Date;

class Forms {

	static function search($s=null) {

        return view('associate/modules/helpers/box_search')
                        ->with('s', $s);
    }


    /*
     *
     * Piece of forms
     */
    static function input($name, $label, $value=null, $class=null) {
        $class='form-control '.$class;

        return view('associate/modules/helpers/form_input')
            ->with('label', $label)
            ->with('value', $value)
            ->with('name', $name)
            ->with('class', $class);
    }

    static function phone($name, $label, $value=null) {
        return self::input($name, $label, $value, 'phone');
    }

    static function price($name, $label, $value=null) {
        return self::input($name, $label, $value, 'price');
    }

    static function file($name, $label, $value=null) {
        return view('associate/modules/helpers/form_file')
            ->with('label', $label)
            ->with('value', $value)
            ->with('name', $name);
    }

    static function email($name, $label, $value=null) {

        return view('associate/modules/helpers/form_email')
            ->with('label', $label)
            ->with('value', $value)
            ->with('name', $name);
    }

    static function password($name, $label, $value=null) {

        return view('associate/modules/helpers/form_password')
            ->with('label', $label)
            ->with('value', $value)
            ->with('name', $name);
    }

    static function textarea($name, $label, $value=null, $size=5) {

        return view('associate/modules/helpers/form_textarea')
            ->with('label', $label)
            ->with('value', $value)
            ->with('size', $size)
            ->with('name', $name);
    }

    static function select($name, $label, $itens=[], $value=null) {

        return view('associate/modules/helpers/form_select')
            ->with('label', $label)
            ->with('value', $value)
            ->with('itens', $itens)
            ->with('name', $name);
    }

    static function radio($group, $value, $label='', $default=null, $checked=false) {
        if(Input::has($group)) {
            $checked=(Input::old($group) == $value);
        } elseif($default==$value) {
            $checked=true;
        }


        return view('associate/modules/helpers/form_radio')
            ->with('label', $label)
            ->with('value', $value)
            ->with('group', $group)
            ->with('checked', $checked);
    }

    static function date($name, $label, $value=null) {
        if(empty($value)) {
            $value=Date::now()->format('d/m/Y');
        }

        return view('associate/modules/helpers/form_date')
            ->with('label', $label)
            ->with('value', $value)
            ->with('name', $name);
    }

    static function time($name, $label, $value=null, $showMeridian=true) {

         return view('associate/modules/helpers/form_time')
            ->with('label', $label)
            ->with('showMeridian', $showMeridian)
            ->with('value', $value)
            ->with('name', $name);
    }

    static function weeks($name, $label, $value=null) {
        $weeks=\App\Date::get_week();

        if(empty($value)) {
            $value=$weeks;
        }

        return view('associate/modules/helpers/form_weeks')
            ->with('label', $label)
            ->with('value', $value)
            ->with('weeks', $weeks)
            ->with('name', $name);
    }

}
