@extends('backend.master')
@section('title',"Add Tax Rate")
@section('content')
 <!-- Top Menubar Ends Here-->
 <div class="page">
	@include('backend.partials.leftbar.shortcuts')
	<div class="page-main">
   <div class="page-header">
      <h1 class="page-title">Add Tax Rate Group</h1>
   </div>
   <div style="width: 100%; padding: 30px;">
      <div class="panel-body" style="background-color: #fff; ">
         <div>
            <div class="row">
               <div class="col-lg-12">
                  <h5> Name<strong class="text-danger">*</strong></h5>
                  <input class="form-control" placeholder="Name" name="name" type="text" id="name" value="{{old('name')}}">
				  <span class="text-danger">{{$errors->first('name')}}</span>
               </div>
            </div>
            <br>
            <div class="row">
               <div class="col-lg-12">
                  <h5>Sub Taxes<strong class="text-danger">*</strong></h5>
                  <select class="form-control" name="is_tax_group" type="text" id="is_tax_group" multiple>
						<option value="">--Select--</option>
						<option value="1" {{old('is_tax_group') == '1'?"selected":""}}>Yes</option>
						<option value="0" {{old('is_tax_group') == '0'?"selected":""}}>No</option>
				  </select>
				  <span class="text-danger">{{$errors->first('is_tax_group')}}</span>
               </div>
            </div>
            <br>
            <div class="row">
               <div class="col-md-9">
                  <button type="button" class="btn btn-primary">Save </button>
                  <button type="reset" class="btn btn-default btn-outline">Close</button>
               </div>
            </div>
         </div>
      </div>
            
   </div>
</div>
 </div>

@endsection
	