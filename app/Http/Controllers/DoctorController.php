<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Doctor;
use App\Http\Requests;

class DoctorController extends Controller
{
    public function create(){
        $doctor = new Doctor();
        $doctor->fill(request()->json()->all());
        $doctor->save();
        return response()->json(['id' => $doctor->id]);
    }
    public function edit($id){
        $doctor = Doctor::find($id);
        $doctor->fill(request()->json()->all());
        $doctor->save();
        return response()->json($doctor);
    }
    public function delete($id){
        Doctor::destroy($id);
        return response()->json(['id' => $id]);
    }
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
    public function getAppointment($doctor_id, $appointment_id){
        $result = \App\Appointment::where([
            ['DOCTOR_id', intval($doctor_id)],
            ['id', intval($appointment_id)]
            ])->get();
        return response()->json($result[0]);
    }
    public function getForSpeciality($speciality_id){
        return response()->json(Doctor::where('SPECIALITY_id', intval($speciality_id))->get());
    }
}
