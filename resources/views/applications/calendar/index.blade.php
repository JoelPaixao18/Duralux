@extends('applications.calendar.layout.main')

@section('content-calendar')

    <!--! ================================================================ !-->
    <!--! [Start] Main Content !-->
    <!--! ================================================================ !-->
    <main class="nxl-container apps-container apps-calendar">
        <div class="nxl-content without-header nxl-full-content">
            <!-- [ Main Content ] start -->
            <div class="main-content d-flex">
                <!-- [ Content Sidebar ] start -->
                <div class="content-sidebar content-sidebar-xl" data-scrollbar-target="#psScrollbarInit">
                    <div class="content-sidebar-header bg-white sticky-top hstack justify-content-between">
                        <h4 class="fw-bolder mb-0">Calendar</h4>
                        <a href="javascript:void(0);" class="app-sidebar-close-trigger d-flex">
                            <i class="feather-x"></i>
                        </a>
                    </div>
                    <div class="content-sidebar-header">
                        <a href="javascript:void(0);" id="btn-new-schedule" class="btn btn-primary w-100" data-toggle="modal">
                            <i class="feather-calendar me-2"></i>
                            <span>New Event</span>
                        </a>
                    </div>
                    <div class="content-sidebar-body">
                        <div id="lnb-calendars" class="lnb-calendars">
                            <div class="lnb-calendars-item">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="viewAllSchedules" value="all" checked="checked">
                                    <label class="custom-control-label c-pointer" for="viewAllSchedules">
                                        <span class="fs-13 fw-semibold lh-lg" style="margin-top: -2px">View All Schedules</span>
                                    </label>
                                </div>
                            </div>
                            <div id="calendarList" class="lnb-calendars-d1">
                                <div class="lnb-calendars-item">
                                    <label><input type="checkbox" class="tui-full-calendar-checkbox-round" value="1" checked=""><span style="border-color: #5485e4; background-color: #5485e4"></span><span>Office</span></label>
                                </div>
                                <div class="lnb-calendars-item">
                                    <label><input type="checkbox" class="tui-full-calendar-checkbox-round" value="2" checked=""><span style="border-color: #25b865; background-color: #25b865"></span><span>Family</span></label>
                                </div>
                                <div class="lnb-calendars-item">
                                    <label><input type="checkbox" class="tui-full-calendar-checkbox-round" value="3" checked=""><span style="border-color: rgb(209, 59, 76); background-color: rgb(209, 59, 76)"></span><span>Friend</span></label>
                                </div>
                                <div class="lnb-calendars-item">
                                    <label><input type="checkbox" class="tui-full-calendar-checkbox-round" value="4" checked=""><span style="border-color: #17a2b8; background-color: #17a2b8"></span><span>Travel</span></label>
                                </div>
                                <div class="lnb-calendars-item">
                                    <label><input type="checkbox" class="tui-full-calendar-checkbox-round" value="5" checked=""><span style="border-color: #e49e3d; background-color: #e49e3d"></span><span>Privete</span></label>
                                </div>
                                <div class="lnb-calendars-item">
                                    <label><input type="checkbox" class="tui-full-calendar-checkbox-round" value="6" checked=""><span style="border-color: #5856d6; background-color: #5856d6"></span><span>Holidays</span></label>
                                </div>
                                <div class="lnb-calendars-item">
                                    <label><input type="checkbox" class="tui-full-calendar-checkbox-round" value="7" checked=""><span style="border-color: #3dc7be; background-color: #3dc7be"></span><span>Company</span></label>
                                </div>
                                <div class="lnb-calendars-item">
                                    <label><input type="checkbox" class="tui-full-calendar-checkbox-round" value="8" checked=""><span style="border-color: #475e77; background-color: #475e77"></span><span>Birthdays</span></label>
                                </div>
                            </div>
                        </div>
                        <h2 class="px-4 fs-10 fw-bold text-uppercase my-4 text-muted text-spacing-1 text-truncate-1-line">Events &amp; Schedules</h2>
                        <!--! BEGIN: [Events] !-->
                        <div class="p-4 border-top c-pointer single-item schedule-item">
                            <div class="d-flex align-items-start">
                                <div class="wd-50 ht-50 bg-soft-success text-success lh-1 d-flex align-items-center justify-content-center flex-column rounded-2 schedule-date">
                                    <span class="fs-18 fw-bold mb-1 d-block">17</span>
                                    <span class="fs-10 text-semibold text-uppercase d-block">Dec</span>
                                </div>
                                <div class="ms-3 schedule-body">
                                    <div class="text-dark">
                                        <h6 class="fw-bold my-1 text-truncate-1-line">Company Standup Meeting</h6>
                                        <span class="fs-11 fw-normal text-muted">8:00am - 9:00am, Engineering Room</span>
                                        <p class="fs-12 fw-normal text-muted my-3 text-truncate-2-line">Lorem ipsum quia dolor sit amet, consectetur, adipisci velit, abore et dolore magnam aliquam quaerat voluptatem.</p>
                                    </div>
                                    <div class="img-group lh-0 ms-3 justify-content-start">
                                        <a href="javascript:void(0)" class="avatar-image avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Janette Dalton">
                                            <img src="assets/images/avatar/2.png" class="img-fluid" alt="image">
                                        </a>
                                        <a href="javascript:void(0)" class="avatar-image avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Michael Ksen">
                                            <img src="assets/images/avatar/3.png" class="img-fluid" alt="image">
                                        </a>
                                        <a href="javascript:void(0)" class="avatar-image avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Socrates Itumay">
                                            <img src="assets/images/avatar/4.png" class="img-fluid" alt="image">
                                        </a>
                                        <a href="javascript:void(0)" class="avatar-image avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Marianne Audrey">
                                            <img src="assets/images/avatar/5.png" class="img-fluid" alt="image">
                                        </a>
                                        <a href="javascript:void(0)" class="avatar-image avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Marianne Audrey">
                                            <img src="assets/images/avatar/6.png" class="img-fluid" alt="image">
                                        </a>
                                        <a href="javascript:void(0)" class="avatar-text avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Explorer More">
                                            <i class="feather-more-horizontal"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--! BEGIN: [Events] !-->
                        <div class="p-4 border-top c-pointer single-item schedule-item">
                            <div class="d-flex align-items-start">
                                <div class="wd-50 ht-50 bg-soft-warning text-warning lh-1 d-flex align-items-center justify-content-center flex-column rounded-2 schedule-date">
                                    <span class="fs-18 fw-bold mb-1 d-block">30</span>
                                    <span class="fs-10 text-semibold text-uppercase d-block">Dec</span>
                                </div>
                                <div class="ms-3 schedule-body">
                                    <div class="text-dark">
                                        <h6 class="fw-bold my-1 text-truncate-1-line">Web Design Presentation</h6>
                                        <span class="fs-11 fw-normal text-muted">2:00pm - 5:00pm, Virtual Platform</span>
                                        <p class="fs-12 fw-normal text-muted my-3 text-truncate-2-line">Lorem ipsum quia dolor sit amet, consectetur, adipisci velit, abore et dolore magnam aliquam quaerat voluptatem.</p>
                                    </div>
                                    <div class="img-group lh-0 ms-3 justify-content-start">
                                        <a href="javascript:void(0)" class="avatar-image avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Janette Dalton">
                                            <img src="assets/images/avatar/2.png" class="img-fluid" alt="image">
                                        </a>
                                        <a href="javascript:void(0)" class="avatar-image avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Michael Ksen">
                                            <img src="assets/images/avatar/3.png" class="img-fluid" alt="image">
                                        </a>
                                        <a href="javascript:void(0)" class="avatar-image avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Socrates Itumay">
                                            <img src="assets/images/avatar/4.png" class="img-fluid" alt="image">
                                        </a>
                                        <a href="javascript:void(0)" class="avatar-image avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Marianne Audrey">
                                            <img src="assets/images/avatar/5.png" class="img-fluid" alt="image">
                                        </a>
                                        <a href="javascript:void(0)" class="avatar-image avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Marianne Audrey">
                                            <img src="assets/images/avatar/6.png" class="img-fluid" alt="image">
                                        </a>
                                        <a href="javascript:void(0)" class="avatar-text avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Explorer More">
                                            <i class="feather-more-horizontal"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--! BEGIN: [Events] !-->
                        <div class="p-4 border-top c-pointer single-item schedule-item">
                            <div class="d-flex align-items-start">
                                <div class="wd-50 ht-50 bg-soft-primary text-primary lh-1 d-flex align-items-center justify-content-center flex-column rounded-2 schedule-date">
                                    <span class="fs-18 fw-bold mb-1 d-block">21</span>
                                    <span class="fs-10 text-semibold text-uppercase d-block">Dec</span>
                                </div>
                                <div class="ms-3 schedule-body">
                                    <div class="text-dark">
                                        <h6 class="fw-bold my-1 text-truncate-1-line">Standup Design Presentation</h6>
                                        <span class="fs-11 fw-normal text-muted">2:00pm - 5:00pm, Virtual Platform</span>
                                        <p class="fs-12 fw-normal text-muted my-3 text-truncate-2-line">Lorem ipsum quia dolor sit amet, consectetur, adipisci velit, abore et dolore magnam aliquam quaerat voluptatem.</p>
                                    </div>
                                    <div class="img-group lh-0 ms-3 justify-content-start">
                                        <a href="javascript:void(0)" class="avatar-image avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Janette Dalton">
                                            <img src="assets/images/avatar/2.png" class="img-fluid" alt="image">
                                        </a>
                                        <a href="javascript:void(0)" class="avatar-image avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Michael Ksen">
                                            <img src="assets/images/avatar/3.png" class="img-fluid" alt="image">
                                        </a>
                                        <a href="javascript:void(0)" class="avatar-image avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Socrates Itumay">
                                            <img src="assets/images/avatar/4.png" class="img-fluid" alt="image">
                                        </a>
                                        <a href="javascript:void(0)" class="avatar-image avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Marianne Audrey">
                                            <img src="assets/images/avatar/5.png" class="img-fluid" alt="image">
                                        </a>
                                        <a href="javascript:void(0)" class="avatar-image avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Marianne Audrey">
                                            <img src="assets/images/avatar/6.png" class="img-fluid" alt="image">
                                        </a>
                                        <a href="javascript:void(0)" class="avatar-text avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Explorer More">
                                            <i class="feather-more-horizontal"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--! BEGIN: [Events] !-->
                        <div class="p-4 border-top c-pointer single-item schedule-item">
                            <div class="d-flex align-items-start">
                                <div class="wd-50 ht-50 bg-soft-danger text-danger lh-1 d-flex align-items-center justify-content-center flex-column rounded-2 schedule-date">
                                    <span class="fs-18 fw-bold mb-1 d-block">14</span>
                                    <span class="fs-10 text-semibold text-uppercase d-block">Dec</span>
                                </div>
                                <div class="ms-3 schedule-body">
                                    <div class="text-dark">
                                        <h6 class="fw-bold my-1 text-truncate-1-line">Company Start Concept</h6>
                                        <span class="fs-11 fw-normal text-muted">8:00am - 9:00am, Engineering Room</span>
                                        <p class="fs-12 fw-normal text-muted my-3 text-truncate-2-line">Lorem ipsum quia dolor sit amet, consectetur, adipisci velit, abore et dolore magnam aliquam quaerat voluptatem.</p>
                                    </div>
                                    <div class="img-group lh-0 ms-3 justify-content-start">
                                        <a href="javascript:void(0)" class="avatar-image avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Janette Dalton">
                                            <img src="assets/images/avatar/2.png" class="img-fluid" alt="image">
                                        </a>
                                        <a href="javascript:void(0)" class="avatar-image avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Michael Ksen">
                                            <img src="assets/images/avatar/3.png" class="img-fluid" alt="image">
                                        </a>
                                        <a href="javascript:void(0)" class="avatar-image avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Socrates Itumay">
                                            <img src="assets/images/avatar/4.png" class="img-fluid" alt="image">
                                        </a>
                                        <a href="javascript:void(0)" class="avatar-image avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Marianne Audrey">
                                            <img src="assets/images/avatar/5.png" class="img-fluid" alt="image">
                                        </a>
                                        <a href="javascript:void(0)" class="avatar-image avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Marianne Audrey">
                                            <img src="assets/images/avatar/6.png" class="img-fluid" alt="image">
                                        </a>
                                        <a href="javascript:void(0)" class="avatar-text avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Explorer More">
                                            <i class="feather-more-horizontal"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- [ Content Sidebar  ] end -->
                <!-- [ Main Area  ] start -->
                <div class="content-area" data-scrollbar-target="#psScrollbarInit">
                    <div class="content-area-header sticky-top">
                        <div class="page-header-left d-flex align-items-center gap-2">
                            <a href="javascript:void(0);" class="app-sidebar-open-trigger me-2">
                                <i class="feather-align-left fs-20"></i>
                            </a>
                            <div id="menu" class="d-flex align-items-center justify-content-between">
                                <div class="d-flex calendar-action-btn">
                                    <div class="dropdown me-1">
                                        <button id="dropdownMenu-calendarType" class="dropdown-toggle calendar-dropdown-btn" type="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" data-bs-offset="0,17">
                                            <i id="calendarTypeIcon" class="feather-grid calendar-icon fs-12 me-1"></i>
                                            <span id="calendarTypeName">Dropdown</span>
                                        </button>
                                        <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu-calendarType">
                                            <li role="presentation">
                                                <div class="dropdown-item c-pointer" role="menuitem" data-action="toggle-daily">
                                                    <i class="feather-list calendar-icon me-3"></i>
                                                    <span>Daily</span>
                                                </div>
                                            </li>
                                            <li role="presentation">
                                                <div class="dropdown-item c-pointer" role="menuitem" data-action="toggle-weekly">
                                                    <i class="feather-umbrella calendar-icon me-3"></i>
                                                    <span>Weekly</span>
                                                </div>
                                            </li>
                                            <li role="presentation">
                                                <div class="dropdown-item c-pointer" role="menuitem" data-action="toggle-weeks2">
                                                    <i class="feather-sliders calendar-icon me-3"></i>
                                                    <span>Weeks (2)</span>
                                                </div>
                                            </li>
                                            <li role="presentation">
                                                <div class="dropdown-item" role="menuitem" data-action="toggle-weeks3">
                                                    <i class="feather-framer calendar-icon me-3"></i>
                                                    <span>Weeks (3)</span>
                                                </div>
                                            </li>
                                            <li role="presentation">
                                                <div class="dropdown-item c-pointer" role="menuitem" data-action="toggle-monthly">
                                                    <i class="feather-grid calendar-icon me-3"></i>
                                                    <span>Monthly</span>
                                                </div>
                                            </li>
                                            <li role="presentation" class="dropdown-divider"></li>
                                            <li role="presentation">
                                                <div class="dropdown-item" role="menuitem" data-action="toggle-workweek">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input chalendar-checkbox" id="viewWeekendsSchedules" value="toggle-workweek" checked="checked">
                                                        <label class="custom-control-label c-pointer" for="viewWeekendsSchedules">
                                                            <span class="fs-12 fw-bold">Show Weekends</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li role="presentation">
                                                <div class="dropdown-item" role="menuitem" data-action="toggle-start-day-1">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input chalendar-checkbox" id="viewStartSchedules" value="toggle-start-day-1">
                                                        <label class="custom-control-label c-pointer" for="viewStartSchedules">
                                                            <span class="fs-12 fw-bold">Start Week on Monday</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li role="presentation">
                                                <div class="dropdown-item" role="menuitem" data-action="toggle-narrow-weekend">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input chalendar-checkbox" id="viewNarrowerSchedules" value="toggle-narrow-weekend">
                                                        <label class="custom-control-label c-pointer" for="viewNarrowerSchedules">
                                                            <span class="fs-12 fw-bold">Narrower than weekdays</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="menu-navi d-none d-sm-flex">
                                        <button type="button" class="move-today" data-action="move-today">
                                            <i class="feather-clock calendar-icon me-1 fs-12" data-action="move-today"></i>
                                            <span>Today</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="page-header-right ms-auto">
                            <div class="hstack gap-2">
                                <div id="renderRange" class="render-range d-none d-sm-flex"></div>
                                <div class="btn-group gap-1 menu-navi" role="group">
                                    <button type="button" class="avatar-text avatar-md move-day" data-action="move-prev">
                                        <i class="feather-chevron-left fs-12" data-action="move-prev"></i>
                                    </button>
                                    <button type="button" class="avatar-text avatar-md move-day" data-action="move-next">
                                        <i class="feather-chevron-right fs-12" data-action="move-next"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content-area-body p-0">
                        <div id="tui-calendar-init"></div>
                    </div>
                    <!-- [ Footer ] start -->
                    <footer class="footer">
                        <p class="fs-11 text-muted fw-medium text-uppercase mb-0 copyright">
                            <span>Copyright ©</span>
                            <script>
                                document.write(new Date().getFullYear());
                            </script>
                        </p>
                        <div class="d-flex align-items-center gap-4">
                            <a href="javascript:void(0);" class="fs-11 fw-semibold text-uppercase">Help</a>
                            <a href="javascript:void(0);" class="fs-11 fw-semibold text-uppercase">Terms</a>
                            <a href="javascript:void(0);" class="fs-11 fw-semibold text-uppercase">Privacy</a>
                        </div>
                    </footer>
                    <!-- [ Footer ] end -->
                </div>
                <!-- [ Content Area ] end -->
            </div>
            <!-- [ Main Content ] end -->
        </div>
    </main>
    <!--! ================================================================ !-->
    <!--! [End] Main Content !-->
    <!--! ================================================================ !-->

@endsection
