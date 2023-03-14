@section('include')
@endsection

<div class="content">

    <div class="overflow-hidden card">
        <div class="card-header">
            <div class="row gx-0 align-items-center">
                <div class="col-auto d-flex justify-content-end order-md-1">
                    <button class="p-0 shadow-none btn icon-item icon-item-sm me-1 ms-md-2" type="button"
                        data-event="prev" data-bs-toggle="tooltip" title="Previous"><span
                            class="fas fa-arrow-left"></span></button>
                    <button class="p-0 shadow-none btn icon-item icon-item-sm me-1 me-lg-2" type="button"
                        data-event="next" data-bs-toggle="tooltip" title="Next"><span
                            class="fas fa-arrow-right"></span></button>
                </div>
                <div class="col-auto col-md-auto order-md-2">
                    <h4 class="mb-0 fs-0 fs-sm-1 fs-lg-2 calendar-title"></h4>
                </div>
                <div class="col col-md-auto d-flex justify-content-end order-md-3">
                    <button class="btn btn-falcon-primary btn-sm" type="button" data-event="today">Today</button>
                </div>
                <div class="col-md-auto d-md-none">
                    <hr />
                </div>
                <div class="col-auto d-flex order-md-0">
                    <button class="btn btn-primary btn-sm" type="button" data-bs-toggle="modal"
                        data-bs-target="#addEventModal"> <span class="fas fa-plus me-2"></span>Add Schedule</button>
                </div>
                <div class="col d-flex justify-content-end order-md-2">
                    <div class="dropdown font-sans-serif me-md-2">
                        <button class="btn btn-falcon-default text-600 btn-sm dropdown-toggle dropdown-caret-none"
                            type="button" id="email-filter" data-bs-toggle="dropdown" data-boundary="viewport"
                            aria-haspopup="true" aria-expanded="false"><span data-view-title="data-view-title">Month
                                View</span><span class="fas fa-sort ms-2 fs--1"></span></button>
                        <div class="py-2 border dropdown-menu dropdown-menu-end" aria-labelledby="email-filter"><a
                                class="active dropdown-item d-flex justify-content-between" href="#!"
                                data-fc-view="dayGridMonth">Month View<span class="icon-check"><span
                                        class="fas fa-check" data-fa-transform="down-4 shrink-4"></span></span></a><a
                                class="dropdown-item d-flex justify-content-between" href="#!"
                                data-fc-view="timeGridWeek">Week View<span class="icon-check"><span class="fas fa-check"
                                        data-fa-transform="down-4 shrink-4"></span></span></a><a
                                class="dropdown-item d-flex justify-content-between" href="#!"
                                data-fc-view="timeGridDay">Day View<span class="icon-check"><span class="fas fa-check"
                                        data-fa-transform="down-4 shrink-4"></span></span></a><a
                                class="dropdown-item d-flex justify-content-between" href="#!"
                                data-fc-view="listWeek">List View<span class="icon-check"><span class="fas fa-check"
                                        data-fa-transform="down-4 shrink-4"></span></span></a><a
                                class="dropdown-item d-flex justify-content-between" href="#!"
                                data-fc-view="listYear">Year View<span class="icon-check"><span class="fas fa-check"
                                        data-fa-transform="down-4 shrink-4"></span></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="p-0 card-body scrollbar">
            <div class="calendar-outline" id="appCalendar"></div>
        </div>
    </div>

