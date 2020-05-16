<!DOCTYPE html>
<html lang="en">
<head>
    <title>Get involved</title>
    <meta charset="UTF-8">
    <meta name="description" content=" Support, volunteer, internships. Fill the form to contact us">
    <meta name="keywords" content=" contact us, museum, community, science ">
    <meta name="author" content=" ">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include_once 'sheet.php'; ?>
    <link rel="icon" href="img/icon-1719742.svg">
</head>
<header>
    <a href="index.php" class="title center">Community Science Museum</a>
    <nav class="text-center">
        <ul>
            <ul>
                <li class="hide"><a href="index.php">Home</a></li>
                <li><a href="events.php">Events</a></li>
                <li><a href="visit.php">Visit</a></li>
                <li><a href="about.php"> About</a></li>
                <li><a href="involved.php">
                        <div class="active">Contact</div>
                    </a></li>
            </ul>
    </nav>

</header>

<body>
<main>


    <div class="container">
        <div class="con-col3"></div>
        <div class="row light">
            <h2>Support</h2>
            <p>There are various ways you can support the museum. Donations are very welcome and are an important
                way we
                keep this
                museum open and accessible to the whole community. </p>
            <p>You can also support us by donating items of interest to the museum’s collections. If you have some
                item or
                collection that you think others would enjoy, please let us know by contacting our Collections
                Department
                and they
                will be able to assist you.</p>
        </div>
    </div>


    <div class="container">
        <div class="con-col2"></div>
        <div class="row light">
            <h2>Volunteer</h2>
            <p>A number of people volunteer their time and effort to keep the displays in good order and ready for
                visitors
                to come
                and enjoy. Volunteering has its perks including getting to see behind the scenes of a working
                museum, access
                to
                staff-only lectures, and a monthly lunch where all staff and volunteers come together to discuss
                ideas for
                future
                exhibits and strategies for the museum.</p>
            <p>You can help volunteer in a number of different spheres. Please contact us if you’d like to find out
                more
                about how
                you can get involved.</p>
        </div>
    </div>


    <div class="container">
        <div class="con-col1"></div>
        <div class="row light">
            <h2>Internships</h2>
            <p>Are you interested in working in a museum? Do you enjoy the fun and excitement of sharing the wonders
                of
                nature with
                people? Well you could be just the right person to enjoy an internship at the museum.</p>
            <p>You’ll be learning from a number of different academics and people who are passionate about science
                and
                sharing it
                with the wider community.</p>
        </div>
    </div>


    <div class="container">
        <div class="con-col4"></div>
        <div class="row light">

            <div class="flex-box">
                <div class="flex">
                    <!-- Start: Contact Form Clean -->
                    <h2>Send us a note</h2>
                    <div class="contact-form align-left ">
                        <form method="post" action="about.php" enctype="multipart/form-data">
                            <!-- Start: Input -->
                            <label for="name"> Name:</label>
                            <div class="form-group"><input class="form-input" type="text" name="name"
                                                           placeholder="Ola Nordmann"
                                                           pattern="[A-Za-z A-Za-z]{3,32}" required=""></div>
                            <label for="email"> Email:</label>
                            <div class="form-group"><input class="form-input" type="text" name="email"
                                                           placeholder="ola@nordmann.no"
                                                           required=""></div>
                            <label for="message">Message:</label>
                            <div class="form-group"><textarea class="form-input" name="message"
                                                              placeholder="Your message"
                                                              rows="14"
                                                              required=""></textarea></div>
                            <input type="submit" value="Submit">
                            <!-- End: Input -->
                    </div>
                </div>
                <div class="hide-text">
                    <div class="flex">
<div class="show-1920">
                        <img src="img/involved/lab-512503_1920.jpg" class="scale3 padding-top">
</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
</body>
<?php include_once 'footer.php'; ?>
</html>
