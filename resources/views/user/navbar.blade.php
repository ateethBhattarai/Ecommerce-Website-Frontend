<!doctype html>
<html lang="en">

<head>
    <title>ECommerce</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Font-awesome-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Manual CSS -->
    <link rel="stylesheet" href="{{ asset('manualCSS\style.css') }}">
    <link rel="stylesheet" href="{{ asset('manualCSS\sidebar.css') }}">
    @yield('styles')
</head>

<body>
    <section>
        <div class="signupLogin" id="signup">
            <div class="container rounded border ">
                <div class="row">
                    <div class="col-md-6 d-none d-md-inline border-right">
                        Photo to be added
                    </div>
                    <div class="col-md-6 my-2">
                        <h3>Sign Up</h3>
                        <a href="#" class="text-light text-center closeBTN closeSignup">
                            <i class="fa fa-times"></i>
                        </a>
                        <hr>
                        <form action="">
                            <div class="form-group">
                                <label>Full Name</label>
                                <input type="text" name="" class="form-control">
                                <label>Email</label>
                                <input type="email" name="" class="form-control">
                                <label>Phone Number</label>
                                <input type="number" name="" class="form-control">
                                <label>Password</label>
                                <input type="password" name="" class="form-control">
                                <label>Confirm Password</label>
                                <input type="password" name="" class="form-control">
                                <div class="form-check my-3">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" name=""
                                            value="checkedValue" checked>
                                        By signing up I agree the terms and conditions of the company.
                                    </label>
                                </div>
                                <button type="submit" class="btn btn-outline-secondary">Sign Up</button>
                                <p>
                                    Already signed in?
                                    <a href="" class="loginBTN closeSignup">Log in</a>
                                </p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="signupLogin" id="login">
            <div class="container rounded border ">
                <div class="row">
                    <div class="col-md-6 d-none d-md-inline border-right">
                        Photo to be added
                    </div>
                    <div class="col-md-6 my-2">
                        <h3>Log in</h3>
                        <a href="#" class="text-light text-center closeBTN closeLogin">
                            <i class="fa fa-times"></i>
                        </a>
                        <hr>
                        <form action="">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="" class="form-control">
                                <label>Password</label>
                                <input type="password" name="" class="form-control">
                                <div class="form-check my-3">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" name=""
                                            value="checkedValue" checked>
                                        By signing up I agree the terms and conditions of the company.
                                    </label>
                                </div>
                                <button type="submit" class="btn btn-outline-success">Log in</button>
                                <p>New here?
                                    <a href="" class="signupBTN closeLogin">Sign Up</a>
                                </p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <nav class="navbar navbar-expand-sm navbar-light bg-light">
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId"
            aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa fa-align-justify"></i>
        </button>
        <a class="navbar-brand" href="#">Ecommerce</a>

        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav mt-2 ml-auto mr-2 mt-lg-0">
                <li class="nav-item">
                    <a href="#" class="nav-link border-right text-secondary loginBTN">Login</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link text-secondary signupBTN">Sign up</a>
                </li>
            </ul>
        </div>
        <div class="mt-2 ml-auto">
            <button class="btn ouline-none" style="font-size: 20px">
                <i class="fa fa-shopping-cart text-secondary"></i>
            </button>
            <a href="#" class="text-secondary d-none d-sm-inline">Wish_list</a>
        </div>
    </nav>
    <div class="container">
        <div class="row my-3">
            <div class="col-sm-8 mx-auto">
                <div class="searchArea">
                    <input class="rounded w-100 p-2" type="text" placeholder="Search">
                    <div class="searchBTN">
                        <a class="border-0 bg-white"><i class="fa fa-search p-1" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light bg-white py-3 shadow-sm">
        <a href="#" class="navbar-brand font-weight-bold d-block d-lg-none">MegaMenu</a>
        <button type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbars"
            aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div id="navbarContent" class="collapse navbar-collapse">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item dropdown megamenu">
                    <a id="megamneu" href="" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false"
                        class="nav-link dropdown-toggle font-weight-bold text-uppercase">Electronics</a>
                    <div aria-labelledby="megamneu" class="dropdown-menu border p-0 m-0">
                        <div class="container">
                            <div class="row bg-white border rounded-0 m-0 shadow-sm">
                                <div class="col-lg-12">
                                    <div class="p-4">
                                        <div class="row">
                                            <div class="col-lg-6 mb-4">
                                                <h6 class="font-weight-bold text-uppercase">Heading one</h6>
                                                <ul class="list-unstyled">
                                                    <li class="nav-item"><a href=""
                                                            class="nav-link text-small pb-0">Home</a></li>
                                                    <li class="nav-item"><a href=""
                                                            class="nav-link text-small pb-0 ">About</a></li>
                                                    <li class="nav-item"><a href=""
                                                            class="nav-link text-small pb-0 ">Help</a></li>
                                                    <li class="nav-item"><a href=""
                                                            class="nav-link text-small pb-0 ">Account</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-6 mb-4">
                                                <h6 class="font-weight-bold text-uppercase">Heading two</h6>
                                                <ul class="list-unstyled">
                                                    <li class="nav-item"><a href=""
                                                            class="nav-link text-small pb-0 ">Home</a></li>
                                                    <li class="nav-item"><a href=""
                                                            class="nav-link text-small pb-0 ">About</a></li>
                                                    <li class="nav-item"><a href=""
                                                            class="nav-link text-small pb-0 ">Help</a></li>
                                                    <li class="nav-item"><a href=""
                                                            class="nav-link text-small pb-0 ">Account</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-6 mb-4">
                                                <h6 class="font-weight-bold text-uppercase">Heading three</h6>
                                                <ul class="list-unstyled">
                                                    <li class="nav-item"><a href=""
                                                            class="nav-link text-small pb-0 ">Home</a></li>
                                                    <li class="nav-item"><a href=""
                                                            class="nav-link text-small pb-0 ">About</a></li>
                                                    <li class="nav-item"><a href=""
                                                            class="nav-link text-small pb-0 ">Help</a></li>
                                                    <li class="nav-item"><a href=""
                                                            class="nav-link text-small pb-0 ">Account</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-6 mb-4">
                                                <h6 class="font-weight-bold text-uppercase">Heading four</h6>
                                                <ul class="list-unstyled">
                                                    <li class="nav-item"><a href=""
                                                            class="nav-link text-small pb-0 ">Home</a></li>
                                                    <li class="nav-item"><a href=""
                                                            class="nav-link text-small pb-0 ">About</a></li>
                                                    <li class="nav-item"><a href=""
                                                            class="nav-link text-small pb-0 ">Help</a></li>
                                                    <li class="nav-item"><a href=""
                                                            class="nav-link text-small pb-0 ">Account</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item"><a href="" class="nav-link font-weight-bold text-uppercase">About</a>
                </li>
                <li class="nav-item"><a href="" class="nav-link font-weight-bold text-uppercase">Services</a>
                </li>
                <li class="nav-item"><a href="" class="nav-link font-weight-bold text-uppercase">Contact</a>
                </li>
            </ul>
        </div>
    </nav>

    @yield('content')


    <footer class="m-3">
        <div class="container-sm  m-auto">
            <div class="text-center col-md-7 m-auto">
                <h2>Ecommerce Name</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, beatae.
                </p>
            </div>
            <div class="row">
                <div class="col-3 m-auto text-center">
                    <div class="font-weight-bolder" style="font-size: 20px;">200M</div>
                    <div>Visitors</div>
                </div>
                <div class="col-3 m-auto text-center">
                    <div class="font-weight-bolder" style="font-size: 20px;">100k</div>
                    <div>Orders Delivered</div>
                </div>
                <div class="col-3 m-auto text-center">
                    <div class="font-weight-bolder" style="font-size: 20px;">15</div>
                    <div>Cities</div>
                </div>
            </div>
        </div>
        <hr style="box-shadow: 1px 1px 4px #888888;">
        <div class="container-sm">
            <div class="row text-center">
                <div class="col-sm-3 m-auto">
                    <h5 class=" text-sm-left">Know Us</h5>
                    <ul class=" text-sm-left mt-4">
                        <li><a href="#" class="text-dark text-decoration-none">Lorem, ipsum.</a></li>
                        <li><a href="#" class="text-dark text-decoration-none">Lorem ipsum dolor sit.</a></li>
                        <li><a href="#" class="text-dark text-decoration-none">lorem</a></li>
                        <li><a href="#" class="text-dark text-decoration-none">Lorem ipsum dolor si</a></li>
                        <li><a href="#" class="text-dark text-decoration-none">lorem</a></li>
                        <li><a href="#" class="text-dark text-decoration-none">lorem</a></li>
                    </ul>
                </div>
                <div class="col-sm-3 m-auto">
                    <h5 class=" text-sm-left ">Our Policies</h5>
                    <ul class=" text-sm-left mt-4">
                        <li><a href="#" class="text-dark text-decoration-none">Lorem, ipsum.</a></li>
                        <li><a href="#" class="text-dark text-decoration-none">Lorem ipsum dolor sit.</a></li>
                        <li><a href="#" class="text-dark text-decoration-none">lorem</a></li>
                        <li><a href="#" class="text-dark text-decoration-none">Lorem ipsum dolor si</a></li>
                        <li><a href="#" class="text-dark text-decoration-none">lorem</a></li>
                        <li><a href="#" class="text-dark text-decoration-none">lorem</a></li>
                    </ul>
                </div>
                <div class="col-sm-3 m-auto">
                    <h5 class=" text-sm-left">Connect to Us</h5>
                    <ul class=" text-sm-left mt-4">
                        <li>
                            <button class="btn btn-primary rounded-circle mr-2 mb-2">
                                <i class="fa fa-facebook" aria-hidden="true"></i></button>
                            <button class="btn btn-secondary rounded-circle mr-2 mb-2">
                                <i class="fa fa-twitter" aria-hidden="true"></i>
                            </button>
                            <button class="btn btn-primary rounded-circle mr-2 mb-2">
                                <i class="fa fa-linkedin" aria-hidden="true"></i>
                            </button>
                        </li>
                        <li>
                            <a href="#" class="text-dark text-decoration-none">Want to connect through web?</a>
                        </li>
                        <li><a href="#" class="text-dark text-decoration-none">
                                <button class="btn btn-outline-secondary signupBTN">Sign Up</button>
                            </a></li>
                    </ul>
                </div>
            </div>
        </div>
        <hr style="box-shadow: 1px 1px 4px #888888;">
        <div class="container m-auto">
            &copy; Lorem ipsum dolor sit, amet consectetur adipisicing elit. Itaque fuga amet doloremque. Sit optio
            beatae, sapiente autem voluptatem repudiandae corporis.
        </div>
    </footer>


    <div class="topManager">
        <button class="btn btn-outline-secondary" id="topBTN">
            <i class="fa fa-arrow-up" aria-hidden="true"></i>
        </button>
    </div>
    <!-- Optional JavaScript -->
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>

    <script>
        //to close signup form
        $(".closeSignup").click(function(e) {
            e.preventDefault();
            $("#signup").hide();
        });

        //to show signup form
        $(".signupBTN").click(function(e) {
            e.preventDefault();
            $("#signup").show();
        });

        //to close signup form
        $(".closeLogin").click(function(e) {
            e.preventDefault();
            $("#login").hide();
        });

        //to show signup form
        $(".loginBTN").click(function(e) {
            e.preventDefault();
            $("#login").show();
        });
    </script>

    <script>
        // used for sorting purpose
        function showhide() {
            var value = $('#sorting').val();
            if (value == 'price') {
                $('#price').show();
                $('#name').hide();
            } else if (value == 'name') {
                $('#name').show();
                $('#price').hide();
            } else {
                $('#price').hide();
                $('#name').hide();
            }
        }
    </script>

    <script>
        // scroll topBTN
        $('#topBTN').click(function(e) {
            e.preventDefault();
            $('html').scrollTop(0);
        });
    </script>
    @yield('script')
</body>

</html>
