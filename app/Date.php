<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Date extends Model {

	static function get_week() {
        return ['Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sabádo'];
    }

}
