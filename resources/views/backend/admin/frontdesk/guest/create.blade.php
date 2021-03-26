@extends('backend.master')
@section('title',"Guest")
@section('content')
 <!-- Top Menubar Ends Here-->
 <div class="page">
    @include('backend.partials.leftbar.shortcuts')
<div class="page-main">
   <div class="page-header">
      <h1 class="page-title">Create New Guest</h1>
      <div class="page-header-actions">
         <a href="{{route('backend.admin.frontdesk.guest')}}">
         <button type="button" class="btn btn-primary" > Guest List</button></a>
      </div>
   </div>
   <div style="width: 100%; padding: 30px;">
      <div class="panel-body" style="background-color: #fff; ">
		<form action="{{route('backend.admin.frontdesk.guest.store')}}" method="post" enctype="multipart/form-data">
			{{csrf_field()}}
         <div class="examm">
            <div class="row">
               <div class="col-lg-4">
                  <h5>First Name <strong class="text-danger">*</strong></h5>
                  <input type="text" class="form-control"  name="first_name" placeholder="First Name" value="{{old('first_name')}}" required />
				  <span class="text-danger">{{$errors->first('first_name')}}</span>
               </div>
               <div class="col-lg-4">
                  <h5>Last Name<strong class="text-danger">*</strong></h5>
                  <input type="text" class="form-control" name="last_name" placeholder="Last Name" value="{{old('last_name')}}" required />
				  <span class="text-danger">{{$errors->first('last_name')}}</span>
               </div>
               <div class="col-lg-4">
                  <h5>User Name<strong class="text-danger">*</strong></h5>
                  <input type="text" class="form-control" name="username" placeholder="Username" value="{{old('username')}}" required />
				  <span class="text-danger">{{$errors->first('username')}}</span>
               </div>
            </div>
            <br>
            <div class="row" >
               <div class="col-lg-4">
                  <h5>Password<strong class="text-danger">*</strong></h5>
                  <input type="password" class="form-control" name="password" placeholder="Password" value="{{old('password')}}" required />
				  <span class="text-danger">{{$errors->first('password')}}</span>
               </div>
               <div class="col-lg-4">
                  <h5>Email<strong class="text-danger">*</strong></h5>
                  <input type="email" class="form-control" name="email" placeholder="email" value="{{old('email')}}" required />
				  <span class="text-danger">{{$errors->first('email')}}</span>
               </div>
               <div class="col-lg-4">
                  <h5>PhoneNo<strong class="text-danger">*</strong></h5>
                  <input type="phone" class="form-control" name="phone" placeholder="Phone" value="{{old('phone')}}" required />
				  <span class="text-danger">{{$errors->first('phone')}}</span>
               </div>
            </div>
            <br>       
            <!-- End Panel Basic -->
            <div class="row">
               <div class="col-lg-4">
                  <h5>Sex<strong class="text-danger">*</strong></h5>
				  <select class="form-control" data-plugin="select2" name="sex" required />
						
                        <option value="" >--Select--</option>
                        <option value="M" {{old('sex') =='M'?'selected':''}} >Male</option>
                        <option value="F" {{old('sex') == 'F'?'selected':''}} >Female</option>
                        <option value="O" {{old('sex') == 'O'?'selected':''}} >Other</option>
							
                     
                  </select>
				  <span class="text-danger">{{$errors->first('sex')}}</span>
               </div>
               <div class="col-lg-8">
                  <h5>Address:</h5>
                  <textarea class="form-control " rows="2" name="address">{{old('address')}}</textarea>
               </div>
            </div>
            <br>
            <div class="row">
               <div class="col-lg-4">
                  <h5>Type Of ID:</h5>
                  <input type="text" class="form-control" name="id_type" placeholder="ID Type" value="{{old('id_type')}}">
               </div>
               <div class="col-lg-4">
                  <h5>ID NO.:</h5>
                  <input type="text" class="form-control" name="id_number" placeholder="ID Number" value="{{old('id_number')}}">
               </div>
               <div class="col-lg-4">
                  <h5>Upload Id:</h5>
                  <input type="file" class="form-control " name="id_card_image" value="{{old('id_card_image')}}">
               </div>
            </div>
            <br>      
            <div class="row">
               <div class="col-md-8">
                  <h5>REMARK:</h5>
                  <div class="form-group row">
                     <label class="col-md-2form-control-lg form-control-label" for="inputSizingLarge"></label>
                     <div class="col-md-12">
                        <input type="text" class="form-control form-control-lg"
                           placeholder="Large input" name="remarks" value="{{old('remarks')}}">
                     </div>
                  </div>
               </div>
               <div class="col-lg-4">
                  <h5>Image:</h5>
                  <input type="file" class="form-control form-control-lg" name="picture" value="{{old('picture')}}" >    
               </div>
            </div>
            <div class="row">
               <div class="col-lg-4">
                  <h5>Date OF Birth:<span class="text-danger">*</span></h5>
                  <div class="input-group">
                     <span class="input-group-addon">
                     <i class="icon wb-calendar" aria-hidden="true"></i>
                     </span>
                     <input type="text" class="form-control" required data-plugin="datepicker" data-multidate="true" name="dob" id="dob" value="{{old('dob',date('Y/m/d'))}}">
                  </div>
               </div>
               <div class="col-lg-4">
                  <h5>VIP:</h5>
                  <div class="input-group">
                     <div class="float-left mr-20">
                        <input type="checkbox" id="inputBasicOff"  data-plugin="switchery"
                           id="vip" name="vip" checked />
                     </div>
                     <label class="pt-3" for="inputBasicOff">Off</label>
                  </div>
               </div>
               <div class="col-lg-4">
                  <h5>Status:</h5>
                  <div class="input-group">
                     <div class="float-left mr-20">
                        <input type="checkbox" id="inputBasicOff"  data-plugin="switchery"
                           id="status" name="status"/>
                     </div>
                     <label class="pt-3" for="inputBasicOff">Off</label>
                  </div>
               </div>
            </div>
            <br>
            <div class="row" >
               <div class="col-md-9">
                  <button type="reset" class="btn btn-outline-tsk"><i class="fa fa-refresh"></i> Reset</button>
                  <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Save</button>
               </div>
            </div>
         </div>
		</form>
      </div>
   </div>
</div>


 </div>

@endsection
