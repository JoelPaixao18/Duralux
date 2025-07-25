@extends('applications.chat.layout.main')

@section('content-chat')
    <!--! ================================================================ !-->
    <!--! [Start] Main Content !-->
    <!--! ================================================================ !-->
    <main class="nxl-container apps-container apps-chat">
        <div class="nxl-content without-header nxl-full-content">
            <!-- [ Main Content ] start -->
            <div class="main-content d-flex">
                <!-- [ Content Sidebar ] start -->
                <div class="content-sidebar content-sidebar-xl" data-scrollbar-target="#psScrollbarInit">
                    <div class="content-sidebar-header bg-white sticky-top hstack justify-content-between">
                        <h4 class="fw-bolder mb-0">Chat</h4>
                        <a href="javascript:void(0);" class="app-sidebar-close-trigger d-flex">
                            <i class="feather-x"></i>
                        </a>
                    </div>
                    <div class="content-sidebar-body">
                        <div class="py-0 px-4 d-flex align-items-center justify-content-between border-bottom">
                            <form class="sidebar-search">
                                <input type="search" class="py-3 px-0 border-0" id="chattingSearch" placeholder="Search...">
                            </form>
                            <div class="dropdown sidebar-filter">
                                <a href="javascript:void(0)" data-bs-toggle="dropdown" class="d-flex align-items-center justify-content-center dropdown-toggle" data-bs-offset="0, 15"> Newest </a>
                                <ul class="dropdown-menu dropdown-menu-end overflow-auto">
                                    <li>
                                        <a href="javascript:void(0)" class="dropdown-item">Oldest</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" class="dropdown-item active">Newest</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" class="dropdown-item">Replied</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" class="dropdown-item">Snoozed</a>
                                    </li>
                                    <li class="dropdown-divider"></li>
                                    <li>
                                        <a href="javascript:void(0)" class="dropdown-item">Ascending</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" class="dropdown-item">Descending</a>
                                    </li>
                                    <li class="dropdown-divider"></li>
                                    <li>
                                        <a href="javascript:void(0)" class="dropdown-item">Mute Conversion</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" class="dropdown-item">Block Conversion</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" class="dropdown-item">Delete Conversion</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="content-sidebar-items">
                            <div class="p-4 d-flex position-relative border-bottom c-pointer single-item">
                                <div class="avatar-image">
                                    <img src="assets/images/avatar/10.png" class="img-fluid" alt="image">
                                </div>
                                <div class="ms-3 item-desc">
                                    <div class="w-100 d-flex align-items-center justify-content-between">
                                        <a href="javascript:void(0);" class="hstack gap-2 me-2">
                                            <span>Erna Serpa</span>
                                            <div class="wd-5 ht-5 rounded-circle opacity-75 me-1 bg-success"></div>
                                            <span class="fs-10 fw-medium text-muted text-uppercase d-none d-sm-block">2 min ago</span>
                                        </a>
                                        <div class="dropdown">
                                            <a href="javascript:void(0)" class="avatar-text avatar-sm" data-bs-toggle="dropdown">
                                                <i class="feather-more-vertical"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-end overflow-auto">
                                                <li>
                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                        <i class="feather-check-circle me-3"></i>
                                                        <span>Make as Read</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                        <i class="feather-star me-3"></i>
                                                        <span>Add to Favorite</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                        <i class="feather-bell-off me-3"></i>
                                                        <span>Mute Notifications</span>
                                                    </a>
                                                </li>
                                                <li class="dropdown-divider"></li>
                                                <li>
                                                    <a href="javascript:void(0)" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#voiceCallingModalScreen">
                                                        <i class="feather-phone-call me-3"></i>
                                                        <span>Audio Call</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#videoCallingModalScreen">
                                                        <i class="feather-video me-3"></i>
                                                        <span>Video Call</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                        <i class="feather-mail me-3"></i>
                                                        <span>Send eMail</span>
                                                    </a>
                                                </li>
                                                <li class="dropdown-divider"></li>
                                                <li>
                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                        <i class="feather-alert-triangle me-3"></i>
                                                        <span>Report Chat</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                        <i class="feather-trash-2 me-3"></i>
                                                        <span>Delete Chat</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                        <i class="feather-archive me-3"></i>
                                                        <span>Archive Chat</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <p class="fs-12 fw-semibold text-dark mt-2 mb-0 text-truncate-2-line">Lorem ipsum dolor sit amet, consec tetuer adipi scing elit aenean commodo ipsum dolor sit amet, consec tetuer adipi scing elit aenean commodo</p>
                                </div>
                            </div>
                            <div class="p-4 d-flex position-relative border-bottom c-pointer single-item">
                                <div class="bg-success text-white avatar-text">N</div>
                                <div class="ms-3 item-desc">
                                    <div class="w-100 d-flex align-items-center justify-content-between">
                                        <a href="javascript:void(0);" class="hstack gap-2 me-2">
                                            <span>Norman Byrd</span>
                                            <div class="wd-5 ht-5 rounded-circle opacity-75 me-1 bg-danger"></div>
                                            <span class="fs-10 fw-medium text-muted text-uppercase d-none d-sm-block">5 min ago</span>
                                        </a>
                                        <div class="dropdown">
                                            <a href="javascript:void(0)" class="avatar-text avatar-sm" data-bs-toggle="dropdown">
                                                <i class="feather-more-vertical"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-end overflow-auto">
                                                <li>
                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                        <i class="feather-check-circle me-3"></i>
                                                        <span>Make as Read</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                        <i class="feather-star me-3"></i>
                                                        <span>Add to Favorite</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                        <i class="feather-bell-off me-3"></i>
                                                        <span>Mute Notifications</span>
                                                    </a>
                                                </li>
                                                <li class="dropdown-divider"></li>
                                                <li>
                                                    <a href="javascript:void(0)" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#voiceCallingModalScreen">
                                                        <i class="feather-phone-call me-3"></i>
                                                        <span>Audio Call</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#videoCallingModalScreen">
                                                        <i class="feather-video me-3"></i>
                                                        <span>Video Call</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                        <i class="feather-mail me-3"></i>
                                                        <span>Send eMail</span>
                                                    </a>
                                                </li>
                                                <li class="dropdown-divider"></li>
                                                <li>
                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                        <i class="feather-alert-triangle me-3"></i>
                                                        <span>Report Chat</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                        <i class="feather-trash-2 me-3"></i>
                                                        <span>Delete Chat</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                        <i class="feather-archive me-3"></i>
                                                        <span>Archive Chat</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <p class="fs-12 fw-semibold text-dark mt-2 mb-0 text-truncate-2-line">Lorem ipsum dolor sit amet, consec tetuer adipi scing elit aenean commodo ipsum dolor sit amet, consec tetuer adipi scing elit aenean commodo</p>
                                </div>
                            </div>
                            <div class="p-4 d-flex position-relative border-bottom c-pointer single-item">
                                <div class="avatar-image">
                                    <img src="assets/images/avatar/11.png" class="img-fluid" alt="image">
                                </div>
                                <div class="ms-3 item-desc">
                                    <div class="w-100 d-flex align-items-center justify-content-between">
                                        <a href="javascript:void(0);" class="hstack gap-2 me-2">
                                            <span>Laura Foreman</span>
                                            <div class="wd-5 ht-5 rounded-circle opacity-75 me-1 bg-success"></div>
                                            <span class="fs-10 fw-medium text-muted text-uppercase d-none d-sm-block">7 min ago</span>
                                        </a>
                                        <div class="dropdown">
                                            <a href="javascript:void(0)" class="avatar-text avatar-sm" data-bs-toggle="dropdown">
                                                <i class="feather-more-vertical"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-end overflow-auto">
                                                <li>
                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                        <i class="feather-check-circle me-3"></i>
                                                        <span>Make as Read</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                        <i class="feather-star me-3"></i>
                                                        <span>Add to Favorite</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                        <i class="feather-bell-off me-3"></i>
                                                        <span>Mute Notifications</span>
                                                    </a>
                                                </li>
                                                <li class="dropdown-divider"></li>
                                                <li>
                                                    <a href="javascript:void(0)" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#voiceCallingModalScreen">
                                                        <i class="feather-phone-call me-3"></i>
                                                        <span>Audio Call</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#videoCallingModalScreen">
                                                        <i class="feather-video me-3"></i>
                                                        <span>Video Call</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                        <i class="feather-mail me-3"></i>
                                                        <span>Send eMail</span>
                                                    </a>
                                                </li>
                                                <li class="dropdown-divider"></li>
                                                <li>
                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                        <i class="feather-alert-triangle me-3"></i>
                                                        <span>Report Chat</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                        <i class="feather-trash-2 me-3"></i>
                                                        <span>Delete Chat</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                        <i class="feather-archive me-3"></i>
                                                        <span>Archive Chat</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <p class="fs-12 text-muted mt-2 mb-0 text-truncate-2-line">Lorem ipsum dolor sit amet, consec tetuer adipi scing elit aenean commodo ipsum dolor sit amet, consec tetuer adipi scing elit aenean commodo</p>
                                </div>
                            </div>
                            <div class="p-4 d-flex position-relative border-bottom c-pointer single-item">
                                <div class="bg-warning text-white avatar-text">B</div>
                                <div class="ms-3 item-desc">
                                    <div class="w-100 d-flex align-items-center justify-content-between">
                                        <a href="javascript:void(0);" class="hstack gap-2 me-2">
                                            <span>Bryan Waters</span>
                                            <div class="wd-5 ht-5 rounded-circle opacity-75 me-1 bg-gray-500"></div>
                                            <span class="fs-10 fw-medium text-muted text-uppercase d-none d-sm-block">10 min ago</span>
                                        </a>
                                        <div class="dropdown">
                                            <a href="javascript:void(0)" class="avatar-text avatar-sm" data-bs-toggle="dropdown">
                                                <i class="feather-more-vertical"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-end overflow-auto">
                                                <li>
                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                        <i class="feather-check-circle me-3"></i>
                                                        <span>Make as Read</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                        <i class="feather-star me-3"></i>
                                                        <span>Add to Favorite</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                        <i class="feather-bell-off me-3"></i>
                                                        <span>Mute Notifications</span>
                                                    </a>
                                                </li>
                                                <li class="dropdown-divider"></li>
                                                <li>
                                                    <a href="javascript:void(0)" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#voiceCallingModalScreen">
                                                        <i class="feather-phone-call me-3"></i>
                                                        <span>Audio Call</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#videoCallingModalScreen">
                                                        <i class="feather-video me-3"></i>
                                                        <span>Video Call</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                        <i class="feather-mail me-3"></i>
                                                        <span>Send eMail</span>
                                                    </a>
                                                </li>
                                                <li class="dropdown-divider"></li>
                                                <li>
                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                        <i class="feather-alert-triangle me-3"></i>
                                                        <span>Report Chat</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                        <i class="feather-trash-2 me-3"></i>
                                                        <span>Delete Chat</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                        <i class="feather-archive me-3"></i>
                                                        <span>Archive Chat</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <p class="fs-12 text-muted mt-2 mb-0 text-truncate-2-line">Lorem ipsum dolor sit amet, consec tetuer adipi scing elit aenean commodo ipsum dolor sit amet, consec tetuer adipi scing elit aenean commodo</p>
                                </div>
                            </div>
                            <div class="p-4 d-flex position-relative border-bottom c-pointer single-item">
                                <div class="avatar-image">
                                    <img src="assets/images/avatar/12.png" class="img-fluid" alt="image">
                                </div>
                                <div class="ms-3 item-desc">
                                    <div class="w-100 d-flex align-items-center justify-content-between">
                                        <a href="javascript:void(0);" class="hstack gap-2 me-2">
                                            <span>Ursula Sanders</span>
                                            <div class="wd-5 ht-5 rounded-circle opacity-75 me-1 bg-success"></div>
                                            <span class="fs-10 fw-medium text-muted text-uppercase d-none d-sm-block">9 min ago</span>
                                        </a>
                                        <div class="dropdown">
                                            <a href="javascript:void(0)" class="avatar-text avatar-sm" data-bs-toggle="dropdown">
                                                <i class="feather-more-vertical"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-end overflow-auto">
                                                <li>
                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                        <i class="feather-check-circle me-3"></i>
                                                        <span>Make as Read</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                        <i class="feather-star me-3"></i>
                                                        <span>Add to Favorite</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                        <i class="feather-bell-off me-3"></i>
                                                        <span>Mute Notifications</span>
                                                    </a>
                                                </li>
                                                <li class="dropdown-divider"></li>
                                                <li>
                                                    <a href="javascript:void(0)" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#voiceCallingModalScreen">
                                                        <i class="feather-phone-call me-3"></i>
                                                        <span>Audio Call</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#videoCallingModalScreen">
                                                        <i class="feather-video me-3"></i>
                                                        <span>Video Call</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                        <i class="feather-mail me-3"></i>
                                                        <span>Send eMail</span>
                                                    </a>
                                                </li>
                                                <li class="dropdown-divider"></li>
                                                <li>
                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                        <i class="feather-alert-triangle me-3"></i>
                                                        <span>Report Chat</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                        <i class="feather-trash-2 me-3"></i>
                                                        <span>Delete Chat</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                        <i class="feather-archive me-3"></i>
                                                        <span>Archive Chat</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <p class="fs-12 text-muted mt-2 mb-0 text-truncate-2-line">Lorem ipsum dolor sit amet, consec tetuer adipi scing elit aenean commodo ipsum dolor sit amet, consec tetuer adipi scing elit aenean commodo</p>
                                </div>
                            </div>
                            <div class="p-4 d-flex position-relative border-bottom c-pointer single-item">
                                <div class="bg-danger text-white avatar-text">E</div>
                                <div class="ms-3 item-desc">
                                    <div class="w-100 d-flex align-items-center justify-content-between">
                                        <a href="javascript:void(0);" class="hstack gap-2 me-2">
                                            <span>Edward Andrade</span>
                                            <div class="wd-5 ht-5 rounded-circle opacity-75 me-1 bg-success"></div>
                                            <span class="fs-10 fw-medium text-muted text-uppercase d-none d-sm-block">13 min ago</span>
                                        </a>
                                        <div class="dropdown">
                                            <a href="javascript:void(0)" class="avatar-text avatar-sm" data-bs-toggle="dropdown">
                                                <i class="feather-more-vertical"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-end overflow-auto">
                                                <li>
                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                        <i class="feather-check-circle me-3"></i>
                                                        <span>Make as Read</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                        <i class="feather-star me-3"></i>
                                                        <span>Add to Favorite</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                        <i class="feather-bell-off me-3"></i>
                                                        <span>Mute Notifications</span>
                                                    </a>
                                                </li>
                                                <li class="dropdown-divider"></li>
                                                <li>
                                                    <a href="javascript:void(0)" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#voiceCallingModalScreen">
                                                        <i class="feather-phone-call me-3"></i>
                                                        <span>Audio Call</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#videoCallingModalScreen">
                                                        <i class="feather-video me-3"></i>
                                                        <span>Video Call</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                        <i class="feather-mail me-3"></i>
                                                        <span>Send eMail</span>
                                                    </a>
                                                </li>
                                                <li class="dropdown-divider"></li>
                                                <li>
                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                        <i class="feather-alert-triangle me-3"></i>
                                                        <span>Report Chat</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                        <i class="feather-trash-2 me-3"></i>
                                                        <span>Delete Chat</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                        <i class="feather-archive me-3"></i>
                                                        <span>Archive Chat</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <p class="fs-12 text-muted mt-2 mb-0 text-truncate-2-line">Lorem ipsum dolor sit amet, consec tetuer adipi scing elit aenean commodo ipsum dolor sit amet, consec tetuer adipi scing elit aenean commodo</p>
                                </div>
                            </div>
                            <div class="p-4 d-flex position-relative border-bottom c-pointer single-item">
                                <div class="avatar-image">
                                    <img src="assets/images/avatar/1.png" class="img-fluid" alt="image">
                                </div>
                                <div class="ms-3 item-desc">
                                    <div class="w-100 d-flex align-items-center justify-content-between">
                                        <a href="javascript:void(0);" class="hstack gap-2 me-2">
                                            <span>Alexandra Della</span>
                                            <div class="wd-5 ht-5 rounded-circle opacity-75 me-1 bg-success"></div>
                                            <span class="fs-10 fw-medium text-muted text-uppercase d-none d-sm-block">15 min ago</span>
                                        </a>
                                        <div class="dropdown">
                                            <a href="javascript:void(0)" class="avatar-text avatar-sm" data-bs-toggle="dropdown">
                                                <i class="feather-more-vertical"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-end overflow-auto">
                                                <li>
                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                        <i class="feather-check-circle me-3"></i>
                                                        <span>Make as Read</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                        <i class="feather-star me-3"></i>
                                                        <span>Add to Favorite</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                        <i class="feather-bell-off me-3"></i>
                                                        <span>Mute Notifications</span>
                                                    </a>
                                                </li>
                                                <li class="dropdown-divider"></li>
                                                <li>
                                                    <a href="javascript:void(0)" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#voiceCallingModalScreen">
                                                        <i class="feather-phone-call me-3"></i>
                                                        <span>Audio Call</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#videoCallingModalScreen">
                                                        <i class="feather-video me-3"></i>
                                                        <span>Video Call</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                        <i class="feather-mail me-3"></i>
                                                        <span>Send eMail</span>
                                                    </a>
                                                </li>
                                                <li class="dropdown-divider"></li>
                                                <li>
                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                        <i class="feather-alert-triangle me-3"></i>
                                                        <span>Report Chat</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                        <i class="feather-trash-2 me-3"></i>
                                                        <span>Delete Chat</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                        <i class="feather-archive me-3"></i>
                                                        <span>Archive Chat</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <p class="fs-12 text-muted mt-2 mb-0 text-truncate-2-line">Lorem ipsum dolor sit amet, consec tetuer adipi scing elit aenean commodo ipsum dolor sit amet, consec tetuer adipi scing elit aenean commodo</p>
                                </div>
                            </div>
                            <div class="p-4 d-flex position-relative border-bottom c-pointer single-item">
                                <div class="bg-gray-200 text-dark avatar-text">T</div>
                                <div class="ms-3 item-desc">
                                    <div class="w-100 d-flex align-items-center justify-content-between">
                                        <a href="javascript:void(0);" class="hstack gap-2 me-2">
                                            <span>Timothy Boyd</span>
                                            <div class="wd-5 ht-5 rounded-circle opacity-75 me-1 bg-success"></div>
                                            <span class="fs-10 fw-medium text-muted text-uppercase d-none d-sm-block">13 min ago</span>
                                        </a>
                                        <div class="dropdown">
                                            <a href="javascript:void(0)" class="avatar-text avatar-sm" data-bs-toggle="dropdown">
                                                <i class="feather-more-vertical"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-end overflow-auto">
                                                <li>
                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                        <i class="feather-check-circle me-3"></i>
                                                        <span>Make as Read</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                        <i class="feather-star me-3"></i>
                                                        <span>Add to Favorite</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                        <i class="feather-bell-off me-3"></i>
                                                        <span>Mute Notifications</span>
                                                    </a>
                                                </li>
                                                <li class="dropdown-divider"></li>
                                                <li>
                                                    <a href="javascript:void(0)" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#voiceCallingModalScreen">
                                                        <i class="feather-phone-call me-3"></i>
                                                        <span>Audio Call</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#videoCallingModalScreen">
                                                        <i class="feather-video me-3"></i>
                                                        <span>Video Call</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                        <i class="feather-mail me-3"></i>
                                                        <span>Send eMail</span>
                                                    </a>
                                                </li>
                                                <li class="dropdown-divider"></li>
                                                <li>
                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                        <i class="feather-alert-triangle me-3"></i>
                                                        <span>Report Chat</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                        <i class="feather-trash-2 me-3"></i>
                                                        <span>Delete Chat</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                        <i class="feather-archive me-3"></i>
                                                        <span>Archive Chat</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <p class="fs-12 text-muted mt-2 mb-0 text-truncate-2-line">Lorem ipsum dolor sit amet, consec tetuer adipi scing elit aenean commodo ipsum dolor sit amet, consec tetuer adipi scing elit aenean commodo</p>
                                </div>
                            </div>
                            <div class="p-4 d-flex position-relative border-bottom c-pointer single-item">
                                <div class="avatar-image">
                                    <img src="assets/images/avatar/2.png" class="img-fluid" alt="image">
                                </div>
                                <div class="ms-3 item-desc">
                                    <div class="w-100 d-flex align-items-center justify-content-between">
                                        <a href="javascript:void(0);" class="hstack gap-2 me-2">
                                            <span>Curtis Green</span>
                                            <div class="wd-5 ht-5 rounded-circle opacity-75 me-1 bg-success"></div>
                                            <span class="fs-10 fw-medium text-muted text-uppercase d-none d-sm-block">20 min ago</span>
                                        </a>
                                        <div class="dropdown">
                                            <a href="javascript:void(0)" class="avatar-text avatar-sm" data-bs-toggle="dropdown">
                                                <i class="feather-more-vertical"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-end overflow-auto">
                                                <li>
                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                        <i class="feather-check-circle me-3"></i>
                                                        <span>Make as Read</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                        <i class="feather-star me-3"></i>
                                                        <span>Add to Favorite</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                        <i class="feather-bell-off me-3"></i>
                                                        <span>Mute Notifications</span>
                                                    </a>
                                                </li>
                                                <li class="dropdown-divider"></li>
                                                <li>
                                                    <a href="javascript:void(0)" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#voiceCallingModalScreen">
                                                        <i class="feather-phone-call me-3"></i>
                                                        <span>Audio Call</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#videoCallingModalScreen">
                                                        <i class="feather-video me-3"></i>
                                                        <span>Video Call</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                        <i class="feather-mail me-3"></i>
                                                        <span>Send eMail</span>
                                                    </a>
                                                </li>
                                                <li class="dropdown-divider"></li>
                                                <li>
                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                        <i class="feather-alert-triangle me-3"></i>
                                                        <span>Report Chat</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                        <i class="feather-trash-2 me-3"></i>
                                                        <span>Delete Chat</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                        <i class="feather-archive me-3"></i>
                                                        <span>Archive Chat</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <p class="fs-12 text-muted mt-2 mb-0 text-truncate-2-line">Lorem ipsum dolor sit amet, consec tetuer adipi scing elit aenean commodo ipsum dolor sit amet, consec tetuer adipi scing elit aenean commodo</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="javascript:void(0);" class="content-sidebar-footer px-4 py-3 fs-11 text-uppercase d-block text-center">Load More</a>
                </div>
                <!-- [ Content Sidebar  ] end -->
                <!-- [ Main Area  ] start -->
                <div class="content-area" data-scrollbar-target="#psScrollbarInit">
                    <div class="content-area-header sticky-top">
                        <div class="page-header-left hstack gap-4">
                            <a href="javascript:void(0);" class="app-sidebar-open-trigger">
                                <i class="feather-align-left fs-20"></i>
                            </a>
                            <a href="javascript:void(0);" class="d-flex align-items-center justify-content-center gap-3" data-bs-toggle="offcanvas" data-bs-target="#userProfileDetails">
                                <div class="avatar-image">
                                    <img src="assets/images/avatar/1.png" class="img-fluid" alt="image">
                                </div>
                                <div class="d-none d-sm-block">
                                    <div class="fw-bold d-flex align-items-center">Alexandra Della</div>
                                    <div class="d-flex align-items-center mt-1">
                                        <span class="wd-7 ht-7 rounded-circle opacity-75 me-2 bg-success"></span>
                                        <span class="fs-9 text-uppercase fw-bold text-success">Active Now</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="page-header-right ms-auto">
                            <div class="d-flex align-items-center justify-content-center gap-2">
                                <a href="javascript:void(0)" class="d-flex" data-bs-toggle="modal" data-bs-target="#voiceCallingModalScreen">
                                    <div class="avatar-text avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Voice Call">
                                        <i class="feather-phone-call"></i>
                                    </div>
                                </a>
                                <a href="javascript:void(0)" class="d-flex d-flex" data-bs-toggle="modal" data-bs-target="#videoCallingModalScreen">
                                    <div class="avatar-text avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Video Call">
                                        <i class="feather-video"></i>
                                    </div>
                                </a>
                                <a href="javascript:void(0)" class="d-flex d-none d-sm-block successAlertMessage">
                                    <div class="avatar-text avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Add to Favorite">
                                        <i class="feather-star"></i>
                                    </div>
                                </a>
                                <a href="javascript:void(0)" class="ac-info-sidebar-open-trigger" data-bs-toggle="offcanvas" data-bs-target="#userProfileDetails">
                                    <div class="avatar-text avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Profile Info">
                                        <i class="feather-info"></i>
                                    </div>
                                </a>
                                <div class="dropdown">
                                    <a href="javascript:void(0);" class="avatar-text avatar-md" data-bs-toggle="dropdown" data-bs-offset="0,22">
                                        <i class="feather-more-vertical"></i>
                                    </a>
                                    <div class="dropdown-menu">
                                        <a href="javascript:void(0);" class="dropdown-item">
                                            <i class="feather-plus me-3"></i>
                                            <span> Join Group</span>
                                        </a>
                                        <a href="javascript:void(0);" class="dropdown-item">
                                            <i class="feather-user-plus me-3"></i>
                                            <span>Invite People</span>
                                        </a>
                                        <a href="javascript:void(0);" class="dropdown-item">
                                            <i class="feather-star me-3"></i>
                                            <span>Add to Favorite</span>
                                        </a>
                                        <a href="javascript:void(0);" class="dropdown-item">
                                            <i class="feather-bell-off me-3"></i>
                                            <span>Mute Conversion</span>
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a href="javascript:void(0);" class="dropdown-item">
                                            <i class="feather-phone-call me-3"></i>
                                            <span>Group Audio Call</span>
                                        </a>
                                        <a href="javascript:void(0);" class="dropdown-item">
                                            <i class="feather-video me-3"></i>
                                            <span>Group Video Call</span>
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a href="javascript:void(0);" class="dropdown-item">
                                            <i class="feather-slash me-3"></i>
                                            <span>Block Conversion</span>
                                        </a>
                                        <a href="javascript:void(0);" class="dropdown-item">
                                            <i class="feather-trash-2 me-3"></i>
                                            <span>Delete Conversion</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content-area-body">
                        <!--! BEGIN: Single Message [start] !-->
                        <div class="single-chat-item mb-5">
                            <div class="d-flex align-items-center gap-3 mb-3">
                                <a href="javascript:void(0)" class="avatar-image">
                                    <img src="assets/images/avatar/1.png" class="img-fluid rounded-circle" alt="image">
                                </a>
                                <div class="d-flex align-items-center gap-2">
                                    <a href="javascript:void(0);">Alexandra Della</a>
                                    <span class="wd-5 ht-5 bg-gray-400 rounded-circle"></span>
                                    <span class="fs-11 text-muted">10:32 PM</span>
                                </div>
                            </div>
                            <div class="wd-500 p-3 rounded-5 bg-gray-200">
                                <p class="py-2 px-3 rounded-5 bg-white">Hi,</p>
                                <p class="py-2 px-3 rounded-5 bg-white mb-0">How are you?</p>
                            </div>
                        </div>
                        <!--! END: Single Message  [start] !-->
                        <!--! BEGIN: Single Message [Reply] !-->
                        <div class="single-chat-item mb-5">
                            <div class="d-flex flex-row-reverse align-items-center gap-3 mb-3">
                                <a href="javascript:void(0)" class="avatar-image">
                                    <img src="assets/images/avatar/2.png" class="img-fluid rounded-circle" alt="image">
                                </a>
                                <div class="d-flex flex-row-reverse align-items-center gap-2">
                                    <a href="javascript:void(0);">Green Cute</a>
                                    <span class="wd-5 ht-5 bg-gray-400 rounded-circle"></span>
                                    <span class="fs-11 text-muted">10:35 PM</span>
                                </div>
                            </div>
                            <div class="wd-500 p-3 rounded-5 bg-gray-200 ms-auto">
                                <p class="py-2 px-3 rounded-5 bg-white">Hello Alex!!! Welcome to Live Chat!!!</p>
                                <p class="py-2 px-3 rounded-5 bg-white mb-0">My name is Green & How can I help you today???</p>
                            </div>
                        </div>
                        <!--! END: Single Message [Reply] !-->
                        <!--! BEGIN: Single Message [start] !-->
                        <div class="single-chat-item mb-5">
                            <div class="d-flex align-items-center gap-3 mb-3">
                                <a href="javascript:void(0)" class="avatar-image">
                                    <img src="assets/images/avatar/1.png" class="img-fluid rounded-circle" alt="image">
                                </a>
                                <div class="d-flex align-items-center gap-2">
                                    <a href="javascript:void(0);">Alexandra Della</a>
                                    <span class="wd-5 ht-5 bg-gray-400 rounded-circle"></span>
                                    <span class="fs-11 text-muted">10:40 PM</span>
                                </div>
                            </div>
                            <div class="wd-500 p-3 rounded-5 bg-gray-200">
                                <p class="py-2 px-3 rounded-5 bg-white">Hi, I wanted to check my order status....</p>
                                <p class="py-2 px-3 rounded-5 bg-white mb-0">My order number is <a href="javascript:void(0);">#NXL0458</a></p>
                            </div>
                        </div>
                        <!--! END: Single Message  [start] !-->
                        <!--! BEGIN: Single Message [Reply] !-->
                        <div class="single-chat-item mb-5">
                            <div class="d-flex flex-row-reverse align-items-center gap-3 mb-3">
                                <a href="javascript:void(0)" class="avatar-image">
                                    <img src="assets/images/avatar/2.png" class="img-fluid rounded-circle" alt="image">
                                </a>
                                <div class="d-flex flex-row-reverse align-items-center gap-2">
                                    <a href="javascript:void(0);">Green Cute</a>
                                    <span class="wd-5 ht-5 bg-gray-400 rounded-circle"></span>
                                    <span class="fs-11 text-muted">10:42 PM</span>
                                </div>
                            </div>
                            <div class="wd-500 p-3 rounded-5 bg-gray-200 ms-auto">
                                <p class="py-2 px-3 rounded-5 bg-white">No problem, let me check that for you.</p>
                                <p class="py-2 px-3 rounded-5 bg-white">Thanks for the information!!! Give me one moment please while I check on that for you.</p>
                                <p class="py-2 px-3 rounded-5 bg-white mb-0">Thanks for your times, Your order <a href="javascript:void(0);">#NXL0458</a> will arive on this weekend.</p>
                            </div>
                        </div>
                        <!--! END: Single Message [Reply] !-->
                        <!--! BEGIN: Single Message [start] !-->
                        <div class="single-chat-item mb-5">
                            <div class="d-flex align-items-center gap-3 mb-3">
                                <a href="javascript:void(0)" class="avatar-image">
                                    <img src="assets/images/avatar/1.png" class="img-fluid rounded-circle" alt="image">
                                </a>
                                <div class="d-flex align-items-center gap-2">
                                    <a href="javascript:void(0);">Alexandra Della</a>
                                    <span class="wd-5 ht-5 bg-gray-400 rounded-circle"></span>
                                    <span class="fs-11 text-muted">10:45 PM</span>
                                </div>
                            </div>
                            <div class="wd-500 p-3 rounded-5 bg-gray-200">
                                <p class="py-2 px-3 rounded-5 bg-white">Thanks. I'm worried😳 it won't arrive in time⌚ for my daughter's birthday🎂 party🎉 this weekend.</p>
                                <p class="py-2 px-3 rounded-5 bg-white mb-0">Order tracking number is: <a href="javascript:void(0);">#698745</a></p>
                            </div>
                        </div>
                        <!--! END: Single Message  [start] !-->
                        <!--! BEGIN: Single Message [Reply] !-->
                        <div class="single-chat-item mb-5">
                            <div class="d-flex flex-row-reverse align-items-center gap-3 mb-3">
                                <a href="javascript:void(0)" class="avatar-image">
                                    <img src="assets/images/avatar/2.png" class="img-fluid rounded-circle" alt="image">
                                </a>
                                <div class="d-flex flex-row-reverse align-items-center gap-2">
                                    <a href="javascript:void(0);">Green Cute</a>
                                    <span class="wd-5 ht-5 bg-gray-400 rounded-circle"></span>
                                    <span class="fs-11 text-muted">10:48 PM</span>
                                </div>
                            </div>
                            <div class="wd-500 p-3 rounded-5 bg-gray-200 ms-auto">
                                <p class="py-2 px-3 rounded-5 bg-white">I understand your concern… I wouldn't want my child's gift to arrive late either.</p>
                                <p class="py-2 px-3 rounded-5 bg-white">It looks like your order is set to arrive in 2 business days, so it should arrive by Friday, just in time!</p>
                                <div class="mb-3 d-flex align-items-center justify-content-between bg-white border rounded-3">
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0)" class="p-3 d-flex align-items-center border-end wd-70 ht-70">
                                            <img src="assets/images/file-icons/zip.png" class="img-fluid" alt="image">
                                        </a>
                                        <div class="d-block ms-3">
                                            <a href="javascript:void(0)" class="fs-13 fw-700 text-dark d-block">Order.zip</a>
                                            <small class="fw-300 text-dark">402.65/KB</small>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center p-3 border-start">
                                        <a href="javascript:void(0)" class="avatar-text file-download">
                                            <i class="feather-download"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="mb-3 d-flex align-items-center justify-content-between bg-white border rounded-3">
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0)" class="p-3 d-flex align-items-center border-end wd-70 ht-70">
                                            <img src="assets/images/file-icons/png.png" class="img-fluid" alt="image">
                                        </a>
                                        <div class="d-block ms-3">
                                            <a href="javascript:void(0)" class="fs-13 fw-700 text-dark d-block">Document.png</a>
                                            <small class="fw-300 text-dark">480.14/KB</small>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center p-3 border-start">
                                        <a href="javascript:void(0)" class="avatar-text file-download">
                                            <i class="feather-download"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-between bg-white border rounded-3">
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0)" class="p-3 d-flex align-items-center border-end wd-70 ht-70">
                                            <img src="assets/images/file-icons/psd.png" class="img-fluid" alt="image">
                                        </a>
                                        <div class="d-block ms-3">
                                            <a href="javascript:void(0)" class="fs-13 fw-700 text-dark d-block">Photos.psd</a>
                                            <small class="fw-300 text-dark">248.54/KB</small>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center p-3 border-start">
                                        <a href="javascript:void(0)" class="avatar-text file-download">
                                            <i class="feather-download"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--! END: Single Message [Reply] !-->
                        <!--! BEGIN: Single Message [start] !-->
                        <div class="single-chat-item mb-5">
                            <div class="d-flex align-items-center gap-3 mb-3">
                                <a href="javascript:void(0)" class="avatar-image">
                                    <img src="assets/images/avatar/1.png" class="img-fluid rounded-circle" alt="image">
                                </a>
                                <div class="d-flex align-items-center gap-2">
                                    <a href="javascript:void(0);">Alexandra Della</a>
                                    <span class="wd-5 ht-5 bg-gray-400 rounded-circle"></span>
                                    <span class="fs-11 text-muted">10:50 PM</span>
                                </div>
                            </div>
                            <div class="wd-500 p-3 rounded-5 bg-gray-200">
                                <p class="py-2 px-3 rounded-5 bg-white">The birthday🎂 ceremony preparation almost completed</p>
                                <p class="py-2 px-3 rounded-5 bg-white mb-0">Thank your so much.....!!!!</p>
                            </div>
                        </div>
                        <!--! END: Single Message  [start] !-->
                        <!--! BEGIN: Single Message [Reply] !-->
                        <div class="single-chat-item mb-5">
                            <div class="d-flex flex-row-reverse align-items-center gap-3 mb-3">
                                <a href="javascript:void(0)" class="avatar-image">
                                    <img src="assets/images/avatar/2.png" class="img-fluid rounded-circle" alt="image">
                                </a>
                                <div class="d-flex flex-row-reverse align-items-center gap-2">
                                    <a href="javascript:void(0);">Green Cute</a>
                                    <span class="wd-5 ht-5 bg-gray-400 rounded-circle"></span>
                                    <span class="fs-11 text-muted">10:53 PM</span>
                                </div>
                            </div>
                            <div class="wd-500 p-3 rounded-5 bg-gray-200 ms-auto">
                                <p class="py-2 px-3 rounded-5 bg-white">I understand your concern......!!</p>
                                <p class="py-2 px-3 rounded-5 bg-white mb-0">Anything else can I help you???</p>
                            </div>
                        </div>
                        <!--! END: Single Message [Reply] !-->
                        <!--! BEGIN: Single Message [start] !-->
                        <div class="single-chat-item mb-0">
                            <div class="d-flex align-items-center gap-3 mb-3">
                                <a href="javascript:void(0)" class="avatar-image">
                                    <img src="assets/images/avatar/1.png" class="img-fluid rounded-circle" alt="image">
                                </a>
                                <div class="d-flex align-items-center gap-2">
                                    <a href="javascript:void(0);">Alexandra Della</a>
                                    <span class="wd-5 ht-5 bg-gray-400 rounded-circle"></span>
                                    <span class="fs-11 text-muted">00:00 AM/PM</span>
                                </div>
                            </div>
                            <div class="wd-500 p-3 rounded-5 bg-gray-200">
                                <div class="py-2 px-3 rounded-5 bg-white d-flex align-items-center text typing chat-message-items">
                                    <div class="fs-12 fw-semibold text-success">Typing</div>
                                    <div class="wave">
                                        <span class="dot"></span>
                                        <span class="dot"></span>
                                        <span class="dot"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--! END: Single Message  [start] !-->
                    </div>
                    <!--! BEGIN: Message Editor !-->
                    <div class="d-flex align-items-center justify-content-between border-top border-gray-5 bg-white sticky-bottom">
                        <div class="d-flex align-center">
                            <div class="dropdown border-end border-gray-5">
                                <a href="javascript:void(0)" data-bs-toggle="dropdown">
                                    <div class="wd-60 d-flex align-items-center justify-content-center" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Pick Template" style="height: 59px"><i class="feather-hash"></i></div>
                                </a>
                                <ul class="dropdown-menu wd-300">
                                    <li>
                                        <a href="javascript:void(0)" class="dropdown-item"><i class="feather-file-text me-3"></i>Welcome you message</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" class="dropdown-item"><i class="feather-file-text me-3"></i>Your issues solved</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" class="dropdown-item"><i class="feather-file-text me-3"></i>Thank you message</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" class="dropdown-item"><i class="feather-file-text me-3"></i>Make a offer message</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" class="dropdown-item"><i class="feather-file-text me-3"></i>Add the Unsubscribe option</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" class="dropdown-item"><i class="feather-file-text me-3"></i>Thank your customer for joining</a>
                                    </li>
                                    <li class="dropdown-divider"></li>
                                    <li>
                                        <a href="javascript:void(0)" class="dropdown-item"><i class="feather-save me-3"></i>Save as Template</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" class="dropdown-item"><i class="feather-sun me-3"></i>Manage Template</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="dropdown border-end border-gray-5">
                                <a href="javascript:void(0)" data-bs-toggle="dropdown">
                                    <div class="wd-60 d-flex align-items-center justify-content-center" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Upload Attachments" style="height: 59px"><i class="feather-link"></i></div>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="javascript:void(0)" class="dropdown-item"><i class="feather-image me-3"></i>Upload Images</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" class="dropdown-item"><i class="feather-mic me-3"></i>Upload Audios</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" class="dropdown-item"><i class="feather-video me-3"></i>Upload Videos</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" class="dropdown-item"><i class="feather-file me-3"></i>Upload Documents</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="dropdown border-end border-gray-5 d-none d-sm-block">
                                <a href="javascript:void(0)" data-bs-toggle="dropdown">
                                    <div class="wd-60 d-flex align-items-center justify-content-center" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Calling Options" style="height: 59px"><i class="feather-phone-call"></i></div>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="javascript:void(0)" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#voiceCallingModalScreen"><i class="feather-phone-call me-3"></i>Audio Call</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#videoCallingModalScreen"><i class="feather-video me-3"></i>Video Call</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <input class="form-control border-0 emoji-picker" placeholder="Type your message here...">
                        <div class="border-start border-gray-5 send-message">
                            <a href="javascript:void(0)" class="wd-60 d-flex align-items-center justify-content-center" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Send Message" style="height: 59px"><i class="feather-send"></i></a>
                        </div>
                    </div>
                    <!--! END: Message Editor !-->
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
