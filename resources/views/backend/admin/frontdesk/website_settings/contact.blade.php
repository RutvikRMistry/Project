@extends('backend.master')
@section('title',"Contact Settings")
@section('content')
 <!-- Top Menubar Ends Here-->
 <div class="page">
    @include('backend.partials.leftbar.shortcuts')
	<div class="page-main">
   <div class="page-header"style="height: 5px;" >
      <h1 class="page-title">Contact ( All section )</h1>
   </div>
    @if(Session::has('msg'))
			<div class="col-md-12">
				<div class="alert alert-success">{{session::get('msg')}}
				</div>
			</div>
			@endif
   <div style="width: 100%; padding: 30px;">
      <div class="panel-body" style="background-color: #fff; ">
         <header class="panel-heading">
         <div>
            <form action="{{route('backend.admin.frontdesk.website_setting.contact')}}" method="post"/>
				{{csrf_field()}}
            <div class="row">
               <div class="col-md-12">
                  <h5>Title 1:<span class="text-danger">*</span></h5>
                  <div class="form-group row">
                     <label class="col-md-2form-control-lg form-control-label" for="inputSizingLarge"></label>
                     <div class="col-md-12">
                        <input type="text" class="form-control form-control-lg"id="title_1" name="title_1"
                           value="{{web_setting()->contact_all_section_title_1}}" required>
							<span class="text-danger">{{$errors->first('title_1')}}</span>
					 </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <h5>Title 2:<span class="text-danger">*</span></h5>
                  <div class="form-group row">
                     <label class="col-md-2form-control-lg form-control-label" for="inputSizingLarge"></label>
                     <div class="col-md-12">
                        <input type="text" class="form-control form-control-lg"  id="title_2" name="title_2" 
                          value="{{web_setting()->contact_all_section_title_2}}" required />
						<span class="text-danger">{{$errors->first('title_2')}}</span>
					 </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <h5>Phone (+01000000000,+01000000000):<span class="text-danger">*</span></h5>
                  <input type="text" class="form-control" value="{{web_setting()->contact_all_section_phone}}" required id="phone" name="phone" />
					<span class="text-danger">{{$errors->first('phone')}}</span>
			   </div>
            </div>
            <br>
            <div class="row">
               <div class="col-md-12">
                  <h5>Email And Web (support@or&or.com,yourewebsite.com):<span class="text-danger">*</span></h5>
                  <input type="text" class="form-control" required value="{{web_setting()->contact_all_section_email_web}}" id="email_web" name="email_web" >
					<span class="text-danger">{{$errors->first('email_web')}}</span>
			   </div>
            </div>
            <br>
            <div class="row">
               <div class="col-md-12">
                  <h5>Address:<span class="text-danger">*</span></h5>
                  <div class="form-group row">
                     <label class="col-md-2form-control-lg form-control-label" for="inputSizingLarge"></label>
                     <div class="col-md-12">
                        <textarea class="form-control" rows="3" required id="address" name="address">{{web_setting()->contact_all_section_address}}</textarea>
						<span class="text-danger">{{$errors->first('address')}}</span>
					 </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <h5>Map Script:<span class="text-danger">*</span></h5>
                  <div class="form-group row">
                     <label class="col-md-2form-control-lg form-control-label" for="inputSizingLarge"></label>
                     <div class="col-md-12">
                        <input type="text" class="form-control form-control-lg" required id="map" name="map" value="{{web_setting()->contact_all_section_map}}">
						<span class="text-danger">{{$errors->first('map')}}</span>
					 </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i>&nbsp;Save </button>
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
	