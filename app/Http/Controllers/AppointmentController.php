<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Appointment;
use App\Http\Requests;

class AppointmentController extends Controller
{
    public function get() {
        return response()->json(Appointment::find(request()->route("id")));
    }
    public function show() {
        return response()->json(Appointment::all());
    }
}
