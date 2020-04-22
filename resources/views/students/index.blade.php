@extends('template')
@section('content')

<h1>Student List</h1>
<div class="container">
<h2 class="d-inline-block">All Students</h2>
<a href="{{route('students.create')}}" class="btn btn-info float-right">Add Student</a>
	<table class="table">
		<thead>

			<tr>
				<th>No</th>
				<th>Name</th>
				<th>Email</th>
				<th>Phone Number</th>
				<th>Batch</th>
				<th>Action</th>
				
</tr>
</thead>
	<tbody >
		@php
			$i =1;
		@endphp 
		@foreach($students as $row)
		<tr>
			<td>{{$i++}}</td>
			<td>{{$row->namee}}</td>
			<td>{{$row->email}}</td>
			<td>{{$row->phone}}</td>
			<td>{{$row->batch->course->name}}-
				{{$row->batch->title}}</td>

			
			<td><a href="{{route('students.show',$row->id)}}" class="btn btn-primary">Detail</a>
				<a href="{{route('students.edit',$row->id)}}" class="btn btn-warning">Edit</a>
				<form method="post" action="{{route('students.destroy',$row->id)}}" class="d-inline-block">
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