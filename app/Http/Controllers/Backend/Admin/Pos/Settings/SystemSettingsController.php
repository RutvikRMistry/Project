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
class SystemSettingsController extends Controller
{
	protected $busines;

public function __construct(Business $business)
    {
        $this->business = $business;
		
		$this->avlble_modules = ['tables' => [ 'name' => __('tables'),
                                                    'tooltip' => __('tooltip_tables')] ,
                                    'modifiers' => [ 'name' => __('modifiers'),
                                                    'tooltip' => __('tooltip_modifiers')] ,
                                    'service_staff' => [ 'name' => __('service staff'),
                                                        'tooltip' => __('tooltip service_staff') ],
                                    'kitchen' => [ 'name' => __('kitchen for restaurant')]
                                ];
								
		 $this->theme_colors = [
            'blue' => 'Blue',
            'black' => 'Black',
            'purple' => 'Purple',
            'green' => 'Green',
            'red' => 'Red',
            'yellow' => 'Yellow',
            'blue-light' => 'Blue Light',
            'black-light' => 'Black Light',
            'purple-light' => 'Purple Light',
            'green-light' => 'Green Light',
            'red-light' => 'Red Light',
        ];
	}
	
    public function index(){
		$business = new Business();
		$business = DB::connection('mysql_banquet_pos')->table('business')->get()->first();
		 $shortcuts = json_decode($business->keyboard_shortcuts, true);
        if (empty($business->pos_settings)) {
            $pos_settings = $this->busines->defaultPosSettings();
        } else {
            $pos_settings = json_decode($business->pos_settings, true);
        }
		// $enabled_modules = json_decode($business->enabled_modules, true);
		$modules = $this->avlble_modules;

        $theme_colors = $this->theme_colors;
		 return view('backend.admin.pos.settings.system_settings',compact(
			'business',
			'shortcuts',
			'pos_settings',
			'modules',
			'theme_colors',
			//'enabled_modules'
		));
		
	}	
	
	 public function update(Request $request ,$id){
		
			 //echo '<pre>'; 
			//print_r($request->only(['theme_color']));
			//die;
			 $input = $request->all();
			$update_data = $request->only(['theme_color']);
			$shortcuts = $request->input('shortcuts');
            $update_data['keyboard_shortcuts'] = json_encode($shortcuts);
			 $pos_settings = $request->input('pos_settings');
            $default_pos_settings = $this->business->defaultPosSettings();
			 foreach ($default_pos_settings as $key => $value) {
                if (!isset($pos_settings[$key])) {
                    $pos_settings[$key] = $value;
                }
            }
            $update_data['pos_settings'] = json_encode($pos_settings);
			$update_data['enabled_modules'] = json_encode($request->input('enabled_modules'));
			Business::where('id', $id)->update($update_data);
			
		Session::flash('msg','Updated Successfully');
		return redirect()->route('backend.admin.pos.setting.system_setting');
	}
	
}
