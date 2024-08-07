<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet"
          href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="css/home.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap');
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: "Rubik", sans-serif;
            list-style: none;
            text-decoration: none;
        }
        :root{
            --bg-color:#f8f5f0;
            --text-color:black;
            --main-color:rgba(219,25,115,255);
            --big-font:7rem;
            --p-font:1.1rem;
        }
        body{
            background-color: var(--bg-color);
            color: var(--text-color);

        }
        header{

            position: fixed;
            top: 0;
            right: 0;
            width: 100%;
            z-index: 1000;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 32px 15%;
            background: transparent;
            transition: all ease .45s;
        }
        .logo{
            color: black;
            font-size: 41px;
            font-weight: 600;
        }
        .logo span{
            color: var(--main-color);
        }
        .navbar{
            display: flex;
        }
        .navbar a{
            font-size: var(--p-font);
            font-weight: 500;
            color: black;
            margin: 0 25px;
            transition: all ease .50s;
        }
        .navbar a:hover{
            color: var(--main-color);
        }
        .navbar a.active{
            color: var(--main-color);
        }
        .menu-btn{
            background: var(--main-color);
            box-shadow: 0px 20px 40px #00000070;
            border: 1px solid #3b3b3b;
            padding: 10px 20px;
            border-radius: 100px;
            display: flex;
            cursor: pointer;
            color: black;
        }
        #menu-icon{
            font-size: 28px;
            margin-left: 10px;
            z-index: 6;


        }
        @media (max-width: 1850px) {
            header{
                padding: 15px 8px;
                transition: .2s;
            }
            section{
                padding: 0 8%;
                transition: .2s;
            }
            .share{
                left:  8%;
                transition: .2s;
            }
        }

        @media (max-width: 1370px) {
            header{
                padding: 15px 8px;
                transition: .2s;
            }
            section{
                padding: 0 4%;
                transition: .2s;
            }
            .share{
                left:  4%;
                transition: .2s;
            }
            :root{
                --big-font:5.5rem;
                --p-font:1rem;
                transition: .2s;
            }
        }

        @media (max-width: 1020px) {
            .navbar a{
                margin: 0 15px;

            }
            :root{
                --big-font:5.5rem;
                --p-font:1rem;
                transition: .2s;
            }
        }
        @media (max-width: 950px) {
            .share{
                display: none;
            }
            section{
                padding: 70px 4%;
            }
            header{
                padding: 11px 4%;
                background: #2d2d2d;
            }
            .home{
                height: auto;
                display: flex;
                flex-wrap: wrap;
            }
            .home-text{
                order: 2;
            }
            .home-img{
                margin: auto;
                height: auto;
                width: auto;
            }
            .home-img img{
                max-width: 450px;
                width: 100%;
                height: auto;

            }
        }

        @media (max-width: 850px) {
            .navbar{
                position: absolute;
                width: 100%;
                height: 100vh;
                padding: 40px 50px;
                top: 0;
                right: 0;
                bottom: 0;
                left: 100%;
                display: flex;
                flex-direction: column;
                background: #2d2d2d;
                transition: all  0.4s ease-in-out;
            }
            .navbar a{
                display: block;
                color: #c3c3c3;
                padding: 0;
                margin: 0px 0px 40px 0px;
                font-size: 2rem;
                font-weight: 400;
            }
            .navbar.open{
                left: 0;
            }
        }
        @media (max-width: 500px){
            :root{
                --big-font: 4rem;
                --p-font: 15px;
                transition: .2s;
            }
            .btn{
                padding: 9px 28px;
            }
        }
        .home-img img{
            animation:  imgg 2s ease-in-out infinite;
            animation-delay: 2s ;
        }
        @keyframes imgg {
            0%{
                transform: translateY(0);
            }
            50%{
                transform: translateY(-22px);
            }
            100%{
                transform: translateY(0);
            }
        }
    </style>

</head>
<body>
<header>
    <a href="page.php"class="logo" style="color: black"><Span>THE</Span> CHICK</a>
    <ul class="navbar">
        <li><a href="page.php" class="active">HOME</a></li>
        <li><a href="" style="color: black">ABOUT</a></li>
        <li><a href="shop.php" style="color: black">SHOP</a></li>
        <li><a href="" style="color: black">CONTACT US</a></li>
    </ul>
    <div class="menu-btn">
        <span><a href="" style="text-decoration: none; color: black">ORDER NOW</a></span>
        <div class="bx bx-menu" id="menu-icon"></div>
    </div>
</header>

<script>
    let menu = document.querySelector('#menu-icon');
    let navbar = document.querySelector('.navbar');

    menu.onclick = () =>{
        menu.classList.toggle('bx-x');
        navbar.classList.toggle('open')
    };
</script>
</body>
</html>