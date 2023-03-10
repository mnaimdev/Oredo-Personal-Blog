@extends('frontend.master')


@section('content')
    <section class="login">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-8 m-auto">
                    <div class="login-content">
                        <h4>Sign up</h4>
                        <!--form-->
                        <form action="{{ route('guest.register.store') }}" method="post">
                            @csrf

                            @if (session('guest_register'))
                                <div class="alert alert-warning">
                                    {{ session('guest_register') }}
                                </div>
                            @endif
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Username*" name="name">
                            </div>

                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Email Address*" name="email">
                            </div>

                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password*" name="password">
                            </div>
                            <div class="sign-controls form-group">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="rememberMe">
                                    <label class="custom-control-label" for="rememberMe">Agree to our <a href=""
                                            class="btn-link">terms & conditions</a> </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn-custom">Sign Up</button>
                            </div>
                            <p class="form-group text-center">Already have an account? <a href="{{ route('guest.login') }}"
                                    class="btn-link">Login</a> </p>
                        </form>
                        <!--/-->
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
