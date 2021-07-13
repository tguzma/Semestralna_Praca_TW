<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class AddProductController extends Controller
{
    public function insertform(){
        return view('add');
        }
        public function insert(Request $request){
        $ID = $request->input('id');
        $product_name = $request->input('product_name');
        $price = $request->input('price');
        $description = $request->input('description');
        $number_in_stock = $request->input('number_in_stock');
        $data=array("id"=>$ID,"product_name"=>$product_name,"price"=>$price,"description"=>$description,"number_in_stock"=>$number_in_stock);
        DB::table('products')->insert($data);
        return redirect('adminpage');
    }
}
