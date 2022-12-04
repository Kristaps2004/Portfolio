<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="icon" href="resources/favicons/logo.png" />
    <link rel="icon" href="resources/favicons/logo.png"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;1,700&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="resources/css/index.css"/>
</head>
<body>
    <div class="hero-img"></div>
    <div class="wrapper" >
        <header>
            <?php include 'includes/header.php';?>
        </header>
        <section class="hero">
            <h1>Hello!</h1>
            <p clas="subhead">I'm Kristaps Ešmits, a student at Riga State Technical School </p>
        </section>
        <section class="more-info">
            <div class="feature left">
                <div class="content">
                    <p class="title">Cars</p>
                    <p class="desc">I'm very passionate about cars and motorsport since childhood. All this passion started at a very young age when I got taken to a drift championship.  There I got to enjoy the Drift championship from the pits and had a chance to talk to the drivers and even get into the cars.</p>
                </div>
                <img src="resources/img/img1.jpg" alt="Yellow Lamorghini">
            </div>
            <div class="feature right">
                <div class="content">
                    <p class="title">Travelling</p>
                    <p class="desc">Travelling is one of my favourite hobbies. Have been travelling around the world since a very young age. When I'm travelling I love to meet new people, explore nature and enjoy different traditions. Of all the countries I have been to my favourite country is Spain or Italy can't decide (: </p>
                </div>
                <img src="resources/img/img2.jpg" alt="Venice">
            </div>
            <div class="feature left">
                <div class="content">
                    <p class="title">Programming</p>
                    <p class="desc">I'm passionate about programming I love to make little projects that I never finish. Right now I'm learning to program at Riga State Technical School. If nothing changes in future I would like to become a full-stack developer because I love to work with the back end and front end.</p>
                </div>
                <img src="resources/img/1.png" alt="Computer with programming languages">
            </div>
        </section>
    </div>
    <footer>
        <?php include 'includes/footer.php';?>
    </footer>
    <script src="resources/js/index.js"></script>
</body>
</html>