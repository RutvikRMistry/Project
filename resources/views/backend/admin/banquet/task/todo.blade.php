@extends('backend.master')
@section('title',"Todo List")
@section('content')
@push('styles')
  <link rel="stylesheet" href="{{asset('assets/vendor/jquery-selective/jquery-selective.css')}}">
@endpush
 <!-- Top Menubar Ends Here-->
 <div class="page">
    @include('backend.partials.leftbar.shortcuts')
	<div class="page-main">
   <div class="page-header"style="height: 5px;" >
      <h1 class="page-title">TODO</h1>
   </div>
   <div style="width: 100%; padding: 30px;">
      <div class="panel-body" style="background-color: #fff; ">
         <div class="row" data-plugin="matchHeight" data-by-row="true">
            <!-- First Row -->
            <!-- To Do List -->
            <div class="col-lg-12">
               <div id="toDoListWidget" class="card card-shadow card-lg pb-20">
                  <div class="card-header card-header-transparent">
                     <div class="card-header-actions">
                        <a id="addNewItemBtn" href="javascript:void(0)" class="add-item-toggle">
                        <i class="icon wb-plus" aria-hidden="true"></i>
                        </a>
                     </div>
                     <h5 class="card-title">TO DO LIST</h5>
                  </div>
                  <ul class="list-group h-500" data-plugin="scrollable">
                     <div data-role="container">
                        <div data-role="content">
                           @foreach($task as $task)
                           <li class="list-group-item">
                              <div class="checkbox-custom checkbox-success checkbox-lg">
                                 <input type="checkbox" name="checkbox" checked="checked">
                                 <label class="item-title">{{$task->task_description}}</label>
                              </div>
                              <div class="item-due-date">
                                 <span>{{$task->task_deadline}}</span>
                              </div>
                              <ul class="item-members">
                                 <li>
                                    <img class="avatar avatar-sm" src="../../../assets/portraits/3.jpg">
                                    <button class="btn btn-sm btn-icon btn-default btn-outline btn-round">
                                    <i class="icon wb-pencil" aria-hidden="true"></i>
                                    </button>
                                 </li>
                              </ul>
                           </li>
                           @endforeach
                           <!-- <li class="list-group-item">
                              <div class="checkbox-custom checkbox-success checkbox-lg">
                                 <input type="checkbox" name="checkbox" checked="checked">
                                 <label class="item-title">Upload Photos and Video</label>
                              </div>
                              <div class="item-due-date">
                                 <span>Tue,aug 25</span>
                              </div>
                           </li>
                           <li class="list-group-item">
                              <div class="checkbox-custom checkbox-success checkbox-lg">
                                 <input type="checkbox" name="checkbox">
                                 <label class="item-title">Edit the blog system</label>
                              </div>
                              <div class="item-due-date">
                                 <span>No due date</span>
                              </div>
                              <ul class="item-members">
                                 <li>
                                    <img class="avatar avatar-sm" src="../../../assets/portraits/1.jpg">
                                    <button class="btn btn-sm btn-icon btn-default btn-outline btn-round">
                                    <i class="icon wb-pencil" aria-hidden="true"></i>
                                    </button>
                                 </li>
                                 <li>
                                    <img class="avatar avatar-sm" src="../../../assets/portraits/5.jpg">
                                    <button class="btn btn-sm btn-icon btn-default btn-outline btn-round">
                                    <i class="icon wb-pencil" aria-hidden="true"></i>
                                    </button>
                                 </li>
                              </ul>
                           </li>
                           <li class="list-group-item">
                              <div class="checkbox-custom checkbox-success checkbox-lg">
                                 <input type="checkbox" name="checkbox">
                                 <label class="item-title">Edit the blog system</label>
                              </div>
                              <div class="item-due-date">
                                 <span>No due date</span>
                              </div>
                              <ul class="item-members">
                                 <li>
                                    <button class="btn btn-sm btn-icon btn-default btn-outline btn-round">
                                    <i class="icon wb-pencil" aria-hidden="true"></i>
                                    </button>
                                 </li>
                              </ul>
                           </li>
                           <li class="list-group-item">
                              <div class="checkbox-custom checkbox-success checkbox-lg">
                                 <input type="checkbox" name="checkbox">
                                 <label class="item-title">Edit the blog system</label>
                              </div>
                              <div class="item-due-date">
                                 <span>No due date</span>
                              </div>
                              <ul class="item-members">
                                 <li>
                                    <img class="avatar avatar-sm" src="../../../assets/portraits/4.jpg">
                                    <button class="btn btn-sm btn-icon btn-default btn-outline btn-round">
                                    <i class="icon wb-pencil" aria-hidden="true"></i>
                                    </button>
                                 </li>
                                 <li>
                                    <img class="avatar avatar-sm" src="../../../assets/portraits/6.jpg">
                                    <button class="btn btn-sm btn-icon btn-default btn-outline btn-round">
                                    <i class="icon wb-pencil" aria-hidden="true"></i>
                                    </button>
                                 </li>
                                 <li>
                                    <img class="avatar avatar-sm" src="../../../assets/portraits/7.jpg">
                                    <button class="btn btn-sm btn-icon btn-default btn-outline btn-round">
                                    <i class="icon wb-pencil" aria-hidden="true"></i>
                                    </button>
                                 </li>
                              </ul>
                           </li>
                           <li class="list-group-item">
                              <div class="checkbox-custom checkbox-success checkbox-lg">
                                 <input type="checkbox" name="checkbox" checked="checked">
                                 <label class="item-title">Edit meeting record</label>
                              </div>
                              <div class="item-due-date">
                                 <span>Tue,aug 25</span>
                              </div>
                              <ul class="item-members">
                                 <li>
                                    <img class="avatar avatar-sm" src="../../../assets/portraits/3.jpg">
                                    <button class="btn btn-sm btn-icon btn-default btn-outline btn-round">
                                    <i class="icon wb-pencil" aria-hidden="true"></i>
                                    </button>
                                 </li>
                              </ul>
                           </li>
                           <li class="list-group-item">
                              <div class="checkbox-custom checkbox-success checkbox-lg">
                                 <input type="checkbox" name="checkbox" checked="checked">
                                 <label class="item-title">Upload Photos and Video</label>
                              </div>
                              <div class="item-due-date">
                                 <span>Tue,aug 25</span>
                              </div>
                           </li>
                           <li class="list-group-item">
                              <div class="checkbox-custom checkbox-success checkbox-lg">
                                 <input type="checkbox" name="checkbox">
                                 <label class="item-title">Edit the blog system</label>
                              </div>
                              <div class="item-due-date">
                                 <span>No due date</span>
                              </div>
                              <ul class="item-members">
                                 <li>
                                    <img class="avatar avatar-sm" src="../../../assets/portraits/1.jpg">
                                    <button class="btn btn-sm btn-icon btn-default btn-outline btn-round">
                                    <i class="icon wb-pencil" aria-hidden="true"></i>
                                    </button>
                                 </li>
                                 <li>
                                    <img class="avatar avatar-sm" src="../../../assets/portraits/5.jpg">
                                    <button class="btn btn-sm btn-icon btn-default btn-outline btn-round">
                                    <i class="icon wb-pencil" aria-hidden="true"></i>
                                    </button>
                                 </li>
                              </ul>
                           </li>
                           <li class="list-group-item">
                              <div class="checkbox-custom checkbox-success checkbox-lg">
                                 <input type="checkbox" name="checkbox">
                                 <label class="item-title">Edit the blog system</label>
                              </div>
                              <div class="item-due-date">
                                 <span>No due date</span>
                              </div>
                              <ul class="item-members">
                                 <li>
                                    <button class="btn btn-sm btn-icon btn-default btn-outline btn-round">
                                    <i class="icon wb-pencil" aria-hidden="true"></i>
                                    </button>
                                 </li>
                              </ul>
                           </li>
                           <li class="list-group-item">
                              <div class="checkbox-custom checkbox-success checkbox-lg">
                                 <input type="checkbox" name="checkbox">
                                 <label class="item-title">Edit the blog system</label>
                              </div>
                              <div class="item-due-date">
                                 <span>No due date</span>
                              </div>
                              <ul class="item-members">
                                 <li>
                                    <img class="avatar avatar-sm" src="../../../assets/portraits/4.jpg">
                                    <button class="btn btn-sm btn-icon btn-default btn-outline btn-round">
                                    <i class="icon wb-pencil" aria-hidden="true"></i>
                                    </button>
                                 </li>
                                 <li>
                                    <img class="avatar avatar-sm" src="../../../assets/portraits/6.jpg">
                                    <button class="btn btn-sm btn-icon btn-default btn-outline btn-round">
                                    <i class="icon wb-pencil" aria-hidden="true"></i>
                                    </button>
                                 </li>
                                 <li>
                                    <img class="avatar avatar-sm" src="../../../assets/portraits/7.jpg">
                                    <button class="btn btn-sm btn-icon btn-default btn-outline btn-round">
                                    <i class="icon wb-pencil" aria-hidden="true"></i>
                                    </button>
                                 </li>
                              </ul>
                           </li>
                        </div> -->
                     </div>
                  </ul>
               </div>
            </div>
            <!-- End Second Row -->
         </div>
      </div>
   </div>
   <!-- End Page -->
   <!-- Add Item Dialog -->
   <div id="addtodoItemForm" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="addtodoItemForm"
      aria-hidden="true">
      <div class="modal-dialog modal-simple">
         <form class="modal-content form-horizontal" role="form" action="{{route('backend.admin.banquet.task.store')}}" method="post">
         {{ csrf_field() }}
            <div class="modal-header">
               <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
               <h4 class="moadl-title">Create New To Do Item</h4>
            </div>
            <div class="modal-body">
               <div class="form-group row">
                  <label class="col-sm-2 form-control-label" for="title">Title:</label>
                  <div class="col-sm-10">
                     <input id="title" class="form-control" type="text" name="task_description" />
                  </div>
               </div>
               <div class="form-group row">
                  <label class="col-sm-2 form-control-label" for="dueDate">Due Date</label>
                  <div class="col-sm-10">
                     <div class="input-group">
                        <input id="dueDate" class="form-control" type="date" data-plugin="datepicker" data-container="#addtodoItemForm" name="task_deadline"
                           />
                        <span class="input-group-addon">
                        <i class="icon wb-calendar" aria-hidden="true"></i>
                        </span>
                     </div>
                  </div>
               </div>
               <div class="form-group row">
                  <label class="col-sm-2 form-control-label" for="people">People:</label>
                  <div class="col-sm-10">
                     <select id="people" multiple="multiple" class="plugin-selective">
                     </select>
                  </div>
               </div>
            </div>
            <div class="modal-footer">
               <div >
                  <button class="btn btn-primary"  type="submit">
                  Add This Item
                  </button>
                  <a class="btn btn-sm btn-white" data-dismiss="modal" href="javascript:void(0)">
                  Cancel
                  </a>
               </div>
            </div>
         </form>
      </div>
   </div>
   <!-- End Add Item Dialog -->
   <!-- Edit Dialog -->
   <div class="modal fade" id="edittodoItemForm" aria-hidden="true" aria-labelledby="edittodoItemForm"
      role="dialog" tabindex="-1" data-show="false">
      <div class="modal-dialog modal-simple">
         <form class="modal-content form-horizontal" action="{{route('backend.admin.banquet.task.update',$task->id)}}" method="post" role="form">
            {{csrf_field()}}
            <div class="modal-header">
               <button type="button" class="close" aria-hidden="true" data-dismiss="modal">×</button>
               <h4 class="modal-title">Edit To Do Item</h4>
            </div>
            <div class="modal-body">
               <div class="form-group row">
                  <label class="col-sm-2 form-control-label" for="editTitle">Title:
                  </label>
                  <div class="col-sm-10">
                     <input type="text" class="form-control" id="editTitle" name="task_description">
                  </div>
               </div>
               <div class="form-group row">
                  <label class="col-sm-2 form-control-label" for="editStarts">Due Date:
                  </label>
                  <div class="col-sm-10">
                     <div class="input-group">
                        <input type="text" class="form-control" id="editDueDate" name="task_deadline" data-container="#edittodoItemForm"
                           data-plugin="datepicker">
                        <span class="input-group-addon">
                        <i class="icon wb-calendar" aria-hidden="true"></i>
                        </span>
                     </div>
                  </div>
               </div>
               <div class="form-group row">
                  <label class="col-sm-2 form-control-label" for="editPeople">People:
                  </label>
                  <div class="col-sm-10">
                     <select id="editPeople" multiple="multiple" class="plugin-selective"></select>
                  </div>
               </div>
            </div>
            <div class="modal-footer">
               <div>
                  <button class="btn btn-primary" type="submit">Save</button>
                  <button class="btn btn-danger" data-dismiss="modal" type="button">Delete</button>
                  <a class="btn btn-sm btn-white" data-dismiss="modal" href="javascript:void(0)">Cancel</a>
               </div>
            </div>
         </form>
      </div>
   </div>
</div>
 </div>
 @push('script')
  <script src="{{asset('assets/vendor/chartist/chartist.js')}}"></script>
  <script src="{{asset('assets/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.js')}}"></script>
  <script src="{{asset('assets/vendor/jquery-selective/jquery-selective.min.js')}}"></script>
  <script src="{{asset('assets/examples/js/dashboard/team.js')}}"></script>
@endpush

@endsection
	