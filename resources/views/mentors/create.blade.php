@extends('template')
@section('content')
<h1>New</h1>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="post" action="{{route('mentors.store')}}"  enctype="multipart/form-data">
  @csrf
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
    <div class="col-sm-10">
      <input type="name" class="form-control" name="name" placeholder="Name">
    </div>
  </div>
  <!-- --------------------------- -->

  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" name="email" placeholder="Logo">
    </div>
  </div>
  <!-- ---------------------------------------- -->
  
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Address</label>
    <div class="col-sm-10">
      <input type="outlines" class="form-control"  name="address" placeholder="Outline">
    </div>
  </div>
  <!-- ---------------------------------- -->
   <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Phone Number</label>
    <div class="col-sm-10">
      <input type="fees" class="form-control" placeholder="" name="phone">
    </div>
  </div>
  <!-- --------------------------------- -->
   <!-- --------------------------------- -->
    <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Portfolio</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" placeholder="Outline" name="portfolio">
    </div>
  </div>
  
   

  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Save</button>
    </div>
  </div>
</form>


@endsection