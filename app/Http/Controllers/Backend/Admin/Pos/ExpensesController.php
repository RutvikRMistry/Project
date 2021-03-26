<?php
namespace App\Http\Controllers\Backend\Admin\Pos;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Model\POS\Transaction;
use App\Model\POS\ExpenseCategory;
use App\Model\POS\BusinessLocation;
use App\Model\POS\User;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Input;
use File;
use DB;
use Session;
use App\Http\Controllers\Controller;
use App\Utils\TransactionUtil;
use App\Utils\ModuleUtil;


class ExpensesController extends Controller
{
	
		public function __construct(TransactionUtil $transactionUtil, ModuleUtil $moduleUtil)
    {
        $this->transactionUtil = $transactionUtil;
        $this->moduleUtil = $moduleUtil;
    }
	
    public function index(){
		$business_id = 1;
		
		$expenses = Transaction::leftJoin('expense_categories AS ec', 'transactions.expense_category_id', '=', 'ec.id')
                        ->join('business_locations AS bl','transactions.location_id','=','bl.id')
                        ->leftJoin('users AS U', 'transactions.expense_for', '=', 'U.id')
                        ->where('transactions.business_id', '=', $business_id)
                        ->where('transactions.type', 'expense')
                        ->select(
                            'transactions.id',
                            'transactions.business_id',
                            'document',
                            'transaction_date',
                            'ref_no',
                            'ec.name as category',
                            'payment_status',
                            'additional_notes',
                            'final_total',
                            'bl.name as location_name',	
                            DB::raw("CONCAT(COALESCE(U.surname, ''),' ',COALESCE(U.first_name, ''),' ',COALESCE(U.last_name,'')) as expense_for")
                        )->get();
					$final_total = $expenses->sum('final_total');
						
		 return view('backend.admin.pos.expenses.index',compact(
			'expenses',
			'final_total'
		 ));
	}	
	
	public function add(){
		$business_id = 1;
		 $business_locations = BusinessLocation::where('business_id',$business_id)->first();

        $expense_categories = ExpenseCategory::where('business_id', $business_id)->get();
        $users = User::where('business_id',$business_id)->get();
		 return view('backend.admin.pos.expenses.add',compact(
		 'expense_categories',
		 'business_locations', 
		 'users'
		 ));
	}
	
	
	public function store(Request $request){
		$rules = array(
		
			'location_id' => 'required',
			'ref_no' => 'required',
			'expense_category_id' => 'required',
			'transaction_date' => 'required',
			'payment_status' => 'required',
			'final_total' => 'required|numeric',
			'expense_for' => 'required',
			//'document' => 'required|image|max:10000',
			'additional_notes' => 'nullable',
		);
		$this->validate($request ,$rules);
		
									//$request->session()->get('user.business_id');

            //Check if subscribed or not
            
            $transaction_data = $request->only([ 'ref_no', 'transaction_date', 'location_id', 'final_total', 'payment_status', 'expense_for', 'additional_notes', 'expense_category_id']);
			$business_id = 1;
            $user_id = 1;									//$request->session()->get('user.id');
            $transaction_data['business_id'] = $business_id;
            $transaction_data['created_by'] = $user_id;
            $transaction_data['type'] = 'expense';
            $transaction_data['status'] = 'final';
            $transaction_data['transaction_date'] = $this->transactionUtil->uf_date($transaction_data['transaction_date']);
            $transaction_data['final_total'] = $this->transactionUtil->num_uf(
                $transaction_data['final_total']
            );

            //Update reference count
            $ref_count = $this->transactionUtil->setAndGetReferenceCount('expense','1');
            //Generate reference number
            if (empty($transaction_data['ref_no'])) {
                $transaction_data['ref_no'] = $this->transactionUtil->generateReferenceNumber('expense', $ref_count);
            }


            //upload document
            if ($request->hasFile('document') && $request->file('document')->isValid()) {
                if ($request->document->getSize() <= config('constants.document_size_limit')) {
                    $new_file_name = time() . '_' . $request->document->getClientOriginalName();
                    $path = $request->document->storeAs('public/documents', $new_file_name);
                    $transaction_data['document'] = str_replace('public/documents/', '', $path);
                }
            }

            $transaction = Transaction::create($transaction_data);
			Session::flash('msg','Added Successfully');
			return redirect()->route('backend.admin.pos.expenses.index');
	}
	
