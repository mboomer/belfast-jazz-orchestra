<?php
    if($_POST["submit"]) {
        $recipient="mark.boomer@9habu.com";
        $subject="Message from 9habu contact form";
        $senderFirst=$_POST["firstname"];
        $senderLast=$_POST["lastname"];
        $senderEmail=$_POST["emailadd"];
        $senderPhone=$_POST["phone"];
        $senderMessage=$_POST["message"];

        # -------------------------------------------------------------------------------- #
        # spam protection - check if hidden fields email/subject have been filled in       #
        # spam protection - if they are then its likely a spam bot                         #
        # -------------------------------------------------------------------------------- #
        if (
            (isset($_POST["email"]) && $_POST["email"] == "") && (isset($_POST["subject"]) && $_POST["subject"] == "")) {  
            $mailBody="Name: $senderFirst $senderLast \n Email: $senderEmail\n\n Phone: $senderPhone\n\n $senderMessage";
            mail($recipient, $subject, $mailBody, "From: $senderEmail <$senderEmail>");
            $thankYou="<p><br /><strong>Thank you! Your message has been sent.</strong><br /></p>";
        } else {
                $thankYou="<p><br><strong>Sorry, your message has not been accepted</strong><br></p>";
                http_response_code(400);
                exit;
        }
    }
