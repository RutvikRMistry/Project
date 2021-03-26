@extends('backend.master')
@section('title',"Social Section")
@section('content')
 <!-- Top Menubar Ends Here-->
 <div class="page">
    @include('backend.partials.leftbar.shortcuts')
	<div class="page-main">
   <div class="page-header">
      <h1 class="page-title">General ( Social ) Edit</h1>
   </div>
   <div style="width: 100%; padding: 30px;">
      <div class="panel-body" style="background-color: #fff; ">
         <header class="panel-heading">
         <div>
            <form action="{{route('backend.admin.frontdesk.website_setting.social.update',$social->id)}}" method="post">
				{{csrf_field()}}
            <div class="row">
               <div class="col-lg-12">
                  <h5>Name:<span class="text-danger">*</span></h5>
                  <input type="text" class="form-control" value="{{$social->name}}" id="name" name="name" required />
				  <span class="text-danger">{{$errors->first('name')}}</span>
               </div>
            </div>
            <br>
            <div class="row">
               <div class="col-lg-12">
                  <h5>Icon:</h5>
                  <input type="text" class="form-control" value="{{$social->icon}}" id="icon" name="icon">
				  <span class="text-danger">{{$errors->first('icon')}}</span>
               </div>
            </div>
            <br>
            <div class="row">
               <div class="col-lg-12">
                  <h5>Link:<span class="text-danger">*</span></h5>
                  <input type="text" class="form-control" value="{{$social->link}}" id="link" name="link" required />
				  <span class="text-danger">{{$errors->first('link')}}</span>
               </div>
            </div>
            <br>
            <div class="row">
               <div class="col-lg-12">
                  <h5>Color:<span class="text-danger">*</span></h5>
                  <input type="text" class="form-control" value="{{$social->color}}" id="color" name="color" required />
				  <span class="text-danger">{{$errors->first('color')}}</span>
               </div>
            </div>
            <br>
            <div class="row" >
               <div class="col-lg-12">
                  <h5>Status</h5>
                 <select class="form-control" data-plugin="select2" name="status" id="event-status">
                        
                          <option value="1" {{'1' == $social->status ?'selected':''}} >Active</option>
                          <option value="0" {{'0' == $social->status ?'selected':''}} >Inactive</option>           
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
	