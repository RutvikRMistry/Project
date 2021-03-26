@extends('backend.master')
@section('title',"Payment")
@section('content')
 <!-- Top Menubar Ends Here-->
 <div class="page">
  @include('backend.partials.leftbar.shortcuts')
 <div class="page-main">
   <div class="page-header">
      <h1 class="page-title">Add payment</h1>
   </div>
   <div style="width: 100%; padding: 30px;">
      <div class="panel-body" style="background-color: #fff; ">
         <header class="panel-heading">
         <div>
            <div class="row">
               <div class="col-lg-6 form-group">
                  <strong>Customer name: </strong>{{$contact->name}}<br>
               </div>
               <div class="col-lg-6 form-group">
                  <strong>Total Sale: </strong><span class="display_currency" data-currency_symbol="true">0.00 $</span><br>
                  <strong>Total Paid: </strong><span class="display_currency" data-currency_symbol="true">0.00 $</span><br>
                  <strong>Total Sale Due: </strong><span class="display_currency" data-currency_symbol="true">0.00 $</span><br>
                  <strong>Opening Balance: </strong>
                  <span class="display_currency" data-currency_symbol="true">2.00 $</span><br>
                  <strong>Opening Balance Due: </strong>
                  <span class="display_currency" data-currency_symbol="true">2.00 $</span>
               </div>
            </div>
            <div class="row">
               <div class="col-md-4">
                  <div class="form-group">
                     <label for="amount">Amount:*</label>
                     <div class="input-group">
                        <span class="input-group-addon">
                        <i class="fa fa-money"></i>
                        </span>
                        <input class="form-control input_number" required="" placeholder="Amount" name="amount" type="text" value="2.00" id="amount">
                     </div>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="form-group">
                     <label for="paid_on">Paid on:*</label>
                     <div class="input-group">
                        <span class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                        </span>
                        <input class="form-control" readonly="" required="" name="paid_on" type="text" value="08/13/2020" id="paid_on">
                     </div>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="form-group">
                     <label for="method">Pay Via:*</label>
                     <div class="input-group">
                        <span class="input-group-addon">
                        <i class="fa fa-money"></i>
                        </span>
                        <select class="form-control select2 payment_types_dropdown" required="" style="width:100%;" id="method" name="method">
                           <option value="cash" selected="selected">Cash</option>
                           <option value="card">Card</option>
                           <option value="cheque">Cheque</option>
                           <option value="bank_transfer">Bank Transfer</option>
                           <option value="other">Other</option>
                           <option value="custom_pay_1">Custom Payment 1</option>
                        </select>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div class="form-group">
                     <label for="note">Payment Note:</label>
                     <textarea class="form-control" rows="3" name="note" cols="50" id="note"></textarea>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-9">
                  <button type="button" class="btn btn-primary">Save </button>
                  <button type="reset" class="btn btn-default btn-outline">Close</button>
               </div>
            </div>
         </div>
      </div>
     
   </div>
</div>
</div>
 </div>

@endsection
	