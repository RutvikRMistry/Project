@extends('backend.master')
@section('title',"Event Report")
@section('content')
 <!-- Top Menubar Ends Here-->
 <div class="page">
    @include('backend.partials.leftbar.shortcuts')
	<div class="page-main">
   <div class="page-header">
      <h1 class="page-title">Contractor Report</h1>
   </div>
   <div style="width: 100%; padding: 30px;">
      <div class="panel-body" style="background-color: #fff; ">
         <header class="panel-heading">
            <div style="width: 50%; float: left;">
               <div class="tablesaw-sortable-switch tablesaw-bar-section">
                  <label>
                     <span class="btn tablesaw-btn btn-select tablesaw-btn-select">
                        <span aria-hidden="true">Sort By ↑</span>
                        <select>
                           <option selected="" value="0_asc">Reservation No. ↑</option>
                           <option value="0_desc">Reservation No. ↓</option>
                           <option value="1_asc">Reservation Date</option>
                           <option value="1_desc">Reservation Date</option>
                           <option value="2_asc">Guest ↑</option>
                           <option value="2_desc">Guest ↓</option>
                           <option value="3_asc">Checkin ↑</option>
                           <option value="3_desc">Checkin ↓</option>
                           <option value="4_asc">Checkout</option>
                           <option value="4_desc">Checkout</option>
                        </select>
                     </span>
                  </label>
               </div>
            </div>
            <div style="width: 50%; float: right;">
               <div class="btn-group" aria-label="Button group with nested dropdown" role="group" style="float: right; padding-top: 10px;">
                  <div class="tablesaw-sortable-switch tablesaw-bar-section">
                     <label><input type="search" class="form-control form-control-sm" placeholder="Search.." aria-controls="DataTables_Table_0"></label>
                  </div>
               </div>
            </div>
            <div>
               <table class="table table-hover dataTable table-striped w-full dtr-inline" data-plugin="dataTable" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info" style="width: 1783px;">
               <table class="table table-hover dataTable table-striped w-full" data-plugin="dataTable">
                  <thead>
                     <div class="row" style="margin: auto;">
                        <div class="col-lg-12 form-group">
                           <select class="form-control" data-plugin="select2">
                              <optgroup label="Please Select">
                                 <option value="R1">All</option>
                                 <option value="R1">Caterer</option>
                                 <option value="R1">Entertainer</option>
                                 <option value="R1">Photographer</option>
                                 <option value="R1">Transport Service</option>
                              </optgroup>
                           </select>
                        </div>
                     </div>
                     <tr>
                        <th>Contractor Name </th>
                        <th>Email ID</th>
                        <th>Contact</th>
                        <th>Address</th>
                        <th>Contractor Type</th>
                     </tr>
                  </thead>
                  <tbody>
                     <tr>
                        <td>BIGG ROMEO  </td>
                        <td>franco@biggromeo.com  </td>
                        <td>154687920</td>
                        <td>FRANCO SICILIA, JR  </td>
                        <td>entertainer</td>
                     </tr>
                     <tr>
                        <td>IMAGINATIONS    </td>
                        <td>IMAGINATIONS @biggromeo.com  </td>
                        <td>154687920</td>
                        <td>ROUTE 611 TANNERSVILLE PA 18372  </td>
                        <td>decorator</td>
                     </tr>
                     <tr>
                        <td>COUNTRY CAMERA STUDIO   </td>
                        <td>ccespa@countrycamera.com    </td>
                        <td>5704218848  </td>
                        <td>120 S. COURTLAND ST EAST STROUDSBURG PA 18301   </td>
                        <td>photographer</td>
                     </tr>
                     <tr>
                        <td>J & J Luxury Transportation   </td>
                        <td>luxurytransportation@gmail.com    </td>
                        <td>9595095950  </td>
                        <td>Mt Pocono, PA   </td>
                        <td>transport</td>
                     </tr>
                     <tr>
                        <td>WGM Taxi Transportation   </td>
                        <td>wgmtaxitrans@gmail.com    </td>
                        <td>5702239289  </td>
                        <td>Stroudsburg, PA   </td>
                        <td>transport</td>
                     </tr>
                     <tr>
                        <td>Ashlie Caterer    </td>
                        <td>ashliecaterer@yahoo.com   </td>
                        <td>9898098980</td>
                        <td>4804 Quail Ridge Dr. Plainsboro, New Jersey 08536   </td>
                        <td>caterer</td>
                     </tr>
                     <tr>
                        <td>Unique Caterers   </td>
                        <td>info@uniquecaterer.com    </td>
                        <td>7474074740  </td>
                        <td>FRANCO SICILIA, JR  </td>
                        <td>entertainer</td>
                     </tr>
                  </tbody>
               </table>
               <div>
                  <div style="padding: 30px; background-color: #fff;">
                     <div class="row">
                        <div style="width: 50%; background-color: #fff; float: left;">
                           <div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite" style="margin-top: 25px;">Showing 1 to 10 of 12 entries</div>
                        </div>
                        <div style="width: 50%; background-color: #fff;    float: right;">
                           <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
                              <ul class="pagination" style="float: right; margin-top: 10px;">
                                 <li class="paginate_button page-item previous disabled" id="DataTables_Table_0_previous"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li>
                                 <li class="paginate_button page-item active"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                                 <li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="2" tabindex="0" class="page-link">2</a></li>
                                 <li class="paginate_button page-item next" id="DataTables_Table_0_next"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="3" tabindex="0" class="page-link">Next</a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
         </header>
         <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
         <div class="col-sm-12 col-md-6"><div id="DataTables_Table_0_filter" class="dataTables_filter"></div>
         </div>
         </div>
         <div class="row"></div>
         </div>
      </div>       
   </div>
</div>
</div>
 </div>

@endsection
	