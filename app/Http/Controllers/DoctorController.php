<?php

namespace App\Http\Controllers;
use App\Doctor;

use Illuminate\Http\Request;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('doctors.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $doctor= new Doctor();
        $doctor->title = $request->title;
        $doctor->name = $request->name;
        $doctor->gender = $request->gender;
        $doctor->speciality = $request->speciality;
        $doctor->phone_no = $request->phone;
        $doctor->email = $request->email;
        $doctor->url = str_slug($request->name);
        if ($request->hasFile('picture')) {
            $picName = "DOC".uniqid().time().'.'.$request->picture->getClientOriginalExtension();
            $request->picture->move(public_path().'/uploads/', $picName);
            $doctors->picture='uploads/'.$picName;
        }
        $doctors->save();
        return redirect('doctors');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($url)
    {
        if(!$doctor){
            abort(404);
        }
     $doctor = Doctor::where('url', $url)->first();
     return view('doctors.show',compact('doctor'));   
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $doctor = Doctor::findOrFail($id);
        return view('doctors.edit',compact('doctor'));
    }

 public function delete($id)
    {
        $doctor = Doctor::findOrFail($id);
        return view('doctors.delete',compact('doctor'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $doctor = Doctor::FindOrFail($id);
        $doctor->title = $request->title;
        $doctor->name = $request->name;
        $doctor->gender = $request->gender;
        $doctor->speciality = $request->speciality;
        $doctor->phone_no = $request->phone;
        $doctor->email = $request->email;
        if ($request->hasFile('picture')) {
            $picName = "DOC".uniqid().time().'.'.$request->picture->getClientOriginalExtension();
            $request->picture->move(public_path().'/uploads/', $picName);
            $doctors->picture='uploads/'.$picName;
        }
        $doctor->save();
        return redirect('doctors');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $doctor = Doctor::FindOrFail($id);
        $doctor->delete();
        return redirect('/');
    }
}
