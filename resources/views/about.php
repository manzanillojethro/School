<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link rel="stylesheet" href="abt.css">

    <!-- Adding CSS directly into the style tag -->
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
        }

        .banner {
            position: absolute;
            width: 100%;
            height: 100vh;
            background-image: url('https://i.pinimg.com/originals/fc/e0/aa/fce0aaf93d2216c86a8edae15c17d0ec.jpg');
            background-size: cover;
            background-position: center;
        }

        .jet3 {
            position: absolute;
            padding-right: 6em;
            padding-top: 100px;
            filter: drop-shadow(4px 4px 10px rgba(0, 0, 0, 0.5));
        }

        .jet4 {
            position: absolute;
            width: 85%;
            padding-top: 40px;
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

        .rectangle1 {
            background-color: #a3b18a;
            height: 70%;
            width: 85%;
            position: absolute;
            border-radius: 20px;
            padding-left: 100px;
            margin-top: 130px;
            opacity: 50%;
            filter: drop-shadow(4px 4px 10px rgba(0, 0, 0, 0.5));
        }

        .aboutme {
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            overflow: hidden;
        }

        .aboutme h2 {
            padding-bottom: 230px;
            padding-left: 270px;
            filter: drop-shadow(4px 4px 10px rgba(0, 0, 0, 0.5));
        }

        .aboutme ul li {
            position: relative;
            padding-right: 100px;
            list-style: none;
            padding-bottom: 15px;
            padding-left: 450px;
        }

        .aboutme p {
            padding-top: 120px;
            padding-left: 100px;
        }

        #text {
            position: absolute;
            font-size: 2em;
            color: rgb(255, 255, 255);
            text-shadow: 2px 2px 4px rgba(0, 0, 0, .2);
        }

        .sec {
            position: absolute;
            background: #a3b18a;
            padding: 100px;
            width: 100%;
        }

        .sec h2 {
            font-size: 2.7em;
            color: #f9f9f9;
            margin-bottom: 30px;
            margin-top: 10px;
            filter: drop-shadow(4px 4px 10px rgba(0, 0, 0, 0.5));
            text-align: center;
        }

        .sec p {
            font-size: 1.1em;
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


        .facts {
            font-size: 3em;
            color: #f9f9f9;
            position: absolute;
            margin-top: 940px;
            margin-left: 1180px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, .2);
        }


        .rectangle2 {
            background-color:  #283618;
            width: 1536px;
            height: 50px;
            bottom: -600px;
            position: absolute;
            opacity: 50%;
            margin-bottom: -70px;
        }

        .rectangle2 p {
            text-align: center;
            color: #f9f9f9;
            margin-top: 10px;
        }

        .input-box {
            position: absolute;
            margin-top: 2100px;
            margin-left: 1225px;
            cursor: pointer;
        }

    </style>
</head>

<body>
    <div class="banner"></div>
    <header>
        <a href="/"> <h2 class="logo"> Laravel </h2></a>
        <nav class="navigation">
            <a href="/home" >Home</a>
            <a href="/about" class="active" >About</a>
            <a href="/content">Content</a>
        </nav>
    </header>
    <section class="aboutme">
        <div class="rectangle"></div>
        <div class="rectangle1"></div>
        <img src="https://i.postimg.cc/qMQQc64w/Untitled17.png" alt="Jethro's picture" class="jet3">
        <h2 id="text">Jethro Jayson Manzanillo</h2>
        <ul>
            <p>jet</p>
            <li>✉ Email Address (school): jjm2022-6024-83583@bicol-u.edu.ph</li>
            <li>✉ Email Address (personal): manzanillojethro@gmail.com</li>
            <li>☎ Contact Number: 09076409605</li>
            <li>☐ Date of Birth: December 16, 2003</li>
            <li>☗ Address: Purok 3 Orogo Street. Brgy. 2 Pioduran, Albay</li>
        </ul>
        
    </section>
    <div>
    <section class="sec">
        <h2>Project Overview</h2>
        <p> 
        My projects highlight innovative solutions in web development, demonstrating a range of applications and functionality.<br></br>
        </p>
        <h2>Technology Used</h2>
        <p> 
        I use programming language like HTML, CSS, Javascript and Laravel learning it now, to build robust and dynamic web applications.<br></br>
        </p>
        <h2>Future Goals</h2>
        <p> 
        I aim to expand my projects with advanced features and integrations, continually enhancing user experiences and leveraging emerging technologies.<br></br>
        </p>  
    </section>
    </div>
  
    <div class="rectangle2">
    <p> © Jethro J. Manzanillo BSIT - 2B. 2024</p>
    </div>

</body>

</html>
