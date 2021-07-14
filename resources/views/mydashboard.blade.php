@extends('layouts.main')
@section('page-title', 'Trang chủ')
@section('content')

<nav class="topnav" id="myTopnav" role="navigation">
    <ul>
        <li><a href="{{route('mydashboard')}}">Trang chủ</a></li>
        <li><a href="{{route('about')}}">Giới thiệu</a></li>
        <li><a href="#">Sản phẩm & Dịch vụ <i class="fas fa-chevron-down"></i></a>
            <!-- menu con sổ xuống cấp 1 -->
            <ul>
                <li><a href="#">Nhóm F3</a>
                    <ul>
                        <li><a href="#">Trầm cảm</a>
                            <!-- menu con sổ ngang cấp 3 -->
                            <ul>
                                <li><a href="{{route('tram-cam.views')}}">Chẩn đoán</a></li>
                                <li><a href="{{route('tramcam.views')}}">Điều trị</a></li>
                                <li><a href="">Thuốc</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Hưng cảm</a>
                            <!-- menu con sổ ngang cấp 3 -->
                            <ul>
                                <li><a href="">Chẩn đoán</a></li>
                                <li><a href="">Điều trị</a></li>
                                <li><a href="">Thuốc</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="#">Nhóm F4</a>
                    <ul>
                        <li><a href="#">Lo âu</a>
                            <!-- menu con sổ ngang cấp 3 -->
                            <ul>
                                <li><a href="">Chẩn đoán</a></li>
                                <li><a href="">Điều trị</a></li>
                                <li><a href="">Thuốc</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Hoảng loạn</a>
                            <!-- menu con sổ ngang cấp 3 -->
                            <ul>
                                <li><a href="">Chẩn đoán</a></li>
                                <li><a href="">Điều trị</a></li>
                                <li><a href="">Thuốc</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Ám ảnh</a>
                            <!-- menu con sổ ngang cấp 3 -->
                            <ul>
                                <li><a href="">Chẩn đoán</a></li>
                                <li><a href="">Điều trị</a></li>
                                <li><a href="">Thuốc</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
        </li>
        <li>
            <a href="#">Nhóm CK</a>
            <!-- menu con sổ ngang cấp 2 -->
            <ul>
                <li><a href="#">Mất trí</a>
                    <!-- menu con sổ ngang cấp 3 -->
                    <ul>
                        <li><a href="">Chẩn đoán</a></li>
                        <li><a href="">Điều trị</a></li>
                        <li><a href="">Thuốc</a></li>
                    </ul>
                </li>
                <li><a href="#">Động kinh</a>
                    <!-- menu con sổ ngang cấp 3 -->
                    <ul>
                        <li><a href="">Chẩn đoán</a></li>
                        <li><a href="">Điều trị</a></li>
                        <li><a href="">Thuốc</a></li>
                    </ul>
                </li>
                <li><a href="#">Nghiện rượu</a>
                    <!-- menu con sổ ngang cấp 3 -->
                    <ul>
                        <li><a href="{{route('nghien-ruou.views')}}">Chẩn đoán</a></li>
                        <li><a href="">Điều trị</a></li>
                        <li><a href="">Thuốc</a></li>
                    </ul>
                </li>
                <li><a href="#">Loạn thần</a>
                    <!-- menu con sổ ngang cấp 3 -->
                    <ul>
                        <li><a href="">Chẩn đoán</a></li>
                        <li><a href="">Điều trị</a></li>
                        <li><a href="">Thuốc</a></li>
                    </ul>
                </li>
            </ul>
        </li>
    </ul>
    </li>
    <li><a href="{{route('news')}}">Tin tức</a>
        <ul>
            <li><a href="#">Thực tập sinh chuyên đề</a></li>
            <li><a href="#">Sản xuất phần mềm</a></li>
        </ul>
    </li>
    <li><a href="{{route('contact')}}">Liên hệ</a></li>
    <div class="text-end">
        <li>
            @if (Route::has('login'))
            @auth
            @else
            <div class="row">
                <div class="col-md-3">
                    <div class="text-white">
                        <a href="{{ route('login') }}" class="text-sm underline">Login</a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="text-white">
                        @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="text-sm underline">Register</a>
                    </div>
                </div>
            </div>
            @endif
            @endauth
            @endif
        </li>
    </div>
    </ul>
</nav>
@include('layouts.header')
@include('layouts.ours')
<div class="templateux-section bg-light">
    @include('layouts.service')
</div>
<div class="templateux-section">
    @include('layouts.app')
</div>

@endsection