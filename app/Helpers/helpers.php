<?php

use Carbon\Carbon;

function isActive(string $route, string $activeClass = 'active', string $notActiveClass = '')
{
    try {
        return request()->routeIs($route);
    } catch (\Throwable $exception) {
        report($exception);
        return false;
    }
}

function dateFormat($date): string
{
    try {
        $date = Carbon::parse($date);
        return $date->format('M, d Y');
    } catch (\Throwable $exception) {
        report($exception);
        return $date;
    }
}