	public function edit($id){
		$business_id = 1;
		 $business_locations = BusinessLocation::where('business_id',$business_id)->first();

        $expense_categories = ExpenseCategory::where('business_id', $business_id)->get();
       
                               
        $expense = DB::connection('mysql_banquet_pos')->table('transactions')->get()->where('id',$id)->first();
       // $expense = Transaction::where('business_id', $business_id)
                               // ->where('id', $id)
                               // ->first();
        $users = User::where('business_id',$business_id)->get();
		return view('backend.admin.pos.expenses.edit',compact(
		
			'business_locations',
			'expense_categories',
			'expense',
			'users',
		));
	}
	public function update(Request $request,$id){
		$rules = array(
		
			'location_id' => 'required',
			'ref_no' => 'required',
			'expense_category_id' => 'required',
			'transaction_date' => 'required',
			'payment_status' => 'required',
			'final_total' => 'required|numeric',
			'expense_for' => 'required',
			//'document' => 'required|image|max:10000',
			'additional_notes' => 'nullable',
		);
		$this->validate($request ,$rules);
		 $transaction_data = $request->only([ 'ref_no', 'transaction_date', 'location_id', 'final_total', 'payment_status', 'expense_for', 'additional_notes', 'expense_category_id']);
			$business_id = 1;
            $user_id = 1;									//$request->session()->get('user.id');
            $transaction_data['business_id'] = $business_id;
            $transaction_data['created_by'] = $user_id;
            $transaction_data['type'] = 'expense';
            $transaction_data['status'] = 'final';
			//$transactionDate = $this->transactionUtil->uf_date($transaction_data['transaction_date']);
             $transaction_data['transaction_date'] = date('Y-m-d', strtotime($transaction_data['transaction_date']));
            $transaction_data['final_total'] = $this->transactionUtil->num_uf(
                $transaction_data['final_total']
            );

            //Update reference count
            $ref_count = $this->transactionUtil->setAndGetReferenceCount('expense','1');
            //Generate reference number
            if (empty($transaction_data['ref_no'])) {
                $transaction_data['ref_no'] = $this->transactionUtil->generateReferenceNumber('expense', $ref_count);
            }


            //upload document
            if ($request->hasFile('document') && $request->file('document')->isValid()) {
                if ($request->document->getSize() <= config('constants.document_size_limit')) {
                    $new_file_name = time() . '_' . $request->document->getClientOriginalName();
                    $path = $request->document->storeAs('public/documents', $new_file_name);
                    $transaction_data['document'] = str_replace('public/documents/', '', $path);
                }
            }
						
            $transaction = Transaction::where('business_id', $business_id)
                                ->where('id', $id)
                                ->update($transaction_data);
										 
										
							
			Session::flash('msg','Updated Successfully');
			return redirect()->route('backend.admin.pos.expenses.index');
	}
	public function delete($id){
	
	    $table = Transaction::findorfail($id);
		$table->delete();
		Session::flash('errmsg','Deleted Successfully');
		return redirect()->back();
			
	}
	/* expenses category*/
	public function category(){
		$category = DB::connection('mysql_banquet_pos')->table('expense_categories')->where('deleted_at','=',NULL)->get();
		 return view('backend.admin.pos.expenses.category',compact(
		 'category'
		 ));
	}
	
	public function addCategory(){
		 return view('backend.admin.pos.expenses.add_category');
	}
	
	public function storeCategory(Request $request){
		
		
		$rules = array(
			'name' => 'required',
			'code' => 'nullable|max:10',
		);
		$this->validate($request , $rules);
		$input = $request->only(['name', 'code']);
            $input['business_id'] = 1;

            $category = ExpenseCategory::create($input);
			Session::flash('msg','Added Successfully');
			return redirect()->route('backend.admin.pos.expenses.category');
	}
	
	public function editCategory(Request $request,$id){
		$cat = DB::connection('mysql_banquet_pos')->table('expense_categories')->where('id',$id)->get()->first();
		return view('backend.admin.pos.expenses.edit_category',compact(
		'cat'
		));
	}
	
	public function updateCategory(Request $request,$id){
		$rules = array(
			'name' => 'required',
			'code' => 'nullable|max:10',
		);
		$this->validate($request , $rules);
		$input = $request->only(['name', 'code']);
            $input['business_id'] = 1;

            $category = ExpenseCategory::where('id',$id)->update($input);
			Session::flash('msg','Updated Successfully');
			return redirect()->route('backend.admin.pos.expenses.category'); 
	}
	
	public function deleteCategory(Request $request,$id){
		 $category = ExpenseCategory::findorfail($id);
		 $category->delete();
		 Session::flash('errmsg','Deleted Successfully');
		 return redirect()->back();
	}
}
