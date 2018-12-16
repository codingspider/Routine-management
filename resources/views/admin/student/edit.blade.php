@extends('partials.layouts')



@section('body')

   @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif

<div class="card-body" id="bar-parent">
<form action="{{ URL::to('/update_student', $datas->id) }}" method="POST">
@csrf
			<div class="form-body">
				<div class="form-group row">
					<label class="control-label col-md-3"> Name
						<span class="required"> * </span>
					</label>
					<div class="col-md-5">
						<input type="text" name="first_name" value="{{ ($datas->name) }}" class="form-control input-height" />
					</div>
				</div>
			
			
			
				
				</div>
					
			
			
				<div class="form-group row">
					<label class="control-label col-md-3">Date Of Birth
						<span class="required"> * </span>
					</label>
	
				
										<div class="form-actions">
												<div class="row">
													<div class="offset-md-3 col-md-9">
														<button type="submit" class="btn btn-info m-r-20">Submit</button>
														
													</div>
												</div>
											</div>
										</div>
									</form>
							@endsection