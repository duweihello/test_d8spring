<?php

namespace MyGreeter;

class Client {

    /**
     * getGreeting
     * @description say greetings based on local time
     *      1. "Good morning" if it is after 12am and just before 12pm
     *      2. "Good afternoon" if it is after 12pm and just before 6pm
     *      3. "Good evening" if it is after 6pm and just before 12am
     * @return string
     */
    public function getGreeting() {
        $greeting = 'Good morning';
        $h = intval(date('G'));
        if ($h >= 0 && $h < 12) {
            $greeting = 'Good morning';
        } elseif ($h >= 12 && $h < 18) {
            $greeting = 'Good afternoon';
        } elseif ($h >= 18 && $h < 24) {
            $greeting = 'Good evening';
        }
        return $greeting;
    }

}
