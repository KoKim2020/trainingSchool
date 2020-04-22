@extends('template')
@section('content')
<h1>Create New Course</h1>
<br>


@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form method="post" action="{{route('courses.store')}}"  enctype="multipart/form-data">
  @csrf
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
    <div class="col-sm-10">
      <input type="name" class="form-control" name="name" placeholder="Name">
    </div>
  </div>
  <!-- --------------------------- -->

  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">logo</label>
    <div class="col-sm-10">
      <input type="file" class="form-control-file" name="logo" placeholder="Logo">
    </div>
  </div>
  <!-- ---------------------------------------- -->
  
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Outline</label>
    <div class="col-sm-10">
      <input type="outlines" class="form-control"  name="outlines" placeholder="Outline">
    </div>
  </div>
  <!-- ---------------------------------- -->
   <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">fees</label>
    <div class="col-sm-10">
      <input type="fees" class="form-control" placeholder="fees" name="fees">
    </div>
  </div>
  <!-- --------------------------------- -->
   <!-- --------------------------------- -->
    <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">During</label>
    <div class="col-sm-10">
      <input type="outline" class="form-control" placeholder="Outline" name="during">
    </div>
  </div>
  
       <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">During</label>
    <div class="col-sm-10">
      <input type="outline" class="form-control" placeholder="Outline" name="duration">
    </div>
  </div>


  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Save</button>
    </div>
  </div>
</form>



@endsection