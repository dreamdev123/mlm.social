<div class="d-flex justify-content-center align-items-center">
    <video autoplay muted loop class="video-section" playsinline>
        <source src="{{ asset('Video/BlueRippleH.mp4') }}" type="video/mp4">
    </video>  
    <video autoplay muted loop class="video-section-mobile" playsinline>
        <source src="{{ asset('Video/BlueRippleV.mp4') }}" type="video/mp4">
    </video>
    <div class="bubble">
        <img class="bubble-img d-none" src="{{ asset('images/svg/ChatBubble.svg') }}" alt="PlayButton svg">
        <div class="message-box message-box-1 opacity-0 show">
            <p class="msg1">Hello, World!</p>
        </div>
        <div class="message-box message-box-2">
            <p class="msg1"></p>
        </div>
    </div>
    <div class="video-controls">
		<img class="play-icon" src="{{ asset('images/svg/PlayButtonWhite.svg') }}" alt="PlayButton svg">
		<img class="stop-icon d-none" src="{{ asset('images/svg/StopButtonWhite.svg') }}" alt="StopButton svg">
	</div>
    <div class="welcomeWrapper m-0 p-0">
        <div class="title-section">
        </div>