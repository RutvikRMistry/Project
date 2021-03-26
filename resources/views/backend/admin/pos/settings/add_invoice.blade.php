@extends('backend.master')
@section('title',"Add Invoice")
@section('content')
 <!-- Top Menubar Ends Here-->
 <div class="page">
	@include('backend.partials.leftbar.shortcuts')
	<div class="page-main">
   <div class="page-header">
      <h1 class="page-title">Add invoice scheme</h1>
   </div>
   <div style="width: 100%; padding: 30px;">
      <div class="panel-body" style="background-color: #fff; ">
         <header class="panel-heading">
        <div>
            <form action="" method="post">
            <div class="row" >
               <div class="col-lg-6 ">
                  <label class="col-md-2form-control-lg form-control-label" for="inputSizingLarge"></label>
                  <div class="col-md-6">
                     <textarea class="form-control" rows="3" >FORMAT:XXXX</textarea>
                  </div>
               </div>
               <div class="col-lg-6 ">
                  <label class="col-md-2form-control-lg form-control-label" for="inputSizingLarge"></label>
                  <div class="col-md-6">
                     <textarea class="form-control" rows="3">FORMAT:2021</textarea>
                  </div>
               </div>
            </div>
            <br>
            <div class="row">
               <div class="col-lg-12 ">
                  <h4 class="example-title">Name<strong class="text-danger">*</strong></h4>
                  <input class="form-control"  placeholder="Name" name="name" type="text" id="name" value="{{old('name')}}">
				  <span class="text-danger">{{$errors->first('name')}}</span>
               </div>
            </div>
            <br>
			 <div class="row">
               <div class="col-lg-12 ">
                  <h4 class="example-title">Prefix</h4>
                  <input class="form-control"  placeholder="xxxx or 2020" name="prefix" type="text" id="prefix" value="{{old('prefix')}}">
				  <span class="text-danger">{{$errors->first('prefix')}}</span>
               </div>
            </div>
            <br>
			 <div class="row">
               <div class="col-lg-12 ">
                  <h4 class="example-title">Start From</h4>
                  <input class="form-control"  placeholder="" name="start_from" type="number" id="start_number" value="{{old('start_number')}}">
				  <span class="text-danger">{{$errors->first('start_number')}}</span>
               </div>
            </div>
            <br>
			 <div class="row">
               <div class="col-lg-12 ">
                  <h4 class="example-title">Number Of Digit</h4>
                  <input class="form-control"  placeholder="" name="total_digits" type="number" id="total_digits" value="{{old('total_digits')}}">
				  <span class="text-danger">{{$errors->first('total_digits')}}</span>
               </div>
            </div>
           <br/>
			<div class="row">
               <div class="col-lg-12 ">
                 
                  <input name="is_default" type="checkbox" id="is_default" data-plugin="switchery" value="{{old('is_default')}}" {{old('is_default')?'checked' : ''}}>
				  
				  &nbsp; &nbsp;
				   <label for="is_default">Number Of Digit</label>
               </div>
            </div>
            <br>
            <div class="row">
               <div class="col-md-9">
                  <button type="submit" class="btn btn-primary">Save </button>
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
 </div>

@endsection
	