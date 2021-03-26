@extends('backend.master')
@section('title',"Sales Contacts")
@section('content')
@push('styles')
  <link rel="stylesheet" href="{{asset('assets/examples/css/apps/calendar.css')}}">
@endpush
 <!-- Top Menubar Ends Here-->
 <div class="page">
  <div class="page-aside">
   <div class="page-aside-switch">
      <i class="icon wb-chevron-left" aria-hidden="true"></i>
      <i class="icon wb-chevron-right" aria-hidden="true"></i>
   </div>
   <div class="page-aside-inner page-aside-scroll">
      <div data-role="container">
         <div data-role="content">
            <section class="page-aside-section">
               <h4 class="page-aside-title">LIVE ROOMS STATUS</h4>
               <div class="panel-group" id="exampleAccordionDefault" aria-multiselectable="true" role="tablist">
                  <div class="panel">
                     <div class="panel-heading" id="exampleHeadingDefaultOne" role="tab">
                        <a class="panel-title collapsed" data-toggle="collapse" href="#exampleCollapseDefaultOne" data-parent="#exampleAccordionDefault" aria-expanded="true" aria-controls="exampleCollapseDefaultOne" style="background-color: #f6f8f8;"><b><i class="icon fa-bars" aria-hidden="true"></i> 1ST FLOOR (NO. 1-5)</b>
                        </a>
                     </div>
                     <div class="panel-collapse collapse show" id="exampleCollapseDefaultOne" aria-labelledby="exampleHeadingDefaultOne" role="tabpanel">
                        <div class="panel-body" style="padding: 0px;">
                           <div class="list-group has-actions">
                              <div class="list-group-item" data-plugin="editlist">
                                 <div class="list-content">
                                    <span class="item-right"><button type="button" class="btn btn-xs btn-warning"><i class="icon fa-bed" aria-hidden="true" style="color: #fff;"></i><b>2 Bed</b>
                                    </button></span>
                                    <span class="list-text" style="padding-right: 5px;"><button type="button" class="btn btn-xs btn-primary"><b>101</b></button></span>
                                    <span class="list-text"><button type="button" class="btn btn-xs btn-success"><i class="icon fa-paint-brush" aria-hidden="true" style="color: #fff;"></i><b>Cleaned</b></button></span>
                                    <div class="item-actions">
                                       <span class="btn btn-pure btn-icon" data-toggle="list-editable"><i class="icon wb-edit" aria-hidden="true"></i></span>
                                       <span class="btn btn-pure btn-icon" data-toggle="list-delete"><i class="icon wb-unlock" aria-hidden="true"></i></span>
                                    </div>
                                 </div>
                                 <div class="list-editable">
                                    <div class="form-group form-material">
                                       <input type="text" class="form-control empty" name="label" value="Admin Calendar">
                                       <button type="button" class="input-editable-close icon wb-close" data-toggle="list-editable-close" aria-label="Close" aria-expanded="true"></button>
                                    </div>
                                 </div>
                              </div>
                              <div class="list-group-item" data-plugin="editlist">
                                 <div class="list-content">
                                    <span class="item-right"><button type="button" class="btn btn-xs btn-info"><i class="icon fa-bed" aria-hidden="true" style="color: #fff;"></i><b>1 Bed</b>
                                    </button></span>
                                    <span class="list-text" style="padding-right: 5px;"><button type="button" class="btn btn-xs btn-primary"><b>102</b></button></span>
                                    <span class="list-text"><button type="button" class="btn btn-xs btn-danger"><i class="icon fa-paw" aria-hidden="true" style="color: #fff;"></i><b>Vy. Dirty</b></button></span>
                                    <div class="item-actions">
                                       <span class="btn btn-pure btn-icon" data-toggle="list-editable"><i class="icon wb-edit" aria-hidden="true"></i></span>
                                       <span class="btn btn-pure btn-icon" data-toggle="list-delete"><i class="icon wb-unlock" aria-hidden="true"></i></span>
                                    </div>
                                 </div>
                                 <div class="list-editable">
                                    <div class="form-group form-material">
                                       <input type="text" class="form-control empty" name="label" value="Admin Calendar">
                                       <button type="button" class="input-editable-close icon wb-close" data-toggle="list-editable-close" aria-label="Close" aria-expanded="true"></button>
                                    </div>
                                 </div>
                              </div>
                              <div class="list-group-item" data-plugin="editlist">
                                 <div class="list-content">
                                    <span class="item-right"><button type="button" class="btn btn-xs btn-info"><i class="icon fa-bed" aria-hidden="true" style="color: #fff;"></i><b>1 Bed</b>
                                    </button></span>
                                    <span class="list-text" style="padding-right: 5px;"><button type="button" class="btn btn-xs btn-primary"><b>103</b></button></span>
                                    <span class="list-text"><button type="button" class="btn btn-xs btn-danger"><i class="icon fa-paw" aria-hidden="true" style="color: #fff;"></i><b>Vy. Dirty</b></button></span>
                                    <div class="item-actions">
                                       <span class="btn btn-pure btn-icon" data-toggle="list-editable"><i class="icon wb-edit" aria-hidden="true"></i></span>
                                       <span class="btn btn-pure btn-icon" data-toggle="list-delete"><i class="icon wb-unlock" aria-hidden="true"></i></span>
                                    </div>
                                 </div>
                                 <div class="list-editable">
                                    <div class="form-group form-material">
                                       <input type="text" class="form-control empty" name="label" value="Admin Calendar">
                                       <button type="button" class="input-editable-close icon wb-close" data-toggle="list-editable-close" aria-label="Close" aria-expanded="true"></button>
                                    </div>
                                 </div>
                              </div>
                              <div class="list-group-item" data-plugin="editlist">
                                 <div class="list-content">
                                    <span class="item-right"><button type="button" class="btn btn-xs btn-warning"><i class="icon fa-bed" aria-hidden="true" style="color: #fff;"></i><b>2 Bed</b>
                                    </button></span>
                                    <span class="list-text" style="padding-right: 5px;"><button type="button" class="btn btn-xs btn-primary"><b>104</b></button></span>
                                    <span class="list-text"><button type="button" class="btn btn-xs btn-success"><i class="icon fa-paint-brush" aria-hidden="true" style="color: #fff;"></i><b>Cleaned</b></button></span>
                                    <div class="item-actions">
                                       <span class="btn btn-pure btn-icon" data-toggle="list-editable"><i class="icon wb-edit" aria-hidden="true"></i></span>
                                       <span class="btn btn-pure btn-icon" data-toggle="list-delete"><i class="icon wb-unlock" aria-hidden="true"></i></span>
                                    </div>
                                 </div>
                                 <div class="list-editable">
                                    <div class="form-group form-material">
                                       <input type="text" class="form-control empty" name="label" value="Admin Calendar">
                                       <button type="button" class="input-editable-close icon wb-close" data-toggle="list-editable-close" aria-label="Close" aria-expanded="true"></button>
                                    </div>
                                 </div>
                              </div>
                              <div class="list-group-item" data-plugin="editlist">
                                 <div class="list-content">
                                    <span class="item-right"><button type="button" class="btn btn-xs btn-dark"><i class="icon fa-bed" aria-hidden="true" style="color: #fff;"></i><b>4 Bed</b>
                                    </button></span>
                                    <span class="list-text" style="padding-right: 5px;"><button type="button" class="btn btn-xs btn-primary"><b>105</b></button></span>
                                    <span class="list-text"><button type="button" class="btn btn-xs btn-success"><i class="icon fa-paint-brush" aria-hidden="true" style="color: #fff;"></i><b>Cleaned</b></button></span>
                                    <div class="item-actions">
                                       <span class="btn btn-pure btn-icon" data-toggle="list-editable"><i class="icon wb-edit" aria-hidden="true"></i></span>
                                       <span class="btn btn-pure btn-icon" data-toggle="list-delete"><i class="icon wb-unlock" aria-hidden="true"></i></span>
                                    </div>
                                 </div>
                                 <div class="list-editable">
                                    <div class="form-group form-material">
                                       <input type="text" class="form-control empty" name="label" value="Admin Calendar">
                                       <button type="button" class="input-editable-close icon wb-close" data-toggle="list-editable-close" aria-label="Close" aria-expanded="true"></button>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="panel">
                     <div class="panel-heading" id="exampleHeadingDefaultTwo" role="tab">
                        <a class="panel-title collapsed" data-toggle="collapse" href="#exampleCollapseDefaultTwo" data-parent="#exampleAccordionDefault" aria-expanded="false" aria-controls="exampleCollapseDefaultTwo" style="background-color: #f6f8f8;">
                        <b><i class="icon fa-bars" aria-hidden="true"></i> 2ND FLOOR (NO. 6-10)</b>
                        </a>
                     </div>
                     <div class="panel-collapse collapse" id="exampleCollapseDefaultTwo" aria-labelledby="exampleHeadingDefaultTwo" role="tabpanel">
                        <div class="panel-body" style="padding: 0px;">
                           <div class="list-group has-actions">
                              <div class="list-group-item" data-plugin="editlist">
                                 <div class="list-content">
                                    <span class="item-right"><button type="button" class="btn btn-xs btn-warning"><i class="icon fa-bed" aria-hidden="true" style="color: #fff;"></i><b>2 Bed</b>
                                    </button></span>
                                    <span class="list-text" style="padding-right: 5px;"><button type="button" class="btn btn-xs btn-primary"><b>201</b></button></span>
                                    <span class="list-text"><button type="button" class="btn btn-xs btn-success"><i class="icon fa-paint-brush" aria-hidden="true" style="color: #fff;"></i><b>Cleaned</b></button></span>
                                    <div class="item-actions">
                                       <span class="btn btn-pure btn-icon" data-toggle="list-editable"><i class="icon wb-edit" aria-hidden="true"></i></span>
                                       <span class="btn btn-pure btn-icon" data-toggle="list-delete"><i class="icon wb-unlock" aria-hidden="true"></i></span>
                                    </div>
                                 </div>
                                 <div class="list-editable">
                                    <div class="form-group form-material">
                                       <input type="text" class="form-control empty" name="label" value="Cleaned">
                                       <button type="button" class="input-editable-close icon wb-close" data-toggle="list-editable-close" aria-label="Close" aria-expanded="true"></button>
                                    </div>
                                 </div>
                              </div>
                              <div class="list-group-item" data-plugin="editlist">
                                 <div class="list-content">
                                    <span class="item-right"><button type="button" class="btn btn-xs btn-info"><i class="icon fa-bed" aria-hidden="true" style="color: #fff;"></i><b>1 Bed</b>
                                    </button></span>
                                    <span class="list-text" style="padding-right: 5px;"><button type="button" class="btn btn-xs btn-primary"><b>202</b></button></span>
                                    <span class="list-text"><button type="button" class="btn btn-xs btn-danger"><i class="icon fa-paw" aria-hidden="true" style="color: #fff;"></i><b>Vy. Dirty</b></button></span>
                                    <div class="item-actions">
                                       <span class="btn btn-pure btn-icon" data-toggle="list-editable"><i class="icon wb-edit" aria-hidden="true"></i></span>
                                       <span class="btn btn-pure btn-icon" data-toggle="list-delete"><i class="icon wb-unlock" aria-hidden="true"></i></span>
                                    </div>
                                 </div>
                                 <div class="list-editable">
                                    <div class="form-group form-material">
                                       <input type="text" class="form-control empty" name="label" value="Admin Calendar">
                                       <button type="button" class="input-editable-close icon wb-close" data-toggle="list-editable-close" aria-label="Close" aria-expanded="true"></button>
                                    </div>
                                 </div>
                              </div>
                              <div class="list-group-item" data-plugin="editlist">
                                 <div class="list-content">
                                    <span class="item-right"><button type="button" class="btn btn-xs btn-info"><i class="icon fa-bed" aria-hidden="true" style="color: #fff;"></i><b>1 Bed</b>
                                    </button></span>
                                    <span class="list-text" style="padding-right: 5px;"><button type="button" class="btn btn-xs btn-primary"><b>303</b></button></span>
                                    <span class="list-text"><button type="button" class="btn btn-xs btn-danger"><i class="icon fa-paw" aria-hidden="true" style="color: #fff;"></i><b>Vy. Dirty</b></button></span>
                                    <div class="item-actions">
                                       <span class="btn btn-pure btn-icon" data-toggle="list-editable"><i class="icon wb-edit" aria-hidden="true"></i></span>
                                       <span class="btn btn-pure btn-icon" data-toggle="list-delete"><i class="icon wb-unlock" aria-hidden="true"></i></span>
                                    </div>
                                 </div>
                                 <div class="list-editable">
                                    <div class="form-group form-material">
                                       <input type="text" class="form-control empty" name="label" value="Admin Calendar">
                                       <button type="button" class="input-editable-close icon wb-close" data-toggle="list-editable-close" aria-label="Close" aria-expanded="true"></button>
                                    </div>
                                 </div>
                              </div>
                              <div class="list-group-item" data-plugin="editlist">
                                 <div class="list-content">
                                    <span class="item-right"><button type="button" class="btn btn-xs btn-warning"><i class="icon fa-bed" aria-hidden="true" style="color: #fff;"></i><b>2 Bed</b>
                                    </button></span>
                                    <span class="list-text" style="padding-right: 5px;"><button type="button" class="btn btn-xs btn-primary"><b>404</b></button></span>
                                    <span class="list-text"><button type="button" class="btn btn-xs btn-success"><i class="icon fa-paint-brush" aria-hidden="true" style="color: #fff;"></i><b>Cleaned</b></button></span>
                                    <div class="item-actions">
                                       <span class="btn btn-pure btn-icon" data-toggle="list-editable"><i class="icon wb-edit" aria-hidden="true"></i></span>
                                       <span class="btn btn-pure btn-icon" data-toggle="list-delete"><i class="icon wb-unlock" aria-hidden="true"></i></span>
                                    </div>
                                 </div>
                                 <div class="list-editable">
                                    <div class="form-group form-material">
                                       <input type="text" class="form-control empty" name="label" value="Admin Calendar">
                                       <button type="button" class="input-editable-close icon wb-close" data-toggle="list-editable-close" aria-label="Close" aria-expanded="true"></button>
                                    </div>
                                 </div>
                              </div>
                              <div class="list-group-item" data-plugin="editlist">
                                 <div class="list-content">
                                    <span class="item-right"><button type="button" class="btn btn-xs btn-dark"><i class="icon fa-bed" aria-hidden="true" style="color: #fff;"></i><b>4 Bed</b>
                                    </button></span>
                                    <span class="list-text" style="padding-right: 5px;"><button type="button" class="btn btn-xs btn-primary"><b>505</b></button></span>
                                    <span class="list-text"><button type="button" class="btn btn-xs btn-success"><i class="icon fa-paint-brush" aria-hidden="true" style="color: #fff;"></i><b>Cleaned</b></button></span>
                                    <div class="item-actions">
                                       <span class="btn btn-pure btn-icon" data-toggle="list-editable"><i class="icon wb-edit" aria-hidden="true"></i></span>
                                       <span class="btn btn-pure btn-icon" data-toggle="list-delete"><i class="icon wb-unlock" aria-hidden="true"></i></span>
                                    </div>
                                 </div>
                                 <div class="list-editable">
                                    <div class="form-group form-material">
                                       <input type="text" class="form-control empty" name="label" value="Admin Calendar">
                                       <button type="button" class="input-editable-close icon wb-close" data-toggle="list-editable-close" aria-label="Close" aria-expanded="true"></button>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="panel">
                     <div class="panel-heading" id="exampleHeadingDefaultThree" role="tab">
                     </div>
                     <div class="panel-collapse collapse" id="exampleCollapseDefaultThree" aria-labelledby="exampleHeadingDefaultThree" role="tabpanel">
                        <div class="panel-body">
                           Horum, antiquitate perciperet d conspectum locus obruamus animumque perspici probabis
                           suscipere. Desiderat magnum, contenta poena desiderant
                           concederetur menandri damna disputandum corporum equidem
                           cyrenaicisque. Defuturum ultimum ista ignaviamque iudicant
                           feci incursione, reprimique fruenda utamur tu faciam
                           complexiones eo, habeo ortum iucundo artes.
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <section class="page-aside-section">
               <h4 class="page-aside-title">LIST OF EVENTS</h4>
               <div class="list-group calendar-list">
                  <a class="list-group-item calendar-event" data-title="Meeting" data-stick=true data-color="red-600" href="javascript:void(0)">
                  <i class="wb-large-point fa-podcast red-600 mr-10" aria-hidden="true" style="font-size: 18px;"></i>Meeting</i>
                  <a class="list-group-item calendar-event" data-title="Birthday Party" data-stick=true data-color="green-600" href="javascript:void(0)">
                  <i class="wb-large-point green-600 mr-10" aria-hidden="true" style="font-size: 18px;"></i>Birthday Party</i>
                  <a class="list-group-item calendar-event" data-title="Call Jimba" data-stick=true data-color="orange-600" href="javascript:void(0)">
                  <i class="wb-large-point orange-600 mr-10" aria-hidden="true" style="font-size: 18px;"></i>Call Jimba
                  </a>
                  <a class="list-group-item calendar-event" data-title="Dinner with Team" data-stick=true data-color="cyan-600" href="javascript:void(0)">
                  <i class="wb-large-point cyan-600 mr-10" aria-hidden="true"></i>Dinner with Team</i><a id="addNewEventBtn" class="list-group-item" href="javascript:void(0)"> <i class="icon wb-plus" aria-hidden="true"></i> Add New Event </a>
               </div>
            </section>
         </div>
      </div>
   </div>
