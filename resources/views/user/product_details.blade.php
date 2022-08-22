@extends('user.navbar')
@section('content')
    <div class="container my-3 text-center">
        <h2>Product Name</h2>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-5 border">
                <div class="row">
                    <div class="col-md-2 my-3  d-none d-md-inline">
                        <div class="row p-1 my-1" id="product_images" style="height: 50px">
                            <a href="#">
                                <img src="https://imageio.forbes.com/specials-images/imageserve/992893220/Second-hand-T-shirts-on-display-at-Broadway-market-in-London/960x0.jpg?format=jpg&width=960"
                                    height="100%" width="100%" alt="photo" id="1">
                            </a>
                        </div>
                        <div class="row p-1 my-1" style="height: 50px">
                            <a href="#">
                                <img src="https://storage.googleapis.com/gweb-uniblog-publish-prod/images/Old_Electronics_hero_1.max-1000x1000.jpg"
                                    height="100%" width="100%" alt="" id="2">
                            </a>
                        </div>
                        <div class="row border"></div>
                    </div>
                    <div class="col-md-10 my-4 p-0 text-center border">
                        <img src="https://imageio.forbes.com/specials-images/imageserve/992893220/Second-hand-T-shirts-on-display-at-Broadway-market-in-London/960x0.jpg?format=jpg&width=960"
                            height="100%" width="100%" id="product_image" alt="" id="3">
                        <img src="https://storage.googleapis.com/gweb-uniblog-publish-prod/images/Old_Electronics_hero_1.max-1000x1000.jpg"
                            height="100%" width="100%" alt="" style="display: none" id="4">
                    </div>
                </div>
            </div>
            <div class="col-md-7 border">a</div>
        </div>
    </div>

    <script>
        $('#1').click(function(e) {
            e.preventDefault();
            $('#4').show();
            $('#3').hide();
        });
    </script>
@endsection
