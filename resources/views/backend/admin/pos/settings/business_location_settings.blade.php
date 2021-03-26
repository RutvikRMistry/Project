@extends('backend.master')
@section('title',"Business location Settings")
@section('content')
 <!-- Top Menubar Ends Here-->
 <div class="page">
	
	<div class="page-main">
   <div class="page-header">
      <h1 class="page-title">Business location Settings - POS</h1>
   </div>
   <div style="width: 100%; padding: 30px;">
   @include('backend.partials.flash_message')
      <div class="panel-body" style="background-color: #fff; ">
         <header class="panel-heading">
        <div>
		<form action="{{route('backend.admin.pos.setting.business_location.setting.update_setting',$loc->id)}}" method="post">
			{{csrf_field()}}
            <div class="row">
               <h3 class="panel-title p-10">Receipt Settings <small class="text-muted">All receipt related settings for this location</small></h3>
            </div>
            <br>
            <div class="row">
               <div class="col-lg-6">
                  <h5>Auto print invoice after finalizing:</h5>
				  @php
					//echo $Location->id;
				  @endphp
                  <div class="form-group">
                     <div class="input-group input-group-icon">
                        <span class="input-group-addon">
                        <span class="fa fa-file-text-o" aria-hidden="true"></span>
                        </span>
                        <select class="form-control" data-plugin="select2" name="print_receipt_on_invoice">
						<option value="">--Select--</option>
                           <option value="1" {{$loc->print_receipt_on_invoice == '1'?'selected':''}}>Yes</option>
                           <option value="0" {{$loc->print_receipt_on_invoice == '0'?'selected':''}}>No</option>
                        </select>
                     </div>
                  </div>
               </div>
               <div class="col-lg-6">
                  <h5>Receipt Printer Type:*</h5>
                  <div class="form-group">
                     <div class="input-group input-group-icon">
                        <span class="input-group-addon">
                        <span class="fa fa-print" aria-hidden="true"></span>
                        </span>
                        <select class="form-control" data-plugin="select2" name="receipt_printer_type">
                           <option value="">--select--</option>
                              <option value="browser" {{$loc->receipt_printer_type == 'browser'?'selected':''}}>Browser Based Printing</option>
                              <option value="printer" {{$loc->receipt_printer_type == 'printer'?'selected':''}}>User Configured Printing</option>
                        </select>
                     </div>
                  </div>
               </div>
            </div>
            <!-- End Panel Basic -->
            <div class="row">
               <div class="col-lg-6">
                  <h5>Invoice layout:*</h5>
                  <div class="form-group">
                     <div class="input-group input-group-icon">
                        <span class="input-group-addon">
                        <span class="fa fa-info" aria-hidden="true"></span>
                        </span>
                        <select class="form-control" data-plugin="select2" name="invoice_layout_id">
                          <option value="">--Select--</option>
                              <option value="2"{{$loc->invoice_layout_id == '2'?'selected':''}}>None</option>
                              <option value="1"{{$loc->invoice_layout_id == '1'?'selected':''}}>Default</option>
                        </select>
                     </div>
                  </div>
               </div>
               <div class="col-lg-6">
                  <h5>Invoice scheme:* </h5>
                  <div class="form-group">
                     <div class="input-group input-group-icon">
                        <span class="input-group-addon">
                        <span class="fa fa-info" aria-hidden="true"></span>
                        </span>
                        <select class="form-control" data-plugin="select2" name="invoice_scheme_id">
                          <option value="">--Select--</option>
                              <option value="2" {{$loc->invoice_scheme_id == '2'?'selected':''}}>None</option>
                              <option value="1"{{$loc->invoice_scheme_id == '1'?'selected':''}}>Default</option>
                        </select>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-9">
                  <button type="submit" class="btn btn-primary">Update </button>
               </div>
            </div>
		</form>
         </div>
      </div>       
   </div>
</div>
</div>
 </div>

@endsection
	