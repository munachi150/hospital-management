<?php

namespace App\Http\Controllers;
use\App\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
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
        return view('patients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $patient= new Patient();
        $patient->first_name = $request->first_name;
        $patient->last_name = $request->last_name;
        $patient->phone_no = $request->phone_no;
        $patient->age = $request->age;
        $patient->address = $request->address;
        $patient->gender = $request->gender;
        $patient->email = $request->email;
        $patient->occupation = $request->occupation;
        $patient->url = str_slug($request->first_name);
        if ($request->hasFile('picture')) {
            $picName = "PAT".uniqid().time().'.'.$request->picture->getClientOriginalExtension();
            $request->picture->move(public_path().'/uploads/', $picName);
            $patient->picture = 'uploads/'.$picName;
        }
        $patient->save();
        return redirect('patients/files/'.$patient->url);

    }
     
     public function file_create($url)
     {
        return view('patients.files_create');
     }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($url)
    {
        $patient =  Patient::where('url', $url)->first();
        if (!$patient){
            abort(404);
        }
        return view('patients.show', compact('patient'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    
    {
        $patient = Patient::findOrFail($id);
        return view('patients.edit', compact('patient'));
    }


    public function delete($id)
    
    {
        $patient = Patient::findOrFail($id);
        return view('patients.delete', compact('patient'));
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
        $patient = Patient::FindOrFail($id);
        $patient->first_name = $request->first_name;
        $patient->last_name = $request->last_name;
        $patient->phone_no = $request->phone_no;
        $patient->age = $request->age;
        $patient->address = $request->address;
        $patient->occupation = $request->occupation;
        $patient->gender = $request->gender;
        $patient->email = $request->email;
        if ($request->hasFile('picture')) {
            $picName = "PAT".uniqid().time().'.'.$request->picture->getClientOriginalExtension();
            $request->picture->move(public_path().'/uploads/', $picName);
            $patient->picture = 'uploads/'.$picName;
        } $patient->save();
        return redirect('patients');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $patient = Patient::findOrFail($id);
        $patient->delete();
        return redirect('/');
    }
}
