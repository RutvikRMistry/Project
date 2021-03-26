<?php
namespace App\Http\Controllers\Backend\Admin\Pos;

use Illuminate\Http\Request;
use App\Model\POS\Contact;
use App\Model\POS\CustomerGroup;
use App\Model\POS\Transaction;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Input;
use File;
use DB;
use Session;
use App\Http\Controllers\Controller;
use App\Utils\Util;
use App\Utils\ModuleUtil;
use App\Utils\TransactionUtil;

class ContactBookController extends Controller
{
	protected $commonUtil;
    protected $transactionUtil;

	public function __construct(Util $commonUtil, 
								ModuleUtil $moduleUtil,
								TransactionUtil $transactionUtil,
								Contact $contact)
	{
		$this->commonUtil = $commonUtil;
		$this->moduleUtil = $moduleUtil;
		$this->transactionUtil = $transactionUtil;
		$this->contact = $contact;
	}
	
	
	
    public function suppliers(){
		
		$contact = DB::connection('mysql_banquet_pos')->table('contacts')->where('deleted_at','=',NULL)->get();
		 return view('backend.admin.pos.contact_book.suppliers',compact(
				'contact'
		 ));
	}	
	
	public function addSupplier(){
		 return view('backend.admin.pos.contact_book.add_supplier');
	}	
	
	public function storeSupplier(Request $request){
		
		$rules = array(	
			
				'type' => 'required',
				'name' => 'required',
				'supplier_business_name' => 'required',
				'contact_id' => 'required',
				'tax_number' => 'required|numeric',
				'opening_balance' => 'required|numeric',
				'pay_term_number' => 'required|numeric',
				'pay_term_type' => 'required',
				'email' => 'required|email',
				'mobile' => 'required|min:10|numeric',
				'alternate_number' => 'nullable|numeric',
				'landline' => 'nullable|numeric',
				'city' => 'required',
				'state' => 'required',
				'country' => 'required',
				'landmark' => 'nullable',
			
			);
		$this->validate($request , $rules);	
		$business_id = 1;
		$created_by = 1;
		
		$input = $request->only(['type', 'supplier_business_name',
                'name', 'tax_number', 'pay_term_number', 'pay_term_type', 'mobile', 'landline', 'alternate_number', 'city', 'state', 'country', 'landmark', 'customer_group_id', 'contact_id', 'custom_field1', 'custom_field2', 'custom_field3', 'custom_field4', 'email']);
        $input['business_id'] = $business_id;
        $input['created_by'] = $created_by;
        $input['credit_limit'] = $request->input('credit_limit') != '' ? $this->commonUtil->num_uf($request->input('credit_limit')) : null;
		$count = 0;
		
            if (!empty($input['contact_id'])) {
                $count = Contact::where('business_id', $input['business_id'])
                                ->where('contact_id', $input['contact_id'])
                                ->count();
            }

            if ($count == 0) {
				
                //Update reference count
                $ref_count = $this->commonUtil->setAndGetReferenceCount('contacts');

                if (empty($input['contact_id'])) {
                    //Generate reference number
                    $input['contact_id'] = $this->commonUtil->generateReferenceNumber('contacts', $ref_count);
                }
		$contact = Contact::create($input);
		
		 if(!empty($request->input('opening_balance'))){
			// $business_id = $user->business_id;
			//print_r( $contact->id);
			//	die;
                    $this->transactionUtil->createOpeningBalanceTransaction( $request->input('opening_balance'),$business_id,$request->input('contact_id'));
                    //$this->transactionUtil->createOpeningBalanceTransaction($business_id);
                
				}
			}	
		Session::flash('msg','Added Successfully');
		return redirect()->route('backend.admin.pos.contact_book.supplier');
	}
	
	
	public function editSupplier(Request $request,$id){
		$opening_balance = !empty($ob_transaction->final_total) ? $this->commonUtil->num_f($ob_transaction->final_total) : 0;
		$contact = DB::connection('mysql_banquet_pos')->table('contacts')->get()->where('id',$id)->first();
		 return view('backend.admin.pos.contact_book.edit_supplier',compact(
				'contact',
				'opening_balance'
		 ));
		 
	}
	
	public function updateSupplier(Request $request,$id){
		 $rules = array(	
			
				'type' => 'required',
				'name' => 'required',
				'supplier_business_name' => 'required',
				'contact_id' => 'required',
				'tax_number' => 'required|numeric',
				'opening_balance' => 'required|numeric',
				'pay_term_number' => 'required|numeric',
				'pay_term_type' => 'required',
				'email' => 'required|email',
				'mobile' => 'required|min:10|numeric',
				'alternate_number' => 'nullable|numeric',
				'landline' => 'nullable|numeric',
				'city' => 'required',
				'state' => 'required',
				'country' => 'required',
				'landmark' => 'nullable',
			
			);
		$this->validate($request , $rules);	
		$business_id = 1;
		$created_by = 1;
		
		$input = $request->only(['type', 'supplier_business_name',
                'name', 'tax_number', 'pay_term_number', 'pay_term_type', 'mobile', 'landline', 'alternate_number', 'city', 'state', 'country', 'landmark', 'customer_group_id', 'contact_id', 'custom_field1', 'custom_field2', 'custom_field3', 'custom_field4', 'email']);
        $input['business_id'] = $business_id;
        $input['created_by'] = $created_by;
        $input['credit_limit'] = $request->input('credit_limit') != '' ? $this->commonUtil->num_uf($request->input('credit_limit')) : null;
		$contact = Contact::where('id',$id)->update($input);
		
		 if(!empty($request->input('opening_balance'))){
                    $this->transactionUtil->createOpeningBalanceTransaction( $request->input('opening_balance'),$business_id,$request->input('contact_id'));
				}
				
		Session::flash('msg','Added Successfully');
		return redirect()->route('backend.admin.pos.contact_book.supplier');
	}
	
