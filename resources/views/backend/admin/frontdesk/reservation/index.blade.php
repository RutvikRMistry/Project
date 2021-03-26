@extends('backend.master')
@section('title',"Reservation")
@section('content')
 <!-- Top Menubar Ends Here-->
 <div class="page">
     @include('backend.partials.leftbar.shortcuts')
	<div class="page-main">
	   <div class="page-header">
		  <h1 class="page-title">Online Reservation</h1>
	   </div>
	   <div style="width: 100%; padding: 30px;">
		  <div class="panel-body" style="background-color: #fff; ">
			 <header class="panel-heading">
				<div style="width: 50%; float: left;">
				   <div class="tablesaw-sortable-switch tablesaw-bar-section">
					  <label>
						 <span class="btn tablesaw-btn btn-select tablesaw-btn-select">
							<span aria-hidden="true">Sort By ↑</span>
							<select>
							   <option selected="" value="0_asc">Reservation No. ↑</option>
							   <option value="0_desc">Reservation No. ↓</option>
							   <option value="1_asc">Reservation Date</option>
							   <option value="1_desc">Reservation Date</option>
							   <option value="2_asc">Guest ↑</option>
							   <option value="2_desc">Guest ↓</option>
							   <option value="3_asc">Checkin ↑</option>
							   <option value="3_desc">Checkin ↓</option>
							   <option value="4_asc">Checkout</option>
							   <option value="4_desc">Checkout</option>
							</select>
						 </span>
					  </label>
				   </div>
				</div>
				<div style="width: 50%; float: right;">
				   <div class="btn-group" aria-label="Button group with nested dropdown" role="group" style="float: right; padding-top: 10px;">
					  <a href="{{route('backend.admin.frontdesk.reservation.create')}}">
					  <button type="button" class="btn btn-primary"><i class="icon wb-plus mr-10" aria-hidden="true"></i>Add Reservations</button></a>
					  <button type="button" class="btn btn-primary dropdown-toggle" id="exampleSplitDropdown1" data-toggle="dropdown" aria-expanded="false"></button>
					  <div class="dropdown-menu" aria-labelledby="exampleSplitDropdown1" role="menu">
						 <a class="dropdown-item" href="{{route('backend.admin.frontdesk.reservation')}}" role="menuitem">All</a>
						 <a class="dropdown-item" href="{{route('backend.admin.frontdesk.reservation')}}/online" role="menuitem">Online</a>
						 <a class="dropdown-item" href="{{route('backend.admin.frontdesk.reservation')}}/offline" role="menuitem">Offline</a>
					  </div>
				   </div>
				</div>
				<div>
				   <table class="table table-hover dataTable table-striped w-full dtr-inline" data-plugin="dataTable" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info" style="width: 1783px;">
					  <thead style="background-color: #efeeef; height: 60px;">
						 <tr role="row">
							<th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 354.992px;" aria-sort="ascending" aria-label="Reservation No.: activate to sort column descending"><i class="icon fa-list-ol" aria-hidden="true"></i> Reservation No.</th>
							<th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 375.992px;" aria-label="Reservation Date: activate to sort column ascending"><i class="icon fa-clock-o" aria-hidden="true"></i> Reservation Date</th>
							<th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 176.992px;" aria-label="Guest: activate to sort column ascending"><i class="icon fa-group" aria-hidden="true"></i> Guest</th>
							<th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 214.992px;" aria-label="Checkin: activate to sort column ascending"><i class="icon fa-calendar-check-o" aria-hidden="true"></i> Checkin</th>
							<th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 240.992px;" aria-label="Checkout: activate to sort column ascending"><i class="icon fa-calendar-minus-o" aria-hidden="true"></i> Checkout</th>
							<th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 240.992px;" aria-label="Checkout: activate to sort column ascending"><i aria-hidden="true"></i> Booking Type</th>
							<th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 190.992px;" aria-label="Status: activate to sort column ascending"><i class="icon fa-hourglass-1" aria-hidden="true"></i> Status</th>
							<th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 176.992px;" aria-label="Status: activate to sort column ascending"><i class="icon fa-hourglass-1" aria-hidden="true"></i> Action</th>
						 </tr>
					  </thead>
					  <tfoot>
					  </tfoot>
					  <tbody>
					  @forelse($reservations as $key=>$reservation)
						 <tr role="row" class="odd">
							<td tabindex="0" class="sorting_1">{{$reservation->uid}} </td>
							<td style=""><b>{{$reservation->date}}</b> </td>
							<td style="">{{$reservation->guest->username}}</td>
							<td style=""><i class="icon fa-check" aria-hidden="true"></i>   <b>{{$reservation->check_in}}</b></td>
							<td style=""><i class="icon fa-close" aria-hidden="true"></i>   <b>{{$reservation->check_out}}</b></td>
							<td style="">
							   <div class="time"><button type="button" class="btn btn-xs btn-success" style="width: 100%">
								  <i></i><span class="text">{{$reservation->online?'Online':'Offline'}}</span></button>
							   </div>
							   <td class="text-center"><span class="badge badge-{{$reservation->statusClass()}}">{{$reservation->status == 'ONLINE_PENDING'?'PENDING':$reservation->status}}</span></td>
							<td> <a href="{{route('backend.admin.frontdesk.reservation.view',$reservation->id)}}">
							   <button type="button" class="btn btn-primary" ><i class="fa fa-eye" aria-hidden="true"></i>View</button></a>
							</td>
							</td>
						 </tr>
								@empty

				<tr>
					<td colspan="10">No Reservation</td>
				</tr>
				@endforelse
						 
						 
						
		
					  </tbody>
				   </table>
				</div>
				<div>
				   <div style="padding: 30px; background-color: #fff;">
					  <div class="row">
						 <div style="width: 50%; background-color: #fff; float: left;">
							<div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite" style="margin-top: 25px;">Showing 1 to 10 of 12 entries</div>
						 </div>
						 <div style="width: 50%; background-color: #fff;    float: right;">
							<div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
							   <ul class="pagination" style="float: right; margin-top: 10px;">
								  <li class="paginate_button page-item previous disabled" id="DataTables_Table_0_previous"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li>
								  <li class="paginate_button page-item active"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
								  <li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="2" tabindex="0" class="page-link">2</a></li>
								  <li class="paginate_button page-item next" id="DataTables_Table_0_next"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="3" tabindex="0" class="page-link">Next</a></li>
							   </ul>
							</div>
						 </div>
					  </div>
				   </div>
				</div>
			 </header>
			 <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
				<div class="col-sm-12 col-md-6">
				   <div id="DataTables_Table_0_filter" class="dataTables_filter"></div>
				</div>
			 </div>
			 <div class="row"></div>
		  </div>
	   </div>
	</div>


	 
 </div>

@endsection
