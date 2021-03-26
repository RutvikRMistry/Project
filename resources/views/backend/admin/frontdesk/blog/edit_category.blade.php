@extends('backend.master')
@section('title',"Edit Blog Category")
@section('content')
 <!-- Top Menubar Ends Here-->
 <div class="page">
    @include('backend.partials.leftbar.shortcuts')
	<div class="page-main">
   <div class="page-header">
      <h1 class="page-title">Edit Blog Category</h1>
   </div>
   <div style="width: 100%; padding: 30px;">
      <div class="panel-body" style="background-color: #fff; ">
         <div>
            <form action="{{route('backend.admin.frontdesk.website_setting.blog.category.edit',$category->id)}}" method="post" >
				{{csrf_field()}}
			   <div class="row">
                  <div class="col-lg-8 ">
                     <h4 >Name:<span class="text-danger">*</span></h4>
                     <input type="text" class="form-control" name="name" placeholder="Name"  value="{{$category->name}}" required>
						<span class="text-danger">{{$errors->first('name')}}</span>
				 </div>
               </div>
               <br>
               <div class="row">
                  <div class="col-lg-8 ">
                     <h4 >Status</h4>
                     <select class="form-control" data-plugin="select2" name="status" id="event-status">
							<option value="0" {{'0' == $category->status?'selected':''}} >Inactive</option>  
                          <option value="1" {{'1' == $category->status?'selected':''}} >Active</option>
                                   
                     </select>
                  </div>
               </div>
               <br>
               <div class="row" >
                  <div class="col-md-9">
                     <button type="submit" class="fa fa-save btn btn-success">&nbsp;Update </button>
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
	