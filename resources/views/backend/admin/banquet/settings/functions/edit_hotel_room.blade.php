@extends('backend.master')
@section('title',"Edit Hotel Room")
@section('content')
 <!-- Top Menubar Ends Here-->
 <div class="page">
    @include('backend.partials.leftbar.shortcuts')	
	<div class="page-main">
   <div class="page-header">
      <h1 class="page-title">Edit Hotel Room</h1>
   </div>
   <div style="width: 100%; padding: 30px;">
      <div class="panel-body" style="background-color: #fff; ">
         <header class="panel-heading">
        <div>
		<form action="{{route('backend.admin.banquet.sttings.function.hotel_room.update',$room->id)}}" method="post">
			{{csrf_field()}}
            <div class="row" >
               <div class="col-lg-12">
                  <h4> Hotel  Name:<span class="text-danger">*</span></h4>
                  <select class="form-control" name="hotel_id" required>
					<option value="">--select--</option>
					@foreach($hotel as $h)
					<option value="{{$h->id}}" {{$room->hotel_id == $h->id? 'selected': ''}}>{{$h->name}}</option>
					@endforeach
				  </select>
				  <span class="text-danger">{{$errors->first('hotel_id')}}</span>
               </div>
            </div>
            <br>
            <div class="row" >
               <div class="col-lg-12">
                  <h4 >   Hotel Room:<span class="text-danger">*</span></h4>
                  <input type="text" class="form-control" placeholder="Room Name" name="room_name" value="{{$room->room_name}}" required />
				  <span class="text-danger">{{$errors->first('room_name')}}</span>
               </div>
            </div>
            <br>
            <div class="row" >
               <div class="col-md-9">
                  <button type="reset" class="btn btn-primary">Back </button>
                  <button type="submit" class="btn btn-default btn-outline">Update</button>
               </div>
            </div>
         </div>
      </div>       
   </div>
</div>
</div>
 </div>

@endsection
	