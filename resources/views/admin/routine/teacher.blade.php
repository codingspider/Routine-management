@extends('master')



@section('content')

   @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif

<div class="card-body" id="bar-parent">
<form action="{{ URL::to('/teacher/create') }}" method="POST" id="form_create_student">
							@csrf
										<div class="form-body">
											<div class="form-group row">
												<label class="control-label col-md-3"> Name
													<span class="required"> * </span>
												</label>
												<div class="col-md-5">
													<input type="text" name="name" placeholder="enter  name" class="form-control input-height" required="" />
												</div>
											</div>
											<div class="form-group row">
												<label class="control-label col-md-3">email
													<span class="required"> * </span>
												</label>
												<div class="col-md-5">
													<input type="email" name="email" placeholder="enter email" class="form-control input-height" required="" />
												</div>
											</div>
											<div class="form-group row">
												<label class="control-label col-md-3">User Name
													<span class="required"> * </span>
												</label>
												<div class="col-md-5">
													<input type="text" name="username" placeholder="enter user name" class="form-control input-height" required="" /> </div>
											</div>
											
																						
											<div class="form-group row">
												<label class="control-label col-md-3">Password
												</label>
												<div class="col-md-5">
													<div class="input-group">
														
														<input type="password" class="form-control input-height" name="password" placeholder="enter your password" required=""> </div>
												</div>
											</div>
																			
											
											</div>
												
                                    <table style="width: 100%; margin-top: -14px;">
                                        <tr>
                                            
                                            <td>
                                                <label><input type="radio" name="status" id="status" value="1"/>Status</label>
                                            </td>
                                        </tr>
                                    </table>
                                </fieldset>
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