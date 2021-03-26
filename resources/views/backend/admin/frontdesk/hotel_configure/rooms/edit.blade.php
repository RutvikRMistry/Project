@extends('backend.master')
@section('title',"Edit Room")
@section('content')
 <!-- Top Menubar Ends Here-->
 <div class="page">
    @include('backend.partials.leftbar.shortcuts')
	<div class="page-main">
	   <div class="page-header"style="height: 5px;" >
		  <h1 class="page-title">Edit Room</h1>
		  <div class="page-header-actions">
			 <a href="{{route('backend.admin.frontdesk.hotel_configure.rooms')}}">
			 <button type="button" class="btn btn-primary" > Room List</button></a>
		  </div>
	   </div>
	   <div style="width: 100%; padding: 30px;">
		  <div class="panel-body" style="background-color: #fff; ">
			 <div>
				<form action="{{route('backend.admin.room.update',$room->id)}}" method="post" enctype="multipart/form-data">
				{{csrf_field()}}
                <div class="form-row justify-content-center">

                    <div class="form-group col-md">
                        <label><strong>Number</strong> <small class="text-danger">*</small></label>
                        <input type="number" class="form-control form-control-lg" name="number" placeholder="Number" value="{{$room->number}}" required>
                    </div>
                </div>
                <div class="form-row justify-content-center">
                    <div class="form-group col-md-6">
                        <label><strong>Floor</strong> </label>
                       
							<select class="form-control form-control-lg" name="floor" required>
							<option value="">--Select--</option>
							@foreach($floors as $floor)
                                <option value="{{$floor->id}}" {{$floor->id == $room->floor_id?'selected':''}} >{{$floor->name}}</option>
                                @endforeach
							</select>
						<span class="text-danger">{{$errors->first('floor')}}</span>
                    </div>
                    <div class="form-group col-md-6">
                        <label><strong>Room Type</strong> <small class="text-danger">*</small></label>
                        <select class="form-control form-control-lg" name="room_type" required >
                            <option value="">--Select--</option>
                            @foreach($room_types as $room_type)
                                <option value="{{$room_type->id}}" {{$room->room_type_id == $room_type->id?'selected':''}}>{{$room_type->title}}</option>
                            @endforeach
                        </select>
						<span class="text-danger">{{$errors->first('room_type')}}</span>
                    </div>
                </div>
                <div class="form-row justify-content-center">
                    <div class="form-group col-sm-12">
                        <label for="inputAddress2" class=" mr-5">Status</label>
                        <input id="status" {{$room->status?'checked':''}} type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" name="status"
						data-plugin="switchery">
                    </div>
                </div>
                <div class="form-row justify-content-center">
                    <div class="form-group col-sm-12">
                        <hr/>
                        <button type="submit" class="btn btn-primary	 mt-4 btn-tsk btn-block"><i class="fa fa-save"></i> &nbsp;Update</button>
                    </div>
                </div>
            </form>
			 </div>
		  </div>             
	   </div>
	</div>	 
 </div>
@endsection
