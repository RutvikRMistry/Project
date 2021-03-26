@extends('backend.master')
@section('title',"Crate New Option")
@section('content')
 <!-- Top Menubar Ends Here-->
 <div class="page">
    @include('backend.partials.leftbar.shortcuts')	
	<div class="page-main">
	   <div class="page-header">
		  <h1 class="page-title">Create Option</h1>
	   </div>
	   <div style="width: 100%; padding: 30px;">
		  <div class="panel-body" style="background-color: #fff; ">
			 <header class="panel-heading">
			<div>
				<form action="{{route('backend.admin.banquet.sttings.option.store')}}" method="post">
					{{csrf_field()}}
				<div class="row" >
				   <div class="col-lg-4">
					  <h5>Category:<span class="text-danger">*</span></h5>
					  <select class="form-control" data-plugin="select2" name="category" required >
						 <option value="">--Select--</option>
							<option value="priority" {{old('category') == 'priority'?'selected' : ''}}>Priority</option>
							<option value="payment" {{old('category') == 'payment'?'selected' : ''}}>Payment </option>
							<option value="privacy" {{old('category') == 'privacy'?'selected' : ''}}>Privacy</option>
							<option value="show times" {{old('category') == 'show times'?'selected' : ''}}>Show times</option>
							<option value="lost reason" {{old('category') == 'lost reason'?'selected' : ''}}>Lost Reason</option>
							<option value="interval" {{old('category') == 'interval'?'selected' : ''}}>Interval</option>
							<option value="currency" {{old('category') == 'currency'?'selected' : ''}}>Currency</option>
							<option value="stages" {{old('category') == 'stages'?'selected' : ''}}>Stages</option>
					  </select>
					  <span class="text-danger">{{$errors->first('category')}}</span>
				   </div>
				   <div class="col-lg-4">
					  <h5>Title:<span class="text-danger">*</span></h5>
					  <input type="text" class="form-control" placeholder=" " name="title" value="{{old('title')}}" required />
					  <span class="text-danger">{{$errors->first('title')}}</span>
				   </div>
				   <div class="col-lg-4">
					  <h5>Value:<span text-danger>*</span></h5>
					  <input type="text" class="form-control" placeholder=" " name="value" value="{{old('value')}}" required />
					  <span class="text-danger">{{$errors->first('value')}}</span>
				   </div>
				</div>
				<br>
				<div class="row" >
				   <div class="col-md-9">
					  <button type="reset" class="btn btn-primary">Back </button>
					  <button type="submit" class="btn btn-default btn-outline">Ok</button>
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
	