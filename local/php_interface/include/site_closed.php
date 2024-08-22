<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Сайт в разработке</title>
    <link rel="icon" href="https://pinks.agency/wp-content/uploads/2023/07/group-27.svg" sizes="32x32">
    <style>
        @font-face {
            font-family: Inter;
            src: url('https://a.zaynullin.pinksdev.ru/upload/site_closed_assets/Inter-Regular.ttf') format('truetype');
            font-weight: 400;
            font-style: normal;
        }

        @font-face {
            font-family: Inter;
            src: url('https://a.zaynullin.pinksdev.ru/upload/site_closed_assets/Inter-Medium.ttf') format('truetype');
            font-weight: 500;
            font-style: normal;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 0;
            margin: 0;
        }

        .workarea {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            gap: 4px;
            width: 100%;
            height: 100vh;
            background: #ffb1e0;
            background: -webkit-radial-gradient(center top, #ffb1e0 -20%, #000000 45%, #000000 100%);
            background: radial-gradient(center top, #ffb1e0 0%, #000000 50%, #000000 100%);
            background-size: 135%;
            background-position: 40%;
            transition: background-position 0.75s ease-in-out;
        }
        .workarea.parallax {
            background-position: 60%;
        }

        .lamp__wrapper {
            display: flex;
            position: absolute;
            justify-content: center;
            align-items: center;
            top: 0;
            width: 200px;
            height: 150px;
        }

        .lamp {
            position: absolute;
            top: 0;
            margin-top: -5px;
            transform: rotate(0deg);
            transition: all 0.75s ease-in-out;
            transform-origin: top center;
        }
        .lamp.shake {
            transform: rotate(25deg);
            transition: all 0.75s ease-in-out;
            transform-origin: top center;
        }

        .workarea__title,
        .workarea a {
            font-family: Inter;
            font-weight: 400;
            line-height: auto;
            letter-spacing: 0;
            color: #FFB1E0;
        }

        .workarea__title {
            font-size: 24px;
        }

        .workarea a {
            font-size: 16px;
        }

        @media (max-width: 770px) {
            .workarea {
                background-size: 200%;
            }
        }
        @media (max-width: 375px) {
            .workarea {
                background-size: 300%;
            }
        }
    </style>
</head>

<body>
    <div class="lamp__wrapper">
        <img class="lamp" src="https://a.zaynullin.pinksdev.ru/upload/site_closed_assets/lamp.svg" alt="">
    </div>
    <div class="workarea">
        <div class="workarea__title">Сайт в разработке</div>
        <a href="https://pinks.agency/">https://pinks.agency/</a>
    </div>
</body>

<script>
    var lampArea = document.querySelector(".lamp__wrapper");

    lampArea.addEventListener('mouseover', function() {
        document.querySelector('.lamp').classList.add('shake');
        document.querySelector('.workarea').classList.add('parallax');
    });
    lampArea.addEventListener('mouseleave', function() {
        document.querySelector('.lamp').classList.remove('shake');
        document.querySelector('.workarea').classList.remove('parallax');
    });
</script>
</html>