</div>
<div class="modal fade" id="authentication-modal" tabindex="-1" role="dialog"
    aria-labelledby="authentication-modal-label" aria-hidden="true">
    <div class="mt-6 modal-dialog" role="document">
        <div class="border-0 modal-content">
            <div class="px-5 modal-header position-relative modal-shape-header bg-shape">
                <div class="position-relative z-1" data-bs-theme="light">
                    <h4 class="mb-0 text-white" id="authentication-modal-label">Register</h4>
                    <p class="mb-0 text-white fs--1">Please create your free Falcon account</p>
                </div>
                <button class="top-0 mt-2 btn-close btn-close-white position-absolute end-0 me-2"
                    data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="px-5 py-4 modal-body">
                <form>
                    <div class="mb-3">
                        <label class="form-label" for="modal-auth-name">Name</label>
                        <input class="form-control" type="text" autocomplete="on" id="modal-auth-name" />
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="modal-auth-email">Email address</label>
                        <input class="form-control" type="email" autocomplete="on" id="modal-auth-email" />
                    </div>
                    <div class="row gx-2">
                        <div class="mb-3 col-sm-6">
                            <label class="form-label" for="modal-auth-password">Password</label>
                            <input class="form-control" type="password" autocomplete="on"
                                id="modal-auth-password" />
                        </div>
                        <div class="mb-3 col-sm-6">
                            <label class="form-label" for="modal-auth-confirm-password">Confirm Password</label>
                            <input class="form-control" type="password" autocomplete="on"
                                id="modal-auth-confirm-password" />
                        </div>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="modal-auth-register-checkbox" />
                        <label class="form-label" for="modal-auth-register-checkbox">I accept the <a
                                href="#!">terms </a>and <a href="#!">privacy policy</a></label>
                    </div>
                    <div class="mb-3">
                        <button class="mt-3 btn btn-primary d-block w-100" type="submit"
                            name="submit">Register</button>
                    </div>
                </form>
                <div class="mt-5 position-relative">
                    <hr />
                    <div class="divider-content-center">or register with</div>
                </div>
                <div class="mt-2 row g-2">
                    <div class="col-sm-6"><a class="btn btn-outline-google-plus btn-sm d-block w-100"
                            href="#"><span class="fab fa-google-plus-g me-2" data-fa-transform="grow-8"></span>
                            google</a></div>
                    <div class="col-sm-6"><a class="btn btn-outline-facebook btn-sm d-block w-100"
                            href="#"><span class="fab fa-facebook-square me-2"
                                data-fa-transform="grow-8"></span> facebook</a></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="eventDetailsModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="border modal-content"></div>
    </div>
