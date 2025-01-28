@extends('layouts.app')
<style>


</style>
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">CSC3216 - Industrial Training</div>

                <div class="main-body">
    
          <!-- Breadcrumb -->
          <nav aria-label="breadcrumb" class="main-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            </ol>
          </nav>
          <!-- /Breadcrumb -->
    
    
        <div class="col-12  col-md-8">
            <div class="card profile-header" ">
                <div class="body">
				@foreach ($students as $student) 
    

                    <div class="row" style=" margin: 10px auto;">
							<div class="col-md-12">
								<div class="d-flex flex-row border rounded">
									<div class="p-0 w-25">
									@if(File::exists(public_path('images/'.$student->photo)))
											<img src="{{URL::to("/")}}/images/{{$student->photo}}" class="img-thumbnail border-0" />
										  @else
											<img src="{{URL::to("/")}}/images/default.png" class="img-thumbnail border-0">
										  @endif
										
									</div>
									<div class="pl-3 pt-2 pr-2 pb-2 w-75 border-left">
											<h4 class="text-primary">{{$student->name}}</h4>
											<h5 class="text-info">{{$student->scno}}</h5>
											<h5 class="text-info">{{$student->indname}}</h5>
											<ul class="m-0 float-left" style="list-style: none; margin:0; padding: 0">
												<li><i class="fab fa-facebook-square"></i>{{$student->tp}}</li>
												<li><i class="fab fa-twitter-square"></i> {{$student->email}}</li>
											</ul>
											<p class="text-right m-0"><a href="{{route('getstu',[$student->id])}}" class="btn btn-primary"><i class="far fa-user"></i> Send Feedback</a></p>
									</div>
								</div>
							</div>
                    </div>
					
				@endforeach
                </div>                    
            </div>
        </div>
  
  
</div>
        </div>
            </div>
        </div>
    </div>

@endsection
