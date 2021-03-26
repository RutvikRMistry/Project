@extends('backend.master')
@section('title',"Add Blog Category")
@section('content')
 <!-- Top Menubar Ends Here-->
 <div class="page">
    @include('backend.partials.leftbar.shortcuts')
	<div class="page-main">
   <div class="page-header">
      <h1 class="page-title">Add New Blog Category</h1>
   </div>
   <div style="width: 100%; padding: 30px;">
      <div class="panel-body" style="background-color: #fff; ">
         <div>
            <form action="{{route('backend.admin.frontdesk.website_setting.blog.category.create')}}" method="post" >
				{{csrf_field()}}
			   <div class="row">
                  <div class="col-lg-8 ">
                     <h4 >Name:<span class="text-danger">*</span></h4>
                     <input type="text" class="form-control" name="name" placeholder="Name" value="{{old('name')}}" required>
					 <span class="text-danger">{{$errors->first('name')}}</span>
                  </div>
               </div>
               <br>
               <div class="row">
                  <div class="col-lg-8 ">
                     <h4 >Status</h4>
                     <select class="form-control" data-plugin="select2" name="status" id="event-status">
                        <optgroup label="select">
                           <option value="">--Select--</option>
                           <option value="1">Active</option>
                           <option value="0">Inactive</option>
                        </optgroup>
                     </select>
                  </div>
               </div>
               <br>
               <div class="row" >
                  <div class="col-md-9">
                     <button type="submit" class="fa fa-save btn btn-success">&nbsp;Save </button>
                     <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>
</div>

@endsection
	