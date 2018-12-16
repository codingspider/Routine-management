@extends('master')

@section('content')

<div class="page-content-wrapper">
				
			
								
								<div class="card-body ">
									<div class="table-scrollable">
										<table class="table table-striped table-bordered table-hover table-checkable order-column valign-middle" id="example4">
											@if(session()->has('success'))
											    <div class="alert alert-success">
											        {{ session()->get('success') }}
											    </div>
											@endif
										
											<tr>
												<td > Time Slot One</td>
												<td > Time Slot Two</td>
												<td > Time Slot Three</td>
												<td > Time Slot Four</td>
												<td > Time Slot Five</td>

											</tr>

											
											
											<?php

										$Rows = 7; 
										$Cols = 5; 

										for($i=1;$i<=$Rows;$i++)

											{  
												echo '<tr>';
										for($j=1;$j<=$Cols;$j++)
										{
											echo "<td>";

			$data = DB::table('routines')
			->join('teachers', 'teachers.id', '=', 'routines.teacher_id')
            ->join('semesters', 'semesters.id', '=', 'routines.semester_id')
            ->select('routines.*', 'teachers.name', 'semesters.name as sname')
            ->where('routines.time_slot',$j)
            ->where('routines.day', $i)
            ->first();

								      
								      
			      	if ($data){
			          echo "Room Num:" . $data->room_no;
			          echo "<br>";
			          echo "Day:" . $data->day;
			          echo "<br>";
			          echo "Teacher Name:" . $data->name;
			          echo "<br>";
			          echo "Semester :" . $data->sname;
			      }else{
			      	echo "";

			      }
					  }
						echo '</tr>';
					  }


										?>

									</table>
										
										


									</div>
								</div>
							</div>
				
			
@endsection