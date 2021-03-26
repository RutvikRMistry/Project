<?php
namespace App\Http\Controllers\Backend\Admin\Pos	;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Input;
use File;
use App\Http\Controllers\Controller;
class ReportsController extends Controller
{   
	public function profitLoss(){
		return view('backend.admin.pos.reports.profit_loss');
	}
	
	public function purchaseSales(){
		return view('backend.admin.pos.reports.purchase_sales');
	}
	
	public function tax(){
		return view('backend.admin.pos.reports.tax');
	}
	
	public function supplierCustomer(){
		return view('backend.admin.pos.reports.supplier_customer');
	}
	
	public function customerGroup(){
		return view('backend.admin.pos.reports.customer_group');
	}
		
	public function stock(){
		return view('backend.admin.pos.reports.stock');
	}
	
	public function stockExpiry(){
		return view('backend.admin.pos.reports.stock_expiry');
	}
	
	public function lot(){
		return view('backend.admin.pos.reports.lot');
	}
	
	public function trending(){
		return view('backend.admin.pos.reports.trending');
	}
	
	public function stockAdjustment(){
		return view('backend.admin.pos.reports.stock_adjustment');
	}
	
	public function productPurchase(){
		return view('backend.admin.pos.reports.product_purchase');
	}
	
	public function productSell(){
		return view('backend.admin.pos.reports.product_sell');
	}
	
	public function purchasePayment(){
		return view('backend.admin.pos.reports.purchase_payment');
	}
	
	public function sellPayment(){
		return view('backend.admin.pos.reports.sell_payment');
	}
	
	public function expenses(){
		return view('backend.admin.pos.reports.expenses');
	}
	
	public function register(){
		return view('backend.admin.pos.reports.register');
	}
	
	public function viewRegister(){
		return view('backend.admin.pos.reports.view_register');
	}
	
	public function salesRepresentative(){
		return view('backend.admin.pos.reports.sales_representative');
	}
	
	
}
