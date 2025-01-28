@extends('layouts.app')

@section('content')
<div class="container-auto">
    <div class="row justify-content-center">
        <div class="col-md-8">
					@if(session()->has('success'))
						  <div class="alert alert-success">
							  <a class="close" data-dismiss="alert">×</a>
							  {{session()->get('success')}}
						  </div>
					 @endif
					 @if(session()->has('error'))
						  <div class="alert alert-danger">
							  <a class="close" data-dismiss="alert">×</a>
							  {{session()->get('error')}}
						  </div>
					 @endif
            <div class="card">
                <div class="card-header">CSC3216 - Industrial Training</div>
				
                <div class="main-body">
    
          <!-- Breadcrumb -->
          <nav aria-label="breadcrumb" class="main-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{ route('home') }}"><button type="button" class="btn btn-primary">Home</button></a></li>
			  <button class="btn btn-success"onclick="printDiv('printMe')">Print </button>
            </ol>
          </nav>
          <!-- /Breadcrumb -->
		  <form action="{{url('/search')}}" method="post" role="search" >
			@csrf
			<input type="text" placeholder="Search.." name="search" class="form-control">
			<button type="submit" class="btn btn-primary">Search</button>
		  </form>
		  <div id='printMe'>
		  @foreach ($students as $student) 
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
				
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
				  @if(File::exists(public_path('images/'.$student->photo)))
                    <img src="{{URL::to("/")}}/images/{{$student->photo}}" alt="Admin" class="rounded-circle" width="80">
				  @else
					<img src="{{URL::to("/")}}/images/default.png" alt="Admin" class="rounded-circle" width="80">
			      @endif
					<div class="mt-3">
                    <p class="text-muted font-size-sm"> {{$student->name}}</p>
					<p class="text-secondary mb-1"> {{$student->scno}}</p>
					</div>
                  </div>
                </div>
              </div>
              
            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Industry Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {{$student->indname}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {{$student->email}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Mobile</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {{$student->tp}}
                    </div>
                  </div>


                </div>
              </div>
            </div>
         </div>
			<div class="col-sm-12 mb-3">
				
					<div class="card h-100">
					
					<div><center><b>Feedback</b></center></div>
						<hr>
						<div class="card-body">
							
							<div class="row">
									<div class="col-md-5">
									Attendance & Punctuality
									</div>
									<div class="col-md-2">
										@if($student->op1==4)
										Excellent
										@elseif($student->op1==3)
										Good
										@elseif($student->op1==2)
										Average
										@elseif($student->op1==1)
										Poor
										@endif
									</div>
									
									
							</div>
							
							
						</div>
						<div class="card-body">
							
							<div class="row">
									<div class="col-md-5">
									Communication Skills
									</div>
									<div class="col-md-2">
										
										@if($student->op2==4)
										Excellent
										@elseif($student->op2==3)
										Good
										@elseif($student->op2==2)
										Average
										@elseif($student->op2==1)
										Poor
										@endif
										
									</div>
							</div>
							
							
						</div>
						<div class="card-body">
							
							<div class="row">
									<div class="col-md-5">
									The ability to apply what they have learned in university to real-world/practical situations
									</div>
									<div class="col-md-2">
										
										@if($student->op3==4)
										Excellent
										@elseif($student->op3==3)
										Good
										@elseif($student->op3==2)
										Average
										@elseif($student->op3==1)
										Poor
										@endif
										
									</div>
							</div>
							
							
						</div>
						
						<div class="card-body">
							
								<div class="row">
								   <div class="col-md-5">
									Problem solving skills
									</div>
									<div class="col-md-2">
										
										@if($student->op4==4)
										Excellent
										@elseif($student->op4==3)
										Good
										@elseif($student->op4==2)
										Average
										@elseif($student->op4==1)
										Poor
										@endif
									
									</div>
							</div>
						</div>
						
						<div class="card-body">
							
							<div class="row">
									<div class="col-md-5">
									The ability to view issues or problems from different perspectives
									</div>
									<div class="col-md-2">
										
										@if($student->op5==4)
										Excellent
										@elseif($student->op5==3)
										Good
										@elseif($student->op5==2)
										Average
										@elseif($student->op5==1)
										Poor
										@endif
									
								</div>
							</div>
							
							
						</div>
						
						<div class="card-body">
							
							<div class="row">
									<div class="col-md-5">
									Technical Skills
									</div>
									<div class="col-md-2">
										
										@if($student->op6==4)
										Excellent
										@elseif($student->op6==3)
										Good
										@elseif($student->op6==2)
										Average
										@elseif($student->op6==1)
										Poor
										@endif
									
								</div>
							</div>
							
							
						</div>
						
						<div class="card-body">
							
							<div class="row">
									<div class="col-md-5">
									Team work
									</div>
									<div class="col-md-2">
										
										@if($student->op7==4)
										Excellent
										@elseif($student->op7==3)
										Good
										@elseif($student->op7==2)
										Average
										@elseif($student->op7==1)
										Poor
										@endif
									
									</div>
							</div>
							
							
						</div>
						
						<div class="card-body">
							
							<div class="row">
									<div class="col-md-5">
									Ability to take leadership in assigned activities
									</div>
									<div class="col-md-2">
										
										@if($student->op8==4)
										Excellent
										@elseif($student->op8==3)
										Good
										@elseif($student->op8==2)
										Average
										@elseif($student->op8==1)
										Poor
										@endif
									
								</div>
							</div>
							
							
						</div>
						
												<div class="card-body">
							
							<div class="row">
									<div class="col-md-5">
									Attitude & Behavior
									</div>
									<div class="col-md-2">
										
										@if($student->op9==4)
										Excellent
										@elseif($student->op9==3)
										Good
										@elseif($student->op9==2)
										Average
										@elseif($student->op9==1)
										Poor
										@endif
									
								</div>
							</div>
							
							
						</div>
						
						<div class="card-body">
							
							<div class="row">
									<div class="col-md-5">
									Ethical Behavior
									</div>
									<div class="col-md-2">
										
										@if($student->op10==4)
										Excellent
										@elseif($student->op10==3)
										Good
										@elseif($student->op10==2)
										Average
										@elseif($student->op10==1)
										Poor
										@endif
									
								</div>
							</div>
							
							
						</div>
						
						
						
					  </div>
					  
					  <div class="card h-100"style=" margin: 10px auto;">
					  
					
							
							<div class="card-body">
							<div class="row">
									<div class="col-md-5">
									<b>Grade the student based on his/her overall performance. </b>
									</div>
									<div class="col-md-2">
										
										@if($student->op11==4)
										Excellent
										@elseif($student->op11==3)
										Good
										@elseif($student->op11==2)
										Average
										@elseif($student->op11==1)
										Poor
										@endif
									
								</div>
							</div>
							
							
						</div>
							
							
						</div>
						
							  <div class="card h-100" style=" margin: 10px auto;">
					  
							<div ><b>Comments or Suggestions </b></div>
								<hr>
							<div class="form-group">
								<label for="exampleFormControlTextarea1"></label>
								<label style="padding-top:10 px;">{{$student->feedback}}</label>
							</div>
							
							
							
						</div>
						
				
			</div>
			@endforeach
			{{ $students->links() }}
		</div>
        </div>
    </div>
	
        </div>
    </div>
</div>
</div>
@endsection

@section('js')
<script>
	function printDiv(divName){
		var printContents = document.getElementById(divName).innerHTML;
		var originalContents = document.body.innerHTML;

		document.body.innerHTML = printContents;

		window.print();

		document.body.innerHTML = originalContents;

	}
</script>
@endsection