</div>
<div class="page-main">
   <div class="calendar-container" style="padding-top: 30px;padding-left: 0px;padding-right: 20px;padding-bottom: 0px;">
      <div id="calendar"></div>
      <!--AddEvent Dialog -->
      <div class="modal fade" id="addNewEvent" aria-hidden="true" aria-labelledby="addNewEvent"
         role="dialog" tabindex="-1">
         <div class="modal-dialog modal-simple">
            <form class="modal-content form-horizontal" action="#" method="post" role="form">
               <div class="modal-header">
                  <button type="button" class="close" aria-hidden="true" data-dismiss="modal">×</button>
                  <h4 class="modal-title">New Event</h4>
               </div>
               <div class="modal-body">
                  <div class="form-group row">
                     <label class="col-md-2 form-control-label" for="ename">Name:</label>
                     <div class="col-md-10">
                        <input type="text" class="form-control" id="ename" name="ename">
                     </div>
                  </div>
                  <div class="form-group row">
                     <label class="col-md-2 form-control-label" for="starts">Starts:</label>
                     <div class="col-md-10">
                        <div class="input-group">
                           <input type="text" class="form-control" id="starts" data-container="#addNewEvent"
                              data-plugin="datepicker">
                           <span class="input-group-addon">
                           <i class="icon wb-calendar" aria-hidden="true"></i>
                           </span>
                        </div>
                     </div>
                  </div>
                  <div class="form-group row">
                     <label class="col-md-2 form-control-label" for="ends">Ends:</label>
                     <div class="col-md-10">
                        <div class="input-group">
                           <input type="text" class="form-control" id="ends" data-container="#addNewEvent"
                              data-plugin="datepicker">
                           <span class="input-group-addon">
                           <i class="icon wb-calendar" aria-hidden="true"></i>
                           </span>
                        </div>
                     </div>
                  </div>
                  <div class="form-group row">
                     <label class="col-md-2 form-control-label" for="repeats">Repeats:</label>
                     <div class="col-md-10">
                        <input type="text" class="form-control" id="repeats" name="repeats" data-plugin="TouchSpin"
                           data-min="0" data-max="10" value="0" />
                     </div>
                  </div>
                  <div class="form-group row">
                     <label class="form-control-label col-md-2">Color:</label>
                     <div class="col-md-10">
                        <ul class="color-selector">
                           <li class="bg-blue-600">
                              <input type="radio" checked name="eventColorChosen" id="eventColorChosen2">
                              <label for="eventColorChosen2"></label>
                           </li>
                           <li class="bg-green-600">
                              <input type="radio" name="eventColorChosen" id="eventColorChosen3">
                              <label for="eventColorChosen3"></label>
                           </li>
                           <li class="bg-cyan-600">
                              <input type="radio" name="eventColorChosen" id="eventColorChosen4">
                              <label for="eventColorChosen4"></label>
                           </li>
                           <li class="bg-orange-600">
                              <input type="radio" name="eventColorChosen" id="eventColorChosen5">
                              <label for="eventColorChosen5"></label>
                           </li>
                           <li class="bg-red-600">
                              <input type="radio" name="eventColorChosen" id="eventColorChosen6">
                              <label for="eventColorChosen6"></label>
                           </li>
                           <li class="bg-blue-grey-600">
                              <input type="radio" name="eventColorChosen" id="eventColorChosen7">
                              <label for="eventColorChosen7"></label>
                           </li>
                           <li class="bg-purple-600">
                              <input type="radio" name="eventColorChosen" id="eventColorChosen8">
                              <label for="eventColorChosen8"></label>
                           </li>
                        </ul>
                     </div>
                  </div>
                  <div class="form-group row">
                     <label class="col-md-2 form-control-label" for="people">People:</label>
                     <div >
                        <select id="eventPeople" multiple="multiple" class="plugin-selective"></select>
                     </div>
                  </div>
               </div>
               <div class="modal-footer">
                  <div class="form-actions">
                     <button class="btn btn-primary" data-dismiss="modal" type="button">Add this event</button>
                     <a class="btn btn-sm btn-white" data-dismiss="modal" href="javascript:void(0)">Cancel</a>
                  </div>
               </div>
            </form>
         </div>
      </div>
      <!-- End AddEvent Dialog -->
      <!-- Edit Dialog -->
      <div class="modal fade" id="editNewEvent" aria-hidden="true" aria-labelledby="editNewEvent"
         role="dialog" tabindex="-1" data-show="false">
         <div class="modal-dialog modal-simple">
            <form class="modal-content form-horizontal" action="#" method="post" role="form">
               <div class="modal-header">
                  <button type="button" class="close" aria-hidden="true" data-dismiss="modal">×</button>
                  <h4 class="modal-title">Edit Event</h4>
               </div>
               <div class="modal-body">
                  <div class="form-group row">
                     <label class="col-md-2 form-control-label" for="editEname">Name:</label>
                     <div class="col-md-10">
                        <input type="text" class="form-control" id="editEname" name="editEname">
                     </div>
                  </div>
                  <div class="form-group row">
                     <label class="col-md-2 form-control-label" for="editStarts">Starts:</label>
                     <div class="col-md-10">
                        <div class="input-group">
                           <input type="text" class="form-control" id="editStarts" name="editStarts" data-container="#editNewEvent"
                              data-plugin="datepicker">
                           <span class="input-group-addon">
                           <i class="icon wb-calendar" aria-hidden="true"></i>
                           </span>
                        </div>
                     </div>
                  </div>
                  <div class="form-group row">
                     <label class="col-md-2 form-control-label" for="editEnds">Ends:</label>
                     <div class="col-md-10">
                        <div class="input-group">
                           <input type="text" class="form-control" id="editEnds" data-container="#editNewEvent"
                              data-plugin="datepicker">
                           <span class="input-group-addon">
                           <i class="icon wb-calendar" aria-hidden="true"></i>
                           </span>
                        </div>
                     </div>
                  </div>
                  <div class="form-group row">
                     <label class="col-md-2 form-control-label" for="editRepeats">Repeats:</label>
                     <div class="col-md-10">
                        <input type="text" class="form-control" id="editRepeats" name="repeats" data-plugin="TouchSpin"
                           data-min="0" data-max="10" value="0" />
                     </div>
                  </div>
                  <div class="form-group row" id="editColor">
                     <label class="form-control-label col-md-2">Color:</label>
                     <div class="col-md-10">
                        <ul class="color-selector">
                           <li class="bg-blue-600">
                              <input type="radio" data-color="blue|600" name="colorChosen" id="editColorChosen2">
                              <label for="editColorChosen2"></label>
                           </li>
                           <li class="bg-green-600">
                              <input type="radio" data-color="green|600" name="colorChosen" id="editColorChosen3">
                              <label for="editColorChosen3"></label>
                           </li>
                           <li class="bg-cyan-600">
                              <input type="radio" data-color="cyan|600" name="colorChosen" id="editColorChosen4">
                              <label for="editColorChosen4"></label>
                           </li>
                           <li class="bg-orange-600">
                              <input type="radio" data-color="orange|600" name="colorChosen" id="editColorChosen5">
                              <label for="editColorChosen4"></label>
                           </li>
                           <li class="bg-red-600">
                              <input type="radio" data-color="red|600" name="colorChosen" id="editColorChosen6">
                              <label for="editColorChosen6"></label>
                           </li>
                           <li class="bg-blue-grey-600">
                              <input type="radio" data-color="blue-grey|600" name="colorChosen" id="editColorChosen7">
                              <label for="editColorChosen7"></label>
                           </li>
                           <li class="bg-purple-600">
                              <input type="radio" data-color="purple|600" name="colorChosen" id="editColorChosen8">
                              <label for="editColorChosen8"></label>
                           </li>
                        </ul>
                     </div>
                  </div>
                  <div class="form-group row">
                     <label class="col-md-2 form-control-label" for="editPeople">People:</label>
                     <div class="col-md-10">
                        <select id="editPeople" multiple="multiple" class="plugin-selective"></select>
                     </div>
                  </div>
               </div>
               <div class="modal-footer">
                  <div class="form-actions">
                     <button class="btn btn-primary" data-dismiss="modal" type="button">Save</button>
                     <button class="btn btn-danger" data-dismiss="modal" type="button">Delete</button>
                     <a class="btn btn-sm btn-white" data-dismiss="modal" href="javascript:void(0)">Cancel</a>
                  </div>
               </div>
            </form>
         </div>
      </div>
      <!-- End EditEvent Dialog -->
      <!--AddCalendar Dialog -->
      <div class="modal fade" id="addNewCalendar" aria-hidden="true" aria-labelledby="addNewCalendar"
         role="dialog" tabindex="-1">
         <div class="modal-dialog modal-simple">
            <form class="modal-content form-horizontal" action="#" method="post" role="form">
               <div class="modal-header">
                  <button type="button" class="close" aria-hidden="true" data-dismiss="modal">×</button>
                  <h4 class="modal-title">New Calendar</h4>
               </div>
               <div class="modal-body">
                  <div class="form-group row">
                     <label class="col-md-2 form-control-label" for="ename">Name:</label>
                     <div class="col-md-10">
                        <input type="text" class="form-control" id="ename" name="ename">
                     </div>
                  </div>
                  <div class="form-group row">
                     <label class="form-control-label col-md-2">Color:</label>
                     <div class="col-md-10">
                        <ul class="color-selector">
                           <li class="bg-blue-600">
                              <input type="radio" checked name="colorChosen" id="colorChosen2">
                              <label for="colorChosen2"></label>
                           </li>
                           <li class="bg-green-600">
                              <input type="radio" name="colorChosen" id="colorChosen3">
                              <label for="colorChosen3"></label>
                           </li>
                           <li class="bg-cyan-600">
                              <input type="radio" name="colorChosen" id="colorChosen4">
                              <label for="colorChosen4"></label>
                           </li>
                           <li class="bg-orange-600">
                              <input type="radio" name="colorChosen" id="colorChosen5">
                              <label for="colorChosen5"></label>
                           </li>
                           <li class="bg-red-600">
                              <input type="radio" name="colorChosen" id="colorChosen6">
                              <label for="colorChosen6"></label>
                           </li>
                           <li class="bg-blue-grey-600">
                              <input type="radio" name="colorChosen" id="colorChosen7">
                              <label for="colorChosen7"></label>
                           </li>
                           <li class="bg-purple-600">
                              <input type="radio" name="colorChosen" id="colorChosen8">
                              <label for="colorChosen8"></label>
                           </li>
                        </ul>
                     </div>
                  </div>
                  <div class="form-group row">
                     <label class="col-md-2 form-control-label" for="people">People:</label>
                     <div class="col-md-10">
                        <select id="people" multiple="multiple" class="plugin-selective"></select>
                     </div>
                  </div>
               </div>
               <div class="modal-footer">
                  <div class="form-actions">
                     <button class="btn btn-primary" data-dismiss="modal" type="button">Create</button>
                     <a class="btn btn-sm btn-white" data-dismiss="modal" href="javascript:void(0)">Cancel</a>
                  </div>
               </div>
            </form>
         </div>
      </div>
      <!-- End AddCalendar Dialog -->
   </div>
</div>
 </div>
@push('script')
  <script src="{{asset('assets/vendor/fullcalendar/fullcalendar.js')}}"></script> 
  <!--<script src="{{asset('assets/examples/js/apps/calendar.js')}}"></script>-->
  <!--<script src="{{asset('assets/js/App/Calendar.js')}}"></script>-->
  
@endpush
@endsection
	