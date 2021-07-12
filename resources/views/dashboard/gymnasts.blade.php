@extends ('dashboard.layouts.app')

@section ('content')

<style>
    input.parsley-success,
select.parsley-success,
textarea.parsley-success {
  color: #468847;
  /*background-color: #DFF0D8;*/
  border: 1px solid #D6E9C6;
}

input.parsley-error,
select.parsley-error,
textarea.parsley-error {
  color: #B94A48;
  /*background-color: #F2DEDE;*/
  border: 1px solid #EED3D7;
}

.parsley-errors-list {
    width: 100%;
  margin: 2px 0 3px;
  padding: 0;
  list-style-type: none;
  font-size: 0.9em;
  line-height: 0.9em;
  opacity: 0;
  color: #B94A48;

  transition: all .3s ease-in;
  -o-transition: all .3s ease-in;
  -moz-transition: all .3s ease-in;
  -webkit-transition: all .3s ease-in;
}

.parsley-errors-list.filled {
  opacity: 1;
}
</style>

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
                        <h4 class="mb-sm-0 font-size-18">Gymnasts List</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Seiken Dojo</a></li>
                                <li class="breadcrumb-item active">Gymnasts List</li>
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

                            <div id="lnb">
                                <div id="right">
                                    <div id="menu" class="mb-3">
                                        <span id="menu-navi" class="d-sm-flex flex-wrap text-center text-sm-start justify-content-sm-between">
                                            <div class="d-sm-flex flex-wrap gap-1">
                                                <button type="button" class="btn btn-primary move-today mb-2 waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#newGymnastModal">Зарегистрировать спортсмена</button>
                                                <button type="button" class="btn btn-info move-today mb-2 waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#inviteModal">Отправить Invite</button>
                                            </div>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table align-middle table-nowrap table-hover">
                                    <thead class="table-light">
                                        <tr>
                                            <th scope="col" style="width: 70px;">#</th>
                                            <th scope="col">Ф.И.О.</th>
                                            <th scope="col">Возраст [полных лет]</th>
                                            <th scope="col">Kyu/Dan</th>
                                            <th scope="col">Зарегистрирован</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($users as $user)
                                            <tr>
                                                <td>
                                                    <div class="avatar-xs">
                                                        <span class="avatar-title rounded-circle">А</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <h5 class="font-size-14 mb-1">
                                                        <a href="javascript: void(0);" class="text-dark">{{ $user->full_name }}</a>
                                                    </h5>
                                                    <p class="text-primary mb-0">{{ $user->dojo_role }}</p>
                                                </td>
                                                <td>{{ $user->full_age }}</td>
                                                <td>{{ $user->grade }}</td>
                                                <td>{{ $user->created_at->format('d.m.Y') }}</td>
                                                <td>
                                                    <ul class="list-inline font-size-20 contact-links mb-0">
                                                        <li class="list-inline-item px-2">
                                                            <a href="javascript: void(0);" title="Message"><i class="bx bx-message-square-dots"></i></a>
                                                        </li>
                                                        <li class="list-inline-item px-2">
                                                            <a href="{{ route('dashboard.gymnast_profile', ['id' => $user->id]) }}" title="Profile"><i class="bx bx-user-circle"></i></a>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <ul class="pagination pagination-rounded justify-content-center mt-4">
                                        <li class="page-item disabled">
                                            <a href="javascript: void(0);" class="page-link"><i class="mdi mdi-chevron-left"></i></a>
                                        </li>
                                        <li class="page-item">
                                            <a href="javascript: void(0);" class="page-link">1</a>
                                        </li>
                                        <li class="page-item active">
                                            <a href="javascript: void(0);" class="page-link">2</a>
                                        </li>
                                        <li class="page-item">
                                            <a href="javascript: void(0);" class="page-link">3</a>
                                        </li>
                                        <li class="page-item">
                                            <a href="javascript: void(0);" class="page-link">4</a>
                                        </li>
                                        <li class="page-item">
                                            <a href="javascript: void(0);" class="page-link">5</a>
                                        </li>
                                        <li class="page-item">
                                            <a href="javascript: void(0);" class="page-link"><i class="mdi mdi-chevron-right"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->


    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <script>document.write(new Date().getFullYear())</script> © Seiken Dojo.
                </div>
                <div class="col-sm-6">
                    <div class="text-sm-end d-none d-sm-block">
                        Develop by Alexander Lysak
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
<!-- end main content-->

