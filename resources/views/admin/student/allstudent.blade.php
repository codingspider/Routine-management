@extends('partials.layouts')

@section('body')
<div class="page-content-wrapper">
				
					<div class="page-bar">
						<div class="page-title-breadcrumb">
							<div class=" pull-left">
								<div class="page-title">All Students List</div>
							</div>

@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li><a class="parent-item" href="#">Students</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li class="active">All Students List</li>
							</ol>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="tabbable-line">
								<ul class="nav customtab nav-tabs" role="tablist">
									<li class="nav-item"><a href="#tab1" class="nav-link active" data-toggle="tab">List View</a></li>
									
								</ul>
								<div class="tab-content">
									<div class="tab-pane active fontawesome-demo" id="tab1">
										<div class="row">
											<div class="col-md-12">
												<div class="card card-box">
													<div class="card-head">
														<header>All Students List</header>
														<div class="tools">
															<a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
															<a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
															<a class="t-close btn-color fa fa-times" href="javascript:;"></a>
														</div>
													</div>
<div class="card-body ">
<div class="row">
<div class="col-md-6 col-sm-6 col-6">
	<div class="btn-group">
		<a href="{{ URL::to('/student/create') }}" id="addRow" class="btn btn-info">
			Add New <i class="fa fa-plus"></i>
		</a>
	</div>
</div>
<div class="col-md-6 col-sm-6 col-6">
	<div class="btn-group pull-right">
		<a class="btn deepPink-bgcolor  btn-outline dropdown-toggle" data-toggle="dropdown">Tools
			<i class="fa fa-angle-down"></i>
		</a>
		<ul class="dropdown-menu pull-right">
			<li>
				<a href="javascript:;">
					<i class="fa fa-print"></i> Print </a>
			</li>
			<li>
				<a href="javascript:;">
					<i class="fa fa-file-pdf-o"></i> Save as PDF </a>
			</li>
			<li>
				<a href="javascript:;">
					<i class="fa fa-file-excel-o"></i> Export to Excel </a>
			</li>
		</ul>
	</div>
</div>
</div>
<div class="table-scrollable">
<table class="table table-striped table-bordered table-hover table-checkable order-column valign-middle"
 id="example4">
	<thead>
		<tr>
			<th></th>
			<th> Roll No </th>
			<th> Name </th>
			<th> Department </th>
			<th> Mobile </th>
			<th> Email </th>
			<th>Admission Date</th>
			<th> Action </th>
		</tr>
	</thead>
	<tbody>


		@foreach($allstudents as $student)
		<tr class="odd gradeX">
			<td class="patient-img">
				<img src="" height="100" width="200" style="border-radius: 50%;" >
			</td>
			<td class="left">{{ $student->name }}</td>
			
			<td class="left">{{ $student->name }}</td>
			<td><a href="tel:4444565756">
			 </a></td>
			<td><a href="mailto:shuxer@gmail.com">
					</a></td>
			<td class="left">22 Feb 2010</td>
			<td>
				<a href="{{ URL::to('student_edit/'. $student->id )}}" class="btn btn-primary btn-xs">
					<i class="fa fa-pencil"></i>

				</a>
				<a href="{{ URL::to('student_delete/'. $student->id )}}" id="delete"><button class="btn btn-danger btn-xs">
					<i class="fa fa-trash-o "></i>
				</button></a>
					<a href="{{ URL::to('student_profile/'. $student->id )}}"><button class="btn btn-success btn-xs">
					<i class="fa fa-user-o "></i>
				</button></a>
				
			</td>
		</tr>
		@endforeach
		
		
	</tbody>
</table>
</div>
</div>



@endsection()