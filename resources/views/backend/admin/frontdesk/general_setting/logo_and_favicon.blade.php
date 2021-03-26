@extends('backend.master')
@section('title',"Logo & Favicon Settings")
@section('content')
 <!-- Top Menubar Ends Here-->
 <div class="page">
    @include('backend.partials.leftbar.shortcuts')
	
	<div class="page-main">
   <div class="page-header">
      <h1 class="page-title">Logo & Fovicon</h1>
   </div>
   <div style="width: 100%; padding: 30px;">
   @include('backend.partials.flash_message')
      <div class="panel-body" style="background-color: #fff; ">
         <header class="panel-heading">
         <div>
            
               <!-- End Example Default -->
               <form  method="post" action="{{route('backend.admin.logo_and_fav_setting.update')}}" enctype="multipart/form-data">
				   {{csrf_field()}}
				<div class="card-body">
					
					<div class="form-group row">
						<div class="col-md-4 mt-5 mb-5">
							<label class=""><strong>SITE LOGO</strong></label>
							<div class="form-control input-lg h-40">
								<input type="file"  name="logo">
								<span class="text-danger">{{$errors->first('title')}}</span>
								<img src="{{general_setting()->logo}}"  style="width: 50px">
							</div>

						</div>
						<div class="col-md-4 mt-5 mb-5 ml-50">
							<label class=""><strong>SITE FAVICON</strong></label>
							<div class="form-control input-lg h-40 ">
								<input type="file" name="favicon">
								<span class="text-danger">{{$errors->first('title')}}</span>
								<img src="{{general_setting()->favicon}}" style="width: 25px" >
							</div>

						</div>
					</div>
					<div class="row mt-5 mt-30">
						<div class="col-md-10 ">
							<button  type="submit" class="btn btn-success btn-block" >Update</button>
						</div>
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
