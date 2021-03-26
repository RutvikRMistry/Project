@extends('backend.master')
@section('title',"Staff")
@section('style')
    <style>
        .vip {
            position: absolute;
            top:0;
            right: 0;
            background: green;
            font-weight: bold;
            padding: 5px 10px 5px 30px;
            color: white;
            border-radius:0 0 0 30px;
        }
    </style>
    @endsection
@section('content')
 <!-- Top Menubar Ends Here-->
 <div class="page">
    @include('backend.partials.leftbar.shortcuts')
	<div class="page-main">
	   <div class="page-header">
		  <h1 class="page-title">Edit Staff</h1>
		  <div class="page-header-actions">
			 <a href="{{route('backend.admin.frontdesk.staff')}}">
         <button type="button" class="btn btn-primary" > Staff List</button></a>
		  </div>
	   </div>
	   <div style="width: 100%; padding: 30px;">
	   @include('backend.partials.flash_message')
		  <div class="panel-body" style="background-color: #fff; ">
			 <form action="{{route('backend.admin.frontdesk.staff.update',$staff->id)}}" method="post" enctype="multipart/form-data">
								{{csrf_field()}}
                                <div class="form-row justify-content-center">

                                    <div class="form-group col-md-4">
                                        <label><strong>First Name</strong> </label>
                                        <input type="text" class="form-control form-control-lg" name="first_name" placeholder="First Name" value="{{$staff->first_name}}" required />
										<span class="text-danger">{{$errors->first('first_name')}}</span>
									</div>
                                    <div class="form-group col-md-4">
                                        <label><strong>Last Name</strong> </label>
                                        <input type="text" class="form-control form-control-lg" name="last_name" placeholder="Last Name" value="{{$staff->last_name}}" required />
										<span class="text-danger">{{$errors->first('last_name')}}</span>
									</div>
                                    <div class="form-group col-md-4">
                                        <label><strong>Email</strong> <small class="text-danger">*</small></label>
                                        <input type="email" class="form-control form-control-lg" name="email" placeholder="email" value="{{$staff->email}}" required />
										<span class="text-danger">{{$errors->first('email')}}</span>
                                    </div>

                                </div>
                                <div class="form-row justify-content-center">
                                    <div class="form-group col-md-4">
                                        <label><strong>Password</strong> </label>
                                        <input type="password" class="form-control form-control-lg" name="password" placeholder="Password" >
                                        <label><strong>Phone</strong> <small class="text-danger">*</small></label>
                                        <input type="number" class="form-control form-control-lg" name="phone" placeholder="Phone" value="{{$staff->phone}}" required />
										<span class="text-danger">{{$errors->first('phone')}}</span>
											<br>
                                        <label><strong>Sex</strong> <small class="text-danger">*</small></label>
                                        <select  class="form-control form-control-lg" name="sex" required>
                                            <option value="">--Select--</option>
                                            <option value="M" {{$staff->sex==='M'?'selected':''}}>Male</option>
                                            <option value="F" {{$staff->sex==='F'?'selected':''}}>Female</option>
                                            <option value="O" {{$staff->sex==='O'?'selected':''}}>Other</option>
                                        </select>
										<span class="text-danger">{{$errors->first('sex')}}</span>
                                        <label><strong>Image</strong></label>
                                        <input type="file" class="form-control form-control-lg" name="picture">
                                    </div>
                                    <div class="form-group col-md-8">
                                        <label><strong>Address</strong></label>
                                        <textarea  class="form-control form-control-lg" rows="8" name="address">{{$staff->address}}</textarea>
                                        <label for="status" class=" mt-3">Status</label>
                                        <input id="status"  type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" name="status"
											data-plugin="switchery" {{$staff->status?'checked':''}}>
											<label class="pt-3" for="status">Off</label>
								   </div>
										
                                </div>
                                
									<div >
                                    <div class="form-group">
                                     
                                        <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Update</button>
                                    </div>
                                </div>	

                            </form>
		  </div>
		 
	   </div>
	</div>

 </div>

@endsection
@section('script')
    <script type="text/javascript">
        $(document).ready(function () {
            $('#dob').datepicker({
                uiLibrary: 'bootstrap4',
                format: 'yyyy/mm/dd',
                footer: true, modal: true
            });
        });
    </script>
@endsection