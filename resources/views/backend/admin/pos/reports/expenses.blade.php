@extends('backend.master')
@section('title',"Expense Report")
@section('content')
 <!-- Top Menubar Ends Here-->
 <div class="page">
    @include('backend.partials.leftbar.shortcuts')
	<div class="page-main">
   <div class="page-header">
      <h1 class="page-title">Expense Report</h1>
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
                     <h5>Category</h5>
                     <select class="form-control" data-plugin="select2">
                        <optgroup label="Please Select">
                           <option value="R1">All</option>
                           <option value="R1">Cheesee Rings</option>
                        </optgroup>
                     </select>
                  </div>
                  <div class="col-lg-4">
                     <h5>Date Range:</h5>
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

@endsection
	