@extends('backend.master')
@section('title',"Add Team")
@section('content')
 <!-- Top Menubar Ends Here-->
 <div class="page">
    @include('backend.partials.leftbar.shortcuts')
	<div class="page-main">
   <div class="page-header">
      <h1 class="page-title">Add Team</h1>
   </div>
   <div style="width: 100%; padding: 30px;">
      <div class="panel-body" style="background-color: #fff; ">
         <div>
            <form action="{{route('backend.admin.frontdesk.website_setting.home.team')}}" method="post" enctype="multipart/form-data">
				{{csrf_field()}}
			<div class="row" >
               <div class="col-md-12">
                  <h5>Name:<span class="text-danger">*</span></h5>
                  <div class="form-group row">
                     <label class="col-md-2form-control-lg form-control-label" for="inputSizingLarge"></label>
                     <div class="col-md-12">
                        <input type="text" class="form-control form-control-lg" id="title_1" name="title_1"
                           placeholder="Enter here......." value="{{old('title_1')}}" required>
                     </div>
					 <span class="text-danger">{{$errors->first('title_1')}}</span>
                  </div>
               </div>
            </div>
            <div class="row" >
               <div class="col-md-12">
                  <h5>Title:<span class="text-danger">*</span></h5>
                  <div class="form-group row">
                     <label class="col-md-2form-control-lg form-control-label" for="inputSizingLarge"></label>
                     <div class="col-md-12">
                        <input type="text" class="form-control form-control-lg" id="title_2" name="title_2" 
                           placeholder="Enter here......." value="{{old('title_2')}}" required>
                     </div>
					 <span class="text-danger">{{$errors->first('title_2')}}</span>
                  </div>
               </div>
            </div>
            
            <div class="row" >
               <div class="form-group">
                  <div class="col-md-12">
                     <h5>Image:<span class="text-danger">*</span></h5>
                     <div class="img-responsive">
                        <img src="http://hotels.kintudesigns.com/assets/frontend/img/home/banner_section/banner_image.jpg" style="height: 100px">
                     </div>
                     <br>
                     <input type="file" name="banner_image" id="input-file-events" class="dropify-event" data-default-file="../../assets/photos/placeholder.png" value="{{old('banner_image')}}" />  
                   
                  </div>
				  <span class="text-danger">{{$errors->first('banner_image')}}</span>
               </div>
            </div>
            <br/>
			<h4>Social Links</h4>
			<div class="row" >
               <div class="col-md-12">
                  <h5>Facebook</h5>
                  <div class="form-group row">
                     <label class="col-md-2form-control-lg form-control-label" for="inputSizingLarge"></label>
                     <div class="col-md-12">
                        <input type="text" class="form-control form-control-lg" id="fb_link" name="fb_link" 
                           placeholder="Facebook Link">
                     </div>
                  </div>
               </div>
            </div>
			<div class="row" >
               <div class="col-md-12">
                  <h5>Twitter</h5>
                  <div class="form-group row">
                     <label class="col-md-2form-control-lg form-control-label" for="inputSizingLarge"></label>
                     <div class="col-md-12">
                        <input type="text" class="form-control form-control-lg" id="tw_link" name="tw_link" 
                           placeholder="Twitter Link">
                     </div>
                  </div>
               </div>
            </div>
			<div class="row" >
               <div class="col-md-12">
                  <h5>Linkedin</h5>
                  <div class="form-group row">
                     <label class="col-md-2form-control-lg form-control-label" for="inputSizingLarge"></label>
                     <div class="col-md-12">
                        <input type="text" class="form-control form-control-lg" id="ln_link" name="ln_link" 
                           placeholder="Linkedin Link">
                     </div>
                  </div>
               </div>
            </div>
			<div class="row" >
               <div class="col-md-12">
                  <h5>Google +</h5>
                  <div class="form-group row">
                     <label class="col-md-2form-control-lg form-control-label" for="inputSizingLarge"></label>
                     <div class="col-md-12">
                        <input type="text" class="form-control form-control-lg" id="gp_link" name="gp_link" 
                           placeholder="Google+ Link">
                     </div>
                  </div>
               </div>
            </div>
			
			<br/>
            <div class="row" >
               <div class="col-md-12">
                  <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i>&nbsp;Save </button>
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
	