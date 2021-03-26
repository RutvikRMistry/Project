@extends('backend.master')
@section('title',"Add Gallery Category")
@section('content')
 <!-- Top Menubar Ends Here-->
 <div class="page">
    @include('backend.partials.leftbar.shortcuts')
	<div class="page-main">
   <div class="page-header">
      <h1 class="page-title">Gallery ( Category ) Create</h1>
   </div>
   <div style="width: 100%; padding: 30px;">
      <div class="panel-body" style="background-color: #fff; ">
         <header class="panel-heading">
		<form action="{{route('admin.web_setting.gallery.category.store')}}" method="post">
			{{csrf_field()}}
		 <div>
            <div class="row" >
               <div class="col-lg-12">
                  <h4 class="example-title">Name:<span class="text-danger">*</span></h4>
                  <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}" required >
						<span class="text-danger">{{$errors->first('name')}}</span>
               </div>
            </div>
            <br>
            <div class="row" >
               <div class="col-md-9">
                  <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i>&nbsp;Save </button>
                  <button type="reset" class="btn btn-default btn-outline"><i class="fa fa-refresh"></i>&nbsp;Reset</button>
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
	