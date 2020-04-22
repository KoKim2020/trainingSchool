@extends('template')
@section('content')
	<!-- {{$student}} -->
<h1>Student Details</h1>
 <div class="card mb-3" style="">
			  <div class="row no-gutters">
			   
			    <div class="col-md-8">
			      <div class="card-body">
			        <h2>Name(English) :<span >{{$student->namee}}</span></h2>
			        <h2>Name(Myanmar) :<span >{{$student->namem}}</span></h2>
			        <h2>Email :<span >{{$student->email}}</span></h2>
			        <h2>Phone:<span >{{$student->phone}}</span></h2>
			         <h2>Address:<span >{{$student->address}}</span></h2>
			          <h2>Education:<span>{{$student->education}}</span></h2>
			    <h2>City:<span >{{$student->city}}</span></h2>
			    <h2>Accepted_Year:<span >{{$student->accepted_year}}</span></h2>
			    <h2>Date of Birth:<span >{{$student->dob}}</span></h2>
			    <h2>gender:<span >{{$student->gender}}</span></h2>
			    <h2>Batch_ID:<span >{{$student->batch_id}}</span></h2>
			    <h2>Parent Guardian 1:<span >{{$student->p1}}</span></h2>
			     <h2>Parent Guardian 1-Phone:<span >{{$student->p1_phone}}</span></h2>
			     <h2>Parent Guardian 1-Relationship:<span >{{$student->p1_relationship}}</span></h2>
			     <h2>Parent Guardian 2:<span>{{$student->p2}}</span></h2>
			     <h2>Parent Guardian 2-Phone:<span >{{$student->p2_phone}}</span></h2>
			     <h2>Parent Guardian 2-Relationship:<span >{{$student->p2_relationship}}</span></h2>
			     <h2>Why:<span >{{$student->because}}</span></h2>
			      </div>
			    </div>
			  </div>
			</div>

@endsection