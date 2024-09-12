<?php

namespace App\Http\Controllers;

use App\Models\Attribute;
use App\Models\Inventory;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class CartController extends Controller
{
    // cart_store
    function cart_store(Request $request){
        if($request->inventory_id != null){
            if($request->btn == 2){
                $product_id = $request->product_id;
                $inventory_id = $request->inventory_id;
                $quantity = $request->quantity;
                $attribute_id = $request->attribute_id;

                if (Cookie::get('shopping_cart')) {
                    $cookie_data = stripslashes(Cookie::get('shopping_cart'));
                    $cart_data = json_decode($cookie_data, true);
                } else {
                    $cart_data = [];
                }

                $item_id_list = array_column($cart_data, 'item_id');
                $prod_id_is_there = $product_id;

                if (in_array($prod_id_is_there, $item_id_list)) {
                    foreach ($cart_data as $keys => $values) {
                        if ($cart_data[$keys]["item_id"] == $product_id) {
                            $cart_data[$keys]["item_quantity"] = $request->input('quantity');
                            $item_data = json_encode($cart_data);
                            $minutes = 60;
                            Cookie::queue(Cookie::make('shopping_cart', $item_data, $minutes));
                            return redirect()->route('checkout');
                        }
                    }
                } else {
                    $product = Product::find($product_id);
                    $attribute = Attribute::find($attribute_id);
                    if ($product && $attribute) {
                        $item_array = array(
                            'item_id' => $product_id,
                            'item_inventory' => $inventory_id,
                            'item_name' => urlencode($product->name),
                            'item_weight' => $attribute->weight ?? null,
                            'item_color' => $attribute->color_id ?? null,
                            'item_size' => $attribute->size_id ?? null,
                            'item_quantity' => $quantity,
                            'item_slug' => $product->slug,
                            'item_image' => $attribute->image,
                            'product_price' => $attribute->price,
                            'item_price' => $attribute->sell_price ?? 0,
                            'item_attribute' => $attribute->id,
                        );
                        $cart_data[] = $item_array;

                        $item_data = json_encode($cart_data);
                        $minutes = 60;
                        Cookie::queue(Cookie::make('shopping_cart', $item_data, $minutes));
                        return redirect()->route('checkout');
                    }
                }
            }
            else{
                $product_id = $request->product_id;
                $inventory_id = $request->inventory_id;
                $quantity = $request->quantity;
                $attribute_id = $request->attribute_id;

                if (Cookie::get('shopping_cart')) {
                    $cookie_data = stripslashes(Cookie::get('shopping_cart'));
                    $cart_data = json_decode($cookie_data, true);
                } else {
                    $cart_data = [];
                }

                $item_id_list = array_column($cart_data, 'item_id');
                $prod_id_is_there = $product_id;

                if (in_array($prod_id_is_there, $item_id_list)) {
                    foreach ($cart_data as $keys => $values) {
                        if ($cart_data[$keys]["item_id"] == $product_id) {
                            $cart_data[$keys]["item_quantity"] = $request->input('quantity');
                            $item_data = json_encode($cart_data);
                            $minutes = 60;
                            Cookie::queue(Cookie::make('shopping_cart', $item_data, $minutes));
                            return back()->withError('Cart Already exists');
                        }
                    }
                } else {
                    $product = Product::find($product_id);
                    $attribute = Attribute::find($attribute_id);
                    if ($product && $attribute) {
                        $item_array = array(
                            'item_id' => $product_id,
                            'item_inventory' => $inventory_id,
                            'item_name' => urlencode($product->name),
                            'item_weight' => $attribute->weight ?? null,
                            'item_color' => $attribute->color_id ?? null,
                            'item_size' => $attribute->size_id ?? null,
                            'item_quantity' => $quantity,
                            'item_slug' => $product->slug,
                            'item_image' => $attribute->image,
                            'product_price' => $attribute->price,
                            'item_price' => $attribute->sell_price ?? 0,
                            'item_attribute' => $attribute->id,
                        );
                        $cart_data[] = $item_array;

                        $item_data = json_encode($cart_data);
                        $minutes = 60;
                        Cookie::queue(Cookie::make('shopping_cart', $item_data, $minutes));
                        return back()->withSuccess('Added to Cart');
                    }
                }
            }
        }
        else{
            if($request->btn == 2){
                $product_id = $request->product_id;
                $quantity = $request->quantity;

                if (Cookie::get('shopping_cart')) {
                    $cookie_data = stripslashes(Cookie::get('shopping_cart'));
                    $cart_data = json_decode($cookie_data, true);
                } else {
                    $cart_data = [];
                }

                $item_id_list = array_column($cart_data, 'item_id');
                $prod_id_is_there = $product_id;

                if (in_array($prod_id_is_there, $item_id_list)) {
                    foreach ($cart_data as $keys => $values) {
                        if ($cart_data[$keys]["item_id"] == $product_id) {
                            $cart_data[$keys]["item_quantity"] = $request->input('quantity');
                            $item_data = json_encode($cart_data);
                            $minutes = 60;
                            Cookie::queue(Cookie::make('shopping_cart', $item_data, $minutes));
                            return redirect()->route('checkout');
                        }
                    }
                } else {
                    $product = Product::find($product_id);
                    if ($product) {
                        $item_array = array(
                            'item_id' => $product_id,
                            'item_name' => urlencode($product->name),
                            'item_quantity' => $quantity,
                            'item_slug' => $product->slug,
                            'item_image' => $product->image,
                            'product_price' => $product->price,
                            'item_price' => $product->sell_price ?? 0,
                        );
                        $cart_data[] = $item_array;

                        $item_data = json_encode($cart_data);
                        $minutes = 60;
                        Cookie::queue(Cookie::make('shopping_cart', $item_data, $minutes));
                        return redirect()->route('checkout');
                    }
                }
            }
            else{
                $product_id = $request->product_id;
                $quantity = $request->quantity;

                if (Cookie::get('shopping_cart')) {
                    $cookie_data = stripslashes(Cookie::get('shopping_cart'));
                    $cart_data = json_decode($cookie_data, true);
                } else {
                    $cart_data = [];
                }

                $item_id_list = array_column($cart_data, 'item_id');
                $prod_id_is_there = $product_id;

                if (in_array($prod_id_is_there, $item_id_list)) {
                    foreach ($cart_data as $keys => $values) {
                        if ($cart_data[$keys]["item_id"] == $product_id) {
                            $cart_data[$keys]["item_quantity"] = $request->input('quantity');
                            $item_data = json_encode($cart_data);
                            $minutes = 60;
                            Cookie::queue(Cookie::make('shopping_cart', $item_data, $minutes));
                            return back()->withError('Cart Already exists');
                        }
                    }
                } else {
                    $product = Product::find($product_id);
                    if ($product) {
                        $item_array = array(
                            'item_id' => $product_id,
                            'item_name' => urlencode($product->name),
                            'item_quantity' => $quantity,
                            'item_slug' => $product->slug,
                            'item_image' => $product->image,
                            'product_price' => $product->price,
                            'item_price' => $product->sell_price ?? 0,
                        );
                        $cart_data[] = $item_array;

                        $item_data = json_encode($cart_data);
                        $minutes = 60;
                        Cookie::queue(Cookie::make('shopping_cart', $item_data, $minutes));
                        return back()->withSuccess('Added to Cart');
                    }
                }
            }
        }

    }

    // clear_cart
    function clear_cart() {
        Cookie::queue(Cookie::forget('shopping_cart'));
        return response()->json(['status'=>'Your Cart is Cleared']);
        return redirect()->url('/')->withSuccess('Your cart is cleared');
    }


}
