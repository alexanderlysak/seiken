<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>{{ config('app.name', 'Laravel') }} | Page title</title>
    <!-- META TAGS -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- FAV ICON(BROWSER TAB ICON) -->
    <link rel="shortcut icon" href="{{ asset('frontend/assets/images/fav.ico') }}" type="image/x-icon">
    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700%7CMontserrat:300,500%7COswald:400,500" rel="stylesheet">
    <!-- FONTAWESOME ICONS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/font-awesome.min.css') }}">
    <!-- ALL CSS FILES -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.css') }}">
    <!-- MOB.CSS ONLY FOR MOBILE AND TABLET VIEWS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/mob.css') }}">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="{{ asset('frontend/assets/js/html5shiv.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/respond.min.js') }}"></script>
    <![endif]-->
</head>
<body>
    <!-- Preloader -->
    <div id="preloader">
        <div id="status">&nbsp;</div>
    </div>

    <!--SECTION: LEFT MENU-->
    <section>
        <!-- LEFT SIDE NAVIGATION MENU -->
        <div class="menu">
            <ul>
                <!-- MAIN MENU -->
                <li>
                    <a href="{{ route('home') }}" class="menu-lef-act"><img src="{{ asset('frontend/assets/images/icon/s1.png') }}" alt=""> Home</a>
                </li>
                <!--
                <li>
                    <a href="surfing-all-sports.html"><img src="assets/images/icon/f4.png" alt=""> Sports</a>
                </li>
                <li>
                    <a href="surfing-match-fixing.html"><img src="assets/images/icon/c7.png" alt=""> Matchs</a>
                </li>
                <li>
                    <a href="surfing-events.html"><img src="assets/images/icon/f6.png" alt=""> Events</a>
                </li>
                <li>
                    <a href="surfing-team-ranking.html"><img src="assets/images/icon/r1.png" alt=""> Ranking</a>
                </li>
                <li>
                    <a href="surfing-team-squad.html"><img src="assets/images/icon/f7.png" alt=""> Squad</a>
                </li>
                <li>
                    <a href="surfing-match.html"><img src="assets/images/icon/surf.png" alt=""> surfing</a>
                </li>
                <li>
                    <a href="surfing-booking.html"><img src="assets/images/icon/s17.png" alt=""> Tickets</a>
                </li>
                <li>
                    <a href="surfing-team-register.html"><img src="assets/images/icon/r2.png" alt=""> Register</a>
                </li>
                <li>
                    <a href="surfing-training.html"><img src="assets/images/icon/g3.png" alt=""> Training</a>
                </li>
                <li>
                    <a href="surfing-join-our-club.html"><img src="assets/images/icon/cy5.png" alt=""> Join Club</a>
                </li>
                <li>
                    <a href="surfing-about.html"><img src="assets/images/icon/about.png" alt=""> About</a>
                </li>
                <li>
                    <a href="surfing-contact.html"><img src="assets/images/icon/contact.png" alt=""> Contact Us</a>
                </li>
            -->
            </ul>
        </div>

        <!-- RIGHT SIDE NAVIGATION MENU -->
        <!-- MOBILE MENU(This mobile menu show on 0px to 767px windows only) -->
        <div class="mob-menu">
            <span><i class="fa fa-bars" aria-hidden="true"></i></span>
        </div>
        <div class="mob-close">
            <span><i class="fa fa-times" aria-hidden="true"></i></span>
        </div>
    </section>

    <!-- TOP BAR -PHONE EMAIL AND TOP MENU -->
    <section class="i-head-top">
        <div class="i-head row">
            <!-- TOP CONTACT INFO -->
            <div class="i-head-left i-head-com col-md-6">
                <ul>
                    <li><a href="#">phone: +38 099 054 2050</a>
                    </li>
                    <li><a href="#">Email: support@seiken.dp.ua</a>
                    </li>
                </ul>
            </div>
            <!-- TOP FIXED MENU -->
            <div class="i-head-right i-head-com col-md-6 col-sm-12 col-xs-12">
                <ul>
                    <li class="top-scal"><a href="surfing-booking.html"><i class="fa fa-ticket" aria-hidden="true"></i> Личный Кабинет</a>
                    </li>
                    <li class="top-scal-1"><a href="{{ route('registration') }}"><i class="fa fa-registered" aria-hidden="true"></i> Регистрация</a>
                    </li>
                    <li><a href="#" class="tr-menu"><i class="fa fa-chevron-down" aria-hidden="true"></i> Перейти</a>
                        <div class="cat-menu">

                            <div class="col-md-3 col-sm-6 cm1 mob-hid">
                                <h4>Top Trendings This month</h4>
                                <ul>
                                    <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> surfing Training For Beginners</a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> UEFA Champions League</a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Join Our Club & Donate</a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Under 18 surfing Cup, Atlanda</a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> surfing League - Register Now!</a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> surfing - Summer Camp</a>
                                    </li>
                                    <li><a href="surfing-events.html"><i class="fa fa-angle-right" aria-hidden="true"></i> View All Events</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-3 col-sm-6 cm1 mob-hid">
                                <h4>Upcoming surfing Matches</h4>
                                <ul>
                                    <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> the alchemists vs orleanss saints</a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> attlanta braves vs torontoo</a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> buffalo billss vs west brromwich</a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> boston bruinss vs detroit</a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> bloody wave vs alouettess</a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> cowboys vs aathletics</a>
                                    </li>
                                    <li><a href="surfing-match-fixing.html"><i class="fa fa-angle-right" aria-hidden="true"></i> View All Matches</a>
                                    </li>
                                </ul>

                            </div>
                            <div class="col-md-6">
                                <h4>2017 upcoming league matches</h4>
                                <div class="foot-pop top-me-ev">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <img src="{{ asset('frontend/assets/images/trends/2.jpeg') }}" alt="">
                                                <div class="foot-pop-eve top-me-text">
                                                    <span>surfing: AUGUST 23RD, 2017</span>
                                                    <h4>Football:THIS SATURDAY STARTS THE INTENSIVE TRAINING FOR THE FINAL,NEW YORK</h4>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="{{ asset('frontend/assets/images/trends/5.jpg') }}" alt="">
                                                <div class="foot-pop-eve top-me-text">
                                                    <span>BoduBuilding: AUGUST 23RD, 2017</span>
                                                    <h4>BoduBuilding:JAKE DRIBBLER ANNOUNCED THAT HE IS RETIRING NEXT MNONTH</h4>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="{{ asset('frontend/assets/images/trends/6.jpeg') }}" alt="">
                                                <div class="foot-pop-eve top-me-text">
                                                    <span>BASKETBALL: AUGUST 23RD, 2017</span>
                                                    <h4>BASKETBALL:THE ALCHEMISTS NEWS COACH IS BRINGIN A NEW SHOOTING GUARD</h4>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                            <div class="cbb2-home-nav-bot mob-hid">
                                <ul>
                                    <li>The Power of Refined Local Search, Now in Your Hands <span>Call us on: +01 3214 6581</span>
                                    </li>
                                    <li><a href="javascript:void(0);" class="cbb2-ani-btn-join"><i class="fa fa-user" aria-hidden="true"></i> Account</a>
                                    </li>
                                    <li>
                                        <a href="surfing-join-our-club.html" class="cbb2-ani-btn"><i class="fa fa-life-buoy" aria-hidden="true"></i> Join Our Club</a>
                                    </li>
                                    <li><a href="surfing-join-club.html" class="cbb2-ani-btn"><i class="fa fa-dollar" aria-hidden="true"></i> Make Donation</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </li>
                </ul>
            </div>
        </div>
    </section>

    @yield('content')

    <!--SECTION: FOOTER-->
    <section>
        <div class="ffoot">
            <div class="lp">
                <!--SECTION: FOOTER-->
                <div class="row">
                    <div class="col-md-12 foot1">
                        <a href="#"><img src="{{ asset('frontend/assets/images/surfing-logo.png') }}" alt="">
                        </a>
                        <ul>
                            <li><span>10,231,124</span> Community Members</li>
                            <li><span>512</span> Sports Events</li>
                            <li><span>2124</span> Sports Games</li>
                        </ul>
                    </div>
                </div>
                <!--SECTION: FOOTER-->
                <div class="row foot2">
                    <div class="col-md-3">
                        <div class="foot2-1 foot-com">
                            <h4>Адрес г. Павлоград</h4>
                            <p>СШ9 Павлоград</p>
                        </div>
                        <div class="foot2-2 foot-soc foot-com">
                            <h4>Follow Us Now</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur cing elit, sed do eiusmod tempor</p>
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook fb1"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-twitter tw1"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-google-plus gp1"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-whatsapp wa1"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-envelope-o sh1"></i></a>
                                </li>
                            </ul>
                            <span class="foot-ph">Phone: +01 3214 6581</span>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="foot2-1 foot-com">
                            <h4>Адрес с. Межирич</h4>
                            <p>Лицей №1 ул. Школьная</p>
                        </div>
                        <div class="foot2-2 foot-soc foot-com">
                            <h4>Follow Us Now</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur cing elit, sed do eiusmod tempor</p>
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook fb1"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-twitter tw1"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-google-plus gp1"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-whatsapp wa1"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-envelope-o sh1"></i></a>
                                </li>
                            </ul>
                            <span class="foot-ph">Phone: +71 8596 4152</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="foot2-32 foot-pop foot-com">
                            <h4>Популярные события</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur cing elit, sed do eiusmod tempor</p>
                            <ul>
                                <li>
                                    <img src="{{ asset('frontend/assets/images/trends/2.jpeg') }}" alt="">
                                    <div class="foot-pop-eve">
                                        <span>WKB Spain</span>
                                        <h4>WKB Spain Kancho Summer Cump</h4>
                                        <p>AUGUST 23RD, 2017</p>
                                    </div>
                                </li>
                                <li>
                                    <img src="{{ asset('frontend/assets/images/trends/5.jpg') }}" alt="">
                                    <div class="foot-pop-eve">
                                        <span>WKB Romania</span>
                                        <h4>WKB Romania Exam Seminar</h4>
                                        <p>AUGUST 23RD, 2017</p>
                                    </div>
                                </li>
                                <li>
                                    <img src="{{ asset('frontend/assets/images/trends/6.jpeg') }}" alt="">
                                    <div class="foot-pop-eve">
                                        <span>WKB USA Tournament</span>
                                        <h4>BASKETBALL:THE ALCHEMISTS NEWS COACH IS BRINGIN A NEW SHOOTING GUARD</h4>
                                        <p>AUGUST 23RD, 2017</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--SECTION: FOOTER-->
                <!--
                <div class="row">
                    <div class="col-md-12 foot4">
                        <h5>Our Sponsors</h5>
                        <ul>
                            <li>
                                <a href="#"><img src="assets/images/sponsor/1.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#"><img src="assets/images/sponsor/2.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#"><img src="assets/images/sponsor/3.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#"><img src="assets/images/sponsor/4.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#"><img src="assets/images/sponsor/5.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#"><img src="assets/images/sponsor/6.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#"><img src="assets/images/sponsor/2.png" alt="">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            -->
            </div>
        </div>
    </section>

    <!--Footer-->
    <section>
        <!-- FOOTER: COPY RIGHTS -->
        <div class="fcopy">
            <div class="lp copy-ri row">
                <div class="col-md-6 col-sm-12 col-xs-12">Copyright © 2021 Seiken Dojo Pavlograd. All Rights Reserved.</div>
                <div class="col-md-6 foot-privacy">
                    <ul>
                        <li><a href="#">Privacy</a>
                        </li>
                        <li><a href="#">Terms of use</a>
                        </li>
                        <li><a href="#">Security</a>
                        </li>
                        <li><a href="#">Policy</a>
                        </li>
                        <!--
                        <li><a href="join-club.html">Make Sponsors</a>
                        </li>
                    -->
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!--== Bootstrap & Latest JS ==-->
    <script src="{{ asset('frontend/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/bootstrap.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/custom.js') }}"></script>
</body>
</html>
