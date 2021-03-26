@extends('backend.master')
@section('title',"Add Menu Item")
@section('content')
 <!-- Top Menubar Ends Here-->
 <div class="page">
    @include('backend.partials.leftbar.shortcuts')	
	<div class="page-main">
	   <div class="page-header">
		  <h1 class="page-title">Menu item</h1>
	   </div>
	   <div style="width: 100%; padding: 30px;">
		  <div class="panel-body" style="background-color: #fff; ">
			 <header class="panel-heading">
			<div>
			<form action="{{route('backend.admin.banquet.sttings.menu.item.store')}}" method="post">
				{{csrf_field()}}
				<div class="row">
				   <div class="col-lg-3 ">
					  <h5>Menu:*</h5>
					  <select class="form-control" data-plugin="select2" name="main_menu_id">
						 <optgroup label="Please Select">
							<option value="">--Select--</option>
							@foreach($menu as $menu)
								<option value="{{$menu->id}}" {{old('main_menu_id') == $menu->id?'selected':''}} >{{$menu->name}}</option>
							@endforeach
					  </select>
				   </div>
				   <div class="col-lg-3 ">
					  <h5>Menu Types:*</h5>
					  <select class="form-control" data-plugin="select2" name="menu_type">
							<option value="">--Select--</option>
							@foreach($type as $type)
							<option value="{{$type->id}}" {{old('menu_type') == $type->id?'selected':''}} > {{$type->name}} </option>
							@endforeach
					  </select>
				   </div>
				   <div class="col-lg-3 ">
					  <h5> Sub Menu:*</h5>
					  <select class="form-control" data-plugin="select2" name="sub_menu_id">
							<option value="">--Select--</option>
							@foreach($sub as $sub)
							<option value="{{$sub->id}}" {{old('sub_menu_id') == $sub->id?'selected':''}}>{{$sub->name}}</option>
							@endforeach
					  </select>
				   </div>
				   <div class="col-lg-3 ">
					  <h5>   Name:</h5>
					  <input type="text" class="form-control" placeholder="" name="name" value="{{old('name')}}">
				   </div>
				</div>
				<br>
				<div class="row">
				   <div class="col-lg-3 ">
					  <h5>Price:</h5>
					  <input type="text" class="form-control" data-plugin="asSpinner" name="price" value="{{old('price')}}" />
				   </div>
				   <div class="col-lg-3 ">
					  <h5> Person/ Dish:</h5>
					  <input type="text" class="form-control" data-plugin="asSpinner" name="persons" value="{{old('persons')}}" />
				   </div>
				   <div class="col-lg-3 ">
					  <h5>   Hour:</h5>
					  <input type="text" class="form-control" placeholder=" " name="hours" value="{{old('hours')}}">
				   </div>
				</div>
				<br>
				<div class="row" >
				   <div class="col-md-9">
					  <button type="submit" class="btn btn-primary">Add </button>
				   </div>
				</div>
				<br>  
				<div class="row" >
				   <div class="col-lg-3 ">
					  <h5>Each Additional Hour Price:</h5>
					  <input type="text" class="form-control" data-plugin="asSpinner" name="additional" value="{{old('additional')}}" />
				   </div>
				   <div class="col-lg-9 ">
					  <h5>   Description:</h5>
					  <input type="text" class="form-control" placeholder=" " name="description" value="{{old('description')}}">
				   </div>
				</div>
				<br>
				<div class="row" >
				   <div class="col-md-9">
					  <button type="reset" class="btn btn-primary">Back </button>
					  <button type="submit" class="btn btn-default btn-outline">Ok</button>
				   </div>
				</div>
			 </div>
		  </div>      
	   </div>
	</div>
</div>
 </div>

@endsection
	