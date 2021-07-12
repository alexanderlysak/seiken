@extends ('dashboard.layouts.app')

@section('addcss')
    <!-- Lightbox css -->
    <link href="{{ asset('backend/assets/libs/magnific-popup/magnific-popup.css') }}" rel="stylesheet">
    <style>
        .badge-grade {
            padding: 3px 50px;
        }
        .badge-0kyu {
            color: inherit;
            border: 1px solid #495057;
        }
        .badge-10kyu {
            color: #FFF;
            border: 1px solid #e1a007;
            background-color: #f1b44c;
        }
        .badge-9kyu {
            color: #0064FF;
            border: 1px solid #e1a007;
            background-color: #f1b44c;
        }
        .badge-8kyu {
            color: #FFFFFF;
            border: 1px solid #0752e1;
            background-color: #50a5f1;
        }
        .badge-7kyu {
            color: #FFEF06;
            border: 1px solid #0752e1;
            background-color: #50a5f1;
        }
        .badge-6kyu {
            color: #f1b44c;
            border: 1px solid #e1de07;
            background-color: rgb(245, 253, 0);
        }
        .badge-5kyu {
            color: #0cb727;
            border: 1px solid #e1de07;
            background-color: rgb(245, 253, 0);
        }
        .badge-4kyu {
            color: #FFF;
            border: 1px solid #2ce107;
            background-color: #22ae05;
        }
        .badge-3kyu {
            color: #503b02;
            border: 1px solid #2ce107;
            background-color: #22ae05;
        }
        .badge-2kyu {
            color: #FFF;
            border: 1px solid #3b2c00;
            background-color: #503b02;
        }
        .badge-1kyu {
            color: #f1b44c;
            border: 1px solid #3b2c00;
            background-color: #503b02;
        }
        .badge-1dan,.badge-2dan,.badge-3dan,.badge-4dan  {
            color: #f1b44c;
            background-color: #000000;
        }

        #gymnastDocs {
            justify-content: space-between;
        }

        #gymnastDocs a {
            margin-top: 8px;
        }
    </style>
@endsection

