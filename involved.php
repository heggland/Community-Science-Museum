<!DOCTYPE html>
<html lang="en">
<head>
    <title>About us</title>
    <meta charset="UTF-8">
    <meta name="description" content=" ">
    <meta name="keywords" content=" ">
    <meta name="author" content=" ">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include_once 'sheet.php'; ?>
</head>
<?php include_once 'header.php'; ?>

<body>
<main>

    <div class="container">
        <div class="con-col4"></div>
        <div class="row light">
            <h2>Who are we?</h2>
            <p>Come join us at the Community Science Museum where we’re committed to making science accessible to
                all.</p>
            <div class="image-box center">
                <img src="img/about/toa-heftiba-412579.jpg" alt="image of entrance, whale skeleton"
                     class="img-box flex">
                <img src="img/about/mavis-cw-164128.jpg" alt="image of museum halway" class="img-box flex">
                <img src="img/about/roberto-nickson-396152.jpg" alt="image of elephant stand" class="img-box flex">
            </div>
            <p>Over the course of human history, science has developed from our early understanding of fire, wind,
                water,
                and earth
                to exploring everything from galaxies far away to the very building blocks of life itself.</p>
            <p>The aim of our museum is to create a space where everyone can experience the wonders of our
                discoveries and
                perhaps
                even ignite a lifelong passion to continue the exploration of the world around us.</p>
            <p>We believe science should not be confined to the textbook, but brought to live through exhibits. This
                is why
                we have
                over 1000 different exhibits on the many varied subjects of science to explore. Many of these
                exhibits are
                designed
                for you to interact with and play around to see science come to life (apart from the dinosaur
                exhibits –
                they only
                come to life at night when everyone’s gone home).</p>
            <img src="img/about/mammoth-1257288_1920.jpg" alt="image of mammoth skeleton" class="center scale">

        </div>
    </div>


    <div class="container">
        <div class="con-col4"></div>
        <div class="row light">

            <!-- Start: Contact Form Clean -->
            <div class="contact-form align-center">
                <form method="post" action="about.php" enctype="multipart/form-data">
                    <h2>Send us a note</h2>
                    <!-- Start: Input -->
                    <div class="form-group"><input class="form-input" type="text" name="name" placeholder="Name"
                                                   pattern="[A-Za-z A-Za-z]{3,32}" required=""></div>
                    <div class="form-group"><input class="form-input" type="text" name="email" placeholder="Email"
                                                   required=""></div>
                    <div class="form-group"><textarea class="form-input" name="message" placeholder="Message" rows="14"
                                                      required=""></textarea></div>
                    <!-- End: Input -->
                    <p> We will answer in 12h </p>

            </div>
        </div>


</main>
</body>
<?php include_once 'footer.php'; ?>
</html>
