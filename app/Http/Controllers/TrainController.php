<?php

namespace App\Http\Controllers;
<<<<<<< HEAD

use App\Models\Brand;
use App\Models\Train;
=======
use App\Models\Brand;

>>>>>>> 505452f9056f70a9f4f1486242ad270a430a8a7d
use Illuminate\Http\Request;

class TrainController extends Controller
{
<<<<<<< HEAD
    public function addTrainPage(){
//        $brands = Brand::all();
        $brands = app('App\Http\Controllers\BrandController')->getAllBrand();
        return view('addTrain' , ['brands' => $brands, 'dffff' => "4324425"]);
    }
    public  function addTrain(Request $request){
        $train = Train::create($request->all());
        if ($train){
            return 'ok';
        }else{
            return 'no';
        }

    }
=======
    //

>>>>>>> 505452f9056f70a9f4f1486242ad270a430a8a7d
}
