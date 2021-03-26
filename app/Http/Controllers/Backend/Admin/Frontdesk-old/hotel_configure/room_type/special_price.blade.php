@extends('backend.master')
@section('title',"Dashboard")
@section('content')
 <!-- Top Menubar Ends Here-->
 <div class="page">
	
      <div class="page-main">
        <div class="page-header">
          <h1 class="page-title">Special Price For Standard Room - 1 Double Bed</h1>
           
        </div>

     
            	<div style="width: 100%; padding: 30px;"> 
          <div class="panel-body" style="background-color: #fff; ">
            <header class="panel-heading">
                     

              
    <div>
	<form action="{{route('backend.admin.special_price_update',$specialPrice->id)}}" method="post">
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
<input type="text" class="form-control" name="day[1][amount]" value="0">
                  </div>
                    <div class="col-md-3"style="margin: inherit;padding: inherit;">
                   <select class="form-control" name="day[1][type]" style="width: 100px">
                   <option class="text-success" value="ADD">Add</option>
                    <option class="text-danger" value="LESS">Less</option>
                  </select>
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
<input type="text" class="form-control" name="day[2][amount]" value="0">
                  </div>
                    <div class="col-md-3"style="margin: inherit;padding: inherit;">
                   <select class="form-control" name="day[2][type]" style="width: 100px">
                     <option class="text-success" value="ADD">Add</option>
                    <option class="text-danger" value="LESS">Less</option>
                  </select>
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
<input type="text" class="form-control" name="day[3][amount]" value="0">
                  </div>
                    <div class="col-md-3"style="margin: inherit;padding: inherit;">
                  <select class="form-control" name="day[3][type]" style="width: 100px">
                   <option class="text-success" value="ADD">Add</option>
                   <option class="text-danger" value="LESS">Less</option>
                  </select>
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
                   <input type="text" class="form-control" name="day[4][amount]" value="0">

                  </div>
                    <div class="col-md-3"style="margin: inherit;padding: inherit;">
                     <select class="form-control" name="day[4][type]" style="width: 100px">
                      <option class="text-success" value="ADD">Add</option>
                      <option class="text-danger" value="LESS">Less</option>
                      </select>
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
<input type="text" class="form-control" name="day[5][amount]" value="0">
                  </div>
                    <div class="col-md-3"style="margin: inherit;padding: inherit;">
                   <select class="form-control" name="day[5][type]" style="width: 100px">
                    <option class="text-success" value="ADD">Add</option>
                     <option class="text-danger" value="LESS">Less</option>
                     </select>
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
<input type="text" class="form-control" name="day[6][amount]" value="0">
                  </div>
                    <div class="col-md-3"style="margin: inherit;padding: inherit;">
                   <select class="form-control" name="day[6][type]" style="width: 100px">
                      <option class="text-success" value="ADD">Add</option>
                       <option class="text-danger" value="LESS">Less</option>
                    </select>
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
<input type="text" class="form-control" name="day[7][amount]" value="0">
                  </div>
                    <div class="col-md-3"style="margin: inherit;padding: inherit;">
                  <select class="form-control" name="day[7][type]" style="width: 100px">
                   <option class="text-success" value="ADD">Add</option>
                   <option class="text-danger" value="LESS">Less</option>
                   </select>
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
			</form>
                    </div>

        
                  </div>
                 
          </div>
        </div>
    </div>
    
 
 </div>

@endsection
