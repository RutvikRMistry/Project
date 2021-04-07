@extends('backend.master')
@section('title',"Menu Items")
@section('content')
 <!-- Top Menubar Ends Here-->
 <div class="page">
    @include('backend.partials.leftbar.shortcuts')
	<div class="page-main">
   <div class="page-header">
      <h1 class="page-title"> Menu Items</h1>
      <div class="page-header-actions">
         <a href="{{route('backend.admin.banquet.sttings.menu.item.add')}}">
         <button type="button" class="btn btn-primary" style="margin: auto;"><i class="icon wb-plus mr-10" aria-hidden="true"></i> Create</button></a>
      </div>
   </div>
   <div style="width: 100%; padding: 30px;">
   @include('backend.partials.flash_message')
      <div class="panel-body" style="background-color: #fff; ">
         <div class="row" >
            <div class="col-lg-3 ">
               <h5>Menu:*</h5>
               <select class="form-control" data-plugin="select2">
                  <optgroup label="Please Select">
                     <option value="R1">ALL Data</option>
                     <option value="R1">Birthday Party Menu</option>
                     <option value="R1">Brunch Menu</option>
                     <option value="R1">Ashlie Wedding</option>
                     <option value="R1">Holly Loscig Menu</option>
                  </optgroup>
               </select>
            </div>
            <div class="col-lg-3 ">
               <h5>Menu Types:*</h5>
               <select class="form-control" data-plugin="select2">
                  <optgroup label="Please Select">
                     <option value="R1">ALL Data</option>
                     <option value="R1">Menu Option 1</option>
                     <option value="R1">Menu Option 2</option>
                     <option value="R1">The Brunch Buffet</option>
                     <option value="R1">Bar Options</option>
                     <option value="R1">Hors d'oeuvre Reception</option>
                     <option value="R1">Grand Buffet Dinners</option>
                  </optgroup>
               </select>
            </div>
            <div class="col-lg-3 ">
               <h5> Sub Menu:*</h5>
               <select class="form-control" data-plugin="select2">
                  <optgroup label="Please Select">
                     <option value="R1">Starters</option>
                     <option value="R1">Bevarages</option>
                     <option value="R1">Dinner</option>
                     <option value="R1">Desert</option>
                  </optgroup>
               </select>
            </div>
         </div>
         <header class="panel-heading">
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
                  <div class="tablesaw-sortable-switch tablesaw-bar-section">
                     <label><input type="search" class="form-control form-control-sm" placeholder="Search.." aria-controls="DataTables_Table_0"></label>
                  </div>
               </div>
            </div>
            <div>
               <table class="table table-hover dataTable table-striped w-full dtr-inline" data-plugin="dataTable" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info" style="width: 1783px;">
                  <thead>
                     <tr>
                        <th>Menu </th>
                        <th>Type</th>
                        <th>Sub Type</th>
                        <th>Name </th>
                        <th>Price</th>
                        <th>Description </th>
                        <th>Action</th>
                     </tr>
                  </thead>
                  <tbody>
                     
                     @foreach($me as $me)
                     <tr>
                        <td>{{$me -> menu}}</td>
                        <td>{{$me -> type}}</td>
                        <td>{{$me -> sub}} </td>
                        <td>{{$me -> name}}  </td>
                        <td>{{$me -> price}} </td>
                        <td>{{$me -> description}}</td>
                        <td class="actions">
                           <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-editing save-row"
                              data-toggle="tooltip" data-original-title="Save" hidden><i class="icon wb-wrench" aria-hidden="true"></i></a>
                           <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-editing cancel-row"
                              data-toggle="tooltip" data-original-title="Delete" hidden><i class="icon wb-close" aria-hidden="true"></i></a>
                           <a href="{{route('backend.admin.banquet.sttings.menu.item.edit',$me->id)}}" class="btn btn-sm btn-icon btn-pure btn-default on-default edit-row"
                              data-toggle="tooltip" data-original-title="Edit"><i class="icon wb-edit" aria-hidden="true"></i></a>
                           <a href="{{route('backend.admin.banquet.sttings.menu.item.delete',$me->id)}}" class="btn btn-sm btn-icon btn-pure btn-default on-default remove-row"
                              data-toggle="tooltip" data-original-title="Remove"><i class="icon wb-trash" aria-hidden="true"></i></a>
                        </td>
                     </tr>
                     @endforeach
                     <!-- <tr>
                        <td>Brunch Menu  </td>
                        <td>The Brunch Buffet  </td>
                        <td>Hot Hors d'oeuvre  </td>
                        <td>Potato Chips With Onion Dip  </td>
                        <td>5 </td>
                        <td>All food and beverage will be provided for a maximum of one and a half hours   </td>
                        <td class="actions">
                           <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-editing save-row"
                              data-toggle="tooltip" data-original-title="Save" hidden><i class="icon wb-wrench" aria-hidden="true"></i></a>
                           <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-editing cancel-row"
                              data-toggle="tooltip" data-original-title="Delete" hidden><i class="icon wb-close" aria-hidden="true"></i></a>
                           <a href="{{route('backend.admin.banquet.sttings.menu.item.add')}}" class="btn btn-sm btn-icon btn-pure btn-default on-default edit-row"
                              data-toggle="tooltip" data-original-title="Edit"><i class="icon wb-edit" aria-hidden="true"></i></a>
                           <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default remove-row"
                              data-toggle="tooltip" data-original-title="Remove"><i class="icon wb-trash" aria-hidden="true"></i></a>
                        </td>
                     </tr>
                     <tr>
                        <td>Ashlie Wedding    </td>
                        <td>Begin with a Social Hour   </td>
                        <td>Beverages  </td>
                        <td>Cheese & Pepperoni Pizza   </td>
                        <td>9 </td>
                        <td>All food and beverage will be provided for a maximum of one and a half hours   </td>
                        <td class="actions">
                           <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-editing save-row"
                              data-toggle="tooltip" data-original-title="Save" hidden><i class="icon wb-wrench" aria-hidden="true"></i></a>
                           <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-editing cancel-row"
                              data-toggle="tooltip" data-original-title="Delete" hidden><i class="icon wb-close" aria-hidden="true"></i></a>
                           <a href="{{route('backend.admin.banquet.sttings.menu.item.add')}}" class="btn btn-sm btn-icon btn-pure btn-default on-default edit-row"
                              data-toggle="tooltip" data-original-title="Edit"><i class="icon wb-edit" aria-hidden="true"></i></a>
                           <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default remove-row"
                              data-toggle="tooltip" data-original-title="Remove"><i class="icon wb-trash" aria-hidden="true"></i></a>
                        </td>
                     </tr>
                     <tr>
                        <td>Ashlie Wedding    </td>
                        <td>Elegantly Plated Dinners    </td>
                        <td>Dinner   </td>
                        <td>Chicken Fingers With Assorted Dipping Sauces   </td>
                        <td>10</td>
                        <td>All food and beverage will be provided for a maximum of one and a half hours     </td>
                        <td class="actions">
                           <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-editing save-row"
                              data-toggle="tooltip" data-original-title="Save" hidden><i class="icon wb-wrench" aria-hidden="true"></i></a>
                           <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-editing cancel-row"
                              data-toggle="tooltip" data-original-title="Delete" hidden><i class="icon wb-close" aria-hidden="true"></i></a>
                           <a href="{{route('backend.admin.banquet.sttings.menu.item.add')}}" class="btn btn-sm btn-icon btn-pure btn-default on-default edit-row"
                              data-toggle="tooltip" data-original-title="Edit"><i class="icon wb-edit" aria-hidden="true"></i></a>
                           <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default remove-row"
                              data-toggle="tooltip" data-original-title="Remove"><i class="icon wb-trash" aria-hidden="true"></i></a>
                        </td>
                     </tr>
                     <tr>
                        <td>Holly Loscig Menu   </td>
                        <td>Builder a Burger  </td>
                        <td>Salads   </td>
                        <td>Regular and Decaffeinated Coffee   </td>
                        <td>3 </td>
                        <td>All food and beverage will be provided for a maximum of one and a half hours    </td>
                        <td class="actions">
                           <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-editing save-row"
                              data-toggle="tooltip" data-original-title="Save" hidden><i class="icon wb-wrench" aria-hidden="true"></i></a>
                           <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-editing cancel-row"
                              data-toggle="tooltip" data-original-title="Delete" hidden><i class="icon wb-close" aria-hidden="true"></i></a>
                           <a href="{{route('backend.admin.banquet.sttings.menu.item.add')}}" class="btn btn-sm btn-icon btn-pure btn-default on-default edit-row"
                              data-toggle="tooltip" data-original-title="Edit"><i class="icon wb-edit" aria-hidden="true"></i></a>
                           <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default remove-row"
                              data-toggle="tooltip" data-original-title="Remove"><i class="icon wb-trash" aria-hidden="true"></i></a>
                        </td>
                     </tr> -->
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

@endsection
	