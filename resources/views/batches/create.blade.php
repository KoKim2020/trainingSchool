@extends('template')
@section('content')
<h1>Create New Batch</h1>
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
<!-- ---------------------------------------------------- -->
<form method="post" action="{{route('batches.store')}}">
  @csrf
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Title</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="title" placeholder="title">
    </div>
  </div>
  <!-- --------------------------- -->
  
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">StartDate</label>
    <div class="col-sm-10">
      <input type="date" class="form-control"  name="startdate" placeholder="StartDate">
    </div>
  </div>
  <!-- ---------------------------------- -->
   <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">EndDate</label>
    <div class="col-sm-10">
      <input type="date" class="form-control" placeholder="EndDate" name="enddate">
    </div>
  </div>
  <!-- --------------------------------- -->
   <!-- --------------------------------- -->
    <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Time</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" placeholder="Time" name="time">
    </div>
  </div>
  
       <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Course_Id</label>
    <div class="col-sm-10">
    	
      <select name="course_id" >
      	@foreach($courses as $row)
  <option  value="{{$row->id}}">{{$row->name}}</option>
  <!-- <option value="audi" selected>Audi</option> -->
@endforeach
</select>
     
    </div>
  </div>


  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Save</button>
    </div>
  </div>
</form>



@endsection