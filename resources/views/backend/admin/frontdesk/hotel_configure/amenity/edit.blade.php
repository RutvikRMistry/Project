@extends('backend.master')
@section('title',"Edit Amenity")
@section('content')
 <!-- Top Menubar Ends Here-->
 <div class="page">
    @include('backend.partials.leftbar.shortcuts')
	<div class="page-main">
	   <div class="page-header">
		  <h1 class="page-title">Edit Amenities</h1>
		  <div class="page-header-actions">
			 <a href="{{route('backend.admin.frontdesk.hotel_configure.amenities')}}">
			 <button type="button" class="btn btn-primary" > Amenities List</button></a>
		  </div>
	   </div>
	   <div style="width: 100%; padding: 30px;">
		  <div class="panel-body" style="background-color: #fff; ">
			 <div>
				<form action="{{route('backend.admin.frontdesk.hotel_configure.amenities.update',$amenity->id)}}" method="post" enctype="multipart/form-data">
					{{csrf_field()}}
                <div class="form-row justify-content-center">
                    <div class="form-group col-md">
                        <label><strong>Name</strong> <small class="text-danger">*</small></label>
                        <input type="text" class="form-control form-control-lg" name="name" placeholder="name" value="{{$amenity->name}}" required />
						<span class="text-danger">{{$errors->first('name')}}</span>
					</div>
                </div>
                <div class="form-row justify-content-center">

                </div>
                <div class="form-row justify-content-center">
                    <div class="form-group col-md-12">
                        <label><strong>Description</strong><small> (optional)</small> </label>
                        <textarea  class="form-control form-control-lg" rows="4" name="description" placeholder="Description" required  >{{$amenity->description}}</textarea>
                    </div>
                </div>
                <div class="form-row justify-content-center">
                    <div class="form-group col-sm-12">
                        <label for="inputAddress2" class=" mr-5">Status</label>
                        <input id="status"  type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" name="status"
						data-plugin="switchery" {{$amenity->status?'checked':''}}>
                    </div>
                </div>
                <div class="form-row justify-content-center">
                    <div class="form-group col-sm-12">
                        <hr/>
                        <button type="submit" class="btn btn-primary mt-4 btn-tsk btn-block"><i class="fa fa-save"></i> Update</button>
                    </div>
                </div>
                </form>
			 </div>
		  </div>             
	   </div>
	</div>



 </div>

@endsection
