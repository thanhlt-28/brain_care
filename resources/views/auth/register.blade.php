@extends('layouts.main')
@section('content')
<style>
    body {
        color: #000;
        overflow-x: hidden;
        height: 100%;
        background-image: url('../assets/img/blog_2.jpg');
        /* background-image: linear-gradient(to right, #D500F9, #FFD54F); */
        background-repeat: no-repeat
    }

    input,
    textarea {
        background-color: #F3E5F5;
        border-radius: 50px !important;
        padding: 12px 15px 12px 15px !important;
        width: 100%;
        box-sizing: border-box;
        border: none !important;
        border: 1px solid #F3E5F5 !important;
        font-size: 16px !important;
        color: #000 !important;
        font-weight: 400
    }

    input:focus,
    textarea:focus {
        -moz-box-shadow: none !important;
        -webkit-box-shadow: none !important;
        box-shadow: none !important;
        border: 1px solid #D500F9 !important;
        outline-width: 0;
        font-weight: 400
    }

    button:focus {
        -moz-box-shadow: none !important;
        -webkit-box-shadow: none !important;
        box-shadow: none !important;
        outline-width: 0
    }

    .card {
        border-radius: 0;
        border: none
    }

    .card1 {
        width: 50%;
        padding: 40px 30px 10px 30px
    }

    .card2 {
        width: 50%;
        background-image: linear-gradient(to right, #a0b0b7, #a080b7)
    }

    #logo {
        width: 100px;
        height: 70px;
        border-radius: 5px;
    }

    .heading {
        margin-bottom: 60px !important
    }

    ::placeholder {
        color: #000 !important;
        opacity: 1
    }

    :-ms-input-placeholder {
        color: #000 !important
    }

    ::-ms-input-placeholder {
        color: #000 !important
    }

    .form-control-label {
        font-size: 14px;
        margin-left: 15px
    }

    .msg-info {
        padding-left: 15px;
        margin-bottom: 30px
    }

    .btn-color {
        border-radius: 50px;
        color: #fff;
        background-image: linear-gradient(to right, #a0b0b7, #a080b7);
        padding: 15px;
        cursor: pointer;
        border: none !important;
        margin-top: 40px
    }

    .btn-color:hover {
        color: #fff;
        background-image: linear-gradient(to right, #a080b7, #a0b0b7)
    }

    .btn-white {
        border-radius: 50px;
        color: blue;
        font-weight: bold;
        background-color: #fff;
        padding: 8px 40px;
        cursor: pointer;
        border: 2px solid #a080b0 !important
    }

    .btn-white:hover {
        color: #fff;
        background-image: linear-gradient(to right, #a0b9b7, #a080b0)
    }

    a {
        color: #000
    }

    a:hover {
        color: #000
    }

    .bottom {
        width: 100%;
        margin-top: 50px !important
    }

    .sm-text {
        font-size: 15px
    }

    @media screen and (max-width: 992px) {
        .card1 {
            width: 100%;
            padding: 40px 30px 10px 30px
        }

        .card2 {
            width: 100%
        }

        .right {
            margin-top: 100px !important;
            margin-bottom: 100px !important
        }
    }

    @media screen and (max-width: 768px) {
        .container {
            padding: 10px !important
        }

        .card2 {
            padding: 50px
        }

        .right {
            margin-top: 50px !important;
            margin-bottom: 50px !important
        }
    }
</style>
<div class="container-wraper">
    <!-- @if(session('success'))
    <span class="mx-auto alert alert-success">
        <strong>{{ session('success') }}</strong>
    </span>
    @endif -->
    <div class="container" style="margin-top: 1%">
        <div class="container px-4 py-5 mx-auto">
            <form role="form" method="POST" action="{{route('auth.postRegister')}}" enctype="multipart/form-data">
                @csrf
                <div class="card card0">
                    <div class="d-flex flex-lg-row flex-column-reverse">
                        <div class="card card1">
                            <div class="row justify-content-center my-auto">
                                <div class="col-md-8 col-10 my-5">
                                    <div class="row justify-content-center px-3 mb-3"> <img id="logo" src="{{asset('assets/img/logo-new.png')}}"> </div>

                                    <!-- <h3 class="mb-5 text-center heading">BrainCare</h3> -->
                                    <p class="msg-info text-center">Vui lòng đăng nhập hoặc tạo tài khoản</p>

                                    <div class="form-group">
                                        <label class="form-control-label text-muted">Họ và tên</label>
                                        <input type="text" id="name" name="name" placeholder="Nhập họ và tên" class=" form-control" value="{{ old('name') }}" autofocus>
                                        @if ($errors->has('name'))
                                        <p class="text-danger msg-info">{{ $errors->first('name') }}</p>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label class="form-control-label text-muted">Email</label>
                                        <input type="text" id="email" name="email" placeholder="Nhập email" class=" form-control" value="{{ old('email') }}" autofocus>
                                        @if ($errors->has('email'))
                                        <p class="text-danger msg-info">{{ $errors->first('email') }}</p>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label class="form-control-label text-muted">Password</label>
                                        <input type="password" id="password" name="password" placeholder="Nhập mật khẩu" class="form-control">
                                    </div>
                                    @if ($errors->has('password'))
                                    <p class="text-danger msg-info">{{ $errors->first('password') }}</p>
                                    @endif
                                    <div class="form-group">
                                        <label class="form-control-label text-muted">Password</label>
                                        <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Xác nhận mật khẩu" class="form-control">
                                    </div>
                                    <div class="row justify-content-center my-3 px-3">
                                        <button type="submit" class="btn-block btn-color">Đăng ký</button>
                                    </div>
                                    <div class="row justify-content-center my-2">
                                        <center><a href="{{'login'}}"><small class="text-muted">Quay lại đăng nhập!</small></a></center>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card card2">
                            <div class="my-auto mx-md-5 px-md-5 right">
                                <h3 class="text-white">Đăng ký tư vấn - đánh giá</h3> <small class="text-white">Chúng tôi luôn sẵn lòng lắng nghe bạn, hãy sẻ chia với chúng tôi nhé!</small>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection