<?php

namespace App\Http\Controllers;

use App\Doctor;
use App\Patient;

use Illuminate\Http\Request;

class PageController extends Controller
{
    function home()
    {
    	return view('pages.Homepage');
    }
    function doctor_schedule()
    {
    	return view('pages.doctor_schedule');
    }
    function book_appointment(){

    	return view('pages.book_appointment');
    }

    function all_doctors(){
        $doctors = Doctor::all();
    	return view('pages.all_doctors', compact('doctors'));

    }
    function add_doctor(){
    	return view('pages.add_doctor');
    }
    function doctor_profile(){

    	return view('pages.doctor_profile');
    }
    function all_patients(){
        $patients = Patient::all();
    	return view ('pages.all_patients', compact('patients'));
    }
    function add_patient(){
    	return view('pages.add_patient');
    }
    function patient_profile(){
    	return view('pages.patient_profile');
    }
    function patient_invoice(){

    	return view('pages.patient_invoice');
    }
}
