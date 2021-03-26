@extends('backend.master')
@section('title',"Add Barcode")
@section('content')
 <!-- Top Menubar Ends Here-->
 <div class="page">
	@include('backend.partials.leftbar.shortcuts')
	<div class="page-main">
   <div class="page-header">
      <h1 class="page-title">Add barcode sticker setting</h1>
   </div>
   <div style="width: 100%; padding: 30px;">
      <div class="panel-body" style="background-color: #fff; ">
		<div>
	<form action="{{route('backend.admin.pos.setting.barcode.store')}}" method="post">
			{{csrf_field()}}
            <div class="row">
               <div class="col-lg-12">
                  <h5>Sticker Sheet setting Name<strong class="text-danger">*</strong></h5>
                  <input class="form-control"  placeholder="Sticker Sheet setting Name" name="name" type="text" id="name" aria-required="true" value="{{old('name')}}" required />
				   <span class="text-danger">{{$errors->first('name')}}</span>
               </div>
            </div>
            <br>
            <div class="row">
               <div class="col-md-12">
                  <h5>Sticker Sheet setting Description:</h5>
                  <div class="form-group row">
                     <label class="col-md-2form-control-lg form-control-label" for="inputSizingLarge"></label>
                     <div class="col-md-12">
                        <textarea class="form-control" placeholder="Sticker Sheet setting Description" rows="3" name="description" cols="50" id="description" required >{{old('description')}}</textarea>
						 <span class="text-danger">{{$errors->first('description')}}</span>
					 </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-lg-6">
                  <div class="checkbox">
                     <label>
                     <input id="is_continuous" name="is_continuous" type="checkbox" value="1" {{old('is_continuous')?'checked':''}}> Continous feed or rolls</label>
                  </div>
               </div>
            </div>
            <!-- End Panel Basic -->
            <div class="row">
               <div class="col-lg-6">
                  <h5>Additional top margin (In Inches)<strong class="text-danger">*</strong></h5>
                  <div class="form-group">
                     <div class="input-group input-group-icon">
                        <span class="input-group-addon">
                        <span class="glyphicon glyphicon-arrow-up" aria-hidden="true"></span>
                        </span>
                        <input class="form-control" placeholder="Additional top margin" min="0" step="1.0E-5"  name="top_margin" type="number"  id="top_margin" aria-required="true" value="{{old('top_margin')}}" required />
						
					 </div>
					  <span class="text-danger">{{$errors->first('top_margin')}}</span>
                  </div>
               </div>
               <div class="col-lg-6">
                  <h5>Additional left margin (In Inches)<strong class="text-danger">*</strong> </h5>
                  <div class="form-group">
                     <div class="input-group input-group-icon">
                        <span class="input-group-addon">
                        <span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span>
                        </span>
                        <input class="form-control" placeholder="Additional left margin" min="0" step="1.0E-5"  name="left_margin" type="number"  id="left_margin" aria-required="true" value="{{old('left_margin')}}" required />
					</div>
					<span class="text-danger">{{$errors->first('left_margin')}}</span>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-lg-6">
                  <h5>Width of sticker (In Inches)<strong class="text-danger">*</strong></h5>
                  <div class="form-group">
                     <div class="input-group input-group-icon">
                        <span class="input-group-addon">
                        <span class="fa fa-text-width" aria-hidden="true"></span>
                        </span>
                        <input class="form-control" placeholder="Width of sticker" min="0.1" step="1.0E-5"  name="width" type="number" id="width" aria-required="true" value="{{old('width')}}" required />
					 </div>
					  <span class="text-danger">{{$errors->first('width')}}</span>
                  </div>
               </div>
               <div class="col-lg-6">
                  <h5>Height of sticker (In Inches)<strong class="text-danger">*</strong></h5>
                  <div class="form-group">
                     <div class="input-group input-group-icon">
                        <span class="input-group-addon">
                        <span class="fa fa-text-height" aria-hidden="true"></span>
                        </span>
                        <input class="form-control" placeholder="Height of sticker" min="0.1" step="1.0E-5"  name="height" type="number" id="height" aria-required="true" value="{{old('height')}}" required />
					 </div>
					 <span class="text-danger">{{$errors->first('height')}}</span>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-lg-6">
                  <h5>Paper width (In Inches)<strong class="text-danger">*</strong></h5>
                  <div class="form-group">
                     <div class="input-group input-group-icon">
                        <span class="input-group-addon">
                        <span class="fa fa-text-width" aria-hidden="true"></span>
                        </span>
                        <input class="form-control" placeholder="Paper width" min="0.1" step="1.0E-5"  name="paper_width" type="number" id="paper_width" aria-required="true" value="{{old('paper_width')}}" required />
					 </div>
					 <span class="text-danger">{{$errors->first('paper_width')}}</span>
                  </div>
               </div>
               <div class="col-lg-6">
                  <h5>Paper height (In Inches)<strong class="text-danger">*</strong></h5>
                  <div class="form-group">
                     <div class="input-group input-group-icon">
                        <span class="input-group-addon">
                        <span class="fa fa-ellipsis-h" aria-hidden="true"></span>
                        </span>
                        <input class="form-control" placeholder="Paper height" min="0.1" step="1.0E-5"  name="paper_height" type="number" id="paper_height" aria-required="true" value="{{old('paper_height')}}" required /> 
                     </div>
					 <span class="text-danger">{{$errors->first('paper_height')}}</span>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-lg-6">
                  <h5>Stickers in one row<strong class="text-danger">*</strong></h5>
                  <div class="form-group">
                     <div class="input-group input-group-icon">
                        <span class="input-group-addon">
                        <span class="glyphicon glyphicon-resize-vertical" aria-hidden="true"></span>
                        </span>
                        <input class="form-control" placeholder="Stickers in one row" min="1" name="stickers_in_one_row" type="number" id="stickers_in_one_row" aria-required="true" value="{{old('stickers_in_one_row')}}" required />
                     </div>
					  <span class="text-danger">{{$errors->first('stickers_in_one_row')}}</span>
                  </div>
               </div>
               <div class="col-lg-6">
                  <h5>No. of Stickers per sheet<strong class="text-danger">*</strong></h5>
                  <div class="form-group">
                     <div class="input-group input-group-icon">
                        <span class="input-group-addon">
                        <span class="fa fa-th" aria-hidden="true"></span>
                        </span>
                        <input class="form-control" placeholder="No. of Stickers per sheet" min="1"  name="stickers_in_one_sheet" type="number" id="stickers_in_one_sheet" aria-required="true" value="{{old('stickers_in_one_sheet')}}" required />
                     </div>
					 <span class="text-danger">{{$errors->first('stickers_in_one_sheet')}}</span>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-lg-6">
                  <h5>Distance between two rows (In Inches)<strong class="text-danger">*</strong></h5>
                  <div class="form-group">
                     <div class="input-group input-group-icon">
                        <span class="input-group-addon">
                        <span class="glyphicon glyphicon-resize-vertical" aria-hidden="true"></span>
                        </span>
                        <input class="form-control" placeholder="Distance between two rows" min="0" step="1.0E-5" name="row_distance" type="number" value="{{old('row_distance')}}" id="row_distance" aria-required="true" required />
                     </div>
					  <span class="text-danger">{{$errors->first('row_distance')}}</span>
                  </div>
               </div>
               <div class="col-lg-6">
                  <h5>Distance between two columns (In Inches)<strong class="text-danger">*</strong></h5>
                  <div class="form-group">
                     <div class="input-group input-group-icon">
                        <span class="input-group-addon">
                        <span class="glyphicon glyphicon-resize-horizontal" aria-hidden="true"></span>
                        </span>
                        <input class="form-control" placeholder="Distance between two columns" min="0" step="1.0E-5"  name="col_distance" type="number" value="{{old('col_distance')}}" id="col_distance" aria-required="true" required />
                     </div>
					 <span class="text-danger">{{$errors->first('col_distance')}}</span>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-lg-6">
                  <div class="checkbox">
                     <label>
                     <input name="is_default" value="1" type="checkbox"  {{old('is_default')}}> Set as default</label>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-9">
                  <button type="submit" class="btn btn-primary">Save </button>
               </div>
            </div>
         </div>
      </div>           
   </div>
   </form>
</div>
 </div>

@endsection
	