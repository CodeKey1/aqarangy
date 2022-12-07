<!DOCTYPE html>
<html lang="en">


<!-- profile.html  21 Nov 2019 03:49:30 GMT -->

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    @include('adv.yeild.tittle')
    <!-- General CSS Files -->
    <link rel="stylesheet" href="assets/css/app.min.css">
    <link rel="stylesheet" href="assets/bundles/bootstrap-social/bootstrap-social.css">
    <link rel="stylesheet" href="assets/bundles/summernote/summernote-bs4.css">
    <link rel="stylesheet" href="assets/bundles/datatables/datatables.min.css">
    <link rel="stylesheet" href="assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/components.css">
    <!-- Custom style CSS -->
    <link rel="stylesheet" href="assets/css/custom.css">
    <link rel='shortcut icon' type='image/x-icon' href='assets/img/favicon.ico' />
</head>

<body>
    <div class="loader"></div>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            @include('adv.yeild.sidebar')
            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    <div class="section-body">
                        <div class="row mt-sm-4">
                            <div class="col-12 col-md-12 ">
                                <form>

                                    <div class="card  col-12">
                                        <div class="card-header">
                                            <h4>Personal Details</h4>
                                        </div>
                                    </div>
                                    @include('layouts.success')
                                    @include('layouts.error')
                                    <div class="card">
                                        <div class="padding-20">
                                            <ul class="nav nav-tabs" id="myTab2" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active" id="home-tab2" data-toggle="tab" href="#about" role="tab" aria-selected="true">بيانات العقار</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="profile-tab2" data-toggle="tab" href="#settings" role="tab" aria-selected="false"> صور العقار </a>
                                                </li>
                                               

                                            </ul>
                                            <div class="tab-content tab-bordered" id="myTab3Content">
                                                <div class="tab-pane fade show active" id="about" role="tabpanel" aria-labelledby="home-tab2">

                                                    <div class="card-body" style="direction: rtl;">
                                                        <div class="py-4">
                                                            <div class="row">
                                                                <div class="col-4">
                                                                    <p class="clearfix">
                                                                        <label style="color: #dc3545;">نــوع العقــار </label>
                                                                            <input  type="text"  name="type" value="{{ $single->type }}" class="form-control" style="font-size: 18px;
                                                                            color: #000000;
                                                                            font-weight: 600;" disabled>
                                                                    </p>
                                                                </div>
                                                                <div class="col-4">
                                                                    <p class="clearfix">
                                                                        <label style="color: #dc3545;"> مساحـة العقـار  </label>
                                                                            <input  type="text"  name="size" value="{{ $single->size }} متر" class="form-control" style="font-size: 18px;
                                                                            color: #000000;
                                                                            font-weight: 600;" disabled>
                                                                    </p>
                                                                </div>
                                                                <div class="col-4">
                                                                    <p class="clearfix">
                                                                        <label style="color: #dc3545;">  تكلفة العقار   </label>
                                                                            <input  type="text"  name="price" value="{{ $single->price }} جنية" class="form-control" style="font-size: 18px;
                                                                            color: #000000;
                                                                            font-weight: 600;" disabled>
                                                                    </p>
                                                                </div>
                                                                <div class="col-4">
                                                                    <p class="clearfix">
                                                                        <label style="color: #dc3545;">  مسؤل الإعـلان   </label>
                                                                            <input  type="text"  name="price" value="{{ $single-> user_type }}" class="form-control" style="font-size: 18px;
                                                                            color: #000000;
                                                                            font-weight: 600;" disabled>
                                                                    </p>
                                                                </div>
                                                                <div class="col-4">
                                                                    <p class="clearfix">
                                                                        <label style="color: #dc3545;">  اسم مسؤل الإعـلان  </label>
                                                                            <input  type="text"  name="price" value="{{ $single->users-> name }}" class="form-control" style="font-size: 18px;
                                                                            color: #000000;
                                                                            font-weight: 600;" disabled>
                                                                    </p>
                                                                </div>
                                                                <div class="col-4">
                                                                    <p class="clearfix">
                                                                        <label style="color: #dc3545;">  تـاريخ الـنـشـر   </label>
                                                                            <input  type="text"  name="time" value="{{ $single-> time }}" class="form-control" style="font-size: 18px;
                                                                            color: #000000;
                                                                            font-weight: 600;" disabled>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="row">

                                                                <div class="col-4">

                                                                    <p class="clearfix">
                                                                        <label style="color: #dc3545;">  رقـم التـواصـل   </label>
                                                                        <input  type="text"  name="phone" value="{{ $single-> phone }}" class="form-control " style="font-size: 18px;
                                                                        color: #000000;
                                                                        font-weight: 600;" disabled>
                                                                    </p>
                                                                </div>
                                                                <div class="col-4">

                                                                    <p class="clearfix">
                                                                        <label style="color: #dc3545;">  رقـم الواتس   </label>
                                                                        <input  type="text"  name="phone" value="{{ $single-> whats_app }}" class="form-control " style="font-size: 18px;
                                                                        color: #000000;
                                                                        font-weight: 600;" disabled>
                                                                    </p>
                                                                </div>
                                                                <div class="col-4">
                                                                    <p class="clearfix">
                                                                        <label style="color: #dc3545;">   حالة الإعلان   </label>

                                                                            @if ($single->state == 0)
                                                                            <div class="badge badge-danger">غير نشط</div>
                                                                         @elseif($single->state == 1)
                                                                            <div class="badge badge-success">نشط</div>
                                                                         @endif

                                                                    </p>
                                                                </div>
                                                                <div class="col-12">
                                                                    <p class="clearfix">
                                                                        <label style="color: #dc3545;">  عنوان العقار   </label>
                                                                        <input  type="text"  name="address" value="{{ $single-> address }}" class="form-control " disabled style="font-size: 18px;
                                                                        color: #000000;
                                                                        font-weight: 600;">
                                                                    </p>
                                                                </div>
                                                                <div class="col-12">
                                                                    <p class="clearfix">
                                                                        <label style="color: #dc3545;">   تفاصيل اخري   </label>
                                                                        <textarea   name="details"  rows="3"  class="form-control" disabled style="font-size: 18px;
                                                                        color: #000000;
                                                                        font-weight: 600;">{{ $single-> details }}
                                                                        </textarea>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="tab-pane fade" id="settings" role="tabpanel" aria-labelledby="profile-tab2">
                                                    <div class="card-body">
                                                        <div id="aniimated-thumbnials" class="list-unstyled row clearfix">
                                                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                                                <a href="assets/img/image-gallery/1.png"
                                                                    data-sub-html="Demo Description">
                                                                    <img class="img-responsive thumbnail"
                                                                        src="assets/img/image-gallery/thumb/thumb-1.png"
                                                                        alt="">
                                                                </a>
                                                            </div>
                                                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                                                <a href="assets/img/image-gallery/2.png"
                                                                    data-sub-html="Demo Description">
                                                                    <img class="img-responsive thumbnail"
                                                                        src="assets/img/image-gallery/thumb/thumb-2.png"
                                                                        alt="">
                                                                </a>
                                                            </div>
                                                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                                                <a href="assets/img/image-gallery/3.png"
                                                                    data-sub-html="Demo Description">
                                                                    <img class="img-responsive thumbnail"
                                                                        src="assets/img/image-gallery/thumb/thumb-3.png"
                                                                        alt="">
                                                                </a>
                                                            </div>
                                                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                                                <a href="assets/img/image-gallery/4.png"
                                                                    data-sub-html="Demo Description">
                                                                    <img class="img-responsive thumbnail"
                                                                        src="assets/img/image-gallery/thumb/thumb-4.png"
                                                                        alt="">
                                                                </a>
                                                            </div>
                                                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                                                <a href="assets/img/image-gallery/5.png"
                                                                    data-sub-html="Demo Description">
                                                                    <img class="img-responsive thumbnail"
                                                                        src="assets/img/image-gallery/thumb/thumb-5.png"
                                                                        alt="">
                                                                </a>
                                                            </div>
                                                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                                                <a href="assets/img/image-gallery/6.png"
                                                                    data-sub-html="Demo Description">
                                                                    <img class="img-responsive thumbnail"
                                                                        src="assets/img/image-gallery/thumb/thumb-6.png"
                                                                        alt="">
                                                                </a>
                                                            </div>
                                                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                                                <a href="assets/img/image-gallery/7.png"
                                                                    data-sub-html="Demo Description">
                                                                    <img class="img-responsive thumbnail"
                                                                        src="assets/img/image-gallery/thumb/thumb-7.png"
                                                                        alt="">
                                                                </a>
                                                            </div>
                                                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                                                <a href="assets/img/image-gallery/8.png"
                                                                    data-sub-html="Demo Description">
                                                                    <img class="img-responsive thumbnail"
                                                                        src="assets/img/image-gallery/thumb/thumb-8.png"
                                                                        alt="">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
            </div>
            </section>
            <div class="settingSidebar">
                <a href="javascript:void(0)" class="settingPanelToggle"> <i class="fa fa-spin fa-cog"></i>
                </a>
                <div class="settingSidebar-body ps-container ps-theme-default">
                    <div class=" fade show active">
                        <div class="setting-panel-header">Setting Panel
                        </div>
                        <div class="p-15 border-bottom">
                            <h6 class="font-medium m-b-10">Select Layout</h6>
                            <div class="selectgroup layout-color w-50">
                                <label class="selectgroup-item">
                                    <input type="radio" name="value" value="1"
                                        class="selectgroup-input-radio select-layout" checked>
                                    <span class="selectgroup-button">Light</span>
                                </label>
                                <label class="selectgroup-item">
                                    <input type="radio" name="value" value="2"
                                        class="selectgroup-input-radio select-layout">
                                    <span class="selectgroup-button">Dark</span>
                                </label>
                            </div>
                        </div>
                        <div class="p-15 border-bottom">
                            <h6 class="font-medium m-b-10">Sidebar Color</h6>
                            <div class="selectgroup selectgroup-pills sidebar-color">
                                <label class="selectgroup-item">
                                    <input type="radio" name="icon-input" value="1"
                                        class="selectgroup-input select-sidebar">
                                    <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                                        data-original-title="Light Sidebar"><i class="fas fa-sun"></i></span>
                                </label>
                                <label class="selectgroup-item">
                                    <input type="radio" name="icon-input" value="2"
                                        class="selectgroup-input select-sidebar" checked>
                                    <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                                        data-original-title="Dark Sidebar"><i class="fas fa-moon"></i></span>
                                </label>
                            </div>
                        </div>
                        <div class="p-15 border-bottom">
                            <h6 class="font-medium m-b-10">Color Theme</h6>
                            <div class="theme-setting-options">
                                <ul class="choose-theme list-unstyled mb-0">
                                    <li title="white" class="active">
                                        <div class="white"></div>
                                    </li>
                                    <li title="cyan">
                                        <div class="cyan"></div>
                                    </li>
                                    <li title="black">
                                        <div class="black"></div>
                                    </li>
                                    <li title="purple">
                                        <div class="purple"></div>
                                    </li>
                                    <li title="orange">
                                        <div class="orange"></div>
                                    </li>
                                    <li title="green">
                                        <div class="green"></div>
                                    </li>
                                    <li title="red">
                                        <div class="red"></div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="p-15 border-bottom">
                            <div class="theme-setting-options">
                                <label class="m-b-0">
                                    <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
                                        id="mini_sidebar_setting">
                                    <span class="custom-switch-indicator"></span>
                                    <span class="control-label p-l-10">Mini Sidebar</span>
                                </label>
                            </div>
                        </div>
                        <div class="p-15 border-bottom">
                            <div class="theme-setting-options">
                                <label class="m-b-0">
                                    <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
                                        id="sticky_header_setting">
                                    <span class="custom-switch-indicator"></span>
                                    <span class="control-label p-l-10">Sticky Header</span>
                                </label>
                            </div>
                        </div>
                        <div class="mt-4 mb-4 p-3 align-center rt-sidebar-last-ele">
                            <a href="#" class="btn btn-icon icon-left btn-primary btn-restore-theme">
                                <i class="fas fa-undo"></i> Restore Default
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="main-footer">
            <div class="footer-left">
                <a href="templateshub.net">Templateshub</a></a>
            </div>
            <div class="footer-right">
            </div>
        </footer>
    </div>
    </div>
    <!-- General JS Scripts -->
    <script src="assets/js/app.min.js"></script>
    <!-- JS Libraies -->
    <script>
        $(document).ready(function() {
            $('#save-stage').DataTable();
        });
    </script>
    <script src="assets/bundles/datatables/datatables.min.js"></script>
    <script src="assets/bundles/summernote/summernote-bs4.js"></script>
    <!-- Page Specific JS File -->
    <!-- Template JS File -->
    <script src="assets/js/scripts.js"></script>
    <!-- Custom JS File -->
    <script src="assets/js/custom.js"></script>
</body>


<!-- profile.html  21 Nov 2019 03:49:32 GMT -->

</html>
