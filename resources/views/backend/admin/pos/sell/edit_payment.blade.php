@extends('backend.master')
@section('title',"Edit Payment")
@section('content')
 <!-- Top Menubar Ends Here-->
 <div class="page">
  @include('backend.partials.leftbar.shortcuts')
  <div class="page-main">
        <div class="page-header">
          <h1 class="page-title">Edit payment</h1>
        </div>

     
            	<div style="width: 100%; padding: 30px;"> 
          <div class="panel-body" style="background-color: #fff; ">
            <header class="panel-heading">
              <div>
    <div class="row">
              <div class="col-lg-4">
          <div class="well">
            <strong>Supplier: </strong>walk<br>
            <strong>Business: </strong>
          </div>
        </div>
              <div class="col-lg-4">
          <div class="well">
            <strong>Reference No: </strong><br>
            <strong>Location: </strong>POS
          </div>
        </div>
              <div class="col-lg-4">
          <div class="well">
            <strong>Purchase Total: </strong><span class="display_currency" data-currency_symbol="true">5.61 $</span><br>
            <strong>Payment Note: </strong>
                          --
                      </div>
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
              <input class="form-control input_number" required="" placeholder="Amount" name="amount" type="text" value="5.61" id="amount">
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
              <input class="form-control" readonly="" required="" name="paid_on" type="text" value="07/22/2020" id="paid_on">
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
              <select class="form-control select2 payment_types_dropdown" required="" style="width:100%;" id="method" name="method"><option value="cash" selected="selected">Cash</option><option value="card">Card</option><option value="cheque">Cheque</option><option value="bank_transfer">Bank Transfer</option><option value="other">Other</option><option value="custom_pay_1">Custom Payment 1</option></select>
            </div>
          </div>
        </div>
  <div class="col-md-4">
    <div class="form-group">
      <label for="card_number">Card No</label>
      <input class="form-control" placeholder="Card No" name="card_number" type="text" id="card_number">
    </div>
  </div>
  <div class="col-md-4">
    <div class="form-group">
      <label for="card_holder_name">Card Holder Name</label>
      <input class="form-control" placeholder="Card Holder Name" name="card_holder_name" type="text" id="card_holder_name">
    </div>
  </div>
  <div class="col-md-4">
    <div class="form-group">
      <label for="card_transaction_number">Card Transaction Number</label>
      <input class="form-control" placeholder="Card Transaction Number" name="card_transaction_number" type="text" id="card_transaction_number">
    </div>
  </div>

  <div class="col-md-3">
    <div class="form-group">
      <label for="card_type">Card Type</label>
      <select class="form-control select2" id="card_type" name="card_type"><option value="visa" selected="selected">Visa</option><option value="master">MasterCard</option></select>
    </div>
  </div>
  <div class="col-md-3">
    <div class="form-group">
      <label for="card_month">Month</label>
      <input class="form-control" placeholder="Month" name="card_month" type="text" id="card_month">
    </div>
  </div>
  <div class="col-md-3">
    <div class="form-group">
      <label for="card_year">Year</label>
      <input class="form-control" placeholder="Year" name="card_year" type="text" id="card_year">
    </div>
  </div>
  <div class="col-md-3">
    <div class="form-group">
      <label for="card_security">Security Code</label>
      <input class="form-control" placeholder="Security Code" name="card_security" type="text" id="card_security">
    </div>
  </div>

  <div class="col-md-12">
    <div class="form-group">
      <label for="cheque_number">Cheque No</label>
      <input class="form-control" placeholder="Check No" name="cheque_number" type="text" id="cheque_number">
    </div>
  </div>

  <div class="col-md-12">
    <div class="form-group">
      <label for="bank_account_number">Bank Account No</label>
      <input class="form-control" placeholder="Bank Account No" name="bank_account_number" type="text" id="bank_account_number">
    </div>
  </div>
  <div class="col-md-12">
    <div class="form-group">
      <label for="transaction_no_1">Transaction No.</label>
      <input class="form-control" placeholder="Transaction No." name="transaction_no_1" type="text" id="transaction_no_1">
    </div>
  </div>
  <div class="col-md-12">
    <div class="form-group">
      <label for="transaction_no_2">Transaction No.</label>
      <input class="form-control" placeholder="Transaction No." name="transaction_no_2" type="text" id="transaction_no_2">
    </div>
  </div>
  <div class="col-md-12">
    <div class="form-group">
      <label for="transaction_no_3">Transaction No.</label>
      <input class="form-control" placeholder="Transaction No." name="transaction_no_3" type="text" id="transaction_no_3">
    </div>
  </div>
     <div class="col-md-12">
          <div class="form-group">
            <label for="note">Payment Note:</label>
            <textarea class="form-control" rows="3" name="note" cols="50" id="note"></textarea>
          </div>
        </div>
      
<div class="modal-footer">
      <button type="submit" class="btn btn-primary">Update</button>
      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
                        </div>
                      </div>

                    </div>

          
                  </div>
          
          </div>
        </div>
      

</div>

@endsection
	