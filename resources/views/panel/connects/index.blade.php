@extends('layouts.app', ['ACTIVE_TITLE' => 'CONNECT', 'ROUTES' => [
  ['ROUTE' => 'connect.index', 'ACTIVE' => 'all', 'ACTIVE_ROUTE' => true]
], 'ACTIVE_PAGE' => 'all'])

@section('title', __('- Connect'))

@section('PAGE_LEVEL_STYLES')
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
@endsection

@section('PAGE_CONTENT')

<div class="main-bg d-flex">
  <video autoplay muted loop class="wave-video-section" playsinline>
      <source type="video/mp4">
  </video>   
  <video autoplay muted loop class="wave-video-section-mobile" playsinline>
      <source type="video/mp4">
  </video>
  <div class="row m-0 px-0 w-100 connect-section">
    <div class="row justify-content-center m-0 p-0 w-100">
      <div class="col-md-6 p-0">
        <div class="search-input-section">
          <input id="searchKey" type="text" class="form-control" name="searchKey" placeholder="Search Name">
          <div class="search-icon-section">
            <span class="search-icon"><i class="fa fa-search" aria-hidden="true"></i></span>
          </div>
        </div>
        @include('_sections.connectUsers')
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
  
  $('#connectSearchIcon').click(function () {
  // $('#connectSearchKey').on('keyup', function () {
    if($("#connectSearchKey").val() == '') {
      $('.member-body').hide();
    } else {
      var options = {
          keyword: $("#connectSearchKey").val(),
      };
      $.ajax({
        url: '{{ route("connect.search.filter") }}',
        method: "POST",
        data: options,
        success: function(res) {
          if (res.length) {
            var html = '';
            for(var resIndex = 0; resIndex < res.length; resIndex++) {
              html += 
                '<div class="member-item">' +
                '  <div class="member-link">' +
                '    <div class="member-avatar-wrp">' +
                '      <div class="member-avatar">' +
                '        <img class="svg-avatar" src="{{ asset('images/svg/SmileIcon.svg') }}" alt="member default avatar">' +
                '      </div>' +
                '    </div>' +
                '    <div class="member-name">' + res[resIndex].first_name + ' ' + res[resIndex].last_name + '</div>' +
                '  </div>' +
                '  <div class="option-icons-section">' +
                '    <a class="option-icon-btn" href="javascript:;">' +
                '      <span class="option-icon"><i class="fa fa-search" aria-hidden="true"></i></span>' +
                '    </a>' +
                '  </div>' +
                '</div>';
            }
            $('.member-body').html(html);
            $('.member-body').show();
          } else {
            var html = '<div class="col no-members mt-5">'
              +'No User'
              +'</div>';
            $('.member-body').html(html);
            $('.member-body').show();
          }
        },
        error:function(err){
            toastr['error']('Error');
        }
      })
    }
  });

  $('.send-icon-section').click(function () {
    var userId = $(this).attr('attr-userId');
    if($(".request-message" + userId).val() == '') {
      toastr['error']('Please enter the message', 'Error');
      return;
    } else {
      var send_data = {};
      send_data['user_id'] = userId;
      send_data['message'] = $(".request-message" + userId).val();
      $.ajax({
        url: '{{ route("connect.request.send") }}',
        method: "POST",
        data: send_data,
        success: function(data) {
          if (data.error) {
            toastr['error'](data.error, 'Error');
          } else {
            toastr['success'](data.success, 'Success');
            setTimeout(function() {
              window.location.href = '{{ route('connect.index') }}';
            }, 1000);
          }
        },
        error:function(err){
            toastr['error']('Error');
        }
      })
    }
  });
</script>
@endsection