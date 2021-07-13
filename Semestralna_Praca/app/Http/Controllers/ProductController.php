<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    function show()
    {
        $data = Product::all();
        $role = Auth::user()->role;
        if ($role === 'admin') {
            return view('adminpage', ['products' => $data]);
        }
        return redirect('dashboard');
    }

    function showGuest()
    {
        $data = Product::all();
        return view('welcome', ['products' => $data]);
    }
    function showAllOrders()
    {
        $data = Order::all();

        $role = Auth::user()->role;
        if ($role === 'admin') {
            return view('adminOrders', ['orders' => $data]);
        }
        return redirect('dashboard');
    }

    function showToCustomer()
    {
        $data = Product::all();
        return view('dashboard', ['products' => $data]);
    }

    function delete($id)
    {
        $data = Product::find($id);
        $data->delete();
        $role = Auth::user()->role;
        if ($role === 'admin') {
            return redirect('adminpage');
        }
        return redirect('dashboard');
    }
    function deleteOrder($id)
    {
        $data = Order::find($id);
        $data->delete();

        $role = Auth::user()->role;
        if ($role === 'admin') {
            return redirect('adminOrders');
        }
        return redirect('dashboard');
    }

    function showEditing($id)
    {
        $data = Product::find($id);
        $role = Auth::user()->role;
        if ($role === 'admin') {
            return view('edit', ['data' => $data]);
        }
        return redirect('dashboard');
    }

    function edit(Request $request)
    {
        $data = Product::find($request->id);
        $data->product_name = $request->product_name;
        $data->price = $request->price;
        $data->description = $request->description;
        $data->number_in_stock = $request->number_in_stock;
        $data->save();
        $role = Auth::user()->role;
        if ($role === 'admin') {
            return redirect('adminpage');
        }
        return redirect('dashboard');
    }


    function showOrder($id)
    {
        $data = Product::find($id);
        return view('order', ['data' => $data]);
    }

    function order(Request $request)
    {
        $data = Product::find($request->id);
        $numberToOrder = $request->numberToOrder;
        $ID = $data->id;
        $product_name = $data->product_name;
        $price = $data->price * $numberToOrder;


        $data->number_in_stock -= $numberToOrder;
        $data->save();
        $data = array("product_id" => $ID, "product_name" => $product_name, "number_requested" => $numberToOrder, "total_price" => $price, "customer_username" => Auth::user()->name, "customer_adress" => Auth::user()->adress);
        DB::table('orders')->insert($data);
        return redirect('dashboard');
    }
}
