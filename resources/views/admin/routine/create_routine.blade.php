@extends('master')



@section('content')

   @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif

<div class="card-body" id="bar-parent">
<form action="{{ URL::to('/routine/create') }}" method="POST" id="form_create_student" >
							@csrf
										<div class="form-body">
											
											<div class="container">

											<div class="form-group row">
												<label class="control-label col-md-3">Room No
													<span class="required"> * </span>
												</label>
											<div class="col-md-5">
													<input type="text" name="room_no" placeholder="enter room no" class="form-control input-height" required="" />
												</div>
											</div>
											

											<div class="form-group row">
												<label class="control-label col-md-3">Day
													<span class="required"> * </span>
												</label>
												
												<div class="col-md-5">
													<input type="text" name="day" class="form-control input-height" placeholder="enter days"  required="" />
												</div>
											
											</div>
											 
											<div class="form-group row">
												<label class="control-label col-md-3">Time Slot
													<span class="required"> * </span>
												</label>
												<div class="col-md-5">
													<input type="text" name="time_slot" class="form-control input-height" required=""placeholder="Time Slot"   /> </div>
											</div>
											
																												
											
											</div>
												<div class="form-group row">
												<label class="control-label col-md-3">Select Your Teacher
													<span class="required"> * </span>
												</label>
												<div class="col-md-5">
					<select class="form-control input-height" name="teacher_id" id="teacher_id">
													
														@foreach ($teachers as $data)
                    <option value="{{ $data->id }}">{{ $data->name }}</option>
                    @endforeach
										
									</select>
								</div>
							</div>

								<div class="form-group row">
								<label class="control-label col-md-3">Select Your Semester
									<span class="required"> * </span>
								</label>
								<div class="col-md-5">
								<select class="form-control input-height" name="semester_id" id="semester_id">
									
										@foreach ($semesters as $data)
    <option value="{{ $data->id }}">{{ $data->name }}</option>
    @endforeach
										
									</select>
								</div>
							</div>
											
                                </fieldset>
                            </div>
									
									<input type="hidden" name="id">	


										<div class="form-actions">
												<div class="row">
													<div class="offset-md-3 col-md-9">
														<button type="submit" class="btn btn-info m-r-20">Submit</button>
														<button type="button" class="btn btn-default">Cancel</button>
													</div>
												</div>
											</div>
										</div>
									</form>
							@endsection