@extends('layouts.app', ['ACTIVE_TITLE' => 'FILES', 'MANUAL_ROUTE' => 'files.manual', 'VIDEO_ROUTE' => 'files.video', 'RECEIPT_ROUTE' => 'files.receipt', 'ACTIVE_PAGE' => 'video'])

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
                <div class="text-title pt-2 pb-3">INTRO VIDEO</div>
                <div class="row justify-content-center m-0 p-0 w-100">
                    <div class="col-12 col-sm-12">
                        <div class="row m-0 p-0 w-100">
                            <div class="col-md-2 p-0 d-flex content-item">
                                <img src="{{ asset('images/svg/Video.svg') }}">
                                <p>DUTCH</p>
                            </div>
                            <div class="col-md-2 p-0 d-flex content-item">
                                <img src="{{ asset('images/svg/Video.svg') }}">
                                <p>ENGLISH</p>
                            </div>
                            <div class="col-md-2 p-0 d-flex content-item">
                                <img src="{{ asset('images/svg/Video.svg') }}">
                                <p>FRENCH</p>
                            </div>
                            <div class="col-md-2 p-0 d-flex content-item">
                                <img src="{{ asset('images/svg/Video.svg') }}">
                                <p>GERMAN</p>
                            </div>
                            <div class="col-md-2 p-0 d-flex content-item">
                                <img src="{{ asset('images/svg/Video.svg') }}">
                                <p>ITALIAN</p>
                            </div>
                            <div class="col-md-2 p-0 d-flex content-item">
                                <img src="{{ asset('images/svg/Video.svg') }}">
                                <p>SPANISH</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-title pt-2 pb-3">TRAINING VIDEO</div>
                <div class="row justify-content-center m-0 p-0 w-100">
                    <div class="col-12 col-sm-12">
                        <div class="row m-0 p-0 w-100">
                            <div class="col-md-2 p-0 d-flex content-item">
                                <img src="{{ asset('images/svg/Video.svg') }}">
                                <p>DUTCH</p>
                            </div>
                            <div class="col-md-2 p-0 d-flex content-item">
                                <img src="{{ asset('images/svg/Video.svg') }}">
                                <p>ENGLISH</p>
                            </div>
                            <div class="col-md-2 p-0 d-flex content-item">
                                <img src="{{ asset('images/svg/Video.svg') }}">
                                <p>FRENCH</p>
                            </div>
                            <div class="col-md-2 p-0 d-flex content-item">
                                <img src="{{ asset('images/svg/Video.svg') }}">
                                <p>GERMAN</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>