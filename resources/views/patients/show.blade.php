@extends ('layouts.master')

@section ('title')

Patients Profile 
@endsection

@section ('content')
<section class="content profile-page">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Patient Profile</h2>
            <small class="text-muted">Welcome to Swift application</small>
        </div>        
        <div class="row clearfix">
            <div class="col-lg-4 col-md-12 col-sm-12">
                <div class=" card patient-profile">
                    <img src="{{url($patient->picture)}}" class="img-fluid" alt="">                              
                </div>
                <div class="card">
                    <div class="header">
                        <h2>About Patient</h2>
                    </div>
                    <div class="body">
                        <strong>Name</strong>
                        <p>{{$patient->first_name}}{{$patient->last_name}}</p>
                        <strong>Occupation</strong>
                        <p>{{$patient->occupation}}</p>
                        <strong>Email ID</strong>
                        <p>{{$patient->email}}</p>
                        <strong>Phone</strong>
                        <p>(+234) {{$patient->phone_no}}</p>
                        <hr>
                        <strong>Address</strong>
                        <address>{{$patient->address}}</address>
                    </div>
                </div>
            </div>
            
    </div>
</section>

@endsection