@extends('backend.master')
@section('title',"Add Category")
@section('content')
 <!-- Top Menubar Ends Here-->
 <div class="page">
	@include('backend.partials.leftbar.shortcuts')
	<div class="page-main">
   <div class="page-header">
      <h1 class="page-title">Add Category</h1>
   </div>
   <div style="width: 100%; padding: 30px;">
      <div class="panel-body" style="background-color: #fff; ">
         <div>
            <form action="{{route('backend.admin.pos.setting.category.create')}}" method="post">
				{{csrf_field()}}
			<div class="show">
               <div class="row">
                  <div class="col-lg-12">
                     <h4 class="example-title">Category name<strong class="text-danger">*</strong></h4>
                     <input class="form-control"  placeholder="Category name" name="name" type="text" id="name" value="{{old('name')}}" required />
					 <span class="text-danger">{{$errors->first('name')}}</span>
                  </div>
               </div>
			
			   <input type="hidden" value="{{$category->business_id}}" name="business_id">
			   <input type="hidden" value="{{$category->created_by}}" name="created_by">
               <br>
               <div class="row">
                  <div class="col-lg-12">
                     <h4 class="example-title">Category Code:<strong class="text-danger">*</strong></h4>
                     <input class="form-control" placeholder="Category Code" name="short_code" type="text" id="short_code" value="{{old('short_code')}}" required />
					 <span class="text-danger">{{$errors->first('short_code')}}</span>
                     <h5 class="example-title">Category code is same as HSN code</h5>
                  </div>
               </div>
			</div>
			
               <div class="row">
                  <div class="col-lg-4 ">
                     <div class="checkbox-custom checkbox-default">
                        <input type="checkbox" data-toggle_id="parent_cat_div" name="add_as_sub_cat" 
                           id ="sub-category-checkbox" {{old('add_as_sub_cat') ? "checked" : ""}}/>
                        <label for="sub-category-checkbox" style="padding: inherit;">Add as sub-category</label>
                     </div>
                  </div>
               </div>
				@php
				$checkbox = old('add_as_sub_cat');
				$checkboxDis = "block";
				if($checkbox){
					$checkboxDis = "none";
				}
				$category = $category->parent_id;
				@endphp
				
			   <div class="row sub-category-checkbox" style="display:{{$checkboxDis}};">
                  <div class="col-lg-12 ">
				  <h4 class="example-title">Category Code:</h4>
							
							<select class="form-control" name="parent_id" id="parent_id">
							
								<option value="">--select--</option>	
							
								<option value="{{$category}}" {{old('parent_id') == $category ? 'selected' : ''}}>Parent</Option>
							
							</select>
					
                  </div>
               </div>
			   
			   <br/>
               <div class="row">
                  <div class="col-md-9">
                     <button type="submit" class="btn btn-primary">Save </button>
                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>
               </div>
            </form>
         </div>
      </div>
           
   </div>
</div>
 </div>
<script type="text/javascript">
$(document).ready(function(){
	$('#sub-category-checkbox').click(function(){
		if($(this).is(':checked')){
			$('.sub-category-checkbox').show(0);
		}else{
			$('.sub-category-checkbox').hide(0);
		}
	});
	
});
</script>
@endsection
	