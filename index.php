<?php
    require_once('php/homePage.php');
    if (isset($_POST["save"])){
    $regj= new Home();
    $regj->setTitle($_POST['title']);
    $regj->setDescription($_POST['description']);
    $regj->insertoDhenat();
    }

    ?>

<!DOCTYPE html>
<html>

<head>
    <title>Travel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/homePage.css">

    <!-- <script src="js/nightMode.js"></script> -->
    <!-- <script src="js/script.js"></script> -->

</head>

<body>
<script src="js/slider.js"></script>

  
<!---HEADER-->
<?php include('header.php');?>
    <!-- BODY -->

    <p class="centered-text-style">
        “ It is not the destination where you end up but the mishaps and memories you create along the way „ ~ Penelope
        Riley
    </p>
    <!-- Slider 1 -->
    <!-- <section id="slider"> -->
    <div class="slider" style="position: relative; margin: auto; width: 75%;" id="slider">
        <!-- Slideshow container -->
        <!-- <div class="slideshow-container"> -->

        <!-- Full-width images with number and caption text -->
        <div class="mySlides fade">
            <img src="images/slideshow/JF7_101564.jpg" alt="Visitors enjoying the sunset" style="width:100%">
        </div>

        <div class="mySlides fade">
            <img src="images/slideshow/people-men-women-friends.jpg" alt="" style="width:100%">
        </div>

        <div class="mySlides fade">
            <img src="images/slideshow/person-on-mountain-top.jpg" alt="A person hiking!!" style="width:100%">
        </div>

        <div class="mySlides fade">
            <img src="images/slideshow/Sunset_in_the_Old_Town_-_Bucharest,_Romania_-_Travel_photography_(35031271856).jpg"
                alt="Sunset in Bucharest!!" style="width:100%">
        </div>

        <div class="mySlides fade">
            <img src="images/slideshow/through-the-lens.jpg" alt="A photography" style="width:100%">
        </div>

        <div class="mySlides fade">
            <img src="images/slideshow/traveling-people-airport-bridge.jpg" alt="People traveling" style="width:100%">
        </div>
    </div>
    <br>

    <!-- The dots/circles -->
    <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
        <span class="dot" onclick="currentSlide(4)"></span>
        <span class="dot" onclick="currentSlide(5)"></span>
        <span class="dot" onclick="currentSlide(6)"></span>
        <!-- </div> -->
    </div>

    <article>
        <section class="services">
            <h4 class="redbox">OUR SERVICES</h4>
            <div>
                <img src="images/world-icon.PNG" alt="icon" width="30" height="30">
                <h3 id="title1"></h3>
                <p id="title_text1"></p>
                <details class="reddetails">
                    <summary><a class="article"
                            href="https://www.bublup.com/go/travel/?gclid=Cj0KCQiAr8bwBRD4ARIsAHa4YyK-Tc4TcCkCWCXvjdn4VkljsKLULuB1auja3yYF9_ncUV1kddog8ZwaAoHzEALw_wcB">Read
                            more</summary>
                </details>
            </div>
            <div>
                <img src="images/persons-icon.PNG" alt="icon" width="30" height="30">
                <h3 id="title2"></h3>
                <p id="title_text2"></p>
                <details class="reddetails">
                    <summary><a class="article"
                            href="https://cultureisking.net/home/backpackers-guide-to-switzerland">Read more</summary>
                </details>
            </div>
            <div>
                <img src="images/settings-icon.PNG" alt="icon" width="30" height="30">
                <h3 id="title3"></h3>
                <p id="title_text3"></p>
                <details class="reddetails">
                    <summary><a class="article"
                            href="https://www.globalcitizenyear.org/?utm_source=google&utm_medium=grant&utm_campaign=NonBrandGeneral&utm_content=places%20to%20travel&gclid=Cj0KCQiAr8bwBRD4ARIsAHa4YyJRwTzzExsongzw8YNKR__2M_yzZvv4-KCpc82uMk3k2GcLUCpjBUcaAsAeEALw_wcB">Read
                            more</summary>
                </details>
            </div>

        </section>
</article> 

<?php
$dhenat=new Home();
    $all=$dhenat->lexoDhenat();
