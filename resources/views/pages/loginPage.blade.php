@extends("layouts/template")
@section("mainContent")
<div class="limiter">
    <div class="container-login100" style="background-image: url('images/img-01.jpg');">
        <div class="wrap-login100 p-t-190 p-b-30">
            <form action="{{url('/login')}}" method="POST" class="login100-form validate-form">
                <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                <span id="title" class="login100-form-title p-b-49">
                    Login
                </span>
                <div class="wrap-input100 validate-input m-b-10">
                    <input class="input100" type="text" name="username" placeholder="Username">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-user"></i>
                    </span>
                </div>

                <div class="wrap-input100 validate-input m-b-10">
                    <input class="input100" type="password" name="pass" placeholder="Password">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-lock"></i>
                    </span>
                </div>

                <div class="container-login100-form-btn p-t-10">
                    <button type="submit" class="login100-form-btn">
                        Login
                    </button>
                </div>

                <div class="text-center w-full p-t-25 p-b-230">
                    <a href="#" class="txt1">
                        Forgot Username / Password?
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection