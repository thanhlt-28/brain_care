@extends('layouts.main')
@section('page-title', 'Liên hệ')
@section('content')
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
@endsection