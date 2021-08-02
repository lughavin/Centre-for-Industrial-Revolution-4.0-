<?php /* Template Name: Articles
*/?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Center of IR4.0 | Article Details</title>
    <link rel="stylesheet" href="/styles/main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous" />
</head>

<body>
    <header>
        <div class="logo">
            <a href="/html/index.html">
                <img src="/imgs/helpLogoBlack.png" alt="Help Logo Black"></a>
        </div>
        <!---Navigation Bar-->
        <div class="navbar">
            <ul class="navbarContainer">
                <li><a href="/html/index.html">Home</a></li>
                <li><a href="/html/aboutUs.html">About Us</a></li>
                <li><a href="/html/programmes.html">Programmes</a></li>
                <li><a href="/html/events.html">Events</a></li>
                <li><a href="/html/news.html">News</a></li>
                <li><a href="/html/articles.html">Articles</a></li>
                <li><a href="/html/contactUs.html">Contact Us</a></li>
            </ul>
        </div>
    </header>

   <?php
   				if(have_posts()) : while (have_posts()) : the_post(); ?>
   				<div class="post" id="post-<?php the_ID(); ?>">

                <div class="entry">
                <?php the_content('<p class"serif">Read the rest of this page &raquo:</p>');?>

                </div>
                </div>
                <?php endwhile; endif; ?>
                <?php edit_post_link('Edit this article','<p>','</p>');?>



                <div class="secondTitle">
                        <hr style="height: 4px;">
                        <h2>MORE INTERESTING STUFF</h2>
                        <hr style="height: 4px;">
                    </div>


                    <div class="container my-4 articleBlock">

                        <!--Grid row-->
                        <div class="row">

                            <!--Grid column-->
                            <div class="col-lg-4 col-md-12 mb-4 columnStyle">
                                <div class="card" style="width: 22rem;">
                                    <img class="img-fluid mb-4" src="/imgs/lightbulb.jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                                            the card's content.</p>
                                        <hr>
                                        <div class="authorDate">
                                            <a href="http://localhost/wordpress/articles-details1/" class="authorText">JOHN SMITH - <span>MAY 1, 2021</span></a>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <!--Grid column-->
                            <div class="col-lg-4 col-md-12 mb-4 columnStyle">
                                <div class="card" style="width: 22rem;">
                                    <img class="img-fluid mb-4" src="/imgs/lightbulb.jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                                            the card's content.</p>
                                        <hr>
                                        <div class="authorDate">
                                            <a href="http://localhost/wordpress/articles-details2/" class="authorText">JOHN SMITH - <span>MAY 1, 2021</span></a>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <!--Grid column-->
                            <div class="col-lg-4 col-md-12 mb-4 columnStyle">
                                <div class="card" style="width: 22rem;">
                                    <img class="img-fluid mb-4" src="/imgs/lightbulb.jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                                            the card's content.</p>
                                        <hr>
                                        <div class="authorDate">
                                            <a href="http://localhost/wordpress/articles-details3/" class="authorText">JOHN SMITH - <span>MAY 1, 2021</span></a>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <!--Grid row-->

                        <div class="seeMoreBtn">
                            <a href="/html/articles.html">SEE MORE</a>
                        </div>
    <footer>
        <div class="footerAlign">
            <div class="usefulLinks">
                <div class="firstColLinks">
                    <ul class="linkContainer">
                        <p>USEFUL LINKS</p>
                        <li><a href="/html/index.html">Home</a></li>
                        <li><a href="/html/aboutUs.html">About Us</a></li>
                        <li><a href="/html/programmes.html">Programmes</a></li>
                        <li><a href="/html/events.html">Events</a></li>
                    </ul>
                </div>
                <div class="secondColLinks">
                    <ul class="linkContainer">
                        <li><a href="/html/news.html">News</a></li>
                        <li><a href="/html/articles.html">Articles</a></li>
                        <li><a href="/html/contactUs.html">Contact Us</a></li>
                    </ul>
                </div>
            </div>
            <div class="footerInfo">
                <h6>INFORMATION</h6>
                                <p>ict@help.edu.my</p>
                                <p>No. 15, Jalan Sri Semantan 1, <br> Off, Jalan Semantan, <br> Bukit Damansara, 50490 Kuala Lumpur</p>
                                <div class="footerIcons">
                                    <a class="iconBox" href="https://www.facebook.com/" target="_blank"><img src="/imgs/fbIcon.svg" alt="Facebook Icon"></a>
                                    <a class="iconBox" href="https://www.instagram.com/" target="_blank"><img src="/imgs/igIcon.svg" alt="Instagram Icon"></a>
                </div>
            </div>
            <div class="footerLogo">
                <img src="/imgs/helpLogoWhite.png" alt="Help Logo White">
            </div>
        </div>
        <div class="copyrightsText">
            <p>&copy; 2021 Center Of IR4.0. All Rights Reserved</p>
        </div>
        </footer>
</body>
</html>
