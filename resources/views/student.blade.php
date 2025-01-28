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
             
            </ol>
          </nav>
          <!-- /Breadcrumb -->
    
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                 @if(File::exists(public_path('images/'.$student->photo)))
                    <img src="{{URL::to("/")}}/images/{{$student->photo}}" alt="Admin" class="rounded-circle" width="150">
				  @else
					<img src="{{URL::to("/")}}/images/default.png" alt="Admin" class="rounded-circle" width="150">
			      @endif
                    <div class="mt-3">
                      <h4> {{$student->name}}</h4>
                      <p class="text-secondary mb-1"> {{$student->scno}}</p>
                      <p class="text-muted font-size-sm"> {{$student->indname}}</p>
                     
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
                      <h6 class="mb-0">Full Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {{$student->name}}
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
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Training Period</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                       From : {{$student->strdate}} To : {{$student->enddate}} In  {{$student->indname}} Company
                    </div>
                  </div>

                </div>
              </div>
            </div>
         </div>
			<div class="col-sm-12 mb-3">
				<form class="form-horizontal" method="post" id="form_upload"  name="form_upload" action="{{ route('update',[$student->id])}}">
					@csrf
					<div class="card h-100">
					
					<div class="card-header">Please tick the appropriate</div>
						<div class="card-body">
							<div class="row">
									<div class="col-md-5">
									
									</div>
									<div class="col-md-2">
									Excelent
									</div>
									<div class="col-md-2">
									Good
									</div>
									<div class="col-md-2">
									Average
									</div>
									<div class="col-md-1">
									Poor
									</div>
							</div>
							
							
						</div>
						<div class="card-body">
							
							<div class="row">
									<div class="col-md-5">
									Attendance & Punctuality
									</div>
									<div class="col-md-2">
									<div class="form-check">
									  <input class="form-check-input" type="radio" name="op1" id="op1" value="4" {{ old('op1') == "4" ? 'checked' : '' }}>
									  
									</div>
									</div>
									<div class="col-md-2">
									<input class="form-check-input" type="radio" name="op1" id="op1" value="3" {{ old('op1') == "3" ? 'checked' : '' }}>
									</div>
									<div class="col-md-2">
									<input class="form-check-input" type="radio" name="op1" id="op1" value="2" {{ old('op1') == "2" ? 'checked' : '' }}>
									</div>
									<div class="col-md-1">
									<input class="form-check-input" type="radio" name="op1" id="op1" value="1" {{ old('op1') == "1" ? 'checked' : '' }}>
									</div>
									
							</div>
							<div class="span4">
								@if($errors->has('op1'))
									<span class="alert-danger">{{ $errors->first('op1') }}</span>
								@endif
							</div>
							
						</div>
						<div class="card-body">
							
							<div class="row">
									<div class="col-md-5">
									Communication Skills
									</div>
									<div class="col-md-2">
									<div class="form-check">
									  <input class="form-check-input" type="radio" name="op2" id="op2" value="4" {{ old('op2') == "4" ? 'checked' : '' }}>
									  
									</div>
									</div>
									<div class="col-md-2">
									<input class="form-check-input" type="radio" name="op2" id="op2" value="3" {{ old('op2') == "3" ? 'checked' : '' }}>
									</div>
									<div class="col-md-2">
									<input class="form-check-input" type="radio" name="op2" id="op2" value="2" {{ old('op2') == "2" ? 'checked' : '' }}>
									</div>
									<div class="col-md-1">
									<input class="form-check-input" type="radio" name="op2" id="op2" value="1" {{ old('op2') == "1" ? 'checked' : '' }}>
									</div>
							</div>
							<div class="span4">
								@if($errors->has('op2'))
									<span class="alert-danger">{{ $errors->first('op2') }}</span>
								@endif
							</div>
							
						</div>
						<div class="card-body">
							
							<div class="row">
									<div class="col-md-5">
									The ability to apply what they have learned in university to real-world/practical situations
									</div>
									<div class="col-md-2">
									<div class="form-check">
									  <input class="form-check-input" type="radio" name="op3" id="op3" value="4" {{ old('op3') == "4" ? 'checked' : '' }}>
									  
									</div>
									</div>
									<div class="col-md-2">
									<input class="form-check-input" type="radio" name="op3" id="op3" value="3" {{ old('op3') == "3" ? 'checked' : '' }}>
									</div>
									<div class="col-md-2">
									<input class="form-check-input" type="radio" name="op3" id="op3" value="2" {{ old('op3') == "2" ? 'checked' : '' }}>
									</div>
									<div class="col-md-1">
									<input class="form-check-input" type="radio" name="op3" id="op3" value="1" {{ old('op3') == "1" ? 'checked' : '' }}>
									</div>
							</div>
							<div class="span4">
								@if($errors->has('op3'))
									<span class="alert-danger">{{ $errors->first('op3') }}</span>
								@endif
							</div>
							
						</div>
						
						<div class="card-body">
							
							<div class="row">
									<div class="col-md-5">
									Problem solving skills
									</div>
									<div class="col-md-2">
									<div class="form-check">
									  <input class="form-check-input" type="radio" name="op4" id="op4" value="4" {{ old('op4') == "4" ? 'checked' : '' }}>
									  
									</div>
									</div>
									<div class="col-md-2">
									<input class="form-check-input" type="radio" name="op4" id="op4" value="3" {{ old('op4') == "3" ? 'checked' : '' }}>
									</div>
									<div class="col-md-2">
									<input class="form-check-input" type="radio" name="op4" id="op4" value="2" {{ old('op4') == "2" ? 'checked' : '' }}>
									</div>
									<div class="col-md-1">
									<input class="form-check-input" type="radio" name="op4" id="op4" value="1" {{ old('op4') == "1" ? 'checked' : '' }}>
									</div>
							</div>
							<div class="span4">
								@if($errors->has('op4'))
									<span class="alert-danger">{{ $errors->first('op4') }}</span>
								@endif
							</div>
							
						</div>
						
						<div class="card-body">
							
							<div class="row">
									<div class="col-md-5">
									The ability to view issues or problems from different perspectives
									</div>
									<div class="col-md-2">
									<div class="form-check">
									  <input class="form-check-input" type="radio" name="op5" id="op5" value="4" {{ old('op5') == "4" ? 'checked' : '' }}>
									  
									</div>
									</div>
									<div class="col-md-2">
									<input class="form-check-input" type="radio" name="op5" id="op5" value="3" {{ old('op5') == "3" ? 'checked' : '' }}>
									</div>
									<div class="col-md-2">
									<input class="form-check-input" type="radio" name="op5" id="op5" value="2" {{ old('op5') == "2" ? 'checked' : '' }}>
									</div>
									<div class="col-md-1">
									<input class="form-check-input" type="radio" name="op5" id="op5" value="1" {{ old('op5') == "1" ? 'checked' : '' }}>
									</div>
							</div>
							<div class="span4">
								@if($errors->has('op5'))
									<span class="alert-danger">{{ $errors->first('op5') }}</span>
								@endif
							</div>
							
						</div>
						
												<div class="card-body">
							
							<div class="row">
									<div class="col-md-5">
									Technical Skills
									</div>
									<div class="col-md-2">
									<div class="form-check">
									  <input class="form-check-input" type="radio" name="op6" id="op6" value="4" {{ old('op6') == "4" ? 'checked' : '' }}>
									  
									</div>
									</div>
									<div class="col-md-2">
									<input class="form-check-input" type="radio" name="op6" id="op6" value="3" {{ old('op6') == "3" ? 'checked' : '' }}>
									</div>
									<div class="col-md-2">
									<input class="form-check-input" type="radio" name="op6" id="op6" value="2" {{ old('op6') == "2" ? 'checked' : '' }}>
									</div>
									<div class="col-md-1">
									<input class="form-check-input" type="radio" name="op6" id="op6" value="1" {{ old('op6') == "1" ? 'checked' : '' }}>
									</div>
							</div>
							<div class="span4">
								@if($errors->has('op6'))
									<span class="alert-danger">{{ $errors->first('op6') }}</span>
								@endif
							</div>
							
						</div>
						
												<div class="card-body">
							
							<div class="row">
									<div class="col-md-5">
									Team work
									</div>
									<div class="col-md-2">
									<div class="form-check">
									  <input class="form-check-input" type="radio" name="op7" id="op7" value="4" {{ old('op7') == "4" ? 'checked' : '' }}>
									  
									</div>
									</div>
									<div class="col-md-2">
									<input class="form-check-input" type="radio" name="op7" id="op7" value="3" {{ old('op7') == "3" ? 'checked' : '' }}>
									</div>
									<div class="col-md-2">
									<input class="form-check-input" type="radio" name="op7" id="op7" value="2" {{ old('op7') == "2" ? 'checked' : '' }}>
									</div>
									<div class="col-md-1">
									<input class="form-check-input" type="radio" name="op7" id="op7" value="1" {{ old('op7') == "1" ? 'checked' : '' }}>
									</div>
							</div>
							<div class="span4">
								@if($errors->has('op7'))
									<span class="alert-danger">{{ $errors->first('op7') }}</span>
								@endif
							</div>
							
						</div>
						
												<div class="card-body">
							
							<div class="row">
									<div class="col-md-5">
									Ability to take leadership in assigned activities
									</div>
									<div class="col-md-2">
									<div class="form-check">
									  <input class="form-check-input" type="radio" name="op8" id="op8" value="4" {{ old('op8') == "4" ? 'checked' : '' }}>
									  
									</div>
									</div>
									<div class="col-md-2">
									<input class="form-check-input" type="radio" name="op8" id="op8" value="3" {{ old('op8') == "3" ? 'checked' : '' }}>
									</div>
									<div class="col-md-2">
									<input class="form-check-input" type="radio" name="op8" id="op8" value="2" {{ old('op8') == "2" ? 'checked' : '' }}>
									</div>
									<div class="col-md-1">
									<input class="form-check-input" type="radio" name="op8" id="op8" value="1" {{ old('op8') == "1" ? 'checked' : '' }}>
									</div>
							</div>
							<div class="span4">
								@if($errors->has('op8'))
									<span class="alert-danger">{{ $errors->first('op8') }}</span>
								@endif
							</div>
							
						</div>
						
												<div class="card-body">
							
							<div class="row">
									<div class="col-md-5">
									Attitude & Behavior
									</div>
									<div class="col-md-2">
									<div class="form-check">
									  <input class="form-check-input" type="radio" name="op9" id="op9" value="4" {{ old('op9') == "4" ? 'checked' : '' }}>
									  
									</div>
									</div>
									<div class="col-md-2">
									<input class="form-check-input" type="radio" name="op9" id="op9" value="3" {{ old('op9') == "3" ? 'checked' : '' }}>
									</div>
									<div class="col-md-2">
									<input class="form-check-input" type="radio" name="op9" id="op9" value="2" {{ old('op9') == "2" ? 'checked' : '' }}>
									</div>
									<div class="col-md-1">
									<input class="form-check-input" type="radio" name="op9" id="op9" value="1" {{ old('op9') == "1" ? 'checked' : '' }}>
									</div>
							</div>
							<div class="span4">
								@if($errors->has('op9'))
									<span class="alert-danger">{{ $errors->first('op9') }}</span>
								@endif
							</div>
							
						</div>
						
						<div class="card-body">
							
							<div class="row">
									<div class="col-md-5">
									Ethical Behavior
									</div>
									<div class="col-md-2">
									<div class="form-check">
									  <input class="form-check-input" type="radio" name="op10" id="op10" value="4" {{ old('op10') == "4" ? 'checked' : '' }}>
									  
									</div>
									</div>
									<div class="col-md-2">
									<input class="form-check-input" type="radio" name="op10" id="op10" value="3" {{ old('op10') == "3" ? 'checked' : '' }}>
									</div>
									<div class="col-md-2">
									<input class="form-check-input" type="radio" name="op10" id="op10" value="2" {{ old('op10') == "2" ? 'checked' : '' }}>
									</div>
									<div class="col-md-1">
									<input class="form-check-input" type="radio" name="op10" id="op10" value="1" {{ old('op10') == "1" ? 'checked' : '' }}>
									</div>
							</div>
							<div class="span4">
								@if($errors->has('op10'))
									<span class="alert-danger">{{ $errors->first('op10') }}</span>
								@endif
							</div>
							
						</div>
						
						
						
					  </div>
					  
					  <div class="card h-100"style=" margin: 10px auto;">
					  
					<div class="card-header">Please tick the appropriate</div>
					  
							<div class="card-body">
							<div class="row">
									<div class="col-md-5">
									
									</div>
									<div class="col-md-2">
									Excelent
									</div>
									<div class="col-md-2">
									Good
									</div>
									<div class="col-md-2">
									Average
									</div>
									<div class="col-md-1">
									Poor
									</div>
							</div>
							</div>
							<div class="card-body">
							<div class="row">
									<div class="col-md-5">
									Grade the student based on his/her overall performance. 
									</div>
									<div class="col-md-2">
									<div class="form-check">
									  <input class="form-check-input" type="radio" name="op11" id="op11" value="4" {{ old('op11') == "4" ? 'checked' : '' }}>
									  
									</div>
									</div>
									<div class="col-md-2">
									<input class="form-check-input" type="radio" name="op11" id="op11" value="3" {{ old('op11') == "3" ? 'checked' : '' }}>
									</div>
									<div class="col-md-2">
									<input class="form-check-input" type="radio" name="op11" id="op11" value="2" {{ old('op11') == "2" ? 'checked' : '' }}>
									</div>
									<div class="col-md-1">
									<input class="form-check-input" type="radio" name="op11" id="op11" value="1" {{ old('op11') == "1" ? 'checked' : '' }}>
									</div>
							</div>
							<div class="span4">
								@if($errors->has('op11'))
									<span class="alert-danger">{{ $errors->first('op11') }}</span>
								@endif
							</div>
							
						</div>
							
							
						</div>
						
							  <div class="card h-100" style=" margin: 10px auto;">
					  
							<div class="card-header">Any other comments or suggestions for improvements.</div>
					  
							<div class="form-group">
								<label for="exampleFormControlTextarea1"></label>
								<textarea class="form-control" style="padding: 10px" name="feedback" id="feedback" rows="15" >{{old('feedback')}}</textarea>
							</div>
							
							
							
						</div>
						<button style="width: 300px; margin: 20px auto;" class="btn btn-primary" type="submit">Submit</button>
				</form>
			</div>
		</div>
        </div>
    </div>
        </div>
    </div>
</div>
@endsection
