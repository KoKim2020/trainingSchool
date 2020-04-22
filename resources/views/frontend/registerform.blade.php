@extends('frontendtemplate')
@section('content')
<!-- <h2>Student Register Form</h2> -->
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
 	
<h2 style="padding-left: 40px">Student Create Form</h2>
<div class="card m-5">
	<h5 class="p-5"><u>Student Information:</u></h5>
	<div class="card-body">
		<div class="container-fluid">
			@if (session('status'))
				<div class="alert alert-success">
					
					{{session('status')}}

				</div>
			@endif
			<form method="post" action="{{route('students.store')}}">
                @csrf
                <input type="text" name="batch_id" value="1">
				<div class="row">
					<div class="col">
						<label for>Student's Name (Eng):</label>
						<input type="text" class="form-control" placeholder="First name" name="namee">
					</div>
					<div class="col">
						<label for>ကျောင်းသားအမည်</label>
						<input type="text" class="form-control" placeholder="မောင်မောင်" name="namem">
					</div>
				</div>


				<div class="row pt-3">
					<div class="col">
						<label for>Education:</label>
						<input type="text" class="form-control" placeholder="" name="education">
					</div>
					<div class="col">
						<label for>City:</label>
						<input type="text" class="form-control" placeholder="Yangon" name="city">
					</div>
					<div class="col">
						<label for>Accepted-Year:</label>
						<input type="text" class="form-control" placeholder="2015" name="accepted_year">
					</div>
				</div>

				<div class="pt-3">
					<label for="">Address:</label>
					<textarea type="text" class="form-control" id="InputAddress" name="address"></textarea>
				</div>


				<div class="row pt-3">
					<div class="col">
						<label for>Email:</label>
						<input type="text" class="form-control" placeholder="Email" name="email">
					</div>
					<div class="col">
						<label for>Phone:</label>
						<input type="text" class="form-control" placeholder="Phone" name="phone">
					</div>
				</div>

				<div class="row pt-3">
					<div class="col">
						<label for>Date of Birth:</label>
						<input type="date" class="form-control" placeholder="dd/mm/yy" name="dob">
					</div>
					<div class="col">
						<h6>Gender:</h6>
						<label class="form-group" for="Inputradio">Male</label>
						<input class="form-group" type="radio" name="gender" id="Genter" value="Male" checked>

						<label class="form-group pl-5" for="Inputradio">Female</label>
						<input class="form-group" type="radio" name="gender" id="Genter" value="Female" checked>

					</div>
				</div>

				<div class="row pt-3">
					<div class="col">
						<h6>Which Programming Languages did you know? (လက်ရှိတက်ကျွမ်းတဲ့ Programming Languages)</h6>

@foreach($subjects as $subject)

	<div class="form-check">
		<input class="form-check-input" type="checkbox" id="gridCheck{{$subject->id}}" value ="{{$subject->id}}" name="subjects[]">
		<label class="form-check-level" for="gridCheck{{$subject->id}}">
			{{$subject->name}}
		</label>


	</div>
	@endforeach
					</div>	   	
				</div>

				<hr class="divider" style=" border-color: black">

				<h3><u>HouseholdParent/Guardian Information</u></h3>
				<div class="row pt-3">

					<div class="col">
						<label for>Parent Guardian #1:</label>
						<input type="text" class="form-control" placeholder="" name="p1">
					</div>
					<div class="col">
						<label for>Relation of student:</label>
						<input type="text" class="form-control" placeholder="Father" name="p1_relationship">
					</div>
					<div class="col">
						<label for>Phone:</label>
						<input type="text" class="form-control" placeholder="Phone" name="p1_phone">
					</div>
				</div>
				<div class="row pt-3">

					<div class="col">
						<label for>Parent Guardian #2:</label>
						<input type="text" class="form-control" placeholder="" name="p2">
					</div>
					<div class="col">
						<label for>Relation of student:</label>
						<input type="text" class="form-control" placeholder="Father" name="p2_relationship">
					</div>
					<div class="col">
						<label for>Phone:</label>
						<input type="text" class="form-control" placeholder="Phone" name="p2_phone">
					</div>
				</div>


				<hr class="divider" style="">

				<div class="pt-3 pb-5">
					<label for="">သင်တန်းတွေ အများကြီးထဲက Myanmar It Consulting သင်တန်းကို ရွေးရတဲ့ အကြောင်းကို သိပါရစေ</label>
					<textarea type="text" class="form-control" id="InputAddress" name="because">

					</textarea>
				</div>
				 <button type="submit" class="btn btn-primary" style="width: 100%">Save</button>
			</form>
		</div>
	</div>
	
 	
	
</div>

@endsection