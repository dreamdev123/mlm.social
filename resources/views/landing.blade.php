@extends('layouts.app')


@section('PAGE_LEVEL_STYLES')
<style>
   .vimeo-wrapper {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      overflow: hidden;
      background: #313b5f;
   }
   .vimeo-wrapper img {
      max-width: 180px;
      min-width: 120px;
      width: 20%;
      height: auto;
   }
   footer {
     bottom: 0;
   }
</style>
@endsection

@section('PAGE_START')
@endsection

@section('PAGE_CONTENT')
   @include('_sections.landing.main')
   @include('_sections.landing.welcome')
   @include('_sections.landing.mission')
   @include('_sections.landing.power')
   @include('_sections.landing.navigation')
   @include('_sections.landing.wave')
   @include('_sections.landing.footer')
@endsection


@section('PAGE_END')
@endsection

@section('PAGE_LEVEL_SCRIPTS')
<script type="text/javascript">

   const play_icon = document.querySelector('.play-icon');
   const stop_icon = document.querySelector('.stop-icon');
   
   play_icon.addEventListener('mouseover', function() {
      play_icon.src = '/images/svg/PlayButtonBlue.svg';
   });
   play_icon.addEventListener('mouseout', function() {
      play_icon.src = '/images/svg/PlayButtonWhite.svg';
   });

   stop_icon.addEventListener('mouseover', function() {
      stop_icon.src = '/images/svg/StopButtonBlue.svg';
   });
   stop_icon.addEventListener('mouseout', function() {
      stop_icon.src = '/images/svg/StopButtonWhite.svg';
   });

   let video = document.querySelector('.video-section');
   let video_mobile = document.querySelector('.video-section-mobile');
   
   $('.play-icon').click(function() {
      if (window.innerWidth > 769) {
         video.querySelector('source').src = '/Video/SocialCubeH1.mp4';
         video.load();
         video.muted = false;
      }
      else {
         video_mobile.querySelector('source').src = '/Video/SocialCubeV1.mp4';
         video_mobile.load();
         video_mobile.muted = false;
      }
      $('.play-icon').addClass('d-none');
      $('.stop-icon').removeClass('d-none');
      $('.content-section').removeClass('d-flex');
      $('.content-section').addClass('d-none');
      $('.landing-footer-section').removeClass('d-flex');
      $('.landing-footer-section').addClass('d-none');
      $('.bubble').addClass('d-none');
   });

   $('.stop-icon').click(function() {
      if (window.innerWidth > 769) {
         video.querySelector('source').src = '/Video/BlueRippleH.mp4';
         video.load();
         video.muted = true;
      }
      else {
         video_mobile.querySelector('source').src = '/Video/BlueRippleV.mp4';
         video_mobile.load();
         video_mobile.muted = true;
      }    
      $('.stop-icon').addClass('d-none');
      $('.play-icon').removeClass('d-none');
      $('.content-section').addClass('d-flex');
      $('.content-section').removeClass('d-none');
      $('.landing-footer-section').addClass('d-flex');
      $('.landing-footer-section').removeClass('d-none');
      $('.bubble').removeClass('d-none');
   });

   const hellos = [
      {
         msg1: "Hello, World!"
      },
      {
         msg1: "Hallo Welt!"
      },
      {
         msg1: "Bonjour le monde!"
      },
      {
         msg1: "¡Hola Mundo!"
      },
      {
         msg1: "Olá Mundo!"
      },
      {
         msg1: "Ciao mondo!"
      },
      {
         msg1: "Hallo Wereld!"
      },
      {
         msg1: "Witaj świecie!"
      },
      {
         msg1: "Pozdrav svijete!"
      },
      {
         msg1: "Ahoj světe!"
      },
      {
         msg1: "Helló Világ!"
      },
      {
         msg1: "Hei maailma!"
      },
      {
         msg1: "Hej världen!"
      },
      {
         msg1: "Hej Verden!"
      },
      {
         msg1: "Γειά σου Κόσμε"
      },
      {
         msg1: "שלום עולם"
      },
      {
         msg1: "Привет, мир"
      },
      {
         msg1: "नमस्ते दुनिया"
      },
      {
         msg1: "ਸਤਿ ਸ੍ਰੀ ਅਕਾਲ ਦੁਨਿਆ"
      },
      {
         msg1: "สวัสดีชาวโลก"
      },
      {
         msg1: "مرحبا بالعالم"
      },
      {
         msg1: "Selam Dünya!"
      },
      {
         msg1: "Kumusta, Mundo!"
      },
      {
         msg1: "안녕하세요 월드"
      },
      {
         msg1: "こんにちは世界"
      },
      {
         msg1: "你好，世界"
      },
      {
         msg1: "Chào thế giới"
      }
   ];

   const box1 = document.querySelector(".message-box-1");
   const box2 = document.querySelector(".message-box-2");

   const duration = 2; // 2 seconds
   let startTime;
   let box1show = true;
   let box2show = false;

   let secondCount = 0;
   let indexCount = 0;

   const animate = (timestamp) => {
   let runtime = timestamp - startTime;
   runtime = (runtime / 1000).toFixed(0);

   if (runtime > secondCount + 1) {
      secondCount++;
   }
   if (indexCount >= hellos.length) {
      indexCount = 0;
   }

   if ((secondCount + duration) % (2 * duration) === 0 && box1show) {
      box2show = true;
      box1show = false;

      box2.classList.add("show");
      box1.classList.remove("show");
      box1.classList.add("opacity-0");

      nextRandomIndex = randomIndexes[indexCount];
      box2.innerHTML = displayMessageBox(nextRandomIndex);
      indexCount++;
   } else if (secondCount % (2 * duration) === 0 && box2show) {
      box2show = false;
      box1show = true;

      box1.classList.add("show");
      box2.classList.remove("show");
      box2.classList.add("opacity-0");

      nextRandomIndex = randomIndexes[indexCount];
      box1.innerHTML = displayMessageBox(nextRandomIndex);
      indexCount++;
   }

   requestAnimationFrame((timestamp) => {
      animate(timestamp);
   });
   };

   const animationTimer = () => {
   requestAnimationFrame((timestamp) => {
      startTime = timestamp;
      animate(timestamp);
   });
   };
   // create array of only indices
   let justIndexes = hellos.map((item, ind) => {
   return ind;
   });
   // create an array of indices that are in random order
   let randomIndexes = [];
   for (let i = 0, length = justIndexes.length; i < length; i++) {
   const randomIndex = Math.floor(Math.random() * justIndexes.length);
   randomIndexes[i] = justIndexes[randomIndex];
   // remove index from array
   justIndexes = justIndexes.filter((x) => x !== justIndexes[randomIndex]);
   }

   // generate HTML
   const displayMessageBox = (index) => {
   return `
   <p class="msg1">${hellos[index].msg1}</p>
   `;
   };
   // kick off timer animation
   animationTimer();
</script>
@endsection
