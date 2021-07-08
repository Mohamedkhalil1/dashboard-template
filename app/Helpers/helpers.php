<?php
function isActive(string $route, string $activeClass = 'active', string $notActiveClass = '')
{
    try {
        return request()->routeIs($route);
    } catch (\Throwable $exception) {
        report($exception);
        return false;
    }
}
