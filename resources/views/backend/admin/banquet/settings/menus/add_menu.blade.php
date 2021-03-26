@extends('backend.master')
@section('title',"Add Menu")
@section('content')
 <!-- Top Menubar Ends Here-->
 <div class="page">
    @include('backend.partials.leftbar.shortcuts')	
	<div class="page-main">
   <div class="page-header">
      <h1 class="page-title"> Add Menu</h1>
   </div>
   <div style="width: 100%; padding: 30px;">
      <div class="panel-body" style="background-color: #fff; ">
         <header class="panel-heading">
        <div>
		<form action="{{route('backend.admin.banquet.sttings.menu.store')}}" method="post">
			{{csrf_field()}}
            <div class="row" >
               <div class="col-lg-6">
                  <h5>   Name:<span class="text-danger">*</span></h5>
                  <input type="text" class="form-control" placeholder=" " name="name" value="{{old('name')}}" required />
				  <span class="text-danger">{{$errors->first('name')}}</span>
               </div>
               <div class="col-lg-6">
                  <h5>Minimum Person:<span class="text-danger">*</span></h5>
                  <input type="number" class="form-control" data-plugin="asSpinner" name="min_person" value="{{old('min_person')}}" required />
				  <span class="text-danger">{{$errors->first('min_person')}}</span>
               </div>
            </div>
            <br>
            <div class="row" >
               <div class="col-lg-6">
                  <h5>Maximum Person:<span class="text-danger">*</span></h5>
                  <input type="number" class="form-control" data-plugin="asSpinner" name="max_person" value="{{old('max_person')}}" required />
				  <span class="text-danger">{{$errors->first('max_person')}}</span>
               </div>
               <div class="col-lg-6">
                  <h5>Table:<span class="text-danger">*</span></h5>
                  <input type="number" class="form-control" data-plugin="asSpinner" name="tables" value="{{old('tables')}}" required />
				  <span class="text-danger">{{$errors->first('tables')}}</span>
               </div>
            </div>
            <br>
            <div class="row" >
               <div class="col-md-9">
                  <button type="reset" class="btn btn-primary">Back </button>
                  <button type="submit" class="btn btn-default btn-outline">Ok</button>
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
	