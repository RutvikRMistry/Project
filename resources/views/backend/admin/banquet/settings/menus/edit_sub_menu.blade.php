@extends('backend.master')
@section('title',"Edit Sub Menu")
@section('content')
 <!-- Top Menubar Ends Here-->
 <div class="page">
    @include('backend.partials.leftbar.shortcuts')	
	<div class="page-main">
	   <div class="page-header">
		  <h1 class="page-title">Edit Sub Menu</h1>
	   </div>
	   <div style="width: 100%; padding: 30px;">
		  <div class="panel-body" style="background-color: #fff; ">
			 <header class="panel-heading">
			<div>
			<form action="{{route('backend.admin.banquet.sttings.menu.sub_menu.update',$sub->id)}}" method="post">
				{{csrf_field()}}
				<div class="row">
				   <div class="col-lg-4 ">
					  <h5>Menu:<span class="text-danger">*</span></h5>
					  <select class="form-control" data-plugin="select2" name="main_menu_id" required >
							<option value="">--Select--</option>
							@foreach($menu as $menu)
							<option value="{{$menu->id}}" {{$sub->main_menu_id == $menu->id?'selected': ''}}>{{$menu->name}}</option>
							@endforeach
					  </select>
					  <span class="text-danger">{{$errors->first('main_menu_id')}}</span>
				   </div>
				   <div class="col-lg-4 ">
					  <h5>Menu Types:<span class="text-danger">*</span></h5>
					  <select class="form-control" data-plugin="select2" name="menu_type" required >
							<option value="">--Select--</option>
							@foreach($type as $type)
							<option value="{{$type->id}}" {{$sub->menu_type == $type->id?'selected': ''}}>{{$type->name}}</option>
							@endforeach
					  </select>
					  <span class="text-danger">{{$errors->first('menu_type')}}</span>
				   </div>
				   <div class="col-lg-4 ">
					  <h5>   Name:<span class="text-danger">*</span></h5>
					  <input type="text" class="form-control" placeholder="" name="name" value="{{$sub->name}}" required />
					  <span class="text-danger">{{$errors->first('name')}}</span>
				   </div>
				</div>
				<br>
				<div class="row">
				   <div class="col-lg-4 form-group">
					  <h5>Minimum  Person:<span class="text-danger">*</span></h5>
					  <input type="text" class="form-control" data-plugin="asSpinner" name="min_person" value="{{$sub->min_person}}" required />
					  <span class="text-danger">{{$errors->first('min_person')}}</span>
				   </div>
				   <div class="col-lg-4 ">
					  <h5>Maximum Person:<span class="text-danger">*</span></h5>
					  <input type="text" class="form-control" data-plugin="asSpinner" name="max_person" value="{{$sub->max_person}}" required />
					  <span class="text-danger">{{$errors->first('max_person')}}</span>
				   </div>
				   <div class="col-lg-4 ">
					  <h5>Time:<span class="text-danger">*</span></h5>
					  <input type="text" class="form-control timepicker" id="input_starttime" placeholder=" " name="times" value="{{$sub->times}}" required />
						<span class="text-danger">{{$errors->first('times')}}</span>
				   </div>
				</div>
				<div class="row">
				   <div class="col-md-9">
					  <button type="reset" class="btn btn-primary">Back </button>
					  <button type="submit" class="btn btn-default btn-outline">Update</button>
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
	