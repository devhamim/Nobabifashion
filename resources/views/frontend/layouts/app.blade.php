
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @if($setting->first()->title != null)
        <title>{{$setting->first()->title}}</title>
    @endif
    <!-- Favicon -->
    @if($setting->first()->favicon != null)
        <link rel="shortcut icon" href="{{ asset('uploads/setting') }}/{{ $setting->first()->favicon }}">
    @endif
    <meta name="msapplication-config" content="{{asset('frontend/assets/images/icons/browserconfig.xml')}}">
    {{-- <link rel="stylesheet" href="assets/vendor/line-awesome/line-awesome/line-awesome/css/line-awesome.min.css"> --}}
    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/plugins/owl-carousel/owl.carousel.css')}}">
    {{-- <link rel="stylesheet" href="{{asset('frontend/assets/css/plugins/magnific-popup/magnific-popup.css')}}"> --}}
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
    {{-- <link rel="stylesheet" href="{{asset('frontend/assets/css/plugins/jquery.countdown.css')}}"> --}}
    <!-- Main CSS File -->
    {{-- <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}"> --}}
    <link rel="stylesheet" href="{{asset('frontend/assets/css/style.css')}}">
    {{-- <link rel="stylesheet" href="{{asset('frontend/assets/css/plugins/nouislider/nouislider.css')}}"> --}}
    <link rel="stylesheet" href="{{asset('frontend/assets/css/skins/skin-demo-13.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/demos/demo-13.css')}}">

    <!-- Meta Pixel Code -->
@if($markatingsetting->first()->fb_pixel != null)
    {!! $markatingsetting->first()->fb_pixel !!}
@endif
{{-- <!-- End Meta Pixel Code --> --}}

<!-- googletag Code -->
@if($markatingsetting->first()->google_tag != null)
    {!! $markatingsetting->first()->google_tag !!}
@endif
<!-- End googletag Code -->
<style>
    ::placeholder {
      color: #bbb !important;
      opacity: 1; /* Firefox */
    }

    ::-ms-input-placeholder { /* Edge 12-18 */
      color: #bbb !important;
    }


.checkout_header_text{
    font-size: 18px !important;
    font-weight: 600 !important;
    border-bottom: 4px dashed #07657E !important;
}
/* Adjustments for small screens */
@media screen and (max-width: 992px) {
    .header-middle {
        flex-direction: column;
    }

    .header-middle .container {
        padding-top: 10px;
    }

    .header-search {
        display: none;
    }

    .mobile-menu-toggler {
        order: -1;
    }
    .checkout_header_text{
    font-size: 14px !important;
}
}

</style>
</head>

<body>
    <div class="page-wrapper">

        @include('frontend.layouts.header')

        <main class="main">
            @yield('content')
        </main>

        @include('frontend.layouts.footer')


    </div><!-- End .page-wrapper -->
    <button id="scroll-top" title="Back to Top"><i class="icon-arrow-up"></i></button>

    <!-- Mobile Menu -->
    <div class="mobile-menu-overlay"></div><!-- End .mobil-menu-overlay -->

    <div class="mobile-menu-container mobile-menu-light">
        <div class="mobile-menu-wrapper">
            {{-- <span class="mobile-menu-close"><i class="icon-close"></i></span> --}}

            {{-- <div class="mobile-search">
                <label for="search_input" class="sr-only">সার্চ করুন</label>
                <input type="search" class="form-control" name="q"  id="search_input" placeholder="সার্চ করুন ..." required value="{{@$_GET['q']}}">
                <button id="search_btn" class="btn btn-primary" type="button"><i class="icon-search"></i></button>
            </div> --}}

            <ul class="nav nav-pills-mobile nav-border-anim" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="mobile-menu-link" data-toggle="tab" href="#mobile-menu-tab" role="tab" aria-controls="mobile-menu-tab" aria-selected="true">Menu</a>
                </li>
            </ul>

            <div class="tab-content">
                <div class="tab-pane fade show active" id="mobile-menu-tab" role="tabpanel" aria-labelledby="mobile-menu-link">
                    <nav class="mobile-nav">
                        <ul class="mobile-menu">
                            <li class="active">
                                <a href="{{ url('/') }}">Home</a>
                            </li>
                            @foreach ($categorys->take(8) as $category)
                                <li class="">
                                    <a class="px-4 py-2" href="{{ route('category.show', $category->id) }}">{{ $category->name }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </nav><!-- End .mobile-nav -->
                </div><!-- .End .tab-pane -->
            </div><!-- End .tab-content -->
        </div><!-- End .mobile-menu-wrapper -->
    </div>

    <section class="mobile_bar">
        <div class="dropdown cart-dropdown">
            <div class="mobile_bar_item" >
                <a href="{{ url('/')}}" class="dropdown-toggle">
                    <i class="icon-home"></i>
                </a>
            </div>
            <div class="mobile_bar_item">
                <a class="dropdown-toggle" href="https://api.whatsapp.com/send?phone=88{{$setting->first()->number_two}}&text=Hello%20there,%20I%20found%20you%20on%20website!%20i%20would%20like%20to%20talk%20about%20your%20product." target="_blank"><i class="icon-whatsapp"></i></a>
            </div>
            {{-- <div class="mobile_bar_item" >
                <a href="" class="dropdown-toggle">
                    <i class="icon-shopping-cart"></i>
                </a>
            </div> --}}
            <div class="mobile_bar_item" >
                <a href="tel: {{$setting->first()->number_two}}" class="dropdown-toggle"><i class="icon-phone"></i></a>
            </div>

        </div>
    </section>
    <!-- Plugins JS File -->
    <script src="{{asset('frontend/assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/jquery.hoverIntent.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/superfish.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/bootstrap-input-spinner.js')}}"></script>
    <script src="{{asset('frontend/assets/js/jquery.elevateZoom.min.js')}}"></script>
    {{-- <script src="{{asset('frontend/assets/js/jquery.magnific-popup.min.js')}}"></script> --}}
    <script src="{{asset('frontend/assets/js/jquery.plugin.min.js')}}"></script>
    {{-- <script src="{{asset('frontend/assets/js/jquery.countdown.min.js')}}"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

    <!-- Main JS File -->
    <script src="{{asset('frontend/assets/js/demos/demo-13.js')}}"></script>
    <script src="{{asset('frontend/assets/js/main.js')}}"></script>



    @yield('footer_script')

    @if (session('success'))
        {
        <script>
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                customClass: 'swal-height',
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })

            Toast.fire({
                icon: 'success',
                title: '{{ session('success') }}',
            })
        </script>
        }
    @endif
    @if (session('error'))
        {
        <script>
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                customClass: 'swal-height',
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })

            Toast.fire({
                icon: 'error',
                title: '{{ session('error') }}',
            })
        </script>
        }
    @endif

        <script>
            // Add to cart
            $(document).ready(function () {
                $('.add-to-cart-btn').click(function (e) {
                    e.preventDefault();
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });

                    var product_id = $(this).closest('.product_data').find('.product_id').val();
                    var size = $(this).closest('.product_data').find('.size_id').val();
                    var color = $(this).closest('.product_data').find('.color_id').val();
                    var quantity = $(this).closest('.product_data').find('.qty-input').val();

                    $.ajax({
                        url: "/add-to-cart",
                        method: "POST",
                        data: {
                            'quantity': quantity,
                            'product_id': product_id,
                            'color_id': color,
                            'size_id': size,
                        },
                        success: function (response) {
                            alertify.set('notifier','position','top-right');
                            alertify.success(response.status);
                            cartload();
                            $('#load').load(location.href + ' .counted');
                        },
                    });
                });
            });
        </script>