</div>
<div class="modal fade" id="addEventModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="border modal-content">
            <form id="addEventForm" autocomplete="off">
                <div class="modal-header px-x1 bg-light border-bottom-0">
                    <h5 class="modal-title">Create Schedule</h5>
                    <button class="btn-close me-n1" type="button" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body p-x1">
                    <div class="mb-3">
                        <label class="fs-0" for="eventTitle">Title</label>
                        <input class="form-control" id="eventTitle" type="text" name="title"
                            required="required" />
                    </div>
                    <div class="mb-3">
                        <label class="fs-0" for="eventStartDate">Start Date</label>
                        <input class="form-control datetimepicker" id="eventStartDate" type="text"
                            required="required" name="startDate" placeholder="yyyy/mm/dd hh:mm"
                            data-options='{"static":"true","enableTime":"true","dateFormat":"Y-m-d H:i"}' />
                    </div>
                    <div class="mb-3">
                        <label class="fs-0" for="eventEndDate">End Date</label>
                        <input class="form-control datetimepicker" id="eventEndDate" type="text" name="endDate"
                            placeholder="yyyy/mm/dd hh:mm"
                            data-options='{"static":"true","enableTime":"true","dateFormat":"Y-m-d H:i"}' />
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="eventAllDay" name="allDay" />
                        <label class="form-check-label" for="eventAllDay">All Day
                        </label>
                    </div>
                    <div class="mb-3">
                        <label class="fs-0">Schedule Meeting</label>
                        <div><a class="btn badge-subtle-success btn-sm" href="#!"><span
                                    class="fas fa-video me-2"></span>Add video conference link</a></div>
                    </div>
                    <div class="mb-3">
                        <label class="fs-0" for="eventDescription">Description</label>
                        <textarea class="form-control" rows="3" name="description" id="eventDescription"></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="fs-0" for="eventLabel">Label</label>
                        <select class="form-select" id="eventLabel" name="label">
                            <option value="" selected="selected">None</option>
                            <option value="primary">Business</option>
                            <option value="danger">Important</option>
                            <option value="success">Personal</option>
                            <option value="warning">Must Attend</option>
                        </select>
                    </div>
                </div>
                <div class="border-0 modal-footer d-flex justify-content-end align-items-center bg-light"><a
                        class="me-3 text-600" href="../app/events/create-an-event.html">More options</a>
                    <button class="px-4 btn btn-primary" type="submit">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="border-0 offcanvas offcanvas-end settings-panel" id="settings-offcanvas" tabindex="-1"
    aria-labelledby="settings-offcanvas">
    <div class="offcanvas-header settings-panel-header bg-shape">
        <div class="py-1 z-1" data-bs-theme="light">
            <div class="mb-1 d-flex justify-content-between align-items-center">
                <h5 class="mb-0 text-white me-2"><span class="fas fa-palette me-2 fs-0"></span>Settings</h5>
                <button class="mt-0 mb-0 btn btn-primary btn-sm rounded-pill" data-theme-control="reset"
                    style="font-size:12px"> <span class="fas fa-redo-alt me-1"
                        data-fa-transform="shrink-3"></span>Reset</button>
            </div>
            <p class="mb-0 text-white opacity-75 fs--1"> Set your own customized style</p>
        </div>
        <button class="mt-0 btn-close btn-close-white z-1" type="button" data-bs-dismiss="offcanvas"
            aria-label="Close"></button>
    </div>
    <div class="offcanvas-body scrollbar-overlay px-x1 h-100" id="themeController">
        <h5 class="fs-0">Color Scheme</h5>
        <p class="fs--1">Choose the perfect color mode for your app.</p>
        <div class="btn-group d-block w-100 btn-group-navbar-style">
            <div class="row gx-2">
                <div class="col-6">
                    <input class="btn-check" id="themeSwitcherLight" name="theme-color" type="radio"
                        value="light" data-theme-control="theme" />
                    <label class="btn d-inline-block btn-navbar-style fs--1" for="themeSwitcherLight"> <span
                            class="mb-2 rounded hover-overlay d-block"><img class="mb-0 img-fluid img-prototype"
                                src="../assets/img/generic/falcon-mode-default.jpg" alt="" /></span><span
                            class="label-text">Light</span></label>
                </div>
                <div class="col-6">
                    <input class="btn-check" id="themeSwitcherDark" name="theme-color" type="radio"
                        value="dark" data-theme-control="theme" />
                    <label class="btn d-inline-block btn-navbar-style fs--1" for="themeSwitcherDark"> <span
                            class="mb-2 rounded hover-overlay d-block"><img class="mb-0 img-fluid img-prototype"
                                src="../assets/img/generic/falcon-mode-dark.jpg" alt="" /></span><span
                            class="label-text"> Dark</span></label>
                </div>
            </div>
        </div>
        <hr />
        <div class="d-flex justify-content-between">
            <div class="d-flex align-items-start"><img class="me-2"
                    src="../assets/img/icons/left-arrow-from-left.svg" width="20" alt="" />
                <div class="flex-1">
                    <h5 class="fs-0">RTL Mode</h5>
                    <p class="mb-0 fs--1">Switch your language direction </p><a class="fs--1"
                        href="../documentation/customization/configuration.html">RTL Documentation</a>
                </div>
            </div>
            <div class="form-check form-switch">
                <input class="form-check-input ms-0" id="mode-rtl" type="checkbox" data-theme-control="isRTL" />
            </div>
        </div>
        <hr />
        <div class="d-flex justify-content-between">
            <div class="d-flex align-items-start"><img class="me-2" src="../assets/img/icons/arrows-h.svg"
                    width="20" alt="" />
                <div class="flex-1">
                    <h5 class="fs-0">Fluid Layout</h5>
                    <p class="mb-0 fs--1">Toggle container layout system </p><a class="fs--1"
                        href="../documentation/customization/configuration.html">Fluid Documentation</a>
                </div>
            </div>
            <div class="form-check form-switch">
                <input class="form-check-input ms-0" id="mode-fluid" type="checkbox" data-theme-control="isFluid" />
            </div>
        </div>
        <hr />
        <div class="d-flex align-items-start"><img class="me-2" src="../assets/img/icons/paragraph.svg"
                width="20" alt="" />
            <div class="flex-1">
                <h5 class="fs-0 d-flex align-items-center">Navigation Position</h5>
                <p class="mb-2 fs--1">Select a suitable navigation system for your web application </p>
                <div>
                    <select class="form-select form-select-sm" aria-label="Navbar position"
                        data-theme-control="navbarPosition">
                        <option value="vertical"
                            data-page-url="../modules/components/navs-and-tabs/vertical-navbar.html">Vertical</option>
                        <option value="top" data-page-url="../modules/components/navs-and-tabs/top-navbar.html">Top
                        </option>
                        <option value="combo" data-page-url="../modules/components/navs-and-tabs/combo-navbar.html">
                            Combo</option>
                        <option value="double-top"
                            data-page-url="../modules/components/navs-and-tabs/double-top-navbar.html">Double Top
                        </option>
                    </select>
                </div>
            </div>
        </div>
        <hr />
        <h5 class="fs-0 d-flex align-items-center">Vertical Navbar Style</h5>
        <p class="mb-0 fs--1">Switch between styles for your vertical navbar </p>
        <p> <a class="fs--1" href="../modules/components/navs-and-tabs/vertical-navbar.html#navbar-styles">See
                Documentation</a></p>
        <div class="btn-group d-block w-100 btn-group-navbar-style">
            <div class="row gx-2">
                <div class="col-6">
                    <input class="btn-check" id="navbar-style-transparent" type="radio" name="navbarStyle"
                        value="transparent" data-theme-control="navbarStyle" />
                    <label class="btn d-block w-100 btn-navbar-style fs--1" for="navbar-style-transparent"> <img
                            class="img-fluid img-prototype" src="../assets/img/generic/default.png"
                            alt="" /><span class="label-text"> Transparent</span></label>
                </div>
                <div class="col-6">
                    <input class="btn-check" id="navbar-style-inverted" type="radio" name="navbarStyle"
                        value="inverted" data-theme-control="navbarStyle" />
                    <label class="btn d-block w-100 btn-navbar-style fs--1" for="navbar-style-inverted"> <img
                            class="img-fluid img-prototype" src="../assets/img/generic/inverted.png"
                            alt="" /><span class="label-text"> Inverted</span></label>
                </div>
                <div class="col-6">
                    <input class="btn-check" id="navbar-style-card" type="radio" name="navbarStyle"
                        value="card" data-theme-control="navbarStyle" />
                    <label class="btn d-block w-100 btn-navbar-style fs--1" for="navbar-style-card"> <img
                            class="img-fluid img-prototype" src="../assets/img/generic/card.png"
                            alt="" /><span class="label-text"> Card</span></label>
                </div>
                <div class="col-6">
                    <input class="btn-check" id="navbar-style-vibrant" type="radio" name="navbarStyle"
                        value="vibrant" data-theme-control="navbarStyle" />
                    <label class="btn d-block w-100 btn-navbar-style fs--1" for="navbar-style-vibrant"> <img
                            class="img-fluid img-prototype" src="../assets/img/generic/vibrant.png"
                            alt="" /><span class="label-text"> Vibrant</span></label>
                </div>
            </div>
        </div>
        <div class="mt-5 text-center"><img class="mb-4" src="../assets/img/icons/spot-illustrations/47.png"
                alt="" width="120" />
            <h5>Like What You See?</h5>
            <p class="fs--1">Get Falcon now and create beautiful dashboards with hundreds of widgets.</p><a
                class="mb-3 btn btn-primary"
                href="https://themes.getbootstrap.com/product/falcon-admin-dashboard-webapp-template/"
                target="_blank">Purchase</a>
        </div>
    </div>
