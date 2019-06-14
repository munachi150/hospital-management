@extends('layouts.master')

@section('title')
Delete Doctor
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
	<form method="post" action="{{url('doctors/delete/'.$doctor->id)}}" enctype="multipart/form-data">
		@csrf
<div class="row clearfix">
    <div class="col-sm-6">

        <div class="form-group">
            <div class="form-line">
                <p>{{$doctor->title}}</p>
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <div class="form-line">
                <p>{{$doctor->name}}</p>
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
   <!--  <div class="col-sm-3">
        <div class="form-group drop-custum">
            <select class="form-control show-tick" name="gender" required="">
                <option value="">-- Gender --</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select>
        </div>
    </div> -->
    <div class="col-sm-3">
        <div class="form-group">
            <div class="form-line">
                <p>{{$doctor->speciality}}</p>
            </div>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="form-group">
            <div class="form-line">
                <p>{{$doctor->phone_no}}</p>
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <div class="form-line">
<p>{{$doctor->email}}</p>
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
        <button type="submit" class="btn btn-raised g-bg-cyan">Delete</button>
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