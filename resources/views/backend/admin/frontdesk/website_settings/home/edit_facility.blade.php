@extends('backend.master')
@section('title',"Home Settings")
@section('content')
 <!-- Top Menubar Ends Here-->
 <div class="page">
    @include('backend.partials.leftbar.shortcuts')
	<div class="page-main">
   <div class="page-header">
      <h1 class="page-title">Home ( Facility section ) Edit</h1>
   </div>
   <div style="width: 100%; padding: 30px;">
      <div class="panel-body" style="background-color: #fff; ">
         <div>
            <form action="{{route('backend.admin.frontdesk.website_setting.home.facility.edit',$facility->id)}}" method="post" enctype="multipart/form-data">
				{{csrf_field()}}
			  <div class="row" >
                  <div class="col-lg-8 ">
                     <h4>Name:<span class="text-danger">*</span></h4>
                     <input type="text" class="form-control" id="name" required name="name" value="{{($facility->name)}}" placeholder="Enter Your Name" >    
						<span class="text-danger">{{$errors->first('name')}}</span>
				  </div>
				  
               </div>
               <br/>
               <div class="row" >
                  <div class="col-lg-4 ">
                     <h4 >Image:<span class="text-danger">*</span></h4>
                     <input type="file" class="form-control" id="image" name="image" >
							<span class="text-danger">{{$errors->first('image')}}</span>
				  </div>
				  
               </div>
               <br>
               <div class="row" >
                  <div class="col-md-9">
                     <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i>&nbsp;Save </button>
                     <button type="reset" class="btn btn-default btn-outline"><i class="fa fa-refresh"></i>&nbsp;Reset</button>
                  </div>
               </div>
            </form>
         </div>
      </div>            
   </div>
</div>
 </div>

@endsection
	