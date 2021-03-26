@extends('backend.master')
@section('title',"Home Settings")
@section('content')
 <!-- Top Menubar Ends Here-->
 <div class="page">
    @include('backend.partials.leftbar.shortcuts')
	<div class="page-main">
   <div class="page-header">
      <h1 class="page-title">Home ( Room section )</h1>
   </div>
   <div style="width: 100%; padding: 30px;">
   @include('backend.partials.flash_message')
      <div class="panel-body" style="background-color: #fff; ">
         <header class="panel-heading">
         <div>
			<form action="{{route('backend.admin.frontdesk.website_setting.home.our_room')}}" method="post" enctype="multipart/form-data">
				{{csrf_field()}}
            <div class="row">
               <div class="col-md-12">
                  <h5>Title:<span class="text-danger">*</span></h5>
                  <div class="form-group row">
                     <label class="col-md-2form-control-lg form-control-label" for="inputSizingLarge"></label>
                     <div class="col-md-12">
                        <input type="text" class="form-control form-control-lg" id="title" name="title"
                           value="{{web_setting()->home_room_section_title}}" required >
						   
                     </div>
					 <span class="text-danger">{{$errors->first('title')}}</span>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <h5>Sub Title:<span class="text-danger">*</span> </h5>
                  <div class="form-group row">
                     <label class="col-md-2form-control-lg form-control-label" for="inputSizingLarge"></label>
                     <div class="col-md-12">
                        <input type="text" class="form-control form-control-lg" id="title_sub" name="title_sub"
                           value="{{web_setting()->home_room_section_title_sub}}" required>
                     </div>
					 <span class="text-danger">{{$errors->first('title_sub')}}</span>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-9">
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
	