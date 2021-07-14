<nav class="topnav" id="myTopnav" role="navigation">
    <ul>
        <li><a href="{{route('home')}}">Trang chủ</a></li>
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
    </li>
    <li><a href="{{route('news')}}">Tin tức</a>
        <ul>
            <li><a href="{{route('getallfields')}}">Thực tập sinh chuyên đề</a></li>
            <li><a href="#">Sản xuất phần mềm</a></li>
        </ul>
    </li>
    <li style="border-right: 1px solid white;"><a href="{{route('contact')}}">Liên hệ</a></li>
    <!-- Icon header -->
    <div class="wrap-icon-header flex-w flex-r-m">
        <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 js-show-modal-search">
            <i class="zmdi zmdi-search"></i>
        </div>

        <!-- Hiển thị nút summart cart -->
        <ngcart-summary class="js-show-cart" template-url="{{ asset('vendor/ngCart/template/summary.html') }}"></ngcart-summary>

        <a href="#" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti" data-notify="0">
            <i class="zmdi zmdi-favorite-outline"></i>
        </a>
    </div>
    <div class="text-end">
        @if (Route::has('login'))
        @auth
        @else
        <div class="row">
            <div class="col-md-3">
                <div class="text-white">
                    <li><a href="{{ route('login') }}" class="text-sm underline">Login</a></li>
                </div>
            </div>
            <div class="col-md-3">
                <div class="text-white">
                    @if (Route::has('register'))
                    <li><a href="{{ route('register') }}" class="text-sm underline">Register</a></li>
                </div>
            </div>
            <!-- <div class="col-md-3">
                <div class="text-white">
                    <li> <a href="{{ route('logout') }}" class="text-sm underline">Logout</a></li>
                </div>
            </div> -->
        </div>
        @endif
        @endauth
        @endif

    </div>
    </ul>

</nav>