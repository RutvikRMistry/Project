@extends('backend.master')
@section('title',"Create Room")
@section('content')
 <!-- Top Menubar Ends Here-->
 <div class="page">
    @include('backend.partials.leftbar.shortcuts')
	<div class="page-main">
	   <div class="page-header"style="height: 5px;" >
		  <h1 class="page-title">Add Room</h1>
		  <div class="page-header-actions">
			 <a href="{{route('backend.admin.frontdesk.hotel_configure.rooms')}}">
			 <button type="button" class="btn btn-primary" > Room List</button></a>
		  </div>
	   </div>
	   <div style="width: 100%; padding: 30px;">
		  <div class="panel-body" style="background-color: #fff; ">
			 <div>
				<form action="{{route('backend.admin.room.store')}}" method="post">
					{{csrf_field()}}
				   <div class="row" style="margin: auto;">
					  <div class="col-lg-12 ">
						 <h4 >Number<strong class="text-danger">*</strong></h4>
						 <input type="text" class="form-control" name="number" placeholder="Number" value="{{old('number')}}" required />
							<span class="text-danger">{{$errors->first('number')}}</span>
					  </div>
				   </div>
				   <br>
				   <div class="row" style="margin: auto;">
					  <div class="col-lg-6 ">
						 <h4 >Floor<strong class="text-danger">*</strong></h4>
						 <select class="form-control" data-plugin="select2" name="floor" required>
							<option value="">--Select--</option>
							@foreach($floors as $floor)
                                <option value="{{$floor->id}}" {{old('floor') == $floor->id?'selected':''}} >{{$floor->name}}</option>
                                @endforeach
						 </select>
						 <span class="text-danger">{{$errors->first('floor')}}</span>
					  </div>
					  <div class="col-lg-6 ">
						 <h4 >Room Type<strong class="text-danger">*</strong></h4>
						 <select class="form-control" data-plugin="select2" name="room_type" required>
							<option value="">Select</option>
							@foreach($room_types as $room_type)
                                <option value="{{$room_type->id}}" {{old('room_type') ==  $room_type->id?'selected':''}}>{{$room_type->title}}</option>
                            @endforeach
						 </select>
						 <span class="text-danger">{{$errors->first('room_type')}}</span>
					  </div>
				   </div>
				   <br>
				   <!-- End Panel Basic -->
				   <div class="col-lg-4 ">
					  <h4 >Status:</h4>
					  <div class="input-group">
						 <div class="float-left mr-20">
							<input type="checkbox" id="inputBasicOff" name="inputiCheckBasicCheckboxes" data-plugin="switchery"
							   id="status" name="status" />
						 </div>
						 <label class="pt-3" for="inputBasicOff">Off</label>
					  </div>
				   </div>
				   <br>
				   <div class="col-md-12">
					  <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Save</button>
				   </div>
				</form>
			 </div>
		  </div>             
	   </div>
	</div>	 
 </div>
@endsection