</div><a class="card setting-toggle" href="#settings-offcanvas" data-bs-toggle="offcanvas">
    <div class="px-2 py-1 card-body d-flex align-items-center py-md-2">
        <div class="bg-primary-subtle position-relative rounded-start" style="height:34px;width:28px">
            <div class="settings-popover"><span class="ripple"><span
                        class="fa-spin position-absolute all-0 d-flex flex-center"><span
                            class="icon-spin position-absolute all-0 d-flex flex-center">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M19.7369 12.3941L19.1989 12.1065C18.4459 11.7041 18.0843 10.8487 18.0843 9.99495C18.0843 9.14118 18.4459 8.28582 19.1989 7.88336L19.7369 7.59581C19.9474 7.47484 20.0316 7.23291 19.9474 7.03131C19.4842 5.57973 18.6843 4.28943 17.6738 3.20075C17.5053 3.03946 17.2527 2.99914 17.0422 3.12011L16.393 3.46714C15.6883 3.84379 14.8377 3.74529 14.1476 3.3427C14.0988 3.31422 14.0496 3.28621 14.0002 3.25868C13.2568 2.84453 12.7055 2.10629 12.7055 1.25525V0.70081C12.7055 0.499202 12.5371 0.297594 12.2845 0.257272C10.7266 -0.105622 9.16879 -0.0653007 7.69516 0.257272C7.44254 0.297594 7.31623 0.499202 7.31623 0.70081V1.23474C7.31623 2.09575 6.74999 2.8362 5.99824 3.25599C5.95774 3.27861 5.91747 3.30159 5.87744 3.32493C5.15643 3.74527 4.26453 3.85902 3.53534 3.45302L2.93743 3.12011C2.72691 2.99914 2.47429 3.03946 2.30587 3.20075C1.29538 4.28943 0.495411 5.57973 0.0322686 7.03131C-0.051939 7.23291 0.0322686 7.47484 0.242788 7.59581L0.784376 7.8853C1.54166 8.29007 1.92694 9.13627 1.92694 9.99495C1.92694 10.8536 1.54166 11.6998 0.784375 12.1046L0.242788 12.3941C0.0322686 12.515 -0.051939 12.757 0.0322686 12.9586C0.495411 14.4102 1.29538 15.7005 2.30587 16.7891C2.47429 16.9504 2.72691 16.9907 2.93743 16.8698L3.58669 16.5227C4.29133 16.1461 5.14131 16.2457 5.8331 16.6455C5.88713 16.6767 5.94159 16.7074 5.99648 16.7375C6.75162 17.1511 7.31623 17.8941 7.31623 18.7552V19.2891C7.31623 19.4425 7.41373 19.5959 7.55309 19.696C7.64066 19.7589 7.74815 19.7843 7.85406 19.8046C9.35884 20.0925 10.8609 20.0456 12.2845 19.7729C12.5371 19.6923 12.7055 19.4907 12.7055 19.2891V18.7346C12.7055 17.8836 13.2568 17.1454 14.0002 16.7312C14.0496 16.7037 14.0988 16.6757 14.1476 16.6472C14.8377 16.2446 15.6883 16.1461 16.393 16.5227L17.0422 16.8698C17.2527 16.9907 17.5053 16.9504 17.6738 16.7891C18.7264 15.7005 19.4842 14.4102 19.9895 12.9586C20.0316 12.757 19.9474 12.515 19.7369 12.3941ZM10.0109 13.2005C8.1162 13.2005 6.64257 11.7893 6.64257 9.97478C6.64257 8.20063 8.1162 6.74905 10.0109 6.74905C11.8634 6.74905 13.3792 8.20063 13.3792 9.97478C13.3792 11.7893 11.8634 13.2005 10.0109 13.2005Z"
                                    fill="#2A7BE4"></path>
                            </svg></span></span></span></div>
        </div><small
            class="py-2 text-uppercase text-primary fw-bold bg-primary-subtle pe-2 ps-1 rounded-end">customize</small>
    </div>
</a>

<script src="{!! asset('vendors/fullcalendar/main.min.js') !!}"></script>
<script src="{!! asset('assets/js/flatpickr.js') !!}"></script>
<script src="{!! asset('vendors/dayjs/dayjs.min.js') !!}"></script>
