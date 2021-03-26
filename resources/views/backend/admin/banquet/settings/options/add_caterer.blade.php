@extends('backend.master')
@section('title',"Add Caterer")
@section('content')
 <!-- Top Menubar Ends Here-->
 <div class="page">
    @include('backend.partials.leftbar.shortcuts')
	<div class="page-main">
	   <div class="page-header">
		  <h1 class="page-title">Add Caterer Service Type</h1>
	   </div>
	   <div style="width: 100%; padding: 30px;">
		  <div class="panel-body" style="background-color: #fff; ">
			 <header class="panel-heading">
			<div>
			<form action="{{route('backend.admin.banquet.sttings.option.caterer.store')}}" method="post">
				{{csrf_field()}}
				<div class="row" >
				   <div class="col-lg-6">
					  <h4 >Caterer Service Type:<span text-danger>*</span></h4>
					  <input type="text" class="form-control" placeholder="Service type" name="name" value="{{old('name')}}" required />
					  <span class="text-danger">{{$errors->first('name')}}</span>
				   </div>
				   <div class="col-lg-6 ">
					  <h4 >Counters:<span text-danger>*</span></h4>
					  <input type="number" class="form-control" data-plugin="asSpinner" value="{{old('counters')}}" name="counters" required />
					  <span class="text-danger">{{$errors->first('counters')}}</span>
					  <input type="hidden" name="user_id" value="17">
				   </div>
				</div>
				<br>
				<div class="row" >
				   <div class="col-md-9">
					  <button type="reset" class="btn btn-primary fa fa-refresh">&nbsp;Reset </button>
					  <button type="submit" class="btn btn-default btn-outline">Add</button>
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
	