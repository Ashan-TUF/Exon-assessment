<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="css//bootstrap.css" />
    <link rel="stylesheet" href="css//bootstrap.min.css" />
    <link rel="stylesheet" href="css//headerstyle.css" />
    <link rel="stylesheet" href="css//footerstyle.css" />
    <link rel="stylesheet" href="css//style.css" />
    <link rel="icon" href="resources//Logo.png" />
    <title>My Portfolio</title>
</head>

<body>
    <?php require "header.php";
    ?>
    <div class="container-fluid">

        <!-- First Section Begin-->
        <div class="row">
            <div class="col-12 col-lg-6 text-center">
                <img src="resources/me.png" class="img-fluid" alt="">
            </div>
            <div class="col-12 col-lg-6" style="padding-top: 10%;padding-bottom: 10%;">
                <div class="row">
                    <span class="fs-1 fw-light"> <b><u style="text-decoration: underline #D1D1D1;text-underline-position: under;">He</u>llo,</b> my name is</span>
                    <br />
                    <span class="fs-1"><b>Ashan Kavindu</b><span class="d-lg-none"> &</span></span>
                    <div class="container">
                        <div class="static-txt mb-2 d-none d-lg-block"><span class="fs-4">And I'm</span> </div>
                        <div class="static-txt mb-2 d-lg-none "><span class="fs-2">I'm</span> </div>
                        <ul class="dynamic-txt">
                            <li><span class="fs-1">a Developer</span></li>
                            <li><span class="fs-1">a Designer</span></li>
                        </ul>
                    </div>
                </div>
                <div class="row mt-3 mb-5 ps-3">
                    <a class="btn btn-success text-white" style="width: fit-content;" href="#">Download CV</a>
                </div>
                <!-- Project Counter Begin -->
                <div class="row justify-content-center decode-text">
                    <div class="col-6 col-xl-3 text-center border border-5 border-top-0 border-bottom-0 border-start-0  border-success">
                        <div class="row pt-3 pb-3 me-2">
                            <span class="inputfont fs-1 text-dark"><span id="nbr">1000</span>+</span>
                            <span class="inputfont text-dark fs-5">
                                Working Hours
                            </span>
                        </div>
                    </div>
                    <div class="col-6 col-xl-3 text-center border border-5 border-top-0 border-bottom-0 border-start-0 border-end-0 border-success d-xxl-none">
                        <div class="row pt-3 pb-3 me-2">
                            <span class="inputfont fs-1 text-dark"><span id="nbr4">400</span>+</span>
                            <span class="inputfont text-dark fs-5">
                                Projects
                            </span>
                        </div>
                    </div>
                    <div class="col-6 col-xl-3 text-center border border-5 border-top-0 border-bottom-0 border-start-0 border-success d-none - d-xxl-block">
                        <div class="row pt-3 pb-3 me-2">
                            <span class="inputfont fs-1 text-dark"><span id="nbr1">400</span>+</span>
                            <span class="inputfont text-dark fs-5">
                                Projects
                            </span>
                        </div>
                    </div>
                    <div class="col-6 col-xl-3 text-center border border-5 border-top-0 border-bottom-0 border-start-0  border-success">
                        <div class="row pt-3 pb-3 me-2">
                            <span class="inputfont fs-1 text-dark"><span id="nbr2">800</span>+</span>
                            <span class="inputfont text-dark fs-5">
                                Happy Clients
                            </span>
                        </div>
                    </div>
                    <div class="col-6 col-xl-3 text-center">
                        <div class="row pt-3 pb-3 me-2">
                            <span class="inputfont fs-1 text-dark"><span id="nbr3">600</span>+</span>
                            <span class="inputfont text-dark fs-5">
                                Years Experience
                            </span>
                        </div>
                    </div>
                </div>
                <!-- Project Counter End -->
            </div>
        </div>
        <!-- First Section End-->
        <!-- Second Section Begin-->
        <div class="row pt-5 pb-5" style="background-color: #2A2A2E;">
            <div class="col-1 d-none d-xxl-block">
                <span class="span4 text-white">ABOUT</span>
            </div>
            <div class="col-12 col-xxl-11 mt-xxl-5 mb-xxl-5">
                <span class="fs-1 text-white">About Me</span>
                <p class="fs-6 text-white">
                    I am a full stack developer with 2 years of experience in designing and
                    developing web applications and desktop applications. Development is
                    my passion and my goal is to learn the unknown and provide the best
                    quality service I can to the organization I work for. And my main aim in
                    my work is to provide excellent service with timely, accurate and
                    professional results.
                </p>
            </div>
        </div>
        <!-- Second Section End-->
        <!-- Fourth Section Begin -->
        <div class="row">
            <div class="col-12 col-xxl-4">
                <div class="py-4">
                    <span class="d-md-none d-lg-block text-secondary text-uppercase">
                        <h1>SERVICES</h1>
                        <div class="brand_border">
                            <i class="fa fa-minus" aria-hidden="true"></i>
                            <i class="fas fa-handshake"></i>
                            <i class="fa fa-minus" aria-hidden="true"></i>
                        </div>
                    </span>
                    <h2 class="text-capitalize font-weight-bold my-3">Welcome to my portfolio <span style="color: #61CE70">services!</span></h2>
                    <p class="text-secondary" style="line-height: 2;">Below are some of the services we offer</p>
                </div>
            </div>
            <div class="col-xxl-8">

                <div class="row">
                    <div class="col-md-6 px-4 my-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-code-slash" viewBox="0 0 16 16">
                            <path d="M10.478 1.647a.5.5 0 1 0-.956-.294l-4 13a.5.5 0 0 0 .956.294l4-13zM4.854 4.146a.5.5 0 0 1 0 .708L1.707 8l3.147 3.146a.5.5 0 0 1-.708.708l-3.5-3.5a.5.5 0 0 1 0-.708l3.5-3.5a.5.5 0 0 1 .708 0zm6.292 0a.5.5 0 0 0 0 .708L14.293 8l-3.147 3.146a.5.5 0 0 0 .708.708l3.5-3.5a.5.5 0 0 0 0-.708l-3.5-3.5a.5.5 0 0 0-.708 0z" />
                        </svg>
                        <div class="mt-3">
                            <h5 class="mb-2" style="font-weight: 600;"><a href="#" style="color: #61CE70">Web design & development</a></h5>
                            <p class="text-secondary"> I specialize in creating custom websites that are visually stunning, easy to navigate, and optimized for all devices. Whether you need a simple landing page or a complex e-commerce site, I have the skills and experience to deliver a website that meets your specific requirements.</p>
                        </div>
                    </div>
                    <div class="col-md-6 px-4 my-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-aspect-ratio" viewBox="0 0 16 16">
                            <path d="M0 3.5A1.5 1.5 0 0 1 1.5 2h13A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5v-9zM1.5 3a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-13z" />
                            <path d="M2 4.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1H3v2.5a.5.5 0 0 1-1 0v-3zm12 7a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1 0-1H13V8.5a.5.5 0 0 1 1 0v3z" />
                        </svg>
                        <div class="mt-3">
                            <h5 class="mb-2" style="font-weight: 600;"><a href="#" style="color: #61CE70">Fully Responsive</a></h5>
                            <p class="text-secondary"> In today's digital landscape, having a website that is optimized for all devices is crucial. I specialize in creating fully responsive designs that look great on desktop, tablet, and mobile devices. With my expertise, you can ensure that your website provides a seamless user experience across all platforms.</p>
                        </div>
                    </div>
                    <div class="col-md-6 px-4 my-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-code-square" viewBox="0 0 16 16">
                            <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                            <path d="M6.854 4.646a.5.5 0 0 1 0 .708L4.207 8l2.647 2.646a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 0 1 .708 0zm2.292 0a.5.5 0 0 0 0 .708L11.793 8l-2.647 2.646a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708 0z" />
                        </svg>
                        <div class="mt-3">
                            <h5 class="mb-2" style="font-weight: 600;"><a href="#" style="color: #61CE70">Software Development</a></h5>
                            <p class="text-secondary"> I offer custom software development services to help businesses streamline their operations and improve efficiency. From Desktop applications to enterprise software solutions, I have the skills and experience to deliver a solution that meets your unique requirements.</p>
                        </div>
                    </div>
                    <div class="col-md-6 px-4 my-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                        </svg>
                        <div class="mt-3">
                            <h5 class="mb-2" style="font-weight: 600;"><a href="#" style="color: #61CE70">UI & UX Design</a></h5>
                            <p class="text-secondary">A well-designed user interface and user experience can make all the difference in the success of a digital product. I specialize in creating intuitive and user-friendly interfaces using Adobe XD that enhance the overall user experience. With my expertise, you can ensure that your digital product is not only visually appealing but also easy to use and navigate.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Fourth Section End -->
        <!-- 5th Section Begin -->
        <div class="col-row d-none d-xxl-block">
            <span class="span83  ft">|</span>
            <span class="font43 ms-5">Reviews
                <br />
                <span style="font-size: 10px;">
                    .......................
                </span>
            </span>
            <span class="font23 font33">CLIENTS AND <span class="ft">TESTIMONIALS</span></span>
            <span class="span63 ">TESTIMONIALS <span class="span73">//</span></span>
        </div>
        <div class="col-4 d-none d-xxl-block">
            <span class="span53">Clients</span>
        </div>
        <div class="row d-xxl-none">
            <span class="fs-4">CLIENTS AND <span class="ft">TESTIMONIALS</span></span>
        </div>
        <div class="row mb-5">
            <div class="col-12 col-xxl-10 offset-xxl-1">
                <!-- quote -->
                <div id="content" class="container-fluid">
                    <div class="testimonial">
                        <blockquote><span class="fs-5">It is a great pleasure to work with Ashan Kavindu. He not only delivered an amazing website that perfectly captures the essence of our brand but also provided excellent guidance and support throughout the entire process. I highly recommend his expertise and professionalism.</span></blockquote>
                        <span class="fs-6"> <b>Jithma Pahasara</b></span>
                    </div>
                </div>
                <!-- quote -->
                <!-- quote -->
                <div id="content" class="container-fluid">
                    <div class="testimonial">
                        <blockquote><span class="fs-5">It is a great pleasure to work with Ashan Kavindu. He not only delivered an amazing website that perfectly captures the essence of our brand but also provided excellent guidance and support throughout the entire process. I highly recommend his expertise and professionalism.</span></blockquote>
                        <span class="fs-6"> <b>Janidu Chamika</b></span>
                    </div>
                </div>
                <!-- quote -->
                <!-- quote -->
                <div id="content" class="container-fluid">
                    <div class="testimonial">
                        <blockquote><span class="fs-5">It is a great pleasure to work with Ashan Kavindu. He not only delivered an amazing website that perfectly captures the essence of our brand but also provided excellent guidance and support throughout the entire process. I highly recommend his expertise and professionalism.</span></blockquote>
                        <span class="fs-6"> <b>Sajana Yasas</b></span>
                    </div>
                </div>
                <!-- quote -->
            </div>
        </div>
        <!-- 5th Section End -->
        <!-- 6th Section Begin -->
        <div class="col-row d-none d-xxl-block">
            <span class="span83  ft">|</span>
            <span class="font43 ms-5">FEATURED
                <br />
                <span style="font-size: 10px;">
                    .......................
                </span>
            </span>
            <span class="font23 font33">FEATURED<span class="ft">PROJECTS</span></span>
            <span class="span63 ">PROJECTS <span class="span73">//</span></span>
        </div>
        <div class="row d-xxl-none">
            <span class="fs-4">FEATURED <span class="ft">PROJECTS</span></span>
        </div>

        <div class="col-12 col-lg-10 mt-5 mb-5 offset-lg-1">
            <div class="row">

                <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-4 col-lg-2">
                                        <img class="img-fluid opc" src="resources/img1.webp" alt="">
                                    </div>
                                    <div class="col-4 col-lg-2">
                                        <img class="img-fluid opc" src="resources/img2.png" alt="">
                                    </div>
                                    <div class="col-4 col-lg-2">
                                        <img class="img-fluid opc" src="resources/img3.png" alt="">
                                    </div>
                                    <div class="col-4 col-lg-2">
                                        <img class="img-fluid opc" src="resources/img1.webp" alt="">
                                    </div>
                                    <div class="col-4 col-lg-2">
                                        <img class="img-fluid opc" src="resources/img2.png" alt="">
                                    </div>
                                    <div class="col-4 col-lg-2">
                                        <img class="img-fluid opc" src="resources/img3.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-4 col-lg-2">
                                        <img class="img-fluid opc" src="resources/img1.webp" alt="">
                                    </div>
                                    <div class="col-4 col-lg-2">
                                        <img class="img-fluid opc" src="resources/img3.png" alt="">
                                    </div>
                                    <div class="col-4 col-lg-2">
                                        <img class="img-fluid opc" src="resources/img2.png" alt="">
                                    </div>
                                    <div class="col-4 col-lg-2">
                                        <img class="img-fluid opc" src="resources/img1.webp" alt="">
                                    </div>
                                                                        <div class="col-4 col-lg-2">
                                        <img class="img-fluid opc" src="resources/img3.png" alt="">
                                    </div>
                                    <div class="col-4 col-lg-2">
                                        <img class="img-fluid opc" src="resources/img2.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-12">
                                <div class="row">
                                <div class="col-4 col-lg-2">
                                        <img class="img-fluid opc" src="resources/img2.png" alt="">
                                    </div>
                                    <div class="col-4 col-lg-2">
                                        <img class="img-fluid opc" src="resources/img1.webp" alt="">
                                    </div>
                                    <div class="col-4 col-lg-2">
                                        <img class="img-fluid opc" src="resources/img3.png" alt="">
                                    </div>
                                    <div class="col-4 col-lg-2">
                                        <img class="img-fluid opc" src="resources/img2.png" alt="">
                                    </div>
                                    <div class="col-4 col-lg-2">
                                        <img class="img-fluid opc" src="resources/img1.webp" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- 6th Section End -->
        <?php require "footer.php";
        ?>
    </div>

<script src="Js/bootstrap.min.js"></script>
    <script src="Js/gui.js"></script>
</body>

</html>