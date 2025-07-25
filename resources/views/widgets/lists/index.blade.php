@extends('widgets.lists.layout.main')

@section('content-widgets-lists')

    <main class="nxl-container">
        <div class="nxl-content">
            <!-- [ page-header ] start -->
            <div class="page-header">
                <div class="page-header-left d-flex align-items-center">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Widgets</h5>
                    </div>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item">Lists</li>
                    </ul>
                </div>
                <div class="page-header-right ms-auto">
                    <div class="page-header-right-items">
                        <div class="d-flex d-md-none">
                            <a href="javascript:void(0)" class="page-header-right-close-toggle">
                                <i class="feather-arrow-left me-2"></i>
                                <span>Back</span>
                            </a>
                        </div>
                        <div class="d-flex align-items-center gap-2 page-header-right-items-wrapper">
                            <div class="dropdown filter-dropdown">
                                <a class="btn btn-md btn-light-brand" data-bs-toggle="dropdown" data-bs-offset="0, 10" data-bs-auto-close="outside">
                                    <i class="feather-filter me-2"></i>
                                    <span>Filter</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <div class="dropdown-item">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="Role" checked="checked">
                                            <label class="custom-control-label c-pointer" for="Role">Role</label>
                                        </div>
                                    </div>
                                    <div class="dropdown-item">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="Team" checked="checked">
                                            <label class="custom-control-label c-pointer" for="Team">Team</label>
                                        </div>
                                    </div>
                                    <div class="dropdown-item">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="Email" checked="checked">
                                            <label class="custom-control-label c-pointer" for="Email">Email</label>
                                        </div>
                                    </div>
                                    <div class="dropdown-item">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="Member" checked="checked">
                                            <label class="custom-control-label c-pointer" for="Member">Member</label>
                                        </div>
                                    </div>
                                    <div class="dropdown-item">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="Recommendation" checked="checked">
                                            <label class="custom-control-label c-pointer" for="Recommendation">Recommendation</label>
                                        </div>
                                    </div>
                                    <div class="dropdown-divider"></div>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <i class="feather-plus me-3"></i>
                                        <span>Create New</span>
                                    </a>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <i class="feather-filter me-3"></i>
                                        <span>Manage Filter</span>
                                    </a>
                                </div>
                            </div>
                            <a href="javascript:void(0);" class="btn btn-md btn-primary">
                                <i class="feather-plus me-2"></i>
                                <span>Add widget</span>
                            </a>
                        </div>
                    </div>
                    <div class="d-md-none d-flex align-items-center">
                        <a href="javascript:void(0)" class="page-header-right-open-toggle">
                            <i class="feather-align-right fs-20"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- [ page-header ] end -->
            <!-- [ Main Content ] start -->
            <div class="main-content">
                <div class="row">
                    <!--! BEGIN: [Schedule] !-->
                    <div class="col-xxl-4 col-lg-6">
                        <div class="card stretch stretch-full">
                            <div class="card-header">
                                <h5 class="card-title">Schedule</h5>
                                <div class="card-header-action">
                                    <div class="card-header-btn">
                                        <div data-bs-toggle="tooltip" title="Delete">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-danger" data-bs-toggle="remove"> </a>
                                        </div>
                                        <div data-bs-toggle="tooltip" title="Refresh">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-warning" data-bs-toggle="refresh"> </a>
                                        </div>
                                        <div data-bs-toggle="tooltip" title="Maximize/Minimize">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-success" data-bs-toggle="expand"> </a>
                                        </div>
                                    </div>
                                    <div class="dropdown">
                                        <a href="javascript:void(0);" class="avatar-text avatar-sm" data-bs-toggle="dropdown" data-bs-offset="25, 25">
                                            <div data-bs-toggle="tooltip" title="Options">
                                                <i class="feather-more-vertical"></i>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-at-sign"></i>New</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-calendar"></i>Event</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-bell"></i>Snoozed</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-trash-2"></i>Deleted</a>
                                            <div class="dropdown-divider"></div>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-settings"></i>Settings</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-life-buoy"></i>Tips & Tricks</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <!--! BEGIN: [Events] !-->
                                <div class="p-3 border border-dashed rounded-3 mb-3">
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="wd-50 ht-50 bg-soft-primary text-primary lh-1 d-flex align-items-center justify-content-center flex-column rounded-2 schedule-date">
                                                <span class="fs-18 fw-bold mb-1 d-block">20</span>
                                                <span class="fs-10 fw-semibold text-uppercase d-block">Dec</span>
                                            </div>
                                            <div class="text-dark">
                                                <a href="javascript:void(0);" class="fw-bold mb-2 text-truncate-1-line">React Dashboard Design</a>
                                                <span class="fs-11 fw-normal text-muted text-truncate-1-line">11:30am - 12:30pm</span>
                                            </div>
                                        </div>
                                        <div class="img-group lh-0 ms-3 justify-content-start d-none d-sm-flex">
                                            <a href="javascript:void(0)" class="avatar-image avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Janette Dalton">
                                                <img src="assets/images/avatar/2.png" class="img-fluid" alt="image">
                                            </a>
                                            <a href="javascript:void(0)" class="avatar-image avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Michael Ksen">
                                                <img src="assets/images/avatar/3.png" class="img-fluid" alt="image">
                                            </a>
                                            <a href="javascript:void(0)" class="avatar-image avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Socrates Itumay">
                                                <img src="assets/images/avatar/4.png" class="img-fluid" alt="image">
                                            </a>
                                            <a href="javascript:void(0)" class="avatar-image avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Marianne Audrey">
                                                <img src="assets/images/avatar/6.png" class="img-fluid" alt="image">
                                            </a>
                                            <a href="javascript:void(0)" class="avatar-text avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Explorer More">
                                                <i class="feather-more-horizontal"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!--! BEGIN: [Events] !-->
                                <div class="p-3 border border-dashed rounded-3 mb-3">
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="wd-50 ht-50 bg-soft-warning text-warning lh-1 d-flex align-items-center justify-content-center flex-column rounded-2 schedule-date">
                                                <span class="fs-18 fw-bold mb-1 d-block">30</span>
                                                <span class="fs-10 fw-semibold text-uppercase d-block">Dec</span>
                                            </div>
                                            <div class="text-dark">
                                                <a href="javascript:void(0);" class="fw-bold mb-2 text-truncate-1-line">Admin Design Concept</a>
                                                <span class="fs-11 fw-normal text-muted text-truncate-1-line">10:00am - 12:00pm</span>
                                            </div>
                                        </div>
                                        <div class="img-group lh-0 ms-3 justify-content-start d-none d-sm-flex">
                                            <a href="javascript:void(0)" class="avatar-image avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Janette Dalton">
                                                <img src="assets/images/avatar/2.png" class="img-fluid" alt="image">
                                            </a>
                                            <a href="javascript:void(0)" class="avatar-image avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Michael Ksen">
                                                <img src="assets/images/avatar/3.png" class="img-fluid" alt="image">
                                            </a>
                                            <a href="javascript:void(0)" class="avatar-image avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Marianne Audrey">
                                                <img src="assets/images/avatar/5.png" class="img-fluid" alt="image">
                                            </a>
                                            <a href="javascript:void(0)" class="avatar-image avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Marianne Audrey">
                                                <img src="assets/images/avatar/6.png" class="img-fluid" alt="image">
                                            </a>
                                            <a href="javascript:void(0)" class="avatar-text avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Explorer More">
                                                <i class="feather-more-horizontal"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!--! BEGIN: [Events] !-->
                                <div class="p-3 border border-dashed rounded-3 mb-3">
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="wd-50 ht-50 bg-soft-success text-success lh-1 d-flex align-items-center justify-content-center flex-column rounded-2 schedule-date">
                                                <span class="fs-18 fw-bold mb-1 d-block">17</span>
                                                <span class="fs-10 fw-semibold text-uppercase d-block">Dec</span>
                                            </div>
                                            <div class="text-dark">
                                                <a href="javascript:void(0);" class="fw-bold mb-2 text-truncate-1-line">Standup Team Meeting</a>
                                                <span class="fs-11 fw-normal text-muted text-truncate-1-line">8:00am - 9:00am</span>
                                            </div>
                                        </div>
                                        <div class="img-group lh-0 ms-3 justify-content-start d-none d-sm-flex">
                                            <a href="javascript:void(0)" class="avatar-image avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Janette Dalton">
                                                <img src="assets/images/avatar/2.png" class="img-fluid" alt="image">
                                            </a>
                                            <a href="javascript:void(0)" class="avatar-image avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Michael Ksen">
                                                <img src="assets/images/avatar/3.png" class="img-fluid" alt="image">
                                            </a>
                                            <a href="javascript:void(0)" class="avatar-image avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Socrates Itumay">
                                                <img src="assets/images/avatar/4.png" class="img-fluid" alt="image">
                                            </a>
                                            <a href="javascript:void(0)" class="avatar-image avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Marianne Audrey">
                                                <img src="assets/images/avatar/5.png" class="img-fluid" alt="image">
                                            </a>
                                            <a href="javascript:void(0)" class="avatar-text avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Explorer More">
                                                <i class="feather-more-horizontal"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!--! BEGIN: [Events] !-->
                                <div class="p-3 border border-dashed rounded-3 mb-0">
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="wd-50 ht-50 bg-soft-danger text-danger lh-1 d-flex align-items-center justify-content-center flex-column rounded-2 schedule-date">
                                                <span class="fs-18 fw-bold mb-1 d-block">25</span>
                                                <span class="fs-10 fw-semibold text-uppercase d-block">Dec</span>
                                            </div>
                                            <div class="text-dark">
                                                <a href="javascript:void(0);" class="fw-bold mb-2 text-truncate-1-line">Zoom Team Meeting</a>
                                                <span class="fs-11 fw-normal text-muted text-truncate-1-line">03:30pm - 05:30pm</span>
                                            </div>
                                        </div>
                                        <div class="img-group lh-0 ms-3 justify-content-start d-none d-sm-flex">
                                            <a href="javascript:void(0)" class="avatar-image avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Janette Dalton">
                                                <img src="assets/images/avatar/2.png" class="img-fluid" alt="image">
                                            </a>
                                            <a href="javascript:void(0)" class="avatar-image avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Socrates Itumay">
                                                <img src="assets/images/avatar/4.png" class="img-fluid" alt="image">
                                            </a>
                                            <a href="javascript:void(0)" class="avatar-image avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Marianne Audrey">
                                                <img src="assets/images/avatar/5.png" class="img-fluid" alt="image">
                                            </a>
                                            <a href="javascript:void(0)" class="avatar-image avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Marianne Audrey">
                                                <img src="assets/images/avatar/6.png" class="img-fluid" alt="image">
                                            </a>
                                            <a href="javascript:void(0)" class="avatar-text avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Explorer More">
                                                <i class="feather-more-horizontal"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="javascript:void(0);" class="card-footer fs-11 fw-bold text-uppercase text-center py-4">Upcomming Schedule</a>
                        </div>
                    </div>
                    <!--! END: [Schedule] !-->
                    <!--! BEGIN: [Project] !-->
                    <div class="col-xxl-4 col-lg-6">
                        <div class="card stretch stretch-full">
                            <div class="card-header">
                                <h5 class="card-title">Project</h5>
                                <div class="card-header-action">
                                    <div class="card-header-btn">
                                        <div data-bs-toggle="tooltip" title="Delete">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-danger" data-bs-toggle="remove"> </a>
                                        </div>
                                        <div data-bs-toggle="tooltip" title="Refresh">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-warning" data-bs-toggle="refresh"> </a>
                                        </div>
                                        <div data-bs-toggle="tooltip" title="Maximize/Minimize">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-success" data-bs-toggle="expand"> </a>
                                        </div>
                                    </div>
                                    <div class="dropdown">
                                        <a href="javascript:void(0);" class="avatar-text avatar-sm" data-bs-toggle="dropdown" data-bs-offset="25, 25">
                                            <div data-bs-toggle="tooltip" title="Options">
                                                <i class="feather-more-vertical"></i>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-at-sign"></i>New</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-calendar"></i>Event</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-bell"></i>Snoozed</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-trash-2"></i>Deleted</a>
                                            <div class="dropdown-divider"></div>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-settings"></i>Settings</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-life-buoy"></i>Tips & Tricks</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body custom-card-action">
                                <div class="mb-3">
                                    <div class="mb-4 pb-1 d-flex">
                                        <div class="d-flex w-50 align-items-center me-3">
                                            <img src="assets/images/brand/app-store.png" alt="laravel-logo" class="me-3" width="35">
                                            <div>
                                                <a href="javascript:void(0);" class="text-truncate-1-line">Apps Developemtn</a>
                                                <div class="fs-11 text-muted">Applications</div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-grow-1 align-items-center">
                                            <div class="progress w-100 me-3 ht-5">
                                                <div class="progress-bar bg-danger" role="progressbar" style="width: 54%" aria-valuenow="54" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <span class="text-muted">54%</span>
                                        </div>
                                    </div>
                                    <hr class="border-dashed my-3">
                                    <div class="mb-4 pb-1 d-flex">
                                        <div class="d-flex w-50 align-items-center me-3">
                                            <img src="assets/images/brand/figma.png" alt="figma-logo" class="me-3" width="35">
                                            <div>
                                                <a href="javascript:void(0);" class="text-truncate-1-line">Dashboard Design</a>
                                                <div class="fs-11 text-muted">App UI Kit</div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-grow-1 align-items-center">
                                            <div class="progress w-100 me-3 ht-5">
                                                <div class="progress-bar bg-primary" role="progressbar" style="width: 86%" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <span class="text-muted">86%</span>
                                        </div>
                                    </div>
                                    <hr class="border-dashed my-3">
                                    <div class="mb-4 pb-1 d-flex">
                                        <div class="d-flex w-50 align-items-center me-3">
                                            <img src="assets/images/brand/facebook.png" alt="vue-logo" class="me-3" width="35">
                                            <div>
                                                <a href="javascript:void(0);" class="text-truncate-1-line">Facebook Marketing</a>
                                                <div class="fs-11 text-muted">Marketing</div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-grow-1 align-items-center">
                                            <div class="progress w-100 me-3 ht-5">
                                                <div class="progress-bar bg-success" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <span class="text-muted">90%</span>
                                        </div>
                                    </div>
                                    <hr class="border-dashed my-3">
                                    <div class="mb-4 pb-1 d-flex">
                                        <div class="d-flex w-50 align-items-center me-3">
                                            <img src="assets/images/brand/github.png" alt="react-logo" class="me-3" width="35">
                                            <div>
                                                <a href="javascript:void(0);" class="text-truncate-1-line">React Dashboard Github</a>
                                                <div class="fs-11 text-muted">Dashboard</div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-grow-1 align-items-center">
                                            <div class="progress w-100 me-3 ht-5">
                                                <div class="progress-bar bg-info" role="progressbar" style="width: 37%" aria-valuenow="37" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <span class="text-muted">37%</span>
                                        </div>
                                    </div>
                                    <hr class="border-dashed my-3">
                                    <div class="d-flex">
                                        <div class="d-flex w-50 align-items-center me-3">
                                            <img src="assets/images/brand/paypal.png" alt="sketch-logo" class="me-3" width="35">
                                            <div>
                                                <a href="javascript:void(0);" class="text-truncate-1-line">Paypal Payment Gateway</a>
                                                <div class="fs-11 text-muted">Payment</div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-grow-1 align-items-center">
                                            <div class="progress w-100 me-3 ht-5">
                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 29%" aria-valuenow="29" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <span class="text-muted">29%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="javascript:void(0);" class="card-footer fs-11 fw-bold text-uppercase text-center">Upcomming Projects</a>
                        </div>
                    </div>
                    <!--! END: [Project] !-->
                    <!--! BEGIN: [Progress] !-->
                    <div class="col-xxl-4 col-lg-6">
                        <div class="card stretch stretch-full">
                            <div class="card-header">
                                <h5 class="card-title">Progress</h5>
                                <div class="card-header-action">
                                    <div class="card-header-btn">
                                        <div data-bs-toggle="tooltip" title="Delete">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-danger" data-bs-toggle="remove"> </a>
                                        </div>
                                        <div data-bs-toggle="tooltip" title="Refresh">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-warning" data-bs-toggle="refresh"> </a>
                                        </div>
                                        <div data-bs-toggle="tooltip" title="Maximize/Minimize">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-success" data-bs-toggle="expand"> </a>
                                        </div>
                                    </div>
                                    <div class="dropdown">
                                        <a href="javascript:void(0);" class="avatar-text avatar-sm" data-bs-toggle="dropdown" data-bs-offset="25, 25">
                                            <div data-bs-toggle="tooltip" title="Options">
                                                <i class="feather-more-vertical"></i>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-at-sign"></i>New</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-calendar"></i>Event</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-bell"></i>Snoozed</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-trash-2"></i>Deleted</a>
                                            <div class="dropdown-divider"></div>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-settings"></i>Settings</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-life-buoy"></i>Tips & Tricks</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body custom-card-action">
                                <div class="hstack justify-content-between border border-dashed rounded-3 p-3 mb-3">
                                    <div class="hstack gap-3">
                                        <div class="avatar-image">
                                            <img src="assets/images/avatar/1.png" alt="" class="img-fluid">
                                        </div>
                                        <div>
                                            <a href="javascript:void(0);">Alexandra Della</a>
                                            <div class="fs-11 text-muted">Frontend Developer</div>
                                        </div>
                                    </div>
                                    <div class="team-progress-1"></div>
                                </div>
                                <div class="hstack justify-content-between border border-dashed rounded-3 p-3 mb-3">
                                    <div class="hstack gap-3">
                                        <div class="avatar-image">
                                            <img src="assets/images/avatar/2.png" alt="" class="img-fluid">
                                        </div>
                                        <div>
                                            <a href="javascript:void(0);">Archie Cantones</a>
                                            <div class="fs-11 text-muted">UI/UX Designer</div>
                                        </div>
                                    </div>
                                    <div class="team-progress-2"></div>
                                </div>
                                <div class="hstack justify-content-between border border-dashed rounded-3 p-3 mb-3">
                                    <div class="hstack gap-3">
                                        <div class="avatar-image">
                                            <img src="assets/images/avatar/3.png" alt="" class="img-fluid">
                                        </div>
                                        <div>
                                            <a href="javascript:void(0);">Malanie Hanvey</a>
                                            <div class="fs-11 text-muted">Backend Developer</div>
                                        </div>
                                    </div>
                                    <div class="team-progress-3"></div>
                                </div>
                                <div class="hstack justify-content-between border border-dashed rounded-3 p-3 mb-2">
                                    <div class="hstack gap-3">
                                        <div class="avatar-image">
                                            <img src="assets/images/avatar/4.png" alt="" class="img-fluid">
                                        </div>
                                        <div>
                                            <a href="javascript:void(0);">Kenneth Hune</a>
                                            <div class="fs-11 text-muted">Digital Marketer</div>
                                        </div>
                                    </div>
                                    <div class="team-progress-4"></div>
                                </div>
                            </div>
                            <a href="javascript:void(0);" class="card-footer fs-11 fw-bold text-uppercase text-center">Update 30 Min Ago</a>
                        </div>
                    </div>
                    <!--! END: [Progress] !-->
                    <!-- [Meeting] start -->
                    <div class="col-xxl-4 col-lg-6">
                        <div class="card stretch stretch-full">
                            <div class="card-header">
                                <h5 class="card-title">Meeting</h5>
                                <div class="card-header-action">
                                    <div class="card-header-btn">
                                        <div data-bs-toggle="tooltip" title="Delete">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-danger" data-bs-toggle="remove"> </a>
                                        </div>
                                        <div data-bs-toggle="tooltip" title="Refresh">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-warning" data-bs-toggle="refresh"> </a>
                                        </div>
                                        <div data-bs-toggle="tooltip" title="Maximize/Minimize">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-success" data-bs-toggle="expand"> </a>
                                        </div>
                                    </div>
                                    <div class="dropdown">
                                        <a href="javascript:void(0);" class="avatar-text avatar-sm" data-bs-toggle="dropdown" data-bs-offset="25, 25">
                                            <div data-bs-toggle="tooltip" title="Options">
                                                <i class="feather-more-vertical"></i>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-at-sign"></i>New</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-calendar"></i>Event</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-bell"></i>Snoozed</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-trash-2"></i>Deleted</a>
                                            <div class="dropdown-divider"></div>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-settings"></i>Settings</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-life-buoy"></i>Tips & Tricks</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body custom-card-action">
                                <!--! BEGIN: single-meeting !-->
                                <div class="hstack gap-3 justify-content-between">
                                    <div class="hstack gap-3">
                                        <div class="wd-7 ht-7 bg-primary rounded-circle"></div>
                                        <div class="ps-3 border-start border-3 border-primary rounded">
                                            <a href="javascript:void(0);" class="fw-semibold mb-1 text-truncate-1-line">Meeting with new clients.</a>
                                            <a href="javascript:void(0);" class="fs-12 text-muted">
                                                <i class="feather-message-square fs-10 me-1"></i>
                                                <span class="fw-normal">Google Meet</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="hstack gap-2">
                                        <div class="avatar-text avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="12:30 AM"><i class="feather-clock"></i></div>
                                        <a href="javascript:void(0);" class="avatar-text avatar-md"><i class="feather-arrow-right"></i></a>
                                    </div>
                                </div>
                                <!--! END: single-meeting !-->
                                <hr class="border-dashed my-3">
                                <!--! BEGIN: single-meeting !-->
                                <div class="hstack gap-3 justify-content-between">
                                    <div class="hstack gap-3">
                                        <div class="wd-7 ht-7 bg-success rounded-circle"></div>
                                        <div class="ps-3 border-start border-3 border-success rounded">
                                            <a href="javascript:void(0);" class="fw-semibold mb-1 text-truncate-1-line">Meeting with new clients.</a>
                                            <a href="javascript:void(0);" class="fs-12 text-muted">
                                                <i class="feather-message-square fs-10 me-1"></i>
                                                <span class="fw-normal">Google Meet</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="hstack gap-2">
                                        <div class="avatar-text avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="12:30 AM"><i class="feather-clock"></i></div>
                                        <a href="javascript:void(0);" class="avatar-text avatar-md"><i class="feather-arrow-right"></i></a>
                                    </div>
                                </div>
                                <!--! END: single-meeting !-->
                                <hr class="border-dashed my-3">
                                <!--! BEGIN: single-meeting !-->
                                <div class="hstack gap-3 justify-content-between">
                                    <div class="hstack gap-3">
                                        <div class="wd-7 ht-7 bg-danger rounded-circle"></div>
                                        <div class="ps-3 border-start border-3 border-danger rounded">
                                            <a href="javascript:void(0);" class="fw-semibold mb-0 text-truncate-1-line">Meeting with new clients.</a>
                                            <a href="javascript:void(0);" class="fs-12 text-muted">
                                                <i class="feather-message-square fs-10 me-1"></i>
                                                <span class="fw-normal">Google Meet</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="hstack gap-2">
                                        <div class="avatar-text avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="12:30 AM"><i class="feather-clock"></i></div>
                                        <a href="javascript:void(0);" class="avatar-text avatar-md"><i class="feather-arrow-right"></i></a>
                                    </div>
                                </div>
                                <!--! END: single-meeting !-->
                                <hr class="border-dashed my-3">
                                <!--! BEGIN: single-meeting !-->
                                <div class="hstack gap-3 justify-content-between">
                                    <div class="hstack gap-3">
                                        <div class="wd-7 ht-7 bg-warning rounded-circle"></div>
                                        <div class="ps-3 border-start border-3 border-warning rounded">
                                            <a href="javascript:void(0);" class="fw-semibold mb-1 text-truncate-1-line">Meeting with new clients.</a>
                                            <a href="javascript:void(0);" class="fs-12 text-muted">
                                                <i class="feather-message-square fs-10 me-1"></i>
                                                <span class="fw-normal">Google Meet</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="hstack gap-2">
                                        <div class="avatar-text avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="12:30 AM"><i class="feather-clock"></i></div>
                                        <a href="javascript:void(0);" class="avatar-text avatar-md"><i class="feather-arrow-right"></i></a>
                                    </div>
                                </div>
                                <!--! END: single-meeting !-->
                                <hr class="border-dashed my-3">
                                <!--! BEGIN: single-meeting !-->
                                <div class="hstack gap-3 justify-content-between">
                                    <div class="hstack gap-3">
                                        <div class="wd-7 ht-7 bg-dark rounded-circle"></div>
                                        <div class="ps-3 border-start border-3 border-dark rounded">
                                            <a href="javascript:void(0);" class="fw-semibold mb-1 text-truncate-1-line">Meeting with new clients.</a>
                                            <a href="javascript:void(0);" class="fs-12 text-muted">
                                                <i class="feather-message-square fs-10 me-1"></i>
                                                <span class="fw-normal">Google Meet</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="hstack gap-2">
                                        <div class="avatar-text avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="12:30 AM"><i class="feather-clock"></i></div>
                                        <a href="javascript:void(0);" class="avatar-text avatar-md"><i class="feather-arrow-right"></i></a>
                                    </div>
                                </div>
                                <!--! END: single-meeting !-->
                                <hr class="border-dashed my-3">
                                <!--! BEGIN: single-meeting !-->
                                <div class="hstack gap-3 justify-content-between mb-1">
                                    <div class="hstack gap-3">
                                        <div class="wd-7 ht-7 bg-danger rounded-circle"></div>
                                        <div class="ps-3 border-start border-3 border-danger rounded">
                                            <a href="javascript:void(0);" class="fw-semibold mb-0 text-truncate-1-line">Meeting with new clients.</a>
                                            <a href="javascript:void(0);" class="fs-12 text-muted">
                                                <i class="feather-message-square fs-10 me-1"></i>
                                                <span class="fw-normal">Google Meet</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="hstack gap-2">
                                        <div class="avatar-text avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="12:30 AM"><i class="feather-clock"></i></div>
                                        <a href="javascript:void(0);" class="avatar-text avatar-md"><i class="feather-arrow-right"></i></a>
                                    </div>
                                </div>
                                <!--! END: single-meeting !-->
                            </div>
                            <a href="javascript:void(0);" class="card-footer fs-11 fw-bold text-uppercase text-center">Update: 20 Min Ago</a>
                        </div>
                    </div>
                    <!-- [Meeting] end -->
                    <!--! BEGIN: [Users] !-->
                    <div class="col-xxl-4 col-lg-6">
                        <div class="card stretch stretch-full">
                            <div class="card-header">
                                <h5 class="card-title">Users</h5>
                                <div class="card-header-action">
                                    <div class="card-header-btn">
                                        <div data-bs-toggle="tooltip" title="Delete">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-danger" data-bs-toggle="remove"> </a>
                                        </div>
                                        <div data-bs-toggle="tooltip" title="Refresh">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-warning" data-bs-toggle="refresh"> </a>
                                        </div>
                                        <div data-bs-toggle="tooltip" title="Maximize/Minimize">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-success" data-bs-toggle="expand"> </a>
                                        </div>
                                    </div>
                                    <div class="dropdown">
                                        <a href="javascript:void(0);" class="avatar-text avatar-sm" data-bs-toggle="dropdown" data-bs-offset="25, 25">
                                            <div data-bs-toggle="tooltip" title="Options">
                                                <i class="feather-more-vertical"></i>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-at-sign"></i>New</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-calendar"></i>Event</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-bell"></i>Snoozed</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-trash-2"></i>Deleted</a>
                                            <div class="dropdown-divider"></div>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-settings"></i>Settings</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-life-buoy"></i>Tips & Tricks</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body custom-card-action">
                                <div class="w-100 d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar-image me-3">
                                            <img src="../assets/images/avatar/3.html" class="rounded-circle img-fluid" alt="image">
                                        </div>
                                        <div>
                                            <a href="javascript:void(0)" class="d-flex align-items-center mb-1">Marianne Audrey</a>
                                            <div class="fs-12 fw-normal text-muted">marianne.audrey@yahoo.com</div>
                                        </div>
                                    </div>
                                    <div class="dropdown hstack text-end justify-content-end">
                                        <a href="javascript:void(0)" class="avatar-text avatar-md" data-bs-toggle="dropdown">
                                            <i class="feather feather-more-vertical"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li>
                                                <a href="javascript:void(0)" class="dropdown-item">
                                                    <i class="feather feather-eye me-3"></i>
                                                    <span>Open</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)" class="dropdown-item">
                                                    <i class="feather feather-share-2 me-3"></i>
                                                    <span>Share</span>
                                                </a>
                                            </li>
                                            <li class="dropdown-divider"></li>
                                            <li>
                                                <a href="javascript:void(0)" class="dropdown-item">
                                                    <i class="feather feather-scissors me-3"></i>
                                                    <span>Backup</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)" class="dropdown-item">
                                                    <i class="feather feather-x me-3"></i>
                                                    <span>Delete</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <hr class="border-dashed my-3">
                                <div class="w-100 d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar-image me-3">
                                            <img src="../assets/images/avatar/1.html" class="rounded-circle img-fluid" alt="image">
                                        </div>
                                        <div>
                                            <a href="javascript:void(0)" class="d-flex align-items-center mb-1">Alexandra Della</a>
                                            <div class="fs-12 fw-normal text-muted">alex.della@yahoo.com</div>
                                        </div>
                                    </div>
                                    <div class="dropdown hstack text-end justify-content-end">
                                        <a href="javascript:void(0)" class="avatar-text avatar-md" data-bs-toggle="dropdown">
                                            <i class="feather feather-more-vertical"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li>
                                                <a href="javascript:void(0)" class="dropdown-item">
                                                    <i class="feather feather-eye me-3"></i>
                                                    <span>Open</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)" class="dropdown-item">
                                                    <i class="feather feather-share-2 me-3"></i>
                                                    <span>Share</span>
                                                </a>
                                            </li>
                                            <li class="dropdown-divider"></li>
                                            <li>
                                                <a href="javascript:void(0)" class="dropdown-item">
                                                    <i class="feather feather-scissors me-3"></i>
                                                    <span>Backup</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)" class="dropdown-item">
                                                    <i class="feather feather-x me-3"></i>
                                                    <span>Delete</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <hr class="border-dashed my-3">
                                <div class="w-100 d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <div class="me-3">
                                            <div class="bg-primary text-white avatar-text">T</div>
                                        </div>
                                        <div>
                                            <a href="javascript:void(0)" class="d-flex align-items-center mb-1">Timothy Boyd</a>
                                            <div class="fs-12 fw-normal text-muted">timothy.boyd@gmail.com</div>
                                        </div>
                                    </div>
                                    <div class="dropdown hstack text-end justify-content-end">
                                        <a href="javascript:void(0)" class="avatar-text avatar-md" data-bs-toggle="dropdown">
                                            <i class="feather feather-more-vertical"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li>
                                                <a href="javascript:void(0)" class="dropdown-item">
                                                    <i class="feather feather-eye me-3"></i>
                                                    <span>Open</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)" class="dropdown-item">
                                                    <i class="feather feather-share-2 me-3"></i>
                                                    <span>Share</span>
                                                </a>
                                            </li>
                                            <li class="dropdown-divider"></li>
                                            <li>
                                                <a href="javascript:void(0)" class="dropdown-item">
                                                    <i class="feather feather-scissors me-3"></i>
                                                    <span>Backup</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)" class="dropdown-item">
                                                    <i class="feather feather-x me-3"></i>
                                                    <span>Delete</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <hr class="border-dashed my-3">
                                <div class="w-100 d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar-image me-3">
                                            <img src="../assets/images/avatar/4.html" class="rounded-circle img-fluid" alt="image">
                                        </div>
                                        <div>
                                            <a href="javascript:void(0)" class="d-flex align-items-center mb-1">Holland Scott</a>
                                            <div class="fs-12 fw-normal text-muted">holland.scott@hotmail.com</div>
                                        </div>
                                    </div>
                                    <div class="dropdown hstack text-end justify-content-end">
                                        <a href="javascript:void(0)" class="avatar-text avatar-md" data-bs-toggle="dropdown">
                                            <i class="feather feather-more-vertical"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li>
                                                <a href="javascript:void(0)" class="dropdown-item">
                                                    <i class="feather feather-eye me-3"></i>
                                                    <span>Open</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)" class="dropdown-item">
                                                    <i class="feather feather-share-2 me-3"></i>
                                                    <span>Share</span>
                                                </a>
                                            </li>
                                            <li class="dropdown-divider"></li>
                                            <li>
                                                <a href="javascript:void(0)" class="dropdown-item">
                                                    <i class="feather feather-scissors me-3"></i>
                                                    <span>Backup</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)" class="dropdown-item">
                                                    <i class="feather feather-x me-3"></i>
                                                    <span>Delete</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <hr class="border-dashed my-3">
                                <div class="w-100 d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <div class="me-3">
                                            <div class="bg-warning text-white avatar-text">N</div>
                                        </div>
                                        <div>
                                            <a href="javascript:void(0)" class="d-flex align-items-center mb-1">Nancy Elliot</a>
                                            <div class="fs-12 fw-normal text-muted">nancy.elliot@gmail.com</div>
                                        </div>
                                    </div>
                                    <div class="dropdown hstack text-end justify-content-end">
                                        <a href="javascript:void(0)" class="avatar-text avatar-md" data-bs-toggle="dropdown">
                                            <i class="feather feather-more-vertical"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li>
                                                <a href="javascript:void(0)" class="dropdown-item">
                                                    <i class="feather feather-eye me-3"></i>
                                                    <span>Open</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)" class="dropdown-item">
                                                    <i class="feather feather-share-2 me-3"></i>
                                                    <span>Share</span>
                                                </a>
                                            </li>
                                            <li class="dropdown-divider"></li>
                                            <li>
                                                <a href="javascript:void(0)" class="dropdown-item">
                                                    <i class="feather feather-scissors me-3"></i>
                                                    <span>Backup</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)" class="dropdown-item">
                                                    <i class="feather feather-x me-3"></i>
                                                    <span>Delete</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <hr class="border-dashed my-3">
                                <div class="w-100 d-flex align-items-center justify-content-between mb-2">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar-image me-3">
                                            <img src="../assets/images/avatar/5.html" class="rounded-circle img-fluid" alt="image">
                                        </div>
                                        <div>
                                            <a href="javascript:void(0)" class="d-flex align-items-center mb-1">Olive Delarosa</a>
                                            <div class="fs-12 fw-normal text-muted">olive.delarosa@gmail.com</div>
                                        </div>
                                    </div>
                                    <div class="dropdown hstack text-end justify-content-end">
                                        <a href="javascript:void(0)" class="avatar-text avatar-md" data-bs-toggle="dropdown">
                                            <i class="feather feather-more-vertical"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li>
                                                <a href="javascript:void(0)" class="dropdown-item">
                                                    <i class="feather feather-eye me-3"></i>
                                                    <span>Open</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)" class="dropdown-item">
                                                    <i class="feather feather-share-2 me-3"></i>
                                                    <span>Share</span>
                                                </a>
                                            </li>
                                            <li class="dropdown-divider"></li>
                                            <li>
                                                <a href="javascript:void(0)" class="dropdown-item">
                                                    <i class="feather feather-scissors me-3"></i>
                                                    <span>Backup</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)" class="dropdown-item">
                                                    <i class="feather feather-x me-3"></i>
                                                    <span>Delete</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <a href="javascript:void(0);" class="card-footer fs-11 fw-bold text-uppercase text-center">Refresh</a>
                        </div>
                    </div>
                    <!--! END: [Users] !-->
                    <!--! BEGIN: [Todos] !-->
                    <div class="col-xxl-4 col-lg-6">
                        <div class="card stretch stretch-full">
                            <div class="card-header">
                                <h5 class="card-title">Todos</h5>
                                <div class="card-header-action">
                                    <div class="card-header-btn">
                                        <div data-bs-toggle="tooltip" title="Delete">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-danger" data-bs-toggle="remove"> </a>
                                        </div>
                                        <div data-bs-toggle="tooltip" title="Refresh">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-warning" data-bs-toggle="refresh"> </a>
                                        </div>
                                        <div data-bs-toggle="tooltip" title="Maximize/Minimize">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-success" data-bs-toggle="expand"> </a>
                                        </div>
                                    </div>
                                    <div class="dropdown">
                                        <a href="javascript:void(0);" class="avatar-text avatar-sm" data-bs-toggle="dropdown" data-bs-offset="25, 25">
                                            <div data-bs-toggle="tooltip" title="Options">
                                                <i class="feather-more-vertical"></i>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-at-sign"></i>New</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-calendar"></i>Event</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-bell"></i>Snoozed</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-trash-2"></i>Deleted</a>
                                            <div class="dropdown-divider"></div>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-settings"></i>Settings</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-life-buoy"></i>Tips & Tricks</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body custom-card-action">
                                <div class="d-flex align-items-center">
                                    <div class="me-4">
                                        <h2 class="fs-16 fw-bold mb-0">06:47</h2>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between border-3 border-start border-primary rounded w-100">
                                        <div class="mx-3">
                                            <a href="javascript:void(0);" class="fw-semibold mb-1 text-truncate-1-line">Create a new project for client</a>
                                            <div class="fs-12 fw-normal text-muted text-truncate-1-line">Due in 3 days</div>
                                        </div>
                                        <a href="javascript:void(0);" class="badge bg-soft-primary text-primary">New</a>
                                    </div>
                                </div>
                                <hr class="border-dashed my-3">
                                <div class="d-flex align-items-center">
                                    <div class="me-4">
                                        <h2 class="fs-16 fw-bold mb-0">02:50</h2>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between border-3 border-start border-success rounded w-100">
                                        <div class="mx-3">
                                            <a href="javascript:void(0);" class="fw-semibold mb-1 text-truncate-1-line">Add files to new design folder</a>
                                            <div class="fs-12 fw-normal text-muted text-truncate-1-line">Due in 5 days</div>
                                        </div>
                                        <a href="javascript:void(0);" class="badge bg-soft-success text-success">New</a>
                                    </div>
                                </div>
                                <hr class="border-dashed my-3">
                                <div class="d-flex align-items-center">
                                    <div class="me-4">
                                        <h2 class="fs-16 fw-bold mb-0">03:48</h2>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between border-3 border-start border-dark rounded w-100">
                                        <div class="mx-3">
                                            <a href="javascript:void(0);" class="fw-semibold mb-1 text-truncate-1-line">Shared 2 New Project Files</a>
                                            <div class="fs-12 fw-normal text-muted text-truncate-1-line">Due in 2 days</div>
                                        </div>
                                        <a href="javascript:void(0);" class="badge bg-soft-dark text-dark">New</a>
                                    </div>
                                </div>
                                <hr class="border-dashed my-3">
                                <div class="d-flex align-items-center">
                                    <div class="me-4">
                                        <h2 class="fs-16 fw-bold mb-0">04:35</h2>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between border-3 border-start border-danger rounded w-100">
                                        <div class="mx-3">
                                            <a href="javascript:void(0);" class="fw-semibold mb-1 text-truncate-1-line">Project status updated</a>
                                            <div class="fs-12 fw-normal text-muted text-truncate-1-line">Due in 4 days</div>
                                        </div>
                                        <a href="javascript:void(0);" class="badge bg-soft-danger text-danger">New</a>
                                    </div>
                                </div>
                                <hr class="border-dashed my-3">
                                <div class="d-flex align-items-center">
                                    <div class="me-4">
                                        <h2 class="fs-16 fw-bold mb-0">05:46</h2>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between border-3 border-start border-success rounded w-100">
                                        <div class="mx-3">
                                            <a href="javascript:void(0);" class="fw-semibold mb-1 text-truncate-1-line">Project meeting with john</a>
                                            <div class="fs-12 fw-normal text-muted text-truncate-1-line">Due in 3 days</div>
                                        </div>
                                        <a href="javascript:void(0);" class="badge bg-soft-success text-success">New</a>
                                    </div>
                                </div>
                                <hr class="border-dashed my-3">
                                <div class="d-flex align-items-center mb-2">
                                    <div class="me-4">
                                        <h2 class="fs-16 fw-bold mb-0">06:47</h2>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between border-3 border-start border-warning rounded w-100">
                                        <div class="mx-3">
                                            <a href="javascript:void(0);" class="fw-semibold mb-1 text-truncate-1-line">Create Duralux CRM Logo</a>
                                            <div class="fs-12 fw-normal text-muted text-truncate-1-line">Due in 2 days</div>
                                        </div>
                                        <a href="javascript:void(0);" class="badge bg-soft-warning text-warning">New</a>
                                    </div>
                                </div>
                            </div>
                            <a href="javascript:void(0);" class="card-footer fs-11 fw-bold text-uppercase text-center">Refresh</a>
                        </div>
                    </div>
                    <!--! END: [Todos] !-->
                    <!--! BEGIN: [Trending] !-->
                    <div class="col-xxl-4 col-lg-6">
                        <div class="card stretch stretch-full">
                            <div class="card-header">
                                <h5 class="card-title">Trending</h5>
                                <div class="card-header-action">
                                    <div class="card-header-btn">
                                        <div data-bs-toggle="tooltip" title="Delete">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-danger" data-bs-toggle="remove"> </a>
                                        </div>
                                        <div data-bs-toggle="tooltip" title="Refresh">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-warning" data-bs-toggle="refresh"> </a>
                                        </div>
                                        <div data-bs-toggle="tooltip" title="Maximize/Minimize">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-success" data-bs-toggle="expand"> </a>
                                        </div>
                                    </div>
                                    <div class="dropdown">
                                        <a href="javascript:void(0);" class="avatar-text avatar-sm" data-bs-toggle="dropdown" data-bs-offset="25, 25">
                                            <div data-bs-toggle="tooltip" title="Options">
                                                <i class="feather-more-vertical"></i>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-at-sign"></i>New</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-calendar"></i>Event</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-bell"></i>Snoozed</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-trash-2"></i>Deleted</a>
                                            <div class="dropdown-divider"></div>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-settings"></i>Settings</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-life-buoy"></i>Tips & Tricks</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body custom-card-action">
                                <div class="d-md-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar-text avatar-lg bg-soft-primary text-primary border-soft-primary rounded me-3">
                                            <i class="feather-airplay"></i>
                                        </div>
                                        <div>
                                            <a href="javascript:void(0);">Weekly Bestseller</a>
                                            <p class="fs-12 text-muted mb-0">Mark, Rowling, Esther</p>
                                        </div>
                                    </div>
                                    <div class="mt-2 mt-md-0 text-md-end mg-l-60 ms-md-0">
                                        <a href="javascript:void(0);" class="fw-bold d-block">$99,685</a>
                                        <span class="fs-12 text-muted">698 Sales</span>
                                    </div>
                                </div>
                                <hr class="border-dashed my-3">
                                <div class="d-md-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar-text avatar-lg bg-soft-success text-success border-soft-success rounded me-3">
                                            <i class="feather-award"></i>
                                        </div>
                                        <div>
                                            <a href="javascript:void(0);">Feature Sellers</a>
                                            <p class="fs-12 text-muted mb-0">Randy, Steve, Mike</p>
                                        </div>
                                    </div>
                                    <div class="mt-2 mt-md-0 text-md-end mg-l-60 ms-md-0">
                                        <a href="javascript:void(0);" class="fw-bold d-block">$95,685 </a>
                                        <span class="fs-12 text-muted">457 Sales</span>
                                    </div>
                                </div>
                                <hr class="border-dashed my-3">
                                <div class="d-md-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar-text avatar-lg bg-soft-danger text-danger border-soft-danger rounded me-3">
                                            <i class="feather-user-check"></i>
                                        </div>
                                        <div>
                                            <a href="javascript:void(0);">Popular Authors</a>
                                            <p class="fs-12 text-muted mb-0">John, Pat, Jimmy</p>
                                        </div>
                                    </div>
                                    <div class="mt-2 mt-md-0 text-md-end mg-l-60 ms-md-0">
                                        <a href="javascript:void(0);" class="fw-bold d-block">$90,759 </a>
                                        <span class="fs-12 text-muted">447 Sales</span>
                                    </div>
                                </div>
                                <hr class="border-dashed my-3">
                                <div class="d-md-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar-text avatar-lg bg-soft-warning text-warning border-soft-warning rounded me-3">
                                            <i class="feather-bar-chart-2"></i>
                                        </div>
                                        <div>
                                            <a href="javascript:void(0);">Average Bestseller</a>
                                            <p class="fs-12 text-muted mb-0">John, Pat, Jimmy</p>
                                        </div>
                                    </div>
                                    <div class="mt-2 mt-md-0 text-md-end mg-l-60 ms-md-0">
                                        <a href="javascript:void(0);" class="fw-bold d-block">$92,966 </a>
                                        <span class="fs-12 text-muted">334 Sales</span>
                                    </div>
                                </div>
                                <hr class="border-dashed my-3">
                                <div class="d-md-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar-text avatar-lg bg-soft-indigo text-indigo border-soft-indigo rounded me-3">
                                            <i class="feather-users"></i>
                                        </div>
                                        <div>
                                            <a href="javascript:void(0);">New Sellers</a>
                                            <p class="fs-12 text-muted mb-0">Randy, Steve, Mike</p>
                                        </div>
                                    </div>
                                    <div class="mt-2 mt-md-0 text-md-end mg-l-60 ms-md-0">
                                        <a href="javascript:void(0);" class="fw-bold d-block">$75,478 </a>
                                        <span class="fs-12 text-muted">320 Sales</span>
                                    </div>
                                </div>
                            </div>
                            <a href="javascript:void(0);" class="card-footer fs-11 fw-bold text-uppercase text-center">Refresh</a>
                        </div>
                    </div>
                    <!--! END: [Trending] !-->
                    <!--! BEGIN: [Account] !-->
                    <div class="col-xxl-4 col-lg-6">
                        <div class="card stretch stretch-full">
                            <div class="card-header">
                                <h5 class="card-title">Accounts</h5>
                                <div class="card-header-action">
                                    <div class="card-header-btn">
                                        <div data-bs-toggle="tooltip" title="Delete">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-danger" data-bs-toggle="remove"> </a>
                                        </div>
                                        <div data-bs-toggle="tooltip" title="Refresh">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-warning" data-bs-toggle="refresh"> </a>
                                        </div>
                                        <div data-bs-toggle="tooltip" title="Maximize/Minimize">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-success" data-bs-toggle="expand"> </a>
                                        </div>
                                    </div>
                                    <div class="dropdown">
                                        <a href="javascript:void(0);" class="avatar-text avatar-sm" data-bs-toggle="dropdown" data-bs-offset="25, 25">
                                            <div data-bs-toggle="tooltip" title="Options">
                                                <i class="feather-more-vertical"></i>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-at-sign"></i>New</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-calendar"></i>Event</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-bell"></i>Snoozed</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-trash-2"></i>Deleted</a>
                                            <div class="dropdown-divider"></div>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-settings"></i>Settings</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-life-buoy"></i>Tips & Tricks</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body custom-card-action">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="hstack gap-3 align-items-end">
                                        <img src="https://bestwpware.com/html/tf/assets/images/payment/mastercard.svg" alt="" class="img-fluid wd-50">
                                        <div class="ac-card">
                                            <a href="javascript:void(0);" class="d-block">Mastercard <small class="fw-medium text-muted">($3,365)</small></a>
                                            <small class="fw-normal text-muted">**** **** **** 3456</small>
                                        </div>
                                    </div>
                                    <div class="avatar-text avatar-md">
                                        <i class="feather feather-arrow-right"></i>
                                    </div>
                                </div>
                                <hr class="border-dashed my-3">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="hstack gap-3 align-items-end">
                                        <img src="https://bestwpware.com/html/tf/assets/images/payment/visa.svg" alt="" class="img-fluid wd-50">
                                        <div class="ac-card">
                                            <a href="javascript:void(0);" class="d-block">Visa Card <small class="fw-medium text-muted">($2,245)</small></a>
                                            <small class="fw-normal text-muted">**** **** **** 4236</small>
                                        </div>
                                    </div>
                                    <div class="avatar-text avatar-md">
                                        <i class="feather feather-arrow-right"></i>
                                    </div>
                                </div>
                                <hr class="border-dashed my-3">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="hstack gap-3 align-items-end">
                                        <img src="https://bestwpware.com/html/tf/assets/images/payment/discover.svg" alt="" class="img-fluid wd-50">
                                        <div class="ac-card">
                                            <a href="javascript:void(0);" class="d-block">Discover <small class="fw-medium text-muted">($1,687)</small></a>
                                            <small class="fw-normal text-muted">**** **** **** 5236</small>
                                        </div>
                                    </div>
                                    <div class="avatar-text avatar-md">
                                        <i class="feather feather-arrow-right"></i>
                                    </div>
                                </div>
                                <hr class="border-dashed my-3">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="hstack gap-3 align-items-end">
                                        <img src="https://bestwpware.com/html/tf/assets/images/payment/american-express.svg" alt="" class="img-fluid wd-50">
                                        <div class="ac-card">
                                            <a href="javascript:void(0);" class="d-block">AM Express <small class="fw-medium text-muted">($2,558)</small></a>
                                            <small class="fw-normal text-muted">**** **** **** 4235</small>
                                        </div>
                                    </div>
                                    <div class="avatar-text avatar-md">
                                        <i class="feather feather-arrow-right"></i>
                                    </div>
                                </div>
                                <hr class="border-dashed my-3">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="hstack gap-3 align-items-end">
                                        <img src="https://bestwpware.com/html/tf/assets/images/payment/jcb.svg" alt="" class="img-fluid wd-50">
                                        <div class="ac-card">
                                            <a href="javascript:void(0);" class="d-block">JCB Card <small class="fw-medium text-muted">($2,359)</small></a>
                                            <small class="fw-normal text-muted">**** **** **** 3457</small>
                                        </div>
                                    </div>
                                    <div class="avatar-text avatar-md">
                                        <i class="feather feather-arrow-right"></i>
                                    </div>
                                </div>
                            </div>
                            <a href="javascript:void(0);" class="card-footer fs-11 fw-bold text-uppercase text-center">Refresh</a>
                        </div>
                    </div>
                    <!--! END: [Account] !-->
                    <!--! BEGIN: [Notifications] !-->
                    <div class="col-xxl-4 col-lg-6">
                        <div class="card stretch stretch-full">
                            <div class="card-header">
                                <h5 class="card-title">Notifications</h5>
                                <div class="card-header-action">
                                    <div class="card-header-btn">
                                        <div data-bs-toggle="tooltip" title="Delete">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-danger" data-bs-toggle="remove"> </a>
                                        </div>
                                        <div data-bs-toggle="tooltip" title="Refresh">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-warning" data-bs-toggle="refresh"> </a>
                                        </div>
                                        <div data-bs-toggle="tooltip" title="Maximize/Minimize">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-success" data-bs-toggle="expand"> </a>
                                        </div>
                                    </div>
                                    <div class="dropdown">
                                        <a href="javascript:void(0);" class="avatar-text avatar-sm" data-bs-toggle="dropdown" data-bs-offset="25, 25">
                                            <div data-bs-toggle="tooltip" title="Options">
                                                <i class="feather-more-vertical"></i>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-at-sign"></i>New</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-calendar"></i>Event</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-bell"></i>Snoozed</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-trash-2"></i>Deleted</a>
                                            <div class="dropdown-divider"></div>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-settings"></i>Settings</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-life-buoy"></i>Tips & Tricks</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body custom-card-action">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar-text avatar-lg bg-soft-success text-success border-soft-success rounded">
                                            <i class="feather-shopping-bag"></i>
                                        </div>
                                        <div class="ms-3">
                                            <a href="javascript:void(0);" class="fw-semibold">Best Offers</a>
                                            <div class="fs-12 text-muted fw-normal">Check our best new offers</div>
                                        </div>
                                    </div>
                                    <div class="avatar-text avatar-md">
                                        <i class="feather feather-arrow-right"></i>
                                    </div>
                                </div>
                                <hr class="border-dashed my-3">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar-text avatar-lg bg-soft-primary text-primary border-soft-primary rounded">
                                            <i class="feather-clipboard"></i>
                                        </div>
                                        <div class="ms-3">
                                            <a href="javascript:void(0);" class="fw-semibold">Recent Invoices</a>
                                            <div class="fs-12 text-muted fw-normal">Whole documentations</div>
                                        </div>
                                    </div>
                                    <div class="avatar-text avatar-md">
                                        <i class="feather feather-arrow-right"></i>
                                    </div>
                                </div>
                                <hr class="border-dashed my-3">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar-text avatar-lg bg-soft-warning text-warning border-soft-warning rounded">
                                            <i class="feather-star"></i>
                                        </div>
                                        <div class="ms-3">
                                            <a href="javascript:void(0);" class="fw-semibold">Recent Feedback</a>
                                            <div class="fs-12 text-muted fw-normal">All feeback from your clients</div>
                                        </div>
                                    </div>
                                    <div class="avatar-text avatar-md">
                                        <i class="feather feather-arrow-right"></i>
                                    </div>
                                </div>
                                <hr class="border-dashed my-3">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar-text avatar-lg bg-soft-danger text-danger border-soft-danger rounded">
                                            <i class="feather-message-square"></i>
                                        </div>
                                        <div class="ms-3">
                                            <a href="javascript:void(0);" class="fw-semibold">Support Request</a>
                                            <div class="fs-12 text-muted fw-normal">All request from your clients</div>
                                        </div>
                                    </div>
                                    <div class="avatar-text avatar-md">
                                        <i class="feather feather-arrow-right"></i>
                                    </div>
                                </div>
                                <hr class="border-dashed my-3">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar-text avatar-lg bg-soft-teal text-teal border-soft-teal rounded">
                                            <i class="feather-shopping-cart"></i>
                                        </div>
                                        <div class="ms-3">
                                            <a href="javascript:void(0);" class="fw-semibold">New Order</a>
                                            <div class="fs-12 text-muted fw-normal">All new order from your clients</div>
                                        </div>
                                    </div>
                                    <div class="avatar-text avatar-md">
                                        <i class="feather feather-arrow-right"></i>
                                    </div>
                                </div>
                            </div>
                            <a href="javascript:void(0);" class="card-footer fs-11 fw-bold text-uppercase text-center">Refresh</a>
                        </div>
                    </div>
                    <!--! END: [Notifications] !-->
                    <!--! BEGIN: [Feedback] !-->
                    <div class="col-xxl-4 col-lg-6">
                        <div class="card stretch stretch-full">
                            <div class="card-header">
                                <h5 class="card-title">Feedback</h5>
                                <div class="card-header-action">
                                    <div class="card-header-btn">
                                        <div data-bs-toggle="tooltip" title="Delete">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-danger" data-bs-toggle="remove"> </a>
                                        </div>
                                        <div data-bs-toggle="tooltip" title="Refresh">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-warning" data-bs-toggle="refresh"> </a>
                                        </div>
                                        <div data-bs-toggle="tooltip" title="Maximize/Minimize">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-success" data-bs-toggle="expand"> </a>
                                        </div>
                                    </div>
                                    <div class="dropdown">
                                        <a href="javascript:void(0);" class="avatar-text avatar-sm" data-bs-toggle="dropdown" data-bs-offset="25, 25">
                                            <div data-bs-toggle="tooltip" title="Options">
                                                <i class="feather-more-vertical"></i>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-at-sign"></i>New</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-calendar"></i>Event</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-bell"></i>Snoozed</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-trash-2"></i>Deleted</a>
                                            <div class="dropdown-divider"></div>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-settings"></i>Settings</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-life-buoy"></i>Tips & Tricks</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body custom-card-action">
                                <div class="pd-x-30 pd-y-15 d-flex justify-content-between">
                                    <div class="d-flex">
                                        <div class="avatar-text avatar-lg rounded bg-soft-primary text-primary border-soft-primary">B</div>
                                        <div class="ps-3">
                                            <a href="javascript:void(0);" class="d-block">Bongcaras Owen</a>
                                            <span class="fs-12 text-muted">Clients ID: #963258</span>
                                        </div>
                                    </div>
                                    <div class="text-end">
                                        <div>
                                            <i class="fas fa-star text-warning fs-10"></i>
                                            <i class="fas fa-star text-warning fs-10"></i>
                                            <i class="fas fa-star text-warning fs-10"></i>
                                            <i class="fas fa-star text-warning fs-10"></i>
                                            <i class="fas fa-star text-warning fs-10"></i>
                                        </div>
                                        <span class="fs-10 fw-semibold text-uppercase text-muted">Dec 17, 2023</span>
                                    </div>
                                </div>
                                <hr class="border-dashed my-3">
                                <div class="pd-x-30 pd-t-30 pd-b-15 d-flex justify-content-between">
                                    <div class="d-flex">
                                        <div class="avatar-text avatar-lg rounded bg-soft-warning text-warning border-soft-warning">S</div>
                                        <div class="ps-3">
                                            <a href="javascript:void(0);" class="d-block">Stanley C. Owens</a>
                                            <span class="fs-12 text-muted">Clients ID: #251362</span>
                                        </div>
                                    </div>
                                    <div class="text-end">
                                        <div>
                                            <i class="fas fa-star text-warning fs-10"></i>
                                            <i class="fas fa-star text-warning fs-10"></i>
                                            <i class="fas fa-star text-warning fs-10"></i>
                                            <i class="fas fa-star text-warning fs-10"></i>
                                            <i class="fas fa-star text-warning fs-10"></i>
                                        </div>
                                        <span class="fs-10 fw-semibold text-uppercase text-muted">Dec 17, 2023</span>
                                    </div>
                                </div>
                                <hr class="border-dashed my-3">
                                <div class="pd-x-30 pd-y-15 d-flex justify-content-between">
                                    <div class="d-flex">
                                        <div class="avatar-text avatar-lg rounded bg-soft-info text-info border-soft-info">S</div>
                                        <div class="ps-3">
                                            <a href="javascript:void(0);" class="d-block">Stanley Owens</a>
                                            <span class="fs-12 text-muted">Clients ID: #589647</span>
                                        </div>
                                    </div>
                                    <div class="text-end">
                                        <div>
                                            <i class="fas fa-star text-warning fs-10"></i>
                                            <i class="fas fa-star text-warning fs-10"></i>
                                            <i class="fas fa-star text-warning fs-10"></i>
                                            <i class="fas fa-star text-warning fs-10"></i>
                                            <i class="fas fa-star text-warning fs-10"></i>
                                        </div>
                                        <span class="fs-10 fw-semibold text-uppercase text-muted">Dec 17, 2023</span>
                                    </div>
                                </div>
                                <hr class="border-dashed my-3">
                                <div class="pd-x-30 pd-y-15 d-flex justify-content-between">
                                    <div class="d-flex">
                                        <div class="avatar-text avatar-lg rounded bg-soft-danger text-danger border-soft-danger">E</div>
                                        <div class="ps-3">
                                            <a href="javascript:void(0);" class="d-block">Effery M. Jensen</a>
                                            <span class="fs-12 text-muted">Clients ID: #789654</span>
                                        </div>
                                    </div>
                                    <div class="text-end">
                                        <div>
                                            <i class="fas fa-star text-warning fs-10"></i>
                                            <i class="fas fa-star text-warning fs-10"></i>
                                            <i class="fas fa-star text-warning fs-10"></i>
                                            <i class="fas fa-star text-warning fs-10"></i>
                                            <i class="fas fa-star text-warning fs-10"></i>
                                        </div>
                                        <span class="fs-10 fw-semibold text-uppercase text-muted">Dec 17, 2023</span>
                                    </div>
                                </div>
                                <hr class="border-dashed my-3">
                                <div class="pd-x-30 pd-y-15 d-flex justify-content-between">
                                    <div class="d-flex">
                                        <div class="avatar-text avatar-lg rounded bg-soft-teal text-teal border-soft-teal">A</div>
                                        <div class="ps-3">
                                            <a href="javascript:void(0);" class="d-block">Adam L. Easter</a>
                                            <span class="fs-12 text-muted">Clients ID: #357951</span>
                                        </div>
                                    </div>
                                    <div class="text-end">
                                        <div>
                                            <i class="fas fa-star text-warning fs-10"></i>
                                            <i class="fas fa-star text-warning fs-10"></i>
                                            <i class="fas fa-star text-warning fs-10"></i>
                                            <i class="fas fa-star text-warning fs-10"></i>
                                            <i class="fas fa-star text-warning fs-10"></i>
                                        </div>
                                        <span class="fs-10 fw-semibold text-uppercase text-muted">Dec 17, 2023</span>
                                    </div>
                                </div>
                                <hr class="border-dashed my-3">
                                <div class="pd-x-30 pd-b-30 pd-t-15 d-flex justify-content-between">
                                    <div class="d-flex">
                                        <div class="avatar-text avatar-lg rounded bg-soft-success text-success border-soft-success">O</div>
                                        <div class="ps-3">
                                            <a href="javascript:void(0);" class="d-block">Owens Stanley</a>
                                            <span class="fs-12 text-muted">Clients ID: #589647</span>
                                        </div>
                                    </div>
                                    <div class="text-end">
                                        <div>
                                            <i class="fas fa-star text-warning fs-10"></i>
                                            <i class="fas fa-star text-warning fs-10"></i>
                                            <i class="fas fa-star text-warning fs-10"></i>
                                            <i class="fas fa-star text-warning fs-10"></i>
                                            <i class="fas fa-star text-warning fs-10"></i>
                                        </div>
                                        <span class="fs-10 fw-semibold text-uppercase text-muted">Dec 17, 2023</span>
                                    </div>
                                </div>
                            </div>
                            <a href="javascript:void(0);" class="card-footer fs-11 fw-bold text-uppercase text-center">Refresh</a>
                        </div>
                    </div>
                    <!--! END: [Feedback] !-->
                    <!-- [Activity] start -->
                    <div class="col-xxl-4 col-lg-6">
                        <div class="card stretch stretch-full">
                            <div class="card-header">
                                <h5 class="card-title">Activity</h5>
                                <div class="card-header-action">
                                    <div class="card-header-btn">
                                        <div data-bs-toggle="tooltip" title="Delete">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-danger" data-bs-toggle="remove"> </a>
                                        </div>
                                        <div data-bs-toggle="tooltip" title="Refresh">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-warning" data-bs-toggle="refresh"> </a>
                                        </div>
                                        <div data-bs-toggle="tooltip" title="Maximize/Minimize">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-success" data-bs-toggle="expand"> </a>
                                        </div>
                                    </div>
                                    <div class="dropdown">
                                        <a href="javascript:void(0);" class="avatar-text avatar-sm" data-bs-toggle="dropdown" data-bs-offset="25, 25">
                                            <div data-bs-toggle="tooltip" title="Options">
                                                <i class="feather-more-vertical"></i>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-at-sign"></i>New</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-calendar"></i>Event</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-bell"></i>Snoozed</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-trash-2"></i>Deleted</a>
                                            <div class="dropdown-divider"></div>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-settings"></i>Settings</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-life-buoy"></i>Tips & Tricks</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body custom-card-action">
                                <ul class="list-unstyled mb-0 activity-feed-1">
                                    <li class="feed-item feed-item-primary">
                                        <div class="d-flex gap-4 justify-content-between">
                                            <div>
                                                <div class="mb-2 text-truncate-1-line"><a href="javascript:void(0)" class="fw-semibold text-dark">New orders placed #987456</a></div>
                                                <p class="fs-12 text-muted mb-3 text-truncate-2-line">Duralux is a clean bootstrap admin dashboard, frontend and webapps template pack that built with most popular bootstrap framework and modern technology's.</p>
                                                <div>
                                                    <a href="javascript:void(0)" class="badge text-success border border-dashed border-gray-500">design</a>
                                                    <a href="javascript:void(0)" class="badge text-danger border border-dashed border-gray-500">html</a>
                                                    <a href="javascript:void(0)" class="badge text-warning border border-dashed border-gray-500">css</a>
                                                    <a href="javascript:void(0)" class="badge text-teal border border-dashed border-gray-500">dashboard</a>
                                                </div>
                                            </div>
                                            <div class="fs-10 fw-medium text-uppercase text-muted text-nowrap">5 min ago</div>
                                        </div>
                                    </li>
                                    <li class="feed-item feed-item-success">
                                        <div class="d-flex gap-4 justify-content-between">
                                            <div>
                                                <div class="mb-2 text-truncate-1-line"><a href="javascript:void(0)" class="fw-semibold text-dark">New orders placed #987456</a></div>
                                                <p class="fs-12 text-muted mb-3 text-truncate-2-line">Duralux is a clean bootstrap admin dashboard, frontend and webapps template pack that built with most popular bootstrap framework and modern technology's.</p>
                                                <div>
                                                    <a href="javascript:void(0)" class="badge text-teal border border-dashed border-gray-500">dashboard</a>
                                                    <a href="javascript:void(0)" class="badge text-danger border border-dashed border-gray-500">html</a>
                                                    <a href="javascript:void(0)" class="badge text-success border border-dashed border-gray-500">design</a>
                                                    <a href="javascript:void(0)" class="badge text-warning border border-dashed border-gray-500">css</a>
                                                </div>
                                            </div>
                                            <div class="fs-10 fw-medium text-uppercase text-muted text-nowrap">15 min ago</div>
                                        </div>
                                    </li>
                                    <li class="feed-item feed-item-danger">
                                        <div class="d-flex gap-4 justify-content-between">
                                            <div>
                                                <div class="mb-2 text-truncate-1-line"><a href="javascript:void(0)" class="fw-semibold text-dark">Event start soon #Duralux</a></div>
                                                <p class="fs-12 text-muted mb-3 text-truncate-2-line">Duralux is a clean bootstrap admin dashboard, frontend and webapps template pack that built with most popular bootstrap framework and modern technology's.</p>
                                                <div class="img-group lh-0 ms-2 justify-content-start">
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
                                                    <span class="fs-11 text-muted ms-3 text-truncate-1-line">6.78K+ members connections</span>
                                                </div>
                                            </div>
                                            <div class="fs-10 fw-medium text-uppercase text-muted text-nowrap">10 min ago</div>
                                        </div>
                                    </li>
                                    <li class="feed-item feed-item-success">
                                        <div class="d-flex gap-4 justify-content-between">
                                            <div>
                                                <div class="mb-2 text-truncate-1-line"><a href="javascript:void(0)" class="fw-semibold text-dark">New orders placed #987456</a></div>
                                                <p class="fs-12 text-muted mb-3 text-truncate-2-line">Duralux is a clean bootstrap admin dashboard, frontend and webapps template pack that built with most popular bootstrap framework and modern technology's.</p>
                                                <div>
                                                    <a href="javascript:void(0)" class="badge text-teal border border-dashed border-gray-500">dashboard</a>
                                                    <a href="javascript:void(0)" class="badge text-danger border border-dashed border-gray-500">html</a>
                                                    <a href="javascript:void(0)" class="badge text-success border border-dashed border-gray-500">design</a>
                                                    <a href="javascript:void(0)" class="badge text-warning border border-dashed border-gray-500">css</a>
                                                </div>
                                            </div>
                                            <div class="fs-10 fw-medium text-uppercase text-muted text-nowrap">15 min ago</div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- [Activity] end -->
                    <!--! BEGIN: [Activity-2] !-->
                    <div class="col-xxl-4 col-lg-6">
                        <div class="card stretch stretch-full">
                            <div class="card-header">
                                <h5 class="card-title">Activity-2</h5>
                                <div class="card-header-action">
                                    <div class="card-header-btn">
                                        <div data-bs-toggle="tooltip" title="Delete">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-danger" data-bs-toggle="remove"> </a>
                                        </div>
                                        <div data-bs-toggle="tooltip" title="Refresh">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-warning" data-bs-toggle="refresh"> </a>
                                        </div>
                                        <div data-bs-toggle="tooltip" title="Maximize/Minimize">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-success" data-bs-toggle="expand"> </a>
                                        </div>
                                    </div>
                                    <div class="dropdown">
                                        <a href="javascript:void(0);" class="avatar-text avatar-sm" data-bs-toggle="dropdown" data-bs-offset="25, 25">
                                            <div data-bs-toggle="tooltip" title="Options">
                                                <i class="feather-more-vertical"></i>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-at-sign"></i>New</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-calendar"></i>Event</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-bell"></i>Snoozed</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-trash-2"></i>Deleted</a>
                                            <div class="dropdown-divider"></div>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-settings"></i>Settings</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-life-buoy"></i>Tips & Tricks</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body custom-card-action pb-3">
                                <ul class="list-unstyled activity-feed mb-0">
                                    <li class="d-flex justify-content-between feed-item feed-item-success">
                                        <div>
                                            <span class="text-truncate-1-line lead_date">Reynante placed new order <span class="date">[April 19, 2023]</span></span>
                                            <span class="text">New order placed <a href="javascript:void(0);" class="fw-bold text-primary">#456987</a></span>
                                        </div>
                                        <div class="ms-3 d-flex gap-2 align-items-center">
                                            <a href="javascript:void(0);" class="avatar-text avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Make Read"><i class="feather feather-check fs-12"></i></a>
                                            <a href="javascript:void(0);" class="avatar-text avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="View Activity"><i class="feather feather-eye fs-12"></i></a>
                                            <a href="javascript:void(0);" class="avatar-text avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="More Options"><i class="feather feather-more-vertical"></i></a>
                                        </div>
                                    </li>
                                    <li class="d-flex justify-content-between feed-item feed-item-info">
                                        <div>
                                            <span class="text-truncate-1-line lead_date">5+ friends join this group <span class="date">[April 20, 2023]</span></span>
                                            <span class="text">Joined the group <a href="javascript:void(0);" class="fw-bold text-primary">"Duralux"</a></span>
                                        </div>
                                        <div class="ms-3 d-flex gap-2 align-items-center">
                                            <a href="javascript:void(0);" class="avatar-text avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Make Read"><i class="feather feather-check fs-12"></i></a>
                                            <a href="javascript:void(0);" class="avatar-text avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="View Activity"><i class="feather feather-eye fs-12"></i></a>
                                            <a href="javascript:void(0);" class="avatar-text avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="More Options"><i class="feather feather-more-vertical"></i></a>
                                        </div>
                                    </li>
                                    <li class="d-flex justify-content-between feed-item feed-item-secondary">
                                        <div>
                                            <span class="text-truncate-1-line lead_date">Socrates send you friend request <span class="date">[April 21, 2023]</span></span>
                                            <span class="text">New friend request <a href="javascript:void(0);" class="badge bg-soft-success text-success ms-1">Conform</a></span>
                                        </div>
                                        <div class="ms-3 d-flex gap-2 align-items-center">
                                            <a href="javascript:void(0);" class="avatar-text avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Make Read"><i class="feather feather-check fs-12"></i></a>
                                            <a href="javascript:void(0);" class="avatar-text avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="View Activity"><i class="feather feather-eye fs-12"></i></a>
                                            <a href="javascript:void(0);" class="avatar-text avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="More Options"><i class="feather feather-more-vertical"></i></a>
                                        </div>
                                    </li>
                                    <li class="d-flex justify-content-between feed-item feed-item-warning">
                                        <div>
                                            <span class="text-truncate-1-line lead_date">Reynante make deposit $565 USD <span class="date">[April 22, 2023]</span></span>
                                            <span class="text">Make deposit <a href="javascript:void(0);" class="fw-bold text-primary">$565 USD</a></span>
                                        </div>
                                        <div class="ms-3 d-flex gap-2 align-items-center">
                                            <a href="javascript:void(0);" class="avatar-text avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Make Read"><i class="feather feather-check fs-12"></i></a>
                                            <a href="javascript:void(0);" class="avatar-text avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="View Activity"><i class="feather feather-eye fs-12"></i></a>
                                            <a href="javascript:void(0);" class="avatar-text avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="More Options"><i class="feather feather-more-vertical"></i></a>
                                        </div>
                                    </li>
                                    <li class="d-flex justify-content-between feed-item feed-item-primary">
                                        <div>
                                            <span class="text-truncate-1-line lead_date">New event are coming soon <span class="date">[April 23, 2023]</span></span>
                                            <span class="text">Attending the event <a href="javascript:void(0);" class="fw-bold text-primary">"Duralux Event"</a></span>
                                        </div>
                                        <div class="ms-3 d-flex gap-2 align-items-center">
                                            <a href="javascript:void(0);" class="avatar-text avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Make Read"><i class="feather feather-check fs-12"></i></a>
                                            <a href="javascript:void(0);" class="avatar-text avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="View Activity"><i class="feather feather-eye fs-12"></i></a>
                                            <a href="javascript:void(0);" class="avatar-text avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="More Options"><i class="feather feather-more-vertical"></i></a>
                                        </div>
                                    </li>
                                    <li class="d-flex justify-content-between feed-item feed-item-info">
                                        <div>
                                            <span class="text-truncate-1-line lead_date">5+ friends join this group <span class="date">[April 20, 2023]</span></span>
                                            <span class="text">Joined the group <a href="javascript:void(0);" class="fw-bold text-primary">"Duralux"</a></span>
                                        </div>
                                        <div class="ms-3 d-flex gap-2 align-items-center">
                                            <a href="javascript:void(0);" class="avatar-text avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Make Read"><i class="feather feather-check fs-12"></i></a>
                                            <a href="javascript:void(0);" class="avatar-text avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="View Activity"><i class="feather feather-eye fs-12"></i></a>
                                            <a href="javascript:void(0);" class="avatar-text avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="More Options"><i class="feather feather-more-vertical"></i></a>
                                        </div>
                                    </li>
                                    <li class="d-flex justify-content-between feed-item feed-item-danger">
                                        <div>
                                            <span class="text-truncate-1-line lead_date">New meeting joining are pending <span class="date">[April 23, 2023]</span></span>
                                            <span class="text">Duralux meeting <a href="javascript:void(0);" class="badge bg-soft-warning text-warning ms-1">Join</a></span>
                                        </div>
                                        <div class="ms-3 d-flex gap-2 align-items-center">
                                            <a href="javascript:void(0);" class="avatar-text avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Make Read"><i class="feather feather-check fs-12"></i></a>
                                            <a href="javascript:void(0);" class="avatar-text avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="View Activity"><i class="feather feather-eye fs-12"></i></a>
                                            <a href="javascript:void(0);" class="avatar-text avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="More Options"><i class="feather feather-more-vertical"></i></a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <a href="javascript:void(0);" class="card-footer fs-11 fw-bold text-uppercase text-center">Refresh</a>
                        </div>
                    </div>
                    <!--! END: [Activity-2] !-->
                    <!--! BEGIN: [Profile] !-->
                    <div class="col-xxl-4 col-lg-6">
                        <div class="card stretch stretch-full">
                            <div class="card-body">
                                <div class="mb-4 text-center">
                                    <div class="wd-150 ht-150 mx-auto mb-3 position-relative">
                                        <div class="avatar-image wd-150 ht-150 border border-5 border-gray-3">
                                            <img src="assets/images/avatar/1.png" alt="" class="img-fluid">
                                        </div>
                                        <div class="wd-10 ht-10 text-success rounded-circle position-absolute translate-middle" style="top: 76%; right: 10px">
                                            <i class="bi bi-patch-check-fill"></i>
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <a href="javascript:void(0);" class="fs-14 fw-bold d-block"> Alexandra Della</a>
                                        <a href="javascript:void(0);" class="fs-12 fw-normal text-muted d-block">alex.della@outlook.com</a>
                                    </div>
                                    <div class="fs-12 fw-normal text-muted text-center d-flex flex-wrap gap-3 mb-4 pb-2">
                                        <div class="flex-fill py-3 px-4 rounded-1 d-none d-sm-block border border-dashed border-gray-5">
                                            <h6 class="fs-15 fw-bolder">28.65K</h6>
                                            <p class="fs-12 text-muted mb-0">Followers</p>
                                        </div>
                                        <div class="flex-fill py-3 px-4 rounded-1 d-none d-sm-block border border-dashed border-gray-5">
                                            <h6 class="fs-15 fw-bolder">38.85K</h6>
                                            <p class="fs-12 text-muted mb-0">Following</p>
                                        </div>
                                        <div class="flex-fill py-3 px-4 rounded-1 d-none d-sm-block border border-dashed border-gray-5">
                                            <h6 class="fs-15 fw-bolder">43.67K</h6>
                                            <p class="fs-12 text-muted mb-0">Engagement</p>
                                        </div>
                                    </div>
                                </div>
                                <ul class="list-unstyled mb-4">
                                    <li class="hstack justify-content-between mb-4">
                                        <span class="text-muted fw-medium hstack gap-3"><i class="feather-map-pin"></i>Location</span>
                                        <a href="javascript:void(0);" class="float-end">California, USA</a>
                                    </li>
                                    <li class="hstack justify-content-between mb-4">
                                        <span class="text-muted fw-medium hstack gap-3"><i class="feather-phone"></i>Phone</span>
                                        <a href="javascript:void(0);" class="float-end">+01 (375) 2589 645</a>
                                    </li>
                                    <li class="hstack justify-content-between mb-0">
                                        <span class="text-muted fw-medium hstack gap-3"><i class="feather-mail"></i>Email</span>
                                        <a href="javascript:void(0);" class="float-end">alex.della@outlook.com</a>
                                    </li>
                                </ul>
                                <div class="d-flex gap-2 text-center pt-4">
                                    <a href="javascript:void(0);" class="w-50 btn btn-light-brand">
                                        <i class="feather-trash-2 me-2"></i>
                                        <span>Delete</span>
                                    </a>
                                    <a href="javascript:void(0);" class="w-50 btn btn-primary">
                                        <i class="feather-edit me-2"></i>
                                        <span>Edit Profile</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--! END: [Profile] !-->
                    <!--! BEGIN: [Social] !-->
                    <div class="col-xxl-4 col-lg-6">
                        <div class="card stretch stretch-full">
                            <div class="card-header">
                                <h5 class="card-title">Social</h5>
                                <div class="card-header-action">
                                    <div class="card-header-btn">
                                        <div data-bs-toggle="tooltip" title="Delete">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-danger" data-bs-toggle="remove"> </a>
                                        </div>
                                        <div data-bs-toggle="tooltip" title="Refresh">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-warning" data-bs-toggle="refresh"> </a>
                                        </div>
                                        <div data-bs-toggle="tooltip" title="Maximize/Minimize">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-success" data-bs-toggle="expand"> </a>
                                        </div>
                                    </div>
                                    <div class="dropdown">
                                        <a href="javascript:void(0);" class="avatar-text avatar-sm" data-bs-toggle="dropdown" data-bs-offset="25, 25">
                                            <div data-bs-toggle="tooltip" title="Options">
                                                <i class="feather-more-vertical"></i>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-at-sign"></i>New</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-calendar"></i>Event</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-bell"></i>Snoozed</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-trash-2"></i>Deleted</a>
                                            <div class="dropdown-divider"></div>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-settings"></i>Settings</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-life-buoy"></i>Tips & Tricks</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body custom-card-action">
                                <div class="d-flex align-items-center mb-4 pb-2">
                                    <div class="avatar-text bg-gray-100">
                                        <i class="feather feather-facebook"></i>
                                    </div>
                                    <span class="mx-2 text-gray-400">/</span>
                                    <a href="https://www.facebook.com/wrapcoders" target="_blank" class="text-truncate-1-line">https://www.facebook.com/<span class="text-gray-500">wrapcoders</span></a>
                                    <span class="badge bg-gray-200 text-dark ms-auto">9.47K</span>
                                </div>
                                <div class="d-flex align-items-center mb-4 pb-2">
                                    <div class="avatar-text bg-gray-100">
                                        <i class="feather feather-twitter"></i>
                                    </div>
                                    <span class="mx-2 text-gray-400">/</span>
                                    <a href="https://www.twitter.com/wrapcoders" target="_blank" class="text-truncate-1-line">https://www.twitter.com/<span class="text-gray-500">wrapcoders</span></a>
                                    <span class="badge bg-gray-200 text-dark ms-auto">8.38K</span>
                                </div>
                                <div class="d-flex align-items-center mb-4 pb-2">
                                    <div class="avatar-text bg-gray-100">
                                        <i class="feather feather-github"></i>
                                    </div>
                                    <span class="mx-2 text-gray-400">/</span>
                                    <a href="https://www.github.com/wrapcoders" target="_blank" class="text-truncate-1-line">https://www.github.com/<span class="text-gray-500">wrapcoders</span></a>
                                    <span class="badge bg-gray-200 text-dark ms-auto">4.57K</span>
                                </div>
                                <div class="d-flex align-items-center mb-4 pb-2">
                                    <div class="avatar-text bg-gray-100">
                                        <i class="feather feather-linkedin"></i>
                                    </div>
                                    <span class="mx-2 text-gray-400">/</span>
                                    <a href="https://www.linkedin.com/wrapcoders" target="_blank" class="text-truncate-1-line">https://www.linkedin.com/<span class="text-gray-500">wrapcoders</span></a>
                                    <span class="badge bg-gray-200 text-dark ms-auto">5.68K</span>
                                </div>
                                <div class="d-flex align-items-center mb-4 pb-2">
                                    <div class="avatar-text bg-gray-100">
                                        <i class="feather feather-gitlab"></i>
                                    </div>
                                    <span class="mx-2 text-gray-400">/</span>
                                    <a href="https://www.gitlab.com/wrapcoders" target="_blank" class="text-truncate-1-line">https://www.gitlab.com/<span class="text-gray-500">wrapcoders</span></a>
                                    <span class="badge bg-gray-200 text-dark ms-auto">3.78K</span>
                                </div>
                                <div class="d-flex align-items-center mb-0 pb-2">
                                    <div class="avatar-text bg-gray-100">
                                        <i class="feather feather-figma"></i>
                                    </div>
                                    <span class="mx-2 text-gray-400">/</span>
                                    <a href="https://www.figma.com/wrapcoders" target="_blank" class="text-truncate-1-line">https://www.figma.com/<span class="text-gray-500">wrapcoders</span></a>
                                    <span class="badge bg-gray-200 text-dark ms-auto">2.47K</span>
                                </div>
                            </div>
                            <a href="javascript:void(0);" class="card-footer fs-11 fw-bold text-uppercase text-center hstack justify-content-center">
                                <i class="feather-plus me-2"></i>
                                <span>Add New</span>
                            </a>
                        </div>
                    </div>
                    <!--! END: [Social] !-->
                    <!--! BEGIN: [Suggestions] !-->
                    <div class="col-xxl-4 col-lg-6">
                        <div class="card stretch stretch-full">
                            <div class="card-header">
                                <h5 class="card-title">Suggestions</h5>
                                <div class="card-header-action">
                                    <div class="card-header-btn">
                                        <div data-bs-toggle="tooltip" title="Delete">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-danger" data-bs-toggle="remove"> </a>
                                        </div>
                                        <div data-bs-toggle="tooltip" title="Refresh">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-warning" data-bs-toggle="refresh"> </a>
                                        </div>
                                        <div data-bs-toggle="tooltip" title="Maximize/Minimize">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-success" data-bs-toggle="expand"> </a>
                                        </div>
                                    </div>
                                    <div class="dropdown">
                                        <a href="javascript:void(0);" class="avatar-text avatar-sm" data-bs-toggle="dropdown" data-bs-offset="25, 25">
                                            <div data-bs-toggle="tooltip" title="Options">
                                                <i class="feather-more-vertical"></i>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-at-sign"></i>New</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-calendar"></i>Event</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-bell"></i>Snoozed</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-trash-2"></i>Deleted</a>
                                            <div class="dropdown-divider"></div>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-settings"></i>Settings</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-life-buoy"></i>Tips & Tricks</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body custom-card-action">
                                <div class="d-flex align-items-center">
                                    <div class="avatar-image flex-shrink-0 me-3">
                                        <img src="assets/images/avatar/1.png" class="img-fluid" alt="">
                                    </div>
                                    <div class="flex-grow-1">
                                        <div>
                                            <h5 class="fs-13 mb-1">Alexandra Della</h5>
                                            <p class="fs-12 text-muted mb-0">Frontend Developer</p>
                                        </div>
                                    </div>
                                    <div class="flex-shrink-0 ms-2">
                                        <a href="javascript:void(0);" class="avatar-text avatar-md"><i class="feather feather-user-plus align-middle"></i></a>
                                    </div>
                                </div>
                                <hr class="border-dashed my-3">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0 me-3">
                                        <div class="bg-warning text-white avatar-text">B</div>
                                    </div>
                                    <div class="flex-grow-1">
                                        <div>
                                            <h5 class="fs-13 mb-1">Bryan Waters</h5>
                                            <p class="fs-12 text-muted mb-0">UI/UX Designer</p>
                                        </div>
                                    </div>
                                    <div class="flex-shrink-0 ms-2">
                                        <a href="javascript:void(0);" class="avatar-text avatar-md"><i class="feather feather-user-plus align-middle"></i></a>
                                    </div>
                                </div>
                                <hr class="border-dashed my-3">
                                <div class="d-flex align-items-center">
                                    <div class="avatar-image flex-shrink-0 me-3">
                                        <img src="assets/images/avatar/2.png" class="img-fluid" alt="">
                                    </div>
                                    <div class="flex-grow-1">
                                        <div>
                                            <h5 class="fs-13 mb-1">Curtis Green</h5>
                                            <p class="fs-12 text-muted mb-0">Backend Developer</p>
                                        </div>
                                    </div>
                                    <div class="flex-shrink-0 ms-2">
                                        <a href="javascript:void(0);" class="avatar-text avatar-md"><i class="feather feather-user-plus align-middle"></i></a>
                                    </div>
                                </div>
                                <hr class="border-dashed my-3">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0 me-3">
                                        <div class="bg-danger text-white avatar-text">E</div>
                                    </div>
                                    <div class="flex-grow-1">
                                        <div>
                                            <h5 class="fs-13 mb-1">Edward Andrade</h5>
                                            <p class="fs-12 text-muted mb-0">Fullstack Designer</p>
                                        </div>
                                    </div>
                                    <div class="flex-shrink-0 ms-2">
                                        <a href="javascript:void(0);" class="avatar-text avatar-md"><i class="feather feather-user-plus align-middle"></i></a>
                                    </div>
                                </div>
                                <hr class="border-dashed my-3">
                                <div class="d-flex align-items-center">
                                    <div class="avatar-image flex-shrink-0 me-3">
                                        <img src="assets/images/avatar/3.png" class="img-fluid" alt="">
                                    </div>
                                    <div class="flex-grow-1">
                                        <div>
                                            <h5 class="fs-13 mb-1">Marianne Audrey</h5>
                                            <p class="fs-12 text-muted mb-0">Fullstack Developer</p>
                                        </div>
                                    </div>
                                    <div class="flex-shrink-0 ms-2">
                                        <a href="javascript:void(0);" class="avatar-text avatar-md"><i class="feather feather-user-plus align-middle"></i></a>
                                    </div>
                                </div>
                                <hr class="border-dashed my-3">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0 me-3">
                                        <div class="bg-primary text-white avatar-text">T</div>
                                    </div>
                                    <div class="flex-grow-1">
                                        <div>
                                            <h5 class="fs-13 mb-1">Timothy Boyd</h5>
                                            <p class="fs-12 text-muted mb-0">Fullstack Designer</p>
                                        </div>
                                    </div>
                                    <div class="flex-shrink-0 ms-2">
                                        <a href="javascript:void(0);" class="avatar-text avatar-md"><i class="feather feather-user-plus align-middle"></i></a>
                                    </div>
                                </div>
                            </div>
                            <a href="javascript:void(0);" class="card-footer fs-11 fw-bold text-uppercase text-center">Refresh</a>
                        </div>
                    </div>
                    <!--! END: [Suggestions] !-->
                    <!-- [Browsers] start -->
                    <div class="col-xxl-4 col-lg-6">
                        <div class="card stretch stretch-full">
                            <div class="card-header">
                                <h5 class="card-title">Browsers</h5>
                                <div class="card-header-action">
                                    <div class="card-header-btn">
                                        <div data-bs-toggle="tooltip" title="Collapse/Expand">
                                            <a href="#" class="avatar-text avatar-xs bg-gray-300" data-bs-toggle="collapse"> </a>
                                        </div>
                                        <div data-bs-toggle="tooltip" title="Delete">
                                            <a href="#" class="avatar-text avatar-xs bg-danger" data-bs-toggle="remove"> </a>
                                        </div>
                                        <div data-bs-toggle="tooltip" title="Refresh">
                                            <a href="#" class="avatar-text avatar-xs bg-warning" data-bs-toggle="refresh"> </a>
                                        </div>
                                        <div data-bs-toggle="tooltip" title="Maximize/Minimize">
                                            <a href="#" class="avatar-text avatar-xs bg-success" data-bs-toggle="expand"> </a>
                                        </div>
                                    </div>
                                    <div class="dropdown">
                                        <a href="#" class="avatar-text avatar-sm" data-bs-toggle="dropdown" data-bs-offset="25, 25">
                                            <div data-bs-toggle="tooltip" title="Options">
                                                <i class="feather-more-vertical"></i>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-at-sign"></i>New</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-calendar"></i>Event</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-bell"></i>Snoozed</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-trash-2"></i>Deleted</a>
                                            <div class="dropdown-divider"></div>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-settings"></i>Settings</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-life-buoy"></i>Tips & Tricks</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body custom-card-action p-0">
                                <div class="table-responsive">
                                    <table class="table table-hover mb-0">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <a href="javascript:void(0);">
                                                        <i class="fa-brands fa-chrome fs-16 text-primary me-2"></i>
                                                        <span>Google Chrome</span>
                                                    </a>
                                                </td>
                                                <td>
                                                    <span class="text-end d-flex align-items-center m-0">
                                                        <span class="me-3">90%</span>
                                                        <span class="progress w-100 ht-5">
                                                            <span class="progress-bar bg-success" style="width: 90%"></span>
                                                        </span>
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="javascript:void(0);">
                                                        <i class="fa-brands fa-firefox-browser fs-16 text-warning me-2"></i>
                                                        <span>Mozila Firefox</span>
                                                    </a>
                                                </td>
                                                <td>
                                                    <span class="text-end d-flex align-items-center m-0">
                                                        <span class="me-3">76%</span>
                                                        <span class="progress w-100 ht-5">
                                                            <span class="progress-bar bg-primary" style="width: 76%"></span>
                                                        </span>
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="javascript:void(0);">
                                                        <i class="fa-brands fa-safari fs-16 text-info me-2"></i>
                                                        <span>Apple Safari</span>
                                                    </a>
                                                </td>
                                                <td>
                                                    <span class="text-end d-flex align-items-center m-0">
                                                        <span class="me-3">50%</span>
                                                        <span class="progress w-100 ht-5">
                                                            <span class="progress-bar bg-warning" style="width: 50%"></span>
                                                        </span>
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="javascript:void(0);">
                                                        <i class="fa-brands fa-edge fs-16 text-success me-2"></i>
                                                        <span>Edge Browser</span>
                                                    </a>
                                                </td>
                                                <td>
                                                    <span class="text-end d-flex align-items-center m-0">
                                                        <span class="me-3">20%</span>
                                                        <span class="progress w-100 ht-5">
                                                            <span class="progress-bar bg-success" style="width: 20%"></span>
                                                        </span>
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="javascript:void(0);">
                                                        <i class="fa-brands fa-opera fs-16 text-danger me-2"></i>
                                                        <span>Opera mini</span>
                                                    </a>
                                                </td>
                                                <td>
                                                    <span class="text-end d-flex align-items-center m-0">
                                                        <span class="me-3">15%</span>
                                                        <span class="progress w-100 ht-5">
                                                            <span class="progress-bar bg-danger" style="width: 15%"></span>
                                                        </span>
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="javascript:void(0);">
                                                        <i class="fa-brands fa-internet-explorer fs-16 text-teal me-2"></i>
                                                        <span>Internet Explorer</span>
                                                    </a>
                                                </td>
                                                <td>
                                                    <span class="text-end d-flex align-items-center m-0">
                                                        <span class="me-3">12%</span>
                                                        <span class="progress w-100 ht-5">
                                                            <span class="progress-bar bg-teal" style="width: 12%"></span>
                                                        </span>
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="javascript:void(0);">
                                                        <i class="fa-brands fa-octopus-deploy fs-16 text-dark me-2"></i>
                                                        <span>Others Browser</span>
                                                    </a>
                                                </td>
                                                <td>
                                                    <span class="text-end d-flex align-items-center m-0">
                                                        <span class="me-3">6%</span>
                                                        <span class="progress w-100 ht-5">
                                                            <span class="progress-bar bg-dark" style="width: 6%"></span>
                                                        </span>
                                                    </span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <a href="javascript:void(0);" class="card-footer fs-11 fw-bold text-uppercase text-center">Explore Details</a>
                        </div>
                    </div>
                    <!-- [Browsers] end -->
                    <!-- [Tickets] start -->
                    <div class="col-xxl-4 col-lg-6">
                        <div class="card widget-tickets-content">
                            <div class="card-header">
                                <h5 class="card-title">Tickets</h5>
                                <div class="card-header-action">
                                    <div class="card-header-btn">
                                        <div data-bs-toggle="tooltip" title="Collapse/Expand">
                                            <a href="#" class="avatar-text avatar-xs bg-gray-300" data-bs-toggle="collapse"> </a>
                                        </div>
                                        <div data-bs-toggle="tooltip" title="Delete">
                                            <a href="#" class="avatar-text avatar-xs bg-danger" data-bs-toggle="remove"> </a>
                                        </div>
                                        <div data-bs-toggle="tooltip" title="Refresh">
                                            <a href="#" class="avatar-text avatar-xs bg-warning" data-bs-toggle="refresh"> </a>
                                        </div>
                                        <div data-bs-toggle="tooltip" title="Maximize/Minimize">
                                            <a href="#" class="avatar-text avatar-xs bg-success" data-bs-toggle="expand"> </a>
                                        </div>
                                    </div>
                                    <div class="dropdown">
                                        <a href="#" class="avatar-text avatar-sm" data-bs-toggle="dropdown" data-bs-offset="25, 25">
                                            <div data-bs-toggle="tooltip" title="Options">
                                                <i class="feather-more-vertical"></i>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-at-sign"></i>New</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-calendar"></i>Event</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-bell"></i>Snoozed</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-trash-2"></i>Deleted</a>
                                            <div class="dropdown-divider"></div>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-settings"></i>Settings</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-life-buoy"></i>Tips & Tricks</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body custom-card-action p-0">
                                <div class="table-responsive tickets-items-wrapper">
                                    <table class="table table-hover mb-0">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Ticket</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <a href="javascript:void(0);">#987456</a>
                                                </td>
                                                <td>
                                                    <a href="javascript:void(0);">Meeting with beta testers <span class="fs-12 fw-normal text-muted">(20/02/2023)</span> </a>
                                                    <p class="fs-12 text-muted text-truncate-1-line tickets-sort-desc">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                                                    <div class="tickets-list-action d-flex align-items-center gap-3">
                                                        <a href="javascript:void(0);">View</a>
                                                        <span>|</span>
                                                        <a href="javascript:void(0);">View public form</a>
                                                        <span>|</span>
                                                        <a href="javascript:void(0);">Edit</a>
                                                        <span>|</span>
                                                        <a href="javascript:void(0);" class="text-danger">Delete</a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="javascript:void(0);">#963258</a>
                                                </td>
                                                <td>
                                                    <a href="javascript:void(0);">Live stream for bpl live <span class="fs-12 fw-normal text-muted">(20/02/2023)</span> </a>
                                                    <p class="fs-12 text-muted text-truncate-1-line tickets-sort-desc">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                                                    <div class="tickets-list-action d-flex align-items-center gap-3">
                                                        <a href="javascript:void(0);">View</a>
                                                        <span>|</span>
                                                        <a href="javascript:void(0);">View public form</a>
                                                        <span>|</span>
                                                        <a href="javascript:void(0);">Edit</a>
                                                        <span>|</span>
                                                        <a href="javascript:void(0);" class="text-danger">Delete</a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="javascript:void(0);">#753951</a>
                                                </td>
                                                <td>
                                                    <a href="javascript:void(0);">CEO's private party <span class="fs-12 fw-normal text-muted">(20/02/2023)</span> </a>
                                                    <p class="fs-12 text-muted text-truncate-1-line tickets-sort-desc">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                                                    <div class="tickets-list-action d-flex align-items-center gap-3">
                                                        <a href="javascript:void(0);">View</a>
                                                        <span>|</span>
                                                        <a href="javascript:void(0);">View public form</a>
                                                        <span>|</span>
                                                        <a href="javascript:void(0);">Edit</a>
                                                        <span>|</span>
                                                        <a href="javascript:void(0);" class="text-danger">Delete</a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="javascript:void(0);">#456987</a>
                                                </td>
                                                <td>
                                                    <a href="javascript:void(0);">Duralux public pnnouncement <span class="fs-12 fw-normal text-muted">(20/02/2023)</span> </a>
                                                    <p class="fs-12 text-muted text-truncate-1-line tickets-sort-desc">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                                                    <div class="tickets-list-action d-flex align-items-center gap-3">
                                                        <a href="javascript:void(0);">View</a>
                                                        <span>|</span>
                                                        <a href="javascript:void(0);">View public form</a>
                                                        <span>|</span>
                                                        <a href="javascript:void(0);">Edit</a>
                                                        <span>|</span>
                                                        <a href="javascript:void(0);" class="text-danger">Delete</a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="mb-1">
                                                <td>
                                                    <a href="javascript:void(0);">#369852</a>
                                                </td>
                                                <td>
                                                    <a href="javascript:void(0);">Marketing meeting with clients <span class="fs-12 fw-normal text-muted">(20/02/2023)</span> </a>
                                                    <p class="fs-12 text-muted text-truncate-1-line tickets-sort-desc">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                                                    <div class="tickets-list-action d-flex align-items-center gap-3">
                                                        <a href="javascript:void(0);">View</a>
                                                        <span>|</span>
                                                        <a href="javascript:void(0);">View public form</a>
                                                        <span>|</span>
                                                        <a href="javascript:void(0);">Edit</a>
                                                        <span>|</span>
                                                        <a href="javascript:void(0);" class="text-danger">Delete</a>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- [Tickets] end -->
                    <!-- [Upgrade] start -->
                    <div class="col-xxl-4 col-lg-6">
                        <div class="card stretch stretch-full">
                            <div class="card-body">
                                <div class="p-4 bg-soft-warning rounded-3">
                                    <p class="fs-12 text-dark text-truncate-2-line">Clear memory <strong>46.94 MB</strong> from temporary files. By clearing memory storage reduce loads.</p>
                                    <a href="javascript:void(0);" class="fs-10 text-uppercase text-danger d-flex align-items-center">
                                        <span class="wd-10 ht-10 d-flex align-items-center justify-content-center bg-danger text-white me-2 rounded-circle">
                                            <i class="feather feather-x fs-8"></i>
                                        </span>
                                        <span>Clear Memory</span>
                                    </a>
                                </div>
                                <div class="text-center">
                                    <div class="wd-150 mx-auto my-4">
                                        <img src="assets/images/general/rocket.png" class="img-fluid" alt="">
                                    </div>
                                    <div class="fw-bolder text-uppercase text-dark text-spacing-1">Need more space?</div>
                                    <p class="px-5 fs-12 text-muted text-truncate-2-line">Get more space by upgrading your storage plan today! It's easy to upgrade by click the upgrade button.</p>
                                    <a href="javascript:void(0);" class="btn btn-primary mt-2 d-inline-block mx-auto">Upgrade Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- [Upgrade] end -->
                    <!-- [Upcoming Activities] start -->
                    <div class="col-xxl-6 col-lg-6">
                        <div class="card stretch stretch-full">
                            <div class="card-header">
                                <h5 class="card-title">Upcoming Activities</h5>
                                <div class="card-header-action">
                                    <div class="card-header-btn">
                                        <div data-bs-toggle="tooltip" title="Delete">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-danger" data-bs-toggle="remove"> </a>
                                        </div>
                                        <div data-bs-toggle="tooltip" title="Refresh">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-warning" data-bs-toggle="refresh"> </a>
                                        </div>
                                        <div data-bs-toggle="tooltip" title="Maximize/Minimize">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-success" data-bs-toggle="expand"> </a>
                                        </div>
                                    </div>
                                    <div class="dropdown">
                                        <a href="javascript:void(0);" class="avatar-text avatar-sm" data-bs-toggle="dropdown" data-bs-offset="25, 25">
                                            <div data-bs-toggle="tooltip" title="Options">
                                                <i class="feather-more-vertical"></i>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-at-sign"></i>New</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-calendar"></i>Event</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-bell"></i>Snoozed</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-trash-2"></i>Deleted</a>
                                            <div class="dropdown-divider"></div>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-settings"></i>Settings</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-life-buoy"></i>Tips & Tricks</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body custom-card-action p-0">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        <div class="d-sm-flex justify-content-between">
                                            <div class="hstack gap-3">
                                                <div class="ht-60 wd-60 border bg-gray-200 rounded-3 d-flex flex-column justify-content-center text-center">
                                                    <span class="fs-18 fw-bolder text-dark">20</span>
                                                    <span class="fs-10 text-uppercase">Fri</span>
                                                </div>
                                                <div class="me-4">
                                                    <p class="fs-12 fw-medium text-muted mb-2">09:00 PM - 10:30 PM</p>
                                                    <a href="javascript:void(0);" class="fw-bold text-truncate-1-line">Meeting for campaign with sales team</a>
                                                </div>
                                            </div>
                                            <div class="img-group lh-0 ms-2 justify-content-start d-none d-sm-flex">
                                                <a href="javascript:void(0)" class="avatar-image avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Marianne Audrey">
                                                    <img src="assets/images/avatar/5.png" class="img-fluid" alt="image">
                                                </a>
                                                <a href="javascript:void(0)" class="avatar-image avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Janette Dalton">
                                                    <img src="assets/images/avatar/2.png" class="img-fluid" alt="image">
                                                </a>
                                                <a href="javascript:void(0)" class="avatar-image avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Socrates Itumay">
                                                    <img src="assets/images/avatar/4.png" class="img-fluid" alt="image">
                                                </a>
                                                <a href="javascript:void(0)" class="avatar-image avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Marianne Audrey">
                                                    <img src="assets/images/avatar/6.png" class="img-fluid" alt="image">
                                                </a>
                                                <a href="javascript:void(0)" class="avatar-image avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Michael Ksen">
                                                    <img src="assets/images/avatar/3.png" class="img-fluid" alt="image">
                                                </a>
                                                <a href="javascript:void(0)" class="avatar-text" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Explorer More"> 35+ </a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="d-sm-flex justify-content-between">
                                            <div class="hstack gap-3">
                                                <div class="ht-60 wd-60 border bg-gray-200 rounded-3 d-flex flex-column justify-content-center text-center">
                                                    <span class="fs-18 fw-bolder text-dark">22</span>
                                                    <span class="fs-10 text-uppercase">Sun</span>
                                                </div>
                                                <div class="me-4">
                                                    <p class="fs-12 fw-medium text-muted mb-2">11:00 PM - 12:00 PM</p>
                                                    <a href="javascript:void(0);" class="fw-bold text-truncate-1-line">Meeting for campaign with sales team</a>
                                                </div>
                                            </div>
                                            <div class="img-group lh-0 ms-2 justify-content-start d-none d-sm-flex">
                                                <a href="javascript:void(0)" class="avatar-image avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Michael Ksen">
                                                    <img src="assets/images/avatar/3.png" class="img-fluid" alt="image">
                                                </a>
                                                <a href="javascript:void(0)" class="avatar-image avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Janette Dalton">
                                                    <img src="assets/images/avatar/2.png" class="img-fluid" alt="image">
                                                </a>
                                                <a href="javascript:void(0)" class="avatar-image avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Socrates Itumay">
                                                    <img src="assets/images/avatar/4.png" class="img-fluid" alt="image">
                                                </a>
                                                <a href="javascript:void(0)" class="avatar-image avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Marianne Audrey">
                                                    <img src="assets/images/avatar/6.png" class="img-fluid" alt="image">
                                                </a>
                                                <a href="javascript:void(0)" class="avatar-image avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Marianne Audrey">
                                                    <img src="assets/images/avatar/5.png" class="img-fluid" alt="image">
                                                </a>
                                                <a href="javascript:void(0)" class="avatar-text" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Explorer More"> 24+ </a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="d-sm-flex justify-content-between">
                                            <div class="hstack gap-3">
                                                <div class="ht-60 wd-60 border bg-gray-200 rounded-3 d-flex flex-column justify-content-center text-center">
                                                    <span class="fs-18 fw-bolder text-dark">25</span>
                                                    <span class="fs-10 text-uppercase">Thu</span>
                                                </div>
                                                <div class="me-4">
                                                    <p class="fs-12 fw-medium text-muted mb-2">10:30 PM - 11:30 PM</p>
                                                    <a href="javascript:void(0);" class="fw-bold text-truncate-1-line">Meeting for campaign with sales team</a>
                                                </div>
                                            </div>
                                            <div class="img-group lh-0 ms-2 justify-content-start d-none d-sm-flex">
                                                <a href="javascript:void(0)" class="avatar-image avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Janette Dalton">
                                                    <img src="assets/images/avatar/2.png" class="img-fluid" alt="image">
                                                </a>
                                                <a href="javascript:void(0)" class="avatar-image avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Socrates Itumay">
                                                    <img src="assets/images/avatar/4.png" class="img-fluid" alt="image">
                                                </a>
                                                <a href="javascript:void(0)" class="avatar-image avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Marianne Audrey">
                                                    <img src="assets/images/avatar/6.png" class="img-fluid" alt="image">
                                                </a>
                                                <a href="javascript:void(0)" class="avatar-image avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Marianne Audrey">
                                                    <img src="assets/images/avatar/5.png" class="img-fluid" alt="image">
                                                </a>
                                                <a href="javascript:void(0)" class="avatar-image avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Michael Ksen">
                                                    <img src="assets/images/avatar/3.png" class="img-fluid" alt="image">
                                                </a>
                                                <a href="javascript:void(0)" class="avatar-text" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Explorer More"> 20+ </a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="d-sm-flex justify-content-between">
                                            <div class="hstack gap-3">
                                                <div class="ht-60 wd-60 border bg-gray-200 rounded-3 d-flex flex-column justify-content-center text-center">
                                                    <span class="fs-18 fw-bolder text-dark">28</span>
                                                    <span class="fs-10 text-uppercase">Sun</span>
                                                </div>
                                                <div class="me-4">
                                                    <p class="fs-12 fw-medium text-muted mb-2">11:00 PM - 12:00 PM</p>
                                                    <a href="javascript:void(0);" class="fw-bold text-truncate-1-line">Meeting for campaign with sales team</a>
                                                </div>
                                            </div>
                                            <div class="img-group lh-0 ms-2 justify-content-start d-none d-sm-flex">
                                                <a href="javascript:void(0)" class="avatar-image avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Michael Ksen">
                                                    <img src="assets/images/avatar/3.png" class="img-fluid" alt="image">
                                                </a>
                                                <a href="javascript:void(0)" class="avatar-image avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Janette Dalton">
                                                    <img src="assets/images/avatar/2.png" class="img-fluid" alt="image">
                                                </a>
                                                <a href="javascript:void(0)" class="avatar-image avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Socrates Itumay">
                                                    <img src="assets/images/avatar/4.png" class="img-fluid" alt="image">
                                                </a>
                                                <a href="javascript:void(0)" class="avatar-image avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Marianne Audrey">
                                                    <img src="assets/images/avatar/6.png" class="img-fluid" alt="image">
                                                </a>
                                                <a href="javascript:void(0)" class="avatar-image avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Marianne Audrey">
                                                    <img src="assets/images/avatar/5.png" class="img-fluid" alt="image">
                                                </a>
                                                <a href="javascript:void(0)" class="avatar-text" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Explorer More"> 24+ </a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="d-sm-flex justify-content-between">
                                            <div class="hstack gap-3">
                                                <div class="ht-60 wd-60 border bg-gray-200 rounded-3 d-flex flex-column justify-content-center text-center">
                                                    <span class="fs-18 fw-bolder text-dark">30</span>
                                                    <span class="fs-10 text-uppercase">Thu</span>
                                                </div>
                                                <div class="me-4">
                                                    <p class="fs-12 fw-medium text-muted mb-2">10:30 PM - 11:30 PM</p>
                                                    <a href="javascript:void(0);" class="fw-bold text-truncate-1-line">Meeting for campaign with sales team</a>
                                                </div>
                                            </div>
                                            <div class="img-group lh-0 ms-2 justify-content-start d-none d-sm-flex">
                                                <a href="javascript:void(0)" class="avatar-image avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Janette Dalton">
                                                    <img src="assets/images/avatar/2.png" class="img-fluid" alt="image">
                                                </a>
                                                <a href="javascript:void(0)" class="avatar-image avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Socrates Itumay">
                                                    <img src="assets/images/avatar/4.png" class="img-fluid" alt="image">
                                                </a>
                                                <a href="javascript:void(0)" class="avatar-image avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Marianne Audrey">
                                                    <img src="assets/images/avatar/6.png" class="img-fluid" alt="image">
                                                </a>
                                                <a href="javascript:void(0)" class="avatar-image avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Marianne Audrey">
                                                    <img src="assets/images/avatar/5.png" class="img-fluid" alt="image">
                                                </a>
                                                <a href="javascript:void(0)" class="avatar-image avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Michael Ksen">
                                                    <img src="assets/images/avatar/3.png" class="img-fluid" alt="image">
                                                </a>
                                                <a href="javascript:void(0)" class="avatar-text" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Explorer More"> 20+ </a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <a href="javascript:void(0);" class="card-footer fs-11 fw-bold text-uppercase text-center">Update: 20 Min Ago</a>
                        </div>
                    </div>
                    <!-- [Upcoming Activities] end -->
                    <!-- [Invoice Overview] start -->
                    <div class="col-xxl-6 col-lg-6">
                        <div class="card stretch stretch-full">
                            <div class="card-header">
                                <h5 class="card-title">Invoice Overview</h5>
                                <div class="card-header-action">
                                    <div class="card-header-btn">
                                        <div data-bs-toggle="tooltip" title="Delete">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-danger" data-bs-toggle="remove"> </a>
                                        </div>
                                        <div data-bs-toggle="tooltip" title="Refresh">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-warning" data-bs-toggle="refresh"> </a>
                                        </div>
                                        <div data-bs-toggle="tooltip" title="Maximize/Minimize">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-success" data-bs-toggle="expand"> </a>
                                        </div>
                                    </div>
                                    <div class="dropdown">
                                        <a href="javascript:void(0);" class="avatar-text avatar-sm" data-bs-toggle="dropdown" data-bs-offset="25, 25">
                                            <div data-bs-toggle="tooltip" title="Options">
                                                <i class="feather-more-vertical"></i>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-at-sign"></i>New</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-calendar"></i>Event</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-bell"></i>Snoozed</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-trash-2"></i>Deleted</a>
                                            <div class="dropdown-divider"></div>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-settings"></i>Settings</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-life-buoy"></i>Tips & Tricks</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body custom-card-action p-0">
                                <ul class="nav-tab-items-wrapper nav nav-justified invoice-overview-tab-item">
                                    <li class="nav-item">
                                        <a href="javascript:void(0);" class="nav-link active" data-bs-toggle="tab" data-bs-target="#invoiceTab">Invoice</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="javascript:void(0);" class="nav-link" data-bs-toggle="tab" data-bs-target="#estimateTab">Estimate</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="javascript:void(0);" class="nav-link" data-bs-toggle="tab" data-bs-target="#proposalTab">Proposal</a>
                                    </li>
                                </ul>
                                <div class="tab-content p-4">
                                    <div class="tab-pane fade show active" id="invoiceTab" role="tabpanel" aria-labelledby="invoiceTab">
                                        <div class="mt-4">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <a href="javascript:void(0);" class="fs-12 fw-medium text-muted">Draft (5)</a>
                                                <div class="fs-12 text-muted">23.42%</div>
                                            </div>
                                            <div class="progress mt-2 ht-3">
                                                <div class="progress-bar bg-primary" role="progressbar" style="width: 23%"></div>
                                            </div>
                                        </div>
                                        <div class="mt-4 pt-2">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <a href="javascript:void(0);" class="fs-12 fw-medium text-muted">Not Sent (22)</a>
                                                <div class="fs-12 text-muted">33.86%</div>
                                            </div>
                                            <div class="progress mt-2 ht-3">
                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 33%"></div>
                                            </div>
                                        </div>
                                        <div class="mt-4 pt-2">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <a href="javascript:void(0);" class="fs-12 fw-medium text-muted">Unpaid (8)</a>
                                                <div class="fs-12 text-muted">38.57%</div>
                                            </div>
                                            <div class="progress mt-2 ht-3">
                                                <div class="progress-bar bg-danger" role="progressbar" style="width: 38%"></div>
                                            </div>
                                        </div>
                                        <div class="mt-4 pt-2">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <a href="javascript:void(0);" class="fs-12 fw-medium text-muted">Overdue (4)</a>
                                                <div class="fs-12 text-muted">27.65%</div>
                                            </div>
                                            <div class="progress mt-2 ht-3">
                                                <div class="progress-bar bg-teal" role="progressbar" style="width: 27%"></div>
                                            </div>
                                        </div>
                                        <div class="mt-4 pt-2">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <a href="javascript:void(0);" class="fs-12 fw-medium text-muted">Paid (34)</a>
                                                <div class="fs-12 text-muted">76.89%</div>
                                            </div>
                                            <div class="progress mt-2 ht-3">
                                                <div class="progress-bar bg-success" role="progressbar" style="width: 76%"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="estimateTab" role="tabpanel" aria-labelledby="estimateTab">
                                        <div class="mt-4">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <a href="javascript:void(0);" class="fs-12 fw-medium text-muted">Draft (6)</a>
                                                <div class="fs-12 text-muted">20.42%</div>
                                            </div>
                                            <div class="progress mt-2 ht-3">
                                                <div class="progress-bar bg-primary" role="progressbar" style="width: 20%"></div>
                                            </div>
                                        </div>
                                        <div class="mt-4 pt-2">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <a href="javascript:void(0);" class="fs-12 fw-medium text-muted">Not Sent (32)</a>
                                                <div class="fs-12 text-muted">42.86%</div>
                                            </div>
                                            <div class="progress mt-2 ht-3">
                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 42%"></div>
                                            </div>
                                        </div>
                                        <div class="mt-4 pt-2">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <a href="javascript:void(0);" class="fs-12 fw-medium text-muted">Unpaid (14)</a>
                                                <div class="fs-12 text-muted">55.57%</div>
                                            </div>
                                            <div class="progress mt-2 ht-3">
                                                <div class="progress-bar bg-danger" role="progressbar" style="width: 55%"></div>
                                            </div>
                                        </div>
                                        <div class="mt-4 pt-2">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <a href="javascript:void(0);" class="fs-12 fw-medium text-muted">Overdue (8)</a>
                                                <div class="fs-12 text-muted">35.65%</div>
                                            </div>
                                            <div class="progress mt-2 ht-3">
                                                <div class="progress-bar bg-teal" role="progressbar" style="width: 35%"></div>
                                            </div>
                                        </div>
                                        <div class="mt-4 pt-2">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <a href="javascript:void(0);" class="fs-12 fw-medium text-muted">Paid (30)</a>
                                                <div class="fs-12 text-muted">84.89%</div>
                                            </div>
                                            <div class="progress mt-2 ht-3">
                                                <div class="progress-bar bg-success" role="progressbar" style="width: 84%"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="proposalTab" role="tabpanel" aria-labelledby="proposalTab">
                                        <div class="mt-4">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <a href="javascript:void(0);" class="fs-12 fw-medium text-muted">Draft (2)</a>
                                                <div class="fs-12 text-muted">15.42%</div>
                                            </div>
                                            <div class="progress mt-2 ht-3">
                                                <div class="progress-bar bg-primary" role="progressbar" style="width: 15%"></div>
                                            </div>
                                        </div>
                                        <div class="mt-4 pt-2">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <a href="javascript:void(0);" class="fs-12 fw-medium text-muted">Not Sent (4)</a>
                                                <div class="fs-12 text-muted">30.86%</div>
                                            </div>
                                            <div class="progress mt-2 ht-3">
                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 30%"></div>
                                            </div>
                                        </div>
                                        <div class="mt-4 pt-2">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <a href="javascript:void(0);" class="fs-12 fw-medium text-muted">Unpaid (16)</a>
                                                <div class="fs-12 text-muted">40.57%</div>
                                            </div>
                                            <div class="progress mt-2 ht-3">
                                                <div class="progress-bar bg-danger" role="progressbar" style="width: 40%"></div>
                                            </div>
                                        </div>
                                        <div class="mt-4 pt-2">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <a href="javascript:void(0);" class="fs-12 fw-medium text-muted">Overdue (9)</a>
                                                <div class="fs-12 text-muted">25.65%</div>
                                            </div>
                                            <div class="progress mt-2 ht-3">
                                                <div class="progress-bar bg-teal" role="progressbar" style="width: 25%"></div>
                                            </div>
                                        </div>
                                        <div class="mt-4 pt-2">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <a href="javascript:void(0);" class="fs-12 fw-medium text-muted">Paid (20)</a>
                                                <div class="fs-12 text-muted">65.89%</div>
                                            </div>
                                            <div class="progress mt-2 ht-3">
                                                <div class="progress-bar bg-success" role="progressbar" style="width: 65%"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="px-4 pt-4 border-top">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="card border-dashed">
                                                <div class="card-body">
                                                    <p class="fs-16 fw-bold text-primary mb-2">$2,658 USD</p>
                                                    <p class="text-muted mb-0">Due Invoices</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="card border-dashed">
                                                <div class="card-body">
                                                    <p class="fs-16 fw-bold text-success mb-2">$6,863 USD</p>
                                                    <p class="text-muted mb-0">Paid Invoices</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- [Invoice Overview] end -->
                    <!-- [Project Leads] start -->
                    <div class="col-lg-12">
                        <div class="card stretch stretch-full">
                            <div class="card-header">
                                <h5 class="card-title">Project Leads</h5>
                                <div class="card-header-action">
                                    <div class="card-header-btn">
                                        <div data-bs-toggle="tooltip" title="Delete">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-danger" data-bs-toggle="remove"> </a>
                                        </div>
                                        <div data-bs-toggle="tooltip" title="Refresh">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-warning" data-bs-toggle="refresh"> </a>
                                        </div>
                                        <div data-bs-toggle="tooltip" title="Maximize/Minimize">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-success" data-bs-toggle="expand"> </a>
                                        </div>
                                    </div>
                                    <div class="dropdown">
                                        <a href="javascript:void(0);" class="avatar-text avatar-sm" data-bs-toggle="dropdown" data-bs-offset="25, 25">
                                            <div data-bs-toggle="tooltip" title="Options">
                                                <i class="feather-more-vertical"></i>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-at-sign"></i>New</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-calendar"></i>Event</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-bell"></i>Snoozed</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-trash-2"></i>Deleted</a>
                                            <div class="dropdown-divider"></div>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-settings"></i>Settings</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-life-buoy"></i>Tips & Tricks</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body custom-card-action">
                                <div class="row g-0 align-items-center border border-dashed rounded-3 mb-4">
                                    <div class="col-lg-4">
                                        <div class="d-lg-flex align-items-center">
                                            <div class="m-3 wd-150 d-flex flex-column justify-content-center align-items-center text-center">
                                                <div class="p-3 wd-150 bg-soft-primary text-primary rounded-top">
                                                    <i class="feather-user-plus"></i>
                                                </div>
                                                <div class="p-4 text-white wd-150 bg-primary rounded-bottom">
                                                    <div class="fs-16 fw-bold">5+</div>
                                                    <div class="fs-12 fw-medium">Follow Up</div>
                                                </div>
                                            </div>
                                            <div class="px-3">
                                                <a href="javascript:void(0);" class="fs-14 fw-bold text-truncate-1-line">React admin dashboard design <span class="badge bg-gray-200 text-dark ms-2">#874965</span></a>
                                                <div class="fs-12 mt-3">
                                                    <div class="hstack gap-2 text-muted mb-2">
                                                        <div class="avatar-text avatar-sm">
                                                            <i class="feather-phone-call"></i>
                                                        </div>
                                                        <span class="text-truncate-1-line">+1 (375) 9874 663</span>
                                                    </div>
                                                    <div class="hstack gap-2 text-muted mb-2">
                                                        <div class="avatar-text avatar-sm">
                                                            <i class="feather-mail"></i>
                                                        </div>
                                                        <span class="text-truncate-1-line">support@wrapcoders.com</span>
                                                    </div>
                                                    <div class="hstack gap-2 text-muted mb-3">
                                                        <div class="avatar-text avatar-sm">
                                                            <i class="feather-map-pin"></i>
                                                        </div>
                                                        <span class="text-truncate-1-line">4295 Pheasant Ridge Road, Philadelphia, PA 19131</span>
                                                    </div>
                                                    <a href="javascript:void(0);" class="hstack gap-2 lh-sm">
                                                        <span>
                                                            <i class="feather-more-horizontal"></i>
                                                        </span>
                                                        <span>Show More</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 offset-lg-2 p-3">
                                        <div class="row gy-4 gx-5 align-items-center">
                                            <div class="col-lg-6 col-xl-4">
                                                <div class="mb-4">
                                                    <label class="fs-12 text-muted">Est. Revenue</label>
                                                    <div class="fs-14 fw-bold text-dark">$5,685 USD</div>
                                                </div>
                                                <div class="mb-0">
                                                    <label class="fs-12 text-muted">Sales Rep.</label>
                                                    <div class="img-group lh-0 ms-2 justify-content-start">
                                                        <a href="javascript:void(0)" class="avatar-image avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Marianne Audrey">
                                                            <img src="assets/images/avatar/5.png" class="img-fluid" alt="image">
                                                        </a>
                                                        <a href="javascript:void(0)" class="avatar-image avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Janette Dalton">
                                                            <img src="assets/images/avatar/2.png" class="img-fluid" alt="image">
                                                        </a>
                                                        <a href="javascript:void(0)" class="avatar-image avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Socrates Itumay">
                                                            <img src="assets/images/avatar/4.png" class="img-fluid" alt="image">
                                                        </a>
                                                        <a href="javascript:void(0)" class="avatar-image avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Marianne Audrey">
                                                            <img src="assets/images/avatar/6.png" class="img-fluid" alt="image">
                                                        </a>
                                                        <a href="javascript:void(0)" class="avatar-image avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Michael Ksen">
                                                            <img src="assets/images/avatar/3.png" class="img-fluid" alt="image">
                                                        </a>
                                                        <a href="javascript:void(0)" class="avatar-text" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Explorer More"> 35+ </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-xl-4">
                                                <div class="form-group mb-4">
                                                    <label class="fs-12 text-muted mb-2">Project Info</label>
                                                    <select class="form-control" data-select2-selector="status">
                                                        <option value="primary" data-bg="bg-primary" selected>Inprogress</option>
                                                        <option value="secondary" data-bg="bg-secondary">Pending</option>
                                                        <option value="success" data-bg="bg-success">Completed</option>
                                                        <option value="danger" data-bg="bg-danger">Rejected</option>
                                                        <option value="warning" data-bg="bg-warning">Upcoming</option>
                                                    </select>
                                                </div>
                                                <div class="hstack gap-2">
                                                    <a href="javascript:void(0);" class="avatar-text avatar-md">
                                                        <i class="feather-camera"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" class="avatar-text avatar-md">
                                                        <i class="feather-edit"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" class="avatar-text avatar-md">
                                                        <i class="feather-clipboard"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" class="avatar-text avatar-md">
                                                        <i class="feather-grid"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" class="avatar-text avatar-md">
                                                        <i class="feather-more-vertical"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 d-lg-none d-xl-block">
                                                <div class="lead-progress-1 text-start text-lg-end"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row g-0 align-items-center border border-dashed rounded-3 mb-4">
                                    <div class="col-lg-4">
                                        <div class="d-lg-flex align-items-center">
                                            <div class="m-3 wd-150 d-flex flex-column justify-content-center align-items-center text-center">
                                                <div class="p-3 wd-150 bg-soft-success text-success rounded-top">
                                                    <i class="feather-check-circle"></i>
                                                </div>
                                                <div class="p-4 text-white wd-150 bg-success rounded-bottom">
                                                    <div class="fs-16 fw-bold">15+</div>
                                                    <div class="fs-12 fw-medium">Completed</div>
                                                </div>
                                            </div>
                                            <div class="px-3">
                                                <a href="javascript:void(0);" class="fs-14 fw-bold text-truncate-1-line">React admin dashboard design <span class="badge bg-gray-200 text-dark ms-2">#963245</span></a>
                                                <div class="fs-12 mt-3">
                                                    <div class="hstack gap-2 text-muted mb-2">
                                                        <div class="avatar-text avatar-sm">
                                                            <i class="feather-phone-call"></i>
                                                        </div>
                                                        <span class="text-truncate-1-line">+1 (951) 6547 862</span>
                                                    </div>
                                                    <div class="hstack gap-2 text-muted mb-2">
                                                        <div class="avatar-text avatar-sm">
                                                            <i class="feather-mail"></i>
                                                        </div>
                                                        <span class="text-truncate-1-line">support@wrapcoders.com</span>
                                                    </div>
                                                    <div class="hstack gap-2 text-muted mb-3">
                                                        <div class="avatar-text avatar-sm">
                                                            <i class="feather-map-pin"></i>
                                                        </div>
                                                        <span class="text-truncate-1-line">1362 Emerson Road, Doyline, LA 71023</span>
                                                    </div>
                                                    <a href="javascript:void(0);" class="hstack gap-2 lh-sm">
                                                        <span>
                                                            <i class="feather-more-horizontal"></i>
                                                        </span>
                                                        <span>Show More</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 offset-lg-2 p-3">
                                        <div class="row gy-4 gx-5 align-items-center">
                                            <div class="col-lg-6 col-xl-4">
                                                <div class="mb-4">
                                                    <label class="fs-12 text-muted">Est. Revenue</label>
                                                    <div class="fs-14 fw-bold text-dark">$6,500 USD</div>
                                                </div>
                                                <div class="mb-0">
                                                    <label class="fs-12 text-muted">Sales Rep.</label>
                                                    <div class="img-group lh-0 ms-2 justify-content-start">
                                                        <a href="javascript:void(0)" class="avatar-image avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Marianne Audrey">
                                                            <img src="assets/images/avatar/5.png" class="img-fluid" alt="image">
                                                        </a>
                                                        <a href="javascript:void(0)" class="avatar-image avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Janette Dalton">
                                                            <img src="assets/images/avatar/2.png" class="img-fluid" alt="image">
                                                        </a>
                                                        <a href="javascript:void(0)" class="avatar-image avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Socrates Itumay">
                                                            <img src="assets/images/avatar/4.png" class="img-fluid" alt="image">
                                                        </a>
                                                        <a href="javascript:void(0)" class="avatar-image avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Marianne Audrey">
                                                            <img src="assets/images/avatar/6.png" class="img-fluid" alt="image">
                                                        </a>
                                                        <a href="javascript:void(0)" class="avatar-image avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Michael Ksen">
                                                            <img src="assets/images/avatar/3.png" class="img-fluid" alt="image">
                                                        </a>
                                                        <a href="javascript:void(0)" class="avatar-text" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Explorer More"> 35+ </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-xl-4">
                                                <div class="form-group mb-4">
                                                    <label class="fs-12 text-muted mb-2">Project Info</label>
                                                    <select class="form-control" data-select2-selector="status">
                                                        <option value="primary" data-bg="bg-primary">Inprogress</option>
                                                        <option value="secondary" data-bg="bg-secondary">Pending</option>
                                                        <option value="success" data-bg="bg-success" selected>Completed</option>
                                                        <option value="danger" data-bg="bg-danger">Rejected</option>
                                                        <option value="warning" data-bg="bg-warning">Upcoming</option>
                                                    </select>
                                                </div>
                                                <div class="hstack gap-2">
                                                    <a href="javascript:void(0);" class="avatar-text avatar-md">
                                                        <i class="feather-camera"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" class="avatar-text avatar-md">
                                                        <i class="feather-edit"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" class="avatar-text avatar-md">
                                                        <i class="feather-clipboard"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" class="avatar-text avatar-md">
                                                        <i class="feather-grid"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" class="avatar-text avatar-md">
                                                        <i class="feather-more-vertical"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 d-lg-none d-xl-block">
                                                <div class="lead-progress-2 text-start text-lg-end"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row g-0 align-items-center border border-dashed rounded-3 mb-0">
                                    <div class="col-lg-4">
                                        <div class="d-lg-flex align-items-center">
                                            <div class="m-3 wd-150 d-flex flex-column justify-content-center align-items-center text-center">
                                                <div class="p-3 wd-150 bg-soft-warning text-warning rounded-top">
                                                    <i class="feather-eye"></i>
                                                </div>
                                                <div class="p-4 text-white wd-150 bg-warning rounded-bottom">
                                                    <div class="fs-16 fw-bold">2+</div>
                                                    <div class="fs-12 fw-medium">Upcomming</div>
                                                </div>
                                            </div>
                                            <div class="px-3">
                                                <a href="javascript:void(0);" class="fs-14 fw-bold text-truncate-1-line">React admin dashboard design <span class="badge bg-gray-200 text-dark ms-2">#953684</span></a>
                                                <div class="fs-12 mt-3">
                                                    <div class="hstack gap-2 text-muted mb-2">
                                                        <div class="avatar-text avatar-sm">
                                                            <i class="feather-phone-call"></i>
                                                        </div>
                                                        <span class="text-truncate-1-line">+1 (856) 6548 963</span>
                                                    </div>
                                                    <div class="hstack gap-2 text-muted mb-2">
                                                        <div class="avatar-text avatar-sm">
                                                            <i class="feather-mail"></i>
                                                        </div>
                                                        <span class="text-truncate-1-line">support@wrapcoders.com</span>
                                                    </div>
                                                    <div class="hstack gap-2 text-muted mb-3">
                                                        <div class="avatar-text avatar-sm">
                                                            <i class="feather-map-pin"></i>
                                                        </div>
                                                        <span class="text-truncate-1-line">139 Ethels Lane, Okeechobee, FL 33472</span>
                                                    </div>
                                                    <a href="javascript:void(0);" class="hstack gap-2 lh-sm">
                                                        <span>
                                                            <i class="feather-more-horizontal"></i>
                                                        </span>
                                                        <span>Show More</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 offset-lg-2 p-3">
                                        <div class="row gy-4 gx-5 align-items-center">
                                            <div class="col-lg-6 col-xl-4">
                                                <div class="mb-4">
                                                    <label class="fs-12 text-muted">Est. Revenue</label>
                                                    <div class="fs-14 fw-bold text-dark">$3,500 USD</div>
                                                </div>
                                                <div class="mb-0">
                                                    <label class="fs-12 text-muted">Sales Rep.</label>
                                                    <div class="img-group lh-0 ms-2 justify-content-start">
                                                        <a href="javascript:void(0)" class="avatar-image avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Marianne Audrey">
                                                            <img src="assets/images/avatar/5.png" class="img-fluid" alt="image">
                                                        </a>
                                                        <a href="javascript:void(0)" class="avatar-image avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Janette Dalton">
                                                            <img src="assets/images/avatar/2.png" class="img-fluid" alt="image">
                                                        </a>
                                                        <a href="javascript:void(0)" class="avatar-image avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Socrates Itumay">
                                                            <img src="assets/images/avatar/4.png" class="img-fluid" alt="image">
                                                        </a>
                                                        <a href="javascript:void(0)" class="avatar-image avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Marianne Audrey">
                                                            <img src="assets/images/avatar/6.png" class="img-fluid" alt="image">
                                                        </a>
                                                        <a href="javascript:void(0)" class="avatar-image avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Michael Ksen">
                                                            <img src="assets/images/avatar/3.png" class="img-fluid" alt="image">
                                                        </a>
                                                        <a href="javascript:void(0)" class="avatar-text" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Explorer More"> 35+ </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-xl-4">
                                                <div class="form-group mb-4">
                                                    <label class="fs-12 text-muted mb-2">Project Info</label>
                                                    <select class="form-control" data-select2-selector="status">
                                                        <option value="primary" data-bg="bg-primary">Inprogress</option>
                                                        <option value="secondary" data-bg="bg-secondary">Pending</option>
                                                        <option value="success" data-bg="bg-success">Completed</option>
                                                        <option value="danger" data-bg="bg-danger">Rejected</option>
                                                        <option value="warning" data-bg="bg-warning" selected>Upcoming</option>
                                                    </select>
                                                </div>
                                                <div class="hstack gap-2">
                                                    <a href="javascript:void(0);" class="avatar-text avatar-md">
                                                        <i class="feather-camera"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" class="avatar-text avatar-md">
                                                        <i class="feather-edit"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" class="avatar-text avatar-md">
                                                        <i class="feather-clipboard"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" class="avatar-text avatar-md">
                                                        <i class="feather-grid"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" class="avatar-text avatar-md">
                                                        <i class="feather-more-vertical"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 d-lg-none d-xl-block">
                                                <div class="lead-progress-3 text-start text-lg-end"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- [Project Leads ] end -->
                </div>
            </div>
            <!-- [ Main Content ] end -->
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
    </main>
    
@endsection