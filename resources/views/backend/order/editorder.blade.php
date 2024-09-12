@extends('backend.layouts.app')
@section('content')
<div class="content">
    <div class="breadcrumb-wrapper breadcrumb-wrapper-2">
        <h1>Order Detail</h1>
        <p class="breadcrumbs"><span><a href="{{ route('dashboard') }}">Home</a></span>
            <span><i class="mdi mdi-chevron-right"></i></span>Orders
        </p>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="ec-odr-dtl card card-default">
                <div class="card-header card-header-border-bottom d-flex justify-content-between">
                    <h2 class="ec-odr">Order Detail<br>
                        <form action="{{ route('order.status.update') }}" method="POST">
                            @csrf
                            <input type="hidden" name="order_id" value="{{ $orders->id }}">
                            <div class="dropdown">
                                <button class="border-0 bg-body" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                                    @php
                                    if($orders->status == 0){
                                        echo '<span class="btn btn-secondary">Pending</span>';
                                    }
                                    elseif ($orders->status == 1) {
                                        echo '<span class="btn btn-info">On Hold</span>';
                                    }
                                    elseif ($orders->status == 2) {
                                        echo '<span class="btn btn-primary">Processing Order</span>';
                                    }
                                    elseif ($orders->status == 3) {
                                        echo '<span class="btn btn-warning ">On Delivery</span>';
                                    }
                                    elseif ($orders->status == 4) {
                                        echo '<span class="btn btn-success">Confirmed</span>';
                                    }
                                    else {
                                        echo '<span class="btn btn-danger">Cancel Order</span>';
                                    }
                                @endphp
                                </button>

                                <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                  <li>
                                        <button name="status" value="{{ $orders->order_id .','. '0' }}" class="dropdown-item status">Pending</button>
                                    </li>
                                    <li>
                                        <button name="status" value="{{ $orders->order_id .','. '1' }}" class="dropdown-item status">On Hold</button>
                                    </li>
                                    <li>
                                        <button name="status" value="{{ $orders->order_id .','. '2' }}" class="dropdown-item status">Processing Order</button>
                                    </li>
                                    <li>
                                        <button name="status" value="{{ $orders->order_id .','. '3' }}" class="dropdown-item status">On Delivery</button>
                                    </li>
                                    <li>
                                        <button name="status" value="{{ $orders->order_id .','. '4' }}" class="dropdown-item status">Confirmed</button>
                                    </li>
                                    <li>
                                        <button name="status" value="{{ $orders->order_id .','. '5' }}" class="dropdown-item status">Cancel Order</button>
                                    </li>
                                </ul>
                            </div>
                        </form>
                        {{-- <a href="{{ route('invoice.download',$orders->id ) }}" class="btn btn-success">Download Invoice</a> --}}
                        <a href="{{ route('print.invoice',$orders->id ) }}" class="btn btn-success">Download Invoice</a>
                        <span class="small">Order ID: #{{ $orders->order_id }}</span>
                    </h2>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4">
                            <address class="info-grid">
                                <div class="info-title"><strong>Shipped To:</strong></div><br>
                                <div class="info-content">
                                    {{ $bllingdetails->name }}<br>
                                    {{ $bllingdetails->district }}<br>
                                    {{ $bllingdetails->address }}<br>
                                    <abbr title="Phone">P:</abbr> {{ $bllingdetails->mobile }}
                                </div>
                            </address>
                        </div>
                        <div class="col-xl-4 col-lg-4">
                            <address class="info-grid">
                                <div class="info-title"><strong>Note:</strong></div><br>
                                <div class="info-content">
                                    {{ $bllingdetails->note }}
                                </div>
                            </address>
                        </div>
                        <div class="col-xl-4 col-lg-4">
                            <address class="info-grid">
                                <div class="info-title"><strong>Order Date:</strong></div><br>
                                <div class="info-content">
                                    {{ $orders->created_at->format('h:i:s') }}<br>
                                    {{ $orders->created_at->format('d M Y') }}
                                </div>
                            </address>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="tbl-title">PRODUCT SUMMARY</h3>
                            <div class="table-responsive">
                                <table class="table table-striped o-tbl">
                                    <thead>
                                        <tr class="line">
                                            <td><strong>#</strong></td>
                                            <td class="text-center"><strong>IMAGE</strong></td>
                                            <td class="text-center"><strong>PRODUCT</strong></td>
                                            <td class="text-center"><strong>QUANTITY</strong></td>
                                            <td class="text-center"><strong>PRICE/UNIT</strong></td>
                                            <td class="text-right"><strong>SUBTOTAL</strong></td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($orderproduct as $key=>$product)
                                            <tr>
                                                <td>{{ $key+1 }}</td>
                                                <td><img class="product-img"
                                                        src="{{ asset('uploads/product') }}/{{ $product->rel_to_attribute->image }}" alt="" /></td>
                                                <td>
                                                    <strong>{{ $product->rel_to_pro->name }}</strong><br>
                                                    @if ($orders->landing == 1)
                                                        @if ($orders->color)
                                                            Color: {{ $orders->color }},
                                                        @endif
                                                        @if ($orders->size)
                                                            Size:  {{ $orders->size }}
                                                        @endif
                                                    @else
                                                        @if ($product->rel_to_attribute->color_id)
                                                            Color: {{ $product->rel_to_attribute->rel_to_color->name }},
                                                            Size:  {{ $product->rel_to_attribute->rel_to_size->name }}
                                                        @elseif ($product->rel_to_attribute->weight)
                                                            Package: {{ $product->rel_to_attribute->weight }}
                                                        @endif
                                                    @endif
                                                </td>
                                                <td class="text-center">{{ $product->quantity }}</td>
                                                <td class="text-center">{{ number_format($product->rel_to_attribute->sell_price ?? $product->rel_to_attribute->price, 2) }} Tk</td>
                                                <td class="text-right">{{ number_format(($product->rel_to_attribute->sell_price ?? $product->rel_to_attribute->price) * $product->quantity, 2) }} Tk</td>
                                            </tr>

                                        @endforeach
                                        <tr>
                                            <td colspan="4"></td>
                                            <td class="text-right"><strong>Charge (+)</strong></td>
                                            <td class="text-right"><strong>{{ $orders->delivery_charge }} Tk</strong></td>
                                        </tr>
                                        <tr>
                                            <td colspan="4"></td>
                                            <td class="text-right"><strong>Discount (-)</strong></td>
                                            <td class="text-right"><strong>{{ $orders->discount }} Tk</strong></td>
                                        </tr>
                                        @if ($orders->due != 0)
                                            <tr>
                                                <td colspan="4"></td>
                                                <td class="text-right"><strong>Paid (-)</strong></td>
                                                <td class="text-right"><strong>{{ number_format($orders->paid) }} Tk</strong></td>
                                            </tr>
                                            <tr>
                                                <td colspan="4"></td>
                                                <td class="text-right"><strong>Due (-)</strong></td>
                                                <td class="text-right"><strong>{{ number_format($orders->due) }} Tk</strong></td>
                                            </tr>
                                        @endif
                                        <tr>
                                            <td colspan="4">
                                            </td>
                                            <td class="text-right"><strong>Total</strong></td>
                                            <td class="text-right"><strong>{{ number_format($orders->total) }} Tk</strong></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Tracking Detail -->
            <div class="card mt-4 trk-order">
                <div class="p-4 text-center text-white text-lg bg-dark rounded-top">
                    <span class="text-uppercase">Tracking Order No - </span>
                    <span class="text-medium">{{ $orders->order_id }}</span>
                </div>
                <div class="card-body mt-5">
                    <div
                        class="steps d-flex flex-wrap flex-sm-nowrap justify-content-between padding-top-2x padding-bottom-1x">
                        <div class="step {{ $orders->status != 5 ? 'completed':'' }}">
                            <div class="step-icon-wrap">
                                <div class="step-icon"><i class="mdi mdi-gift"></i></div>
                            </div>
                            <h4 class="step-title">Pending</h4>
                        </div>
                        <div class="step {{ $orders->status >= 1 && $orders->status != 5 ? 'completed':'' }}">
                            <div class="step-icon-wrap">
                                <div class="step-icon"><i class="mdi mdi-cart"></i></div>
                            </div>
                            <h4 class="step-title">On Hold</h4>
                        </div>
                        <div class="step {{ $orders->status >= 2 && $orders->status != 5 ? 'completed':'' }}">
                            <div class="step-icon-wrap">
                                <div class="step-icon"><i class="mdi mdi-tumblr-reblog"></i></div>
                            </div>
                            <h4 class="step-title">Processing Order</h4>
                        </div>

                        <div class="step {{ $orders->status >= 3 && $orders->status != 5 ? 'completed':'' }}">
                            <div class="step-icon-wrap">
                                <div class="step-icon"><i class="mdi mdi-truck-delivery"></i></div>
                            </div>
                            <h4 class="step-title">On Delivery</h4>
                        </div>
                        <div class="step {{ $orders->status >= 4 && $orders->status != 5 ? 'completed':'' }}">
                            <div class="step-icon-wrap">
                                <div class="step-icon"><i class="mdi mdi-hail"></i></div>
                            </div>
                            <h4 class="step-title">Confirmed</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- End Content -->
@endsection
