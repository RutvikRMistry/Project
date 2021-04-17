@extends('backend.master')
@section('title',"Sale Leads")
@section('content')
@push('styles')
<link rel="stylesheet" href="{{asset('assets/examples/css/apps/taskboard.min.css')}}">
@endpush

<style>
#draggable {
    width: 150px;
    height: 150px;
    padding: 0.5em;
}

.kanban_box {
    float: left;
    margin-bottom: 20px;
    padding: 0 15px;
    width: 20%;
}

.karnben_cardbox {
    background-color: #ffffff;
    border-radius: 5px;
    box-shadow: 0 2px 4px rgba(126, 142, 177, 0.12);
    float: left;
    margin-bottom: 30px;
    max-height: 700px;
    min-height: 700px;
    overflow-x: auto;
    padding: 15px 15px 0;
    width: 100%;
}

.kcard_details {
    background-color: #f5f5f5;
    border-radius: 5px;
    cursor: move;
    float: left;
    margin-bottom: 15px;
    padding: 15px;
    position: relative;
    width: 100%;
}

.kcard_details p {
    font-size: 12px;
    margin: 2px 0;
}

.kan_prospect_card {
    border-top: 6px solid #ed6535;
}

.kan_prospect_card .remaining_box p {
    background-color: #ed6535;
    color: #ffffff;
}

.kan_tentative_card {
    border-top: 6px solid #ab1ac1;
}

.kan_tentative_card .remaining_box p {
    background-color: #ab1ac1;
    color: #ffffff;
}

.kan_definite_card {
    border-top: 6px solid #2695ef;
}

.kan_definite_card .remaining_box p {
    background-color: #2695ef;
    color: #ffffff;
}

.kan_close_card {
    border-top: 6px solid #34a853;
}

.kan_close_card .remaining_box p {
    background-color: #34a853;
    color: #ffffff;
}

.kan_lost_card {
    border-top: 6px solid #FF0000;
}

.kan_lost_card .remaining_box p {
    background-color: #FF0000;
    color: #ffffff;
}

.kcard_details span {
    background-color: rgba(0, 0, 0, 0);
    border-radius: 3px;
    display: inline-block;
    margin-bottom: 10px;
    padding: 3px 7px;
}

.kcard_details .anni_status {
    background-color: #ab1ac1;
    color: #ffffff;
}

.kcard_details .conf_status {
    background-color: #1636c5;
    color: #ffffff;
}

.kcard_details .marraaige_status {
    background-color: #ed6434;
    color: #ffffff;
}

.kcard_details .metting_status {
    background-color: #2695ef;
    color: #ffffff;
}

.kcard_details .corpo_status {
    background-color: #8c9d00;
    color: #ffffff;
}

.kcard_details .birthday_status {
    background-color: #c5252e;
    color: #ffffff;
}

.kcard_details .dropdown {
    position: absolute;
    right: 15px;
}

.kcard_details .dropdown a.dropdown-toggle i {
    font-size: 18px;
}

.dropdown-menu>li>a {
    display: block;
    padding: 3px 20px;
    clear: both;
    font-weight: normal;
    line-height: 1.42857;
    /* color: #333333; */
    white-space: nowrap;
}

li.active a,
a:hover,
a {
    text-decoration: none !important;
}

a {
    color: #3e4b5b;
    text-decoration: none;
    background-color: transparent;
}

