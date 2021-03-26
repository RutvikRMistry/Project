@extends('backend.master')
@section('title',"FB Settings")
@section('content')
 <!-- Top Menubar Ends Here-->
 <div class="page">
    @include('backend.partials.leftbar.shortcuts')
	<div class="page-main">
   <div class="page-header">
      <h1 class="page-title">General ( Fb comment script )</h1>
   </div>
   <div style="width: 100%; padding: 30px;">
   @include('backend.partials.flash_message')
      <div class="panel-body" style="background-color: #fff; ">
		<form method="post" action="{{route('backend.admin.frontdesk.website_setting.fb')}}">
			{{csrf_field()}}
		 <header class="panel-heading">
         <div>
            <div class="row">
               <div class="col-md-12">
                  <h5>Facebook Comment Script id:<span class="text-danger">*</span></h5>
                  <div class="form-group row">
                     <label class="col-md-2form-control-lg form-control-label" for="inputSizingLarge"></label>
                     <div class="col-md-12">
                        <input type="text" class="form-control form-control-lg" id="fb_comment_script" required name="fb_comment_script" 
                           value="{{web_setting()->general_general_section_fb_comment_script}}">
						   <span class="text-danger">{{$errors->first('fb_comment_script')}}</span>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-9">
                  <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i>&nbsp;Update</button>
               </div>
            </div>
         </div>
		</form>	 
      </div>
           
   </div>
</div>
</div>
 </div>

@endsection
	