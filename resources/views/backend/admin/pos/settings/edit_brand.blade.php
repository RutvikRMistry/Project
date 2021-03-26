@extends('backend.master')
@section('title',"Edit Brand")
@section('content')
 <!-- Top Menubar Ends Here-->
 <div class="page">
	@include('backend.partials.leftbar.shortcuts')
	<div class="page-main">
   <div class="page-header">
      <h1 class="page-title">Edit Brand</h1>
   </div>
   <div style="width: 100%; padding: 30px;">
      <div class="panel-body" style="background-color: #fff; ">
         <header class="panel-heading">
        <div>
		<form action="{{route('backend.admin.pos.setting.brand.update',$brand->id)}}" method="post">
			{{csrf_field()}}
            <div class="row">
               <div class="col-lg-12">
                  <h4>Brand name<strong class="text-danger">*</strong></h4>
                  <input class="form-control" placeholder="Brand name" name="name" type="text" id="name" value="{{$brand->name}}" required />
					<span class="text-danger">{{$errors->first('name')}}</span>
			   </div>
            </div>
            <br>
            <div class="row">
               <div class="col-lg-12">
                  <h4>Short description</h4>
                  <input class="form-control" placeholder="Short description" name="description" type="text" id="description" value="{{$brand->description}}" required />
					<span class="text-danger">{{$errors->first('description')}}</span>
			   </div>
            </div>
			<input type="hidden" value="{{$brand->business_id}}" name="business_id">
			<input type="hidden" value="{{$user->id}}" name="created_by">
            <br>
            <div class="row">
               <div class="col-md-9">
                  <button type="submit" class="btn btn-primary">Update </button>
                  <button type="reset" class="btn btn-default btn-outline">Close</button>
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
	