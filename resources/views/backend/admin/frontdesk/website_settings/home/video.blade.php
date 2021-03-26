@extends('backend.master')
@section('title',"Home Settings")
@section('content')
 <!-- Top Menubar Ends Here-->
 <div class="page">
    @include('backend.partials.leftbar.shortcuts')
	<div class="page-main">
   <div class="page-header">
      <h1 class="page-title">Home ( Video section )</h1>
   </div>
   <div style="width: 100%; padding: 30px;">
   @include('backend.partials.flash_message')
      <div class="panel-body" style="background-color: #fff; ">
         <div>
            <form action="{{route('backend.admin.frontdesk.website_setting.home.video')}}" method="post" enctype="multipart/form-data">
				{{csrf_field()}}
			  <div class="row">
                  <div class="col-md-12">
                     <h5>Title:<span class="text-danger">*</span> </h5>
					
                     <div class="form-group row">
                        <label class="col-md-2form-control-lg form-control-label" for="inputSizingLarge"></label>
                        <div class="col-md-12">
                           <input type="text" class="form-control form-control-lg" id="title" name="title" value="{{web_setting()->home_video_section_title}}" required >
                        </div>
                     </div>
					 <span class="text-danger">{{$errors->first('title')}}</span>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-12">
                     <h5> Sub Title:<span class="text-danger">*</span></h5>
                     <div class="form-group row">
                        <label class="col-md-2form-control-lg form-control-label" for="inputSizingLarge"></label>
                        <div class="col-md-12">
                           <input type="text" class="form-control form-control-lg" id="sub_title" name="sub_title" required value="{{web_setting()->home_video_section_sub_title}}">      
                        </div>
                     </div>
					 <span class="text-danger">{{$errors->first('sub_title')}}</span>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-12">
                     <h5>Video link:<span class="text-danger">*</span></h5>
                     <div class="form-group row">
                        <label class="col-md-2form-control-lg form-control-label" for="inputSizingLarge"></label>
                        <div class="col-md-12">
                           <input type="text" class="form-control form-control-lg" id="video_link" name="video_link" required value="{{web_setting()->home_video_section_video_link}}">
                        </div>
                     </div>
					 <span class="text-danger">{{$errors->first('video_link')}}</span>
                  </div>
               </div>
               <div class="row" >
                  <div class="form-group">
                     <div class="col-md-12">
                        <h5>Image:</h5>
                        <div class="img-responsive">
                           <img src="http://hotels.kintudesigns.com/assets/frontend/img/home/banner_section/banner_image.jpg" style="height: 100px">
                        </div>
                        <br>
                        <input type="file" id="input-file-events" class="dropify-event" data-default-file="../../assets/photos/placeholder.png"/>  
                        <input type="file"id="bg_image" name="bg_image[jpg]"  class="d-none">
                     </div>
                  </div>
               </div>
               <br>
               <div class="row">
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

@endsection
	