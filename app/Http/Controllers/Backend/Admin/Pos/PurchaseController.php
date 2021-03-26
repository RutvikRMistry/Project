<?php
namespace App\Http\Controllers\Backend\Admin\Pos;

use Illuminate\Http\Request;
use App\Model\POS\Contact;
use App\Model\POS\Product;
use App\Model\POS\Variation;
use App\Model\POS\TaxRate;
use App\Model\POS\Transaction;
use App\Model\POS\PurchaseLine;
use App\Model\POS\BusinessLocation;
use App\Model\POS\Business;
use App\Model\POS\CustomerGroup;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Input;
use File;
use DB;
use App\Http\Controllers\Controller;
use App\Utils\ProductUtil;
use App\Utils\TransactionUtil;
use App\Utils\BusinessUtil;
use App\Utils\ModuleUtil;

class PurchaseController extends Controller
{
	
	
	
    protected $productUtil;
    protected $transactionUtil;
    protected $moduleUtil;

    /**
     * Constructor
     *
     * @param ProductUtils $product
     * @return void
     */
    public function __construct(ProductUtil $productUtil, TransactionUtil $transactionUtil, BusinessUtil $businessUtil, ModuleUtil $moduleUtil)
    {
        $this->productUtil = $productUtil;
        $this->transactionUtil = $transactionUtil;
        $this->businessUtil = $businessUtil;
        $this->moduleUtil = $moduleUtil;

        $this->dummyPaymentLine = ['method' => 'cash', 'amount' => 0, 'note' => '', 'card_transaction_number' => '', 'card_number' => '', 'card_type' => '', 'card_holder_name' => '', 'card_month' => '', 'card_year' => '', 'card_security' => '', 'cheque_number' => '', 'bank_account_number' => '', 
        'is_return' => 0, 'transaction_no' => ''];
    }

    public function index(){
		$business_id = 1;
		$purchases = Transaction::leftJoin('contacts', 'transactions.contact_id', '=', 'contacts.id')
                    ->join(
                        'business_locations AS BS',
                        'transactions.location_id',
                        '=',
                        'BS.id'
                    )
                    ->leftJoin(
                        'transaction_payments AS TP',
                        'transactions.id',
                        '=',
                        'TP.transaction_id'
                    )
                    ->where('transactions.business_id', $business_id)
                    ->where('transactions.type', 'purchase')
                    ->select(
                        'transactions.id',
                        'document',
                        'transaction_date',
                        'ref_no',
                        'contacts.name',
                        'status',
                        'payment_status',
                        'final_total',
                        'BS.name as location_name',
                        DB::raw('SUM(TP.amount) as amount_paid')
                    )
                    ->groupBy('transactions.id')->get();
					
		 return view('backend.admin.pos.purchase.index',compact(
			'purchases'
		 ));
	}	
	
	public function add(){
		$business_id = 1;
		$contact = DB::connection('mysql_banquet_pos')->table('contacts')->where('business_id',$business_id)->where('type','=','supplier')->get();
		$location = DB::connection('mysql_banquet_pos')->table('business_locations')->where('business_id',$business_id)->get();
		$taxes = TaxRate::where('business_id', $business_id)
                            ->get();
		 return view('backend.admin.pos.purchase.add',compact(
			'contact',
			'location',
			'taxes'
		 ));
	}	
	
	public function addProduct(){
		$business_id = 1;
		$brands = DB::connection('mysql_banquet_pos')->table('brands')->where('business_id',$business_id)->get();
		$units = DB::connection('mysql_banquet_pos')->table('units')->where('business_id',$business_id)->get();
		return view('backend.admin.pos.purchase.add_product',compact(
			'brands',
			'units'
		));
	}
	
	public function view(){
		return view('backend.admin.pos.purchase.view');
	}
	
	public function payment(){
		return view('backend.admin.pos.purchase.payment');
	}
	
	public function editPayment(){
		return view('backend.admin.pos.purchase.edit_payment');
	}
	
}
