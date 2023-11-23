<header id="page-topbar">
    <div class="layout-width">
        <div class="navbar-header">
            <div class="d-flex">
                <!-- LOGO -->
                <div class="navbar-brand-box horizontal-logo">
                    <a href="#" class="logo logo-dark">
                        <span class="logo-sm">
                            <img src="{{asset('images/logo-forex-nen-toi.png')}}" alt="" width="150px">
                        </span>
                        <span class="logo-lg">
                            <img src="{{asset('images/logo-forex-nen-toi.png')}}" alt="" width="150px">
                        </span>
                    </a>

                    <a href="#" class="logo logo-light">
                        <span class="logo-sm">
                            <img src="{{asset('images/logo-forex-nen-sang.png')}}" alt="" width="150px">
                        </span>
                        <span class="logo-lg">
                            <img src="{{asset('images/logo-forex-nen-sang.png')}}" alt="" width="150px">
                        </span>
                    </a>
                </div>

                <button type="button" class="btn btn-sm px-3 fs-16 header-item vertical-menu-btn topnav-hamburger"
                        id="topnav-hamburger-icon">
                    <span class="hamburger-icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                </button>

                <!-- App Search-->
                <form class="app-search d-none d-md-block">
                    <div class="position-relative">
                        <input type="text" class="form-control" placeholder="Search..." autocomplete="off"
                               id="search-options" value="">
                        <span class="mdi mdi-magnify search-widget-icon"></span>
                        <span class="mdi mdi-close-circle search-widget-icon search-widget-icon-close d-none"
                              id="search-close-options"></span>
                    </div>
                    <div class="dropdown-menu dropdown-menu-lg" id="search-dropdown">
                        <div data-simplebar style="max-height: 320px;">
                            <!-- item-->
                            <div class="dropdown-header">
                                <h6 class="text-overflow text-muted mb-0 text-uppercase">Recent Searches</h6>
                            </div>

                            <div class="dropdown-item bg-transparent text-wrap">
                                <a href="#" class="btn btn-soft-secondary btn-sm rounded-pill">how to setup
                                    <i class="mdi mdi-magnify ms-1"></i></a>
                                <a href="#" class="btn btn-soft-secondary btn-sm rounded-pill">buttons <i
                                        class="mdi mdi-magnify ms-1"></i></a>
                            </div>
                            <!-- item-->
                            <div class="dropdown-header mt-2">
                                <h6 class="text-overflow text-muted mb-1 text-uppercase">Pages</h6>
                            </div>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="ri-bubble-chart-line align-middle fs-18 text-muted me-2"></i>
                                <span>Analytics Dashboard</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="ri-lifebuoy-line align-middle fs-18 text-muted me-2"></i>
                                <span>Help Center</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="ri-user-settings-line align-middle fs-18 text-muted me-2"></i>
                                <span>My account settings</span>
                            </a>

                            <!-- item-->
                            <div class="dropdown-header mt-2">
                                <h6 class="text-overflow text-muted mb-2 text-uppercase">Members</h6>
                            </div>

                            <div class="notification-list">
                                <!-- item -->
                                <a href="javascript:void(0);" class="dropdown-item notify-item py-2">
                                    <div class="d-flex">
                                        <img src="{{asset('assets/images/users/avatar-2.jpg')}}"
                                             class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                        <div class="flex-grow-1">
                                            <h6 class="m-0">Angela Bernier</h6>
                                            <span class="fs-11 mb-0 text-muted">Manager</span>
                                        </div>
                                    </div>
                                </a>
                                <!-- item -->
                                <a href="javascript:void(0);" class="dropdown-item notify-item py-2">
                                    <div class="d-flex">
                                        <img src="{{asset('assets/images/users/avatar-3.jpg')}}"
                                             class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                        <div class="flex-grow-1">
                                            <h6 class="m-0">David Grasso</h6>
                                            <span class="fs-11 mb-0 text-muted">Web Designer</span>
                                        </div>
                                    </div>
                                </a>
                                <!-- item -->
                                <a href="javascript:void(0);" class="dropdown-item notify-item py-2">
                                    <div class="d-flex">
                                        <img src="{{asset('assets/images/users/avatar-5.jpg')}}"
                                             class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                        <div class="flex-grow-1">
                                            <h6 class="m-0">Mike Bunch</h6>
                                            <span class="fs-11 mb-0 text-muted">React Developer</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="text-center pt-3 pb-1">
                            <a href="#" class="btn btn-primary btn-sm">View All Results <i
                                    class="ri-arrow-right-line ms-1"></i></a>
                        </div>
                    </div>
                </form>
            </div>

            <div class="d-flex align-items-center">

                <div class="dropdown d-md-none topbar-head-dropdown header-item">
                    <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle"
                            id="page-header-search-dropdown" data-bs-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                        <i class="bx bx-search fs-22"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                         aria-labelledby="page-header-search-dropdown">
                        <form class="p-3">
                            <div class="form-group m-0">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search ..."
                                           aria-label="Recipient's username">
                                    <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="ms-1 header-item d-none d-sm-flex">
                    <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle"
                            data-toggle="fullscreen">
                        <i class='bx bx-fullscreen fs-22'></i>
                    </button>
                </div>

                <div class="ms-1 header-item d-none d-sm-flex">
                    <button type="button"
                            class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle light-dark-mode">
                        <i class='bx bx-moon fs-22'></i>
                    </button>
                </div>

                <div class="dropdown ms-sm-3 header-item topbar-user">
                    <button type="button" class="btn" id="page-header-user-dropdown" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                        <span class="d-flex align-items-center">
                            <img class="rounded-circle header-profile-user"
                                 src="{{asset('assets/images/users/avatar-1.jpg')}}" alt="Header Avatar">
                            <span class="text-start ms-xl-2">
                                <span class="d-none d-xl-inline-block ms-1 fw-semibold user-name-text">{{auth()->user()->name}}</span>
                                <span class="d-none d-xl-block ms-1 fs-12 user-name-sub-text">Admin</span>
                            </span>
                        </span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end">
                        <!-- item-->
                        <h6 class="dropdown-header">Xin chào {{auth()->user()->name}}!</h6>
                        <a class="dropdown-item" href="{{route('log-out')}}"><i
                                class="mdi mdi-logout text-muted fs-16 align-middle me-1"></i> <span
                                class="align-middle" data-key="t-logout">Logout</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<div id="removeNotificationModal" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="NotificationModalbtn-close"></button>
            </div>
            <div class="modal-body">
                <div class="mt-2 text-center">
                    <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop" colors="primary:#f7b84b,secondary:#f06548" style="width:100px;height:100px"></lord-icon>
                    <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                        <h4>Are you sure ?</h4>
                        <p class="text-muted mx-4 mb-0">Are you sure you want to remove this Notification ?</p>
                    </div>
                </div>
                <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                    <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn w-sm btn-danger" id="delete-notification">Yes, Delete It!</button>
                </div>
            </div>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="index-2.html" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="{{asset('images/logo-forex-nen-toi.png')}}" alt="" height="22">
                    </span>
            <span class="logo-lg">
                        <img src="{{asset('images/logo-forex-nen-toi.png')}}" alt="" height="17">
                    </span>
        </a>
        <!-- Light Logo-->
        <a href="index-2.html" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="{{asset('images/logo-forex-nen-toi.png')}}" alt="" height="22">
                    </span>
            <span class="logo-lg">
                        <img src="{{asset('images/logo-forex-nen-sang.png')}}" alt="" height="17">
                    </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarDashboards" data-bs-toggle="collapse" role="button"
                       aria-expanded="false" aria-controls="sidebarAuth">
                        <i class="ri-dashboard-2-line"></i>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarDashboards">
                        <ul class="nav nav-sm flex-column">
                            <li>Trang chủ</li>
                            <li class="nav-item">
                                <a href="{{route('admin.home')}}" class="nav-link" data-key="t-starter">Trang chủ</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="menu-title"><i class="ri-more-fill"></i> <span data-key="t-pages">Các Trang Khác</span></li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#nguoidung" data-bs-toggle="collapse" role="button"
                       aria-expanded="false" aria-controls="sidebarAuth">
                        <i class="ri-account-circle-line"></i> <span
                            data-key="t-authentication">Quản lý người dùng</span>
                    </a>
                    <div class="collapse menu-dropdown" id="nguoidung">
                        <ul class="nav nav-sm flex-column">
                            <li>Quản lý người dùng</li>
                            <li class="nav-item">
                                <a href="{{route('admin.user.list')}}" class="nav-link" data-key="t-starter">Danh sách</a>
                            </li>
                        </ul>
                    </div>
                </li>


                <li class="nav-item">
                    <a class="nav-link menu-link" href="#page" data-bs-toggle="collapse" role="button"
                       aria-expanded="false" aria-controls="sidebarPages">
                        <i class="ri-pages-line"></i> <span data-key="t-pages">Quản lý page</span>
                    </a>
                    <div class="collapse menu-dropdown" id="page">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">Quản lý page</li>
                            <li class="nav-item">

                                <a href="{{route('admin.blog.list')}}" class="nav-link" data-key="t-starter">Danh sách</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('admin.blog.create')}}" class="nav-link" data-key="t-starter">Thêm Trang</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#danhmuc" data-bs-toggle="collapse" role="button"
                       aria-expanded="false" aria-controls="sidebarAdvanceUI">
                        <i class="ri-stack-line"></i> <span data-key="t-advance-ui">Quản lý danh mục</span>
                    </a>
                    <div class="collapse menu-dropdown" id="danhmuc">
                        <ul class="nav nav-sm flex-column">
                            <li>Quản lý danh mục</li>
                            <li class="nav-item">
                                <a href="{{route('admin.category.list')}}" class="nav-link" data-key="t-sweet-alerts">Danh
                                    sách</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('admin.category.create')}}" class="nav-link" data-key="t-nestable-list">Thêm danh
                                    mục</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#binhluan" data-bs-toggle="collapse" role="button"
                       aria-expanded="false" aria-controls="sidebarForms">
                        <i class="ri-file-list-3-line"></i> <span data-key="t-forms">Quản lý bình luận</span>
                    </a>
                    <div class="collapse menu-dropdown" id="binhluan">
                        <ul class="nav nav-sm flex-column">
                            <li>Quản lý bình luận</li>
                            <li class="nav-item">
                                <a href="{{route('admin.comment.list')}}" class="nav-link" data-key="t-basic-elements">Danh sách</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#dautu" data-bs-toggle="collapse" role="button"
                       aria-expanded="false" aria-controls="sidebarForms">
                        <i class="ri-pencil-ruler-2-line"></i> <span data-key="t-forms">Quản lý tùy chọn đầu tư</span>
                    </a>
                    <div class="collapse menu-dropdown" id="dautu">
                        <ul class="nav nav-sm flex-column">
                            <li>Quản lý tùy chọn đầu tư</li>
                            <li class="nav-item">
                                <a href="{{route('admin.optionTrade.list')}}" class="nav-link" data-key="t-basic-elements">Danh sách</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('admin.optionTrade.create')}}" class="nav-link" data-key="t-nestable-list">Thêm tùy chọn</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#giatri" data-bs-toggle="collapse" role="button"
                       aria-expanded="false" aria-controls="sidebarForms">
                        <i class="ri-layout-grid-line"></i> <span data-key="t-forms">Quản lý giá trị đầu tư</span>
                    </a>
                    <div class="collapse menu-dropdown" id="giatri">
                        <ul class="nav nav-sm flex-column">
                            <li>Quản lý giá trị đầu tư</li>
                            <li class="nav-item">
                                <a href="{{route('admin.valueTrade.list')}}" class="nav-link" data-key="t-basic-elements">Danh sách</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('admin.valueTrade.create')}}" class="nav-link" data-key="t-nestable-list">Thêm giá trị</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#khoahoc" data-bs-toggle="collapse" role="button"
                       aria-expanded="false" aria-controls="sidebarForms">
                        <i class="ri-compasses-2-line"></i> <span data-key="t-forms">Quản lý Đăng ký khóa học</span>
                    </a>
                    <div class="collapse menu-dropdown" id="khoahoc">
                        <ul class="nav nav-sm flex-column">
                            <li>Quản lý khách hàng đăng ký khóa học</li>
                            <li class="nav-item">
                                <a href="{{route('admin.registerCourse.list')}}" class="nav-link" data-key="t-basic-elements">Danh sách</a>
                            </li>
                        </ul>
                    </div>
                </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>

    <div class="sidebar-background"></div>
</div>
<div class="vertical-overlay"></div>
