<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="ex.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background: #f9f9f9;
            min-height: 100vh;
            overflow-x: hidden;
        }

        header {
            position: absolute;
            top: 0;
            left: 160px;
            width: 100%;
            padding: 30px 100px;
            display: flex;
            justify-content: flex-start;
            align-items: center;
            z-index: 100;
        }


        /* home */
        .banner {
            position: absolute;
            width: 100%;
            height: 100vh;
            background-image: url('https://i.pinimg.com/originals/fc/e0/aa/fce0aaf93d2216c86a8edae15c17d0ec.jpg');
            background-size: cover;
            background-position: center;
        }

        .logo {
            font-size: 1.5em;
            pointer-events: none;
            color: white;
            text-decoration: none;
            margin-top: 30px;
        }

        .logo h2 {
            font-size: 0.8em;
            color: #ad2831;
            text-decoration: none;
            position: fixed;
        }
        

        .jet {
            position: absolute;
            top: 80px;
            left: 44%;
            padding-top: 70px;
            border-radius: 10px 10px 10px 10px;
            filter: drop-shadow(4px 4px 10px rgba(0, 0, 0, 0.5));
        }

        .sketch {
            position: absolute;
            filter: drop-shadow(4px 4px 10px rgba(0, 0, 0, 0.5));
            margin-left: 2em;
        }

        .big {
            transform: scale(1.2);
        }

        .fade {
            opacity: 0;
            transition: opacity 3s ease-in-out;
        }

        .parallax {
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            overflow: hidden;
        }

        .parallax img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            pointer-events: none;
        }

        .parallax h2 {
            padding-top: 35px;
        }

        .parallax p {
            padding-top: 200px;
            font-size: x-large;
            font-weight: bold;
            margin: 100px;
        }

        .navigation {
            position: fixed;
            margin-left: 52em;
            margin-top: 20px;
            filter: drop-shadow(4px 4px 10px rgba(0, 0, 0, 0.5));
        }

        .navigation a {
            text-decoration: none;
            color: #ffffff;
            padding: 6px 15px;
            border-radius: 20px;
            margin: 0 10px;
            font-weight: 600;
        }

        .navigation a:hover,
        .navigation a.active {
            background: #606c38;
            color: #f9f9f9;
        }

        #text {
            margin-top: 50px;
            position: absolute;
            font-size: 3.5em;
            color: rgb(255, 255, 255);
            text-shadow: 2px 2px 4px rgba(0, 0, 0, .2);
        }

        .rectangle {
            background-color: #283618;
            opacity: 50%;
            height: 140px;
            width: 1600px;
            position: absolute;
            top: 0%;
            z-index: 1;
            transition: opacity 0.3s ease;
            filter: drop-shadow(4px 4px 10px rgba(0, 0, 0, 0.5));
        }

        .rectangle2 {
            background-color: #283618;
            width: 1536px;
            height: 50px;
            bottom: -800px;
            position: absolute;
            opacity: 50%;
        }

        .rectangle2 p {
            text-align: center;
            color: #f9f9f9;
            margin-top: 10px;
        }

        .sec {
            position: absolute;
            background: #a3b18a;
            padding: 100px;
            padding-left: -10px;
        }

        .sec h2 {
            font-size: 2.7em;
            color: #f9f9f9;
            margin-bottom: 30px;
            filter: drop-shadow(4px 4px 10px rgba(0, 0, 0, 0.5));
            text-align: center;
        }

        .sec p {
            font-size: 1em;
            color: #000000;
            font-weight: 300;
            text-align: center;
            width: 100%;
        }

        .sec1 h2 {
            float: right;
            font-size: 3em;
            color: #f9f9f9;
            margin-top: 40px;
        }
        

        .sec1 p {
            float: right;
            font-size: 1em;
            color: #000000;
            font-weight: 300;
            text-align: right;
            width: 50%;
            margin-left: 50em;
        }
        .sec img {
            width: 450px;
            padding-left: 50px;
            padding-top: 20px;
        }

    </style>
</head>

<body>
    <div class="banner"></div>

    <header>
        <a href="/" class="active"> <h2 class="logo">Laravel</h2></a>
        <nav class="navigation">
            <a href="/home" class="active">Home</a>
            <a href="/about">About</a>
            <a href="/content">Content</a>
        </nav>
    </header>

    <div class="rectangle"></div>

    <section class="parallax">
        <h2 id="text">Hello!</h2>
        <p class="name1">This is Jethro's Laravel Project.</p>
        <<img src="https://i.postimg.cc/JnmKRrPG/jet.png" alt="Jethro's picture" class="jet">
    </section>

    <div>
    <section class="sec">
        <h2>Welcome to My Laravel Portfolio!</h2>
        <p> 
        I'm <b>Jethro Jayson Manzanillo</b>, a BSIT - 3C student and this is my first project on Laravel. Exploring this powerful PHP framework has been an exciting journey, and I'm thrilled to share the results with you. Through this project, I've learned how to use Laravel's robust features to create dynamic web applications, manage data efficiently, and provide a seamless user experience.<br></br>
        </p>
        <section class="sec1">
            <h2>Laravel Introduction</h2>
            <p> 
            <b>Laravel</b> is a modern PHP framework designed to make web development faster and more enjoyable. As a powerful, open-source framework, Laravel provides an elegant syntax and robust set of tools that streamline common tasks such as routing, authentication, and database management.
        With Laravel, you can build sophisticated and scalable web applications with ease.
        In this project, I've utilized Laravel's capabilities to create a dynamic and responsive portfolio website. By leveraging its MVC architecture and built-in tools, I've been able to efficiently manage data and deliver a seamless user experience.
        Explore my portfolio to see how Laravel has empowered me to build modern web solutions and to learn more about the projects I've worked on.<br></br>
            </p>
        </section>
        <img src="https://i.postimg.cc/QdjXKPSw/pc.png" alt="sketch" class="sketch">
    </div>
    </section>
    <div class="rectangle2">
    <p> © Jethro J. Manzanillo BSIT - 2B. 2024</p>
    </div>
</body>

</html>
