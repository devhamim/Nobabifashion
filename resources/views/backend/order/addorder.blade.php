@extends('backend.layouts.app')
@section('content')
<div class="dashboard-wrapper">
    <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
            <!-- ============================================================== -->
            <!-- pageheader  -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="page-header">
                        <h2>Create Order</h2>
                        <div class="page-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ url('/') }}" class="breadcrumb-link">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Create Order</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end pageheader  -->
            <!-- ============================================================== -->

            <div class="row mb-2">
                <div class="col-12">
                    <a href="{{ route('orders.index') }}" class="btn btn-danger btn-sm">
                        <i class="fa fa-angle-double-left"></i>
                        Back
                    </a>
                </div>
            </div>
            <form action="{{ route('pos.store') }}" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-6 col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-row">
                                    <div class="form-group col-md-6 col-12">
                                        <label for="name">Customer Name <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}" required>
                                        @error('name')
                                            <strong class="text-danger">{{$message}}</strong>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6 col-12">
                                        <label for="mobile">Customer Mobile <span class="text-danger">*</span></label>
                                        <input type="number" class="form-control" name="mobile" id="mobile" value="{{old('mobile')}}" required>
                                        @error('mobile')
                                            <strong class="text-danger">{{$message}}</strong>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6 col-12">
                                        <label for="district">District <span class="text-danger">*</span></label>
                                        <select name="district" id="district" class="form-control" value="{{old('district')}}" required>
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
                                        @error('district')
                                            <strong class="text-danger">{{$message}}</strong>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6 col-12">
                                        <label for="address">Customer Address <span class="text-secondery">Optional</span></label>
                                        <textarea name="address" id="address" class="form-control" required>{{old('address')}}</textarea>
                                        @error('address')
                                            <strong class="text-danger">{{$message}}</strong>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-12 col-12">
                                        <label for="note">Order Note <span class="text-danger"></span></label>
                                        <textarea name="note" id="note" class="form-control" placeholder="Order Note">{{ old('note') }}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-12">
                        <div class="card">
                            <h4 class="card-header">Product Info</h4>
                            <div class="card-body">
                                <div class="table-responsive mb-3">
                                    <table class="table table-bordered text-center">
                                        <thead>
                                        <tr>
                                            <th>Product Name</th>
                                            <th>Attribute</th>
                                            <th>Qty</th>
                                            <th>Price</th>
                                            <th></th>
                                        </tr>
                                        </thead>
                                        <tbody id="prod_row">
                                        </tbody>
                                        <tbody>
                                        <tr>
                                            <td colspan="5">
                                                <div class="form-row">
                                                    <div class="form-group col-12 text-left">
                                                        <select id="product" class="form-control select2" required>
                                                                <option value="">Select A Product</option>
                                                            @foreach ($products as $product)
                                                                <option value="{{ $product->id }}">{{ $product->name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="form-group row" style="padding: 6px 0;">
                                    <label for="sub_total" class="offset-md-6 col-md-2 col-form-label text-right">Total</label>
                                    <div class="col-md-4">
                                        <input type="text" class="form-control" id="sub_total" name="sub_total" min="0" value="0" readonly>
                                    </div>
                                </div>

                                <div class="form-group row" style="padding: 6px 0;">
                                    <label for="delivery_charge" class="offset-md-6 col-md-2 col-form-label text-right">Charge (+)</label>
                                    <div class="col-md-4">
                                        <input type="number" class="form-control" id="delivery-charge-input" min="0" name="delivery_charge" value="0">
                                    </div>
                                </div>
                                <div class="form-group row" style="padding: 6px 0;">
                                    <label for="discount" class="offset-md-6 col-md-2 col-form-label text-right">Discount (-)</label>
                                    <div class="col-md-4">
                                        <input type="number" class="form-control" id="discount" min="0" name="discount" value="0">
                                    </div>
                                </div>

                                <div class="form-group row" style="padding: 6px 0;">
                                    <label for="paid" class="offset-md-6 col-md-2 col-form-label text-right">Paid (-)</label>
                                    <div class="col-md-4">
                                        <input type="number" class="form-control" id="paid" min="0" name="paid" value="0">
                                    </div>
                                </div>

                                <div class="form-group row" style="padding: 6px 0;">
                                    <label for="due" class="offset-md-6 col-md-2 col-form-label text-right">Due</label>
                                    <div class="col-md-4">
                                        <input type="hidden" class="form-control" id="grandtotal" min="0" name="total" value="0.00" readonly>
                                        <input type="number" class="form-control" id="due" min="0" name="due" value="0.00" readonly>
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <div class="col-12 text-center">
                                        <input type="submit" value="Save" class="btn btn-success w-100">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('footer_scripts')
{{-- <script>

    $(document).ready(function () {
        $('.select2').select2();
    });
</script> --}}

<script>
    $(document).ready(function () {
        $('#product').on('change', function () {
            var product_id = $(this).val();
            $.ajax({
                url: '/getProduct',
                type: 'POST',
                data: {'product_id': product_id},
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function (data) {
                    if (data.error) {
                        alert(data.error);
                        return;
                    }

                    var newRowHtml = '<tr>' +
                        '<td>' +
                            '<input type="text" class="form-control" value="' + (data.productName ? data.productName : '') + '" readonly>' +
                            '<input type="hidden" name="product_id[]" value="' + (data.product_id ? data.product_id : '') + '">' +
                            '<input type="hidden" name="inventorie_id[]" value="' + (data.inventory_id ? data.inventory_id : '') + '">' +
                        '</td>' +
                        '<td>';

                    if (data.attribute && data.attribute.length > 0 && data.attribute[0].weight) {
                        newRowHtml += '<select name="attribute_id[]" class="form-control weight-select">' +
                            '<option value="">Select Weight</option>';

                        var weights = [...new Set(data.attribute.map(attr => attr.weight))];
                        weights.forEach(function(weight) {
                            var attributeId = data.attribute.find(attr => attr.weight === weight).id;
                            newRowHtml += '<option value="' + attributeId + '">' + weight + '</option>';
                        });

                        newRowHtml += '</select>';
                    } else if (data.attribute && data.attribute.length > 0) {
                        newRowHtml += '<select name="color[]" class="form-control color-select">' +
                            '<option value="">Select Color</option>';

                        var colors = [...new Set(data.attribute.map(attr => attr.rel_to_color.name))];
                        colors.forEach(function(color) {
                            newRowHtml += '<option value="' + color + '">' + color + '</option>';
                        });

                        newRowHtml += '</select>' +
                            '<select name="attribute_id[]" class="form-control size-select" disabled>' +
                                '<option value="">Select Size</option>' +
                            '</select>';
                    } else {
                        newRowHtml += '<input type="text" class="form-control" value="N/A" readonly>' +
                            '<input type="hidden" name="attribute_id[]" value="">' +
                            '<input type="hidden" name="price[]" value="">' +
                            '<input type="hidden" name="quantity[]" value="">' +
                            '<span class="text-danger">Out of stock</span>';
                    }

                    newRowHtml += '</td>' +
                        '<td>' +
                            '<input style="width: 60px; border: 1px solid #ddd;" min="1" type="number" class="form-control qty" name="quantity[]" value="1" readonly>' +
                            '<input type="hidden" name="price[]" class="price" value="">' +
                        '</td>' +
                        '<td class="total_price">0.00</td>' +
                        '<td><button class="btn btn-danger" onclick="removeProduct(this)">Remove</button></td>' +
                        '</tr>';

                    $('#prod_row').append(newRowHtml);

                    $('.weight-select').on('change', function () {
                        var attributeId = $(this).val();
                        if (attributeId) {
                            $.ajax({
                                url: '/getAttributeDetails',
                                type: 'POST',
                                data: {'attribute_id': attributeId},
                                headers: {
                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                },
                                success: function (attributeData) {
                                    if (attributeData.error) {
                                        alert(attributeData.error);
                                        return;
                                    }
                                    var row = $('.weight-select').closest('tr');
                                    var price = attributeData.sell_price ?? attributeData.price;
                                    var quantityText = attributeData.quantity > 0 ? '1' : 'Out of stock';
                                    row.find('.price').val(price);
                                    row.find('.qty').val(attributeData.quantity > 0 ? 1 : 0).prop('readonly', attributeData.quantity <= 0);
                                    row.find('.total_price').text((price * row.find('.qty').val()).toFixed(2));
                                    updateTotals();
                                }
                            });
                        }
                    });

                    // Attach event listener for the color select
                    $('.color-select').on('change', function () {
                        var selectedColor = $(this).val();
                        var sizeSelect = $(this).closest('tr').find('.size-select');

                        sizeSelect.empty().append('<option value="">Select Size</option>');
                        if (selectedColor) {
                            sizeSelect.prop('disabled', false);
                            var filteredAttributes = data.attribute.filter(attr => attr.rel_to_color.name === selectedColor);
                            var sizes = [...new Set(filteredAttributes.map(attr => attr.rel_to_size.name))];
                            sizes.forEach(function(size) {
                                var attributeId = filteredAttributes.find(attr => attr.rel_to_size.name === size).id;
                                sizeSelect.append('<option value="' + attributeId + '">' + size + '</option>');
                            });
                        } else {
                            sizeSelect.prop('disabled', true);
                        }
                    });

                    // Attach event listener for the size select
                    $('.size-select').on('change', function () {
                        var attributeId = $(this).val();
                        if (attributeId) {
                            $.ajax({
                                url: '/getAttributeDetails',
                                type: 'POST',
                                data: {'attribute_id': attributeId},
                                headers: {
                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                },
                                success: function (attributeData) {
                                    if (attributeData.error) {
                                        alert(attributeData.error);
                                        return;
                                    }
                                    var row = $('.size-select').closest('tr');
                                    var price = attributeData.sell_price ?? attributeData.price;
                                    var quantityText = attributeData.quantity > 0 ? '1' : 'Out of stock';
                                    row.find('.price').val(price);
                                    row.find('.qty').val(attributeData.quantity > 0 ? 1 : 0).prop('readonly', attributeData.quantity <= 0);
                                    row.find('.total_price').text((price * row.find('.qty').val()).toFixed(2));
                                    updateTotals();
                                }
                            });
                        }
                    });

                    updateTotals();
                }
            });
        });



        $('#district').change(function() {
            var district = $(this).val();
            var deliveryCharge = 0;
            if (district === 'dhaka') {
                deliveryCharge = {{ $delevarychareg->where('id', 1)->first()->charge }};
            } else {
                deliveryCharge = {{ $delevarychareg->where('id', 2)->first()->charge }};
            }
            var delivery = deliveryCharge;

            $('#delivery-charge-input').val(deliveryCharge);
            updateTotals();
        });


        $(document).on('input', '.qty', function () {
            updateRowTotal($(this));
        });

        $(document).on('input', '#delivery-charge-input, #discount, #paid', function () {
            updateTotals();
        });

        function updateRowTotal(input) {
            var row = input.closest('tr');
            var productPrice = parseFloat(row.find('.price').val());
            var quantity = parseFloat(input.val());
            var totalCell = row.find('.total_price');
            var newTotal = productPrice * quantity;
            totalCell.text(newTotal.toFixed(2));

            updateTotals();

            var productId = row.find('input[name="product_id[]"]').val();
            updateOrderProduct(productId, quantity);
        }

        function updateTotals() {
            var subTotal = 0;

            // var district = $('#district').val();
            // var deliveryCharge = 0;
            // if (district === 'dhaka') {
            //     deliveryCharge = {{ $delevarychareg->where('id', 1)->first()->charge }};
            // } else {
            //     deliveryCharge = {{ $delevarychareg->where('id', 2)->first()->charge }};
            // }

            $('.total_price').each(function () {
                subTotal += parseFloat($(this).text());
            });

            $('#sub_total').val(subTotal.toFixed(2));

            var total = subTotal + parseFloat($('#delivery-charge-input').val()) - parseFloat($('#discount').val()) - parseFloat($('#paid').val());
            $('#due').val(total.toFixed(2));

            var grandtotal = subTotal + parseFloat($('#delivery-charge-input').val()) - parseFloat($('#discount').val());
            $('#grandtotal').val(grandtotal.toFixed(2));

            finalCalc();
        }

        $('#paid').on('input', function () {
            updateTotals();
        });

        window.removeProduct = function (button) {

            var row = $(button).closest('tr');
            row.remove();

            updateTotals();
        };
    });

</script>

@endsection
