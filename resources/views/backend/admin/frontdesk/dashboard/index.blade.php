@extends('backend.master')
@section('title',"Dashboard")
@section('content')
<div class="page">
    <div class="page-main">
        <div class="page-header">
            <h1 class="page-title">Dashboard</h1>
        </div>
        <!--Here Starts Main Tabs -->
        <div class="page-nav-tabs" style="padding: 0px;">
            <ul class="nav nav-tabs" role="tablist">
                <li style="width: 30px;"></li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" data-toggle="tab" href="#checkview" aria-controls="checkview" aria-expanded="false" role="tab" aria-selected="false"> <i class="icon fa-tv" aria-hidden="true"></i>Check In</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" data-toggle="tab" href="#roomview" aria-controls="roomview" aria-expanded="true" role="tab" aria-selected="true"><i class="icon fa-calendar" aria-hidden="true"></i>Floor View</a>
                </li>
            </ul>
        </div>

        <!--Room Floor View Content Tab Starts Here -->
        <div class="page-content tab-content page-content-table nav-tabs-animate" style="padding: 10px;">
            <!-- Checkin Room View Content Tab Starts Here -->
            <div class="tab-pane animation-fade active" id="checkview" role="tabpanel">
                <div>
                    <div style="width: 100%;">
                        <div class="page-content-actions" style="margin-top: 20px;">
                            <div>
                                <div class="panel-body" style="background-color: #f1f4f5; padding: 0px;">
                                    <div class="example datepair-wrap" data-plugin="datepair">
                                        <div class="input-daterange-wrap">
                                            <div class="input-daterange">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="icon wb-calendar" aria-hidden="true"></i>
                                                    </span>
                                                    <input type="text" class="form-control datepair-date datepair-start" data-plugin="datepicker" />
                                                </div>
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="icon wb-time" aria-hidden="true"></i>
                                                    </span>
                                                    <input type="text" class="form-control datepair-time datepair-start ui-timepicker-input" data-plugin="timepicker" autocomplete="off" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-daterange-to">to</div>
                                        <div class="input-daterange-wrap">
                                            <div class="input-daterange">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="icon wb-calendar" aria-hidden="true"></i>
                                                    </span>
                                                    <input type="text" class="form-control datepair-date datepair-end" name="end" data-plugin="datepicker" />
                                                </div>
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="icon wb-time" aria-hidden="true"></i>
                                                    </span>
                                                    <input type="text" class="form-control datepair-time datepair-end ui-timepicker-input" data-plugin="timepicker" autocomplete="off" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-1" style="/* padding: 10px; */ /* background-color: #fff; */">
                                            <div style="width: 100%; background-color: #11c26d; height: 5px;"></div>
                                            <div class="card card-shadow w-full">
                                                <div class="card-block text-center bg-white p-20">
                                                    <div class="taskboard-stage-actions float-right">
                                                        <div class="dropdown">
                                                            <a data-toggle="dropdown" href="#" aria-expanded="false"><i class="icon wb-more-vertical" aria-hidden="true"></i></a>
                                                            <div
                                                                class="dropdown-menu bullet"
                                                                role="menu"
                                                                x-placement="bottom-start"
                                                                style="position: absolute; transform: translate3d(0px, 19px, 0px); top: 0px; left: 0px; will-change: transform;"
                                                            >
                                                                <a class="taskboard-stage-rename dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-lock" aria-hidden="true"></i>Check-In</a>
                                                                <a class="taskboard-stage-delete dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-unlock" aria-hidden="true"></i>Check Out</a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <a href="#" class="avatar mb-5">
                                                        <img class="img-fluid" src="{{asset('assets/portraits/1.jpg')}}" alt="Adam_photo" />
                                                    </a>
                                                    <div class="friend-name">Adam P.</div>
                                                    <div class="friend-title mb-20 blue-grey-400">
                                                        101 - Deluxe
                                                    </div>
                                                    <ul class="list-inline font-size-17 mb-5">
                                                        <li class="list-inline-item"><a href="#" class="icon fa-bed" style="color: #f17cff;"></a></li>

                                                        <li class="list-inline-item"><a href="#" class="icon wb-user blue-grey-400"></a></li>
                                                        <li class="list-inline-item"><a href="#" class="icon wb-tag blue-grey-400"></a></li>
                                                    </ul>
                                                    <span class="list-text">
                                                        <button type="button" class="btn btn-xs btn-success" style="width: 80px;"><i class="icon fa-paint-brush" aria-hidden="true" style="color: #fff;"></i><b>Cleaned</b></button>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1" style="/* padding: 10px; */ /* background-color: #fff; */">
                                            <div style="width: 100%; background-color: #eb6709; height: 5px;"></div>
                                            <div class="card card-shadow w-full">
                                                <div class="card-block text-center bg-white p-20">
                                                    <div class="taskboard-stage-actions float-right">
                                                        <div class="dropdown">
                                                            <a data-toggle="dropdown" href="#" aria-expanded="false"><i class="icon wb-more-vertical" aria-hidden="true"></i></a>
                                                            <div
                                                                class="dropdown-menu bullet"
                                                                role="menu"
                                                                x-placement="bottom-start"
                                                                style="position: absolute; transform: translate3d(0px, 19px, 0px); top: 0px; left: 0px; will-change: transform;"
                                                            >
                                                                <a class="taskboard-stage-rename dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-lock" aria-hidden="true"></i>Check-In</a>
                                                                <a class="taskboard-stage-delete dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-unlock" aria-hidden="true"></i>Check Out</a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <a href="#" class="avatar mb-5">
                                                        <img class="img-fluid" src="{{asset('assets/portraits/2.jpg')}}" alt="Adam_photo" />
                                                    </a>
                                                    <div class="friend-name">Adam P.</div>
                                                    <div class="friend-title mb-20 blue-grey-400">
                                                        102 - Double
                                                    </div>
                                                    <ul class="list-inline font-size-17 mb-5">
                                                        <li class="list-inline-item"><a href="#" class="icon fa-bed" style="color: #eb6709;"></a></li>

                                                        <li class="list-inline-item"><a href="#" class="icon wb-user blue-grey-400"></a></li>
                                                        <li class="list-inline-item"><a href="#" class="icon wb-tag blue-grey-400"></a></li>
                                                    </ul>
                                                    <span class="list-text" style="/* padding-left: 0px; */">
                                                        <button type="button" class="btn btn-xs btn-warning" style="padding-left: -10px; width: 80px;">
                                                            <i class="icon wb-wrench" aria-hidden="true" style="color: #fff;"></i><b>Out Ord.</b>
                                                        </button>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1" style="/* padding: 10px; */ /* background-color: #fff; */">
                                            <div style="width: 100%; background-color: #ff4c52; height: 5px;"></div>
                                            <div class="card card-shadow w-full">
                                                <div class="card-block text-center bg-white p-20">
                                                    <div class="taskboard-stage-actions float-right">
                                                        <div class="dropdown">
                                                            <a data-toggle="dropdown" href="#" aria-expanded="false"><i class="icon wb-more-vertical" aria-hidden="true"></i></a>
                                                            <div
                                                                class="dropdown-menu bullet"
                                                                role="menu"
                                                                x-placement="bottom-start"
                                                                style="position: absolute; transform: translate3d(0px, 19px, 0px); top: 0px; left: 0px; will-change: transform;"
                                                            >
                                                                <a class="taskboard-stage-rename dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-lock" aria-hidden="true"></i>Check-In</a>
                                                                <a class="taskboard-stage-delete dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-unlock" aria-hidden="true"></i>Check Out</a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <a href="#" class="avatar mb-5">
                                                        <img class="img-fluid" src="{{asset('assets/portraits/3.jpg')}}" alt="Adam_photo" />
                                                    </a>
                                                    <div class="friend-name">Adam P.</div>
                                                    <div class="friend-title mb-20 blue-grey-400">
                                                        103 - Family
                                                    </div>
                                                    <ul class="list-inline font-size-17 mb-5">
                                                        <li class="list-inline-item"><a href="#" class="icon fa-bed" style="color: #4ea102;"></a></li>

                                                        <li class="list-inline-item"><a href="#" class="icon wb-user blue-grey-400"></a></li>
                                                        <li class="list-inline-item"><a href="#" class="icon wb-tag blue-grey-400"></a></li>
                                                    </ul>
                                                    <span class="list-text">
                                                        <button type="button" class="btn btn-xs btn-danger" style="width: 80px;"><i class="icon fa-paw" aria-hidden="true" style="color: #fff;"></i><b>Vy. Dirty</b></button>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1" style="/* padding: 10px; */ /* background-color: #fff; */">
                                            <div style="width: 100%; background-color: #e4eaec; height: 5px;"></div>
                                            <div class="card card-shadow w-full">
                                                <div class="card-block text-center bg-white p-20">
                                                    <div class="taskboard-stage-actions float-right">
                                                        <div class="dropdown">
                                                            <a data-toggle="dropdown" href="#" aria-expanded="false"><i class="icon wb-more-vertical" aria-hidden="true"></i></a>
                                                            <div
                                                                class="dropdown-menu bullet"
                                                                role="menu"
                                                                x-placement="bottom-start"
                                                                style="position: absolute; transform: translate3d(0px, 19px, 0px); top: 0px; left: 0px; will-change: transform;"
                                                            >
                                                                <a class="taskboard-stage-rename dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-lock" aria-hidden="true"></i>Check-In</a>
                                                                <a class="taskboard-stage-delete dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-unlock" aria-hidden="true"></i>Check Out</a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <a href="#" class="avatar mb-5">
                                                        <img class="img-fluid" src="{{asset('assets/images/logo-colored.png')}}" alt="Adam_photo" />
                                                    </a>
                                                    <div class="friend-name">Adam P.</div>
                                                    <div class="friend-title mb-20 blue-grey-400">
                                                        104 - Single
                                                    </div>
                                                    <ul class="list-inline font-size-17 mb-5">
                                                        <li class="list-inline-item"><a href="#" class="icon fa-bed" style="color: #f17cff;"></a></li>

                                                        <li class="list-inline-item"><a href="#" class="icon wb-user blue-grey-400"></a></li>
                                                        <li class="list-inline-item"><a href="#" class="icon wb-tag blue-grey-400"></a></li>
                                                    </ul>
                                                    <span class="list-text">
                                                        <button type="button" class="btn btn-xs btn-default" style="width: 80px;"><i class="icon wb-unlock" aria-hidden="true"></i><b>Vacant</b></button>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1" style="/* padding: 10px; */ /* background-color: #fff; */">
                                            <div style="width: 100%; background-color: #11c26d; height: 5px;"></div>
                                            <div class="card card-shadow w-full">
                                                <div class="card-block text-center bg-white p-20">
                                                    <div class="taskboard-stage-actions float-right">
                                                        <div class="dropdown">
                                                            <a data-toggle="dropdown" href="#" aria-expanded="false"><i class="icon wb-more-vertical" aria-hidden="true"></i></a>
                                                            <div
                                                                class="dropdown-menu bullet"
                                                                role="menu"
                                                                x-placement="bottom-start"
                                                                style="position: absolute; transform: translate3d(0px, 19px, 0px); top: 0px; left: 0px; will-change: transform;"
                                                            >
                                                                <a class="taskboard-stage-rename dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-lock" aria-hidden="true"></i>Check-In</a>
                                                                <a class="taskboard-stage-delete dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-unlock" aria-hidden="true"></i>Check Out</a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <a href="#" class="avatar mb-5">
                                                        <img class="img-fluid" src="{{asset('assets/portraits/2.jpg')}}" alt="Adam_photo" />
                                                    </a>
                                                    <div class="friend-name">Adam P.</div>
                                                    <div class="friend-title mb-20 blue-grey-400">
                                                        105 - Single
                                                    </div>
                                                    <ul class="list-inline font-size-17 mb-5">
                                                        <li class="list-inline-item"><a href="#" class="icon fa-bed" style="color: #f17cff;"></a></li>

                                                        <li class="list-inline-item"><a href="#" class="icon wb-user blue-grey-400"></a></li>
                                                        <li class="list-inline-item"><a href="#" class="icon wb-tag blue-grey-400"></a></li>
                                                    </ul>
                                                    <span class="list-text">
                                                        <button type="button" class="btn btn-xs btn-success" style="width: 80px;"><i class="icon fa-paint-brush" aria-hidden="true" style="color: #fff;"></i><b>Cleaned</b></button>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-1" style="/* padding: 10px; */ /* background-color: #fff; */">
                                            <div style="width: 100%; background-color: #eb6709; height: 5px;"></div>
                                            <div class="card card-shadow w-full">
                                                <div class="card-block text-center bg-white p-20">
                                                    <div class="taskboard-stage-actions float-right">
                                                        <div class="dropdown">
                                                            <a data-toggle="dropdown" href="#" aria-expanded="false"><i class="icon wb-more-vertical" aria-hidden="true"></i></a>
                                                            <div
                                                                class="dropdown-menu bullet"
                                                                role="menu"
                                                                x-placement="bottom-start"
                                                                style="position: absolute; transform: translate3d(0px, 19px, 0px); top: 0px; left: 0px; will-change: transform;"
                                                            >
                                                                <a class="taskboard-stage-rename dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-lock" aria-hidden="true"></i>Check-In</a>
                                                                <a class="taskboard-stage-delete dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-unlock" aria-hidden="true"></i>Check Out</a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <a href="#" class="avatar mb-5">
                                                        <img class="img-fluid" src="{{asset('assets/portraits/3.jpg')}}" alt="Adam_photo" />
                                                    </a>
                                                    <div class="friend-name">Adam P.</div>
                                                    <div class="friend-title mb-20 blue-grey-400">
                                                        106 - Double
                                                    </div>
                                                    <ul class="list-inline font-size-17 mb-5">
                                                        <li class="list-inline-item"><a href="#" class="icon fa-bed" style="color: #eb6709;"></a></li>

                                                        <li class="list-inline-item"><a href="#" class="icon wb-user blue-grey-400"></a></li>
                                                        <li class="list-inline-item"><a href="#" class="icon wb-tag blue-grey-400"></a></li>
                                                    </ul>
                                                    <span class="list-text" style="/* padding-left: 0px; */">
                                                        <button type="button" class="btn btn-xs btn-warning" style="padding-left: -10px; width: 80px;">
                                                            <i class="icon wb-wrench" aria-hidden="true" style="color: #fff;"></i><b>Out Ord.</b>
                                                        </button>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1" style="/* padding: 10px; */ /* background-color: #fff; */">
                                            <div style="width: 100%; background-color: #ff4c52; height: 5px;"></div>
                                            <div class="card card-shadow w-full">
                                                <div class="card-block text-center bg-white p-20">
                                                    <div class="taskboard-stage-actions float-right">
                                                        <div class="dropdown">
                                                            <a data-toggle="dropdown" href="#" aria-expanded="false"><i class="icon wb-more-vertical" aria-hidden="true"></i></a>
                                                            <div
                                                                class="dropdown-menu bullet"
                                                                role="menu"
                                                                x-placement="bottom-start"
                                                                style="position: absolute; transform: translate3d(0px, 19px, 0px); top: 0px; left: 0px; will-change: transform;"
                                                            >
                                                                <a class="taskboard-stage-rename dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-lock" aria-hidden="true"></i>Check-In</a>
                                                                <a class="taskboard-stage-delete dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-unlock" aria-hidden="true"></i>Check Out</a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <a href="#" class="avatar mb-5">
                                                        <img class="img-fluid" src="{{asset('assets/portraits/3.jpg')}}" alt="Adam_photo" />
                                                    </a>
                                                    <div class="friend-name">Adam P.</div>
                                                    <div class="friend-title mb-20 blue-grey-400">
                                                        107 - Family
                                                    </div>
                                                    <ul class="list-inline font-size-17 mb-5">
                                                        <li class="list-inline-item"><a href="#" class="icon fa-bed" style="color: #4ea102;"></a></li>

                                                        <li class="list-inline-item"><a href="#" class="icon wb-user blue-grey-400"></a></li>
                                                        <li class="list-inline-item"><a href="#" class="icon wb-tag blue-grey-400"></a></li>
                                                    </ul>
                                                    <span class="list-text">
                                                        <button type="button" class="btn btn-xs btn-danger" style="width: 80px;"><i class="icon fa-paw" aria-hidden="true" style="color: #fff;"></i><b>Vy. Dirty</b></button>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div style="/* padding: 10px; */ /* background-color: #fff; */" class="col-sm-1">
                                            <div style="width: 100%; background-color: #e4eaec; height: 5px;"></div>
                                            <div class="card card-shadow w-full">
                                                <div class="card-block text-center bg-white p-20">
                                                    <div class="taskboard-stage-actions float-right">
                                                        <div class="dropdown">
                                                            <a data-toggle="dropdown" href="#" aria-expanded="false"><i class="icon wb-more-vertical" aria-hidden="true"></i></a>
                                                            <div
                                                                class="dropdown-menu bullet"
                                                                role="menu"
                                                                x-placement="bottom-start"
                                                                style="position: absolute; transform: translate3d(0px, 19px, 0px); top: 0px; left: 0px; will-change: transform;"
                                                            >
                                                                <a class="taskboard-stage-rename dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-lock" aria-hidden="true"></i>Check-In</a>
                                                                <a class="taskboard-stage-delete dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-unlock" aria-hidden="true"></i>Check Out</a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <a href="#" class="avatar mb-5">
                                                        <img class="img-fluid" src="{{asset('assets/portraits/1.jpg')}}" alt="Adam_photo" />
                                                    </a>
                                                    <div class="friend-name">Adam P.</div>
                                                    <div class="friend-title mb-20 blue-grey-400">
                                                        108 - Deluxe
                                                    </div>
                                                    <ul class="list-inline font-size-17 mb-5">
                                                        <li class="list-inline-item"><a href="#" class="icon fa-bed" style="color: #eb6709;"></a></li>

                                                        <li class="list-inline-item"><a href="#" class="icon wb-user blue-grey-400"></a></li>
                                                        <li class="list-inline-item"><a href="#" class="icon wb-tag blue-grey-400"></a></li>
                                                    </ul>
                                                    <span class="list-text">
                                                        <button type="button" class="btn btn-xs btn-default" style="width: 80px;"><i class="icon wb-unlock" aria-hidden="true"></i><b>Vacant</b></button>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1" style="/* padding: 10px; */ /* background-color: #fff; */">
                                            <div style="width: 100%; background-color: #11c26d; height: 5px;"></div>
                                            <div class="card card-shadow w-full">
                                                <div class="card-block text-center bg-white p-20">
                                                    <div class="taskboard-stage-actions float-right">
                                                        <div class="dropdown">
                                                            <a data-toggle="dropdown" href="#" aria-expanded="false"><i class="icon wb-more-vertical" aria-hidden="true"></i></a>
                                                            <div
                                                                class="dropdown-menu bullet"
                                                                role="menu"
                                                                x-placement="bottom-start"
                                                                style="position: absolute; transform: translate3d(0px, 19px, 0px); top: 0px; left: 0px; will-change: transform;"
                                                            >
                                                                <a class="taskboard-stage-rename dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-lock" aria-hidden="true"></i>Check-In</a>
                                                                <a class="taskboard-stage-delete dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-unlock" aria-hidden="true"></i>Check Out</a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <a href="#" class="avatar mb-5">
                                                        <img class="img-fluid" src="{{asset('assets/portraits/2.jpg')}}" alt="Adam_photo" />
                                                    </a>
                                                    <div class="friend-name">Adam P.</div>
                                                    <div class="friend-title mb-20 blue-grey-400">
                                                        109 - Single
                                                    </div>
                                                    <ul class="list-inline font-size-17 mb-5">
                                                        <li class="list-inline-item"><a href="#" class="icon fa-bed" style="color: #f17cff;"></a></li>

                                                        <li class="list-inline-item"><a href="#" class="icon wb-user blue-grey-400"></a></li>
                                                        <li class="list-inline-item"><a href="#" class="icon wb-tag blue-grey-400"></a></li>
                                                    </ul>
                                                    <span class="list-text">
                                                        <button type="button" class="btn btn-xs btn-success" style="width: 80px;"><i class="icon fa-paint-brush" aria-hidden="true" style="color: #fff;"></i><b>Cleaned</b></button>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1" style="/* padding: 10px; */ /* background-color: #fff; */">
                                            <div style="width: 100%; background-color: #ff4c52; height: 5px;"></div>
                                            <div class="card card-shadow w-full">
                                                <div class="card-block text-center bg-white p-20">
                                                    <div class="taskboard-stage-actions float-right">
                                                        <div class="dropdown">
                                                            <a data-toggle="dropdown" href="#" aria-expanded="false"><i class="icon wb-more-vertical" aria-hidden="true"></i></a>
                                                            <div
                                                                class="dropdown-menu bullet"
                                                                role="menu"
                                                                x-placement="bottom-start"
                                                                style="position: absolute; transform: translate3d(0px, 19px, 0px); top: 0px; left: 0px; will-change: transform;"
                                                            >
                                                                <a class="taskboard-stage-rename dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-lock" aria-hidden="true"></i>Check-In</a>
                                                                <a class="taskboard-stage-delete dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-unlock" aria-hidden="true"></i>Check Out</a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <a href="#" class="avatar mb-5">
                                                        <img class="img-fluid" src="{{asset('assets/portraits/3.jpg')}}" alt="Adam_photo" />
                                                    </a>
                                                    <div class="friend-name">Adam P.</div>
                                                    <div class="friend-title mb-20 blue-grey-400">
                                                        110 - Family
                                                    </div>
                                                    <ul class="list-inline font-size-17 mb-5">
                                                        <li class="list-inline-item"><a href="#" class="icon fa-bed" style="color: #4ea102;"></a></li>

                                                        <li class="list-inline-item"><a href="#" class="icon wb-user blue-grey-400"></a></li>
                                                        <li class="list-inline-item"><a href="#" class="icon wb-tag blue-grey-400"></a></li>
                                                    </ul>
                                                    <span class="list-text">
                                                        <button type="button" class="btn btn-xs btn-danger" style="width: 80px;"><i class="icon fa-paw" aria-hidden="true" style="color: #fff;"></i><b>Vy. Dirty</b></button>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1" style="/* padding: 10px; */ /* background-color: #fff; */">
                                            <div style="width: 100%; background-color: #eb6709; height: 5px;"></div>
                                            <div class="card card-shadow w-full">
                                                <div class="card-block text-center bg-white p-20">
                                                    <div class="taskboard-stage-actions float-right">
                                                        <div class="dropdown">
                                                            <a data-toggle="dropdown" href="#" aria-expanded="false"><i class="icon wb-more-vertical" aria-hidden="true"></i></a>
                                                            <div
                                                                class="dropdown-menu bullet"
                                                                role="menu"
                                                                x-placement="bottom-start"
                                                                style="position: absolute; transform: translate3d(0px, 19px, 0px); top: 0px; left: 0px; will-change: transform;"
                                                            >
                                                                <a class="taskboard-stage-rename dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-lock" aria-hidden="true"></i>Check-In</a>
                                                                <a class="taskboard-stage-delete dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-unlock" aria-hidden="true"></i>Check Out</a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <a href="#" class="avatar mb-5">
                                                        <img class="img-fluid" src="{{asset('assets/portraits/3.jpg')}}" alt="Adam_photo" />
                                                    </a>
                                                    <div class="friend-name">Adam P.</div>
                                                    <div class="friend-title mb-20 blue-grey-400">
                                                        111 - Double
                                                    </div>
                                                    <ul class="list-inline font-size-17 mb-5">
                                                        <li class="list-inline-item"><a href="#" class="icon fa-bed" style="color: #eb6709;"></a></li>

                                                        <li class="list-inline-item"><a href="#" class="icon wb-user blue-grey-400"></a></li>
                                                        <li class="list-inline-item"><a href="#" class="icon wb-tag blue-grey-400"></a></li>
                                                    </ul>
                                                    <span class="list-text" style="/* padding-left: 0px; */">
                                                        <button type="button" class="btn btn-xs btn-warning" style="padding-left: -10px; width: 80px;">
                                                            <i class="icon wb-wrench" aria-hidden="true" style="color: #fff;"></i><b>Out Ord.</b>
                                                        </button>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1" style="/* padding: 10px; */ /* background-color: #fff; */">
                                            <div style="width: 100%; background-color: #e4eaec; height: 5px;"></div>
                                            <div class="card card-shadow w-full">
                                                <div class="card-block text-center bg-white p-20">
                                                    <div class="taskboard-stage-actions float-right">
                                                        <div class="dropdown">
                                                            <a data-toggle="dropdown" href="#" aria-expanded="false"><i class="icon wb-more-vertical" aria-hidden="true"></i></a>
                                                            <div
                                                                class="dropdown-menu bullet"
                                                                role="menu"
                                                                x-placement="bottom-start"
                                                                style="position: absolute; transform: translate3d(0px, 19px, 0px); top: 0px; left: 0px; will-change: transform;"
                                                            >
                                                                <a class="taskboard-stage-rename dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-lock" aria-hidden="true"></i>Check-In</a>
                                                                <a class="taskboard-stage-delete dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-unlock" aria-hidden="true"></i>Check Out</a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <a href="#" class="avatar mb-5">
                                                        <img class="img-fluid" src="{{asset('assets/portraits/2.jpg')}}" alt="Adam_photo" />
                                                    </a>
                                                    <div class="friend-name">Adam P.</div>
                                                    <div class="friend-title mb-20 blue-grey-400">
                                                        112 - Single
                                                    </div>
                                                    <ul class="list-inline font-size-17 mb-5">
                                                        <li class="list-inline-item"><a href="#" class="icon fa-bed" style="color: #f17cff;"></a></li>

                                                        <li class="list-inline-item"><a href="#" class="icon wb-user blue-grey-400"></a></li>
                                                        <li class="list-inline-item"><a href="#" class="icon wb-tag blue-grey-400"></a></li>
                                                    </ul>
                                                    <span class="list-text">
                                                        <button type="button" class="btn btn-xs btn-default" style="width: 80px;"><i class="icon wb-unlock" aria-hidden="true"></i><b>Vacant</b></button>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-1" style="/* padding: 10px; */ /* background-color: #fff; */">
                                            <div style="width: 100%; background-color: #11c26d; height: 5px;"></div>
                                            <div class="card card-shadow w-full">
                                                <div class="card-block text-center bg-white p-20">
                                                    <div class="taskboard-stage-actions float-right">
                                                        <div class="dropdown">
                                                            <a data-toggle="dropdown" href="#" aria-expanded="false"><i class="icon wb-more-vertical" aria-hidden="true"></i></a>
                                                            <div
                                                                class="dropdown-menu bullet"
                                                                role="menu"
                                                                x-placement="bottom-start"
                                                                style="position: absolute; transform: translate3d(0px, 19px, 0px); top: 0px; left: 0px; will-change: transform;"
                                                            >
                                                                <a class="taskboard-stage-rename dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-lock" aria-hidden="true"></i>Check-In</a>
                                                                <a class="taskboard-stage-delete dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-unlock" aria-hidden="true"></i>Check Out</a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <a href="#" class="avatar mb-5">
                                                        <img class="img-fluid" src="{{asset('assets/portraits/1.jpg')}}" alt="Adam_photo" />
                                                    </a>
                                                    <div class="friend-name">Adam P.</div>
                                                    <div class="friend-title mb-20 blue-grey-400">
                                                        101 - Deluxe
                                                    </div>
                                                    <ul class="list-inline font-size-17 mb-5">
                                                        <li class="list-inline-item"><a href="#" class="icon fa-bed" style="color: #f17cff;"></a></li>

                                                        <li class="list-inline-item"><a href="#" class="icon wb-user blue-grey-400"></a></li>
                                                        <li class="list-inline-item"><a href="#" class="icon wb-tag blue-grey-400"></a></li>
                                                    </ul>
                                                    <span class="list-text">
                                                        <button type="button" class="btn btn-xs btn-success" style="width: 80px;"><i class="icon fa-paint-brush" aria-hidden="true" style="color: #fff;"></i><b>Cleaned</b></button>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1" style="/* padding: 10px; */ /* background-color: #fff; */">
                                            <div style="width: 100%; background-color: #eb6709; height: 5px;"></div>
                                            <div class="card card-shadow w-full">
                                                <div class="card-block text-center bg-white p-20">
                                                    <div class="taskboard-stage-actions float-right">
                                                        <div class="dropdown">
                                                            <a data-toggle="dropdown" href="#" aria-expanded="false"><i class="icon wb-more-vertical" aria-hidden="true"></i></a>
                                                            <div
                                                                class="dropdown-menu bullet"
                                                                role="menu"
                                                                x-placement="bottom-start"
                                                                style="position: absolute; transform: translate3d(0px, 19px, 0px); top: 0px; left: 0px; will-change: transform;"
                                                            >
                                                                <a class="taskboard-stage-rename dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-lock" aria-hidden="true"></i>Check-In</a>
                                                                <a class="taskboard-stage-delete dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-unlock" aria-hidden="true"></i>Check Out</a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <a href="#" class="avatar mb-5">
                                                        <img class="img-fluid" src="{{asset('assets/portraits/2.jpg')}}" alt="Adam_photo" />
                                                    </a>
                                                    <div class="friend-name">Adam P.</div>
                                                    <div class="friend-title mb-20 blue-grey-400">
                                                        102 - Double
                                                    </div>
                                                    <ul class="list-inline font-size-17 mb-5">
                                                        <li class="list-inline-item"><a href="#" class="icon fa-bed" style="color: #eb6709;"></a></li>

                                                        <li class="list-inline-item"><a href="#" class="icon wb-user blue-grey-400"></a></li>
                                                        <li class="list-inline-item"><a href="#" class="icon wb-tag blue-grey-400"></a></li>
                                                    </ul>
                                                    <span class="list-text" style="/* padding-left: 0px; */">
                                                        <button type="button" class="btn btn-xs btn-warning" style="padding-left: -10px; width: 80px;">
                                                            <i class="icon wb-wrench" aria-hidden="true" style="color: #fff;"></i><b>Out Ord.</b>
                                                        </button>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1" style="/* padding: 10px; */ /* background-color: #fff; */">
                                            <div style="width: 100%; background-color: #ff4c52; height: 5px;"></div>
                                            <div class="card card-shadow w-full">
                                                <div class="card-block text-center bg-white p-20">
                                                    <div class="taskboard-stage-actions float-right">
                                                        <div class="dropdown">
                                                            <a data-toggle="dropdown" href="#" aria-expanded="false"><i class="icon wb-more-vertical" aria-hidden="true"></i></a>
                                                            <div
                                                                class="dropdown-menu bullet"
                                                                role="menu"
                                                                x-placement="bottom-start"
                                                                style="position: absolute; transform: translate3d(0px, 19px, 0px); top: 0px; left: 0px; will-change: transform;"
                                                            >
                                                                <a class="taskboard-stage-rename dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-lock" aria-hidden="true"></i>Check-In</a>
                                                                <a class="taskboard-stage-delete dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-unlock" aria-hidden="true"></i>Check Out</a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <a href="#" class="avatar mb-5">
                                                        <img class="img-fluid" src="{{asset('assets/portraits/3.jpg')}}" alt="Adam_photo" />
                                                    </a>
                                                    <div class="friend-name">Adam P.</div>
                                                    <div class="friend-title mb-20 blue-grey-400">
                                                        103 - Family
                                                    </div>
                                                    <ul class="list-inline font-size-17 mb-5">
                                                        <li class="list-inline-item"><a href="#" class="icon fa-bed" style="color: #4ea102;"></a></li>

                                                        <li class="list-inline-item"><a href="#" class="icon wb-user blue-grey-400"></a></li>
                                                        <li class="list-inline-item"><a href="#" class="icon wb-tag blue-grey-400"></a></li>
                                                    </ul>
                                                    <span class="list-text">
                                                        <button type="button" class="btn btn-xs btn-danger" style="width: 80px;"><i class="icon fa-paw" aria-hidden="true" style="color: #fff;"></i><b>Vy. Dirty</b></button>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1" style="/* padding: 10px; */ /* background-color: #fff; */">
                                            <div style="width: 100%; background-color: #e4eaec; height: 5px;"></div>
                                            <div class="card card-shadow w-full">
                                                <div class="card-block text-center bg-white p-20">
                                                    <div class="taskboard-stage-actions float-right">
                                                        <div class="dropdown">
                                                            <a data-toggle="dropdown" href="#" aria-expanded="false"><i class="icon wb-more-vertical" aria-hidden="true"></i></a>
                                                            <div
                                                                class="dropdown-menu bullet"
                                                                role="menu"
                                                                x-placement="bottom-start"
                                                                style="position: absolute; transform: translate3d(0px, 19px, 0px); top: 0px; left: 0px; will-change: transform;"
                                                            >
                                                                <a class="taskboard-stage-rename dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-lock" aria-hidden="true"></i>Check-In</a>
                                                                <a class="taskboard-stage-delete dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-unlock" aria-hidden="true"></i>Check Out</a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <a href="#" class="avatar mb-5">
                                                        <img class="img-fluid" src="{{asset('assets/portraits/1.jpg')}}" alt="Adam_photo" />
                                                    </a>
                                                    <div class="friend-name">Adam P.</div>
                                                    <div class="friend-title mb-20 blue-grey-400">
                                                        104 - Single
                                                    </div>
                                                    <ul class="list-inline font-size-17 mb-5">
                                                        <li class="list-inline-item"><a href="#" class="icon fa-bed" style="color: #f17cff;"></a></li>

                                                        <li class="list-inline-item"><a href="#" class="icon wb-user blue-grey-400"></a></li>
                                                        <li class="list-inline-item"><a href="#" class="icon wb-tag blue-grey-400"></a></li>
                                                    </ul>
                                                    <span class="list-text">
                                                        <button type="button" class="btn btn-xs btn-default" style="width: 80px;"><i class="icon wb-unlock" aria-hidden="true"></i><b>Vacant</b></button>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1" style="/* padding: 10px; */ /* background-color: #fff; */">
                                            <div style="width: 100%; background-color: #11c26d; height: 5px;"></div>
                                            <div class="card card-shadow w-full">
                                                <div class="card-block text-center bg-white p-20">
                                                    <div class="taskboard-stage-actions float-right">
                                                        <div class="dropdown">
                                                            <a data-toggle="dropdown" href="#" aria-expanded="false"><i class="icon wb-more-vertical" aria-hidden="true"></i></a>
                                                            <div
                                                                class="dropdown-menu bullet"
                                                                role="menu"
                                                                x-placement="bottom-start"
                                                                style="position: absolute; transform: translate3d(0px, 19px, 0px); top: 0px; left: 0px; will-change: transform;"
                                                            >
                                                                <a class="taskboard-stage-rename dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-lock" aria-hidden="true"></i>Check-In</a>
                                                                <a class="taskboard-stage-delete dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-unlock" aria-hidden="true"></i>Check Out</a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <a href="#" class="avatar mb-5">
                                                        <img class="img-fluid" src="{{asset('assets/portraits/1.jpg')}}" alt="Adam_photo" />
                                                    </a>
                                                    <div class="friend-name">Adam P.</div>
                                                    <div class="friend-title mb-20 blue-grey-400">
                                                        105 - Single
                                                    </div>
                                                    <ul class="list-inline font-size-17 mb-5">
                                                        <li class="list-inline-item"><a href="#" class="icon fa-bed" style="color: #f17cff;"></a></li>

                                                        <li class="list-inline-item"><a href="#" class="icon wb-user blue-grey-400"></a></li>
                                                        <li class="list-inline-item"><a href="#" class="icon wb-tag blue-grey-400"></a></li>
                                                    </ul>
                                                    <span class="list-text">
                                                        <button type="button" class="btn btn-xs btn-success" style="width: 80px;"><i class="icon fa-paint-brush" aria-hidden="true" style="color: #fff;"></i><b>Cleaned</b></button>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-1" style="/* padding: 10px; */ /* background-color: #fff; */">
                                            <div style="width: 100%; background-color: #eb6709; height: 5px;"></div>
                                            <div class="card card-shadow w-full">
                                                <div class="card-block text-center bg-white p-20">
                                                    <div class="taskboard-stage-actions float-right">
                                                        <div class="dropdown">
                                                            <a data-toggle="dropdown" href="#" aria-expanded="false"><i class="icon wb-more-vertical" aria-hidden="true"></i></a>
                                                            <div
                                                                class="dropdown-menu bullet"
                                                                role="menu"
                                                                x-placement="bottom-start"
                                                                style="position: absolute; transform: translate3d(0px, 19px, 0px); top: 0px; left: 0px; will-change: transform;"
                                                            >
                                                                <a class="taskboard-stage-rename dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-lock" aria-hidden="true"></i>Check-In</a>
                                                                <a class="taskboard-stage-delete dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-unlock" aria-hidden="true"></i>Check Out</a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <a href="#" class="avatar mb-5">
                                                        <img class="img-fluid" src="{{asset('assets/portraits/2.jpg')}}" alt="Adam_photo" />
                                                    </a>
                                                    <div class="friend-name">Adam P.</div>
                                                    <div class="friend-title mb-20 blue-grey-400">
                                                        106 - Double
                                                    </div>
                                                    <ul class="list-inline font-size-17 mb-5">
                                                        <li class="list-inline-item"><a href="#" class="icon fa-bed" style="color: #eb6709;"></a></li>

                                                        <li class="list-inline-item"><a href="#" class="icon wb-user blue-grey-400"></a></li>
                                                        <li class="list-inline-item"><a href="#" class="icon wb-tag blue-grey-400"></a></li>
                                                    </ul>
                                                    <span class="list-text" style="/* padding-left: 0px; */">
                                                        <button type="button" class="btn btn-xs btn-warning" style="padding-left: -10px; width: 80px;">
                                                            <i class="icon wb-wrench" aria-hidden="true" style="color: #fff;"></i><b>Out Ord.</b>
                                                        </button>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1" style="/* padding: 10px; */ /* background-color: #fff; */">
                                            <div style="width: 100%; background-color: #ff4c52; height: 5px;"></div>
                                            <div class="card card-shadow w-full">
                                                <div class="card-block text-center bg-white p-20">
                                                    <div class="taskboard-stage-actions float-right">
                                                        <div class="dropdown">
                                                            <a data-toggle="dropdown" href="#" aria-expanded="false"><i class="icon wb-more-vertical" aria-hidden="true"></i></a>
                                                            <div
                                                                class="dropdown-menu bullet"
                                                                role="menu"
                                                                x-placement="bottom-start"
                                                                style="position: absolute; transform: translate3d(0px, 19px, 0px); top: 0px; left: 0px; will-change: transform;"
                                                            >
                                                                <a class="taskboard-stage-rename dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-lock" aria-hidden="true"></i>Check-In</a>
                                                                <a class="taskboard-stage-delete dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-unlock" aria-hidden="true"></i>Check Out</a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <a href="#" class="avatar mb-5">
                                                        <img class="img-fluid" src="{{asset('assets/portraits/3.jpg')}}" alt="Adam_photo" />
                                                    </a>
                                                    <div class="friend-name">Adam P.</div>
                                                    <div class="friend-title mb-20 blue-grey-400">
                                                        107 - Family
                                                    </div>
                                                    <ul class="list-inline font-size-17 mb-5">
                                                        <li class="list-inline-item"><a href="#" class="icon fa-bed" style="color: #4ea102;"></a></li>

                                                        <li class="list-inline-item"><a href="#" class="icon wb-user blue-grey-400"></a></li>
                                                        <li class="list-inline-item"><a href="#" class="icon wb-tag blue-grey-400"></a></li>
                                                    </ul>
                                                    <span class="list-text">
                                                        <button type="button" class="btn btn-xs btn-danger" style="width: 80px;"><i class="icon fa-paw" aria-hidden="true" style="color: #fff;"></i><b>Vy. Dirty</b></button>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div style="/* padding: 10px; */ /* background-color: #fff; */" class="col-sm-1">
                                            <div style="width: 100%; background-color: #e4eaec; height: 5px;"></div>
                                            <div class="card card-shadow w-full">
                                                <div class="card-block text-center bg-white p-20">
                                                    <div class="taskboard-stage-actions float-right">
                                                        <div class="dropdown">
                                                            <a data-toggle="dropdown" href="#" aria-expanded="false"><i class="icon wb-more-vertical" aria-hidden="true"></i></a>
                                                            <div
                                                                class="dropdown-menu bullet"
                                                                role="menu"
                                                                x-placement="bottom-start"
                                                                style="position: absolute; transform: translate3d(0px, 19px, 0px); top: 0px; left: 0px; will-change: transform;"
                                                            >
                                                                <a class="taskboard-stage-rename dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-lock" aria-hidden="true"></i>Check-In</a>
                                                                <a class="taskboard-stage-delete dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-unlock" aria-hidden="true"></i>Check Out</a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <a href="#" class="avatar mb-5">
                                                        <img class="img-fluid" src="{{asset('assets/portraits/1.jpg')}}" alt="Adam_photo" />
                                                    </a>
                                                    <div class="friend-name">Adam P.</div>
                                                    <div class="friend-title mb-20 blue-grey-400">
                                                        108 - Deluxe
                                                    </div>
                                                    <ul class="list-inline font-size-17 mb-5">
                                                        <li class="list-inline-item"><a href="#" class="icon fa-bed" style="color: #eb6709;"></a></li>

                                                        <li class="list-inline-item"><a href="#" class="icon wb-user blue-grey-400"></a></li>
                                                        <li class="list-inline-item"><a href="#" class="icon wb-tag blue-grey-400"></a></li>
                                                    </ul>
                                                    <span class="list-text">
                                                        <button type="button" class="btn btn-xs btn-default" style="width: 80px;"><i class="icon wb-unlock" aria-hidden="true"></i><b>Vacant</b></button>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1" style="/* padding: 10px; */ /* background-color: #fff; */">
                                            <div style="width: 100%; background-color: #11c26d; height: 5px;"></div>
                                            <div class="card card-shadow w-full">
                                                <
                                                <div class="card-block text-center bg-white p-20">
                                                    <div class="taskboard-stage-actions float-right">
                                                        <div class="dropdown">
                                                            <a data-toggle="dropdown" href="#" aria-expanded="false"><i class="icon wb-more-vertical" aria-hidden="true"></i></a>
                                                            <div
                                                                class="dropdown-menu bullet"
                                                                role="menu"
                                                                x-placement="bottom-start"
                                                                style="position: absolute; transform: translate3d(0px, 19px, 0px); top: 0px; left: 0px; will-change: transform;"
                                                            >
                                                                <a class="taskboard-stage-rename dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-lock" aria-hidden="true"></i>Check-In</a>
                                                                <a class="taskboard-stage-delete dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-unlock" aria-hidden="true"></i>Check Out</a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <a href="#" class="avatar mb-5">
                                                        <img class="img-fluid" src="{{asset('assets/portraits/1.jpg')}}" alt="Adam_photo" />
                                                    </a>
                                                    <div class="friend-name">Adam P.</div>
                                                    <div class="friend-title mb-20 blue-grey-400">
                                                        109 - Single
                                                    </div>
                                                    <ul class="list-inline font-size-17 mb-5">
                                                        <li class="list-inline-item"><a href="#" class="icon fa-bed" style="color: #f17cff;"></a></li>

                                                        <li class="list-inline-item"><a href="#" class="icon wb-user blue-grey-400"></a></li>
                                                        <li class="list-inline-item"><a href="#" class="icon wb-tag blue-grey-400"></a></li>
                                                    </ul>
                                                    <span class="list-text">
                                                        <button type="button" class="btn btn-xs btn-success" style="width: 80px;"><i class="icon fa-paint-brush" aria-hidden="true" style="color: #fff;"></i><b>Cleaned</b></button>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1" style="/* padding: 10px; */ /* background-color: #fff; */">
                                            <div style="width: 100%; background-color: #ff4c52; height: 5px;"></div>
                                            <div class="card card-shadow w-full">
                                                <div class="card-block text-center bg-white p-20">
                                                    <div class="taskboard-stage-actions float-right">
                                                        <div class="dropdown">
                                                            <a data-toggle="dropdown" href="#" aria-expanded="false"><i class="icon wb-more-vertical" aria-hidden="true"></i></a>
                                                            <div
                                                                class="dropdown-menu bullet"
                                                                role="menu"
                                                                x-placement="bottom-start"
                                                                style="position: absolute; transform: translate3d(0px, 19px, 0px); top: 0px; left: 0px; will-change: transform;"
                                                            >
                                                                <a class="taskboard-stage-rename dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-lock" aria-hidden="true"></i>Check-In</a>
                                                                <a class="taskboard-stage-delete dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-unlock" aria-hidden="true"></i>Check Out</a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <a href="#" class="avatar mb-5">
                                                        <img class="img-fluid" src="{{asset('assets/portraits/2.jpg')}}" alt="Adam_photo" />
                                                    </a>
                                                    <div class="friend-name">Adam P.</div>
                                                    <div class="friend-title mb-20 blue-grey-400">
                                                        110 - Family
                                                    </div>
                                                    <ul class="list-inline font-size-17 mb-5">
                                                        <li class="list-inline-item"><a href="#" class="icon fa-bed" style="color: #4ea102;"></a></li>

                                                        <li class="list-inline-item"><a href="#" class="icon wb-user blue-grey-400"></a></li>
                                                        <li class="list-inline-item"><a href="#" class="icon wb-tag blue-grey-400"></a></li>
                                                    </ul>
                                                    <span class="list-text">
                                                        <button type="button" class="btn btn-xs btn-danger" style="width: 80px;"><i class="icon fa-paw" aria-hidden="true" style="color: #fff;"></i><b>Vy. Dirty</b></button>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1" style="/* padding: 10px; */ /* background-color: #fff; */">
                                            <div style="width: 100%; background-color: #eb6709; height: 5px;"></div>
                                            <div class="card card-shadow w-full">
                                                <div class="card-block text-center bg-white p-20">
                                                    <div class="taskboard-stage-actions float-right">
                                                        <div class="dropdown">
                                                            <a data-toggle="dropdown" href="#" aria-expanded="false"><i class="icon wb-more-vertical" aria-hidden="true"></i></a>
                                                            <div
                                                                class="dropdown-menu bullet"
                                                                role="menu"
                                                                x-placement="bottom-start"
                                                                style="position: absolute; transform: translate3d(0px, 19px, 0px); top: 0px; left: 0px; will-change: transform;"
                                                            >
                                                                <a class="taskboard-stage-rename dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-lock" aria-hidden="true"></i>Check-In</a>
                                                                <a class="taskboard-stage-delete dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-unlock" aria-hidden="true"></i>Check Out</a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <a href="#" class="avatar mb-5">
                                                        <img class="img-fluid" src="{{asset('assets/portraits/2.jpg')}}" alt="Adam_photo" />
                                                    </a>
                                                    <div class="friend-name">Adam P.</div>
                                                    <div class="friend-title mb-20 blue-grey-400">
                                                        111 - Double
                                                    </div>
                                                    <ul class="list-inline font-size-17 mb-5">
                                                        <li class="list-inline-item"><a href="#" class="icon fa-bed" style="color: #eb6709;"></a></li>

                                                        <li class="list-inline-item"><a href="#" class="icon wb-user blue-grey-400"></a></li>
                                                        <li class="list-inline-item"><a href="#" class="icon wb-tag blue-grey-400"></a></li>
                                                    </ul>
                                                    <span class="list-text" style="/* padding-left: 0px; */">
                                                        <button type="button" class="btn btn-xs btn-warning" style="padding-left: -10px; width: 80px;">
                                                            <i class="icon wb-wrench" aria-hidden="true" style="color: #fff;"></i><b>Out Ord.</b>
                                                        </button>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1" style="/* padding: 10px; */ /* background-color: #fff; */">
                                            <div style="width: 100%; background-color: #e4eaec; height: 5px;"></div>
                                            <div class="card card-shadow w-full">
                                                <div class="card-block text-center bg-white p-20">
                                                    <div class="taskboard-stage-actions float-right">
                                                        <div class="dropdown">
                                                            <a data-toggle="dropdown" href="#" aria-expanded="false"><i class="icon wb-more-vertical" aria-hidden="true"></i></a>
                                                            <div
                                                                class="dropdown-menu bullet"
                                                                role="menu"
                                                                x-placement="bottom-start"
                                                                style="position: absolute; transform: translate3d(0px, 19px, 0px); top: 0px; left: 0px; will-change: transform;"
                                                            >
                                                                <a class="taskboard-stage-rename dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-lock" aria-hidden="true"></i>Check-In</a>
                                                                <a class="taskboard-stage-delete dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-unlock" aria-hidden="true"></i>Check Out</a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <a href="#" class="avatar mb-5">
                                                        <img class="img-fluid" src="{{asset('assets/portraits/3.jpg')}}" alt="Adam_photo" />
                                                    </a>
                                                    <div class="friend-name">Adam P.</div>
                                                    <div class="friend-title mb-20 blue-grey-400">
                                                        112 - Single
                                                    </div>
                                                    <ul class="list-inline font-size-17 mb-5">
                                                        <li class="list-inline-item"><a href="#" class="icon fa-bed" style="color: #f17cff;"></a></li>

                                                        <li class="list-inline-item"><a href="#" class="icon wb-user blue-grey-400"></a></li>
                                                        <li class="list-inline-item"><a href="#" class="icon wb-tag blue-grey-400"></a></li>
                                                    </ul>
                                                    <span class="list-text">
                                                        <button type="button" class="btn btn-xs btn-default" style="width: 80px;"><i class="icon wb-unlock" aria-hidden="true"></i><b>Vacant</b></button>
                                                    </span>
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
            <!--Checkin Room View Content Tab ends Here -->
            <!--Floor View Content Tab Starts Here -->
            <div class="tab-pane animation-fade" id="roomview" role="tabpanel">
                <div>
                    <div style="width: 100%;">
                        <div class="page-content-actions" style="padding-bottom: 0px;">
                            <div style="width: 20%; padding-right: 10px; float: left; padding-top: 20px;">
                                <div class="btn-group bootstrap-select show-tick">
                                    <button type="button" class="btn dropdown-toggle bs-placeholder btn-select" data-toggle="dropdown" role="button" title="Nothing selected" aria-expanded="false">
                                        <span class="filter-option pull-left">Nothing selected</span>&nbsp;<span class="bs-caret"><span class="caret"></span></span>
                                    </button>
                                </div>
                            </div>
                            <div class="example datepair-wrap" data-plugin="datepair" style="float: left;">
                                <div class="input-daterange-wrap">
                                    <div class="input-daterange">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="icon wb-calendar" aria-hidden="true"></i>
                                            </span>
                                            <input type="text" class="form-control datepair-date datepair-start" data-plugin="datepicker" />
                                        </div>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="icon wb-time" aria-hidden="true"></i>
                                            </span>
                                            <input type="text" class="form-control datepair-time datepair-start ui-timepicker-input" data-plugin="timepicker" autocomplete="off" />
                                        </div>
                                    </div>
                                </div>
                                <div class="input-daterange-to">to</div>
                                <div class="input-daterange-wrap">
                                    <div class="input-daterange">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="icon wb-calendar" aria-hidden="true"></i>
                                            </span>
                                            <input type="text" class="form-control datepair-date datepair-end" name="end" data-plugin="datepicker" />
                                        </div>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="icon wb-time" aria-hidden="true"></i>
                                            </span>
                                            <input type="text" class="form-control datepair-time datepair-end ui-timepicker-input" data-plugin="timepicker" autocomplete="off" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div style="float: left;">
                                <div class="panel-body" style="background-color: #f1f4f5; padding: 0px;"></div>
                            </div>
                        </div>
                    </div>
                    <div style="padding-left: 30px; padding-right: 30px;">
                        <div class="nav-tabs-horizontal" data-plugin="tabs">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" data-toggle="tab" href="#exampleTabsIconOne" aria-controls="exampleTabsIconOne" role="tab" aria-selected="false"><i class="m-0" aria-hidden="true">1st</i></a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" data-toggle="tab" href="#exampleTabsIconTwo" aria-controls="exampleTabsIconTwo" role="tab" aria-selected="false"><i class="icon m-0" aria-hidden="true">2nd</i></a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" data-toggle="tab" href="#exampleTabsIconThree" aria-controls="exampleTabsIconThree" role="tab" aria-selected="false"><i class="icon m-0" aria-hidden="true">3rd</i></a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" data-toggle="tab" href="#exampleTabsIconFour" aria-controls="exampleTabsIconFour" role="tab" aria-selected="true"><i class="icon m-0" aria-hidden="true">4th</i></a>
                                </li>
                            </ul>
                            <div class="tab-content pt-15" style="height: 500px;">
                                <div class="tab-pane" id="exampleTabsIconOne" role="tabpanel">
                                    <div class="row">
                                        <div class="col-sm-1" style="/* padding: 10px; */ /* background-color: #fff; */">
                                            <div style="width: 100%; background-color: #11c26d; height: 5px;"></div>
                                            <div class="card card-shadow w-full">
                                                <div class="card-block text-center bg-white p-20">
                                                    <div class="taskboard-stage-actions float-right">
                                                        <div class="dropdown">
                                                            <a data-toggle="dropdown" href="#" aria-expanded="false"><i class="icon wb-more-vertical" aria-hidden="true"></i></a>
                                                            <div
                                                                class="dropdown-menu bullet"
                                                                role="menu"
                                                                x-placement="bottom-start"
                                                                style="position: absolute; transform: translate3d(0px, 19px, 0px); top: 0px; left: 0px; will-change: transform;"
                                                            >
                                                                <a class="taskboard-stage-rename dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-lock" aria-hidden="true"></i>Check-In</a>
                                                                <a class="taskboard-stage-delete dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-unlock" aria-hidden="true"></i>Check Out</a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <a href="#" class="avatar mb-5">
                                                        <img class="img-fluid" src="{{asset('assets/portraits/1.jpg')}}" alt="Adam_photo" />
                                                    </a>
                                                    <div class="friend-name">Adam P.</div>
                                                    <div class="friend-title mb-20 blue-grey-400">
                                                        101 - Deluxe
                                                    </div>
                                                    <ul class="list-inline font-size-17 mb-5">
                                                        <li class="list-inline-item"><a href="#" class="icon fa-bed" style="color: #f17cff;"></a></li>

                                                        <li class="list-inline-item"><a href="#" class="icon wb-user blue-grey-400"></a></li>
                                                        <li class="list-inline-item"><a href="#" class="icon wb-tag blue-grey-400"></a></li>
                                                    </ul>
                                                    <span class="list-text">
                                                        <button type="button" class="btn btn-xs btn-success" style="width: 80px;"><i class="icon fa-paint-brush" aria-hidden="true" style="color: #fff;"></i><b>Cleaned</b></button>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1" style="/* padding: 10px; */ /* background-color: #fff; */">
                                            <div style="width: 100%; background-color: #eb6709; height: 5px;"></div>
                                            <div class="card card-shadow w-full">
                                                <div class="card-block text-center bg-white p-20">
                                                    <div class="taskboard-stage-actions float-right">
                                                        <div class="dropdown">
                                                            <a data-toggle="dropdown" href="#" aria-expanded="false"><i class="icon wb-more-vertical" aria-hidden="true"></i></a>
                                                            <div
                                                                class="dropdown-menu bullet"
                                                                role="menu"
                                                                x-placement="bottom-start"
                                                                style="position: absolute; transform: translate3d(0px, 19px, 0px); top: 0px; left: 0px; will-change: transform;"
                                                            >
                                                                <a class="taskboard-stage-rename dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-lock" aria-hidden="true"></i>Check-In</a>
                                                                <a class="taskboard-stage-delete dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-unlock" aria-hidden="true"></i>Check Out</a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <a href="#" class="avatar mb-5">
                                                        <img class="img-fluid" src="{{asset('assets/portraits/2.jpg')}}" alt="Adam_photo" />
                                                    </a>
                                                    <div class="friend-name">Adam P.</div>
                                                    <div class="friend-title mb-20 blue-grey-400">
                                                        102 - Double
                                                    </div>
                                                    <ul class="list-inline font-size-17 mb-5">
                                                        <li class="list-inline-item"><a href="#" class="icon fa-bed" style="color: #eb6709;"></a></li>

                                                        <li class="list-inline-item"><a href="#" class="icon wb-user blue-grey-400"></a></li>
                                                        <li class="list-inline-item"><a href="#" class="icon wb-tag blue-grey-400"></a></li>
                                                    </ul>
                                                    <span class="list-text" style="/* padding-left: 0px; */">
                                                        <button type="button" class="btn btn-xs btn-warning" style="padding-left: -10px; width: 80px;">
                                                            <i class="icon wb-wrench" aria-hidden="true" style="color: #fff;"></i><b>Out Ord.</b>
                                                        </button>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1" style="/* padding: 10px; */ /* background-color: #fff; */">
                                            <div style="width: 100%; background-color: #ff4c52; height: 5px;"></div>
                                            <div class="card card-shadow w-full">
                                                <div class="card-block text-center bg-white p-20">
                                                    <div class="taskboard-stage-actions float-right">
                                                        <div class="dropdown">
                                                            <a data-toggle="dropdown" href="#" aria-expanded="false"><i class="icon wb-more-vertical" aria-hidden="true"></i></a>
                                                            <div
                                                                class="dropdown-menu bullet"
                                                                role="menu"
                                                                x-placement="bottom-start"
                                                                style="position: absolute; transform: translate3d(0px, 19px, 0px); top: 0px; left: 0px; will-change: transform;"
                                                            >
                                                                <a class="taskboard-stage-rename dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-lock" aria-hidden="true"></i>Check-In</a>
                                                                <a class="taskboard-stage-delete dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-unlock" aria-hidden="true"></i>Check Out</a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <a href="#" class="avatar mb-5">
                                                        <img class="img-fluid" src="{{asset('assets/portraits/3.jpg')}}" alt="Adam_photo" />
                                                    </a>
                                                    <div class="friend-name">Adam P.</div>
                                                    <div class="friend-title mb-20 blue-grey-400">
                                                        103 - Family
                                                    </div>
                                                    <ul class="list-inline font-size-17 mb-5">
                                                        <li class="list-inline-item"><a href="#" class="icon fa-bed" style="color: #4ea102;"></a></li>

                                                        <li class="list-inline-item"><a href="#" class="icon wb-user blue-grey-400"></a></li>
                                                        <li class="list-inline-item"><a href="#" class="icon wb-tag blue-grey-400"></a></li>
                                                    </ul>
                                                    <span class="list-text">
                                                        <button type="button" class="btn btn-xs btn-danger" style="width: 80px;"><i class="icon fa-paw" aria-hidden="true" style="color: #fff;"></i><b>Vy. Dirty</b></button>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1" style="/* padding: 10px; */ /* background-color: #fff; */">
                                            <div style="width: 100%; background-color: #e4eaec; height: 5px;"></div>
                                            <div class="card card-shadow w-full">
                                                <div class="card-block text-center bg-white p-20">
                                                    <div class="taskboard-stage-actions float-right">
                                                        <div class="dropdown">
                                                            <a data-toggle="dropdown" href="#" aria-expanded="false"><i class="icon wb-more-vertical" aria-hidden="true"></i></a>
                                                            <div
                                                                class="dropdown-menu bullet"
                                                                role="menu"
                                                                x-placement="bottom-start"
                                                                style="position: absolute; transform: translate3d(0px, 19px, 0px); top: 0px; left: 0px; will-change: transform;"
                                                            >
                                                                <a class="taskboard-stage-rename dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-lock" aria-hidden="true"></i>Check-In</a>
                                                                <a class="taskboard-stage-delete dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-unlock" aria-hidden="true"></i>Check Out</a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <a href="#" class="avatar mb-5">
                                                        <img class="img-fluid" src="{{asset('assets/portraits/2.jpg')}}" alt="Adam_photo" />
                                                    </a>
                                                    <div class="friend-name">Adam P.</div>
                                                    <div class="friend-title mb-20 blue-grey-400">
                                                        104 - Single
                                                    </div>
                                                    <ul class="list-inline font-size-17 mb-5">
                                                        <li class="list-inline-item"><a href="#" class="icon fa-bed" style="color: #f17cff;"></a></li>

                                                        <li class="list-inline-item"><a href="#" class="icon wb-user blue-grey-400"></a></li>
                                                        <li class="list-inline-item"><a href="#" class="icon wb-tag blue-grey-400"></a></li>
                                                    </ul>
                                                    <span class="list-text">
                                                        <button type="button" class="btn btn-xs btn-default" style="width: 80px;"><i class="icon wb-unlock" aria-hidden="true"></i><b>Vacant</b></button>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1" style="/* padding: 10px; */ /* background-color: #fff; */">
                                            <div style="width: 100%; background-color: #11c26d; height: 5px;"></div>
                                            <div class="card card-shadow w-full">
                                                <div class="card-block text-center bg-white p-20">
                                                    <div class="taskboard-stage-actions float-right">
                                                        <div class="dropdown">
                                                            <a data-toggle="dropdown" href="#" aria-expanded="false"><i class="icon wb-more-vertical" aria-hidden="true"></i></a>
                                                            <div
                                                                class="dropdown-menu bullet"
                                                                role="menu"
                                                                x-placement="bottom-start"
                                                                style="position: absolute; transform: translate3d(0px, 19px, 0px); top: 0px; left: 0px; will-change: transform;"
                                                            >
                                                                <a class="taskboard-stage-rename dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-lock" aria-hidden="true"></i>Check-In</a>
                                                                <a class="taskboard-stage-delete dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-unlock" aria-hidden="true"></i>Check Out</a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <a href="#" class="avatar mb-5">
                                                        <img class="img-fluid" src="{{asset('assets/portraits/1.jpg')}}" alt="Adam_photo" />
                                                    </a>
                                                    <div class="friend-name">Adam P.</div>
                                                    <div class="friend-title mb-20 blue-grey-400">
                                                        105 - Single
                                                    </div>
                                                    <ul class="list-inline font-size-17 mb-5">
                                                        <li class="list-inline-item"><a href="#" class="icon fa-bed" style="color: #f17cff;"></a></li>

                                                        <li class="list-inline-item"><a href="#" class="icon wb-user blue-grey-400"></a></li>
                                                        <li class="list-inline-item"><a href="#" class="icon wb-tag blue-grey-400"></a></li>
                                                    </ul>
                                                    <span class="list-text">
                                                        <button type="button" class="btn btn-xs btn-success" style="width: 80px;"><i class="icon fa-paint-brush" aria-hidden="true" style="color: #fff;"></i><b>Cleaned</b></button>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-1" style="/* padding: 10px; */ /* background-color: #fff; */">
                                            <div style="width: 100%; background-color: #eb6709; height: 5px;"></div>
                                            <div class="card card-shadow w-full">
                                                <div class="card-block text-center bg-white p-20">
                                                    <div class="taskboard-stage-actions float-right">
                                                        <div class="dropdown">
                                                            <a data-toggle="dropdown" href="#" aria-expanded="false"><i class="icon wb-more-vertical" aria-hidden="true"></i></a>
                                                            <div
                                                                class="dropdown-menu bullet"
                                                                role="menu"
                                                                x-placement="bottom-start"
                                                                style="position: absolute; transform: translate3d(0px, 19px, 0px); top: 0px; left: 0px; will-change: transform;"
                                                            >
                                                                <a class="taskboard-stage-rename dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-lock" aria-hidden="true"></i>Check-In</a>
                                                                <a class="taskboard-stage-delete dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-unlock" aria-hidden="true"></i>Check Out</a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <a href="#" class="avatar mb-5">
                                                        <img class="img-fluid" src="{{asset('assets/portraits/2.jpg')}}" alt="Adam_photo" />
                                                    </a>
                                                    <div class="friend-name">Adam P.</div>
                                                    <div class="friend-title mb-20 blue-grey-400">
                                                        106 - Double
                                                    </div>
                                                    <ul class="list-inline font-size-17 mb-5">
                                                        <li class="list-inline-item"><a href="#" class="icon fa-bed" style="color: #eb6709;"></a></li>

                                                        <li class="list-inline-item"><a href="#" class="icon wb-user blue-grey-400"></a></li>
                                                        <li class="list-inline-item"><a href="#" class="icon wb-tag blue-grey-400"></a></li>
                                                    </ul>
                                                    <span class="list-text" style="/* padding-left: 0px; */">
                                                        <button type="button" class="btn btn-xs btn-warning" style="padding-left: -10px; width: 80px;">
                                                            <i class="icon wb-wrench" aria-hidden="true" style="color: #fff;"></i><b>Out Ord.</b>
                                                        </button>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1" style="/* padding: 10px; */ /* background-color: #fff; */">
                                            <div style="width: 100%; background-color: #ff4c52; height: 5px;"></div>
                                            <div class="card card-shadow w-full">
                                                <div class="card-block text-center bg-white p-20">
                                                    <div class="taskboard-stage-actions float-right">
                                                        <div class="dropdown">
                                                            <a data-toggle="dropdown" href="#" aria-expanded="false"><i class="icon wb-more-vertical" aria-hidden="true"></i></a>
                                                            <div
                                                                class="dropdown-menu bullet"
                                                                role="menu"
                                                                x-placement="bottom-start"
                                                                style="position: absolute; transform: translate3d(0px, 19px, 0px); top: 0px; left: 0px; will-change: transform;"
                                                            >
                                                                <a class="taskboard-stage-rename dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-lock" aria-hidden="true"></i>Check-In</a>
                                                                <a class="taskboard-stage-delete dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-unlock" aria-hidden="true"></i>Check Out</a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <a href="#" class="avatar mb-5">
                                                        <img class="img-fluid" src="{{asset('assets/portraits/3.jpg')}}" alt="Adam_photo" />
                                                    </a>
                                                    <div class="friend-name">Adam P.</div>
                                                    <div class="friend-title mb-20 blue-grey-400">
                                                        107 - Family
                                                    </div>
                                                    <ul class="list-inline font-size-17 mb-5">
                                                        <li class="list-inline-item"><a href="#" class="icon fa-bed" style="color: #4ea102;"></a></li>

                                                        <li class="list-inline-item"><a href="#" class="icon wb-user blue-grey-400"></a></li>
                                                        <li class="list-inline-item"><a href="#" class="icon wb-tag blue-grey-400"></a></li>
                                                    </ul>
                                                    <span class="list-text">
                                                        <button type="button" class="btn btn-xs btn-danger" style="width: 80px;"><i class="icon fa-paw" aria-hidden="true" style="color: #fff;"></i><b>Vy. Dirty</b></button>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div style="/* padding: 10px; */ /* background-color: #fff; */" class="col-sm-1">
                                            <div style="width: 100%; background-color: #e4eaec; height: 5px;"></div>
                                            <div class="card card-shadow w-full">
                                                <div class="card-block text-center bg-white p-20">
                                                    <div class="taskboard-stage-actions float-right">
                                                        <div class="dropdown">
                                                            <a data-toggle="dropdown" href="#" aria-expanded="false"><i class="icon wb-more-vertical" aria-hidden="true"></i></a>
                                                            <div
                                                                class="dropdown-menu bullet"
                                                                role="menu"
                                                                x-placement="bottom-start"
                                                                style="position: absolute; transform: translate3d(0px, 19px, 0px); top: 0px; left: 0px; will-change: transform;"
                                                            >
                                                                <a class="taskboard-stage-rename dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-lock" aria-hidden="true"></i>Check-In</a>
                                                                <a class="taskboard-stage-delete dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-unlock" aria-hidden="true"></i>Check Out</a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <a href="#" class="avatar mb-5">
                                                        <img class="img-fluid" src="{{asset('assets/portraits/4.jpg')}}" alt="Adam_photo" />
                                                    </a>
                                                    <div class="friend-name">Adam P.</div>
                                                    <div class="friend-title mb-20 blue-grey-400">
                                                        108 - Deluxe
                                                    </div>
                                                    <ul class="list-inline font-size-17 mb-5">
                                                        <li class="list-inline-item"><a href="#" class="icon fa-bed" style="color: #eb6709;"></a></li>

                                                        <li class="list-inline-item"><a href="#" class="icon wb-user blue-grey-400"></a></li>
                                                        <li class="list-inline-item"><a href="#" class="icon wb-tag blue-grey-400"></a></li>
                                                    </ul>
                                                    <span class="list-text">
                                                        <button type="button" class="btn btn-xs btn-default" style="width: 80px;"><i class="icon wb-unlock" aria-hidden="true"></i><b>Vacant</b></button>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1" style="/* padding: 10px; */ /* background-color: #fff; */">
                                            <div style="width: 100%; background-color: #11c26d; height: 5px;"></div>
                                            <div class="card card-shadow w-full">
                                                <div class="card-block text-center bg-white p-20">
                                                    <div class="taskboard-stage-actions float-right">
                                                        <div class="dropdown">
                                                            <a data-toggle="dropdown" href="#" aria-expanded="false"><i class="icon wb-more-vertical" aria-hidden="true"></i></a>
                                                            <div
                                                                class="dropdown-menu bullet"
                                                                role="menu"
                                                                x-placement="bottom-start"
                                                                style="position: absolute; transform: translate3d(0px, 19px, 0px); top: 0px; left: 0px; will-change: transform;"
                                                            >
                                                                <a class="taskboard-stage-rename dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-lock" aria-hidden="true"></i>Check-In</a>
                                                                <a class="taskboard-stage-delete dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-unlock" aria-hidden="true"></i>Check Out</a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <a href="#" class="avatar mb-5">
                                                        <img class="img-fluid" src="{{asset('assets/portraits/1.jpg')}}" alt="Adam_photo" />
                                                    </a>
                                                    <div class="friend-name">Adam P.</div>
                                                    <div class="friend-title mb-20 blue-grey-400">
                                                        109 - Single
                                                    </div>
                                                    <ul class="list-inline font-size-17 mb-5">
                                                        <li class="list-inline-item"><a href="#" class="icon fa-bed" style="color: #f17cff;"></a></li>

                                                        <li class="list-inline-item"><a href="#" class="icon wb-user blue-grey-400"></a></li>
                                                        <li class="list-inline-item"><a href="#" class="icon wb-tag blue-grey-400"></a></li>
                                                    </ul>
                                                    <span class="list-text">
                                                        <button type="button" class="btn btn-xs btn-success" style="width: 80px;"><i class="icon fa-paint-brush" aria-hidden="true" style="color: #fff;"></i><b>Cleaned</b></button>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1" style="/* padding: 10px; */ /* background-color: #fff; */">
                                            <div style="width: 100%; background-color: #ff4c52; height: 5px;"></div>
                                            <div class="card card-shadow w-full">
                                                <div class="card-block text-center bg-white p-20">
                                                    <div class="taskboard-stage-actions float-right">
                                                        <div class="dropdown">
                                                            <a data-toggle="dropdown" href="#" aria-expanded="false"><i class="icon wb-more-vertical" aria-hidden="true"></i></a>
                                                            <div
                                                                class="dropdown-menu bullet"
                                                                role="menu"
                                                                x-placement="bottom-start"
                                                                style="position: absolute; transform: translate3d(0px, 19px, 0px); top: 0px; left: 0px; will-change: transform;"
                                                            >
                                                                <a class="taskboard-stage-rename dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-lock" aria-hidden="true"></i>Check-In</a>
                                                                <a class="taskboard-stage-delete dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-unlock" aria-hidden="true"></i>Check Out</a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <a href="#" class="avatar mb-5">
                                                        <img class="img-fluid" src="{{asset('assets/portraits/3.jpg')}}" alt="Adam_photo" />
                                                    </a>
                                                    <div class="friend-name">Adam P.</div>
                                                    <div class="friend-title mb-20 blue-grey-400">
                                                        110 - Family
                                                    </div>
                                                    <ul class="list-inline font-size-17 mb-5">
                                                        <li class="list-inline-item"><a href="#" class="icon fa-bed" style="color: #4ea102;"></a></li>

                                                        <li class="list-inline-item"><a href="#" class="icon wb-user blue-grey-400"></a></li>
                                                        <li class="list-inline-item"><a href="#" class="icon wb-tag blue-grey-400"></a></li>
                                                    </ul>
                                                    <span class="list-text">
                                                        <button type="button" class="btn btn-xs btn-danger" style="width: 80px;"><i class="icon fa-paw" aria-hidden="true" style="color: #fff;"></i><b>Vy. Dirty</b></button>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1" style="/* padding: 10px; */ /* background-color: #fff; */">
                                            <div style="width: 100%; background-color: #eb6709; height: 5px;"></div>
                                            <div class="card card-shadow w-full">
                                                <div class="card-block text-center bg-white p-20">
                                                    <div class="taskboard-stage-actions float-right">
                                                        <div class="dropdown">
                                                            <a data-toggle="dropdown" href="#" aria-expanded="false"><i class="icon wb-more-vertical" aria-hidden="true"></i></a>
                                                            <div
                                                                class="dropdown-menu bullet"
                                                                role="menu"
                                                                x-placement="bottom-start"
                                                                style="position: absolute; transform: translate3d(0px, 19px, 0px); top: 0px; left: 0px; will-change: transform;"
                                                            >
                                                                <a class="taskboard-stage-rename dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-lock" aria-hidden="true"></i>Check-In</a>
                                                                <a class="taskboard-stage-delete dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-unlock" aria-hidden="true"></i>Check Out</a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <a href="#" class="avatar mb-5">
                                                        <img class="img-fluid" src="{{asset('assets/portraits/2.jpg')}}" alt="Adam_photo" />
                                                    </a>
                                                    <div class="friend-name">Adam P.</div>
                                                    <div class="friend-title mb-20 blue-grey-400">
                                                        111 - Double
                                                    </div>
                                                    <ul class="list-inline font-size-17 mb-5">
                                                        <li class="list-inline-item"><a href="#" class="icon fa-bed" style="color: #eb6709;"></a></li>

                                                        <li class="list-inline-item"><a href="#" class="icon wb-user blue-grey-400"></a></li>
                                                        <li class="list-inline-item"><a href="#" class="icon wb-tag blue-grey-400"></a></li>
                                                    </ul>
                                                    <span class="list-text" style="/* padding-left: 0px; */">
                                                        <button type="button" class="btn btn-xs btn-warning" style="padding-left: -10px; width: 80px;">
                                                            <i class="icon wb-wrench" aria-hidden="true" style="color: #fff;"></i><b>Out Ord.</b>
                                                        </button>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1" style="/* padding: 10px; */ /* background-color: #fff; */">
                                            <div style="width: 100%; background-color: #e4eaec; height: 5px;"></div>
                                            <div class="card card-shadow w-full">
                                                <div class="card-block text-center bg-white p-20">
                                                    <div class="taskboard-stage-actions float-right">
                                                        <div class="dropdown">
                                                            <a data-toggle="dropdown" href="#" aria-expanded="false"><i class="icon wb-more-vertical" aria-hidden="true"></i></a>
                                                            <div
                                                                class="dropdown-menu bullet"
                                                                role="menu"
                                                                x-placement="bottom-start"
                                                                style="position: absolute; transform: translate3d(0px, 19px, 0px); top: 0px; left: 0px; will-change: transform;"
                                                            >
                                                                <a class="taskboard-stage-rename dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-lock" aria-hidden="true"></i>Check-In</a>
                                                                <a class="taskboard-stage-delete dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-unlock" aria-hidden="true"></i>Check Out</a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <a href="#" class="avatar mb-5">
                                                        <img class="img-fluid" src="{{asset('assets/portraits/4.jpg')}}" alt="Adam_photo" />
                                                    </a>
                                                    <div class="friend-name">Adam P.</div>
                                                    <div class="friend-title mb-20 blue-grey-400">
                                                        112 - Single
                                                    </div>
                                                    <ul class="list-inline font-size-17 mb-5">
                                                        <li class="list-inline-item"><a href="#" class="icon fa-bed" style="color: #f17cff;"></a></li>

                                                        <li class="list-inline-item"><a href="#" class="icon wb-user blue-grey-400"></a></li>
                                                        <li class="list-inline-item"><a href="#" class="icon wb-tag blue-grey-400"></a></li>
                                                    </ul>
                                                    <span class="list-text">
                                                        <button type="button" class="btn btn-xs btn-default" style="width: 80px;"><i class="icon wb-unlock" aria-hidden="true"></i><b>Vacant</b></button>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="exampleTabsIconTwo" role="tabpanel">
                                    <div class="row">
                                        <div class="col-sm-1" style="/* padding: 10px; */ /* background-color: #fff; */">
                                            <div style="width: 100%; background-color: #11c26d; height: 5px;"></div>
                                            <div class="card card-shadow w-full">
                                                <div class="card-block text-center bg-white p-20">
                                                    <div class="taskboard-stage-actions float-right">
                                                        <div class="dropdown">
                                                            <a data-toggle="dropdown" href="#" aria-expanded="false"><i class="icon wb-more-vertical" aria-hidden="true"></i></a>
                                                            <div
                                                                class="dropdown-menu bullet"
                                                                role="menu"
                                                                x-placement="bottom-start"
                                                                style="position: absolute; transform: translate3d(0px, 19px, 0px); top: 0px; left: 0px; will-change: transform;"
                                                            >
                                                                <a class="taskboard-stage-rename dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-lock" aria-hidden="true"></i>Check-In</a>
                                                                <a class="taskboard-stage-delete dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-unlock" aria-hidden="true"></i>Check Out</a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <a href="#" class="avatar mb-5">
                                                        <img class="img-fluid" src="{{asset('assets/portraits/1.jpg')}}" alt="Adam_photo" />
                                                    </a>
                                                    <div class="friend-name">Adam P.</div>
                                                    <div class="friend-title mb-20 blue-grey-400">
                                                        201 - Deluxe
                                                    </div>
                                                    <ul class="list-inline font-size-17 mb-5">
                                                        <li class="list-inline-item"><a href="#" class="icon fa-bed" style="color: #f17cff;"></a></li>

                                                        <li class="list-inline-item"><a href="#" class="icon wb-user blue-grey-400"></a></li>
                                                        <li class="list-inline-item"><a href="#" class="icon wb-tag blue-grey-400"></a></li>
                                                    </ul>
                                                    <span class="list-text">
                                                        <button type="button" class="btn btn-xs btn-success" style="width: 80px;"><i class="icon fa-paint-brush" aria-hidden="true" style="color: #fff;"></i><b>Cleaned</b></button>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1" style="/* padding: 10px; */ /* background-color: #fff; */">
                                            <div style="width: 100%; background-color: #eb6709; height: 5px;"></div>
                                            <div class="card card-shadow w-full">
                                                <div class="card-block text-center bg-white p-20">
                                                    <div class="taskboard-stage-actions float-right">
                                                        <div class="dropdown">
                                                            <a data-toggle="dropdown" href="#" aria-expanded="false"><i class="icon wb-more-vertical" aria-hidden="true"></i></a>
                                                            <div
                                                                class="dropdown-menu bullet"
                                                                role="menu"
                                                                x-placement="bottom-start"
                                                                style="position: absolute; transform: translate3d(0px, 19px, 0px); top: 0px; left: 0px; will-change: transform;"
                                                            >
                                                                <a class="taskboard-stage-rename dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-lock" aria-hidden="true"></i>Check-In</a>
                                                                <a class="taskboard-stage-delete dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-unlock" aria-hidden="true"></i>Check Out</a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <a href="#" class="avatar mb-5">
                                                        <img class="img-fluid" src="{{asset('assets/portraits/2.jpg')}}" alt="Adam_photo" />
                                                    </a>
                                                    <div class="friend-name">Adam P.</div>
                                                    <div class="friend-title mb-20 blue-grey-400">
                                                        202 - Double
                                                    </div>
                                                    <ul class="list-inline font-size-17 mb-5">
                                                        <li class="list-inline-item"><a href="#" class="icon fa-bed" style="color: #eb6709;"></a></li>

                                                        <li class="list-inline-item"><a href="#" class="icon wb-user blue-grey-400"></a></li>
                                                        <li class="list-inline-item"><a href="#" class="icon wb-tag blue-grey-400"></a></li>
                                                    </ul>
                                                    <span class="list-text" style="/* padding-left: 0px; */">
                                                        <button type="button" class="btn btn-xs btn-warning" style="padding-left: -10px; width: 80px;">
                                                            <i class="icon wb-wrench" aria-hidden="true" style="color: #fff;"></i><b>Out Ord.</b>
                                                        </button>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1" style="/* padding: 10px; */ /* background-color: #fff; */">
                                            <div style="width: 100%; background-color: #ff4c52; height: 5px;"></div>
                                            <div class="card card-shadow w-full">
                                                <div class="card-block text-center bg-white p-20">
                                                    <div class="taskboard-stage-actions float-right">
                                                        <div class="dropdown">
                                                            <a data-toggle="dropdown" href="#" aria-expanded="false"><i class="icon wb-more-vertical" aria-hidden="true"></i></a>
                                                            <div
                                                                class="dropdown-menu bullet"
                                                                role="menu"
                                                                x-placement="bottom-start"
                                                                style="position: absolute; transform: translate3d(0px, 19px, 0px); top: 0px; left: 0px; will-change: transform;"
                                                            >
                                                                <a class="taskboard-stage-rename dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-lock" aria-hidden="true"></i>Check-In</a>
                                                                <a class="taskboard-stage-delete dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-unlock" aria-hidden="true"></i>Check Out</a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <a href="#" class="avatar mb-5">
                                                        <img class="img-fluid" src="{{asset('assets/portraits/3.jpg')}}" alt="Adam_photo" />
                                                    </a>
                                                    <div class="friend-name">Adam P.</div>
                                                    <div class="friend-title mb-20 blue-grey-400">
                                                        203 - Family
                                                    </div>
                                                    <ul class="list-inline font-size-17 mb-5">
                                                        <li class="list-inline-item"><a href="#" class="icon fa-bed" style="color: #4ea102;"></a></li>

                                                        <li class="list-inline-item"><a href="#" class="icon wb-user blue-grey-400"></a></li>
                                                        <li class="list-inline-item"><a href="#" class="icon wb-tag blue-grey-400"></a></li>
                                                    </ul>
                                                    <span class="list-text">
                                                        <button type="button" class="btn btn-xs btn-danger" style="width: 80px;"><i class="icon fa-paw" aria-hidden="true" style="color: #fff;"></i><b>Vy. Dirty</b></button>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1" style="/* padding: 10px; */ /* background-color: #fff; */">
                                            <div style="width: 100%; background-color: #e4eaec; height: 5px;"></div>
                                            <div class="card card-shadow w-full">
                                                <div class="card-block text-center bg-white p-20">
                                                    <div class="taskboard-stage-actions float-right">
                                                        <div class="dropdown">
                                                            <a data-toggle="dropdown" href="#" aria-expanded="false"><i class="icon wb-more-vertical" aria-hidden="true"></i></a>
                                                            <div
                                                                class="dropdown-menu bullet"
                                                                role="menu"
                                                                x-placement="bottom-start"
                                                                style="position: absolute; transform: translate3d(0px, 19px, 0px); top: 0px; left: 0px; will-change: transform;"
                                                            >
                                                                <a class="taskboard-stage-rename dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-lock" aria-hidden="true"></i>Check-In</a>
                                                                <a class="taskboard-stage-delete dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-unlock" aria-hidden="true"></i>Check Out</a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <a href="#" class="avatar mb-5">
                                                        <img class="img-fluid" src="{{asset('assets/portraits/4.jpg')}}" alt="Adam_photo" />
                                                    </a>
                                                    <div class="friend-name">Adam P.</div>
                                                    <div class="friend-title mb-20 blue-grey-400">
                                                        204 - Single
                                                    </div>
                                                    <ul class="list-inline font-size-17 mb-5">
                                                        <li class="list-inline-item"><a href="#" class="icon fa-bed" style="color: #f17cff;"></a></li>

                                                        <li class="list-inline-item"><a href="#" class="icon wb-user blue-grey-400"></a></li>
                                                        <li class="list-inline-item"><a href="#" class="icon wb-tag blue-grey-400"></a></li>
                                                    </ul>
                                                    <span class="list-text">
                                                        <button type="button" class="btn btn-xs btn-default" style="width: 80px;"><i class="icon wb-unlock" aria-hidden="true"></i><b>Vacant</b></button>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1" style="/* padding: 10px; */ /* background-color: #fff; */">
                                            <div style="width: 100%; background-color: #11c26d; height: 5px;"></div>
                                            <div class="card card-shadow w-full">
                                                <div class="card-block text-center bg-white p-20">
                                                    <div class="taskboard-stage-actions float-right">
                                                        <div class="dropdown">
                                                            <a data-toggle="dropdown" href="#" aria-expanded="false"><i class="icon wb-more-vertical" aria-hidden="true"></i></a>
                                                            <div
                                                                class="dropdown-menu bullet"
                                                                role="menu"
                                                                x-placement="bottom-start"
                                                                style="position: absolute; transform: translate3d(0px, 19px, 0px); top: 0px; left: 0px; will-change: transform;"
                                                            >
                                                                <a class="taskboard-stage-rename dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-lock" aria-hidden="true"></i>Check-In</a>
                                                                <a class="taskboard-stage-delete dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-unlock" aria-hidden="true"></i>Check Out</a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <a href="#" class="avatar mb-5">
                                                        <img class="img-fluid" src="{{asset('assets/portraits/1.jpg')}}" alt="Adam_photo" />
                                                    </a>
                                                    <div class="friend-name">Adam P.</div>
                                                    <div class="friend-title mb-20 blue-grey-400">
                                                        205 - Single
                                                    </div>
                                                    <ul class="list-inline font-size-17 mb-5">
                                                        <li class="list-inline-item"><a href="#" class="icon fa-bed" style="color: #f17cff;"></a></li>

                                                        <li class="list-inline-item"><a href="#" class="icon wb-user blue-grey-400"></a></li>
                                                        <li class="list-inline-item"><a href="#" class="icon wb-tag blue-grey-400"></a></li>
                                                    </ul>
                                                    <span class="list-text">
                                                        <button type="button" class="btn btn-xs btn-success" style="width: 80px;"><i class="icon fa-paint-brush" aria-hidden="true" style="color: #fff;"></i><b>Cleaned</b></button>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-1" style="/* padding: 10px; */ /* background-color: #fff; */">
                                            <div style="width: 100%; background-color: #eb6709; height: 5px;"></div>
                                            <div class="card card-shadow w-full">
                                                <div class="card-block text-center bg-white p-20">
                                                    <div class="taskboard-stage-actions float-right">
                                                        <div class="dropdown">
                                                            <a data-toggle="dropdown" href="#" aria-expanded="false"><i class="icon wb-more-vertical" aria-hidden="true"></i></a>
                                                            <div
                                                                class="dropdown-menu bullet"
                                                                role="menu"
                                                                x-placement="bottom-start"
                                                                style="position: absolute; transform: translate3d(0px, 19px, 0px); top: 0px; left: 0px; will-change: transform;"
                                                            >
                                                                <a class="taskboard-stage-rename dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-lock" aria-hidden="true"></i>Check-In</a>
                                                                <a class="taskboard-stage-delete dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-unlock" aria-hidden="true"></i>Check Out</a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <a href="#" class="avatar mb-5">
                                                        <img class="img-fluid" src="{{asset('assets/portraits/2.jpg')}}" alt="Adam_photo" />
                                                    </a>
                                                    <div class="friend-name">Adam P.</div>
                                                    <div class="friend-title mb-20 blue-grey-400">
                                                        206 - Double
                                                    </div>
                                                    <ul class="list-inline font-size-17 mb-5">
                                                        <li class="list-inline-item"><a href="#" class="icon fa-bed" style="color: #eb6709;"></a></li>

                                                        <li class="list-inline-item"><a href="#" class="icon wb-user blue-grey-400"></a></li>
                                                        <li class="list-inline-item"><a href="#" class="icon wb-tag blue-grey-400"></a></li>
                                                    </ul>
                                                    <span class="list-text" style="/* padding-left: 0px; */">
                                                        <button type="button" class="btn btn-xs btn-warning" style="padding-left: -10px; width: 80px;">
                                                            <i class="icon wb-wrench" aria-hidden="true" style="color: #fff;"></i><b>Out Ord.</b>
                                                        </button>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1" style="/* padding: 10px; */ /* background-color: #fff; */">
                                            <div style="width: 100%; background-color: #ff4c52; height: 5px;"></div>
                                            <div class="card card-shadow w-full">
                                                <div class="card-block text-center bg-white p-20">
                                                    <div class="taskboard-stage-actions float-right">
                                                        <div class="dropdown">
                                                            <a data-toggle="dropdown" href="#" aria-expanded="false"><i class="icon wb-more-vertical" aria-hidden="true"></i></a>
                                                            <div
                                                                class="dropdown-menu bullet"
                                                                role="menu"
                                                                x-placement="bottom-start"
                                                                style="position: absolute; transform: translate3d(0px, 19px, 0px); top: 0px; left: 0px; will-change: transform;"
                                                            >
                                                                <a class="taskboard-stage-rename dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-lock" aria-hidden="true"></i>Check-In</a>
                                                                <a class="taskboard-stage-delete dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-unlock" aria-hidden="true"></i>Check Out</a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <a href="#" class="avatar mb-5">
                                                        <img class="img-fluid" src="{{asset('assets/portraits/3.jpg')}}" alt="Adam_photo" />
                                                    </a>
                                                    <div class="friend-name">Adam P.</div>
                                                    <div class="friend-title mb-20 blue-grey-400">
                                                        207 - Family
                                                    </div>
                                                    <ul class="list-inline font-size-17 mb-5">
                                                        <li class="list-inline-item"><a href="#" class="icon fa-bed" style="color: #4ea102;"></a></li>

                                                        <li class="list-inline-item"><a href="#" class="icon wb-user blue-grey-400"></a></li>
                                                        <li class="list-inline-item"><a href="#" class="icon wb-tag blue-grey-400"></a></li>
                                                    </ul>
                                                    <span class="list-text">
                                                        <button type="button" class="btn btn-xs btn-danger" style="width: 80px;"><i class="icon fa-paw" aria-hidden="true" style="color: #fff;"></i><b>Vy. Dirty</b></button>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div style="/* padding: 10px; */ /* background-color: #fff; */" class="col-sm-1">
                                            <div style="width: 100%; background-color: #e4eaec; height: 5px;"></div>
                                            <div class="card card-shadow w-full">
                                                <div class="card-block text-center bg-white p-20">
                                                    <div class="taskboard-stage-actions float-right">
                                                        <div class="dropdown">
                                                            <a data-toggle="dropdown" href="#" aria-expanded="false"><i class="icon wb-more-vertical" aria-hidden="true"></i></a>
                                                            <div
                                                                class="dropdown-menu bullet"
                                                                role="menu"
                                                                x-placement="bottom-start"
                                                                style="position: absolute; transform: translate3d(0px, 19px, 0px); top: 0px; left: 0px; will-change: transform;"
                                                            >
                                                                <a class="taskboard-stage-rename dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-lock" aria-hidden="true"></i>Check-In</a>
                                                                <a class="taskboard-stage-delete dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-unlock" aria-hidden="true"></i>Check Out</a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <a href="#" class="avatar mb-5">
                                                        <img class="img-fluid" src="{{asset('assets/portraits/4.jpg')}}" alt="Adam_photo" />
                                                    </a>
                                                    <div class="friend-name">Adam P.</div>
                                                    <div class="friend-title mb-20 blue-grey-400">
                                                        208 - Deluxe
                                                    </div>
                                                    <ul class="list-inline font-size-17 mb-5">
                                                        <li class="list-inline-item"><a href="#" class="icon fa-bed" style="color: #eb6709;"></a></li>

                                                        <li class="list-inline-item"><a href="#" class="icon wb-user blue-grey-400"></a></li>
                                                        <li class="list-inline-item"><a href="#" class="icon wb-tag blue-grey-400"></a></li>
                                                    </ul>
                                                    <span class="list-text">
                                                        <button type="button" class="btn btn-xs btn-default" style="width: 80px;"><i class="icon wb-unlock" aria-hidden="true"></i><b>Vacant</b></button>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1" style="/* padding: 10px; */ /* background-color: #fff; */">
                                            <div style="width: 100%; background-color: #11c26d; height: 5px;"></div>
                                            <div class="card card-shadow w-full">
                                                <div class="card-block text-center bg-white p-20">
                                                    <div class="taskboard-stage-actions float-right">
                                                        <div class="dropdown">
                                                            <a data-toggle="dropdown" href="#" aria-expanded="false"><i class="icon wb-more-vertical" aria-hidden="true"></i></a>
                                                            <div
                                                                class="dropdown-menu bullet"
                                                                role="menu"
                                                                x-placement="bottom-start"
                                                                style="position: absolute; transform: translate3d(0px, 19px, 0px); top: 0px; left: 0px; will-change: transform;"
                                                            >
                                                                <a class="taskboard-stage-rename dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-lock" aria-hidden="true"></i>Check-In</a>
                                                                <a class="taskboard-stage-delete dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-unlock" aria-hidden="true"></i>Check Out</a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <a href="#" class="avatar mb-5">
                                                        <img class="img-fluid" src="{{asset('assets/portraits/1.jpg')}}" alt="Adam_photo" />
                                                    </a>
                                                    <div class="friend-name">Adam P.</div>
                                                    <div class="friend-title mb-20 blue-grey-400">
                                                        209 - Single
                                                    </div>
                                                    <ul class="list-inline font-size-17 mb-5">
                                                        <li class="list-inline-item"><a href="#" class="icon fa-bed" style="color: #f17cff;"></a></li>

                                                        <li class="list-inline-item"><a href="#" class="icon wb-user blue-grey-400"></a></li>
                                                        <li class="list-inline-item"><a href="#" class="icon wb-tag blue-grey-400"></a></li>
                                                    </ul>
                                                    <span class="list-text">
                                                        <button type="button" class="btn btn-xs btn-success" style="width: 80px;"><i class="icon fa-paint-brush" aria-hidden="true" style="color: #fff;"></i><b>Cleaned</b></button>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1" style="/* padding: 10px; */ /* background-color: #fff; */">
                                            <div style="width: 100%; background-color: #ff4c52; height: 5px;"></div>
                                            <div class="card card-shadow w-full">
                                                <div class="card-block text-center bg-white p-20">
                                                    <div class="taskboard-stage-actions float-right">
                                                        <div class="dropdown">
                                                            <a data-toggle="dropdown" href="#" aria-expanded="false"><i class="icon wb-more-vertical" aria-hidden="true"></i></a>
                                                            <div
                                                                class="dropdown-menu bullet"
                                                                role="menu"
                                                                x-placement="bottom-start"
                                                                style="position: absolute; transform: translate3d(0px, 19px, 0px); top: 0px; left: 0px; will-change: transform;"
                                                            >
                                                                <a class="taskboard-stage-rename dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-lock" aria-hidden="true"></i>Check-In</a>
                                                                <a class="taskboard-stage-delete dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-unlock" aria-hidden="true"></i>Check Out</a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <a href="#" class="avatar mb-5">
                                                        <img class="img-fluid" src="{{asset('assets/portraits/3.jpg')}}" alt="Adam_photo" />
                                                    </a>
                                                    <div class="friend-name">Adam P.</div>
                                                    <div class="friend-title mb-20 blue-grey-400">
                                                        210 - Family
                                                    </div>
                                                    <ul class="list-inline font-size-17 mb-5">
                                                        <li class="list-inline-item"><a href="#" class="icon fa-bed" style="color: #4ea102;"></a></li>

                                                        <li class="list-inline-item"><a href="#" class="icon wb-user blue-grey-400"></a></li>
                                                        <li class="list-inline-item"><a href="#" class="icon wb-tag blue-grey-400"></a></li>
                                                    </ul>
                                                    <span class="list-text">
                                                        <button type="button" class="btn btn-xs btn-danger" style="width: 80px;"><i class="icon fa-paw" aria-hidden="true" style="color: #fff;"></i><b>Vy. Dirty</b></button>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="exampleTabsIconThree" role="tabpanel">
                                    <div class="row">
                                        <div class="col-sm-1" style="/* padding: 10px; */ /* background-color: #fff; */">
                                            <div style="width: 100%; background-color: #11c26d; height: 5px;"></div>
                                            <div class="card card-shadow w-full">
                                                <div class="card-block text-center bg-white p-20">
                                                    <div class="taskboard-stage-actions float-right">
                                                        <div class="dropdown">
                                                            <a data-toggle="dropdown" href="#" aria-expanded="false"><i class="icon wb-more-vertical" aria-hidden="true"></i></a>
                                                            <div
                                                                class="dropdown-menu bullet"
                                                                role="menu"
                                                                x-placement="bottom-start"
                                                                style="position: absolute; transform: translate3d(0px, 19px, 0px); top: 0px; left: 0px; will-change: transform;"
                                                            >
                                                                <a class="taskboard-stage-rename dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-lock" aria-hidden="true"></i>Check-In</a>
                                                                <a class="taskboard-stage-delete dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-unlock" aria-hidden="true"></i>Check Out</a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <a href="#" class="avatar mb-5">
                                                        <img class="img-fluid" src="{{asset('assets/portraits/1.jpg')}}" alt="Adam_photo" />
                                                    </a>
                                                    <div class="friend-name">Adam P.</div>
                                                    <div class="friend-title mb-20 blue-grey-400">
                                                        301 - Deluxe
                                                    </div>
                                                    <ul class="list-inline font-size-17 mb-5">
                                                        <li class="list-inline-item"><a href="#" class="icon fa-bed" style="color: #f17cff;"></a></li>

                                                        <li class="list-inline-item"><a href="#" class="icon wb-user blue-grey-400"></a></li>
                                                        <li class="list-inline-item"><a href="#" class="icon wb-tag blue-grey-400"></a></li>
                                                    </ul>
                                                    <span class="list-text">
                                                        <button type="button" class="btn btn-xs btn-success" style="width: 80px;"><i class="icon fa-paint-brush" aria-hidden="true" style="color: #fff;"></i><b>Cleaned</b></button>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1" style="/* padding: 10px; */ /* background-color: #fff; */">
                                            <div style="width: 100%; background-color: #eb6709; height: 5px;"></div>
                                            <div class="card card-shadow w-full">
                                                <div class="card-block text-center bg-white p-20">
                                                    <div class="taskboard-stage-actions float-right">
                                                        <div class="dropdown">
                                                            <a data-toggle="dropdown" href="#" aria-expanded="false"><i class="icon wb-more-vertical" aria-hidden="true"></i></a>
                                                            <div
                                                                class="dropdown-menu bullet"
                                                                role="menu"
                                                                x-placement="bottom-start"
                                                                style="position: absolute; transform: translate3d(0px, 19px, 0px); top: 0px; left: 0px; will-change: transform;"
                                                            >
                                                                <a class="taskboard-stage-rename dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-lock" aria-hidden="true"></i>Check-In</a>
                                                                <a class="taskboard-stage-delete dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-unlock" aria-hidden="true"></i>Check Out</a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <a href="#" class="avatar mb-5">
                                                        <img class="img-fluid" src="{{asset('assets/portraits/2.jpg')}}" alt="Adam_photo" />
                                                    </a>
                                                    <div class="friend-name">Adam P.</div>
                                                    <div class="friend-title mb-20 blue-grey-400">
                                                        302 - Double
                                                    </div>
                                                    <ul class="list-inline font-size-17 mb-5">
                                                        <li class="list-inline-item"><a href="#" class="icon fa-bed" style="color: #eb6709;"></a></li>

                                                        <li class="list-inline-item"><a href="#" class="icon wb-user blue-grey-400"></a></li>
                                                        <li class="list-inline-item"><a href="#" class="icon wb-tag blue-grey-400"></a></li>
                                                    </ul>
                                                    <span class="list-text" style="/* padding-left: 0px; */">
                                                        <button type="button" class="btn btn-xs btn-warning" style="padding-left: -10px; width: 80px;">
                                                            <i class="icon wb-wrench" aria-hidden="true" style="color: #fff;"></i><b>Out Ord.</b>
                                                        </button>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1" style="/* padding: 10px; */ /* background-color: #fff; */">
                                            <div style="width: 100%; background-color: #ff4c52; height: 5px;"></div>
                                            <div class="card card-shadow w-full">
                                                <div class="card-block text-center bg-white p-20">
                                                    <div class="taskboard-stage-actions float-right">
                                                        <div class="dropdown">
                                                            <a data-toggle="dropdown" href="#" aria-expanded="false"><i class="icon wb-more-vertical" aria-hidden="true"></i></a>
                                                            <div
                                                                class="dropdown-menu bullet"
                                                                role="menu"
                                                                x-placement="bottom-start"
                                                                style="position: absolute; transform: translate3d(0px, 19px, 0px); top: 0px; left: 0px; will-change: transform;"
                                                            >
                                                                <a class="taskboard-stage-rename dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-lock" aria-hidden="true"></i>Check-In</a>
                                                                <a class="taskboard-stage-delete dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-unlock" aria-hidden="true"></i>Check Out</a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <a href="#" class="avatar mb-5">
                                                        <img class="img-fluid" src="{{asset('assets/portraits/3.jpg')}}" alt="Adam_photo" />
                                                    </a>
                                                    <div class="friend-name">Adam P.</div>
                                                    <div class="friend-title mb-20 blue-grey-400">
                                                        303 - Family
                                                    </div>
                                                    <ul class="list-inline font-size-17 mb-5">
                                                        <li class="list-inline-item"><a href="#" class="icon fa-bed" style="color: #4ea102;"></a></li>

                                                        <li class="list-inline-item"><a href="#" class="icon wb-user blue-grey-400"></a></li>
                                                        <li class="list-inline-item"><a href="#" class="icon wb-tag blue-grey-400"></a></li>
                                                    </ul>
                                                    <span class="list-text">
                                                        <button type="button" class="btn btn-xs btn-danger" style="width: 80px;"><i class="icon fa-paw" aria-hidden="true" style="color: #fff;"></i><b>Vy. Dirty</b></button>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1" style="/* padding: 10px; */ /* background-color: #fff; */">
                                            <div style="width: 100%; background-color: #e4eaec; height: 5px;"></div>
                                            <div class="card card-shadow w-full">
                                                <div class="card-block text-center bg-white p-20">
                                                    <div class="taskboard-stage-actions float-right">
                                                        <div class="dropdown">
                                                            <a data-toggle="dropdown" href="#" aria-expanded="false"><i class="icon wb-more-vertical" aria-hidden="true"></i></a>
                                                            <div
                                                                class="dropdown-menu bullet"
                                                                role="menu"
                                                                x-placement="bottom-start"
                                                                style="position: absolute; transform: translate3d(0px, 19px, 0px); top: 0px; left: 0px; will-change: transform;"
                                                            >
                                                                <a class="taskboard-stage-rename dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-lock" aria-hidden="true"></i>Check-In</a>
                                                                <a class="taskboard-stage-delete dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-unlock" aria-hidden="true"></i>Check Out</a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <a href="#" class="avatar mb-5">
                                                        <img class="img-fluid" src="{{asset('assets/portraits/4.jpg')}}" alt="Adam_photo" />
                                                    </a>
                                                    <div class="friend-name">Adam P.</div>
                                                    <div class="friend-title mb-20 blue-grey-400">
                                                        304 - Single
                                                    </div>
                                                    <ul class="list-inline font-size-17 mb-5">
                                                        <li class="list-inline-item"><a href="#" class="icon fa-bed" style="color: #f17cff;"></a></li>

                                                        <li class="list-inline-item"><a href="#" class="icon wb-user blue-grey-400"></a></li>
                                                        <li class="list-inline-item"><a href="#" class="icon wb-tag blue-grey-400"></a></li>
                                                    </ul>
                                                    <span class="list-text">
                                                        <button type="button" class="btn btn-xs btn-default" style="width: 80px;"><i class="icon wb-unlock" aria-hidden="true"></i><b>Vacant</b></button>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1" style="/* padding: 10px; */ /* background-color: #fff; */">
                                            <div style="width: 100%; background-color: #11c26d; height: 5px;"></div>
                                            <div class="card card-shadow w-full">
                                                <div class="card-block text-center bg-white p-20">
                                                    <div class="taskboard-stage-actions float-right">
                                                        <div class="dropdown">
                                                            <a data-toggle="dropdown" href="#" aria-expanded="false"><i class="icon wb-more-vertical" aria-hidden="true"></i></a>
                                                            <div
                                                                class="dropdown-menu bullet"
                                                                role="menu"
                                                                x-placement="bottom-start"
                                                                style="position: absolute; transform: translate3d(0px, 19px, 0px); top: 0px; left: 0px; will-change: transform;"
                                                            >
                                                                <a class="taskboard-stage-rename dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-lock" aria-hidden="true"></i>Check-In</a>
                                                                <a class="taskboard-stage-delete dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-unlock" aria-hidden="true"></i>Check Out</a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <a href="#" class="avatar mb-5">
                                                        <img class="img-fluid" src="{{asset('assets/portraits/1.jpg')}}" alt="Adam_photo" />
                                                    </a>
                                                    <div class="friend-name">Adam P.</div>
                                                    <div class="friend-title mb-20 blue-grey-400">
                                                        305 - Single
                                                    </div>
                                                    <ul class="list-inline font-size-17 mb-5">
                                                        <li class="list-inline-item"><a href="#" class="icon fa-bed" style="color: #f17cff;"></a></li>

                                                        <li class="list-inline-item"><a href="#" class="icon wb-user blue-grey-400"></a></li>
                                                        <li class="list-inline-item"><a href="#" class="icon wb-tag blue-grey-400"></a></li>
                                                    </ul>
                                                    <span class="list-text">
                                                        <button type="button" class="btn btn-xs btn-success" style="width: 80px;"><i class="icon fa-paint-brush" aria-hidden="true" style="color: #fff;"></i><b>Cleaned</b></button>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-1" style="/* padding: 10px; */ /* background-color: #fff; */">
                                            <div style="width: 100%; background-color: #eb6709; height: 5px;"></div>
                                            <div class="card card-shadow w-full">
                                                <div class="card-block text-center bg-white p-20">
                                                    <div class="taskboard-stage-actions float-right">
                                                        <div class="dropdown">
                                                            <a data-toggle="dropdown" href="#" aria-expanded="false"><i class="icon wb-more-vertical" aria-hidden="true"></i></a>
                                                            <div
                                                                class="dropdown-menu bullet"
                                                                role="menu"
                                                                x-placement="bottom-start"
                                                                style="position: absolute; transform: translate3d(0px, 19px, 0px); top: 0px; left: 0px; will-change: transform;"
                                                            >
                                                                <a class="taskboard-stage-rename dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-lock" aria-hidden="true"></i>Check-In</a>
                                                                <a class="taskboard-stage-delete dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-unlock" aria-hidden="true"></i>Check Out</a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <a href="#" class="avatar mb-5">
                                                        <img class="img-fluid" src="{{asset('assets/portraits/2.jpg')}}" alt="Adam_photo" />
                                                    </a>
                                                    <div class="friend-name">Adam P.</div>
                                                    <div class="friend-title mb-20 blue-grey-400">
                                                        306 - Double
                                                    </div>
                                                    <ul class="list-inline font-size-17 mb-5">
                                                        <li class="list-inline-item"><a href="#" class="icon fa-bed" style="color: #eb6709;"></a></li>

                                                        <li class="list-inline-item"><a href="#" class="icon wb-user blue-grey-400"></a></li>
                                                        <li class="list-inline-item"><a href="#" class="icon wb-tag blue-grey-400"></a></li>
                                                    </ul>
                                                    <span class="list-text" style="/* padding-left: 0px; */">
                                                        <button type="button" class="btn btn-xs btn-warning" style="padding-left: -10px; width: 80px;">
                                                            <i class="icon wb-wrench" aria-hidden="true" style="color: #fff;"></i><b>Out Ord.</b>
                                                        </button>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-1" style="/* padding: 10px; */ /* background-color: #fff; */">
                                            <div style="width: 100%; background-color: #eb6709; height: 5px;"></div>
                                            <div class="card card-shadow w-full">
                                                <div class="card-block text-center bg-white p-20">
                                                    <div class="taskboard-stage-actions float-right">
                                                        <div class="dropdown">
                                                            <a data-toggle="dropdown" href="#" aria-expanded="false"><i class="icon wb-more-vertical" aria-hidden="true"></i></a>
                                                            <div
                                                                class="dropdown-menu bullet"
                                                                role="menu"
                                                                x-placement="bottom-start"
                                                                style="position: absolute; transform: translate3d(0px, 19px, 0px); top: 0px; left: 0px; will-change: transform;"
                                                            >
                                                                <a class="taskboard-stage-rename dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-lock" aria-hidden="true"></i>Check-In</a>
                                                                <a class="taskboard-stage-delete dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-unlock" aria-hidden="true"></i>Check Out</a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <a href="#" class="avatar mb-5">
                                                        <img class="img-fluid" src="{{asset('assets/portraits/2.jpg')}}" alt="Adam_photo" />
                                                    </a>
                                                    <div class="friend-name">Adam P.</div>
                                                    <div class="friend-title mb-20 blue-grey-400">
                                                        307 - Double
                                                    </div>
                                                    <ul class="list-inline font-size-17 mb-5">
                                                        <li class="list-inline-item"><a href="#" class="icon fa-bed" style="color: #eb6709;"></a></li>

                                                        <li class="list-inline-item"><a href="#" class="icon wb-user blue-grey-400"></a></li>
                                                        <li class="list-inline-item"><a href="#" class="icon wb-tag blue-grey-400"></a></li>
                                                    </ul>
                                                    <span class="list-text" style="/* padding-left: 0px; */">
                                                        <button type="button" class="btn btn-xs btn-warning" style="padding-left: -10px; width: 80px;">
                                                            <i class="icon wb-wrench" aria-hidden="true" style="color: #fff;"></i><b>Out Ord.</b>
                                                        </button>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1" style="/* padding: 10px; */ /* background-color: #fff; */">
                                            <div style="width: 100%; background-color: #e4eaec; height: 5px;"></div>
                                            <div class="card card-shadow w-full">
                                                <div class="card-block text-center bg-white p-20">
                                                    <div class="taskboard-stage-actions float-right">
                                                        <div class="dropdown">
                                                            <a data-toggle="dropdown" href="#" aria-expanded="false"><i class="icon wb-more-vertical" aria-hidden="true"></i></a>
                                                            <div
                                                                class="dropdown-menu bullet"
                                                                role="menu"
                                                                x-placement="bottom-start"
                                                                style="position: absolute; transform: translate3d(0px, 19px, 0px); top: 0px; left: 0px; will-change: transform;"
                                                            >
                                                                <a class="taskboard-stage-rename dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-lock" aria-hidden="true"></i>Check-In</a>
                                                                <a class="taskboard-stage-delete dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-unlock" aria-hidden="true"></i>Check Out</a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <a href="#" class="avatar mb-5">
                                                        <img class="img-fluid" src="{{asset('assets/portraits/4.jpg')}}" alt="Adam_photo" />
                                                    </a>
                                                    <div class="friend-name">Adam P.</div>
                                                    <div class="friend-title mb-20 blue-grey-400">
                                                        308 - Single
                                                    </div>
                                                    <ul class="list-inline font-size-17 mb-5">
                                                        <li class="list-inline-item"><a href="#" class="icon fa-bed" style="color: #f17cff;"></a></li>

                                                        <li class="list-inline-item"><a href="#" class="icon wb-user blue-grey-400"></a></li>
                                                        <li class="list-inline-item"><a href="#" class="icon wb-tag blue-grey-400"></a></li>
                                                    </ul>
                                                    <span class="list-text">
                                                        <button type="button" class="btn btn-xs btn-default" style="width: 80px;"><i class="icon wb-unlock" aria-hidden="true"></i><b>Vacant</b></button>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane active" id="exampleTabsIconFour" role="tabpanel">
                                    <div class="row">
                                        <div class="col-sm-1" style="/* padding: 10px; */ /* background-color: #fff; */">
                                            <div style="width: 100%; background-color: #11c26d; height: 5px;"></div>
                                            <div class="card card-shadow w-full">
                                                <div class="card-block text-center bg-white p-20">
                                                    <div class="taskboard-stage-actions float-right">
                                                        <div class="dropdown">
                                                            <a data-toggle="dropdown" href="#" aria-expanded="false"><i class="icon wb-more-vertical" aria-hidden="true"></i></a>
                                                            <div
                                                                class="dropdown-menu bullet"
                                                                role="menu"
                                                                x-placement="bottom-start"
                                                                style="position: absolute; transform: translate3d(0px, 19px, 0px); top: 0px; left: 0px; will-change: transform;"
                                                            >
                                                                <a class="taskboard-stage-rename dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-lock" aria-hidden="true"></i>Check-In</a>
                                                                <a class="taskboard-stage-delete dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-unlock" aria-hidden="true"></i>Check Out</a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <a href="#" class="avatar mb-5">
                                                        <img class="img-fluid" src="{{asset('assets/portraits/1.jpg')}}" alt="Adam_photo" />
                                                    </a>
                                                    <div class="friend-name">Adam P.</div>
                                                    <div class="friend-title mb-20 blue-grey-400">
                                                        401 - Deluxe
                                                    </div>
                                                    <ul class="list-inline font-size-17 mb-5">
                                                        <li class="list-inline-item"><a href="#" class="icon fa-bed" style="color: #f17cff;"></a></li>

                                                        <li class="list-inline-item"><a href="#" class="icon wb-user blue-grey-400"></a></li>
                                                        <li class="list-inline-item"><a href="#" class="icon wb-tag blue-grey-400"></a></li>
                                                    </ul>
                                                    <span class="list-text">
                                                        <button type="button" class="btn btn-xs btn-success" style="width: 80px;"><i class="icon fa-paint-brush" aria-hidden="true" style="color: #fff;"></i><b>Cleaned</b></button>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1" style="/* padding: 10px; */ /* background-color: #fff; */">
                                            <div style="width: 100%; background-color: #eb6709; height: 5px;"></div>
                                            <div class="card card-shadow w-full">
                                                <div class="card-block text-center bg-white p-20">
                                                    <div class="taskboard-stage-actions float-right">
                                                        <div class="dropdown">
                                                            <a data-toggle="dropdown" href="#" aria-expanded="false"><i class="icon wb-more-vertical" aria-hidden="true"></i></a>
                                                            <div
                                                                class="dropdown-menu bullet"
                                                                role="menu"
                                                                x-placement="bottom-start"
                                                                style="position: absolute; transform: translate3d(0px, 19px, 0px); top: 0px; left: 0px; will-change: transform;"
                                                            >
                                                                <a class="taskboard-stage-rename dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-lock" aria-hidden="true"></i>Check-In</a>
                                                                <a class="taskboard-stage-delete dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-unlock" aria-hidden="true"></i>Check Out</a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <a href="#" class="avatar mb-5">
                                                        <img class="img-fluid" src="{{asset('assets/portraits/2.jpg')}}" alt="Adam_photo" />
                                                    </a>
                                                    <div class="friend-name">Adam P.</div>
                                                    <div class="friend-title mb-20 blue-grey-400">
                                                        402 - Double
                                                    </div>
                                                    <ul class="list-inline font-size-17 mb-5">
                                                        <li class="list-inline-item"><a href="#" class="icon fa-bed" style="color: #eb6709;"></a></li>

                                                        <li class="list-inline-item"><a href="#" class="icon wb-user blue-grey-400"></a></li>
                                                        <li class="list-inline-item"><a href="#" class="icon wb-tag blue-grey-400"></a></li>
                                                    </ul>
                                                    <span class="list-text" style="/* padding-left: 0px; */">
                                                        <button type="button" class="btn btn-xs btn-warning" style="padding-left: -10px; width: 80px;">
                                                            <i class="icon wb-wrench" aria-hidden="true" style="color: #fff;"></i><b>Out Ord.</b>
                                                        </button>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1" style="/* padding: 10px; */ /* background-color: #fff; */">
                                            <div style="width: 100%; background-color: #ff4c52; height: 5px;"></div>
                                            <div class="card card-shadow w-full">
                                                <div class="card-block text-center bg-white p-20">
                                                    <div class="taskboard-stage-actions float-right">
                                                        <div class="dropdown">
                                                            <a data-toggle="dropdown" href="#" aria-expanded="false"><i class="icon wb-more-vertical" aria-hidden="true"></i></a>
                                                            <div
                                                                class="dropdown-menu bullet"
                                                                role="menu"
                                                                x-placement="bottom-start"
                                                                style="position: absolute; transform: translate3d(0px, 19px, 0px); top: 0px; left: 0px; will-change: transform;"
                                                            >
                                                                <a class="taskboard-stage-rename dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-lock" aria-hidden="true"></i>Check-In</a>
                                                                <a class="taskboard-stage-delete dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-unlock" aria-hidden="true"></i>Check Out</a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <a href="#" class="avatar mb-5">
                                                        <img class="img-fluid" src="{{asset('assets/portraits/3.jpg')}}" alt="Adam_photo" />
                                                    </a>
                                                    <div class="friend-name">Adam P.</div>
                                                    <div class="friend-title mb-20 blue-grey-400">
                                                        403 - Family
                                                    </div>
                                                    <ul class="list-inline font-size-17 mb-5">
                                                        <li class="list-inline-item"><a href="#" class="icon fa-bed" style="color: #4ea102;"></a></li>

                                                        <li class="list-inline-item"><a href="#" class="icon wb-user blue-grey-400"></a></li>
                                                        <li class="list-inline-item"><a href="#" class="icon wb-tag blue-grey-400"></a></li>
                                                    </ul>
                                                    <span class="list-text">
                                                        <button type="button" class="btn btn-xs btn-danger" style="width: 80px;"><i class="icon fa-paw" aria-hidden="true" style="color: #fff;"></i><b>Vy. Dirty</b></button>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1" style="/* padding: 10px; */ /* background-color: #fff; */">
                                            <div style="width: 100%; background-color: #e4eaec; height: 5px;"></div>
                                            <div class="card card-shadow w-full">
                                                <div class="card-block text-center bg-white p-20">
                                                    <div class="taskboard-stage-actions float-right">
                                                        <div class="dropdown">
                                                            <a data-toggle="dropdown" href="#" aria-expanded="false"><i class="icon wb-more-vertical" aria-hidden="true"></i></a>
                                                            <div
                                                                class="dropdown-menu bullet"
                                                                role="menu"
                                                                x-placement="bottom-start"
                                                                style="position: absolute; transform: translate3d(0px, 19px, 0px); top: 0px; left: 0px; will-change: transform;"
                                                            >
                                                                <a class="taskboard-stage-rename dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-lock" aria-hidden="true"></i>Check-In</a>
                                                                <a class="taskboard-stage-delete dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-unlock" aria-hidden="true"></i>Check Out</a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <a href="#" class="avatar mb-5">
                                                        <img class="img-fluid" src="{{asset('assets/portraits/4.jpg')}}" alt="Adam_photo" />
                                                    </a>
                                                    <div class="friend-name">Adam P.</div>
                                                    <div class="friend-title mb-20 blue-grey-400">
                                                        404 - Single
                                                    </div>
                                                    <ul class="list-inline font-size-17 mb-5">
                                                        <li class="list-inline-item"><a href="#" class="icon fa-bed" style="color: #f17cff;"></a></li>

                                                        <li class="list-inline-item"><a href="#" class="icon wb-user blue-grey-400"></a></li>
                                                        <li class="list-inline-item"><a href="#" class="icon wb-tag blue-grey-400"></a></li>
                                                    </ul>
                                                    <span class="list-text">
                                                        <button type="button" class="btn btn-xs btn-default" style="width: 80px;"><i class="icon wb-unlock" aria-hidden="true"></i><b>Vacant</b></button>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1" style="/* padding: 10px; */ /* background-color: #fff; */">
                                            <div style="width: 100%; background-color: #11c26d; height: 5px;"></div>
                                            <div class="card card-shadow w-full">
                                                <div class="card-block text-center bg-white p-20">
                                                    <div class="taskboard-stage-actions float-right">
                                                        <div class="dropdown">
                                                            <a data-toggle="dropdown" href="#" aria-expanded="false"><i class="icon wb-more-vertical" aria-hidden="true"></i></a>
                                                            <div
                                                                class="dropdown-menu bullet"
                                                                role="menu"
                                                                x-placement="bottom-start"
                                                                style="position: absolute; transform: translate3d(0px, 19px, 0px); top: 0px; left: 0px; will-change: transform;"
                                                            >
                                                                <a class="taskboard-stage-rename dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-lock" aria-hidden="true"></i>Check-In</a>
                                                                <a class="taskboard-stage-delete dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-unlock" aria-hidden="true"></i>Check Out</a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <a href="#" class="avatar mb-5">
                                                        <img class="img-fluid" src="{{asset('assets/portraits/1.jpg')}}" alt="Adam_photo" />
                                                    </a>
                                                    <div class="friend-name">Adam P.</div>
                                                    <div class="friend-title mb-20 blue-grey-400">
                                                        405 - Single
                                                    </div>
                                                    <ul class="list-inline font-size-17 mb-5">
                                                        <li class="list-inline-item"><a href="#" class="icon fa-bed" style="color: #f17cff;"></a></li>

                                                        <li class="list-inline-item"><a href="#" class="icon wb-user blue-grey-400"></a></li>
                                                        <li class="list-inline-item"><a href="#" class="icon wb-tag blue-grey-400"></a></li>
                                                    </ul>
                                                    <span class="list-text">
                                                        <button type="button" class="btn btn-xs btn-success" style="width: 80px;"><i class="icon fa-paint-brush" aria-hidden="true" style="color: #fff;"></i><b>Cleaned</b></button>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-1" style="/* padding: 10px; */ /* background-color: #fff; */">
                                            <div style="width: 100%; background-color: #eb6709; height: 5px;"></div>
                                            <div class="card card-shadow w-full">
                                                <div class="card-block text-center bg-white p-20">
                                                    <div class="taskboard-stage-actions float-right">
                                                        <div class="dropdown">
                                                            <a data-toggle="dropdown" href="#" aria-expanded="false"><i class="icon wb-more-vertical" aria-hidden="true"></i></a>
                                                            <div
                                                                class="dropdown-menu bullet"
                                                                role="menu"
                                                                x-placement="bottom-start"
                                                                style="position: absolute; transform: translate3d(0px, 19px, 0px); top: 0px; left: 0px; will-change: transform;"
                                                            >
                                                                <a class="taskboard-stage-rename dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-lock" aria-hidden="true"></i>Check-In</a>
                                                                <a class="taskboard-stage-delete dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-unlock" aria-hidden="true"></i>Check Out</a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <a href="#" class="avatar mb-5">
                                                        <img class="img-fluid" src="{{asset('assets/portraits/2.jpg')}}" alt="Adam_photo" />
                                                    </a>
                                                    <div class="friend-name">Adam P.</div>
                                                    <div class="friend-title mb-20 blue-grey-400">
                                                        406 - Double
                                                    </div>
                                                    <ul class="list-inline font-size-17 mb-5">
                                                        <li class="list-inline-item"><a href="#" class="icon fa-bed" style="color: #eb6709;"></a></li>

                                                        <li class="list-inline-item"><a href="#" class="icon wb-user blue-grey-400"></a></li>
                                                        <li class="list-inline-item"><a href="#" class="icon wb-tag blue-grey-400"></a></li>
                                                    </ul>
                                                    <span class="list-text" style="/* padding-left: 0px; */">
                                                        <button type="button" class="btn btn-xs btn-warning" style="padding-left: -10px; width: 80px;">
                                                            <i class="icon wb-wrench" aria-hidden="true" style="color: #fff;"></i><b>Out Ord.</b>
                                                        </button>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1" style="/* padding: 10px; */ /* background-color: #fff; */">
                                            <div style="width: 100%; background-color: #ff4c52; height: 5px;"></div>
                                            <div class="card card-shadow w-full">
                                                <div class="card-block text-center bg-white p-20">
                                                    <div class="taskboard-stage-actions float-right">
                                                        <div class="dropdown">
                                                            <a data-toggle="dropdown" href="#" aria-expanded="false"><i class="icon wb-more-vertical" aria-hidden="true"></i></a>
                                                            <div
                                                                class="dropdown-menu bullet"
                                                                role="menu"
                                                                x-placement="bottom-start"
                                                                style="position: absolute; transform: translate3d(0px, 19px, 0px); top: 0px; left: 0px; will-change: transform;"
                                                            >
                                                                <a class="taskboard-stage-rename dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-lock" aria-hidden="true"></i>Check-In</a>
                                                                <a class="taskboard-stage-delete dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-unlock" aria-hidden="true"></i>Check Out</a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <a href="#" class="avatar mb-5">
                                                        <img class="img-fluid" src="{{asset('assets/portraits/3.jpg')}}" alt="Adam_photo" />
                                                    </a>
                                                    <div class="friend-name">Adam P.</div>
                                                    <div class="friend-title mb-20 blue-grey-400">
                                                        407 - Family
                                                    </div>
                                                    <ul class="list-inline font-size-17 mb-5">
                                                        <li class="list-inline-item"><a href="#" class="icon fa-bed" style="color: #4ea102;"></a></li>

                                                        <li class="list-inline-item"><a href="#" class="icon wb-user blue-grey-400"></a></li>
                                                        <li class="list-inline-item"><a href="#" class="icon wb-tag blue-grey-400"></a></li>
                                                    </ul>
                                                    <span class="list-text">
                                                        <button type="button" class="btn btn-xs btn-danger" style="width: 80px;"><i class="icon fa-paw" aria-hidden="true" style="color: #fff;"></i><b>Vy. Dirty</b></button>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div style="/* padding: 10px; */ /* background-color: #fff; */" class="col-sm-1">
                                            <div style="width: 100%; background-color: #e4eaec; height: 5px;"></div>
                                            <div class="card card-shadow w-full">
                                                <div class="card-block text-center bg-white p-20">
                                                    <div class="taskboard-stage-actions float-right">
                                                        <div class="dropdown">
                                                            <a data-toggle="dropdown" href="#" aria-expanded="false"><i class="icon wb-more-vertical" aria-hidden="true"></i></a>
                                                            <div
                                                                class="dropdown-menu bullet"
                                                                role="menu"
                                                                x-placement="bottom-start"
                                                                style="position: absolute; transform: translate3d(0px, 19px, 0px); top: 0px; left: 0px; will-change: transform;"
                                                            >
                                                                <a class="taskboard-stage-rename dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-lock" aria-hidden="true"></i>Check-In</a>
                                                                <a class="taskboard-stage-delete dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-unlock" aria-hidden="true"></i>Check Out</a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <a href="#" class="avatar mb-5">
                                                        <img class="img-fluid" src="{{asset('assets/portraits/4.jpg')}}" alt="Adam_photo" />
                                                    </a>
                                                    <div class="friend-name">Adam P.</div>
                                                    <div class="friend-title mb-20 blue-grey-400">
                                                        408 - Deluxe
                                                    </div>
                                                    <ul class="list-inline font-size-17 mb-5">
                                                        <li class="list-inline-item"><a href="#" class="icon fa-bed" style="color: #eb6709;"></a></li>

                                                        <li class="list-inline-item"><a href="#" class="icon wb-user blue-grey-400"></a></li>
                                                        <li class="list-inline-item"><a href="#" class="icon wb-tag blue-grey-400"></a></li>
                                                    </ul>
                                                    <span class="list-text">
                                                        <button type="button" class="btn btn-xs btn-default" style="width: 80px;"><i class="icon wb-unlock" aria-hidden="true"></i><b>Vacant</b></button>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1" style="/* padding: 10px; */ /* background-color: #fff; */">
                                            <div style="width: 100%; background-color: #11c26d; height: 5px;"></div>
                                            <div class="card card-shadow w-full">
                                                <div class="card-block text-center bg-white p-20">
                                                    <div class="taskboard-stage-actions float-right">
                                                        <div class="dropdown">
                                                            <a data-toggle="dropdown" href="#" aria-expanded="false"><i class="icon wb-more-vertical" aria-hidden="true"></i></a>
                                                            <div
                                                                class="dropdown-menu bullet"
                                                                role="menu"
                                                                x-placement="bottom-start"
                                                                style="position: absolute; transform: translate3d(0px, 19px, 0px); top: 0px; left: 0px; will-change: transform;"
                                                            >
                                                                <a class="taskboard-stage-rename dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-lock" aria-hidden="true"></i>Check-In</a>
                                                                <a class="taskboard-stage-delete dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-unlock" aria-hidden="true"></i>Check Out</a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <a href="#" class="avatar mb-5">
                                                        <img class="img-fluid" src="{{asset('assets/portraits/1.jpg')}}" alt="Adam_photo" />
                                                    </a>
                                                    <div class="friend-name">Adam P.</div>
                                                    <div class="friend-title mb-20 blue-grey-400">
                                                        409 - Single
                                                    </div>
                                                    <ul class="list-inline font-size-17 mb-5">
                                                        <li class="list-inline-item"><a href="#" class="icon fa-bed" style="color: #f17cff;"></a></li>

                                                        <li class="list-inline-item"><a href="#" class="icon wb-user blue-grey-400"></a></li>
                                                        <li class="list-inline-item"><a href="#" class="icon wb-tag blue-grey-400"></a></li>
                                                    </ul>
                                                    <span class="list-text">
                                                        <button type="button" class="btn btn-xs btn-success" style="width: 80px;"><i class="icon fa-paint-brush" aria-hidden="true" style="color: #fff;"></i><b>Cleaned</b></button>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1" style="/* padding: 10px; */ /* background-color: #fff; */">
                                            <div style="width: 100%; background-color: #ff4c52; height: 5px;"></div>
                                            <div class="card card-shadow w-full">
                                                <div class="card-block text-center bg-white p-20">
                                                    <div class="taskboard-stage-actions float-right">
                                                        <div class="dropdown">
                                                            <a data-toggle="dropdown" href="#" aria-expanded="false"><i class="icon wb-more-vertical" aria-hidden="true"></i></a>
                                                            <div
                                                                class="dropdown-menu bullet"
                                                                role="menu"
                                                                x-placement="bottom-start"
                                                                style="position: absolute; transform: translate3d(0px, 19px, 0px); top: 0px; left: 0px; will-change: transform;"
                                                            >
                                                                <a class="taskboard-stage-rename dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-lock" aria-hidden="true"></i>Check-In</a>
                                                                <a class="taskboard-stage-delete dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-unlock" aria-hidden="true"></i>Check Out</a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <a href="#" class="avatar mb-5">
                                                        <img class="img-fluid" src="{{asset('assets/portraits/3.jpg')}}" alt="Adam_photo" />
                                                    </a>
                                                    <div class="friend-name">Adam P.</div>
                                                    <div class="friend-title mb-20 blue-grey-400">
                                                        410 - Family
                                                    </div>
                                                    <ul class="list-inline font-size-17 mb-5">
                                                        <li class="list-inline-item"><a href="#" class="icon fa-bed" style="color: #4ea102;"></a></li>

                                                        <li class="list-inline-item"><a href="#" class="icon wb-user blue-grey-400"></a></li>
                                                        <li class="list-inline-item"><a href="#" class="icon wb-tag blue-grey-400"></a></li>
                                                    </ul>
                                                    <span class="list-text">
                                                        <button type="button" class="btn btn-xs btn-danger" style="width: 80px;"><i class="icon fa-paw" aria-hidden="true" style="color: #fff;"></i><b>Vy. Dirty</b></button>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1" style="/* padding: 10px; */ /* background-color: #fff; */">
                                            <div style="width: 100%; background-color: #eb6709; height: 5px;"></div>
                                            <div class="card card-shadow w-full">
                                                <div class="card-block text-center bg-white p-20">
                                                    <div class="taskboard-stage-actions float-right">
                                                        <div class="dropdown">
                                                            <a data-toggle="dropdown" href="#" aria-expanded="false"><i class="icon wb-more-vertical" aria-hidden="true"></i></a>
                                                            <div
                                                                class="dropdown-menu bullet"
                                                                role="menu"
                                                                x-placement="bottom-start"
                                                                style="position: absolute; transform: translate3d(0px, 19px, 0px); top: 0px; left: 0px; will-change: transform;"
                                                            >
                                                                <a class="taskboard-stage-rename dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-lock" aria-hidden="true"></i>Check-In</a>
                                                                <a class="taskboard-stage-delete dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-unlock" aria-hidden="true"></i>Check Out</a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <a href="#" class="avatar mb-5">
                                                        <img class="img-fluid" src="{{asset('assets/portraits/2.jpg')}}" alt="Adam_photo" />
                                                    </a>
                                                    <div class="friend-name">Adam P.</div>
                                                    <div class="friend-title mb-20 blue-grey-400">
                                                        411 - Double
                                                    </div>
                                                    <ul class="list-inline font-size-17 mb-5">
                                                        <li class="list-inline-item"><a href="#" class="icon fa-bed" style="color: #eb6709;"></a></li>

                                                        <li class="list-inline-item"><a href="#" class="icon wb-user blue-grey-400"></a></li>
                                                        <li class="list-inline-item"><a href="#" class="icon wb-tag blue-grey-400"></a></li>
                                                    </ul>
                                                    <span class="list-text" style="/* padding-left: 0px; */">
                                                        <button type="button" class="btn btn-xs btn-warning" style="padding-left: -10px; width: 80px;">
                                                            <i class="icon wb-wrench" aria-hidden="true" style="color: #fff;"></i><b>Out Ord.</b>
                                                        </button>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1" style="/* padding: 10px; */ /* background-color: #fff; */">
                                            <div style="width: 100%; background-color: #e4eaec; height: 5px;"></div>
                                            <div class="card card-shadow w-full">
                                                <div class="card-block text-center bg-white p-20">
                                                    <div class="taskboard-stage-actions float-right">
                                                        <div class="dropdown">
                                                            <a data-toggle="dropdown" href="#" aria-expanded="false"><i class="icon wb-more-vertical" aria-hidden="true"></i></a>
                                                            <div
                                                                class="dropdown-menu bullet"
                                                                role="menu"
                                                                x-placement="bottom-start"
                                                                style="position: absolute; transform: translate3d(0px, 19px, 0px); top: 0px; left: 0px; will-change: transform;"
                                                            >
                                                                <a class="taskboard-stage-rename dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-lock" aria-hidden="true"></i>Check-In</a>
                                                                <a class="taskboard-stage-delete dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-unlock" aria-hidden="true"></i>Check Out</a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <a href="#" class="avatar mb-5">
                                                        <img class="img-fluid" src="{{asset('assets/portraits/4.jpg')}}" alt="Adam_photo" />
                                                    </a>
                                                    <div class="friend-name">Adam P.</div>
                                                    <div class="friend-title mb-20 blue-grey-400">
                                                        412 - Single
                                                    </div>
                                                    <ul class="list-inline font-size-17 mb-5">
                                                        <li class="list-inline-item"><a href="#" class="icon fa-bed" style="color: #f17cff;"></a></li>

                                                        <li class="list-inline-item"><a href="#" class="icon wb-user blue-grey-400"></a></li>
                                                        <li class="list-inline-item"><a href="#" class="icon wb-tag blue-grey-400"></a></li>
                                                    </ul>
                                                    <span class="list-text">
                                                        <button type="button" class="btn btn-xs btn-default" style="width: 80px;"><i class="icon wb-unlock" aria-hidden="true"></i><b>Vacant</b></button>
                                                    </span>
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
        </div>
    </div>
</div>
@endsection
