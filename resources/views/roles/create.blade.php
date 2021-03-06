@extends('template')
@section('content')
<div class="container">
	@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form method="post" action= "{{route('roles.store')}}">
  @csrf
  
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="name" placeholder="Name" >
    </div>
  </div>
  <!--   <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Guard_Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="guard_name" placeholder="guard_name" >
    </div>
  </div> -->
   <button type="submit" class="btn btn-primary">Save</button>

</form>
</div>
@endsection