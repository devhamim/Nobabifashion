@extends('frontend.layouts.app')
@section('content')
<div class="container page-content">
    <div class="border-bottom mb-4">
        <div class="breadcrumbs row align-items-center justify-content-between d-none d-md-flex">
            <div class="col-12">
                <ul class="breadcrumbs_content list-unstyled">

                    <li><span>Privacy Policy</span></li>
                </ul>
            </div>

        </div>
    </div>
    <div class="row mt-5 mb-7">
        <div class="col-12">
            {!! $privacypolicy->description !!}
        </div>
    </div>
</div>
@endsection
