@extends('backend.master')
@section('title',"Add Sell Return")
@section('content')
 <!-- Top Menubar Ends Here-->
 <div class="page">
  @include('backend.partials.leftbar.shortcuts')
  <div class="page-main">
   <div class="page-header">
      <h1 class="page-title"> Sell Return</h1>
   </div>
   <div class="col-lg-4">
      <h5>Business Location<strong class="text-danger">*</strong></h5>
      <select class="form-control" data-plugin="select2" required="" id="select_location_id" name="location_id">
         <option value="">Please Select</option>
         <option value="1" selected="selected">POS</option>
      </select>
   </div>
   <div style="width: 100%; padding: 30px;">
      <div class="panel-body" style="background-color: #fff; ">
         <header class="panel-heading">
            <div>
               <div class="row">
                  <div class="col-lg-4">
                     <h5>Customer<strong class="text-danger">*</strong></h5>
                     <div class="form-group">
                        <div class="input-group input-group-icon">
                           <span class="input-group-addon">
                           <span class="icon wb-user" aria-hidden="true"></span>
                           </span>
                           <select class="form-control" id="customer_id" required="" name="contact_id" tabindex="-1" aria-hidden="true" aria-required="true">
                              <option selected="selected" value="">Enter Customer name / phone</option>
                              <option></option>
                           </select>
                           <span class="input-group-addon">+</span>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4">
                     <h5>Reference No:</h5>
                     <input class="form-control" name="invoice_no" type="text" id="invoice_no">
                  </div>
                  <div class="col-lg-4">
                     <h5>Purchase Date<strong class="text-danger">*</strong></h5>
                     <div class="input-group">
                        <span class="input-group-addon">
                        <i class="icon wb-calendar" aria-hidden="true"></i>
                        </span>
                        <input type="text" class="form-control" data-plugin="datepicker" readonly="" required="" name="transaction_date" type="text" value="09-01-2020" id="transaction_date" aria-required="true">
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
                  <div class="page-search-form" role="search">
                     <div class="col-lg-6 form-group">
                        <div class="input-search input-search-dark">
                           <i class="input-search-icon wb-search" aria-hidden="true"></i>
                           <input class="form-control ui-autocomplete-input" id="search_product" placeholder="Enter Product name / SKU / Scan bar code" autofocus="" name="search_product" type="text" autocomplete="off">
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
                           <th>Exp Date</th>
                           <th>Delete</th>
                        </tr>
                     </thead>
                  </table>
                  <div class="dropdown-divider"></div>
                  <div class="row">
                     <div class="col-lg-4">
                        <h5>Net Total Amount: 0.00</h5>
                     </div>
            </header>
            </div>
            </div>
            <div class="page-main">
               <div style="width: 100%; padding: 30px;">
                  <div class="panel-body" style="background-color: #fff; ">
                     <header class="panel-heading">
                        <div>
                           <div class="row">
                              <div class="col-lg-4">
                                 <h5>Discount Type:</h5>
                                 <select class="form-control"data-plugin="select2" id="discount_type" name="discount_type">
                                    <option value="" selected="selected">None</option>
                                    <option value="fixed">Fixed</option>
                                    <option value="percentage">Percentage</option>
                                 </select>
                              </div>
                              <div class="col-lg-4">
                                 <h5>Discount Amount:</h5>
                                 <input class="form-control input_number" required="" name="discount_amount" type="text" value="0" id="discount_amount" aria-required="true">
                              </div>
                              <div class="col-lg-4">
                                 <h5>  Discount:(-) 0.00</h5>
                              </div>
                           </div>
                           <div class="dropdown-divider"></div>
                           <div class="row" style="margin: auto;">
                              <div class="col-lg-4">
                                 <h5></h5>
                              </div>
                              <div class="col-lg-4 form-group">
                                 <h5></h5>
                              </div>
                              <div class="col-lg-4 form-group" style="margin: auto;">
                                 <h5>    Total Credit Amount: 0.00 $</h5>
                              </div>
                           </div>
                           <div class="dropdown-divider" style="margin: auto;"></div>
                           <br>
                           <div class="row">
                              <div class="col-md-12">
                                 <h5>Additional Notes:</h5>
                                 <div class="form-group row">
                                    <label class="col-md-2form-control-lg form-control-label" for="inputSizingLarge"></label>
                                    <div class="col-md-12">
                                       <textarea class="form-control" rows="3" name="additional_notes" cols="50" id="additional_notes"></textarea>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-md-9">
                                 <button type="button" id="submit_sell_return_form" class="btn btn-primary">Save </button>
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
</div>
 </div>

@endsection
	