<!-- New Gymnast modal content -->
<div id="newGymnastModal" class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" tabindex="-1" aria-labelledby="newGymnastModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newGymnastModalLabel">Зарегистрировать спортсмена</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form id="newGymnastModalForm" class="parsleyValidation" action="{{ route('dashboard.gymnasts_create') }}" method="post" autocomplete="off">
                    <div class="card">
                        <div class="card-body">
                            <p class="card-title-desc">Все поля обязательны для заполнения</p>

                            <div class="mb-3">
                                <label class="form-label">Полное имя [Ф.И.О.] <span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-text" id="full_name"><i class="bx bxs-user"></i></span>
                                    <input type="text" name="full_name" class="form-control" placeholder="Ф.И.О." aria-describedby="full_name" autocomplete="off" required data-parsley-length="[10, 50]">
                                    <div class="invalid-feedback"></div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Дата рождения <span class="text-danger">*</span></label>
                                <div class="input-group" id="birthdayDatepicker">
                                    <span class="input-group-text" id="birthdate"><i class="bx bx-calendar"></i></span>
                                    <input type="text" name="birthdate" class="form-control" placeholder="ДД.ММ.ГГГ" aria-describedby="birthdate" autocomplete="off" required>
                                    <div class="invalid-feedback"></div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Данные для аутентификации <span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-text" id="email">@</span>
                                    <input type="text" name="email" class="form-control" placeholder="E-mail" aria-label="E-mail" aria-describedby="email" autocomplete="off" required data-parsley-type="email">
                                    <div class="invalid-feedback"></div>
                                </div>


                                <div class="input-group mt-2">
                                    <span class="input-group-text" id="password"><i class="bx bx-key"></i></span>
                                    <input id="passwordInput" type="text" name="password" class="form-control" placeholder="Пароль" aria-label="Пароль" aria-describedby="password" autocomplete="off" required data-parsley-minlength="8" data-parsley-type="alphanum">
                                    <div class="invalid-feedback"></div>
                                </div>


                                <div class="input-group mt-2">
                                    <span class="input-group-text" id="confirm"><i class="bx bx-key"></i></span>
                                    <input type="text" name="password_confirmation" class="form-control" placeholder="Подтверждение пароля" aria-label="Подтверждение пароля" aria-describedby="confirm" autocomplete="off" required data-parsley-equal="#passwordInput">
                                    <div class="invalid-feedback"></div>
                                </div>
                            </div>

                        </div>
                    </div>
                </form>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Закрыть</button>
                <button type="submit" form="newGymnastModalForm" class="btn btn-primary waves-effect waves-light">Отправить</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- Invite modal content -->
<div id="inviteModal" class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" tabindex="-1" aria-labelledby="inviteModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="inviteModalLabel">Отправить Invite для регистрации</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="inviteUserEmailForm" action="" method="post">
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="inviteEmailInput" placeholder="Enter Invite Email" value="dev.alex42@gmail.com" required>
                        <label for="inviteEmailInput">Invite User Email</label>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Закрыть</button>
                <button type="submit" form="inviteUserEmailForm" class="btn btn-primary waves-effect waves-light">Отправить</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
        <?php echo '<pre style="float:right;">';var_dump(session()->all()); ?>
@endsection


@section('js')

<!-- Bootstrap Datepicker -->
<script src="{{ asset('backend/assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ asset('backend/assets/libs/bootstrap-datepicker/js/locales/bootstrap-datepicker-ru.js') }}"></script>

<!-- Parsley javascript form validation library -->
<script src="{{ asset('backend/assets/libs/parsleyjs/parsley.min.js') }}"></script>
<script src="{{ asset('backend/assets/libs/parsleyjs/i18n/ru.js') }}"></script>

<!-- Sweet Alerts js -->
<script src="{{ asset('backend/assets/libs/sweetalert2/sweetalert2.min.js') }}"></script>

