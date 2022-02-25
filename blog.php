<?php include_once('php/blogCrud.php');
$dhenat=new Blog();
$all=$dhenat->lexoDhenat();
?>
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Blog</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/blog.css">

    <style>
        @font-face {
            font-family: myFont;
            src: url(fonts/PrequelDemo-Regular.ttf);
        }

        #animation {
            font-family: myFont;
        }
    </style>


</head>

<body>

    <!-- HEADER -->
 
    <?php include('header.php');?>

    <!-- //HEADER -->

    <!-- CONTENT -->
    <main>
        <div class="content">
            <p id="top"></p>


            <div id="animation">
                <p style="text-align: center;">WANDERLUST</p>
            </div>

            <article class="blog">
                <p class="mostVisited">Based on statistical reports, most visited countries of 2019 are:</p>
                <div class="list">

                    <ol>
                        <li><?php echo $all[0]['title']?>
                            <dl style="color: rgb(94, 105, 160); margin-left: 1em;">
                                <dt><?php echo $all[0]['description']?></dt>
                                
                            </dl>
                        </li>
                        <li><?php echo $all[1]['title']?></li>
                        <li><?php echo $all[2]['title']?></li>
                        <li><?php echo $all[3]['title']?>
                            <dl style="color: rgb(94, 105, 160); margin-left: 1em;">
                                <dt><?php echo $all[3]['description']?></dt>
                                
                            </dl>
                        </li>
                        <li><?php echo $all[4]['title']?></li>
                        <li><?php echo $all[5]['title']?></li>
                    </ol>
                </div>

                <div class="container-all">
                    <div class="container">
                        <img src="images/cities/Thailand-Wat-Arun-Buddhist-temple-in-Bangkok-Yai-district-of-Bangkok-Wallpaper-Hd-For-Desktop-Mobile-And-Tablet-3840x2400-915x515.jpg"
                            alt="">
                        <span class="title">Bangkok, Thailand</span>
                    </div>
                    <div class="container">
                        <img src="images/cities/32-324800_get-free-top-quality-paris-hd-images-for.jpg" alt="">
                        <span class="title">Paris, France</span>
                    </div>
                    <div class="container">
                        <img src="images/cities/photo-1505761671935-60b3a7427bad.jpg" alt="">
                        <span class="title">London, England</span>
                    </div>
                    <div class="container">
                        <img src="images/cities/Dubai_uae_buildings_skyscrapers_night_hd-wallpaper-93494-915x515.jpg"
                            alt="">
                        <span class="title">Dubai</span>
                    </div>
                    <div class="container">
                        <img src="images/cities/singapore-city-evening-dusk-lights-buildings-water-1080P-wallpaper-middle-size.jpg"
                            alt="">
                        <span class="title">Singapore</span>
                    </div>
                    <div class="container">
                        <img src="images/cities/5bd36e4ddb01a-wallpaper-preview.jpg" alt="">
                        <span class="title">Kuala Lumpur</span>
                    </div>
                </div>
            </article>


            <div id="wikipedia">
                <h3 style="color: lightslategray;margin-bottom: 1em;"><?php echo $all[6]['title']?></h3>
                <p id="history"><?php echo $all[6]['description']?></p>
            </div>



            <div style="margin-left:12em;">
                <a href="#top" style="text-decoration: none; color: rgb(23, 2, 82);">Go on top!</a>
            </div>
        </div>
    </main>
</body>
    <!-- footer -->
    <footer>
        <div class="footer">
            <div class="footer-content">
                <div class="footer-section blog">
                    <h2>Latest From The Blog</h2>
                    <a href="blog.html" target="_blank">
                        <img src="images/cities/Thailand-Wat-Arun-Buddhist-temple-in-Bangkok-Yai-district-of-Bangkok-Wallpaper-Hd-For-Desktop-Mobile-And-Tablet-3840x2400-915x515.jpg"
                            alt="Thailand landscape" width="110px" height="110px">
                        <h4>Thailand - the most visited country</h4>
                        <p><span style="overflow-x: auto;">Due to
                                researches made by statistical results Bangkok,
                                Thailand is one of the most visited cities of 2019. People chose to go there because
                                of
                                its beautiful...</span></p>
                    </a>

                    <a href="blog.html" style="float: left; margin-top: 25px;" target="_blank">
                        <img src="images/vanGogh/Vincent_van_Gogh_-_Self-portrait_with_grey_felt_hat_-_Google_Art_Project.jpg"
                            alt="Van Gogh" width="110px" height="110px">

                        <h4>The art of Vincent van Gogh</h4>
                        <p><span style="overflow-x: auto;">Vincent Willem
                                van Gogh the Dutch post-impressionist painter
                                who is among the most famous and influential figures in the history of Western art.
                                The
                                Starry Night by him is one of the most known picture...</span></p>
                    </a>
                </div>


                <div class="footer-section details">
                    <h2>Company Details</h2>
                    <ul>
                        <li>Travel</li>
                        <li>
                            <address>N&#xeb;n&#xeb; Tereza, 105</address>
                        </li>
                        <li>Prishtin&#xeb;</li>
                        <li>10000</li>
                        <br>
                        <li>Tel:+383 44 129512</li>
                        <li>Fax: 029 3458487617</li>
                        <li>Email: <a href="mailto:contact@mydomain.com">travel@tr-pr.com</a></li>
                        <br>
                        <li>Office hours</li>
                        <li>Monday 08:00~16:00</li>
                        <li>Saturday 10:00~16:00</li>
                    </ul>
                </div>

                <div class="footer-section contact-form">
                    <h2>Contact Us</h2>
                    <form action="" method="post" id="contact">
                        <input type="text" placeholder="Name" name="inputType1"><br>
                        <input type="email" placeholder="Email" name="inputType1" required><br>
                        <textarea placeholder="Message"></textarea><br>
                        <input type="submit" form="contact" value="SUBMIT">
                    </form>
                </div>
            </div>
            <!-- <hr> -->
            <div class="footer-bottom">
                <p id="copy">Copyright &copy; 2022 - All rights reserved</p>
                <p id="template">Travel Company</p>
            </div>
        </div>
    </footer>
    <!-- //footer -->

</html>