@extends('frontend.layouts.app')
@section('content')

<div class="container">
    <div class="toolbox">
        <div class="toolbox-center">
            <div class="toolbox-info">
                <a href="{{ url('/') }}">Home</a> / <span>Category</span>
            </div><!-- End .toolbox-info -->
        </div><!-- End .toolbox-center -->
    </div><!-- End .toolbox -->

    <div class="products">
        <div class="row">
            @foreach ($products as $product)
                <div class="col-6 col-md-4 col-lg-4 col-xl-3">
                    <div class="product home_product_shadwo" style="border-radius: 10px;">
                        <figure class="product-media">
                            {{-- <span class="product-label label-new">off {{$product->price}}Tk</span> --}}
                            <a href="{{route('product.details', $product->slug)}}">
                                @if ($product->inventorie_id != null)
                                    @if ($product->rel_to_inventorie)
                                        @php
                                            $inventorie = $product->rel_to_inventorie
                                        @endphp
                                        @foreach ($inventorie->rel_to_attribute->take(1) as $attribute)
                                            <img src="{{asset('uploads/product')}}/{{ $attribute->image }}" alt="Product image" class="product-image">
                                        @endforeach
                                    @endif
                                @else
                                    <img src="{{asset('uploads/product')}}/{{$product->image}}" alt="Product image" class="product-image">
                                @endif
                            </a>
                            <div class="product-action-vertical">
                                <p style="background-image: url( '{{asset('frontend/assets/images/discount.png')}}' )"></p>
                            </div>

                            <div class="text-center">
                                <form action="#" method="POST">
                                    @csrf
                                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                                    <input type="hidden" name="quantity" value="1">
                                    <a href="{{route('product.details', $product->slug)}}" class="btn-product btn-cart btn-buy mr-5 w-100" name="btn" value="2"><span>অর্ডার করুন</span></a>
                                </form>
                            </div>
                        </figure>

                        <div class="product-body">
                            <h3 class="product-title pb-1"><a href="{{route('product.details', $product->slug)}}">{{Str::limit($product->name, '15', '')}}</a></h3>
                            @if ($product->inventorie_id != null)
                                @if ($product->rel_to_inventorie)
                                    @php
                                        $inventorie = $product->rel_to_inventorie
                                    @endphp
                                    @foreach ($inventorie->rel_to_attribute->take(1) as $attribute)
                                        @if ($attribute->sell_price != null)
                                            <span class="new-price">Tk {{$attribute->sell_price}}</span>
                                            <del style="color: #cccccc">Tk {{$attribute->price}}</del>
                                        @else
                                            <span class="product-price">Tk {{$attribute->price}}</span>
                                        @endif
                                    @endforeach
                                @endif
                            @else
                                @if ($product->sell_price != null)
                                    <span class="new-price">Tk {{$product->sell_price}}</span>
                                    <del style="color: #cccccc">Tk {{$product->price}}</del>
                                @else
                                    <span class="product-price">Tk {{$product->price}}</span>
                                @endif
                            @endif
                        </div>
                    </div>
                </div>

            @endforeach


        </div><!-- End .row -->

        <div class="load-more-container text-center">
            {{-- <a href="#" class="btn btn-outline-darker btn-load-more">More Products <i class="icon-refresh"></i></a> --}}
        </div>
    </div>

</div>

@endsection
