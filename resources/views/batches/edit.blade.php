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
<form method="post" action="{{route('batches.update',$batche->id)}}">
  @csrf
  @method('PUT')
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Title</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="title" placeholder="title" value="{{$batche->title}}">
    </div>
  </div>
  <!-- --------------------------- -->
  
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">StartDate</label>
    <div class="col-sm-10">
      <input type="date" class="form-control"  name="startdate" placeholder="StartDate" value="{{$batche->startdate}}">
    </div>
  </div>
  <!-- ---------------------------------- -->
   <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">EndDate</label>
    <div class="col-sm-10">
      <input type="date" class="form-control" placeholder="EndDate" name="enddate" value="{{$batche->enddate}}">
    </div>
  </div>
  <!-- --------------------------------- -->
   <!-- --------------------------------- -->
    <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Time</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" placeholder="Time" name="time" value="{{$batche->time}}">
    </div>
  </div>

   

  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Save</button>
    </div>
  </div>
</form>





@endsection