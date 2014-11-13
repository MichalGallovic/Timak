<?php

function set_active($path, $active = 'active') {
    return Request::is($path) ? $active : '';
}

function dotdotdot($string) {
    if(strlen($string) > 400) {
        return substr($string,0,400) . " ...";
    } else {
        return $string;
    }
}

function localizedDate($date) {
	//@TODO this did not work
    // return strftime('%e. %B %Y', strtotime($date->formatLocalized('%A %d %B %Y')));
    return $date->toFormattedDateString();
}

function currentUserFullname() {
    return Auth::user()->firstname." ".Auth::user()->lastname;
}