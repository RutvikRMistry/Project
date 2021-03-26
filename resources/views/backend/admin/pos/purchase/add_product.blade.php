@extends('backend.master')
@section('title',"Add Purchase Product")
@section('content')
 <!-- Top Menubar Ends Here-->
 <div class="page">
  @include('backend.partials.leftbar.shortcuts')
  <div class="page-main">
   <div class="page-header">
      <h1 class="page-title">Add New Product</h1>
   </div>
   <div style="width: 100%; padding: 30px;">
      <div class="panel-body" style="background-color: #fff; ">
         <div>
            <div class="row">
               <div class="col-lg-4">
                  <h5>Product Name<strong class="text-danger">*</strong></h5>
                  <input class="form-control" required="" placeholder="Product Name" name="name" type="text" value="{{old('name')}}" id="name">
               </div>
               <div class="col-lg-4">
                  <h5>Brand:</h5>
                  <select class="form-control" data-plugin="select2" name="brand_id">
                     <option value="">--Select--</option>
					@foreach($brands as $brand)
                        <option value="{{$brand->id}}">{{$brand->name}}</option>
					@endforeach
                  </select>
               </div>
               <div class="col-lg-4">
                  <h5>Unit<strong class="text-danger">*</strong></h5>
                  <select class="form-control" data-plugin="select2" required="" id="unit_id" name="unit_id">
						<option value="">--Select--</option>
					@foreach($units as $unit)
                        <option value="{{$unit->id}}">{{$unit->short_name}}</option>
					@endforeach
                    
                  </select>
               </div>
            </div>
            <br>
            <div class="row">
               <div class="col-lg-4">
                  <h5>SKU:*</h5>
                  <input class="form-control" placeholder="SKU" name="sku" type="text" id="sku">
               </div>
               <div class="col-lg-4">
                  <h5>Category:</h5>
                  <select class="form-control" data-plugin="select2" id="category_id" name="category_id">
                     <optgroup label="Please Select">
                        <option value="1">Chesse Rings</option>
                     </optgroup>
                  </select>
               </div>
               <div class="col-lg-4">
                  <h5>Barcode Type<strong class="text-danger">*</strong></h5>
                  <select class="form-control select2 select2-hidden-accessible" required="" id="barcode_type" name="barcode_type" tabindex="-1" aria-hidden="true">
                     <option value="C128" selected="selected">Code 128 (C128)</option>
                     <option value="C39">Code 39 (C39)</option>
                     <option value="EAN13">EAN-13</option>
                     <option value="EAN8">EAN-8</option>
                     <option value="UPCA">UPC-A</option>
                     <option value="UPCE">UPC-E</option>
                  </select>
               </div>
            </div>
            <br>
            <div class="row">
               <div class="col-lg-4">
                  <div class="checkbox-custom checkbox-default">
                     <input type="checkbox" id="enable_stock" checked="checked" name="enable_stock"  checked 
                        />
                     <label for="enable_stock"style="padding: inherit;">Manage Stock?<br>
                     Enable stock management at product level</label>
                  </div>
               </div>
               <div class="col-lg-4">
                  <h5>Alert quantity<strong class="text-danger">*</strong></h5>
                  <input class="form-control" required="" placeholder="Alert quantity" min="0" name="alert_quantity" type="number" id="alert_quantity">              
               </div>
               <div class="col-lg-4">
                  <h5>Applicable Tax:*</h5>
                  <select class="form-control" data-plugin="select2"id="tax" name="tax">
                     <optgroup label="Please Select">
                        <option value="1">None</option>
                        <option value="2">Asdf</option>
                     </optgroup>
                  </select>
               </div>
            </div>
            <br>
            <div class="row">
               <div class="col-lg-4">
                  <h5>Selling Price Tax Type<strong class="text-danger">*</strong></h5>
                  <select class="form-control " data-plugin="select2" required="" id="tax_type" name="tax_type" tabindex="-1" aria-hidden="true">
                     <option value="inclusive">Inclusive</option>
                     <option value="exclusive" selected="selected">Exclusive</option>
                  </select>
               </div>
               <div class="col-lg-4">
                  <div class="checkbox-custom checkbox-default">
                     <input type="checkbox" id="inputBasicRemember" name="enable_sr_no"  checked 
                        />
                     <label for="inputBasicRemember"style="padding: inherit;">Enable Product description, IMEI or Serial<br>
                     Number</label>
                  </div>
               </div>
               <div class="col-lg-4">
                  <h5>Expires in:</h5>
                  <div class="row">
                     <div class="col-md-6" style="padding: inherit;">
                        <input type="text" class="form-control" name="expiry_period" type="text" id="expiry_period"placeholder="Expiry period">
                     </div>
                     <div class="col-md-6"style="margin: inherit;padding: inherit;">
                        <select class="form-control" data-plugin="select2" id="expiry_period_type" name="expiry_period_type">
                           <option value="R1">Months</option>
                           <option value="R2">Days</option>
                        </select>
                     </div>
                  </div>
               </div>
            </div>
            <br>
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

@endsection
	