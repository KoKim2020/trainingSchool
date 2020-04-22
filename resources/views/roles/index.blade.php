@extends('template')
@section('content')
<div class="container">
<h2 class="d-inline-block">All Roles</h2>
<a href="{{route('roles.create')}}" class="btn btn-info float-right">Add New</a>
	<table class="table">
		<thead>

			<tr>
				<th>No</th>
				<th>Name</th>
			<!-- 	<th>Guard_Name</th> -->
				
</tr>
</thead>
	<tbody>
		@php
			$i =1;
		@endphp 
		@foreach($roles as $row)
		<tr>
			<td>{{$i++}}</td>
			<td>{{$row->name}}</td>
		<!-- 	<td>{{$row->guard_name}}</td> -->

			
			<td><a href="#" class="btn btn-primary">Detail</a>
				<a href="{{route('roles.edit',$row->id)}}" class="btn btn-warning">Edit</a>
				<form method="post" action="{{route('roles.destroy',$row->id)}}" class="d-inline-block">
					@csrf
					@method('DELETE')
					<button type="submit" class="btn btn-danger">Delete
						
					</button>

				</form>
				
			</td>
</tr>
		@endforeach

</tbody>



	</table>
</div>

@endsection