<script>

    // jQuery(document).ready(function() {
    //     jQuery('#inviteUserEmailForm').on('submit', function(event) {
    //         event.preventDefault();
    //         let form = event.target;
    //         console.log(form);
    //         jQuery.ajax({
    //             url: form.attr('action'),
    //             type: form.attr('method'),
    //             data: form.serialize(),
    //             success: function(response) {
    //                 console.log('SUCCESS');
    //                 console.log(response);
    //             },
    //             error: function(response) {
    //                 console.log('ERROR');
    //                 console.log(response);
    //             }
    //         });
    //
    //     });
    // });

    jQuery(document).ready(function() {

        @if (session('flashError'))
            Swal.fire({
                title: '<span class="text-danger">ERROR!</span>',
                icon: 'error',
                html: '{{session('flashError')}}',
                confirmButtonColor: '#556ee6',
            });
        @endif

        // Birthday datepicker init
        jQuery('#birthdayDatepicker input').datepicker({
            autoclose: true,
            container: '#birthdayDatepicker',
            format: 'dd.mm.yyyy',
            language: 'ru-RU'
        });

        // jQuery('#newGymnastModal').on('shown.bs.modal', function (e) {
        //     jQuery('#newGymnastModalForm')[0].reset();
        // })



        // Forms validation Parsley Init

        window.Parsley.addValidator('equal', {
            validateString: function(value, requirementId) {
                return value === jQuery(requirementId).val();
            },
            messages: {
              en: 'Password not equal to Confirm',
              ru: 'Пароль и подтверждение не совпадают'
            }
        });

        jQuery('.parsleyValidation').parsley();

        // New Gymnastf form submit
        jQuery('#newGymnastModalForm').on('submit', function(event) {
            event.preventDefault();
            if (jQuery('#newGymnastModalForm')[0].checkValidity() === false) {
                event.stopPropagation();
            }  else {
                ajaxFormSubmit(jQuery(this));
            }
        });

        jQuery('#newGymnastModalForm input[name=full_name]').val('Сергеев Илья Витальевич');
        jQuery('#newGymnastModalForm input[name=birthdate]').val('01.01.2000');
        jQuery('#newGymnastModalForm input[name=email]').val('mail@mail.com');
        jQuery('#newGymnastModalForm input[name=password]').val('12345678');
        jQuery('#newGymnastModalForm input[name=password_confirmation]').val('12345678');
    });

    // Ajax form submit
    function ajaxFormSubmit(form)
    {
        let formData = new FormData(form[0]);
        jQuery.ajax({
            url: form.attr('action'),
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            headers: {
                'X-CSRF-Token': jQuery('meta[name="csrf-token"]').attr('content')
            },
            beforeSend: function() {
                jQuery(form).find('input, textarea, button').attr('disabled', 'true');
                jQuery('#newGymnastModal button').attr('disabled', 'true');
            },
            success: function(response) {
                console.log('SUCCESS');
                console.log(response);

                if (response.status === 1) {
                    jQuery('#newGymnastModal').modal('hide');
                    jQuery(form[0]).trigger('reset');
                    Swal.fire({
                        title: 'Спорстмен успешно зарегистрирован!',
                        icon: 'success',
                        html: 'Необходимо полностью заполнить профиль спортсмена - <a href="'+response.profileLink+'">Profile</a>',
                        confirmButtonColor: '#556ee6',
                    });
                } else {
                    let html = '';
                    jQuery(response.errors).each(function(i, el) {
                        html += i === (response.errors.length - 1) ? el : el+', ';
                    });
                    html = html === '' ? 'Ошибка регистрации спортсмена!' : html;
                    Swal.fire({
                        title: '<span class="text-danger">ERROR!</span>',
                        icon: 'error',
                        html: html,
                        confirmButtonColor: '#556ee6',
                    });
                }



            },
            error: function(response) {
                console.log('ERROR');
                console.log(response);
            },
            complete: function() {
                jQuery(form).find('input, textarea, button').removeAttr('disabled');
                jQuery('#newGymnastModal button').removeAttr('disabled');
            }
        });

        /*

jQuery.ajax({
        type: 'POST',
        dataType: 'JSON',
        url: form.attr('action'),
        data: formData,
        processData: false,
        contentType: false,
        beforeSend: function() {
            startLoadingAnimation();
        },
        success: function(response) {
            if (response.success && response.success == 'true') {
                setTimeout(function() {
                    form[0].reset();
                    jQuery.fancybox.close();
                    jQuery.fancybox.open(jQuery('#success'), {
                        scrolling: 'no',
                        openSpeed: fadeSpeed,
                        minHeight: '5',
                        afterLoad: function() {
                            setTimeout(function() {
                                jQuery.fancybox.close();
                            }, 3000);
                        },
                        padding: 3,
                        helpers: {
                            overlay: {
                                locked: false
                            }
                        }
                    });
                }, 3000);
            }
        },
        error: function(response) {
            console.log('ERROR');
            console.log(response);
        },
        complete: function() {
            setTimeout(function(){
                stopLoadingAnimation();
            }, 3000);

        }
    });


        */
    }





</script>

@endsection
