@extends('backend.master')
@section('title',"Sell Ticket")
@section('content')
 <!-- Top Menubar Ends Here-->
 <div class="page">
    @include('backend.partials.leftbar.shortcuts')
	<div class="page-main">
   <div class="page-header">
      <h1 class="page-title">Contact  Details</h1>
   </div>
   <div style="width: 100%; padding: 30px;">
      <div class="panel-body" style="background-color: #fff; ">
         <div class="example-wrap">
            <form>
               <div class="nav-tabs-vertical" data-plugin="tabs">
                  <ul class="nav nav-tabs mr-25" role="tablist">
                     <li class="nav-item" role="presentation"><a class="nav-link active" data-toggle="tab" href="#exampleTabsLeftOne"
                        aria-controls="exampleTabsLeftOne" role="tab">Booking Details</a></li>
                     <li class="nav-item" role="presentation"><a class="nav-link" data-toggle="tab" href="#exampleTabsLeftTwo"
                        aria-controls="exampleTabsLeftTwo" role="tab">Clients Details</a></li>
                  </ul>
                  <div class="tab-content py-15">
                     <div class="tab-pane active" id="exampleTabsLeftOne" role="tabpanel">
            <form>
            <div class="row">
            <div class="col-lg-2">
            <label class="control-label required">Event <strong class="text-danger">*</strong></label>
            </div>
            <div class="col-lg-4">
            <select class="form-control" data-plugin="select2" id="event_id" onchange="getTicketDetails(this)" required="required" name="event">
            <optgroup label="Please Select Event">
            <option value="R1">party</option>
            <option value="R1">Tkt Event</option>
            <option value="R1">Trial Event 2</option>
            <option value="R1">Nikku Bday</option>
            <option value="R1">Birthday</option>
            </optgroup>  
            </select>
            </div>
            </div>
            <div class="row">
            <div class="col-lg-2">
            <label class="control-label required">Tickets<strong class="text-danger">*</strong></label>
            </div>
            </div>
            <div class="row">
            <div class="col-lg-2">
            <label class="control-label required">Quantity <strong class="text-danger">*</strong></label>
            </div>
            <div class="col-lg-4">
            <input type="text" class="form-control" placeholder=""id="qty_total" readonly="readonly" required="required" name="qty_total">
            </div>
            </div>
            <br>
            <div class="row">
            <div class="col-lg-2">
            <label class="control-label required">Sub total <strong class="text-danger">*</strong></label>
            </div>
            <div class="col-lg-4">
            <div class="form-group">
            <div class="input-group">
            <span class="input-group-addon">₵</span>
            <input type="text" class="form-control" placeholder="">
            </div>
            </div>         
            </div>      
            </div> 
            <div class="row">
            <div class="col-lg-2">
            <label class="control-label required">Tax <strong class="text-danger">*</strong></label>
            </div>
            <div class="col-lg-4">
            <div class="form-group">
            <div class="input-group">
            <span class="input-group-addon">₵</span>
            <input type="text" class="form-control" placeholder=""id="tax" readonly="readonly" required="required" name="tax">
            </div>
            </div>         
            </div>      
            </div>    
            <div class="row">
            <div class="col-lg-2">
            <label class="control-label required"> Total <strong class="text-danger">*</strong></label>
            </div>
            <div class="col-lg-4">
            <div class="form-group">
            <div class="input-group">
            <span class="input-group-addon">₵</span>
            <input type="text" class="form-control" placeholder="">
            </div>
            </div>         
            </div>      
            </div>    
            <div class="row">
            <div class="col-lg-2">
            <label class="control-label required">Deposite <strong class="text-danger">*</strong></label>
            </div>
            <div class="col-lg-4">
            <div class="form-group">
            <div class="input-group">
            <span class="input-group-addon">₵</span>
            <input type="text" class="form-control" placeholder="" id="total" readonly="readonly" required="required" name="total">
            </div>
            </div>         
            </div>      
            </div>  
            <div class="row">
            <div class="col-lg-2">
            <label class="control-label required">Payment method <strong class="text-danger">*</strong></label>
            </div>
            <div class="col-lg-4">
            <select class="form-control" data-plugin="select2" id="payment_method" required="required" name="payment">
            <optgroup label="Please Select Payment method">
            <option value="R1">Cash</option>
            <option value="R1">Credit Card</option>
            <option value="R1">Paypal</option>
            </optgroup>  
            </select>
            </div>
            </div><br>
            <div class="row">
            <div class="col-lg-2">
            <label class="control-label required">Status <strong class="text-danger">*</strong></label>
            </div>
            <div class="col-lg-4">
            <select class="form-control" data-plugin="select2" id="status" required="required" name="status" >
            <optgroup label="Please Select Status">
            <option value="R1">Confirmed</option>
            <option value="R1">Pending</option>
            </optgroup>  
            </select>
            </div>
            </div>     
            <div class="form-group row">
            <div class="col-md-6">
            <button type="button" class="btn btn-primary">Next </button>
            </div>
            </div>
            </div>
            </form>
            <div class="tab-pane" id="exampleTabsLeftTwo" role="tabpanel">
            <div class="panel">
            <div class="panel-heading">
            <h3><b>Golden Ticket</b></h3>
            </div>
            <form>
            <div class="row">
            <div class="col-lg-2">
            <label class="control-label required">Guest #1</label>
            </div>
            <div class="col-lg-4">
            <input type="text" class="form-control" placeholder="" name="client[3][0]">
            </div>
            </div>
            <br>
            <div class="row">
            <div class="col-lg-2">
            <label class="control-label required">Guest #2</label>
            </div>
            <div class="col-lg-4">
            <input type="text" class="form-control" placeholder="" name="client[3][1]">
            </div>
            </div>
            <br>
            <div class="row">
            <div class="col-lg-2">
            <label class="control-label required">Guest #3</label>
            </div>
            <div class="col-lg-4">
            <input type="text" class="form-control" placeholder=""name="client[3][2]">
            </div>
            </div>
            <div class="dropdown-divider"></div>
            <div class="panel">
            <div class="panel-heading">
            <h3><b>Ticket Buyer</b></h3>
            </div>
            <div class="row">
            <div class="col-lg-2">
            <label class="control-label required">Title</label>
            </div>
            <div class="col-lg-4">
            <select name="buyer_title" class="form-control" data-plugin="select2"><option value="mr" selected="selected">Mr.</option><option value="dr">Dr.</option><option value="miss">Miss</option><option value="mrs">Mrs.</option><option value="ms">Ms.</option><option value="other">Other</option><option value="prof">Prof.</option><option value="rev">Rev.</option></select>
            </div>
            </div>   
            <br>
            <div class="row">
            <div class="col-lg-2">
            <label class="control-label required">Name <strong class="text-danger">*</strong></label>
            </div>
            <div class="col-lg-4">
            <input type="text" class="form-control" required="required" placeholder="Name" name="buyer_name" >
            </div>
            </div>
            <br>
            <div class="row">
            <div class="col-lg-2">
            <label class="control-label required">Email <strong class="text-danger">*</strong></label>
            </div>
            <div class="col-lg-4">
            <input type="text" class="form-control" required="required" placeholder="Email" name="buyer_email">
            </div>
            </div>
            <br>
            <div class="row">
            <div class="col-lg-2">
            <label class="control-label required">Phone <strong class="text-danger">*</strong></label>
            </div>
            <div class="col-lg-4">
            <input type="text" class="form-control" required="required" placeholder="Phone" name="buyer_phone">
            </div>
            </div>
            <br>
            <div class="row">
            <div class="col-lg-2">
            <label class="control-label required">Address <strong class="text-danger">*</strong></label>
            </div>
            <div class="col-lg-4">
            <input type="text" class="form-control" placeholder="Address" name="buyer_address" type="text">
            </div>
            </div>
            <br>
            <div class="row">
            <div class="col-lg-2">
            <label class="control-label required">Country <strong class="text-danger">*</strong></label>
            </div>
            <div class="col-lg-4">
            <select class="form-control" data-plugin="select2"id="country_id" name="buyer_country">
            <optgroup label="Please Select">
            <option value="R1">Afghanistan</option>
            <option value="R1">Albania</option>
            <option value="R1">Antigua And Barbuda</option>
            <option value="R1">Australia</option>
            <option value="R1">Bahrain</option>
            <option value="R1">Belgium</option>
            </optgroup>
            </select>
            </div>
            </div>  
            <br> 
            <div class="row">
            <div class="col-lg-2">
            <label class="control-label required">State <strong class="text-danger">*</strong></label>
            </div>
            <div class="col-lg-4">
            <select class="form-control" data-plugin="select2" id="state_id" required="required" name="buyer_state">
            <optgroup label="Please Select">
            <option value="R1">Australian Capital Territory</option>
            <option value="R1">New South Wales</option>
            <option value="R1">Northern Territory</option>
            <option value="R1">Queensland</option>
            <option value="R1">Tasmania</option>
            <option value="R1">Western Australia</option>
            </optgroup>
            </select> 
            </div>
            </div>  
            <br> 
            <div class="row">
            <div class="col-lg-2">
            <label class="control-label required">City <strong class="text-danger">*</strong></label>
            </div>
            <div class="col-lg-4">
            <select class="form-control" data-plugin="select2" id="city_id" required="required" name="buyer_city">
            <optgroup label="Please Select">
            </optgroup>  
            </select>     
            </div>
            </div>   
            <br>
            <div class="row">
            <div class="col-lg-2">
            <label class="control-label required">Zipcode<strong class="text-danger">*</strong></label>
            </div>
            <div class="col-lg-4">
            <input required="required" placeholder="Zipcode" name="buyer_zipcode" type="number" class="form-control tooltipstered">                    </div>
            </div>   
            <br>
            <div class="row">
            <div class="col-md-9">
            <button type="button" class="btn btn-primary">Save </button>
            <button type="reset" class="btn btn-default btn-outline">Cancel</button>
            </div>
            </div>
            </div>
            </div>
            </form>
            </div>
            </div>
            </div>
         </div>
      </div>         
   </div>
</div>
</div>
 </div>

@endsection
	