@section('content')



    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0 font-size-18">Profile</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="{{ route('dashboard.gymnasts') }}">Gymnasts</a></li>
                                    <li class="breadcrumb-item active">Profile</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-xl-4">
                        <div class="card overflow-hidden">
                            <div class="bg-primary bg-soft">
                                <div class="row">
                                    <div class="col-7">
                                        <div class="text-primary p-3">
                                            <h5 class="text-primary">Welcome Back !</h5>
                                            <p>Профиль адепта</p>
                                        </div>
                                    </div>
                                    <div class="col-5 align-self-end">
                                        <img src="{{ asset('backend/assets/images/profile-img.png')}}" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="avatar-md profile-user-wid mb-4">
                                            <img src="{{ asset('backend/assets/images/users/avatar-1.jpg') }}" alt="" class="img-thumbnail rounded-circle">
                                        </div>
                                        <h5 class="font-size-15 ">{{ $gymnast->name }}</h5>
                                        <p class="text-muted mb-0 text-truncate">{{ $gymnast->dojo_role }}</p>
                                    </div>

                                    <!--
                                    <div class="col-sm-8">
                                        <div class="pt-4">

                                            <div class="row">
                                                <div class="col-6">
                                                    <h5 class="font-size-15">125</h5>
                                                    <p class="text-muted mb-0">Projects</p>
                                                </div>
                                                <div class="col-6">
                                                    <h5 class="font-size-15">$1245</h5>
                                                    <p class="text-muted mb-0">Revenue</p>
                                                </div>
                                            </div>
                                            <div class="mt-4">
                                                <a href="javascript: void(0);" class="btn btn-primary waves-effect waves-light btn-sm">View Profile <i class="mdi mdi-arrow-right ms-1"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    -->
                                </div>
                            </div>
                        </div>
                        <!-- end card -->

                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Персональные данные</h4>
                                <div class="table-responsive">
                                    <table class="table table-nowrap mb-0">
                                        <tbody>
                                        <tr>
                                            <th scope="row">Ф.И.О. :</th>
                                            <td>{{ $gymnast->full_name }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Пол :</th>
                                            <td>{{ $gymnast->sex }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Дата рождения (Возраст) :</th>
                                            <td>
                                                {{ \Carbon\Carbon::parse($gymnast->birthdate)->format('d.m.Y') }}
                                                (<strong>{{\Carbon\Carbon::parse($gymnast->birthdate)->diffInYears(\Carbon\Carbon::now()) }}</strong>)
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Вес (Kg) :</th>
                                            <td>
                                                {{ $gymnast->weight }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Kyu / DAN :</th>
                                            <td>
                                                <span class="badge badge-grade badge-{{ strtolower(str_replace(' ', '', $gymnast->grade)) }}">{{ $gymnast->grade }}</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Mobile :</th>
                                            <td>{{ $gymnast->phone }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">E-mail :</th>
                                            <td>{{ $gymnast->email }}</td>
                                        </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- end card -->

                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-5">Experience</h4>
                                <div class="">
                                    <ul class="verti-timeline list-unstyled">
                                        <li class="event-list active">
                                            <div class="event-timeline-dot">
                                                <i class="bx bx-right-arrow-circle bx-fade-right"></i>
                                            </div>
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <i class="bx bx-server h4 text-primary"></i>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <div>
                                                        <h5 class="font-size-15"><a href="javascript: void(0);" class="text-dark">Back end Developer</a></h5>
                                                        <span class="text-primary">2016 - 19</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="event-list">
                                            <div class="event-timeline-dot">
                                                <i class="bx bx-right-arrow-circle"></i>
                                            </div>
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <i class="bx bx-code h4 text-primary"></i>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <div>
                                                        <h5 class="font-size-15"><a href="javascript: void(0);" class="text-dark">Front end Developer</a></h5>
                                                        <span class="text-primary">2013 - 16</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="event-list">
                                            <div class="event-timeline-dot">
                                                <i class="bx bx-right-arrow-circle"></i>
                                            </div>
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <i class="bx bx-edit h4 text-primary"></i>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <div>
                                                        <h5 class="font-size-15"><a href="javascript: void(0);" class="text-dark">UI /UX Designer</a></h5>
                                                        <span class="text-primary">2011 - 13</span>

                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                        <!-- end card -->
                    </div>

                    <div class="col-xl-8">

                        <div class="row">
                            <div class="col-md-4">
                                <div class="card mini-stats-wid">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="flex-grow-1">
                                                <p class="text-muted fw-medium mb-2">Completed Projects</p>
                                                <h4 class="mb-0">125</h4>
                                            </div>

                                            <div class="flex-shrink-0 align-self-center">
                                                <div class="mini-stat-icon avatar-sm rounded-circle bg-primary">
                                                            <span class="avatar-title">
                                                                <i class="bx bx-check-circle font-size-24"></i>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card mini-stats-wid">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="flex-grow-1">
                                                <p class="text-muted fw-medium mb-2">Pending Projects</p>
                                                <h4 class="mb-0">12</h4>
                                            </div>

                                            <div class="flex-shrink-0 align-self-center">
                                                <div class="avatar-sm mini-stat-icon rounded-circle bg-primary">
                                                            <span class="avatar-title">
                                                                <i class="bx bx-hourglass font-size-24"></i>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card mini-stats-wid">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="flex-grow-1">
                                                <p class="text-muted fw-medium mb-2">Total Revenue</p>
                                                <h4 class="mb-0">$36,524</h4>
                                            </div>

                                            <div class="flex-shrink-0 align-self-center">
                                                <div class="avatar-sm mini-stat-icon rounded-circle bg-primary">
                                                            <span class="avatar-title">
                                                                <i class="bx bx-package font-size-24"></i>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Revenue</h4>
                                <div id="revenue-chart" class="apex-charts" dir="ltr"></div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title">Электронные копии документов</h4>
                                <p class="card-title-desc">Электронные копии документов спортсмена (<span class="text-danger">Разглашение третьим лицам строго воспрещено</span>). </p>

                                <div id="gymnastDocs" class="popup-gallery d-flex flex-wrap">
                                    <a href="{{ asset('backend/assets/images/small/img-1.jpg') }}" title="Project 1">
                                        <div class="img-fluid">
                                            <img src="{{ asset('backend/assets/images/small/img-1.jpg')  }}" alt="" width="250">
                                        </div>
                                    </a>

                                    <a href="{{ asset('backend/assets/images/small/img-1.jpg') }}" title="Project 1">
                                        <div class="img-fluid">
                                            <img src="{{ asset('backend/assets/images/small/img-1.jpg')  }}" alt="" width="250">
                                        </div>
                                    </a>

                                    <a href="{{ asset('backend/assets/images/small/img-1.jpg') }}" title="Project 1">
                                        <div class="img-fluid">
                                            <img src="{{ asset('backend/assets/images/small/img-1.jpg')  }}" alt="" width="250">
                                        </div>
                                    </a>

                                    <a href="{{ asset('backend/assets/images/small/img-1.jpg') }}" title="Project 1">
                                        <div class="img-fluid">
                                            <img src="{{ asset('backend/assets/images/small/img-1.jpg')  }}" alt="" width="250">
                                        </div>
                                    </a>

                                    <a href="{{ asset('backend/assets/images/small/img-1.jpg') }}" title="Project 1">
                                        <div class="img-fluid">
                                            <img src="{{ asset('backend/assets/images/small/img-1.jpg')  }}" alt="" width="250">
                                        </div>
                                    </a>


                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->

            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->


        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <script>document.write(new Date().getFullYear())</script> © Skote.
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end d-none d-sm-block">
                            Design & Develop by Themesbrand
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!-- end main content-->
@endsection

@section('js')

    <!-- Magnific Popup-->
    <script src="{{ asset('backend/assets/libs/magnific-popup/jquery.magnific-popup.min.js') }}"></script>

    <script>
        jQuery(document).ready(function() {
            jQuery('#gymnastDocs').magnificPopup({
                delegate: "a",
                type: "image",
                tLoading: "Loading image #%curr%...",
                mainClass: "mfp-img-mobile",
                gallery: {enabled: !0, navigateByImgClick: !0, preload: [0, 1]},
                image: {tError: '<a href="%url%">The image #%curr%</a> could not be loaded.'},
                zoom: {enabled: !0, duration: 300}
            });
        });
    </script>
@endsection
