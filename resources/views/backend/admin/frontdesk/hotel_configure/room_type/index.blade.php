@extends('backend.master')
@section('title',"Hotel Configuration")
@section('content')
 <!-- Top Menubar Ends Here-->
 <div class="page">
    @include('backend.partials.leftbar.shortcuts')
	<div class="page-main">
	   <div class="page-header"style="height: 5px;" >
		  <h1 class="page-title">Room Type</h1>
	   </div>
	   <div style="width: 100%; padding: 30px;">
	   @include('backend.partials.flash_message')
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
					  <div class="tablesaw-sortable-switch tablesaw-bar-section">
						 <button type="button" class="btn btn-default btn-outline" style="margin: auto;"><i class="fa fa-image"></i>Image Upload</button>&nbsp;
					  </div>
					  <a href="{{route('backend.admin.frontdesk.hotel_configure.room_type.create')}}">
					  <button type="button" class="btn btn-primary" style="margin: auto;"><i class="icon wb-plus mr-10" aria-hidden="true"></i>Add Room</button></a>
				   </div>
				</div>
				<div>
				   <table class="table table-hover dataTable table-striped w-full dtr-inline" data-plugin="dataTable" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info" style="width: 1783px;">
					  <thead>
						 <tr>
							<th>SI.NO.</th>
							<th>Title</th>
							<th>Short Code</th>
							<th>Price</th>
							<th>Total Room</th>
							<th>Status</th>
							<th>Actions</th>
						 </tr>
					  </thead>
					  <tbody>
					  
					  @php
						$cnt=1;
					  @endphp
					  @foreach($roomTypes as $roomtype)
						 <tr class="gradeA">
							<td>{{$cnt++}}</td>
							<td>{{$roomtype->title}}</td>
							<td>{{$roomtype->short_code}}</td>
							<td>{{general_setting()->cur_sym}}{{$roomtype->base_price}}</td>
							<td>{{$roomtype->room->count()}}</td>
							<td > <span class=" badge badge-pill {{$roomtype->status?'badge-success':'badge-danger'}}">{{$roomtype->status?'Active':'Inactive'}}</span></td>
						
							<td class="actions">
							   <button type="button" class=" dropdown-toggle" id="exampleSplitDropdown1" data-toggle="dropdown" aria-expanded="false">Manage Price</button>
							   <div class="dropdown-menu" aria-labelledby="exampleSplitDropdown1" role="menu">
								  <a class="dropdown-item" href="{{route('backend.admin.frontdesk.regular_price_update',$roomtype->id)}}" role="menuitem">Regular Price</a>
								  <a class="dropdown-item" href="{{route('backend.admin.special_price_update',$roomtype->id)}}" role="menuitem">Special Price</a>
							   </div>
							   <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-editing save-row"
								  data-toggle="tooltip" data-original-title="Save" hidden><i class="icon wb-wrench" aria-hidden="true"></i></a>
							   <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-editing cancel-row"
								  data-toggle="tooltip" data-original-title="Delete" hidden><i class="icon wb-close" aria-hidden="true"></i></a>
							   <a href="{{route('backend.admin.frontdesk.hotel_configure.room_type.edit',$roomtype->id)}}" class="btn btn-sm btn-icon btn-pure btn-default on-default edit-row"
								  data-toggle="tooltip" data-original-title="Edit"><i class="icon wb-edit" aria-hidden="true"></i></a>
							   <a href="{{route('backend.admin.frontdesk.hotel_configure.room_type.view',$roomtype->id)}}" class="btn btn-sm btn-icon btn-pure btn-default on-default remove-row"
								  data-toggle="tooltip" data-original-title="View"><i class="fa fa-eye" aria-hidden="true"></i></a>
							   <a href="javascript:void(0);" class="btn btn-sm btn-icon btn-pure btn-default on-default remove-row"
								data-toggle="tooltip" data-original-title="Remove" onclick="deleteBlog({{$roomtype->id}},'{{route('backend.admin.frontdesk.hotel_configure.room_type.delete',$roomtype->id)}}');"><i class="icon wb-trash" aria-hidden="true"></i></a>
						   
							</td>
						 </tr>
						 @endforeach
						 
						 
						
					  </tbody>
				   </table>
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
			 <div class="col-sm-12 col-md-6"><div id="DataTables_Table_0_filter" class="dataTables_filter"></div>
			 </div>
			 </div>
			 <div class="row"></div>
			 </div>
		  </div>
			  
	   </div>
	</div>


	 
 </div>
<script type="text/javascript">			
	function deleteBlog(id, url){			
		if(confirm('Are You Sure You Want To Delete')){
			window.location.href = url;	
		}
	}	
</script>
@endsection
