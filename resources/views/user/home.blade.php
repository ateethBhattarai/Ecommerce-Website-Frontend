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
            <div class="d-flex">
                <div>
                    <h3>Categories</h3>
                </div>
                <div class="ml-auto">
                    <a href="{{ route('categories') }}" class="btn btn-secondary">View More</a>
                </div>
            </div>
            <div class="row brands">
                <a href="#">
                    <div class=" col-sm-4 col-md-3 border-right border-left my-3 text-center ">
                        <div class="bg-secondary">
                            <div class=" cn-img-center">
                                <img class="cn-img cn-md-img"
                                    src="https://imageio.forbes.com/specials-images/imageserve/992893220/Second-hand-T-shirts-on-display-at-Broadway-market-in-London/960x0.jpg?format=jpg&width=960"
                                    alt="photo">
                            </div>
                        </div>
                        <a href="#"><strong class="text-dark"> Clothing</strong></a>
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
                        <a href="#"><strong class="text-dark"> Electronics</strong></a>
                    </div>
                </a>
                <a href="#">
                    <div class="col-sm-4 col-md-3 border-right border-left my-3 text-center ">
                        <div class="bg-secondary">
                            <div class=" cn-img-center">
                                <img class="cn-img cn-md-img"
                                    src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/5e/La_cuisine_%28mus%C3%A9e_dart_nouveau%2C_Riga%29_%287563655820%29.jpg/250px-La_cuisine_%28mus%C3%A9e_dart_nouveau%2C_Riga%29_%287563655820%29.jpg"
                                    alt="photo">
                            </div>
                        </div>
                        <a href="#"><strong class="text-dark"> Kitchen</strong></a>
                    </div>
                </a>
                <a href="#">
                    <div class="col-sm-4 col-md-3 border-right border-left my-3 text-center ">
                        <div class="bg-secondary">
                            <div class=" cn-img-center">
                                <img class="cn-img cn-md-img"
                                    src="https://cdn.vox-cdn.com/thumbor/H-lUjyOLLdQhMVwX7iPcIKw1JX4=/0x0:1306x734/1570x883/filters:focal(549x263:757x471):format(webp)/cdn.vox-cdn.com/uploads/chorus_image/image/68490964/Best_Phone_Grid_Fall_2021_16x9.10.jpg"
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
