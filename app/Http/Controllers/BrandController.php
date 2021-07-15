<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class BrandController extends Controller
{
    public function getAllBrand(){
        $brands = Brand::all();
        return $brands;
    }
    public function addBrand(Request $request)
    {
        $brand = Brand::create($request->all());
        if ($brand) {
            return 'ok';
        } else {
            return 'no';
        }
    }


    public function showAllBrandPage()
    {
        $brands = Brand::all();
        return view('admin.showAllBrand', ['brands' => $brands]);
    }

    public function deleteBrand($id)
    {
        $brand = Brand::find($id);
        if (!$brand) {
            return Redirect::back()->with(["error" => "brand not found"]);
        }
        $brand->delete();
        return Redirect::back()->with(["success" => "brand successfully deleted"]);
    }
    public  function editBrandPage($id){
        $brand = Brand::find($id);
        return view('admin.editBrand',['brand'=>$brand]);
    }
    public  function editBrandAction(Request $request){
        $id = $request->id;
        $brand_name = $request->brand_name;

        $brand = Brand::find($id);
        $brand->brand_name = $brand_name;

        $brand->save();
        return Redirect::route('showBrand')->with(["success" => "brand successfully updated"]);


    }


}
