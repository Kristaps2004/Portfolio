<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacts</title>
    <link rel="icon" href="resources/favicons/logo.png"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;1,700&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="resources/css/contacts.css"/>
</head>
<body>
    <div class="wrapper" >
        <header>
            <?php include 'includes/header.php';?>
        </header>
        <section class="info">
            <div class="text-box">
                <h1>Need to contact me?</h1>
                <h2>Fill out the form and I will get in touch with you as soon as possible!</h2>
            </div>

            <form class="contact-box" action="https://formsubmit.co/esmitskristaps@inbox.lv", method="POST">
                <div class="box">
                    <h3>Contact Me</h3>
                    <input type="hidden" name="_captcha" value="false">
                    <input type="hidden" name="_next" value="https://kristaps2004.github.io/Portfolio/contacts.html">
                    <input type="text" name="Name" class="input" placeholder="Name" required>
                    <input type="email" name="Email" class="input" placeholder="Email" required>
                    <textarea placeholder="Message" name="Message" class="field" required></textarea>
                    <button class="btn">Send</button>
                </div>
            </form>
        </section>
    </div>
    
    <footer>
        <div class="Footer-ListWrapper">
            <a href="index.html"><img class="logoimg" src="resources/favicons/logo.png" alt="Company Logo"></a>
            <div class="footer">
                <a href="index.html">Home</a>
                <a href="galery.html">Gallery</a>
                <a href="contacts.html">Contacts</a>
            </div>
        </div>
    </footer>
    <script src="resources/js/index.js"></script>
</body>
</html>