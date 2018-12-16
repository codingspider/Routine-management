@extends('partials.layouts')



@section('body')

   @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif

<div class="card-body" id="bar-parent">
<form action="{{ URL::to('/semester/create') }}" method="POST" id="form_create_student">
							@csrf
										<div class="form-body">
											
											<div class="container">

											<div class="form-group row">
												<label class="control-label col-md-3">Add Semester
													<span class="required"> * </span>
												</label>
												<div class="col-md-5">
													<input type="text" name="name" placeholder="enter semester" class="form-control input-height" required="" />
												</div>
											</div>
											

                            </div>
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