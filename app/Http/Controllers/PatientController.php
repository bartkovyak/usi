<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patient;
use App\Http\Requests;

class PatientController extends Controller
{
    public function create() {
        $patient = new Patient();
        $patient->fill(request()->json()->all());
        $patient->save();
        return response()->json(['id' => $patient->id]);
    }
    public function delete($id) {
        Patient::destroy($id);
        return response()->json(['id' => $id]);
    }
    public function get($id) {
        return response()->json(Patient::find($id));
    }
    public function getAppointments($patient_id) {
        return response()->json(Patient::find($patient_id)->appointments()->getResults());
    }
    public function getAppointment($patient_id, $appointment_id) {
        $result = \App\Appointment::all()->where('PATIENT_id', intval($patient_id))->where('id', intval($appointment_id));
	$first_prop = array();
	foreach($result as $prop) {
	    $first_prop = $prop;
	    break; 
	 } 
        return response()->json($first_prop);
    }
    public function show() {
        return response()->json(Patient::all());
    }
}
