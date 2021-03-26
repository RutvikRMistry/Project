@extends('backend.master')
@section('title',"Add Unit")
@section('content')
 <!-- Top Menubar Ends Here-->
 <div class="page">
	@include('backend.partials.leftbar.shortcuts')
	<div class="page-main">
   <div class="page-header">
      <h1 class="page-title">Add Unit</h1>
   </div>
   <div style="width: 100%; padding: 30px;">
      <div class="panel-body" style="background-color: #fff; ">
         <header class="panel-heading">
         <div>
		<form action="{{route('backend.admin.pos.setting.unit.create')}}" method="post">
			{{csrf_field()}}
            <div class="row">
               <div class="col-lg-12">
                  <h5> Name<strong class="text-danger">*</strong></h5>
                  <input class="form-control"  placeholder="Name" name="actual_name" type="text" id="actual_name" value="{{old('actual_name')}}" required />
				  <span class="text-danger">{{$errors->first('actual_name')}}</span>
               </div>
            </div>
            <br>
			
			<input type="hidden" value="{{$unit->business_id}}" name="business_id"/>
			<input type="hidden" value="{{$unit->created_by}}" name="created_by"/>
            <div class="row">
               <div class="col-lg-12">
                  <h5>Short name<strong class="text-danger">*</strong></h5>
                  <input class="form-control" placeholder="Short name" name="short_name" type="text" id="short_name" value="{{old('short_name')}}" required />
					<span class="text-danger">{{$errors->first('short_name')}}</span> 
			   </div>
            </div>
            <br>
            <div class="row">
               <div class="col-lg-12">
                  <h5>Allow decimal<strong class="text-danger">*</strong></h5>
                  <select class="form-control" id="allow_decimal" name="allow_decimal" value="{{old('allow_decimal')}}" required >
                     <option value="">--Please Select--</option>
                     <option value="1" {{old('allow_decimal') == '1'?'selected':''}}>Yes</option>
                     <option value="0" {{old('allow_decimal') == '0'?'selected':''}}>No</option>
                  </select>
				  <span class="text-danger">{{$errors->first('allow_decimal')}}</span>
               </div>
            </div>
			
            <br>
            <div class="row">
               <div class="col-md-9">
                  <button type="submit" class="btn btn-primary">Save </button>
                  <button type="reset" class="btn btn-default btn-outline">Close</button>
               </div>
            </div>
         </div>
      </div>
            
   </div>
</div>
</div>
 </div>

@endsection
	