@extends('backend.master')
@section('title',"Add Stock Adjustment")
@section('content')
 <!-- Top Menubar Ends Here-->
 <div class="page">
  @include('backend.partials.leftbar.shortcuts')
  <div class="page-main">
<div class="page-header">
   <h1 class="page-title"> Add Stock Adjustment</h1>
</div>
<div style="width: 100%; padding: 30px;">
   <div class="panel-body" style="background-color: #fff; ">
      <div>
         <div class="row">
            <div class="col-lg-3">
               <h5>Business Location<strong class="text-danger">*</strong></h5>
               <select class="form-control" required="" id="location_id" name="location_id" tabindex="-1" aria-hidden="true" aria-required="true">
                  <option selected="selected" value="">Please Select</option>
                  <option value="1">POS</option>
               </select>
            </div>
            <div class="col-lg-3">
               <h5>Reference No:</h5>
               <input class="form-control" name="ref_no" type="text" id="ref_no">
            </div>
            <div class="col-lg-3">
               <h5>Date<strong class="text-danger">*</strong></h5>
               <div class="input-group">
                  <span class="input-group-addon">
                  <i class="icon wb-calendar" aria-hidden="true"></i>
                  </span>
                  <input type="text" class="form-control" data-plugin="datepicker"readonly="" required="" name="transaction_date" type="text" value="09-01-2020" id="transaction_date" aria-required="true">
               </div>
            </div>
            <div class="col-lg-3">
               <h5>Adjustment type<strong class="text-danger">*</strong></h5>
               <select class="form-control " required="" id="adjustment_type" name="adjustment_type" tabindex="-1" aria-hidden="true" aria-required="true">
                  <option selected="selected" value="">Please Select</option>
                  <option value="normal">Normal</option>
                  <option value="abnormal">Abnormal</option>
               </select>
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
            <div class="page-search-form" role="search">
               <div class="col-lg-6 form-group">
                  <div class="input-search input-search-dark">
                     <i class="input-search-icon wb-search" aria-hidden="true"></i>
                     <input class="form-control ui-autocomplete-input" id="search_product_for_srock_adjustment" placeholder="Search products for stock adjustment" disabled="" name="search_product" type="text" autocomplete="off">
                     <button type="button" class="input-search-close icon wb-close" aria-label="Close"></button>
                  </div>
               </div>
            </div>
            <table class="table table-hover dataTable table-striped w-full dtr-inline" data-plugin="dataTable" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info" style="width: 1783px;">
               <thead>
                  <tr>
                     <th>Product </th>
                     <th> Quantity </th>
                     <th>Unit Price</th>
                     <th>Sub Total  </th>
                     <th>Delete</th>
                  </tr>
               </thead>
            </table>
            <div class="dropdown-divider"></div>
            <div class="row" style="margin: auto;">
               <div class="col-lg-4 form-group">
                  <h5>Net Total Amount: 0.00</h5>
               </div>
      </header>
      </div>
      </div>
      <div class="page-main">
         <div style="width: 100%; padding: 30px;">
            <div class="panel-body" style="background-color: #fff; ">
               <div>
                  <div class="row">
                     <div class="col-lg-12">
                        <h5>Total amount recovered<strong class="text-danger">*</strong></h5>
                        <input class="form-control input_number" placeholder="Total amount recovered" name="total_amount_recovered" type="text" value="0" id="total_amount_recovered">
                     </div>
                  </div>
                  <br>
                  <div class="row">
                     <div class="col-md-12">
                        <h5>Reason:</h5>
                        <div class="form-group row">
                           <label class="col-md-2form-control-lg form-control-label" for="inputSizingLarge"></label>
                           <div class="col-md-12">
                              <textarea class="form-control" placeholder="Reason" rows="3" name="additional_notes" cols="50" id="additional_notes"></textarea>                        
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-9">
                        <button type="submit" class="btn btn-primary">Save </button>
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
	