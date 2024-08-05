<!DOCTYPE html>
<style>
    .logo-container {
        text-align: center;
        animation: fadeIn 1s ease-out;
    }

    .logo {
        position: relative;
        width: 50px;
        height: 50px;
        border: 5px solid #ff2d20;
        border-radius: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
        transition: transform 0.5s ease, background-color 0.5s ease;
        animation: bounceIn 1s ease-out;
    }

    .letter {
        font-size: 38px;
        font-weight: bold;
        color: #ff2d20;
        transition: color 0.5s ease;
        animation: popIn 0.8s ease-out;
    }

    .label {
        margin-top: 10px;
        font-size: 9px;
        color: #333;
    }

    .logo:hover {
        transform: rotate(360deg) scale(1.1);
        background-color: #ff2d20;
    }

    .logo:hover .letter {
        color: #fff;
    }

    /* Keyframe Animations */
    @keyframes fadeIn {
        from {
            opacity: 0;
        }
        to {
            opacity: 1;
        }
    }

    @keyframes bounceIn {
        0% {
            transform: scale(0);
        }
        60% {
            transform: scale(1.2);
        }
        100% {
            transform: scale(1);
        }
    }

    @keyframes popIn {
        0% {
            transform: scale(0);
            opacity: 0;
        }
        100% {
            transform: scale(1);
            opacity: 1;
        }
    }

</style>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hiba Kharma's Portfolio</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Hiba Kharma</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#work">Work Experience</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#education">Education</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#skills">Skills</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#contact">Contact</a>
            </li>



        </ul>




    </div>
    <div class="logo-container">
        <div class="logo">
            <div class="letter">L</div>
        </div>
        <div class="label">Laravel Developer</div>
    </div>

</nav>

<div class="container mt-4">
    @yield('content')
</div>

<script src="{{ mix('js/app.js') }}">
    // Script to change the logo color on click
    const logo = document.querySelector('.logo');

    logo.addEventListener('click', () => {
        if (logo.style.backgroundColor === 'rgb(255, 45, 32)') {
            logo.style.backgroundColor = '#333';
            document.querySelector('.letter').style.color = '#ff2d20';
        } else {
            logo.style.backgroundColor = '#ff2d20';
            document.querySelector('.letter').style.color = '#fff';
        }
    });

</script>
</body>
</html>
