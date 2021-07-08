<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Train;
use App\Models\Trips;
use Illuminate\Http\Request;

class TripController extends Controller
{
    public function addTripPage()
    {
        $trains = Train::all();
        $trains = Train::with(['brand'])->get();
        return view('admin.addTrip', ['trains' => $trains]);
    }

    public function addTrip(Request $request)
    {
        $trip = Trips::create($request->all());
        if ($trip) {
            return 'ok';
        } else {
            return 'no';
        }

    }

    public function getAllTrips(){

    }
}
