@extends("layouts.about_app")

@section('content')

<!--Blog Post Section-->
<section class="blog-post">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="body-div">
                            <h2>Blog Title Here</h2>
                            <div class="row">
                                <div class="col-lg-2"></div>
                                <div class="col-lg-8">
                                    <img src="{{asset('assets/images/about.jpg')}}" class="blog-image" alt="blog image">
                                </div>
                                <div class="col-lg-2"></div>
                            </div>
                            <div class="row blog-text">
                                <div class="col-lg-1"></div>
                                <div class="col-lg-10">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam feugiat eros quis risus blandit vulputate. Aliquam volutpat, justo eget dignissim blandit, augue ex luctus ante, malesuada commodo lorem leo a neque. Donec ac mauris vitae arcu posuere consequat. Nulla tempus purus arcu. Phasellus porttitor risus nibh, in auctor elit suscipit at. Interdum et malesuada fames ac ante ipsum primis in faucibus. In in orci vulputate diam gravida porta. Vestibulum faucibus et mauris at auctor.</p>
                                    <p>Duis id enim mauris. Donec ut rutrum diam. Vestibulum posuere leo sit amet vestibulum tincidunt. Phasellus eu urna a justo auctor interdum ac ut nisl. Duis egestas, purus tristique bibendum feugiat, purus purus dapibus felis, ac elementum nisl tortor in velit. Suspendisse facilisis eleifend nisl ut molestie. Nullam quis augue tempus orci rutrum laoreet. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Quisque vel ante porttitor, tempus erat vel, semper velit. Donec vel gravida nisi.</p>
                                </div>
                                <div class="col-lg-1"></div>
                            </div>
                            <div class="row share-social">
                                <div class="col-lg-1"></div>
                                <div class="col-lg-10 border-top-div">
                                    <a>Share:</a>
                                    <a href="#" title="Share on Facebook"><i class="fab fa-facebook"></i></a>
                                    <a href="#" title="Share on Twitter"><i class="fab fa-twitter"></i></a>
                                    <a href="#" title="Share on Instagram"><i class="fab fa-instagram"></i></a>
                                </div>
                                <div class="col-lg-1"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Blog Post Section Ends-->

<!--Blog Section-->
<section class="blog-section blog-section-post">
    <div class="container">
        <!--First Row-->
        <div class="row">
            <div class="col-lg-12">
                <h1>More Posts</h1>
            </div>
            <div class="col-lg-3 py-3">
                <div class="card">
                    <img src="{{asset('assets/images/about.jpg')}}" alt="blog image">
                    <div class="card-body">
                        <h5 class="card-title">Blog Title Here</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque malesuada purus sem, et iaculis odio mollis in. Vestibulum a urna mattis, facilisis dolor in, malesuada nisi.</p>
                        <div class="btn-div">
                            <a href="{{ route('blogpost') }}">Read More</a>
                        </div>
                    </div>
                    <div class="card-footer">
                        <small><i class="far fa-clock"></i> 3 mins ago</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 py-3">
                <div class="card">
                    <img src="{{asset('assets/images/about.jpg')}}" alt="blog image">
                    <div class="card-body">
                        <h5 class="card-title">Blog Title Here</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque malesuada purus sem, et iaculis odio mollis in. Vestibulum a urna mattis, facilisis dolor in, malesuada nisi.</p>
                        <div class="btn-div">
                            <a href="{{ route('blogpost') }}">Read More</a>
                        </div>
                    </div>
                    <div class="card-footer">
                        <small><i class="far fa-clock"></i> 3 mins ago</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 py-3">
                <div class="card">
                    <img src="{{asset('assets/images/about.jpg')}}" alt="blog image">
                    <div class="card-body">
                        <h5 class="card-title">Blog Title Here</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque malesuada purus sem, et iaculis odio mollis in. Vestibulum a urna mattis, facilisis dolor in, malesuada nisi.</p>
                        <div class="btn-div">
                            <a href="{{ route('blogpost') }}">Read More</a>
                        </div>
                    </div>
                    <div class="card-footer">
                        <small><i class="far fa-clock"></i> 3 mins ago</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 py-3">
                <div class="card">
                    <img src="{{asset('assets/images/about.jpg')}}" alt="blog image">
                    <div class="card-body">
                        <h5 class="card-title">Blog Title Here</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque malesuada purus sem, et iaculis odio mollis in. Vestibulum a urna mattis, facilisis dolor in, malesuada nisi.</p>
                        <div class="btn-div">
                            <a href="{{ route('blogpost') }}">Read More</a>
                        </div>
                    </div>
                    <div class="card-footer">
                        <small><i class="far fa-clock"></i> 3 mins ago</small>
                    </div>
                </div>
            </div>
        </div>
    </div>    
</section>   


@endsection