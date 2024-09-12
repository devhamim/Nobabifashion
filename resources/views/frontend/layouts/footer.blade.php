<footer class="footer footer-2" style="background: #000">
    <div class="footer-middle border-0">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-lg-4">
                    <h4 class="widget-title">Need Help</h4>
                    <div class="info-about-info mt-3">
                        <div class="info">
                            <ul class="info-list">
                                @if($setting->first()->number_one != null)
                                    <li>Call us: <span>{{ $setting->first()->number_one }}</span></li>
                                @endif
                                @if($setting->first()->email != null)
                                    <li>Email us: <span>{{ $setting->first()->email }}</span></li>
                                @endif
                                @if($setting->first()->address != null)
                                    <li>Shop Address: <span>{{ $setting->first()->address }}</span></li>
                                @endif
                            </ul>
                        </div>
                        <div class="powerdby d-flex">
                            <span class="mr-2">powered by:</span> <a href="https://nitebiz.com/"><img width="150px" src="{{ asset('frontend/assets/NIT-EBIZ-logo.png') }}" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-lg-4">
                    <div class="widget">
                        <h4 class="widget-title">Customers account</h4>

                        <ul class="widget-list">
                            <li><a href="">Sign in</a></li>
                            <li><a href="">Create New Account</a></li>
                            <li><a href="">My Orders</a></li>
                            <li><a href="">Join as a Affiliate Partner</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4 col-lg-4">
                    <div class="widget">
                        <h4 class="widget-title">Related Page</h4>

                        <ul class="widget-list">
                            {{-- <li><a href="">Refund & returned</a></li> --}}
                            <li><a href="{{ route('about.us') }}">About us</a></li>
                            <li><a href="{{ route('privacy.policy') }}">Privacy policy</a></li>
                            <li><a href="{{ route('terms.condition') }}">Terms & Condition</a></li>
                            {{-- <li><a href="">Our showrooms</a></li> --}}

                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div><!-- End .footer-middle -->

    <div class="footer-bottom">
        <div class="container">
            <p class="footer-copyright align-items-center text-center">
                    @if($setting->first()->footer != null)
                        <span>{{ $setting->first()->footer }} </span>
                    @endif
                     | Design and Development By <a href="https://nugortechit.com/">Nugortech it</a>
            </p><!-- End .footer-copyright -->
        </div>
    </div><!-- End .footer-bottom -->
</footer>
