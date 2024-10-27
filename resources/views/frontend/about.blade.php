<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me</title>
    <link rel="stylesheet" href="{{asset ('frontend/about.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" href="{{asset ('frontend/img/favicon.png')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{asset ('frontend/style.css')}}">
</head>
<body>
    <div id="headding" class="headding">
        <div class="name"><a href="/"><h1>mdZisanUddin.</h1></a></div>
        @include('frontend/menu')
    </div>
<!--start about sec-->
    <main>
        <div class="img_name">
            <img src="{{asset ('frontend/img/bg.png')}}" alt="logo">
            <h1>MD ZISAN UDDIN</h1>
            <P class="p1">Web Developer (Full Stack)</P>
        </div>
        <!--about me-->
        <div class="ab_out">
            <h1>about me</h1>
            <p class="p2">I’m a Front End Web developer who is passionate about making <samp>error-free websites</samp> with 100% client satisfaction. I am passionate about learning and sharing my knowledge with others as publicly as possible. I love to solve real-world problems. I am <samp>strategic and goal-oriented,</samp> and I always work with an end goal in mind. Over the past years, I created 100s of websites for my clients. I pride myself on doing quality work and maintaining excellent communication. Most of the time I work with WordPress but some technologies I enjoy working with include ReactJS, JavaScript, and PHP.</p>
        </div>
        <!--education skills-->
        <div class="education_skills">
            <div class="education">
                <div class="name">
                    <h1>education</h1>
                </div>
                <div class="last_xm">
                    <i class="fa-solid fa-book-open"></i>
                    <span>2022-2027</span>
                    <p class="p3">Diploma In Computer Science & Technology</p>
                </div>
                <div class="last_xm">
                    <i class="fa-solid fa-book"></i>
                    <span>2020-2022</span>
                    <p class="p3">S.s.c in Science</p>
                </div>
                <div class="last_xm">
                    <i class="fa-solid fa-book"></i>
                    <span>2019-2020</span>
                    <p class="p3">J.s.c in Others</p>
                </div>
            </div>
            <div class="education">
                <div class="name">
                    <h1>SKILLS</h1>
                </div>
                <div class="skill">
                    <div class="html_css">
                        <div class="p1">
                            <p>HTML & CSS</p>
                        </div>
                        <div class="p2">
                            <p>75%</p>
                        </div>
                    </div>
                </div>
                <div class="skill3">
                    <div class="WordPress">
                        <div class="p1">
                            <p>WordPress Theme Development</p>
                        </div>
                        <div class="p2">
                            <p>60%</p>
                        </div>
                    </div>
                </div>
                <div class="skill2">
                    <div class="html_php">
                        <div class="p1">
                            <p>PHP</p>
                        </div>
                        <div class="p2">
                            <p>50%</p>
                        </div>
                    </div>
                </div>
                <div class="skill4">
                    <div class="JavaScript">
                        <div class="p1">
                            <p>JavaScript</p>
                        </div>
                        <div class="p2">
                            <p>70%</p>
                        </div>
                    </div>
                </div>
                <div class="skill5">
                    <div class="figma">
                        <div class="p1">
                            <p>Figma</p>
                        </div>
                        <div class="p2">
                            <p>35%</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--EXPPERENCE section-->
        <div class="experience">
            <div class="main_head">
                <h1>EXPERIENCE</h1>
                <p class="p1">What I have done?</p>
            </div>
            <div class="fiver">
                <div class="img">
                    <img src="{{asset ('frontend/img/com.png')}}" alt="logo">
                </div>
                <div class="des">
                    <p class="p2">2024 - Present</p>
                    <h3>www.fiverr.com</h3>
                    <p class="p3">I am MD ZISAN UDDIN, I am a pixel-perfect web developer. I am experienced and an expert in the web development section and working since 2024. Full and fresh hand code is my power. Client satisfaction is my first priority. Work with me and be happy with the result.</p>
                </div>
            </div>
            <div class="fiver">
                <div class="img">
                    <img src="{{asset ('frontend/img/com.png')}}" alt="logo">
                </div>
                <div class="des">
                    <p class="p2">2024 - Present</p>
                    <h3>www.upwork.com</h3>
                    <p class="p3">I am working on Upwork as a WordPress Theme Designer and Developer. My design is simple & fresh. My coding is W3C validated, fresh, SEO optimized, and also hand-coded. I work flexibly with clients to fulfill their design & development needs. Work with me and create a website that you are gonna be proud of. Use my work in your Business, Portfolio, Agency, Photography, eCommerce & much more.</p>
                </div>
            </div>
            <div class="fiver">
                <div class="img">
                    <img src="{{asset ('frontend/img/com.png')}}" alt="logo">
                </div>
                <div class="des">
                    <p class="p2">2024 - Present</p>
                    <h3>Web Development Farm</h3>
                    <p class="p3">I am working on a remote job in a USA-based company as a WordPress Theme Developer and plugin Developer. My main job is to create a WordPress theme, customization, and create based on client needs. </p>
                </div>
            </div>
        </div>
    </main>
    <!--contact section-->
    <section>
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