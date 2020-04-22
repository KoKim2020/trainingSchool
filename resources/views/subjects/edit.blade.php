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
<form method="post" action= "{{route('subjects.update',$subjects->id)}}">
  @csrf
  @method('PUT')
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="name" placeholder="Name" value="{{$subjects->name}}" >
    </div>
  </div>
   <button type="submit" class="btn btn-primary">Update</button>

</form>
</div>



@endsection