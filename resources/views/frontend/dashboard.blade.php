<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MD Zisan Uddin | Portfolio websites</title>
    <link rel="shortcut icon" href="{{asset ('frontend/img/favicon.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{asset ('frontend/style.css') }}">
</head>
<body>
    <div id="headding" class="headding">
        <div class="name"><a href="/"><h1>mdZisanUddin.</h1></a></div>
        @include('frontend/menu')
    </div>
    <!--start body work-->
    <main>
        <div class="information">
            <div class="myInfo">
                <div class="name">
                    <p class="p1">HELLO, MY NAME IS</p>
                    <h1 class="myName">MD ZISAN UDDIN</h1>
                    <p class="p2">I Am Web DEVELOPER</p>
                    <span>From Dhaka, Bangladesh. I’m a Front End Web developer who is passionate about making error-free websites. I am good at WordPress. I love to talk with you about your unique. </span>
                </div>
                <div class="contact"><a href="/contact">Contact</a></div>
            </div>
            <div class="myImage">
                <img src="{{asset ('frontend/img/bg.png') }}" alt="logo">
            </div>
        </div>
    </main>
    <!--my work section-->
    <section>
        <div class="service">
            <h1 class="hed">What I do</h1>
            <p class="p3">My Services</p>
        </div>
        <div class="boxSec">
            <div class="sec1">
                <img src="{{asset ('frontend/img/design.png')}}" alt="logo">
                <h3>Design Skills</h3>
                <p class="p4">Proficient in Figma design, creating sleek user interfaces and intuitive user experiences with a strong eye for aesthetics and usability.</p>
                <div class="sayHello">
                    <a href="#">Say Hello <span> ⮕</span></a>
                </div>
            </div>
            <div class="sec1">
                <img src="{{asset ('frontend/img/com.png')}}" alt="logo">
                <h3>FRont-end developer</h3>
                <p class="p4">I’m a Front End Web developer who is passionate about making error-free websites with 100% client satisfaction.</p>
                <div class="sayHello">
                    <a href="#">Say Hello <span> ⮕</span></a>
                </div>
            </div>
            <div class="sec1">
                <img src="{{asset ('frontend/img/w-removebg-preview.png')}}" alt="logo">
                <h3>WordPress Developer</h3>
                <p class="p4">Passionate WordPress Developer with a track record of creating over 630+ websites. I find joy in crafting user-friendly, customizable sites.</p>
                <div class="sayHello">
                    <a href="#">Say Hello <span> ⮕</span></a>
                </div>
            </div>
        </div>
        <!--second sec-->
        <div class="service">
            <h1 class="hed">Portfolio</h1>
            <p class="p3">MY Clases</p>
        </div>
        <div class="boxSec">
            <div class="sec1">
                <img src="{{asset ('frontend/img/1.jpg')}}" alt="logo" style="width: 300px; height: 150px; border-radius: 10px;">
                <h3>WordPress</h3>
                <p class="p4">WordPress Theme Development</p>
                <div class="sayHello" style="margin-top: -30px;">
                    <a class="project" href="#">
                        See Project <span> ⮕</span></a>
                </div>
            </div>
            <div class="sec1">
                <img src="{{asset ('frontend/img/2.jpg')}}" alt="logo" style="width: 300px; height: 150px; border-radius: 10px;">
                <h3>WordPress</h3>
                <p class="p4">Figma to WordPress development</p>
                <div class="sayHello" style="margin-top: -30px;">
                    <a href="#">See Project <span> ⮕</span></a>
                </div>
            </div>
            <div class="sec1">
                <img src="{{asset ('frontend/img/3.jpg')}}" alt="logo" style="width: 300px; height: 150px; border-radius: 10px;">
                <h3>WordPress </h3>
                <p class="p4">XD to WordPress development</p>
                <div class="sayHello" style="margin-top: -30px;">
                    <a href="#">See Project <span> ⮕</span></a>
                </div>
            </div>
        </div>
        <!--testimonials sec-->
        <div class="testimonials">
            <div class="first">
                <h1 class="head">TESTIMONIALS</h1>
                <p class="p3">What my Clients are saying?</p>
            </div>
            <div class="testsec">
                <div class="test1">
                    <p class="p6">He is a very nice guy to work with. Thanks a lot for helping and I will do more business with you 🙂</p>
                    <img src="{{asset ('frontend/img/Clients.jpg')}}" alt="logo">
                    <h4>mbdevboston</h4>
                    <h5>Designer</h5>
                </div>
                <div class="test1">
                    <p class="p6">Great experience, highly recommend him. Worked through all my questions with me and was very timely in his responsiveness.</p>
                    <img src="{{asset ('frontend/img/rossbrown.jpg')}}" alt="logo">
                    <h4>rossbrown</h4>
                    <h5>Manager</h5>
                </div>
                <div class="test1">
                    <p class="p6">Zisan is always great to work with. He is extremely responsive and always returns his work in a timely manner, most of the time it is completed early! Great work quality as well. Thank you Zisan!</p>
                    <img src="{{asset ('frontend/img/ryangladhill.jpg')}}" alt="logo">
                    <h4>ryangladhillr</h4>
                    <h5> Manager</h5>
                </div>
            </div>
        </div>
        <!--contact section-->
        <div class="contact_section">
            <div class="second">
                <h1 class="cont">Contact​</h1>
                <p class="p3">Are You Looking For Your Business Online Presence? I am here. 🙂</p>
            </div>
            <div class="main_parant">
                <div class="cont_sec">
                    <div class="cont_s">
                        <div class="icon">
                            <i class="fa-solid fa-user"></i>
                        </div>
                        <div class="name_s">
                            <h1>Md Zisan Uddin​</h1>
                            <p class="p7">Web Developer (WordPress)​</p>
                        </div>
                    </div>
                </div>
                <div class="cont_sec">
                    <div class="cont_s">
                        <div class="icon">
                            <i class="fa-solid fa-business-time"></i>
                        </div>
                        <div class="name_s">
                            <h1>Freelance​</h1>
                            <p class="p7">Available Right Now​</p>
                        </div>
                    </div>
                </div>
                <div class="cont_sec">
                    <div class="cont_s">
                        <div class="icon">
                            <i class="fa-solid fa-envelope"></i>
                        </div>
                        <div class="name_s">
                            <h1>Email​</h1>
                            <p class="p7">mdzisanuddin935@gmail.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="footer">
            <div class="div1">
                <a target="_blank" href="https://www.facebook.com/people/Md-Zisan-Uddin/100059255441867/?_rdr"><i class="fa-brands fa-facebook"></i></a>
                <a target="_blank" href="https://github.com/Zisan10"><i class="fa-brands fa-github"></i></a>
                <a href=""><i class="fa-brands fa-instagram"></i></a>
                <a href=""><i class="fa-brands fa-linkedin"></i></a>
            </div>
            <div class="div2"><p class="p5">
                © All Rights Reserved 2024 - 2025 | Md Zisan Uddin
            </p></div>
        </div>
    </footer>
</body>
</html>