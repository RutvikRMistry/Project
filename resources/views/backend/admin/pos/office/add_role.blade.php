@extends('backend.master')
@section('title',"Add Role")
@section('content')
 <!-- Top Menubar Ends Here-->
 <div class="page">
  @include('backend.partials.leftbar.shortcuts')
  <div class="page-main">
   <div class="page-header">
      <h1 class="page-title">Add Roles</h1>
   </div>
   <div style="width: 100%; padding: 30px;">
      <div class="panel-body" style="background-color: #fff; ">
         <header class="panel-heading">
         <div>
            <form action="" method="post">
               <div class="row" >
                  <div class="col-lg-4 form-group">
                     <h5>Role Name:<span class="text-danger">*</span></h5>
                     <input class="form-control" placeholder="Role Name" name="name" type="text" id="name" value="{{old('name')}}" required />
                  </div>
               </div>
               <!-- End Panel Basic -->
               <div class="row" style="height:70px">
                  <div class="col-lg-4 ">
                     <h5>Permissions:</h5>
                  </div>
               </div>
               <div class="row" >
                  <div class="col-lg-2 ">
                     <h5>User</h5>
                  </div>
                  <div class="col-lg-2 ">
                     <div class="checkbox-custom checkbox-default">
                        <input type="checkbox" id="inputBasicRemember" name="inputCheckbox" checked autocomplete="off"
                           />
                        <label for="inputBasicRemember">Select All</label>
                     </div>
                  </div>
                  <ul class="list-unstyled example">
                     <li class="mb-15">
                        <input type="checkbox" class="icheckbox-primary" name="permissions[]" type="checkbox" value="user.create"
                           data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
                          id="view_user" />
                        <label for="view_user">View User</label>
                     </li>
                     <li class="mb-15">
                        <input type="checkbox" class="icheckbox-primary" name="permissions[]" type="checkbox" value="user.create"
                           data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
                           id="add_user"/>
                        <label for="add_user">Add User</label>
                     </li>
                     <li class="mb-15">
                        <input type="checkbox" class="icheckbox-primary" name="permissions[]" type="checkbox" value="user.update"
                           data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
                           id="edit_user" />
                        <label for="edit_user">Edit User</label>
                     </li>
                     <li class="mb-15">
                        <input type="checkbox" class="icheckbox-primary" name="permissions[]" type="checkbox" value="user.delete"
                           data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
                          id="delete_user" />
                        <label for="delete_user">Delete User</label>
                     </li>
                  </ul>
               </div>
               <div class="row" >
                  <div class="col-lg-2">
                     <h5>Supplier</h5>
                  </div>
                  <div class="col-lg-2">
                     <div class="checkbox-custom checkbox-default">
                        <input type="checkbox" id="inputBasicRemember" name="inputCheckbox" checked autocomplete="off"
                           />
                        <label for="inputBasicRemember">Select All</label>
                     </div>
                  </div>
                  <ul class="list-unstyled example">
                     <li class="mb-15">
                        <input type="checkbox" class="icheckbox-primary" name="permissions[]" type="checkbox" value="supplier.view"
                           data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
                           id="view_supplier" />
                        <label for="view_supplier">View supplier</label>
                     </li>
                     <li class="mb-15">
                        <input type="checkbox" class="icheckbox-primary" name="permissions[]" type="checkbox" value="supplier.create" 
                           data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
                           id="add_supplier"/>
                        <label for="add_supplier"> Add supplier</label>
                     </li>
                     <li class="mb-15">
                        <input type="checkbox" class="icheckbox-primary"  name="permissions[]" type="checkbox" value="supplier.update"
                           data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
                           id="edit_supplier"/>
                        <label for="edit_supplier">Edit supplier</label>
                     </li>
                     <li class="mb-15">
                        <input type="checkbox" class="icheckbox-primary" name="permissions[]" type="checkbox" value="supplier.delete"
                           data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
                          id="delete_supplier" />
                        <label for="delete_supplier">Delete supplier</label>
                     </li>
                  </ul>
               </div>
               <div class="row" >
                  <div class="col-lg-2">
                     <h5>Customer</h5>
                  </div>
                  <div class="col-lg-2">
                     <div class="checkbox-custom checkbox-default">
                        <input type="checkbox" id="inputBasicRemember" name="inputCheckbox" checked autocomplete="off"
                           />
                        <label for="inputBasicRemember">Select All</label>
                     </div>
                  </div>
                  <ul class="list-unstyled example">
                     <li class="mb-15">
                        <input type="checkbox" class="icheckbox-primary" name="permissions[]" type="checkbox" value="customer.view" 
                           data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
                           id="view_customer" />
                        <label for="view_customer">View customer</label>
                     </li>
                     <li class="mb-15">
                        <input type="checkbox" class="icheckbox-primary"name="permissions[]" type="checkbox" value="customer.create"
                           data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
                          id="add_customer" />
                        <label for="add_customer">Add customer</label>
                     </li>
                     <li class="mb-15">
                        <input type="checkbox" class="icheckbox-primary" name="permissions[]" type="checkbox" value="customer.update"
                           data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
                          id="edit_customer" />
                        <label for="edit_customer">Edit customer</label>
                     </li>
                     <li class="mb-15">
                        <input type="checkbox" class="icheckbox-primary"  name="permissions[]" type="checkbox" value="customer.delete"
                           data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
                          id="delete_customer" />
                        <label for="delete_customer">Delete customer</label>
                     </li>
                  </ul>
               </div>
               <div class="row" >
                  <div class="col-lg-2">
                     <h5>Product</h5>
                  </div>
                  <div class="col-lg-2">
                     <div class="checkbox-custom checkbox-default">
                        <input type="checkbox" id="inputBasicRemember" name="inputCheckbox" checked autocomplete="off"
                           />
                        <label for="inputBasicRemember">Select All</label>
                     </div>
                  </div>
                  <ul class="list-unstyled example">
                     <li class="mb-15">
                        <input type="checkbox" class="icheckbox-primary" name="permissions[]" type="checkbox" value="product.view" 
                           data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
                           id="view_user1" />
                        <label for="view_user1">View User</label>
                     </li>
                     <li class="mb-15">
                        <input type="checkbox" class="icheckbox-primary" name="permissions[]" type="checkbox" value="product.create"
                           data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
                           id="add_product" />
                        <label for="add_product">Add product</label>
                     </li>
                     <li class="mb-15">
                        <input type="checkbox" class="icheckbox-primary"  name="permissions[]" type="checkbox" value="product.update"
                           data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
                           id="edit_product" />
                        <label for="edit_product">Edit product</label>
                     </li>
                     <li class="mb-15">
                        <input type="checkbox" class="icheckbox-primary" name="permissions[]" type="checkbox" value="product.delete"
                           data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
                           id="delete_product" />
                        <label for="delete_product">Delete product</label>
                     </li>
                     <li class="mb-15">
                        <input type="checkbox" class="icheckbox-primary" name="permissions[]" type="checkbox" value="product.opening_stock"
                           data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
                          id="add_opening_stock" />
                        <label for="add_opening_stock"> Add Opening Stock</label>
                     </li>
                  </ul>
               </div>
               <div class="row" >
                  <div class="col-lg-2">
                     <h5>Purchase & Stock Adjustment</h5>
                  </div>
                  <div class="col-lg-2">
                     <div class="checkbox-custom checkbox-default">
                        <input type="checkbox" id="inputBasicRemember" name="inputCheckbox" checked autocomplete="off"
                           />
                        <label for="inputBasicRemember">Select All</label>
                     </div>
                  </div>
                  <ul class="list-unstyled example">
                     <li class="mb-15">
                        <input type="checkbox" class="icheckbox-primary" name="permissions[]" type="checkbox" value="purchase.view"
                           data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
                          id="view_purchase" />
                        <label for="view_purchase">View purchase & Stock Adjustment</label>
                     </li>
                     <li class="mb-15">
                        <input type="checkbox" class="icheckbox-primary" name="permissions[]" type="checkbox" value="purchase.create"
                           data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
                          id="add_purchase" />
                        <label for="add_purchase">Add purchase & Stock Adjustment</label>
                     </li>
                     <li class="mb-15">
                        <input type="checkbox" class="icheckbox-primary" name="permissions[]" type="checkbox" value="purchase.update"
                           data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
                          id="edit_purchase" />
                        <label for="edit_purchase">Edit purchase & Stock Adjustment</label>
                     </li>
                     <li class="mb-15">
                        <input type="checkbox" class="icheckbox-primary" name="permissions[]" type="checkbox" value="purchase.delete" 
                           data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
                           id="delete_purchase" />
                        <label for="delete_purchase">Delete purchase & Stock Adjustment</label>
                     </li>
                  </ul>
               </div>
               <div class="row" >
                  <div class="col-lg-2">
                     <h5>Sell</h5>
                  </div>
                  <div class="col-lg-2">
                     <div class="checkbox-custom checkbox-default">
                        <input type="checkbox" id="inputBasicRemember" name="inputCheckbox" checked autocomplete="off"
                           />
                        <label for="inputBasicRemember">Select All</label>
                     </div>
                  </div>
                  <ul class="list-unstyled example">
                     <li class="mb-15">
                        <input type="checkbox" class="icheckbox-primary" name="permissions[]" type="checkbox" value="sell.view" 
                           data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
                          id="view_pos" />
                        <label for="view_pos">View POS sell</label>
                     </li>
                     <li class="mb-15">
                        <input type="checkbox" class="icheckbox-primary" name="permissions[]" type="checkbox" value="sell.create"
                           data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
                          id="add_pos" />
                        <label for="add_pos">Add POS sell</label>
                     </li>
                     <li class="mb-15">
                        <input type="checkbox" class="icheckbox-primary" name="permissions[]" type="checkbox" value="sell.update"
                           data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
                           id="edit_pos"/>
                        <label for="edit_pos">Edit POS sell</label>
                     </li>
                     <li class="mb-15">
                        <input type="checkbox" class="icheckbox-primary" name="permissions[]" type="checkbox" value="sell.delete"
                           data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
                           id="delete_pos"/>
                        <label for="delete_pos">Delete POS sell</label>
                     </li>
                     <li class="mb-15">
                        <input type="checkbox" class="icheckbox-primary" name="permissions[]" type="checkbox" value="direct_sell.access" 
                           data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
                          id="access_sell" />
                        <label for="access_sell"> Access sell</label>
                     </li>
                  </ul>
               </div>
               <div class="row" >
                  <div class="col-lg-2">
                     <h5>Brand</h5>
                  </div>
                  <div class="col-lg-2">
                     <div class="checkbox-custom checkbox-default">
                        <input type="checkbox" id="inputBasicRemember" name="inputCheckbox" checked autocomplete="off"
                           />
                        <label for="inputBasicRemember">Select All</label>
                     </div>
                  </div>
                  <ul class="list-unstyled example">
                     <li class="mb-15">
                        <input type="checkbox" class="icheckbox-primary" name="permissions[]" type="checkbox" value="brand.view"
                           data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
                          id="view_tax" />
                        <label for="view_tax">View tax rate</label>
                     </li>
                     <li class="mb-15">
                        <input type="checkbox" class="icheckbox-primary" name="permissions[]" type="checkbox" value="brand.create"
                           data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
                           id="add_tax" />
                        <label for="add_tax">Add tax rate</label>
                     </li>
                     <li class="mb-15">
                        <input type="checkbox" class="icheckbox-primary" name="permissions[]" type="checkbox" value="brand.update" 
                           data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
                           id="edit_tax" />
                        <label for="edit_tax">Edit tax rate</label>
                     </li>
                     <li class="mb-15">
                        <input type="checkbox" class="icheckbox-primary" name="permissions[]" type="checkbox" value="brand.delete"
                           data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
                          id="delete_tax" />
                        <label for="delete_tax">Delete tax rate</label>
                     </li>
                  </ul>
               </div>
               <div class="row" >
                  <div class="col-lg-2">
                     <h5>Unit</h5>
                  </div>
                  <div class="col-lg-2">
                     <div class="checkbox-custom checkbox-default">
                        <input type="checkbox" id="inputBasicRemember" name="inputCheckbox" checked autocomplete="off"
                           />
                        <label for="inputBasicRemember">Select All</label>
                     </div>
                  </div>
                  <ul class="list-unstyled example">
                     <li class="mb-15">
                        <input type="checkbox" class="icheckbox-primary" name="permissions[]" type="checkbox" value="unit.view" 
                           data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
                           id="view_user2" />
                        <label for="view_user2">View User</label>
                     </li>
                     <li class="mb-15">
                        <input type="checkbox" class="icheckbox-primary" name="permissions[]" type="checkbox" value="unit.create" 
                           data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
                          id="add_unit" />
                        <label for="add_unit">Add unit</label>
                     </li>
                     <li class="mb-15">
                        <input type="checkbox" class="icheckbox-primary" name="permissions[]" type="checkbox" value="unit.update"
                           data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
                         id="edit_unit"  />
                        <label for="edit_unit">Edit unit</label>
                     </li>
                     <li class="mb-15">
                        <input type="checkbox" class="icheckbox-primary" name="permissions[]" type="checkbox" value="unit.delete"
                           data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
                          id="delete_unit" />
                        <label for="delete_unit">Delete unit</label>
                     </li>
                  </ul>
               </div>
               <div class="row" >
                  <div class="col-lg-2">
                     <h5>Category</h5>
                  </div>
                  <div class="col-lg-2">
                     <div class="checkbox-custom checkbox-default">
                        <input type="checkbox" id="inputBasicRemember" name="inputCheckbox" checked autocomplete="off"
                           />
                        <label for="inputBasicRemember">Select All</label>
                     </div>
                  </div>
                  <ul class="list-unstyled example">
                     <li class="mb-15">
                        <input type="checkbox" class="icheckbox-primary" name="permissions[]" type="checkbox" value="category.view"
                           data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
                          id="view_cat" />
                        <label for="view_cat">View category</label>
                     </li>
                     <li class="mb-15">
                        <input type="checkbox" class="icheckbox-primary" name="permissions[]" type="checkbox" value="category.create" 
                           data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
                          id="add_cat" />
                        <label for="add_cat">Add category</label>
                     </li>
                     <li class="mb-15">
                        <input type="checkbox" class="icheckbox-primary" name="permissions[]" type="checkbox" value="category.update" 
                           data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
                           id="edit_cat" />
                        <label for="edit_cat">Edit category</label>
                     </li>
                     <li class="mb-15">
                        <input type="checkbox" class="icheckbox-primary"  name="permissions[]" type="checkbox" value="category.delete" 
                           data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
                         id="delete_cat"  />
                        <label for="delete_cat">Delete category</label>
                     </li>
                  </ul>
               </div>
               <div class="row" >
                  <div class="col-lg-2">
                     <h5>Report</h5>
                  </div>
                  <div class="col-lg-2">
                     <div class="checkbox-custom checkbox-default">
                        <input type="checkbox" id="inputBasicRemember" name="inputCheckbox" checked autocomplete="off"
                           />
                        <label for="inputBasicRemember">Select All</label>
                     </div>
                  </div>
                  <ul class="list-unstyled example">
                     <li class="mb-15">
                        <input type="checkbox" class="icheckbox-primary" name="permissions[]" type="checkbox" value="purchase_n_sell_report.view"
                           data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
                          id="purchase_report" />
                        <label for="purchase_report"> View purchase & sell report</label>
                     </li>
                     <li class="mb-15">
                        <input type="checkbox" class="icheckbox-primary" name="permissions[]" type="checkbox" value="tax_report.view" 
                           data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
                         id="tax_report"  />
                        <label for="tax_report"> View Tax report</label>
                     </li>
                     <li class="mb-15">
                        <input type="checkbox" class="icheckbox-primary" name="permissions[]" type="checkbox" value="contacts_report.view" 
                           data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
                          id="cstmsupp_report" />
                        <label for="cstmsupp_report"> View Supplier & Customer report</label>
                     </li>
                     <li class="mb-15">
                        <input type="checkbox" class="icheckbox-primary" name="permissions[]" type="checkbox" value="expense_report.view" 
                           data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
                          id="expense_report" />
                        <label for="expense_report"> View expense report</label>
                     </li>
                     <li class="mb-15">
                        <input type="checkbox" class="icheckbox-primary" name="permissions[]" type="checkbox" value="profit_loss_report.view"
                           data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
                          id="profit_loss_report" />
                        <label for="profit_loss_report">  View profit/loss report</label>
                     </li>
                     <li class="mb-15">
                        <input type="checkbox" class="icheckbox-primary" name="permissions[]" type="checkbox" value="stock_report.view" 
                           data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
                          id="all_stock_report" />
                        <label for="all_stock_report"> View stock report, stock adjustment report & stock expiry report</label>
                     </li>
                     <li class="mb-15">
                        <input type="checkbox" class="icheckbox-primary" name="permissions[]" type="checkbox" value="trending_product_report.view"
                           data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
                          id="trandpro_report" />
                        <label for="trandpro_report"> View trending product report</label>
                     </li>
                     <li class="mb-15">
                        <input type="checkbox" class="icheckbox-primary" name="permissions[]" type="checkbox" value="register_report.view"
                           data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
                          id="register_report" />
                        <label for="register_report"> View register report</label>
                     </li>
                     <li class="mb-15">
                        <input type="checkbox" class="icheckbox-primary" name="permissions[]" type="checkbox" value="sales_representative.view" 
                           data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
                          id="sale_representative_report" />
                        <label for="sale_representative_report">  View sales representative report</label>
                     </li>
                  </ul>
               </div>
               <div class="row" >
                  <div class="col-lg-2">
                     <h5>Settings</h5>
                  </div>
                  <div class="col-lg-2">
                     <div class="checkbox-custom checkbox-default">
                        <input type="checkbox" id="inputBasicRemember" name="inputCheckbox" checked autocomplete="off"
                           />
                        <label for="inputBasicRemember">Select All</label>
                     </div>
                  </div>
                  <ul class="list-unstyled example">
                     <li class="mb-15">
                        <input type="checkbox" class="icheckbox-primary" name="permissions[]" type="checkbox" value="business_settings.access" 
                           data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
                          id="business_settings_access" />
                        <label for="business_settings_access"> Access business settings</label>
                     </li>
                     <li class="mb-15">
                        <input type="checkbox" class="icheckbox-primary" name="permissions[]" type="checkbox" value="barcode_settings.access"
                           data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
                          id="barcode_settings_access" />
                        <label for="barcode_settings_access"> Access barcode settings</label>
                     </li>
                     <li class="mb-15">
                        <input type="checkbox" class="icheckbox-primary" name="permissions[]" type="checkbox" value="invoice_settings.access" 
                           data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
                         id="invoice_settings_access"  />
                        <label for="invoice_settings_access"> Access invoice settings</label>
                     </li>
                     <li class="mb-15">
                        <input type="checkbox" class="icheckbox-primary" name="permissions[]" type="checkbox" value="expense.access"
                           data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
                          id="expenses_access" />
                        <label for="expenses_access"> Access expenses</label>
                     </li>
                  </ul>
               </div>
               <div class="row" >
                  <div class="col-lg-4 ">
                     <h5>Home </h5>
                  </div>
                  <ul class="list-unstyled example">
                     <li class="mb-15">
                        <input type="checkbox" class="icheckbox-primary"  name="permissions[]" type="checkbox" value="dashboard.data"
                           data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
                          id="view_home_data" />
                        <label for="view_home_data"> View Home data</label>
                     </li>
                  </ul>
               </div>
               <div class="row" >
                  <div class="col-md-9">
                     <button type="submit" class="btn btn-primary pull-right">Update</button>                       
                  </div>
               </div>
            </form>
         </div>
      </div>
             
   </div>
</div>
</div>
 </div>

@endsection
	