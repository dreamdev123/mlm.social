@extends('layouts.app', ['ACTIVE_TITLE' => 'DASHBOARD', 'ACTIVE_LOGOUT' => 'LOGOUT'])

@section('title', __('- Dashboard'))

@section('PAGE_LEVEL_STYLES')
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<style>
    .blinking {
        -webkit-animation: 1s blink ease infinite;
        -moz-animation: 1s blink ease infinite;
        -ms-animation: 1s blink ease infinite;
        -o-animation: 1s blink ease infinite;
        animation: 1s blink ease infinite;
    }

    @keyframes "blink" {
        from, to {
            opacity: 0;
        }
        50% {
            opacity: 1;
        }
    }

    @-moz-keyframes blink {
        from, to {
            opacity: 0;
        }
        50% {
            opacity: 1;
        }
    }

    @-webkit-keyframes "blink" {
        from, to {
            opacity: 0;
        }
        50% {
            opacity: 1;
        }
    }

    @-ms-keyframes "blink" {
        from, to {
            opacity: 0;
        }
        50% {
            opacity: 1;
        }
    }

    @-o-keyframes "blink" {
        from, to {
            opacity: 0;
        }
        50% {
            opacity: 1;
        }
    }
</style>
@endsection

@section('PAGE_START')
@endsection

