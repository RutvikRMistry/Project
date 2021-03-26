<?php
namespace App\Http\Controllers\Backend\Admin\Pos\Settings;

use Illuminate\Http\Request;

use App\Model\POS\PackagePermissions;
use App\Model\POS\Packages;
use App\Model\POS\User;
use App\Model\POS\Business;
use App\Model\POS\TaxRate;
use App\Model\POS\Currency;
use App\Model\POS\Unit;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Input;
use File;
use DB;
use App\Http\Controllers\Controller;
use Session;


class BusinessSettingsController extends Controller
{
protected $busines;

public function __construct(Business $business)
    {
        $this->business = $business;
	}
	
    public function index(Request $request){
		 
		$business = new Business();
		$timezone_list = $this->business->allTimeZones();

        //echo '<pre>';
		 //print_r($business->allTimeZones());
		 //die;
		$business = DB::connection('mysql_banquet_pos')->table('business')->get()->first();
		$cur = DB::connection('mysql_banquet_pos')->table('currencies')->get();
		return view('backend.admin.pos.settings.business_settings',compact(
			'business',
			'cur',
			'timezone_list'
		));
	}

		
	public function update(Request $request,$id){
		
		$input=$request->all();
		if(!empty($input)){
			$rules = array(
			
			
                'name' => 'required|max:255',
                'start_date' => 'required',
                'default_profit_percent' => 'required',
                'currency_id' => 'required|numeric',
                'currency_symbol_placement' => 'required',
                'time_zone' => 'required',
                'business_logo' => 'nullable|image|mimes:jpeg,png,jpg|max:1524',
				'fy_start_month' => 'required',
				'accounting_method' => 'required',
				'transaction_edit_days' => 'required',
				'date_format' => 'required',
                'time_format' => 'required',
                'default_sales_discount' => 'required|numeric',
                'stock_expiry_alert_days' => 'required|numeric',
                
			);
			 $this->validate( $request , $rules);
			 $business = $this->business->findOrFail($id);
			//$business = new $this->business;
		$business->name = $request->name;
        $business->start_date = $request->start_date;
        $business->default_profit_percent = $request->default_profit_percent;
        $business->currency_id = $request->currency_id;
        $business->currency_symbol_placement = $request->currency_symbol_placement;
        $business->time_zone = $request->time_zone;
		if ($request->hasFile('business_logo') && $request->file('business_logo')->isValid()) {
                $path = $request->business_logo->store('public/business_logos');
                $business_details['logo'] = str_replace('public/business_logos/', '', $path);
            }
		$business->fy_start_month = $request->fy_start_month;
		$business->accounting_method = $request->accounting_method;
		$business->transaction_edit_days = $request->transaction_edit_days;
		$business->date_format = $request->date_format;
		$business->time_format = $request->time_format;
		$business->tax_label_1 = $request->tax_label_1;
		$business->tax_number_1 = $request->tax_number_1;
		$business->tax_label_2 = $request->tax_label_2;
		$business->tax_number_2 = $request->tax_number_2;
		$business->sku_prefix = $request->sku_prefix;
		$business->default_unit = $request->default_unit;
		$business->enable_product_expiry = $request->has('enable_product_expiry') == 'on' ? '1' : '0';
		$business->on_product_expiry = $request->has('on_product_expiry') == 'on' ? '1' : '0';
		$business->enable_brand = $request->has('enable_brand') == 'on' ? '1' : '0';
		$business->enable_category = $request->has('enable_category') == 'on' ? '1' : '0';
		$business->enable_sub_category = $request->has('enable_sub_category') == 'on' ? '1' : '0';
		$business->enable_price_tax = $request->has('enable_price_tax') == 'on' ? '1' : '0';
		$business->enable_racks = $request->has('enable_racks') == 'on' ? '1' : '0';
		$business->enable_row = $request->has('enable_row') == 'on' ? '1' : '0';
		$business->enable_position = $request->has('enable_position') == 'on' ? '1' : '0';
		$business->default_sales_discount = $request->default_sales_discount;
		$business->default_sales_tax = $request->default_sales_tax;
		$business->sales_cmsn_agnt = $request->sales_cmsn_agnt;
		$business->item_addition_method = $request->item_addition_method;
		$business->enable_editing_product_from_purchase = $request->has('enable_editing_product_from_purchase') == 'on' ? '1' : '0';
		$business->enable_purchase_status = $request->has('enable_purchase_status') == 'on' ? '1' : '0';
		$business->enable_lot_number = $request->has('enable_lot_number') == 'on' ? '1' : '0';
		$business->stock_expiry_alert_days = $request->stock_expiry_alert_days;
		$business->enable_tooltip = $request->has('enable_tooltip') == 'on' ? '1' : '0';
		$business->ref_no_prefixes = $request->ref_no_prefixes;
		/*$business->ref_no_prefixes['stock_transfer'] = $request->ref_no_prefixes['stock_transfer'];
		$business->ref_no_prefixes['stock_adjustment'] = $request->ref_no_prefixes['stock_adjustment'];
		$business->ref_no_prefixes['sell_return'] = $request->ref_no_prefixes['sell_return'];
		$business->ref_no_prefixes['expense'] = $request->ref_no_prefixes['expense'];
		$business->ref_no_prefixes['contacts'] = $request->ref_no_prefixes['contacts'];
		$business->ref_no_prefixes['purchase_payment'] = $request->ref_no_prefixes['purchase_payment'];
		$business->ref_no_prefixes['business_location'] = $request->ref_no_prefixes['business_location'];*/
		$business->stop_selling_before = $request->stop_selling_before;
		$business->save();
			//$this->business->create($request->all());
			
			Session::flash('msg','Updated Succesfully');
			return redirect()->route('backend.admin.pos.setting.business_setting');
		}
		 
	}
	
}
