@extends('backend.master')
@section('title',"Edit Transportation Service")
@section('content')
 <!-- Top Menubar Ends Here-->
 <div class="page">
    @include('backend.partials.leftbar.shortcuts')	
	<div class="page-main">
   <div class="page-header">
      <h1 class="page-title">Edit Transportation Service</h1>
   </div>
   <div style="width: 100%; padding: 30px;">
      <div class="panel-body" style="background-color: #fff; ">
         <header class="panel-heading">
        <div>
		<form action="{{route('backend.admin.banquet.sttings.function.transport_service.update',$transport->id)}}" method="post">
			{{csrf_field()}}
            <div class="row">
               <div class="col-lg-4 form-group">
                  <h5>   Name: <span class="text-danger">*</span></h5>
                  <input type="text" class="form-control" placeholder="" name="name" value="{{$transport->name}}" required />
				  <span class="text-danger">{{$errors->first('name')}}</span>
               </div>
               <div class="col-lg-4 form-group">
                  <h5>   Service:<span class="text-danger">*</span> <span class="text-danger">*</span></h5>
                  <input type="text" class="form-control" placeholder=" " name="service_provided" value="{{$transport->service_provided}}" required />
				  <span class="text-danger">{{$errors->first('service_provided')}}</span>
               </div>
               <div class="col-lg-4 form-group">
                  <h5>Price:<span class="text-danger">*</span></h5>
                  <input type="text" class="form-control" data-plugin="asSpinner" placeholder="Enter Amount"  name="price" value="{{$transport->price}}" required />
					<span class="text-danger">{{$errors->first('price')}}</span>
			   </div>
            </div>
            <br>
            <div class="row">
               <div class="col-lg-4 form-group">
                  <h5>   Address:</h5>
                  <input type="text" class="form-control" placeholder=" " name="address" value="{{$transport->address}}" required />
				  <span class="text-danger">{{$errors->first('address')}}</span>
               </div>
               <div class="col-lg-4 form-group">
                  <h5>   Email ID:<span class="text-danger">*</span></h5>
                  <input type="text" class="form-control" placeholder=" " name="email" value="{{$transport->email}}" required />
				  <span class="text-danger">{{$errors->first('email')}}</span>
               </div>
               <div class="col-lg-4 form-group">
                  <h5>Phone:<span class="text-danger">*</span></h5>
                  <input type="text" class="form-control" placeholder=" " name="phone" value="{{$transport->phone}}" required />
				  <span class="text-danger">{{$errors->first('phone')}}</span>
               </div>
            </div>
            <br>
            <div class="row">
               <div class="col-md-9">
                  <button type="reset" class="btn btn-primary">Back </button>
                  <button type="submit" class="btn btn-default btn-outline">Update</button>
               </div>
            </div>
            <br>
		</form>
        </div>
      </div>           
   </div>
</div>
</div>

 </div>

@endsection
	