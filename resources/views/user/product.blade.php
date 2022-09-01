<!--Some links for the page-->
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
@extends('user.navbar')
@section('content')
    <div class="overflow my-4">
        <div class="row">
            <div class="col-md-3 d-md-inline d-none p-2">
                <div class="wrapper">
                    <!-- Sidebar Holder -->
                    <nav id="sidebar">
                        <div class="sidebar-header">
                            <h3>Filter &nbsp;
                                <i class="fa fa-filter" aria-hidden="true"></i>
                            </h3>
                        </div>

                        <ul class="list-unstyled components">
                            <p>Dummy Heading</p>
                            <li class="active">
                                <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">Home</a>
                                <ul class="collapse list-unstyled" id="homeSubmenu">
                                    <li><a href="#">Home 1</a></li>
                                    <li><a href="#">Home 2</a></li>
                                    <li><a href="#">Home 3</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">About</a>
                                <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false">Pages</a>
                                <ul class="collapse list-unstyled" id="pageSubmenu">
                                    <li><a href="#">Page 1</a></li>
                                    <li><a href="#">Page 2</a></li>
                                    <li><a href="#">Page 3</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Portfolio</a>
                            </li>
                            <li>
                                <a href="#">Contact</a>
                            </li>
                        </ul>
                    </nav>

                    <!-- Page Content Holder -->

                </div>
            </div>

            <!--Content-->
            <div class="col-md-9 brands">
                <div class="container">
                    <div class="row">
                        <div class="my-1 text-sm-right text-center col-sm-8 col-md-6 col-lg-7">
                            <h2>Products</h2>
                        </div>
                        <div class="ml-auto text-md-left text-center col-md-5 col-lg-4 my-md-3">
                            <select name="" class="" id="sorting" onchange="showhide()">
                                <option value="">--Sort By--</option>
                                <option value="price">Price</option>
                                <option value="name">Name</option>
                            </select>
                            <select name="" id="price" class="hide ">
                                <option>High to Low</option>
                                <option>Low to High</option>
                            </select>
                            <select name="" id="name" class="hide ">
                                <option>A to Z</option>
                                <option>Z to A</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <a href="#">
                        <div class=" col-sm-6 col-md-3 border-right my-3 text-center ">
                            <div class="bg-secondary">
                                <div class="cn-img-center">
                                    <img class="cn-img cn-md-img"
                                        src="https://imageio.forbes.com/specials-images/imageserve/992893220/Second-hand-T-shirts-on-display-at-Broadway-market-in-London/960x0.jpg?format=jpg&width=960"
                                        alt="photo">
                                </div>
                            </div>
                            <a href="#"><strong class="text-dark"> Clothing</strong></a>
                        </div>
                    </a>
                    <a href="#">
                        <div class="col-sm-6 col-md-3 border-right  my-3 text-center ">
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
                        <div class="col-sm-6 col-md-3 border-right my-3 text-center ">
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
                        <div class="col-sm-6 col-md-3 my-3 text-center">
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
                    <a href="#">
                        <div class="col-sm-6 col-md-3 border-right  my-3 text-center ">
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
        </div>
    </div>
@endsection
@section('script')
    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <!-- Bootstrap Js CDN -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- jQuery Custom Scroller CDN -->
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js">
    </script>
@endsection
