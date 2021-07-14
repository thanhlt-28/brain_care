@extends('layouts.main')
@section('content')
<div class="js-animsition animsition" id="site-wrap" data-animsition-in-class="fade-in" data-animsition-out-class="fade-out">
    <div class="templateux-cover" style="background-image: url(../assets/img/slide_1.jpg);">
        <div class="container">
            <div class="row align-items-lg-center">
                <div class="col-lg-6 order-lg-1 text-center mx-auto">
                    <h1 class="heading mb-3 text-white" data-aos="fade-up">Chi tiết</h1>

                    <p class="lead mb-5 text-white" data-aos="fade-up" data-aos-delay="100"><b>{{ $model->created_at->format('d M Y')}}</b> by <a href="#" class="text-white">Braincare</a></p>

                </div>

            </div>
        </div>
    </div> <!-- .templateux-cover -->
    <div id="blog" class="templateux-section">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h2 class="mx-auto">{{$model->title}}</h2>

                    <p><img src="{{asset($model->image)}}" alt="" class="img-fluid"></p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis, eius mollitia suscipit, quisquam doloremque distinctio perferendis et doloribus unde architecto optio laboriosam porro adipisci sapiente officiis nemo accusamus ad praesentium? Esse minima nisi et. Dolore perferendis, enim praesentium omnis, iste doloremque quia officia optio deserunt molestiae voluptates soluta architecto tempora.</p>
                    <h2 class="mb-3 mt-5">Molestiae cupiditate inventore animi, maxime sapiente optio</h2>

                    <p>
                        <img src="images/slider-1.jpg" alt="" class="img-fluid">
                    </p>
                    <p>{{$model->content}}</p>

                    <!-- <div class="tag-widget post-tag-container mb-5 mt-5">
                        <div class="tagcloud">
                            <a href="#" class="tag-cloud-link">Relax</a>
                            <a href="#" class="tag-cloud-link">Hotel</a>
                            <a href="#" class="tag-cloud-link">Luxury</a>
                            <a href="#" class="tag-cloud-link">Unwind</a>
                        </div>
                    </div> -->
                </div> <!-- .col-md-8 -->

                <!-- ----------ASIDE---------- -->

                <div class="col-md-4 sidebar">
                    <div class="sidebar-box">
                        <form action="#" class="search-form">
                            <div class="form-group">
                                <span class="icon fa fa-search"></span>
                                <input type="text" class="form-control" placeholder="Type a keyword and hit enter">
                            </div>
                        </form>
                    </div>
                    <div class="sidebar-box">
                        <div class="categories">
                            <h3>Categories</h3>
                            <li><a href="#">Courses <span>(12)</span></a></li>
                            <li><a href="#">News <span>(22)</span></a></li>
                            <li><a href="#">Design <span>(37)</span></a></li>
                            <li><a href="#">HTML <span>(42)</span></a></li>
                            <li><a href="#">Web Development <span>(14)</span></a></li>
                        </div>
                    </div>
                    <div class="sidebar-box">
                        <img src="images/person_1.jpg" alt="Image placeholder" class="img-fluid mb-4 rounded">
                        <h3>About The Author</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
                        <p><a href="#" class="btn btn-primary btn-lg">Read More</a></p>
                    </div>

                    <div class="sidebar-box">
                        <h3>Tag Cloud</h3>
                        <div class="tagcloud">
                            <a href="#" class="tag-cloud-link">Life</a>
                            <a href="#" class="tag-cloud-link">Sport</a>
                            <a href="#" class="tag-cloud-link">Tech</a>
                            <a href="#" class="tag-cloud-link">Travel</a>
                            <a href="#" class="tag-cloud-link">Life</a>
                            <a href="#" class="tag-cloud-link">Sport</a>
                            <a href="#" class="tag-cloud-link">Tech</a>
                            <a href="#" class="tag-cloud-link">Travel</a>
                        </div>
                    </div>

                    <div class="sidebar-box">
                        <h3>Paragraph</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
                    </div>
                </div>

            </div>


        </div>
    </div>

</div>
@endsection