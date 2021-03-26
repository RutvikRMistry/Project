@extends('backend.master')
@section('title',"Event Report")
@section('content')
 <!-- Top Menubar Ends Here-->
 <div class="page">
    @include('backend.partials.leftbar.shortcuts')
	<div class="page-main">
   <div class="page-header">
      <h1 class="page-title">Event Report</h1>
   </div>
   <div style="width: 100%; padding: 30px;">
      <div class="panel-body" style="background-color: #fff; ">
         <header class="panel-heading">
            <div>
               <div class="col-xxl-9">
                  <div id="teamCompletedWidget" class="card card-shadow example-responsive">
                     <div class="card-block p-20 pb-25">
                        <div class="row pb-40" data-plugin="matchHeight">
                           <div class="col-md-6">
                              <div class="counter text-left pl-10">
                                 <div class="counter-label">Team Total Completed</div>
                                 <div class="counter-number-group text-truncate">
                                    <span>1,439</span>
                                    <span>86%</span>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <ul class="list-inline mr-50">
                                 <li class="list-inline-item">
                                    Task Completed
                                 </li>
                                 <li class="list-inline-item">
                                    Cards Completed
                                 </li>
                              </ul>
                           </div>
                        </div>
                        <div class="row" style="margin: auto;">
                           <div class="col-lg-4 form-group">
                              <li class="mb-15">
                                 <input type="radio" class="icheckbox-primary" id="inputRadiosChecked" name="inputRadios"
                                    data-plugin="iCheck" data-radio-class="iradio_flat-blue"
                                    checked />
                                 <label for="inputRadiosChecked">Weekly</label>
                              </li>
                           </div>
                           <div class="col-lg-4 form-group">
                              <li class="mb-15">
                                 <input type="radio" class="icheckbox-primary" id="inputRadiosChecked" name="inputRadios"
                                    data-plugin="iCheck" data-radio-class="iradio_flat-blue"
                                    checked />
                                 <label for="inputRadiosChecked">Monthly</label>
                              </li>
                           </div>
                           <div class="col-lg-4 form-group">
                              <li class="mb-15">
                                 <input type="radio" class="icheckbox-primary" id="inputRadiosChecked" name="inputRadios"
                                    data-plugin="iCheck" data-radio-class="iradio_flat-blue"
                                    checked />
                                 <label for="inputRadiosChecked">Yearly</label>
                              </li>
                           </div>
                        </div>
                        <div class="ct-chart"></div>
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
                     <thead>
                        <tr>
                           <th>Client Name </th>
                           <th>Event Name </th>
                           <th>Lead Owner  </th>
                           <th> Event Manager</th>
                           <th>Event Date </th>
                           <th> Event Status</th>
                           <th>Option </th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <td>Mike's  </td>
                           <td>C_Event_01072020154939   </td>
                           <td>David Felming   </td>
                           <td>Adan Brown    </td>
                           <td>07/01/2020 to 07/01/2020  </td>
                           <td>DEFINITE   </td>
                           <td class="actions">
                              <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-editing save-row"
                                 data-toggle="tooltip" data-original-title="Save" hidden><i class="icon wb-wrench" aria-hidden="true"></i></a>
                              <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-editing cancel-row"
                                 data-toggle="tooltip" data-original-title="Delete" hidden><i class="icon wb-close" aria-hidden="true"></i></a>
                              <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default remove-row"
                                 data-toggle="tooltip" data-original-title="Remove"><i class="icon wb-trash" aria-hidden="true"></i></a>
                           </td>
                        </tr>
                        <tr>
                           <td>RQL's  </td>
                           <td>C_Event_01072020154939   </td>
                           <td>David Felming   </td>
                           <td>Adan Brown    </td>
                           <td>07/01/2020 to 07/01/2020  </td>
                           <td>DEFINITE   </td>
                           <td class="actions">
                              <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-editing save-row"
                                 data-toggle="tooltip" data-original-title="Save" hidden><i class="icon wb-wrench" aria-hidden="true"></i></a>
                              <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-editing cancel-row"
                                 data-toggle="tooltip" data-original-title="Delete" hidden><i class="icon wb-close" aria-hidden="true"></i></a>
                              <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default remove-row"
                                 data-toggle="tooltip" data-original-title="Remove"><i class="icon wb-trash" aria-hidden="true"></i></a>
                           </td>
                        </tr>
                        <tr>
                           <td>Kin's  </td>
                           <td>C_Event_01072020154939   </td>
                           <td>David Felming   </td>
                           <td>Adan Brown    </td>
                           <td>07/01/2020 to 07/01/2020  </td>
                           <td>PROSPECT     </td>
                           <td class="actions">
                              <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-editing save-row"
                                 data-toggle="tooltip" data-original-title="Save" hidden><i class="icon wb-wrench" aria-hidden="true"></i></a>
                              <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-editing cancel-row"
                                 data-toggle="tooltip" data-original-title="Delete" hidden><i class="icon wb-close" aria-hidden="true"></i></a>
                              <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default remove-row"
                                 data-toggle="tooltip" data-original-title="Remove"><i class="icon wb-trash" aria-hidden="true"></i></a>
                           </td>
                        </tr>
                        <tr>
                           <td>Mike's  </td>
                           <td>C_Event_01072020154939   </td>
                           <td>David Felming   </td>
                           <td>Adan Brown    </td>
                           <td>07/01/2020 to 07/01/2020  </td>
                           <td>PROSPECT     </td>
                           <td class="actions">
                              <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-editing save-row"
                                 data-toggle="tooltip" data-original-title="Save" hidden><i class="icon wb-wrench" aria-hidden="true"></i></a>
                              <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-editing cancel-row"
                                 data-toggle="tooltip" data-original-title="Delete" hidden><i class="icon wb-close" aria-hidden="true"></i></a>
                              <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default remove-row"
                                 data-toggle="tooltip" data-original-title="Remove"><i class="icon wb-trash" aria-hidden="true"></i></a>
                           </td>
                        </tr>
                        <tr>
                           <td>Simer's  </td>
                           <td>C_Event_01072020154939   </td>
                           <td>David Felming   </td>
                           <td>Adan Brown    </td>
                           <td>07/01/2020 to 07/01/2020  </td>
                           <td>DEFINITE   </td>
                           <td class="actions">
                              <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-editing save-row"
                                 data-toggle="tooltip" data-original-title="Save" hidden><i class="icon wb-wrench" aria-hidden="true"></i></a>
                              <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-editing cancel-row"
                                 data-toggle="tooltip" data-original-title="Delete" hidden><i class="icon wb-close" aria-hidden="true"></i></a>
                              <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default remove-row"
                                 data-toggle="tooltip" data-original-title="Remove"><i class="icon wb-trash" aria-hidden="true"></i></a>
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
 </div>
@endsection
	