<?php
namespace App\Http\Controllers;


use App\Models\Brand;
use App\Models\Train;

use Illuminate\Http\Request;

class TrainController extends Controller
{
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


}