	public function deleteSupplier($id){
		 $table = Contact::findorfail($id);
		 $table->delete();
		 Session::flash('errmsg','Deleted Successfully');
		return redirect()->back();
	}
	
	public function viewSupplier(Request $request,$id){
		$contact = DB::connection('mysql_banquet_pos')->table('contacts')->get()->where('id',$id)->first();
		 return view('backend.admin.pos.contact_book.view_supplier',compact(
			'contact'
		 ));
	}
	
	public function payment($id){
		$contact = DB::connection('mysql_banquet_pos')->table('contacts')->get()->where('id',$id)->first();
		 return view('backend.admin.pos.contact_book.payment',compact(
			'contact'
		 ));
	}	
	
	
	/* start customer section*/
	public function customers(){
		$contact = DB::connection('mysql_banquet_pos')->table('contacts')->where('deleted_at','=',NULL)->get();
		 return view('backend.admin.pos.contact_book.customers',compact(
			'contact'
		 ));
	}
	
	public function addCustomer(){
		 return view('backend.admin.pos.contact_book.add_customer');
	}
	
	public function storeCustomer(Request $request){
		
		 $rules = array(
			'type' => 'required',
			'name' => 'required',
			'contact_id' => 'required',
			'tax_number' => 'required',
			'opening_balance' => 'required',
			'credit_limit' => 'nullable',
			'customer_group_id' => 'nullable',
			'email' => 'required|email',
			'mobile' => 'required|max:10',
			'alternate_number' => 'nullable|max:10',
			'landline' => 'nullable',
			'city' => 'required',
			'state' => 'required',
			'country' => 'required',
			'landmark' => 'nullable',
		 );
		$this->validate($request,$rules);
		
		
		$user = DB::connection('mysql_banquet_pos')->table('users')->get()->first();
		$contact = DB::connection('mysql_banquet_pos')->table('contacts')->get()->first();
		$business_id = $user->business_id;
		$created_by = $contact->created_by;
	
		$input = $request->only(['type', 'supplier_business_name','credit_limit',
                'name', 'tax_number', 'mobile', 'landline', 'alternate_number', 'city', 'state', 'country', 'landmark', 'customer_group_id', 'contact_id', 'custom_field1', 'custom_field2', 'custom_field3', 'custom_field4', 'email']);
        $input['business_id'] = $business_id;
        $input['created_by'] = $created_by;
		  $input['credit_limit'] = $request->input('credit_limit') != '' ? $this->commonUtil->num_uf($request->input('credit_limit')) : null;
		$count = 0;
			
            if (!empty($input['contact_id'])) {
                $count = Contact::where('business_id', $input['business_id'])
                                ->where('contact_id', $input['contact_id'])
                                ->count();
            }
				if ($count == 0) {
                //Update reference count
                $ref_count = $this->commonUtil->setAndGetReferenceCount('contacts');

                if (empty($input['contact_id'])) {
                    //Generate reference number
                    $input['contact_id'] = $this->commonUtil->generateReferenceNumber('contacts', $ref_count);
                }
				            

		$contact = Contact::create($input);
		
		 if(!empty($request->input('opening_balance'))){
			//print_r($business_id);
			//die;
                    $this->transactionUtil->createOpeningBalanceTransaction( $business_id,$request->input('contact_id'),$request->input('opening_balance'));
				}
				}
		Session::flash('msg','Added Successfully');
		return redirect()->route('backend.admin.pos.contact_book.customer');
		
	}
	
	public function editCustomer(Request $request,$id){
		$opening_balance = !empty($ob_transaction->final_total) ? $this->commonUtil->num_f($ob_transaction->final_total) : 0;
		$contact = DB::connection('mysql_banquet_pos')->table('contacts')->get()->where('id',$id)->first();
 return view('backend.admin.pos.contact_book.edit_customer',compact(
		'opening_balance',
		'contact'
	));		
	
	}
	
