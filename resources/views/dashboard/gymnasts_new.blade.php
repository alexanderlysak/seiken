@extends ('dashboard.layouts.app')

@section ('content')
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
                            <h4 class="mb-sm-0 font-size-18">Create New</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Gymnasts</a></li>
                                    <li class="breadcrumb-item active">Create New</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Create New Gymnast</h4>
                                <form id="registrationForm" name="registrationForm" action="{{ route('post_registration') }}" method="POST">
                                    <!--

                                    <div class="row mb-4">
                                        <label for="fio" class="col-form-label col-lg-2">Полное Имя [Ф.И.О.]</label>
                                        <div class="col-lg-10">
                                            <input name="fio" type="text" class="form-control" placeholder="Введите Ф.И.О. ...">
                                        </div>
                                    </div>
                                    <div class="row mb-4">

                                        <label for="projectname" class="col-form-label col-lg-2">Дата Рождения</label>
                                        <div class="input-group col-lg-10" id="datepicker2">
                                            <input type="text" class="form-control" placeholder="dd M, yyyy"
                                                   data-date-format="dd M, yyyy" data-date-container='#datepicker2' data-provide="datepicker"
                                                   data-date-autoclose="true">

                                            <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label for="projectdesc" class="col-form-label col-lg-2">Project Description</label>
                                        <div class="col-lg-10">
                                            <textarea class="form-control" id="projectdesc" rows="3" placeholder="Enter Project Description..."></textarea>
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <label class="col-form-label col-lg-2">Project Date</label>
                                        <div class="col-lg-10">
                                            <div class="input-daterange input-group" id="project-date-inputgroup" data-provide="datepicker" data-date-format="dd M, yyyy"  data-date-container='#project-date-inputgroup' data-date-autoclose="true">
                                                <input type="text" class="form-control" placeholder="Start Date" name="start" />
                                                <input type="text" class="form-control" placeholder="End Date" name="end" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <label for="projectbudget" class="col-form-label col-lg-2">Budget</label>
                                        <div class="col-lg-10">
                                            <input id="projectbudget" name="projectbudget" type="text" placeholder="Enter Project Budget..." class="form-control">
                                        </div>
                                    </div>

                                    -->

                                </form>
{{--                                <div class="row mb-4">--}}
{{--                                    <label class="col-form-label col-lg-2">Attached Files</label>--}}
{{--                                    <div class="col-lg-10">--}}
{{--                                        <form action="https://themesbrand.com/" method="post" class="dropzone">--}}
{{--                                            <div class="fallback">--}}
{{--                                                <input name="file" type="file" multiple />--}}
{{--                                            </div>--}}

{{--                                            <div class="dz-message needsclick">--}}
{{--                                                <div class="mb-3">--}}
{{--                                                    <i class="display-4 text-muted bx bxs-cloud-upload"></i>--}}
{{--                                                </div>--}}

{{--                                                <h4>Drop files here or click to upload.</h4>--}}
{{--                                            </div>--}}
{{--                                        </form>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="row justify-content-end">--}}
{{--                                    <div class="col-lg-10">--}}
{{--                                        <button type="submit" class="btn btn-primary">Create Project</button>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

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

@endsection
