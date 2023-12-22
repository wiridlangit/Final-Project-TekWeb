<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="navbar.css">
    <script src="https://kit.fontawesome.com/82f797382f.js" crossorigin="anonymous"></script>
    <link href = "fpweb.css" type ="text/css" rel="stylesheet"/>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>
<body>
    <!--navbar for contents-->
    <div class="nav_container">
    <nav class="navbar">
        <button class="hb-button" id="hb-btn">
            <i class="fas fa-bars"></i>
        </button>
        <a class="logo" href="#home"><span></span><img src=konser.png width="45" height="45"></a>
        <ul class="nav-container" id="nav">
            <li>
                <a href="#home" class="nav-links">Home</a>
            </li>
            <li>
                <a href="#concert" class="nav-links">Concerts</a>
            </li>
            <li>
                <a href="#upcoming" class="nav-links">Upcoming</a>
            </li>
            <li>
                <a href="#contact" class="nav-links">Contact Us</a>
            </li>
        </ul>
    </nav>
    </div>
    <!-- homepage -->
    <div class="logo_page" id="home">
        <div class="content_logo">
            <div class="content_logo_text">
                <div>
                    <p1>Konser</p1>
                    <p>Ticket to your favorite concerts.</p>
                    <p>All right here. Let's go.</p>
                </div>
            </div>
            <img class="icon_logo" src="icon_logo.svg" alt="">
        </div>
        <div class="container_power_all">
            <div class="container_power">
                <div class="power_text">
                    <img class="scroll" src="scroll.png">
                </div>
                <div class="powered-by">
                    <div class="logo_power">
                        <img class="responsive" src="seatgeek.png">
                    </div>
                    <div class="logo_power">
                        <img class="responsive" src="buzzfeed.png">
                    </div>
                    <div class="logo_power">
                        <img class="responsive" src="spotify.png">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--concert page-->
    <div class="container_all">
    <div class="homepage" id="concert">
        <img class="star1" src="icon_star.svg" alt="" >
        <img class="star2" src="icon_star.svg" alt="" >
        <img class="star3" src="icon_star.svg" alt="" >
        <div class="content_container">
            <div class="now_playing">
                <div class="text_tulus">
                    <p1 class="text1">Now </p1>
                    <p2 class="text">Playing!</p2>
                </div>
                <div class="tulus">
                    <p1 class="tulus_header">01</p1>
                    <p2 class="tulus_header">/Tulus</p2></div>
                </div>
            <div class="container_content">
                <img class="tulus" src="tulus1.jpg" alt="" >
                <div class="content">
                    <p1 class="tulus_text1">Tulus</p1>
                    <p2 class="tulus_text2">12 Juni 2022</p2>
                    <p3 class="tulus_text3">20:00-21:30, Pakuwon Mall Surabaya</p3>
                    <br>
                    <a href="../FinalProjectTekweb/concert.html" class="pesantiket">Selengkapnya</button></a>
                </div>  
            </div>
        </div>
    </div>
    <!--Upcoming Page-->
    <div class="container_upcoming_page" id="upcoming">
        <div class="upcoming_page" >
            <p1 class="text_fav1" >Upcoming Your </p1>
            <p2 class="text_fav2">Favorite Artist</p2>
        </div>
        <div class = "container_up_content">
            <div class="card_artis">
                <img class="pamungkas" src="pamungkas.svg" alt="">
                <div class="text_artis">
                    <h2>Pamungkas</h2>
                    <p>20 June 2012</p>
                </div>
            </div>
            <div class="card_artis">
                <img class="dewa19" src="dewa19.svg" alt="">
                <div class="text_artis">
                    <h2>Dewa 19</h2>
                    <p>20 June 2012</p>
                </div>
            </div>
            <div class="card_artis">
                <img class="hindia" src="Hindia.png" alt="">
                <div class="text_artis">
                    <h2>Hindia</h2>  
                    <p>20 June 2012</p>
                </div>
            </div> 
        </div>
    </div>
    <!-- contact -->
    <div class="container" id="contact">
        <div class="row">
            <div class="footer-col">
                <div class="contact-text">
                    <div class="rainbow-text">
                        <p1>Contact </p1>
                        <p2 class="text-rainbow-contact"> Us</p2>
                    </div>
                    <div class="text-corner"><p>Follow our socials!</p></div>
                </div>
                <div class="social-links">
                    <div class="contact-logo"><a href="https://www.facebook.com/coachella"><i class="fab fa-facebook-f"></i></a>Facebook</div>
                    <div class="line"></div>
                    <div class="contact-logo"><a href="https://twitter.com/coachella"><i class="fab fa-twitter"></i></a>Twitter</div>
                    <div class="line"></div>
                    <div class="contact-logo"><a href="https://www.instagram.com/coachella/"><i class="fab fa-instagram"></i></a>Instagram</div>
                    <div class="line"></div>
                    <div class="contact-logo"><a href="https://www.youtube.com/c/Coachella"><i class="fab fa-youtube"></i></a>YouTube</div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="navbar.js"></script>
</body>
</html>