<?php
use Illuminate\Support\Facades\Route;

Route::group(['prefix'=>'/pos','middleware' => 'permission:admin'],function () {
		/*Sales Team*/
		Route::get('/dashboard','Backend\Admin\Pos\DashboardController@index')->name('backend.admin.pos.dashboard');
		
		Route::get('/office/users','Backend\Admin\Pos\OfficeController@user')->name('backend.admin.pos.office.user');
		Route::get('/office/add-user','Backend\Admin\Pos\OfficeController@addUser')->name('backend.admin.pos.office.user.add');
		Route::post('/office/add-user','Backend\Admin\Pos\OfficeController@store')->name('backend.admin.pos.office.user.store');
		Route::get('/office/edit-user/{id}','Backend\Admin\Pos\OfficeController@edit')->name('backend.admin.pos.office.user.edit');
		Route::post('/office/update-user/{id}','Backend\Admin\Pos\OfficeController@update')->name('backend.admin.pos.office.user.update');
		Route::get('/office/delete-user/{id}','Backend\Admin\Pos\OfficeController@delete')->name('backend.admin.pos.office.user.delete');
		
		
		
		Route::get('/office/roles','Backend\Admin\Pos\OfficeController@roles')->name('backend.admin.pos.office.role');
		Route::get('/office/add-role','Backend\Admin\Pos\OfficeController@addRole')->name('backend.admin.pos.office.role.add');
		Route::post('/office/store-role','Backend\Admin\Pos\OfficeController@storeRole')->name('backend.admin.pos.office.role.store');
		Route::get('/office/edit-role/{id}','Backend\Admin\Pos\OfficeController@editRole')->name('backend.admin.pos.office.role.edit');
		Route::post('/office/update-role/{id}','Backend\Admin\Pos\OfficeController@updateRole')->name('backend.admin.pos.office.role.update');
		Route::get('/office/delete-role/{id}','Backend\Admin\Pos\OfficeController@deleteRole')->name('backend.admin.pos.office.role.delete');
		
		
		Route::get('/office/sales-commission','Backend\Admin\Pos\OfficeController@salesCommission')->name('backend.admin.pos.office.sales_commission');
		Route::get('/office/add-sales-commission','Backend\Admin\Pos\OfficeController@addSalesCommission')->name('backend.admin.pos.office.sales_commission.add');
		Route::post('/office/store-sales-commission','Backend\Admin\Pos\OfficeController@storeSalesCommission')->name('backend.admin.pos.office.sales_commission.store');
		Route::get('/office/edit-sales-commission/{id}','Backend\Admin\Pos\OfficeController@editSalesCommission')->name('backend.admin.pos.office.sales_commission.edit');
		Route::post('/office/update-sales-commission/{id}','Backend\Admin\Pos\OfficeController@updateSalesCommission')->name('backend.admin.pos.office.sales_commission.update');
		Route::get('/office/delete-sales-commission/{id}','Backend\Admin\Pos\OfficeController@deleteSalesCommission')->name('backend.admin.pos.office.sales_commission.delete');
		//end of office section
		Route::get('/contact-book/suppliers','Backend\Admin\Pos\ContactBookController@suppliers')->name('backend.admin.pos.contact_book.supplier');
		Route::get('/contact-book/add-supplier','Backend\Admin\Pos\ContactBookController@addSupplier')->name('backend.admin.pos.contact_book.supplier.add');
		Route::post('/contact-book/store-supplier','Backend\Admin\Pos\ContactBookController@storeSupplier')->name('backend.admin.pos.contact_book.supplier.store');
		Route::get('/contact-book/edit-supplier/{id}','Backend\Admin\Pos\ContactBookController@editSupplier')->name('backend.admin.pos.contact_book.supplier.edit');
		Route::post('/contact-book/update-supplier/{id}','Backend\Admin\Pos\ContactBookController@updateSupplier')->name('backend.admin.pos.contact_book.supplier.update');
		Route::get('/contact-book/delete-supplier/{id}','Backend\Admin\Pos\ContactBookController@deleteSupplier')->name('backend.admin.pos.contact_book.supplier.delete');
		Route::get('/contact-book/view-supplier/{id}','Backend\Admin\Pos\ContactBookController@viewSupplier')->name('backend.admin.pos.contact_book.supplier.view');
		Route::get('/contact-book/payment/{id}','Backend\Admin\Pos\ContactBookController@payment')->name('backend.admin.pos.contact_book.payment');
		
		
		Route::get('/contact-book/customers','Backend\Admin\Pos\ContactBookController@customers')->name('backend.admin.pos.contact_book.customer');
		Route::get('/contact-book/add-customer','Backend\Admin\Pos\ContactBookController@addCustomer')->name('backend.admin.pos.contact_book.customer.add');
		Route::post('/contact-book/store-customer','Backend\Admin\Pos\ContactBookController@storeCustomer')->name('backend.admin.pos.contact_book.customer.store');
		Route::get('/contact-book/edit-customer/{id}','Backend\Admin\Pos\ContactBookController@editCustomer')->name('backend.admin.pos.contact_book.customer.edit');
		Route::post('/contact-book/update-customer/{id}','Backend\Admin\Pos\ContactBookController@updateCustomer')->name('backend.admin.pos.contact_book.customer.update');
		Route::get('/contact-book/delete-customer/{id}','Backend\Admin\Pos\ContactBookController@deleteCustomer')->name('backend.admin.pos.contact_book.customer.delete');
		Route::get('/contact-book/view-customer/{id}','Backend\Admin\Pos\ContactBookController@viewCustomer')->name('backend.admin.pos.contact_book.customer.view');
		
		Route::get('/contact-book/customer-group','Backend\Admin\Pos\ContactBookController@customerGroups')->name('backend.admin.pos.contact_book.customer_group');
		Route::get('/contact-book/add-customer-group','Backend\Admin\Pos\ContactBookController@addCustomerGroup')->name('backend.admin.pos.contact_book.customer_group.add');
		Route::post('/contact-book/store-customer-group','Backend\Admin\Pos\ContactBookController@storeCustomerGroup')->name('backend.admin.pos.contact_book.customer_group.store');
		Route::get('/contact-book/edit-customer-group/{id}','Backend\Admin\Pos\ContactBookController@editCustomerGroup')->name('backend.admin.pos.contact_book.customer_group.edit');
		Route::post('/contact-book/update-customer-group/{id}','Backend\Admin\Pos\ContactBookController@updateCustomerGroup')->name('backend.admin.pos.contact_book.customer_group.update');
		Route::get('/contact-book/delete-customer-group/{id}','Backend\Admin\Pos\ContactBookController@deleteCustomerGroup')->name('backend.admin.pos.contact_book.customer_group.delete');
		
		/*Products*/
		Route::get('/products','Backend\Admin\Pos\ProductsController@index')->name('backend.admin.pos.product.index');
		Route::get('/product/add','Backend\Admin\Pos\ProductsController@addProduct')->name('backend.admin.pos.product.add');
		Route::post('/product/store','Backend\Admin\Pos\ProductsController@storeProduct')->name('backend.admin.pos.product.store');
		Route::get('/product/edit/{id}','Backend\Admin\Pos\ProductsController@editProduct')->name('backend.admin.pos.product.edit');
		Route::post('/product/update/{id}','Backend\Admin\Pos\ProductsController@updateProduct')->name('backend.admin.pos.product.update');
		Route::get('/product/delete/{id}','Backend\Admin\Pos\ProductsController@deleteProduct')->name('backend.admin.pos.product.delete');
		
		Route::get('/product/view/{id}','Backend\Admin\Pos\ProductsController@viewProduct')->name('backend.admin.pos.product.view');
		Route::get('/product/print-label','Backend\Admin\Pos\ProductsController@printLabel')->name('backend.admin.pos.product.print_label');
		
		Route::get('/product/variations','Backend\Admin\Pos\ProductsController@variations')->name('backend.admin.pos.product.variation');
		Route::get('/product/add-variation','Backend\Admin\Pos\ProductsController@addVariation')->name('backend.admin.pos.product.variation.add');
		Route::post('/product/store-variation','Backend\Admin\Pos\ProductsController@storeVariation')->name('backend.admin.pos.product.variation.store');
		Route::get('/product/edit-variation/{id}','Backend\Admin\Pos\ProductsController@editVariation')->name('backend.admin.pos.product.variation.edit');
		Route::post('/product/update-variation/{id}','Backend\Admin\Pos\ProductsController@updateVariation')->name('backend.admin.pos.product.variation.update');
		Route::get('/product/delete-variation/{id}','Backend\Admin\Pos\ProductsController@deleteVariation')->name('backend.admin.pos.product.variation.delete');
		
		Route::get('/product/import','Backend\Admin\Pos\ProductsController@importProducts')->name('backend.admin.pos.product.import');
		Route::get('/product/import-opening','Backend\Admin\Pos\ProductsController@importOpening')->name('backend.admin.pos.product.import_opening');
		Route::get('/product/add-opening-stock','Backend\Admin\Pos\ProductsController@addOpeningStock')->name('backend.admin.pos.product.add_opening_stock');
		
		/*purchase*/
		Route::get('/purchase','Backend\Admin\Pos\PurchaseController@index')->name('backend.admin.pos.purchase.index');
		Route::get('/purchase/add','Backend\Admin\Pos\PurchaseController@add')->name('backend.admin.pos.purchase.add');
		Route::get('/purchase/add-product','Backend\Admin\Pos\PurchaseController@addProduct')->name('backend.admin.pos.purchase.add_product');
		Route::get('/purchase/view','Backend\Admin\Pos\PurchaseController@view')->name('backend.admin.pos.purchase.view');
		Route::get('/purchase/payment','Backend\Admin\Pos\PurchaseController@payment')->name('backend.admin.pos.purchase.payment');
		Route::get('/purchase/edit-payment','Backend\Admin\Pos\PurchaseController@editPayment')->name('backend.admin.pos.purchase.edit_payment');
		
		/* Sales*/
		Route::get('/sell','Backend\Admin\Pos\SellController@index')->name('backend.admin.pos.sell.index');
		Route::get('/sell/add','Backend\Admin\Pos\SellController@add')->name('backend.admin.pos.sell.add');
		Route::get('/sell/view','Backend\Admin\Pos\SellController@view')->name('backend.admin.pos.sell.view');
		Route::get('/sell/payment','Backend\Admin\Pos\SellController@payment')->name('backend.admin.pos.sell.payment');
		Route::get('/sell/edit-payment','Backend\Admin\Pos\SellController@editPayment')->name('backend.admin.pos.sell.edit_payment');
		Route::get('/sell/pos-list','Backend\Admin\Pos\SellController@posList')->name('backend.admin.pos.sell.pos_list');
		Route::get('/sell/pos','Backend\Admin\Pos\SellController@pos')->name('backend.admin.pos.sell.pos');
		
		Route::get('/sell-returns','Backend\Admin\Pos\SellReturnsController@index')->name('backend.admin.pos.sell_return.index');
		Route::get('/sell-returns/add','Backend\Admin\Pos\SellReturnsController@add')->name('backend.admin.pos.sell_return.add');
		Route::get('/sell-returns/view','Backend\Admin\Pos\SellReturnsController@view')->name('backend.admin.pos.sell_return.view');
		
		/*stock*/
		Route::get('/stock-transfer','Backend\Admin\Pos\StockTransferController@listStocks')->name('backend.admin.pos.stock_transfer.list');
		Route::get('/stock-transfer/add','Backend\Admin\Pos\StockTransferController@addStock')->name('backend.admin.pos.stock_transfer.add');
		
		Route::get('/stock-adjustments','Backend\Admin\Pos\StockAdjustmentsController@index')->name('backend.admin.pos.stock_adjustment.index');
		Route::get('/stock-adjustments/add','Backend\Admin\Pos\StockAdjustmentsController@add')->name('backend.admin.pos.stock_adjustment.add');
		Route::get('/stock-adjustments/view','Backend\Admin\Pos\StockAdjustmentsController@view')->name('backend.admin.pos.stock_adjustment.view');
		
		Route::get('/expenses','Backend\Admin\Pos\ExpensesController@index')->name('backend.admin.pos.expenses.index');
		Route::get('/expenses/add','Backend\Admin\Pos\ExpensesController@add')->name('backend.admin.pos.expenses.add');
		Route::post('/expenses/store','Backend\Admin\Pos\ExpensesController@store')->name('backend.admin.pos.expenses.store');
		Route::get('/expenses/edit/{id}','Backend\Admin\Pos\ExpensesController@edit')->name('backend.admin.pos.expenses.edit');
		Route::post('/expenses/update/{id}','Backend\Admin\Pos\ExpensesController@update')->name('backend.admin.pos.expenses.update');
		Route::get('/expenses/delete/{id}','Backend\Admin\Pos\ExpensesController@delete')->name('backend.admin.pos.expenses.delete');
		
		Route::get('/expenses/category','Backend\Admin\Pos\ExpensesController@category')->name('backend.admin.pos.expenses.category');
		Route::get('/expenses/add-category','Backend\Admin\Pos\ExpensesController@addCategory')->name('backend.admin.pos.expenses.add_category');
		Route::post('/expenses/store-category','Backend\Admin\Pos\ExpensesController@storeCategory')->name('backend.admin.pos.expenses.store_category');
		Route::get('/expenses/edit-category/{id}','Backend\Admin\Pos\ExpensesController@editCategory')->name('backend.admin.pos.expenses.edit_category');
		Route::post('/expenses/update-category/{id}','Backend\Admin\Pos\ExpensesController@updateCategory')->name('backend.admin.pos.expenses.update_category');
		Route::get('/expenses/delete-category/{id}','Backend\Admin\Pos\ExpensesController@deleteCategory')->name('backend.admin.pos.expenses.delete_category');
		
		/*Setting*/
		Route::get('/settings/business-setting','Backend\Admin\Pos\Settings\BusinessSettingsController@index')->name('backend.admin.pos.setting.business_setting');
		Route::post('/settings/business-setting/{id}','Backend\Admin\Pos\Settings\BusinessSettingsController@update')->name('backend.admin.pos.setting.business_setting.update');
		
		Route::get('/settings/system-setting','Backend\Admin\Pos\Settings\SystemSettingsController@index')->name('backend.admin.pos.setting.system_setting');
		Route::post('/settings/system-setting/{id}','Backend\Admin\Pos\Settings\SystemSettingsController@update')->name('backend.admin.pos.setting.system_setting.update');
		
		Route::get('/settings/business-locations','Backend\Admin\Pos\Settings\BusinessLocationsController@index')->name('backend.admin.pos.setting.business_location');		
		Route::get('/settings/business-location/add','Backend\Admin\Pos\Settings\BusinessLocationsController@add')->name('backend.admin.pos.setting.business_location.add');		
		Route::post('/settings/business-location/add','Backend\Admin\Pos\Settings\BusinessLocationsController@create')->name('backend.admin.pos.setting.business_location.create');		
		Route::get('/settings/business-location/edit/{id}','Backend\Admin\Pos\Settings\BusinessLocationsController@edit')->name('backend.admin.pos.setting.business_location.edit');		
		Route::post('/settings/business-location/edit/{id}','Backend\Admin\Pos\Settings\BusinessLocationsController@update')->name('backend.admin.pos.setting.business_location.update');		
		Route::get('/settings/business-location/delete/{id}','Backend\Admin\Pos\Settings\BusinessLocationsController@delete')->name('backend.admin.pos.setting.business_location.delete');		
		Route::get('/settings/business-location/settings/{id}','Backend\Admin\Pos\Settings\BusinessLocationsController@settings')->name('backend.admin.pos.setting.business_location.setting');
		Route::post('/settings/business-location/settings/{id}','Backend\Admin\Pos\Settings\BusinessLocationsController@updateSettings')->name('backend.admin.pos.setting.business_location.setting.update_setting');
		
		Route::get('/settings/invoices','Backend\Admin\Pos\Settings\InvoiceSettingsController@index')->name('backend.admin.pos.setting.invoice');		
		Route::get('/settings/invoice/add','Backend\Admin\Pos\Settings\InvoiceSettingsController@add')->name('backend.admin.pos.setting.invoice.add');
		Route::post('/settings/invoice/store','Backend\Admin\Pos\Settings\InvoiceSettingsController@store')->name('backend.admin.pos.setting.invoice.store');
		Route::get('/settings/invoice/edit/{id}','Backend\Admin\Pos\Settings\InvoiceSettingsController@edit')->name('backend.admin.pos.setting.invoice.edit');
		Route::post('/settings/invoice/update/{id}','Backend\Admin\Pos\Settings\InvoiceSettingsController@update')->name('backend.admin.pos.setting.invoice.update');
		Route::get('/settings/invoice/delete/{id}','Backend\Admin\Pos\Settings\InvoiceSettingsController@delete')->name('backend.admin.pos.setting.invoice.delete');
		
		Route::get('/settings/barcode','Backend\Admin\Pos\Settings\BarcodeSettingsController@index')->name('backend.admin.pos.setting.barcode');		
		Route::get('/settings/barcode/add','Backend\Admin\Pos\Settings\BarcodeSettingsController@add')->name('backend.admin.pos.setting.barcode.add');
		Route::post('/settings/barcode/add','Backend\Admin\Pos\Settings\BarcodeSettingsController@store')->name('backend.admin.pos.setting.barcode.store');
		Route::get('/settings/barcode/edit/{id}','Backend\Admin\Pos\Settings\BarcodeSettingsController@edit')->name('backend.admin.pos.setting.barcode.edit');
		Route::post('/settings/barcode/update/{id}','Backend\Admin\Pos\Settings\BarcodeSettingsController@update')->name('backend.admin.pos.setting.barcode.update');
		Route::get('/settings/barcode/delete/{id}','Backend\Admin\Pos\Settings\BarcodeSettingsController@delete')->name('backend.admin.pos.setting.barcode.delete');
		
		Route::get('/settings/receipt-printer','Backend\Admin\Pos\Settings\ReceiptPrintersController@index')->name('backend.admin.pos.setting.receipt_printer');		
		Route::get('/settings/receipt-printer/add','Backend\Admin\Pos\Settings\ReceiptPrintersController@add')->name('backend.admin.pos.setting.receipt_printer.add');
		Route::post('/settings/receipt-printer/store','Backend\Admin\Pos\Settings\ReceiptPrintersController@store')->name('backend.admin.pos.setting.receipt_printer.store');
		Route::get('/settings/receipt-printer/edit/{id}','Backend\Admin\Pos\Settings\ReceiptPrintersController@edit')->name('backend.admin.pos.setting.receipt_printer.edit');
		Route::post('/settings/receipt-printer/update/{id}','Backend\Admin\Pos\Settings\ReceiptPrintersController@update')->name('backend.admin.pos.setting.receipt_printer.update');
		Route::get('/settings/receipt-printer/delete/{id}','Backend\Admin\Pos\Settings\ReceiptPrintersController@delete')->name('backend.admin.pos.setting.receipt_printer.delete');
		
		Route::get('/settings/brands','Backend\Admin\Pos\Settings\BrandsController@index')->name('backend.admin.pos.setting.brand');		
		Route::get('/settings/brand/add','Backend\Admin\Pos\Settings\BrandsController@add')->name('backend.admin.pos.setting.brand.add');
		Route::post('/settings/brand/add','Backend\Admin\Pos\Settings\BrandsController@store')->name('backend.admin.pos.setting.brand.store');
		Route::get('/settings/brand/edit/{id}','Backend\Admin\Pos\Settings\BrandsController@edit')->name('backend.admin.pos.setting.brand.edit');
		Route::post('/settings/brand/edit/{id}','Backend\Admin\Pos\Settings\BrandsController@update')->name('backend.admin.pos.setting.brand.update');
		Route::get('/settings/brand/delete/{id}','Backend\Admin\Pos\Settings\BrandsController@delete')->name('backend.admin.pos.setting.brand.delete');
				
		Route::get('/settings/tax-rates','Backend\Admin\Pos\Settings\TaxRatesController@index')->name('backend.admin.pos.setting.tax_rate');		
		Route::get('/settings/tax-rate/add','Backend\Admin\Pos\Settings\TaxRatesController@add')->name('backend.admin.pos.setting.tax_rate.add');
		Route::post('/settings/tax-rate/add','Backend\Admin\Pos\Settings\TaxRatesController@create')->name('backend.admin.pos.setting.tax_rate.create');
		Route::get('/settings/tax-rate/edit/{id}','Backend\Admin\Pos\Settings\TaxRatesController@edit')->name('backend.admin.pos.setting.tax_rate.edit');
		Route::post('/settings/tax-rate/edit/{id}','Backend\Admin\Pos\Settings\TaxRatesController@update')->name('backend.admin.pos.setting.tax_rate.update');
		Route::get('/settings/tax-rate/delete/{id}','Backend\Admin\Pos\Settings\TaxRatesController@delete')->name('backend.admin.pos.setting.tax_rate.delete');
		Route::get('/settings/tax-rate-multiple/add','Backend\Admin\Pos\Settings\TaxRatesController@addMultiple')->name('backend.admin.pos.setting.tax_rate.addmultiple');
		Route::post('/settings/tax-rate-multiple/create','Backend\Admin\Pos\Settings\TaxRatesController@createMultiple')->name('backend.admin.pos.setting.tax_rate.createmultiple');
		Route::get('/settings/tax-rate-multiple/edit/{id}','Backend\Admin\Pos\Settings\TaxRatesController@editMultiple')->name('backend.admin.pos.setting.tax_rate.editmultiple');
		Route::post('/settings/tax-rate-multiple/edit/{id}','Backend\Admin\Pos\Settings\TaxRatesController@updateMultiple')->name('backend.admin.pos.setting.tax_rate.updatemultiple');
		Route::get('/settings/tax-rate-multiple/delete/{id}','Backend\Admin\Pos\Settings\TaxRatesController@deleteMultiple')->name('backend.admin.pos.setting.tax_rate.deletemultiple');
		
		Route::get('/settings/units','Backend\Admin\Pos\Settings\UnitsController@index')->name('backend.admin.pos.setting.unit');		
		Route::get('/settings/unit/add','Backend\Admin\Pos\Settings\UnitsController@add')->name('backend.admin.pos.setting.unit.add');
		Route::post('/settings/unit/add','Backend\Admin\Pos\Settings\UnitsController@create')->name('backend.admin.pos.setting.unit.create');
		Route::get('/settings/unit/edit/{id}','Backend\Admin\Pos\Settings\UnitsController@edit')->name('backend.admin.pos.setting.unit.edit');
		Route::post('/settings/unit/edit/{id}','Backend\Admin\Pos\Settings\UnitsController@update')->name('backend.admin.pos.setting.unit.update');
		Route::get('/settings/unit/delete/{id}','Backend\Admin\Pos\Settings\UnitsController@delete')->name('backend.admin.pos.setting.unit.delete');
		
		Route::get('/settings/categories','Backend\Admin\Pos\Settings\CategoriesController@index')->name('backend.admin.pos.setting.category');		
		Route::get('/settings/category/add','Backend\Admin\Pos\Settings\CategoriesController@add')->name('backend.admin.pos.setting.category.add');
		Route::post('/settings/category/add','Backend\Admin\Pos\Settings\CategoriesController@create')->name('backend.admin.pos.setting.category.create');
		Route::get('/settings/category/edit/{id}','Backend\Admin\Pos\Settings\CategoriesController@edit')->name('backend.admin.pos.setting.category.edit');
		Route::post('/settings/category/edit/{id}','Backend\Admin\Pos\Settings\CategoriesController@update')->name('backend.admin.pos.setting.category.update');
		Route::get('/settings/category/delete/{id}','Backend\Admin\Pos\Settings\CategoriesController@delete')->name('backend.admin.pos.setting.category.delete');
		
				
		/*Reports*/
		Route::get('/reports/profit-loss','Backend\Admin\Pos\ReportsController@profitLoss')->name('backend.admin.pos.report.profit_loss');
		Route::get('/reports/purchase-sales','Backend\Admin\Pos\ReportsController@purchaseSales')->name('backend.admin.pos.report.purchase_sales');
		Route::get('/reports/tax','Backend\Admin\Pos\ReportsController@tax')->name('backend.admin.pos.report.tax');
		Route::get('/reports/supplier-customer','Backend\Admin\Pos\ReportsController@supplierCustomer')->name('backend.admin.pos.report.supplier_customer');
		Route::get('/reports/customer-group','Backend\Admin\Pos\ReportsController@customerGroup')->name('backend.admin.pos.report.customer_group');
		Route::get('/reports/stock','Backend\Admin\Pos\ReportsController@stock')->name('backend.admin.pos.report.stock');
		Route::get('/reports/stock-expiry','Backend\Admin\Pos\ReportsController@stockExpiry')->name('backend.admin.pos.report.stock_expiry');
		Route::get('/reports/lot','Backend\Admin\Pos\ReportsController@lot')->name('backend.admin.pos.report.lot');
		Route::get('/reports/trending','Backend\Admin\Pos\ReportsController@trending')->name('backend.admin.pos.report.trending');
		Route::get('/reports/stock-adjustment','Backend\Admin\Pos\ReportsController@stockAdjustment')->name('backend.admin.pos.report.stock_adjustment');
		Route::get('/reports/product-purchase','Backend\Admin\Pos\ReportsController@productPurchase')->name('backend.admin.pos.report.product_purchase');
		Route::get('/reports/product-sell','Backend\Admin\Pos\ReportsController@productSell')->name('backend.admin.pos.report.product_sell');
		Route::get('/reports/purchase-payment','Backend\Admin\Pos\ReportsController@purchasePayment')->name('backend.admin.pos.report.purchase_payment');
		Route::get('/reports/sell-payment','Backend\Admin\Pos\ReportsController@sellPayment')->name('backend.admin.pos.report.sell_payment');
		Route::get('/reports/expenses','Backend\Admin\Pos\ReportsController@expenses')->name('backend.admin.pos.report.expenses');
		Route::get('/reports/register','Backend\Admin\Pos\ReportsController@register')->name('backend.admin.pos.report.register');
		Route::get('/reports/view-register','Backend\Admin\Pos\ReportsController@viewRegister')->name('backend.admin.pos.report.register.view');
		Route::get('/reports/sales-representative','Backend\Admin\Pos\ReportsController@salesRepresentative')->name('backend.admin.pos.report.sales_representative');
		
		
	});