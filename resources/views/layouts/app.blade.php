<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#212C58"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="black">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Social') }} @yield('title')</title>

    <!-- ================= Favicons ================== -->
    <!-- Standard -->
    <link rel="shortcut icon" href="{{ asset('images/Logos/Logo1.svg') }}">
    <!-- Retina iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('images/Logos/MLMMark.svg') }}">
    <!-- Retina iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('images/Logos/MLMMark.svg') }}">
    <!-- Standard iPad Touch Icon--> 
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('images/Logos/MLMMark.svg') }}">
    <!-- Standard iPhone Touch Icon--> 
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('images/Logos/MLMMark.svg') }}">

    <!-- Fonts -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/font.css') }}" />

    <!-- Styles -->
    <link href="{{ asset('css/bootstrap_4.1.3.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-datepicker.min.css') }}" rel="stylesheet">
    <link href="{{ asset('plugin/bootstrap-toastr/toastr.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">

    <!-- BEGIN PAGE LEVEL STYLES -->
    @yield('PAGE_LEVEL_STYLES')
    <!-- END PAGE LEVEL STYLES -->

    <!-- Scripts -->
    <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap_4.1.3.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('plugin/bootstrap-toastr/toastr.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.7/dist/iconify-icon.min.js"></script>
    <script type="text/javascript" src="{{ asset('js/compress_image.js') }}"></script>
</head>
<body>
    
    @include('_includes.navbar')

    <!-- BEGIN PAGE START SECTION -->
    @yield('PAGE_START')
    <!-- END PAGE START SECTION -->

    <img class="main-img">
    <img class="main-img-mobile">
    <script>
      var desktopSrcArray = [
                            '/Video/SocialWavesDesktop.mp4',
                            '',
                            ''
                          ];
      var desktopPosterArray = [
                            '/images/screenshot/SocialWavesDesktop.png',
                            '/images/screenshot/SocialWavesDesktop.png',
                            '/images/screenshot/SocialH.png'
                          ];
      var MobileSrcArray = [
                            '/Video/SocialWavesMobile.mp4',
                            '',
                            ''
                          ];
      var MobilePosterArray = [
                            '/images/screenshot/SocialWavesMobile.png',
                            '/images/screenshot/SocialWavesMobile.png',
                            '/images/screenshot/SocialV.png'
                          ];
        var srcIndex = localStorage.getItem('srcIndex')|0;
        if (srcIndex > 3) srcIndex = 0;
        document.querySelector('.main-img').src = '{{ url('') }}' + desktopPosterArray[srcIndex];
        document.querySelector('.main-img-mobile').src = '{{ url('') }}' + MobilePosterArray[srcIndex];
    </script>
    
    @yield('PAGE_CONTENT')

    <!-- BEGIN PAGE END SECTION -->
    @yield('PAGE_END')
    <!-- END PAGE END SECTION -->

    
    @include('_includes.footer')

    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    @yield('PAGE_LEVEL_SCRIPTS')
    <!-- END PAGE LEVEL SCRIPTS -->
    <script type="text/javascript">
      $('#searchKey').on('keyup', function () {
        var searchKey = $(this).val().trim().toLowerCase();
        $('.member-item').each(function() {
          var fullName = $(this).attr('attr-fullname');
          if (fullName) {
            if (fullName.toLowerCase().includes(searchKey)) {
              $(this).removeClass('d-none');
            } else {
              if(!$(this).hasClass('d-none')) {
                  $(this).addClass('d-none');
              }
            }
          }
        })
      });

      $('.search-icon-section').on('click', function () {
        if ($('#searchKey').val() == undefined) {
          return;
        }
        var searchKey = $('#searchKey').val().trim().toLowerCase();
        $('.member-item').each(function() {
          var fullName = $(this).attr('attr-fullname');
          if (fullName) {
            if (fullName.toLowerCase().includes(searchKey)) {
              $(this).removeClass('d-none');
            } else {
              if(!$(this).hasClass('d-none')) {
                  $(this).addClass('d-none');
              }
            }
          }
        })
      });

      updateVideoSource();

      $('.prev').on('click', function () {
        srcIndex--;
        if (srcIndex < 0) {
          localStorage.setItem('srcIndex', 2);
          srcIndex = 2;
        }
        else {
          localStorage.setItem('srcIndex', srcIndex);
        }
        updateVideoSource();
      });

      $('.next').on('click', function () {
        srcIndex++;
        if (srcIndex < 3) {
          localStorage.setItem('srcIndex', srcIndex);
        }
        else {
          localStorage.setItem('srcIndex', 0);
          srcIndex = 0;
        }
        updateVideoSource();
      });

      function mainImageHidden() {
        document.querySelector('.main-img').style.display='none';
      }

      function mainImageMobileHidden() {
        document.querySelector('.main-img-mobile').style.display='none';
      }

      function updateVideoSource() {
        const mediaQuery = window.matchMedia('(min-width: 598.98px)')
        document.querySelector('.main-img').src = '{{ url('') }}' + desktopPosterArray[srcIndex] + '?' + '{{time()}}';
        document.querySelector('.main-img-mobile').src = '{{ url('') }}' + MobilePosterArray[srcIndex] + '?' + '{{time()}}';
        // if (mediaQuery.matches) {
        //   document.querySelector('.main-img').style.display='block';
        // } else {
        //   document.querySelector('.main-img-mobile').style.display='block';
        // }
        mainImageHidden();
        // mainImageMobileHidden();
        
        const video = document.querySelector('.wave-video-section');
        if (!video) return;
        if (!desktopSrcArray[srcIndex]) {
          document.querySelector('.main-img').style.display='block';
          video.removeEventListener('canplaythrough', mainImageHidden);
        } else {
          video.poster = desktopPosterArray[srcIndex] + '?' + '{{time()}}';
          video.querySelector('source').src = desktopSrcArray[srcIndex];

          video.load();
          // When the video has finished loading
          video.addEventListener('canplaythrough', mainImageHidden);
        }

        const video_mobile = document.querySelector('.wave-video-section-mobile');
        if (!video_mobile) return;
        if (!MobileSrcArray[srcIndex]) {
          document.querySelector('.main-img-mobile').style.display='block';
          video_mobile.removeEventListener('canplaythrough', mainImageMobileHidden);
        } else {
          video_mobile.poster = MobilePosterArray[srcIndex] + '?' + '{{time()}}';
          video_mobile.querySelector('source').src = MobileSrcArray[srcIndex];
          video_mobile.load();
          // When the video has finished loading
          video_mobile.addEventListener('canplaythrough', mainImageMobileHidden);
        }
      }
    </script>


    @if ($message = Session::get('success'))
    <script>toastr['success']('{{ $message }}', 'Success')</script>
    @endif

    @if ($message = Session::get('error'))
    <script>toastr['error']('{{ $message }}', 'Error')</script>
    @endif
</body>
</html>
