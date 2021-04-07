@extends('backend.master')
@section('title',"New Call")
@section('content')
 <!-- Top Menubar Ends Here-->
 <div class="page">
    @include('backend.partials.leftbar.shortcuts')
    {{csrf_field()}}
	<div class="page-main">
   <div class="page-header">
      <h1 class="page-title">Call Details</h1>
   </div>
   <div style="width: 100%; padding: 30px;">
      <div class="panel-body" style="background-color: #fff; ">
         <form>
            <div>
               <div class="panel-body">
                  <div class="row">
                     <div class="col-md-3">
                        <div class="form-group">
                           <label for="title" class="control-label">Company Name</label> 
                           <div class="controls">
                              {{$call->company_name}}
                           </div>
                        </div>
                     </div>
                     <div class="col-md-3">
                        <div class="form-group">
                           <label for="title" class="control-label">Date</label>
                           <div class="controls">
                              {{$call->date}}
                           </div>
                        </div>
                     </div>
                     <div class="col-md-3">
                        <div class="form-group">
                           <label for="title" class="control-label">Call Duration(in min.)</label>
                           <div class="controls">
                              {{$call->duration}}
                           </div>
                        </div>
                     </div>
                     <div class="col-md-3">
                        <div class="form-group">
                           <label for="title" class="control-label">Main Staff</label> 
                           <div class="controls">
                              {{$call->ref_staff_id}}
                           </div>
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="form-group">
                           <label for="title" class="control-label">Call Summary</label> 
                           <div class="controls">
                              They are willing to hold an event on next months first week..
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="form-group">
                     <div class="controls"><a href="{{route('backend.admin.banquet.task.call')}}" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Back</a></div>
                  </div>
               </div>
            </div>
         </form>
      </div>        
   </div>
</div>
 </div>

@endsection
	