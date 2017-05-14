<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Speciality;
use App\Http\Requests;

class SpecialityController extends Controller
{
    public function get() {
        return response()->json(Speciality::find(request()->route("id")));
    }
    public function show() {
        return response()->json(Speciality::all());
    }
}
