@extends('backend.master')
@section('title',"FAQ Section")
@section('content')
 <!-- Top Menubar Ends Here-->
 <div class="page">
    @include('backend.partials.leftbar.shortcuts')
	<div class="page-main">
   <div class="page-header">
      <h1 class="page-title">Faq ( Faq section ) Edit</h1>
   </div>
   <div style="width: 100%; padding: 30px;">
      <div class="panel-body" style="background-color: #fff; ">
         <header class="panel-heading">
         <div>
            <div class="modal-body">
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <form action="{{route('backend.admin.frontdesk.website_setting.faq.update',$faq->id)}}" method="post">
								{{csrf_field()}}
							<div class="form-group">
                                    <label for="question">Question:<span class="text-danger">*</span> </label>
                                    <input type="text" class="form-control" id="question" name="question" value="{{$faq->question}}" required>
									<span class="text-danger">{{$errors->first('question')}}</span>
                                </div>
                                <div class="form-group">
                                    <label for="answer">Answer:<span class="text-danger">*</span> </label>
                                    <input type="text" class="form-control" id="answer" name="answer" value="{{$faq->answer}}" required>
									<span class="text-danger">{{$errors->first('answer')}}</span>
                                </div>
                                <div class="form-group">
                                    <hr />
                                    <button type="reset" class="btn btn-primary"><i class="fa fa-refresh"></i> Reset</button>
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Update</button>
                                </div>

                            </form>
                        </div>
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
	