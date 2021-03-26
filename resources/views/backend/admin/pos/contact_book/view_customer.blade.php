@extends('backend.master')
@section('title',"View Customer")
@section('content')
@push('styles')
  <link rel="stylesheet" href="{{asset('assets/examples/css/apps/taskboard.min.css')}}">
@endpush
 <!-- Top Menubar Ends Here-->
 <div class="page">
  <div class="page-content">
   <ul class="taskboard-stages ui-sortable" id="taskboardStages">
      <li class="taskboard-stage">
         <header class="taskboard-stage-header ui-sortable-handle">
            <div class="taskboard-stage-actions float-right">
               <div class="dropdown">
                  <a data-toggle="dropdown" href="#" aria-expanded="false"><i class="icon wb-chevron-down" aria-hidden="true"></i></a>
                  <div class="dropdown-menu bullet" role="menu">
                     <a class="taskboard-stage-rename dropdown-item" href="../../banquet/sales/lead_detail.html" role="menuitem"><i class="fa fa-eye" aria-hidden="true"></i>View</a>
                     <a class="taskboard-stage-rename dropdown-item" href="../../banquet/sales/edit_lead.html" role="menuitem"><i class="icon wb-pencil" aria-hidden="true"></i>Edit</a>
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
            <div class="col-lg-3 form-group">
               <div class="well well-sm">
                  <strong>test</strong><br><br>
                  <strong><i class="fa fa-map-marker margin-r-5"></i> Address</strong>
                  <p class="text-muted">@if($contact->landmark)
                                {{ $contact->landmark }}
                            @endif

                            {{ ', ' . $contact->city }}

                            @if($contact->state)
                                {{ ', ' . $contact->state }}
                            @endif
                            <br>
                            @if($contact->country)
                                {{ $contact->country }}
                            @endif</p>
                  <strong><i class="fa fa-briefcase margin-r-5"></i> 
                  Business Name</strong>
                  <p class="text-muted">
				  {{$contact->supplier_business_name}}
                  </p>
               </div>
            </div>
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
                     <a class="taskboard-stage-rename dropdown-item" href="../../banquet/sales/lead_detail.html" role="menuitem"><i class="fa fa-eye" aria-hidden="true"></i>View</a>
                     <a class="taskboard-stage-rename dropdown-item" href="../../banquet/sales/edit_lead.html" role="menuitem"><i class="icon wb-pencil" aria-hidden="true"></i>Edit</a>
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
            <div class="col-lg-3 form-group">
               <div class="well well-sm">
                  <strong><i class="fa fa-mobile margin-r-5"></i> Mobile</strong>
                  <p class="text-muted">
				  {{$contact->mobile}}
                  </p>
                  <strong><i class="fa fa-phone margin-r-5"></i> Landline</strong>
                  <p class="text-muted">
                    {{$contact->landline}}
                  </p>
                  <strong><i class="fa fa-phone margin-r-5"></i> Alternate contact number</strong>
                  <p class="text-muted">
                   {{$contact->alternate_number}}
                  </p>
               </div>
            </div>
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
                     <a class="taskboard-stage-rename dropdown-item" href="../../banquet/sales/lead_detail.html" role="menuitem"><i class="fa fa-eye" aria-hidden="true"></i>View</a>
                     <a class="taskboard-stage-rename dropdown-item" href="../../banquet/sales/edit_lead.html" role="menuitem"><i class="icon wb-pencil" aria-hidden="true"></i>Edit</a>
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
            <div class="col-lg-3 form-group">
               <div class="well well-sm">
                  <strong><i class="fa fa-info margin-r-5"></i> Tax number</strong>
                  <p class="text-muted">
                     {{$contact->tax_number}}
                  </p>
                  <strong><i class="fa fa-calendar margin-r-5"></i> Pay term period</strong>
                  <p class="text-muted">{{ ucfirst($contact->pay_term_type) }}</p>
                  <strong><i class="fa fa-handshake-o margin-r-5"></i> Pay term</strong>
                  <p class="text-muted">
                     {{ $contact->pay_term_number }}
                  </p>
               </div>
            </div>
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
   <div class="panel-body" style="background-color: #fff; ">
      <button type="button" class="btn btn-primary dropdown-toggle" id="exampleBulletDropdown1"
         data-toggle="dropdown" aria-expanded="false"><i class="fa fa-calendar"></i>
      Filter By Date
      </button>
      <div class="dropdown-menu dropdown-menu-bullet" aria-labelledby="exampleBulletDropdown1"
         role="menu">
         <a class="dropdown-item" href="javascript:void(0)" role="menuitem">Today</a>
         <a class="dropdown-item" href="javascript:void(0)" role="menuitem">Yesterday</a>
         <a class="dropdown-item" href="javascript:void(0)" role="menuitem">Last 7 Days</a>
         <a class="dropdown-item" href="javascript:void(0)" role="menuitem">Last 30 Days</a>
         <a class="dropdown-item" href="javascript:void(0)" role="menuitem">This Month</a>  
         <a class="dropdown-item" href="javascript:void(0)" role="menuitem">Last Month</a>
         <a class="dropdown-item" href="javascript:void(0)" role="menuitem">Current Financial Year</a>
         <a class="dropdown-item" href="javascript:void(0)" role="menuitem">Custom Range</a>
      </div>
      <header class="panel-heading">
         <div style="width: 50%; float: left;">
            <div class="tablesaw-sortable-switch tablesaw-bar-section">
               <label>
                  <span class="btn tablesaw-btn btn-select tablesaw-btn-select"><span aria-hidden="true">Sort By ↑</span>
            </div>
         </div>
         <div style="width: 30%; float: right;">
         <div class="btn-group" aria-label="Button group with nested dropdown" role="group" style="float: right;">
         <div class="tablesaw-sortable-switch tablesaw-bar-section"style="padding-top: 8px">
         <label><input type="search" class="form-control form-control-sm" placeholder="Search.." aria-controls="DataTables_Table_0"></label>
         </div>
         <a class="nav-link navbar-avatar" data-toggle="dropdown" href="#" aria-expanded="false"  role="button">
         <button type="button" class="btn btn-primary"><i class="fa fa-list" aria-hidden="true"></i> &nbsp;Action </button>
         <i></i>
         </a>
         <div class="dropdown-menu" role="menu">
         <a class="dropdown-item" href="javascript:void(0)" role="menuitem"><i class="fa fa-files-o" aria-hidden="true"></i> Copy</a>
         <a class="dropdown-item" href="javascript:void(0)" role="menuitem"><i class="fa fa-file-text-o" aria-hidden="true"></i> Export to CSV</a>
         <a class="dropdown-item" href="javascript:void(0)" role="menuitem"><i class="fa fa-file-excel-o" aria-hidden="true"></i> Export to Excel</a>
         <a class="dropdown-item" href="javascript:void(0)" role="menuitem"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> Export to PDF</a>
         <a class="dropdown-item" href="javascript:void(0)" role="menuitem"><i class="fa fa-print" aria-hidden="true"></i> Print</a>
         <a class="dropdown-item" href="javascript:void(0)" role="menuitem"><i class="fa fa-columns" aria-hidden="true"></i> Column Visibility</a>
         </div>
         </div>
         </div>
         <div>
            <table class="table table-hover dataTable table-striped w-full dtr-inline" data-plugin="dataTable" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info" style="width: 1783px;">
               <thead>
                  <tr>
                     <th>Date</th>
                     <th>Reference No.</th>
                     <th> Supplier</th>
                     <th>Purchase Status</th>
                     <th>Payment Status</th>
                     <th>Grand Total </th>
                     <th>Payment Due</th>
                     <th>Action</th>
                  </tr>
               </thead>
               <tbody>
                  <tr>
                     <td>04-26-2020   </td>
                     <td> 0018</td>
                     <td>test</td>
                     <td>Received</td>
                     <td>Paid</td>
                     <td>100.00 $  </td>
                     <td>0</td>
                     <td class="actions">
                        <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-editing save-row"
                           data-toggle="tooltip" data-original-title="Save" hidden><i class="icon wb-wrench" aria-hidden="true"></i></a>
                        <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-editing cancel-row"
                           data-toggle="tooltip" data-original-title="Delete" hidden><i class="icon wb-close" aria-hidden="true"></i></a>
                        <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default edit-row"
                           data-toggle="tooltip" data-original-title="Edit"><i class="icon wb-edit" aria-hidden="true"></i></a>
                        <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default remove-row"
                           data-toggle="tooltip" data-original-title="Delete"><i class="icon wb-trash" aria-hidden="true"></i></a>
                        <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default edit-row"
                           data-toggle="tooltip" data-original-title="View"><i class="fa fa-eye" aria-hidden="true"></i></a>
                        <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default edit-row"
                           data-toggle="tooltip" data-original-title=" Print"><i class="fa fa-print" aria-hidden="true"></i></a>
                     </td>
                  </tr>
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
  
  </div>
@push('script')
   <script src="{{asset('assets/js/App/taskboard.min.js')}}"></script>
   <script src="{{asset('assets/examples/js/apps/taskboard.min.js')}}"></script>
@endpush
@endsection
	