<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\PreventRequestsDuringMaintenance as Middleware;

class PreventRequestsDuringMaintenance extends Middleware
{
    protected function handleMaintenanceMode($request)
    {
        return response()->view('maintenance', [], 503);
    }
}
