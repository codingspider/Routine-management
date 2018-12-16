@extends('partials.layouts')



@section('body')





<div class="page-content-wrapper">
<div class="page-content">
<div class="page-bar">
<div class="page-title-breadcrumb">
<div class=" pull-left">
<div class="page-title">All Students List</div>
</div>
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
	<li class="nav-item"><a href="#tab2" class="nav-link" data-toggle="tab">Grid View</a></li>
</ul>
<div class="tab-content">
	<div class="tab-pane active fontawesome-demo" id="tab1">
		<div class="row">
			<div class="col-md-12">
				<div class="card card-box">
					<div class="card-head">
						<header>All Students List</header>

						
@if(session()->has('message'))
<div class="alert alert-success">
{{ session()->get('message') }}
</div>
@endif

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
									<a href="add_professor.html" id="addRow" class="btn btn-info">
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
										<th> Father Name </th>
										<th> Mobile </th>
										<th> Email </th>
										<th>Birth Date</th>
										<th> Action </th>
									</tr>
								</thead>
								<tbody>
									<tr class="odd gradeX">
										<td class="patient-img">
											<img src="../assets/img/std/std1.jpg" alt="">
										</td>
										<td class="left">18</td>
										<td>Rajesh Bhatt</td>
										<td class="left">Mechanical</td>
										<td><a href="tel:4444565756">
												4444565756 </a></td>
										<td><a href="mailto:shuxer@gmail.com">
												rajesh@gmail.com </a></td>
										<td class="left">22 Feb 2010</td>
										<td>
											<a href="edit_professor.html" class="btn btn-primary btn-xs">
												<i class="fa fa-pencil"></i>
											</a>
											<button class="btn btn-danger btn-xs">
												<i class="fa fa-trash-o "></i>
											</button>
										</td>
									</tr>
									<tr class="odd gradeX">
										<td class="patient-img">
											<img src="../assets/img/std/std10.jpg" alt="">
										</td>
										<td class="left">5</td>
										<td>Pooja Patel</td>
										<td class="left">Science</td>
										<td><a href="tel:444786876">
												444786876 </a></td>
										<td><a href="mailto:shuxer@gmail.com">
												pooja@gmail.com </a></td>
										<td class="left">27 Aug 2005</td>
										<td>
											<a href="edit_professor.html" class="btn btn-primary btn-xs">
												<i class="fa fa-pencil"></i>
											</a>
											<button class="btn btn-danger btn-xs">
												<i class="fa fa-trash-o "></i>
											</button>
										</td>
									</tr>
									<tr class="odd gradeX">
										<td class="patient-img">
											<img src="../assets/img/std/std2.jpg" alt="">
										</td>
										<td class="left">15</td>
										<td>Sarah Smith</td>
										<td class="left">M.C.A.</td>
										<td><a href="tel:44455546456">
												44455546456 </a></td>
										<td><a href="mailto:shuxer@gmail.com">
												sarah@gmail.com </a></td>
										<td class="left">05 Jun 2011</td>
										<td>
											<a href="edit_professor.html" class="btn btn-primary btn-xs">
												<i class="fa fa-pencil"></i>
											</a>
											<button class="btn btn-danger btn-xs">
												<i class="fa fa-trash-o "></i>
											</button>
										</td>
									</tr>
									<tr class="odd gradeX">
										<td class="patient-img">
											<img src="../assets/img/std/std3.jpg" alt="">
										</td>
										<td class="left">23</td>
										<td>John Deo</td>
										<td class="left">M.B.B.S.</td>
										<td><a href="tel:444543564">
												444543564 </a></td>
										<td><a href="mailto:shuxer@gmail.com">
												john@gmail.com </a></td>
										<td class="left">15 Feb 2012</td>
										<td>
											<a href="edit_professor.html" class="btn btn-primary btn-xs">
												<i class="fa fa-pencil"></i>
											</a>
											<button class="btn btn-danger btn-xs">
												<i class="fa fa-trash-o "></i>
											</button>
										</td>
									</tr>
									<tr class="odd gradeX">
										<td class="patient-img">
											<img src="../assets/img/std/std4.jpg" alt="">
										</td>
										<td class="left">10</td>
										<td>Jay Soni</td>
										<td class="left">Arts</td>
										<td><a href="tel:444543564">
												444543564 </a></td>
										<td><a href="mailto:shuxer@gmail.com">
												kenh@gmail.com </a></td>
										<td class="left">12 Nov 2012</td>
										<td>
											<a href="edit_professor.html" class="btn btn-primary btn-xs">
												<i class="fa fa-pencil"></i>
											</a>
											<button class="btn btn-danger btn-xs">
												<i class="fa fa-trash-o "></i>
											</button>
										</td>
									</tr>
									<tr class="odd gradeX">
										<td class="patient-img">
											<img src="../assets/img/std/std5.jpg" alt="">
										</td>
										<td class="left">14</td>
										<td>Jacob Ryan</td>
										<td class="left">Music</td>
										<td><a href="tel:444543564">
												444543564 </a></td>
										<td><a href="mailto:shuxer@gmail.com">
												johnson@gmail.com </a></td>
										<td class="left">03 Dec 2001</td>
										<td>
											<a href="edit_professor.html" class="btn btn-primary btn-xs">
												<i class="fa fa-pencil"></i>
											</a>
											<button class="btn btn-danger btn-xs">
												<i class="fa fa-trash-o "></i>
											</button>
										</td>
									</tr>
									<tr class="odd gradeX">
										<td class="patient-img">
											<img src="../assets/img/std/std6.jpg" alt="">
										</td>
										<td class="left">7</td>
										<td>Megha Trivedi</td>
										<td class="left">Commerce</td>
										<td><a href="tel:444543564">
												444543564 </a></td>
										<td><a href="mailto:shuxer@gmail.com">
												megha@gmail.com </a></td>
										<td class="left">17 Mar 2013</td>
										<td>
											<a href="edit_professor.html" class="btn btn-primary btn-xs">
												<i class="fa fa-pencil"></i>
											</a>
											<button class="btn btn-danger btn-xs">
												<i class="fa fa-trash-o "></i>
											</button>
										</td>
									</tr>
									<tr class="odd gradeX">
										<td class="patient-img">
											<img src="../assets/img/std/std3.jpg" alt="">
										</td>
										<td class="left">18</td>
										<td>Rajesh</td>
										<td class="left">Civil</td>
										<td><a href="tel:4444565756">
												4444565756 </a></td>
										<td><a href="mailto:shuxer@gmail.com">
												rajesh@gmail.com </a></td>
										<td class="left">22 Feb 2000</td>
										<td>
											<a href="edit_professor.html" class="btn btn-primary btn-xs">
												<i class="fa fa-pencil"></i>
											</a>
											<button class="btn btn-danger btn-xs">
												<i class="fa fa-trash-o "></i>
											</button>
										</td>
									</tr>
									<tr class="odd gradeX">
										<td class="patient-img">
											<img src="../assets/img/std/std10.jpg" alt="">
										</td>
										<td class="left">5</td>
										<td>Pooja Patel</td>
										<td class="left">Computer</td>
										<td><a href="tel:444786876">
												444786876 </a></td>
										<td><a href="mailto:shuxer@gmail.com">
												pooja@gmail.com </a></td>
										<td class="left">27 Aug 2005</td>
										<td>
											<a href="edit_professor.html" class="btn btn-primary btn-xs">
												<i class="fa fa-pencil"></i>
											</a>
											<a href="javasctipt().html" class="btn btn-danger btn-xs">
												<i class="fa fa-trash-o "></i>
											</a>
										</td>
									</tr>
									<tr class="odd gradeX">
										<td class="patient-img">
											<img src="../assets/img/std/std1.jpg" alt="">
										</td>
										<td class="left">18</td>
										<td>Rajesh Bhatt</td>
										<td class="left">Mechanical</td>
										<td><a href="tel:4444565756">
												4444565756 </a></td>
										<td><a href="mailto:shuxer@gmail.com">
												rajesh@gmail.com </a></td>
										<td class="left">22 Feb 2010</td>
										<td>
											<a href="edit_professor.html" class="btn btn-primary btn-xs">
												<i class="fa fa-pencil"></i>
											</a>
											<button class="btn btn-danger btn-xs">
												<i class="fa fa-trash-o "></i>
											</button>
										</td>
									</tr>
									<tr class="odd gradeX">
										<td class="patient-img">
											<img src="../assets/img/std/std10.jpg" alt="">
										</td>
										<td class="left">5</td>
										<td>Pooja Patel</td>
										<td class="left">Science</td>
										<td><a href="tel:444786876">
												444786876 </a></td>
										<td><a href="mailto:shuxer@gmail.com">
												pooja@gmail.com </a></td>
										<td class="left">27 Aug 2005</td>
										<td>
											<a href="edit_professor.html" class="btn btn-primary btn-xs">
												<i class="fa fa-pencil"></i>
											</a>
											<button class="btn btn-danger btn-xs">
												<i class="fa fa-trash-o "></i>
											</button>
										</td>
									</tr>
									<tr class="odd gradeX">
										<td class="patient-img">
											<img src="../assets/img/std/std2.jpg" alt="">
										</td>
										<td class="left">15</td>
										<td>Sarah Smith</td>
										<td class="left">M.C.A.</td>
										<td><a href="tel:44455546456">
												44455546456 </a></td>
										<td><a href="mailto:shuxer@gmail.com">
												sarah@gmail.com </a></td>
										<td class="left">05 Jun 2011</td>
										<td>
											<a href="edit_professor.html" class="btn btn-primary btn-xs">
												<i class="fa fa-pencil"></i>
											</a>
											<button class="btn btn-danger btn-xs">
												<i class="fa fa-trash-o "></i>
											</button>
										</td>
									</tr>
									<tr class="odd gradeX">
										<td class="patient-img">
											<img src="../assets/img/std/std3.jpg" alt="">
										</td>
										<td class="left">23</td>
										<td>John Deo</td>
										<td class="left">M.B.B.S.</td>
										<td><a href="tel:444543564">
												444543564 </a></td>
										<td><a href="mailto:shuxer@gmail.com">
												john@gmail.com </a></td>
										<td class="left">15 Feb 2012</td>
										<td>
											<a href="edit_professor.html" class="btn btn-primary btn-xs">
												<i class="fa fa-pencil"></i>
											</a>
											<button class="btn btn-danger btn-xs">
												<i class="fa fa-trash-o "></i>
											</button>
										</td>
									</tr>
									<tr class="odd gradeX">
										<td class="patient-img">
											<img src="../assets/img/std/std4.jpg" alt="">
										</td>
										<td class="left">10</td>
										<td>Jay Soni</td>
										<td class="left">Arts</td>
										<td><a href="tel:444543564">
												444543564 </a></td>
										<td><a href="mailto:shuxer@gmail.com">
												kenh@gmail.com </a></td>
										<td class="left">12 Nov 2012</td>
										<td>
											<a href="edit_professor.html" class="btn btn-primary btn-xs">
												<i class="fa fa-pencil"></i>
											</a>
											<button class="btn btn-danger btn-xs">
												<i class="fa fa-trash-o "></i>
											</button>
										</td>
									</tr>
									<tr class="odd gradeX">
										<td class="patient-img">
											<img src="../assets/img/std/std5.jpg" alt="">
										</td>
										<td class="left">14</td>
										<td>Jacob Ryan</td>
										<td class="left">Music</td>
										<td><a href="tel:444543564">
												444543564 </a></td>
										<td><a href="mailto:shuxer@gmail.com">
												johnson@gmail.com </a></td>
										<td class="left">03 Dec 2001</td>
										<td>
											<a href="edit_professor.html" class="btn btn-primary btn-xs">
												<i class="fa fa-pencil"></i>
											</a>
											<button class="btn btn-danger btn-xs">
												<i class="fa fa-trash-o "></i>
											</button>
										</td>
									</tr>
									<tr class="odd gradeX">
										<td class="patient-img">
											<img src="../assets/img/std/std6.jpg" alt="">
										</td>
										<td class="left">7</td>
										<td>Megha Trivedi</td>
										<td class="left">Commerce</td>
										<td><a href="tel:444543564">
												444543564 </a></td>
										<td><a href="mailto:shuxer@gmail.com">
												megha@gmail.com </a></td>
										<td class="left">17 Mar 2013</td>
										<td>
											<a href="edit_professor.html" class="btn btn-primary btn-xs">
												<i class="fa fa-pencil"></i>
											</a>
											<button class="btn btn-danger btn-xs">
												<i class="fa fa-trash-o "></i>
											</button>
										</td>
									</tr>
									<tr class="odd gradeX">
										<td class="patient-img">
											<img src="../assets/img/std/std1.jpg" alt="">
										</td>
										<td class="left">18</td>
										<td>Rajesh</td>
										<td class="left">Civil</td>
										<td><a href="tel:4444565756">
												4444565756 </a></td>
										<td><a href="mailto:shuxer@gmail.com">
												rajesh@gmail.com </a></td>
										<td class="left">22 Feb 2000</td>
										<td>
											<a href="edit_professor.html" class="btn btn-primary btn-xs">
												<i class="fa fa-pencil"></i>
											</a>
											<button class="btn btn-danger btn-xs">
												<i class="fa fa-trash-o "></i>
											</button>
										</td>
									</tr>
									<tr class="odd gradeX">
										<td class="patient-img">
											<img src="../assets/img/std/std10.jpg" alt="">
										</td>
										<td class="left">5</td>
										<td>Pooja Patel</td>
										<td class="left">Computer</td>
										<td><a href="tel:444786876">
												444786876 </a></td>
										<td><a href="mailto:shuxer@gmail.com">
												pooja@gmail.com </a></td>
										<td class="left">27 Aug 2005</td>
										<td>
											<a href="edit_professor.html" class="btn btn-primary btn-xs">
												<i class="fa fa-pencil"></i>
											</a>
											<a href="javasctipt().html" class="btn btn-danger btn-xs">
												<i class="fa fa-trash-o "></i>
											</a>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="tab-pane" id="tab2">
		<div class="row">
			<div class="col-md-4">
				<div class="card card-box">
					<div class="card-body no-padding ">
						<div class="doctor-profile">
							<img src="../assets/img/std/std10.jpg" class="doctor-pic" alt="">
							<div class="profile-usertitle">
								<div class="doctor-name">Pooja Patel </div>
								<div class="name-center"> Science </div>
							</div>
							<p>A-103, shyam gokul flats, Mahatma Road <br />Mumbai</p>
							<div>
								<p><i class="fa fa-phone"></i><a href="tel:(123)456-7890"> (123)456-7890</a></p>
							</div>
							<div class="profile-userbuttons">
								<a href="professor_profile.html" class="btn btn-circle deepPink-bgcolor btn-sm">Read More</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card card-box">
					<div class="card-body no-padding ">
						<div class="doctor-profile">
							<img src="../assets/img/std/std1.jpg" class="doctor-pic" alt="">
							<div class="profile-usertitle">
								<div class="doctor-name">Rajesh </div>
								<div class="name-center"> Mathematics </div>
							</div>
							<p>45, Krishna Tower, Near Bus Stop, Satellite, <br />Mumbai</p>
							<div>
								<p><i class="fa fa-phone"></i><a href="tel:(123)456-7890"> (123)456-7890</a></p>
							</div>
							<div class="profile-userbuttons">
								<a href="professor_profile.html" class="btn btn-circle deepPink-bgcolor btn-sm">Read More</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card card-box">
					<div class="card-body no-padding ">
						<div class="doctor-profile">
							<img src="../assets/img/std/std2.jpg" class="doctor-pic" alt="">
							<div class="profile-usertitle">
								<div class="doctor-name">Sarah Smith </div>
								<div class="name-center"> Commerce </div>
							</div>
							<p>456, Estern evenue, Courtage area, <br />New York</p>
							<div>
								<p><i class="fa fa-phone"></i><a href="tel:(123)456-7890"> (123)456-7890</a></p>
							</div>
							<div class="profile-userbuttons">
								<a href="professor_profile.html" class="btn btn-circle deepPink-bgcolor btn-sm">Read More</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<div class="card card-box">
					<div class="card-body no-padding ">
						<div class="doctor-profile">
							<img src="../assets/img/std/std3.jpg" class="doctor-pic" alt="">
							<div class="profile-usertitle">
								<div class="doctor-name">John Deo </div>
								<div class="name-center"> Arts </div>
							</div>
							<p>A-103, shyam gokul flats, Mahatma Road <br />Mumbai</p>
							<div>
								<p><i class="fa fa-phone"></i><a href="tel:(123)456-7890"> (123)456-7890</a></p>
							</div>
							<div class="profile-userbuttons">
								<a href="professor_profile.html" class="btn btn-circle deepPink-bgcolor btn-sm">Read More</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card card-box">
					<div class="card-body no-padding ">
						<div class="doctor-profile">
							<img src="../assets/img/std/std4.jpg" class="doctor-pic" alt="">
							<div class="profile-usertitle">
								<div class="doctor-name">Jay Soni </div>
								<div class="name-center"> M.B.A. </div>
							</div>
							<p>45, Krishna Tower, Near Bus Stop, Satellite, <br />Mumbai</p>
							<div>
								<p><i class="fa fa-phone"></i><a href="tel:(123)456-7890"> (123)456-7890</a></p>
							</div>
							<div class="profile-userbuttons">
								<a href="professor_profile.html" class="btn btn-circle deepPink-bgcolor btn-sm">Read More</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card card-box">
					<div class="card-body no-padding ">
						<div class="doctor-profile">
							<img src="../assets/img/std/std5.jpg" class="doctor-pic" alt="">
							<div class="profile-usertitle">
								<div class="doctor-name">Jacob Ryan </div>
								<div class="name-center"> Urology </div>
							</div>
							<p>456, Estern evenue, Courtage area, <br />New York</p>
							<div>
								<p><i class="fa fa-phone"></i><a href="tel:(123)456-7890"> (123)456-7890</a></p>
							</div>
							<div class="profile-userbuttons">
								<a href="professor_profile.html" class="btn btn-circle deepPink-bgcolor btn-sm">Read More</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<div class="card card-box">
					<div class="card-body no-padding ">
						<div class="doctor-profile">
							<img src="../assets/img/std/std6.jpg" class="doctor-pic" alt="">
							<div class="profile-usertitle">
								<div class="doctor-name">Megha Trivedi </div>
								<div class="name-center"> Electrical </div>
							</div>
							<p>A-103, shyam gokul flats, Mahatma Road <br />Mumbai</p>
							<div>
								<p><i class="fa fa-phone"></i><a href="tel:(123)456-7890"> (123)456-7890</a></p>
							</div>
							<div class="profile-userbuttons">
								<a href="professor_profile.html" class="btn btn-circle deepPink-bgcolor btn-sm">Read More</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card card-box">
					<div class="card-body no-padding ">
						<div class="doctor-profile">
							<img src="../assets/img/std/std1.jpg" class="doctor-pic" alt="">
							<div class="profile-usertitle">
								<div class="doctor-name">Rajesh </div>
								<div class="name-center"> Mathematics </div>
							</div>
							<p>45, Krishna Tower, Near Bus Stop, Satellite, <br />Mumbai</p>
							<div>
								<p><i class="fa fa-phone"></i><a href="tel:(123)456-7890"> (123)456-7890</a></p>
							</div>
							<div class="profile-userbuttons">
								<a href="professor_profile.html" class="btn btn-circle deepPink-bgcolor btn-sm">Read More</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card card-box">
					<div class="card-body no-padding ">
						<div class="doctor-profile">
							<img src="../assets/img/std/std2.jpg" class="doctor-pic" alt="">
							<div class="profile-usertitle">
								<div class="doctor-name">Sarah Smith </div>
								<div class="name-center"> Commerce </div>
							</div>
							<p>456, Estern evenue, Courtage area, <br />New York</p>
							<div>
								<p><i class="fa fa-phone"></i><a href="tel:(123)456-7890"> (123)456-7890</a></p>
							</div>
							<div class="profile-userbuttons">
								<a href="professor_profile.html" class="btn btn-circle deepPink-bgcolor btn-sm">Read More</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<div class="card card-box">
					<div class="card-body no-padding ">
						<div class="doctor-profile">
							<img src="../assets/img/std/std10.jpg" class="doctor-pic" alt="">
							<div class="profile-usertitle">
								<div class="doctor-name">Pooja Patel </div>
								<div class="name-center"> Science </div>
							</div>
							<p>A-103, shyam gokul flats, Mahatma Road <br />Mumbai</p>
							<div>
								<p><i class="fa fa-phone"></i><a href="tel:(123)456-7890"> (123)456-7890</a></p>
							</div>
							<div class="profile-userbuttons">
								<a href="professor_profile.html" class="btn btn-circle deepPink-bgcolor btn-sm">Read More</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card card-box">
					<div class="card-body no-padding ">
						<div class="doctor-profile">
							<img src="../assets/img/std/std1.jpg" class="doctor-pic" alt="">
							<div class="profile-usertitle">
								<div class="doctor-name">Rajesh </div>
								<div class="name-center"> Mathematics </div>
							</div>
							<p>45, Krishna Tower, Near Bus Stop, Satellite, <br />Mumbai</p>
							<div>
								<p><i class="fa fa-phone"></i><a href="tel:(123)456-7890"> (123)456-7890</a></p>
							</div>
							<div class="profile-userbuttons">
								<a href="professor_profile.html" class="btn btn-circle deepPink-bgcolor btn-sm">Read More</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card card-box">
					<div class="card-body no-padding ">
						<div class="doctor-profile">
							<img src="../assets/img/std/std3.jpg" class="doctor-pic" alt="">
							<div class="profile-usertitle">
								<div class="doctor-name">John Deo </div>
								<div class="name-center"> Arts </div>
							</div>
							<p>A-103, shyam gokul flats, Mahatma Road <br />Mumbai</p>
							<div>
								<p><i class="fa fa-phone"></i><a href="tel:(123)456-7890"> (123)456-7890</a></p>
							</div>
							<div class="profile-userbuttons">
								<a href="professor_profile.html" class="btn btn-circle deepPink-bgcolor btn-sm">Read More</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
</div>
</div>
</div>
</div>




@endsection()