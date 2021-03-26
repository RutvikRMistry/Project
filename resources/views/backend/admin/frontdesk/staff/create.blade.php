@extends('backend.master')
@section('title',"Staff")
@section('content')
 <!-- Top Menubar Ends Here-->
 <div class="page">
    @include('backend.partials.leftbar.shortcuts')
	
	

<div class="page-main">
   <div class="page-header"style="height: 5px;" >
      <h1 class="page-title">Create New Staff</h1>
      <div class="page-header-actions"style="height: 5px;">
         <a href="{{route('backend.admin.frontdesk.staff')}}">
         <button type="button" class="btn btn-primary" > Staff List</button></a>
      </div>
   </div>
   <div style="width: 100%; padding: 30px;">
      <div class="panel-body" style="background-color: #fff; ">
         <header class="panel-heading">
         <div>
		<form action="{{route('backend.admin.frontdesk.staff.store')}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
			<div class="row">
               <div class="col-lg-4">
                  <h5>First Name<strong class="text-danger">*</strong></h5>
                  <input type="text" class="form-control " name="first_name" placeholder="First Name" value="{{old('first_name')}}" required />
				  <span class="text-danger">{{$errors->first('first_name')}}</span>
               </div>
               <div class="col-lg-4">
                  <h5>Last Name<strong class="text-danger">*</strong></h5>
                  <input type="text" class="form-control " name="last_name" placeholder="Last Name" value="{{old('last_name')}}" required />
				  <span class="text-danger">{{$errors->first('last_name')}}</span>
               </div>
               <div class="col-lg-4">
                  <h5>User Name<strong class="text-danger">*</strong></h5>
                  <input type="text" class="form-control " name="username" placeholder="Username" value="{{old('username')}}" required />
				  <span class="text-danger">{{$errors->first('username')}}</span>
               </div>
            </div>
            <br>
            <div class="row">
               <div class="col-lg-4">
                  <h5>Password<strong class="text-danger">*</strong></h5>
                  <input type="password" class="form-control " name="password" placeholder="Password" value="{{old('password')}}" required />
				  <span class="text-danger">{{$errors->first('password')}}</span>
               </div>
               <div class="col-lg-4">
                  <h5>Email<strong class="text-danger">*</strong></h5>
                  <input type="email" class="form-control " name="email" placeholder="email" value="{{old('email')}}" required />
				  <span class="text-danger">{{$errors->first('email')}}</span>
               </div>
               <div class="col-lg-4">
                  <h5>Phone No.<strong class="text-danger">*</strong></h5>
                  <input type="number" class="form-control " name="phone" placeholder="Phone" value="{{old('phone')}}" required />
				  <span class="text-danger">{{$errors->first('phone')}}</span>
               </div>
            </div>
            <br>
            <div class="row">
               <div class="col-lg-6">
                  <h5>Sex<strong class="text-danger">*</strong></h5>
                  <select class="form-control" data-plugin="select2" name="sex" required>
				  <option value="" >--Select--</option>
                        <option value="M" {{old('sex') =='M'?'selected':''}} >Male</option>
                        <option value="F" {{old('sex') == 'F'?'selected':''}} >Female</option>
                        <option value="O" {{old('sex') == 'O'?'selected':''}} >Other</option>
						
						
                  </select>
				  <span class="text-danger">{{$errors->first('sex')}}</span>
               </div>
               <div class="col-lg-6">
                  <h5>Address</h5>
                  <textarea class="form-control form-control-lg" rows="1" name="address">{{old('address')}}</textarea>
               </div>
            </div>
            <br>
            <div class="row">
               <div class="col-lg-6">
                  <h5>Image</h5>
                  <input type="file" class="form-control" name="picture">
               </div>
               <div class="col-lg-6">
                  <h5>Status:</h5>
                  <div class="input-group">
                     <div class="float-left mr-20">
                        <input type="checkbox" id="status" name="status" data-plugin="switchery"
                           />
                     </div>
                     <label class="pt-3" for="status">Off</label>
                  </div>
               </div>
            </div>
            <br>
            <div class="row">
               <div class="col-md-12">
                  <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Save</button>
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
