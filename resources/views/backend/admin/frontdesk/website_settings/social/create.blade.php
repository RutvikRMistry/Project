@extends('backend.master')
@section('title',"Social Section")
@section('content')
 <!-- Top Menubar Ends Here-->
 <div class="page">
    @include('backend.partials.leftbar.shortcuts')
	<div class="page-main">
   <div class="page-header">
      <h1 class="page-title">General ( Social ) Create</h1>
   </div>
   <div style="width: 100%; padding: 30px;">
      <div class="panel-body" style="background-color: #fff; ">
         <header class="panel-heading">
         <div>
            <form action="{{route('backend.admin.frontdesk.website_setting.social.create')}}" method="post">
				{{csrf_field()}}
            <div class="row">
               <div class="col-lg-12">
                  <h5>Name:<span class="text-danger">*</span></h5>
                  <input type="text" class="form-control" placeholder="" id="name" required name="name" value="{{old('name')}}">
					<span class="text-danger">{{$errors->first('name')}}</span>
			   </div>
            </div>
            <br>
            <div class="row">
               <div class="col-lg-12">
                  <h5>Icon:</h5>
                  <input type="text" class="form-control" placeholder="" id="icon" name="icon" value="{{old('icon')}}">
					<span class="text-danger">{{$errors->first('icon')}}</span>
			   </div>
            </div>
            <br>
            <div class="row">
               <div class="col-lg-12">
                  <h5>Link:<span class="text-danger">*</span></h5>
                  <input type="text" class="form-control" placeholder="" required id="link" name="link" value="{{old('link')}}">
					<span class="text-danger">{{$errors->first('link')}}</span>
			   </div>
            </div>
            <br>
            <div class="row">
               <div class="col-lg-12">
                  <h5>Color:<span class="text-danger">*</span></h5>
                  <input type="text" class="form-control" placeholder="" required id="color" name="color" value="{{old('color')}}">
					<span class="text-danger">{{$errors->first('color')}}</span>
               </div>
            </div>
            <br>
            <div class="row" >
               <div class="col-lg-12">
                  <h5>Status</h5>
                  <select class="form-control" data-plugin="select2" name="status" id="status">
                     <option value="1" {{old('status') == '1'? 'checked' : ''}}>Active</option>
                     <option value="0" {{old('status') == '0'? 'checked' : ''}} >Inactive</option>
                  </select>
               </div>
            </div>
            <br>
            <div class="row">
               <div class="col-lg-12">
                  <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i>&nbsp;Save </button>
                  <button type="reset" class="btn btn-default btn-outline"><i class="fa fa-refresh"></i>&nbsp;Reset</button>
               </div>
            </div>
         </div>
      </div>            
   </div>
</div>
</div>
</div>
</div>
@endsection
	