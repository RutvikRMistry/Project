@extends('backend.master')
@section('title',"Hotel Configuration")
@section('style')
    <style>
        .img{
            position: relative;
            max-height: 191px;
        }
        .img .non_featured{
            display: none;
        }
       .img .featured{
           display: block;
           position: absolute;
           top:12px;
           left: 12px;
           z-index: 999;
           background: green;
           padding: 5px;
           font-weight: bold;
           color: white;
       }

       .img .delete-img-btn{
           display: none;
           position: absolute;
           bottom:12px;
           right: 12px;
           z-index: 999;
           padding: 5px;
           font-weight: bold;
           color: white;
       }
        .img:hover > .delete-img-btn{
            display: block;
        }
    </style>
    @endsection
@section('content')
 <!-- Top Menubar Ends Here-->
 <div class="page">
    @include('backend.partials.leftbar.shortcuts')
	

<div class="page-main">
   <div class="page-header"style="height: 5px;" >
      <h1 class="page-title">Room Type Detail</h1>
   </div>
   <div style="width: 100%; padding: 15px;">
      <div class="page-content container-fluid"  style="height: 400px;">
         <div class="row">
            <div class="col-xl-8">
               <!-- Panel Standard Editor -->
               <div class="panel" style="height: 400px;">
                  <div class="panel-body">
                     <div class="example">
                        <form>
                           <dl class="row">
                        <dt class="col-md-6">Title :</dt>
                        <dd class="col-md-6">{{$roomType->title}}</dd>
                        <dt class="col-md-6">Slug :</dt>
                        <dd class="col-md-6">{{$roomType->slug}}</dd>
                        <dt class="col-md-6">Short Code :</dt>
                        <dd class="col-md-6">{{$roomType->short_code}}</dd>
                        <dt class="col-md-6">Base Capacity :</dt>
                        <dd class="col-md-6">{{$roomType->base_capacity}}</dd>
                        <dt class="col-md-6">Higher  Capacity :</dt>
                        <dd class="col-md-6">{{$roomType->higher_capacity}}</dd>
                        <dt class="col-md-6">Extra Bed :</dt>
                        <dd class="col-md-6">{{$roomType->extra_bed?'YES':'NO'}}</dd>
                        <dt class="col-md-6">Kids  Capacity :</dt>
                        <dd class="col-md-6">{{$roomType->kids_capacity}}</dd>
                        <dt class="col-md-6">Amenities :</dt>
                        <dd class="col-md-6">
                            @foreach($roomType->amenity as $amenity)
                                <span class="badge bg-tsk text-white">{{$amenity->name}}</span>
                            @endforeach
                        </dd>
                        <dt class="col-md-6">Base Price :</dt>
                        <dd class="col-md-6">{{number_format($roomType->base_price,2)}} {{general_setting()->cur}}</dd>
                        <dt class="col-md-6">Additional Person Price :</dt>
                        <dd class="col-md-6">{{number_format($roomType->additional_person_price,2)}} {{general_setting()->cur}}</dd>
                        <dt class="col-md-6">Extra Bed Price :</dt>
                        <dd class="col-md-6">{{number_format($roomType->extra_bed_price,2)}} {{general_setting()->cur}}</dd>
                        <dt class="col-md-6">Status :</dt>
                        <dd class="col-md-6"><span class="badge {{$roomType->status?'badge-success':'badge-danger'}}">{{$roomType->status?'Active':'Inactive'}}</span></dd>
                    </dl>
                           
                        </form>
                     </div>
					 
                  </div>
               </div>
			   
               <!-- End Panel Standard Editor -->
            </div>
			
            <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h6><strong>Image</strong>
					<form action="{{route('backend.admin.room_type_upload_image')}}" class="float-right" method="post" enctype="multipart/form-data">
						{{csrf_field()}}
                            <input type="hidden" name="room_type" value="{{$roomType->id}}">
                            <input id="image" type="file" name="image" class="d-none">
                            <label for="image" class="btn btn-sm btn-outline-tsk"> <i class="fa fa-folder-open"></i> Add New Image</label>
                            <button type="submit" class="btn  btn-sm btn-tsk mb-2"><i class="fa fa-image"></i> Upload</button>
                        </form></h6><hr/>
                    <div class="row">
                        @foreach($roomType->roomTypeImage as $image)
                            <div class="col-md-6  p-2 ">
                                <div class="img img-thumbnail">
                                    <img src="{{asset('uploads/'.$image->image)}}" class="img-fluid img-responsive">
                                    <div class="featured" >
                                        @if($image->featured)
                                            FEATURED
                                        @else
                                            <a href="{{route('backend.admin.room_type_set_as_featured',[$roomType->id,$image->id])}}" class="btn btn-sm btn-danger">Set as featured</a>
                                        @endif
                                    </div>

                                    <div class="delete-img-btn">
                                        <form action="{{route('backend.admin.room_type_delete_image')}}" method="post" id="delete_img_form_{{$image->id}}">
											{{csrf_field()}}
                                            <input type="hidden" name="room_type" value="{{$roomType->id}}">
                                            <input type="hidden" name="id" value="{{$image->id}}">
                                        </form>
                                        <a href="#" onclick="$('#delete_img_form_{{$image->id}}').submit()" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> </a>
                                    </div>
                                </div>

                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
         </div>
      </div>
   </div>
   <div class="card  col-md-8 mt-45 ml-45" style="width:100% padding: 15px;">
                <div class=" page-content container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <label><strong>Description</strong></label><hr/>
                            {{$roomType->description}}
                        </div>
                    </div>
                </div>
            </div>
   <div class="col-lg-12">
      <!-- Panel Examples -->
      <div class="page-main">
         <div style="width: 100%; padding: 30px;">
            <div class="panel-body" style="background-color: #fff; ">
               <h3><b>Regular Price</b></h3>
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
                  <div>
                     <table class="table table-hover dataTable table-striped w-full dtr-inline" data-plugin="dataTable" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info" style="width: 1783px;">
                        <thead>
                           <tr>
                              <th>Sunday</th>
                              <th>Monday</th>
                              <th>Tuesday</th>
                              <th>Wednesday</th>
                              <th>Thrusday</th>
                              <th>Friday</th>
                              <th>Saturday</th>
                           </tr>
                        </thead>
                        <tbody>
                                <tr>
                                    @foreach(days_arr() as $key=>$value)
                                    <td >
                                        @if($roomType->getDayByRegularPrice($key)['amount_type'] =='ADD')
                                            {{number_format($roomType->getDayByRegularPrice($key)['amount'],2)}} {{general_setting()->cur}}
                                            @elseif($roomType->getDayByRegularPrice($key)['amount_type'] =='LESS')
                                        <span >(   {{number_format($roomType->getDayByRegularPrice($key)['amount'],2)}} {{general_setting()->cur}} )</span>
                                        @endif
                                    </td>
                                    @endforeach
                                </tr>
                        </tbody>
                     </table>
               </header>
               </div>
               </header>
            </div>
         </div>
      </div>
      <div class="col-xl-12">
         <!-- Panel Examples -->
         <div class="page-main">
            <div style="width: 100%; padding: 30px;">
               <div class="panel-body" style="background-color: #fff; ">
                  <h3><b>Special Price</b></h3>
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
                     <div>
                        <table class="table table-hover dataTable table-striped w-full dtr-inline" data-plugin="dataTable" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info" style="width: 1783px;">
                           <thead>
                              <tr>
								<th>Title</th>
								<th>Start Time To End Time</th>
                                 <th>Sunday</th>
                                 <th>Monday</th>
                                 <th>Tuesday</th>
                                 <th>Wednesday</th>
                                 <th>Thrusday</th>
                                 <th>Friday</th>
                                 <th>Saturday</th>
                              </tr>
                           </thead>
                           <tbody>
                                @foreach($roomType->specialPrice as $special_price)
                                <tr>
                                    <td>{{$special_price->title}}</td>
                                    <td>{{$special_price->start_time}} :<p class="text-2"> To</p> {{$special_price->end_time}}</td>
                                    @foreach(days_arr() as $key=>$value)
                                    <td class="text-center">
                                        @if($special_price->getDayByRegularPrice($key)['amount_type'] ==='ADD')
                                            {{number_format($special_price->getDayByRegularPrice($key)['amount'],2)}} {{general_setting()->cur}}
                                            @elseif($special_price->getDayByRegularPrice($key)['amount_type'] ==='LESS')
                                        <span class="text-danger">(   {{number_format($special_price->getDayByRegularPrice($key)['amount'],2)}} {{general_setting()->cur}} )</span>
                                        @endif
                                    </td>
                                    @endforeach
                                </tr>
                                    @endforeach
                                </tbody>
                        </table>
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
</div>


	 
 </div>

@endsection
 