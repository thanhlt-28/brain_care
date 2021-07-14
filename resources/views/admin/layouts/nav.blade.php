<nav id="sidebar" class="sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand mx-auto" href="{{route('dashboard')}}">
            <img src="{{asset('assets/img/logo-new.png')}}" width="69" alt="">
        </a>
        <ul class="sidebar-nav">
            <li class="sidebar-header">
                Braincare
            </li>
            <li class="sidebar-item active">
                <a class="sidebar-link" href="{{route('dashboard')}}">
                    <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Bảng điều khiển</span>
                </a>
            </li>
            <li class="sidebar-header">
                Sản phẩm $ Dịch vụ
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="{{route('cates.index')}}">
                    <i class="align-middle" data-feather="briefcase"></i> <span class="align-middle">Tiêu đề bài viết</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="{{route('posts.index')}}">
                    <i class="align-middle" data-feather="coffee"></i> <span class="align-middle">Bài viết</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="{{route('field.index')}}">
                    <i class="align-middle" data-feather="list"></i> <span class="align-middle">Lĩnh vực</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a data-target="#forms" data-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle" data-feather="check-circle"></i> <span class="align-middle">Dịch vụ</span>
                </a>
                <ul id="forms" class="sidebar-dropdown list-unstyled collapse " data-parent="#sidebar">
                    <li class="sidebar-item"><a class="sidebar-link" href="{{route('type.index')}}">Loại Bệnh</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="{{route('sym.index')}}">Triệu chứng</a></li>
                </ul>
            </li>

        </ul>
    </div>
</nav>