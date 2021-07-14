@extends('layouts.main')
@section('page-title', 'Giới thiệu')
@section('content')

<!-- ======= Services Section ======= -->
<section id="services" class="services" style="padding:50px">
    <div class="container">
        <div class="card mb-3">
            <div class="row g-0">
                <div class="col-lg-4">
                    <img class="mr-3 ml-3" src="{{asset('assets/img/logo-new.png')}}" width="100%" alt="...">
                </div>
                <div class="col-lg-8">
                    <div class="card-body">
                        <h4 class="card-title">Về chúng tôi</h4>
                        <p class="card-text"><strong>Sứ mệnh vì cộng đồng hạnh phúc từng phút giây</strong></p>
                        <p class="card-text">Trung tâm chăm sóc sức khoẻ tinh thần Braincare với sự khao khát mang mang những nguồn tri thức ứng dụng vào đời sống giúp cho cộng đồng hạnh phúc từng giây phút..</p>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">Tầm nhìn & Sứ mệnh của Braincare</h4>
                        <p class="card-text"><strong>Tầm nhìn</strong></p>
                        <p class="card-text">Braincare hướng tới trở thành một trong những đơn vị dẫn đầu về lĩnh vực chăm sóc sức khoẻ tinh thần tại Việt Nam, làm thay đổi thói quen và nhận thức của người Việt Nam trong việc chú trọng sức khoẻ tinh thần và tìm kiếm sự trợ giúp khi cần thiết.</p>
                        <p class="card-text"><strong>Sứ mệnh</strong></p>
                        <p class="card-text">“Vì cộng đồng hạnh phúc hơn từng giây phút”</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-card-title">
            <h2>Giá trị cốt lõi của Braincare</h2>
        </div>

        <div class="row">
            <div class="col-lg-3 col-md-6 icon-box" data-aos="fade-up">
                <div class="icon"><i class="bi bi-briefcase"></i></div>
                <h4 class="card-title"><a href="">Tâm</a></h4>
                <p class="description">Làm lĩnh vực tâm lý, chữ “TÂM” phải luôn đặt lên hàng đầu, chúng tôi luôn đặt việc phụng sự và cho đi hơn cả, luôn coi trọng và lấy khách hàng là trung tâm</p>
            </div>
            <div class="col-lg-3 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                <div class="icon"><i class="bi bi-card-checklist"></i></div>
                <h4 class="card-title"><a href="">Chuyên</a></h4>
                <p class="description">Làm việc với khách hàng, chúng tôi luôn đề cao sự “CHUYÊN NGHIỆP”, sự nhiệt thành, tính trách nhiệm, sự tận tụy, sự minh bạch rõ ràng; lấy sự hài lòng của khách hàng làm thước đo cho sự thành công!</p>
            </div>
            <div class="col-lg-3 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                <div class="icon"><i class="bi bi-bar-chart"></i></div>
                <h4 class="card-title"><a href="">Tín</a></h4>
                <p class="description">Chữ “TÍN” là điều tối quan trọng, chúng tôi luôn vươn tới khẳng định niềm tin đúng đắn khi khách hàng chọn chúng tôi.</p>
            </div>
            <div class="col-lg-3 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                <div class="icon"><i class="bi bi-binoculars"></i></div>
                <h4 class="card-title"><a href="">Nhân</a></h4>
                <p class="description">Xây dựng mối quan hệ với khách hàng, đối tác, đồng nghiệp bằng sự thiện chí , tình ái, tinh thần nhân văn, sự công bằng, tôn trọng và yêu thương.</p>
            </div>
        </div>
        <section id="contact" class="content-section">
            <h3>Thông tin liên hệ</h3>

            <div id="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d476614.106305572!2d105.804103!3d21.050776!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab226a78d97b%3A0xfa288a20a51995a7!2zVOG6p25nIDcsIDU5IFbDtSBDaMOtIEPDtG5nLCBOZ2jEqWEgxJDDtCwgQ-G6p3UgR2nhuqV5LCBIw6AgTuG7mWkgMTAwMDAwLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2sus!4v1621176139857!5m2!1svi!2sus" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
            <div id="contact-content">
                <div class="section-heading">
                    <h1>Gửi thông tin đến<br><em>Braincare</em></h1>
                    <p>Đăng ký tham vấn - đánh giá
                        <br>
                        Chúng tôi luôn sẵn lòng lắng nghe bạn, hãy sẻ chia với chúng tôi nhé!
                    </p>
                </div>
                <div class="section-content">
                    <form id="contact" action="#" method="post">
                        <div class="row">
                            <div class="col-md-4">
                                <fieldset>
                                    <input name="name" type="text" class="form-control" id="name" placeholder="Điền tên..." required="">
                                </fieldset>
                            </div>
                            <div class="col-md-4">
                                <fieldset>
                                    <input name="email" type="email" class="form-control" id="email" placeholder="Điền email..." required="">
                                </fieldset>
                            </div>
                            <div class="col-md-4">
                                <fieldset>
                                    <input name="subject" type="text" class="form-control" id="subject" placeholder="Bạn muốn được tư vấn gì?" required="">
                                </fieldset>
                            </div>
                            <div class="col-md-12">
                                <fieldset>
                                    <textarea name="message" rows="6" class="form-control" id="message" placeholder="Chia sẻ chút tình trạng của bạn đi..." required=""></textarea>
                                </fieldset>
                            </div>
                            <div class="col-md-12">
                                <fieldset>
                                    <button type="submit" id="form-submit" class="btn">Gửi ngay!</button>
                                </fieldset>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
</section>

@endsection