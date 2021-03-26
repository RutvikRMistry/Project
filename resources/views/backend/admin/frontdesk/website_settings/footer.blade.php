@extends('backend.master')
@section('title',"Home Settings")
@section('content')
 <!-- Top Menubar Ends Here-->
 <div class="page">
    @include('backend.partials.leftbar.shortcuts')
	<div class="page-main">
   <div class="page-header">
      <h1 class="page-title">General (Footer Content)</h1>
   </div>
   <div style="width: 100%; padding: 30px;">
   @include('backend.partials.flash_message')
      <div class="panel-body" style="background-color: #fff; ">
         <div>
        <form action="{{route('backend.admin.frontdesk.website_setting.footer')}}" method="post">
			{{csrf_field()}}
		   <div class="row" >
               <div class="col-md-12">
                  <h5>Title 1:<span class="text-danger">*</span></h5>
                  <div class="form-group row">
                     <label class="col-md-2form-control-lg form-control-label" for="inputSizingLarge"></label>
                     <div class="col-md-12">
                       <textarea class="form-control" rows="4" id="footer_content" required name="footer_content" >{{web_setting()->general_general_section_footer_content}}</textarea>
                     <span class="text-danger">{{$errors->first('footer_content')}}</span>
					 </div>
                  </div>
               </div>
            </div>
            
            <br>
            <div class="row" >
               <div class="col-md-12">
                  <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i>&nbsp;Save </button>
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
	