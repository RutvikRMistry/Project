@extends('backend.master')
@section('title',"Gateway")
@section('content')
 <!-- Top Menubar Ends Here-->
<!-- Page -->
<div class="page">
   <div class="page-header">
      <h1 class="page-title">PAYMENT GATEWAY</h1>
      <div class="page-header-actions">
         <form>
            <div class="input-search">
               <i class="input-search-icon wb-search" aria-hidden="true"></i>
               <input type="text" class="form-control" name="" placeholder="Search...">
            </div>
         </form>
      </div>
   </div>
   <div class="page-content">
      <div class="projects-sort">
         <span class="projects-sort-label">Sorted by : </span>
         <div class="inline-block dropdown">
            <span id="projects-menu" data-toggle="dropdown" aria-expanded="false" role="button">
            Payment
            <i class="icon wb-chevron-down-mini" aria-hidden="true"></i>
            </span>
            <div class="dropdown-menu animation-scale-up animation-top-left animation-duration-250"
               aria-labelledby="projects-menu" role="menu">
               <a class="dropdown-item" href="javascript:void(0)" role="menuitem" tabindex="-1">All</a>
               <a class="active dropdown-item" href="javascript:void(0)" role="menuitem" tabindex="-1">Online</a>
               <a class="dropdown-item" href="javascript:void(0)" role="menuitem" tabindex="-1">Offline</a>
            </div>
         </div>
      </div>
      <div class="projects-wrap">
         <ul class="blocks blocks-100 blocks-xxl-5 blocks-lg-4 blocks-md-3 blocks-sm-2"
            data-plugin="animateList" data-child=">li">
            <li>
               <div class="panel">
                  <div class="time float-left">Cash</div>
                  <div class="time float-right">
                     <a class="animsition-link" href="pages/error-400.html">
                        Log
                  </div>
                  <figure class="overlay overlay-hover animation-hover">
                  <img class="caption-figure overlay-figure" src="{{asset('assets/photos/placeholder.png')}}">
                  <figcaption class="overlay-panel overlay-background overlay-fade text-center vertical-align">
                  <div class="btn-group">
                  <div class="dropdown float-left">
                  <button type="button" class="btn btn-icon btn-pure btn-default" title="Setting"><i class="icon wb-settings" aria-hidden="true"></i></button>
                  <div class="dropdown-menu" role="menu">
                  <a class="dropdown-item" href="">View Details</a>
                  <a class="dropdown-item" href="">Update</a>
                  </div>
                  </div>
                  <button type="button" class="btn btn-icon btn-pure btn-default" title="Delete" data-tag="project-delete"><i class="icon wb-trash" aria-hidden="true"></i></button>
                  </div>
                  <button type="button" class="btn btn-outline btn-default project-button">View Payment Details</button>
                  </figcaption>
                  </figure>
                  <div style="height: 50px;">
                     <div class="dropdown float-left" style="width: 50%;">
                        <ul class="list-unstyled example">
                           <li class="mb-15">
                              <div class="icheckbox_flat-blue" style="position: relative;"><input type="checkbox" class="icheckbox-primary" id="inputUnchecked" name="inputiCheckCheckboxes" data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                              <label for="inputUnchecked" class="">Online</label>
                           </li>
                        </ul>
                     </div>
                     <div class="dropdown float-left" style="width: 50%;">
                        <ul class="list-unstyled example">
                           <li class="mb-15">
                              <div class="icheckbox_flat-blue" style="position: relative;"><input type="checkbox" class="icheckbox-primary" id="inputchecked" name="inputiCheckCheckboxes" data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                              <label for="inputUnchecked" class="">Offline</label>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </li>
            <li>
               <div class="panel">
                  <div class="time float-left">VoguePay</div>
                  <div class="time float-right">
                     <a class="animsition-link" href="pages/error-400.html">
                        Log
                  </div>
                  <figure class="overlay overlay-hover animation-hover">
                  <img class="caption-figure overlay-figure" src="{{asset('assets/photos/placeholder.png')}}">
                  <figcaption class="overlay-panel overlay-background overlay-fade text-center vertical-align">
                  <div class="btn-group">
                  <div class="dropdown float-left">
                  <button type="button" class="btn btn-icon btn-pure btn-default" title="Setting"><i class="icon wb-settings" aria-hidden="true"></i></button>
                  <div class="dropdown-menu" role="menu">
                  <a class="dropdown-item" href="">View Details</a>
                  <a class="dropdown-item" href="">Update</a>
                  </div>
                  </div>
                  <button type="button" class="btn btn-icon btn-pure btn-default" title="Delete" data-tag="project-delete"><i class="icon wb-trash" aria-hidden="true"></i></button>
                  </div>
                  <button type="button" class="btn btn-outline btn-default project-button">View Payment Details</button>
                  </figcaption>
                  </figure>
                  <div style="height: 50px;">
                     <div class="dropdown float-left" style="width: 50%;">
                        <ul class="list-unstyled example">
                           <li class="mb-15">
                              <div class="icheckbox_flat-blue" style="position: relative;"><input type="checkbox" class="icheckbox-primary" id="inputUnchecked" name="inputiCheckCheckboxes" data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                              <label for="inputUnchecked" class="">Online</label>
                           </li>
                        </ul>
                     </div>
                     <div class="dropdown float-left" style="width: 50%;">
                        <ul class="list-unstyled example">
                           <li class="mb-15">
                              <div class="icheckbox_flat-blue" style="position: relative;"><input type="checkbox" class="icheckbox-primary" id="inputchecked" name="inputiCheckCheckboxes" data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                              <label for="inputUnchecked" class="">Offline</label>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </li>
            <li>
               <div class="panel">
                  <div class="time float-left">Bank</div>
                  <div class="time float-right">
                     <a class="animsition-link" href="pages/error-400.html">
                        Log
                  </div>
                  <figure class="overlay overlay-hover animation-hover">
                  <img class="caption-figure overlay-figure" src="{{asset('assets/photos/placeholder.png')}}">
                  <figcaption class="overlay-panel overlay-background overlay-fade text-center vertical-align">
                  <div class="btn-group">
                  <div class="dropdown float-left">
                  <button type="button" class="btn btn-icon btn-pure btn-default" title="Setting"><i class="icon wb-settings" aria-hidden="true"></i></button>
                  <div class="dropdown-menu" role="menu">
                  <a class="dropdown-item" href="">View Details</a>
                  <a class="dropdown-item" href="">Update</a>
                  </div>
                  </div>
                  <button type="button" class="btn btn-icon btn-pure btn-default" title="Delete" data-tag="project-delete"><i class="icon wb-trash" aria-hidden="true"></i></button>
                  </div>
                  <button type="button" class="btn btn-outline btn-default project-button">View Payment Details</button>
                  </figcaption>
                  </figure>
                  <div style="height: 50px;">
                     <div class="dropdown float-left" style="width: 50%;">
                        <ul class="list-unstyled example">
                           <li class="mb-15">
                              <div class="icheckbox_flat-blue" style="position: relative;"><input type="checkbox" class="icheckbox-primary" id="inputUnchecked" name="inputiCheckCheckboxes" data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                              <label for="inputUnchecked" class="">Online</label>
                           </li>
                        </ul>
                     </div>
                     <div class="dropdown float-left" style="width: 50%;">
                        <ul class="list-unstyled example">
                           <li class="mb-15">
                              <div class="icheckbox_flat-blue" style="position: relative;"><input type="checkbox" class="icheckbox-primary" id="inputchecked" name="inputiCheckCheckboxes" data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                              <label for="inputUnchecked" class="">Offline</label>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </li>
            <li>
               <div class="panel">
                  <div class="time float-left">PayStack</div>
                  <div class="time float-right">
                     <a class="animsition-link" href="pages/error-400.html">
                        Log
                  </div>
                  <figure class="overlay overlay-hover animation-hover">
                  <img class="caption-figure overlay-figure" src="{{asset('assets/photos/placeholder.png')}}">
                  <figcaption class="overlay-panel overlay-background overlay-fade text-center vertical-align">
                  <div class="btn-group">
                  <div class="dropdown float-left">
                  <button type="button" class="btn btn-icon btn-pure btn-default" title="Setting"><i class="icon wb-settings" aria-hidden="true"></i></button>
                  <div class="dropdown-menu" role="menu">
                  <a class="dropdown-item" href="">View Details</a>
                  <a class="dropdown-item" href="">Update</a>
                  </div>
                  </div>
                  <button type="button" class="btn btn-icon btn-pure btn-default" title="Delete" data-tag="project-delete"><i class="icon wb-trash" aria-hidden="true"></i></button>
                  </div>
                  <button type="button" class="btn btn-outline btn-default project-button">View Payment Details</button>
                  </figcaption>
                  </figure>
                  <div style="height: 50px;">
                     <div class="dropdown float-left" style="width: 50%;">
                        <ul class="list-unstyled example">
                           <li class="mb-15">
                              <div class="icheckbox_flat-blue" style="position: relative;"><input type="checkbox" class="icheckbox-primary" id="inputUnchecked" name="inputiCheckCheckboxes" data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                              <label for="inputUnchecked" class="">Online</label>
                           </li>
                        </ul>
                     </div>
                     <div class="dropdown float-left" style="width: 50%;">
                        <ul class="list-unstyled example">
                           <li class="mb-15">
                              <div class="icheckbox_flat-blue" style="position: relative;"><input type="checkbox" class="icheckbox-primary" id="inputchecked" name="inputiCheckCheckboxes" data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                              <label for="inputUnchecked" class="">Offline</label>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </li>
            <li>
               <div class="panel">
                  <div class="time float-left">Payeer</div>
                  <div class="time float-right">
                     <a class="animsition-link" href="pages/error-400.html">
                        Log
                  </div>
                  <figure class="overlay overlay-hover animation-hover">
                  <img class="caption-figure overlay-figure" src="{{asset('assets/photos/placeholder.png')}}">
                  <figcaption class="overlay-panel overlay-background overlay-fade text-center vertical-align">
                  <div class="btn-group">
                  <div class="dropdown float-left">
                  <button type="button" class="btn btn-icon btn-pure btn-default" title="Setting"><i class="icon wb-settings" aria-hidden="true"></i></button>
                  <div class="dropdown-menu" role="menu">
                  <a class="dropdown-item" href="">View Details</a>
                  <a class="dropdown-item" href="">Update</a>
                  </div>
                  </div>
                  <button type="button" class="btn btn-icon btn-pure btn-default" title="Delete" data-tag="project-delete"><i class="icon wb-trash" aria-hidden="true"></i></button>
                  </div>
                  <button type="button" class="btn btn-outline btn-default project-button">View Payment Details</button>
                  </figcaption>
                  </figure>
                  <div style="height: 50px;">
                     <div class="dropdown float-left" style="width: 50%;">
                        <ul class="list-unstyled example">
                           <li class="mb-15">
                              <div class="icheckbox_flat-blue" style="position: relative;"><input type="checkbox" class="icheckbox-primary" id="inputUnchecked" name="inputiCheckCheckboxes" data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                              <label for="inputUnchecked" class="">Online</label>
                           </li>
                        </ul>
                     </div>
                     <div class="dropdown float-left" style="width: 50%;">
                        <ul class="list-unstyled example">
                           <li class="mb-15">
                              <div class="icheckbox_flat-blue" style="position: relative;"><input type="checkbox" class="icheckbox-primary" id="inputchecked" name="inputiCheckCheckboxes" data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                              <label for="inputUnchecked" class="">Offline</label>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </li>
            <li>
               <div class="panel">
                  <div class="time float-left">PayTM</div>
                  <div class="time float-right">
                     <a class="animsition-link" href="pages/error-400.html">
                        Log
                  </div>
                  <figure class="overlay overlay-hover animation-hover">
                  <img class="caption-figure overlay-figure" src="{{asset('assets/photos/placeholder.png')}}">
                  <figcaption class="overlay-panel overlay-background overlay-fade text-center vertical-align">
                  <div class="btn-group">
                  <div class="dropdown float-left">
                  <button type="button" class="btn btn-icon btn-pure btn-default" title="Setting"><i class="icon wb-settings" aria-hidden="true"></i></button>
                  <div class="dropdown-menu" role="menu">
                  <a class="dropdown-item" href="">View Details</a>
                  <a class="dropdown-item" href="">Update</a>
                  </div>
                  </div>
                  <button type="button" class="btn btn-icon btn-pure btn-default" title="Delete" data-tag="project-delete"><i class="icon wb-trash" aria-hidden="true"></i></button>
                  </div>
                  <button type="button" class="btn btn-outline btn-default project-button">View Payment Details</button>
                  </figcaption>
                  </figure>
                  <div style="height: 50px;">
                     <div class="dropdown float-left" style="width: 50%;">
                        <ul class="list-unstyled example">
                           <li class="mb-15">
                              <div class="icheckbox_flat-blue" style="position: relative;"><input type="checkbox" class="icheckbox-primary" id="inputUnchecked" name="inputiCheckCheckboxes" data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                              <label for="inputUnchecked" class="">Online</label>
                           </li>
                        </ul>
                     </div>
                     <div class="dropdown float-left" style="width: 50%;">
                        <ul class="list-unstyled example">
                           <li class="mb-15">
                              <div class="icheckbox_flat-blue" style="position: relative;"><input type="checkbox" class="icheckbox-primary" id="inputchecked" name="inputiCheckCheckboxes" data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                              <label for="inputUnchecked" class="">Offline</label>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </li>
            <li>
               <div class="panel">
                  <div class="time float-left">Skrill</div>
                  <div class="time float-right">
                     <a class="animsition-link" href="pages/error-400.html">
                        Log
                  </div>
                  <figure class="overlay overlay-hover animation-hover">
                  <img class="caption-figure overlay-figure" src="{{asset('assets/photos/placeholder.png')}}">
                  <figcaption class="overlay-panel overlay-background overlay-fade text-center vertical-align">
                  <div class="btn-group">
                  <div class="dropdown float-left">
                  <button type="button" class="btn btn-icon btn-pure btn-default" title="Setting"><i class="icon wb-settings" aria-hidden="true"></i></button>
                  <div class="dropdown-menu" role="menu">
                  <a class="dropdown-item" href="">View Details</a>
                  <a class="dropdown-item" href="">Update</a>
                  </div>
                  </div>
                  <button type="button" class="btn btn-icon btn-pure btn-default" title="Delete" data-tag="project-delete"><i class="icon wb-trash" aria-hidden="true"></i></button>
                  </div>
                  <button type="button" class="btn btn-outline btn-default project-button">View Payment Details</button>
                  </figcaption>
                  </figure>
                  <div style="height: 50px;">
                     <div class="dropdown float-left" style="width: 50%;">
                        <ul class="list-unstyled example">
                           <li class="mb-15">
                              <div class="icheckbox_flat-blue" style="position: relative;"><input type="checkbox" class="icheckbox-primary" id="inputUnchecked" name="inputiCheckCheckboxes" data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                              <label for="inputUnchecked" class="">Online</label>
                           </li>
                        </ul>
                     </div>
                     <div class="dropdown float-left" style="width: 50%;">
                        <ul class="list-unstyled example">
                           <li class="mb-15">
                              <div class="icheckbox_flat-blue" style="position: relative;"><input type="checkbox" class="icheckbox-primary" id="inputchecked" name="inputiCheckCheckboxes" data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                              <label for="inputUnchecked" class="">Offline</label>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </li>
            <li>
               <div class="panel">
                  <div class="time float-left">PayPal</div>
                  <div class="time float-right">
                     <a class="animsition-link" href="pages/error-400.html">
                        Log
                  </div>
                  <figure class="overlay overlay-hover animation-hover">
                  <img class="caption-figure overlay-figure" src="{{asset('assets/photos/placeholder.png')}}">
                  <figcaption class="overlay-panel overlay-background overlay-fade text-center vertical-align">
                  <div class="btn-group">
                  <div class="dropdown float-left">
                  <button type="button" class="btn btn-icon btn-pure btn-default" title="Setting"><i class="icon wb-settings" aria-hidden="true"></i></button>
                  <div class="dropdown-menu" role="menu">
                  <a class="dropdown-item" href="">View Details</a>
                  <a class="dropdown-item" href="">Update</a>
                  </div>
                  </div>
                  <button type="button" class="btn btn-icon btn-pure btn-default" title="Delete" data-tag="project-delete"><i class="icon wb-trash" aria-hidden="true"></i></button>
                  </div>
                  <button type="button" class="btn btn-outline btn-default project-button">View Payment Details</button>
                  </figcaption>
                  </figure>
                  <div style="height: 50px;">
                     <div class="dropdown float-left" style="width: 50%;">
                        <ul class="list-unstyled example">
                           <li class="mb-15">
                              <div class="icheckbox_flat-blue" style="position: relative;"><input type="checkbox" class="icheckbox-primary" id="inputUnchecked" name="inputiCheckCheckboxes" data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                              <label for="inputUnchecked" class="">Online</label>
                           </li>
                        </ul>
                     </div>
                     <div class="dropdown float-left" style="width: 50%;">
                        <ul class="list-unstyled example">
                           <li class="mb-15">
                              <div class="icheckbox_flat-blue" style="position: relative;"><input type="checkbox" class="icheckbox-primary" id="inputchecked" name="inputiCheckCheckboxes" data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                              <label for="inputUnchecked" class="">Offline</label>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </li>
            <li>
               <div class="panel">
                  <div class="time float-left">PerfectMoney</div>
                  <div class="time float-right">
                     <a class="animsition-link" href="pages/error-400.html">
                        Log
                  </div>
                  <figure class="overlay overlay-hover animation-hover">
                  <img class="caption-figure overlay-figure" src="{{asset('assets/photos/placeholder.png')}}">
                  <figcaption class="overlay-panel overlay-background overlay-fade text-center vertical-align">
                  <div class="btn-group">
                  <div class="dropdown float-left">
                  <button type="button" class="btn btn-icon btn-pure btn-default" title="Setting"><i class="icon wb-settings" aria-hidden="true"></i></button>
                  <div class="dropdown-menu" role="menu">
                  <a class="dropdown-item" href="">View Details</a>
                  <a class="dropdown-item" href="">Update</a>
                  </div>
                  </div>
                  <button type="button" class="btn btn-icon btn-pure btn-default" title="Delete" data-tag="project-delete"><i class="icon wb-trash" aria-hidden="true"></i></button>
                  </div>
                  <button type="button" class="btn btn-outline btn-default project-button">View Payment Details</button>
                  </figcaption>
                  </figure>
                  <div style="height: 50px;">
                     <div class="dropdown float-left" style="width: 50%;">
                        <ul class="list-unstyled example">
                           <li class="mb-15">
                              <div class="icheckbox_flat-blue" style="position: relative;"><input type="checkbox" class="icheckbox-primary" id="inputUnchecked" name="inputiCheckCheckboxes" data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                              <label for="inputUnchecked" class="">Online</label>
                           </li>
                        </ul>
                     </div>
                     <div class="dropdown float-left" style="width: 50%;">
                        <ul class="list-unstyled example">
                           <li class="mb-15">
                              <div class="icheckbox_flat-blue checked" style="position: relative;"><input type="checkbox" class="icheckbox-primary" id="inputChecked" name="inputiCheckCheckboxes" data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue" checked="" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                              <label for="inputChecked" class="">Offline</label>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </li>
            <li>
               <div class="panel">
                  <div class="time float-left">Stripe</div>
                  <div class="time float-right">
                     <a class="animsition-link" href="pages/error-400.html">
                        Log
                  </div>
                  <figure class="overlay overlay-hover animation-hover">
                  <img class="caption-figure overlay-figure" src="{{asset('assets/photos/placeholder.png')}}">
                  <figcaption class="overlay-panel overlay-background overlay-fade text-center vertical-align">
                  <div class="btn-group">
                  <div class="dropdown float-left">
                  <button type="button" class="btn btn-icon btn-pure btn-default" title="Setting"><i class="icon wb-settings" aria-hidden="true"></i></button>
                  <div class="dropdown-menu" role="menu">
                  <a class="dropdown-item" href="">View Details</a>
                  <a class="dropdown-item" href="">Update</a>
                  </div>
                  </div>
                  <button type="button" class="btn btn-icon btn-pure btn-default" title="Delete" data-tag="project-delete"><i class="icon wb-trash" aria-hidden="true"></i></button>
                  </div>
                  <button type="button" class="btn btn-outline btn-default project-button">View Payment Details</button>
                  </figcaption>
                  </figure>
                  <div style="height: 50px;">
                     <div class="dropdown float-left" style="width: 50%;">
                        <ul class="list-unstyled example">
                           <li class="mb-15">
                              <div class="icheckbox_flat-blue" style="position: relative;"><input type="checkbox" class="icheckbox-primary" id="inputchecked" name="inputiCheckCheckboxes" data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                              <label for="inputUnchecked" class="">Online</label>
                           </li>
                        </ul>
                     </div>
                     <div class="dropdown float-left" style="width: 50%;">
                        <ul class="list-unstyled example">
                           <li class="mb-15">
                              <div class="icheckbox_flat-blue" style="position: relative;"><input type="checkbox" class="icheckbox-primary" id="inputchecked" name="inputiCheckCheckboxes" data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                              <label for="inputUnchecked" class="">Offline</label>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </li>
         </ul>
      </div>
      <nav>
         <ul class="pagination pagination-no-border">
            <li class="disabled page-item">
               <a class="page-link" href="javascript:void(0)" aria-label="Previous">
               <span aria-hidden="true">&laquo;</span>
               </a>
            </li>
            <li class="active page-item"><a class="page-link" href="javascript:void(0)">1 <span class="sr-only">(current)</span></a></li>
            <li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
            <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
            <li class="page-item"><a class="page-link" href="javascript:void(0)">4</a></li>
            <li class="page-item"><a class="page-link" href="javascript:void(0)">5</a></li>
            <li class="page-item">
               <a class="page-link" href="javascript:void(0)" aria-label="Next">
               <span aria-hidden="true">&raquo;</span>
               </a>
            </li>
         </ul>
      </nav>
   </div>
</div>
@endsection