@section('PAGE_CONTENT')
<div class="main-bg d-flex align-items-center justify-content-center">
    <video autoplay muted loop class="wave-video-section" playsinline>
        <source type="video/mp4">
    </video>   
    <video autoplay muted loop class="wave-video-section-mobile" playsinline>
        <source type="video/mp4">
    </video>
    <div class="row m-0 dashboard-section px-0">
        <div class="col-4 navItem">
            <a class="navItem-wrp" href="{{ route('profile') }}">
                <div class="item">
                    <div class="item-icon">
                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                            viewBox="0 0 80 70" style="enable-background:new 0 0 80 70;" xml:space="preserve">
                        <path class="st0" d="M40,0.1C20.7,0.1,5.1,15.7,5.1,35S20.7,69.9,40,69.9c19.3,0,34.9-15.6,34.9-34.9S59.3,0.1,40,0.1z M26.6,20.9
                            c3,0,5.4,2.9,5.4,6.4s-2.4,6.4-5.4,6.4s-5.4-2.9-5.4-6.4S23.6,20.9,26.6,20.9z M57.6,46.5c-3.7,5.6-10.2,9.2-17.6,9.2
                            c-7.4,0-13.8-3.6-17.6-9.2c-1.2-1.8,1.1-3.9,2.7-2.5c3.9,3.1,9.1,4.9,14.8,4.9c5.7,0,10.9-1.8,14.8-4.9
                            C56.5,42.7,58.7,44.8,57.6,46.5z M53.3,33.7c-3,0-5.4-2.9-5.4-6.4s2.4-6.4,5.4-6.4c3,0,5.4,2.9,5.4,6.4S56.3,33.7,53.3,33.7z"/>
                        </svg>

                    </div>
                    <span>PROFILE</span>
                </div>
            </a>
        </div>
        <div class="col-4 navItem">
            <a class="navItem-wrp" href="{{ route('connect.index') }}">
                <div class="item">
                    <div class="item-icon">
                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                            viewBox="0 0 80 70" style="enable-background:new 0 0 80 70;" xml:space="preserve">
                        <path class="st1" d="M64.6,0.1c-7.9,0-14.4,6.4-14.4,14.4c0,3.7,1.4,7.2,4,9.9L43.9,41.7c-1.2-0.3-2.5-0.5-3.7-0.5
                            c-1.3,0-2.5,0.2-3.8,0.5L25.8,24.3c2.5-2.7,3.9-6.2,3.9-9.8c0-7.9-6.4-14.4-14.4-14.4S1,6.5,1,14.5s6.4,14.4,14.4,14.4
                            c1.3,0,2.5-0.2,3.8-0.5l10.5,17.5c-2.5,2.7-3.9,6.2-3.9,9.8c0,7.9,6.4,14.4,14.4,14.4s14.4-6.4,14.4-14.4c0-3.7-1.4-7.2-4-9.9
                            l10.3-17.4c1.2,0.3,2.5,0.5,3.7,0.5c7.9,0,14.4-6.4,14.4-14.4S72.5,0.1,64.6,0.1z"/>
                        </svg>
                    </div>
                    <span>CONNECT</span>
                </div>
            </a>
        </div>
        <div class="col-4 navItem">
            <a class="navItem-wrp" href="{{ route('chat.chatting', [ 'ids' => auth()->user()->id . '_' ])}}">
                <div class="item">
                    <div class="item-icon">
                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                        viewBox="0 0 80 70" style="enable-background:new 0 0 80 70;" xml:space="preserve">
                    <path class="st0" d="M75.6,32.8c0,15.9-15.9,28.9-35.5,28.9c-5.1,0-10-0.9-14.4-2.5c-1.7,1.2-4.3,2.9-7.5,4.2
                        c-3.3,1.4-7.3,2.7-11.3,2.7c-0.9,0-1.7-0.5-2.1-1.4c-0.3-0.8-0.2-1.8,0.5-2.4l0,0l0,0l0,0l0,0l0,0c0,0,0.1-0.1,0.2-0.2
                        c0.2-0.2,0.4-0.4,0.7-0.8c0.6-0.7,1.3-1.7,2.1-3c1.4-2.3,2.7-5.3,3-8.7C7,44.8,4.6,39,4.6,32.8c0-15.9,15.9-28.9,35.5-28.9
                        S75.6,16.8,75.6,32.8z"/>
                    </svg>
                    </div>
                    <span>CHAT</span>
                </div>
            </a>
            @if (count($channels))
                @foreach ($channels as $channel)
                <new-message-notify :auth-user="{{ auth()->user() }}" :channel-info="{{ $channel }}"></new-message-notify>
                @endforeach
            @endif
        </div>
        <div class="col-4 navItem">
            <a class="navItem-wrp" href="{{ route('friends.index') }}">
                <div class="item">
                    <div class="item-icon">
                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                            viewBox="0 0 80 70" style="enable-background:new 0 0 80 70;" xml:space="preserve">
                        <g>
                            <g>
                                <circle class="st1" cx="22.1" cy="14.4" r="14.2"/>
                            </g>
                            <path class="st1" d="M36.3,69.9H7.8v-29c0-4.7,3.8-8.6,8.6-8.6h11.3c4.7,0,8.6,3.8,8.6,8.6V69.9z"/>
                            <g>
                                <circle class="st1" cx="57.9" cy="14.4" r="14.2"/>
                            </g>
                            <path class="st1" d="M72.2,69.9H43.7v-29c0-4.7,3.8-8.6,8.6-8.6h11.3c4.7,0,8.6,3.8,8.6,8.6V69.9z"/>
                        </g>
                        </svg>
                    </div>
                    <span>FRIENDS</span>
                </div>
            </a>
            @if ($isNewRequests)
                <div class="notification-section">
                    <span class="notify-status blinking"><i class="fa-solid fa-circle"></i></span>
                </div>
            @endif
        </div>
        <div class="col-4 navItem">
            <a class="navItem-wrp" href="{{ route('teams.index') }}">
                <div class="item">
                    <div class="item-icon">
                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                            viewBox="0 0 80 70" style="enable-background:new 0 0 80 70;" xml:space="preserve">
                        <path class="st1" d="M70.3,41c0-0.4,0-0.9,0-1.3c0-11.5-6.7-22.1-17-27.1C52.9,5.7,47.1,0.2,40.2,0.2S27.5,5.7,27.1,12.6
                            c-10.4,5-17,15.6-17,27.1c0,0.4,0,0.7,0,1.1c-4,2.4-6.4,6.6-6.4,11.3c0,7.2,5.9,13.1,13.1,13.1c1.9,0,3.8-0.4,5.6-1.2
                            c5.2,3.9,11.4,5.9,17.9,5.9c6.4,0,12.6-2,17.7-5.8c1.7,0.8,3.5,1.2,5.3,1.2c7.2,0,13.1-5.9,13.1-13.1C76.4,47.6,74,43.4,70.3,41z
                            M50.2,52.1c0,2.6,0.8,5.1,2.2,7.3c-3.7,2.3-7.9,3.5-12.2,3.5c-4.4,0-8.7-1.3-12.4-3.6c1.4-2.1,2.1-4.6,2.1-7.1
                            C29.8,45,24.1,39.2,17,39c0.2-8.1,4.7-15.4,11.7-19.4c2.3,4.1,6.7,6.8,11.4,6.8s9.2-2.6,11.4-6.8c7,4,11.4,11.3,11.7,19.4
                            c0,0,0,0,0,0C56,39,50.2,44.9,50.2,52.1z"/>
                        </svg>
                    </div>
                    <span>ROOMS</span>
                </div>
            </a>
        </div>
        <div class="col-4 navItem">
            <a class="navItem-wrp" href="{{ route('companies.index') }}">
                <div class="item">
                    <div class="item-icon">
                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                            viewBox="0 0 80 70" style="enable-background:new 0 0 80 70;" xml:space="preserve">
                        <g>
                            <path class="st0" d="M40,61h7V21.9c0-1.6,1.6-2.6,3.1-2l19.3,8.3c1.3,0.6,2.1,1.8,2.1,3.2V61h7v7H1.6v-7h7V17.3
                                c0-1.4,0.8-2.6,2.1-3.2L37.5,2.2C38,2,38.7,2,39.2,2.3C39.7,2.7,40,3.2,40,3.8V61z"/>
                        </g>
                        </svg>
                    </div>
                    <span>COMPANIES</span>
                </div>
            </a>
        </div>
        <div class="col-4 navItem">
            <a class="navItem-wrp" href="{{ route('coaches.index') }}">
                <div class="item">
                    <div class="item-icon">
                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="48 32 60 55" style="enable-background:new 48 32 60 55;" xml:space="preserve">
                        <g>
                            <path class="st1" d="M80,71.4L80,71.4c4.9,0,8.9-4,8.9-8.9V46.9c0-4.9-4-8.9-8.9-8.9h0c-4.9,0-8.9,4-8.9,8.9v15.5
                                C71.1,67.4,75.1,71.4,80,71.4z"/>
                            <path class="st1" d="M93.4,61.3c-1.1,0-2,0.9-2,2v0.5c0,1.5-0.3,3-0.9,4.4c-0.6,1.4-1.4,2.6-2.5,3.7c-1.1,1.1-2.3,1.9-3.7,2.5
                                C83,75,81.5,75.3,80,75.3c-1.5,0-3-0.3-4.4-0.9c-1.4-0.6-2.6-1.4-3.7-2.5c-1.1-1.1-1.9-2.3-2.5-3.7c-0.6-1.4-0.9-2.9-0.9-4.4v-0.5
                                c0-1.1-0.9-2-2-2c-1.1,0-2,0.9-2,2v0.5c0,2.1,0.4,4.1,1.2,6c0.8,1.8,1.9,3.5,3.3,4.9c1.4,1.4,3.1,2.5,4.9,3.3
                                c1.3,0.5,2.6,0.9,4,1.1v3.2h-7.1c-1.1,0-2,0.9-2,2s0.9,2,2,2h18.2c1.1,0,2-0.9,2-2s-0.9-2-2-2H82v-3.2c1.4-0.2,2.7-0.5,4-1.1
                                c1.8-0.8,3.5-1.9,4.9-3.3s2.5-3.1,3.3-4.9c0.8-1.9,1.2-3.9,1.2-6v-0.5C95.4,62.2,94.5,61.3,93.4,61.3z"/>
                        </g>
                        </svg>
                    </div>
                    <span>COACHES</span>
                </div>
            </a>
        </div>
        <div class="col-4 navItem">
            <a class="navItem-wrp" href="{{ route('studio.index') }}">
                <div class="item">
                    <div class="item-icon">
                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                            viewBox="0 0 80 70" style="enable-background:new 0 0 80 70;" xml:space="preserve">
                        <g>
                            <path class="st0" d="M27.5,9.9c-0.1-0.4-0.5-0.6-0.9-0.6h-7.5c-0.4,0-0.8,0.3-0.9,0.6L0.3,59.1c-0.1,0.3-0.1,0.6,0.1,0.9
                                c0.2,0.3,0.5,0.4,0.8,0.4h10c0.4,0,0.8-0.3,0.9-0.6l2.7-8.1H31l2.7,8c0.1,0.4,0.5,0.7,0.9,0.7h10c0.3,0,0.6-0.2,0.8-0.4
                                c0.2-0.3,0.2-0.6,0.1-0.9L27.5,9.9z M18.2,41.7l4.9-14l4.7,14H18.2z"/>
                            <path class="st0" d="M63.5,22.1c-6.4,0-10,1.4-13.6,5.4c-0.3,0.4-0.3,1,0,1.3l5.7,5.6c0.2,0.2,0.4,0.3,0.7,0.3c0,0,0,0,0,0
                                c0.3,0,0.5-0.1,0.7-0.3c1.8-2.1,3.3-2.8,6.2-2.8c4.8,0,5.7,1.8,5.7,4.7v0.8h-7.4c-9.9,0-13.4,5.9-13.4,11.4c0,3.5,1.2,6.6,3.3,8.8
                                c2.3,2.3,5.6,3.5,9.9,3.5c3.4,0,5.7-0.6,7.9-2.3v1c0,0.5,0.4,1,1,1h8.8c0.5,0,1-0.4,1-1V35.7C79.8,29.5,76.9,22.1,63.5,22.1z
                                M63.1,51.5c-3,0-4.5-1-4.5-3.1c0-1.4,0.5-3.2,4.4-3.2h5.9v1c0,2.1-0.3,3.2-1.1,3.9C66.5,51.2,65.1,51.5,63.1,51.5z"/>
                        </g>
                        </svg>
                    </div>
                    <span>STUDIO</span>
                </div>
            </a>
        </div>
        <div class="col-4 navItem">
            <a class="navItem-wrp" href="{{ route('stories.index') }}">
                <div class="item">
                    <div class="item-icon">
                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                            viewBox="0 0 80 70" style="enable-background:new 0 0 80 70;" xml:space="preserve">
                        <g>
                            <g>
                                <path class="st0" d="M13.4,67.8l11.2-4.1c1.6-0.6,3.2-1.6,4.4-2.8l37.8-37.8L51.9,8.3L14.1,46c-1.2,1.2-2.2,2.7-2.8,4.4L7.2,61.7
                                    C4.5,68.5,6.1,70.4,13.4,67.8z"/>
                            </g>
                            <g>
                                <path class="st0" d="M71.9,7l-3.8-3.8c-1.5-1.5-3.7-2.3-6-2.1c-2.2,0.2-4.2,1.2-5.8,2.8l-1,1l14.9,14.9l1-1
                                    c1.6-1.6,2.6-3.7,2.8-5.8C74.2,10.7,73.4,8.5,71.9,7z"/>
                            </g>
                        </g>
                        </svg>
                    </div>
                    <span>STORIES</span>
                </div>
            </a>
        </div>
        <div class="col-4 navItem">
            <a class="navItem-wrp" href="{{ route('news.index') }}">
                <div class="item">
                    <div class="item-icon">
                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                            viewBox="0 0 80 70" style="enable-background:new 0 0 80 70;" xml:space="preserve">
                        <path id="Mail_00000034805142091730622730000015747733887613171853_" class="st0" d="M68.5,7.6h-57C6.3,7.6,2,11.9,2,17.1v35.7
                            c0,5.2,4.3,9.5,9.5,9.5h57.1c5.2,0,9.5-4.3,9.5-9.5V17.2C78.1,11.9,73.8,7.6,68.5,7.6z M67.7,23.8L41.5,45.2c-0.4,0.4-1,0.5-1.5,0.5
                            s-1.1-0.2-1.5-0.5L12.3,23.8c-1-0.8-1.2-2.3-0.3-3.3c0.8-1,2.3-1.2,3.3-0.3L40,40.3l24.7-20.2c1-0.8,2.5-0.7,3.3,0.3
                            C68.8,21.4,68.7,22.9,67.7,23.8z"/>
                        </svg>
                    </div>
                    <span>NEWS</span>
                </div>
            </a>
            @if ($isNews)
                <div class="notification-section">
                    <span class="notify-status blinking"><i class="fa-solid fa-circle"></i></span>
                </div>
            @endif
        </div>
        <div class="col-4 navItem">
            <a class="navItem-wrp" href="{{ route('events.company') }}">
                <div class="item">
                    <div class="item-icon">
                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                            viewBox="0 0 80 70" style="enable-background:new 0 0 80 70;" xml:space="preserve">
                        <g>
                            <path class="st0" d="M62.8,0.9c-0.5-0.5-1.2-0.8-1.9-0.8c-1.5,0-2.8,1.2-2.8,2.7v1.3v10.7c0,0.7,0.3,1.4,0.8,1.9
                                c0.5,0.5,1.2,0.8,1.9,0.8c1.5,0,2.8-1.2,2.8-2.7V4.1V2.8C63.6,2,63.2,1.4,62.8,0.9z"/>
                            <path class="st0" d="M21.1,0.9c-0.5-0.5-1.2-0.8-1.9-0.8c-1.5,0-2.8,1.2-2.8,2.7v1.3v10.7c0,0.7,0.3,1.4,0.8,1.9
                                c0.5,0.5,1.2,0.8,1.9,0.8c1.5,0,2.8-1.2,2.8-2.7V4.1V2.8C21.9,2,21.6,1.4,21.1,0.9z"/>
                            <path class="st0" d="M67.8,6.5v8.2c0,3.8-3.1,6.9-7,6.9c-1.9,0-3.6-0.7-4.9-2c-1.3-1.3-2.1-3-2.1-4.9V6.3H26.1v8.5
                                c0,3.8-3.1,6.9-7,6.9c-1.8,0-3.6-0.7-4.9-2c-1.3-1.3-2.1-3.1-2.1-4.9V6.5c-5.3,1.1-9.3,5.8-9.3,11.4v40.4c0,0.1,0,0.3,0,0.4
                                c0.2,6.2,5.3,11.2,11.6,11.2h51c6.4,0,11.6-5.2,11.6-11.6V17.9C77.1,12.3,73.1,7.6,67.8,6.5z M58.7,49.1c-0.5,0.5-1.2,0.8-1.9,0.8
                                H23.2c-1.5,0-2.7-1.2-2.7-2.8c0-0.8,0.3-1.4,0.8-1.9c0.5-0.5,1.2-0.8,1.9-0.8h33.6c1.5,0,2.7,1.2,2.7,2.8
                                C59.5,48,59.2,48.6,58.7,49.1z M58.7,38.9c-0.5,0.5-1.2,0.8-1.9,0.8H23.2c-1.5,0-2.7-1.2-2.7-2.8c0-0.8,0.3-1.4,0.8-1.9
                                c0.5-0.5,1.2-0.8,1.9-0.8h33.6c1.5,0,2.7,1.2,2.7,2.8C59.5,37.7,59.2,38.4,58.7,38.9z"/>
                        </g>
                        </svg>
                    </div>
                    <span>EVENTS</span>
                </div>
            </a>
        </div>
        <div class="col-4 navItem">
            <a class="navItem-wrp" href="{{ route('trades.index') }}">
                <div class="item">
                    <div class="item-icon">
                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 80 70" style="enable-background:new 0 0 80 70;" xml:space="preserve">
                            <g>
                                <path class="st0" d="M70.4,50.1c0,11.5-9.1,18.1-26.5,18.1H9.6V1.9H42c16.6,0,25.1,6.9,25.1,17.2c0,6.6-3.4,11.7-8.8,14.6
                                    C65.7,36,70.4,41.7,70.4,50.1z M24.8,13.4V29h15.2c7.5,0,11.6-2.7,11.6-7.9s-4.1-7.8-11.6-7.8H24.8z M55,48.4
                                    c0-5.6-4.3-8.2-12.2-8.2H24.8v16.4h17.9C50.7,56.6,55,54.1,55,48.4z"/>
                            </g>
                        </svg>
                    </div>
                    <span>BRANDS</span>
                </div>
            </a>
        </div>
        <div class="col-4 navItem">
            <a class="navItem-wrp" href="{{ route('files.manual') }}">
                <div class="item">
                    <div class="item-icon">
                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 80 70" style="enable-background:new 0 0 80 70;" xml:space="preserve">
                        <g>
                            <path class="st0" d="M69.7,15.2H39.6c-0.6,0-1.1-0.2-1.6-0.7l-6.4-6.4c-1.3-1.3-3-2-4.8-2H10.3c-3.8,0-6.9,3.1-6.9,6.9v44.2
                                c0,3.8,3.1,6.9,6.9,6.9h59.4c3.8,0,6.9-3.1,6.9-6.9v-35C76.6,18.3,73.5,15.2,69.7,15.2z"/>
                        </g>
                        </svg>
                    </div>
                    <span>FILES</span>
                </div>
            </a>
        </div>
        <div class="col-4 navItem">
            <a class="navItem-wrp" href="{{ route('incentives.index') }}">
                <div class="item">
                    <div class="item-icon">
                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 80 70" style="enable-background:new 0 0 80 70;" xml:space="preserve">
                        <g>
                            <g>
                                <path class="st0" d="M28.8,35c0,6.2,5,11.2,11.2,11.2s11.2-5,11.2-11.2s-5-11.2-11.2-11.2S28.8,28.8,28.8,35z"/>
                            </g>
                            <path class="st0" d="M6.4,35c0,18.5,15,33.6,33.6,33.6S73.6,53.5,73.6,35S58.5,1.4,40,1.4S6.4,16.5,6.4,35z M17.6,35
                                c0-12.4,10-22.4,22.4-22.4s22.4,10,22.4,22.4c0,3.9-0.9,7.5-2.7,10.8l2.8,11.7l-11.7-3c-3.2,1.8-6.9,2.7-10.8,2.7
                                C27.6,57.4,17.6,47.4,17.6,35z"/>
                        </g>
                        </svg>
                    </div>
                    <span>SALES</span>
                </div>
            </a>
        </div>
        <div class="col-4 navItem">
            <a class="navItem-wrp" href="{{ route('wallet.index') }}">
                <div class="item">
                    <div class="item-icon">
                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                            viewBox="0 0 80 70" style="enable-background:new 0 0 80 70;" xml:space="preserve">
                        <g>
                            <g id="XMLID_830_">
                                <g>
                                    <g>
                                        <path class="st0" d="M74.9,33.5H57.8c-1.6,0-3,1.3-3,3v10.9c0,1.6,1.3,3,3,3h17.2c1.6,0,3-1.3,3-3V36.4
                                            C77.9,34.8,76.6,33.5,74.9,33.5z M63.7,46.2c-2.4,0-4.3-1.9-4.3-4.3s1.9-4.3,4.3-4.3c2.4,0,4.3,1.9,4.3,4.3
                                            C68,44.3,66,46.2,63.7,46.2z"/>
                                        <path class="st0" d="M61.3,4.6c-1.1-3.4-4.8-5.3-8.3-4.2L27.2,8.9h35.5L61.3,4.6z"/>
                                    </g>
                                </g>
                            </g>
                            <path class="st0" d="M57.5,55c-4.2,0-7.6-3.4-7.6-7.6V36.4c0-4.2,3.4-7.6,7.6-7.6h17.8V19c0-2.8-2.3-5.1-5.1-5.1h-63
                                c-2.8,0-5.1,2.3-5.1,5.1v45.9c0,2.8,2.3,5.1,5.1,5.1h63c2.8,0,5.1-2.3,5.1-5.1V55H57.5z"/>
                        </g>
                        </svg>
                    </div>
                    <span>WALLET</span>
                </div>
            </a>
        </div>
        <div class="col-4 navItem">
            <a class="navItem-wrp" href="{{ route('info.index') }}">
                <div class="item">
                    <div class="item-icon">
                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                            viewBox="0 0 80 70" style="enable-background:new 0 0 80 70;" xml:space="preserve">
                        
                        <g id="XMLID_1055_">
                            <g>
                                <path class="st0" d="M40,0.1C20.7,0.1,5.1,15.7,5.1,35S20.7,69.9,40,69.9S74.9,54.3,74.9,35S59.3,0.1,40,0.1z M45.8,57.3
                                    c0,1.3-1.1,2.4-2.4,2.4h-6.5c-1.3,0-2.4-1.1-2.4-2.4V30.8c0-1.3,1.1-2.4,2.4-2.4h6.5c1.3,0,2.4,1.1,2.4,2.4V57.3z M40,23.9
                                    c-3.3,0-5.9-2.6-5.9-5.9s2.6-5.9,5.9-5.9s5.9,2.6,5.9,5.9S43.3,23.9,40,23.9z"/>
                            </g>
                        </g>
                        </svg>
                    </div>
                    <span>INFO</span>
                </div>
            </a>
        </div>
    </div>
</div>
@endsection


@section('PAGE_END')
@endsection

@section('PAGE_LEVEL_SCRIPTS')
@endsection