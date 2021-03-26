@extends('backend.master')
@section('title',"Expenses")
@section('content')
 <!-- Top Menubar Ends Here-->
 <div class="page">
  @include('backend.partials.leftbar.shortcuts')
  <div class="page-main">
   <div class="page-header">
      <h1 class="page-title">All expenses </h1>
      <div class="page-header-actions">
         <a href="{{route('backend.admin.pos.expenses.add')}}">
         <button type="button" class="btn btn-primary" style="margin: auto;"><i class="icon wb-plus mr-10" aria-hidden="true"></i>Add </button></a>
      </div>
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
            <div style="width: 30%; float: right;">
               <div class="btn-group" aria-label="Button group with nested dropdown" role="group" style="float: right; padding-top: 20px;">
                  <div class="tablesaw-sortable-switch tablesaw-bar-section">
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
                        <th>Expense Category</th>
                        <th>Location</th>
                        <th>Payment Status</th>
                        <th>Total Amount</th>
                        <th>Expense For</th>
                        <th>Expense Note</th>
                        <th>Action</th>
                     </tr>
                  </thead>
                  <tbody>
					@foreach($expenses as $exp)
                     <tr>
                        <td>{{$exp->transaction_date}}</td>
                        <td>{{$exp->ref_no}}</td>
                        <td>{{$exp->category}}</td>
                        <td>{{$exp->location_name}}</td>
                        <td>
                           <span >{{$expense = $exp->payment_status == 'paid'?'paid': ''}}</span>
						   <!--<div class="badge {{$exp->payment_status ? 'badge-success' : 'badge-danger'}} "></div>-->
                        </td>
                        <td> {{$exp->final_total}}&nbsp;$</td>
                        <td>{{$exp->expense_for}}</td>
                        <td>{{$exp->additional_notes}}</td>
                        <td class="actions">
                           <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-editing save-row"
                              data-toggle="tooltip" data-original-title="Save" hidden><i class="icon wb-wrench" aria-hidden="true"></i></a>
                           <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-editing cancel-row"
                              data-toggle="tooltip" data-original-title="Delete" hidden><i class="icon wb-close" aria-hidden="true"></i></a>
                           <a href="{{route('backend.admin.pos.expenses.edit',$exp->id)}}" class="btn btn-sm btn-icon btn-pure btn-default on-default edit-row"
                              data-toggle="tooltip" data-original-title="Edit"><i class="icon wb-edit" aria-hidden="true"></i></a>
                           <a href="javascript:void(0);" class="btn btn-sm btn-icon btn-pure btn-default on-default remove-row"
								data-toggle="tooltip" data-original-title="Remove" onclick="deleteBlog({{$exp->id}},'{{route('backend.admin.pos.expenses.delete',$exp->id)}}');"><i class="icon wb-trash" aria-hidden="true"></i></a>
                        </td>
                     </tr>
					 @php
						$cnt = $expense ++;
						@endphp
					@endforeach
                     <tr>
                        <td colspan="4" class="bg-secondary text-white">
                           <center>Total</center>
                        </td>
							
                        <td class="bg-secondary text-white" >Paid:&nbsp;{{$cnt}}</td>
                        <td class="bg-secondary text-white">{{$final_total}}&nbsp;$</td>
                        <td class="bg-secondary text-white"></td>
                        <td class="bg-secondary text-white"></td>
                        <td class="bg-secondary text-white"> </td>
                        <td>  </td>
                        <td> </td>
                        <td class="actions">
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
	