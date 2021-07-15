<?php
namespace App\Http\Controllers;


use App\Models\Brand;
use App\Models\Train;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class TrainController extends Controller
{
    public function getAllTrain(){
        $trains = Train::all();
        return $trains;
    }
    public function addTrainPage(){
        $brands = Brand::all();
//        $brands = app('App\Http\Controllers\BrandController')->getAllBrand();
        return view('admin.addTrain' , ['brands' => $brands]);
    }
    public  function addTrain(Request $request){
        $train = Train::create($request->all());
        if ($train){
            return 'ok';
        }else{
            return 'no';
        }

    }

    public function showAllTrainPage()
    {
        $trains = Train::all();
        return view('admin.showAllTrain', ['trains' => $trains]);
    }

    public function deleteTrain($id)
    {
        $train = Train::find($id);
        if (!$train) {
            return Redirect::back()->with(["error" => "train not found"]);
        }
        $train->delete();
        return Redirect::back()->with(["success" => "train successfully deleted"]);
    }

    public  function editTrainPage($id){
        $train = Train::find($id);
        return view('admin.editTrain',['train'=>$train]);
    }
    public  function editTrainAction(Request $request){
        $id = $request->id;
        $train_model = $request->train_model;
        $production_date = $request->production_date;

        $train = Train::find($id);
        $train->train_model = $train_model;
        $train->production_date = $production_date;

        $train->save();
        return Redirect::route('showTrain')->with(["success" => "trian successfully updated"]);


    }

}
