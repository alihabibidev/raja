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
    public function getAllBrand(){
        return Brand::all();
    }
}
