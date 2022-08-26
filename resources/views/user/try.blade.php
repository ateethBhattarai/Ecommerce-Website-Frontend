<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        user-select: none;
    }

    body {
        font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        background-color: #f5f5f5;
    }

    .ratings {
        display: flex;
        border-radius: 15px;
        gap: 40px;
        height: 200px;
    }

    .chart {
        /* width: 500px; */
        display: flex;
        justify-content: space-between;
        flex-direction: column;
        height: 100%;
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
        transition: 300ms ease-in-out;
    }

    .global {
        height: 100%;
        width: 150px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        gap: 8px;
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
        font-size: 90px;
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

<body>
    <div class="container ratings">
        <div class="chart">
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
        <div class="global">
            <span class="global-value">0.0</span>
            <div class="rating-icons">
                <span class="one"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                        class="fas fa-star"></i><i class="fas fa-star"></i></span>
                <span class="two"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                        class="fas fa-star"></i><i class="fas fa-star"></i></span>
            </div>
            <span class="total-reviews">0</span>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
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
</body>

</html>
