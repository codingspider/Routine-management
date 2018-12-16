@extends('master')

@section('content')
	<div class="row">
					<div class="col-md-12 col-sm-12">
						<div class="card  card-box">
							<div class="card-head">
								<header>New Student List</header>
								<div class="tools">
									<a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
									<a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
									<a class="t-close btn-color fa fa-times" href="javascript:;"></a>
								</div>
							</div>
							<div class="card-body ">
								<div class="table-wrap">
									<div class="table-responsive">
										<table class="table display product-overview mb-30" id="support_table">
											<thead>
												<tr>
													<th>No</th>
													<th>Teacher Name</th>
													<th>Assigned Subject</th>
													<th>Room No</th>
													<th>Time_slot</th>
													<th>Semester</th>
													<th>Action </th>
												</tr>
											</thead>
											<tbody>
												<tr>
													@foreach($data as $value)
													<td>{{ $loop->index + 1 }}</td>
													<td>{{ $value->name }}</td>
												
													<td>{{ $value->day }}</td>
													<td>{{ $value->sname }}</td>
													
													<td>
														<span class="label label-sm label-success">paid</span>
													</td>
													<td>Mechanical</td>
													<td>
														<a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="fa fa-trash"></i></a></td>
												</tr>
												@endforeach
												<q></q>
												
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
@endsection()