<script>
    // Update Cart Data
    $(document).ready(function () {

    $('.changeQuantity').click(function (e) {
        e.preventDefault();
        // $.ajaxSetup({
        //     headers: {
        //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        //     }
        // });
        var thisClick = $(this);
        var quantity = $(this).closest(".cartpage").find('.qty-input').val();
        var product_id = $(this).closest(".cartpage").find('.product_id').val();
        var color_id = $(this).closest(".cartpage").find('.color_id').val();
        var size_id = $(this).closest(".cartpage").find('.size_id').val();
        var data = {
            '_token': $('input[name=_token]').val(),
            'quantity':quantity,
            'product_id':product_id,
            'color_id':color_id,
            'size_id':size_id,
        };

        $.ajax({
            url: '/update-to-cart',
            type: 'POST',
            data: data,
            success: function (response) {
                // window.location.reload();
                thisClick.closest(".cartpage").find('.total-col').text(response.gtprice)
                $('#totalajaxcall').load(location.href + ' .totalpricingload');
                alertify.set('notifier','position','top-right');
                alertify.success(response.status);
            }
        });
    });

});
</script>

<script>
    // Delete Cart Data
    $(document).ready(function () {

    $('.delete_cart_data').click(function (e) {
        e.preventDefault();

        var thisDeletearea = $(this);

        var product_id = $(this).closest(".cartpage").find('.product_id').val();

        var data = {
            '_token': $('input[name=_token]').val(),
            "product_id": product_id,
        };

        $(this).closest(".cartpage").remove();

        $.ajax({
            url: '/delete-from-cart',
            type: 'DELETE',
            data: data,
            success: function (response) {
                // window.location.reload();
                // thisDeletearea.closest(".cartpage")->remove();
                $('#totalajaxcall').load(location.href + ' .totalpricingload');
                alertify.set('notifier','position','top-right');
                alertify.success(response.status);
            }
        });
    });

});
</script>

