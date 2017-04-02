<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Doctor;
use App\Http\Requests;

class DoctorController extends Controller
{
    //
    public function show(){
        $doctors = Doctor::all();
        return response()->json($doctors);
    }
    public function get(){
        $id = request()->route("id");
        $doctor = Doctor::find($id);
        return response()->json($doctor);
    }
    public function getAppointments(){
        $id = request()->route("id");
        $doctor = Doctor::find($id);
        $appointments = $doctor->appointments;
        return response()->json($appointments);
    }
}
