@extends('backend.master')
@section('title',"Hotel Configuration ")
@section('content')
 <!-- Top Menubar Ends Here-->
 <div class="page">
	
      <div class="page-main">
        <div class="page-header">
          <h1 class="page-title">{{isset($specialPrice->title)?$specialPrice->title:""}}</h1>
           
        </div>

     
            	<div style="width: 100%; padding: 30px;"> 
				@include('backend.partials.flash_message')
          <div class="panel-body" style="background-color: #fff; ">
            
                <form action="{{route('backend.admin.special_price_update',$roomtype->id)}}" method="post"> 
				{{csrf_field()}}
				<input type="hidden" name="id" value="{{isset($specialPrice->id)?$specialPrice->id:""}}" />
					
				<div class="form-row justify-content-center">
                                <div class="form-group col-md-12">
                                    <label><strong>Title</strong></label>
                                    <input class="form-control" name="title" value="{{isset($specialPrice->title)?$specialPrice->title:""}}" required />
									
                                </div>
                            </div>
							
                            <div class="form-row justify-content-center">
                                <div class="form-group col-md-6">
                                    <label><strong>Start Date</strong></label>
									<span class="input-group-addon">
							<i class="icon wb-calendar" aria-hidden="true"></i>
							</span>
                                    <input type="text" class="form-control " id="start_time"  name="start_time" value="{{isset($specialPrice->start_time)?$specialPrice->start_time:""}}" required />
                                </div>
                                <div class="form-group col-md-6">
								
                                    <label><strong>End Date</strong></label>
									<span class="input-group-addon">
							<i class="icon wb-calendar" aria-hidden="true"></i>
							</span>
                                    <input type="text" class="form-control " id="end_time"  name="end_time" value="{{isset($specialPrice->end_time)?$specialPrice->end_time:""}}" required />
                                </div>
                            </div>
                            <hr/>
              
              <div>
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
						<input type="text" class="form-control" name="day[1][amount]" value="{{isset($specialPrice->day_1_amount)?$specialPrice->day_1_amount:""}}" required />
						<span class="text-danger">{{$errors->first('day[1][amount]')}}
				  </div>
                    <div class="col-md-3"style="margin: inherit;padding: inherit;">
                   <select class="form-control" name="day[1][type]" style="width: 100px" required >
                    <option class="text-success" value="ADD" {{isset($specialPrice->day_1)&&'ADD' == $specialPrice->day_1?'selected':''}}>Add</option>
                   <option class="text-danger" value="LESS" {{isset($specialPrice->day_1)&&'LESS' == $specialPrice->day_1?'selected':''}}>Less</option>
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
							<input type="text" class="form-control" name="day[2][amount]" value="{{isset($specialPrice->day_2_amount)?$specialPrice->day_2_amount:""}}" required />
							<span class="text-danger">{{$errors->first('day[2][amount]')}}				
						</div>
                    <div class="col-md-3"style="margin: inherit;padding: inherit;">
                   <select class="form-control" name="day[2][type]" style="width: 100px" required>
                     <option class="text-success" value="ADD" {{isset($specialPrice->day_2)&&'ADD' == $specialPrice->day_2?'selected':''}}>Add</option>
                   <option class="text-danger" value="LESS" {{isset($specialPrice->day_2)&&'LESS' == $specialPrice->day_2?'selected':''}}>Less</option>
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
						<input type="text" class="form-control" name="day[3][amount]" value="{{isset($specialPrice->day_3_amount)?$specialPrice->day_3_amount:""}}" required />
						<span class="text-danger">{{$errors->first('day[3][amount]')}}
					</div>
                    <div class="col-md-3"style="margin: inherit;padding: inherit;">
                  <select class="form-control" name="day[3][type]" style="width: 100px" required>
                    <option class="text-success" value="ADD" {{isset($specialPrice->day_3)&&'ADD' == $specialPrice->day_3?'selected':''}}>Add</option>
                   <option class="text-danger" value="LESS" {{isset($specialPrice->day_3)&&'LESS' == $specialPrice->day_3?'selected':''}}>Less</option>
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
                   <input type="text" class="form-control" name="day[4][amount]" value="{{isset($specialPrice->day_4_amount)?$specialPrice->day_4_amount:""}}" required />
					<span class="text-danger">{{$errors->first('day[4][amount]')}}
                  </div>
                    <div class="col-md-3"style="margin: inherit;padding: inherit;">
                     <select class="form-control" name="day[4][type]" style="width: 100px" required /> 
                      <option class="text-success" value="ADD" {{isset($specialPrice->day_4)&&'ADD' == $specialPrice->day_4?'selected':''}}>Add</option>
                   <option class="text-danger" value="LESS" {{isset($specialPrice->day_4)&&'LESS' == $specialPrice->day_4?'selected':''}}>Less</option>
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
					<input type="text" class="form-control" name="day[5][amount]" value="{{isset($specialPrice->day_5_amount)?$specialPrice->day_5_amount:""}}" required>
					<span class="text-danger">{{$errors->first('day[5][amount]')}}
				 </div>
                    <div class="col-md-3"style="margin: inherit;padding: inherit;">
                   <select class="form-control" name="day[5][type]" style="width: 100px" required>
                   <option class="text-success" value="ADD" {{isset($specialPrice->day_5)&&'ADD' == $specialPrice->day_5?'selected':''}}>Add</option>
                   <option class="text-danger" value="LESS" {{isset($specialPrice->day_5)&&'LESS' == $specialPrice->day_5?'selected':''}}>Less</option>
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
					<input type="text" class="form-control" name="day[6][amount]" value="{{isset($specialPrice->day_6_amount)?$specialPrice->day_6_amount:""}}" required />
					<span class="text-danger">{{$errors->first('day[6][amount]')}}
				  </div>
                    <div class="col-md-3"style="margin: inherit;padding: inherit;">
                   <select class="form-control" name="day[6][type]" style="width: 100px" required>
                     <option class="text-success" value="ADD" {{isset($specialPrice->day_6)&&'ADD' == $specialPrice->day_6?'selected':''}}>Add</option>
                   <option class="text-danger" value="LESS" {{isset($specialPrice->day_6)&&'LESS' == $specialPrice->day_6?'selected':''}}>Less</option>
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
				<input type="text" class="form-control" name="day[7][amount]" value="{{isset($specialPrice->day_7_amount)?$specialPrice->day_7_amount:""}}" required />
						<span class="text-danger">{{$errors->first('day[7][amount]')}}
				  </div>
                    <div class="col-md-3"style="margin: inherit;padding: inherit;">
                  <select class="form-control" name="day[7][type]" style="width: 100px" required>
                   <option class="text-success" value="ADD" {{isset($specialPrice->day_7)&&'ADD' == $specialPrice->day_7?'selected':''}}>Add</option>
                   <option class="text-danger" value="LESS" {{isset($specialPrice->day_7)&&'LESS' == $specialPrice->day_7?'selected':''}}>Less</option>
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
					<button type="submit" class="btn btn-tsk"><i class="fa fa-save"></i> Save</button>
				</div>
			  </div>
                    </div>

        
                  </div>
                 
          </div>
        </div>
    </div>
    
 
 </div>

@endsection
