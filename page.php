<?php
include 'navbar.php';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet"
          href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="Assets/css/home.css">

    <title>Home</title>
</head>
<body>
<section class="home">
    <div class="home-text">
        <span style="font-size: 40px; " >FAVOURITE</span>
        <h1 style="font-size: 40px; color: white ">FRIED</h1>
        <h1 style="font-size: 40px; color: white ">CHICKEN</h1>
        <div class="main-btn">
            <a href="cv.pdf" download="" class="btn">ORDER NOW</a>
        </div>
    </div>

    <div class="home-img">
        <img src="images/chicken.png" alt="">
    </div>
</section>
<section class="text">
    <h1>POPULAR FOOD ITEMS</h1>
</section>
<section class="grid">

    
    <div class="box">
        <div class="slide-img">
            <img src="images/wrap.jpg" alt="">
            <div class="overlay">

            </div>
        </div>
        
        <div class="details-box">
            <div class="type">
                <a href="">Shawarma</a>
                <span style="color: green; font-weight: bolder">AVAILAIBLE</span>
            </div>
            <a href="" class="price">XAF 1000</a>
        </div>
    </div>
    <div class="box">
        <div class="slide-img">
            <img src="images/2.webp" alt="">
            <div class="overlay">

            </div>
        </div>

        <div class="details-box">
            <div class="type">
                <a href="">Shawarma</a>
                <span style="color: green; font-weight: bolder">AVAILAIBLE</span>
            </div>
            <a href="" class="price">XAF 1000</a>
        </div>
    </div>
    <div class="box">
        <div class="slide-img">
            <img src="images/3.webp" alt="">
            <div class="overlay">

            </div>
        </div>

        <div class="details-box">
            <div class="type">
                <a href="">Shawarma</a>
                <span style="color: green; font-weight: bolder">AVAILAIBLE</span>
            </div>
            <a href="" class="price">XAF 1000</a>
        </div>
    </div>
    <div class="box">
        <div class="slide-img">
            <img src="images/ad3.webp" alt="">
            <div class="overlay">

            </div>
        </div>

        <div class="details-box">
            <div class="type">
                <a href="">Shawarma</a>
                <span style="color: green; font-weight: bolder">AVAILAIBLE</span>
            </div>
            <a href="" class="price">XAF 1000</a>
        </div>
    </div>

</section>


<section>
    <div class="parent">
        <div class="div1">
            <h1>DELICIOUS <br>CHICKEN </h1>

        </div>
        <div class="div2"> </div>
        <div class="div3">
            <h1>DELICIOUS <br>CHICKEN </h1>
        </div>
        <div class="div4">
            <h1>DELICIOUS FRIES </h1>
            <div class="main-btn2">
                <a href="cv.pdf" download="" class="btn2">ORDER NOW</a>
            </div>
        </div>
        <div class="div5">
        <h1>FRIED CHICKEN</h1>
        </div>
    </div>

</section>


<?php include 'footer.html';?>
</body>
</html>