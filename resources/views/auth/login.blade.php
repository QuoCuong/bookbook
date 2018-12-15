@extends('layouts.app')

@section('content')

<!-- Start Bradcaump area -->
@include('layouts.partials.breadcrumbs')
<!-- End Bradcaump area -->

<!-- Start My Account Area -->
<section class="my_account_area pt--80 pb--55 bg--white">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-12">
                <div class="my__account__wrapper">
                    <h3 class="account__title">Login</h3>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="account__form">
                            <div class="input__box">
                                <label>Email address <span>*</span></label>
                                <input type="text" name="email" value="{{ old('email') }}">
                            </div>
                            <div class="input__box">
                                <label>Password<span>*</span></label>
                                <input type="password" name="password">
                            </div>
                            <div class="form__btn">
                                <button>Login</button>
                                <label class="label-for-checkbox">
                                    <input id="rememberme" class="input-checkbox" name="rememberme" value="forever" type="checkbox">
                                    <span>Remember me</span>
                                </label>
                            </div>
                            <a class="forget_pass" href="#">Lost your password?</a>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="my__account__wrapper">
                    <h3 class="account__title">Register</h3>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="account__form">
                            <div class="input__box">
                                <label>Email address <span>*</span></label>
                                <input type="email" name="email" value="{{ old('email') }}">
                            </div>
                            <div class="input__box">
                                <label>Password<span>*</span></label>
                                <input type="password">
                            </div>
                            <div class="input__box">
                                <label>Confirm password<span>*</span></label>
                                <input type="password" name="password_confirm">
                            </div>
                            <div class="form__btn">
                                <button>Register</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End My Account Area -->

@endsection
