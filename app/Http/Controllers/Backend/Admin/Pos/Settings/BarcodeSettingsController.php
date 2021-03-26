<?php
namespace App\Http\Controllers\Backend\Admin\Pos\Settings;

use Illuminate\Http\Request;
use App\Model\POS\Barcode;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Input;
use File;
use App\Http\Controllers\Controller;
use DB;
use Session;
class BarcodeSettingsController extends Controller
{
	public function __construct(Barcode $barcode)
    {
        $this->barcode = $barcode;
       
    }
    public function index(){
		$barcode = DB::connection('mysql_banquet_pos')->table('barcodes')->get();
		 return view('backend.admin.pos.settings.barcodes',compact(
			'barcode'
		 ));
	}	
	
	public function add(){
		 return view('backend.admin.pos.settings.add_barcode');
	}
	
	public function store(Request $request){
		$rules = array(
			'name' => 'required',
			'description' => 'required',
			'paper_height' => 'required|numeric',
			'paper_width' => 'required|numeric',
			'top_margin' => 'required|numeric',
			'left_margin' => 'required|numeric',
			'row_distance' => 'required|numeric',
			'col_distance' => 'required|numeric',
			'stickers_in_one_row' => 'required|numeric',
			'stickers_in_one_sheet' => 'required|numeric',
			'width' => 'required|numeric',
			'height' => 'required|numeric',
			
		
		);
		$this->validate($request,$rules);
		
		$input = $request->only(['name', 'description', 'paper_height', 'paper_width', 'top_margin',
                                    'left_margin', 'row_distance', 'col_distance',
                                    'stickers_in_one_row','stickers_in_one_sheet','is_default','is_continuous','width','height']);
									$barcode = Barcode::create($input);
									Session::flash('msg','Added Succesfully');
									return redirect()->route('backend.admin.pos.setting.barcode');
	}
	
	public function edit($id,Request $request){
		$barcode = DB::connection('mysql_banquet_pos')->table('barcodes')->get()->where('id',$id)->first();
		 return view('backend.admin.pos.settings.edit_barcode',compact(
			'barcode'
		 ));
	}
	public function update($id,Request $request){
		$rules = array(
			'name' => 'required',
			'description' => 'required',
			'paper_height' => 'required|numeric',
			'paper_width' => 'required|numeric',
			'top_margin' => 'required|numeric',
			'left_margin' => 'required|numeric',
			'row_distance' => 'required|numeric',
			'col_distance' => 'required|numeric',
			'stickers_in_one_row' => 'required|numeric',
			'stickers_in_one_sheet' => 'required|numeric',
			'width' => 'required|numeric',
			'height' => 'required|numeric',
			
		
		);
		$this->validate($request,$rules);
		 $input = $request->only(['name', 'description', 'paper_height', 'paper_width', 'top_margin',
                                    'left_margin', 'row_distance', 'col_distance',
                                    'stickers_in_one_row','stickers_in_one_sheet','is_default','is_continuous','width','height']);
		$barcode = Barcode::where('id', $id)->update($input);
		Session::flash('msg','Updated Succesfully');
		return redirect()->route('backend.admin.pos.setting.barcode');
	}
	public function delete($id){
		$table = Barcode::findorfail($id);
		$table->delete();
		Session::flash('errmsg','Deleted Succesfully');
		return redirect()->back();
	}
	
	
}
