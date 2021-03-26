@extends('backend.master')
@section('title',"Paid Service")
@section('content')
 <!-- Top Menubar Ends Here-->
 <div class="page">
    @include('backend.partials.leftbar.shortcuts')
	

<div class="page-main">
   <div class="page-header">
      <h1 class="page-title">Paid Service</h1>
   </div>
   @if(Session::has('msg'))
			<div class="col-md-12">
				<div class="alert alert-success">{{session::get('msg')}}
				</div>
			</div>
			@endif
			@if(Session::has('errmsg'))
			<div class="col-md-12">
				<div class="alert alert-danger">{{session::get('errmsg')}}
				</div>
			</div>
			@endif
   <div style="width: 100%; padding: 30px;">
      <div class="panel-body" style="background-color: #fff; ">
         <header class="panel-heading">
            <div style="width: 50%; float: left;">
               <div class="tablesaw-sortable-switch tablesaw-bar-section">
                  <label>
                     <span class="btn tablesaw-btn btn-select tablesaw-btn-select">
                        <span aria-hidden="true">Sort By ↑</span>
                        <select>
                           <option selected="" value="0_asc">1</option>
                        </select>
                     </span>
                  </label>
               </div>
            </div>
            <div style="width: 50%; float: right;">
               <div class="btn-group" aria-label="Button group with nested dropdown" role="group" style="float: right; padding-top: 10px;">
                  <a href="{{route('backend.admin.frontdesk.hotel_configure.paid_service.create')}}">
                  <button type="button" class="btn btn-primary" style="margin: auto;"><i class="icon wb-plus mr-10" aria-hidden="true"></i>Add Service</button></a>
               </div>
            </div>
            <div>
               <table class="table table-hover dataTable table-striped w-full dtr-inline" data-plugin="dataTable" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info" style="width: 1783px;">
                  <thead>
                     <tr>
                        <th>SI. No.</th>
						<th>Icon</th>
                        <th>Title</th>
                        <th>Price</th>
                        <th>Status</th>
                        <th colspan="2">Actions</th>
                     </tr>
                  </thead>
                   <tbody>
                    @foreach($paid_services as $key=>$paid_service)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td><i class="fa fa-{{$paid_service->icon}}"></i> </td>
                        <td>{{$paid_service->title}}</td>
                        <td>{{number_format($paid_service->price,2)}} {{general_setting()->cur}}</td>
                        <td><span class="badge {{$paid_service->status?'badge-success':'badge-danger'}}">{{$paid_service->status?'Active':'Inactive'}}</span></td>
                        <td>
                            <a href="{{route('backend.admin.paid_service.edit',$paid_service->id)}}" class="btn btn-sm btn-icon btn-pure btn-default on-default edit-row"><i class="icon wb-edit"></i></a>
							<a href="javascript:void(0);" class="btn btn-sm btn-icon btn-pure btn-default on-default remove-row"
							data-toggle="tooltip" data-original-title="Remove" onclick="deleteBlog({{$paid_service->id}},'{{route('backend.admin.paid_service.delete',$paid_service->id)}}');"><i class="icon wb-trash" aria-hidden="true"></i></a>
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
<script type="text/javascript">			
	function deleteBlog(id, url){			
		if(confirm('Are You Sure You Want To Delete')){
			window.location.href = url;	
		}
	}	
</script>
@endsection