?>
<article>
    <form action="" method="POST" id="myForm" name="myForm">
        <section class="players">
            <h4 style="top:13px" class="redbox">OUR PLAYERS</h4>

            <figure>
                <img src="images/people/people1.jpg" alt="photo" width="175" height="175">

                <figcaption>
                        <h4>Name: <span id="name1" style="font-weight: lighter;"><?php echo $all[0]['title']?></span></h4>
                        <p id="text_person1"><?php echo $all[0]['description']?></p>
                        <a href="https://www.linkedin.com" class="reddetails">View profile</a>

                </figcaption>
            </figure>

            <figure>
                <img src="images/people/people2.jpg" alt="photo" width="175" height="175">
                <figcaption>
                    <h4>Name: <span id="name2" style="font-weight: lighter;"><?php echo $all[1]['title']?></span></h4>
                    <p id="text_person2"><?php echo $all[1]['description']?></p>
                    <a href="https://www.linkedin.com" class="reddetails">View profile</a>
                </figcaption>
            </figure>

            <figure>
                <img src="images/people/people3.jpg" alt="photo" width="175" height="175">
                <figcaption>
                    <div>
                    <h4>Name: <span id="name3" style="font-weight: lighter;"><?php echo $all[2]['title']?> </span></h4>
                    <p id="text_person3"><?php echo $all[2]['description']?></p>
                    <a href="https://www.linkedin.com" class="reddetails">View profile</a>
                </figcaption>
            </figure>
            <?php  ?>

            <figure>
                <img src="images/people/people4.jpg" alt="photo" width="175" height="175">
                <figcaption>
                    <h4>Name: <span id="name4" style="font-weight: lighter;"><?php echo $all[3]['title']?> </span></h4>
                    <p id="text_person4"><?php echo $all[3]['description']?></p>
                    <a href="https://www.linkedin.com" class="reddetails">View profile</a>
                </figcaption>
            </figure>

            <figure>
                <img src="images/people/people5.jpg" alt="photo" width="175" height="175">
                <figcaption>
                    <h4>Name: <span id="name5" style="font-weight: lighter;"><?php echo $all[4]['title']?> </span></h4>
                    <p id="text_person5"><?php echo $all[4]['description']?></p>
                    <a href="https://www.linkedin.com" class="reddetails">View profile</a>
                </figcaption>
            </figure>
            
        </section>
    </form>

        <section class="work">
            <h4 class="redbox">PLACES</h4>

            <img src="images/newyork.jpg" alt="image" width="300px" height="160px">
            <img src="images/berlin.jpg" alt="image" width="300px" height="160px">
            <img src="images/paris.jpg" alt="image" width="300px" height="160px">
        </section>

    </article>
    <?php
    
     
?>



    <!-- <hr> -->
       <!-- <audio id="audio1" controls>
            <source id="audio2" src="audio/Haydn_Cello_Concerto_D-1.mp3" type="audio/mpeg">
            </audio> -->
    <!-- //footer -->


    <!-- Carousel -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <!-- Script -->
    <!-- <script src="js/script.js"></script> -->
    <!-- jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

    <!-- <script src="js/header.js"></script> -->
    <!-- <script src="js/newyork.js"></script> -->
    <!-- <script type="text/javascript" src="js/signUp.js"></script> -->
    <script type="text/javascript">
       
        var num = 5.56789;
        var n = num.toExponential();

        // function Person(first, last, desc) {
        //     this.firstname = first;
        //     this.lastname = last;
        //     this.descVal = desc;
        // }

        function TitleText(title, titleText) {
            this.titleVal = title;
            this.titleTextVal = titleText;

        }




        // var person1 = new Person("Tyler", "Cammack", "Dr Cammack is a French trained General Practice Family Doctor. He graduated in 1991 from Toulouse Rangueil University.");
        // var person2 = new Person("Brice", "Jeremiah", "Brice Jeremiah is a German lover of travelling and a honorable student.He graduated in 1998 from Berlin University.");
        // var person3 = new Person("Josefina", "Dobson", "Josefina has a master degree and a whole lot of experiences into travelling.She graduated in 1999 from Berlin University.");
        // var person4 = new Person("Nancy", "Brumfield", "Mr.Brumfield is an American who has trained and studied hotelerism.She graduated in 2005 from Moscow University");
        // var person5 = new Person("Jennie", "Barkley", "Jennie Barkley is a web developer has bachelor and master degree on Computer Science, San Francisco University of Technology.");

        var t_text1 = new TitleText("Plan your travel", "The most wonderful places"
            + " you can visit are displayed in our website.By breaking the country into smaller, more manageable areas, the site aims to create a virtual travel experience that allows the user to explore.");
        var t_text2 = new TitleText("Blog", "Activites and art works. See the rating of" + " people who visited the places before you and their thoughts on different experiences. This straightforward navigation setup makes it easy for users to access the information they need.");
        var t_text3 = new TitleText("Reservation", "Pick the best place to stay during" +
            " your travel. Also find other activities, organizations and participate or voulenteer to help others as long as you stay in touch with the world, you learn more about cultures.");


        // document.getElementById("name1").innerHTML = person1.firstname +
        //     " " + person1.lastname;
        // document.getElementById("name2").innerHTML = person2.firstname +
        //     " " + person2.lastname;
        // document.getElementById("name3").innerHTML = person3.firstname +
        //     " " + person3.lastname;
        // document.getElementById("name4").innerHTML = person4.firstname +
        //     " " + person4.lastname;
        // document.getElementById("name5").innerHTML = person5.firstname +
        //     " " + person5.lastname;

        // document.getElementById("text_person1").innerHTML = person1.descVal;
        // document.getElementById("text_person2").innerHTML = person2.descVal;
        // document.getElementById("text_person3").innerHTML = person3.descVal;
        // document.getElementById("text_person4").innerHTML = person4.descVal;
        // document.getElementById("text_person5").innerHTML = person5.descVal;

        document.getElementById("title1").innerHTML = t_text1.titleVal;
        document.getElementById("title2").innerHTML = t_text2.titleVal;
        document.getElementById("title3").innerHTML = t_text3.titleVal;
        document.getElementById("title_text1").innerHTML = t_text1.titleTextVal;
        document.getElementById("title_text2").innerHTML = t_text2.titleTextVal;
        document.getElementById("title_text3").innerHTML = t_text3.titleTextVal;

        try {
            document.getElementById("demo").innerHTML = localStorage.getItem("pass_word");

            if (document.getElementById("demo") == "") throw "is Empty";
            if (isNaN(document.getElementById("demo"))) throw "not a number";
            if (document.getElementById("demo") == "null") throw "is Null";
            if (document.getElementById("demo") == undefined) throw "undefined";
        }
        catch (e) {
            console.warn("Error thrown:\n" + e + " !")
        }

    </script>

</body>

</html>