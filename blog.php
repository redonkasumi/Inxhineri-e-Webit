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
                        <li>Bangkok
                            <dl style="color: rgb(94, 105, 160); margin-left: 1em;">
                                <dt>Thailand’s capital</dt>
                                <dd>Is a large city known for ornate shrines and vibrant street
                                    life. The boat-filled Chao Phraya River feeds its network of canals, flowing past
                                    the
                                    Rattanakosin royal district, home to opulent Grand Palace and its sacred Wat Phra
                                    Kaew
                                    Temple.</dd>
                            </dl>
                        </li>
                        <li>Paris, France</li>
                        <li>London, England</li>
                        <li>Dubai, UAE
                            <dl style="color: rgb(94, 105, 160); margin-left: 1em;">
                                <dt>The capital of the Emirate of Dubai</dt>
                                <dl>Located in the eastern part of the Arabian Peninsula on the coast of the Persian
                                    Gulf, Dubai
                                    aims to be the business hub of Western Asia.It is also a major global transport hub
                                    for
                                    passengers and cargo.</dl>
                            </dl>
                        </li>
                        <li>Singapore, Malaysia</li>
                        <li>Kuala Lumpur</li>
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
                <h3 style="color: lightslategray;margin-bottom: 1em;">Travel History</h3>
                <p id="history">The origin of the word "travel" is most likely lost to history. The term "travel" may
                    originate
                    from the Old
                    French word travail, which means 'work'. According to the Merriam Webster dictionary, the first
                    known use
                    of the word travel was in the 14th century. It also states that the word comes from Middle English
                    travailen, travelen (which means to torment, labor, strive, journey) and earlier from Old French
                    travailler
                    (which means to work strenuously, toil). In English we still occasionally use the words "travail",
                    which
                    means struggle. According to Simon Winchester in his book The Best Travelers' Tales (2004), the
                    words
                    "travel" and "travail" both share an even more ancient root: a Roman instrument of torture called
                    the
                    tripalium (in Latin it means "three stakes", as in to impale). This link may reflect the extreme
                    difficulty
                    of travel in ancient times. Travel in modern times may or may not be much easier depending upon the
                    destination. Travel to Mount Everest, the Amazon rainforest, extreme tourism, and adventure travel
                    are more
                    difficult forms of travel. Travel can also be more difficult depending on the method of travel, such
                    as by
                    bus, cruise ship, or even by bullock cart.</p>
            </div>



            <div style="margin-left:12em;">
                <a href="#top" style="text-decoration: none; color: rgb(23, 2, 82);">Go on top!</a>
            </div>
        </div>
    </main>

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

    <script src="js/header.js"></script>
    <script src="js/newyork.js"></script>




</body>

</html>