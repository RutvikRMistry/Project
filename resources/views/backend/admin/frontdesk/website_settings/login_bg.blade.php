@extends('backend.master')
@section('title',"Home Settings")
@section('content')
 <!-- Top Menubar Ends Here-->
 <div class="page">
    @include('backend.partials.leftbar.shortcuts')
	<div class="page-main">
   <div class="page-header">
      <h1 class="page-title">General ( Login and breadcrumb img )</h1>
   </div>
   <div style="width: 100%; padding: 30px;">
      <div class="panel-body" style="background-color: #fff; ">
         <header class="panel-heading">
         <div>
            <div class="row" >
               <div class="form-group">
                  <div class="col-md-12">
                     <h5>Login Background Image (.jpg)</h5>
                     <div class="img-responsive">
                        <img src="http://hotels.kintudesigns.com/assets/frontend/img/general/general_section/login_bg_image.jpg" style="height: 100px">                            
                     </div>
                     <br>
                     <input type="file" id="input-file-events" class="dropify-event" data-default-file="../../assets/photos/placeholder.png"/>  
                     <input type="file" id="bg_image" name="bg_image[jpg]" class="d-none">
                  </div>
               </div>
               <br>
               <div class="form-group">
                  <div class="col-md-12">
                     <h5>Breadcrumb Image</h5>
                     <div class="img-responsive">
                        <img src="http://hotels.kintudesigns.com/assets/frontend/img/general/general_section/breadcrumb_image.jpg" style="height: 100px">                            
                     </div>
                     <br>
                     <input type="file" id="input-file-events" class="dropify-event" data-default-file="../../assets/photos/placeholder.png"/>  
                     <input type="file" id="bg_image" name="bg_image[jpg]" class="d-none">
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i>&nbsp;Save </button>
               </div>
            </div>
         </div>
      </div>            
   </div>
</div>
</div>
 </div>

@endsection
	