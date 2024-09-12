
@extends('backend.layouts.app')
@section('content')
<div class="content">
    <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
        <div>
            <p class="breadcrumbs"><span><a href="{{ route('dashboard') }}">Dashboard</a></span>
                <span><i class="mdi mdi-chevron-right"></i></span>Mail</p>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card card-default">
                <div class="card-header card-header-border-bottom">
                    <h2>Mail</h2>
                </div>
                <div class="card-body">
                    @if ($mails)
                        <form class="row g-3" method="POST" action="{{ route('mails.update', $mails->id) }}">
                            @csrf
                            @method('put')
                            <input type="hidden" name="id" value="{{ $mails->id }}">
                    @else
                        <form action="{{ route('mails.store') }}" method="POST">
                            @csrf
                    @endif
                        <div class="row ec-vendor-uploads">

                            <div class="col-lg-12">
                                <div class="ec-vendor-upload-detail">
                                    <div class="row g-3">
                                        <div class="col-lg-12">
                                            <div class="form-group mb-4">
                                                <label for="mail">Mail <span class="text-danger">*</span></label>
                                                @if ($mails)
                                                    <input type="email" id="mail" class="form-control" name="mail" value="{{ $mails->mail }}">
                                                @else
                                                    <input type="email" id="mail" class="form-control" name="mail" value="{{ old('mail') }}">
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-12 mt-3">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

