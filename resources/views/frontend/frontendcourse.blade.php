@extends('frontendtemplate')
@section('content')


  <div class="container " style="margin-top: 10%">

   
		



      

        <div class="row">
          	@foreach($courses as $row)
			<div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="{{asset($row->logo)}} " alt="" style="height: 240px;"></a>
              <div class="card-body">
                <h4 class="card-title">
                 
                </h4>
              </div>
              <div class="card-footer">
                <small class="text-danger" style="font-size: 30px;"><i class="fas fa-tags"></i>{{$row->name}}</small>
                <h5>{{$row->during}}</h5>
         
              </div>
            </div>
          </div>
      	@endforeach
        </div>
        <!-- /.row -->

 </div>















@endsection