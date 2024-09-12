<?php

namespace App\Http\Controllers;

use App\Models\Billingdetails;
use App\Models\customers;
use App\Models\Inventory;
use App\Models\Order;
use App\Models\OrderProduct;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Str;

class landingpageController extends Controller
{
    //sharee
    function landing_page(){
        $products = Product::find(31);
        return view('landingpage.index',[
            'products'=>$products,
        ]);
    }

    //premium_dress
    function premium_dress(){
        $products = Product::find(44);
        return view('landingpage.six',[
            'products'=>$products,
        ]);
    }

    // function pakabahar_red(){
    function pakabahar_red(){
        $products = Product::find(57);
        return view('landingpage.nine',[
            'products'=>$products,
        ]);
    }
    //pakabahar_blue
    function pakabahar_blue(){
        $products = Product::find(54);
        return view('landingpage.ten',[
            'products'=>$products,
        ]);
    }
    //pakabahar_yellow
    function pakabahar_yellow(){
        $products = Product::find(56);
        return view('landingpage.eleven',[
            'products'=>$products,
        ]);
    }
    //pakabahar_blackandwhite
    function pakabahar_blackandwhite(){
        $products = Product::find(55);
        return view('landingpage.twelve',[
            'products'=>$products,
        ]);
    }
    //premium_pakabahar
    function premium_pakabahar(){
        $products = Product::find(58);
        return view('landingpage.fourty',[
            'products'=>$products,
        ]);
    }

    // landing_order_store
    function landing_order_store(Request $request){
        $request->validate([
            'name' => 'required',
            'mobile' => 'required|min:11|max:11',
            'address' => 'required',
            'color' => 'required|array|min:1',
            'color.*' => 'string',
        ]);


        // $tenMinutesAgo = Carbon::now()->subMinutes(10);
        // if(OrderProduct::where('product_id', $request->product_id)->where('created_at', '>=',$tenMinutesAgo)->exists()){
        //     if(Billingdetails::where('mobile', $request->mobile)->where('created_at', '>=', $tenMinutesAgo)->exists()){
        //         return back()->with('error', 'You have already placed an order');
        //     }
        // }

        $lastOrder = Order::orderBy('id', 'desc')->first();
        if ($lastOrder) {
            $lastOrderId = $lastOrder->order_id;
            $lastOrderNumber = intval(substr($lastOrderId, 4));
        } else {
            $lastOrderNumber = 0;
        }
        $newOrderNumber = $lastOrderNumber + 1;
        $order_id = 'NIT-' . str_pad($newOrderNumber, 8, '0', STR_PAD_LEFT);

        $district = ($request->shipping_cost == 60) ? 'Dhaka' : 'Outside Dhaka';

        Billingdetails::insert([
            'order_id' => $order_id,
            'name' => $request->name,
            'mobile' => $request->mobile,
            'address' => $request->address,
            'district' => $district,
            'note' => $request->note,
            'created_at' => Carbon::now(),
        ]);

        if($request->radio_btn == 1){
            $price = $request->price;
        }

        $subtotal = $price * $request->quantity;

        Order::insert([
            'order_id' => $order_id,
            'sub_total' => $subtotal,
            'delivery_charge' => $request->shipping_cost,
            'total' => $subtotal + $request->shipping_cost,
            'color' => implode(',', $request->color),
            'landing' => 2,
            'created_at' => Carbon::now(),
        ]);

        OrderProduct::create([
            'order_id' => $order_id,
            'product_id' => $request->product_id,
            'quantity' => $request->quantity,
            'price' => $price,
            'attribute_id' => $request->attribute_id,
            'inventory_id' => $request->inventory_id,
            'created_at' => Carbon::now(),
        ]);

        return redirect()->route('order.success')->with('order_id', $order_id);
    }
    //batik_dress
    function batik_dress(){
        $products = Product::find(33);
        return view('landingpage.five',[
            'products'=>$products,
        ]);
    }

    //black_dress
    function black_dress(){
        $products = Product::find(32);
        return view('landingpage.foreth',[
            'products'=>$products,
        ]);
    }
    //putul_dress
    function putul_dress(){
        $products = Product::find(42);
        return view('landingpage.threepage',[
            'products'=>$products,
        ]);
    }

    //fotula
    function fotula(){
        $products = Product::find(45);
        return view('landingpage.saven',[
            'products'=>$products,
        ]);
    }
    //premium_futula
    function premium_futula(){
        $products = Product::find(53);
        return view('landingpage.thirty',[
            'products'=>$products,
        ]);
    }
    //premium_tiya
    function premium_tiya(){
        $products = Product::find(52);
        return view('landingpage.eight',[
            'products'=>$products,
        ]);
    }

    //cloth
    function sharee(){
        return view('landingpage.secondpage');
    }

    // landing_order_store
    function sharee_order_store(Request $request){
            $request->validate([
                'name' => 'required',
                'mobile' => 'required|min:11|max:11',
                'address' => 'required',
            ]);

            $lastOrder = Order::orderBy('id', 'desc')->first();
                if ($lastOrder) {
                    $lastOrderId = $lastOrder->order_id;
                    $lastOrderNumber = intval(substr($lastOrderId, 4));
                } else {
                    $lastOrderNumber = 0;
                }
                $newOrderNumber = $lastOrderNumber + 1;

                $order_id = 'NIT-' . str_pad($newOrderNumber, 8, '0', STR_PAD_LEFT);

                if($request->shipping_cost == 70){
                    $district = 'Dhaka';
                }
                if($request->shipping_cost == 120){
                    $district = 'Outside Dhaka';
                }
                Billingdetails::insert([
                    'order_id' => $order_id,
                    'name' => $request->name,
                    'mobile' => $request->mobile,
                    'address' => $request->address,
                    'district' => $district,
                    'note' => $request->note,
                    'created_at' => Carbon::now(),
                ]);
                if($request->radio_btn == 1){
                    $price = 950;
                    $product_name = 'Modina Dying >টু পিস জামা+ওড়না ১ সেট>৬০ বডি';
                    $quantity = 1;
                }
                if($request->radio_btn == 2){
                    $price = 1800;
                    $product_name = 'Modina Dying >টু পিস জামা+ওড়না ১ সেট>৬০ বডি';
                    $quantity = 2;
                }
                if($request->radio_btn == 3){
                    $price = 2600;
                    $product_name = 'Modina Dying >টু পিস জামা+ওড়না ১ সেট>৬০ বডি';
                    $quantity = 3;
                }
                if($request->radio_btn == 4){
                    $price = 3600;
                    $product_name = 'Modina Dying >টু পিস জামা+ওড়না ১ সেট>৬০ বডি';
                    $quantity = 4;
                }

                Order::insert([
                    'order_id' => $order_id,
                    'sub_total' => $price,
                    'delivery_charge' => $request->shipping_cost,
                    'total' => $price + $request->shipping_cost,
                    'color' => $request->color,
                    'landing' => 1,
                    'created_at' => Carbon::now(),
                ]);
                OrderProduct::create([
                    'order_id' => $order_id,
                    'product_id' => $product_name,
                    'quantity' => $quantity,
                    'price' => $price,
                    'created_at' => Carbon::now(),
                ]);
        return back()->with("success","Order has been placed successfully");
    }


}
