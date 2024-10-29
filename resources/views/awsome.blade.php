@extends('layouts.marketing')


@section('PAGE_LEVEL_STYLES')
<link href="{{ asset('css/style_new.css') }}" rel="stylesheet">
<link href="{{ asset('css/test.css') }}" rel="stylesheet">
@endsection


@section('PAGE_LEVEL_SCRIPTS')
@endsection


@section('PAGE_START')
@endsection


@section('PAGE_END')
@endsection


@section('content')

    @include('_sections.home.connect')
    @include('_sections.home.buddies')

    <div class="container" style="padding: 0 0 100px;">
        <div class="row">
            <div class="col-md-12">
                <div class="row mx-0">
                    <div class="col-12 text-center">
                        <h2 class="box-head text-uppercase mb-5">Our Teams</h2>
                    </div>
                </div>
            </div>
        </div>

        
        <div class="row">
            <div class="column">
                <div class="team-3">
                    <div class="team-img">
                        <img src="{{ asset('images/team-2-1.jpg') }}" alt="Team Image">
                        <div class="team-social">
                            <a class="social-tw" href=""><i class="fab fa-twitter"></i></a>
                            <a class="social-fb" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="social-li" href=""><i class="fab fa-linkedin-in"></i></a>
                            <a class="social-in" href=""><i class="fab fa-instagram"></i></a>
                            <a class="social-yt" href=""><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                    <div class="team-content">
                        <h2>Josh Dunn</h2>
                        <h3>Senior Frontend Engineer</h3>
                        <p>11+ years of hands-on experience in all leading frontend stacks, especially React.js, Typescript and Vue.js</p>
                        <h4>josh.dunn@mlm.social</h4>
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="team-3">
                    <div class="team-img">
                        <img src="{{ asset('images/team-2-2.jpg') }}" alt="Team Image">
                        <div class="team-social">
                            <a class="social-tw" href=""><i class="fab fa-twitter"></i></a>
                            <a class="social-fb" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="social-li" href=""><i class="fab fa-linkedin-in"></i></a>
                            <a class="social-in" href=""><i class="fab fa-instagram"></i></a>
                            <a class="social-yt" href=""><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                    <div class="team-content">
                        <h2>Loris Jennifer</h2>
                        <h3>Web Designer</h3>
                        <p>Very skillful in creating web graphic designs for websites, mobile apps, icons in Figma, Adobe XD, Adobe CS, etc.</p>
                        <h4>loris.jennifer@outlook.com</h4>
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="team-3">
                    <div class="team-img">
                        <img src="{{ asset('images/team-2-3.jpg') }}" alt="Team Image">
                        <div class="team-social">
                            <a class="social-tw" href=""><i class="fab fa-twitter"></i></a>
                            <a class="social-fb" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="social-li" href=""><i class="fab fa-linkedin-in"></i></a>
                            <a class="social-in" href=""><i class="fab fa-instagram"></i></a>
                            <a class="social-yt" href=""><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                    <div class="team-content">
                        <h2>Rui Zhan</h2>
                        <h3>Full-stack Web Developer</h3>
                        <p>Rui has 8+ years of full-stack development in industries such as e-Commerce, B2B, B2C, Blockchain, etc.</p>
                        <h4>rui110123@outlook.com</h4>
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="team-3">
                    <div class="team-img">
                        <img src="{{ asset('images/team-2-4.jpg') }}" alt="Team Image">
                        <div class="team-social">
                            <a class="social-tw" href=""><i class="fab fa-twitter"></i></a>
                            <a class="social-fb" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="social-li" href=""><i class="fab fa-linkedin-in"></i></a>
                            <a class="social-in" href=""><i class="fab fa-instagram"></i></a>
                            <a class="social-yt" href=""><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                    <div class="team-content">
                        <h2>Mollie Ross</h2>
                        <h3>iOS Mobile Developer</h3>
                        <p>Developed 36 iOS apps to the App Store for startups and mid companies. Experienced in Android as well.</p>
                        <h4>mollie.ross@mlm.social</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection