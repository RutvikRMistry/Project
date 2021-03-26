@extends('backend.master')
@section('title',"Edit Product")
@section('content')
 <!-- Top Menubar Ends Here-->
 <div class="page">
  @include('backend.partials.leftbar.shortcuts')
  <div class="page-main">
   <div class="page-header">
		<h1 class="page-title"> Edit new product</h1>
   </div>
   <div style="width: 100%; padding: 30px;">
	<div class="panel-body" style="background-color: #fff; ">
        <div>
        <form action="{{route('backend.admin.pos.product.update',$product->id)}}" method="post" enctype="multipart/form-data">
			{{csrf_field()}}
            <div class="row">
               <div class="col-lg-4 form-group">
                  <h5>Product Name<strong class="text-danger">*</strong></h5>
                  <input class="form-control" value="{{$product->name}}" placeholder="Product Name" name="name" type="text" id="name" required />
				  <span class="text-danger">{{$errors->first('name')}}</span>
               </div>
			 
               <div class="col-lg-4 form-group">
                  <h5>Unit<strong class="text-danger">*</strong></h5>
                  <select class="form-control" data-plugin="select2"  id="unit_id" name="unit_id" required >
                     <option value="">--Select--</option>
					@foreach($units as $unit) 
                        <option value="{{$unit->id}}" {{$product->unit_id == $unit->id ? 'selected' : ''}}>{{$unit->short_name}}</option>
                    @endforeach
                  </select>
				  <span class="text-danger">{{$errors->first('unit_id')}}</span>
               </div>
               <div class="col-lg-4">
                  <h5>SKU<strong class="text-danger">*</strong></h5>
                  <input class="form-control" placeholder="SKU" name="sku" type="text" id="sku" value="{{$product->sku}}" required>
				    <span class="text-danger">{{$errors->first('sku')}}</span>
               </div>
            </div>
            <br>
            <div class="row">
               <div class="col-lg-4">
                  <h5>Barcode Type<strong class="text-danger">*</strong></h5>
                  <select class="form-control" data-plugin="select2"  id="barcode_type" name="barcode_type" required >
                   <option value="">--Select--</option>
				   @foreach($barcode_types as $k=>$bar)
                        <option value="{{$k}}" {{$product->barcode_type == $k?'selected': ''}}>{{$bar}}</option> 
					@endforeach
					
                  </select>
				  <span class="text-danger">{{$errors->first('barcode_type')}}</span>
               </div>
               <div class="col-lg-4">
                  <div class="checkbox-custom checkbox-default">
                     <input type="checkbox"  id="enable_stock"  name="enable_stock" {{$product->enable_stock? 'checked': ''}}/>
                     <label for="enable_stock"style="padding: inherit;">Manage Stock?<br>
                     Enable stock management at product level</label>
                  </div>
               </div>
               <div class="col-lg-4">
                  <h5>Alert quantity<strong class="text-danger">*</strong></h5>
                  <input class="form-control" value="{{$product->alert_quantity}}" placeholder="Alert quantity" min="0" name="alert_quantity" type="number" id="alert_quantity" required >              
					<span class="text-danger">{{$errors->first('alert_quantity')}}</span>
			  </div>
            </div>
            <br>
            <div class="row">
               <div class="col-lg-4">
                  <h5>File Upload:<strong class="text-danger">*</strong></h5>
                  <div class="input-group input-group-file" data-plugin="inputGroupFile">
                     <input type="text" class="form-control" readonly="" />
                     <span class="input-group-btn">
                     <span class="btn btn-success btn-file">
                     <i class="icon wb-upload" aria-hidden="true"></i>&nbsp;  Browser
                     <input id="upload_image" accept="image/*" name="image" type="file"  />
					
                     </span>
                     </span>
					
                  </div>
				  <span class="text-danger">{{$errors->first('image')}}</span>
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
               <div>
                  <div class="row">
                     <div class="col-lg-4">
                        <div class="checkbox-custom checkbox-default">
                           <input type="checkbox" id="enable_sr_no" name="enable_sr_no" {{$product->enable_sr_no?'checked': ''}}
                              />
                           <label for="enable_sr_no"style="padding: inherit;">Enable Product description, IMEI or Serial<br>
                           Number</label>
                        </div>
                     </div>
                     <div class="col-lg-4">
                        <h5>Weight:</h5>
                        <input class="form-control" placeholder="Weight" name="weight" type="text" id="weight" value="{{$product->weight}}">
						<span class="text-danger">{{$errors->first('weight')}}</span>
                     </div>
                  </div>
                  <br>
                  <div class="row">
                     <div class="col-lg-3">
                        <h5>Custom Field 1:</h5>
                        <input class="form-control" placeholder="Custom Field1" name="product_custom_field1"  value="{{$product->product_custom_field1}}" type="text" id="product_custom_field1">              
                     </div>
                     <div class="col-lg-3">
                        <h5>Custom Field 2:</h5>
                        <input class="form-control" placeholder="Custom Field2" name="product_custom_field2" value="{{$product->product_custom_field2}}" type="text" id="product_custom_field2">              
                     </div>
                     <div class="col-lg-3">
                        <h5>Custom Field 3:</h5>
                        <input class="form-control" placeholder="Custom Field3" name="product_custom_field3" value="{{$product->product_custom_field3}}" type="text" id="product_custom_field3">              
                     </div>
                     <div class="col-lg-3">
                        <h5>Custom Field 4:</h5>
                        <input class="form-control" placeholder="Custom Field4" name="product_custom_field4" type="text" value="{{$product->product_custom_field4}}" id="product_custom_field4">              
                     </div>
                  </div>
                  <br>
                  <div class="row">
                     <div class="col-lg-4">
                        <h5>Product Type<strong class="text-danger">*</strong></h5>
                        <select class="form-control " data-action="add" data-product_id="0" id="type" name="type" tabindex="-1" aria-hidden="true" required >
                           <option value="">--Select--</option>
						   <option value="single" {{$product->type == 'single'?'selected': ''}}>Single</option>
                           <option value="variable" {{$product->type == 'variable'?'selected': ''}}>Variable</option>
                        </select>
						<span class="text-danger">{{$errors->first('type')}}</span>
                     </div>
                  </div>
                  <br>
                  <div class="row">
                     <div class="col-md-9">
                        <button id="opening_stock_button" type="submit" value="submit_n_add_opening_stock" class="btn btn-success submit_product_form">Save &amp; Add Opening Stock</button>
                        <button type="submit" value="submit" class="btn btn-primary submit_product_form">Update</button>
                     </div>
                  </div>
               </div>
            </header>
		</form>
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

@endsection
	