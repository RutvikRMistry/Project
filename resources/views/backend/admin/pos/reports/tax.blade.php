@extends('backend.master')
@section('title',"Tax Report")
@section('content')
 <!-- Top Menubar Ends Here-->
 <div class="page">
    @include('backend.partials.leftbar.shortcuts')
	<div class="page-main">
   <div class="page-header">
      <h1 class="page-title">Tax Report</h1>
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
   <div style="width: 100%; padding: 30px;">
      <div class="page-content container-fluid">
         <div class="row">
            <div class="col-xl-6">
               <!-- Panel Standard Editor -->
               <div class="panel">
                  <header class="panel-heading">
                     <div class="panel-actions"></div>
                     <h3 class="panel-title">Input Tax</h3>
                  </header>
                  <div class="panel-body">
                     <form>
                        <div class="row">
                           <div class="col-lg-8 form-group">
                              <h5>Total </h5>
                           </div>
                           <div class="col-lg-4 ">
                              <h5>  0.00 $</h5>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
               <!-- End Panel Standard Editor -->
            </div>
            <div class="col-xl-6">
               <!-- Panel Inline Editing -->
               <div class="panel">
                  <header class="panel-heading">
                     <div class="panel-actions"></div>
                     <h3 class="panel-title">Output Tax</h3>
                  </header>
                  <div class="panel-body">
                     <div class="example">
                        <form>
                           <div class="row">
                              <div class="col-lg-8">
                                 <h5>Asdf:</h5>
                              </div>
                              <div class="col-lg-4">
                                 <h5>0.11 $</h5>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-lg-8">
                                 <h5>Total</h5>
                              </div>
                              <div class="col-lg-4">
                                 <h5>0.11 $</h5>
                              </div>
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
                  <header class="panel-heading">
                     <div class="panel-actions"></div>
                     <h2 class="panel-title">Overall (Input - Output) </h2>
                  </header>
                  <div class="panel-body">
                     <form>
                        <div class="col-lg-4 form-group">
                           <h3 class="example-title">Output Tax - Input Tax: 0.11 $</h3>
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

@endsection
	