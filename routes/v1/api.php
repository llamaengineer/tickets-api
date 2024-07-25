<?php

use App\Http\Controllers\Api\V1\TicketController;
use App\Http\Controllers\AuthController;
use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::apiResource('tickets', TicketController::class);

Route::get('/tickets', function () {
    return Ticket::all();
});