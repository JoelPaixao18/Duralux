@extends('applications.notes.layout.main')

@section('content-notes')

 <!--! ================================================================ !-->
    <!--! [Start] Main Content !-->
    <!--! ================================================================ !-->
    <main class="nxl-container apps-container apps-notes">
        <div class="nxl-content without-header nxl-full-content">
            <!-- [ Main Content ] start -->
            <div class="main-content d-flex">
                <!-- [ Content Sidebar ] start -->
                <div class="content-sidebar content-sidebar-md" data-scrollbar-target="#psScrollbarInit">
                    <div class="content-sidebar-header bg-white sticky-top hstack justify-content-between">
                        <h4 class="fw-bolder mb-0">Notes</h4>
                        <a href="javascript:void(0);" class="app-sidebar-close-trigger d-flex">
                            <i class="feather-x"></i>
                        </a>
                    </div>
                    <div class="content-sidebar-header">
                        <a href="javascript:void(0);" class="btn btn-primary w-100" id="add-notes">
                            <i class="feather-plus me-2"></i>
                            <span>Add Notes</span>
                        </a>
                    </div>
                    <div class="content-sidebar-body">
                        <ul class="nav d-flex flex-column nxl-content-sidebar-item">
                            <li class="nav-item">
                                <a href="javascript:void(0)" class="nav-link note-link active" id="all-category">
                                    <i class="feather-layers"></i>
                                    <span>Alls</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="javascript:void(0)" class="nav-link note-link" id="note-tasks">
                                    <i class="feather-check-circle"></i>
                                    <span>Tasks</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="javascript:void(0)" class="nav-link note-link" id="note-works">
                                    <i class="feather-tool"></i>
                                    <span>Works</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="javascript:void(0)" class="nav-link note-link" id="note-social">
                                    <i class="feather-cast"></i>
                                    <span>Social</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="javascript:void(0)" class="nav-link note-link" id="note-archive">
                                    <i class="feather-archive"></i>
                                    <span>Archive</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="javascript:void(0)" class="nav-link note-link" id="note-priority">
                                    <i class="feather-command"></i>
                                    <span>Priority</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="javascript:void(0)" class="nav-link note-link" id="note-personal">
                                    <i class="feather-user"></i>
                                    <span>Personal</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="javascript:void(0)" class="nav-link note-link" id="note-business">
                                    <i class="feather-briefcase"></i>
                                    <span>Business</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="javascript:void(0)" class="nav-link note-link" id="note-important">
                                    <i class="feather-star"></i>
                                    <span>Important</span>
                                </a>
                            </li>
                        </ul>
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
                            <div class="dropdown">
                                <a href="javascript:void(0)" class="btn btn-light-brand dropdown-toggle" data-bs-toggle="dropdown" data-bs-offset="0,18">Project Notes</a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li><a class="dropdown-item" href="javascript:void(0)">All Notes</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0)">Lead Notes</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0)">Client Notes</a></li>
                                    <li><a class="dropdown-item active" href="javascript:void(0)">Project Notes</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0)">Meeting Notes</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0)">Personal Notes</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0)">Customer Notes</a></li>
                                </ul>
                            </div>
                            <div class="dropdown">
                                <a href="javascript:void(0)" class="avatar-text avatar-md" data-bs-toggle="dropdown" data-bs-offset="0,22">
                                    <i class="feather-eye"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item" href="javascript:void(0)">
                                            <i class="feather-eye me-3"></i>
                                            <span>Read</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="javascript:void(0)">
                                            <i class="feather-eye-off me-3"></i>
                                            <span>Unread</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="javascript:void(0)">
                                            <i class="feather-star me-3"></i>
                                            <span>Starred</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="javascript:void(0)">
                                            <i class="feather-shield-off me-3"></i>
                                            <span>Unstarred</span>
                                        </a>
                                    </li>
                                    <li class="dropdown-divider"></li>
                                    <li>
                                        <a class="dropdown-item" href="javascript:void(0)">
                                            <i class="feather-clock me-3"></i>
                                            <span>Snooze</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="javascript:void(0)">
                                            <i class="feather-check-circle me-3"></i>
                                            <span>Add Tasks</span>
                                        </a>
                                    </li>
                                    <li class="dropdown-divider"></li>
                                    <li>
                                        <a class="dropdown-item" href="javascript:void(0)">
                                            <i class="feather-archive me-3"></i>
                                            <span>Archive</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="javascript:void(0)">
                                            <i class="feather-alert-octagon me-3"></i>
                                            <span>Report Spam</span>
                                        </a>
                                    </li>
                                    <li class="dropdown-divider"></li>
                                    <li>
                                        <a class="dropdown-item" href="javascript:void(0)">
                                            <i class="feather-trash-2 me-3"></i>
                                            <span>Delete</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="dropdown">
                                <a href="javascript:void(0)" class="d-flex" data-bs-toggle="dropdown" data-bs-offset="0,22" data-bs-auto-close="outside" aria-expanded="false">
                                    <div class="avatar-text avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Tags">
                                        <i class="feather-tag"></i>
                                    </div>
                                </a>
                                <div class="dropdown-menu">
                                    <div class="dropdown-item">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="Office" checked="checked">
                                            <label class="custom-control-label c-pointer" for="Office">Office</label>
                                        </div>
                                    </div>
                                    <div class="dropdown-item">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="Family">
                                            <label class="custom-control-label c-pointer" for="Family">Family</label>
                                        </div>
                                    </div>
                                    <div class="dropdown-item">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="Friend" checked="checked">
                                            <label class="custom-control-label c-pointer" for="Friend">Friend</label>
                                        </div>
                                    </div>
                                    <div class="dropdown-item">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="Marketplace">
                                            <label class="custom-control-label c-pointer" for="Marketplace"> Marketplace </label>
                                        </div>
                                    </div>
                                    <div class="dropdown-item">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="Development">
                                            <label class="custom-control-label c-pointer" for="Development"> Development </label>
                                        </div>
                                    </div>
                                    <div class="dropdown-divider"></div>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <i class="feather-plus me-3"></i>
                                        <span>Create Tag</span>
                                    </a>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <i class="feather-tag me-3"></i>
                                        <span>Manages Tag</span>
                                    </a>
                                </div>
                            </div>
                            <div class="dropdown">
                                <a href="javascript:void(0)" class="d-flex" data-bs-toggle="dropdown" data-bs-offset="0,22" data-bs-auto-close="outside" aria-expanded="false">
                                    <div class="avatar-text avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Labels">
                                        <i class="feather-folder-plus"></i>
                                    </div>
                                </a>
                                <div class="dropdown-menu">
                                    <div class="dropdown-item">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="Updates">
                                            <label class="custom-control-label c-pointer" for="Updates">Updates</label>
                                        </div>
                                    </div>
                                    <div class="dropdown-item">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="Socials">
                                            <label class="custom-control-label c-pointer" for="Socials">Socials</label>
                                        </div>
                                    </div>
                                    <div class="dropdown-item">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="Primary" checked="checked">
                                            <label class="custom-control-label c-pointer" for="Primary">Primary</label>
                                        </div>
                                    </div>
                                    <div class="dropdown-item">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="Forums">
                                            <label class="custom-control-label c-pointer" for="Forums">Forums</label>
                                        </div>
                                    </div>
                                    <div class="dropdown-item">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="Promotions" checked="checked">
                                            <label class="custom-control-label c-pointer" for="Promotions"> Promotions </label>
                                        </div>
                                    </div>
                                    <div class="dropdown-divider"></div>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <i class="feather-plus me-3"></i>
                                        <span>Create Label</span>
                                    </a>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <i class="feather-folder-plus me-3"></i>
                                        <span>Manages Label</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="page-header-right ms-auto">
                            <div class="hstack gap-2">
                                <div class="hstack">
                                    <a href="javascript:void(0)" class="search-form-open-toggle">
                                        <div class="avatar-text avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Search">
                                            <i class="feather feather-search"></i>
                                        </div>
                                    </a>
                                    <form class="search-form" style="display: none">
                                        <div class="search-form-inner">
                                            <a href="javascript:void(0)" class="search-form-close-toggle">
                                                <div class="avatar-text avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Search Close">
                                                    <i class="feather feather-arrow-left"></i>
                                                </div>
                                            </a>
                                            <input type="search" class="py-3 px-0 border-0 w-100" id="notesSearch" placeholder="Search...">
                                        </div>
                                    </form>
                                </div>
                                <a href="javascript:void(0)" class="d-none d-sm-flex">
                                    <div class="avatar-text avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Newest">
                                        <i class="feather feather-chevron-left"></i>
                                    </div>
                                </a>
                                <a href="javascript:void(0)" class="d-none d-sm-flex">
                                    <div class="avatar-text avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Oldest">
                                        <i class="feather feather-chevron-right"></i>
                                    </div>
                                </a>
                                <div class="dropdown d-none d-sm-flex">
                                    <a href="javascript:void(0)" class="btn btn-light-brand btn-sm rounded-pill dropdown-toggle" data-bs-toggle="dropdown" data-bs-offset="0,23">Newest</a>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li><a class="dropdown-item" href="javascript:void(0)">Title</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0)">Priority</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0)">Category</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0)">Time & Date</a></li>
                                        <li class="dropdown-divider"></li>
                                        <li><a class="dropdown-item active" href="javascript:void(0)">Newest</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0)">Oldest</a></li>
                                        <li class="dropdown-divider"></li>
                                        <li><a class="dropdown-item" href="javascript:void(0)">Ascending</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0)">Descending</a></li>
                                    </ul>
                                </div>
                                <div class="dropdown d-none d-sm-flex">
                                    <a href="javascript:void(0)" class="d-flex" data-bs-toggle="dropdown" data-bs-offset="0,22" data-bs-auto-close="outside">
                                        <div class="avatar-text avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="More Options">
                                            <i class="feather feather-more-vertical"></i>
                                        </div>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a href="javascript:void(0);" class="dropdown-item">
                                            <i class="feather feather-plus me-3"></i>
                                            <span>Add to Group</span>
                                        </a>
                                        <a href="javascript:void(0);" class="dropdown-item">
                                            <i class="feather feather-user-plus me-3"></i>
                                            <span>Add to Contact</span>
                                        </a>
                                        <a href="javascript:void(0);" class="dropdown-item">
                                            <i class="feather feather-eye-off me-3"></i>
                                            <span>Make as Unread</span>
                                        </a>
                                        <a href="javascript:void(0);" class="dropdown-item">
                                            <i class="feather feather-sliders me-3"></i>
                                            <span>Filter Messages</span>
                                        </a>
                                        <a href="javascript:void(0);" class="dropdown-item">
                                            <i class="feather feather-archive me-3"></i>
                                            <span>Make as Archive</span>
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a href="javascript:void(0);" class="dropdown-item">
                                            <i class="feather feather-slash me-3"></i>
                                            <span>Report Spam</span>
                                        </a>
                                        <a href="javascript:void(0);" class="dropdown-item">
                                            <i class="feather feather-sliders me-3"></i>
                                            <span>Report phishing</span>
                                        </a>
                                        <a href="javascript:void(0);" class="dropdown-item">
                                            <i class="feather feather-download me-3"></i>
                                            <span>Download Messages</span>
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a href="javascript:void(0);" class="dropdown-item">
                                            <i class="feather feather-bell-off me-3"></i>
                                            <span>Mute Conversion</span>
                                        </a>
                                        <a href="javascript:void(0);" class="dropdown-item">
                                            <i class="feather feather-slash me-3"></i>
                                            <span>Block Conversion</span>
                                        </a>
                                        <a href="javascript:void(0);" class="dropdown-item">
                                            <i class="feather feather-trash-2 me-3"></i>
                                            <span>Delete Conversion</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content-area-body pb-0">
                        <div class="row note-has-grid" id="note-full-container">
                            <!--! BEGIN: [Single Note Item] !-->
                            <div class="col-xxl-4 col-xl-6 col-lg-4 col-sm-6 single-note-item all-category note-important note-tasks">
                                <div class="card card-body mb-4 stretch stretch-full">
                                    <span class="side-stick"></span>
                                    <h5 class="note-title text-truncate w-75 mb-1" data-noteheading="Book a Ticket for Movie">Book a Ticket for Movie <i class="point bi bi-circle-fill ms-1 fs-7"></i></h5>
                                    <p class="fs-11 text-muted note-date">11 March 2023</p>
                                    <div class="note-content flex-grow-1">
                                        <p class="text-muted note-inner-content text-truncate-3-line" data-notecontent="Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis vitae iure, quo harum excepturi laudantium eum earum accusantium labore libero maiores illo soluta.">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis vitae iure, quo harum excepturi laudantium eum earum accusantium labore libero maiores illo soluta.</p>
                                    </div>
                                    <div class="d-flex align-items-center gap-1">
                                        <span class="avatar-text avatar-sm"><i class="feather-star favourite-note"></i></span>
                                        <span class="avatar-text avatar-sm"><i class="feather-trash-2 remove-note"></i></span>
                                        <div class="ms-auto">
                                            <div class="dropdown btn-group category-selector">
                                                <a class="nav-link dropdown-toggle category-dropdown label-group p-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="true">
                                                    <div class="category">
                                                        <div class="category-business"></div>
                                                        <div class="category-social"></div>
                                                        <div class="category-important"></div>
                                                    </div>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right category-menu">
                                                    <a class="note-tasks badge-group-item badge-tasks dropdown-item position-relative category-tasks" href="javascript:void(0);"><span class="wd-5 ht-5 bg-danger rounded-circle me-3"></span>Tasks </a>
                                                    <a class="note-works badge-group-item badge-works dropdown-item position-relative category-works" href="javascript:void(0);"><span class="wd-5 ht-5 bg-primary rounded-circle me-3"></span>Works </a>
                                                    <a class="note-social badge-group-item badge-social dropdown-item position-relative category-social" href="javascript:void(0);"><span class="wd-5 ht-5 bg-info rounded-circle me-3"></span>Social </a>
                                                    <a class="note-archive badge-group-item badge-archive dropdown-item position-relative category-archive" href="javascript:void(0);"><span class="wd-5 ht-5 bg-dark rounded-circle me-3"></span>Archive </a>
                                                    <a class="note-priority badge-group-item badge-priority dropdown-item position-relative category-priority" href="javascript:void(0);"><span class="wd-5 ht-5 bg-danger rounded-circle me-3"></span>Priority </a>
                                                    <a class="note-personal badge-group-item badge-personal dropdown-item position-relative category-personal" href="javascript:void(0);"><span class="wd-5 ht-5 bg-primary rounded-circle me-3"></span>Personal </a>
                                                    <a class="note-business badge-group-item badge-business dropdown-item position-relative category-business" href="javascript:void(0);"><span class="wd-5 ht-5 bg-warning rounded-circle me-3"></span>Business </a>
                                                    <a class="note-important badge-group-item badge-important dropdown-item position-relative category-important" href="javascript:void(0);"><span class="wd-5 ht-5 bg-success rounded-circle me-3"></span>Important </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--! BEGIN: [Single Note Item] !-->
                            <div class="col-xxl-4 col-xl-6 col-lg-4 col-sm-6 single-note-item all-category note-important note-archive note-works">
                                <div class="card card-body mb-4 stretch stretch-full">
                                    <span class="side-stick"></span>
                                    <h5 class="note-title text-truncate w-75 mb-1" data-noteheading="Go for lunch">Go for lunch <i class="point bi bi-circle-fill ms-1 fs-7"></i></h5>
                                    <p class="fs-11 text-muted note-date">01 April 2023</p>
                                    <div class="note-content flex-grow-1">
                                        <p class="text-muted note-inner-content text-truncate-3-line" data-notecontent="Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis vitae iure, quo harum excepturi laudantium eum earum accusantium labore libero maiores illo soluta.">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis vitae iure, quo harum excepturi laudantium eum earum accusantium labore libero maiores illo soluta.</p>
                                    </div>
                                    <div class="d-flex align-items-center gap-1">
                                        <span class="avatar-text avatar-sm"><i class="feather-star favourite-note"></i></span>
                                        <span class="avatar-text avatar-sm"><i class="feather-trash-2 remove-note"></i></span>
                                        <div class="ms-auto">
                                            <div class="dropdown btn-group category-selector">
                                                <a class="nav-link dropdown-toggle category-dropdown label-group p-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="true">
                                                    <div class="category">
                                                        <div class="category-business"></div>
                                                        <div class="category-social"></div>
                                                        <div class="category-important"></div>
                                                    </div>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right category-menu">
                                                    <a class="note-tasks badge-group-item badge-tasks dropdown-item position-relative category-tasks" href="javascript:void(0);"><span class="wd-5 ht-5 bg-danger rounded-circle me-3"></span>Tasks </a>
                                                    <a class="note-works badge-group-item badge-works dropdown-item position-relative category-works" href="javascript:void(0);"><span class="wd-5 ht-5 bg-primary rounded-circle me-3"></span>Works </a>
                                                    <a class="note-social badge-group-item badge-social dropdown-item position-relative category-social" href="javascript:void(0);"><span class="wd-5 ht-5 bg-info rounded-circle me-3"></span>Social </a>
                                                    <a class="note-archive badge-group-item badge-archive dropdown-item position-relative category-archive" href="javascript:void(0);"><span class="wd-5 ht-5 bg-dark rounded-circle me-3"></span>Archive </a>
                                                    <a class="note-priority badge-group-item badge-priority dropdown-item position-relative category-priority" href="javascript:void(0);"><span class="wd-5 ht-5 bg-danger rounded-circle me-3"></span>Priority </a>
                                                    <a class="note-personal badge-group-item badge-personal dropdown-item position-relative category-personal" href="javascript:void(0);"><span class="wd-5 ht-5 bg-primary rounded-circle me-3"></span>Personal </a>
                                                    <a class="note-business badge-group-item badge-business dropdown-item position-relative category-business" href="javascript:void(0);"><span class="wd-5 ht-5 bg-warning rounded-circle me-3"></span>Business </a>
                                                    <a class="note-important badge-group-item badge-important dropdown-item position-relative category-important" href="javascript:void(0);"><span class="wd-5 ht-5 bg-success rounded-circle me-3"></span>Important </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--! BEGIN: [Single Note Item] !-->
                            <div class="col-xxl-4 col-xl-6 col-lg-4 col-sm-6 single-note-item all-category note-social note-archive note-personal">
                                <div class="card card-body mb-4 stretch stretch-full">
                                    <span class="side-stick"></span>
                                    <h5 class="note-title text-truncate w-75 mb-1" data-noteheading="Meeting with Mr.Jojo">Meeting with Mr.Jojo <i class="point bi bi-circle-fill ms-1 fs-7"></i></h5>
                                    <p class="fs-11 text-muted note-date">19 October 2023</p>
                                    <div class="note-content flex-grow-1">
                                        <p class="text-muted note-inner-content text-truncate-3-line" data-notecontent="Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis vitae iure, quo harum excepturi laudantium eum earum accusantium labore libero maiores illo soluta.">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis vitae iure, quo harum excepturi laudantium eum earum accusantium labore libero maiores illo soluta.</p>
                                    </div>
                                    <div class="d-flex align-items-center gap-1">
                                        <span class="avatar-text avatar-sm"><i class="feather-star favourite-note"></i></span>
                                        <span class="avatar-text avatar-sm"><i class="feather-trash-2 remove-note"></i></span>
                                        <div class="ms-auto">
                                            <div class="dropdown btn-group category-selector">
                                                <a class="nav-link dropdown-toggle category-dropdown label-group p-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="true">
                                                    <div class="category">
                                                        <div class="category-business"></div>
                                                        <div class="category-social"></div>
                                                        <div class="category-important"></div>
                                                    </div>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right category-menu">
                                                    <a class="note-tasks badge-group-item badge-tasks dropdown-item position-relative category-tasks" href="javascript:void(0);"><span class="wd-5 ht-5 bg-danger rounded-circle me-3"></span>Tasks </a>
                                                    <a class="note-works badge-group-item badge-works dropdown-item position-relative category-works" href="javascript:void(0);"><span class="wd-5 ht-5 bg-primary rounded-circle me-3"></span>Works </a>
                                                    <a class="note-social badge-group-item badge-social dropdown-item position-relative category-social" href="javascript:void(0);"><span class="wd-5 ht-5 bg-info rounded-circle me-3"></span>Social </a>
                                                    <a class="note-archive badge-group-item badge-archive dropdown-item position-relative category-archive" href="javascript:void(0);"><span class="wd-5 ht-5 bg-dark rounded-circle me-3"></span>Archive </a>
                                                    <a class="note-priority badge-group-item badge-priority dropdown-item position-relative category-priority" href="javascript:void(0);"><span class="wd-5 ht-5 bg-danger rounded-circle me-3"></span>Priority </a>
                                                    <a class="note-personal badge-group-item badge-personal dropdown-item position-relative category-personal" href="javascript:void(0);"><span class="wd-5 ht-5 bg-primary rounded-circle me-3"></span>Personal </a>
                                                    <a class="note-business badge-group-item badge-business dropdown-item position-relative category-business" href="javascript:void(0);"><span class="wd-5 ht-5 bg-warning rounded-circle me-3"></span>Business </a>
                                                    <a class="note-important badge-group-item badge-important dropdown-item position-relative category-important" href="javascript:void(0);"><span class="wd-5 ht-5 bg-success rounded-circle me-3"></span>Important </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--! BEGIN: [Single Note Item] !-->
                            <div class="col-xxl-4 col-xl-6 col-lg-4 col-sm-6 single-note-item all-category note-business note-tasks">
                                <div class="card card-body mb-4 stretch stretch-full">
                                    <span class="side-stick"></span>
                                    <h5 class="note-title text-truncate w-75 mb-1" data-noteheading="Give Review for design">Give Review for design <i class="point bi bi-circle-fill ms-1 fs-7"></i></h5>
                                    <p class="fs-11 text-muted note-date">02 January 2023</p>
                                    <div class="note-content flex-grow-1">
                                        <p class="text-muted note-inner-content text-truncate-3-line" data-notecontent="Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis vitae iure, quo harum excepturi laudantium eum earum accusantium labore libero maiores illo soluta.">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis vitae iure, quo harum excepturi laudantium eum earum accusantium labore libero maiores illo soluta.</p>
                                    </div>
                                    <div class="d-flex align-items-center gap-1">
                                        <span class="avatar-text avatar-sm"><i class="feather-star favourite-note"></i></span>
                                        <span class="avatar-text avatar-sm"><i class="feather-trash-2 remove-note"></i></span>
                                        <div class="ms-auto">
                                            <div class="dropdown btn-group category-selector">
                                                <a class="nav-link dropdown-toggle category-dropdown label-group p-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="true">
                                                    <div class="category">
                                                        <div class="category-business"></div>
                                                        <div class="category-social"></div>
                                                        <div class="category-important"></div>
                                                    </div>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right category-menu">
                                                    <a class="note-tasks badge-group-item badge-tasks dropdown-item position-relative category-tasks" href="javascript:void(0);"><span class="wd-5 ht-5 bg-danger rounded-circle me-3"></span>Tasks </a>
                                                    <a class="note-works badge-group-item badge-works dropdown-item position-relative category-works" href="javascript:void(0);"><span class="wd-5 ht-5 bg-primary rounded-circle me-3"></span>Works </a>
                                                    <a class="note-social badge-group-item badge-social dropdown-item position-relative category-social" href="javascript:void(0);"><span class="wd-5 ht-5 bg-info rounded-circle me-3"></span>Social </a>
                                                    <a class="note-archive badge-group-item badge-archive dropdown-item position-relative category-archive" href="javascript:void(0);"><span class="wd-5 ht-5 bg-dark rounded-circle me-3"></span>Archive </a>
                                                    <a class="note-priority badge-group-item badge-priority dropdown-item position-relative category-priority" href="javascript:void(0);"><span class="wd-5 ht-5 bg-danger rounded-circle me-3"></span>Priority </a>
                                                    <a class="note-personal badge-group-item badge-personal dropdown-item position-relative category-personal" href="javascript:void(0);"><span class="wd-5 ht-5 bg-primary rounded-circle me-3"></span>Personal </a>
                                                    <a class="note-business badge-group-item badge-business dropdown-item position-relative category-business" href="javascript:void(0);"><span class="wd-5 ht-5 bg-warning rounded-circle me-3"></span>Business </a>
                                                    <a class="note-important badge-group-item badge-important dropdown-item position-relative category-important" href="javascript:void(0);"><span class="wd-5 ht-5 bg-success rounded-circle me-3"></span>Important </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--! BEGIN: [Single Note Item] !-->
                            <div class="col-xxl-4 col-xl-6 col-lg-4 col-sm-6 single-note-item all-category note-social note-archive">
                                <div class="card card-body mb-4 stretch stretch-full">
                                    <span class="side-stick"></span>
                                    <h5 class="note-title text-truncate w-75 mb-1" data-noteheading="Nightout with friends">Nightout with friends <i class="point bi bi-circle-fill ms-1 fs-7"></i></h5>
                                    <p class="fs-11 text-muted note-date">01 August 2023</p>
                                    <div class="note-content flex-grow-1">
                                        <p class="text-muted note-inner-content text-truncate-3-line" data-notecontent="Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis vitae iure, quo harum excepturi laudantium eum earum accusantium labore libero maiores illo soluta.">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis vitae iure, quo harum excepturi laudantium eum earum accusantium labore libero maiores illo soluta.</p>
                                    </div>
                                    <div class="d-flex align-items-center gap-1">
                                        <span class="avatar-text avatar-sm"><i class="feather-star favourite-note"></i></span>
                                        <span class="avatar-text avatar-sm"><i class="feather-trash-2 remove-note"></i></span>
                                        <div class="ms-auto">
                                            <div class="dropdown btn-group category-selector">
                                                <a class="nav-link dropdown-toggle category-dropdown label-group p-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="true">
                                                    <div class="category">
                                                        <div class="category-business"></div>
                                                        <div class="category-social"></div>
                                                        <div class="category-important"></div>
                                                    </div>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right category-menu">
                                                    <a class="note-tasks badge-group-item badge-tasks dropdown-item position-relative category-tasks" href="javascript:void(0);"><span class="wd-5 ht-5 bg-danger rounded-circle me-3"></span>Tasks </a>
                                                    <a class="note-works badge-group-item badge-works dropdown-item position-relative category-works" href="javascript:void(0);"><span class="wd-5 ht-5 bg-primary rounded-circle me-3"></span>Works </a>
                                                    <a class="note-social badge-group-item badge-social dropdown-item position-relative category-social" href="javascript:void(0);"><span class="wd-5 ht-5 bg-info rounded-circle me-3"></span>Social </a>
                                                    <a class="note-archive badge-group-item badge-archive dropdown-item position-relative category-archive" href="javascript:void(0);"><span class="wd-5 ht-5 bg-dark rounded-circle me-3"></span>Archive </a>
                                                    <a class="note-priority badge-group-item badge-priority dropdown-item position-relative category-priority" href="javascript:void(0);"><span class="wd-5 ht-5 bg-danger rounded-circle me-3"></span>Priority </a>
                                                    <a class="note-personal badge-group-item badge-personal dropdown-item position-relative category-personal" href="javascript:void(0);"><span class="wd-5 ht-5 bg-primary rounded-circle me-3"></span>Personal </a>
                                                    <a class="note-business badge-group-item badge-business dropdown-item position-relative category-business" href="javascript:void(0);"><span class="wd-5 ht-5 bg-warning rounded-circle me-3"></span>Business </a>
                                                    <a class="note-important badge-group-item badge-important dropdown-item position-relative category-important" href="javascript:void(0);"><span class="wd-5 ht-5 bg-success rounded-circle me-3"></span>Important </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--! BEGIN: [Single Note Item] !-->
                            <div class="col-xxl-4 col-xl-6 col-lg-4 col-sm-6 single-note-item all-category note-important note-works">
                                <div class="card card-body mb-4 stretch stretch-full">
                                    <span class="side-stick"></span>
                                    <h5 class="note-title text-truncate w-75 mb-1" data-noteheading="Launch new template">Launch new template <i class="point bi bi-circle-fill ms-1 fs-7"></i></h5>
                                    <p class="fs-11 text-muted note-date">21 January 2023</p>
                                    <div class="note-content flex-grow-1">
                                        <p class="text-muted note-inner-content text-truncate-3-line" data-notecontent="Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis vitae iure, quo harum excepturi laudantium eum earum accusantium labore libero maiores illo soluta.">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis vitae iure, quo harum excepturi laudantium eum earum accusantium labore libero maiores illo soluta.</p>
                                    </div>
                                    <div class="d-flex align-items-center gap-1">
                                        <span class="avatar-text avatar-sm"><i class="feather-star favourite-note"></i></span>
                                        <span class="avatar-text avatar-sm"><i class="feather-trash-2 remove-note"></i></span>
                                        <div class="ms-auto">
                                            <div class="dropdown btn-group category-selector">
                                                <a class="nav-link dropdown-toggle category-dropdown label-group p-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="true">
                                                    <div class="category">
                                                        <div class="category-business"></div>
                                                        <div class="category-social"></div>
                                                        <div class="category-important"></div>
                                                    </div>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right category-menu">
                                                    <a class="note-tasks badge-group-item badge-tasks dropdown-item position-relative category-tasks" href="javascript:void(0);"><span class="wd-5 ht-5 bg-danger rounded-circle me-3"></span>Tasks </a>
                                                    <a class="note-works badge-group-item badge-works dropdown-item position-relative category-works" href="javascript:void(0);"><span class="wd-5 ht-5 bg-primary rounded-circle me-3"></span>Works </a>
                                                    <a class="note-social badge-group-item badge-social dropdown-item position-relative category-social" href="javascript:void(0);"><span class="wd-5 ht-5 bg-info rounded-circle me-3"></span>Social </a>
                                                    <a class="note-archive badge-group-item badge-archive dropdown-item position-relative category-archive" href="javascript:void(0);"><span class="wd-5 ht-5 bg-dark rounded-circle me-3"></span>Archive </a>
                                                    <a class="note-priority badge-group-item badge-priority dropdown-item position-relative category-priority" href="javascript:void(0);"><span class="wd-5 ht-5 bg-danger rounded-circle me-3"></span>Priority </a>
                                                    <a class="note-personal badge-group-item badge-personal dropdown-item position-relative category-personal" href="javascript:void(0);"><span class="wd-5 ht-5 bg-primary rounded-circle me-3"></span>Personal </a>
                                                    <a class="note-business badge-group-item badge-business dropdown-item position-relative category-business" href="javascript:void(0);"><span class="wd-5 ht-5 bg-warning rounded-circle me-3"></span>Business </a>
                                                    <a class="note-important badge-group-item badge-important dropdown-item position-relative category-important" href="javascript:void(0);"><span class="wd-5 ht-5 bg-success rounded-circle me-3"></span>Important </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--! BEGIN: [Single Note Item] !-->
                            <div class="col-xxl-4 col-xl-6 col-lg-4 col-sm-6 single-note-item all-category note-social note-archive note-personal">
                                <div class="card card-body mb-4 stretch stretch-full">
                                    <span class="side-stick"></span>
                                    <h5 class="note-title text-truncate w-75 mb-1" data-noteheading="Change a Design">Change a Design <i class="point bi bi-circle-fill ms-1 fs-7"></i></h5>
                                    <p class="fs-11 text-muted note-date">25 December 2023</p>
                                    <div class="note-content flex-grow-1">
                                        <p class="text-muted note-inner-content text-truncate-3-line" data-notecontent="Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis vitae iure, quo harum excepturi laudantium eum earum accusantium labore libero maiores illo soluta.">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis vitae iure, quo harum excepturi laudantium eum earum accusantium labore libero maiores illo soluta.</p>
                                    </div>
                                    <div class="d-flex align-items-center gap-1">
                                        <span class="avatar-text avatar-sm"><i class="feather-star favourite-note"></i></span>
                                        <span class="avatar-text avatar-sm"><i class="feather-trash-2 remove-note"></i></span>
                                        <div class="ms-auto">
                                            <div class="dropdown btn-group category-selector">
                                                <a class="nav-link dropdown-toggle category-dropdown label-group p-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="true">
                                                    <div class="category">
                                                        <div class="category-business"></div>
                                                        <div class="category-social"></div>
                                                        <div class="category-important"></div>
                                                    </div>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right category-menu">
                                                    <a class="note-tasks badge-group-item badge-tasks dropdown-item position-relative category-tasks" href="javascript:void(0);"><span class="wd-5 ht-5 bg-danger rounded-circle me-3"></span>Tasks </a>
                                                    <a class="note-works badge-group-item badge-works dropdown-item position-relative category-works" href="javascript:void(0);"><span class="wd-5 ht-5 bg-primary rounded-circle me-3"></span>Works </a>
                                                    <a class="note-social badge-group-item badge-social dropdown-item position-relative category-social" href="javascript:void(0);"><span class="wd-5 ht-5 bg-info rounded-circle me-3"></span>Social </a>
                                                    <a class="note-archive badge-group-item badge-archive dropdown-item position-relative category-archive" href="javascript:void(0);"><span class="wd-5 ht-5 bg-dark rounded-circle me-3"></span>Archive </a>
                                                    <a class="note-priority badge-group-item badge-priority dropdown-item position-relative category-priority" href="javascript:void(0);"><span class="wd-5 ht-5 bg-danger rounded-circle me-3"></span>Priority </a>
                                                    <a class="note-personal badge-group-item badge-personal dropdown-item position-relative category-personal" href="javascript:void(0);"><span class="wd-5 ht-5 bg-primary rounded-circle me-3"></span>Personal </a>
                                                    <a class="note-business badge-group-item badge-business dropdown-item position-relative category-business" href="javascript:void(0);"><span class="wd-5 ht-5 bg-warning rounded-circle me-3"></span>Business </a>
                                                    <a class="note-important badge-group-item badge-important dropdown-item position-relative category-important" href="javascript:void(0);"><span class="wd-5 ht-5 bg-success rounded-circle me-3"></span>Important </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--! BEGIN: [Single Note Item] !-->
                            <div class="col-xxl-4 col-xl-6 col-lg-4 col-sm-6 single-note-item all-category note-business note-priority">
                                <div class="card card-body mb-4 stretch stretch-full">
                                    <span class="side-stick"></span>
                                    <h5 class="note-title text-truncate w-75 mb-1" data-noteheading="Give review for foods">Give review for foods <i class="point bi bi-circle-fill ms-1 fs-7"></i></h5>
                                    <p class="fs-11 text-muted note-date">18 December 2023</p>
                                    <div class="note-content flex-grow-1">
                                        <p class="text-muted note-inner-content text-truncate-3-line" data-notecontent="Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis vitae iure, quo harum excepturi laudantium eum earum accusantium labore libero maiores illo soluta.">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis vitae iure, quo harum excepturi laudantium eum earum accusantium labore libero maiores illo soluta.</p>
                                    </div>
                                    <div class="d-flex align-items-center gap-1">
                                        <span class="avatar-text avatar-sm"><i class="feather-star favourite-note"></i></span>
                                        <span class="avatar-text avatar-sm"><i class="feather-trash-2 remove-note"></i></span>
                                        <div class="ms-auto">
                                            <div class="dropdown btn-group category-selector">
                                                <a class="nav-link dropdown-toggle category-dropdown label-group p-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="true">
                                                    <div class="category">
                                                        <div class="category-business"></div>
                                                        <div class="category-social"></div>
                                                        <div class="category-important"></div>
                                                    </div>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right category-menu">
                                                    <a class="note-tasks badge-group-item badge-tasks dropdown-item position-relative category-tasks" href="javascript:void(0);"><span class="wd-5 ht-5 bg-danger rounded-circle me-3"></span>Tasks </a>
                                                    <a class="note-works badge-group-item badge-works dropdown-item position-relative category-works" href="javascript:void(0);"><span class="wd-5 ht-5 bg-primary rounded-circle me-3"></span>Works </a>
                                                    <a class="note-social badge-group-item badge-social dropdown-item position-relative category-social" href="javascript:void(0);"><span class="wd-5 ht-5 bg-info rounded-circle me-3"></span>Social </a>
                                                    <a class="note-archive badge-group-item badge-archive dropdown-item position-relative category-archive" href="javascript:void(0);"><span class="wd-5 ht-5 bg-dark rounded-circle me-3"></span>Archive </a>
                                                    <a class="note-priority badge-group-item badge-priority dropdown-item position-relative category-priority" href="javascript:void(0);"><span class="wd-5 ht-5 bg-danger rounded-circle me-3"></span>Priority </a>
                                                    <a class="note-personal badge-group-item badge-personal dropdown-item position-relative category-personal" href="javascript:void(0);"><span class="wd-5 ht-5 bg-primary rounded-circle me-3"></span>Personal </a>
                                                    <a class="note-business badge-group-item badge-business dropdown-item position-relative category-business" href="javascript:void(0);"><span class="wd-5 ht-5 bg-warning rounded-circle me-3"></span>Business </a>
                                                    <a class="note-important badge-group-item badge-important dropdown-item position-relative category-important" href="javascript:void(0);"><span class="wd-5 ht-5 bg-success rounded-circle me-3"></span>Important </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--! BEGIN: [Single Note Item] !-->
                            <div class="col-xxl-4 col-xl-6 col-lg-4 col-sm-6 single-note-item all-category note-important note-tasks">
                                <div class="card card-body mb-4 stretch stretch-full">
                                    <span class="side-stick"></span>
                                    <h5 class="note-title text-truncate w-75 mb-1" data-noteheading="Give salary to employee">Give salary to employee <i class="point bi bi-circle-fill ms-1 fs-7"></i></h5>
                                    <p class="fs-11 text-muted note-date">15 Fabruary 2023</p>
                                    <div class="note-content flex-grow-1">
                                        <p class="text-muted note-inner-content text-truncate-3-line" data-notecontent="Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis vitae iure, quo harum excepturi laudantium eum earum accusantium labore libero maiores illo soluta.">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis vitae iure, quo harum excepturi laudantium eum earum accusantium labore libero maiores illo soluta.</p>
                                    </div>
                                    <div class="d-flex align-items-center gap-1">
                                        <span class="avatar-text avatar-sm"><i class="feather-star favourite-note"></i></span>
                                        <span class="avatar-text avatar-sm"><i class="feather-trash-2 remove-note"></i></span>
                                        <div class="ms-auto">
                                            <div class="dropdown btn-group category-selector">
                                                <a class="nav-link dropdown-toggle category-dropdown label-group p-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="true">
                                                    <div class="category">
                                                        <div class="category-business"></div>
                                                        <div class="category-social"></div>
                                                        <div class="category-important"></div>
                                                    </div>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right category-menu">
                                                    <a class="note-tasks badge-group-item badge-tasks dropdown-item position-relative category-tasks" href="javascript:void(0);"><span class="wd-5 ht-5 bg-danger rounded-circle me-3"></span>Tasks </a>
                                                    <a class="note-works badge-group-item badge-works dropdown-item position-relative category-works" href="javascript:void(0);"><span class="wd-5 ht-5 bg-primary rounded-circle me-3"></span>Works </a>
                                                    <a class="note-social badge-group-item badge-social dropdown-item position-relative category-social" href="javascript:void(0);"><span class="wd-5 ht-5 bg-info rounded-circle me-3"></span>Social </a>
                                                    <a class="note-archive badge-group-item badge-archive dropdown-item position-relative category-archive" href="javascript:void(0);"><span class="wd-5 ht-5 bg-dark rounded-circle me-3"></span>Archive </a>
                                                    <a class="note-priority badge-group-item badge-priority dropdown-item position-relative category-priority" href="javascript:void(0);"><span class="wd-5 ht-5 bg-danger rounded-circle me-3"></span>Priority </a>
                                                    <a class="note-personal badge-group-item badge-personal dropdown-item position-relative category-personal" href="javascript:void(0);"><span class="wd-5 ht-5 bg-primary rounded-circle me-3"></span>Personal </a>
                                                    <a class="note-business badge-group-item badge-business dropdown-item position-relative category-business" href="javascript:void(0);"><span class="wd-5 ht-5 bg-warning rounded-circle me-3"></span>Business </a>
                                                    <a class="note-important badge-group-item badge-important dropdown-item position-relative category-important" href="javascript:void(0);"><span class="wd-5 ht-5 bg-success rounded-circle me-3"></span>Important </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--! BEGIN: [Single Note Item] !-->
                            <div class="col-xxl-4 col-xl-6 col-lg-4 col-sm-6 single-note-item all-category note-social note-archive">
                                <div class="card card-body mb-4 stretch stretch-full">
                                    <span class="side-stick"></span>
                                    <h5 class="note-title text-truncate w-75 mb-1" data-noteheading="Nightout with friends">Nightout with friends <i class="point bi bi-circle-fill ms-1 fs-7"></i></h5>
                                    <p class="fs-11 text-muted note-date">01 August 2023</p>
                                    <div class="note-content flex-grow-1">
                                        <p class="text-muted note-inner-content text-truncate-3-line" data-notecontent="Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis vitae iure, quo harum excepturi laudantium eum earum accusantium labore libero maiores illo soluta.">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis vitae iure, quo harum excepturi laudantium eum earum accusantium labore libero maiores illo soluta.</p>
                                    </div>
                                    <div class="d-flex align-items-center gap-1">
                                        <span class="avatar-text avatar-sm"><i class="feather-star favourite-note"></i></span>
                                        <span class="avatar-text avatar-sm"><i class="feather-trash-2 remove-note"></i></span>
                                        <div class="ms-auto">
                                            <div class="dropdown btn-group category-selector">
                                                <a class="nav-link dropdown-toggle category-dropdown label-group p-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="true">
                                                    <div class="category">
                                                        <div class="category-business"></div>
                                                        <div class="category-social"></div>
                                                        <div class="category-important"></div>
                                                    </div>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right category-menu">
                                                    <a class="note-tasks badge-group-item badge-tasks dropdown-item position-relative category-tasks" href="javascript:void(0);"><span class="wd-5 ht-5 bg-danger rounded-circle me-3"></span>Tasks </a>
                                                    <a class="note-works badge-group-item badge-works dropdown-item position-relative category-works" href="javascript:void(0);"><span class="wd-5 ht-5 bg-primary rounded-circle me-3"></span>Works </a>
                                                    <a class="note-social badge-group-item badge-social dropdown-item position-relative category-social" href="javascript:void(0);"><span class="wd-5 ht-5 bg-info rounded-circle me-3"></span>Social </a>
                                                    <a class="note-archive badge-group-item badge-archive dropdown-item position-relative category-archive" href="javascript:void(0);"><span class="wd-5 ht-5 bg-dark rounded-circle me-3"></span>Archive </a>
                                                    <a class="note-priority badge-group-item badge-priority dropdown-item position-relative category-priority" href="javascript:void(0);"><span class="wd-5 ht-5 bg-danger rounded-circle me-3"></span>Priority </a>
                                                    <a class="note-personal badge-group-item badge-personal dropdown-item position-relative category-personal" href="javascript:void(0);"><span class="wd-5 ht-5 bg-primary rounded-circle me-3"></span>Personal </a>
                                                    <a class="note-business badge-group-item badge-business dropdown-item position-relative category-business" href="javascript:void(0);"><span class="wd-5 ht-5 bg-warning rounded-circle me-3"></span>Business </a>
                                                    <a class="note-important badge-group-item badge-important dropdown-item position-relative category-important" href="javascript:void(0);"><span class="wd-5 ht-5 bg-success rounded-circle me-3"></span>Important </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--! BEGIN: [Single Note Item] !-->
                            <div class="col-xxl-4 col-xl-6 col-lg-4 col-sm-6 single-note-item all-category note-important note-archive">
                                <div class="card card-body mb-4 stretch stretch-full">
                                    <span class="side-stick"></span>
                                    <h5 class="note-title text-truncate w-75 mb-1" data-noteheading="Go for lunch">Go for lunch <i class="point bi bi-circle-fill ms-1 fs-7"></i></h5>
                                    <p class="fs-11 text-muted note-date">01 April 2023</p>
                                    <div class="note-content flex-grow-1">
                                        <p class="text-muted note-inner-content text-truncate-3-line" data-notecontent="Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis vitae iure, quo harum excepturi laudantium eum earum accusantium labore libero maiores illo soluta.">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis vitae iure, quo harum excepturi laudantium eum earum accusantium labore libero maiores illo soluta.</p>
                                    </div>
                                    <div class="d-flex align-items-center gap-1">
                                        <span class="avatar-text avatar-sm"><i class="feather-star favourite-note"></i></span>
                                        <span class="avatar-text avatar-sm"><i class="feather-trash-2 remove-note"></i></span>
                                        <div class="ms-auto">
                                            <div class="dropdown btn-group category-selector">
                                                <a class="nav-link dropdown-toggle category-dropdown label-group p-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="true">
                                                    <div class="category">
                                                        <div class="category-business"></div>
                                                        <div class="category-social"></div>
                                                        <div class="category-important"></div>
                                                    </div>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right category-menu">
                                                    <a class="note-tasks badge-group-item badge-tasks dropdown-item position-relative category-tasks" href="javascript:void(0);"><span class="wd-5 ht-5 bg-danger rounded-circle me-3"></span>Tasks </a>
                                                    <a class="note-works badge-group-item badge-works dropdown-item position-relative category-works" href="javascript:void(0);"><span class="wd-5 ht-5 bg-primary rounded-circle me-3"></span>Works </a>
                                                    <a class="note-social badge-group-item badge-social dropdown-item position-relative category-social" href="javascript:void(0);"><span class="wd-5 ht-5 bg-info rounded-circle me-3"></span>Social </a>
                                                    <a class="note-archive badge-group-item badge-archive dropdown-item position-relative category-archive" href="javascript:void(0);"><span class="wd-5 ht-5 bg-dark rounded-circle me-3"></span>Archive </a>
                                                    <a class="note-priority badge-group-item badge-priority dropdown-item position-relative category-priority" href="javascript:void(0);"><span class="wd-5 ht-5 bg-danger rounded-circle me-3"></span>Priority </a>
                                                    <a class="note-personal badge-group-item badge-personal dropdown-item position-relative category-personal" href="javascript:void(0);"><span class="wd-5 ht-5 bg-primary rounded-circle me-3"></span>Personal </a>
                                                    <a class="note-business badge-group-item badge-business dropdown-item position-relative category-business" href="javascript:void(0);"><span class="wd-5 ht-5 bg-warning rounded-circle me-3"></span>Business </a>
                                                    <a class="note-important badge-group-item badge-important dropdown-item position-relative category-important" href="javascript:void(0);"><span class="wd-5 ht-5 bg-success rounded-circle me-3"></span>Important </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--! BEGIN: [Single Note Item] !-->
                            <div class="col-xxl-4 col-xl-6 col-lg-4 col-sm-6 single-note-item all-category note-social note-works note-personal">
                                <div class="card card-body mb-4 stretch stretch-full">
                                    <span class="side-stick"></span>
                                    <h5 class="note-title text-truncate w-75 mb-1" data-noteheading="Meeting with Mr.Jojo">Meeting with Mr.Jojo <i class="point bi bi-circle-fill ms-1 fs-7"></i></h5>
                                    <p class="fs-11 text-muted note-date">19 October 2023</p>
                                    <div class="note-content flex-grow-1">
                                        <p class="text-muted note-inner-content text-truncate-3-line" data-notecontent="Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis vitae iure, quo harum excepturi laudantium eum earum accusantium labore libero maiores illo soluta.">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis vitae iure, quo harum excepturi laudantium eum earum accusantium labore libero maiores illo soluta.</p>
                                    </div>
                                    <div class="d-flex align-items-center gap-1">
                                        <span class="avatar-text avatar-sm"><i class="feather-star favourite-note"></i></span>
                                        <span class="avatar-text avatar-sm"><i class="feather-trash-2 remove-note"></i></span>
                                        <div class="ms-auto">
                                            <div class="dropdown btn-group category-selector">
                                                <a class="nav-link dropdown-toggle category-dropdown label-group p-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="true">
                                                    <div class="category">
                                                        <div class="category-business"></div>
                                                        <div class="category-social"></div>
                                                        <div class="category-important"></div>
                                                    </div>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right category-menu">
                                                    <a class="note-tasks badge-group-item badge-tasks dropdown-item position-relative category-tasks" href="javascript:void(0);"><span class="wd-5 ht-5 bg-danger rounded-circle me-3"></span>Tasks </a>
                                                    <a class="note-works badge-group-item badge-works dropdown-item position-relative category-works" href="javascript:void(0);"><span class="wd-5 ht-5 bg-primary rounded-circle me-3"></span>Works </a>
                                                    <a class="note-social badge-group-item badge-social dropdown-item position-relative category-social" href="javascript:void(0);"><span class="wd-5 ht-5 bg-info rounded-circle me-3"></span>Social </a>
                                                    <a class="note-archive badge-group-item badge-archive dropdown-item position-relative category-archive" href="javascript:void(0);"><span class="wd-5 ht-5 bg-dark rounded-circle me-3"></span>Archive </a>
                                                    <a class="note-priority badge-group-item badge-priority dropdown-item position-relative category-priority" href="javascript:void(0);"><span class="wd-5 ht-5 bg-danger rounded-circle me-3"></span>Priority </a>
                                                    <a class="note-personal badge-group-item badge-personal dropdown-item position-relative category-personal" href="javascript:void(0);"><span class="wd-5 ht-5 bg-primary rounded-circle me-3"></span>Personal </a>
                                                    <a class="note-business badge-group-item badge-business dropdown-item position-relative category-business" href="javascript:void(0);"><span class="wd-5 ht-5 bg-warning rounded-circle me-3"></span>Business </a>
                                                    <a class="note-important badge-group-item badge-important dropdown-item position-relative category-important" href="javascript:void(0);"><span class="wd-5 ht-5 bg-success rounded-circle me-3"></span>Important </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
