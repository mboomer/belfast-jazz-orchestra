<?php
    if($_POST["submit"]) {
        $recipient="mark.boomer@9habu.com;bookings@bjso.org.uk,caroline.brown@bjso.org.uk,victor.currie@bjso.org.uk";
        $subject="Message from Belfast Jazz Orchestra Booking Enqiuiry form";
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
    
        <link rel="stylesheet" href="styles.css"/>
        <link rel="stylesheet" href="styles-carousel.css"/>
        
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
                    <!-- <li><a href="#events"><span class="flashing-text">New </span>Events</a></li> -->
                    <li><a href="#band-sections">Band Sections</a></li>
                    <li><a href="#gallery">Gallery</a></li>
                    <li><a href="#shorts-rec">Shorts Rec Club</a></li>
                    <li><a href="#public-gallery">Dancing</a></li>
                    <li><a href="#contact-us">Bookings</a></li>
                    <li><a href="#register-email">Register</a></li>
                </ul>
            </nav>
        </header>
        <!-- ********************************************************************************** -->

        <!-- ********************************************************************************** -->
        <!-- Cookie banner not displayed - it is displayed by JS if required on page load       -->
        <!-- ********************************************************************************** -->
        <div class="cookie-banner" style="display: none">
            <p>This website does not use cookies to track how you interact with the website. The website does not share information with third parties or advertisers. Some cookies are necessary for the site to work. Please click "Accept Cookies" to continue.</p>
            <button id="accept-cookies-btn">Accept Cookies</button>
        </div>
        <!-- ********************************************************************************** -->

        <!-- ********************************************************************************** -->
        <!-- New Event Notification not displayed - displayed by JS if required on page load    -->
        <!-- ********************************************************************************** -->
        <div class="new-event" style="display: none">

            <h3 class="title">Up Coming Event</h3>
            <div id="two-cols">
                <div class="about-img"><img src="img/Event-Notification-Summer-2023.png" alt="Summer End Of Season Dance at Shorts Recreating Center, Holywood Road, Belfast"></div>
                <div class="upcoming-event">
                    <p>Join the band for their "End Of Season Event", on Friday 02 June.</p>
                    <p>Shorts Recreation Center, Holywood Road, Belfast at 8:30pm</p>
                    <p>Click on the Events link in Menu for more details or follow us on Facebook <a href="https://www.facebook.com/BelfastJazzOrchestra/" target="_blank"><i class="fab fa-facebook-square"></i></a><p>
                    <br><button id="accept-event-btn">Close</button>
                </div>
            </div>
        </div>
        <!-- ********************************************************************************** -->

        <!-- ********************************************************************************** -->
        <div id="hero">
            <div class="background-image">
                 <img src="img/hero.jpg" alt="Belfast Jazz Swing Orchestra">
            </div>
        </div>
        <hr>
        <!-- ********************************************************************************** -->

        <!-- ********************************************************************************** -->
        <div id="about">
            <h3 class="title">about belfast Jazz Swing Orchestra</h3>
            <div id="two-cols">
                <div class="about-img"><img src="img/about.jpg" alt="Victor Currie On Saxaphone"></div>
                <div class="about-bio">
                <p>Formed in 1990 The Belfast Jazz Swing Orchestra is dedicated to the performance and encouragement of Big Band swing and the jazz music of such composers as Count Basie, Duke Ellington, Glen Miller to name a few.</p>
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
                    <img src="img/victor-currie.jpg" alt="Victor Curry">
                    <p><br>A talented musican in his own right, Victor conducts his own band, the "Victor Currie Band", where he also plays clarinet and saxaphone.<br><br> 
                    Victor has played at a wide variety of events across Northern Ireland. Victor was a member of the Belfast Wind Youth Orchestra and has been involved in television and theatre work for over 30 years. </p>
                    
                    <div data-accordion="1">
                        <details>
                            <summary>Musical Background</summary>
                            <p><br>Victor has been a music educator for over 30 years, he served as musical director for Dromore high School and was an instrumental music tutor for the SEELB Music Service and Lisburn Saxaphone Ensemble.<br><br>Victor has had a long career as a working musician playing clarinet and saxophone with all types of bands over the years. He has played at musicals, shows, concerts and has been involved in television and radio recording.<br><br>Victor fronts his own smaller band and enjoys a wide range of musical styles.<br><br>Victor enjoys working with the members of the Belfast Swing Jazz Orchestra and has been delighted with the improvement over recent years and is delighted with the audience and dancers response to the music programmes.</p>
                        </details>
                    </div>

                </li>
                <li><h4>Chair & Vocialist</h4>
                    <div><span class="musical-direction">Caroline Brown</span></div>
                    <img src="img/caroline-brown.jpg" alt="Caroline Brown>">
                    <p><br>Caroline serves the orchestra as chairperson and lead soloist. She also performs with her own 2 piece or 5-6 piece band.<br><br> 
                    Carolines jazz vocals, smooth, sophisicated and with a touch of the blues, are perfectly suited to deliver the repertoire of popular songs from the american songbook.<br></p>

                    <div data-accordion="2">
                        <details>
                            <summary>Musical Background</summary>
                            
                            <p><br>Caroline sings with the Belfast Jazz Orchestra, a 20 piece Big Band and is also available for Corporate/Charity Events, Weddings and Private Parties with her 2 piece or 5-6 piece band, with accompanists Ivan Black, Victor Currie, Scott Flanagan amd Steve Barnett<br><br>Her voice is ideally suited to the repertoire of the great American Song Book...smooth, sophisticated swing jazz with a little touch of blues.<br><br>Caroline has also had an extensive and distinguished background in musical theatre having won awards for performances in Lead Principle roles<br></p>

                            <ul>
                                <li>Chicago (Velma Kelly)</li>
                                <li>The Hot Mikado (Katisha - Blues/Jazz Version)</li>
                                <li>Annie (Miss Hannigan)</li>
                                <li>Sweet Charity (Niki)</li>
                                <li>42nd Street (Dorothy Brock)</li>
                                <li>Anything Goes (Reno)</li>
                                <li>Carousel (Nettie Fowler)</li>
                            </ul>
                            <br>
                            <p>Caroline has performed as a soloist at a variety of venues throughout Northern Ireland and Europe</p>

                            <ul>
                                <li>Waterfront Concert Hall Belfast</li>
                                <li>The Grand Opera House</li>
                                <li>National Concert Hall Dublin</li>
                                <li>Arts Theatre</li>
                                <li>Ulster Hall</li>
                                <li>BT Studio</li>
                            </ul>
                            <br>    
                            <p>Her repertoire from "The Great American Songbook", includes classics like</p>

                            <ul>
                                <li>Sentimental Journey</li>
                                <li>That Old Black Magic</li>
                                <li>Fly me to the Moon</li>
                                <li>The Lady is the Tramp</li>
                                <li>Embraceable You</li>
                                <li>That Ole Devil Called Love</li>
                                <li>At Last</li>
                                <li>Summertime</li>
                                <li>Georgia</li>
                                <li>Paper Moon</li>
                                <li>Sway</li>
                                <li>Blueberry Hill</li>
                                <li>The Man I Love</li>
                            </ul>
                            <br>                                        
                            <p>Caroline has performed with many bands, including</p>
                                
                            <ul>
                                <li>Victor Currie Swing Band</li>
                                <li>Apex Jazz Band</li>
                                <li>Easyjazz</li>
                                <li>Panama</li>
                                <li>Martello Jazz Band</li>
                                <li>Kings of Swing</li>
                                <li>The Dixies</li>
                                <li>Bourbon Swing</li>
                                <li>Downshire Jazz Band</li>
                            </ul>
                                
                        </details>
                    </div>
                    
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
        <div id="events">

                <h3 class="title">2023 Events</h3>
                <!-- <p class="covid19">Due to CoVid-19 all events have been cancelled until further notice</p> -->
                <p style="text-align: center;">The Belfast Jazz Swing Orchestra will be playing at the following events in 2023<br></p>
                <br>
                <div class="grid">
                        <p class="event-img">
                            <img src="img/Summer-2023.png" alt="End Of Season Dance, at Shorts Recreation Center, Holywood Road">
                        </p>
                        <p class="event-img">
                            <img src="img/St-Patricks-Day-2023.png" alt="St. Patricks Day Dance, at Shorts Recreation Center, Holywood Road">
                        </p>
                        <p class="event-img">
                            <img src="img/Valentines-Day-2023.png" alt="Valentines Day Dance, at Shorts Recreation Center, Holywood Road">
                        </p>
                </div>
            <hr>


            <!-- <p class="covid19">Due to CoVid-19 all events have been cancelled until further notice</p> -->
<!--
            <h3 class="title">2022 Events</h3>
            <p style="text-align: center;">The Belfast Jazz Swing Orchestra will be playing at the following events in 2022<br></p>
            <br>
            <div class="grid">
                    <p class="event-img">
                         <img src="img/upcoming-events.png" alt="Upcoming Events">
                     </p> 
                    <p class="event-img">
                        <img src="img/Christmas-Party-2022.png" alt="Christmas Party, at Shorts Recreation Center, Holywood Road">
                    </p>
                    <p class="event-img">
                        <img src="img/Halloween-29-Oct.png" alt="Halloween Fancy Dress Dance, at Shorts Recreation Center, Holywood Road">
                    </p>
                    <p class="event-img">
                        <img src="img/NICHS-Fund-Raiser-Oct-1.png" alt="Norther Ireland Chest Heart and Stroke Fund Raiser, Balmoral golf club Saturday 01st October">
                    </p>
                    <p class="event-img">
                        <img src="img/Rehearsals Sept 05.png" alt="Band rehearsals resume September 05 at Shorts Recreation Center, Holywood Rpad">
                    </p>
                    <p class="event-img">
                        <img src="img/summerswing22.png" alt="Summer swing event, Balmoral golf club Saturday 25th June">
                    </p>
            </div>
        <hr>
-->
        </div> <!-- End Of Events -->
        
        <!-- ********************************************************************************** -->
        
        <!-- ********************************************************************************** -->
        <!-- Gallery Slideshow container -->
        <div id="gallery">
            
            <div class="gallerySlideshow">
            
                <h3 class="title">Gallery</h3>
                <p>The Belfast Jazz Orchestra performing at some of their favourite venues</p>

                <!-- Full-width images with number and caption text -->
                <div class="gallerySlides fade">
                    <div class="numbertext">1 / 6</div>
                    <img src="img/gallery-1.jpg" style="width:100%" alt="Xmas at Shorts Rec">
                    <div class="slideText">Xmas at Shorts Recreation Center</div>
                </div>

                <div class="gallerySlides fade">
                    <div class="numbertext">2 / 6</div>
                    <img src="img/gallery-2.jpg" style="width:100%" alt="Sax appeal">
                    <div class="slideText">Sax appeal</div>
                </div>

                <div class="gallerySlides fade">
                    <div class="numbertext">3 / 6</div>
                    <img src="img/gallery-3.jpg" style="width:100%" alt="Castle Ward">
                    <div class="slideText">Summer at Castle Ward</div>
                </div>

                <div class="gallerySlides fade">
                    <div class="numbertext">4 / 6</div>
                    <img src="img/gallery-4.jpg" style="width:100%" alt="St. Annes Cathederal">
                    <div class="slideText">Formal Attire - St. Annes Cathederal</div>
                </div>

                <div class="gallerySlides fade">
                    <div class="numbertext">5 / 6</div>
                    <img src="img/gallery-5.jpg" style="width:100%" alt="Caroline - resplendent in blue ">
                    <div class="slideText">Caroline - resplendent in blue</div>
                </div>

                <div class="gallerySlides fade">
                    <div class="numbertext">6 / 6</div>
                    <img src="img/gallery-6.jpg" style="width:100%" alt="Scott & Naomi">
                    <div class="slideText">Mount Stewart - Jazz In The Park</div>
                </div>

                <!-- Next and previous buttons heavyrightanglebracket heavyleftanglebracket-->
                <a class="prev">&#10094;</a>
                <a class="next">&#10095;</a>
            
            </div> <!-- end of "gallerySlideshow -->

            <br>            

            <!-- The dots/circles -->
            <div id="galleryDots" style="text-align:center">
              <span id="0" class="dot"></span>
              <span id="1" class="dot"></span>
              <span id="2" class="dot"></span>
              <span id="3" class="dot"></span>
              <span id="4" class="dot"></span>
              <span id="5" class="dot"></span>
            </div>
            <br>            

        </div>
        <br>        
        <hr>    
        <!-- ********************************************************************************** -->


        <!-- ********************************************************************************** -->
        <!-- Public Slideshow container -->
        <div id="public-gallery">
            
            <div class="publicSlideshow">
            
                <h3 class="title">Theres always lots of dancing, singing and glamour</h3>
                <p>Swing, Lindy, Cha-cha, Waltz, Charleston...and some great costumes</p>  

                <!-- Full-width images with number and caption text -->
                <div class="publicSlides fade">
                    <div class="numbertext">1 / 7</div>
                    <img src="img/public-7.jpg" style="width:100%" alt="Fancy Dress Costumes Halloween 2022">
                    <div class="slideText">Fancy Dress - 2022</div>
                </div>

                <div class="publicSlides fade">
                    <div class="numbertext">2 / 7</div>
                    <img src="img/public-1.jpg" style="width:100%" alt="Scott Naomi & Caroline">
                    <div class="slideText">Scott Naomi - Jazz In The Park</div>
                </div>

                <div class="publicSlides fade">
                    <div class="numbertext">3 / 7</div>
                    <img src="img/public-2.jpg" style="width:100%" alt="Curtis - Dance Lesson">
                    <div class="slideText">Dance Lesson with Curtis</div>
                </div>

                <div class="publicSlides fade">
                    <div class="numbertext">4 / 7</div>
                    <img src="img/public-3.jpg" style="width:100%" alt="Swing Dance">
                    <div class="slideText">Lindy or Swing?</div>
                </div>

                <div class="publicSlides fade">
                    <div class="numbertext">5 / 7</div>
                    <img src="img/public-4.jpg" style="width:100%" alt="Scott & Naomi">
                    <div class="slideText">Scott and Naomi - Lindy</div>
                </div>

                <div class="publicSlides fade">
                    <div class="numbertext">6 / 7</div>
                    <img src="img/public-5.jpg" style="width:100%" alt="Fancy Dress Winners 2018">
                    <div class="slideText">Fancy Dress Winners - 2018</div>
                </div>

                <div class="publicSlides fade">
                    <div class="numbertext">7 / 7</div>
                    <img src="img/public-6.jpg" style="width:100%" alt="Gary and Valerie">
                    <div class="slideText">Fred Astaire and The White Rabbit - 2018</div>
                </div>

                <!-- Next and previous buttons heavyrightanglebracket heavyleftanglebracket-->
                <a class="prev">&#10094;</a>
                <a class="next">&#10095;</a>
            
            </div> <!-- end of "gallerySlideshow -->

            <br>            
            <!-- The dots/circles -->
            <div id="publicDots" style="text-align:center">
              <span id="0" class="dot"></span>
              <span id="1" class="dot"></span>
              <span id="2" class="dot"></span>
              <span id="3" class="dot"></span>
              <span id="4" class="dot"></span>
              <span id="5" class="dot"></span>
              <span id="6" class="dot"></span>
            </div>
            <br>            
        </div>        
        <br>
        <hr>    
        <!-- ********************************************************************************** -->

        <!-- ********************************************************************************** -->
        <div id="shorts-rec">
            <h3 class="title">Shorts Sports and Recreation Club</h3>
            <p>The Belfast Jazz Swing Orchestra play regularly at Shorts Sports &amp; Recreation Club and Balmoral Golf Club</p> 
           <br>
            
            <section class="flexbox-section">
                <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2310.4525142933817!2d-5.868228184560744!3d54.613636886732536!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x486109882aefe66b%3A0xbcba9519915a79e2!2sShorts%20Sports%20%26%20Recreational%20Club!5e0!3m2!1sen!2suk!4v1582622869891!5m2!1sen!2suk" frameborder="0" style="border:0;" allowfullscreen=""></iframe></p>
                <p>Shorts Sports & Recreation Club,<br>
                    Aircraft Park,<br>
                    Holywood Road,<br>
                    Belfast, BT4 1SL<br>
                    Phone: 028 9076 8653
                </p>
            </section>

            <!-- <h3 class="title">Balmoral Golf Club</h3>
            <section class="flexbox-section">
                <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2313.1664670801943!2d-5.970907784163821!3d54.565817780252615!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4861061d7ef2b18f%3A0x6bf314d6cb014147!2sBalmoral%20Golf%20Club!5e0!3m2!1sen!2sie!4v1661702949118!5m2!1sen!2sie" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p>
                <p>Balmoral Golf Club,<br>
                    518 Lisburn Road,<br>
                    Belfast, BT9 6GX<br>
                    Phone: 028 9038 1514
                </p>
            </section>
            -->
            
        </div>
        <hr>
        <!-- ********************************************************************************** -->

        <!-- ********************************************************************************** -->

        <div id="register-email">

            <div style="text-align: center;"><h3 class="title">Register Email Address</h3></div>
            <div id="register-email-desc">
                Register your email to receive an email for upcoming events.<br>
                You will only ever receive email from us regarding the bands events.<br>
                We will not use your information for marketing of any kind.
            </div>

            <form id="register-form" method="post" action="php/subscribe.php">
                <section id="left-col-email">
                    <fieldset>
                        <legend>Contact Details</legend>
                        <p>
                            <!-- <label for="email">Email Address</label> -->
                            <input type="email" id="email" name="email" placeholder="email@address.com" tabindex="1">

                            <!-- <label for="firstn">First Name</label> -->
                            <input  type="text" id="firstn" name="firstn" placeholder="Enter preferred first name" tabindex="2">

                            <!-- <label for="lastn">Last Name</label> -->
                            <input type="text" id="lastn" name="lastn" placeholder="Last Name" tabindex="3">

                            <!-- this input field will be hidden as part of the spam protection -->
                            <input id="hidden1" name="hidden1" type="email" tabindex="6">

                            <button id="subscribe-btn">Subscribe</button tabindex=4>
                        </p>
                    </fieldset>
                </section>
                <section id="right-col-email">
                    <fieldset>
                        <legend>Status</legend>
                        <textarea id="status"  name="status" rows="2" tabindex="5"></textarea>
                        <!-- this input field will be hidden as part of the spam protection -->
                        <input id="hidden2" name="hidden2" type="text"  placeholder="" tabindex="7">
                    </fieldset>
                </section>    
            </form>

        </div> <!-- end of register-email -->
        <hr>

        <!-- ********************************************************************************** -->

        <!-- ********************************************************************************** -->

        <div id="contact-us">

            <div style="text-align: center;"><h3 class="title">Enquiry Form</h3></div>

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
                            <input id="hidden3"   name="hidden3"   type="email" tabindex="7">
                        </p>
                    </fieldset>
                </section>
                <section id="right-col">
                    <fieldset>
                        <legend>Booking Enquiry</legend>
                        <!-- this input field will be hidden as part of the spam protection -->
                        <input    id="hidden4" name="hidden4" type="text" tabindex="8">
                        <textarea id="message" name="message" rows="9" placeholder="If you are inquiring about the band availability then please include date, time and location required..." tabindex="5"></textarea>
                    </fieldset>
                    <div><input id="enquiry-btn" name="submit" type="submit" value="Submit Form" tabindex="6"></div>
                </section>    
            </form> <!-- end of formcontainer -->

        </div> <!-- end of contact-us -->

        <!-- ********************************************************************************** -->

        <footer id="social-media">
            <ul>
                <li><a href="https://www.facebook.com/BelfastJazzOrchestra/" target="_blank"><i class="fab fa-facebook-square"></i></a></li>
                <li><a href="#" target="_blank"><i class="fab fa-youtube-square"></i></a></li>
                <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                <li><a href="#" target="_blank"><i class="fab fa-twitter-square"></i></a></li>
            </ul>
            <p>&copy; <script>document.write(new Date().getFullYear());</script> Belfast Jazz Swing Orchestra</p>
            <!-- <p>Dance like no-one is watching - Sing like no one is listening</p>      -->
        </footer>
        <!-- ********************************************************************************** -->

   <script type="text/javascript">
            
           // Get the form and error message elements
            let regForm  = document.querySelector('#register-form');
            let announce = regForm.querySelector('#status');

            // Handle submit events
            function submitHandler (event) {

                // Stop the form from reloading the page
                event.preventDefault();

                // If hidden fields filled in, spam detected
                if (regForm.hidden1.value || regForm.hidden2.value) {
                    return;
                }  

                // Validate the email, first name and last name fields
                if (!regForm.email.value) {
                    announce.textContent = 'Please include a valid email address.';
                    return;
                }  

                // Validate the first name field
                if (!regForm.firstn.value) {
                    announce.textContent = 'Please include your first name.';
                    return;
                }

                // Validate the last name field
                if (!regForm.lastn.value) {
                    announce.textContent = 'Please include your last name.';
                    return;
                }

                /**
                 * Assuming everything is good, you can then submit to the same server-side endpoint that the form would normally POST to.
                 * You can use the form.action property to get the value of the action endpoint from the form element itself. 
                 * Include the fields as a stringified object for the body property.
                 * include a headers object, with an Accept property of application/json.
                */

                const obj = {email: regForm.email.value, firstn: regForm.firstn.value, lastn: regForm.lastn.value};
                console.log(obj);

                fetch(regForm.action, {
                    method: 'POST',
                    body: JSON.stringify(obj),
                    headers: {
                        'Accept': 'application/json'
                    }
                    }).then(function (response) {
                        return response.json();
                    }).then(function (data) {
                        announce.textContent = data.msg;	
                    }).catch(function (error) {
                        announce.textContent = 'Something went wrong. Please try again.';
                    });

            }; // end of submitHandler

            // Add event listener to the register email form to Listen for submit events 
            regForm.addEventListener('submit', submitHandler);

            // ------------------------------------------------------------------------------------------------//
            // AVOID FORM SUBMISSION AFTER REFRESH                                                             //
            // ------------------------------------------------------------------------------------------------//
            if ( window.history.replaceState ) {
                window.history.replaceState( null, null, window.location.href );
            }
            
            // -----------------------------------------------------------------------------------------------------------------//
            // if localStorage cookieBannerDisplayed=False, then display the cookie banner                                      //
            // -----------------------------------------------------------------------------------------------------------------//
             if (localStorage.getItem("cookieBannerDisplayed") != "True") {
                  document.querySelector(".cookie-banner").style.display = "flex";
              };
            
            // -----------------------------------------------------------------------------------------------------------------//
            // if localStorage eventNotificationDisplayed=False, then display the Event Notification                            //
            // -----------------------------------------------------------------------------------------------------------------//
             if (localStorage.getItem("eventNotificationDisplayed") === "True") {
                
                if ( localStorage.getItem("eventNotificationDate") === null ) {
                    // /////////////////////////////////////////
                    // temporarily stop displaying new events //
                    // no dates for new events scheduled yet  //
                    // /////////////////////////////////////////
                    document.querySelector(".new-event").style.display = "flex";
                    localStorage.setItem("eventNotificationDate", new Date() )
                }
                else {
                    // do nothing, as already seen event notification
                }
              } else {
                    // then never been on site before
                    document.querySelector(".new-event").style.display = "flex";
                    localStorage.setItem("eventNotificationDisplayed", true );
                    localStorage.setItem("eventNotificationDate", new Date() );

              };
            
            // -------------------------------------------------------------------------------------------------//
            // slideIndex[0] - is which slide to display                                                        //
            // slideIndex[1] - which slides to use                                                              //
            // -------------------------------------------------------------------------------------------------//
            let slideIndex = [0, 0];   

            // -------------------------------------------------------------------------------------------------//
            // Arrays to hold the classes and ID's of the carousel, slides and dots                             //
            // -------------------------------------------------------------------------------------------------//
            let carouselId = ["gallery", "public-gallery"]              
            let showId     = ["gallerySlideshow", "publicSlideshow"]        
            let slidesId   = ["gallerySlides", "publicSlides"]              

            // default to slide 1 of gallerySlides
            showSlides(0, 0);
            
            // default to slide 1 of publicSlides
            showSlides(0, 1);

            // ------------------------------------------------------------------------------------------------//
            // ADD CLICK EVENT LISTENER FOR THE DOM                                                            //
            // ------------------------------------------------------------------------------------------------//
            document.addEventListener('click', function (event) {

                // -------------------------------------------------------------------------------------------------//
                // event listener for the close-banner class                                                        //
                // -------------------------------------------------------------------------------------------------//
                if (event.target.matches('#accept-cookies-btn')) {
                    // remove the cookie banner and set cookieBannerDisplayed=True
                    document.querySelector(".cookie-banner").style.display = "none";
                    localStorage.setItem("cookieBannerDisplayed", "True")
                }

                // -------------------------------------------------------------------------------------------------//
                // event listener to view the new event                                                             //
                // -------------------------------------------------------------------------------------------------//
                if (event.target.matches('#accept-event-btn')) {
                    // remove the event notification banner and set eventNotificationDisplayed=True
                    document.querySelector(".new-event").style.display = "none";
                    localStorage.setItem("eventNotificationDisplayed", "True")
                }

                // -------------------------------------------------------------------------------------------------//
                // event listener for the dot class                                                                 //
                // -------------------------------------------------------------------------------------------------//
                if (event.target.matches('.dot')) {

                    // get the slide number from the id of the dot clicked on
                    dotId = event.target.id
                    
                    // get the parent ID of the dots
                    let parentDots = event.target.parentNode.id
                    // console.log("Parent Dots   : " + parentDots)
                    
                    // get the parent Slideshow of the Dots
                    let parentSlideShow = event.target.parentNode.parentNode.id
                    // console.log("Parent Slides : " + parentSlideShow)

                    // get the index of the parent slide show class from the array
                    parentId = carouselId.indexOf(parentSlideShow);
                    // console.log("Parent Id : " + parentId)
                    
                    slideIndex[0] = dotId
                    slideIndex[1] = parentId

                    // use spread operator to pass the array slideIndex
                    showSlides(...slideIndex);
                    
                }

                // -------------------------------------------------------------------------------------------------//
                // event listener for the next / prev class                                                         //
                // -------------------------------------------------------------------------------------------------//
                if ( (event.target.matches('.prev')) || (event.target.matches('.next')) ) {
                    
                    // get the parent class of the slideshow
                    parentSlideShow =  event.target.parentNode.className
                    
                    // update slideIndex with index of the parent slide show class from the array
                    parentId = showId.indexOf(parentSlideShow);
                    slideIndex[1] = parentId

                    if (event.target.matches('.next')) {
                        // increment the slide no to display next slide
                        slideIndex[0] ++
                    }                

                    if (event.target.matches('.prev')) {
                        // decrement the slide no to display previous slide
                        slideIndex[0] --
                        // use spread operator to pass the array slideIndex
                        // showSlides(...slideIndex)
                    }
                    
                    // use spread operator to pass the array slideIndex
                    showSlides(...slideIndex)
                }

            }, false);     // end of DOM CLICK eventlistener
            // --------------------------------------------------------------------------------------------//         

            // -------------------------------------------------------------------------------------------------//
            // Display the slides for the accesssed slide show                                                  //
            // receives slideIndex arrray pointing to slide no and Slides to display                            //
            // n  - the number of the slide to display                                                          //
            // no - the index of the array for the slides to display                                            //
            // -------------------------------------------------------------------------------------------------//
            function showSlides(n, no) {                
                
                let show   = document.getElementById(carouselId[no]);                
                let slides = document.getElementsByClassName(slidesId[no]);

                // get the dots for the selected carousel
                let dots   = show.getElementsByClassName("dot");
                
                if (n > slides.length-1) {
                    slideIndex[0] = 0 
                }    
              
                if (n < 0) {
                    slideIndex[0] = slides.length-1
                }
              
                // hide all the images in the slideshow
                for (let i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";  
                }
                
                // remove the active class from the dots in the carousel
                for (let i = 0; i < dots.length; i++) {
                  dots[i].className = dots[i].className.replace(" active", "");
                }
              
                // display the slide
                slides[slideIndex[0]].style.display = "block";  
                
                // make the matching carousel dot the active dot
                dots[slideIndex[0]].className += " active";
                
            }

        </script>
        
    </body>
</html>
