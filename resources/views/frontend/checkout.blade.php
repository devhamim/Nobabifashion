
@extends('frontend.layouts.app')

@section('content')
<div class="page-content mt-3">
    <div class="checkout">
        <div class="container">
            @if (isset($cart_data))
                @if(Cookie::get('shopping_cart'))
                    @php $total = 0; @endphp
                    <div class="row mb-3">
                        <div class="col-lg-6 m-auto text-center">
                            <p class="checkout_header_text">অর্ডার করতে সঠিক তথ্য দিয়ে নিচের ফরম পূরন করুন</p>
                        </div>
                    </div>
                    <form action="{{ route('order.store') }}" method="POST">
                        @csrf
                        <div class="row">

                            <aside class="col-lg-7">
                                <div class="summary">
                                    <h3 class="summary-title checkout_weight">অর্ডার ইনফরমেশন</h3>
                                    <table class="table table-summary table-responsive">
                                        <thead>
                                            <tr class="product_info_header">
                                                <th>Image</th>
                                                <th>Product</th>
                                                <th>Price</th>
                                                <th>Qty</th>
                                                <th class="text-center">Total</th>
                                            </tr>
                                        </thead>

                                        <tbody class="mt-5">
                                            @foreach ($cart_data as $data)
                                                {{-- <tr class="text-end">
                                                    <td style="height: 30px"></td>
                                                    <td style="height: 30px"></td>
                                                    <td style="height: 30px"></td>
                                                    <td style="height: 30px"></td>
                                                    <td style="height: 30px">Remove</td>
                                                </tr> --}}
                                                <tr class="table-shadow">
                                                    <td style="padding-right: 10px">
                                                        <img width="60px" src="{{ asset('uploads/product') }}/{{ $data['item_image'] }}" alt="">
                                                    </td>
                                                    <td>
                                                        <div class="product_info">
                                                            <p><a style="font-weight: 500;" href="{{ route('product.details', $data['item_slug']) }}">{{ urldecode($data['item_name']) }}</a></p>
                                                            @if (isset($data['item_weight']) && $data['item_weight'] !== null)
                                                                <span>Package: {{ $data['item_weight'] }}</span>
                                                            @endif
                                                            {{-- @if (isset($data['item_color']) && $data['item_color'] !== null)
                                                                <span>Color: {{ $data['item_color'] }}</span>
                                                            @endif
                                                            @if (isset($data['item_size']) && $data['item_size'] !== null)
                                                                <span>Size: {{ $data['item_size'] }}</span>
                                                            @endif --}}
                                                        </div>

                                                    </td>
                                                    <td>
                                                        <span class="product-price" style="display: inline">
                                                            {{ isset($data['item_price']) ? $data['item_price'] : $data['product_price'] }}
                                                        </span> Tk X
                                                    </td>
                                                    <td class="ps-3 text-center mt-2 pro_details_ico" style="padding-top: 15px; justify-content: center; width: 10%; margin: 0 auto">
                                                        <input type="number" name="quantity[{{ $data['item_id'] }}]" class="qty-input form-control" value="{{ $data['item_quantity'] }}" min="1" max="100" step="1" data-decimals="0" required>
                                                    </td>
                                                    <td>
                                                        <div class="cart-product-quantity">
                                                            <input type="hidden" class="product-id" value="{{ $data['item_id'] }}">
                                                            <span class="subtotal">{{ ($data['item_quantity'] ?? 1) * ($data['item_price'] ?? $data['product_price']) }} Tk</span>
                                                        </div>
                                                    </td>
                                                </tr>
                                                @php
                                                    if ($data['item_price'] != null) {
                                                        $total = $total + ($data["item_quantity"] * $data["item_price"]);
                                                    } else {
                                                        $total = $total + ($data["item_quantity"] * $data["product_price"]);
                                                    }
                                                @endphp
                                            @endforeach
                                            <tr class="summary-total checkout_bottom_border">
                                                <td>সাব-টোটাল (+)</td>
                                                <td></td>
                                                <td></td>
                                                <td class="grand_total_price">{{ $total }} Tk</td>
                                            </tr>
                                            <tr class="summary-total delivery-charge-row checkout_bottom_border" style="display: none;">
                                                <td>ডেলিভারি চার্জ (+)</td>
                                                <td></td>
                                                <td></td>
                                                <td>
                                                    <span id="delivery-charge"></span>
                                                    <input type="hidden" name="delivery_charge" id="delivery-charge-input">
                                                </td>
                                            </tr>
                                            <tr class="summary-total delivery-charge-row checkout_bottom_border">
                                                <td>টোটাল</td>
                                                <td></td>
                                                <td></td>
                                                <td class="grand_total"><span class="grand_span">{{ $total }} Tk</span></td>
                                            </tr>
                                            <input type="hidden" name="sub_total" value="{{ $total }}">
                                            <input type="hidden" name="total" value="{{ $total }}">
                                        </tbody>
                                    </table>
                                    {{-- <div class="cart-bottom">
                                        <button type="button" class="btn btn-danger clear_cart"><span>CLEAR CART</span><i class="icon-refresh"></i></button>
                                    </div> --}}
                                </div>
                            </aside>
                            <div class="col-lg-5 checkout_form">
                                <h2 class="checkout-title checkout_weight">বিলিং ডিটেইল</h2>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <label>আপনার নাম লিখুন <span class="text-danger">*</span></label>
                                        <input type="text" name="name" class="form-control" placeholder="আপনার নাম লিখুন" required="" value="{{ old('name') }}">
                                        @error('name')
                                            <strong class="text-danger">{{ $message }}</strong>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <label>আপনার মোবাইল নাম্বারটি লিখুন <span class="text-danger">*</span></label>
                                        <input type="tel" name="mobile" class="form-control" placeholder="আপনার মোবাইল নাম্বারটি লিখুন" required="" value="{{ old('mobile') }}">
                                        @error('mobile')
                                            <strong class="text-danger">{{ $message }}</strong>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <label>জেলা <span class="text-danger">*</span></label>
                                        <select name="district" id="district" class="form-control" required>
                                            <option value="">-- Select --</option>
                                            <option value="dhaka">Dhaka</option>
                                            <option value="faridpur">Faridpur</option>
                                            <option value="gazipur">Gazipur</option>
                                            <option value="gopalganj">Gopalganj</option>
                                            <option value="jamalpur">Jamalpur</option>
                                            <option value="kishoreganj ">Kishoreganj </option>
                                            <option value="madaripur">Madaripur</option>
                                            <option value="manikganj">Manikganj</option>
                                            <option value="munshiganj">Munshiganj</option>
                                            <option value="mymensingh">Mymensingh</option>
                                            <option value="narayanganj">Narayanganj</option>
                                            <option value="Norshingdi">Norshingdi</option>
                                            <option value="Netrokona">Netrokona</option>
                                            <option value="Rajbari">Rajbari</option>
                                            <option value="Shariatpur">Shariatpur</option>
                                            <option value="Sherpur">Sherpur</option>
                                            <option value="Tangail">Tangail</option>
                                            <option value="Bagerhat">Bagerhat</option>
                                            <option value="Chuadanga">Chuadanga</option>
                                            <option value="Jessore">Jessore</option>
                                            <option value="Jhenaidah">Jhenaidah</option>
                                            <option value="Khulna">Khulna</option>
                                            <option value="Kushtia">Kushtia</option>
                                            <option value="Magura">Magura</option>
                                            <option value="Meherpur">Meherpur</option>
                                            <option value="Narail">Narail</option>
                                            <option value="Satkhira">Satkhira</option>
                                            <option value="Bogra">Bogra</option>
                                            <option value="Chapai-Nawabganj">Chapai Nawabganj</option>
                                            <option value="Joypurhat">Joypurhat</option>
                                            <option value="Naogaon">Naogaon</option>
                                            <option value="Natore">Natore</option>
                                            <option value="Pabna">Pabna</option>
                                            <option value="Rajshahi">Rajshahi</option>
                                            <option value="Sirajganj">Sirajganj </option>
                                            <option value="Habiganj">Habiganj</option>
                                            <option value="Moulvibazar">Moulvibazar</option>
                                            <option value="Sunamganj">Sunamganj </option>
                                            <option value="Sylhet">Sylhet </option>
                                            <option value="Barguna">Barguna </option>
                                            <option value="Barisal">Barisal</option>
                                            <option value="Bhola">Bhola</option>
                                            <option value="Jhalokathi">Jhalokathi</option>
                                            <option value="Patuakhali">Patuakhali</option>
                                            <option value="Perojpur">Perojpur</option>
                                            <option value="Bandarban">Bandarban</option>
                                            <option value="Brahmanbaria">Brahmanbaria</option>
                                            <option value="Chandpur">Chandpur</option>
                                            <option value="Chittagong">Chittagong</option>
                                            <option value="comilla">Comilla</option>
                                            <option value="coxs-bazar">Cox's Bazar</option>
                                            <option value="Feni">Feni</option>
                                            <option value="Khagrachari">Khagrachari</option>
                                            <option value="Laksmipur">Laksmipur</option>
                                            <option value="Noakhali">Noakhali</option>
                                            <option value="Rangamati">Rangamati</option>
                                            <option value="Dinajpur">Dinajpur</option>
                                            <option value="Gaibandha">Gaibandha</option>
                                            <option value="Kurigram">Kurigram</option>
                                            <option value="Lalmonirhat">Lalmonirhat</option>
                                            <option value="Nilphamari">Nilphamari</option>
                                            <option value="Panchagarh">Panchagarh</option>
                                            <option value="Rangpur">Rangpur</option>
                                            <option value="Thakurgaon">Thakurgaon</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <label>সম্পূর্ণ ঠিকানা <span class="text-danger">*</span></label>
                                        <input type="text" name="address" placeholder="সম্পূর্ণ ঠিকানা" class="form-control" required="" value="{{ old('address') }}">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <label>নির্দেশনা</label>
                                        <input type="text" name="note" placeholder="নির্দেশনা" class="form-control" value="{{ old('note') }}">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <strong>* পণ্য হাতে পেয়ে সম্পূর্ণ মূল্য পরিশোধ করতে হবে</strong>
                                    </div>
                                </div>
                                <div class="row mt-3 mb-5">
                                    <div class="col-lg-12">
                                        <button type="submit" class="btn btn-outline-primary-2 checkout_btn btn-order btn-block">
                                            <span class="btn-text w-100">অর্ডার কনফার্ম করুন</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                @endif
            @else
                <h2 class="text-danger m-auto text-center mt-5">No product added for checkout</h2>
            @endif
        </div>
    </div>
