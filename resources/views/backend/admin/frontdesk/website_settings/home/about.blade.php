@extends('backend.master')
@section('title',"Home Settings")
@section('content')
 <!-- Top Menubar Ends Here-->
 <div class="page">
    @include('backend.partials.leftbar.shortcuts')
<div class="page-main">
   <div class="page-header">
      <h1 class="page-title">Home ( About section )</h1>
   </div>
 
   <div style="width: 100%; padding: 30px;">
   @include('backend.partials.flash_message')
      <div class="panel-body" style="background-color: #fff; ">
         <div>
            <form action="{{route('backend.admin.frontdesk.website_setting.home.about')}}" method="post" enctype="multipart/form-data">
				{{csrf_field()}}
               <div class="row" >
                  <div class="col-md-12">
                     <h4 >Title 1:<span class="text-danger">*</span></h4>
                     <div class="form-group row">
                        <label class="col-md-2form-control-lg form-control-label" for="inputSizingLarge"></label>
                        <div class="col-md-12">
                           <input type="text" required class="form-control form-control-lg" id="title" name="title" value="{{web_setting()->home_about_section_title}}">
                        </div>
						<span class="text-danger">{{$errors->first('title')}}</span>
                     </div>
                  </div>           
               </div>
               <div class="row" >
                  <div class="col-md-12">
                     <h4 >Short Detail:<span class="text-danger">*</span></h4>
                     <div class="form-group row">
                        <label class="col-md-2form-control-lg form-control-label" for="inputSizingLarge"></label>
                        <div class="col-md-12">
                           <textarea class="form-control" required rows="3" id="short_details" name="short_details">{{web_setting()->home_about_section_short_details}}</textarea>
                        </div>
						<span class="text-danger">{{$errors->first('short_details')}}</span>
                     </div>
                  </div>
               </div>
               <div class="row" >
                  <div class="col-md-12">
                     <h4>Long Detail:<span class="text-danger">*</span></h4>
                     <div class="form-group row">
                        <label class="col-md-2form-control-lg form-control-label" for="inputSizingLarge"></label>
                        <div class="col-md-12">
                           <textarea class="form-control" required rows="6"id="long_details" name="long_details">{{web_setting()->home_about_section_long_details}}</textarea>
                        </div>
						<span class="text-danger">{{$errors->first('long_details')}}</span>
                     </div>
                  </div>
               </div>
               <div class="row" >
                  <div class="form-group">
                     <div class="col-md-6">
                        <h5>Image:</h5>
                        <div class="img-responsive">
                           <img src="http://hotels.kintudesigns.com/assets/frontend/img/home/banner_section/banner_image.jpg" style="height: 100px">
                        </div>
                        <br/>
                        <input type="file" id="input-file-events" class="dropify-event" data-default-file="../../assets/photos/placeholder.png"/>  
                        <input type="file" id="about_image" name="about_image[jpg]" class="d-none">
                     </div>
                  </div>
                  <div class="form-group">
                     <div class="col-md-6">
                        <h5>Image:</h5>
                        <div class="img-responsive">
                           <img src="http://hotels.kintudesigns.com/assets/frontend/img/home/banner_section/banner_image.jpg" style="height: 100px">
                        </div>
                        <br/>
                        <input type="file" id="input-file-events" class="dropify-event" data-default-file="../../assets/photos/placeholder.png"/>  
                        <input type="file" id="sign_image" name="sign_image[png]" class="d-none">
                     </div>
                  </div>
               </div>
               <br>
               <div class="row" >
                  <div class="col-md-9">
                     <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i>&nbsp;Update </button>
                  </div>
               </div>
           
         </div>
         </header>
      </div>
   </div>
   <div class="page-main">
      <div class="page-header">
         <h1 class="page-title">ABOUT SECTION ITEM</h1>
      </div>
      <div style="width: 100%; padding: 30px;">
         <div class="panel-body" style="background-color: #fff; ">
            <header class="panel-heading">
			
               <div class="row">
			   
                  <div class="col-lg-4">
                     <h4 class="example-title">Title 1:<span class="text-danger">*</span></h4>
                     <input type="text" class="form-control" value="{{web_setting()->home_team_section_title_1}}"   required id="title_1" name="title_1" >
						<span class="text-danger">{{$errors->first('title_1')}}</span>
				  </div>
                  <div class="col-lg-4 form-group">
                     <h4 class="example-title">Title 2:<span class="text-danger">*</span></h4>
                     <input type="text" class="form-control" id="title_2" name="title_2" value="{{web_setting()->home_team_section_title_2}}" required>
							<span class="text-danger">{{$errors->first('title_2')}}</span>
				  </div>
                  <div class="col-lg-4 form-group" style="margin: auto;">
                     <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i>&nbsp;Save</button>
                  </div>
				
               </div>
			    </form>
               <div style="width: 50%; float: left;">
                  <div class="tablesaw-sortable-switch tablesaw-bar-section">
                     <label>
                        <span class="btn tablesaw-btn btn-select tablesaw-btn-select">
                           <span aria-hidden="true">Sort By ↑</span>
                           <select>
                              <option selected="" value="0_asc">Reservation No. ↑</option>
                              <option value="0_desc">Reservation No. ↓</option>
                              <option value="1_asc">Reservation Date</option>
                              <option value="1_desc">Reservation Date</option>
                              <option value="2_asc">Guest ↑</option>
                              <option value="2_desc">Guest ↓</option>
                              <option value="3_asc">Checkin ↑</option>
                              <option value="3_desc">Checkin ↓</option>
                              <option value="4_asc">Checkout</option>
                              <option value="4_desc">Checkout</option>
                           </select>
                        </span>
                     </label>
                  </div>
               </div>
               <div style="width: 50%; float: right;">
                  <div class="btn-group" aria-label="Button group with nested dropdown" role="group" style="float: right; padding-top: 10px;">
                     <a href="{{route('backend.admin.frontdesk.website_setting.home.team')}}">
                     <button type="button" class="btn btn-primary" style="margin: auto;"><i class="icon wb-plus mr-10" aria-hidden="true"></i>Add New</button></a>
                  </div>
               </div>
               <div>
                  <table class="table table-hover dataTable table-striped w-full dtr-inline" data-plugin="dataTable" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info" style="width: 1783px;">
                     <thead>
                        <tr>
                           <th>SI. No.</th>
                           <th>Image</th>
                           <th>Name</th>
                           <th>Title</th>
                           <th>Actions</th>
                        </tr>
                     </thead>
                     <tbody>
						@php
							$cnt=1;
						@endphp
						@foreach($team as $team)
                        <tr class="gradeA">
						
						
                           <td>{{$cnt++}}</td>
                           <td><img src="{{ asset('uploads/'.$team->image)}}" alt=".." width="100"></td>
                           <td>{{$team->name}}</td>
                           <td>{{$team->title}}</td>
                           
						   
						
                           <td class="actions">
                              <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-editing save-row"
                                 data-toggle="tooltip" data-original-title="Save" hidden><i class="icon wb-wrench" aria-hidden="true"></i></a>
                              <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-editing cancel-row"
                                 data-toggle="tooltip" data-original-title="Delete" hidden><i class="icon wb-close" aria-hidden="true"></i></a>
                              <a href="{{route('backend.admin.frontdesk.website_setting.home.team.edit_team',$team->id)}}" class="btn btn-sm btn-icon btn-pure btn-default on-default edit-row"
                                 data-toggle="tooltip" data-original-title="Edit"><i class="icon wb-edit" aria-hidden="true"></i></a>                     
								 
						   <a href="javascript:void(0);" class="btn btn-sm btn-icon btn-pure btn-default on-default remove-row"
							data-toggle="tooltip" data-original-title="Remove" onclick="deleteBlog({{$team->id}},'{{route('backend.admin.frontdesk.website_setting.home.team.delete_team',$team->id)}}');"><i class="icon wb-trash" aria-hidden="true"></i></a>
						   </td>
                        </tr>
						@endforeach
                     </tbody>
                  </table>
                  <div>
                     <div style="padding: 30px; background-color: #fff;">
                        <div class="row">
                           <div style="width: 50%; background-color: #fff; float: left;">
                              <div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite" style="margin-top: 25px;">Showing 1 to 10 of 12 entries</div>
                           </div>
                           <div style="width: 50%; background-color: #fff;    float: right;">
                              <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
                                 <ul class="pagination" style="float: right; margin-top: 10px;">
                                    <li class="paginate_button page-item previous disabled" id="DataTables_Table_0_previous"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li>
                                    <li class="paginate_button page-item active"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                                    <li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="2" tabindex="0" class="page-link">2</a></li>
                                    <li class="paginate_button page-item next" id="DataTables_Table_0_next"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="3" tabindex="0" class="page-link">Next</a></li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
            </header>
            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
            <div class="col-sm-12 col-md-6"><div id="DataTables_Table_0_filter" class="dataTables_filter"></div>
            </div>
            </div>
            <div class="row"></div>
            </div>
         </div>               
      </div>
   </div>
</div>
 </div>
<script type="text/javascript">			
	function deleteBlog(id, url){			
		if(confirm('Are You Sure You Want To Delete')){
			window.location.href = url;	
		}
	}	
</script>
@endsection
	