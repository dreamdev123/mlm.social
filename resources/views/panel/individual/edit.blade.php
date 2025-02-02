@extends('layouts.app', ['ACTIVE_TITLE' => 'PROFILE', 'ROUTES' => [
  ['ROUTE' => 'profile', 'ACTIVE' => 'edit', 'ACTIVE_ROUTE' => true]
], 'ACTIVE_PAGE' => 'edit'])

@section('title', __('- Edit'))

@section('PAGE_LEVEL_STYLES')
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{ asset('css/jquery.Jcrop.min.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('css/crop_style.css') }}" />
@endsection

@section('PAGE_START')
@endsection

@section('PAGE_CONTENT')

@php
    $birthday = date_create($user->profile->birthday);
    $other_interests = explode(",", $user->profile->other_interests);
    $categories = array(
        'Crafts' => 'Arts & Crafts',
        'Collecting' => 'Collecting',
        'Dancing' => 'Dancing',
        'Education' => 'Education',
        'Extreme' => 'Extreme',
        'Food' => 'Food & Drink',
        'Games' => 'Games',
        'Tech' => 'High Tech',
        'Intellectual' => 'Intellectual',
        'Music' => 'Music',
        'Outdoors' => 'Outdoors',
        'Performing' => 'Performing Arts',
        'Pets' => 'Pets',
        'Philantropy' => 'Philantropy',
        'Hobbies' => 'RC Hobbies',
        'Sports' => 'Sports',
        'Writing' => 'Writing'
    );
@endphp
<div class="main-bg">
    <video autoplay muted loop class="wave-video-section" playsinline>
        <source type="video/mp4">
    </video>   
    <video autoplay muted loop class="wave-video-section-mobile" playsinline>
        <source type="video/mp4">
    </video>
    <div class="row m-0 mx-auto p-0 setting-section">
        <input type="file" id="profile-avatar-file" style="display: none;" accept=".jpg,.jpeg,.png,.svg" onchange="image_upload()" />
        <div class="row justify-content-center m-0 p-0 w-100">
            <div class="col-md-6 p-0">
                <div class="row p-0 m-0">
                    <div class="col-3 col-sm-3 col-md-3 col-lg-3 contentItem">
                        @if(isset($user->profile->main_avatar_url))
                            <div class="contentItem-wrp profile-avatar-wrp">
                                <div class="optional-section">
                                    <span class="option-icon trash-avatar" attr-data="main_avatar"><i class="fa fa-trash" aria-hidden="true"></i></span>
                                </div>
                                <div class="image-container"></div>
                                <img class="avatar" alt="main avatar" src="{{ asset('uploads/'.$user->username.'/'.$user->profile->main_avatar_url.'?'.time()) }}">
                            </div>
                        @else
                            <div class="cropme contentItem-wrp profile-avatar-wrp">
                                <div class="thumbnail-card profile-avatar" attr-data="main_avatar">
                                    <input id="selectedFile" class="file-selector__input" type='file' accept=".png, .jpg, .jpeg, .svg">
                                    <img id='crop__result' src=''>
                                    <img class="option-icon" attr-data="main_avatar" src="{{ asset('images/svg/ImageGreen.svg') }}">
                                </div>
                            </div>
                        @endif
                    </div>
                    <div class="col-9 col-sm-9 col-md-9 col-lg-9 contentItem profile-person-section">
                        <div class="person-info-section h-100">
                            <div class="profile-card d-flex align-items-center h-100 flat-scroll">
                                <div class="profile-content pl-3">
                                    <p class="profile-card-title">{{ $user->getFullname() }}</p>
                                    <p class="profile-card-context changeable job-title-edit" contenteditable="true">{{ $user->profile->job_title ?? 'Company Name'}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 contentItem">
                    @if(isset($user->profile->banner_img_url))
                        <div class="contentItem-wrp main-avatar">
                            <div class="optional-section banner-section">
                                <span class="option-icon trash-avatar" attr-data="banner_img"><i class="fa fa-trash" aria-hidden="true"></i></span>
                            </div>
                            <div class="image-container"></div>
                            <img class="avatar" alt="main avatar" src="{{ asset('uploads/'.$user->username.'/'.$user->profile->banner_img_url.'?'.time()) }}">
                        </div>
                    @else
                        <div class="contentItem-wrp main-avatar">
                            <div class="optional-section  banner-section">
                                <img class="option-icon avatar-upload" attr-data="banner_img" src="{{ asset('images/svg/ImageGreen.svg') }}" >
                            </div>
                            <div class="thumbnail-card main_avatar_card_bg avatar">
                            </div>
                        </div>
                    @endif
                </div>
                <div class="col-12 col-sm-12 contentItem">
                    <div class="story-content-wrp">
                        <div class="my-story-card">
                            <div class="d-flex">
                                <div class="about">
                                    <p class="story-card-title">About Me</p>
                                </div>
                                <div class="d-flex birthday">
                                    <span><i class="fa-solid fa-gift"></i></span>
                                    <p class="profile-card-context">{{ date_format($birthday, "j F Y" )}}</p>
                                </div>
                            </div>
                            @if (isset($user->profile->story_content))
                            <div class="story-card-context mr-2 changeable story-edit" contenteditable="true">
                                @php
                                    echo $user->profile->story_content;
                                @endphp
                            </div>
                            @else
                            <div class="story-card-context mr-2 changeable story-edit" contenteditable="true">
                                Type here
                            </div>
                            @endif
                        </div>                        
                    </div>
                </div>
                <div class="col-lg-12 p-0">
                    <div class="row justify-content-center m-0 p-0 w-100">
                        <div class="col-12 contentItem interests-section">
                            <div class="profile-card profile-card-bg d-flex flat-scroll">
                                <div class="profile-content">
                                    <p class="profile-card-context mt-3"><b>{{ empty($city) ? isset($user->profile->city) ? $user->profile->city : 'City' : $city }}</b></p>
                                    <p class="profile-card-context">{{ empty($state) ? isset($user->profile->state) ? $user->profile->state : 'Area' : $state }}</p>
                                    <p class="profile-card-context">{{ empty($country) ? isset($user->profile->country) ? $user->profile->country : 'Country' : $country }}</p>
                                </div>  
                                <div class="profile-content">
                                    <div class="d-flex">
                                        <div>
                                            <img src="{{ asset('images/svg/Friends.svg') }}" class="position-relative" />
                                        </div>
                                        <!-- @if (isset($friends)) -->
                                            <p class="profile-card-context buddies-count">{{ $friends->count() }}</p>
                                        <!-- @endif -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 p-0">
                            <div class="row justify-content-center m-0 p-0 w-100 card-border-wrp">
                                <div class="col-3 col-sm-3 col-md-3 contentItem thumbnail-card-border">
                                    @if(isset($user->profile->other_avatar_url1))
                                        <div class="contentItem-wrp">
                                            <div class="optional-section">
                                                <span class="option-icon trash-avatar" attr-data="thumbnail1"><i class="fa fa-trash" aria-hidden="true"></i></span>
                                            </div>
                                            <div class="image-container"></div>
                                            <img src="{{ asset('uploads/'.$user->username.'/'.$user->profile->other_avatar_url1.'?'.time()) }}">
                                        </div>
                                    @else
                                        <div class="contentItem-wrp">
                                            <div class="optional-section">
                                                <img class="option-icon avatar-upload" attr-data="thumbnail1" src="{{ asset('images/svg/ImageGreen.svg') }}" >
                                            </div>
                                            <div class="thumbnail-card">
                                            </div>
                                        </div>
                                    @endif
                                </div>
                                <div class="col-3 col-sm-3 col-md-3 contentItem thumbnail-card-border">
                                    @if(isset($user->profile->other_avatar_url2))
                                        <div class="contentItem-wrp">
                                            <div class="optional-section">
                                                <span class="option-icon trash-avatar" attr-data="thumbnail2"><i class="fa fa-trash" aria-hidden="true"></i></span>
                                            </div>
                                            <div class="image-container"></div>
                                            <img src="{{ asset('uploads/'.$user->username.'/'.$user->profile->other_avatar_url2.'?'.time()) }}">
                                        </div>
                                    @else
                                        <div class="contentItem-wrp">
                                            <div class="optional-section">
                                                <img class="option-icon avatar-upload" attr-data="thumbnail2" src="{{ asset('images/svg/ImageGreen.svg') }}" >
                                            </div>
                                            <div class="thumbnail-card">
                                            </div>
                                        </div>
                                    @endif
                                </div>
                                <div class="col-3 col-sm-3 col-md-3 contentItem thumbnail-card-border">
                                    @if(isset($user->profile->other_avatar_url3))
                                        <div class="contentItem-wrp">
                                            <div class="optional-section">
                                                <span class="option-icon trash-avatar" attr-data="thumbnail3"><i class="fa fa-trash" aria-hidden="true"></i></span>
                                            </div>
                                            <div class="image-container"></div>
                                            <img src="{{ asset('uploads/'.$user->username.'/'.$user->profile->other_avatar_url3.'?'.time()) }}">
                                        </div>
                                    @else
                                        <div class="contentItem-wrp">
                                            <div class="optional-section">
                                            <img class="option-icon avatar-upload" attr-data="thumbnail3" src="{{ asset('images/svg/ImageGreen.svg') }}" >
                                            </div>
                                            <div class="thumbnail-card">
                                            </div>
                                        </div>
                                    @endif
                                </div>
                                <div class="col-3 col-sm-3 col-md-3 contentItem thumbnail-card-border">
                                    @if(isset($user->profile->other_avatar_url4))
                                        <div class="contentItem-wrp">
                                            <div class="optional-section">
                                                <span class="option-icon trash-avatar" attr-data="thumbnail4"><i class="fa fa-trash" aria-hidden="true"></i></span>
                                            </div>
                                            <div class="image-container"></div>
                                            <img src="{{ asset('uploads/'.$user->username.'/'.$user->profile->other_avatar_url4.'?'.time()) }}">
                                        </div>
                                    @else
                                        <div class="contentItem-wrp">
                                            <div class="optional-section">
                                            <img class="option-icon avatar-upload" attr-data="thumbnail4" src="{{ asset('images/svg/ImageGreen.svg') }}" >
                                            </div>
                                            <div class="thumbnail-card">
                                            </div>
                                        </div>
                                    @endif
                                </div>
                                <div class="col-3 col-sm-3 col-md-3 contentItem thumbnail-card-border">
                                    @if(isset($user->profile->other_avatar_url5))
                                        <div class="contentItem-wrp">
                                            <div class="optional-section">
                                                <span class="option-icon trash-avatar" attr-data="thumbnail5"><i class="fa fa-trash" aria-hidden="true"></i></span>
                                            </div>
                                            <div class="image-container"></div>
                                            <img src="{{ asset('uploads/'.$user->username.'/'.$user->profile->other_avatar_url5.'?'.time()) }}">
                                        </div>
                                    @else
                                        <div class="contentItem-wrp">
                                            <div class="optional-section">
                                            <img class="option-icon avatar-upload" attr-data="thumbnail5" src="{{ asset('images/svg/ImageGreen.svg') }}" >
                                            </div>
                                            <div class="thumbnail-card">
                                            </div>
                                        </div>
                                    @endif
                                </div>
                                <div class="col-3 col-sm-3 col-md-3 contentItem thumbnail-card-border">
                                    @if(isset($user->profile->other_avatar_url6))
                                        <div class="contentItem-wrp">
                                            <div class="optional-section">
                                                <span class="option-icon trash-avatar" attr-data="thumbnail6"><i class="fa fa-trash" aria-hidden="true"></i></span>
                                            </div>
                                            <div class="image-container"></div>
                                            <img src="{{ asset('uploads/'.$user->username.'/'.$user->profile->other_avatar_url6.'?'.time()) }}">
                                        </div>
                                    @else
                                        <div class="contentItem-wrp">
                                            <div class="optional-section">
                                            <img class="option-icon avatar-upload" attr-data="thumbnail6" src="{{ asset('images/svg/ImageGreen.svg') }}" >
                                            </div>
                                            <div class="thumbnail-card">
                                            </div>
                                        </div>
                                    @endif
                                </div>
                                <div class="col-3 col-sm-3 col-md-3 contentItem thumbnail-card-border">
                                    @if(isset($user->profile->other_avatar_url7))
                                        <div class="contentItem-wrp">
                                            <div class="optional-section">
                                                <span class="option-icon trash-avatar" attr-data="thumbnail7"><i class="fa fa-trash" aria-hidden="true"></i></span>
                                            </div>
                                            <div class="image-container"></div>
                                            <img src="{{ asset('uploads/'.$user->username.'/'.$user->profile->other_avatar_url7.'?'.time()) }}">
                                        </div>
                                    @else
                                        <div class="contentItem-wrp">
                                            <div class="optional-section">
                                            <img class="option-icon avatar-upload" attr-data="thumbnail7" src="{{ asset('images/svg/ImageGreen.svg') }}" >
                                            </div>
                                            <div class="thumbnail-card">
                                            </div>
                                        </div>
                                    @endif
                                </div>
                                <div class="col-3 col-sm-3 col-md-3 contentItem thumbnail-card-border">
                                    @if(isset($user->profile->other_avatar_url8))
                                        <div class="contentItem-wrp">
                                            <div class="optional-section">
                                                <span class="option-icon trash-avatar" attr-data="thumbnail8"><i class="fa fa-trash" aria-hidden="true"></i></span>
                                            </div>
                                            <div class="image-container"></div>
                                            <img src="{{ asset('uploads/'.$user->username.'/'.$user->profile->other_avatar_url8.'?'.time()) }}">
                                        </div>
                                    @else
                                        <div class="contentItem-wrp">
                                            <div class="optional-section">
                                            <img class="option-icon avatar-upload" attr-data="thumbnail8" src="{{ asset('images/svg/ImageGreen.svg') }}" >
                                            </div>
                                            <div class="thumbnail-card">
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{--<!-- <div class="row justify-content-center px-4 m-0 pt-4 pb-2">
                    <p>SELECT YOUR ADDRESS</p>
                </div>
                <div class="w-100 address-search-section">
                    <div class="search-input-section">
                        <input id="addressSearchKey" type="text" class="form-control" name="searchKey" placeholder="Search city" value="{{ $addressStatus ? $address : '' }}">
                        <div id="addressSearchIcon" class="search-icon-section">
                            <span class="search-icon"><i class="fa fa-search" aria-hidden="true"></i></span>
                        </div>
                    </div>
                    
                    <div class="w-100 addresstab">
                    </div>
                </div> -->--}}
                <div class="row justify-content-center align-items-center mt-4 mb-5 btn-section w-100 p-0 m-0">
                    <a href="{{ route('profile') }}" class="btn btn-primary save-button">SAVE</a>
                </div>
            </div>
            
        </div>
    </div>
    
</div>
<div class="modal fade" id="imageModalContainer" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-centered crop__modal">
        <div class="modal-content crop__modal-content modal-content1">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i data-feather="arrow-left"></i></span>
                </button>
                <h5 class="modal-title" id="imageModal">Crop Image</h5>
            </div>
            <div class="modal-body" id="crop__modal-body">
                <img id='crop-image-container'>

                </img>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn crop__action" data-dismiss="modal"><i data-feather="x"></i></button>
                <button type="button" class="btn crop__action save-modal" onclick="cropImage()"><i data-feather="check"></i></button>
            </div>
        </div>
    </div>
</div>
@endsection


@section('PAGE_END')
@endsection

@section('PAGE_LEVEL_SCRIPTS')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.4.1/croppie.min.js"></script>
<script src="https://unpkg.com/feather-icons"></script>
<script src="{{ asset('js/jquery.Jcrop.js') }}"></script>
<script src="{{ asset('js/jquery.SimpleCropper.js') }}"></script>
<script>
    $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    var other_interested = '{{ $user->profile->other_interests }}' ? '{{ $user->profile->other_interests }}'.split(',') : [];
    var avatar_url = '';
    var contents = $('.story-edit').html();
    var job_title = $('.job-title-edit').html();
    var city = $('.city-edit').html();
    var country = $('.country-edit').html();
    var selected_address = '{{ $addressStatus ? $selected_address : '' }}';
  
    $('#addressSearchIcon').click(function () {
        if($("#addressSearchKey").val() == '') {
            $('.addresstab').hide();
        } else {
            var options = {
                distance: 'CITY',
                keyword: $("#addressSearchKey").val(),
            };
            $.ajax({
                url: '{{ route("connect.address.search") }}',
                method: "POST",
                data: options,
                success: function(res) {
                    if (res.length) {
                        var html = '';
                        for(var resIndex = 0; resIndex < res.length; resIndex++) {
                        html += 
                            '<div class="address py-3" attr-data="' + res[resIndex].address + '"  attr-name="' + res[resIndex].name + '">' + res[resIndex].name + '</div>';
                        }
                        $('.addresstab').html(html);
                        $('.addresstab').show();
                    }
                },
                error:function(err){
                    toastr['error']('Error');
                }
            })
        }
    });

    $(document).on('click', '.address', function() {
        selected_address = $(this).attr('attr-data');
        var address = $(this).attr('attr-name').split(', ');
        $('.city-edit').html(address[0]);
        $('.country-edit').html(address[1]);
        $("#addressSearchKey").val($(this).attr('attr-name'))
        $('.addresstab').hide();
        var send_data = {};
        send_data['id'] = '{{$user->profile->id}}';
        send_data['address'] = selected_address;

        $.ajax({
          type: 'PUT',
          url: '{{ route('setting.profile.address') }}',
          data: send_data,
          success: function(data) {
            toastr['success'](data.success, 'Success');
          },
          error:function(data){
            console.log(data);
          }
        })
    })

    $('.other-interested-update').on('click', function() {
        var send_data = {};
        send_data['id'] = '{{$user->profile->id}}';
        send_data['other_interests'] = other_interested.join(',');
        $.ajax({
          type: 'PUT',
          url: '{{ route('setting.other.interested') }}',
          data: send_data,
          success: function(data) {
            toastr['success'](data.success, 'Success');
            setTimeout(function() {
              window.location.reload();
            }, 1000);
          }
        })
    })

    feather.replace();

    $('#selectedFile').change(function () {
        if (this.files[0] == undefined)
            return;
        $('#imageModalContainer').modal('show');
        let reader = new FileReader();
        reader.addEventListener("load", function () {
            $("#crop-image-container").attr("src", reader.result);
            window.src = reader.result;
        }, false);
        if (this.files[0]) {
            reader.readAsDataURL(this.files[0]);
        }
    });

    let croppi;
    $('#imageModalContainer').on('shown.bs.modal', function () {
        let width = document.getElementById('crop__modal-body').offsetHeight;
        $('#crop-image-container').height((width - 100) + 'px');
        croppi = $('#crop-image-container').croppie({
            viewport: {
            width: width - 100,
            height: width - 100
            },
        });
        $('.modal-body1').height(document.getElementById('crop-image-container').offsetHeight + 50 + 'px');
        croppi.croppie('bind', {
            url: window.src,
        }).then(function () {
            croppi.croppie('setZoom', 0.8);
        });
    });
    $('#imageModalContainer').on('hidden.bs.modal', function () {
        croppi.croppie('destroy');
    });
    function cropImage() {
        croppi.croppie('result', { type: 'base64', format: 'jpeg', size: 'original' })
            .then(function (resp) {
                $('#crop__result').attr('src', resp);
                $('.modal').modal('hide');
                $('#crop__result').show();
                
                $("input[id='selectedFile']").val('');
                var blobURL = resp;
                const img = new Image();
                img.src = blobURL;
                
                img.onload = function () {
                    const MAX_WIDTH = 640;
                    const MAX_HEIGHT = 640;
                    const [newWidth, newHeight] = calculateSize(img, MAX_WIDTH, MAX_HEIGHT);
                    const canvas = document.createElement("canvas");
                    canvas.width = newWidth;
                    canvas.height = newHeight;
                    const ctx = canvas.getContext("2d");
                    ctx.drawImage(img, 0, 0, newWidth, newHeight);
                    canvas.toBlob(
                        (blob) => {
                            // Handle the compressed image.
                            var form_data = new FormData();
                            form_data.append('file', blob);
                            form_data.append('field', 'main_avatar');
                            $.ajax({
                                type: 'POST',
                                url: '{{ route('setting.profile.avatar') }}',
                                processData: false,
                                contentType: false,
                                cache: false,
                                data : form_data,
                                success:function(data){
                                    if (data.error) {
                                        toastr['error'](data.error, 'Error');
                                    } else {
                                        toastr['success'](data.success, 'Success');
                                        setTimeout(function() {
                                            window.location.reload();
                                        }, 1000);
                                    }
                                },
                                error:function(data){
                                    console.log(data);
                                }
                            });
                        },
                        "image/jpeg",
                        quality
                    );
                };
            });
    }

    // $('.cropme').simpleCropper();

    // $(".cropme").click(function() {
    //     avatar_url = $(this).attr('attr-data');
    // });

    $(".avatar-upload").click(function() {
        avatar_url = $(this).attr('attr-data');
        $("input[id='profile-avatar-file']").click();
    });

    function image_upload(data) {
        var img_src = $(".cropme").find("img").attr("src");
        var file_data = $('#profile-avatar-file').prop('files')[0];
        if (file_data && file_data.size > 2097152) {
            toastr['error']('File too large. File must be less than 2MB.', 'Error');
            return;
        }
        $("input[id='profile-avatar-file']").val('')
        
        var blobURL;
        if (!file_data || file_data == undefined) {
            blobURL = img_src;
        }
        else {
            blobURL = URL.createObjectURL(file_data);
        }
        
        const img = new Image();
        img.src = blobURL;
        
        img.onload = function () {
            const MAX_WIDTH = 1080;
            const MAX_HEIGHT = 675;
            const [newWidth, newHeight] = calculateSize(img, MAX_WIDTH, MAX_HEIGHT);
            const canvas = document.createElement("canvas");
            canvas.width = newWidth;
            canvas.height = newHeight;
            const ctx = canvas.getContext("2d");
            ctx.drawImage(img, 0, 0, newWidth, newHeight);
            canvas.toBlob(
                (blob) => {
                    // Handle the compressed image.
                    var form_data = new FormData();
                    form_data.append('file', blob);
                    form_data.append('field', avatar_url);
                    form_data.append('img_src', img_src);
                    $.ajax({
                        type: 'POST',
                        url: '{{ route('setting.profile.avatar') }}',
                        processData: false,
                        contentType: false,
                        cache: false,
                        data : form_data,
                        success:function(data){
                            if (data.error) {
                                toastr['error'](data.error, 'Error');
                            } else {
                                toastr['success'](data.success, 'Success');
                                setTimeout(function() {
                                    window.location.reload();
                                }, 1000);
                            }
                        },
                        error:function(data){
                            console.log(data);
                        }
                    });
                },
                "image/jpeg",
                quality
            );
        };
    }

    $(".trash-avatar").click(function() {
        var send_data = {};
        send_data['id'] = '{{$user->profile->id}}';
        send_data['field'] = $(this).attr('attr-data');
        $.ajax({
          type: 'PUT',
          url: '{{ route('setting.remove.avatar') }}',
          data: send_data,
          success: function(data) {
            toastr['success'](data.success, 'Success');
            setTimeout(function() {
              window.location.reload();
            }, 1000);
          }
        })
    });

    $('.story-edit').blur(function() {
        if (contents != $(this).html()) {
            contents = $(this).html();
            var send_data = {};
            send_data['id'] = '{{$user->profile->id}}';
            send_data['story_content'] = contents
            $.ajax({
              type: 'PUT',
              url: '{{ route('setting.update.story') }}',
              data: send_data,
              success: function(data) {
                toastr['success'](data.success, 'Success');
              }
            })
        }
    });

    $('.job-title-edit').blur(function() {
        if (job_title != $(this).html()) {
            job_title = $(this).html();
            var send_data = {};
            send_data['id'] = '{{$user->profile->id}}';
            send_data['job_title'] = job_title
            $.ajax({
              type: 'PUT',
              url: '{{ route('setting.update.job_title') }}',
              data: send_data,
              success: function(data) {
                toastr['success'](data.success, 'Success');
              }
            })
        }
    });

    $('.city-edit').blur(function() {
        if (city != $(this).html()) {
            city = $(this).html();
            var send_data = {};
            send_data['id'] = '{{$user->profile->id}}';
            send_data['city'] = city
            $.ajax({
            type: 'PUT',
            url: '{{ route('setting.update.city') }}',
            data: send_data,
            success: function(data) {
                toastr['success'](data.success, 'Success');
            }
            })
        }
    });

    $('.country-edit').blur(function() {
        if (country != $(this).html()) {
            country = $(this).html();
            var send_data = {};
            send_data['id'] = '{{$user->profile->id}}';
            send_data['country'] = country
            $.ajax({
            type: 'PUT',
            url: '{{ route('setting.update.country') }}',
            data: send_data,
            success: function(data) {
                toastr['success'](data.success, 'Success');
            }
            })
        }
    });

</script>
@endsection