?>
<!DOCTYPE html>
<html>
    <head>
    
        <meta charset="UTF-8"/>
        
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <title>Belfast Jazz Swing Orchestra</title>

        <link rel="shortcut icon" type="image/ico" href="img/favicon.ico">

        <link href="https://fonts.googleapis.com/css?family=Oswald|Raleway" rel="stylesheet">
        
        <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>

        <!-- Load Bootstrap CDN -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
    
        <link rel="stylesheet" href="styles.css"/>
        
    </head>

    <body id="body-top">

        <!-- ********************************************************************************** -->
        <header id="header-menu">
            <nav>
                <ul class="grid">
                    <li><a href="#body-top">Top</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#musical-direction">Musical Direction</a></li>
                    <li><a href="#events">Events</a></li>
                    <li><a href="#band-sections">Band Sections</a></li>
                    <li><a href="#gallery">Gallery</a></li>
                    <li><a href="#shorts-rec">Shorts Rec Club</a></li>
                    <li><a href="#public-gallery">Dancing</a></li>
                    <li><a href="#social-media">Contact Us</a></li>
                </ul>
            </nav>
        </header>
        <!-- ********************************************************************************** -->

        <!-- ********************************************************************************** -->
        <!-- Cookie banner not displayed - it is displayed by JS if required on page load       -->
        <!-- ********************************************************************************** -->
        <div class="cookie-banner" style="display: none">
            <p>Belfast Jazz Orchestra does not currently store cookies on your device <a href="">cookie policy</a> can go here</p>
            <button id="close-banner">&times;</button>
        </div>
        <!-- ********************************************************************************** -->

        <!-- ********************************************************************************** -->
        <div id="hero">
            <div class="background-image">
                <!-- <h1>Belfast Jazz Swing Orchestra</h1>-->
                
                <!-- <h3>Dedicated to performances of Count Basie, Duke Ellington & Glenn Miller</h3> -->
                 <img src="img/hero.jpg" alt="Belfast Jazz Swing Orchestra">;

                <!-- *********** add this as a link in the navigation ******************************************
                    <a href="https://shortsclub.com/" class="btn" target="_blank">Shorts Sport & Recreation Club</a>
                 -->
            </div>
        </div>
        <hr>
        <!-- ********************************************************************************** -->

        <!-- ********************************************************************************** -->
        <div id="about">
            <h3 class="title">about belfast Jazz Swing Orchestra</h3>
            <div id="two-cols">
                <div class="about-img"><img src="img/about.jpg" alt="About Belfast Jazz"></div>
                <div class="about-bio">
                <p>Formed in 1990 the Belfast Jazz Swing Orchestra is dedicated to playing songs by jazz greats such as Count Basie, Duke Ellington and Glenn Miller</p>
                </div>
            </div>
        </div>
        <hr>
        <!-- ********************************************************************************** -->

        <!-- ********************************************************************************** -->
        <div id="musical-direction">
            <h3 class="title">Musical Direction</h3>
            <p>Musical direction for the swing orchestra is provided by the musical director and chief soloist and chair person</p>
            <ul class="grid">
                <li><h4>Musical Director</h4>
                    <div><span class="musical-direction">Victor Currie</span></div>
                    <img src="img/victor-currie.jpg" alt="Victor Curry>">
                    <p><br>Victor served as musical director for Dromore high School and was an instrumental music tutor for the SEELB Music Service and Lisburn Saxaphone Ensemble.<br><br> 
                    A talented musican in his own right, Victor conducts his own band, the "Victor Currie Band", where he also plays clarinet and saxaphone.<br><br> 
                    Victor has played at a wide variety of events across Northern Ireland. Victor was a member of the Belfast Wind Youth Orchestra and has been involved in television and theatre work for over 30 years. </p>
                </li>
                <li><h4>Soloist</h4>
                    <div><span class="musical-direction">Caroline Brown</span></div>
                    <img src="img/caroline-brown.jpg" alt="Caroline Brown>">
                    <p><br>Caroline serves the orchestra as chairperson and lead Soloist.<br><br> 
                    Carolines jazz vocals, smooth, sophisicated and with a touch of the bules, are perfectly suited to deliver the repertoire of popular songs from the american songbook.</p>
                </li>
            </ul>
        </div>            
        <hr>
        <!-- ********************************************************************************** -->

        <!-- ********************************************************************************** -->
        <div id="band-sections">
            <h3 class="title">Band Sections</h3>
            <ul class="grid">
                <li><p><img src="img/sections-saxophones.png" alt="Saxaphone Section"></p></li>
                <li><p><img src="img/section-perscussion.png" alt="Percussion Section"></p></li>
                <li><p><img src="img/section-trombone.png" alt="Trombone Section"></p></li>
                <li><p><img src="img/sections-wind.png" alt="Wind Section"></p></li>
            </ul>
        </div>
        <hr>
        <!-- ********************************************************************************** -->

        <!-- ********************************************************************************** -->
        <!-- 
        <div id="jazz-legends">
            <h3 class="title">Jazz Legends</h3>
            <div>
                <ul class="grid">
                    <li><img src="img/jazz-duke-ellington.jpg" alt="Duke Ellington"></li>
                    <li><img src="img/jazz-glenn-miller.jpg" alt="Glenn MIller"></li>
                    <li><img src="img/jazz-louis-armstrong.jpg" alt="Louis Armstrong"></li>
                    <li><img src="img/jazz-girl-trombone.jpg" alt="Girl Trombone"></li>
                    <li><img src="img/jazz-miles-davies.jpg" alt="Miles Davies"></li>
                    <li><img src="img/jazz-billie-holiday.jpg" alt="Billie Holiday"></li>
                </ul>                
            </div>
        </div>
        <hr>
	-->
        <!-- ********************************************************************************** -->

        <!-- ********************************************************************************** -->
        <div id="events">
            <h3 class="title">2020 Events</h3>
            <p class="covid19">Due to CoVid-19 all events have been cancelled until further notice</p>
            <p>The Belfast Jazz Swing Orchestra plays at the following events at Shorts Sports & Recreation Club</p>
 
            <ul class="grid">
                <li><h3>May Day</h3>
                    <h4>Friday, 29th May</h4>
                    <p class="event-img"><img src="img/events-may29-2020.jpg" alt="May Day Ball"></p>
                    <div class="event-desc">
                        <ul>
                            <li>7:30pm - Free Swing Dance Lesson</li>
                            <li>8:30pm - Jazz Orchestra</li>
                            <li>Entrance - £10 at the door</li>
                            <li>Cash Bar</li>
                            <li>Ballot/Prizes at interval</li>
                        </ul>
                    </div>
                </li>
                <li><h3>St. Patricks Day</h3>
                    <h4>Tuesday, 17th March</h4>
                    <p class="event-img"><img src="img/events-mar17-2020.jpg" alt="St. Patricks Day"></p>
                    <div class="event-desc">
                        <ul>
                            <li>7:30pm - Free Dance Lesson</li>
                            <li>8:30pm - Jazz Orchestra</li>
                            <li>Entrance - £10 at the door</li>
                            <li>Cash Bar</li>
                            <li>Ballot/Prizes at interval</li>
                        </ul>
                    </div>
                </li>
                <li><h3>Valentines Day</h3>
                    <h4>Friday, 14th February</h4>
                    <p class="event-img"><img src="img/events-feb14-2020.jpg" alt="Valentines Day"></p>
                    <div class="event-desc">
                        <ul>
                            <li>7:30pm - Free Rumba Dance Lesson</li>
                            <li>8:30pm - Jazz Orchestra</li>
                            <li>Entrance - £10 at the door</li>
                            <li>Cash Bar</li>
                            <li>Ballot/Prizes at interval</li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
        <hr>
        <!-- ********************************************************************************** -->

        <!-- ********************************************************************************** -->

        <div id="gallery">
            <h3 class="title">Gallery</h3>
            <p>Images of the Belfast Jazz Orchestra performing at some of their favourite venues</p>

            <div id="galleryCarousel" class="carousel slide" data-interval="false" touch="true">
