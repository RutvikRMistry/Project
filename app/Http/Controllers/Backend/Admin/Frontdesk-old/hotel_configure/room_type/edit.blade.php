@extends('backend.master')
@section('title',"Room Type")
@section('content')
 <!-- Top Menubar Ends Here-->
 <div class="page">
    @include('backend.partials.leftbar.shortcuts')
	<div class="page-main">
	   <div class="page-header"style="height: 5px;" >
		  <h1 class="page-title">Create Room Type</h1>
		  <div class="page-header-actions"style="height: 5px;">
			 <a href="{{route('backend.admin.frontdesk.hotel_configure.room_type')}}">
			 <button type="button" class="btn btn-primary" > Room List</button></a>
		  </div>
	   </div>
	   <div style="width: 100%; padding: 30px;">
                <form action="{{route('backend.admin.frontdesk.hotel_configure.room_type.update',$roomType->id)}}" method="post" enctype="multipart/form-data">
					{{csrf_field()}}
                    <div class="form-row justify-content-center">
                        <div class="form-group col-md-6">
                            <label><strong>Title</strong> <small class="text-danger">*</small></label>
                            <input type="text" class="form-control form-control-lg" name="title" placeholder="Title" value="{{$roomType->title}}" required>
							<span class="text-danger">{{$errors->first('title')}}</span>
						</div>
                        <div class="form-group col-md-6">
                            <label><strong>Short Code</strong> <small class="text-danger">*</small></label>
                            <input type="text" class="form-control  form-control-lg" name="short_code" placeholder="Short Code" value="{{$roomType->short_code}}" required>
							<span class="text-danger">{{$errors->first('short_code')}}</span>
						</div>
                    </div>
                    <div class="form-row justify-content-center">
                        <div class="form-group col-md-12">
                            <label><strong>Description</strong><small> (optional)</small> </label>
                            <textarea id="description"  class="form-control form-control-lg" rows="4" name="description" placeholder="Description">{{ $roomType->description }}</textarea>
                        </div>
                    </div>
                    <div class="form-row justify-content-center">
                        <div class="form-group col-md-4">
                            <label><strong>Higher Capacity</strong> <small class="text-danger">*</small></label>
                            <input type="number" class="form-control form-control-lg" name="higher_capacity" placeholder="Higher Capacity" value="{{$roomType->higher_capacity}}" required>
							<span class="text-danger">{{$errors->first('higher_capacity')}}</span>
						</div>
                        <div class="form-group col-md-4">
                            <label><strong>Kids Capacity</strong><small class="text-danger">*</small></label>
                            <input type="number" class="form-control form-control-lg" name="kids_capacity" placeholder="Kids Capacity" value="{{$roomType->kids_capacity}}">
							<span class="text-danger">{{$errors->first('kids_capacity')}}</span>
						</div>
                        <div class="form-group col-md-4">
                            <label><strong>Base Price</strong><small class="text-danger">*</small></label>
                            <input type="number" class="form-control form-control-lg" name="base_price" placeholder="Base Price" value="{{$roomType->base_price}}">
							<span class="text-danger">{{$errors->first('base_price')}}</span>
                        </div>
                    </div>

                        <div class="form-row justify-content-center">
                           @if($amenities->count())
                            <div class="form-group col-md-6">
                                <label><strong>Amenities</strong></label>
                                <br/>
                                @foreach($amenities as $amenity)
                                    <div class="custom-control custom-checkbox checkbox-inline">
                                        <input type="checkbox"  class="custom-control-input" id="amenities_{{$amenity->id}}" name="amenities[]" value="{{$amenity->id}}" 
										{{in_array($amenity->id,$roomType->amenity->pluck('id')->toArray())?'checked':''}} >
                                        <label class="custom-control-label pr-4" for="amenities_{{$amenity->id}}">{{$amenity->name}}</label>
                                    </div>
                                @endforeach
                            </div>
                            @endif
                            <div class="form-group col-md-6">
                                <label for="inputAddress2" class=" mr-5">Status</label>
                                <input id="status"  data-width="100%" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" name="status" 
								data-plugin="switchery"{{$roomType->status?'checked':''}}>
                            </div>
                        </div>
                    <div class="form-row justify-content-center">
                        <div class="form-group col-sm-12">
                            <hr/>
                            <button type="submit" class="btn btn-lg mt-4 btn-tsk btn-block"><i class="fa fa-save"></i> update	</button>
                        </div>
                    </div>
                </form>
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
            }).panelInstance('description');
        });
    </script>
@endsection