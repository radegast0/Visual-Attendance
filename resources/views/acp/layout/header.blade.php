<div id="kt_app_header" class="app-header d-flex" data-kt-sticky="true" data-kt-sticky-activate="{default: false, lg: true}" data-kt-sticky-name="app-header-sticky" data-kt-sticky-offset="{default: false, lg: '300px'}">
    <div class="app-container container-fluid d-flex align-items-stretch" id="kt_app_header_container">
        <div class="app-header-wrapper d-flex flex-stack w-100">
            <div class="d-flex d-lg-none align-items-center">
                <div class="d-flex align-items-center ms-n2 me-2" title="Show sidebar menu">
                    <div class="btn btn-icon btn-active-color-primary w-35px h-35px" id="kt_app_sidebar_mobile_toggle">
                        <i class="ki-outline ki-abstract-14 fs-1"></i>
                    </div>
                </div>
                <div class="d-flex align-items-center me-3">
                    <a href="index.html">
                        <img alt="Logo" src="assets/media/logos/default-small.svg" class="h-25px" />
                    </a>
                </div>
            </div>
            <div id="kt_app_header_page_title_wrapper">
                <div data-kt-swapper="true" data-kt-swapper-mode="{default: 'prepend', lg: 'prepend'}" data-kt-swapper-parent="{default: '#kt_app_content_container', lg: '#kt_app_header_page_title_wrapper'}" class="page-title d-flex flex-column justify-content-center me-3 mb-6 mb-lg-0">
                    <h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center me-3 my-0">Orders Listing</h1>
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                        <li class="breadcrumb-item text-muted">
                            <a href="index.html" class="text-muted text-hover-primary">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-500 w-5px h-2px"></span>
                        </li>
                        <li class="breadcrumb-item text-muted">Apps</li>
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-500 w-5px h-2px"></span>
                        </li>
                        <li class="breadcrumb-item text-muted">eCommerce</li>
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-500 w-5px h-2px"></span>
                        </li>
                        <li class="breadcrumb-item text-muted">Sales</li>
                    </ul>
                </div>
            </div>
            <div class="app-navbar flex-stack flex-shrink-0" id="kt_app_aside_navbar">
                <div class="d-flex align-items-center me-5 me-lg-10">
                    <div class="app-navbar-item me-4" id="kt_header_user_menu_toggle">
                        <div class="cursor-pointer symbol symbol-40px" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-start">
                            <img src="assets/media/avatars/300-2.jpg" alt="user" />
                        </div>
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px" data-kt-menu="true">
                            <div class="menu-item px-3">
                                <div class="menu-content d-flex align-items-center px-3">
                                    <div class="symbol symbol-50px me-5">
                                        <img alt="Logo" src="assets/media/avatars/300-2.jpg" />
                                    </div>
                                    <div class="d-flex flex-column">
                                        <div class="fw-bold d-flex align-items-center fs-5">Alice Page
                                        <span class="badge badge-light-success fw-bold fs-8 px-2 py-1 ms-2">Pro</span></div>
                                        <a href="#" class="fw-semibold text-muted text-hover-primary fs-7">alice@kt.com</a>
                                    </div>
                                </div>
                            </div>
                            <div class="separator my-2"></div>
                            <div class="menu-item px-5">
                                <a href="account/overview.html" class="menu-link px-5">My Profile</a>
                            </div>
                            <div class="menu-item px-5">
                                <a href="apps/projects/list.html" class="menu-link px-5">
                                    <span class="menu-text">My Projects</span>
                                    <span class="menu-badge">
                                        <span class="badge badge-light-danger badge-circle fw-bold fs-7">3</span>
                                    </span>
                                </a>
                            </div>
                            <div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="left-start" data-kt-menu-offset="-15px, 0">
                                <a href="#" class="menu-link px-5">
                                    <span class="menu-title">My Subscription</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                    <div class="menu-item px-3">
                                        <a href="account/referrals.html" class="menu-link px-5">Referrals</a>
                                    </div>
                                    <div class="menu-item px-3">
                                        <a href="account/billing.html" class="menu-link px-5">Billing</a>
                                    </div>
                                    <div class="menu-item px-3">
                                        <a href="account/statements.html" class="menu-link px-5">Payments</a>
                                    </div>
                                    <div class="menu-item px-3">
                                        <a href="account/statements.html" class="menu-link d-flex flex-stack px-5">Statements
                                        <span class="ms-2 lh-0" data-bs-toggle="tooltip" title="View your statements">
                                            <i class="ki-outline ki-information-5 fs-5"></i>
                                        </span></a>
                                    </div>
                                    <div class="separator my-2"></div>
                                    <div class="menu-item px-3">
                                        <div class="menu-content px-3">
                                            <label class="form-check form-switch form-check-custom form-check-solid">
                                                <input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
                                                <span class="form-check-label text-muted fs-7">Notifications</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="menu-item px-5">
                                <a href="account/statements.html" class="menu-link px-5">My Statements</a>
                            </div>
                            <div class="separator my-2"></div>
                            <div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="left-start" data-kt-menu-offset="-15px, 0">
                                <a href="#" class="menu-link px-5">
                                    <span class="menu-title position-relative">Mode
                                    <span class="ms-5 position-absolute translate-middle-y top-50 end-0">
                                        <i class="ki-outline ki-night-day theme-light-show fs-2"></i>
                                        <i class="ki-outline ki-moon theme-dark-show fs-2"></i>
                                    </span></span>
                                </a>
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-gray-500 menu-active-bg menu-state-color fw-semibold py-4 fs-base w-150px" data-kt-menu="true" data-kt-element="theme-mode-menu">
                                    <div class="menu-item px-3 my-0">
                                        <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="light">
                                            <span class="menu-icon" data-kt-element="icon">
                                                <i class="ki-outline ki-night-day fs-2"></i>
                                            </span>
                                            <span class="menu-title">Light</span>
                                        </a>
                                    </div>
                                    <div class="menu-item px-3 my-0">
                                        <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="dark">
                                            <span class="menu-icon" data-kt-element="icon">
                                                <i class="ki-outline ki-moon fs-2"></i>
                                            </span>
                                            <span class="menu-title">Dark</span>
                                        </a>
                                    </div>
                                    <div class="menu-item px-3 my-0">
                                        <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="system">
                                            <span class="menu-icon" data-kt-element="icon">
                                                <i class="ki-outline ki-screen fs-2"></i>
                                            </span>
                                            <span class="menu-title">System</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="left-start" data-kt-menu-offset="-15px, 0">
                                <a href="#" class="menu-link px-5">
                                    <span class="menu-title position-relative">Language
                                    <span class="fs-8 rounded bg-light px-3 py-2 position-absolute translate-middle-y top-50 end-0">English
                                    <img class="w-15px h-15px rounded-1 ms-2" src="assets/media/flags/united-states.svg" alt="" /></span></span>
                                </a>
                                <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                    <div class="menu-item px-3">
                                        <a href="account/settings.html" class="menu-link d-flex px-5 active">
                                        <span class="symbol symbol-20px me-4">
                                            <img class="rounded-1" src="assets/media/flags/united-states.svg" alt="" />
                                        </span>English</a>
                                    </div>
                                    <div class="menu-item px-3">
                                        <a href="account/settings.html" class="menu-link d-flex px-5">
                                        <span class="symbol symbol-20px me-4">
                                            <img class="rounded-1" src="assets/media/flags/spain.svg" alt="" />
                                        </span>Spanish</a>
                                    </div>
                                    <div class="menu-item px-3">
                                        <a href="account/settings.html" class="menu-link d-flex px-5">
                                        <span class="symbol symbol-20px me-4">
                                            <img class="rounded-1" src="assets/media/flags/germany.svg" alt="" />
                                        </span>German</a>
                                    </div>
                                    <div class="menu-item px-3">
                                        <a href="account/settings.html" class="menu-link d-flex px-5">
                                        <span class="symbol symbol-20px me-4">
                                            <img class="rounded-1" src="assets/media/flags/japan.svg" alt="" />
                                        </span>Japanese</a>
                                    </div>
                                    <div class="menu-item px-3">
                                        <a href="account/settings.html" class="menu-link d-flex px-5">
                                        <span class="symbol symbol-20px me-4">
                                            <img class="rounded-1" src="assets/media/flags/france.svg" alt="" />
                                        </span>French</a>
                                    </div>
                                </div>
                            </div>
                            <div class="menu-item px-5 my-1">
                                <a href="account/settings.html" class="menu-link px-5">Account Settings</a>
                            </div>
                            <div class="menu-item px-5">
                                <a href="authentication/layouts/corporate/sign-in.html" class="menu-link px-5">Sign Out</a>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex flex-column">
                        <a href="pages/user-profile/overview.html" class="app-navbar-user-name text-gray-900 text-hover-primary fs-5 fw-bold">Alice Page</a>
                        <span class="app-navbar-user-info text-gray-600 fw-semibold fs-7">UI/UX Design Lean</span>
                    </div>
                </div>
                <div class="app-navbar-item">
                    <div class="btn btn-icon btn-custom btn-dark w-40px h-40px app-navbar-user-btn" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                        <i class="ki-outline ki-notification-on fs-1"></i>
                    </div>
                    <div class="menu menu-sub menu-sub-dropdown menu-column w-250px w-lg-325px" data-kt-menu="true">
                        <div class="d-flex flex-column flex-center bgi-no-repeat rounded-top px-9 py-10" style="background-image:url('assets/media/misc/menu-header-bg.jpg')">
                            <h3 class="text-white fw-semibold mb-3">Quick Links</h3>
                            <span class="badge bg-primary text-inverse-primary py-2 px-3">25 pending tasks</span>
                        </div>
                        <div class="row g-0">
                            <div class="col-6">
                                <a href="apps/projects/budget.html" class="d-flex flex-column flex-center h-100 p-6 bg-hover-light border-end border-bottom">
                                    <i class="ki-outline ki-dollar fs-3x text-primary mb-2"></i>
                                    <span class="fs-5 fw-semibold text-gray-800 mb-0">Accounting</span>
                                    <span class="fs-7 text-gray-500">eCommerce</span>
                                </a>
                            </div>
                            <div class="col-6">
                                <a href="apps/projects/settings.html" class="d-flex flex-column flex-center h-100 p-6 bg-hover-light border-bottom">
                                    <i class="ki-outline ki-sms fs-3x text-primary mb-2"></i>
                                    <span class="fs-5 fw-semibold text-gray-800 mb-0">Administration</span>
                                    <span class="fs-7 text-gray-500">Console</span>
                                </a>
                            </div>
                            <div class="col-6">
                                <a href="apps/projects/list.html" class="d-flex flex-column flex-center h-100 p-6 bg-hover-light border-end">
                                    <i class="ki-outline ki-abstract-41 fs-3x text-primary mb-2"></i>
                                    <span class="fs-5 fw-semibold text-gray-800 mb-0">Projects</span>
                                    <span class="fs-7 text-gray-500">Pending Tasks</span>
                                </a>
                            </div>
                            <div class="col-6">
                                <a href="apps/projects/users.html" class="d-flex flex-column flex-center h-100 p-6 bg-hover-light">
                                    <i class="ki-outline ki-briefcase fs-3x text-primary mb-2"></i>
                                    <span class="fs-5 fw-semibold text-gray-800 mb-0">Customers</span>
                                    <span class="fs-7 text-gray-500">Latest cases</span>
                                </a>
                            </div>
                        </div>
                        <div class="py-2 text-center border-top">
                            <a href="pages/user-profile/activity.html" class="btn btn-color-gray-600 btn-active-color-primary">View All
                            <i class="ki-outline ki-arrow-right fs-5"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
