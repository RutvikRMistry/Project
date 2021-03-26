@extends('backend.master')
@section('title',"Import Products")
@section('content')
 <!-- Top Menubar Ends Here-->
 <div class="page">
  @include('backend.partials.leftbar.shortcuts')
  <div class="page-main">
   <div class="page-header">
      <h1 class="page-title">Import Products</h1>
   </div>
   <div style="width: 100%; padding: 30px;">
      <div class="panel-body" style="background-color: #fff; ">
         <header class="panel-heading">
            <div>
               <form>
                  <div class="row" >
                     <h5>Image:</h5>
                  </div>
                  <div class="row" >
                     <div class="col-lg-4 ">
                        <input accept=".csv" name="products_csv" type="file">
                     </div>
                     <div class="col-md-2">
                        <button type="submit" class="btn btn-primary">Submit</button>
                     </div>
                  </div>
                  <br>
                  <div class="row" >
                     <div class="col-md-9">
                        <button type="button" class="btn btn-primary"><i class="fa fa-download">&nbsp;Download CVSFile Templates</i></button>
                     </div>
                  </div>
               </form>
            </div>
         </header>
      </div>
   </div>
   <div class="page-main">
      <div class="page-header">
         <h1 class="page-title">Instructions.</h1>
      </div>
      <div style="width: 100%; padding: 30px;">
         <div class="panel-body" style="background-color: #fff; ">
            <header class="panel-heading">
               <div>
                  <h3 class="example-title">Follow the instructions carefully before importing the file.</h3>
                  <h4 class="example-title">The columns of the CSV file should be in the following order.</h4>
                  <table class="table table-hover dataTable table-striped w-full dtr-inline" data-plugin="dataTable" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info" style="width: 1783px;">
                     <thead>
                        <tr>
                           <th>Column Number </th>
                           <th>Column Name </th>
                           <th>Instruction</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr class="gradeA">
                           <td>1</td>
                           <td>Product Name (Required) </td>
                           <td>Name of the product</td>
                        </tr>
                        <tr class="gradeA">
                           <td>2</td>
                           <td>Brand (Optional)  </td>
                           <td>Name of the brand
                              <br>
                              <small class="text-muted">(If not found new brand with the given name will be created)</small>
                           </td>
                        </tr>
                        <tr class="gradeA">
                           <td>3</td>
                           <td>Unit (Required) </td>
                           <td>Name of the unit</td>
                        </tr>
                        <tr class="gradeA">
                           <td>4</td>
                           <td>Category (Optional) </td>
                           <td>Name of the Category
                              <br>
                              <small class="text-muted">(If not found new category with the given name will be created)</small>
                           </td>
                        </tr>
                        <tr class="gradeA">
                           <td>5</td>
                           <td>Sub category (Optional) </td>
                           <td>Name of the Sub-Category
                              <br>
                              <small class="text-muted">(If not found new sub-category with the given name under the
                              parent Category will be created)
                              </small>
                           </td>
                        </tr>
                        <tr class="gradeA">
                           <td>6</td>
                           <td>SKU (Optional)  </td>
                           <td>Product SKU. If blank an SKU will be automatically generated</td>
                        </tr>
                        <tr class="gradeA">
                           <td>7</td>
                           <td>Barcode Type (Optional, Default: C128)  </td>
                           <td>
                              Barcode Type for the product.
                              <br>
                              <large class="text-muted">Currently supported: C128, C39, EAN-13, EAN-8, UPC-A, UPC-E, ITF-14</large>
                           </td>
                        </tr>
                        <tr class="gradeA">
                           <td>8</td>
                           <td>Manage Stock? (Required)  </td>
                           <td>Enable or disable stock managemant
                              <br>
                              <small class="text-muted">1 = Yes</small><br>
                              <small class="text-muted">0 = No</small>
                           </td>
                        </tr>
                        <tr class="gradeA">
                           <td>9</td>
                           <td>Alert quantity (Required if Manage Stock is 1)  </td>
                           <td>Alert quantity</td>
                        </tr>
                        <tr class="gradeA">
                           <td>10</td>
                           <td>Expires in (Optional) </td>
                           <td>Product expiry period (Only in numbers)</td>
                        </tr>
                        <tr class="gradeA">
                           <td>11</td>
                           <td>Expiry Period Unit (Optional) </td>
                           <td>Unit for the expiry period
                              <br>
                              <strong class="text-muted">Available Options: days, months</strong>>
                           </td>
                        </tr>
                        <tr class="gradeA">
                           <td>12</td>
                           <td>Applicable Tax (Optional) </td>
                           <td>Name of the Tax Rate
                              <br>
                              <small class="text-muted">If purchase Price (Excluding Tax) is not same as</small><br>
                              <small class="text-muted">Purchase Price (Including Tax)</small><br>
                              <small class="text-muted">then you must supply the tax rate name.</small>
                           </td>
                        </tr>
                        <tr class="gradeA">
                           <td>13</td>
                           <td>Selling Price Tax Type (Selling Price Tax Type) </td>
                           <td>Selling Price Tax Type
                              <br>
                              <strong class="text-muted">Available Options: inclusive, exclusive </strong>
                           </td>
                        </tr>
                        <tr class="gradeA">
                           <td>14</td>
                           <td>Product Type (Required) </td>
                           <td>Product Type
                              <br>
                              <small class="text-muted">Available Options: single, variable</small>
                           </td>
                        </tr>
                        <tr class="gradeA">
                           <td>15</td>
                           <td>Variation Name (Required if product type is variable) </td>
                           <td>Name of the variation (Ex: Size, Color etc )</td>
                        </tr>
                        <tr class="gradeA">
                           <td>16</td>
                           <td>Variation Values (Required if product type is variable) </td>
                           <td>Values for the variation separated with '|'
                              <br>
                              <small class="text-muted">(Ex: Red|Blue|Green)</small>
                           </td>
                        </tr>
                        <tr class="gradeA">
                           <td>17</td>
                           <td>Purchase Price (Including Tax)
                              <br>
                              <small class="text-muted">(Required if Purchase Price Excluding Tax is not given)  </small> 
                           </td>
                           <td>Purchase Price (Including Tax) (Only in numbers)
                              <br>
                              <small class="text-muted">For variable products '|' separated values with</small><br>
                              <small class="text-muted">the same order as Variation Values</small><br>
                              <small class="text-muted">(Ex: 84|85|88)</small>
                           </td>
                        </tr>
                        <tr class="gradeA">
                           <td>18</td>
                           <td>Purchase Price (Excluding  Tax)
                              <br>
                              <small class="text-muted">(Required if Purchase Price Including  Tax is not given)  </small> 
                           </td>
                           <td>Purchase Price (Excluding  Tax) (Only in numbers)
                              <br>
                              <small class="text-muted">For variable products '|' separated values with</small><br>
                              <small class="text-muted">the same order as Variation Values</small><br>
                              <small class="text-muted">(Ex: 84|85|88)</small>
                           </td>
                        </tr>
                        <tr class="gradeA">
                           <td>19</td>
                           <td>Profit Margin % (Optional)  </td>
                           <td>Profit Margin (Only in numbers)
                              <br>
                              <small class="text-muted">If blank default profit margin for the</small><br>
                              <small class="text-muted">business will be used</small>
                        </tr>
                        <tr class="gradeA">
                           <td>20</td>
                           <td>Selling Price (Optional)  </td>
                           <td>Selling Price (Only in numbers)
                              <br>
                              <small class="text-muted">If blank selling price will be calculated</small><br>
                              <small class="text-muted">with the given Purchase Price</small><br>
                              <small class="text-muted">and Applicable Tax</small>
                           </td>
                        </tr>
                        <tr class="gradeA">
                           <td>21</td>
                           <td>Opening Stock (Optional)  </td>
                           <td>Opening Stock (Only in numbers)
                              <br>
                              <small class="text-muted">For variable products separate stock quantities with '|'
                              </small><br>
                              <small class="text-muted">(Ex: 100|150|200)</small>
                           </td>
                        </tr>
                        <tr class="gradeA">
                           <td>22</td>
                           <td>Location (Optional)
                              <br>
                              <small class="text-muted">If blank first business location will be used  </small>
                           </td>
                           <td>Name of the business location</td>
                        </tr>
                        <tr class="gradeA">
                           <td>23</td>
                           <td>Expiry Date (Optional)  </td>
                           <td>Stock Expiry Date
                              <br>
                              <strong class="text-muted">Format: mm-dd-yyyy; Ex: 11-25-2018 </strong> 
                           </td>
                        </tr>
                        <tr class="gradeA">
                           <td>24</td>
                           <td>Enable Product description, IMEI or Serial Number (Optional, Default: 0)  </td>
                           <td>1 = Yes<br>
                              0 = No
                           </td>
                        </tr>
                        <tr class="gradeA">
                           <td>25</td>
                           <td>Weight (Optional) </td>
                           <td>Optional</td>
                        </tr>
                        <tr class="gradeA">
                           <td>26</td>
                           <td>Rack (Optional) </td>
                           <td>Rack details seperated by '|' for different business locations serially.
                              <br>(Ex: R1|R5|R12)
                           </td>
                        </tr>
                        <tr class="gradeA">
                           <td>27</td>
                           <td>Row (Optional)  </td>
                           <td>Row details seperated by '|' for different business locations serially.
                              <br>(Ex: ROW1|ROW2|ROW3)
                           </td>
                        </tr>
                        <tr class="gradeA">
                           <td>28</td>
                           <td>Position (Optional) </td>
                           <td>Position details seperated by '|' for different business locations serially.
                              <br>(Ex: POS1|POS2|POS3)
                           </td>
                        </tr>
                        <tr class="gradeA">
                           <td>29</td>
                           <td>Image (Optional)  </td>
                           <td>Image name with extension.
                              <br>(Image name must be uploaded to the server public/img ) 
                           </td>
                        </tr>
                        <tr class="gradeA">
                           <td>30</td>
                           <td>Custom Field1 (Optional)  </td>
                           <td></td>
                        </tr>
                        <tr class="gradeA">
                           <td>31</td>
                           <td>Custom Field2 (Optional)</td>
                           <td></td>
                        </tr>
                        <tr class="gradeA">
                           <td>32</td>
                           <td>Custom Field3(Optional)</td>
                           <td></td>
                        </tr>
                        <tr class="gradeA">
                           <td>33</td>
                           <td>Custom Field4(Optional)</td>
                           <td></td>
                        </tr>
                     </tbody>
                  </table>
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
 </div>

@endsection
	