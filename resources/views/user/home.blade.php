@extends('user.navbar')
@section('content')
    <div class="container bg-secondary">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            </ol>
            <div class="carousel-inner ab_carausal">
                <div class="carousel-item active">
                    <img src="https://storage.googleapis.com/gweb-uniblog-publish-prod/images/Old_Electronics_hero_1.max-1000x1000.jpg"
                        class="d-block w-100 cn-img cn-lg-img" alt="photo">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://imageio.forbes.com/specials-images/imageserve/992893220/Second-hand-T-shirts-on-display-at-Broadway-market-in-London/960x0.jpg?format=jpg&width=960"
                        class="d-block w-100 cn-img cn-lg-img" alt="photo">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>Some representative placeholder content for the second slide.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section>
        <div class="container-fluid my-5">
            <div>
                <h3>Brands</h3>
            </div>
            <div class="row brands">
                <a href="#">
                    <div class=" col-sm-4 col-md-3 border-right border-left my-3 text-center ">
                        <div class="bg-secondary">
                            <div class=" cn-img-center">
                                <img class="cn-img cn-md-img"
                                    src="https://storage.googleapis.com/gweb-uniblog-publish-prod/images/Old_Electronics_hero_1.max-1000x1000.jpg"
                                    alt="photo">
                            </div>
                        </div>
                        <a href="#"><strong class="text-dark"> Mobile Devices</strong></a>
                    </div>
                </a>
                <a href="#">
                    <div class="col-sm-4 col-md-3 border-right border-left my-3 text-center ">
                        <div class="bg-secondary">
                            <div class=" cn-img-center">
                                <img class="cn-img cn-md-img"
                                    src="https://storage.googleapis.com/gweb-uniblog-publish-prod/images/Old_Electronics_hero_1.max-1000x1000.jpg"
                                    alt="photo">
                            </div>
                        </div>
                        <a href="#"><strong class="text-dark"> Mobile Devices</strong></a>
                    </div>
                </a>
                <a href="#">
                    <div class="col-sm-4 col-md-3 border-right border-left my-3 text-center ">
                        <div class="bg-secondary">
                            <div class=" cn-img-center">
                                <img class="cn-img cn-md-img"
                                    src="https://storage.googleapis.com/gweb-uniblog-publish-prod/images/Old_Electronics_hero_1.max-1000x1000.jpg"
                                    alt="photo">
                            </div>
                        </div>
                        <a href="#"><strong class="text-dark"> Mobile Devices</strong></a>
                    </div>
                </a>
                <a href="#">
                    <div class="col-sm-4 col-md-3 border-right border-left text-center ">
                        <div class="bg-secondary">
                            <div class=" cn-img-center">
                                <img class="cn-img cn-md-img"
                                    src="https://storage.googleapis.com/gweb-uniblog-publish-prod/images/Old_Electronics_hero_1.max-1000x1000.jpg"
                                    alt="photo">
                            </div>
                        </div>
                        <a href="#"><strong class="text-dark"> Mobile Devices</strong></a>
                    </div>
                </a>
            </div>
        </div>
    </section>
@endsection
