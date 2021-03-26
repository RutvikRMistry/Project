@extends('backend.master')
@section('title',"Edit Tax Rate")
@section('content')
 <!-- Top Menubar Ends Here-->
 <div class="page">
	@include('backend.partials.leftbar.shortcuts')
	<div class="page-main">
   <div class="page-header">
      <h1 class="page-title">Edit Tax Rate</h1>
   </div>
   <div style="width: 100%; padding: 30px;">
      <div class="panel-body" style="background-color: #fff; ">
        <div>
			<form action="{{route('backend.admin.pos.setting.tax_rate.update',$tax->id)}}" method="post">
				{{csrf_field()}}
            <div class="row">
               <div class="col-lg-12">
                  <h5> Name<strong class="text-danger">*</strong></h5>
                  <input class="form-control"  placeholder="Name" name="name" type="text" id="name" value="{{$tax->name}}" required />
				  <span class="text-danger">{{$errors->first('name')}}</span>
               </div>
            </div>
            <br>
            <div class="row">
               <div class="col-lg-12">
                  <h5>Tax Rate<strong class="text-danger">*</strong></h5>
                  <input class="form-control input_number"  name="amount" type="text" id="amount" value="{{$tax->amount}}" required />
				  <span class="text-danger">{{$errors->first('amount')}}</span>
               </div>
            </div>
			@php
				//echo $tax->business_id;
				//echo '</br>';
				//echo $tax->created_by;
			@endphp
			<input type="hidden" value="{{$tax->business_id}}" name="business_id">
			<input type="hidden" value="{{$tax->created_by}}" name="created_by">
            <br>
            <div class="row">
               <div class="col-md-9">
                  <button type="submit" class="btn btn-primary">Update</button>
                  <button type="reset" class="btn btn-default btn-outline">Close</button>
               </div>
            </div>
			</form>
        </div>
      </div>
            
   </div>
</div>
 </div>

@endsection
	