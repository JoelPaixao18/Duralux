@extends('projects.projectsCreate.layout.principal')
@section('title', 'Duralux || Projects Create')
@section('content-projectsCreate')
<div class="nxl-content">
    <!-- [ page-header ] start -->
    <div class="page-header">
        <div class="page-header-left d-flex align-items-center">
            <div class="page-header-title">
                <h5 class="m-b-10">Projects</h5>
            </div>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">Create</li>
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
                    <div class="dropdown">
                        <a class="btn btn-light-brand" data-bs-toggle="dropdown" data-bs-offset="0, 10" data-bs-auto-close="outside">
                            <i class="feather-layers me-2"></i>
                            <span>Tab-List</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <div class="dropdown-item">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="checkType" checked="checked">
                                    <label class="custom-control-label c-pointer" for="checkType">Type</label>
                                </div>
                            </div>
                            <div class="dropdown-item">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="checkDetails" checked="checked">
                                    <label class="custom-control-label c-pointer" for="checkDetails">Details</label>
                                </div>
                            </div>
                            <div class="dropdown-item">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="checkSettings" checked="checked">
                                    <label class="custom-control-label c-pointer" for="checkSettings">Settings</label>
                                </div>
                            </div>
                            <div class="dropdown-item">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="checkBudjets" checked="checked">
                                    <label class="custom-control-label c-pointer" for="checkBudjets">Budjets</label>
                                </div>
                            </div>
                            <div class="dropdown-item">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="checkAssigned" checked="checked">
                                    <label class="custom-control-label c-pointer" for="checkAssigned">Assigned</label>
                                </div>
                            </div>
                            <div class="dropdown-item">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="checkTarget" checked="checked">
                                    <label class="custom-control-label c-pointer" for="checkTarget">Target</label>
                                </div>
                            </div>
                            <div class="dropdown-item">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="checkAttachement" checked="checked">
                                    <label class="custom-control-label c-pointer" for="checkAttachement">Attachement</label>
                                </div>
                            </div>
                            <div class="dropdown-item">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="checkCompleted" checked="checked">
                                    <label class="custom-control-label c-pointer" for="checkCompleted">Completed</label>
                                </div>
                            </div>
                            <div class="dropdown-item">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="checkRecommendation" checked="checked">
                                    <label class="custom-control-label c-pointer" for="checkRecommendation">Recommendation</label>
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
                    <a href="javascript:void(0);" class="btn btn-primary">
                        <i class="feather-send me-2"></i>
                        <span>Sent Invitation</span>
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
            <div class="col-lg-12">
                <div class="card border-top-0">
                    <div class="card-body p-0" id="project-create-steps">
                        <div class="step-title border-top">Type</div>
                        <section class="step-body mt-4">
                            <form id="project-type">
                                <fieldset>
                                    <div class="mb-5">
                                        <h2 class="fs-16 fw-bold">Project type</h2>
                                        <p class="text-muted">Select project type first.</p>
                                        <label class="error" style="display: none"></label>
                                    </div>
                                    <fieldset>
                                        <label class="w-100" for="project_personal">
                                            <input class="card-input-element" type="radio" name="project-type" id="project_personal" required>
                                            <span class="card card-body d-flex flex-row justify-content-between align-items-center">
                                                <span class="hstack gap-3">
                                                    <span class="avatar-text">
                                                        <i class="feather-user"></i>
                                                    </span>
                                                    <span>
                                                        <span class="d-block fs-13 fw-bold text-dark">Personal Project</span>
                                                        <span class="d-block text-muted mb-0">If you need more info, please check it out</span>
                                                    </span>
                                                </span>
                                            </span>
                                        </label>
                                        <label class="w-100" for="project_team">
                                            <input class="card-input-element" type="radio" name="project-type" id="project_team">
                                            <span class="card card-body d-flex flex-row justify-content-between align-items-center">
                                                <span class="hstack gap-3">
                                                    <span class="avatar-text">
                                                        <i class="feather-users"></i>
                                                    </span>
                                                    <span>
                                                        <span class="d-block fs-13 fw-bold text-dark">Team Project</span>
                                                        <span class="d-block text-muted mb-0">Create corporate account to manage users</span>
                                                    </span>
                                                </span>
                                            </span>
                                        </label>
                                    </fieldset>
                                </fieldset>
                                <hr class="mb-5">
                                <fieldset>
                                    <div class="mb-5">
                                        <h2 class="fs-16 fw-bold">Project manage</h2>
                                        <p class="text-muted">Who can manage projects</p>
                                        <label class="error" style="display: none"></label>
                                    </div>
                                    <fieldset>
                                        <label class="w-100" for="project_everyone">
                                            <input class="card-input-element" type="radio" name="project-manage" id="project_everyone" required>
                                            <span class="card card-body d-flex flex-row justify-content-between align-items-center">
                                                <span class="hstack gap-3">
                                                    <span class="avatar-text">
                                                        <i class="feather-globe"></i>
                                                    </span>
                                                    <span>
                                                        <span class="d-block fs-13 fw-bold text-dark">Everyone</span>
                                                        <span class="d-block text-muted mb-0">All users now can to see it, but guests can't access.</span>
                                                    </span>
                                                </span>
                                            </span>
                                        </label>
                                        <label class="w-100" for="project_admin">
                                            <input class="card-input-element" type="radio" name="project-manage" id="project_admin">
                                            <span class="card card-body d-flex flex-row justify-content-between align-items-center">
                                                <span class="hstack gap-3">
                                                    <span class="avatar-text">
                                                        <i class="feather-shield"></i>
                                                    </span>
                                                    <span>
                                                        <span class="d-block fs-13 fw-bold text-dark">Only Admin's</span>
                                                        <span class="d-block text-muted mb-0">Only admin's can manage everythings.</span>
                                                    </span>
                                                </span>
                                            </span>
                                        </label>
                                        <label class="w-100" for="project_specific">
                                            <input class="card-input-element" type="radio" name="project-manage" id="project_specific">
                                            <span class="card card-body d-flex flex-row justify-content-between align-items-center">
                                                <span class="hstack gap-3">
                                                    <span class="avatar-text">
                                                        <i class="feather-settings"></i>
                                                    </span>
                                                    <span>
                                                        <span class="d-block fs-13 fw-bold text-dark">Only to Specific People</span>
                                                        <span class="d-block text-muted mb-0">Only some specific people can able to see it.</span>
                                                    </span>
                                                </span>
                                            </span>
                                        </label>
                                    </fieldset>
                                </fieldset>
                            </form>
                        </section>
                        <div class="step-title border-top">Details</div>
                        <section class="step-body mt-4">
                            <form id="project-details">
                                <fieldset>
                                    <div class="mb-5">
                                        <h2 class="fs-16 fw-bold">Project details</h2>
                                        <p class="text-muted">You project details gose here.</p>
                                    </div>
                                    <fieldset>
                                        <div class="mb-4">
                                            <label for="projectName" class="form-label">Project Name <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="projectName" name="projectName" value="Website design and development" required>
                                        </div>
                                        <div class="mb-4">
                                            <label class="form-label">Project Description <span class="text-danger">*</span></label>
                                            <div id="projectDescription" class="ht-200">
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores beatae inventore reiciendis ipsum natus, porro recusandae sunt accusantium reprehenderit aliquid commodi est veniam sit molestiae, nesciunt cupiditate. Laborum, culpa maxime.</p>
                                            </div>
                                        </div>
                                        <div class="mb-4">
                                            <label for="ratePerHour" class="form-label">Rate Per Hour <span class="text-danger">*</span></label>
                                            <input type="number" class="form-control" id="ratePerHour" name="ratePerHour" value="20" required>
                                        </div>
                                        <div class="mb-4">
                                            <label for="projectClient" class="form-label">Project Client <span class="text-danger">*</span></label>
                                            <select id="projectClient" class="form-select" name="projectClient">
                                                <option value="1" data-user="1" selected>Alexandra Della - Website design and development</option>
                                                <option value="2" data-user="2">Curtis Green - User experience(UX) and user interface(UI)</option>
                                                <option value="3" data-user="3">Marianne Audrey - Responsive and mobile design</option>
                                                <option value="4" data-user="4">Holland Scott - E-commerce website design & development</option>
                                                <option value="5" data-user="5">Olive Delarosa - Custom graphics and icon design</option>
                                                <option value="6" data-user="6">Alexandra Della - Website design and development</option>
                                                <option value="7" data-user="7">Curtis Green - User experience(UX) and user interface(UI)</option>
                                                <option value="8" data-user="8">Marianne Audrey - Responsive and mobile design</option>
                                                <option value="9" data-user="9">Holland Scott - E-commerce website design & development</option>
                                                <option value="10" data-user="10">Olive Delarosa - Custom graphics and icon design</option>
                                            </select>
                                        </div>
                                        <div class="mb-4">
                                            <label for="billingType" class="form-label">Billing type <span class="text-danger">*</span></label>
                                            <select id="billingType" class="form-select" name="billingType">
                                                <option value="primary" data-bg="bg-primary">Fixed Rate</option>
                                                <option value="warning" data-bg="bg-warning" selected>Tasks Hours</option>
                                                <option value="success" data-bg="bg-success">Project Hours</option>
                                            </select>
                                        </div>
                                        <div class="mb-4">
                                            <label for="projectStatus" class="form-label">Project status <span class="text-danger">*</span></label>
                                            <select id="projectStatus" class="form-select" name="projectStatus">
                                                <option value="success" data-bg="bg-success" selected>Active</option>
                                                <option value="warning" data-bg="bg-warning">Inactive</option>
                                                <option value="danger" data-bg="bg-danger">Declined</option>
                                                <option value="primary" data-bg="bg-primary">InProgress</option>
                                                <option value="success" data-bg="bg-success">Finished</option>
                                            </select>
                                        </div>
                                        <div class="mb-4">
                                            <label for="projectTags" class="form-label">Project tags <span class="text-danger">*</span></label>
                                            <select id="projectTags" class="form-select" name="projectTags" multiple>
                                                <option value="success" data-bg="bg-success">VIP</option>
                                                <option value="info" data-bg="bg-info">Bugs</option>
                                                <option value="primary" data-bg="bg-primary">Team</option>
                                                <option value="teal" data-bg="bg-teal" selected>Primary</option>
                                                <option value="success" data-bg="bg-success">Updates</option>
                                                <option value="warning" data-bg="bg-warning">Personal</option>
                                                <option value="danger" data-bg="bg-danger">Promotions</option>
                                                <option value="indigo" data-bg="bg-indigo">Customs</option>
                                                <option value="primary" data-bg="bg-primary">Wholesale</option>
                                                <option value="danger" data-bg="bg-danger">Low Budget</option>
                                                <option value="teal" data-bg="bg-teal">High Budget</option>
                                            </select>
                                        </div>
                                        <div class="mb-4">
                                            <label for="projectReleaseDate" class="form-label">Release Date <span class="text-danger">*</span></label>
                                            <input class="form-control" id="projectReleaseDate" name="projectReleaseDate" placeholder="Release Date" value="26/03/2023" required>
                                        </div>
                                        <hr class="mb-5">
                                        <div class="custom-control custom-checkbox mb-2">
                                            <input type="checkbox" class="custom-control-input" id="sendProjectEmail" checked>
                                            <label class="custom-control-label c-pointer" for="sendProjectEmail">Send project created email.</label>
                                        </div>
                                        <div class="custom-control custom-checkbox mb-2">
                                            <input type="checkbox" class="custom-control-input" id="calculateTasks" checked>
                                            <label class="custom-control-label c-pointer" for="calculateTasks">Calculate progress through tasks.</label>
                                        </div>
                                        <div class="custom-control custom-checkbox mb-2">
                                            <input type="checkbox" class="custom-control-input" id="allowNotifications" checked>
                                            <label class="custom-control-label c-pointer" for="allowNotifications">Allow Notifications by Phone or Email.</label>
                                        </div>
                                    </fieldset>
                                </fieldset>
                            </form>
                        </section>
                        <div class="step-title border-top">Settings</div>
                        <section class="step-body mt-4">
                            <form id="project-settings">
                                <fieldset>
                                    <div class="mb-5">
                                        <h2 class="fs-16 fw-bold">Project settings</h2>
                                        <p class="text-muted">Settings for your project features here.</p>
                                    </div>
                                    <fieldset>
                                        <div class="mb-4">
                                            <label for="sendcontactsNotifications" class="form-label">Send contacts notifications</label>
                                            <select id="sendcontactsNotifications" class="form-select" name="sendcontactsNotifications">
                                                <option value="1" data-icon="feather-user">Specific contacts</option>
                                                <option value="2" data-icon="feather-bell-off">Don't send notification</option>
                                                <option value="3" data-icon="feather-bell" selected>All contact with notification</option>
                                            </select>
                                        </div>
                                    </fieldset>
                                    <hr class="mb-5">
                                    <fieldset>
                                        <div class="mb-5">
                                            <h2 class="fs-16 fw-bold">Visible tabs</h2>
                                            <p class="text-muted">Visible tabs for your project.</p>
                                        </div>
                                        <fieldset>
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="custom-control custom-checkbox mb-3">
                                                        <input type="checkbox" class="custom-control-input" id="visibleTabTasks" checked>
                                                        <label class="custom-control-label c-pointer" for="visibleTabTasks">Tasks</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="custom-control custom-checkbox mb-3">
                                                        <input type="checkbox" class="custom-control-input" id="visibleTabTimesheets" checked>
                                                        <label class="custom-control-label c-pointer" for="visibleTabTimesheets">Timesheets</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="custom-control custom-checkbox mb-3">
                                                        <input type="checkbox" class="custom-control-input" id="visibleTabMilestones" checked>
                                                        <label class="custom-control-label c-pointer" for="visibleTabMilestones">Milestones</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="custom-control custom-checkbox mb-3">
                                                        <input type="checkbox" class="custom-control-input" id="visibleTabFiles" checked>
                                                        <label class="custom-control-label c-pointer" for="visibleTabFiles">Files</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="custom-control custom-checkbox mb-3">
                                                        <input type="checkbox" class="custom-control-input" id="visibleTabDiscussions" checked>
                                                        <label class="custom-control-label c-pointer" for="visibleTabDiscussions">Discussions</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="custom-control custom-checkbox mb-3">
                                                        <input type="checkbox" class="custom-control-input" id="visibleTabGantt" checked>
                                                        <label class="custom-control-label c-pointer" for="visibleTabGantt">GanttTickets</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="custom-control custom-checkbox mb-3">
                                                        <input type="checkbox" class="custom-control-input" id="visibleTabTickets" checked>
                                                        <label class="custom-control-label c-pointer" for="visibleTabTickets">Tickets</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="custom-control custom-checkbox mb-3">
                                                        <input type="checkbox" class="custom-control-input" id="visibleTabContracts" checked>
                                                        <label class="custom-control-label c-pointer" for="visibleTabContracts">Contracts</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="custom-control custom-checkbox mb-3">
                                                        <input type="checkbox" class="custom-control-input" id="visibleTabProposals" checked>
                                                        <label class="custom-control-label c-pointer" for="visibleTabProposals">Proposals</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="custom-control custom-checkbox mb-3">
                                                        <input type="checkbox" class="custom-control-input" id="visibleTabEstimates" checked>
                                                        <label class="custom-control-label c-pointer" for="visibleTabEstimates">Estimates</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="custom-control custom-checkbox mb-3">
                                                        <input type="checkbox" class="custom-control-input" id="visibleTabInvoices" checked>
                                                        <label class="custom-control-label c-pointer" for="visibleTabInvoices">Invoices</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="custom-control custom-checkbox mb-3">
                                                        <input type="checkbox" class="custom-control-input" id="visibleTabSubscriptions" checked>
                                                        <label class="custom-control-label c-pointer" for="visibleTabSubscriptions">Subscriptions</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="custom-control custom-checkbox mb-3">
                                                        <input type="checkbox" class="custom-control-input" id="visibleTabExpenses" checked>
                                                        <label class="custom-control-label c-pointer" for="visibleTabExpenses">Expenses</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="custom-control custom-checkbox mb-3">
                                                        <input type="checkbox" class="custom-control-input" id="visibleTabNotes" checked>
                                                        <label class="custom-control-label c-pointer" for="visibleTabNotes">Notes</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="custom-control custom-checkbox mb-3">
                                                        <input type="checkbox" class="custom-control-input" id="visibleTabActivity" checked>
                                                        <label class="custom-control-label c-pointer" for="visibleTabActivity">Activity</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </fieldset>
                                    <hr class="mb-5">
                                    <fieldset>
                                        <div class="mb-5">
                                            <h2 class="fs-16 fw-bold">Project control</h2>
                                            <p class="text-muted">Project control for your project.</p>
                                        </div>
                                        <fieldset>
                                            <div class="custom-control custom-checkbox mb-3">
                                                <input type="checkbox" class="custom-control-input" id="visibleTabviewtasks" checked>
                                                <label class="custom-control-label c-pointer" for="visibleTabviewtasks">Allow customer to view tasks</label>
                                            </div>
                                            <div class="custom-control custom-checkbox mb-3">
                                                <input type="checkbox" class="custom-control-input" id="visibleTabcreatetasks" checked>
                                                <label class="custom-control-label c-pointer" for="visibleTabcreatetasks">Allow customer to create tasks</label>
                                            </div>
                                            <div class="custom-control custom-checkbox mb-3">
                                                <input type="checkbox" class="custom-control-input" id="visibleTabedittasks" checked>
                                                <label class="custom-control-label c-pointer" for="visibleTabedittasks">Allow customer to edit tasks</label>
                                            </div>
                                            <div class="custom-control custom-checkbox mb-3">
                                                <input type="checkbox" class="custom-control-input" id="visibleTabprojecttasks" checked>
                                                <label class="custom-control-label c-pointer" for="visibleTabprojecttasks">Allow customer to comment on project tasks</label>
                                            </div>
                                            <div class="custom-control custom-checkbox mb-3">
                                                <input type="checkbox" class="custom-control-input" id="visibleTabtaskattachments" checked>
                                                <label class="custom-control-label c-pointer" for="visibleTabtaskattachments">Allow customer to view task attachments</label>
                                            </div>
                                            <div class="custom-control custom-checkbox mb-3">
                                                <input type="checkbox" class="custom-control-input" id="visibleTabchecklistitems" checked>
                                                <label class="custom-control-label c-pointer" for="visibleTabchecklistitems">Allow customer to view task checklist items</label>
                                            </div>
                                            <div class="custom-control custom-checkbox mb-3">
                                                <input type="checkbox" class="custom-control-input" id="visibleTabattachmentstasks" checked>
                                                <label class="custom-control-label c-pointer" for="visibleTabattachmentstasks">Allow customer to upload attachments on tasks</label>
                                            </div>
                                            <div class="custom-control custom-checkbox mb-3">
                                                <input type="checkbox" class="custom-control-input" id="visibleTabloggedtime" checked>
                                                <label class="custom-control-label c-pointer" for="visibleTabloggedtime">Allow customer to view task total logged time</label>
                                            </div>
                                            <div class="custom-control custom-checkbox mb-3">
                                                <input type="checkbox" class="custom-control-input" id="visibleTabuploadfiles" checked>
                                                <label class="custom-control-label c-pointer" for="visibleTabuploadfiles">Allow customer to upload files</label>
                                            </div>
                                            <div class="custom-control custom-checkbox mb-3">
                                                <input type="checkbox" class="custom-control-input" id="visibleTabopendiscussions" checked>
                                                <label class="custom-control-label c-pointer" for="visibleTabopendiscussions">Allow customer to open discussions</label>
                                            </div>
                                            <div class="custom-control custom-checkbox mb-3">
                                                <input type="checkbox" class="custom-control-input" id="visibleTabviewmilestones" checked>
                                                <label class="custom-control-label c-pointer" for="visibleTabviewmilestones">Allow customer to view milestones</label>
                                            </div>
                                            <div class="custom-control custom-checkbox mb-3">
                                                <input type="checkbox" class="custom-control-input" id="visibleTabviewtimesheet" checked>
                                                <label class="custom-control-label c-pointer" for="visibleTabviewtimesheet">Allow customer to view timesheets</label>
                                            </div>
                                            <div class="custom-control custom-checkbox mb-3">
                                                <input type="checkbox" class="custom-control-input" id="visibleTabactivitylog" checked>
                                                <label class="custom-control-label c-pointer" for="visibleTabactivitylog">Allow customer to view activity log</label>
                                            </div>
                                            <div class="custom-control custom-checkbox mb-3">
                                                <input type="checkbox" class="custom-control-input" id="visibleTabteammembers" checked>
                                                <label class="custom-control-label c-pointer" for="visibleTabteammembers">Allow customer to view team members</label>
                                            </div>
                                            <div class="custom-control custom-checkbox mb-3">
                                                <input type="checkbox" class="custom-control-input" id="visibleTabadminarea" checked>
                                                <label class="custom-control-label c-pointer" for="visibleTabadminarea">Hide project tasks on main tasks table (admin area)</label>
                                            </div>
                                        </fieldset>
                                    </fieldset>
                                </fieldset>
                            </form>
                        </section>
                        <div class="step-title border-top">Budget</div>
                        <section class="step-body mt-4">
                            <form id="project-budgets">
                                <fieldset>
                                    <fieldset>
                                        <div class="mb-5">
                                            <h2 class="fs-16 fw-bold">Project budgets</h2>
                                            <p class="text-muted">If you need more info, please check <a href="javascript:void(0);">help center</a></p>
                                            <label class="error" style="display: none"></label>
                                        </div>
                                        <fieldset>
                                            <label class="w-100" for="budgets_tire_1">
                                                <input class="card-input-element" type="radio" name="project-budgets" id="budgets_tire_1" required>
                                                <span class="card card-body d-flex flex-row justify-content-between align-items-center">
                                                    <span>
                                                        <span class="d-block fs-13 fw-normal text-muted mb-2">Budget tire 1</span>
                                                        <span class="d-block fs-16 fw-bold text-dark mb-0">$100 - $999</span>
                                                    </span>
                                                </span>
                                            </label>
                                            <label class="w-100" for="budgets_tire_2">
                                                <input class="card-input-element" type="radio" name="project-budgets" id="budgets_tire_2" required>
                                                <span class="card card-body d-flex flex-row justify-content-between align-items-center">
                                                    <span>
                                                        <span class="d-block fs-13 fw-normal text-muted mb-2">Budget tire 2</span>
                                                        <span class="d-block fs-16 fw-bold text-dark mb-0">$1,000 - $4,999</span>
                                                    </span>
                                                </span>
                                            </label>
                                            <label class="w-100" for="budgets_tire_3">
                                                <input class="card-input-element" type="radio" name="project-budgets" id="budgets_tire_3" required>
                                                <span class="card card-body d-flex flex-row justify-content-between align-items-center">
                                                    <span>
                                                        <span class="d-block fs-13 fw-normal text-muted mb-2">Budget tire 3</span>
                                                        <span class="d-block fs-16 fw-bold text-dark mb-0">$4,999 - $9,999</span>
                                                    </span>
                                                </span>
                                            </label>
                                            <label class="w-100" for="budgets_tire_4">
                                                <input class="card-input-element" type="radio" name="project-budgets" id="budgets_tire_4" required>
                                                <span class="card card-body d-flex flex-row justify-content-between align-items-center">
                                                    <span>
                                                        <span class="d-block fs-13 fw-normal text-muted mb-2">Budget tire 4</span>
                                                        <span class="d-block fs-16 fw-bold text-dark mb-0">$10,000+</span>
                                                    </span>
                                                </span>
                                            </label>
                                        </fieldset>
                                    </fieldset>
                                    <hr class="mb-5">
                                    <fieldset>
                                        <div class="mb-5">
                                            <h2 class="fs-16 fw-bold">Budgets spend</h2>
                                            <p class="text-muted">If you need more info, please check <a href="javascript:void(0);">FAQ's</a></p>
                                            <label class="error" style="display: none"></label>
                                        </div>
                                        <fieldset>
                                            <label class="w-100" for="precise_usage">
                                                <input class="card-input-element" type="radio" name="project-spend" id="precise_usage" required>
                                                <span class="card card-body d-flex flex-row justify-content-between align-items-center">
                                                    <span class="hstack gap-3">
                                                        <span class="avatar-text">
                                                            <i class="feather-user"></i>
                                                        </span>
                                                        <span>
                                                            <span class="d-block fs-13 fw-bold text-dark">Precise Usage</span>
                                                            <span class="d-block text-muted mb-0">Withdraw money to your bank account per transaction under <strong>$5000</strong> budget</span>
                                                        </span>
                                                    </span>
                                                </span>
                                            </label>
                                            <label class="w-100" for="extreme_usage">
                                                <input class="card-input-element" type="radio" name="project-spend" id="extreme_usage">
                                                <span class="card card-body d-flex flex-row justify-content-between align-items-center">
                                                    <span class="hstack gap-3">
                                                        <span class="avatar-text">
                                                            <i class="feather-users"></i>
                                                        </span>
                                                        <span>
                                                            <span class="d-block fs-13 fw-bold text-dark">Extreme Usage</span>
                                                            <span class="d-block text-muted mb-0">Withdraw money to your bank account per transaction under <strong>$50,000</strong> budget</span>
                                                        </span>
                                                    </span>
                                                </span>
                                            </label>
                                        </fieldset>
                                        <hr class="mb-5">
                                        <div class="custom-control custom-checkbox mb-2">
                                            <input type="checkbox" class="custom-control-input" id="allowChanges" checked>
                                            <label class="custom-control-label c-pointer" for="allowChanges">Allow Changes in Budget.</label>
                                        </div>
                                        <div class="custom-control custom-checkbox mb-2">
                                            <input type="checkbox" class="custom-control-input" id="budgetReset" checked>
                                            <label class="custom-control-label c-pointer" for="budgetReset">Budgets reset every month.</label>
                                        </div>
                                        <div class="custom-control custom-checkbox mb-2">
                                            <input type="checkbox" class="custom-control-input" id="promectAlert" checked>
                                            <label class="custom-control-label c-pointer" for="promectAlert">Send email alarts if project <span class="badge bg-gray-200 text-dark">80.00</span>% of budget.</label>
                                        </div>
                                    </fieldset>
                                </fieldset>
                            </form>
                        </section>
                        <div class="step-title border-top">Assagined</div>
                        <section class="step-body mt-4">
                            <fieldset>
                                <div class="mb-5">
                                    <h2 class="fs-16 fw-bold">Project Assagined</h2>
                                    <p class="text-muted">If you need more info, please check <a href="javascript:void(0);">help center</a></p>
                                </div>
                                <fieldset>
                                    <div class="mb-4">
                                        <label for="inviteTeammates" class="fw-semibold text-dark">Invite Teammates</label>
                                        <input type="text" class="form-control" id="inviteTeammates" name="inviteTeammates" placeholder="Add project memnbers by name or email..">
                                    </div>
                                    <hr class="my-5">
                                    <div class="mb-4">
                                        <h6 class="fs-13 fw-semibold pb-3 mb-3 border-bottom">Team Members</h6>
                                        <div class="d-flex align-items-center justify-content-between mb-4">
                                            <div class="d-flex align-items-center gap-3">
                                                <div class="avatar-image d-none d-sm-block">
                                                    <img src="assets/images/avatar/1.png" alt="" class="img-fluid">
                                                </div>
                                                <a href="javascript:void(0);" class="w-75">
                                                    <span class="text-truncate-1-line">Alexandra Della</span>
                                                    <span class="fs-12 fw-normal text-muted text-truncate-1-line">alex.della@gmail.com</span>
                                                </a>
                                            </div>
                                            <div class="wd-150">
                                                <select class="form-select" data-select2-teammates="teammates">
                                                    <option value="primary" data-bg="bg-primary">Admin</option>
                                                    <option value="teal" data-bg="bg-teal">Guest</option>
                                                    <option value="danger" data-bg="bg-danger" selected>Editor</option>
                                                    <option value="warning" data-bg="bg-warning">Owner</option>
                                                    <option value="success" data-bg="bg-success">Customer</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between mb-4">
                                            <div class="d-flex align-items-center gap-3">
                                                <div class="avatar-image d-none d-sm-block">
                                                    <img src="assets/images/avatar/2.png" alt="" class="img-fluid">
                                                </div>
                                                <a href="javascript:void(0);" class="w-75">
                                                    <span class="text-truncate-1-line">Archie Cantones</span>
                                                    <span class="fs-12 fw-normal text-muted text-truncate-1-line">arcie.tones@gmail.com</span>
                                                </a>
                                            </div>
                                            <div class="wd-150">
                                                <select class="form-select" data-select2-teammates="teammates">
                                                    <option value="primary" data-bg="bg-primary" selected>Admin</option>
                                                    <option value="teal" data-bg="bg-teal">Guest</option>
                                                    <option value="danger" data-bg="bg-danger">Editor</option>
                                                    <option value="warning" data-bg="bg-warning">Owner</option>
                                                    <option value="success" data-bg="bg-success">Customer</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between mb-4">
                                            <div class="d-flex align-items-center gap-3">
                                                <div class="avatar-image d-none d-sm-block">
                                                    <img src="assets/images/avatar/3.png" alt="" class="img-fluid">
                                                </div>
                                                <a href="javascript:void(0);" class="w-75">
                                                    <span class="text-truncate-1-line">Holmes Cherryman</span>
                                                    <span class="fs-12 fw-normal text-muted text-truncate-1-line">golms.chan@gmail.com</span>
                                                </a>
                                            </div>
                                            <div class="wd-150">
                                                <select class="form-select" data-select2-teammates="teammates">
                                                    <option value="primary" data-bg="bg-primary">Admin</option>
                                                    <option value="teal" data-bg="bg-teal" selected>Guest</option>
                                                    <option value="danger" data-bg="bg-danger">Editor</option>
                                                    <option value="warning" data-bg="bg-warning">Owner</option>
                                                    <option value="success" data-bg="bg-success">Customer</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between mb-4">
                                            <div class="d-flex align-items-center gap-3">
                                                <div class="avatar-image d-none d-sm-block">
                                                    <img src="assets/images/avatar/4.png" alt="" class="img-fluid">
                                                </div>
                                                <a href="javascript:void(0);" class="w-75">
                                                    <span class="text-truncate-1-line">Malanie Hanvey</span>
                                                    <span class="fs-12 fw-normal text-muted text-truncate-1-line">lanie.nveyn@gmail.com</span>
                                                </a>
                                            </div>
                                            <div class="wd-150">
                                                <select class="form-select" data-select2-teammates="teammates">
                                                    <option value="primary" data-bg="bg-primary">Admin</option>
                                                    <option value="teal" data-bg="bg-teal">Guest</option>
                                                    <option value="danger" data-bg="bg-danger">Editor</option>
                                                    <option value="warning" data-bg="bg-warning">Owner</option>
                                                    <option value="success" data-bg="bg-success" selected>Customer</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between mb-4">
                                            <div class="d-flex align-items-center gap-3">
                                                <div class="avatar-image d-none d-sm-block">
                                                    <img src="assets/images/avatar/5.png" alt="" class="img-fluid">
                                                </div>
                                                <a href="javascript:void(0);" class="w-75">
                                                    <span class="text-truncate-1-line">Kenneth Hune</span>
                                                    <span class="fs-12 fw-normal text-muted text-truncate-1-line">nneth.une@gmail.com</span>
                                                </a>
                                            </div>
                                            <div class="wd-150">
                                                <select class="form-select" data-select2-teammates="teammates">
                                                    <option value="primary" data-bg="bg-primary">Admin</option>
                                                    <option value="teal" data-bg="bg-teal">Guest</option>
                                                    <option value="danger" data-bg="bg-danger">Editor</option>
                                                    <option value="warning" data-bg="bg-warning" selected>Owner</option>
                                                    <option value="success" data-bg="bg-success">Customer</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="my-5">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="addingUsers" checked>
                                        <label class="custom-control-label c-pointer" for="addingUsers">Adding Users by Team Members</label>
                                    </div>
                                    <div class="fs-12 fw-normal text-muted">If you need more info, please check budget planning</div>
                                </fieldset>
                            </fieldset>
                        </section>
                        <div class="step-title border-top">Target</div>
                        <section class="step-body mt-4">
                            <form id="project-target">
                                <fieldset>
                                    <div class="mb-5">
                                        <h2 class="fs-16 fw-bold">Project target</h2>
                                        <p class="text-muted">If you need more info, please check <a href="javascript:void(0);">help center</a></p>
                                    </div>
                                    <fieldset>
                                        <div class="mb-4">
                                            <label for="targetTitle" class="fw-semibold text-dark">Target title</label>
                                            <input type="text" class="form-control" id="targetTitle" name="targetTitle" placeholder="First target title..">
                                        </div>
                                        <div class="mb-4">
                                            <label class="form-label">Target Description <span class="text-danger">*</span></label>
                                            <div id="targetDescription" class="ht-200">
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores beatae inventore reiciendis ipsum natus, porro recusandae sunt accusantium reprehenderit aliquid commodi est veniam sit molestiae, nesciunt cupiditate. Laborum, culpa maxime.</p>
                                            </div>
                                        </div>
                                        <div class="mb-4">
                                            <label for="targetReleaseDate" class="form-label">Release Date <span class="text-danger">*</span></label>
                                            <input class="form-control" id="targetReleaseDate" name="targetReleaseDate" placeholder="Release Date" value="26/03/2023" required>
                                        </div>
                                        <div class="mb-4">
                                            <label for="tragetAssigned" class="form-label">Taget assigned<span class="text-danger">*</span></label>
                                            <select id="tragetAssigned" class="form-select" name="tragetAssigned" multiple required>
                                                <option value="alex@outlook.com" data-user="1" selected>alex@outlook.com</option>
                                                <option value="john.deo@outlook.com" data-user="2">john.deo@outlook.com</option>
                                                <option value="green.cutte@outlook.com" data-user="3">green.cutte@outlook.com</option>
                                                <option value="nancy.elliot@outlook.com" data-user="4">nancy.elliot@outlook.com</option>
                                                <option value="mar.audrey@gmail.com" data-user="5">mar.audrey@gmail.com</option>
                                                <option value="erna.serpa@outlook.com" data-user="6">erna.serpa@outlook.com</option>
                                                <option value="green.cutte@outlook.com" data-user="7">green.cutte@outlook.com</option>
                                                <option value="nancy.elliot@outlook.com" data-user="8">nancy.elliot@outlook.com</option>
                                                <option value="mar.audrey@gmail.com" data-user="9">mar.audrey@gmail.com</option>
                                                <option value="erna.serpa@outlook.com" data-user="10">erna.serpa@outlook.com</option>
                                                <option value="mar.audrey@gmail.com" data-user="11">mar.audrey@gmail.com</option>
                                                <option value="erna.serpa@outlook.com" data-user="12">erna.serpa@outlook.com</option>
                                            </select>
                                        </div>
                                        <div class="mb-4">
                                            <label for="tragetTags" class="form-label">Project tags <span class="text-danger">*</span></label>
                                            <select id="tragetTags" class="form-select" name="tragetTags" multiple required>
                                                <option value="success" data-bg="bg-success" selected>VIP</option>
                                                <option value="info" data-bg="bg-info">Bugs</option>
                                                <option value="primary" data-bg="bg-primary" selected>Team</option>
                                                <option value="teal" data-bg="bg-teal" selected>Primary</option>
                                                <option value="success" data-bg="bg-success">Updates</option>
                                                <option value="warning" data-bg="bg-warning">Personal</option>
                                                <option value="danger" data-bg="bg-danger" selected>Promotions</option>
                                                <option value="indigo" data-bg="bg-indigo">Customs</option>
                                                <option value="primary" data-bg="bg-primary">Wholesale</option>
                                                <option value="danger" data-bg="bg-danger">Low Budget</option>
                                                <option value="teal" data-bg="bg-teal">High Budget</option>
                                            </select>
                                        </div>
                                    </fieldset>
                                    <hr class="my-5">
                                    <div class="custom-control custom-checkbox mb-2">
                                        <input type="checkbox" class="custom-control-input" id="allowChanges_2" checked>
                                        <label class="custom-control-label c-pointer" for="allowChanges_2">Allow Changes in Budget.</label>
                                    </div>
                                    <div class="custom-control custom-checkbox mb-2">
                                        <input type="checkbox" class="custom-control-input" id="allowNotifications_2" checked>
                                        <label class="custom-control-label c-pointer" for="allowNotifications_2">Allow Notifications by Phone or Email.</label>
                                    </div>
                                </fieldset>
                            </form>
                        </section>
                        <div class="step-title border-top">Attachement</div>
                        <section class="step-body mt-4">
                            <div>
                                <div class="mb-5">
                                    <h2 class="fs-16 fw-bold">Attachement files</h2>
                                    <p class="text-muted">If you need more info, please check <a href="javascript:void(0);">help center</a></p>
                                </div>
                                <div class="mb-4">
                                    <label for="choose-file" class="custom-file-upload" id="choose-file-label"> Upload Document </label>
                                    <input name="uploadDocument" type="file" id="choose-file" style="display: none">
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="card stretch stretch-full">
                                            <div class="card-body p-0 ht-200 position-relative">
                                                <a href="javascript:void(0);" class="w-100 h-100 d-flex align-items-center justify-content-center">
                                                    <img src="assets/images/file-icons/zip.png" class="img-fluid wd-80 ht-80" alt="">
                                                </a>
                                                <div class="dropdown position-absolute" style="top: 15px; right: 15px">
                                                    <a href="javascript:void(0)" class="avatar-text avatar-sm" data-bs-toggle="dropdown">
                                                        <i class="feather feather-more-vertical"></i>
                                                    </a>
                                                    <ul class="dropdown-menu overflow-hidden">
                                                        <li>
                                                            <a href="javascript:void(0)" class="dropdown-item">
                                                                <i class="feather feather-share-2 me-3"></i>
                                                                <span>Share</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" class="dropdown-item">
                                                                <i class="feather feather-info me-3"></i>
                                                                <span>Details</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" class="dropdown-item">
                                                                <i class="feather feather-edit-2 me-3"></i>
                                                                <span>Rename</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" class="dropdown-item file-download">
                                                                <i class="feather feather-download me-3"></i>
                                                                <span>Download</span>
                                                            </a>
                                                        </li>
                                                        <li class="dropdown-divider"></li>
                                                        <li>
                                                            <a href="javascript:void(0)" class="dropdown-item">
                                                                <i class="feather feather-copy me-3"></i>
                                                                <span>Copy to...</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" class="dropdown-item">
                                                                <i class="feather feather-move me-3"></i>
                                                                <span>Move to...</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#/" target="_blank" class="dropdown-item">
                                                                <i class="feather feather-link-2 me-3"></i>
                                                                <span>Open with...</span>
                                                            </a>
                                                        </li>
                                                        <li class="dropdown-divider"></li>
                                                        <li>
                                                            <a href="javascript:void(0)" class="dropdown-item successAlertMessage">
                                                                <i class="feather feather-scissors me-3"></i>
                                                                <span>Backup</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" class="dropdown-item" data-action-target="#fileFolderDeleteAction">
                                                                <i class="feather feather-trash-2 me-3"></i>
                                                                <span>Remove</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="card-footer p-4">
                                                <h2 class="fs-13 mb-1 text-truncate-1-line">UI/UX Design Templates</h2>
                                                <small class="fs-10 text-uppercase"><a href="javascript:void(0);">Project</a> / <a href="javascript:void(0);">Dashboard</a> / <span class="text-gray-500">Webapps</span></small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="card stretch stretch-full">
                                            <div class="card-body p-0 ht-200 position-relative">
                                                <a href="javascript:void(0);" class="w-100 h-100 d-flex align-items-center justify-content-center"> <img src="assets/images/file-icons/png.png" class="img-fluid wd-80 ht-80" alt=""> </a>
                                                <div class="dropdown position-absolute" style="top: 15px; right: 15px">
                                                    <a href="javascript:void(0)" class="avatar-text avatar-sm" data-bs-toggle="dropdown">
                                                        <i class="feather feather-more-vertical"></i>
                                                    </a>
                                                    <ul class="dropdown-menu overflow-hidden">
                                                        <li>
                                                            <a href="javascript:void(0)" class="dropdown-item">
                                                                <i class="feather feather-share-2 me-3"></i>
                                                                <span>Share</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" class="dropdown-item">
                                                                <i class="feather feather-info me-3"></i>
                                                                <span>Details</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" class="dropdown-item">
                                                                <i class="feather feather-edit-2 me-3"></i>
                                                                <span>Rename</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" class="dropdown-item file-download">
                                                                <i class="feather feather-download me-3"></i>
                                                                <span>Download</span>
                                                            </a>
                                                        </li>
                                                        <li class="dropdown-divider"></li>
                                                        <li>
                                                            <a href="javascript:void(0)" class="dropdown-item">
                                                                <i class="feather feather-copy me-3"></i>
                                                                <span>Copy to...</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" class="dropdown-item">
                                                                <i class="feather feather-move me-3"></i>
                                                                <span>Move to...</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#/" target="_blank" class="dropdown-item">
                                                                <i class="feather feather-link-2 me-3"></i>
                                                                <span>Open with...</span>
                                                            </a>
                                                        </li>
                                                        <li class="dropdown-divider"></li>
                                                        <li>
                                                            <a href="javascript:void(0)" class="dropdown-item successAlertMessage">
                                                                <i class="feather feather-scissors me-3"></i>
                                                                <span>Backup</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" class="dropdown-item" data-action-target="#fileFolderDeleteAction">
                                                                <i class="feather feather-trash-2 me-3"></i>
                                                                <span>Remove</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <h2 class="fs-13 mb-1 text-truncate-1-line">UI/UX Design Templates</h2>
                                                <small class="fs-10 text-uppercase"><a href="javascript:void(0);">Project</a> / <a href="javascript:void(0);">Dashboard</a> / <span class="text-gray-500">Webapps</span></small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="card stretch stretch-full">
                                            <div class="card-body p-0 ht-200 position-relative">
                                                <a href="javascript:void(0);" class="w-100 h-100 d-flex align-items-center justify-content-center"> <img src="assets/images/file-icons/pdf.png" class="img-fluid wd-80 ht-80" alt=""> </a>
                                                <div class="dropdown position-absolute" style="top: 15px; right: 15px">
                                                    <a href="javascript:void(0)" class="avatar-text avatar-sm" data-bs-toggle="dropdown">
                                                        <i class="feather feather-more-vertical"></i>
                                                    </a>
                                                    <ul class="dropdown-menu overflow-hidden">
                                                        <li>
                                                            <a href="javascript:void(0)" class="dropdown-item">
                                                                <i class="feather feather-share-2 me-3"></i>
                                                                <span>Share</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" class="dropdown-item">
                                                                <i class="feather feather-info me-3"></i>
                                                                <span>Details</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" class="dropdown-item">
                                                                <i class="feather feather-edit-2 me-3"></i>
                                                                <span>Rename</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" class="dropdown-item file-download">
                                                                <i class="feather feather-download me-3"></i>
                                                                <span>Download</span>
                                                            </a>
                                                        </li>
                                                        <li class="dropdown-divider"></li>
                                                        <li>
                                                            <a href="javascript:void(0)" class="dropdown-item">
                                                                <i class="feather feather-copy me-3"></i>
                                                                <span>Copy to...</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" class="dropdown-item">
                                                                <i class="feather feather-move me-3"></i>
                                                                <span>Move to...</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#/" target="_blank" class="dropdown-item">
                                                                <i class="feather feather-link-2 me-3"></i>
                                                                <span>Open with...</span>
                                                            </a>
                                                        </li>
                                                        <li class="dropdown-divider"></li>
                                                        <li>
                                                            <a href="javascript:void(0)" class="dropdown-item successAlertMessage">
                                                                <i class="feather feather-scissors me-3"></i>
                                                                <span>Backup</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" class="dropdown-item" data-action-target="#fileFolderDeleteAction">
                                                                <i class="feather feather-trash-2 me-3"></i>
                                                                <span>Remove</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <h2 class="fs-13 mb-1 text-truncate-1-line">UI/UX Design Templates</h2>
                                                <small class="fs-10 text-uppercase"><a href="javascript:void(0);">Project</a> / <a href="javascript:void(0);">Dashboard</a> / <span class="text-gray-500">Webapps</span></small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="card mb-4 stretch stretch-full">
                                            <div class="card-body p-0 ht-200 position-relative">
                                                <a href="javascript:void(0);" class="w-100 h-100 d-flex align-items-center justify-content-center"> <img src="assets/images/file-icons/psd.png" class="img-fluid wd-80 ht-80" alt=""> </a>
                                                <div class="dropdown position-absolute" style="top: 15px; right: 15px">
                                                    <a href="javascript:void(0)" class="avatar-text avatar-sm" data-bs-toggle="dropdown">
                                                        <i class="feather feather-more-vertical"></i>
                                                    </a>
                                                    <ul class="dropdown-menu overflow-hidden">
                                                        <li>
                                                            <a href="javascript:void(0)" class="dropdown-item">
                                                                <i class="feather feather-share-2 me-3"></i>
                                                                <span>Share</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" class="dropdown-item">
                                                                <i class="feather feather-info me-3"></i>
                                                                <span>Details</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" class="dropdown-item">
                                                                <i class="feather feather-edit-2 me-3"></i>
                                                                <span>Rename</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" class="dropdown-item file-download">
                                                                <i class="feather feather-download me-3"></i>
                                                                <span>Download</span>
                                                            </a>
                                                        </li>
                                                        <li class="dropdown-divider"></li>
                                                        <li>
                                                            <a href="javascript:void(0)" class="dropdown-item">
                                                                <i class="feather feather-copy me-3"></i>
                                                                <span>Copy to...</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" class="dropdown-item">
                                                                <i class="feather feather-move me-3"></i>
                                                                <span>Move to...</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#/" target="_blank" class="dropdown-item">
                                                                <i class="feather feather-link-2 me-3"></i>
                                                                <span>Open with...</span>
                                                            </a>
                                                        </li>
                                                        <li class="dropdown-divider"></li>
                                                        <li>
                                                            <a href="javascript:void(0)" class="dropdown-item successAlertMessage">
                                                                <i class="feather feather-scissors me-3"></i>
                                                                <span>Backup</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" class="dropdown-item" data-action-target="#fileFolderDeleteAction">
                                                                <i class="feather feather-trash-2 me-3"></i>
                                                                <span>Remove</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <h2 class="fs-13 mb-1 text-truncate-1-line">UI/UX Design Templates</h2>
                                                <small class="fs-10 text-uppercase"><a href="javascript:void(0);">Project</a> / <a href="javascript:void(0);">Dashboard</a> / <span class="text-gray-500">Webapps</span></small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <div class="step-title border-top">Completed</div>
                        <section class="step-body mt-4 text-center">
                            <img src="assets/images/general/completed-steps.png" alt="" class="img-fluid wd-300 mb-4">
                            <h4 class="fw-bold">Project Created!</h4>
                            <p class="text-muted mt-2">If you need more info, please check how to create project</p>
                            <div class="d-flex justify-content-center gap-1 mt-5">
                                <a href="javascript:void(0);" class="btn btn-light">Create New Project</a>
                                <a href="projects-view.html" class="btn btn-primary">Preview Project</a>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- [ Main Content ] end -->
</div>
@endsection