	public function updateCustomer(Request $request,$id){
		 $rules = array(
			'type' => 'required',
			'name' => 'required',
			'contact_id' => 'required',
			'tax_number' => 'required',
			'opening_balance' => 'required',
			'credit_limit' => 'nullable',
			'customer_group_id' => 'nullable',
			'email' => 'required|email',
			'mobile' => 'required|max:10',
			'alternate_number' => 'nullable|max:10',
			'landline' => 'nullable',
			'city' => 'required',
			'state' => 'required',
			'country' => 'required',
			'landmark' => 'nullable',
		 );
		$this->validate($request,$rules);
		
		
		$user = DB::connection('mysql_banquet_pos')->table('users')->get()->first();
		$contact = DB::connection('mysql_banquet_pos')->table('contacts')->get()->first();
		$business_id = $user->business_id;
		$created_by = $contact->created_by;
	
		$input = $request->only(['type', 'supplier_business_name','credit_limit',
                'name', 'tax_number', 'mobile', 'landline', 'alternate_number', 'city', 'state', 'country', 'landmark', 'customer_group_id', 'contact_id', 'custom_field1', 'custom_field2', 'custom_field3', 'custom_field4', 'email']);
        $input['business_id'] = $business_id;
        $input['created_by'] = $created_by;
		  $input['credit_limit'] = $request->input('credit_limit') != '' ? $this->commonUtil->num_uf($request->input('credit_limit')) : null;
		$count = 0;

                //Check Contact id
                if (!empty($input['contact_id'])) {
                    $count = Contact::where('business_id', $business_id)
                            ->where('contact_id', $input['contact_id'])
                            ->where('id', '!=', $id)
                            ->count();
                }
                
                if ($count == 0) {
                    $contact = Contact::where('business_id', $business_id)->findOrFail($id);
                    foreach ($input as $key => $value) {
                        $contact->$key = $value;
                    }
                    $contact->save();

                    //Get opening balance if exists
                    $ob_transaction =  Transaction::where('contact_id', $id)
                                            ->where('type', 'opening_balance')
                                            ->first();

                    if(!empty($ob_transaction)){
                        $amount = $this->commonUtil->num_uf($request->input('opening_balance'));
                        $ob_transaction->final_total = $amount;
                        $ob_transaction->save();
                        //Update opening balance payment status
                        $this->transactionUtil->updatePaymentStatus($ob_transaction->id, $ob_transaction->final_total);
                    } else {
                        //Add opening balance
                        if(!empty($request->input('opening_balance'))){
                            $this->transactionUtil->createOpeningBalanceTransaction($business_id, $contact->id, $request->input('opening_balance'));
                        }
                    }
				}
		Session::flash('msg','Updated Successfully');
		return redirect()->route('backend.admin.pos.contact_book.customer');
	}
	public function deleteCustomer($id){
		$table = Contact::findorfail($id);
		$table->delete();
		Session::flash('errmsg','Deleted Successfully');
		return redirect()->back();
	}
	
	public function viewCustomer($id){
			$contact = DB::connection('mysql_banquet_pos')->table('contacts')->get()->where('id',$id)->first();
		 return view('backend.admin.pos.contact_book.view_customer',compact(
			'contact'
		 ));
	}
	
	
	/*Start of customerGroups*/
	public function customerGroups(){
		$group = DB::connection('mysql_banquet_pos')->table('customer_groups')->get();
		 return view('backend.admin.pos.contact_book.customer_groups',compact(
		 
		 'group'
		 ));
	}
	
	public function addCustomerGroup(){
		 return view('backend.admin.pos.contact_book.add_customer_group');
	}
	
	
	public function storeCustomerGroup(Request $request){
		
		$rules = array(
			'name' => 'required',
			'amount' => 'required|numeric',
		);
		$this->validate($request , $rules);
	$user = DB::connection('mysql_banquet_pos')->table('users')->get()->first();
		$contact = DB::connection('mysql_banquet_pos')->table('contacts')->get()->first();
		$business_id = $user->business_id;
		$created_by = $contact->created_by;
	$input = $request->only(['name', 'amount']);
	$input['business_id'] = $business_id;
    $input['created_by'] = $created_by;
	$group = CustomerGroup::create($input);
	Session::flash('msg','Added Successfully');
	return redirect()->route('backend.admin.pos.contact_book.customer_group');
	}
	
	public function editCustomerGroup(Request $request,$id){
	
	$group = DB::connection('mysql_banquet_pos')->table('customer_groups')->get()->where('id',$id)->first();
	return view('backend.admin.pos.contact_book.edit_customer_group',compact(
	'group'
	));
	}
	public function updateCustomerGroup(Request $request,$id){
		$rules = array(
			'name' => 'required',
			'amount' => 'required|numeric',
		);
		$this->validate($request , $rules);
		$user = DB::connection('mysql_banquet_pos')->table('users')->get()->first();
		$contact = DB::connection('mysql_banquet_pos')->table('contacts')->get()->first();
		$business_id = $user->business_id;
		$created_by = $contact->created_by;
	$input = $request->only(['name', 'amount']);
	$input['business_id'] = $business_id;
    $input['created_by'] = $created_by;
	$group = CustomerGroup::where('id',$id)->update($input);
	Session::flash('msg','Updated Successfully');
	return redirect()->route('backend.admin.pos.contact_book.customer_group');
	}
	
	public function deleteCustomerGroup(Request $request,$id){
		$table = CustomerGroup::findorfail($id);
		$table->delete();
		Session::flash('errmsg','Deleted Successfully');
		return redirect()->back();
		
	}
	
}

