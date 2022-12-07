<!DOCTYPE html>
<html lang="en">


<!-- forms-validation.html  21 Nov 2019 03:55:16 GMT -->

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    @include('adv.yeild.tittle')
    <!-- General CSS Files -->
    <link rel="stylesheet" href="assets/css/app.min.css">
    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/bundles/bootstrap-daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="assets/bundles/bootstrap-timepicker/css/bootstrap-timepicker.min.css">
    <link rel="stylesheet" href="assets/bundles/izitoast/css/iziToast.min.css">
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
                        <div class="row">
                            <div class="col-12 col-md-12 col-lg-12">

                                <div class="card card-primary">
                                    @include('layouts.success')
                                    @include('layouts.error')

                                    <form class="needs-validation" novalidate=""
                                    action="{{ route('single-adv.update', $single-> id) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="card-body" style="direction: rtl;">
                                        <div class="py-4">
                                            <div class="row">
                                                <div class="col-4">
                                                    <p class="clearfix">
                                                        <label>نــوع العقــار </label>
                                                            <input  type="text"  name="type" value="{{ $single->type }}" class="form-control">
                                                    </p>
                                                </div>
                                                <div class="col-4">
                                                    <p class="clearfix">
                                                        <label> مساحـة العقـار  </label>
                                                            <input  type="text"  name="size" value="{{ $single-> size }} "  class="form-control">
                                                    </p>
                                                </div>
                                                <div class="col-4">
                                                    <p class="clearfix">
                                                        <label>  تكلفة العقار   </label>
                                                            <input  type="text"  name="price" value="{{ $single-> price }} "  class="form-control">
                                                    </p>
                                                </div>
                                                <div class="col-4">
                                                    <p class="clearfix">
                                                        <label>  مسؤل الإعـلان   </label>
                                                            <input  type="text"  name="user_type" value="{{ $single-> user_type }}" class="form-control">
                                                    </p>
                                                </div>
                                                <div class="col-4">
                                                    <p class="clearfix">
                                                        <label>  اسم مسؤل الإعـلان  </label>
                                                            <input  type="text"  name="user_id" value="{{ $single->users-> name }}" class="form-control" disabled>
                                                    </p>
                                                </div>
                                                <div class="col-4">
                                                    <p class="clearfix">
                                                        <label>  تـاريخ الـنـشـر   </label>
                                                            <input  type="date"  name="time" value="{{ $single-> time }}" class="form-control">
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="row">

                                                <div class="col-4">

                                                    <p class="clearfix">
                                                        <label>  رقـم التـواصـل   </label>
                                                        <input  type="number"  name="phone" value="{{ $single-> phone }}" class="form-control">
                                                    </p>
                                                </div>
                                                <div class="col-4">

                                                    <p class="clearfix">
                                                        <label>  رقـم الواتس   </label>
                                                        <input  type="number"  name="whats_app" value="{{ $single-> whats_app }}" class="form-control">
                                                    </p>
                                                </div>
                                                <div class="col-4">
                                                    <p class="clearfix">
                                                        <label>   حالة الإعلان   </label>

                                                        <select class="form-control" name="state">
                                                            <option value="1">نشط</option>
                                                            <option value="0">غير نشط</option>

                                                        </select>

                                                    </p>
                                                </div>
                                                <div class="col-12">
                                                    <p class="clearfix">
                                                        <label>  عنوان العقار   </label>
                                                        <input  type="text"  name="address" value="{{ $single-> address }}" class="form-control ">
                                                    </p>
                                                </div>
                                                <div class="col-12">
                                                    <p class="clearfix">
                                                        <label>   تفاصيل اخري   </label>
                                                        <textarea   name="details"  rows="3"  class="form-control">{{ $single-> details }}
                                                        </textarea>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="card-footer text-right">
                                                <button class="btn btn-primary" type="submit">حفظ</button>
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
    <!-- Page Specific JS File -->
    <script src="assets/bundles/izitoast/js/iziToast.min.js"></script>
    <!-- Page Specific JS File -->
    <script src="assets/js/page/toastr.js"></script>
    <!-- Template JS File -->
    <script src="assets/js/scripts.js"></script>
    <!-- Custom JS File -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/bundles/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
    <script src="assets/bundles/bootstrap-daterangepicker/daterangepicker.js"></script>

</body>


<!-- forms-validation.html  21 Nov 2019 03:55:16 GMT -->

</html>
