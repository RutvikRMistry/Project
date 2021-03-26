@extends('backend.master')
@section('title',"Home Settings")
@section('content')
 <!-- Top Menubar Ends Here-->
 <div class="page">
    @include('backend.partials.leftbar.shortcuts')
	
      <div class="page-main">
        <div class="page-header">
          <h1 class="page-title">Home ( Counter section ) Edit</h1>
           
        </div>

     
            	<div style="width: 100%; padding: 30px;"> 
          <div class="panel-body" style="background-color: #fff; ">
              <div>
			<form action="{{route('backend.admin.frontdesk.website_setting.home.counter.edit',$counter->id)}}" method="post" enctype="multipart/form-data">
				{{csrf_field()}}
				<div class="row" >
				<div class="col-lg-8 ">
					<h4 >Name:<span class="text-danger">*</span></h4>     
					<input type="text" class="form-control" placeholder="enter here......" required id="name" name="name" value="{{$counter->name}}">
							<span class="text-danger">{{$errors->first('name')}}</span>
					   </div>
				</div>
				<br>
 
				<div class="row" >
				  <div class="col-lg-8 ">
					<h4 >Number:<span class="text-danger">*</span></h4>     
					<input type="text" class="form-control" placeholder="enter here ......." required id="number" name="number" value="{{$counter->number}}">
						<span class="text-danger">{{$errors->first('number')}}</span>
				  </div>
				</div>
				<br>
	 
           
				<div class="row" >
						<div class="col-md-9">
							<button type="reset" class="btn btn-outline-tsk"><i class="fa fa-refresh"></i> Reset</button>
							<button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Update</button>
						</div>
				</div>
            </div>
			</form>	
                  </div>         
          </div>
        </div>
    </div>
    
 </div>

@endsection
	