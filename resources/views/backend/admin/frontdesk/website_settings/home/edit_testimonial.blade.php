@extends('backend.master')
@section('title',"Testimonials")
@section('content')
 <!-- Top Menubar Ends Here-->
 <div class="page">
    @include('backend.partials.leftbar.shortcuts')
	<div class="page-main">
   <div class="page-header">
      <h1 class="page-title">Home ( Testimonial section (Edit))</h1>
   </div>
   <div style="width: 100%; padding: 30px;">
      <div class="panel-body" style="background-color: #fff; ">
         <div>
            <form action="{{route('backend.admin.frontdesk.website_setting.home.testimonial.edit',$clientfeed->id)}}" method="post" enctype="multipart/form-data">
				{{csrf_field()}}
			<div class="row" >
               <div class="col-lg-12">
                  <h5>Name:<span class="text-danger">*</span></h5>
                  <input type="text" class="form-control" value="{{$clientfeed->name}}" id="name" name="name" required>
				  @if($errors->any())
							<p class="text-danger">{{$errors->first('name')}}</p>
						@endif
               </div>
            </div>
            <br>
            <div class="row" >
               <div class="col-lg-12">
                  <h5>Title:<span class="text-danger">*</span></h5>
                  <input type="text" class="form-control" id="title" name="title" value="{{$clientfeed->title}}" required>
				   @if($errors->any())
							<p class="text-danger">{{$errors->first('title')}}</p>
						@endif
               </div>
            </div>
            <br>
            <div class="row" >
               <div class="col-lg-12">
                  <h5>Feedback:<span class="text-danger">*</span></h5>
                  <div class="form-group row">
                     <label class="col-md-2form-control-lg form-control-label" for="inputSizingLarge"></label>
                     <div class="col-md-12">
                        <input type="text" class="form-control form-control-lg"  id="feed" name="feed" value="{{$clientfeed->feed}}" required >
						 @if($errors->any())
							<p class="text-danger">{{$errors->first('feed')}}</p>
						@endif
					 </div>
                  </div>
               </div>
            </div>
            <br>
            <div class="row" >
               <div class="col-lg-12">
                  <h5 >Image:<span class="text-danger">*</span></h5>
                  <input type="file" class="form-control" id="image" name="image" />
				  @if($errors->any())
							<p class="text-danger">{{$errors->first('image')}}</p>
						@endif
               </div>
            </div>
            <br>
            <div class="row" >
               <div class="col-lg-12">
                  <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i>&nbsp;Update </button>
                  <button type="reset" class="btn btn-default btn-outline"><i class="fa fa-refresh"></i>&nbsp;Reset</button>
               </div>
            </div>
         </div>
      </div>           
   </div>
</div>
</div>
 </div>

@endsection
	