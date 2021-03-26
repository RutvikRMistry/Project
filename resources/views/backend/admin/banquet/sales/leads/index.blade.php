@extends('backend.master')
@section('title',"Sale Leads")
@section('content')
@push('styles')
  <link rel="stylesheet" href="{{asset('assets/examples/css/apps/taskboard.min.css')}}">
@endpush
<!-- Top Menubar Ends Here-->
 <div class="page">
	<div class="page-header">
	   <h1 class="page-title">Leads</h1>
	   <div class="page-header-actions">
		  <a href="{{route('backend.admin.banquet.sales.lead.add')}}">
		  <button type="button" class="btn btn-primary" id="validateButton2">
		  <i class="icon wb-plus mr-10" aria-hidden="true"></i>  Create Leads
		  </button></a>
	   </div>
	</div>
	<div class="page-content">
	<ul class="taskboard-stages ui-sortable" id="taskboardStages">
	   <li class="taskboard-stage">
		  <header class="taskboard-stage-header ui-sortable-handle">
			 <div class="taskboard-stage-actions float-right">
				<div class="dropdown">
				   <a data-toggle="dropdown" href="#" aria-expanded="false"><i class="icon wb-chevron-down" aria-hidden="true"></i></a>
				   <div class="dropdown-menu bullet" role="menu">
					  <a class="taskboard-stage-rename dropdown-item" href="{{route('backend.admin.banquet.sales.lead.view')}}" role="menuitem"><i class="fa fa-eye" aria-hidden="true"></i>View</a>
					  <a class="taskboard-stage-rename dropdown-item" href="{{route('backend.admin.banquet.sales.lead.edit')}}" role="menuitem"><i class="icon wb-pencil" aria-hidden="true"></i>Edit</a>
					  <a class="taskboard-stage-delete dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-trash" aria-hidden="true"></i>Delete</a>
					  <div class="taskboard-stage-rename-wrap">
						 <div class="form-group">
							<input class="form-control taskboard-stage-rename-input" type="text" value="TO DO" name="name">
						 </div>
						 <button class="btn btn-primary btn-block taskboard-stage-rename-save" type="button">Save</button>
					  </div>
				   </div>
				</div>
			 </div>
			 <h5 class="taskboard-stage-title">TO DO</h5>
		  </header>
		  <div class="taskboard-stage-content">
			 <ul class="list-group taskboard-list ui-sortable">
				<li class="list-group-item priority-urgent" data-taskboard="slidePanel" data-url="panel.tpl">
				   <div class="checkbox-custom checkbox-primary">
					  <input type="checkbox" name="checkbox">
					  <label class="task-title">Perspecta historiae studiis</label>
				   </div>
				   <div class="w-full">
					  <div class="task-badges"><span class="task-badge task-badge-subtask icon wb-list-bulleted">1/2</span><span class="task-badge task-badge-attachments icon wb-paperclip">2</span><span class="task-badge task-badge-comments icon wb-chat">2</span></div>
					  <ul class="task-members">
						 <li><img class="avatar avatar-sm" src="../../../assets/portraits/5.jpg"></li>
					  </ul>
				   </div>
				</li>
				<li class="list-group-item priority-high" data-taskboard="slidePanel" data-url="panel.tpl">
				   <div class="checkbox-custom checkbox-primary">
					  <input type="checkbox" name="checkbox">
					  <label class="task-title">neque profecta fictae</label>
				   </div>
				   <div class="w-full">
					  <div class="task-badges"><span class="task-badge task-badge-subtask icon wb-list-bulleted">0/2</span><span class="task-badge task-badge-comments icon wb-chat">1</span></div>
					  <ul class="task-members">
						 <li><img class="avatar avatar-sm" src="../assets/portraits/5.jpg"></li>
						 <li><img class="avatar avatar-sm" src="../../../assets/portraits/3.jpg"></li>
					  </ul>
				   </div>
				</li>
			 </ul>
			 <div class="action-wrap">
				<a class="add-item-toggle" href="#"><i class="icon wb-plus" aria-hidden="true"></i>Add Task</a>
				<div class="add-item-wrap">
				   <form class="add-item" role="form" method="post" action="#">
					  <div class="form-group">
						 <label class="form-control-label mb-15" for="name">Task name:</label>
						 <input class="form-control" type="text" placeholder="Task name" name="name">
					  </div>
					  <div class="form-group text-right">
						 <a class="btn btn-sm btn-white add-item-cancel">Cancel</a>
						 <button type="button" class="btn btn-primary add-item-add">Add</button>
					  </div>
				   </form>
				</div>
			 </div>
		  </div>
	   </li>
	   <li class="taskboard-stage">
		  <header class="taskboard-stage-header ui-sortable-handle">
			 <div class="taskboard-stage-actions float-right">
				<div class="dropdown">
				   <a data-toggle="dropdown" href="#" aria-expanded="false"><i class="icon wb-chevron-down" aria-hidden="true"></i></a>
				   <div class="dropdown-menu bullet" role="menu">
					  <a class="taskboard-stage-rename dropdown-item" href="{{route('backend.admin.banquet.sales.lead.view')}}" role="menuitem"><i class="fa fa-eye" aria-hidden="true"></i>View</a>
					  <a class="taskboard-stage-rename dropdown-item" href="{{route('backend.admin.banquet.sales.lead.edit')}}" role="menuitem"><i class="icon wb-pencil" aria-hidden="true"></i>Edit</a>
					  <a class="taskboard-stage-delete dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-trash" aria-hidden="true"></i>Delete</a>
					  <div class="taskboard-stage-rename-wrap">
						 <div class="form-group">
							<input class="form-control taskboard-stage-rename-input" type="text" value="DOING" name="name">
						 </div>
						 <button class="btn btn-primary btn-block taskboard-stage-rename-save" type="button">Save</button>
					  </div>
				   </div>
				</div>
			 </div>
			 <h5 class="taskboard-stage-title">DOING</h5>
		  </header>
		  <div class="taskboard-stage-content">
			 <ul class="list-group taskboard-list ui-sortable">
				<li class="list-group-item priority-normal" data-taskboard="slidePanel" data-url="panel.tpl">
				   <div class="checkbox-custom checkbox-primary">
					  <input type="checkbox" name="checkbox">
					  <label class="task-title">Explicatis sic</label>
				   </div>
				   <div class="w-full">
					  <div class="task-badges"><span class="task-badge task-badge-subtask icon wb-calendar">10/29</span><span class="task-badge task-badge-comments icon wb-chat">1</span></div>
					  <ul class="task-members">
						 <li><img class="avatar avatar-sm" src="../../../assets/portraits/5.jpg"></li>
						 <li><img class="avatar avatar-sm" src="../../../assets/portraits/4.jpg"></li>
					  </ul>
				   </div>
				</li>
				<li class="list-group-item priority-high" data-taskboard="slidePanel" data-url="panel.tpl">
				   <div class="checkbox-custom checkbox-primary">
					  <input type="checkbox" name="checkbox">
					  <label class="task-title">Suas habent abducat</label>
				   </div>
				   <div class="w-full">
					  <div class="task-badges"><span class="task-badge task-badge-attachments icon wb-paperclip">3</span></div>
					  <ul class="task-members">
						 <li><img class="avatar avatar-sm" src="../../../assets/portraits/5.jpg"></li>
						 <li><img class="avatar avatar-sm" src="../../../assets/portraits/1.jpg"></li>
						 <li><img class="avatar avatar-sm" src="../../../assets/portraits/2.jpg"></li>
					  </ul>
				   </div>
				</li>
			 </ul>
			 <div class="action-wrap">
				<a class="add-item-toggle" href="#"><i class="icon wb-plus" aria-hidden="true"></i>Add Task</a>
				<div class="add-item-wrap">
				   <form class="add-item" role="form" method="post" action="#">
					  <div class="form-group">
						 <label class="form-control-label mb-15" for="name">Task name:</label>
						 <input class="form-control" type="text" placeholder="Task name" name="name">
					  </div>
					  <div class="form-group text-right">
						 <a class="btn btn-sm btn-white add-item-cancel">Cancel</a>
						 <button type="button" class="btn btn-primary add-item-add">Add</button>
					  </div>
				   </form>
				</div>
			 </div>
		  </div>
	   </li>
	   <li class="taskboard-stage">
		  <header class="taskboard-stage-header ui-sortable-handle">
			 <div class="taskboard-stage-actions float-right">
				<div class="dropdown">
				   <a data-toggle="dropdown" href="#" aria-expanded="false"><i class="icon wb-chevron-down" aria-hidden="true"></i></a>
				   <div class="dropdown-menu bullet" role="menu">
					  <a class="taskboard-stage-rename dropdown-item" href="{{route('backend.admin.banquet.sales.lead.view')}}" role="menuitem"><i class="fa fa-eye" aria-hidden="true"></i>View</a>
					  <a class="taskboard-stage-rename dropdown-item" href="{{route('backend.admin.banquet.sales.lead.edit')}}" role="menuitem"><i class="icon wb-pencil" aria-hidden="true"></i>Edit</a>
					  <a class="taskboard-stage-delete dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-trash" aria-hidden="true"></i>Delete</a>
					  <div class="taskboard-stage-rename-wrap">
						 <div class="form-group">
							<input class="form-control taskboard-stage-rename-input" type="text" value="DONE" name="name">
						 </div>
						 <button class="btn btn-primary btn-block taskboard-stage-rename-save" type="button">Save</button>
					  </div>
				   </div>
				</div>
			 </div>
			 <h5 class="taskboard-stage-title">DONE</h5>
		  </header>
		  <div class="taskboard-stage-content">
			 <ul class="list-group taskboard-list ui-sortable">
				<li class="list-group-item priority-normal" data-taskboard="slidePanel" data-url="panel.tpl">
				   <div class="checkbox-custom checkbox-primary">
					  <input type="checkbox" checked="checked" name="checkbox">
					  <label class="task-title">Numquid molestum deditum</label>
				   </div>
				   <div class="w-full">
					  <div class="task-badges"></div>
					  <ul class="task-members">
						 <li><img class="avatar avatar-sm" src="../../../assets/portraits/6.jpg"></li>
					  </ul>
				   </div>
				</li>
				<li class="list-group-item priority-normal" data-taskboard="slidePanel" data-url="panel.tpl">
				   <div class="checkbox-custom checkbox-primary">
					  <input type="checkbox" checked="checked" name="checkbox">
					  <label class="task-title">Vix doceat una</label>
				   </div>
				   <div class="w-full">
					  <div class="task-badges"><span class="task-badge task-badge-subtask icon wb-list-bulleted">2/2</span><span class="task-badge task-badge-comments icon wb-chat">1</span></div>
					  <ul class="task-members">
						 <li><img class="avatar avatar-sm" src="../../../assets/portraits/6.jpg"></li>
						 <li><img class="avatar avatar-sm" src="../../../assets/portraits/6.jpg"></li>
					  </ul>
				   </div>
				</li>
			 </ul>
			 <div class="action-wrap">
				<a class="add-item-toggle" href="#"><i class="icon wb-plus" aria-hidden="true"></i>Add Task</a>
				<div class="add-item-wrap">
				   <form class="add-item" role="form" method="post" action="#">
					  <div class="form-group">
						 <label class="form-control-label mb-15" for="name">Task name:</label>
						 <input class="form-control" type="text" placeholder="Task name" name="name">
					  </div>
					  <div class="form-group text-right">
						 <a class="btn btn-sm btn-white add-item-cancel">Cancel</a>
						 <button type="button" class="btn btn-primary add-item-add">Add</button>
					  </div>
				   </form>
				</div>
			 </div>
		  </div>
	   </li>
	</ul>
	<br>
	<br>
	<br>

	@include('backend.partials.flash_message')
	<div style="width: 100%; ">
	   <div class="panel-body" style="background-color: #fff; ">
		  <header class="panel-heading">
			 <div style="width: 50%; float: left;">
				<div class="tablesaw-sortable-switch tablesaw-bar-section"><label><span class="btn tablesaw-btn btn-select tablesaw-btn-select"><span aria-hidden="true">Sort By ↑</span></span></label></div>
			 </div>
			 <div style="width: 50%; float: right;">
				<div class="btn-group" aria-label="Button group with nested dropdown" role="group" style="float: right; padding-top: 10px;">
				</div>
			 </div>
			 <div>
				<table class="table table-hover dataTable table-striped w-full dtr-inline" data-plugin="dataTable" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info" style="width: 1783px;">
				   <thead>
					  <tr>
						 <th>Creation Date</th>
						 <th>Lead Owner</th>
						 <th>Customer/Prsonal</th>
						 <th>Client Name</th>
						 <th>Email</th>
						 <th>Mobile no</th>
						 <th>Event Start Date</th>
						 <th>Priorty</th>
						 <th>Options</th>
					  </tr>
				   </thead>
				   <tbody>
				   	@foreach($leads as $leads)
					  <tr class="gradeA">
						 <td>09/10/2010</td>
						 <td>David Feiming</td>
						 <td>Personal</td>
						 <td>{{$leads->client_name}}</td>
						 <td>{{$leads->email}}</td>
						 <td>{{$leads->mobile}}</td>
						 <td>{{$leads->start_date}}</td>
						 <td>Open</td>
						 <td class="actions">
							<a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-editing save-row"
							   data-toggle="tooltip" data-original-title="Save" hidden><i class="icon wb-wrench" aria-hidden="true"></i></a>
							<a href="" class="btn btn-sm btn-icon btn-pure btn-default on-editing cancel-row"
							   data-toggle="tooltip" data-original-title="Delete" hidden><i class="icon wb-close" aria-hidden="true"></i></a>
							<a  href="{{route('backend.admin.banquet.sales.lead.delete',$leads->id)}}" class="btn btn-sm btn-icon btn-pure btn-default on-default edit-row"
							   data-toggle="tooltip" data-original-title="Edit"><i class="icon wb-edit" aria-hidden="true"></i></a>
							<a href="{{route('backend.admin.banquet.sales.lead.delete',$leads->id)}}" class="btn btn-sm btn-icon btn-pure btn-default on-default remove-row"
							   data-toggle="tooltip" data-original-title="Remove"><i class="icon wb-trash" aria-hidden="true"></i></a>
							<a href="{{route('backend.admin.banquet.sales.lead.view',$leads->id)}}" class="btn btn-sm btn-icon btn-pure btn-default on-default remove-row"
							   data-toggle="tooltip" data-original-title="View"><i class="fa fa-eye" aria-hidden="true"></i></a>
							<a href="{{route('backend.admin.banquet.sales.lead.create_event')}}" class="btn btn-sm btn-icon btn-pure btn-default on-default remove-row"
							   data-toggle="tooltip" data-original-title="Convert Lead To Edit"><i class="fa fa-handshake-o" aria-hidden="true"></i></a>
							<a href="{{route('backend.admin.banquet.sales.lead.call')}}" class="btn btn-sm btn-icon btn-pure btn-default on-default remove-row"
							   data-toggle="tooltip" data-original-title="Call"><i class="fa fa-fw fa-phone " aria-hidden="true"></i></a>
						 </td>
					  </tr>
					@endforeach
					  <!-- <tr class="gradeA">
						 <td>09/14/2010</td>
						 <td>David Feiming</td>
						 <td>Personal</td>
						 <td>eme</td>
						 <td>emetest.com</td>
						 <td>123654</td>
						 <td>2019-09-10</td>
						 <td>Open</td>
						 <td class="actions">
							<a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-editing save-row"
							   data-toggle="tooltip" data-original-title="Save" hidden><i class="icon wb-wrench" aria-hidden="true"></i></a>
							<a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-editing cancel-row"
							   data-toggle="tooltip" data-original-title="Delete" hidden><i class="icon wb-close" aria-hidden="true"></i></a>
							<a  href="{{route('backend.admin.banquet.sales.lead.edit')}}" class="btn btn-sm btn-icon btn-pure btn-default on-default edit-row"
							   data-toggle="tooltip" data-original-title="Edit"><i class="icon wb-edit" aria-hidden="true"></i></a>
							<a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default remove-row"
							   data-toggle="tooltip" data-original-title="Remove"><i class="icon wb-trash" aria-hidden="true"></i></a>
							<a href="{{route('backend.admin.banquet.sales.lead.view')}}" class="btn btn-sm btn-icon btn-pure btn-default on-default remove-row"
							   data-toggle="tooltip" data-original-title="View"><i class="fa fa-eye" aria-hidden="true"></i></a>
							<a href="{{route('backend.admin.banquet.sales.lead.create_event')}}" class="btn btn-sm btn-icon btn-pure btn-default on-default remove-row"
							   data-toggle="tooltip" data-original-title="Convert Lead To Edit"><i class="fa fa-handshake-o" aria-hidden="true"></i></a>
							<a href="{{route('backend.admin.banquet.sales.lead.call')}}" class="btn btn-sm btn-icon btn-pure btn-default on-default remove-row"
							   data-toggle="tooltip" data-original-title="Call"><i class="fa fa-fw fa-phone " aria-hidden="true"></i></a>
						 </td>
					  </tr>
					  <tr class="gradeA">
						 <td>09/10/2010</td>
						 <td>David Feiming</td>
						 <td>Personal</td>
						 <td>jesalestine</td>
						 <td>Ojestet@gmail.com</td>
						 <td>123654</td>
						 <td>2019-09-10</td>
						 <td>Open</td>
						 <td class="actions">
							<a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-editing save-row"
							   data-toggle="tooltip" data-original-title="Save" hidden><i class="icon wb-wrench" aria-hidden="true"></i></a>
							<a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-editing cancel-row"
							   data-toggle="tooltip" data-original-title="Delete" hidden><i class="icon wb-close" aria-hidden="true"></i></a>
							<a  href="{{route('backend.admin.banquet.sales.lead.edit')}}" class="btn btn-sm btn-icon btn-pure btn-default on-default edit-row"
							   data-toggle="tooltip" data-original-title="Edit"><i class="icon wb-edit" aria-hidden="true"></i></a>
							<a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default remove-row"
							   data-toggle="tooltip" data-original-title="Remove"><i class="icon wb-trash" aria-hidden="true"></i></a>
							<a href="{{route('backend.admin.banquet.sales.lead.view')}}" class="btn btn-sm btn-icon btn-pure btn-default on-default remove-row"
							   data-toggle="tooltip" data-original-title="View"><i class="fa fa-eye" aria-hidden="true"></i></a>
							<a href="{{route('backend.admin.banquet.sales.lead.create_event')}}" class="btn btn-sm btn-icon btn-pure btn-default on-default remove-row"
							   data-toggle="tooltip" data-original-title="Convert Lead To Edit"><i class="fa fa-handshake-o" aria-hidden="true"></i></a>
							<a href="{{route('backend.admin.banquet.sales.lead.call')}}" class="btn btn-sm btn-icon btn-pure btn-default on-default remove-row"
							   data-toggle="tooltip" data-original-title="Call"><i class="fa fa-fw fa-phone " aria-hidden="true"></i></a>
						 </td>
					  </tr> -->
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
		  </header>
	   </div>
	</div>
 </div>
@endsection
	