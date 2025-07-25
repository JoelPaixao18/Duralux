@extends('authentication.reset_pass.creative.layout.main')

@section('content-auth-reset_pass-creative')

        <!--! [Start] Main Content !-->
    <!--! ================================================================ !-->
    <main class="auth-creative-wrapper">
        <div class="auth-creative-inner">
            <div class="creative-card-wrapper">
                <div class="card my-4 overflow-hidden" style="z-index: 1">
                    <div class="row flex-1 g-0">
                        <div class="col-lg-6 h-100 my-auto">
                            <div class="wd-50 bg-white p-2 rounded-circle shadow-lg position-absolute translate-middle top-50 start-50">
                                <img src="assets/images/logo-abbr.png" alt="" class="img-fluid">
                            </div>
                            <div class="creative-card-body card-body p-sm-5">
                                <h2 class="fs-20 fw-bolder mb-4">Reset</h2>
                                <h4 class="fs-13 fw-bold mb-2">Reset to your username/password</h4>
                                <p class="fs-12 fw-medium text-muted">Enter your email and a reset link will sent to you, let's access our the best recommendation for you.</p>
                                <form action="https://bestwpware.com/html/tf/duralux-demo/auth-resetting-creative.html" class="w-100 mt-4 pt-2">
                                    <div class="mb-4">
                                        <input class="form-control" placeholder="Email or Username" required>
                                    </div>
                                    <div class="mt-5">
                                        <button type="submit" class="btn btn-lg btn-primary w-100">Reset Now</button>
                                    </div>
                                </form>
                                <div class="mt-5 text-muted">
                                    <span> Don't have an account?</span>
                                    <a href="auth-register-creative.html" class="fw-bold">Create an Account</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 bg-primary">
                            <div class="h-100 d-flex align-items-center justify-content-center">
                                <img src="assets/images/auth/auth-user.png" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!--! ================================================================ !-->
    <!--! [End] Main Content !-->

@endsection