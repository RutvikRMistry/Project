@extends('backend.master')
@section('title',"POS Dashboard")
@section('content')
 <!-- Top Menubar Ends Here-->
 <div class="page">
 <div class="page-main">
   <div class="page-header">
      <h1 class="page-title">Dashboard</h1>
   </div>
   <!--Here Starts Main Dashboard -->
   <div class="page-nav-tabs" style="padding: 0px;">
      <ul class="nav nav-tabs" role="tablist">
         <li style="width: 30px;"></li>
         <li class="nav-item" role="presentation">
            <a class="active nav-link" data-toggle="tab" href="#forum-newest" aria-controls="forum-newest" aria-expanded="true" role="tab"><i class="icon fa-calendar" aria-hidden="true"></i>RESERVATIONS</a>
         </li>
         <li class="nav-item" role="presentation">
            <a class="nav-link" data-toggle="tab" href="#forum-activity" aria-controls="forum-activity" aria-expanded="false" role="tab">
            <i class="icon fa-cutlery" aria-hidden="true"></i>BANQUETS</a>
         </li>
         <li class="nav-item" role="presentation">
            <a class="nav-link" data-toggle="tab" href="#forum-answer" aria-controls="forum-answer" aria-expanded="false" role="tab">
            <i class="icon fa-tv" aria-hidden="true"></i>POINT OF SALE</a>
         </li>
      </ul>
   </div>
   <!--Here Ends Main Dashboard-->
   <!-- Here Page Content Starts-->
   <div class="page-content tab-content page-content-table nav-tabs-animate" style="padding: 10px;">
      <div class="tab-pane animation-fade active" id="forum-newest" role="tabpanel">
         <div>
         </div>
         <div>
         </div>
         <!--Left Charts Starts Here -->
         <div style="width: 100%;">
            <div class="page-content-actions" style="margin-top: 20px;">
               <div>
                  <div class="row" data-plugin="matchHeight" data-by-row="true">
                     <div class="row" data-plugin="matchHeight" data-by-row="true">
                        <div class="col-xxl-3" style="">
                           <div class="row h-full" data-plugin="matchHeight">
                              <div class="col-xxl-12 col-lg-4 col-sm-4">
                                 <div class="card card-shadow card-completed-options">
                                    <div class="card-block p-30">
                                       <div class="row">
                                          <div class="col-6">
                                             <div class="counter text-left blue-grey-700">
                                                <div class="counter-label mt-10">Guests
                                                </div>
                                                <div class="counter-number font-size-40 mt-10">
                                                   1,234
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-6">
                                             <div class="pie-progress pie-progress-sm" data-plugin="pieProgress" data-valuemax="100" data-barcolor="#57c7d4" data-size="100" data-barsize="10" data-goal="86" aria-valuenow="86" role="progressbar">
                                                <span class="pie-progress-number blue-grey-700 font-size-20">
                                                86%
                                                </span>
                                                <div class="pie-progress-svg">
                                                   <svg version="1.1" preserveAspectRatio="xMinYMin meet" viewBox="0 0 100 100">
                                                      <ellipse rx="45" ry="45" cx="50" cy="50" stroke="#f2f2f2" fill="none" stroke-width="10"></ellipse>
                                                      <path fill="none" stroke-width="10" stroke="#57c7d4" d="M50,5 A45,45 0 1 1 15.326904075089466,21.31592046130898" style="stroke-dasharray: 243.173, 243.173; stroke-dashoffset: 0;"></path>
                                                   </svg>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-xxl-12 col-lg-4 col-sm-4">
                                 <div class="card card-shadow card-completed-options">
                                    <div class="card-block p-30">
                                       <div class="row">
                                          <div class="col-6">
                                             <div class="counter text-left blue-grey-700">
                                                <div class="counter-label mt-10">Online Reservation
                                                </div>
                                                <div class="counter-number font-size-40 mt-10">
                                                   698
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-6">
                                             <div class="pie-progress pie-progress-sm" data-plugin="pieProgress" data-valuemax="100" data-barcolor="#62a8ea" data-size="100" data-barsize="10" data-goal="62" aria-valuenow="62" role="progressbar">
                                                <span class="pie-progress-number blue-grey-700 font-size-20">
                                                62%
                                                </span>
                                                <div class="pie-progress-svg">
                                                   <svg version="1.1" preserveAspectRatio="xMinYMin meet" viewBox="0 0 100 100">
                                                      <ellipse rx="45" ry="45" cx="50" cy="50" stroke="#f2f2f2" fill="none" stroke-width="10"></ellipse>
                                                      <path fill="none" stroke-width="10" stroke="#62a8ea" d="M50,5 A45,45 0 1 1 19.195380233209022,82.80358823396352" style="stroke-dasharray: 175.309, 175.309; stroke-dashoffset: 0;"></path>
                                                   </svg>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-xxl-12 col-lg-4 col-sm-4">
                                 <div class="card card-shadow card-completed-options">
                                    <div class="card-block p-30">
                                       <div class="row">
                                          <div class="col-6">
                                             <div class="counter text-left blue-grey-700">
                                                <div class="counter-label mt-10">Offline Reservations
                                                </div>
                                                <div class="counter-number font-size-40 mt-10">
                                                   1,358
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-6">
                                             <div class="pie-progress pie-progress-sm" data-plugin="pieProgress" data-valuemax="100" data-barcolor="#926dde" data-size="100" data-barsize="10" data-goal="56" aria-valuenow="56" role="progressbar">
                                                <span class="pie-progress-number blue-grey-700 font-size-20">
                                                56%
                                                </span>
                                                <div class="pie-progress-svg">
                                                   <svg version="1.1" preserveAspectRatio="xMinYMin meet" viewBox="0 0 100 100">
                                                      <ellipse rx="45" ry="45" cx="50" cy="50" stroke="#f2f2f2" fill="none" stroke-width="10"></ellipse>
                                                      <path fill="none" stroke-width="10" stroke="#926dde" d="M50,5 A45,45 0 1 1 33.4343951291895,91.83994186497131" style="stroke-dasharray: 158.34, 158.34; stroke-dashoffset: 0;"></path>
                                                   </svg>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!--Left Charts End Here -->
                        <!-- Right Chart Start Here -->
                        <div class="col-xxl-9" style="">
                           <div id="teamCompletedWidget" class="card card-shadow example-responsive">
                              <div class="card-block p-20 pb-25">
                                 <div class="row pb-40" data-plugin="matchHeight">
                                    <div class="col-md-6" style="height: 194px;">
                                       <div class="counter text-left pl-10">
                                          <div class="counter-label">Total Rooms Reservations</div>
                                          <div class="counter-number-group text-truncate">
                                             <span>1,439</span>
                                             <span>86%</span>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6" style="height: 116px;">
                                       <ul class="list-inline mr-50">
                                          <li class="list-inline-item">
                                             Online Reservation
                                          </li>
                                          <li class="list-inline-item">
                                             Offline Reservation
                                          </li>
                                       </ul>
                                    </div>
                                 </div>
                                 <div class="ct-chart">
                                    <div class="chartist-tooltip" style="top: -11px; left: 917px;"></div>
                                    <svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="453" class="ct-chart-line" style="width: 100%; height: 453px;">
                                       <g class="ct-grids">
                                          <line x1="40" x2="40" y1="15" y2="411" class="ct-grid ct-horizontal"></line>
                                          <line x1="153.9" x2="153.9" y1="15" y2="411" class="ct-grid ct-horizontal"></line>
                                          <line x1="267.8" x2="267.8" y1="15" y2="411" class="ct-grid ct-horizontal"></line>
                                          <line x1="381.70000000000005" x2="381.70000000000005" y1="15" y2="411" class="ct-grid ct-horizontal"></line>
                                          <line x1="495.6" x2="495.6" y1="15" y2="411" class="ct-grid ct-horizontal"></line>
                                          <line x1="609.5" x2="609.5" y1="15" y2="411" class="ct-grid ct-horizontal"></line>
                                          <line x1="723.4000000000001" x2="723.4000000000001" y1="15" y2="411" class="ct-grid ct-horizontal"></line>
                                          <line x1="837.3000000000001" x2="837.3000000000001" y1="15" y2="411" class="ct-grid ct-horizontal"></line>
                                          <line x1="951.2" x2="951.2" y1="15" y2="411" class="ct-grid ct-horizontal"></line>
                                          <line x1="1065.1000000000001" x2="1065.1000000000001" y1="15" y2="411" class="ct-grid ct-horizontal"></line>
                                          <line x1="1179" x2="1179" y1="15" y2="411" class="ct-grid ct-horizontal"></line>
                                          <line y1="331.8" y2="331.8" x1="40" x2="1179" class="ct-grid ct-vertical"></line>
                                          <line y1="252.6" y2="252.6" x1="40" x2="1179" class="ct-grid ct-vertical"></line>
                                          <line y1="173.4" y2="173.4" x1="40" x2="1179" class="ct-grid ct-vertical"></line>
                                          <line y1="94.19999999999999" y2="94.19999999999999" x1="40" x2="1179" class="ct-grid ct-vertical"></line>
                                          <line y1="15" y2="15" x1="40" x2="1179" class="ct-grid ct-vertical"></line>
                                       </g>
                                       <g>
                                          <g ct:series-name="series-1" class="ct-series ct-series-a">
                                             <path d="M40,411L40,411C77.967,387.24,115.933,372.984,153.9,339.72C191.867,306.456,229.833,226.068,267.8,173.4C305.767,120.732,343.733,22.92,381.7,22.92C419.667,22.92,457.633,51.821,495.6,74.4C533.567,96.979,571.533,137.4,609.5,173.4C647.467,209.4,685.433,292.2,723.4,292.2C761.367,292.2,799.333,283.4,837.3,272.4C875.267,261.4,913.233,173.4,951.2,173.4C989.167,173.4,1027.133,331.8,1065.1,331.8C1103.067,331.8,1141.033,218.28,1179,161.52L1179,411Z" class="ct-area"></path>
                                             <path d="M40,411C77.967,387.24,115.933,372.984,153.9,339.72C191.867,306.456,229.833,226.068,267.8,173.4C305.767,120.732,343.733,22.92,381.7,22.92C419.667,22.92,457.633,51.821,495.6,74.4C533.567,96.979,571.533,137.4,609.5,173.4C647.467,209.4,685.433,292.2,723.4,292.2C761.367,292.2,799.333,283.4,837.3,272.4C875.267,261.4,913.233,173.4,951.2,173.4C989.167,173.4,1027.133,331.8,1065.1,331.8C1103.067,331.8,1141.033,218.28,1179,161.52" class="ct-line"></path>
                                             <line x1="40" y1="411" x2="40.01" y2="411" class="ct-point" ct:value="0"></line>
                                             <line x1="40" y1="411" x2="40.01" y2="411" class="ct-point-content"></line>
                                             <line x1="153.9" y1="339.72" x2="153.91" y2="339.72" class="ct-point" ct:value="180"></line>
                                             <line x1="153.9" y1="339.72" x2="153.91" y2="339.72" class="ct-point-content"></line>
                                             <line x1="267.8" y1="173.4" x2="267.81" y2="173.4" class="ct-point" ct:value="600"></line>
                                             <line x1="267.8" y1="173.4" x2="267.81" y2="173.4" class="ct-point-content"></line>
                                             <line x1="381.70000000000005" y1="22.920000000000016" x2="381.71000000000004" y2="22.920000000000016" class="ct-point" ct:value="980"></line>
                                             <line x1="381.70000000000005" y1="22.920000000000016" x2="381.71000000000004" y2="22.920000000000016" class="ct-point-content"></line>
                                             <line x1="495.6" y1="74.39999999999998" x2="495.61" y2="74.39999999999998" class="ct-point" ct:value="850"></line>
                                             <line x1="495.6" y1="74.39999999999998" x2="495.61" y2="74.39999999999998" class="ct-point-content"></line>
                                             <line x1="609.5" y1="173.4" x2="609.51" y2="173.4" class="ct-point" ct:value="600"></line>
                                             <line x1="609.5" y1="173.4" x2="609.51" y2="173.4" class="ct-point-content"></line>
                                             <line x1="723.4000000000001" y1="292.2" x2="723.4100000000001" y2="292.2" class="ct-point" ct:value="300"></line>
                                             <line x1="723.4000000000001" y1="292.2" x2="723.4100000000001" y2="292.2" class="ct-point-content"></line>
                                             <line x1="837.3000000000001" y1="272.4" x2="837.3100000000001" y2="272.4" class="ct-point" ct:value="350"></line>
                                             <line x1="837.3000000000001" y1="272.4" x2="837.3100000000001" y2="272.4" class="ct-point-content"></line>
                                             <line x1="951.2" y1="173.4" x2="951.21" y2="173.4" class="ct-point" ct:value="600"></line>
                                             <line x1="951.2" y1="173.4" x2="951.21" y2="173.4" class="ct-point-content"></line>
                                             <line x1="1065.1000000000001" y1="331.8" x2="1065.1100000000001" y2="331.8" class="ct-point" ct:value="200"></line>
                                             <line x1="1065.1000000000001" y1="331.8" x2="1065.1100000000001" y2="331.8" class="ct-point-content"></line>
                                             <line x1="1179" y1="161.52" x2="1179.01" y2="161.52" class="ct-point" ct:value="630"></line>
                                             <line x1="1179" y1="161.52" x2="1179.01" y2="161.52" class="ct-point-content"></line>
                                          </g>
                                          <g ct:series-name="series-2" class="ct-series ct-series-b">
                                             <path d="M40,411L40,411C77.967,397.8,115.933,392.723,153.9,371.4C191.867,350.077,229.833,250.369,267.8,205.08C305.767,159.791,343.733,90.24,381.7,90.24C419.667,90.24,457.633,146.063,495.6,165.48C533.567,184.897,571.533,213,609.5,213C647.467,213,685.433,161.52,723.4,161.52C761.367,161.52,799.333,247.742,837.3,252.6C875.267,257.458,913.233,260.52,951.2,260.52C989.167,260.52,1027.133,250.62,1065.1,250.62C1103.067,250.62,1141.033,302.1,1179,327.84L1179,411Z" class="ct-area"></path>
                                             <path d="M40,411C77.967,397.8,115.933,392.723,153.9,371.4C191.867,350.077,229.833,250.369,267.8,205.08C305.767,159.791,343.733,90.24,381.7,90.24C419.667,90.24,457.633,146.063,495.6,165.48C533.567,184.897,571.533,213,609.5,213C647.467,213,685.433,161.52,723.4,161.52C761.367,161.52,799.333,247.742,837.3,252.6C875.267,257.458,913.233,260.52,951.2,260.52C989.167,260.52,1027.133,250.62,1065.1,250.62C1103.067,250.62,1141.033,302.1,1179,327.84" class="ct-line"></path>
                                             <line x1="40" y1="411" x2="40.01" y2="411" class="ct-point" ct:value="0"></line>
                                             <line x1="40" y1="411" x2="40.01" y2="411" class="ct-point-content"></line>
                                             <line x1="153.9" y1="371.4" x2="153.91" y2="371.4" class="ct-point" ct:value="100"></line>
                                             <line x1="153.9" y1="371.4" x2="153.91" y2="371.4" class="ct-point-content"></line>
                                             <line x1="267.8" y1="205.08" x2="267.81" y2="205.08" class="ct-point" ct:value="520"></line>
                                             <line x1="267.8" y1="205.08" x2="267.81" y2="205.08" class="ct-point-content"></line>
                                             <line x1="381.70000000000005" y1="90.24000000000001" x2="381.71000000000004" y2="90.24000000000001" class="ct-point" ct:value="810"></line>
                                             <line x1="381.70000000000005" y1="90.24000000000001" x2="381.71000000000004" y2="90.24000000000001" class="ct-point-content"></line>
                                             <line x1="495.6" y1="165.48" x2="495.61" y2="165.48" class="ct-point" ct:value="620"></line>
                                             <line x1="495.6" y1="165.48" x2="495.61" y2="165.48" class="ct-point-content"></line>
                                             <line x1="609.5" y1="213" x2="609.51" y2="213" class="ct-point" ct:value="500"></line>
                                             <line x1="609.5" y1="213" x2="609.51" y2="213" class="ct-point-content"></line>
                                             <line x1="723.4000000000001" y1="161.52" x2="723.4100000000001" y2="161.52" class="ct-point" ct:value="630"></line>
                                             <line x1="723.4000000000001" y1="161.52" x2="723.4100000000001" y2="161.52" class="ct-point-content"></line>
                                             <line x1="837.3000000000001" y1="252.6" x2="837.3100000000001" y2="252.6" class="ct-point" ct:value="400"></line>
                                             <line x1="837.3000000000001" y1="252.6" x2="837.3100000000001" y2="252.6" class="ct-point-content"></line>
                                             <line x1="951.2" y1="260.52" x2="951.21" y2="260.52" class="ct-point" ct:value="380"></line>
                                             <line x1="951.2" y1="260.52" x2="951.21" y2="260.52" class="ct-point-content"></line>
                                             <line x1="1065.1000000000001" y1="250.62" x2="1065.1100000000001" y2="250.62" class="ct-point" ct:value="405"></line>
                                             <line x1="1065.1000000000001" y1="250.62" x2="1065.1100000000001" y2="250.62" class="ct-point-content"></line>
                                             <line x1="1179" y1="327.84000000000003" x2="1179.01" y2="327.84000000000003" class="ct-point" ct:value="210"></line>
                                             <line x1="1179" y1="327.84000000000003" x2="1179.01" y2="327.84000000000003" class="ct-point-content"></line>
                                          </g>
                                       </g>
                                       <g class="ct-labels">
                                          <foreignObject style="overflow: visible;" x="40" y="416" width="113.9" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 114px; height: 20px;">Apr</span></foreignObject>
                                          <foreignObject style="overflow: visible;" x="153.9" y="416" width="113.9" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 114px; height: 20px;">May</span></foreignObject>
                                          <foreignObject style="overflow: visible;" x="267.8" y="416" width="113.90000000000003" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 114px; height: 20px;">Jun</span></foreignObject>
                                          <foreignObject style="overflow: visible;" x="381.70000000000005" y="416" width="113.89999999999998" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 114px; height: 20px;">Jul</span></foreignObject>
                                          <foreignObject style="overflow: visible;" x="495.6" y="416" width="113.89999999999998" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 114px; height: 20px;">Aug</span></foreignObject>
                                          <foreignObject style="overflow: visible;" x="609.5" y="416" width="113.90000000000009" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 114px; height: 20px;">Sep</span></foreignObject>
                                          <foreignObject style="overflow: visible;" x="723.4000000000001" y="416" width="113.89999999999998" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 114px; height: 20px;">Oct</span></foreignObject>
                                          <foreignObject style="overflow: visible;" x="837.3000000000001" y="416" width="113.89999999999998" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 114px; height: 20px;">Nov</span></foreignObject>
                                          <foreignObject style="overflow: visible;" x="951.2" y="416" width="113.90000000000009" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 114px; height: 20px;">Dec</span></foreignObject>
                                          <foreignObject style="overflow: visible;" x="1065.1000000000001" y="416" width="113.89999999999986" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 114px; height: 20px;">Jan</span></foreignObject>
                                          <foreignObject style="overflow: visible;" x="1179" y="416" width="30" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 30px; height: 20px;">Feb</span></foreignObject>
                                          <foreignObject style="overflow: visible;" y="252.60000000000002" x="10" height="79.2" width="20"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 79px; width: 20px;">200</span></foreignObject>
                                          <foreignObject style="overflow: visible;" y="173.4" x="10" height="79.19999999999999" width="20"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 79px; width: 20px;">400</span></foreignObject>
                                          <foreignObject style="overflow: visible;" y="94.19999999999999" x="10" height="79.20000000000002" width="20"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 79px; width: 20px;">600</span></foreignObject>
                                          <foreignObject style="overflow: visible;" y="15" x="10" height="79.19999999999999" width="20"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 79px; width: 20px;">800</span></foreignObject>
                                          <foreignObject style="overflow: visible;" y="-15" x="10" height="30" width="20"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 30px; width: 20px;">1000</span></foreignObject>
                                       </g>
                                    </svg>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- Right Chart End Here -->
                  </div>
               </div>
            </div>
            <div style="padding: 30px;">
               <div class="row" data-plugin="matchHeight" data-by-row="true">
                  <div class="col-xl-12 col-lg-12" style="height: 422px; background-color: #fff;">
                     <div>
                        <div class="panel-heading" style="padding-top: 5px;">
                           <h4>New Reservations</h4>
                        </div>
                        <!-- Reservation Listing Starts Here -->
                        <div>
                           <div id="contactsContent" class="page-content page-content-table" data-plugin="selectable">
                              <!-- Actions -->
                              <!-- Contacts -->
                              <table class="table is-indent" data-plugin="animateList" data-animate="fade" data-child="tr" data-selectable="selectable">
                                 <thead>
                                    <tr class="animation-fade" style="animation-fill-mode: backwards; animation-duration: 250ms; animation-delay: 0ms; background-color: #efeeef;">
                                       <th class="pre-cell"></th>
                                       <th class="cell-30" scope="col">
                                          <span class="checkbox-custom checkbox-primary checkbox-lg contacts-select-all">
                                          <input type="checkbox" class="contacts-checkbox selectable-all" id="select_all">
                                          <label for="select_all"></label>
                                          </span>
                                       </th>
                                       <th class="cell-300" scope="col"><i class="icon fa-list-ol" aria-hidden="true"></i><b> Reservation No.</b></th>
                                       <th class="cell-300" scope="col"><i class="icon fa-clock-o" aria-hidden="true"></i><b> Reservation Date</b></th>
                                       <th class="cell-300" scope="col"><i class="icon fa-group" aria-hidden="true"></i><b> Guest Name</b></th>
                                       <th class="cell-300" scope="col"><i class="icon fa-bed" aria-hidden="true"></i><b> Room Type</b></th>
                                       <th class="cell-300" scope="col"><i class="icon fa-calendar-check-o" aria-hidden="true"></i><b> Check in</b></th>
                                       <th class="cell-300" scope="col"><i class="icon fa-calendar-minus-o" aria-hidden="true"></i><b> Check out</b></th>
                                       <th class="cell-300" scope="col"><i class="icon fa-handshake-o" aria-hidden="true"></i><b> Booking Type</b></th>
                                       <th class="cell-300" scope="col"><i class="icon fa-hourglass-1" aria-hidden="true"></i><b> Payment Status</b></th>
                                       <th class="cell-300" scope="col"><i class="icon fa-eye" aria-hidden="true"></i><b> Action</b></th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr data-url="../../panel.tpl" data-toggle="slidePanel" class="animation-fade" style="animation-fill-mode: backwards; animation-duration: 250ms; animation-delay: 50ms;">
                                       <td class="pre-cell"></td>
                                       <td class="cell-30">
                                          <span class="checkbox-custom checkbox-primary checkbox-lg">
                                          <input type="checkbox" class="contacts-checkbox selectable-item" id="contacts_1">
                                          <label for="contacts_1"></label>
                                          </span>
                                       </td>
                                       <td class="cell-300">6790-1593755446</td>
                                       <td class="cell-300">2020-07-03 05:50:46</td>
                                       <td ><a class="avatar" href="javascript:void(0)"><img class="img-fluid" src="../../assets/portraits/1.jpg" alt="Herman Beck" style="width: 30px;"></a>Herman</td>
                                       <td class="cell-300"> Standard Room - 2 Double Beds</td>
                                       <td class="cell-300"> 2020-07-03 05:50:46</td>
                                       <td class="cell-300"> 2020-07-10 05:50:46</td>
                                       <td class="cell-300">
                                          <div class="time"><button type="button" class="btn btn-sm btn-default" style="width: 100%"><i class="icon fa-wifi" aria-hidden="true"></i>
                                             <span class="text">ONLINE</span></button>
                                          </div>
                                       </td>
                                       <td class="cell-300">
                                          <div class="time"><button type="button" class="btn btn-sm btn-success" style="width: 100%"><i class="icon fa-eye" aria-hidden="true"></i>
                                             <span class="text">SUCCESS</span></button>
                                          </div>
                                       </td>
                                       <td class="cell-300">
                                          <div class="time"><button type="button" class="btn btn-sm btn-primary" style="width: 100%"><i class="icon fa-eye" aria-hidden="true"></i>
                                             <span class="text">VIEW</span></button>
                                          </div>
                                       </td>
                                    </tr>
                                    <tr data-url="../../panel.tpl" data-toggle="slidePanel" class="animation-fade" style="animation-fill-mode: backwards; animation-duration: 250ms; animation-delay: 50ms;">
                                       <td class="pre-cell"></td>
                                       <td class="cell-30">
                                          <span class="checkbox-custom checkbox-primary checkbox-lg">
                                          <input type="checkbox" class="contacts-checkbox selectable-item" id="contacts_1">
                                          <label for="contacts_1"></label>
                                          </span>
                                       </td>
                                       <td class="cell-300">6790-1593755446</td>
                                       <td class="cell-300">2020-07-03 05:50:46</td>
                                       <td ><a class="avatar" href="javascript:void(0)"><img class="img-fluid" src="../../assets/portraits/1.jpg" alt="Herman Beck" style="width: 30px;"></a>Herman</td>
                                       <td class="cell-300"> Standard Room - 2 Double Beds</td>
                                       <td class="cell-300"> 2020-07-03 05:50:46</td>
                                       <td class="cell-300"> 2020-07-10 05:50:46</td>
                                       <td class="cell-300">
                                          <div class="time"><button type="button" class="btn btn-sm btn-default" style="width: 100%"><i class="icon fa-wifi" aria-hidden="true"></i>
                                             <span class="text">ONLINE</span></button>
                                          </div>
                                       </td>
                                       <td class="cell-300">
                                          <div class="time"><button type="button" class="btn btn-sm btn-success" style="width: 100%"><i class="icon fa-eye" aria-hidden="true"></i>
                                             <span class="text">SUCCESS</span></button>
                                          </div>
                                       </td>
                                       <td class="cell-300">
                                          <div class="time"><button type="button" class="btn btn-sm btn-primary" style="width: 100%"><i class="icon fa-eye" aria-hidden="true"></i>
                                             <span class="text">VIEW</span></button>
                                          </div>
                                       </td>
                                    </tr>
                                    <tr data-url="../../panel.tpl" data-toggle="slidePanel" class="animation-fade" style="animation-fill-mode: backwards; animation-duration: 250ms; animation-delay: 50ms;">
                                       <td class="pre-cell"></td>
                                       <td class="cell-30">
                                          <span class="checkbox-custom checkbox-primary checkbox-lg">
                                          <input type="checkbox" class="contacts-checkbox selectable-item" id="contacts_1">
                                          <label for="contacts_1"></label>
                                          </span>
                                       </td>
                                       <td class="cell-300">6790-1593755446</td>
                                       <td class="cell-300">2020-07-03 05:50:46</td>
                                       <td ><a class="avatar" href="javascript:void(0)"><img class="img-fluid" src="../../assets/portraits/1.jpg" alt="Herman Beck" style="width: 30px;"></a>Herman</td>
                                       <td class="cell-300"> Standard Room - 2 Double Beds</td>
                                       <td class="cell-300"> 2020-07-03 05:50:46</td>
                                       <td class="cell-300"> 2020-07-10 05:50:46</td>
                                       <td class="cell-300">
                                          <div class="time"><button type="button" class="btn btn-sm btn-default" style="width: 100%"><i class="icon fa-handshake-o" aria-hidden="true"></i>
                                             <span class="text">OFFLINE</span></button>
                                          </div>
                                       </td>
                                       <td class="cell-300">
                                          <div class="time"><button type="button" class="btn btn-sm btn-success" style="width: 100%"><i class="icon fa-eye" aria-hidden="true"></i>
                                             <span class="text">SUCCESS</span></button>
                                          </div>
                                       </td>
                                       <td class="cell-300">
                                          <div class="time"><button type="button" class="btn btn-sm btn-primary" style="width: 100%"><i class="icon fa-eye" aria-hidden="true"></i>
                                             <span class="text">VIEW</span></button>
                                          </div>
                                       </td>
                                    </tr>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                        <!-- Reservation Listing Ends Here -->
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Banquet Chart Start Here -->
      <div class="tab-pane animation-fade" id="forum-activity" role="tabpanel">
         <!-- 12333 -->
         <div class="row" data-plugin="matchHeight" data-by-row="true" style="padding: 20px;">
            <div class="col-xxl-3 col-xl-6 col-md-12" style="height: 526px;">
               <!-- Panel Pie -->
               <div class="card card-shadow" id="chartPie">
                  <div class="card-block p-0 p-30 h-full">
                     <div class="font-size-20 text-center" style="height:calc(100% - 350px);">
                        Event Vs Leads
                        <div class="dropdown vertical-align-bottom font-size-20">
                           <div class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" style="cursor: pointer;" role="complementary">
                              Report
                           </div>
                           <div class="dropdown-menu" role="menu">
                              <a class="dropdown-item" href="javascript:void(0)" role="menuitem">Weekly</a>
                              <a class="dropdown-item" href="javascript:void(0)" role="menuitem">Monthly</a>
                              <a class="dropdown-item" href="javascript:void(0)" role="menuitem">Yearly</a>
                           </div>
                        </div>
                     </div>
                     <div class="ct-chart h-250">
                        <svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="100%" class="ct-chart-donut" style="width: 100%; height: 100%;">
                           <g class="ct-series ct-series-a">
                              <path d="M282.162,192.595A115,115,0,0,0,189.125,10" class="ct-slice-donut" ct:value="35" style="stroke-width: 10px;"></path>
                           </g>
                           <g class="ct-series ct-series-b">
                              <path d="M153.588,234.371A115,115,0,0,0,282.397,192.27" class="ct-slice-donut" ct:value="20" style="stroke-width: 10px;"></path>
                           </g>
                           <g class="ct-series ct-series-c">
                              <path d="M189.125,10A115,115,0,0,0,153.97,234.495" class="ct-slice-donut" ct:value="45" style="stroke-width: 10px;"></path>
                           </g>
                        </svg>
                     </div>
                     <div class="row no-space mt-40">
                        <div class="col-4">
                           <div class="counter">
                              <div class="counter-number-group font-size-14">
                                 <span class="counter-number-related">
                                 <span class="icon wb-medium-point purple-600"></span>
                                 </span>
                                 <span class="counter-number font-size-24">35%</span>
                                 <span class="counter-number-related font-size-14">42</span>
                              </div>
                              <div class="counter-label text-uppercase">Events</div>
                           </div>
                        </div>
                        <div class="col-4">
                           <div class="counter">
                              <div class="counter-number-group font-size-14">
                                 <span class="counter-number-related">
                                 <span class="icon wb-medium-point red-600"></span>
                                 </span>
                                 <span class="counter-number font-size-24">20%</span>
                                 <span class="counter-number-related font-size-14">24</span>
                              </div>
                              <div class="counter-label text-uppercase">Leads</div>
                           </div>
                        </div>
                        <div class="col-4">
                           <div class="counter text-center">
                              <div class="counter-number-group font-size-14">
                                 <span class="counter-number-related">
                                 <span class="icon wb-medium-point blue-600"></span>
                                 </span>
                                 <span class="counter-number font-size-24">45%</span>
                                 <span class="counter-number-related font-size-14">54</span>
                              </div>
                              <div class="counter-label text-uppercase">Confirmed</div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- End Panel Pie -->
            </div>
            <div class="col-xxl-3 col-xl-6 col-md-12" style="height: 526px;">
               <div class="row">
                  <div class="col-xl-12 col-md-6">
                     <!-- Panel Bar Simple -->
                     <div class="card card-shadow" id="chartBarSimple">
                        <div class="card-block p-0 p-30">
                           <div class="counter text-left">
                              <span class="counter-number">$ 36500</span>
                              <div class="counter-label text-uppercase mb-20">Events Confirmed</div>
                           </div>
                           <div class="ct-chart h-100">
                              <svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="100%" class="ct-chart-bar" style="width: 100%; height: 100%;">
                                 <g class="ct-grids"></g>
                                 <g>
                                    <g class="ct-series ct-series-a">
                                       <line x1="9.005952380952381" x2="9.005952380952381" y1="100" y2="33.33333333333333" class="ct-bar" ct:value="6"></line>
                                       <line x1="27.017857142857146" x2="27.017857142857146" y1="100" y2="66.66666666666666" class="ct-bar" ct:value="3"></line>
                                       <line x1="45.029761904761905" x2="45.029761904761905" y1="100" y2="77.77777777777777" class="ct-bar" ct:value="2"></line>
                                       <line x1="63.04166666666667" x2="63.04166666666667" y1="100" y2="44.44444444444444" class="ct-bar" ct:value="5"></line>
                                       <line x1="81.05357142857143" x2="81.05357142857143" y1="100" y2="55.55555555555556" class="ct-bar" ct:value="4"></line>
                                       <line x1="99.06547619047619" x2="99.06547619047619" y1="100" y2="22.22222222222223" class="ct-bar" ct:value="7"></line>
                                       <line x1="117.07738095238096" x2="117.07738095238096" y1="100" y2="44.44444444444444" class="ct-bar" ct:value="5"></line>
                                       <line x1="135.08928571428572" x2="135.08928571428572" y1="100" y2="0" class="ct-bar" ct:value="9"></line>
                                       <line x1="153.10119047619048" x2="153.10119047619048" y1="100" y2="55.55555555555556" class="ct-bar" ct:value="4"></line>
                                       <line x1="171.11309523809524" x2="171.11309523809524" y1="100" y2="44.44444444444444" class="ct-bar" ct:value="5"></line>
                                       <line x1="189.125" x2="189.125" y1="100" y2="55.55555555555556" class="ct-bar" ct:value="4"></line>
                                       <line x1="207.13690476190476" x2="207.13690476190476" y1="100" y2="0" class="ct-bar" ct:value="9"></line>
                                       <line x1="225.14880952380955" x2="225.14880952380955" y1="100" y2="11.111111111111114" class="ct-bar" ct:value="8"></line>
                                       <line x1="243.1607142857143" x2="243.1607142857143" y1="100" y2="66.66666666666666" class="ct-bar" ct:value="3"></line>
                                       <line x1="261.1726190476191" x2="261.1726190476191" y1="100" y2="33.33333333333333" class="ct-bar" ct:value="6"></line>
                                       <line x1="279.18452380952385" x2="279.18452380952385" y1="100" y2="55.55555555555556" class="ct-bar" ct:value="4"></line>
                                       <line x1="297.1964285714286" x2="297.1964285714286" y1="100" y2="11.111111111111114" class="ct-bar" ct:value="8"></line>
                                       <line x1="315.20833333333337" x2="315.20833333333337" y1="100" y2="33.33333333333333" class="ct-bar" ct:value="6"></line>
                                       <line x1="333.22023809523813" x2="333.22023809523813" y1="100" y2="11.111111111111114" class="ct-bar" ct:value="8"></line>
                                       <line x1="351.2321428571429" x2="351.2321428571429" y1="100" y2="33.33333333333333" class="ct-bar" ct:value="6"></line>
                                       <line x1="369.24404761904765" x2="369.24404761904765" y1="100" y2="55.55555555555556" class="ct-bar" ct:value="4"></line>
                                    </g>
                                 </g>
                                 <g class="ct-labels"></g>
                              </svg>
                           </div>
                        </div>
                     </div>
                     <!-- End Panel Bar Simple -->
                  </div>
                  <div class="col-xl-12 col-md-6">
                     <!-- Panel Linearea Simple -->
                     <div class="card card-shadow" id="chartLineareaSimple">
                        <div class="card-block p-0 p-30">
                           <div class="counter text-left">
                              <span class="counter-number">$ 45650</span>
                              <div class="counter-label text-uppercase mb-20">Revenue This Month</div>
                           </div>
                           <div class="ct-chart h-100">
                              <svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="100%" class="ct-chart-line" style="width: 100%; height: 100%;">
                                 <g class="ct-grids"></g>
                                 <g>
                                    <g class="ct-series ct-series-a">
                                       <path d="M0,100L0,88.889L19.908,33.333L39.816,55.556L59.724,0L79.632,88.889L99.539,33.333L119.447,55.556L139.355,0L159.263,11.111L179.171,33.333L199.079,44.444L218.987,88.889L238.895,55.556L258.803,33.333L278.711,55.556L298.618,0L318.526,88.889L338.434,66.667L358.342,88.889L378.25,0L378.25,100Z" class="ct-area"></path>
                                       <path d="M0,88.889L19.908,33.333L39.816,55.556L59.724,0L79.632,88.889L99.539,33.333L119.447,55.556L139.355,0L159.263,11.111L179.171,33.333L199.079,44.444L218.987,88.889L238.895,55.556L258.803,33.333L278.711,55.556L298.618,0L318.526,88.889L338.434,66.667L358.342,88.889L378.25,0" class="ct-line"></path>
                                    </g>
                                 </g>
                                 <g class="ct-labels"></g>
                              </svg>
                           </div>
                        </div>
                     </div>
                     <!-- End Panel Linearea Simple -->
                  </div>
               </div>
            </div>
            <div class="col-xxl-6 col-md-12" style="height: 526px;">
               <!-- Panel Bar Stacked -->
               <div class="card card-shadow" id="chartBarStacked">
                  <div class="card-block p-0 p-30 h-full">
                     <div class="chart-header pb-10" style="height:calc(100% - 350px);">
                        <div class="font-size-20 inline-block">
                           Forecast Revenue 
                           <div class="dropdown vertical-align-bottom ml-3 font-size-20">
                              <div class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" style="cursor: pointer;" role="complementary">
                                 Report
                              </div>
                              <div class="dropdown-menu" role="menu">
                                 <a class="dropdown-item" href="javascript:void(0)" role="menuitem">Weekly</a>
                                 <a class="dropdown-item" href="javascript:void(0)" role="menuitem">Monthly</a>
                                 <a class="dropdown-item" href="javascript:void(0)" role="menuitem">Yearly</a>
                              </div>
                           </div>
                        </div>
                        <div class="card-header-actions">
                           <ul class="list-inline">
                              <li class="list-inline-item">
                                 <span class="icon wb-medium-point blue-600 mr-5"></span>Prospect
                              </li>
                              <li class="list-inline-item">
                                 <span class="icon wb-medium-point purple-600 mr-5"></span>Tentative
                              </li>
                              <li class="list-inline-item">
                                 <span class="icon wb-medium-point blue-grey-300 mr-5"></span>Definite
                              </li>
                           </ul>
                        </div>
                     </div>
                     <div class="ct-chart h-350">
                        <svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="100%" class="ct-chart-bar" style="width: 100%; height: 100%;">
                           <g class="ct-grids">
                              <line y1="320" y2="320" x1="30" x2="846.5" class="ct-grid ct-vertical"></line>
                              <line y1="283.3333333333333" y2="283.3333333333333" x1="30" x2="846.5" class="ct-grid ct-vertical"></line>
                              <line y1="246.66666666666669" y2="246.66666666666669" x1="30" x2="846.5" class="ct-grid ct-vertical"></line>
                              <line y1="210" y2="210" x1="30" x2="846.5" class="ct-grid ct-vertical"></line>
                              <line y1="173.33333333333334" y2="173.33333333333334" x1="30" x2="846.5" class="ct-grid ct-vertical"></line>
                              <line y1="136.66666666666666" y2="136.66666666666666" x1="30" x2="846.5" class="ct-grid ct-vertical"></line>
                              <line y1="100" y2="100" x1="30" x2="846.5" class="ct-grid ct-vertical"></line>
                              <line y1="63.333333333333314" y2="63.333333333333314" x1="30" x2="846.5" class="ct-grid ct-vertical"></line>
                              <line y1="26.666666666666686" y2="26.666666666666686" x1="30" x2="846.5" class="ct-grid ct-vertical"></line>
                              <line y1="-10" y2="-10" x1="30" x2="846.5" class="ct-grid ct-vertical"></line>
                           </g>
                           <g>
                              <g class="ct-series ct-series-a">
                                 <line x1="64.02083333333334" x2="64.02083333333334" y1="320" y2="279.6666666666667" class="ct-bar" ct:value="11"></line>
                                 <line x1="132.0625" x2="132.0625" y1="320" y2="250.33333333333331" class="ct-bar" ct:value="19"></line>
                                 <line x1="200.10416666666669" x2="200.10416666666669" y1="320" y2="257.6666666666667" class="ct-bar" ct:value="17"></line>
                                 <line x1="268.1458333333333" x2="268.1458333333333" y1="320" y2="272.3333333333333" class="ct-bar" ct:value="13"></line>
                                 <line x1="336.1875" x2="336.1875" y1="320" y2="312.6666666666667" class="ct-bar" ct:value="2"></line>
                                 <line x1="404.2291666666667" x2="404.2291666666667" y1="320" y2="279.6666666666667" class="ct-bar" ct:value="11"></line>
                                 <line x1="472.2708333333333" x2="472.2708333333333" y1="320" y2="224.66666666666669" class="ct-bar" ct:value="26"></line>
                                 <line x1="540.3125" x2="540.3125" y1="320" y2="246.66666666666669" class="ct-bar" ct:value="20"></line>
                                 <line x1="608.3541666666667" x2="608.3541666666667" y1="320" y2="221" class="ct-bar" ct:value="27"></line>
                                 <line x1="676.3958333333334" x2="676.3958333333334" y1="320" y2="301.6666666666667" class="ct-bar" ct:value="5"></line>
                                 <line x1="744.4375000000001" x2="744.4375000000001" y1="320" y2="239.33333333333331" class="ct-bar" ct:value="22"></line>
                                 <line x1="812.4791666666667" x2="812.4791666666667" y1="320" y2="305.3333333333333" class="ct-bar" ct:value="4"></line>
                              </g>
                              <g class="ct-series ct-series-b">
                                 <line x1="64.02083333333334" x2="64.02083333333334" y1="279.6666666666667" y2="257.6666666666667" class="ct-bar" ct:value="6"></line>
                                 <line x1="132.0625" x2="132.0625" y1="250.33333333333331" y2="184.33333333333331" class="ct-bar" ct:value="18"></line>
                                 <line x1="200.10416666666669" x2="200.10416666666669" y1="257.6666666666667" y2="232" class="ct-bar" ct:value="7"></line>
                                 <line x1="268.1458333333333" x2="268.1458333333333" y1="272.3333333333333" y2="239.33333333333331" class="ct-bar" ct:value="9"></line>
                                 <line x1="336.1875" x2="336.1875" y1="312.6666666666667" y2="217.33333333333337" class="ct-bar" ct:value="26"></line>
                                 <line x1="404.2291666666667" x2="404.2291666666667" y1="279.6666666666667" y2="191.66666666666669" class="ct-bar" ct:value="24"></line>
                                 <line x1="472.2708333333333" x2="472.2708333333333" y1="224.66666666666669" y2="213.66666666666669" class="ct-bar" ct:value="3"></line>
                                 <line x1="540.3125" x2="540.3125" y1="246.66666666666669" y2="180.66666666666669" class="ct-bar" ct:value="18"></line>
                                 <line x1="608.3541666666667" x2="608.3541666666667" y1="221" y2="118.33333333333331" class="ct-bar" ct:value="28"></line>
                                 <line x1="676.3958333333334" x2="676.3958333333334" y1="301.6666666666667" y2="224.66666666666669" class="ct-bar" ct:value="21"></line>
                                 <line x1="744.4375000000001" x2="744.4375000000001" y1="239.33333333333331" y2="169.66666666666663" class="ct-bar" ct:value="19"></line>
                                 <line x1="812.4791666666667" x2="812.4791666666667" y1="305.3333333333333" y2="261.3333333333333" class="ct-bar" ct:value="12"></line>
                              </g>
                              <g class="ct-series ct-series-c">
                                 <line x1="64.02083333333334" x2="64.02083333333334" y1="257.6666666666667" y2="224.66666666666669" class="ct-bar" ct:value="9"></line>
                                 <line x1="132.0625" x2="132.0625" y1="184.33333333333331" y2="147.66666666666663" class="ct-bar" ct:value="10"></line>
                                 <line x1="200.10416666666669" x2="200.10416666666669" y1="232" y2="151.33333333333331" class="ct-bar" ct:value="22"></line>
                                 <line x1="268.1458333333333" x2="268.1458333333333" y1="239.33333333333331" y2="188" class="ct-bar" ct:value="14"></line>
                                 <line x1="336.1875" x2="336.1875" y1="217.33333333333337" y2="133.00000000000006" class="ct-bar" ct:value="23"></line>
                                 <line x1="404.2291666666667" x2="404.2291666666667" y1="191.66666666666669" y2="122" class="ct-bar" ct:value="19"></line>
                                 <line x1="472.2708333333333" x2="472.2708333333333" y1="213.66666666666669" y2="158.66666666666669" class="ct-bar" ct:value="15"></line>
                                 <line x1="540.3125" x2="540.3125" y1="180.66666666666669" y2="89" class="ct-bar" ct:value="25"></line>
                                 <line x1="608.3541666666667" x2="608.3541666666667" y1="118.33333333333331" y2="15.666666666666629" class="ct-bar" ct:value="28"></line>
                                 <line x1="676.3958333333334" x2="676.3958333333334" y1="224.66666666666669" y2="147.66666666666669" class="ct-bar" ct:value="21"></line>
                                 <line x1="744.4375000000001" x2="744.4375000000001" y1="169.66666666666663" y2="107.33333333333331" class="ct-bar" ct:value="17"></line>
                                 <line x1="812.4791666666667" x2="812.4791666666667" y1="261.3333333333333" y2="199" class="ct-bar" ct:value="17"></line>
                              </g>
                           </g>
                           <g class="ct-labels">
                              <foreignObject style="overflow: visible;" x="30" y="325" width="68.04166666666667" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 68px; height: 20px;">A</span></foreignObject>
                              <foreignObject style="overflow: visible;" x="98.04166666666667" y="325" width="68.04166666666667" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 68px; height: 20px;">B</span></foreignObject>
                              <foreignObject style="overflow: visible;" x="166.08333333333334" y="325" width="68.04166666666666" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 68px; height: 20px;">C</span></foreignObject>
                              <foreignObject style="overflow: visible;" x="234.125" y="325" width="68.04166666666669" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 68px; height: 20px;">D</span></foreignObject>
                              <foreignObject style="overflow: visible;" x="302.1666666666667" y="325" width="68.04166666666669" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 68px; height: 20px;">E</span></foreignObject>
                              <foreignObject style="overflow: visible;" x="370.20833333333337" y="325" width="68.04166666666663" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 68px; height: 20px;">F</span></foreignObject>
                              <foreignObject style="overflow: visible;" x="438.25" y="325" width="68.04166666666669" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 68px; height: 20px;">G</span></foreignObject>
                              <foreignObject style="overflow: visible;" x="506.2916666666667" y="325" width="68.04166666666669" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 68px; height: 20px;">H</span></foreignObject>
                              <foreignObject style="overflow: visible;" x="574.3333333333334" y="325" width="68.04166666666663" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 68px; height: 20px;">I</span></foreignObject>
                              <foreignObject style="overflow: visible;" x="642.375" y="325" width="68.04166666666674" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 68px; height: 20px;">K</span></foreignObject>
                              <foreignObject style="overflow: visible;" x="710.4166666666667" y="325" width="68.04166666666663" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 68px; height: 20px;">L</span></foreignObject>
                              <foreignObject style="overflow: visible;" x="778.4583333333334" y="325" width="68.04166666666663" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 68px; height: 20px;">M</span></foreignObject>
                              <foreignObject style="overflow: visible;" y="283.3333333333333" x="0" height="36.666666666666664" width="20"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 37px; width: 20px;">0</span></foreignObject>
                              <foreignObject style="overflow: visible;" y="246.66666666666666" x="0" height="36.666666666666664" width="20"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 37px; width: 20px;">10</span></foreignObject>
                              <foreignObject style="overflow: visible;" y="210" x="0" height="36.66666666666667" width="20"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 37px; width: 20px;">20</span></foreignObject>
                              <foreignObject style="overflow: visible;" y="173.33333333333334" x="0" height="36.66666666666666" width="20"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 37px; width: 20px;">30</span></foreignObject>
                              <foreignObject style="overflow: visible;" y="136.66666666666666" x="0" height="36.666666666666686" width="20"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 37px; width: 20px;">40</span></foreignObject>
                              <foreignObject style="overflow: visible;" y="100" x="0" height="36.66666666666666" width="20"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 37px; width: 20px;">50</span></foreignObject>
                              <foreignObject style="overflow: visible;" y="63.333333333333314" x="0" height="36.666666666666686" width="20"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 37px; width: 20px;">60</span></foreignObject>
                              <foreignObject style="overflow: visible;" y="26.666666666666686" x="0" height="36.66666666666663" width="20"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 37px; width: 20px;">70</span></foreignObject>
                              <foreignObject style="overflow: visible;" y="-10" x="0" height="36.666666666666686" width="20"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 37px; width: 20px;">80</span></foreignObject>
                              <foreignObject style="overflow: visible;" y="-40" x="0" height="30" width="20"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 30px; width: 20px;">90</span></foreignObject>
                           </g>
                        </svg>
                     </div>
                  </div>
               </div>
               <!-- End Panel Bar Stacked -->
            </div>
            <!-- 3 Activities Stacked -->
            <div class="page-content container-fluid" style="padding: 10px;">
               <div class="row" data-plugin="matchHeight" data-by-row="true">
                  <!-- Second Row -->
                  <!-- Personal -->
                  <div class="col-xxl-4 col-xl-6 col-lg-6" style="height: 700px;">
                     <div id="personalCompletedWidget" class="card card-shadow pb-20">
                        <div class="card-header card-header-transparent cover overlay">
                           <img class="cover-image" src="../../assets/photos/placeholder.png">
                           <div class="overlay-panel overlay-background vertical-align">
                              <div class="vertical-align-middle">
                                 <a class="avatar" href="javascript:void(0)">
                                 <img alt="" src="../../assets/portraits/4.jpg">
                                 </a>
                                 <div class="font-size-20 mt-10">MACHI</div>
                                 <div class="font-size-14">machidesign@163.com</div>
                              </div>
                           </div>
                        </div>
                        <div class="card-block">
                           <div class="row text-center mb-20">
                              <div class="col-6">
                                 <div class="counter">
                                    <div class="counter-label total-completed">TOP TARGET ACHIEVED</div>
                                    <div class="counter-number red-600">1,628</div>
                                 </div>
                              </div>
                              <div class="col-6">
                                 <div class="counter">
                                    <div class="counter-label">TOTAL DAYS</div>
                                    <div class="counter-number blue-600">17</div>
                                 </div>
                              </div>
                           </div>
                           <div class="table-responsive">
                              <table class="table">
                                 <caption style="padding-top: 20px;">TODAY STATISTIC</caption>
                                 <tbody>
                                    <tr>
                                       <td>
                                          Tasks Completed
                                       </td>
                                       <td>
                                          <div class="progress progress-xs mb-0">
                                             <div class="progress-bar progress-bar-info bg-blue-600" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                                             </div>
                                          </div>
                                       </td>
                                       <td>
                                          90%
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>
                                          Successful Leads
                                       </td>
                                       <td>
                                          <div class="progress progress-xs mb-0">
                                             <div class="progress-bar progress-bar-info bg-green-600" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100" style="width: 86%">
                                             </div>
                                          </div>
                                       </td>
                                       <td>
                                          86%
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>
                                          Events Completed
                                       </td>
                                       <td>
                                          <div class="progress progress-xs mb-0">
                                             <div class="progress-bar progress-bar-info bg-red-600" role="progressbar" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100" style="width: 68%">
                                             </div>
                                          </div>
                                       </td>
                                       <td>
                                          68%
                                       </td>
                                    </tr>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- End Personal -->
                  <!-- To Do List -->
                  <div class="col-xxl-4 col-xl-6 col-lg-6" style="height: 700px;">
                     <div id="toDoListWidget" class="card card-shadow card-lg pb-20">
                        <div class="card-header card-header-transparent">
                           <div class="card-header-actions">
                              <a id="addNewItemBtn" href="javascript:void(0)" class="add-item-toggle">
                              <i class="icon wb-plus" aria-hidden="true" style="margin-right: -30px;"></i>
                              </a>
                           </div>
                           <h4 class="card-title">TO DO LIST</h4>
                        </div>
                        <ul class="list-group h-500 scrollable is-enabled scrollable-vertical" data-plugin="scrollable" style="position: relative;">
                           <div class="scrollable-container" style="height: 500px;">
                              <div data-role="content" class="scrollable-content" >
                                 <li class="list-group-item" >
                                    <div class="checkbox-custom checkbox-success checkbox-lg">
                                       <input type="checkbox" name="checkbox" checked="checked">
                                       <label class="item-title">Edit meeting record1</label>
                                    </div>
                                    <div class="item-due-date">
                                       <span>Tue,aug 25</span>
                                    </div>
                                    <ul class="item-members">
                                       <li>
                                          <img class="avatar avatar-sm" src="../../assets/portraits/3.jpg">
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
                                          <img class="avatar avatar-sm" src="../../assets/portraits/1.jpg">
                                          <button class="btn btn-sm btn-icon btn-default btn-outline btn-round">
                                          <i class="icon wb-pencil" aria-hidden="true"></i>
                                          </button>
                                       </li>
                                       <li>
                                          <img class="avatar avatar-sm" src="../../assets/portraits/5.jpg">
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
                                          <img class="avatar avatar-sm" src="../../assets/portraits/4.jpg">
                                          <button class="btn btn-sm btn-icon btn-default btn-outline btn-round">
                                          <i class="icon wb-pencil" aria-hidden="true"></i>
                                          </button>
                                       </li>
                                       <li>
                                          <img class="avatar avatar-sm" src="../../assets/portraits/6.jpg">
                                          <button class="btn btn-sm btn-icon btn-default btn-outline btn-round">
                                          <i class="icon wb-pencil" aria-hidden="true"></i>
                                          </button>
                                       </li>
                                       <li>
                                          <img class="avatar avatar-sm" src="../../assets/portraits/7.jpg">
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
                                          <img class="avatar avatar-sm" src="../../assets/portraits/3.jpg">
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
                                          <img class="avatar avatar-sm" src="../../assets/portraits/1.jpg">
                                          <button class="btn btn-sm btn-icon btn-default btn-outline btn-round">
                                          <i class="icon wb-pencil" aria-hidden="true"></i>
                                          </button>
                                       </li>
                                       <li>
                                          <img class="avatar avatar-sm" src="../../assets/portraits/5.jpg">
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
                                          <img class="avatar avatar-sm" src="../../assets/portraits/4.jpg">
                                          <button class="btn btn-sm btn-icon btn-default btn-outline btn-round">
                                          <i class="icon wb-pencil" aria-hidden="true"></i>
                                          </button>
                                       </li>
                                       <li>
                                          <img class="avatar avatar-sm" src="../../assets/portraits/6.jpg">
                                          <button class="btn btn-sm btn-icon btn-default btn-outline btn-round">
                                          <i class="icon wb-pencil" aria-hidden="true"></i>
                                          </button>
                                       </li>
                                       <li>
                                          <img class="avatar avatar-sm" src="../../assets/portraits/7.jpg">
                                          <button class="btn btn-sm btn-icon btn-default btn-outline btn-round">
                                          <i class="icon wb-pencil" aria-hidden="true"></i>
                                          </button>
                                       </li>
                                    </ul>
                                 </li>
                              </div>
                           </div>
                           <div class="scrollable-bar scrollable-bar-vertical scrollable-bar-hide" draggable="false">
                              <div class="scrollable-bar-handle" style="height: 248.485px; transform: translate3d(0px, 0px, 0px);"></div>
                           </div>
                        </ul>
                     </div>
                  </div>
                  <!-- End To Do List -->
                  <!-- Recent Activity -->
                  <div class="col-xxl-4" style="height: 700px;">
                     <div id="recentActivityWidget" class="card card-shadow card-lg pb-20">
                        <div class="card-header card-header-transparent pb-10">
                           <div class="card-header-actions">
                              <span class="badge badge-default badge-round" style="margin-right: -30px;">VIEW ALL</span>
                           </div>
                           <h4 class="card-title">RECENT ACTIVITY</h4>
                        </div>
                        <ul class="timeline timeline-icon">
                           <li class="timeline-reverse timeline-item">
                              <div class="timeline-content-wrap">
                                 <div class="timeline-dot bg-green-600">
                                    <i class="icon wb-chat" aria-hidden="true"></i>
                                 </div>
                                 <div class="timeline-content">
                                    <div class="title">
                                       <span class="authors">Victor Erixon</span> assigned to a task
                                    </div>
                                    <div class="metas">
                                       active 14 minutes ago
                                    </div>
                                    <ul class="members">
                                       <li>
                                          <img class="avatar avatar-sm" src="../../assets/portraits/7.jpg">
                                       </li>
                                       <li>
                                          <img class="avatar avatar-sm" src="../../assets/portraits/6.jpg">
                                       </li>
                                       <li>
                                          <img class="avatar avatar-sm" src="../../assets/portraits/8.jpg">
                                       </li>
                                    </ul>
                                 </div>
                              </div>
                           </li>
                           <li class="timeline-reverse timeline-item">
                              <div class="timeline-content-wrap">
                                 <div class="timeline-dot bg-blue-600">
                                    <i class="icon wb-image" aria-hidden="true"></i>
                                 </div>
                                 <div class="timeline-content">
                                    <div class="title">
                                       <span class="authors">Alex Bender</span>uploaded 3 photos
                                    </div>
                                    <div class="metas">
                                       active 2 hours ago
                                    </div>
                                    <ul class="photos">
                                       <li class="cover">
                                          <img class="cover-image" src="../../assets/photos/placeholder.png">
                                       </li>
                                       <li class="cover">
                                          <img class="cover-image" src="../../assets/photos/placeholder.png">
                                       </li>
                                       <li class="cover">
                                          <img class="cover-image" src="../../assets/photos/placeholder.png">
                                       </li>
                                    </ul>
                                 </div>
                              </div>
                           </li>
                           <li class="timeline-reverse timeline-item">
                              <div class="timeline-content-wrap">
                                 <div class="timeline-dot bg-cyan-600">
                                    <i class="icon wb-file" aria-hidden="true"></i>
                                 </div>
                                 <div class="timeline-content">
                                    <div class="title">
                                       <span class="authors">Jeff Erixon</span>
                                       invite you to attend topic discussion in
                                       <span class="room-number">B205</span>
                                       classroom
                                    </div>
                                    <div class="metas">
                                       active 4 hours ago
                                    </div>
                                    <div class="tags">
                                       As user experience designers we have to find the sweet spot
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li class="timeline-reverse timeline-item">
                              <div class="timeline-content-wrap">
                                 <div class="timeline-dot bg-orange-600">
                                    <i class="icon wb-map" aria-hidden="true"></i>
                                 </div>
                                 <div class="timeline-content">
                                    <div class="title">
                                       <span class="authors">Jeff Erixon</span>
                                       invite you to attend topic discussion in
                                       <span class="room-number">B205</span>
                                       classroom
                                    </div>
                                    <div class="metas">
                                       active 3 hours ago
                                    </div>
                                    <ul class="operates">
                                       <li>
                                          <button class="btn btn-outline btn-success btn-round">Accept</button>
                                       </li>
                                       <li>
                                          <button class="btn btn-outline btn-danger btn-round">Refuse</button>
                                       </li>
                                    </ul>
                                 </div>
                              </div>
                           </li>
                        </ul>
                     </div>
                  </div>
                  <!-- End Recent Activity -->
                  <!-- End Second Row -->
               </div>
            </div>
            <div style="width: 100%; padding: 25px;">
               <div class="row" data-plugin="matchHeight" data-by-row="true">
                  <div class="col-xl-12 col-lg-12" style="height: 422px; background-color: #fff;">
                     <div>
                        <div style="padding-top: 5px;">
                           <h4>Upcoming Events of the Week</h4>
                        </div>
                     </div>
                     <table class="table is-indent" data-plugin="animateList" data-animate="fade" data-child="tr" data-selectable="selectable">
                        <thead>
                           <tr class="animation-fade" style="animation-fill-mode: backwards; animation-duration: 250ms; animation-delay: 0ms; background-color: #efeeef;">
                              <th class="cell-300" scope="col"><i class="icon fa-clock-o" aria-hidden="true"></i><b> Event Date</b></th>
                              <th class="cell-300" scope="col"><i class="icon fa-group" aria-hidden="true"></i><b> Client Name</b></th>
                              <th class="cell-300" scope="col"><i class="icon fa-birthday-cake" aria-hidden="true"></i><b> Event Name</b></th>
                              <th class="cell-300" scope="col"><i class="icon fa-building" aria-hidden="true"></i><b> Location</b></th>
                              <th class="cell-300" scope="col"><i class="icon fa-user-circle-o" aria-hidden="true"></i><b> Owner</b></th>
                              <th class="cell-30" scope="col"><i class="icon fa-eye" aria-hidden="true"></i><b> Action</b></th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr data-url="../../panel.tpl" data-toggle="slidePanel" class="animation-fade" style="animation-fill-mode: backwards; animation-duration: 250ms; animation-delay: 50ms;">
                              <td class="cell-300">2020-07-04 05:50:46</td>
                              <td class="cell-300"><a class="avatar" href="javascript:void(0)">
                                 <img class="img-fluid" src="../../assets/portraits/2.jpg" alt="Herman Beck" style="width: 30px;"></a>Anna Strong
                              </td>
                              <td class="cell-300">Odeh's Wedding - W_Function_18092019125238</td>
                              <td class="cell-300">Banquet Room 1</td>
                              <td class="cell-300"><a class="avatar" href="javascript:void(0)">
                                 <img class="img-fluid" src="../../assets/portraits/1.jpg" alt="Herman Beck" style="width: 30px;"></a>David Felming
                              </td>
                              <td class="cell-300">
                                 <div class="time"><button type="button" class="btn btn-sm btn-primary" style="width: 100%">
                                    <i class="icon fa-eye" aria-hidden="true"></i><span class="text">VIEW</span></button>
                                 </div>
                              </td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
         <p></p>
         <p></p>
         <p></p>
      </div>
      <div>
      </div>
      <!-- Banquet Chart End Here -->
      <!-- POs Chart Start Here -->
      <div class="tab-pane animation-fade" id="forum-answer" role="tabpanel">
         <div>
            <!-- abc23444 -->
            <div class="page-content container-fluid" style="padding: 20px;">
               <div class="row" data-plugin="matchHeight" data-by-row="true">
                  <div class="col-xxl-3" style="height: 529px;">
                     <div class="row h-full">
                        <div class="col-xxl-12 col-lg-6 h-p50 h-only-lg-p100 h-only-xl-p100">
                           <!-- Panel Overall Sales -->
                           <div class="card card-shadow card-inverse bg-blue-600 white">
                              <div class="card-block p-30">
                                 <div class="counter counter-lg counter-inverse text-left">
                                    <div class="counter-label mb-20">
                                       <div>OVERALL SALES</div>
                                       <div>Total Overall Sales this Month</div>
                                    </div>
                                    <div class="counter-number-group mb-15">
                                       <span class="counter-number-related">$</span>
                                       <span class="counter-number">14,000</span>
                                    </div>
                                    <div class="counter-label">
                                       <div class="progress progress-xs mb-10 bg-blue-800">
                                          <div class="progress-bar progress-bar-info bg-white" style="width: 42%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="42" role="progressbar">
                                             <span class="sr-only">42%</span>
                                          </div>
                                       </div>
                                       <div class="counter counter-sm text-left">
                                          <div class="counter-number-group">
                                             <span class="counter-number font-size-14">42%</span>
                                             <span class="counter-number-related font-size-14">HIGHER THAN LAST MONTH</span>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <!-- End Panel Overall Sales -->
                        </div>
                        <div class="col-xxl-12 col-lg-6 h-p50 h-only-lg-p100 h-only-xl-p100">
                           <!-- Panel Today's Sales -->
                           <div class="card card-shadow card-inverse bg-red-600 white">
                              <div class="card-block p-30">
                                 <div class="counter counter-lg counter-inverse text-left">
                                    <div class="counter-label mb-20">
                                       <div>TOTAL EXPENSES</div>
                                       <div>Total Overall Expenses this Month</div>
                                    </div>
                                    <div class="counter-number-group mb-10">
                                       <span class="counter-number-related">$</span>
                                       <span class="counter-number">41,160</span>
                                    </div>
                                    <div class="counter-label">
                                       <div class="progress progress-xs mb-10 bg-red-800">
                                          <div class="progress-bar progress-bar-info bg-white" style="width: 70%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="70" role="progressbar">
                                             <span class="sr-only">70%</span>
                                          </div>
                                       </div>
                                       <div class="counter counter-sm text-left">
                                          <div class="counter-number-group">
                                             <span class="counter-number font-size-14">70%</span>
                                             <span class="counter-number-related font-size-14">HIGHER THAN LAST MONTH</span>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <!-- End Panel Today's Sales -->
                        </div>
                     </div>
                  </div>
                  <div class="col-xxl-6 col-xl-8" style="height: 529px;">
                     <!-- Panel Traffic -->
                     <div class="card card-shadow example-responsive" id="widgetLinearea">
                        <div class="card-block p-30" style="min-width:480px;">
                           <div class="row pb-20" style="height:calc(100% - 322px);">
                              <div class="col-md-8 col-sm-6">
                                 <div class="blue-grey-700">SALES CURRENT WEEK</div>
                              </div>
                              <div class="col-md-4 col-sm-6">
                                 <div class="row">
                                    <div class="col-sm-6">
                                       <div class="counter counter-md">
                                          <div class="counter-number-group text-nowrap">
                                             <span class="counter-number">76</span>
                                             <span class="counter-number-related">%</span>
                                          </div>
                                          <div class="counter-label blue-grey-400">BANQUETS PACKAGE1</div>
                                       </div>
                                    </div>
                                    <div class="col-sm-6">
                                       <div class="counter counter-md">
                                          <div class="counter-number-group text-nowrap">
                                             <span class="counter-number">24</span>
                                             <span class="counter-number-related">%</span>
                                          </div>
                                          <div class="counter-label blue-grey-400">BANQUETS PACKAGE2</div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="ct-chart mb-30" style="height:270px;">
                              <svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="100%" class="ct-chart-line" style="width: 100%; height: 100%;">
                                 <g class="ct-grids">
                                    <line y1="240" y2="240" x1="40" x2="836.5" class="ct-grid ct-vertical"></line>
                                    <line y1="180" y2="180" x1="40" x2="836.5" class="ct-grid ct-vertical"></line>
                                    <line y1="120" y2="120" x1="40" x2="836.5" class="ct-grid ct-vertical"></line>
                                    <line y1="60" y2="60" x1="40" x2="836.5" class="ct-grid ct-vertical"></line>
                                    <line y1="0" y2="0" x1="40" x2="836.5" class="ct-grid ct-vertical"></line>
                                 </g>
                                 <g>
                                    <g class="ct-series ct-series-a">
                                       <path d="M40,240L40,240C84.25,190,128.5,90,172.75,90C217,90,261.25,120,305.5,120C349.75,120,394,72,438.25,72C482.5,72,526.75,84,571,84C615.25,84,659.5,12,703.75,12C748,12,792.25,164,836.5,240L836.5,240Z" class="ct-area"></path>
                                    </g>
                                    <g class="ct-series ct-series-b">
                                       <path d="M40,240L40,240C84.25,212,128.5,156,172.75,156C217,156,261.25,210,305.5,210C349.75,210,394,120,438.25,120C482.5,120,526.75,159.273,571,168C615.25,176.727,659.5,177,703.75,186C748,195,792.25,222,836.5,240L836.5,240Z" class="ct-area"></path>
                                    </g>
                                 </g>
                                 <g class="ct-labels">
                                    <foreignObject style="overflow: visible;" x="26" y="245" width="132.75" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 133px; height: 20px;">SUN</span></foreignObject>
                                    <foreignObject style="overflow: visible;" x="158.75" y="245" width="132.75" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 133px; height: 20px;">MON</span></foreignObject>
                                    <foreignObject style="overflow: visible;" x="291.5" y="245" width="132.75" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 133px; height: 20px;">TUE</span></foreignObject>
                                    <foreignObject style="overflow: visible;" x="424.25" y="245" width="132.75" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 133px; height: 20px;">WED</span></foreignObject>
                                    <foreignObject style="overflow: visible;" x="557" y="245" width="132.75" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 133px; height: 20px;">THU</span></foreignObject>
                                    <foreignObject style="overflow: visible;" x="689.75" y="245" width="132.75" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 133px; height: 20px;">FRI</span></foreignObject>
                                    <foreignObject style="overflow: visible;" x="822.5" y="245" width="30" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 30px; height: 20px;">SAT</span></foreignObject>
                                    <foreignObject style="overflow: visible;" y="210" x="-10" height="30" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 30px; width: 30px;">0</span></foreignObject>
                                    <foreignObject style="overflow: visible;" y="150" x="-10" height="30" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 30px; width: 30px;">1</span></foreignObject>
                                    <foreignObject style="overflow: visible;" y="90" x="-10" height="30" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 30px; width: 30px;">2</span></foreignObject>
                                    <foreignObject style="overflow: visible;" y="30" x="-10" height="30" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 30px; width: 30px;">3</span></foreignObject>
                                    <foreignObject style="overflow: visible;" y="-30" x="-10" height="30" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 30px; width: 30px;">4</span></foreignObject>
                                 </g>
                              </svg>
                           </div>
                           <ul class="list-inline text-center mb-0">
                              <li class="list-inline-item">
                                 <i class="icon wb-large-point blue-200 mr-10" aria-hidden="true"></i>                    BANQUETS PACKAGE1
                              </li>
                              <li class="list-inline-item ml-35">
                                 <i class="icon wb-large-point teal-200 mr-10" aria-hidden="true"></i>                    BANQUETS PACKAGE2
                              </li>
                           </ul>
                        </div>
                     </div>
                     <!-- End Panel Traffic -->
                  </div>
                  <div class="col-xxl-3" style="height: 529px;">
                     <div class="row h-full">
                        <div class="col-xxl-12 col-lg-6 h-p50 h-only-lg-p100 h-only-xl-p100">
                           <!-- Panel PURCHASE -->
                           <div class="card card-shadow card-inverse bg-orange-600 white">
                              <div class="card-block p-30">
                                 <div class="counter counter-lg counter-inverse text-left">
                                    <div class="counter-label mb-20">
                                       <div>TOTAL PURCHASE</div>
                                       <div>Total Purchases made this Month</div>
                                    </div>
                                    <div class="counter-number-group mb-15">
                                       <span class="counter-number-related">$</span>
                                       <span class="counter-number">14,000</span>
                                    </div>
                                    <div class="counter-label">
                                       <div class="progress progress-xs mb-10 bg-orange-800">
                                          <div class="progress-bar progress-bar-info bg-white" style="width: 42%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="42" role="progressbar">
                                             <span class="sr-only">42%</span>
                                          </div>
                                       </div>
                                       <div class="counter counter-sm text-left">
                                          <div class="counter-number-group">
                                             <span class="counter-number font-size-14">42%</span>
                                             <span class="counter-number-related font-size-14">HIGHER THAN LAST MONTH</span>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <!-- End Panel PURCHASE -->
                        </div>
                        <div class="col-xxl-12 col-lg-6 h-p50 h-only-lg-p100 h-only-xl-p100">
                           <!-- Panel Today's Sales -->
                           <div class="card card-shadow card-inverse bg-purple-600 white">
                              <div class="card-block p-30">
                                 <div class="counter counter-lg counter-inverse text-left">
                                    <div class="counter-label mb-20">
                                       <div>TOTAL RETURNS</div>
                                       <div>Total Returns made this Month</div>
                                    </div>
                                    <div class="counter-number-group mb-10">
                                       <span class="counter-number-related">$</span>
                                       <span class="counter-number">41,160</span>
                                    </div>
                                    <div class="counter-label">
                                       <div class="progress progress-xs mb-10 bg-purple-800">
                                          <div class="progress-bar progress-bar-info bg-white" style="width: 70%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="70" role="progressbar">
                                             <span class="sr-only">70%</span>
                                          </div>
                                       </div>
                                       <div class="counter counter-sm text-left">
                                          <div class="counter-number-group">
                                             <span class="counter-number font-size-14">70%</span>
                                             <span class="counter-number-related font-size-14">HIGHER THAN LAST MONTH</span>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <!-- End Panel Today's Sales -->
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div style="width: 100%; padding: 30px;">
               <div class="row" data-plugin="matchHeight" data-by-row="true">
                  <div class="col-xl-6 col-lg-6" style="height: 422px; background-color: #fff; ">
                     <!-- Panel Product Stock Alert  -->
                     <div>
                        <div class="panel-heading" style="padding-top: 5px;">
                           <h4>Product Stock Alert </h4>
                        </div>
                     </div>
                     <table class="table is-indent" data-plugin="animateList" data-animate="fade" data-child="tr" data-selectable="selectable">
                        <thead>
                           <tr class="animation-fade" style="animation-fill-mode: backwards; animation-duration: 250ms; animation-delay: 0ms; background-color: #efeeef;">
                              <th class="cell-300" scope="col"><i class="icon fa-cart-arrow-down" aria-hidden="true"></i><b> Product</b></th>
                              <th class="cell-300" scope="col"><i class="icon fa-building" aria-hidden="true"></i><b> Location</b></th>
                              <th class="cell-300" scope="col"><i class="icon fa-retweet" aria-hidden="true"></i><b> Current Stock</b></th>
                              <th class="cell-300" scope="col"><i class="icon fa-eye" aria-hidden="true"></i><b> Action</b></th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr data-url="../../panel.tpl" data-toggle="slidePanel" class="animation-fade" style="animation-fill-mode: backwards; animation-duration: 250ms; animation-delay: 50ms;">
                              <td class="cell-300">Full Chicken</td>
                              <td class="cell-300">Banquet1 Kitchen</td>
                              <td class="cell-300">3</td>
                              <td class="cell-300">
                                 <div class="time"><button type="button" class="btn btn-xs btn-primary" style="width: 100%">
                                    <i class="icon fa-eye" aria-hidden="true"></i><span class="text">VIEW</span></button>
                                 </div>
                              </td>
                           </tr>
                        </tbody>
                     </table>
                     <!-- End Panel Product Stock Alert  -->
                  </div>
                  <!-- Panel Payment Dues Alert  -->
                  <div class="col-xl-6 col-lg-6" style="height: 422px; background-color: #fff;">
                     <div>
                        <div class="panel-heading" style="padding-top: 5px;">
                           <h4>Payment Dues </h4>
                        </div>
                     </div>
                     <table class="table is-indent" data-plugin="animateList" data-animate="fade" data-child="tr" data-selectable="selectable">
                        <thead>
                           <tr class="animation-fade" style="animation-fill-mode: backwards; animation-duration: 250ms; animation-delay: 0ms; background-color: #efeeef;">
                              <th class="cell-300" scope="col"><i class="icon fa-truck" aria-hidden="true"></i><b> Supplier</b></th>
                              <th class="cell-300" scope="col"><i class="icon fa-list-ol" aria-hidden="true"></i><b> Reference Number</b></th>
                              <th class="cell-300" scope="col"><i class="icon fa-calendar-minus-o" aria-hidden="true"></i><b> Due Date</b></th>
                              <th class="cell-300" scope="col"><i class="icon fa-eye" aria-hidden="true"></i><b> Action</b></th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr data-url="../../panel.tpl" data-toggle="slidePanel" class="animation-fade" style="animation-fill-mode: backwards; animation-duration: 250ms; animation-delay: 50ms;">
                              <td class="cell-300" style="padding-top: 20px;"><a class="avatar" href="javascript:void(0)"><img class="img-fluid" src="../../assets/portraits/1.jpg" alt="Herman Beck" style="width: 30px;"></a>Decor Haely</td>
                              <td class="cell-300" style="padding-top: 29px;">12345667890</td>
                              <td class="cell-300" style="padding-top: 29px;">2020-07-10</td>
                              <td class="cell-300" style="padding-top: 25px;">
                                 <div class="time"><button type="button" class="btn btn-xs btn-primary" style="width: 100%">
                                    <i class="icon fa-eye" aria-hidden="true"></i><span class="text">VIEW</span></button>
                                 </div>
                              </td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
                  <!-- End Panel Payment Dues Alert  -->
                  <div class="col-xl-12 col-lg-12" style="height: 422px; background-color: #fff;">
                     <div>
                        <div class="panel-heading" style="padding-top: 5px;">
                           <h4>Stock Expiry Alert</h4>
                        </div>
                     </div>
                     <table class="table is-indent" data-plugin="animateList" data-animate="fade" data-child="tr" data-selectable="selectable">
                        <thead>
                           <tr class="animation-fade" style="animation-fill-mode: backwards; animation-duration: 250ms; animation-delay: 0ms; background-color: #efeeef;">
                              <th class="cell-300" scope="col"><i class="icon fa-cart-arrow-down" aria-hidden="true"></i><b> Product</b></th>
                              <th class="cell-300" scope="col"><i class="icon fa-building" aria-hidden="true"></i><b> Location</b></th>
                              <th class="cell-300" scope="col"><i class="icon fa-archive" aria-hidden="true"></i><b> Stock Left</b></th>
                              <th class="cell-300" scope="col"><i class="icon fa-bitbucket" aria-hidden="true"></i><b> Expires in</b></th>
                              <th class="cell-300" scope="col"><i class="icon fa-eye" aria-hidden="true"></i><b> Action</b></th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr data-url="../../panel.tpl" data-toggle="slidePanel" class="animation-fade" style="animation-fill-mode: backwards; animation-duration: 250ms; animation-delay: 50ms;">
                              <td class="cell-300">Chicken</td>
                              <td class="cell-300">Banquet1 Kitchen</td>
                              <td class="cell-300">2</td>
                              <td class="cell-300">2020-07-10</td>
                              <td class="cell-300" style="padding-top: 25px;">
                                 <div class="time"><button type="button" class="btn btn-xs btn-primary" style="width: 100%">
                                    <i class="icon fa-eye" aria-hidden="true"></i><span class="text">VIEW</span></button>
                                 </div>
                              </td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
         <!-- Banquet Chart Start Here -->
      </div>
   </div>
</div>
 </div>

@endsection
	