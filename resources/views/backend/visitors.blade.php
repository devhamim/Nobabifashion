@extends('backend.layouts.app')
@section('content')
<div class="content">
    <div class="breadcrumb-wrapper breadcrumb-contacts">
        <div>
            <h1>Visitor List</h1>
            <p class="breadcrumbs"><span><a href="{{ route('dashboard') }}">Dashboard</a></span>
                <span><i class="mdi mdi-chevron-right"></i></span>Visitor
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-6 col-sm-6 p-b-15 lbl-card">
            <div class="card card-mini dash-card card-1">
                <div class="card-body">
                    <h2 class="mb-1">{{ $mostVisitedCity->count }}</h2>
                    <p>Total Visitor</p>
                    <span class="mdi mdi-account-arrow-left"></span>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-sm-6 p-b-15 lbl-card">
            <div class="card card-mini dash-card card-2">
                <div class="card-body">
                    <h2 class="mb-1">{{ $mostVisitedCity->city }}</h2>
                    <p>Most Visit City</p>
                    <span class="mdi mdi-account-clock"></span>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="ec-vendor-list card card-default">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="responsive-data-table" class="table">
                            <thead>
                                <tr>
                                    <th>IP Address</th>
                                    <th>CountryCode</th>
                                    <th>City</th>
                                    <th>Timestamp</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($visitors as $visitor)
                                    <tr>
                                        <td>{{ $visitor->ip }}</td>
                                        <td>{{ $visitor->country }}</td>
                                        <td>{{ $visitor->city }}</td>
                                        <td>{{ $visitor->created_at }}</td>
                                        <td>
                                            <div class="btn-group mb-1">
                                                <button type="button"
                                                    class="btn btn-outline-success">Info</button>
                                                <button type="button"
                                                    class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false" data-display="static">
                                                    <span class="sr-only">Info</span>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a href="{{ route('visitors.destroy',  $visitor->id) }}" class="dropdown-item"  onclick="return confirm('Are you sure you want to delete this item?')">Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="mb-3">
                    {{ $visitors->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
