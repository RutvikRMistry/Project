@extends('backend.master')
@section('title',"Sales Representative Report")
@section('content')
 <!-- Top Menubar Ends Here-->
 <div class="page">
    @include('backend.partials.leftbar.shortcuts')
	<div class="page-main">
   <div class="page-header">
      <h1 class="page-title">Sales Representative Report</h1>
   </div>
   <div style="width: 100%; padding: 30px;">
      <div class="panel-body" style="background-color: #fff; ">
         <header class="panel-heading">
            <div>
               <div class="row">
                  <div class="col-lg-4">
                     <h5>Business Location:*</h5>
                     <select class="form-control" data-plugin="select2">
                        <optgroup label="Please Select">
                           <option value="R1">POS</option>
                           <option value="R1">Rupal</option>
                        </optgroup>
                     </select>
                  </div>
                  <div class="col-lg-4">
                     <h5>User</h5>
                     <select class="form-control" data-plugin="select2">
                        <optgroup label="Please Select">
                           <option value="R1">Mr David</option>
                           <option value="R1">Mr Test</option>
                           <option value="R1">Mr Bobby</option>
                        </optgroup>
                     </select>
                  </div>
                  <div class="col-lg-4">
                     <h5> Date Range:</h5>
                     <div class="input-group">
                        <span class="input-group-addon">
                        <i class="icon wb-calendar" aria-hidden="true"></i>
                        </span>
                        <input type="text" class="form-control" data-plugin="datepicker">
                     </div>
                  </div>
               </div>
            </div>
         </header>
      </div>
   </div>
   <div class="page-main">
      <div style="width: 100%; padding: 30px;">
         <div class="panel-body" style="background-color: #fff; ">
            <header class="panel-heading">
               <div>
                  <form >
                     <div class="col-lg-4">
                        <h4> Total Sale: 59.00 $</h4>
                     </div>
                     <div class="col-lg-4">
                        <h4> Total Expense: 0.00 $</h4>
                     </div>
                  </form>
               </div>
            </header>
         </div>
      </div>
      <div class="page-main">
         <div class="page-header">
            <h1 class="page-title"> Sales Add</h1>
         </div>
         <div style="width: 100%; padding: 30px;">
            <div class="panel-body" style="background-color: #fff; ">
               <header class="panel-heading">
                  <div style="width: 50%; float: left;">
                     <div class="tablesaw-sortable-switch tablesaw-bar-section"><label><span class="btn tablesaw-btn btn-select tablesaw-btn-select"><span aria-hidden="true">Sort By ↑</span></span></label></div>
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
                  <table class="table table-hover dataTable table-striped w-full dtr-inline" data-plugin="dataTable" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info" style="width: 1783px;">
                     <table class="table table-hover dataTable table-striped w-full" data-plugin="dataTable">
                        <thead>
                           <tr>
                              <th>Open Time</th>
                              <th>Close Time</th>
                              <th>User</th>
                              <th>Total Card Slips </th>
                              <th>Total Cheque </th>
                              <th>Total Cash</th>
                              <th>Action</th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <td>05-15-2019 03:19 AM</td>
                              <td>05-24-2019 01:34 PM </td>
                              <td>  Mr David Felming <br>davidfelming980@gmail.com </td>
                              <td>  0</td>
                              <td>  1</td>
                              <td>55,720.75 $ </td>
                              <td class="actions">
                                 <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-editing save-row"
                                    data-toggle="tooltip" data-original-title="Save" hidden><i class="icon wb-wrench" aria-hidden="true"></i></a>
                                 <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-editing cancel-row"
                                    data-toggle="tooltip" data-original-title="Delete" hidden><i class="icon wb-close" aria-hidden="true"></i></a>
                                 <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default edit-row"
                                    data-toggle="tooltip" data-original-title="view"><i class="icon wb-edit" aria-hidden="true"></i></a>
                              </td>
                           </tr>
                           <tr>
                              <td>05-15-2019 03:19 AM</td>
                              <td>05-24-2019 01:34 PM </td>
                              <td>  Mr David Felming <br>davidfelming980@gmail.com </td>
                              <td>  0</td>
                              <td>  1</td>
                              <td>30,720.75 $ </td>
                              <td class="actions">
                                 <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-editing save-row"
                                    data-toggle="tooltip" data-original-title="Save" hidden><i class="icon wb-wrench" aria-hidden="true"></i></a>
                                 <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-editing cancel-row"
                                    data-toggle="tooltip" data-original-title="Delete" hidden><i class="icon wb-close" aria-hidden="true"></i></a>
                                 <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default edit-row"
                                    data-toggle="tooltip" data-original-title="view"><i class="icon wb-edit" aria-hidden="true"></i></a>
                              </td>
                           </tr>
                           <tr>
                              <td>05-15-2019 03:19 AM</td>
                              <td>05-24-2019 01:34 PM </td>
                              <td>  Mr Test <br>davidfelming980@gmail.com </td>
                              <td>  0</td>
                              <td>  1</td>
                              <td>60,720.75 $ </td>
                              <td class="actions">
                                 <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-editing save-row"
                                    data-toggle="tooltip" data-original-title="Save" hidden><i class="icon wb-wrench" aria-hidden="true"></i></a>
                                 <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-editing cancel-row"
                                    data-toggle="tooltip" data-original-title="Delete" hidden><i class="icon wb-close" aria-hidden="true"></i></a>
                                 <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default edit-row"
                                    data-toggle="tooltip" data-original-title="view"><i class="icon wb-edit" aria-hidden="true"></i></a>
                              </td>
                           </tr>
                           <tr>
                              <td>05-15-2019 03:19 AM</td>
                              <td>05-24-2019 01:34 PM </td>
                              <td>  Mr Test <br>davidfelming980@gmail.com </td>
                              <td>  0</td>
                              <td>  1</td>
                              <td>55,720.75 $ </td>
                              <td class="actions">
                                 <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-editing save-row"
                                    data-toggle="tooltip" data-original-title="Save" hidden><i class="icon wb-wrench" aria-hidden="true"></i></a>
                                 <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-editing cancel-row"
                                    data-toggle="tooltip" data-original-title="Delete" hidden><i class="icon wb-close" aria-hidden="true"></i></a>
                                 <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default edit-row"
                                    data-toggle="tooltip" data-original-title="view"><i class="icon wb-edit" aria-hidden="true"></i></a>
                              </td>
                           </tr>
                        </tbody>
                     </table>
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
                  <div class="col-sm-12 col-md-6">
                     <div id="DataTables_Table_0_filter" class="dataTables_filter"></div>
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
	