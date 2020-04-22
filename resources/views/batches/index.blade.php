@extends('template')
@section('content')
<h2 class="d-inline-block">All Batches</h2>
<a href="{{route('batches.create')}}" class="btn btn-info float-right">Add Batch</a>
	<table class="table">
		<thead>

			<tr>
				<th>No</th>
				<th>Title</th>
				<th>Start Date</th>
				<th>End date</th>
				<th>Time</th>
				<th>Coursename</th>
				<th>Action</th>
				
</tr>
</thead>
	<tbody>
		@php
			$i =1;
		@endphp 
		@foreach($batches as $row)
		<tr>
			<td>{{$i++}}</td>
			<td>{{$row->title}}</td>
			<td>{{$row->startdate}}</td>
			<td>{{$row->enddate}}</td>
			<td>{{$row->time}}</td>
			<td>{{$row->course->name}}</td>
			<td><a href="#" class="btn btn-primary">Detail</a>
				<a href="{{route('batches.edit',$row->id)}}" class="btn btn-warning">Edit</a>
				<form method="post" action="{{route('batches.destroy',$row->id)}}" class="d-inline-block">
					@csrf
					@method('DELETE')
					<button type="submit" class="btn btn-danger" >Delete
					</button>

				</form>
				 
			</td>
</tr>
		@endforeach

</tbody>



	</table>



@endsection