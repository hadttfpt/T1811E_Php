<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    //
    public function showAll(Request $request) {
        # code...
        $hotelList = DB::table('hotel')->get();

        return view('hotel.index')->with([
            'hotelList' => $hotelList
        ]);
    }

    public function showDetail(Request $request){
        $hotelList = DB:: table('hotel')->select('maP','loaiP','tang','gia')
        ->get();
        return view('hotel.view')->with([
            'hotelList' => $hotelList
        ]);
    }
}
