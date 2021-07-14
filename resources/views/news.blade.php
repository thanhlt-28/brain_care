@extends('layouts.main')
@section('page-title', 'Tin tức')
@section('content')
<div class="js-animsition animsition" id="site-wrap" data-animsition-in-class="fade-in" data-animsition-out-class="fade-out">

    <div class="templateux-cover" style="background-image: url(assets/img/slide_2.jpg);">
        <div class="container">
            <div class="row align-items-lg-center">

                <div class="col-lg-6 order-lg-1 text-center mx-auto">
                    <h1 class="heading mb-3 text-white" data-aos="fade-up">Tin tức</h1>
                    <p class="lead mb-5 text-white" data-aos="fade-up" data-aos-delay="100">Kiểm tra sức khỏe và tinh thần miễn phí cùng chuyên đề tin tức Braincare</p>
                    <p data-aos="fade-up" data-aos-delay="200"><a href="#" class="btn btn-primary py-3 px-4 mr-3">Bắt đầu</a> <a href="#" class="text-white">Xem thêm!</a></p>
                </div>

            </div>
        </div>
    </div> <!-- .templateux-cover -->

    <div class="templateux-section">
        <div class="container">
            <div class="row">
                @foreach($posts as $item)
                <div class="col-md-6 col-lg-4 mb-4">
                    <a href="{{route('posts.details', $item->id)}}" class="block-thumbnail-1 one-whole show-text height-sm" style="background-image: url({{$item->image}}); " data-aos="fade" data-aos-delay="100">
                        <div class="block-thumbnail-content">
                            <h2 class="fw-bolder">{{$item->title}}</h2>
                            <p class="mt-2">{{$item->desc}}</p>
                            <span class="fw-normal"><b>{{ $item->created_at->format('d M Y')}}</b></span>
                        </div>
                    </a>
                </div>
                @endforeach

            </div>

            <!-- Phân trang -->
            <div class="row mt-5">
                <div class="col-md-12 pt-5">
                    <ul class="pagination custom-pagination">
                        <li class="page-item prev"><a class="page-link" href="#"><i class="icon-keyboard_arrow_left"></i></a></li>
                        <li class="page-item active"><a class="page-linkx href=" #">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item next"><a class="page-link" href="#"><i class="icon-keyboard_arrow_right"></i></a></li>
                    </ul>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection