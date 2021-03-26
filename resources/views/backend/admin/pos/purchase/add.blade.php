@extends('backend.master')
@section('title',"Add Purchase")
@section('content')
 <!-- Top Menubar Ends Here-->
 <div class="page">
  @include('backend.partials.leftbar.shortcuts')
  <div class="page-main">
   <div class="page-header">
      <h1 class="page-title">Add Purchase </h1>
   </div>
   <div style="width: 100%; padding: 30px;">
      <div class="panel-body" style="background-color: #fff; ">
         <header class="panel-heading">
            <div>
            <form action="" method="post" enctype="multipart/form-data">
			{{csrf_field()}}
               <div class="row">
                  <div class="col-lg-4">
                     <h5>Supplier<strong class="text-danger">*</strong></h5>
                     <div class="form-group">
                        <div class="input-group input-group-icon">
                           <span class="input-group-addon">
                           <span class="icon wb-user" aria-hidden="true"></span>
                           </span>
                           <select class="form-control" required="" id="supplier_id" name="contact_id">
                              <option value="">--Select--</option>
								@foreach($contact as $con)
									<option value="{{$con->id}}">{{$con->name}}</option>
                                @endforeach
                              </optgroup>
                           </select>
                           <a href="{{route('backend.admin.pos.contact_book.supplier.add')}}"><span class="input-group-addon btn btn-primary" style="border-radius:25%">+</span></a>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4">
                     <h5>Reference No:</h5>
                     <input class="form-control" name="ref_no" type="text" id="ref_no" value="{{old('ref_no')}}">
                  </div>
                  <div class="col-lg-4">
                     <h5>Purchase Date<strong class="text-danger">*</strong></h5>
                     <div class="input-group">
                        <span class="input-group-addon">
                        <i class="icon wb-calendar" aria-hidden="true"></i>
                        </span>
                        <input type="text" class="form-control" data-plugin="datepicker" id="transaction_date" value="{{date('d/m/y'),old('transaction_date')}}">
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-lg-4">
                     <h5>Business Location:<strong class="text-danger">*</strong></h5>
                     <select class="form-control" data-plugin="select2" id="location_id" name="location_id">
						<option value="">--Select--</option>
						@foreach($location as $loc)
                           <option value="{{$loc->id}}">{{$loc->name}}</option>
						@endforeach
                     </select>
                  </div>
                  <div class="col-lg-4">
                     <h5>File Upload</h5>
                     <div class="input-group input-group-file" data-plugin="inputGroupFile">
                        <input type="text" class="form-control" readonly="">
                        <span class="input-group-btn">
                        <span class="btn btn-success btn-file">
                        <i class="icon wb-upload" aria-hidden="true"></i>&nbsp;  Browser
                        <input id="upload_document" name="document" type="file">
                        </span>
                        </span>
                     </div>
                     <h5>Max File size: 1MB</h5>
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
               <div style="width: 50%; float: right;">
                  <div class="btn-group" aria-label="Button group with nested dropdown" role="group" style="float: right; padding-top: 10px;">
                     <div class="tablesaw-sortable-switch tablesaw-bar-section">
                     </div>
                     <a href="{{route('backend.admin.pos.purchase.add_product')}}">
                     <button type="button" class="btn btn-primary" style="margin: auto;"><i class="icon wb-plus mr-10" aria-hidden="true"></i>Add New Product </button>
                     </a>    
                  </div>
               </div>
               <div>
                  <div class="page-search-form" role="search">
                     <div class="col-lg-6">
                        <div class="input-search input-search-dark">
                           <i class="input-search-icon wb-search" aria-hidden="true"></i>
                           <input type="text" class="form-control" id="search_product" placeholder="Enter Product name / SKU / Scan bar code" autofocus="" name="search_product" >
                           <button type="button" class="input-search-close icon wb-close" aria-label="Close"></button>
                        </div>
                     </div>
                  </div>
                  <table class="table table-hover dataTable table-striped w-full dtr-inline" data-plugin="dataTable" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info" style="width: 1783px;">
                     <thead>
                        <tr>
                           <th>#</th>
                           <th>Product Name</th>
                           <th>Purchase Quantity </th>
                           <th>Unit Cost (Before Discount) </th>
                           <th>Discount Percent  </th>
                           <th>Unit Cost (Before Tax)  </th>
                           <th>Line Total  </th>
                           <th>Unit Selling Price  </th>
                           <th>MFG Date / EXP Date </th>
                           <th>Delete</th>
                        </tr>
                     </thead>
                  </table>
                  <div class="dropdown-divider"></div>
                  <div class="row">
                     <div class="col-lg-4">
                        <h5>Net Total Amount: 0.00</h5>
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
                        <div class="row">
                           <div class="col-lg-4">
                              <h5>Discount Type:</h5>
                              <select class="form-control" data-plugin="select2" id="discount_type" name="discount_type">
                                 <optgroup label="Please Select">
                                    <option value="fixed" {{old('discount_type') == 'fixed'?'selected': ''}}>Fixed</option>
                                    <option value="percentage" {{old('discount_type') == 'percentage'?'selected': ''}}>Percentage</option>
                                 </optgroup>
                              </select>
                           </div>
                           <div class="col-lg-4">
                              <h5>Discount Amount:</h5>
                              <input class="form-control input_number" required="" name="discount_amount" type="text" value="{{old('discount_amount')}}" id="discount_amount">
                           </div>
                           <div class="col-lg-4">
                              <h5>  Discount:(-) 0.00</h5>
                           </div>
                        </div>
                        <br>
                        <div class="row">
                           <div class="col-lg-4">
                              <h5>Purchase Tax:</h5>
                              <select class="form-control" data-plugin="select2" name="tax_id" id="tax_id">
							  <option value="">--Select--</option>
                                 @foreach($taxes as $tax)
									<option value="{{ $tax->id }}" data-tax_amount="{{ $tax->amount }}" data-tax_type="{{ $tax->calculation_type }}">{{ $tax->name }}</option>
								@endforeach
                              </select>
                           </div>
                           <div class="col-lg-4">
                              <h5></h5>
                           </div>
                           <div class="col-lg-4">
                              <h5>Purchase Tax:(+) 0.00</h5>
                           </div>
                        </div>
                        <div class="dropdown-divider"></div>
                        <div class="row">
                           <div class="col-lg-4">
                              <h5>Shipping Details:</h5>
                              <input class="form-control" name="shipping_details" type="text" id="shipping_details" value="{{old('shipping_details')}}" >             
                           </div>
                           <div class="col-lg-4">
                              <h5></h5>
                           </div>
                           <div class="col-lg-4">
                              <h5>(+) Additional Shipping charges:</h5>
                              <input class="form-control input_number" name="shipping_charges" type="text" value="{{old('shipping_charges')}}" id="shipping_charges">
                           </div>
                        </div>
                        <br>
                        <div class="row">
                           <div class="col-lg-4">
                              <h5></h5>
                           </div>
                           <div class="col-lg-4">
                              <h5></h5>
                           </div>
                           <div class="col-lg-4">
                              <h5>  Purchase Total: 0.00 $</h5>
                           </div>
                        </div>
                        <div class="dropdown-divider"></div>
                        <div class="row">
                           <div class="col-md-12">
                              <h5>Additional Notes:</h5>
                              <div class="form-group row">
                                 <label class="col-md-2form-control-lg form-control-label" for="inputSizingLarge"></label>
                                 <div class="col-md-12">
                                    <textarea class="form-control" rows="3" name="additional_notes" cols="50" id="additional_notes">{{old('additional_notes')}}</textarea>
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
                                    <input type="text" class="form-control" required="" id="amount_0" placeholder="Amount" name="payment[0][amount]" value="{{old('payment[0][amount]')}}">
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4">
                              <h5>Payment Method<strong class="text-danger">*</strong></h5>
                              <div class="form-group">
                                 <div class="input-group input-group-icon">
                                    <span class="input-group-addon">
                                    <span class="icon wb-user" aria-hidden="true"></span>
                                    </span>
                                    <select class="form-control col-md-12 payment_types_dropdown"  id="method_0" style="width:100%;" name="payment[0][method]">
										<option value="">--Select--</option>
                                       <option value="cash" {{old('payment[0][method]') == 'cash'?'selected' : ''}}>Cash</option>
                                       <option value="card" {{old('payment[0][method]') == 'card'?'selected' : ''}}>Card</option>
                                       <option value="cheque" {{old('payment[0][method]') == 'cheque'?'selected' : ''}}>Cheque</option>
                                       <option value="bank_transfer" {{old('payment[0][method]') == 'bank_transfer'?'selected' : ''}}>Bank Transfer</option>
                                       <option value="other" {{old('payment[0][method]') == 'other'?'selected' : ''}}>Other</option>
                                       <option value="custom_pay_1"{{old('payment[0][method]') == 'custom_pay_1'?'selected' : ''}}>Custom Payment 1</option>
                                    </select>
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
                        <br>
                        <div class="row">
                           <div class="col-lg-4">
                              <h5></h5>
                           </div>
                           <div class="col-lg-4">
                              <h5></h5>
                           </div>
                           <div class="col-lg-4">
                              <h5>  Purchase Due: 0.00 $</h5>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-9">
                              <button type="submit"  id="submit_purchase_form" class="btn btn-primary fa fa-save">&nbsp;Save </button>
                           </div>
                        </div>
                  </header>
			</form>
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
 </div>

@endsection
	