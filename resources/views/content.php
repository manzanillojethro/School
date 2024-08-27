<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Content</title>
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
            position: relative;
            width: 100%;
            height: 100vh;
            background-image: url('https://i.pinimg.com/originals/fc/e0/aa/fce0aaf93d2216c86a8edae15c17d0ec.jpg');
            background-size: cover;
            background-position: center;
        }

        .jet {
            position: absolute;
            top: 80px;
            left: 44%;
            padding-top: 70px;
            border-radius: 10px 10px 10px 10px;
        }

        .jet,
        .sketch {
            transition: transform 0.3s ease-in-out;
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

        .parallax p {
            padding-top: 120px;
            font-size: large;
            font-weight: bold;
        }

        .navigation {
            position: fixed;
            margin-left: 52em;
            margin-top: 20px;
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
        }

        .rectangle2 {
            background-color: #888259a6;
            width: 1536px;
            height: 50px;
            bottom: -865px;
            position: absolute;
        }

        .rectangle2 p {
            text-align: center;
            color: #f9f9f9;
            margin-top: 10px;
        }

        .projects {
            padding: 50px 20px;
            text-align: center;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 100%;
            max-width: 1200px;
            z-index: 10;
        }
        .projects h1 {
            font-size: 2.5em;
            margin-bottom: 30px;
            color: #333;
            margin-top: 30px;
            color: white;
            filter: drop-shadow(4px 4px 10px rgba(0, 0, 0, 0.5));
        }

        .projects-container {
            position: relative;
            display: flex;
            justify-content: space-between;
            width: 100%;
        }

        .project {
            background-color: #a3b18a;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            max-width: 300px;
            padding: 15px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .project img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 8px;
        }

        .project h2 {
            font-size: 1.5em;
            margin: 15px 0;
            color: #222;
        }

        .project p {
            font-size: 1em;
            color: white;
            margin-bottom: 20px;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            font-size: 1em;
            color: white;
            background-color: #606c38;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .btn:hover {
            background-color: white;
            color: #606c38;
            transform: scale(1.05);
        }

        .project:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
        }
    </style>
</head>

<body>
    <div class="banner"></div>
    
    <header>
        <a href="/"> <h2 class="logo"> Laravel </h2></a>
        <nav class="navigation">
            <a href="/home">Home</a>
            <a href="/about">About</a>
            <a href="/content" class="active">Content</a>
        </nav>
    </header>
    <section class="projects">
        <h1>My Projects</h1>
        <div class="projects-container">
            <div class="project">
                <img src="https://i.postimg.cc/1tWKZLXF/2ad8cff3a37f38b783080b8b94a66f70-removebg-preview.png" alt="Project 1">
                <h2>Project 1</h2>
                <p>A short description of what this project is about.</p>
                <a href="/project1-details" class="btn">View Project</a>
            </div>
            <div class="project">
                <img src="https://i.postimg.cc/1tWKZLXF/2ad8cff3a37f38b783080b8b94a66f70-removebg-preview.png" alt="Project 2">
                <h2>Project 2</h2>
                <p>A short description of what this project is about.</p>
                <a href="/project2-details" class="btn">View Project</a>
            </div>
            <div class="project">
                <img src="https://i.postimg.cc/1tWKZLXF/2ad8cff3a37f38b783080b8b94a66f70-removebg-preview.png" alt="Project 3">
                <h2>Project 3</h2>
                <p>A short description of what this project is about.</p>
                <a href="/project3-details" class="btn">View Project</a>
            </div>
        </div>
    </section>
    <div class="rectangle"></div>
    <div class="rectangle11"></div>
</body>

</html>
