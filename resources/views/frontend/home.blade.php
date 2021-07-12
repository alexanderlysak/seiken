@extends ('frontend.layouts.app')

@section ('content')





    <!--SECTION: HEADER AND BANNER-->
    <section>
        <div class="home">
            <div class="h_l">
                <!-- BRAND LOGO AND EVENT NAMES -->
                <img src="{{ asset('frontend/assets/images/header_logo.png') }}" alt="" />
                <h2>Текущие события</h2>
                <p>Lorem ipsum dolor sit amet, cons ecte tuer adipiscing elit, sed diam non ummy nibh euismod tinc idunt ut laoreet dolore magna ali quam erat volutpat.</p>
                <ul>
                    <li><a href="surfing-match.html"><span>1</span>ЛЕТНИЙ СПОРТИВНЫЙ ЛАГЕРЬ «СКАДОВСК – 2021»</a>
                    </li>
                    <li><a href="surfing-training.html"><span>2</span>ВСЕУКРАЇНСЬКІ ЗМАГАНЯ З КІОКУШИН БУДО КАРАТЕ</a>
                    </li>
                    <li><a href="surfing-join-our-club.html"><span>3</span>ВІДКРИТИЙ ЧЕМПІОНАТ ЄВРОПИ В М. ПОЛТАВА</a>
                    </li>
                    <li><a href="surfing-match.html"><span>4</span>ВЕСЕННИЙ УЧЕБНО-ТРЕНИРОВОЧНЫЙ СБОР</a>
                    </li>
                    <li><a href="surfing-match.html"><span>5</span>ЧЕМПІОНАТ ПОЛТАВИ У РОЗДІЛІ «КАТА» </a>
                    </li>
                </ul>
                <a href="surfing-all-sports.html" class="aebtn">Все события</a>
            </div>
            <div class="h_r">
                <!-- SLIDER -->
                <div class="slideshow-container">
                    <!-- FIRST SLIDER -->
                    <div class="mySlides fade">
                        <div class="numbertext">1 / 2</div>
                        <a href="#"><img src="{{ asset('frontend/assets/images/current_events/sk-32-min.jpg') }}" alt="">
                        </a>
                        <!--<div class="text">Caption Text</div>-->
                    </div>
                    <!-- SECOND SLIDER -->
                    <div class="mySlides fade">
                        <div class="numbertext">2 / 2</div>
                        <a href="#"><img src="{{ asset('frontend/assets/images/current_events/sk-32-min.jpg') }}" alt="">
                        </a>
                        <!--<div class="text">Caption Text</div>-->
                    </div>
                    <!-- YOU CAN ADD MULTIPLE SLIDERS NOW-->
                    <!-- SLIDER NAVIGATION -->
                    <a class="prev" onclick="plusSlides(-1)">❮</a>
                    <a class="next" onclick="plusSlides(1)">❯</a>
                </div>
            </div>
        </div>
    </section>

    <!-- SEARCH BOX -->
    <section>
        <div class="hom-search lp">
            <div class="row">
                <div class="hom-search-inn">
                    <form>
                        <ul>
                            <li>
                                <input type="text" placeholder="Поиск по сайту">
                            </li>
                            <li>
                                <input type="submit" value="ПОИСК">
                            </li>
                        </ul>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!--SECTION: UPCOMING SPORTS EVENTS-->
    <section>
        <div class="se lp">
            <div class="row">
                <!-- TITLE -->
                <div class="spe-title-1">
                    <h2>Предстоящие <span>события</span> в этом месяце</h2>
                    <div class="hom-tit">
                        <div class="hom-tit-1"></div>
                        <div class="hom-tit-2"></div>
                        <div class="hom-tit-3"></div>
                    </div>
                    <p>
                        ГО «Всеукраинское объединение «Киокушин БуДо каратэ» приглашает Вас принять участие в 32-ом традиционном летнем лагере,
                        который состоится с 25.07 по 01.08.2021г. в санатории «Таврия» (Херсонская обл., г.Скадовск)
                    </p>
                </div>
                <!-- LEFT SIDE: SPORTS EVENTS -->
                <div class="event-left col-md-9">
                    <!--Sports Events in Dubai-->
                    <ul>
                        <!-- SPORTS EVENT:1 -->
                        <li>
                            <div class="el-img">
                                <img class="img-responsive" src="{{ asset('frontend/assets/images/event/surfing/1.jpg') }}" alt="">
                            </div>
                            <div class="el-con">
                                <span>Jun 05 - Aug 27</span>
                                <h3>New York: surfing UAFE Champions League</h3>
                                <p>The indoor sports mania is back again offering all sorts of indoor sports in the summer.</p>
                                <a href="surfing-match.html">Register Now</a><a href="surfing-match.html">Ticket Booking</a><a href="surfing-match.html">Read More</a>
                            </div>
                        </li>
                        <!-- SPORTS EVENT:2 -->
                        <li>
                            <div class="el-img"><img class="img-responsive" src="{{ asset('frontend/assets/images/event/surfing/2.jpg') }}" alt="">
                            </div>
                            <div class="el-con">
                                <span>Jun 05 - Aug 27</span>
                                <h3>Melbourne: surfing World Cup 2017</h3>
                                <p>The indoor sports mania is back again offering all sorts of indoor sports in the summer.</p>
                                <a href="surfing-match.html">Register Now</a><a href="surfing-match.html">Ticket Booking</a><a href="surfing-match.html">Read More</a>
                            </div>
                        </li>
                        <!-- SPORTS EVENT:3 -->
                        <li>
                            <div class="el-img"><img class="img-responsive" src="{{ asset('frontend/assets/images/event/surfing/3.jpg') }}" alt="">
                            </div>
                            <div class="el-con">
                                <span>Jun 05 - Aug 27</span>
                                <h3>Player Selection for League matchs, UAE</h3>
                                <p>The indoor sports mania is back again offering all sorts of indoor sports in the summer.</p>
                                <a href="surfing-match.html">Register Now</a><a href="surfing-match.html">Ticket Booking</a><a href="surfing-match.html">Read More</a>
                            </div>
                        </li>
                        <!-- SPORTS EVENT:4 -->
                        <li>
                            <div class="el-img"><img class="img-responsive" src="{{ asset('frontend/assets/images/event/surfing/4.jpg') }}" alt="">
                            </div>
                            <div class="el-con">
                                <span>Jun 05 - Aug 27</span>
                                <h3>Tutorial: How to play surfing, Atlanta</h3>
                                <p>The indoor sports mania is back again offering all sorts of indoor sports in the summer.</p>
                                <a href="surfing-match.html">Register Now</a><a href="surfing-match.html">Ticket Booking</a><a href="surfing-match.html">Read More</a>
                            </div>
                        </li>
                        <!-- SPORTS EVENT:4 -->
                        <li>
                            <div class="el-img"><img class="img-responsive" src="{{ asset('frontend/assets/images/event/surfing/5.jpg') }}" alt="">
                            </div>
                            <div class="el-con">
                                <span>Jun 05 - Aug 27</span>
                                <h3>surfing final match Results, San Diego</h3>
                                <p>The indoor sports mania is back again offering all sorts of indoor sports in the summer.</p>
                                <a href="surfing-match.html">Register Now</a><a href="surfing-match.html">Ticket Booking</a><a href="surfing-match.html">Read More</a>
                            </div>
                        </li>

                    </ul>
                </div>
                <!-- RIGHT SIDE: FEATURE EVENTS -->
                <div class="event-right col-md-3">
                    <ul>
                        <li class="event-right-bg-1">
                            <h4>Socceroos vs United Arab Emirates</h4>
                            <p>The indoor sports mania is back again offering all sorts of indoor</p>
                            <a href="surfing-match.html">View More</a>
                        </li>
                        <li class="event-right-bg-2 p-sur-hom-2">
                            <h4>The Championships</h4>
                            <p>The indoor sports mania is back again offering all sorts of indoor</p>
                            <a href="surfing-match.html">View More</a>
                        </li>
                        <li class="event-right-bg-3 p-sur-hom-3 pad-red-bot-0">
                            <h4>The Triathlon Series Race Five Kurnell</h4>
                            <p>The indoor sports mania is back again offering all sorts of indoor</p>
                            <a href="surfing-match.html">View More</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!--SECTION: CHAMPIONS LEAGUE-->
    <section>
        <div class="uc uc-surfing">
            <div class="lp uc1">
                <div class="row">
                    <div class="hom-tick-book">
                        <h2>Летний спортивный лагерь «СКАДОВСК – 2021» </h2>
                        <div class="hom-tick">
                            <div class="hom-tick-1">
                                <h3>25 Июля 2021</h3>
                            </div>
                            <div class="hom-tick-2">
                                <span class="hom-tick-21">ГО «Всеукраинское объединение «Киокушин БуДо каратэ»</span>
                            </div>
                        </div>
                        <a href="surfing-match.html" class="hvr-sweep-to-right">Записаться</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--SECTION: PICK A SPORTS-->
    <section>
        <div class="lp spe-bot-red-3">
            <div class="ela">
                <!-- TITLE -->
                <div class="spe-title-1">

                    <h2>Выберите <span>удобное для вас расписание</span> и присоединяйтесь</h2>
                    <div class="hom-tit">
                        <div class="hom-tit-1"></div>
                        <div class="hom-tit-2"></div>
                        <div class="hom-tit-3"></div>
                    </div>
                    <p>Тренируйтесь с лучшими спортсменами в одном из наших залов. Тренировки проводят опытные тренеры WKB.</p>
                </div>
                <div class="hom-top-trends-box row">
                    <div class="col-md-6 hom-top-trends-box-1">
                        <div class="hom-top-trends-box-11">
                            <img class="img-responsive" src="{{ asset('frontend/assets/images/trends/1.jpg') }}" alt="">
                        </div>
                    </div>
                    <div class="col-md-6 hom-top-trends-box-2">
                        <div class="hom-top-trends-box-21 p-soc">
                            <h4>London: Junior Tournaments</h4>
                            <p>The indoor sports mania is back again offering all sorts of indoor</p>
                            <a href="surfing-match.html">View More</a>
                        </div>
                    </div>
                    <div class="col-md-6 hom-top-trends-box-2">
                        <div class="hom-top-trends-box-21 hom-top-trends-box-22 p-soc1">
                            <h4>Improve sports skills</h4>
                            <p>The indoor sports mania is back again offering all sorts of indoor</p>
                            <a href="surfing-match.html">View More</a>
                        </div>
                    </div>
                </div>
                <div class="hom-top-trends row">
                    <!--TOP TRENDINGS-->
                    <div class="col-md-3">
                        <div class="hom-trend">
                            <div class="hom-trend-img">
                                <img class="img-responsive" src="{{ asset('frontend/assets/images/trends/surfing/1.jpg') }}" alt="">
                            </div>
                            <div class="hom-trend-con">
                                <span><i class="fa fa-futbol-o" aria-hidden="true"></i> 2rd augest 2017</span>
                                <a href="surfing-all-sports.html">
                                    <h4>Kick Off: What you need to know today</h4>
                                </a>
                                <p>The Sports Games also celebrated and showcased sport, thanks to the city’s stunning setting</p>
                            </div>
                        </div>
                    </div>
                    <!--TOP TRENDINGS-->
                    <div class="col-md-3">
                        <div class="hom-trend">
                            <div class="hom-trend-img">
                                <img class="img-responsive" src="{{ asset('frontend/assets/images/trends/surfing/11.jpg') }}" alt="">
                            </div>
                            <div class="hom-trend-con">
                                <span><i class="fa fa-futbol-o" aria-hidden="true"></i> 2rd augest 2017</span>
                                <a href="surfing-all-sports.html">
                                    <h4>With other forwards on the shelf, US turns to Jozy</h4>
                                </a>
                                <p>The Sports Games also celebrated and showcased sport, thanks to the city’s stunning setting</p>
                            </div>
                        </div>
                    </div>
                    <!--TOP TRENDINGS-->
                    <div class="col-md-3">
                        <div class="hom-trend">
                            <div class="hom-trend-img">
                                <img class="img-responsive" src="{{ asset('frontend/assets/images/trends/surfing/9.jpg') }}" alt="">
                            </div>
                            <div class="hom-trend-con">
                                <span><i class="fa fa-futbol-o" aria-hidden="true"></i> 2rd augest 2017</span>
                                <a href="surfing-all-sports.html">
                                    <h4>USL starts Saturday! See the full list of MLS ties</h4>
                                </a>
                                <p>The Sports Games also celebrated and showcased sport, thanks to the city’s stunning setting</p>
                            </div>
                        </div>
                    </div>
                    <!--TOP TRENDINGS-->
                    <div class="col-md-3">
                        <div class="hom-trend">
                            <div class="hom-trend-img">
                                <img class="img-responsive" src="{{ asset('frontend/assets/images/trends/surfing/4.jpg') }}" alt="">
                            </div>
                            <div class="hom-trend-con">
                                <span><i class="fa fa-futbol-o" aria-hidden="true"></i> 2rd augest 2017</span>
                                <a href="surfing-all-sports.html">
                                    <h4>CanMNT's fringe, new players make cases</h4>
                                </a>
                                <p>The Sports Games also celebrated and showcased sport, thanks to the city’s stunning setting</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hom-top-trends row">
                    <!--TOP TRENDINGS-->
                    <div class="col-md-3">
                        <div class="hom-trend">
                            <div class="hom-trend-img">
                                <img class="img-responsive" src="{{ asset('frontend/assets/images/trends/surfing/5.jpg') }}" alt="">
                            </div>
                            <div class="hom-trend-con">
                                <span><i class="fa fa-futbol-o" aria-hidden="true"></i> 2rd augest 2017</span>
                                <a href="surfing-all-sports.html">
                                    <h4>Galaxy to host Men United this summer</h4>
                                </a>
                                <p>The Sports Games also celebrated and showcased sport, thanks to the city’s stunning setting</p>
                            </div>
                        </div>
                    </div>
                    <!--TOP TRENDINGS-->
                    <div class="col-md-3">
                        <div class="hom-trend">
                            <div class="hom-trend-img">
                                <img class="img-responsive" src="{{ asset('frontend/assets/images/trends/surfing/6.jpg') }}" alt="">
                            </div>
                            <div class="hom-trend-con">
                                <span><i class="fa fa-futbol-o" aria-hidden="true"></i> 2rd augest 2017</span>
                                <a href="surfing-all-sports.html">
                                    <h4>Magie Martinez: ATL star wins Goal of the Week</h4>
                                </a>
                                <p>The Sports Games also celebrated and showcased sport, thanks to the city’s stunning setting</p>
                            </div>
                        </div>
                    </div>
                    <!--TOP TRENDINGS-->
                    <div class="col-md-3">
                        <div class="hom-trend">
                            <div class="hom-trend-img">
                                <img class="img-responsive" src="{{ asset('frontend/assets/images/trends/surfing/7.jpg') }}" alt="">
                            </div>
                            <div class="hom-trend-con">
                                <span><i class="fa fa-futbol-o" aria-hidden="true"></i> 2rd augest 2017</span>
                                <a href="surfing-all-sports.html">
                                    <h4>Catch up on what you missed in Week 3</h4>
                                </a>
                                <p>The Sports Games also celebrated and showcased sport, thanks to the city’s stunning setting</p>
                            </div>
                        </div>
                    </div>
                    <!--TOP TRENDINGS-->
                    <div class="col-md-3">
                        <div class="hom-trend pad-red-bot-0">
                            <div class="hom-trend-img">
                                <img class="img-responsive" src="{{ asset('frontend/assets/images/trends/surfing/8.jpg') }}" alt="">
                            </div>
                            <div class="hom-trend-con">
                                <span><i class="fa fa-futbol-o" aria-hidden="true"></i> 2rd augest 2017</span>
                                <a href="surfing-all-sports.html">
                                    <h4>Orlando stay perfect, how high did they climb?</h4>
                                </a>
                                <p>The Sports Games also celebrated and showcased sport, thanks to the city’s stunning setting</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--SECTION: EVENTS AND POINTS-->
    <!--
    <section class="ev-po">
        <div class="lp">
            <div class="row">
                <div class="col-md-6 eve-res">
                    <div class="events ev-po-1 ev-po-com">
                        <div class="ev-po-title">
                            <h3>Upcoming surfing Events</h3>
                            <p>Headlining the calendar is the Dubai World Cup</p>
                        </div>
                        <table class="myTable">
                            <tbody>
                                <tr>
                                    <th>#</th>
                                    <th>Event</th>
                                    <th class="e_h1">Place</th>
                                    <th>Booking</th>
                                    <th>Register</th>
                                </tr>
                                <tr>
                                    <td>01</td>
                                    <td><img src="assets/images/trends/3.jpg" alt="">
                                        <div class="h-tm-ra1">
                                            <h4>Football</h4><span>AUG 23RD, 2017</span>
                                        </div>
                                    </td>
                                    <td class="e_h1">Barcelona</td>
                                    <td><a href="booking.html" class="link-btn">Book Now</a>
                                    </td>
                                    <td><a href="team-register.html" class="link-btn reg-btn">Register Now</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>02</td>
                                    <td><img src="assets/images/trends/2.jpeg" alt="">
                                        <div class="h-tm-ra1">
                                            <h4>Handball</h4><span>SEPT 02RD, 2016</span>
                                        </div>
                                    </td>
                                    <td class="e_h1">London</td>
                                    <td><a href="booking.html" class="link-btn">Book Now</a>
                                    </td>
                                    <td><a href="team-register.html" class="link-btn reg-btn">Register Now</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>03</td>
                                    <td><img src="assets/images/trends/4.jpg" alt="">
                                        <div class="h-tm-ra1">
                                            <h4>Rugby Pro</h4><span>JANUARY 12TH, 2018</span>
                                        </div>
                                    </td>
                                    <td class="e_h1">Tokyo</td>
                                    <td><a href="booking.html" class="link-btn">Book Now</a>
                                    </td>
                                    <td><a href="team-register.html" class="link-btn reg-btn">Register Now</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>04</td>
                                    <td><img src="assets/images/trends/5.jpg" alt="">
                                        <div class="h-tm-ra1">
                                            <h4>Volleyball</h4><span>NOV 05TH, 2017</span>
                                        </div>
                                    </td>
                                    <td class="e_h1">Melbourne</td>
                                    <td><a href="booking.html" class="link-btn">Book Now</a>
                                    </td>
                                    <td><a href="team-register.html" class="link-btn reg-btn">Register Now</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>05</td>
                                    <td><img src="assets/images/trends/6.jpeg" alt="">
                                        <div class="h-tm-ra1">
                                            <h4>The Alchemists</h4><span>DEC 07TH, 2017</span>
                                        </div>
                                    </td>
                                    <td class="e_h1">Beijing</td>
                                    <td><a href="booking.html" class="link-btn">Book Now</a>
                                    </td>
                                    <td><a href="team-register.html" class="link-btn reg-btn">Register Now</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>06</td>
                                    <td><img src="assets/images/trends/7.jpg" alt="">
                                        <div class="h-tm-ra1">
                                            <h4>Cricket</h4><span>OCT 18TH, 2017</span>
                                        </div>
                                    </td>
                                    <td class="e_h1"> Berlin</td>
                                    <td><a href="booking.html" class="link-btn">Book Now</a>
                                    </td>
                                    <td><a href="team-register.html" class="link-btn reg-btn">Register Now</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>07</td>
                                    <td><img src="assets/images/trends/8.jpg" alt="">
                                        <div class="h-tm-ra1">
                                            <h4>Basketball</h4><span>JUNE 21TH, 2017</span>
                                        </div>
                                    </td>
                                    <td class="e_h1">Rio</td>
                                    <td><a href="booking.html" class="link-btn">Book Now</a>
                                    </td>
                                    <td><a href="team-register.html" class="link-btn reg-btn">Register Now</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>08</td>
                                    <td><img src="assets/images/trends/9.jpeg" alt="">
                                        <div class="h-tm-ra1">
                                            <h4>Badminton</h4><span>MAY 04TH, 2018</span>
                                        </div>
                                    </td>
                                    <td class="e_h1">Manchester</td>
                                    <td><a href="booking.html" class="link-btn">Book Now</a>
                                    </td>
                                    <td><a href="team-register.html" class="link-btn reg-btn">Register Now</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>09</td>
                                    <td><img src="assets/images/trends/10.jpeg" alt="">
                                        <div class="h-tm-ra1">
                                            <h4>marathon</h4><span>MARCH 28TH, 2017</span>
                                        </div>
                                    </td>
                                    <td class="e_h1">Toronto</td>
                                    <td><a href="booking.html" class="link-btn">Book Now</a>
                                    </td>
                                    <td><a href="team-register.html" class="link-btn reg-btn">Register Now</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td><img src="assets/images/trends/2.jpeg" alt="">
                                        <div class="h-tm-ra1">
                                            <h4>Tennis</h4><span>FEB 4TH, 2020</span>
                                        </div>
                                    </td>
                                    <td class="e_h1">Sydney</td>
                                    <td><a href="booking.html" class="link-btn">Book Now</a>
                                    </td>
                                    <td><a href="team-register.html" class="link-btn reg-btn">Register Now</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-6 eve-res">
                    <div class="events ev-po-2 ev-po-com">
                        <div class="ev-po-title ev-po-title-1">
                            <h3>Team Ranking 2017</h3>
                            <p>Headlining the calendar is the Dubai World Cup</p>
                        </div>
                        <table class="myTable">
                            <tbody>
                                <tr>
                                    <th>Rank</th>
                                    <th>TEAMS</th>
                                    <th>W</th>
                                    <th>L</th>
                                    <th>D</th>
                                    <th>PTS</th>
                                </tr>
                                <tr>
                                    <td>01</td>
                                    <td><img src="assets/images/coun/19.png" alt="">
                                        <div class="h-tm-ra">
                                            <h4>The Alchemists</h4><span>Eric Bros School</span>
                                        </div>
                                    </td>
                                    <td>84</td>
                                    <td>36</td>
                                    <td>12</td>
                                    <td>168</td>
                                </tr>
                                <tr>
                                    <td>02</td>
                                    <td><img src="assets/images/coun/t2.png" alt="">
                                        <div class="h-tm-ra">
                                            <h4>Bloody Wave</h4><span>Atlantic School</span>
                                        </div>
                                    </td>
                                    <td>84</td>
                                    <td>36</td>
                                    <td>12</td>
                                    <td>168</td>
                                </tr>
                                <tr>
                                    <td>03</td>
                                    <td><img src="assets/images/coun/t3.png" alt="">
                                        <div class="h-tm-ra">
                                            <h4>L.A Pirates</h4><span>Bebop Institute</span>
                                        </div>
                                    </td>
                                    <td>84</td>
                                    <td>36</td>
                                    <td>12</td>
                                    <td>168</td>
                                </tr>
                                <tr>
                                    <td>04</td>
                                    <td><img src="assets/images/coun/t4.png" alt="">
                                        <div class="h-tm-ra">
                                            <h4>The Alchemists</h4><span>Eric Bros School</span>
                                        </div>
                                    </td>
                                    <td>84</td>
                                    <td>36</td>
                                    <td>12</td>
                                    <td>168</td>
                                </tr>
                                <tr>
                                    <td>05</td>
                                    <td><img src="assets/images/coun/t5.png" alt="">
                                        <div class="h-tm-ra">
                                            <h4>The Alchemists</h4><span>Eric Bros School</span>
                                        </div>
                                    </td>
                                    <td>84</td>
                                    <td>36</td>
                                    <td>12</td>
                                    <td>168</td>
                                </tr>
                                <tr>
                                    <td>06</td>
                                    <td><img src="assets/images/coun/t6.png" alt="">
                                        <div class="h-tm-ra">
                                            <h4>The Alchemists</h4><span>Eric Bros School</span>
                                        </div>
                                    </td>
                                    <td>84</td>
                                    <td>36</td>
                                    <td>12</td>
                                    <td>168</td>
                                </tr>
                                <tr>
                                    <td>07</td>
                                    <td><img src="assets/images/coun/t7.png" alt="">
                                        <div class="h-tm-ra">
                                            <h4>The Alchemists</h4><span>Eric Bros School</span>
                                        </div>
                                    </td>
                                    <td>84</td>
                                    <td>36</td>
                                    <td>12</td>
                                    <td>168</td>
                                </tr>
                                <tr>
                                    <td>08</td>
                                    <td><img src="assets/images/coun/t8.png" alt="">
                                        <div class="h-tm-ra">
                                            <h4>The Alchemists</h4><span>Eric Bros School</span>
                                        </div>
                                    </td>
                                    <td>84</td>
                                    <td>36</td>
                                    <td>12</td>
                                    <td>168</td>
                                </tr>
                                <tr>
                                    <td>09</td>
                                    <td><img src="assets/images/coun/t9.png" alt="">
                                        <div class="h-tm-ra">
                                            <h4>The Alchemists</h4><span>Eric Bros School</span>
                                        </div>
                                    </td>
                                    <td>84</td>
                                    <td>36</td>
                                    <td>12</td>
                                    <td>168</td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td><img src="assets/images/coun/t9.png" alt="">
                                        <div class="h-tm-ra">
                                            <h4>The Alchemists</h4><span>Eric Bros School</span>
                                        </div>
                                    </td>
                                    <td>84</td>
                                    <td>36</td>
                                    <td>12</td>
                                    <td>168</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    -->

    <!--SECTION:JOIN CLUB AND MAKE DONATION-->
    <section>
        <div class="lp">
            <!-- TITLE -->
            <div class="spe-title-1">
                <h2>Fundraising for Sports <span>Clubs & Charities</span></h2>
                <div class="hom-tit">
                    <div class="hom-tit-1"></div>
                    <div class="hom-tit-2"></div>
                    <div class="hom-tit-3"></div>
                </div>
                <p>Feel the thrill of seeing a global sporting event in one of the world's most incredible cities. Headlining the calendar is the Dubai World Cup</p>
            </div>
            <div class="ela">
                <!-- JOIN OUR CLUB: LEFT SIDE IMAGE -->
                <div class="a21">
                    <img src="{{ asset('frontend/assets/images/join.jpeg') }}" alt="" />
                </div>
                <!-- JOIN OUR CLUB: RIGHT SIDE -->
                <div class="a22 home-join pad-red-bot-0 pad-red-bot-pad-0">
                    <h2>Be a good sport and donate to your local club through</h2>
                    <span class="spor-eve-sp">Over 200 members and growing, We love our team. Fundraise or donate to Sport Relief with Us.The worlds leading online fundraising platform, helping charities to make more</span>
                    <p>Cras justo odio, dapisonec elit non mi porta gravida curab blait tempus. Maecenas sed diam eget risus varius blandit sit amet non magna rutrum faucibus dolor auctor.
                        <br>Cras justo odio, dapisonec elit non mi porta gravida curab blait tempus. Maecenas sed diam eget risus varius blandit non magna.</p>
                    <ul>
                        <li><a href="surfing-join-our-club.html" class="joc">Join Our Club</a>
                        </li>
                        <li><a href="surfing-join-club.html" class="md">Make Donations</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!--SECTION: BLOG POSTS-->
    <section>
        <div class="blog row">
            <div class="lp">
                <!-- BLOG POST: POST DATE -->
                <div class="blog-1 col-md-2">
                    <span>Latest Posts</span>
                    <h4>25</h4>
                    <span>Augest 2016</span>
                </div>
                <!-- BLOG POST: POST NAME & DESCRIPTION -->
                <div class="blog-2 col-md-8">
                    <ul>
                        <li>
                            <a href="#">
                                <h4>WESTERN SYDNEY WANDERERS VS URAWA RED DIAMONDS</h4>
                            </a>
                        </li>
                        <li>
                            <p>In efficitur nisi et condimentum mattis. Duis et aliquet purus, quis congue elit. Cras volutpat dapibus molestie. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec posuere mollis augue, a accumsan libero egestas sit amet.Vestibulum posuere erat tortor, porta tempus leo condimentum sed. </p>
                        </li>
                    </ul>
                </div>
                <!-- BLOG POST: POST COMMENTS,TAG AND SOCIAL MEDIA -->
                <div class="blog-3 col-md-2">
                    <ul>
                        <li><i class="fa fa-comment-o" aria-hidden="true"></i> Comments</li>
                        <li><i class="fa fa-tag" aria-hidden="true"></i> Tag</li>
                        <li><i class="fa fa-share-alt" aria-hidden="true"></i> Share This</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


@endsection
