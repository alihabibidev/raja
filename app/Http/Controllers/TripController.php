<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Train;
use App\Models\Trip;
use App\Models\Trips;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class TripController extends Controller
{
    public function addTripPage()
    {
        $trips = Trips::all();
        $trips = Trips::with(['brand'])->get();
        return view('admin.addTrip', ['trip' => $trips]);
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
    public function showAllTripPage()
    {
        $trips = Trips::paginate(10);
        return view('admin.showAllTrips', ['trips' => $trips]);
    }

    public function getAllTrips(){
        $trips = Trips::all();
        return $trips;
    }

    public function deleteTrip($id)
    {
        $trip = Trips::find($id);
        if (!$trip) {
            return Redirect::back()->with(["error" => "trip not found"]);
        }
        $trip->delete();
        return Redirect::back()->with(["success" => "trip successfully deleted"]);
    }
    public  function editTripPage($id){
        $trip = Trips::find($id);
        return view('admin.editTrip',['trip'=>$trip]);
    }
    public  function editTripAction(Request $request){
        $id = $request->id;
        $star = $request->star;
        $origin = $request->origin;
        $destination = $request->destination;
        $price= $request->price;
        $off_price = $request->off_price;
        $time = $request->time;
        $capacity = $request->capacity;


        $trip = Trips::find($id);
        $trip->star= $star;
        $trip->origin = $origin;
        $trip->destination = $destination;
        $trip->price = $price;
        $trip->off_price = $off_price;
        $trip->time= $time;
        $trip->capacity= $capacity;




        $trip->save();
        return Redirect::route('showtrip')->with(["success" => "trip successfully updated"]);


    }

}
