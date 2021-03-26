@extends('backend.master')
@section('title',"Gallery Section")
@section('content')
 <!-- Top Menubar Ends Here-->
 <div class="page">
    @include('backend.partials.leftbar.shortcuts')
	<div class="page-main">
	   <div class="page-header">
		  <h1 class="page-title">Gallery ( Gallery section ) Edit</h1>
	   </div>
	   <div style="width: 100%; padding: 30px;">
		  <div class="panel-body" style="background-color: #fff; ">
			 <div>
				<form action="{{route('admin.web_setting.gallery.gallery-section.update',$gallery->id)}}" method="post" enctype="multipart/form-data">
					{{csrf_field()}}
				   <div class="row" >
					  <div class="col-lg-12 ">
						 <h5 >Category:<span class="text-danger">*</span></h5>
						 <select class="form-control" name="category_id" required>
							<option value="">Select</option>
							@foreach(\App\Model\Frontdesk\WebSetting\WebGalleryCategory::get() as $cat)
								<option value="{{$cat->id}}" {{$cat->id === $gallery->category_id?'selected':''}}>{{$cat->name}}</option>
							@endforeach
						 </select>
					  </div>
				   </div>
				   <br>
				   <div class="row" >
					  <div class="col-lg-12 ">
						 <h5 >Type:<span class="text-danger">*</span></h5>
						 <select class="form-control" name="type" required>
							<option value="">--Select--</option>
							<option value="image"{{'image' === $gallery->type?'selected':''}}  >Image</option>
							<option value="url" {{'url' === $gallery->type?'selected':''}} >Url</option>
							<option value="video" {{'video' === $gallery->type?'selected':''}}>Video</option>
						 </select>
					  </div>
				   </div>
				   <br>
				   <div class="row" >
					  <div class="col-lg-12 ">
						 <h5 >Link:<span class="text-danger">*</span></h5>
						 <input type="text" class="form-control" id="link" name="link" value="{{$gallery->link}}" required>
					  </div>
				   </div>
				   <br>
				   <div class="row" >
					  <div class="col-lg-12 ">
						 <h5 >Image:<span class="text-danger">*</span></h5>
						 <input type="file" class="form-control" id="image" name="image">
					  </div>
				   </div>
				   <br>
				   <div class="row" >
					  <div class="col-lg-12 ">
						 <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i>&nbsp;Update </button>
						 <button type="reset" class="btn btn-default btn-outline"><i class="fa fa-refresh"></i>&nbsp;Reset</button>
					  </div>
				   </div>
				</form>
			 </div>
		  </div>            
	   </div>
	</div>
 </div>

@endsection
	