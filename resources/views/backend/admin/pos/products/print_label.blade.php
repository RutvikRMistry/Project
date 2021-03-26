@extends('backend.master')
@section('title',"Print Label")
@section('content')
 <!-- Top Menubar Ends Here-->
 <div class="page">
  @include('backend.partials.leftbar.shortcuts')
  <div class="page-main">
   <div class="page-header">
      <h1 class="page-title">Print Labels</h1>
   </div>
   <div style="width: 100%; padding: 30px;">
      <div class="panel-body" style="background-color: #fff; ">
         <header class="panel-heading">
            <div>
               <form>
                  <div class="panel-actions"></div>
                  <h3 class="panel-title p-10">Add products to generate Labels</h3>
         </header>
         <div class="page-search-form" role="search">
         <div class="col-lg-6">
         <div class="input-search input-search-dark">
         <i class="input-search-icon wb-search" aria-hidden="true"></i>
         <input type="text" class="form-control" id="search_product_for_label" placeholder="Enter products name to print labels" autofocus="" name="search_product">
         <button type="button" class="input-search-close icon wb-close" aria-label="Close"></button>
         </div>
         </div>
         </div><br>
         <div class="row" >
         <div class="col-lg-6">
         <h5>Products:</h5>     
         </div>
         <div class="col-lg-6">
         <h5>No. of labels:</h5>     
         </div>
         </div><br>
         <div class="row" >
         <div class="col-lg-6">
         <h3 class="example-title">Information to show in Labels:</h3> 
         </div>
         </div><br>
         <div class="row" >
         <div class="col-lg-3">
         <li class="mb-15">
         <input type="checkbox" class="icheckbox-primary" id="name" name="print[name]" value="1"
            data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
            />
         <label for="name">Product Name</label>
         </li>
         </div>
         <div class="col-lg-6">
         <li class="mb-15">
         <input type="checkbox" class="icheckbox-primary" id="variations" name="print[variations]" value="1"
            data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
            />
         <label for="variations">Product Variation (recommended)</label>
         </li>
         </div>
         <div class="col-lg-3">
         <li class="mb-15">
         <input type="checkbox" class="icheckbox-primary" name="print[price]" value="1" id="is_show_price"
            data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
            />
         <label for="is_show_price">Product Price</label>
         </li>
         </div>
         </div><br>
         <div class="row" >
         <div class="col-lg-3">
         <li class="mb-15">
         <input type="checkbox" class="icheckbox-primary" id="business_name" name="print[business_name]" value="1"
            data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
            />
         <label for="business_name">Business name</label>
         </li>
         </div></div><br>
         <div class="row" >
         <div class="col-lg-6">
         <h5>Show Price::</h5>     
         <div class="input-group input-group-icon">
         <span class="input-group-addon">
         <span class="fa fa-info" aria-hidden="true"></span>
         </span>
         <select class="form-control" id="print[price_type]" name="print[price_type]"><option value="inclusive" selected="selected">Inc. tax</option><option value="exclusive">Exc. tax</option></select>       
         </div>
         </div>
         <div class="col-lg-6">
         <h5>Barcode setting:</h5>     
         <div class="input-group input-group-icon">
         <span class="input-group-addon">
         <span class="fa fa-cog" aria-hidden="true"></span>
         </span>
         <select class="form-control" name="barcode_setting"><option value="1">20 Labels per Sheet - (8.5" x 11")</option><option value="2">30 Labels per sheet - (8.5" x 11")</option><option value="3">32 Labels per sheet - (8.5" x 11")</option><option value="4">40 Labels per sheet - (8.5" x 11")</option><option value="5">50 Labels per Sheet - (8.5" x 11")</option><option value="6">Continuous Rolls - 31.75mm x 25.4mm</option><option value="7">sd</option></select>
         </div>
         </div>
         </div><br>
         <div class="row" >
         <div class="col-md-9">
         <button type="button"  id="labels_preview"  class="btn btn-primary">Preview </button>
         </div>
         </div>
         </form>
         <div class="row"></div>
         </div>
      </div>
   </div>
       
</div>
 </div>

@endsection
	