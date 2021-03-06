@extends ('frontend.layouts.app')

@section ('content')


<!-- SECTION: HEADER TOP -->
<section>
    <div class="page-head">
        <div class="lp inn-head-pad">
            <div class="row">
                <div class="col-md-4 top-head">
                    <a href="{{ route('home') }}"><img src="{{ asset('frontend/assets/images/header_logo.png') }}" alt="">
                    </a>
                </div>
                <div class="col-md-3 top-search">
                    <form>
                        <ul>
                            <li>
                                <input type="text" placeholder="Search Here..">
                            </li>
                            <li>
                                <input type="submit" value="search">
                            </li>
                        </ul>
                    </form>
                </div>
                <div class="col-md-5">
                    <ul class="top-soc">
                        <li>
                            <h4>Follow Us : </h4>
                        </li>
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
                    <ul class="brea-top">
                        <li><a href="#">Breadcrumb:</a>
                        </li>
                        <li><a href="#">Home</a>
                        </li>
                        <li><a href="#" class="brea-act">Training</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- REGISTER MY INFORMATION -->
<section>
    <div class="booking-bg-s lp">
        <div class="booking-bg-1">
            <div class="bg-book">
                <div class="spe-title-1 spe-title-wid">
                    <h2>?????????????????????? ?????????????????????? <span>Seiken Dojo!</span> </h2>
                    <div class="hom-tit">
                        <div class="hom-tit-1"></div>
                        <div class="hom-tit-2"></div>
                        <div class="hom-tit-3"></div>
                    </div>
                    <p>
                        ?????? ?????????????????????? ???????????????????? ?????????????? ???????? ???????????????????????? ????????????. ?????? ???????? ?????????????????????? ?????? ????????????????????.
                    </p>
                </div>
                <div class="book-succ">Thank you for Register your Event with us.</div>

                <div class="book-form">
                    <form class="form-horizontal" id="registrationForm" name="registrationForm" action="{{ route('post_registration') }}" method="POST">
                        {{csrf_field()}}
                        <div class="form-group @error('full_name') has-error @enderror">
                            <label class="control-label col-sm-2">??.??.??. <span class="text-danger">*</span></label>
                            <div class="col-sm-10">
                                <input type="text" name="full_name" class="form-control" placeholder="?????????????? ?????? ????????????????" value="{{ old('full_name') }}">
                                @error('full_name')
                                    <span class="help-block"><small><em class="text-danger">{{ $message }}</em></small></span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group @error('birthdate') has-error @enderror">
                            <label class="control-label col-sm-2">???????? ???????????????? <span class="text-danger">*</span></label>
                            <div class="col-sm-10">
                                <input type="text" name="birthdate" class="form-control" placeholder="?? ?????????????? ????.????.????????" value="{{ old('birthdate') }}">
                                @error('birthdate')
                                    <span class="help-block"><small><em class="text-danger">{{ $message }}</em></small></span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group @error('sex') has-error @enderror">
                            <label class="control-label col-sm-2">?????? <span class="text-danger">*</span></label>
                            <div class="col-sm-10">
                                <select name="sex" class="form-control">
                                    <option value="" disabled selected>?????????????? ??????</option>
{{--                                    <option value="Male">??</option>--}}
{{--                                    <option value="Female">??</option>--}}

                                    <option value="Male" @if (old('sex') == "Male") {{ 'selected' }} @endif>??</option>
                                    <option value="Female" @if (old('sex') == "Female") {{ 'selected' }} @endif>??</option>
                                </select>
                                @error('sex')
                                    <span class="help-block"><small><em class="text-danger">{{ $message }}</em></small></span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group @error('weight') has-error @enderror">
                            <label class="control-label col-sm-2">?????? <span class="text-danger">*</span></label>
                            <div class="col-sm-10">
                                <input type="text" name="weight" class="form-control" placeholder="?????????????? ?????? (kg)" value="{{ old('weight') }}">
                                @error('weight')
                                    <span class="help-block"><small><em class="text-danger">{{ $message }}</em></small></span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group @error('phone') has-error @enderror">
                            <label class="control-label col-sm-2">?????????????? <span class="text-danger">*</span></label>
                            <div class="col-sm-10">
                                <input type="tel" name="phone" class="form-control" placeholder="???????????????????? ?????????? ???????????????? ?? ?????????????? +380123456789" value="{{ old('phone') }}">
                                @error('phone')
                                    <span class="help-block"><small><em class="text-danger">{{ $message }}</em></small></span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group @error('email') has-error @enderror">
                            <label class="control-label col-sm-2">E-Mail <span class="text-danger">*</span></label>
                            <div class="col-sm-10">
                                <input type="text" name="email" class="form-control" placeholder="E-mail ??????????" value="{{ old('email') }}">
                                @error('email')
                                    <span class="help-block"><small><em class="text-danger">{{ $message }}</em></small></span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group @error('password') has-error @enderror">
                            <label class="control-label col-sm-2">???????????? <span class="text-danger">*</span></label>
                            <div class="col-sm-10">
                                <input type="password" name="password" class="form-control" value="{{ old('password') }}">
                            </div>
                        </div>

                        <div class="form-group @error('password') has-error @enderror">
                            <label class="control-label col-sm-2">?????????????????????????? ???????????? <span class="text-danger">*</span></label>
                            <div class="col-sm-10">
                                <input type="password" name="password_confirmation" class="form-control" value="{{ old('password_confirmation') }}">
                                @error('password')
                                    <span class="help-block"><small><em class="text-danger">{{ $message }}</em></small></span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <input type="submit" value="????????????????????????????????????">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection
