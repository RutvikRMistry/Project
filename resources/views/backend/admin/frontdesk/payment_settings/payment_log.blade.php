@extends('backend.master')
@section('title',"Payment Log")
@section('content')
 <!-- Top Menubar Ends Here-->
 <div class="page">
    @include('backend.partials.leftbar.shortcuts')
	<div class="page-main">
	   <div class="page-header">
		  <h1 class="page-title">Payment Log</h1>
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
                  <div class="tablesaw-sortable-switch tablesaw-bar-section">
                     <label><input type="search" class="form-control form-control-sm" placeholder="Search.." aria-controls="DataTables_Table_0"></label>
                  </div>
               </div>
            </div>
            <div>
               <table class="table table-hover dataTable table-striped w-full dtr-inline" data-plugin="dataTable" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info" style="width: 1783px;">
               <table class="table table-hover dataTable table-striped w-full" data-plugin="dataTable">
                  <thead>
                     <tr>
                        <th>Date</th>
                        <th>User</th>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Tax</th>
                        <th>Amount</th>
                     </tr>
                  </thead>
                  <tbody>
                     <tr>
                        <td>2020-03-05 06:03:09 </td>
                        <td>deepak</td>
                        <td>Bank</td>
                        <td>offline</td>
                        <td>1583388189-3108</td>
                        <td>$ 1,000</td>
                     </tr>
                     <tr>
                        <td>2020-03-05 06:03:09 </td>
                        <td>admin</td>
                        <td>Bank</td>
                        <td>offline</td>
                        <td>1582307121-8353 </td>
                        <td>$ 100</td>
                     </tr>
                     <tr>
                        <td>2020-03-05 06:03:09 </td>
                        <td>deepak</td>
                        <td>Bank</td>
                        <td>offline</td>
                        <td>1581489141-7546 </td>
                        <td>$ 10</td>
                     </tr>
                     <tr>
                        <td>2020-03-05 06:03:09 </td>
                        <td>purvi</td>
                        <td>Bank</td>
                        <td>offline</td>
                        <td>1583388189-2578</td>
                        <td>$ 1,000</td>
                     </tr>
                     <tr>
                        <td>2020-03-05 06:03:09 </td>
                        <td>deepak</td>
                        <td>Bank</td>
                        <td>offline</td>
                        <td>1583388189-3108</td>
                        <td>$ 1,000</td>
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
 </div>
@endsection
