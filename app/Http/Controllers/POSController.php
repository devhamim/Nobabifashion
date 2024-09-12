<?php

namespace App\Http\Controllers;

use App\Models\Attribute;
use App\Models\Billingdetails;
use App\Models\DelevaryCharge;
use App\Models\Inventory;
use App\Models\Order;
use App\Models\OrderProduct;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;

class POSController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::where('status', 1)->get();
        $delevarychareg = DelevaryCharge::all();
        return view('backend.order.addorder',[
            'products'=>$products,
            'delevarychareg'=>$delevarychareg,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:225',
            'mobile' => 'required|min:11|max:11',
            'address' => 'required|max:225',
            'district' => 'required',
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

        // Create an order
        $order = Order::create([
            'order_id' => $order_id,
            'delivery_charge' => $request->delivery_charge,
            'sub_total' => $request->sub_total,
            'discount' => $request->discount,
            'paid' => $request->paid,
            'due' => $request->due,
            'total' => $request->total,
            'order_note' => $request->order_note,
            'created_at' => Carbon::now(),
        ]);

        // Create billing details
        Billingdetails::create([
            'order_id' => $order_id,
            'name' => $request->name,
            'mobile' => $request->mobile,
            'address' => $request->address,
            'district' => $request->district,
            'note' => $request->note,
            'created_at' => Carbon::now(),
        ]);

        $productIds = $request->product_id;
        $prices = $request->price;

        foreach ($request->quantity as $key => $quantity) {
            if (isset($productIds[$key]) && isset($prices[$key])) {
                $attribute_id = is_array($request->attribute_id) ? $request->attribute_id[$key] : $request->attribute_id;
                $inventory_id = is_array($request->inventory_id) ? $request->inventory_id[$key] : $request->inventory_id;

                OrderProduct::create([
                    'order_id' => $order_id,
                    'product_id' => $productIds[$key],
                    'quantity' => $quantity,
                    'price' => $prices[$key],
                    'attribute_id' => $attribute_id,
                    'inventory_id' => $inventory_id,
                    'created_at' => Carbon::now(),
                ]);
            } else {
                echo 'nai';
            }
        }
        return back()->withSuccess('Order added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    // getProduct
    public function getProduct(Request $request) {
        $productId = $request->input('product_id');
        if (!$productId) {
            return response()->json(['error' => 'No product ID provided.']);
        }

        $product = Product::find($productId);
        if (!$product) {
            return response()->json(['error' => 'Product not found.']);
        }

        $inventory = Inventory::where('id', $product->inventorie_id)->with('rel_to_attribute')->first();
        if (!$inventory) {
            return response()->json(['error' => 'Inventory not found for the product.']);
        }

        $attributes = Attribute::where('inventorie_id', $inventory->id)
            ->with(['rel_to_color', 'rel_to_size'])
            ->get();

        // Fallback for attributes without color, size, or weight
        if ($attributes->isEmpty()) {
            $attributes = Attribute::where('inventorie_id', $inventory->id)->first();
        }

        $data = [
            'product_id' => $product->id,
            'productName' => $product->name,
            'inventory_id' => $inventory->id,
            'attribute' => $attributes,
        ];

        return response()->json($data);
    }

    public function getAttributeDetails(Request $request) {
        $attributeId = $request->input('attribute_id');

        if (!$attributeId) {
            return response()->json(['error' => 'Attribute ID is required.']);
        }

        $attribute = Attribute::find($attributeId);

        if (!$attribute) {
            return response()->json(['error' => 'Attribute not found.']);
        }

        $data = [
            'attribute_id' => $attribute->id,
            'inventory_id' => $attribute->inventory_id,
            'price' => $attribute->sell_price ? $attribute->sell_price : $attribute->price,
            'quantity' => $attribute->quantity,
            'weight' => $attribute->weight ?? null,
        ];

        return response()->json($data);
    }



}
