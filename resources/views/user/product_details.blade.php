@extends('user.navbar')
@section('styles')
    <link rel="stylesheet" href="{{ asset('zoom/src/xzoom.css') }}" media="all">
    <style>
        .xzoom-gallery.active {
            border: solid 2px rgba(226, 189, 189, 0.897);
        }

        .activeBTN {
            border-bottom: 2px solid rgba(156, 144, 144, 0.856);
            /* border-radius: 0; */
        }

        .col-md-8 a:hover {
            cursor: pointer;
            background-color: rgba(185, 179, 179, 0.836);
            color: rgb(97, 92, 92) !important;
        }

        hr {
            border: solid 1px rgb(216, 210, 210);
        }

        .userImage {
            margin-top: 20px;
            font-size: 50px;
            color: rgb(114, 107, 107);
        }

        .card-height {
            height: 200px;
        }

        .image {
            height: 100%;
            width: 100%;
        }
    </style>

    <style>
        .ratings {
            display: flex;
            border-radius: 15px;
            gap: 30px;
        }

        .chart .rate-box {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 15px;
            height: 30px;
            padding: 20px 0;
            padding: 10px;
        }

        .chart .rate-box>* {
            height: 100%;
            display: flex;
            align-items: center;
            font-weight: 500;
            color: #444;
        }

        .rate-box .value {
            display: flex;
            align-items: center;
        }

        .rate-box .value:hover {
            color: #66bb6a;
        }

        .chart .value {
            font-size: 30px;
            cursor: pointer;
        }

        .rate-box .progress-bar {
            border-width: 1px;
            position: relative;
            background-color: #cfd8dc91;

            height: 10px;
            border-radius: 100px;
            width: 350px;
        }

        .rate-box .progress-bar .progress {
            background-color: #66bb6a;
            height: 100%;
            border-radius: 100px;
            margin-right: auto;
            transition: 300ms ease-in-out;
        }

        .one .fas {
            color: #cfd8dc;
        }

        .two {
            background: linear-gradient(to right, #66bb6a 0%, transparent 0%);
            -webkit-background-clip: text !important;
            -webkit-text-fill-color: transparent;
            transition: 0.5s ease-in-out all;
        }

        .global>span {
            font-size: 60px;
            font-weight: 500;
        }

        .rating-icons {
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
            width: 100%;
            height: 10%;
        }

        .rating-icons span {
            position: absolute;
            display: flex;
            font-size: 30px;
            left: 50%;
            transform: translateX(-50%);
            margin-bottom: 5px;
        }

        .total-reviews {
            font-size: 25px !important;
        }
    </style>
@endsection
@section('content')
    <div class="container my-3 brands">
        <div class="row">
            <div class="col-md-5">
                <section id="fancy">
                    <div class="row">
                        <div class="large-5 column p-2">
                            <div class="xzoom-container">
                                <img class="xzoom" id="product_zoom"
                                    src="https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885__340.jpg"
                                    xoriginal="https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885__340.jpg"
                                    height="100%" width="100%" />

                                <div class="xzoom-thumbs">
                                    <a data-href="https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885__340.jpg">
                                        <img class="xzoom-gallery active" width="80"
                                            src="https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885__340.jpg"
                                            xprating="https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885__340.jpg">
                                    </a>
                                    <a
                                        data-href="https://images.ctfassets.net/hrltx12pl8hq/7yQR5uJhwEkRfjwMFJ7bUK/dc52a0913e8ff8b5c276177890eb0129/offset_comp_772626-opt.jpg?fit=fill&w=800&h=300">
                                        <img class="xzoom-gallery" width="80"
                                            src="https://images.ctfassets.net/hrltx12pl8hq/7yQR5uJhwEkRfjwMFJ7bUK/dc52a0913e8ff8b5c276177890eb0129/offset_comp_772626-opt.jpg?fit=fill&w=800&h=300">
                                    </a>
                                    <a
                                        data-href="https://www.apple.com/newsroom/images/product/iphone/standard/apple_iphone-12-spring21_purple_04202021_big.jpg.large.jpg">
                                        <img class="xzoom-gallery" width="80"
                                            src="https://www.apple.com/newsroom/images/product/iphone/standard/apple_iphone-12-spring21_purple_04202021_big.jpg.large.jpg">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="large-7 column"></div>
                    </div>
                </section>
            </div>
            <div class="col-md-7">
                <div>
                    <h3>Product Name</h3>
                    <a href="#" class="btn btn-success py-0 px-1">
                        <small>
                            <small><i class="fa fa-star" aria-hidden="true"></i></small> 4.5
                        </small>
                    </a>
                </div>
                <hr>
                <div class="row mt-2">
                    <div class="col-sm-5 text-sm-left text-center ">
                        <h4>Price</h4>
                    </div>
                    <div class="col-sm-6 text-sm-left text-center ">
                        <h5>
                            <span id="ab_price">150</span>
                            <input type="number" class="d-none" value="150">
                        </h5>
                    </div>
                </div>
                <hr>
                <div class="row mt-2">
                    <div class="col-sm-5 text-sm-left text-center ">
                        <h4>Quantity</h4>
                    </div>
                    <div class="col-sm-6 text-sm-left text-center ">
                        <h5><i class="fa fa-plus-square btn" id="plus" aria-hidden="true"></i>
                            <span id="quantity">1</span>
                            <input type="number" max="5" min="1" id="qty_input" class="d-none"
                                value="1">
                            <i class="fa fa-minus-square btn" id="minus" aria-hidden="true"></i>
                        </h5>
                    </div>
                </div>
                <hr>
                <div class="row mt-2">
                    <div class="col-sm-5 text-sm-left text-center ">
                        <h4>Total Price</h4>
                    </div>
                    <div class="col-sm-6 text-sm-left text-center ">
                        <h5>
                            <span id="total_price">150</span>
                            <input type="number" id="total_price_input" class="d-none" value="150">
                        </h5>
                    </div>
                </div>
                <hr>
                <div class="text-center my-2">
                    <a href="#" class="btn btn-secondary mx-2">Add to cart</a>
                    <a href="#" class="btn btn-success mx-2">Buy</a>
                </div>
                <div class="text-center my-2">
                    <a href="#" class="text-secondary">Add to Wishlist</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container brands my-3">
        <div class="row">
            <div class="col-md-4">
                <h5 class="m-2">Mostly viewed products</h5>
                <div class="my-1">
                    <div class="container">
                        <img src="data:image/jpeg;base64,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"
                            alt="" class="cn-md-img">
                        <p>
                            <strong>Product Name</strong>
                            <a href="#" class="btn btn-success py-0 px-1">
                                <small>
                                    <small><i class="fa fa-star" aria-hidden="true"></i></small> 4.5
                                </small>
                            </a>
                        </p>
                        <p><strong> Rs.2700 &nbsp;</strong>
                            <span><del class="text-secondary">Rs.3000</del>
                                <span class="text-success">&nbsp; 10% off</span>
                            </span>
                        </p>
                    </div>
                    <hr>
                </div>
                <div class="my-1">
                    <div class="container">
                        <img src="data:image/jpeg;base64,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"
                            alt="" class="cn-md-img">
                        <p>
                            <strong>Product Name</strong>
                            <a href="#" class="btn btn-success py-0 px-1">
                                <small>
                                    <small><i class="fa fa-star" aria-hidden="true"></i></small> 4.5
                                </small>
                            </a>
                        <p><strong> Rs.4000 </strong></p>
                        </p>
                    </div>
                    <hr>
                </div>
            </div>
            <div class="col-md-8 my-2">
                <a class="btn activeBTN" id="descriptionBTN">Description</a>
                <a class="btn" id="ratingBTN">Ratings</a>
                <hr>
                <div id="description">
                    <h4>Description</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam, nesciunt! Lorem ipsum dolor sit
                        amet, consectetur adipisicing elit. Sunt necessitatibus ab fuga doloribus eum nisi non illum impedit
                        suscipit sequi porro provident itaque dolorem, dignissimos repudiandae, repellat harum natus
                        corporis tenetur! Laudantium dicta laboriosam quos molestiae reiciendis aut consequatur temporibus
                        incidunt nesciunt voluptates repellendus sequi, ex ratione totam iste. Eaque magni aliquid nostrum
                        at, quod a tenetur, maxime quo tempore, nesciunt et? Reiciendis libero animi voluptate. Corporis
                        deleniti voluptate praesentium, iusto enim necessitatibus consequuntur rerum aliquid? Officiis
                        corrupti cupiditate consectetur!</p>
                </div>
                <div id="rating" class="hide">
                    <div class="container">
                        <div class="ratings row">
                            <div class="chart col-sm-5">
                                <div class="rate-box">
                                    <span class="value">5</span>
                                    <div class="progress-bar">
                                        <span class="progress"></span>
                                    </div>
                                    <span class="count">0</span>
                                </div>
                                <div class="rate-box">
                                    <span class="value">4</span>
                                    <div class="progress-bar"><span class="progress"></span></div>
                                    <span class="count">0</span>
                                </div>
                                <div class="rate-box">
                                    <span class="value">3</span>
                                    <div class="progress-bar"><span class="progress"></span></div>
                                    <span class="count">0</span>
                                </div>
                                <div class="rate-box">
                                    <span class="value">2</span>
                                    <div class="progress-bar"><span class="progress"></span></div>
                                    <span class="count">0</span>
                                </div>
                                <div class="rate-box">
                                    <span class="value">1</span>
                                    <div class="progress-bar"><span class="progress"></span></div>
                                    <span class="count">0</span>
                                </div>
                            </div>
                            <div class="global col-sm-5 text-center">
                                <span class="global-value">0.0</span>
                                <div class="rating-icons">
                                    <span class="one"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                            class="fas fa-star"></i><i class="fas fa-star"></i><i
                                            class="fas fa-star"></i></span>
                                    <span class="two"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                            class="fas fa-star"></i><i class="fas fa-star"></i><i
                                            class="fas fa-star"></i></span>
                                </div>
                                <span class="total-reviews">0</span>
                            </div>
                        </div>
                        <hr>
                        <div>
                            <div class="row p-2">
                                <div class="col-lg-1 p-0">
                                    <i class="fa fa-user-circle userImage" aria-hidden="true"></i>
                                </div>
                                <div class="col-8">
                                    <span class="row p-0">
                                        <strong>ClientName &nbsp; </strong>
                                        <p class="m-0">Time &nbsp;</p>
                                        <span>
                                            <small class="btn btn-success py-0 px-1">
                                                <small><i class="fa fa-star" aria-hidden="true"></i></small> 4.5
                                            </small>
                                        </span>
                                    </span>
                                    <hr class="border-none">
                                    <p class="p-0">comment/review
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi, obcaecati? Sequi
                                        velit esse magnam enim dolorem amet qui nobis consequuntur.
                                    </p>
                                </div>
                                <div class="col-3">
                                    <div class="row mt-2">
                                        <div class="col-6 ">
                                            <a href="#" class="text-secondary text-decoration-none">
                                                <i class="fa fa-thumbs-up" aria-hidden="true"></i>
                                                <p>5</p>
                                            </a>
                                        </div>
                                        <div class="col-6">
                                            <a href="#" class="text-secondary text-decoration-none">
                                                <i class="fa fa-thumbs-down" aria-hidden="true"></i>
                                                <p>3</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--More related Products-->
    <div class="container my-3 brands">
        <h5 class="m-2">More related Products</h4>
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="card m-2">
                        <img src="https://images.unsplash.com/photo-1609081219090-a6d81d3085bf?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8Z2FkZ2V0c3xlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60"
                            class="card-img-top card-height" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Product Name</h5>
                            <a class="btn btn-success text-light py-0 px-1">
                                <small>
                                    <small><i class="fa fa-star" aria-hidden="true"></i></small> 4.5
                                </small>
                            </a>
                            <p><strong> Rs.2700 &nbsp;</strong>
                                <span><del class="text-secondary">Rs.3000</del>
                                    <span class="text-success">&nbsp; 10% off</span>
                                </span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="card m-2">
                        <img src="https://www.gadgetbytenepal.com/wp-content/uploads/2017/03/new-ipad-9.7.jpg"
                            class="card-img-top card-height" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Product Names</h5>
                            <a class="btn btn-success text-light py-0 px-1">
                                <small>
                                    <small><i class="fa fa-star" aria-hidden="true"></i></small> 4.5
                                </small>
                            </a>
                            <p><strong> Rs.4000 </strong></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="card m-2">
                        <img src="https://images.unsplash.com/photo-1609081219090-a6d81d3085bf?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8Z2FkZ2V0c3xlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60"
                            class="card-img-top card-height" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolores,
                                eaque!</h5>
                            <a class="btn btn-success text-light py-0 px-1">
                                <small>
                                    <small><i class="fa fa-star" aria-hidden="true"></i></small> 4.5
                                </small>
                            </a>
                            <p><strong> Rs.2700 &nbsp;</strong>
                                <span><del class="text-secondary">Rs.3000</del>
                                    <span class="text-success">&nbsp; 10% off</span>
                                </span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
    </div>
@endsection
@section('script')
    <script>
        var temp_price = parseInt($('#total_price_input').val());
        $('#plus').click(function(e) {
            e.preventDefault();
            var qty_input = parseInt($('#qty_input').val());
            var total_price_input = parseInt($('#total_price_input').val());
            var max_value = parseInt($('#qty_input').attr('max'));
            if (qty_input >= max_value) {
                alert('Max value is ' + max_value);
            } else {
                $('#qty_input').val(qty_input + 1);
                $('#total_price_input').val(total_price_input += temp_price);
            }
            qtyChange();
            total_priceChange();
        });
        $('#minus').click(function(e) {
            e.preventDefault();
            var qty_input = parseInt($('#qty_input').val());
            var price_input = parseInt($('#price_input').val());
            var total_price_input = parseInt($('#total_price_input').val());
            var min_value = parseInt($('#qty_input').attr('min'));
            if (qty_input <= min_value) {
                alert('Min value is ' + min_value);
            } else {
                $('#qty_input').val(qty_input - 1);
                $('#total_price_input').val(total_price_input -= temp_price);
            }
            qtyChange();
            total_priceChange();
        });

        function qtyChange() {
            var qty_input = $('#qty_input').val();
            $('#quantity').empty();
            $('#quantity').append(qty_input);
        }

        function total_priceChange() {
            var total_price_input = $('#total_price_input').val();
            $('#total_price').empty();
            $('#total_price').append(total_price_input);
        }
    </script>

    <script>
        let rateBox = Array.from(document.querySelectorAll(".rate-box"));
        let globalValue = document.querySelector(".global-value");
        let two = document.querySelector(".two");
        let totalReviews = document.querySelector(".total-reviews");
        let reviews = {
            5: 5,
            4: 2,
            3: 0,
            2: 0,
            1: 1,
        };
        updateValues();

        function updateValues() {
            rateBox.forEach((box) => {
                let valueBox = rateBox[rateBox.indexOf(box)].querySelector(".value");
                let countBox = rateBox[rateBox.indexOf(box)].querySelector(".count");
                let progress = rateBox[rateBox.indexOf(box)].querySelector(".progress");
                console.log(typeof reviews[valueBox.innerHTML]);
                countBox.innerHTML = nFormat(reviews[valueBox.innerHTML]);

                let progressValue = Math.round(
                    (reviews[valueBox.innerHTML] / getTotal(reviews)) * 100
                );
                progress.style.width = `${progressValue}%`;
            });
            totalReviews.innerHTML = getTotal(reviews);
            finalRating();
        }

        function getTotal(reviews) {
            return Object.values(reviews).reduce((a, b) => a + b);
        }

        document.querySelectorAll(".value").forEach((element) => {
            element.addEventListener("click", () => {
                let target = element.innerHTML;
                reviews[target] += 1;
                updateValues();
            });
        });

        function finalRating() {
            let final = Object.entries(reviews)
                .map((val) => val[0] * val[1])
                .reduce((a, b) => a + b);
            // console.log(typeof parseFloat(final / getTotal(reviews)).toFixed(1));
            let ratingValue = nFormat(parseFloat(final / getTotal(reviews)).toFixed(1));
            globalValue.innerHTML = ratingValue;
            two.style.background = `linear-gradient(to right, #66bb6a ${(ratingValue / 5) * 100}%, transparent 0%)`;
        }

        function nFormat(number) {
            if (number >= 1000 && number < 1000000) {
                return `${number.toString().slice(0, -3)}k`;
            } else if (number >= 1000000 && number < 1000000000) {
                return `${number.toString().slice(0, -6)}m`;
            } else if (number >= 1000000000) {
                return `${number.toString().slice(0, -9)}md`;
            } else if (number === "NaN") {
                return `0.0`;
            } else {
                return number;
            }
        }
    </script>

    <script>
        $('#descriptionBTN').click(function(e) {
            e.preventDefault();
            $('#description').show();
            $('#rating').hide();
            $('#descriptionBTN').addClass('activeBTN');
            $('#ratingBTN').removeClass('activeBTN');
        });

        $('#ratingBTN').click(function(e) {
            e.preventDefault();
            $('#rating').show();
            $('#description').hide();
            $('#ratingBTN').addClass('activeBTN');
            $('#descriptionBTN').removeClass('activeBTN');
        });
    </script>

    <script type="text/javascript" src="{{ asset('zoom/src/xzoom.js') }}"></script>
    <script>
        $('.xzoom-gallery').click(function(e) {
            e.preventDefault();
            $('.xzoom-gallery').removeClass('active');
            $(this).addClass('active');
            let image_link = $(this).attr('src');
            $('#product_zoom').removeAttr('src');
            $('#product_zoom').removeAttr('xoriginal');
            $('#product_zoom').attr('src', image_link);
            $('#product_zoom').attr('xoriginal', image_link);
        });



        $(".xzoom").xzoom({
            zoomWidth: 200,
            zoomHeight: 200,
            title: true,
            tint: '#333',
            Xoffset: 15
        });
    </script>
@endsection
