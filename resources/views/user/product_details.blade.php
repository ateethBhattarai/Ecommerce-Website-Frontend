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
    </style>

    <style>
        .ratings {
            display: flex;
            border-radius: 15px;
            gap: 40px;
            height: 200px;
        }

        /* .chart {
                width: 500px;
                display: flex;
                justify-content: space-between;
                flex-direction: column;
                height: 100%;
            } */

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
            transition: 300ms ease-in-out;
        }

        /* .global {
                    height: 100%;
                    width: 150px;
                    display: flex;
                    flex-direction: column;
                    justify-content: center;
                    align-items: center;
                    gap: 8px;
                } */

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
            font-size: 55px;
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
    <div class="container my-3 border brands">
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
    <div class="container brands">
        <div class="row">
            <div class="col-md-3 my-2" style="height: fit-content">
                <h5>Mostly viewed products</h5>
                <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nobis quidem ex veniam, eligendi, consectetur
                    laborum itaque iusto qui porro voluptate neque error architecto illo culpa reprehenderit excepturi
                    officiis voluptatibus ab ut facere quis quasi illum modi sint! A, iste voluptatem.
                </p>
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
                <div id="rating" style="display: none">
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
                        <div class="global col-sm-5">
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
                </div>
            </div>
        </div>
    </div>
    <div class="container my-2 border">
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia minus facere quas placeat libero
        aperiam
        quod
        repellendus nulla ut sed!
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
            two.style.background = `linear-gradient(to right, #66bb6a ${
    (ratingValue / 5) * 100
  }%, transparent 0%)`;
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
