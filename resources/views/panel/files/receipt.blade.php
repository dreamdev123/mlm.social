@extends('layouts.app', ['ACTIVE_TITLE' => 'FILES', 'MANUAL_ROUTE' => 'files.manual', 'VIDEO_ROUTE' => 'files.video', 'RECEIPT_ROUTE' => 'files.receipt', 'ACTIVE_PAGE' => 'receipt'])

@section('title', __('- Files'))

@section('PAGE_LEVEL_STYLES')
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
@endsection

@section('PAGE_START')
@endsection

@section('PAGE_CONTENT')

<div class="main-bg d-flex pb-0">
    <div class="row flex-column m-0 p-0 w-100 files-section">
        <div class="row justify-content-center m-0 py-3 w-100">
            <div class="col-md-6 p-0">
                <div class="text-title pt-2 pb-3">RECEIPT</div>
                <div class="row justify-content-center m-0 p-0 w-100">
                    <div class="col-12 col-sm-12">
                        <div class="row m-0 p-0 w-100">
                            <div class="col-md-2 p-0 d-flex content-item">
                                <img src="{{ asset('images/svg/Receipt.svg') }}">
                                <p>01.06.2023</p>
                            </div>
                            <div class="col-md-2 p-0 d-flex content-item">
                                <img src="{{ asset('images/svg/Receipt.svg') }}">
                                <p>01.07.2023</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-title pt-2 pb-3">INVOICE</div>
                <div class="row justify-content-center m-0 p-0 w-100">
                    <div class="col-12 col-sm-12">
                        <div class="row m-0 p-0 w-100">
                            <div class="col-md-2 p-0 d-flex content-item">
                                <img src="{{ asset('images/svg/Receipt.svg') }}">
                                <p>01.01.2023</p>
                            </div>
                            <div class="col-md-2 p-0 d-flex content-item">
                                <img src="{{ asset('images/svg/Receipt.svg') }}">
                                <p>01.02.2023</p>
                            </div>
                            <div class="col-md-2 p-0 d-flex content-item">
                                <img src="{{ asset('images/svg/Receipt.svg') }}">
                                <p>01.03.2023</p>
                            </div>
                            <div class="col-md-2 p-0 d-flex content-item">
                                <img src="{{ asset('images/svg/Receipt.svg') }}">
                                <p>01.04.2023</p>
                            </div>
                            <div class="col-md-2 p-0 d-flex content-item">
                                <img src="{{ asset('images/svg/Receipt.svg') }}">
                                <p>01.05.2023</p>
                            </div>
                            <div class="col-md-2 p-0 d-flex content-item">
                                <img src="{{ asset('images/svg/Receipt.svg') }}">
                                <p>01.06.2023</p>
                            </div>
                            <div class="col-md-2 p-0 d-flex content-item">
                                <img src="{{ asset('images/svg/Receipt.svg') }}">
                                <p>01.07.2023</p>
                            </div>
                            <div class="col-md-2 p-0 d-flex content-item">
                                <img src="{{ asset('images/svg/Receipt.svg') }}">
                                <p>01.08.2023</p>
                            </div>
                            <div class="col-md-2 p-0 d-flex content-item">
                                <img src="{{ asset('images/svg/Receipt.svg') }}">
                                <p>01.09.2023</p>
                            </div>
                            <div class="col-md-2 p-0 d-flex content-item">
                                <img src="{{ asset('images/svg/Receipt.svg') }}">
                                <p>01.10.2023</p>
                            </div>
                            <div class="col-md-2 p-0 d-flex content-item">
                                <img src="{{ asset('images/svg/Receipt.svg') }}">
                                <p>01.11.2023</p>
                            </div>
                            <div class="col-md-2 p-0 d-flex content-item">
                                <img src="{{ asset('images/svg/Receipt.svg') }}">
                                <p>01.12.2023</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>