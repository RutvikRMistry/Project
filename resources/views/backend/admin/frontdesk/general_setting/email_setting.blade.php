@extends('backend.master')
@section('title',"Email Setting")
@section('content')
 <!-- Top Menubar Ends Here-->
 <div class="page">
    @include('backend.partials.leftbar.shortcuts')
	<div class="page-main">
	   <div class="page-header">
		  <h1 class="page-title">Email Setting</h1>
		  <div class="page-header-actions">

		  </div>
	   </div>
	   <div style="width: 100%; padding: 30px;">
	   @include('backend.partials.flash_message')
		  <div class="panel-body" style="background-color: #fff; ">
			 <div class="card-body">
            <div class="card mb-4">
                <div class="card-header bg-white font-weight-bold">
                    Short Code
                </div>
                <div class="card-body p-0">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="tile">
                                <div class="tile-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-hover">
                                            <thead>
                                            <tr>
                                                <th> # </th>
                                                <th> CODE </th>
                                                <th> DESCRIPTION </th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td> 1 </td>
                                                <td> <pre>&#123;&#123;message&#125;&#125;</pre> </td>
                                                <td> Details Text From Script</td>
                                            </tr>
                                            <tr>
                                                <td> 2 </td>
                                                <td> <pre>&#123;&#123;name&#125;&#125;</pre> </td>
                                                <td> Users Name. Will Pull From Database and Use in EMAIL text</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="card mb-4">
                <div class="card-header bg-white font-weight-bold">
                    Email Template
                </div>
				<hr>
                <div class="card-body">
                    <form role="form" method="post" action="{{route('backend.admin.email_setting.update')}}">
						{{csrf_field()}}
                        <div class="form-group row">

                            <div class="col-sm-12">
                                <label ><strong>EMAIL SENT FROM</strong><span class="text-danger">*</span></label>
                                <input type="email" class="form-control form-control-lg" required name="sender_email" value="{{general_setting()->sender_email}}" >
								<span class="text-danger">{{$errors->first('sender_email')}}</span>
							</div>
                        </div>
                        <div class="form-group row">

                            <div class="col-sm-12">
                                <label><strong>EMAIL TEMPLATE</strong><span class="text-danger">*</span> </label>
                                <textarea class="form-control" name="email_message" id="nicEdit" style="width: 100%;height: 600px" required>
								{{ substr(strip_tags(general_setting()->email_message),0) }}
								</textarea>
								<span class="text-danger">{{$errors->first('email_message')}}</span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-dark btn-block" >Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
		  </div>
		 
	   </div>
	</div>

 </div>

@endsection