<!--

                <ol class="carousel-indicators">
                    <li data-target="#galleryCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#galleryCarousel" data-slide-to="1"></li>
                    <li data-target="#galleryCarousel" data-slide-to="2"></li>
                    <li data-target="#galleryCarousel" data-slide-to="3"></li>
                    <li data-target="#galleryCarousel" data-slide-to="4"></li>
                    <li data-target="#galleryCarousel" data-slide-to="5"></li>
                </ol>
                
-->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/gallery-brass-section.jpg" class="d-block w-100 center-image" alt="Brass Section">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Saxaphones</h5>
                            <p>St. Annes Cathedral</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/gallery-saint-annes.jpg" class="d-block w-100 center-image" alt="Brass Section">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Trombones</h5>
                            <p>St. Annes Cathedral</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/gallery-saint-annes-1.jpg" class="d-block w-100 center-image" alt="The Orchestra">
                            <div class="carousel-caption d-none d-md-block">
                            <h5>Caroline</h5>
                        <p>St. Annes Cathedral</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/gallery-saint-annes-2.jpg" class="d-block w-100 center-image" alt="Packed audience">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Packed Audience</h5>
                            <p>St. Annes Cathedral</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/gallery-scott-naomi.jpg" class="d-block w-100 center-image" alt="Scott and Naomi">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Scott and Naomi</h5>
                            <p>Jazz in the park</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/gallery-shorts.jpg" class="d-block w-100 center-image" alt="Shorts Rec">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Shorts Recreation Club</h5>
                            <p>Bringing some glamour to Shorts Recreation Club</p>
                        </div>
                    </div>
                </div>
              <a class="carousel-control-prev" href="#galleryCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#galleryCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div> 
        </div>
        <hr>
        <!-- ********************************************************************************** -->

        <!-- ********************************************************************************** -->
        <div id="public-gallery">
            <h3 class="title">Theres always lots of dancing, singing and glamour</h3>
            <p>Swing, Lindy, Cha-cha, Waltz, Charleston...and some great costumes</p>        
            
            <div id="publicGalleryCarousel" class="carousel slide" data-interval="false" touch="true">
<!--

              <ol class="carousel-indicators">
                <li data-target="#publicGalleryCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#publicGalleryCarousel" data-slide-to="1"></li>
                <li data-target="#publicGalleryCarousel" data-slide-to="2"></li>
                <li data-target="#publicGalleryCarousel" data-slide-to="3"></li>
                <li data-target="#publicGalleryCarousel" data-slide-to="4"></li>
                <li data-target="#publicGalleryCarousel" data-slide-to="5"></li>
              </ol> 
                
