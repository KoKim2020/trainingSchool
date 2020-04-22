@extends('template')
@section('content')


@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<!-- ----------------------------------------------------- -->
<form method="post" action="{{route('courses.update',$course->id)}}">
  @csrf
  @method('PUT')
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
    <div class="col-sm-10">
      <input type="name" class="form-control" name="name" placeholder="Name" value="{{$course->name}}">
    </div>
  </div>
  <!-- --------------------------- -->
  
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Outline</label>
    <div class="col-sm-10">
      <textarea type="outlines" class="form-control"  name="outlines" placeholder="Outline"> {{$course->outline}}</textarea> 
    </div>
  </div>
  <!-- ---------------------------------- -->
   <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">fees</label>
    <div class="col-sm-10">
      <input type="fees" class="form-control" placeholder="fees" name="fees" value="{{$course->fees}}">
    </div>
  </div>
  <!-- --------------------------------- -->
   <!-- --------------------------------- -->
    <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">During</label>
    <div class="col-sm-10">
      <input type="outline" class="form-control" placeholder="Outline" name="during" value="{{$course->during}}">
    </div>
  </div>
  
       <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">During</label>
    <div class="col-sm-10">
      <input type="outline" class="form-control" placeholder="Outline" name="duration" value="{{$course->duration}}">
    </div>
  </div>


  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Update</button>
    </div>
  </div>
</form>



@endsection