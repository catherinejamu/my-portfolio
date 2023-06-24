<?php include 'header.php'; ?>

<html lang="en">
<head>
    <!-- <link rel="stylesheet" href="css/animation.css"> -->
   <link rel="stylesheet" href="css/index.css">
</head>
<body>

<!-- Profile section -->
<section class="profile">
    <div class="container">
        <img class="profile-photo" src="profile-picture.jpg" alt="Profile Photo">
        <div class="bio-info">
            <h2>About Me</h2>
            <p>
                My name is Catherine Jamu, and I am an ICT student currently in my second year of study. I have a passion for technology and enjoy learning new programming languages and building web applications. This portfolio showcases some of my skills and projects. Feel free to explore and get in touch with me!
            </p>
        </div>
    </div>
</section>

<!-- Slideshow section -->
<section class="slideshow">
    <div class="slideshow-container">
        <?php
        // Array of image filenames
        $images = array("image1.jpg", "image2.jpg", "image3.jpg", "image4.jpg", "image5.jpg","image6.jpg");

        // Loop through the images
        foreach ($images as $image) {
            echo '<img class="slide-image" src="img/' . $image . '" alt="Slideshow Image">';
        }
        ?>
        <div class="slide-controls">
            <button class="prev-slide">Previous</button>
            <button class="next-slide">Next</button>
        </div>
    </div>
</section>
        <script src="js/script.js"></script>
</body>
</html>

<?php include 'footer.php'; ?>
