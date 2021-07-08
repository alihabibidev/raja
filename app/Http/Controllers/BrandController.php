<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\User;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function addBrand(Request $request)
    {
        $brand = Brand::create($request->all());
        if ($brand){
            return 'ok';
        }else{
            return 'no';
        }
    }
<<<<<<< HEAD
    public function getAllBrand(){
        return Brand::all();
    }
=======


    public function getAllBrand()
    {
       return Brand::all();
    }

>>>>>>> 505452f9056f70a9f4f1486242ad270a430a8a7d
}
