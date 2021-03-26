@extends('backend.master')
@section('title',"Edit User")
@section('content')
 <!-- Top Menubar Ends Here-->
 <div class="page">
  @include('backend.partials.leftbar.shortcuts')
 <div class="page-main">
   <div class="page-header">
      <h1 class="page-title">Edit User</h1>
   </div>
   <div style="width: 100%; padding: 30px;">
      <div class="panel-body" style="background-color: #fff; ">
         <div>
            <form action="{{route('backend.admin.pos.office.user.update',$user->id)}}" method="post">
			{{csrf_field()}}
               <div class="row">
                  <div class="col-lg-4">
                     <h5>Prefix:</h5>
                     <input class="form-control" placeholder="Mr / Mrs / Miss" name="surname" type="text" id="surname" value="{{$user->surname}}">
					 <span class="text-danger">{{$errors->first('surname')}}</span>
                  </div>
                  <div class="col-lg-4">
                     <h5>First Name<strong class="text-danger">*</strong></h5>
                     <input class="form-control"  placeholder="First Name" name="first_name" type="text" id="first_name" aria-required="true" value="{{$user->first_name}}">
					<span class="text-danger">{{$errors->first('first_name')}}</span>
				  </div>
                  <div class="col-lg-4">
                     <h5>Last Name<strong class="text-danger">*</strong></h5>
                     <input class="form-control" placeholder="Last Name" name="last_name" type="text" id="last_name" value="{{$user->last_name}}">
					<span class="text-danger">{{$errors->first('last_name')}}</span>
				  </div>
               </div>
               <br>
               <div class="row">
                  <div class="col-lg-12">
                     <h5>Email<strong class="text-danger">*</strong></h5>
                     <input class="form-control"  placeholder="Email" name="email" type="text" id="email" aria-required="true" value="{{$user->email}}">
					<span class="text-danger">{{$errors->first('email')}}</span>
				  </div>
               </div>
               <br>
               <div class="row">
                  <div class="col-md-6">
                     <h5>Role<strong class="text-danger">*</strong></h5>
                     <select class="form-control" id="role" name="role" tabindex="-1" aria-hidden="true">
						<option value="">--Select--</option>
					@foreach($roles as $role)
                        <option value="{{$role}}" {{$role == $role ? 'selected' : '' }} >{{$role}}</option>
                    @endforeach
				
                     </select>
					 <span class="text-danger">{{$errors->first('role')}}</span>
                  </div>
                  <div class="col-md-6">
                     <h5>Username<strong class="text-danger">*</strong></h5>
                     <input class="form-control" placeholder="Username" name="username" type="text" id="username" aria-required="true" value="{{$user->username}}">
						<span class="text-danger">{{$errors->first('username')}}</span>
				  </div>
               </div>
               <br>
               <div class="row">
                  <div class="col-md-6">
                     <h5>Password<strong class="text-danger">*</strong></h5>
                     <input class="form-control" placeholder="Password" name="password" type="text" id="password" aria-required="true" value="{{old('password')}}">
					 <small class="text-success">Leave password field blank if you don't want to update password</small>
					<span class="text-danger">{{$errors->first('password')}}</span>
				  </div>
                  <div class="col-md-6">
                     <h5>Confirm Password<strong class="text-danger">*</strong></h5>
                     <input class="form-control"  placeholder="Confirm Password" name="confirm_password" type="text" id="confirm_password" aria-required="true" value="{{old('confirm_password')}}">
						<small class="text-success">Leave confirm_password field blank if you don't want to update password</small>
					<span class="text-danger">{{$errors->first('confirm_password')}}</span>
				  </div>
               </div>
			  
			    <div class="row mt-25">
                  <div class="col-md-6">
                     <button type="submit" class="btn btn-primary">Save</button>
                  </div>
                  
               </div>
            </form>
         </div>
      </div>
   </div>
        
</div>
 </div>

@endsection
	