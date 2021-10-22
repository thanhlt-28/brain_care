<nav class="topnav" id="myTopnav" role="navigation">
    <ul>
        <li><a href="{{route('home')}}">Trang chủ</a></li>
        <li><a href="{{route('about')}}">Giới thiệu</a></li>
        <li><a href="#">Dịch vụ <i class="fas fa-chevron-down"></i></a>
            <!-- menu con sổ xuống cấp 1 -->
            <ul>
                <li><a href="#">Nhóm F3</a>
                    <ul>
                        <li><a href="#">Trầm cảm</a>
                            <!-- menu con sổ ngang cấp 3 -->
                            <ul>
                                <li><a href="{{route('tram-cam.views')}}">Chẩn đoán</a></li>
                                <li><a href="{{route('tramcam.views')}}">Điều trị</a></li>
                                <li><a href="{{route('tramcam.index-3')}}">Thuốc</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Hưng cảm</a>
                            <!-- menu con sổ ngang cấp 3 -->
                            <ul>
                                <li><a href="{{route('hung-cam.views')}}">Chẩn đoán</a></li>
                                <li><a href="{{route('hungcam.views')}}">Điều trị</a></li>
                                <li><a href="{{route('hungcam.index-3')}}">Thuốc</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="#">Nhóm F4</a>
                    <ul>
                        <li><a href="#">Lo âu</a>
                            <!-- menu con sổ ngang cấp 3 -->
                            <ul>
                                <li><a href="{{route('lo-au.views')}}">Chẩn đoán</a></li>
                                <li><a href="{{route('loau.views')}}">Điều trị</a></li>
                                <li><a href="{{route('loau.index-3')}}">Thuốc</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Hoảng loạn</a>
                            <!-- menu con sổ ngang cấp 3 -->
                            <ul>
                                <li><a href="{{route('hoang-loan.views')}}">Chẩn đoán</a></li>
                                <li><a href="{{route('hoangloan.views')}}">Điều trị</a></li>
                                <li><a href="{{route('hoangloan.index-3')}}">Thuốc</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Ám ảnh</a>
                            <!-- menu con sổ ngang cấp 3 -->
                            <ul>
                                <li><a href="{{route('am-anh.views')}}">Chẩn đoán</a></li>
                                <li><a href="{{route('amanh.views')}}">Điều trị</a></li>
                                <li><a href="{{route('amanh.index-3')}}">Thuốc</a></li>
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
                        <li><a href="{{route('mat-tri.views')}}">Chẩn đoán</a></li>
                        <li><a href="{{route('mattri.views')}}">Điều trị</a></li>
                        <li><a href="{{route('mattri.index-3')}}">Thuốc</a></li>
                    </ul>
                </li>
                <li><a href="#">Động kinh</a>
                    <!-- menu con sổ ngang cấp 3 -->
                    <ul>
                        <li><a href="{{route('dong-kinh.views')}}">Chẩn đoán</a></li>
                        <li><a href="{{route('dongkinh.views')}}">Điều trị</a></li>
                        <li><a href="{{route('dongkinh.index-3')}}">Thuốc</a></li>
                    </ul>
                </li>
                <li><a href="#">Nghiện rượu</a>
                    <!-- menu con sổ ngang cấp 3 -->
                    <ul>
                        <li><a href="{{route('nghien-ruou.views')}}">Chẩn đoán</a></li>
                        <li><a href="{{route('nghienruou.views')}}">Điều trị</a></li>
                        <li><a href="{{route('nghienruou.index-3')}}">Thuốc</a></li>
                    </ul>
                </li>
                <li><a href="#">Loạn thần</a>
                    <!-- menu con sổ ngang cấp 3 -->
                    <ul>
                        <li><a href="{{route('loan-than.views')}}">Chẩn đoán</a></li>
                        <li><a href="{{route('loanthan.views')}}">Điều trị</a></li>
                        <li><a href="{{route('loanthan.index-3')}}">Thuốc</a></li>
                    </ul>
                </li>
            </ul>
        </li>

    </ul>
    <li><a href="https://braincare.vn/chuyen-muc/tin-tuc/" target="_blank">Tin tức</a>
        <!-- <ul>
            <li><a href="#">Thực tập sinh chuyên đề</a></li>
            <li><a href="#">Sản xuất phần mềm</a></li>
        </ul> -->
    </li>


    <li><a href="https://braincare.vn/lien-he/" target="_blank">Liên hệ</a></li>

    <div class="text-end">
        @if (Route::has('login'))
        @auth
        <li class="dropdown">
            <a class="dropdown-toggle" href="#" data-toggle="dropdown">
                <i class="fas fa-user-nurse text-white"></i>
                <span class="text-white">{{Auth::user()->name}}</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <!-- <a class="dropdown-item" href="pages-profile.html"><i class="align-middle mr-1" data-feather="user"></i> Profile</a> -->
                <a class="dropdown-item" href="{{'logout'}}"><i class="fas fa-sign-out-alt"></i>Đăng xuất</a>
            </div>
        </li>
        @else
        <ul>
            <li>
                <a href="{{ route('login') }}" class="text-sm underline text-white">
                    <i class="fas fa-user-plus"></i> Đăng nhập</a>
            </li>
            @if (Route::has('register'))
            <li>
                <a href="{{ route('register') }}" class="text-sm underline text-white">
                    <i class="fas fa-external-link-alt"></i> Đăng ký
                </a>
            </li>
        </ul>
        @endif
        @endauth
        @endif
    </div>
</nav>