@extends('backend.master')
@section('title',"Profit Loss Report")
@section('content')
 <!-- Top Menubar Ends Here-->
 <div class="page">
    @include('backend.partials.leftbar.shortcuts')
	<div class="page-main">
   <div class="page-header">
      <h1 class="page-title">Profit / Loss Report</h1>
   </div>
   <div class="row" style="height:65px">
      <div class="col-lg-3 form-group">
         <h5></h5>
      </div>
      <div class="col-lg-3 form-group" style="margin: auto;">
         <h5></h5>
      </div>
      <div class="col-lg-3 form-group" style="margin: auto;">
         <h5></h5>
         <div class="form-group">
            <div class="input-group input-group-icon">
               <span class="input-group-addon">
               <span class="form-control-icon wb-map" aria-hidden="true"></span>
               </span>
               <select class="form-control" data-plugin="select2">
                  <optgroup label="Please Select">
                     <option value="R1">All Location</option>
                     <option value="R1">POS</option>
                  </optgroup>
               </select>
            </div>
         </div>
      </div>
      <div class="col-md-3 form-group"  style="margin: auto;">
         <div class="example example-buttons" >
            <div class="btn-group dropdown" >
               <button type="button" class="btn btn-outline btn-default dropdown-toggle"  id="exampleBulletDropdown1"
                  data-toggle="dropdown" aria-expanded="false">
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
         </div>
      </div>
   </div>
   <div style="width: 100%; padding: 30px;">
      <div class="page-content container-fluid">
         <div class="row">
            <div class="col-xl-6">
               <!-- Panel Standard Editor -->
               <div class="panel">
                  <div class="panel-heading">
                  </div>
                  <div class="panel-body">
                     <br>
                     <form>
                        <div class="row">
                           <div class="col-lg-8">
                              <h5>Opening Stock:</h5>
                           </div>
                           <div class="col-lg-4">
                              <h5>  2,285.00 $</h5>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-lg-8">
                              <h5>Total purchase:</h5>
                           </div>
                           <div class="col-lg-4">
                              <h5>  0.00 $</h5>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-lg-8">
                              <h5>Total Stock Adjustment:</h5>
                           </div>
                           <div class="col-lg-4">
                              <h5>  5.00 $</h5>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-lg-8">
                              <h5>Total Expense:</h5>
                           </div>
                           <div class="col-lg-4">
                              <h5>  0.00 $</h5>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-lg-8">
                              <h5>Total Transfer Shipping Charges:</h5>
                           </div>
                           <div class="col-lg-4">
                              <h5>  0.00 $</h5>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-lg-8">
                              <h5>Total Sell discount:  </h5>
                           </div>
                           <div class="col-lg-4">
                              <h5>  0.00 $</h5>
                           </div>
                     </form>
                     </div>
                  </div>
               </div>
               <!-- End Panel Standard Editor -->
            </div>
            <div class="col-xl-6">
               <!-- Panel Inline Editing -->
               <div class="panel">
                  <div class="panel-heading">
                  </div>
                  <div class="panel-body">
                     <br>
                     <form>
                        <div class="row">
                           <div class="col-lg-8">
                              <h5>Closing  Stock:</h5>
                           </div>
                           <div class="col-lg-4 ">
                              <h5>  2,240.50 $</h5>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-lg-8">
                              <h5>Total Sales:</h5>
                           </div>
                           <div class="col-lg-4 ">
                              <h5>  59.00 $</h5>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-lg-8">
                              <h5>Total Stock Recovered:</h5>
                           </div>
                           <div class="col-lg-4">
                              <h5>  0.00 $</h5>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-lg-8">
                              <h5>Total Purchase discount:  </h5>
                           </div>
                           <div class="col-lg-4">
                              <h5>  0.00 $</h5>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
               <!-- End Panel Inline Editing -->
            </div>
            <div class="col-xl-12">
               <!-- Panel Examples -->
               <div class="panel">
                  <div class="panel-heading">
                     <h3 class="panel-title"></h3>
                  </div>
                  <div class="panel-body">
                     <form>
                        <div class="row">
                           <div class="col-lg-4 ">
                              <h2>Net Profit: 9.00 $</h2>
                           </div>
                     </form>
                     </div>
                  </div>
                  <!-- End Panel Examples -->
               </div>
            </div>
         </div>
      </div>         
   </div>
</div>
 </div>

@endsection
	