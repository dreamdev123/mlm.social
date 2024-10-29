@extends('layouts.app', ['ACTIVE_TITLE' => 'ROOMS', 'ACTIVE_TEAM_ROUTES' => true, 'ACTIVE_PAGE' => 'chatting'])

@section('title', __('- Rooms'))

@section('PAGE_LEVEL_STYLES')
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
@endsection

@section('PAGE_START')
<script src="https://media.twiliocdn.com/sdk/js/chat/v3.3/twilio-chat.min.js"></script>
@endsection

@section('PAGE_CONTENT')

<div class="main-bg d-flex">
  <video autoplay muted loop class="wave-video-section" playsinline>
      <source type="video/mp4">
  </video>   
  <video autoplay muted loop class="wave-video-section-mobile" playsinline>
      <source type="video/mp4">
  </video>
  <div class="row m-0 p-0 w-100 groups-section" id="app">
    <div class="row justify-content-center m-0 w-100">
      <div class="col-md-7 p-0">
        <div class="name-input-section">
          <div class="image-icon-section">
            @if($channelInfo->logo)
            <div class="contentItem-wrp">
              <img src="{{ asset('uploads/groups/'.$channelInfo->logo.'?'.time()) }}">
            </div>
            @else
            <p class="first_letter">{{ substr($channelInfo->name, 0, 1) }}</p>
            @endif
          </div>
          <input type="text" class="form-control" name="name" placeholder="Team Name" value="{{ $channelInfo->name }}" disabled>
        </div>
        <div class="description-input-section">
          <input type="text" class="form-control" name="description" placeholder="Description" value="{{ $channelInfo->description }}" disabled>
        </div>
        <group-chat-room :user="{{ auth()->user() }}" :channel-info="{{ $channelInfo }}"></group-chat-room>
      </div>
    </div>
  </div>
</div>
@endsection


@section('PAGE_END')
@endsection

@section('PAGE_LEVEL_SCRIPTS')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.4/moment.min.js"></script>
  <script src="{{ asset('js/app.js') }}"></script>
  <script type="text/javascript">
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });

  </script>
@endsection