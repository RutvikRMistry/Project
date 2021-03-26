<?php
namespace App\Http\Controllers\Backend\Admin;
use App\Model\Floor;
use App\Model\Reservation;
use App\Model\ReservationNight;
use App\Model\RoomType;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ConfigurationController extends Controller
{
    public function index(){		
        return view('backend.admin.configuration');
    }
	
    public function chartData(){
        $subscribe = Reservation::whereYear('created_at', '=', date('Y'))->get()->groupBy(function($d) {
            return $d->created_at->format('F');
        });
        $monthly_chart =collect([]);
        foreach (month_arr() as $key => $value) {
            $monthly_chart->push([
                'month' => Carbon::parse(date('Y').'-'.$key)->format('Y-m'),
                'online' =>$subscribe->has($value)?$subscribe[$value]->where('online',1)->count():0,
                'offline' =>$subscribe->has($value)?$subscribe[$value]->where('online',0)->count():0,
            ]);

        }
        return response()->json($monthly_chart->toArray())->content();
    }
}