#asd {
    pointer-events: none;
}
</style>
<!-- Top Menubar Ends Here-->
<div class="page">
    <div class="page-header">
        <h1 class="page-title">Leads</h1>
        <div class="page-header-actions">
            <a href="{{route('backend.admin.banquet.sales.lead.add')}}">
                <button type="button" class="btn btn-primary" id="validateButton2">
                    <i class="icon wb-plus mr-10" aria-hidden="true"></i> Create Leads
                </button></a>
        </div>
    </div>
    <div class="page-content">




        <div class="row">
            <div class="col-md-3">
                <div class="kanben_card_title">
                    <h3>Open</h3>
                </div>
                <div class="karnben_cardbox kan_prospect_card connectedSortable" id="padding-item-drop">
                    <div class="list-group" id="padding-item-drop">
                        @if(!empty($panddingItem) && $panddingItem->count())
                        @foreach($panddingItem as $value)
                        <div class="kanban_dragbox">

                            <div class="kcard_details">

                                <input type="hidden" name="status" value="Open" class="from">
                                <div class="dropdown">
                                    <a href="#" data-toggle="dropdown" class="dropdown-toggle">
                                        <i aria-hidden="true" class="fa fa-ellipsis-v"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="{{route('backend.admin.banquet.sales.lead.edit',$value->id)}}"><i
                                                    class="fa fa-fw fa-pencil"></i> Edit</a></li>
                                        <li><a href="{{route('backend.admin.banquet.sales.lead.view',$value->id)}}"><i
                                                    class="fa fa-fw fa-eye"></i> View</a></li>
                                        <li><a href="{{route('backend.admin.banquet.sales.lead.delete',$value->id)}}"><i
                                                    class="fa fa-fw fa-trash"></i> Delete</a></li>
                                    </ul>
                                </div>
                                <span class="anni_status">{{$value->priority}}</span>
                                <p>Client Name : {{$value->client_name}}</p>
                                <p>Lead Owner : {{$value->per}}</p>
                                <p>Email : {{$value->email}}</p>
                                <p>Mobile : {{$value->mobile}}</p>
                                <p>Start Date : {{$value->start_date}}</p>
                                <li style="list-style-type:none;" item-id="{{ $value->id }}"></li>
                            </div>
                        </div>

                        @endforeach
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="kanben_card_title">
                    <h3>Approached</h3>
                </div>
                <div class="karnben_cardbox kan_tentative_card connectedSortable" id="complete-item-drop">

                    <div class="list-group" id="complete-item-drop">
                        @if(!empty($completeItem) && $completeItem->count())
                        @foreach($completeItem as $value)
                        <div class="kanban_dragbox">

                            <div class="kcard_details">

                                <input type="hidden" name="status" value="Open" class="from">
                                <div class="dropdown">
                                    <a href="#" data-toggle="dropdown" class="dropdown-toggle">
                                        <i aria-hidden="true" class="fa fa-ellipsis-v"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="{{route('backend.admin.banquet.sales.lead.edit',$value->id)}}"><i
                                                    class="fa fa-fw fa-pencil"></i> Edit</a></li>
                                        <li><a href="{{route('backend.admin.banquet.sales.lead.view',$value->id)}}"><i
                                                    class="fa fa-fw fa-eye"></i> View</a></li>
                                        <li><a href="{{route('backend.admin.banquet.sales.lead.delete',$value->id)}}"><i
                                                    class="fa fa-fw fa-trash"></i> Delete</a></li>
                                    </ul>
                                </div>
                                <span class="marraaige_status">{{$value->priority}}</span>
                                <p>Client Name : {{$value->client_name}}</p>
                                <p>Lead Owner : {{$value->per}}</p>
                                <p>Email : {{$value->email}}</p>
                                <p>Mobile : {{$value->mobile}}</p>
                                <p>Start Date : {{$value->start_date}}</p>
                                <li style="list-style-type:none;" item-id="{{ $value->id }}"></li>
                            </div>
                        </div>
                        @endforeach
                        @endif
                    </div>

                </div>
            </div>
            <div class="col-md-3" id="asd">
                <div class="kanben_card_title">
                    <h3>Converted</h3>
                </div>
                <div class="karnben_cardbox kan_definite_card connectedSortable" id="converted-item-drop">

                    <div class="list-group" id="converted-item-drop">
                        @if(!empty($convertedItem) && $convertedItem->count())
                        @foreach($convertedItem as $value)
                        <div class="kanban_dragbox">

                            <div class="kcard_details">

                                <input type="hidden" name="status" value="Open" class="from">
                                <!-- <div class="dropdown">
									<a href="#" data-toggle="dropdown" class="dropdown-toggle">
										<i aria-hidden="true" class="fa fa-ellipsis-v"></i></a> 
										<ul class="dropdown-menu">
											<li><a href="{{route('backend.admin.banquet.sales.lead.view',$value->id)}}"><i class="fa fa-fw fa-eye"></i> View</a></li> 
											<li><a href="{{route('backend.admin.banquet.sales.lead.delete',$value->id)}}"><i class="fa fa-fw fa-trash"></i> Delete</a></li>
										</ul>
								</div>  -->
                                <span class="conf_status">{{$value->priority}}</span>
                                <p>Client Name : {{$value->client_name}}</p>
                                <p>Lead Owner : {{$value->per}}</p>
                                <p>Email : {{$value->email}}</p>
                                <p>Mobile : {{$value->mobile}}</p>
                                <p>Start Date : {{$value->start_date}}</p>
                                <li style="list-style-type:none;" item-id="{{ $value->id }}"></li>
                            </div>
                        </div>
                        @endforeach
                        @endif
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="kanben_card_title">
                    <h3>Do Not Contact</h3>
                </div>
                <div class="karnben_cardbox kan_close_card connectedSortable" id="incomplete-item-drop">

                    <div class="list-group" id="incomplete-item-drop">
                        @if(!empty($incompleteItem) && $incompleteItem->count())
                        @foreach($incompleteItem as $value)
                        <div class="kanban_dragbox">

                            <div class="kcard_details">
                                <span class="birthday_status">{{$value->priority}}</span>
                                <p>Client Name : {{$value->client_name}}</p>
                                <p>Lead Owner : {{$value->per}}</p>
                                <p>Email : {{$value->email}}</p>
                                <p>Mobile : {{$value->mobile}}</p>
                                <p>Start Date : {{$value->start_date}}</p>
                                <li style="list-style-type:none;" item-id="{{ $value->id }}"></li>
                            </div>
                        </div>
                        @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>



        <!-- <ul class="taskboard-stages ui-sortable" id="taskboardStages">
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
	</ul> -->
        <br>
        <br>
        <br>

        @include('backend.partials.flash_message')
        <div style="width: 100%; ">
            <div class="panel-body" style="background-color: #fff; ">
                <header class="panel-heading">
                    <div style="width: 50%; float: left;">
                        <div class="tablesaw-sortable-switch tablesaw-bar-section"><label><span
                                    class="btn tablesaw-btn btn-select tablesaw-btn-select"><span
                                        aria-hidden="true">Sort By ↑</span></span></label></div>
                    </div>
                    <div style="width: 50%; float: right;">
                        <div class="btn-group" aria-label="Button group with nested dropdown" role="group"
                            style="float: right; padding-top: 10px;">
                        </div>
                    </div>
                    <div>
                        <table class="table table-hover dataTable table-striped w-full dtr-inline"
                            data-plugin="dataTable" id="DataTables_Table_0" role="grid"
                            aria-describedby="DataTables_Table_0_info" style="width: 1783px;">
                            <thead>
                                <tr>
                                    <th>Creation Date</th>
                                    <th>Lead Owner</th>
                                    <!-- <th>Customer/Prsonal</th> -->
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
                                    <td>{{$leads->created_at}}</td>
                                    <td>{{$leads->per}}</td>
                                    <!-- <td>Personal</td> -->
                                    <td>{{$leads->client_name}}</td>
                                    <td>{{$leads->email}}</td>
                                    <td>{{$leads->mobile}}</td>
                                    <td>{{$leads->start_date}}</td>
                                    <td>{{$leads->priority}}</td>
                                    <td class="actions">
                                        <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-editing save-row"
                                            data-toggle="tooltip" data-original-title="Save" hidden><i
                                                class="icon wb-wrench" aria-hidden="true"></i></a>
                                        <a href=""
                                            class="btn btn-sm btn-icon btn-pure btn-default on-editing cancel-row"
                                            data-toggle="tooltip" data-original-title="Delete" hidden><i
                                                class="icon wb-close" aria-hidden="true"></i></a>
                                        <a href="{{route('backend.admin.banquet.sales.lead.edit',$leads->id)}}"
                                            class="btn btn-sm btn-icon btn-pure btn-default on-default edit-row"
                                            data-toggle="tooltip" data-original-title="Edit"><i class="icon wb-edit"
                                                aria-hidden="true"></i></a>
                                        <a href="{{route('backend.admin.banquet.sales.lead.delete',$leads->id)}}"
                                            class="btn btn-sm btn-icon btn-pure btn-default on-default remove-row"
                                            data-toggle="tooltip" data-original-title="Remove"><i class="icon wb-trash"
                                                aria-hidden="true"></i></a>
                                        <a href="{{route('backend.admin.banquet.sales.lead.view',$leads->id)}}"
                                            class="btn btn-sm btn-icon btn-pure btn-default on-default remove-row"
                                            data-toggle="tooltip" data-original-title="View"><i class="fa fa-eye"
                                                aria-hidden="true"></i></a>
                                        <a href="{{route('backend.admin.banquet.sales.lead.create_event')}}"
                                            class="btn btn-sm btn-icon btn-pure btn-default on-default remove-row"
                                            data-toggle="tooltip" data-original-title="Convert Lead To Edit"><i
                                                class="fa fa-handshake-o" aria-hidden="true"></i></a>
                                        <a href="{{route('backend.admin.banquet.sales.lead.call')}}"
                                            class="btn btn-sm btn-icon btn-pure btn-default on-default remove-row"
                                            data-toggle="tooltip" data-original-title="Call"><i
                                                class="fa fa-fw fa-phone " aria-hidden="true"></i></a>
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
                                        <div class="dataTables_info" id="DataTables_Table_0_info" role="status"
                                            aria-live="polite" style="margin-top: 25px;">Showing 1 to 10 of 12 entries
                                        </div>
                                    </div>
                                    <div style="width: 50%; background-color: #fff;    float: right;">
                                        <div class="dataTables_paginate paging_simple_numbers"
                                            id="DataTables_Table_0_paginate">
                                            <ul class="pagination" style="float: right; margin-top: 10px;">
                                                <li class="paginate_button page-item previous disabled"
                                                    id="DataTables_Table_0_previous"><a href="#"
                                                        aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0"
                                                        class="page-link">Previous</a></li>
                                                <li class="paginate_button page-item active"><a href="#"
                                                        aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0"
                                                        class="page-link">1</a></li>
                                                <li class="paginate_button page-item "><a href="#"
                                                        aria-controls="DataTables_Table_0" data-dt-idx="2" tabindex="0"
                                                        class="page-link">2</a></li>
                                                <li class="paginate_button page-item next" id="DataTables_Table_0_next">
                                                    <a href="#" aria-controls="DataTables_Table_0" data-dt-idx="3"
                                                        tabindex="0" class="page-link">Next</a></li>
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
            </header>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
