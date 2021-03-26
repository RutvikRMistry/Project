@extends('backend.master')
@section('title',"Edit Paid Service")
@section('content')
 <!-- Top Menubar Ends Here-->
 <div class="page">
    @include('backend.partials.leftbar.shortcuts')
	<div class="page-main">
	   <div class="page-header">
		  <h1 class="page-title">Edit Paid Service</h1>
		  <div class="page-header-actions">
			 <a href="{{route('backend.admin.frontdesk.hotel_configure.paid_service')}}">
			 <button type="button" class="btn btn-primary" > Paid Service List</button></a>
		  </div>
	   </div>
	   <div style="width: 100%; padding: 30px;">
		  <div class="panel-body" style="background-color: #fff; ">
			 <div class="card-body">
            <form action="{{route('backend.admin.paid_service.update',$paidService->id)}}" method="post" enctype="multipart/form-data">
			{{csrf_field()}}
                <div class="form-row justify-content-center">
                    <div class="form-group col-md">
                        <label><strong>Title</strong> <small class="text-danger">*</small></label>
                        <input type="text" class="form-control form-control-lg" name="title" placeholder="Title" value="{{$paidService->title}}" required />
						<span class="text-danger">{{$errors->first('title')}}</span>
					</div>
                    <div class="form-group col-md ">
                        <label><strong>Price</strong> <small class="text-danger">*</small></label>
                        <input type="text" class="form-control  form-control-lg" name="price" placeholder="Price" value="{{$paidService->price}}" required />
						<span class="text-danger">{{$errors->first('price')}}</span>
					</div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6 ">
                        <label><strong>Icon</strong> <small class="text-danger">*</small></label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                
                            </div>
                            <div class="input-group-prepend">
                                <div class="input-group-text">fa fa-</div>
                            </div>
                            <input type="text" class="form-control form-control-lg" name="icon" placeholder="Icon" value="{{$paidService->icon}}" >
							<span class="text-danger">{{$errors->first('icon')}}</span>
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputAddress2" class=" mr-5">Status</label>
                        <input id="status"  data-width="100%" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" name="status"
						data-plugin="switchery" {{$paidService->status?'checked':''}}>                    </div>
                </div>
                <div class="form-row justify-content-center">
                    <div class="form-group col-sm-12">
                        <hr/>
                        <button type="submit" class="btn btn-primary mt-4 btn-tsk btn-block mt-5"><i class="fa fa-save"></i>&nbsp;&nbsp;Update</button>
                    </div>
                </div>
            </form>
        </div>
		  </div>
		 
	   </div>
	</div>

 </div>

@endsection

@section('script')
    <script type="text/javascript">
        bkLib.onDomLoaded(function() {
            new nicEditor({
                iconsPath : '{{asset('assets/plugin/niceditor/nicEditorIcons.gif')}}',
                fullPanel : true
            }).panelInstance('long_desc');
        });
    </script>
@endsection