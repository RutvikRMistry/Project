@extends('backend.master')
@section('title',"Add Equipment")
@section('content')
 <!-- Top Menubar Ends Here-->
 <div class="page">
    @include('backend.partials.leftbar.shortcuts')	
	<div class="page-main">
   <div class="page-header">
      <h1 class="page-title">Add Equipment</h1>
   </div>
   <div style="width: 100%; padding: 30px;">
      <div class="panel-body" style="background-color: #fff; ">
         <header class="panel-heading">
        <div>
		<form action="{{route('backend.admin.banquet.sttings.function.equipment.update',$equipment->id)}}" method="post">
			{{csrf_field()}}
            <div class="row" >
               <div class="col-lg-6">
                  <h4>   Name:<span class="text-danger">*</span></h4>
                  <input type="text" class="form-control" placeholder=" " name="name" value="{{$equipment->name}}" required />
				  <span class="text-danger">{{$errors->first('name')}}</span>            
				</div>
               <div class="col-lg-6">
                  <h4>  Price:<span class="text-danger">*</span></h4>
                  <input type="text" class="form-control" placeholder=" " name="price" value="{{$equipment->price}}" required />
				  <span class="text-danger">{{$errors->first('price')}}</span>  
               </div>
            </div>
            <br>
            <div class="row" >
               <div class="col-md-9">
                  <button type="reset" class="btn btn-primary fa fa-refresh">&nbsp;Back </button>
                  <button type="submit" class="btn btn-default btn-outline">Update</button>
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
	