@extends('backend.master')
@section('title',"Add Sell")
@section('content')
 <!-- Top Menubar Ends Here-->
 <div class="page">
  @include('backend.partials.leftbar.shortcuts')
  
      <div class="page-main">
        <div class="page-header">
          <h1 class="page-title"> Add Sales</h1>
        </div>

     
              <div style="width: 100%; padding: 30px;"> 
          <div class="panel-body" style="background-color: #fff; ">
            <header class="panel-heading">
                     

              
              <div>
                 
           
             <div class="row">
              <div class="col-lg-3">
                <h5>Customer<strong class="text-danger">*</strong></h5>     
                 <div class="form-group">
                    <div class="input-group input-group-icon">
                      <span class="input-group-addon">
                        <span class="icon wb-user" aria-hidden="true"></span>
                      </span>
                    <select class="form-control" id="customer_id" required="" name="contact_id" tabindex="-1" aria-hidden="true" aria-required="true"><option selected="selected" value="">Enter Customer name / phone</option><option value="1">Walk-In Customer</option></select>
                    <span class="input-group-addon">+</span>
               </div>
                  </div>
                 </div>

                 <div class="col-lg-3">
                <h5>Commission Agent:</h5>     
                    <select class="form-control" data-plugin="select2"  id="commission_agent" name="commission_agent">
                      <optgroup label="Please Select">
                        <option value="R1">Mr BObby</option>
                        <option value="R1">Rupal</option>
                        </optgroup>
                    </select>             
             </div>

                 <div class="col-lg-3">
                <h5>Sales Date<strong class="text-danger">*</strong></h5>     
                    <div class="input-group">
                      <span class="input-group-addon">
                        <i class="icon wb-calendar" aria-hidden="true"></i>
                      </span>
                      <input type="text" class="form-control" data-plugin="datepicker"  readonly="" required="" name="transaction_date" type="text" value="09-01-2020" id="transaction_date" aria-required="true">
                    </div>
              </div>

                 <div class="col-lg-3">
                <h5>Status<strong class="text-danger">*</strong></h5>     
                   <select class="form-control " required="" id="status" name="status" tabindex="-1" aria-hidden="true" aria-required="true"><option selected="selected" value="">Please Select</option><option value="final">Final</option><option value="draft">Draft</option><option value="quotation">Quotation</option></select>         
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
                <input type="text" class="form-control" id="search_product" placeholder="Enter Product name / SKU / Scan bar code" autofocus="" name="search_product" type="text" autocomplete="off">
                <button type="button" class="input-search-close icon wb-close" aria-label="Close"></button>
              </div>
            </div>
          </div>
          
          <table class="table table-hover dataTable table-striped w-full dtr-inline" data-plugin="dataTable" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info" style="width: 1783px;">
                 
             <thead>
                <tr>
                  <th>#</th>
                  <th>Product </th>
                  <th> Quantity </th>
                  <th>Sub Total  </th>
                  <th>Delete</th>
                </tr>
              </thead>
            </table>
       <div class="dropdown-divider"></div>
                    <div class="row" >
              <div class="col-lg-4 ">
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
                <h5>Discount Type<strong class="text-danger">*</strong></h5>     
                   <select class="form-control" data-plugin="select2" required="" data-default="percentage" id="discount_type" name="discount_type" aria-required="true"><option value="">Please Select</option><option value="fixed">Fixed</option><option value="percentage" selected="selected">Percentage</option></select>        
                     </div>
             
                  <div class="col-lg-4">
                <h5>Discount Amount<strong class="text-danger">*</strong></h5>     
             <input class="form-control input_number" name="discount_amount" type="text" value="0.00" id="discount_amount">
              </div>

                      <div class="col-lg-4">
                <h5>  Discount:(-) 0.00</h5>     
                </div>
              </div>
              <br>

                 

       <div class="row">
                  <div class="col-lg-4">
                <h5>Order Tax<strong class="text-danger">*</strong></h5>     
                  <select class="form-control" data-default="1" data-plugin="select2" id="tax_rate_id" name="tax_rate_id"><option value="">Please Select</option><option value="">None</option><option value="1" selected="selected" data-rate="2">sddfd</option><option value="2" data-rate="2">s</option></select>           
             </div>

                        <div class="col-lg-4">
                    <h5></h5>
                   </div>
              <div class="col-lg-4">
                    <h5>Order Tax:(+) 0.00</h5>
                   </div>
                  </div>
                  <br>
