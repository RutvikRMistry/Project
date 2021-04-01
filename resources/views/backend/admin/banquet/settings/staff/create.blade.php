@extends('backend.master')
@section('title',"Add New Staff")
@section('content')
 <!-- Top Menubar Ends Here-->
 <div class="page">
    @include('backend.partials.leftbar.shortcuts')	

	<div class="page-main">
	   <div class="page-header">
		  <h1 class="page-title">Add New Staff</h1>
	   </div>
	   <div style="width: 100%; padding: 30px;">
	   @include('backend.partials.flash_message')
		  <div class="panel-body" style="background-color: #fff; ">
			 <div>
				<form action="{{route('backend.admin.banquet.sttings.staff.store')}}" method="post">
					{{csrf_field()}}
				   <div class="col-xs-12">
					  <div data-provides="fileinput" class="fileinput fileinput-new">
						 <div data-trigger="fileinput" class="fileinput-preview thumbnail form_Blade"><img id="image-preview" width="300" style="display: none;"> <img src="https://saas.banquetcrm.com/uploads/site/blogo_1574859699.png" alt="Site Logo" class="ima-responsive"></div>
						 <button type="button" class="btn btn-dark" id="input-file-now" data-plugin="dropify" data-default-file=""><i class="icon wb-upload" aria-hidden="true"></i> Select Logo</button>
					  </div>
				   </div>
				   <br>
				   <div class="row" >
					  <div class="col-lg-3 ">
						 <h5>Department:<span class="text-danger">*</span></h5>
						 <select class="form-control" data-plugin="select2" name="department_id">
								<option value="">--Select--</option>
								<option value="2">--Select--</option>
								<option value="1">--Select--</option>
							@foreach($department as $dept)
							   <option value="{{$dept->id}}"{{old('department_id') == $dept->id ? 'selected': ''}}>{{$dept->department_name}}</option>
							@endforeach  
						 </select>
						  <span class="text-danger">{{$errors->first('department_id')}}</span>
					  </div>
					  <div class="col-lg-3">
						 <h5>Designation:<span class="text-danger">*</span></h5>
						 <select class="form-control" data-plugin="select2" name="designation_id">
							   <option value="">--Select--</option>
							   <option value="2">--Select--</option>
							   <option value="1">--Select--</option>
							@foreach($designation as $design)
							   <option value="{{$design->id}}" {{old('designation_id') == $design->id ? 'selected' : '' }}>{{$design->designation_name}}</option>
							@endforeach   
						 </select>
						  <span class="text-danger">{{$errors->first('designation_id')}}</span>
					  </div>
					  <div class="col-lg-3">
						 <h5>First Name:<span class="text-danger">*</span></h5>
						 <input type="text" class="form-control" placeholder="First Name" name="first_name" value="{{old('first_name')}}" />
						  <span class="text-danger">{{$errors->first('first_name')}}</span>
					  </div>
					  <div class="col-lg-3">
						 <h5>Last Name:<span class="text-danger">*</span></h5>
						 <input type="text" class="form-control" placeholder="Last Name" name="last_name" value="{{old('last_name')}}" />
						  <span class="text-danger">{{$errors->first('last_name')}}</span>
					  </div>
				   </div>
				   <br>
				   <div class="row" >
					  <div class="col-lg-3">
						 <h5>Phone No:<span class="text-danger">*</span></h5>
						 <input type="number" class="form-control" placeholder="phone_number" name="phone_number" value="{{old('phone_number')}}" />
						  <span class="text-danger">{{$errors->first('phone_number')}}</span>
					  </div>
					  <div class="col-lg-3">
						 <h5>Email:<span class="text-danger">*</span></h5>
						 <input type="text" class="form-control" placeholder="Email" name="email" value="{{old('email')}}" />
						  <span class="text-danger">{{$errors->first('email')}}</span>
					  </div>
				   </div>
				   <br>
				   <div class="row" >
					  <div class="col-lg-6 ">
						 <h5>Password:<span class="text-danger">*</span></h5>
						 <input type="password" class="form-control" placeholder="Password" name="password" value="{{old('password')}}" />
						  <span class="text-danger">{{$errors->first('password')}}</span>
					  </div>
					  <div class="col-lg-6 ">
						 <h5>Confirmation Password:<span class="text-danger">*</span></h5>
						 <input type="password" class="form-control" placeholder="Confirm_password" name="confirm_password" value="{{old('confirm_password')}}" />
						 <span class="text-danger">{{$errors->first('confirm_password')}}</span>
						<small class="text-warning">Password And confirm_password must be Match</small>
					  </div>
				   </div>
				   <input type="hidden" value="17" name="user_id">
				   <br>
				   <header class="panel-heading">
					  <div class="panel-actions"></div>
					  <h1 class="page-title">Permissions</h1>
				   </header>
				   <br>
				   <div class="row" >
					  <div class="col-lg-6 ">
						 <h5>Sales Teams</h5>
					  </div>
					  <div class="col-lg-6 ">
						 <h5>Lead</h5>
					  </div>
				   </div>
				   <div class="row" >
					  <div class="col-lg-2">
						 <li class="mb-15">
							<input type="checkbox" class="icheckbox-primary" id="sales_team.read" name="permissions[]"
							   data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
							   />
							<label for="sales_team.read">Read</label>
						 </li>
					  </div>
					  <div class="col-lg-2 ">
						 <li class="mb-15">
							<input type="checkbox" class="icheckbox-primary" id="sales_team.write" name="permissions[]"
							   data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
							   />
							<label for="sales_team.write">Write</label>
						 </li>
					  </div>
					  <div class="col-lg-2 ">
						 <li class="mb-15">
							<input type="checkbox" class="icheckbox-primary" id="sales_team.delete" name="permissions[]"
							   data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
							   />
							<label for="sales_team.delete">Delete</label>
						 </li>
					  </div>
					  <div class="col-lg-2 ">
						 <li class="mb-15">
							<input type="checkbox" class="icheckbox-primary" id="lead.read" name="permissions[]"
							   data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
							   />
							<label for="lead.read">Read</label>
						 </li>
					  </div>
					  <div class="col-lg-2 ">
						 <li class="mb-15">
							<input type="checkbox" class="icheckbox-primary" id="lead.write" name="permissions[]"
							   data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
							   />
							<label for="lead.write">Write</label>
						 </li>
					  </div>
					  <div class="col-lg-2 ">
						 <li class="mb-15">
							<input type="checkbox" class="icheckbox-primary" id="lead.delete" name="permissions[]"
							   data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
							   />
							<label for="lead.delete">Delete</label>
						 </li>
					  </div>
				   </div>
				   <div class="row" >
					  <div class="col-lg-6 ">
						 <h5>Logged Calls</h5>
					  </div>
					  <div class="col-lg-6 ">
						 <h5>Meetings</h5>
					  </div>
				   </div>
				   <div class="row" >
					  <div class="col-lg-2 ">
						 <li class="mb-15">
							<input type="checkbox" class="icheckbox-primary" id="logged_calls.read" name="permissions[]"
							   data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
							   />
							<label for="logged_calls.read">Read</label>
						 </li>
					  </div>
					  <div class="col-lg-2 ">
						 <li class="mb-15">
							<input type="checkbox" class="icheckbox-primary" id="logged_calls.write" name="permissions[]"
							   data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
							   />
							<label for="logged_calls.write">Write</label>
						 </li>
					  </div>
					  <div class="col-lg-2 ">
						 <li class="mb-15">
							<input type="checkbox" class="icheckbox-primary" id="logged_calls.delete" name="permissions[]"
							   data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
							   />
							<label for="logged_calls.delete">Delete</label>
						 </li>
					  </div>
					  <div class="col-lg-2 ">
						 <li class="mb-15">
							<input type="checkbox" class="icheckbox-primary" id="meetings.read" name="permissions[]"
							   data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
							   />
							<label for="meetings.read">Read</label>
						 </li>
					  </div>
					  <div class="col-lg-2 ">
						 <li class="mb-15">
							<input type="checkbox" class="icheckbox-primary" id="meetings.write" name="permissions[]"
							   data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
							   />
							<label for="meetings.write">Write</label>
						 </li>
					  </div>
					  <div class="col-lg-2 ">
						 <li class="mb-15">
							<input type="checkbox" class="icheckbox-primary" id="meetings.delete" name="permissions[]"
							   data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
							   />
							<label for="meetings.delete">Delete</label>
						 </li>
					  </div>
				   </div>
				   <div class="row" >
					  <div class="col-lg-6">
						 <h5>Quotations</h5>
					  </div>
					  <div class="col-lg-6">
						 <h5>Invoices</h5>
					  </div>
				   </div>
				   <div class="row" >
					  <div class="col-lg-2 ">
						 <li class="mb-15">
							<input type="checkbox" class="icheckbox-primary" id="quotations.read" name="permissions[]"
							   data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
							   />
							<label for="quotations.read">Read</label>
						 </li>
					  </div>
					  <div class="col-lg-2 ">
						 <li class="mb-15">
							<input type="checkbox" class="icheckbox-primary" id="quotations.write" name="permissions[]"
							   data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
							   />
							<label for="quotations.write">Write</label>
						 </li>
					  </div>
					  <div class="col-lg-2 ">
						 <li class="mb-15">
							<input type="checkbox" class="icheckbox-primary" id="quotations.delete" name="permissions[]"
							   data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
							   />
							<label for="quotations.delete">Delete</label>
						 </li>
					  </div>
					  <div class="col-lg-2 ">
						 <li class="mb-15">
							<input type="checkbox" class="icheckbox-primary" id="invoices.read" name="permissions[]"
							   data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
							   />
							<label for="invoices.read">Read</label>
						 </li>
					  </div>
					  <div class="col-lg-2 ">
						 <li class="mb-15">
							<input type="checkbox" class="icheckbox-primary" id="invoices.write" name="permissions[]"
							   data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
							   />
							<label for="invoices.write">Write</label>
						 </li>
					  </div>
					  <div class="col-lg-2 ">
						 <li class="mb-15">
							<input type="checkbox" class="icheckbox-primary" id="invoices.delete" name="permissions[]"
							   data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
							   />
							<label for="invoices.delete">Delete</label>
						 </li>
					  </div>
				   </div>
				   <div class="row" >
					  <div class="col-lg-6 ">
						 <h5>Staff</h5>
					  </div>
					  <div class="col-lg-6 ">
						 <h5>Companies</h5>
					  </div>
				   </div>
				   <div class="row" >
					  <div class="col-lg-2 ">
						 <li class="mb-15">
							<input type="checkbox" class="icheckbox-primary" id="staff.read" name="permissions[]"
							   data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
							   />
							<label for="staff.read">Read</label>
						 </li>
					  </div>
					  <div class="col-lg-2 ">
						 <li class="mb-15">
							<input type="checkbox" class="icheckbox-primary" id="staff.write" name="permissions[]"
							   data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
							   />
							<label for="staff.write">Write</label>
						 </li>
					  </div>
					  <div class="col-lg-2 ">
						 <li class="mb-15">
							<input type="checkbox" class="icheckbox-primary" id="staff.delete" name="permissions[]"
							   data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
							   />
							<label for="staff.delete">Delete</label>
						 </li>
					  </div>
					  <div class="col-lg-2 ">
						 <li class="mb-15">
							<input type="checkbox" class="icheckbox-primary" id="companies.read" name="permissions[]"
							   data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
							   />
							<label for="companies.read">Read</label>
						 </li>
					  </div>
					  <div class="col-lg-2 ">
						 <li class="mb-15">
							<input type="checkbox" class="icheckbox-primary" id="companies.write" name="permissions[]"
							   data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
							   />
							<label for="companies.write">Write</label>
						 </li>
					  </div>
					  <div class="col-lg-2 ">
						 <li class="mb-15">
							<input type="checkbox" class="icheckbox-primary" id="companies.delete" name="permissions[]"
							   data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
							   />
							<label for="companies.delete">Delete</label>
						 </li>
					  </div>
				   </div>
				   <div class="row" >
					  <div class="col-lg-6 ">
						 <h5>Reports</h5>
					  </div>
				   </div>
				   <div class="row" >
					  <div class="col-lg-2 ">
						 <li class="mb-15">
							<input type="checkbox" class="icheckbox-primary" id="reports.read" name="permissions[]"
							   data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
							   />
							<label for="reports.read">Read</label>
						 </li>
					  </div>
					  <div class="col-lg-2 ">
						 <li class="mb-15">
							<input type="checkbox" class="icheckbox-primary" id="reports.write" name="permissions[]"
							   data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
							   />
							<label for="reports.write">Write</label>
						 </li>
					  </div>
					  <div class="col-lg-2 ">
						 <li class="mb-15">
							<input type="checkbox" class="icheckbox-primary" id="reports.delete" name="permissions[]"
							   data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
							   />
							<label for="reports.delete">Delete</label>
						 </li>
					  </div>
				   </div>
				   <div class="dropdown-divider"></div>
				   <div class="row" >
					  <div class="col-lg-1 ">
						 <h4 class="example-title">Event</h4>
					  </div>
					  <div class="col-lg-1 ">
						 <li class="mb-15">
							<input type="checkbox" class="icheckbox-primary" id="event.read" name="permissions[]"
							   data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
							   />
							<label for="event.read">Read</label>
						 </li>
					  </div>
					  <div class="col-lg-1 ">
						 <li class="mb-15">
							<input type="checkbox" class="icheckbox-primary" id="event.write" name="permissions[]"
							   data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
							   />
							<label for="event.write">Write</label>
						 </li>
					  </div>
					  <div class="col-lg-1 ">
						 <li class="mb-15">
							<input type="checkbox" class="icheckbox-primary" id="event.delete" name="permissions[]"
							   data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
							   />
							<label for="event.delete">Delete</label>
						 </li>
					  </div>
				   </div>
				   <div class="dropdown-divider"></div>
				   <div class="row">
					  <div class="col-lg-1 ">
						 <h4 class="example-title">Discussion</h4>
					  </div>
					  <div class="col-lg-1 ">
						 <li class="mb-15">
							<input type="checkbox" class="icheckbox-primary" id="event_discussion.read" name="permissions[]"
							   data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
							   />
							<label for="event_discussion.read">Read</label>
						 </li>
					  </div>
					  <div class="col-lg-1 ">
						 <li class="mb-15">
							<input type="checkbox" class="icheckbox-primary" id="event_discussion.write" name="permissions[]"
							   data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
							   />
							<label for="event_discussion.write">Write</label>
						 </li>
					  </div>
					  <div class="col-lg-1 ">
						 <li class="mb-15">
							<input type="checkbox" class="icheckbox-primary" id="event_discussion.delete" name="permissions[]"
							   data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
							   />
							<label for="event_discussion.delete">Delete</label>
						 </li>
					  </div>
				   </div>
				   <div class="dropdown-divider"></div>
				   <div class="row">
					  <div class="col-lg-1 ">
						 <h4 class="example-title">Task</h4>
					  </div>
					  <div class="col-lg-1 ">
						 <li class="mb-15">
							<input type="checkbox" class="icheckbox-primary" id="event_task.read" name="permissions[]"
							   data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
							   />
							<label for="event_task.read">Read</label>
						 </li>
					  </div>
					  <div class="col-lg-1 ">
						 <li class="mb-15">
							<input type="checkbox" class="icheckbox-primary" id="event_task.write" name="permissions[]"
							   data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
							   />
							<label for="event_task.write">Write</label>
						 </li>
					  </div>
					  <div class="col-lg-1 ">
						 <li class="mb-15">
							<input type="checkbox" class="icheckbox-primary" id="event_task.delete" name="permissions[]"
							   data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
							   />
							<label for="event_task.delete">Delete</label>
						 </li>
					  </div>
				   </div>
				   <div class="dropdown-divider"></div>
				   <div class="row" >
					  <div class="col-lg-1 ">
						 <h4 class="example-title">Notes</h4>
					  </div>
					  <div class="col-lg-1 ">
						 <li class="mb-15">
							<input type="checkbox" class="icheckbox-primary" id="event_note.read" name="permissions[]"
							   data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
							   />
							<label for="event_note.read">Read</label>
						 </li>
					  </div>
					  <div class="col-lg-1 ">
						 <li class="mb-15">
							<input type="checkbox" class="icheckbox-primary" id="event_note.write" name="permissions[]"
							   data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
							   />
							<label for="event_note.write">Write</label>
						 </li>
					  </div>
					  <div class="col-lg-1 ">
						 <li class="mb-15">
							<input type="checkbox" class="icheckbox-primary" id="event_note.delete" name="permissions[]"
							   data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
							   />
							<label for="event_note.delete">Delete</label>
						 </li>
					  </div>
				   </div>
				   <div class="dropdown-divider"></div>
				   <div class="row" >
					  <div class="col-lg-1 ">
						 <h4 class="example-title">Payment</h4>
					  </div>
					  <div class="col-lg-1 ">
						 <li class="mb-15">
							<input type="checkbox" class="icheckbox-primary" id="event_payment.read" name="permissions[]"
							   data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
							   />
							<label for="event_payment.read">Read</label>
						 </li>
					  </div>
					  <div class="col-lg-1 ">
						 <li class="mb-15">
							<input type="checkbox" class="icheckbox-primary" id="event_payment.write" name="permissions[]"
							   data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
							   />
							<label for="event_payment.write">Write</label>
						 </li>
					  </div>
					  <div class="col-lg-1 ">
						 <li class="mb-15">
							<input type="checkbox" class="icheckbox-primary" id="event_payment.delete" name="permissions[]"
							   data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
							   />
							<label for="event_payment.delete">Delete</label>
						 </li>
					  </div>
				   </div>
				   <div class="dropdown-divider"></div>
				   <div class="row" >
					  <div class="col-lg-1 ">
						 <h4 class="example-title">Docs</h4>
					  </div>
					  <div class="col-lg-1 ">
						 <li class="mb-15">
							<input type="checkbox" class="icheckbox-primary" id="docs.read" name="permissions[]"
							   data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
							   />
							<label for="docs.read">Read</label>
						 </li>
					  </div>
					  <div class="col-lg-1 ">
						 <li class="mb-15">
							<input type="checkbox" class="icheckbox-primary" id="docs.write" name="permissions[]"
							   data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
							   />
							<label for="docs.write">Write</label>
						 </li>
					  </div>
					  <div class="col-lg-1 ">
						 <li class="mb-15">
							<input type="checkbox" class="icheckbox-primary" id="docs.delete" name="permissions[]"
							   data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
							   />
							<label for="docs.delete">Delete</label>
						 </li>
					  </div>
				   </div>
				   <div class="dropdown-divider"></div>
				   <div class="row">
					  <div class="col-lg-6 ">
						 <h5>Booking Order</h5>
					  </div>
					  <div class="col-lg-6 ">
						 <h5>Proposal</h5>
					  </div>
				   </div>
				   <div class="row" >
					  <div class="col-lg-2 ">
						 <li class="mb-15">
							<input type="checkbox" class="icheckbox-primary" id="event_bookingorder.read" name="permissions[]"
							   data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
							   />
							<label for="event_bookingorder.read">Read</label>
						 </li>
					  </div>
					  <div class="col-lg-2 ">
						 <li class="mb-15">
							<input type="checkbox" class="icheckbox-primary" id="event_bookingorder.write" name="permissions[]"
							   data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
							   />
							<label for="event_bookingorder.write">Write</label>
						 </li>
					  </div>
					  <div class="col-lg-2 ">
						 <li class="mb-15">
							<input type="checkbox" class="icheckbox-primary" id="event_bookingorder.delete" name="permissions[]"
							   data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
							   />
							<label for="event_bookingorder.delete">Delete</label>
						 </li>
					  </div>
					  <div class="col-lg-2 ">
						 <li class="mb-15">
							<input type="checkbox" class="icheckbox-primary" id="proposal.read" name="permissions[]"
							   data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
							   />
							<label for="proposal.read">Read</label>
						 </li>
					  </div>
					  <div class="col-lg-2 ">
						 <li class="mb-15">
							<input type="checkbox" class="icheckbox-primary" id="proposal.write" name="permissions[]"
							   data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
							   />
							<label for="proposal.write">Write</label>
						 </li>
					  </div>
					  <div class="col-lg-2 ">
						 <li class="mb-15">
							<input type="checkbox" class="icheckbox-primary" id="proposal.delete" name="permissions[]"
							   data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
							   />
							<label for="proposal.delete">Delete</label>
						 </li>
					  </div>
				   </div>
				   <div class="row" style="margin: auto;">
					  <div class="col-lg-6 ">
						 <h5>Staff</h5>
					  </div>
					  <div class="col-lg-6 ">
						 <h5>Photography</h5>
					  </div>
				   </div>
				   <div class="row" >
					  <div class="col-lg-2 ">
						 <li class="mb-15">
							<input type="checkbox" class="icheckbox-primary" id="event_staff.read" name="permissions[]"
							   data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
							   />
							<label for="event_staff.read">Read</label>
						 </li>
					  </div>
					  <div class="col-lg-2 ">
						 <li class="mb-15">
							<input type="checkbox" class="icheckbox-primary" id="event_staff.write" name="permissions[]"
							   data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
							   />
							<label for="event_staff.write">Write</label>
						 </li>
					  </div>
					  <div class="col-lg-2 ">
						 <li class="mb-15">
							<input type="checkbox" class="icheckbox-primary" id="event_staff.delete" name="permissions[]"
							   data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
							   />
							<label for="event_staff.delete">Delete</label>
						 </li>
					  </div>
					  <div class="col-lg-2 ">
						 <li class="mb-15">
							<input type="checkbox" class="icheckbox-primary" id="photography.read" name="permissions[]"
							   data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
							   />
							<label for="photography.read">Read</label>
						 </li>
					  </div>
					  <div class="col-lg-2 ">
						 <li class="mb-15">
							<input type="checkbox" class="icheckbox-primary" id="photography.write" name="permissions[]"
							   data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
							   />
							<label for="photography.write">Write</label>
						 </li>
					  </div>
					  <div class="col-lg-2 ">
						 <li class="mb-15">
							<input type="checkbox" class="icheckbox-primary" id="photography.delete" name="permissions[]"
							   data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
							   />
							<label for="photography.delete">Delete</label>
						 </li>
					  </div>
				   </div>
				   <div class="row" >
					  <div class="col-lg-6 ">
						 <h5>Entertainment</h5>
					  </div>
					  <div class="col-lg-6 ">
						 <h5>Decoration</h5>
					  </div>
				   </div>
				   <div class="row" >
					  <div class="col-lg-2 ">
						 <li class="mb-15">
							<input type="checkbox" class="icheckbox-primary" id="entertainment.read" name="permissions[]"
							   data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
							   />
							<label for="entertainment.read">Read</label>
						 </li>
					  </div>
					  <div class="col-lg-2 ">
						 <li class="mb-15">
							<input type="checkbox" class="icheckbox-primary" id="entertainment.write" name="permissions[]"
							   data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
							   />
							<label for="entertainment.write">Write</label>
						 </li>
					  </div>
					  <div class="col-lg-2 ">
						 <li class="mb-15">
							<input type="checkbox" class="icheckbox-primary" id="entertainment.delete" name="permissions[]"
							   data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
							   />
							<label for="entertainment.delete">Delete</label>
						 </li>
					  </div>
					  <div class="col-lg-2 ">
						 <li class="mb-15">
							<input type="checkbox" class="icheckbox-primary" id="event_decoration.read" name="permissions[]"
							   data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
							   />
							<label for="event_decoration.read">Read</label>
						 </li>
					  </div>
					  <div class="col-lg-2 ">
						 <li class="mb-15">
							<input type="checkbox" class="icheckbox-primary" id="event_decoration.write" name="permissions[]"
							   data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
							   />
							<label for="event_decoration.write">Write</label>
						 </li>
					  </div>
					  <div class="col-lg-2 ">
						 <li class="mb-15">
							<input type="checkbox" class="icheckbox-primary" id="event_decoration.delete" name="permissions[]"
							   data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
							   />
							<label for="event_decoration.delete">Delete</label>
						 </li>
					  </div>
				   </div>
				   <div class="row">
					  <div class="col-lg-6 ">
						 <h5>Contract</h5>
					  </div>
					  <div class="col-lg-6 ">
						 <h5>Menu</h5>
					  </div>
				   </div>
				   <div class="row">
					  <div class="col-lg-2 ">
						 <li class="mb-15">
							<input type="checkbox" class="icheckbox-primary" id="contract.read" name="permissions[]"
							   data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
							   />
							<label for="contract.read">Read</label>
						 </li>
					  </div>
					  <div class="col-lg-2 ">
						 <li class="mb-15">
							<input type="checkbox" class="icheckbox-primary" id="contract.write" name="permissions[]"
							   data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
							   />
							<label for="contract.write">Write</label>
						 </li>
					  </div>
					  <div class="col-lg-2 ">
						 <li class="mb-15">
							<input type="checkbox" class="icheckbox-primary" id="contract.delete" name="permissions[]"
							   data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
							   />
							<label for="contract.delete">Delete</label>
						 </li>
					  </div>
					  <div class="col-lg-2 ">
						 <li class="mb-15">
							<input type="checkbox" class="icheckbox-primary" id="menu.read" name="permissions[]"
							   data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
							   />
							<label for="menu.read">Read</label>
						 </li>
					  </div>
					  <div class="col-lg-2 ">
						 <li class="mb-15">
							<input type="checkbox" class="icheckbox-primary" id="menu.write" name="permissions[]"
							   data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
							   />
							<label for="menu.write">Write</label>
						 </li>
					  </div>
					  <div class="col-lg-2 ">
						 <li class="mb-15">
							<input type="checkbox" class="icheckbox-primary" id="menu.delete" name="permissions[]"
							   data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
							   />
							<label for="menu.delete">Delete</label>
						 </li>
					  </div>
				   </div>
				   <div class="row">
					  <div class="col-md-9">
						 <button type="submit" class="btn btn-primary">Submit </button>
						 <button type="reset" class="btn btn-default btn-outline">Cancel</button>
					  </div>
				   </div>
				</form>
			 </div>
		  </div>
		  
	   </div>
	</div>


 </div>
@endsection
	