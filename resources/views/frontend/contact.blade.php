<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - MD ZISAN</title>
    <link rel="stylesheet" href="{{asset ('frontend/contact.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" href="{{asset ('frontend/img/favicon.png')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{asset ('frontend/style.css')}}">
</head>
<body>
    <div id="headding" class="headding">
        <div class="name"><a href="/"><h1>mdZisanUddin.</h1></a></div>
        @include('frontend/menu')
    </div>
    <!--form work-->
    <section>
        <div id="main_contact_section">
            <div  class="contact_head">
                <h1>Contact</h1>
                <P class="p1">Let's Talk About Ideas​</P>
            </div>
            <!--end cont_head-->
            <!--start cont_body-->
            <div class="cont_body">
                <div class="img_sec">
                    <div class="img">
                        <img src="{{asset ('frontend/img/contact1.png')}}" alt="logo">
                    </div>
                    <div class="name_sec">
                        <h1>MD ZISAN UDDIN</h1>
                        <P class="p2">Web Developer (FullStack)</P>
                        <p class="p3">Are You Looking For Your Business Online Presence?I am here.🙂</p>
                    </div>
                    <div class="location_sec">
                        <div class="div1">
                            <div class="icon">
                                <i class="fa-solid fa-location-dot"></i>
                            </div>
                            <div class="loc_des">
                                <h4>Address</h4>
                                <p class="p1">Kushtia-Bangladesh</p>
                            </div>
                        </div>
                        <!--2nd-->
                        <div class="div2">
                            <div class="icon">
                                <i class="fa-solid fa-user"></i>
                            </div>
                            <div class="loc_des">
                                <h4>Freelance</h4>
                                <p class="p1">Available right now</p>
                            </div>
                        </div>
                        <div class="div3">
                            <div class="icon">
                                <i class="fa-solid fa-user"></i>
                            </div>
                            <div class="loc_des">
                                <h4>Email</h4>
                                <p class="p1">mdzisanuddin935@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--form body-->
                <div class="form"><!--start form-->
                    <form action="{{route ('contact.store')}}" method='POST'>
                        @csrf
                        <div class="name_s">
                            <div class="fn_ln">
                                <div class="fn">
                                    <label for="name">First Name*</label>
                                    <input type="text" name="firstName" placeholder="John">
                                </div>
                                <div class="ln">
                                    <label for="name">Last Name:</label>
                                    <input type="text" name="lastName" placeholder="Doe (optional)">
                                </div>
                            </div>
                            <div class="email">
                                <label for="email">Email*</label>
                                <input type="email" name="email" placeholder="abc@gmail.com">
                                <p class="p1">Your email is safe with me, I do not spam.</p>
                            </div>
                            <div class="sms">
                                <label for="sms">Message:</label>
                                <textarea name="sms" id="sms" placeholder="Write your message..."></textarea>
                            </div>
                            <div class="button">
                                <input type="submit" value="Submit">
                            </div>
                        </div>
                    </form><!--end form-->
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