</script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script> -->
<!-- <script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script> -->
<script>
$(function() {
    $("#padding-item-drop, #complete-item-drop, #incomplete-item-drop,#converted-item-drop").sortable({
        connectWith: ".connectedSortable",
        opacity: 0.5,
    }).disableSelection();

    $(".connectedSortable").on("sortupdate", function(event, div) {
        var panddingArr = [100];
        var completeArr = [100];
        var incompleteArr = [100];
        var convertedArr = [100];

        $("#padding-item-drop li").each(function(index) {
            panddingArr[index] = $(this).attr('item-id');
			location.reload(true);
        });

        $("#complete-item-drop li").each(function(index) {
            completeArr[index] = $(this).attr('item-id');
			location.reload(true);
        });

        $("#incomplete-item-drop li").each(function(index) {
            incompleteArr[index] = $(this).attr('item-id');
			location.reload(true);
        });

        $("#converted-item-drop li").each(function(index) {
            convertedArr[index] = $(this).attr('item-id');
			location.reload(true);
        });

        $.ajax({
            url: "{{ route('update.items') }}",
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: {
                panddingArr: panddingArr,
                completeArr: completeArr,
                incompleteArr: incompleteArr,
                convertedArr: convertedArr
            },
            success: function(data) {
                console.log('success');
            }
        });

    });
});

onFocus = function(e) {
    document.getElementById("converted-item-drop").setAttribute("draggable", "false");
}
onBlur = function(e) {
    document.getElementById("converted-item-drop").setAttribute("draggable", "true");
}
</script>
<script type="text/javascript" src="js/bootstrap/bootstrap-dropdown.js"></script>
<script>
$(document).ready(function() {
    $('.dropdown-toggle').dropdown()
});
</script>
@endsection

<!-- <script src="https://saas.banquetcrm.com/js/libs.4fc67c7b0f3759023aa88463557e8fc4.js" type="text/javascript"></script>
<script src="https://saas.banquetcrm.com/js/metisMenu.min.js" type="text/javascript"></script>
<script src="https://saas.banquetcrm.com/js/lcrm_app.js" type="text/javascript"></script> -->