</div>
@endsection

@section('footer_script')
<script>
    $(document).ready(function () {
        $(".qty-input").on("change", function () {
            var $row = $(this).closest("tr");
            var quantity = parseInt($(this).val());
            var price = parseFloat($row.find(".product-price").text().replace('Tk ', ''));
            var subtotal = quantity * price;

            $row.find(".subtotal").text("Tk " + subtotal);
            updateTotalPrice();
            updateGrandTotalPrice();
        });

        $('#district').change(function() {
            var district = $(this).val();
            var subtotal = parseFloat($('.grand_total_price').text().replace('Tk ', ''));
            var deliveryCharge = 0;
            if (district === 'dhaka') {
                deliveryCharge = {{ $delevarychareg->where('id', 1)->first()->charge }};
            } else {
                deliveryCharge = {{ $delevarychareg->where('id', 2)->first()->charge }};
            }
            var grandTotal = subtotal + deliveryCharge;

            $('#delivery-charge').text(deliveryCharge + ' Tk');
            $('#delivery-charge-input').val(deliveryCharge);
            $('.summary-total.delivery-charge-row').show();
            $('.grand_total').text(grandTotal + ' Tk').show();
            updateGrandTotalPrice();
        });

        function updateTotalPrice() {
            var totalPrice = 0;
            $(".subtotal").each(function () {
                var subtotal = parseFloat($(this).text().replace('Tk ', ''));
                totalPrice += subtotal;
            });
            $(".grand_total_price").text(totalPrice + ' Tk');
            $("input[name='sub_total']").val(totalPrice);
        }

        function updateGrandTotalPrice() {
            var grandTotal = 0;
            $(".subtotal").each(function () {
                var subtotal = parseFloat($(this).text().replace('Tk ', ''));
                grandTotal += subtotal;
            });

            var district = $('#district').val();
            var deliveryCharge = 0;
            if (district === 'dhaka') {
                deliveryCharge = {{ $delevarychareg->where('id', 1)->first()->charge }};
            } else {
                deliveryCharge = {{ $delevarychareg->where('id', 2)->first()->charge }};
            }
            grandTotal += deliveryCharge;
            $(".grand_total").text(grandTotal + ' Tk');
            $("input[name='total']").val(grandTotal);
        }
    });

    function removeProduct(button) {
        var row = button.closest('tr');
        row.remove();
        updateTotalPrice();
        updateGrandTotalPrice();
    }
</script>


<script>
    $('.apply_coupon_btn').click(function(e) {
        e.preventDefault();
        var coupon_code = $('.coupon_code').val();

        if($.trim(coupon_code).length == 0) {
            error_coupon = "Please enter valid coupon";
            $('#error_coupon').text(error_coupon);

        } else {
            error_coupon = '';
            $('#error_coupon').text(error_coupon);
        }


        if(error_coupon != '') {
            return false;
        }

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            method: "POST",
            url: "/check-coupon-code",
            data: {
                'coupon_code': coupon_code
            },
            success: function(response) {
                if(response.error_status == 'error') {
                    alertify.set('notifier', 'position', 'top-right');
                    alertify.success(response.status);
                    $('.coupon_code').val('');
                } else {
                    $('.grand_total_price').text(response.grand_total_price);
                    $('.discount_price').text(response.discount_price);
                    $('.coupon_code').text(response.coupon_code);
                }
            }
        })
    })
</script>
@endsection



