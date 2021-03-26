@extends('backend.master')
@section('title',"Hotel Configuration")
@section('content')
 <!-- Top Menubar Ends Here-->
 <div class="page">
   

<div class="page-main">
   <div class="page-header">
      <h1 class="page-title">{{$roomtype->title}}</h1>
   </div>
   <div style="width: 100%; padding: 30px;">
   @include('backend.partials.flash_message')
      <div class="panel-body" style="background-color: #fff; ">
         <header class="panel-heading">
         <div>
            <form action="{{route('backend.admin.frontdesk.regular_price_update',$roomtype->id)}}" method="post">
			<input type="hidden" name="id" value="{{isset($regularPrice->id)?$regularPrice->id:""}}" />
			{{csrf_field()}}
            <div class="row"style="height:65px" >
               <div class="col-md-4 col-xl-4">
                  <!-- Example Basic -->
                  <div class="example-wrap">
                     <div class="example">
                        <div class="row ">
                           <div class="col-md-3">
                              <h4 class="example-title" style=" padding: inherit;">Sunday:</h4>
                           </div>
                           <div class="col-md-6">
                              <input type="text" class="form-control" name="day[1][amount]" value="{{isset($regularPrice->day_1_amount)?$regularPrice->day_1_amount:""}}" required />
								<span class="text-danger">{{$errors->first('day[1][amount]')}}
                           </div>
                           <div class="col-md-3"style="margin: inherit;padding: inherit;">
                              <select class="form-control" data-plugin="select2"name="day[1][type]" style="width: 100px" required>
                                 <option class="text-success" value="ADD" {{isset($regularPrice->day_1)&&'ADD' == $regularPrice->day_1?'selected':''}}>Add</option>
								   <option class="text-danger" value="LESS" {{isset($regularPrice->day_1)&&'LESS' == $regularPrice->day_1?'selected':''}}>Less</option>
								   </select>
							  <span class="text-danger">{{$errors->first('day[1][type]')}}
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row" style="height:65px">
               <div class="col-md-4 col-xl-4">
                  <!-- Example Basic -->
                  <div class="example-wrap">
                     <div class="example">
                        <div class="row ">
                           <div class="col-md-3">
                              <h4 class="example-title" style=" padding: inherit;">Monday:</h4>
                           </div>
                           <div class="col-md-6">
                              <input type="text" class="form-control" name="day[2][amount]" value="{{isset($regularPrice->day_2_amount)?$regularPrice->day_2_amount:""}}" required />
								<span class="text-danger">{{$errors->first('day[2][amount]')}}
                           </div>
                           <div class="col-md-3"style="margin: inherit;padding: inherit;">
                              <select class="form-control" name="day[2][type]" style="width: 100px" required>
									<option class="text-success" value="ADD" {{isset($regularPrice->day_2)&&'ADD' == $regularPrice->day_2?'selected':''}}>Add</option>
									   <option class="text-danger" value="LESS" {{isset($regularPrice->day_2)&&'LESS' == $regularPrice->day_2?'selected':''}}>Less</option>
									   </select>
							  <span class="text-danger">{{$errors->first('day[2][type]')}}
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row" style="height:65px">
               <div class="col-md-4 col-xl-4">
                  <!-- Example Basic -->
                  <div class="example-wrap">
                     <div class="example">
                        <div class="row ">
                           <div class="col-md-3">
                              <h4 class="example-title" style=" padding: inherit;">Tuesday:</h4>
                           </div>
                           <div class="col-md-6">
                              <input type="text" class="form-control" name="day[3][amount]" value="{{isset($regularPrice->day_3_amount)?$regularPrice->day_3_amount:""}}" required />
								<span class="text-danger">{{$errors->first('day[3][amount]')}}
						   </div>
                           <div class="col-md-3"style="margin: inherit;padding: inherit;">
                              <select class="form-control" name="day[3][type]" style="width: 100px" required>
                               <option class="text-success" value="ADD" {{isset($regularPrice->day_3)&&'ADD' == $regularPrice->day_3?'selected':''}}>Add</option>
								<option class="text-danger" value="LESS" {{isset($regularPrice->day_3)&&'LESS' == $regularPrice->day_3?'selected':''}}>Less</option>
                              </select>
							  <span class="text-danger">{{$errors->first('day[3][type]')}}
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row" style="height:65px">
               <div class="col-md-4 col-xl-4">
                  <!-- Example Basic -->
                  <div class="example-wrap">
                     <div class="example">
                        <div class="row ">
                           <div class="col-md-3">
                              <h4 class="example-title" style=" padding: inherit;">Wednesday:</h4>
                           </div>
                           <div class="col-md-6">
                               <input type="text" class="form-control" name="day[4][amount]" value="{{isset($regularPrice->day_4_amount)?$regularPrice->day_4_amount:""}}" required />
								<span class="text-danger">{{$errors->first('day[4][amount]')}}
						   </div>
                           <div class="col-md-3"style="margin: inherit;padding: inherit;">
                              <select class="form-control" name="day[4][type]" style="width: 100px" required>
                                <option class="text-success" value="ADD" {{isset($regularPrice->day_4)&&'ADD' == $regularPrice->day_4?'selected':''}}>Add</option>
								<option class="text-danger" value="LESS" {{isset($regularPrice->day_4)&&'LESS' == $regularPrice->day_4?'selected':''}}>Less</option>
                              </select>
								<span class="text-danger">{{$errors->first('day[4][type]')}}
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row" style="height:65px">
               <div class="col-md-4 col-xl-4">
                  <!-- Example Basic -->
                  <div class="example-wrap">
                     <div class="example">
                        <div class="row ">
                           <div class="col-md-3">
                              <h4 class="example-title" style=" padding: inherit;">Thrusday:</h4>
                           </div>
                           <div class="col-md-6">
                              <input type="text" class="form-control" name="day[5][amount]" value="{{isset($regularPrice->day_5_amount)?$regularPrice->day_5_amount:""}}" required />
								<span class="text-danger">{{$errors->first('day[5][amount]')}}
						   </div>
                           <div class="col-md-3"style="margin: inherit;padding: inherit;">
                              <select class="form-control" name="day[5][type]" style="width: 100px" required>
                                <option class="text-success" value="ADD" {{isset($regularPrice->day_5)&&'ADD' == $regularPrice->day_5?'selected':''}}>Add</option>
								<option class="text-danger" value="LESS" {{isset($regularPrice->day_5)&&'LESS' == $regularPrice->day_5?'selected':''}}>Less</option>
                              </select>
							  <span class="text-danger">{{$errors->first('day[5][type]')}}
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row" style="height:65px">
               <div class="col-md-4 col-xl-4">
                  <!-- Example Basic -->
                  <div class="example-wrap">
                     <div class="example">
                        <div class="row ">
                           <div class="col-md-3">
                              <h4 class="example-title" style=" padding: inherit;">Friday:</h4>
                           </div>
                           <div class="col-md-6">
                             <input type="text" class="form-control" name="day[6][amount]" value="{{isset($regularPrice->day_6_amount)?$regularPrice->day_6_amount:""}}" required>
								<span class="text-danger">{{$errors->first('day[6][amount]')}}
						  </div>
                           <div class="col-md-3"style="margin: inherit;padding: inherit;">
                              <select class="form-control" name="day[6][type]" style="width: 100px" required>
                                 <option class="text-success" value="ADD" {{isset($regularPrice->day_6)&&'ADD' == $regularPrice->day_6?'selected':''}}>Add</option>
									<option class="text-danger" value="LESS" {{isset($regularPrice->day_6)&&'LESS' == $regularPrice->day_6?'selected':''}}>Less</option>
                              </select>
							  <span class="text-danger">{{$errors->first('day[6][type]')}}
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row" style="height:65px">
               <div class="col-md-4 col-xl-4">
                  <!-- Example Basic -->
                  <div class="example-wrap">
                     <div class="example">
                        <div class="row ">
                           <div class="col-md-3">
                              <h4 class="example-title" style=" padding: inherit;">Saturday:</h4>
                           </div>
                           <div class="col-md-6">
                              <input type="text" class="form-control" name="day[7][amount]" value="{{isset($regularPrice->day_7_amount)?$regularPrice->day_7_amount:""}}" required />
								<span class="text-danger">{{$errors->first('day[7][amount]')}}
                           </div>
                           <div class="col-md-3"style="margin: inherit;padding: inherit;">
                              <select class="form-control" name="day[7][type]" style="width: 100px" required>
                                <option class="text-success" value="ADD" {{isset($regularPrice->day_7)&&'ADD' == $regularPrice->day_7?'selected':''}}>Add</option>
								<option class="text-danger" value="LESS" {{isset($regularPrice->day_7)&&'LESS' == $regularPrice->day_7?'selected':''}}>Less</option>
                              </select>
							  <span class="text-danger">{{$errors->first('day[7][type]')}}
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="form-group row"  style="margin: auto;">
               <div class="col-md-9">
                  <button type="reset" class="btn btn-outline-tsk"><i class="fa fa-refresh"></i> Reset</button>
                  <button type="submit" class="btn btn-tsk"><i class="fa fa-save"></i> Update</button>
               </div>
            </div>
		</form>
         </div>
      </div>
      
   </div>
</div>
</div>


 </div>

@endsection
