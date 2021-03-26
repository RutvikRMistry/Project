@extends('backend.master')
@section('title',"Create Tax")
@section('content')
 <!-- Top Menubar Ends Here-->
 <div class="page">
    @include('backend.partials.leftbar.shortcuts')
	<div class="page-main">
   <div class="page-header">
      <h1 class="page-title">Create Tax</h1>
      <div class="page-header-actions">
         <a href="{{route('backend.admin.frontdesk.hotel_configure.tax')}}">
         <button type="button" class="btn btn-primary" > Tax List</button></a>
      </div>
   </div>
   <div style="width: 100%; padding: 30px;">
      <div class="panel-body" style="background-color: #fff; ">
         <div>
            <form action="{{route('backend.admin.frontdesk.hotel_configure.tax.store')}}" method="post">
				{{csrf_field()}}
               <div class="row" >
                  <div class="col-lg-6">
                     <h4 >Name<strong class="text-danger">*</strong></h4>
                     <input type="text" class="form-control" placeholder="Name" name="name" value="{{old('name')}}" required />
					 <span class="text-danger">{{$errors->first('name')}}</span>
                  </div>
                  <div class="col-lg-6">
                     <h4 >Code<strong class="text-danger">*</strong></h4>
                     <input type="text" class="form-control" placeholder="Code" name="code" value="{{old('code')}}" required />
					 <span class="text-danger">{{$errors->first('code')}}</span>
                  </div>
               </div>
               <br>
               <div class="row" >
                  <div class="col-lg-6">
                     <h4 >Rate<strong class="text-danger">*</strong></h4>
                     <input type="text" name="rate" class="form-control" placeholder="Rate" value="{{old('rate')}}" required /> 
					 <span class="text-danger">{{$errors->first('rate')}}</span>
                  </div>
                  <div class="col-lg-6">
                     <h4 >Type<strong class="text-danger">*</strong></h4>
                     <select class="form-control" data-plugin="select2" name="type">
							<option value="">--Select--</option>
                           <option value="1" {{old('type') =='1'?'selected': ''}} >Percentage</option>
                           <option value="2" {{old('type') =='2'?'selected': ''}} >Fixed</option>
                        
                     </select>
					 <span class="text-danger">{{$errors->first('type')}}</span>
                  </div>
               </div>
               <br>
               <!-- End Panel Basic -->
               <div class="row" >
                  <div class="col-lg-6">
                     <h4 >Status:</h4>
                     <div class="input-group">
                        <div class="float-left mr-20">
                            <input type="checkbox" id="status" name="status" data-plugin="switchery"
							{{old('status')?'checked': ''}}/>
                        </div>
                        <label class="status" for="status">Off</label>
                     </div>
                  </div>
               </div>
               <br>
               <div class="row" >
                  <div class="col-md-9">
                     <button type="submit" class="btn btn-primary">Save </button>
                     <button type="reset" class="btn btn-default btn-outline">Reset</button>
                  </div>
               </div>
            </form>
         </div>
      </div>
           
   </div>
</div>
 </div>

@endsection
