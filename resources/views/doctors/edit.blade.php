@extends('layouts.master')

@section('title')
Update Doctor
@endsection

@section('content')

<section class="content">
<div class="container-fluid">
<div class="block-header">
<h2>Update Doctor</h2>
<small class="text-muted">Welcome to Swift application</small>
</div>
<div class="row clearfix">
<div class="col-lg-12 col-md-12 col-sm-12">
<div class="card">
<div class="header">
<h2>Basic Information <small>Description text here...</small> </h2>

</div>
<div class="body">
	<form method="post" action="{{url('doctors/edit/'.$doctor->id)}}" enctype="multipart/form-data">
		@csrf
<div class="row clearfix">
    <div class="col-sm-6">

        <div class="form-group">
            <div class="form-line">
                <input type="text" class="form-control" name="title" placeholder="Title" required="" value="{{$doctor->title}}">
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <div class="form-line">
                <input type="text" class="form-control" name="name" placeholder="Name" required="" value="{{$doctor->name}}" >
            </div>
        </div>
    </div>
</div>

<div class="row clearfix">
  <!--   <div class="col-sm-3">
        <div class="form-group">
            <div class="form-line">
                <input type="text" class="datepicker form-control" placeholder="Date of Birth">
            </div>
        </div>
    </div>
 -->
    <div class="col-sm-3">
        <div class="form-group drop-custum">
            <select class="form-control show-tick" name="gender" required="" value="{{$doctor->gender}}" >
                <option value="">-- Gender --</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="form-group">
            <div class="form-line">
                <input type="text" class="form-control" name="speciality" placeholder="Speciality"  required="" value="{{$doctor->speciality}}">
            </div>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="form-group">
            <div class="form-line">
                <input type="text" class="form-control" name="phone" placeholder="Phone" required="" value="{{$doctor->phone_no}}">
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <div class="form-line">
                <input type="email" class="form-control" name="email" placeholder="Enter Your Email" required="" value="{{$doctor->email}}">
            </div>
        </div>
    </div>

   <!--  <div class="col-sm-6">
        <div class="form-group">
            <div class="form-line">
                <input type="text" class="form-control" placeholder="">
            </div>
        </div>
    </div>
    --> 
    <div class="col-sm-12">
        <div class="form-group">
            <div class="form-line">
                 @if($doctor->picture)
                <img src="{{url($doctor->picture)}}">  
                @endif          </div>
        </div>

    </div>
    <div class="col-sm-12">
        <button type="submit" class="btn btn-raised g-bg-cyan">Update</button>
        <button type="submit" class="btn btn-raised">Cancel</button>
    </div>
</div>
</div>
</div>
</div>
</div>
</form>

</div>
</section>
@endsection