<div class="row">
          <div class="col-lg-4">
                <h5>Shipping Details:</h5>     
                  <div class="form-group">
                    <div class="input-group input-group-icon">
                      <span class="input-group-addon">
                        <span class="fa fa-info" aria-hidden="true"></span>
                      </span>
               <textarea class="form-control" placeholder="Shipping Details" rows="1" cols="30" name="shipping_details" id="shipping_details"></textarea>
                    </div>
                  </div>
                  </div>
                   <div class="col-lg-4">
                <h5>Shipping Charges:</h5>     
                  <div class="form-group">
                    <div class="input-group input-group-icon">
                      <span class="input-group-addon">
                        <span class="fa fa-info" aria-hidden="true"></span>
                      </span>
                  <input class="form-control input_number" placeholder="Shipping Charges" name="shipping_charges" type="text" value="0.00" id="shipping_charges">                    </div>
                  </div>
                  </div>  
                  </div>  
   <div class="row">
             <div class="col-md-12">
                  <h5>Sells Notes:</h5>
                      <div class="form-group row">
                        <label class="col-md-2form-control-lg form-control-label" for="inputSizingLarge"></label>
                        <div class="col-md-12">
                    <textarea class="form-control" rows="3" name="sale_note" cols="50"></textarea>
                        </div>
                      </div>
                  </div>
                </div>


 <div class="row">
                     <div class="col-lg-4">
                <h3 class="example-title">Add Payment</h3>    
                </div>
              </div>


            <div class="row">
                      <div class="col-lg-4">
                <h5>Amount<strong class="text-danger">*</strong></h5>     
                  <div class="form-group">
                    <div class="input-group input-group-icon">
                      <span class="input-group-addon">
                        <span class="fa fa-money" aria-hidden="true"></span>
                      </span>
                     <input class="form-control payment-amount input_number" required="" id="amount_0" placeholder="Amount" name="payment[0][amount]" type="text" value="0.00" aria-required="true">
                    </div>
                  </div>
                </div>
           
                     <div class="col-lg-4">
                <h5>Payment Method<strong class="text-danger">*</strong></h5>     
                 <div class="form-group">
                    <div class="input-group input-group-icon">
                      <span class="input-group-addon">
                        <span class="fa fa-money" aria-hidden="true"></span>
                      </span>
                    <select class="form-control"  data-plugin="select2" required="" id="method_0"  name="payment[0][method]" aria-required="true"><option value="cash" selected="selected">Cash</option><option value="card">Card</option><option value="cheque">Cheque</option><option value="bank_transfer">Bank Transfer</option><option value="other">Other</option><option value="custom_pay_1">Custom Payment 1</option></select>
                    </div>
                  </div>
                 </div>
               </div>
               <div class="row">
             <div class="col-md-12">
                  <h5>Payment note:</h5>
                      <div class="form-group row">
                        <label class="col-md-2form-control-lg form-control-label" for="inputSizingLarge"></label>
                        <div class="col-md-12">
                  <textarea class="form-control" rows="3" id="note_0" name="payment[0][note]" cols="50"></textarea>
                        </div>
                      </div>
                  </div>
                </div>
                                   <div class="dropdown-divider"></div>
 <div class="row">
                        <div class="col-lg-4">
                    <h5></h5>
                   </div>
         <div class="col-lg-4 form-group">
                    <h5></h5>
                   </div>
         <div class="col-lg-4 form-group">
                    <h5>  Purchase Due: 0.00 $</h5>
                   </div>
        </div>

 <div class="row">
                        <div class="col-md-9">
                      <button type="button" id="submit-sell" class="btn btn-primary">Submit</button>
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
    </div>
    
 </div>

@endsection
	