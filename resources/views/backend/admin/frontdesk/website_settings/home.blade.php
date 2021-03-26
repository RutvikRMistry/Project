@extends('backend.master')
@section('title',"Home Settings")
@section('content')
 <!-- Top Menubar Ends Here-->
 <div class="page">
    @include('backend.partials.leftbar.shortcuts')
	<div class="page-main">
   <div class="page-header">
      <h1 class="page-title">Home (Banner Section)</h1>
   </div>
   <div style="width: 100%; padding: 30px;">
   @include('backend.partials.flash_message')
      <div class="panel-body" style="background-color: #fff; ">
         <div>
            <form action="{{route('backend.admin.frontdesk.website_setting.home.update')}}" method="post" enctype="multipart/form-data">
			{{csrf_field()}}
            <div class="row" >
               <div class="col-md-12">
                  <h5>Title 1:<span class="text-danger">*</span></h5>
                  <div class="form-group row">
                     <label class="col-md-2form-control-lg form-control-label" for="inputSizingLarge"></label>
                     <div class="col-md-12">
                      {{--  <input type="text" class="form-control form-control-lg" id="title_1" name="title_1"
							value="{{web_setting()->home_banner_section_title_1}}" required>--}}
                     </div>
					 <span class="text-danger">{{$errors->first('title_1')}}</span>
                  </div>
               </div>
            </div>
            <div class="row" >
               <div class="col-md-12">
                  <h5>Title 2:<span class="text-danger">*</span></h5>
                  <div class="form-group row">
                     <label class="col-md-2form-control-lg form-control-label" for="inputSizingLarge"></label>
                     <div class="col-md-12">
                        {{--<input type="text" class="form-control form-control-lg" id="title_2" name="title_2" 
                           value="{{web_setting()->home_banner_section_title_2}}" required>--}}
                     </div>
					 <span class="text-danger">{{$errors->first('title_2')}}</span>
                  </div>
               </div>
            </div>
            <div class="row" >
               <div class="col-md-12">
                  <h5>Title 3:<span class="text-danger">*</span></h5>
                  <div class="form-group row">
                     <label class="col-md-2form-control-lg form-control-label" for="inputSizingLarge"></label>
                     <div class="col-md-12">
                       {{-- <input type="text" class="form-control form-control-lg" id="title_3" name="title_3"
                           value="{{web_setting()->home_banner_section_title_3}}" required />--}}
                     </div>
					 <span class="text-danger">{{$errors->first('title_3')}}</span>
                  </div>
               </div>
            </div>
            <div class="row" >
               <div class="form-group">
                  <div class="col-md-12">
                     <h5>Image:</h5>
                     <div class="img-responsive">
                        <img src="http://hotels.kintudesigns.com/assets/frontend/img/home/banner_section/banner_image.jpg" style="height: 100px">
                     </div>
                     <br/>
                     <input type="file" id="input-file-events" class="dropify-event" data-default-file="../../assets/photos/placeholder.png"/>  
                     <input type="file" id="banner_image" name="banner_image[jpg]" class="d-none" />
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
 

@endsection
	