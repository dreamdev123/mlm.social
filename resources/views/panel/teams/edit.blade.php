@extends('layouts.app', ['ACTIVE_TITLE' => 'ROOMS', 'ACTIVE_TEAM_ROUTES' => true, 'ACTIVE_PAGE' => 'own'])

@section('title', __('- Rooms'))

@section('PAGE_LEVEL_STYLES')
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
@endsection

@section('PAGE_START')
@endsection

@section('PAGE_CONTENT')

<div class="main-bg d-flex">
  <video autoplay muted loop class="wave-video-section" playsinline>
      <source type="video/mp4">
  </video>   
  <video autoplay muted loop class="wave-video-section-mobile" playsinline>
      <source type="video/mp4">
  </video>
  <div class="row m-0 p-0 w-100 groups-section">
    <div class="row justify-content-center m-0 py-3 w-100">
      <div class="col-md-6 p-0">
        <div class="text-center pb-3 top-title">EDIT YOUR TEAM</div>
        
        <div class="name-input-section">
          <div class="image-icon-section">
            <span class="image-icon"><i class="fa fa-image" aria-hidden="true"></i></span>
          </div>
          <input id="teamName" type="text" class="form-control" name="name" placeholder="Team Name" value="{{ $team->name }}">
        </div>
        <div class="description-input-section">
          <input id="teamDescription" type="text" class="form-control" name="description" placeholder="Description" value="{{ $team->description }}">
        </div>
    
        <div class="row justify-content-center align-items-center py-5 mx-0">
          <div class="col-md-6">
            <button class="btn btn-primary publish-button">
              {{ __('UPDATE') }}
            </button>
          </div>
        </div>
        
        <div class="text-center pb-3 top-title">MY TEAM MEMBERS</div>
        
        <div class="search-input-section">
          <input id="searchKey" type="text" class="form-control" name="searchKey" placeholder="Search Friends">
          <div class="search-icon-section">
            <span class="search-icon"><i class="fa fa-search" aria-hidden="true"></i></span>
          </div>
        </div>

        <div class="member-body flat-scroll">
          @foreach ($users as $key => $user)
            <div class="member-item" attr-fullname="{{ $user->profile->first_name }} {{ $user->profile->last_name }}">
              <div class="member-link">
                <div class="member-avatar-wrp">
                  <div class="member-avatar">
                    <p class="first_letter">{{ substr($user->profile->first_name, 0, 1) }}</p>
                  </div>
                </div>
                <div class="member-name">{{ $user->profile->first_name }} {{ $user->profile->last_name }}</div>
              </div>
              <div class="option-icons-section">
                <a class="option-icon-btn add-member {{ in_array($user->id, $members) ? 'd-none' : '' }}" href="javascript:;" attr-userId="{{ $user->id }}">
                  <span class="option-icon"><i class="fa fa-plus" aria-hidden="true"></i></span>
                </a>
                <a class="option-icon-btn remove-member {{ !in_array($user->id, $members) ? 'd-none' : '' }}" href="javascript:;" attr-userId="{{ $user->id }}">
                  <span class="option-icon"><i class="fa fa-trash" aria-hidden="true"></i></span>
                </a>
                <a class="option-icon-btn" href="{{ route('profile', [ 'userID' => $user->id ]) }}">
                  <span class="option-icon"><i class="fa fa-search" aria-hidden="true"></i></span>
                </a>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</div>
@endsection


@section('PAGE_END')
@endsection

@section('PAGE_LEVEL_SCRIPTS')
<script type="text/javascript">
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });

  $('.publish-button').on('click', function() {
    var name = $('#teamName').val();
    var description = $('#teamDescription').val();
    var send_data = {};
    send_data['teamId'] = '{{ $team->id }}';
    send_data['name'] = name;
    send_data['description'] = description;
    if (!name || !description) {
      toastr['error']('Please Input the Team Info', 'Error');
      return;
    }
    $.ajax({
      type: 'PUT',
      url: '{{ route('team.info.update') }}',
      data : send_data,
      success:function(data){
        if (data.status) {
          toastr['success']('Your Team successfully updated', 'Success');
          // setTimeout(function() {
          //   window.location.reload();
          // }, 1000);
        } else {
          toastr['error'](data.message, 'Error');
        }
      },
      error:function(data){
        console.log(data);
      }
    });
  })

  $('.add-member').on('click', function() {
    var send_data = {};
    send_data['teamId'] = '{{ $team->id }}';
    send_data['userId'] = $(this).attr('attr-userId');
    $.ajax({
      type: 'POST',
      url: '{{ route('team.member.unban') }}',
      data : send_data,
      success:function(data){
        if (data.status) {
          toastr['success'](data.message, 'Success');
          setTimeout(function() {
            window.location.reload();
          }, 1000);
        } else {
          toastr['error'](data.message, 'Error');
        }
      },
      error:function(data){
        console.log(data);
      }
    });
  })

  $('.remove-member').on('click', function() {
    var send_data = {};
    send_data['teamId'] = '{{ $team->id }}';
    send_data['userId'] = $(this).attr('attr-userId');
    $.ajax({
      type: 'POST',
      url: '{{ route('team.member.ban') }}',
      data : send_data,
      success:function(data){
        if (data.status) {
          toastr['success'](data.message, 'Success');
          setTimeout(function() {
            window.location.reload();
          }, 1000);
        } else {
          toastr['error'](data.message, 'Error');
        }
      },
      error:function(data){
        console.log(data);
      }
    });
  })

</script>
@endsection