-->
                <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/publc-fancydress-2018.jpg" class="d-block w-100 center-image" alt="Fancy Dress Halloween 2018">
                    <div class="carousel-caption d-none d-md-block">
                    <h5>Halloween Fancy Dress 2018</h5>
                    <p>The winners circle - although they were the only ones to turn up in costume</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/public-dancelesson.jpg" class="d-block w-100 center-image" alt="Dance Lessons">
                    <div class="carousel-caption d-none d-md-block">
                    <h5>Dance Lessons</h5>
                    <p>Swing Belfast leading the way</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/public-fancydress-2019.jpg" class="d-block w-100 center-image" alt="Fancy Dress 2019">
                    <div class="carousel-caption d-none d-md-block">
                    <h5>Halloween Fancy Dress 2019</h5>
                    <p>Not very scary...but at least everyone made an effort this year</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/public-xmas-2019.jpg" class="d-block w-100 center-image" alt="Christmas 2019">
                    <div class="carousel-caption d-none d-md-block">
                    <h5>Christmas 2019</h5>
                    <p>All dressed up and somewhere to go...looking stylish on the dance floor</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/public-dancers.jpg" class="d-block w-100 center-image" alt="Dancers filling the floor">
                    <div class="carousel-caption d-none d-md-block">
                    <h5>Dancers filling the floor</h5>
                    <p>Hard to get room to strut your stuff some times</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/public-belfastswing.jpg" class="d-block w-100 center-image" alt="Swing Belfast">
                    <div class="carousel-caption d-none d-md-block">
                    <h5>Belfast Swing</h5>
                    <p>Always a good turn out and nowhere better to show off some lindy</p>
                    </div>
                </div>
              </div>
              <a class="carousel-control-prev" href="#publicGalleryCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#publicGalleryCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div> 
        </div>
        <hr>
        <!-- ********************************************************************************** -->
        
        <!-- ********************************************************************************** -->
        <div id="shorts-rec">
            <h3 class="title">Shorts Sports and Recreation Club</h3>
            <section class="flexbox-section">
                <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2310.4525142933817!2d-5.868228184560744!3d54.613636886732536!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x486109882aefe66b%3A0xbcba9519915a79e2!2sShorts%20Sports%20%26%20Recreational%20Club!5e0!3m2!1sen!2suk!4v1582622869891!5m2!1sen!2suk" frameborder="0" style="border:0;" allowfullscreen=""></iframe></p>
                <p>Shorts Sports & Recreation Club,<br>
                    Aircraft Park,<br>
                    Holywood Road,<br>
                    Belfast, BT4 1SL<br>
                    Phone: 028 9076 8653
                </p>
            </section>
        </div>
        <hr>
        <!-- ********************************************************************************** -->

        <!-- ********************************************************************************** -->

        <div id="formcontainer">

            <div style="text-align: center;"><h3 class="title">Contact Form</h3></div>

            <form id="formwrapper" method="post" action="index.php">
                <section id="left-col">
                    <fieldset>
                        <legend>Contact Details</legend>
                        <?=$thankYou ?>                         <!-- insert thank you test via php -->   
                        <p>
                            <input id="firstname" name="firstname" type="text"   placeholder="First Name" tabindex="1">
                            <input id="lastname"  name="lastname"  type="text"   placeholder="Last Name" tabindex="2">
                            <input id="emailadd"  name="emailadd"  type="email"  placeholder="email@address.com" tabindex="3" required >
                            <input id="phone"     name="phone"     type="number" placeholder="phone/mobile number" tabindex="4">
                            <!-- this input field will be hidden as part of the spam protection -->
                            <input id="email"     name="email"     type="email" placeholder="email@address.com" tabindex="5">
                        </p>
                    </fieldset>
                </section>
                <section id="right-col">
                    <fieldset>
                        <legend>Booking Query</legend>
                        <!-- this input field will be hidden as part of the spam protection -->
                        <input    id="subject" name="subject" type="text"  placeholder="Subject" tabindex="5">
                        <textarea id="message" name="message" rows="10" placeholder="Please include date, time and location required..." tabindex="6"></textarea>
                    </fieldset>
                    <div><input name="submit" type="submit" value="Submit Form" tabindex="7"></div>
                </section>    
            </form>

        </div> <!-- end of formcontainer -->

        <!-- ********************************************************************************** -->
        <footer id="social-media">
            <ul>
                <li><a href="#" target="_blank"><i class="fab fa-twitter-square"></i></a></li>
                <li><a href="https://www.facebook.com/BelfastJazzOrchestra/" target="_blank"><i class="fab fa-facebook-square"></i></a></li>
                <li><a href="#" target="_blank"><i class="fab fa-youtube-square"></i></a></li>
                <li><a href="#" target="_blank"><i class="fab fa-pinterest-square"></i></a></li>
            </ul>
            <p>&copy; <script>document.write(new Date().getFullYear());</script> Belfast Jazz Swing Orchestra</p>
            <p>Dance like no-one is watching Sing like no one is listening</p>      
        </footer>
        <!-- ********************************************************************************** -->

        <!-- ********************************************************************************** -->

        <!-- ************************************************************************************** -->
        <!-- jquery slim doesnt include animations so cause an error with the stop() function above -->
        <!-- using jquery full build resolves the issue                                             -->
        <!-- **************************************************************************************
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        ******************************************************************************************* -->

        <script src="https://code.jquery.com/jquery-3.5.0.js" integrity="sha256-r/AaFHrszJtwpe+tHyNi/XCfMxYpbsRg2Uqn0x3s2zc=" crossorigin="anonymous"></script>

        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

        <script type="text/javascript">
            
        //            $(document).ready(function(){
        //                $('a[href^="#"]').on('click',function (e) {e.preventDefault();
        //
        //                var target = this.hash;
        //                var $target = $(target);
        //
        //                $('html, body').stop().animate({
        //                    'scrollTop': $target.offset().top-120
        //                }, 900, 'swing', function () {
        //                    window.location.hash = $target-120;
        //                });
        //                   });
        //        });
        
        // ------------------------------------------------------------------------------------------------//
        // ADD CLICK EVENT LISTENER FOR THE DOM                                                            //
        // ------------------------------------------------------------------------------------------------//

        document.addEventListener('click', function (event) {

            // -------------------------------------------------------------------------------------------------//
            // event listener for the close-banner class                                                        //
            // -------------------------------------------------------------------------------------------------//
            if (event.target.matches('#close-banner')) {
                document.querySelector(".cookie-banner").style.display = "none";
            }

        }, false);     // end of DOM CLICK eventlistener
        // --------------------------------------------------------------------------------------------//         
    

        // --------------------------------------------------------------------------------------------------------------//
        // if localStorage cookieBannerDisplayed=False, then display the cookie banner and set cookieBannerDisplayed=True   //
        // -----------------------------------------------------------------------------------------------------------------//
        if (localStorage.getItem("cookieBannerDisplayed") != "True") {
            document.querySelector(".cookie-banner").style.display = "flex";
            localStorage.setItem("cookieBannerDisplayed", "True")
        };
        
        $('a[href*="#"]')
          // Remove links that don't actually link to anything
          .not('[href="#"]')
          .not('[href="#0"]')
          .click(function(event) {
            // On-page links
            if (
                location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
                && 
                location.hostname == this.hostname
                ) {
                    // Figure out element to scroll to
                    var target = $(this.hash);
                    target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                    
                    // Does a scroll target exist?
                    if (target.length) {
                        // Only prevent default if animation is actually gonna happen
                        event.preventDefault();
                        $('html, body')
                            .animate({scrollTop: target.offset()
                            .top-120}, 1000, function() {
                                                        // Callback after animation
                                                        // Must change focus!
                                                        var $target = $(target);
                                                        $target.focus();
                                                            if ($target.is(":focus")) { // Checking if the target was focused
                                                                                    return false;
                                                            } else {$target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
                                                                $target.focus(); // Set focus again
                                                            };
                                                        });
                                        }
                }
          });

        </script>
        
    </body>
</html>