<script>
    // Clear Cart Data
    $(document).ready(function () {

        $('.clear_cart').click(function (e) {
            e.preventDefault();

            $.ajax({
                url: '/clear-cart',
                type: 'GET',
                success: function (response) {
                    window.location.reload();
                    alertify.set('notifier','position','top-right');
                    alertify.success(response.status);
                }
            });

        });

    });
</script>

<script>
    $(document).ready(function() {
        $('.add_to_cart').click(function(e) {
            e.preventDefault();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            var product_id = $(this).closest(".cartpage").find('.product_id_value').val();
            // alert(product_id);
            $.ajax({
                url: '/add_single_cart',
                type: 'POST',
                data: {
                    'product_id': product_id,
                },
                success: function (response) {
                    if(response.error_status == 'error') {
                        alertify.set('notifier', 'position', 'top-right');
                        alertify.success(response.status);
                    } else {
                        alertify.set('notifier','position','top-right');
                        alertify.success(response.status);
                        cartload();
                        $('#load').load(location.href + ' .counted');
                    }
                }
            })
        })
    })
</script>

<script>
    // cart store
    function addtocart() {
        // var product_id = $(this).closest(".product_data").find('.product_id').val();
        // alert(product_id);
        var product_id = $('.product_id').val();
        var color_id = $('.color_id').val();
        var size_id = $('.size_id').val();
        var quantity = $('.qty-input').val();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: "/quick-to-cart",
            method: "POST",
            data: {
                'quantity': quantity,
                'product_id': product_id,
                'color_id': color_id,
                'size_id': size_id,
            },
            success: function(response) {
                alertify.set('notifier','position','top-right');
                alertify.success(response.status);
                cartload();
                $('#load').load(location.href + ' .counted');
            }
        });
    }
</script>

{{-- <script>
    $(document).ready(function() {
        $('#search_input').keypress(function(e) {
            if (e.which === 13) {
                $('#search_btn').click();
            }
        });

        $('#search_btn').click(function() {
            var search_input = $('#search_input').val();

            var link = "{{ route('shop') }}" + "?q=" + search_input;
            window.location.href = link;
        });
    });
</script> --}}


<script>
    // Wrap your code in $(document).ready() to ensure it runs after the DOM is fully loaded
    $(document).ready(function() {
        $('#search_input').keypress(function(e) {
            if (e.which === 13) {
                $('#search_btn').click();
            }
        });

        $('#search_btn').click(function() {
            var search_input = $('#search_input').val();

            // Simulating your route for demo purpose
            var link = "{{ route('shop') }}" + "?q=" + search_input;
            console.log(link); // Check the link in console to see if it's correct
            // window.location.href = link; // Uncomment this line once you're sure the link is correct
        });
    });
</script>
</body>
</html>
