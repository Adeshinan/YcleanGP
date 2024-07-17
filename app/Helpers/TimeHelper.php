<?php

namespace App\Helpers;

use Carbon\Carbon;

class TimeHelper
{
    public static function formatTime($timestamp)
    {
        $time = Carbon::parse($timestamp);
        $now = Carbon::now();
        $diffInSeconds = $now->diffInSeconds($time);
        $diffInMinutes = $now->diffInMinutes($time);
        $diffInHours = $now->diffInHours($time);
        $diffInDays = $now->diffInDays($time);

        if ($diffInSeconds < 60) {
            return 'il y a ' . $diffInSeconds . ' secondes';
        } elseif ($diffInMinutes < 60) {
            return 'il y a ' . $diffInMinutes . ' minutes';
        } elseif ($diffInHours < 24) {
            return $time->format('H:i');
        } else {
            return $time->format('d/m/Y H:i');
        }
    }
}