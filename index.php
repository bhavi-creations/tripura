<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tripura</title>

    <!-- Css links -->
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="assets/index.css">

    <!-- favicon  -->
    <link rel="icon" href="./assets/images/nav_logo.png" type="image/x-icon">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0/css/bootstrap.min.css" rel="stylesheet">

    <!-- //reviews -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">

    <!-- favicon  -->
    <link rel="icon" href="./assets/images/nav_logo.png" type="image/x-icon">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

</head>

<body>
    <!-- nav bar -->
    <section>
        <div class="nav_bar">
            <nav class="navbar navbar-expand-lg d-none d-lg-block">
                <div class="container-fluid">
                    <a href="index.php"><img src="assets/images/nav_logo.png" alt="nav_logo" class="img-fluid"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse ms-5 row text-center" id="navbarNavAltMarkup">
                        <div class="navbar-nav col-lg-7 d-flex flex-row justify-content-between">
                            <a style="color:#011632; font-weight: bold;" class="nav-link nav_link active" aria-current="page" href="index.php">Home</a>
                            <a style="color:#011632; font-weight: bold;" class="nav-link nav_link" href="about.php">About Us</a>
                            <a style="color:#011632; font-weight: bold;" class="nav-link nav_link" href="service.php">Service</a>
                            <a style="color:#011632; font-weight: bold;" class="nav-link nav_link" href="gallery.php">Gallery</a>
                            <a style="color:#011632; font-weight: bold;" class="nav-link nav_link" href="blog.php">Blog</a>
                            <a style="color:#011632; font-weight: bold;" class="nav-link nav_link" href="contact.php">Contact</a>
                        </div>
                        <div class="col-lg-2">
                            <img src="assets/images/appointimg.png" class="img-fluid" data-bs-toggle="modal" data-bs-target="#exampleModal" />
                        </div>
                        <div class="col-lg-3">
                            <button class="btn btn-primary nav_btn"><svg xmlns="http://www.w3.org/2000/svg" width="17" height="21" viewBox="0 0 17 21" fill="none">
                                    <path d="M6.50129 8.96815L8.27995 7.39981C8.7667 6.97046 9.10896 6.41108 9.26284 5.79343C9.41671 5.17578 9.37519 4.52802 9.14359 3.93321L8.38356 1.98235C8.09991 1.25445 7.53825 0.657952 6.81306 0.31442C6.08786 -0.0291117 5.25371 -0.0938151 4.48062 0.133497C1.63609 0.970263 -0.55035 3.51244 0.122656 6.53197C0.565249 8.51789 1.41148 11.0107 3.01691 13.6636C4.36215 15.8979 6.05452 17.9216 8.03545 19.6644C10.4142 21.746 13.8124 21.2256 15.9988 19.2659C16.5849 18.7405 16.9405 18.02 16.9932 17.2511C17.0459 16.4823 16.7916 15.7231 16.2823 15.1283L14.889 13.501C14.4691 13.0103 13.9062 12.6515 13.2727 12.4705C12.6391 12.2896 11.9638 12.2949 11.3333 12.4858L9.03252 13.1831C8.94384 13.0954 8.8419 12.991 8.72918 12.8707C8.25615 12.3675 7.83764 11.8193 7.48014 11.2346C7.13234 10.6444 6.84796 10.0217 6.63142 9.37617C6.58513 9.24104 6.54175 9.105 6.50129 8.96815Z" fill="white" />
                                </svg>+91 94930 66633</button>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- mobile nav bar -->
            <nav class="navbar navbar-expand-lg d-block d-lg-none ">
                <div class="container-fluid">
                    <a href="index.php"><img src="assets/images/nav_logo.png" alt="nav_logo" class="img-fluid"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup2" aria-controls="navbarNavAltMarkup2" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse ms-5" id="navbarNavAltMarkup2">
                        <div class="navbar-nav">
                            <a style="color:#011632; font-weight: bold;" class="nav-link nav_link active" aria-current="page" href="index.php">Home</a>
                            <a style="color:#011632; font-weight: bold;" class="nav-link nav_link" href="about.php">About Us</a>
                            <a style="color:#011632; font-weight: bold;" class="nav-link nav_link" href="service.php">Service</a>
                            <a style="color:#011632; font-weight: bold;" class="nav-link nav_link" href="gallery.php">Gallery</a>
                            <a style="color:#011632; font-weight: bold;" class="nav-link nav_link" href="blog.php">Blog</a>
                            <a style="color:#011632; font-weight: bold;" class="nav-link nav_link" href="contact.php">Contact</a>
                        </div>
                        <div>
                            <img src="assets/images/appointimg.png" class="img-fluid" data-bs-toggle="modal" data-bs-target="#exampleModal" />
                        </div>
                        <div class="my-2">
                            <button class="btn btn-primary nav_btn"><svg xmlns="http://www.w3.org/2000/svg" width="17" height="21" viewBox="0 0 17 21" fill="none">
                                    <path d="M6.50129 8.96815L8.27995 7.39981C8.7667 6.97046 9.10896 6.41108 9.26284 5.79343C9.41671 5.17578 9.37519 4.52802 9.14359 3.93321L8.38356 1.98235C8.09991 1.25445 7.53825 0.657952 6.81306 0.31442C6.08786 -0.0291117 5.25371 -0.0938151 4.48062 0.133497C1.63609 0.970263 -0.55035 3.51244 0.122656 6.53197C0.565249 8.51789 1.41148 11.0107 3.01691 13.6636C4.36215 15.8979 6.05452 17.9216 8.03545 19.6644C10.4142 21.746 13.8124 21.2256 15.9988 19.2659C16.5849 18.7405 16.9405 18.02 16.9932 17.2511C17.0459 16.4823 16.7916 15.7231 16.2823 15.1283L14.889 13.501C14.4691 13.0103 13.9062 12.6515 13.2727 12.4705C12.6391 12.2896 11.9638 12.2949 11.3333 12.4858L9.03252 13.1831C8.94384 13.0954 8.8419 12.991 8.72918 12.8707C8.25615 12.3675 7.83764 11.8193 7.48014 11.2346C7.13234 10.6444 6.84796 10.0217 6.63142 9.37617C6.58513 9.24104 6.54175 9.105 6.50129 8.96815Z" fill="white" />
                                </svg>+91 94930 66633</button>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </section>

    <section class="mt-5">
        <div class="container">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="assets/images/Tripura Slider 1.jpg" class="d-block w-100 img-fluid" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <!-- <h5>Skin Care 
                                Tailored for You</h5>
                            <p>Cpathlabs is a very painful process, especially if you’re not taking care  of your health and having regular checkups.</p> -->
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="assets/images/Tripura Slider 2.jpg" class="d-block w-100 img-fluid" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <!-- <h5>Second slide label</h5>
                            <p>Some representative placeholder content for the second slide.</p> -->
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="assets/images/Tripura Slider 3.jpg" class="d-block w-100 img-fluid" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <!-- <h5>Third slide label</h5>
                            <p>Some representative placeholder content for the third slide.</p> -->
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="assets/images/Tripura Slider 4.jpg" class="d-block w-100 img-fluid" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <!-- <h5>Third slide label</h5>
                            <p>Some representative placeholder content for the third slide.</p> -->
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="assets/images/Tripura_Slider_5.jpg" class="d-block w-100 img-fluid" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <!-- <h5>Third slide label</h5>
                            <p>Some representative placeholder content for the third slide.</p> -->
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>

    <div class="back_ground_colr_light_blue">
        <section class="pt-5">
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-6 onlu_paha border_right">Request an Appointment</div>
                    <div class="col-md-6 onlu_paha ">Search Skin & cosmetic</div>
                    <!-- <div class="col-md-4 onlu_paha">Find a Mind treatments</div> -->
                </div>
            </div>
        </section>

        <section class="hr_line">
            <div class="container">
                <div class="row">
                    <hr>
                </div>
            </div>
        </section>


        <section>
            <div class="container">
                <h2 class="service_heading my-4 ">Our Services</h2>

                <h5 class=" text-center service_para">We offer a comprehensive coverage of more than 30+ <br> medical
                    Treatments with reliable results</h5>

                <div class="row">

                </div>
            </div>
        </section>

        <section>
            <div class="container p-5">
                <div class="row">
                    <div class="owl-carousel  four_carsoe">
                        <div class="item">
                            <div class="card secomd_pot shadow" style="border-top: solid #F25A29;">
                                <div>
                                    <img class="secomd_img img-fluid" src="assets/images/home icons/1.png" style="border-radius: 50%; " alt="Image 1">
                                    <a href="hair_care.php" style="text-decoration: none; ">
                                        <h8 class="inner_desgin_div">Hair Care</h8>
                                    </a>
                                    <p class="car_head_para">Nourish and rejuvenate your hair.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card secomd_pot shadow" style="border-top: solid #F25A29;">
                                <div>
                                    <img class="secomd_img img-fluid" src="assets/images/home icons/2.png" style="border-radius: 50%;" alt="Image 1">
                                    <a href="pigmentation.php" style="text-decoration: none;">
                                        <h8 class="inner_desgin_div">Pigmentation</h8>
                                    </a>
                                    <p class="car_head_para">Restore even skin tone naturally.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card secomd_pot shadow" style="border-top: solid #F25A29;">
                                <div>
                                    <img class="secomd_img img-fluid" src="assets/images/others/2.png" style="border-radius: 50%;" alt="Image 1">
                                    <a href="age_control.php" style="text-decoration: none;">
                                        <h8 class="inner_desgin_div">Age Control</h8>
                                    </a>
                                    <p class="car_head_para"> Rejuvenate skin for youthful..
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card secomd_pot shadow" style="border-top: solid #F25A29;">
                                <div>
                                    <img class="secomd_img img-fluid" src="assets/images/others/1.png" style="border-radius: 50%;" alt="Image 1">
                                    <a href="dark_circles.php" style="text-decoration: none;">
                                        <h8 class="inner_desgin_div">Dark Circles</h8>
                                    </a>
                                    <p class="car_head_para">Banish under-eye shadows effectively.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card secomd_pot shadow" style="border-top: solid #F25A29;">
                                <div>
                                    <img class="secomd_img img-fluid" src="assets/images/home icons/5.png" style="border-radius: 50%;" alt="Image 1">
                                    <a href="acne_acnescras.php" style="text-decoration: none;">
                                        <h8 class="inner_desgin_div">Acne & Acne Scars Treatment</h8>
                                    </a>
                                    <p class="car_head_para">Clear skin with personalized solutions.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card secomd_pot shadow" style="border-top: solid #F25A29;">
                                <div>
                                    <img class="secomd_img img-fluid" src="assets/images/home icons/6.png" style="border-radius: 50%;" alt="Image 1">
                                    <a href="glowing_skin.php" style="text-decoration: none;">
                                        <h8 class="inner_desgin_div">Glowing Skin</h8>
                                    </a>
                                    <p class="car_head_para">Achieve radiant complexion..
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card secomd_pot shadow" style="border-top: solid #F25A29;">
                                <div>
                                    <img class="secomd_img img-fluid" src="assets/images/others/3.png" style="border-radius: 50%;" alt="Image 1">
                                    <a href="others.php" style="text-decoration: none;">
                                        <h8 class="inner_desgin_div">Others</h8>
                                    </a>
                                    <p class="car_head_para">Erase ink, smooth skin, reduce scars..
                                    </p>
                                </div>
                            </div>
                        </div>


                    </div>



                </div>
            </div>
        </section>

        <script>
            $(document).ready(function() {
                var owl = $(".four_carsoe");
                owl.owlCarousel({
                    loop: true,
                    margin: 10,
                    autoplay: true,
                    autoplayTimeout: 2000,
                    autoplayHoverPause: true,
                    responsiveClass: true,
                    responsive: {
                        0: {
                            items: 1,
                            nav: true
                        },
                        768: {
                            items: 3,
                            nav: false
                        },
                        992: {
                            items: 4,
                            nav: true
                        }
                    }
                });

                // Check if Owl Carousel has initialized
                if (owl.hasClass('owl-loaded')) {
                    console.log('Owl Carousel is initialized and should be looping.');
                } else {
                    console.log('Owl Carousel failed to initialize.');
                }
            });
        </script>

    </div>



    <section>
        <div class="container mt-5  div_first_con">
            <div class="row">
                <div class="col-md-6  d-flex flex-column justify-content-center ">
                    <img src="assets/images/2.png" class=" doc_img_one img-fluid" alt="...">

                </div>
                <div class="col-md-6 d-flex flex-column justify-content-between">
                    <h6 class="shedual_heading">Make a Schedule</h6>
                    <h2 class="shedual_para">Make a schedule in advance
                        with the available doctor</h2>
                    <p class="sahde_color">Plan your visit with ease by scheduling an appointment in advance with our available doctors. Whether you're seeking skincare advice, cosmetic procedures, or medical treatments, booking ahead ensures you receive personalized attention at a time that suits your schedule. </p>
                    <P class="tick_mark_lines"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="15" viewBox="0 0 15 15" fill="none" class="blue_rounded_tick">
                            <rect width="13.5484" height="13.5484" transform="translate(0.386719 0.854858)" fill="#009DDE" />
                            <path d="M11.6768 4.24207L5.46711 10.4517L2.64453 7.62916" stroke="white" stroke-width="1.69355" stroke-linecap="round" stroke-linejoin="round" />
                        </svg> Make a schedule online is easy</P>
                    <P class="tick_mark_lines2"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="15" viewBox="0 0 15 15" fill="none" class="blue_rounded_tick">
                            <rect width="13.5484" height="13.5484" transform="translate(0.386719 0.854858)" fill="#009DDE" />
                            <path d="M11.6768 4.24207L5.46711 10.4517L2.64453 7.62916" stroke="white" stroke-width="1.69355" stroke-linecap="round" stroke-linejoin="round" />
                        </svg> Easy to connect with nearest</P>
                    <div class="btn_flex_center">
                        <button class="schedual_button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"> Schedule Now!</button>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="container second_doc_div">
            <div class="row">

                <div class="col-md-6 d-flex flex-column justify-content-between  order-2 order-md-1">
                    <h6 class="shedual_heading">Make a Schedule</h6>
                    <h2 class="shedual_para">Why Choose Your Skin &
                        Cosmetic Treatments ?</h2>
                    <p class="sahde_color">At Tripura Skin and Cosmetology Clinic, we pride ourselves on delivering exceptional skin and cosmetic treatments tailored to meet your unique needs. With a team of highly skilled professionals and state-of-the-art technology, we offer personalized care and innovative solutions to help you achieve your aesthetic goals. Whether you're seeking rejuvenation, enhancement, or corrective treatments, trust us to provide safe, effective, and compassionate care that prioritizes your satisfaction and well-being.
                    </p>
                    <div class="row">

                        <div class="col-md-6">
                            <P class="tick_mark_lines"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="18" viewBox="0 0 15 18" fill="none">
                                    <mask id="mask0_951_881" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="0" width="15" height="18">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0.333984 0.667969H14.473V17.631H0.333984V0.667969Z" fill="white" />
                                    </mask>
                                    <g mask="url(#mask0_951_881)">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M7.4035 1.91797C6.69683 1.91797 2.2385 3.48797 1.72433 3.91714C1.57266 4.06964 1.56683 4.33464 1.59933 6.1088C1.61433 6.9638 1.63516 8.12547 1.63516 9.7338C1.63516 14.068 6.4035 15.9921 7.40266 16.3463C8.401 15.9905 13.1718 14.0555 13.1718 9.7338C13.1718 8.1238 13.1927 6.9613 13.2085 6.1063C13.2402 4.3338 13.2343 4.0688 13.0735 3.9088C12.5693 3.48797 8.11016 1.91797 7.4035 1.91797ZM7.4035 17.6313C7.34266 17.6313 7.28183 17.623 7.22266 17.6046C6.9435 17.5205 0.385163 15.4688 0.385163 9.7338C0.385163 8.1363 0.36433 6.98047 0.34933 6.13214C0.310996 4.01297 0.302663 3.5713 0.850163 3.02464C1.50433 2.3688 6.4585 0.667969 7.4035 0.667969C8.34766 0.667969 13.3018 2.3688 13.9577 3.02464C14.5043 3.5713 14.496 4.01297 14.4577 6.12964C14.4427 6.97797 14.4218 8.1338 14.4218 9.7338C14.4218 15.4688 7.8635 17.5205 7.58433 17.6046C7.52516 17.623 7.46433 17.6313 7.4035 17.6313Z" fill="#1376F8" />
                                    </g>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M6.81484 11.1014C6.64901 11.1014 6.48984 11.0355 6.37234 10.918L4.79568 9.33969C4.55234 9.09552 4.55234 8.69885 4.79651 8.45552C5.03984 8.21135 5.43651 8.21135 5.68068 8.45552L6.81484 9.59135L9.62151 6.78469C9.86568 6.54052 10.2607 6.54052 10.5048 6.78469C10.749 7.02885 10.749 7.42469 10.5048 7.66885L7.25651 10.918C7.13984 11.0355 6.98068 11.1014 6.81484 11.1014Z" fill="#1376F8" />
                                </svg>Top quality Skin team</P>
                        </div>

                        <div class="col-md-6">
                            <P class="tick_mark_lines"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="18" viewBox="0 0 15 18" fill="none">
                                    <mask id="mask0_951_881" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="0" width="15" height="18">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0.333984 0.667969H14.473V17.631H0.333984V0.667969Z" fill="white" />
                                    </mask>
                                    <g mask="url(#mask0_951_881)">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M7.4035 1.91797C6.69683 1.91797 2.2385 3.48797 1.72433 3.91714C1.57266 4.06964 1.56683 4.33464 1.59933 6.1088C1.61433 6.9638 1.63516 8.12547 1.63516 9.7338C1.63516 14.068 6.4035 15.9921 7.40266 16.3463C8.401 15.9905 13.1718 14.0555 13.1718 9.7338C13.1718 8.1238 13.1927 6.9613 13.2085 6.1063C13.2402 4.3338 13.2343 4.0688 13.0735 3.9088C12.5693 3.48797 8.11016 1.91797 7.4035 1.91797ZM7.4035 17.6313C7.34266 17.6313 7.28183 17.623 7.22266 17.6046C6.9435 17.5205 0.385163 15.4688 0.385163 9.7338C0.385163 8.1363 0.36433 6.98047 0.34933 6.13214C0.310996 4.01297 0.302663 3.5713 0.850163 3.02464C1.50433 2.3688 6.4585 0.667969 7.4035 0.667969C8.34766 0.667969 13.3018 2.3688 13.9577 3.02464C14.5043 3.5713 14.496 4.01297 14.4577 6.12964C14.4427 6.97797 14.4218 8.1338 14.4218 9.7338C14.4218 15.4688 7.8635 17.5205 7.58433 17.6046C7.52516 17.623 7.46433 17.6313 7.4035 17.6313Z" fill="#1376F8" />
                                    </g>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M6.81484 11.1014C6.64901 11.1014 6.48984 11.0355 6.37234 10.918L4.79568 9.33969C4.55234 9.09552 4.55234 8.69885 4.79651 8.45552C5.03984 8.21135 5.43651 8.21135 5.68068 8.45552L6.81484 9.59135L9.62151 6.78469C9.86568 6.54052 10.2607 6.54052 10.5048 6.78469C10.749 7.02885 10.749 7.42469 10.5048 7.66885L7.25651 10.918C7.13984 11.0355 6.98068 11.1014 6.81484 11.1014Z" fill="#1376F8" />
                                </svg> Discount on all treatments</P>
                        </div>
                        <div class="col-md-6">
                            <P class="tick_mark_lines"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="18" viewBox="0 0 15 18" fill="none">
                                    <mask id="mask0_951_881" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="0" width="15" height="18">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0.333984 0.667969H14.473V17.631H0.333984V0.667969Z" fill="white" />
                                    </mask>
                                    <g mask="url(#mask0_951_881)">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M7.4035 1.91797C6.69683 1.91797 2.2385 3.48797 1.72433 3.91714C1.57266 4.06964 1.56683 4.33464 1.59933 6.1088C1.61433 6.9638 1.63516 8.12547 1.63516 9.7338C1.63516 14.068 6.4035 15.9921 7.40266 16.3463C8.401 15.9905 13.1718 14.0555 13.1718 9.7338C13.1718 8.1238 13.1927 6.9613 13.2085 6.1063C13.2402 4.3338 13.2343 4.0688 13.0735 3.9088C12.5693 3.48797 8.11016 1.91797 7.4035 1.91797ZM7.4035 17.6313C7.34266 17.6313 7.28183 17.623 7.22266 17.6046C6.9435 17.5205 0.385163 15.4688 0.385163 9.7338C0.385163 8.1363 0.36433 6.98047 0.34933 6.13214C0.310996 4.01297 0.302663 3.5713 0.850163 3.02464C1.50433 2.3688 6.4585 0.667969 7.4035 0.667969C8.34766 0.667969 13.3018 2.3688 13.9577 3.02464C14.5043 3.5713 14.496 4.01297 14.4577 6.12964C14.4427 6.97797 14.4218 8.1338 14.4218 9.7338C14.4218 15.4688 7.8635 17.5205 7.58433 17.6046C7.52516 17.623 7.46433 17.6313 7.4035 17.6313Z" fill="#1376F8" />
                                    </g>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M6.81484 11.1014C6.64901 11.1014 6.48984 11.0355 6.37234 10.918L4.79568 9.33969C4.55234 9.09552 4.55234 8.69885 4.79651 8.45552C5.03984 8.21135 5.43651 8.21135 5.68068 8.45552L6.81484 9.59135L9.62151 6.78469C9.86568 6.54052 10.2607 6.54052 10.5048 6.78469C10.749 7.02885 10.749 7.42469 10.5048 7.66885L7.25651 10.918C7.13984 11.0355 6.98068 11.1014 6.81484 11.1014Z" fill="#1376F8" />
                                </svg> State of the art Skin services</P>
                        </div>
                        <div class="col-md-6">
                            <P class="tick_mark_lines"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="18" viewBox="0 0 15 18" fill="none">
                                    <mask id="mask0_951_881" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="0" width="15" height="18">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0.333984 0.667969H14.473V17.631H0.333984V0.667969Z" fill="white" />
                                    </mask>
                                    <g mask="url(#mask0_951_881)">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M7.4035 1.91797C6.69683 1.91797 2.2385 3.48797 1.72433 3.91714C1.57266 4.06964 1.56683 4.33464 1.59933 6.1088C1.61433 6.9638 1.63516 8.12547 1.63516 9.7338C1.63516 14.068 6.4035 15.9921 7.40266 16.3463C8.401 15.9905 13.1718 14.0555 13.1718 9.7338C13.1718 8.1238 13.1927 6.9613 13.2085 6.1063C13.2402 4.3338 13.2343 4.0688 13.0735 3.9088C12.5693 3.48797 8.11016 1.91797 7.4035 1.91797ZM7.4035 17.6313C7.34266 17.6313 7.28183 17.623 7.22266 17.6046C6.9435 17.5205 0.385163 15.4688 0.385163 9.7338C0.385163 8.1363 0.36433 6.98047 0.34933 6.13214C0.310996 4.01297 0.302663 3.5713 0.850163 3.02464C1.50433 2.3688 6.4585 0.667969 7.4035 0.667969C8.34766 0.667969 13.3018 2.3688 13.9577 3.02464C14.5043 3.5713 14.496 4.01297 14.4577 6.12964C14.4427 6.97797 14.4218 8.1338 14.4218 9.7338C14.4218 15.4688 7.8635 17.5205 7.58433 17.6046C7.52516 17.623 7.46433 17.6313 7.4035 17.6313Z" fill="#1376F8" />
                                    </g>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M6.81484 11.1014C6.64901 11.1014 6.48984 11.0355 6.37234 10.918L4.79568 9.33969C4.55234 9.09552 4.55234 8.69885 4.79651 8.45552C5.03984 8.21135 5.43651 8.21135 5.68068 8.45552L6.81484 9.59135L9.62151 6.78469C9.86568 6.54052 10.2607 6.54052 10.5048 6.78469C10.749 7.02885 10.749 7.42469 10.5048 7.66885L7.25651 10.918C7.13984 11.0355 6.98068 11.1014 6.81484 11.1014Z" fill="#1376F8" />
                                </svg> Enrollment is quick and easy</P>
                        </div>
                    </div>


                    <div class="d-flex ">
                        <a href="about.php"><button class="shd_btn"> Learn More</button> </a>
                        <button class="  sche_button2" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Make an Appointment </button>

                    </div>
                </div>


                <div class="col-md-6  d-flex flex-column justify-content-center order-1 order-md-2">
                    <img src="assets/images/doctorcon2.jpg" class=" doc_img_one img-fluid" alt="...">

                </div>
            </div>
        </div>
    </section>




    <!-- Meet our Doctors -->
    <div class="section3 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="meet_heading" style="font-size: 42px;">Meet our specialists</h1>
                    <p class="meet_para alignments">Meet our experienced team of doctors who are dedicated to providing personalized care and innovative treatments to help you achieve your skincare goals and optimal well-being. </p>
                </div>
            </div>
        </div>
    </div>

    <div class="section4 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4 col-lg-4">
                    <div class="d-flex flex-row justify-content-center">
                        <img src="assets/images/docter1.png" class="img-fluid" />
                    </div>
                </div>
                <div class="col-12 col-md-7 col-lg-7">
                    <div class="row mt-5">
                        <div class="col-12 col-md-4 col-lg-4">
                            <h1 class="doc_name ">DR. A. Kiran Raju</h1>
                        </div>
                        <div class="col-12 col-md-6 col-lg-6">
                            <p class="doc_designation">( M.B.B.S, M.D.D.V.L., F.A.M.) </p>
                            <p class="doc_designation">
                                Dermatologist & Cosmetologist
                            </p>
                        </div>
                    </div>
                    <p class="doc1_para">"Step into a world of radiant beauty and confidence with Dr. A. Kiran Raju, a
                        distinguished Dermatologist and Cosmetologist. With a fusion of medical expertise and artistic
                        flair, Dr. Raju crafts personalized treatments to unveil your skin's natural brilliance. From
                        advanced dermatological solutions to transformative cosmetic enhancements, experience
                        unparalleled care that celebrates your unique beauty journey."</p>
                    <button class="doc_button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Book an Appointment</button>
                </div>
            </div>
        </div>
    </div>



    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const carousel = document.querySelector(".carousel");
            const arrowBtns = document.querySelectorAll(".wrapper i");
            const wrapper = document.querySelector(".wrapper");

            const firstdoctors = carousel.querySelector(".doctors");
            const firstdoctorsWidth = firstdoctors.offsetWidth;

            let isDragging = false,
                startX,
                startScrollLeft,
                timeoutId;

            const dragStart = (e) => {
                isDragging = true;
                carousel.classList.add("dragging");
                startX = e.pageX;
                startScrollLeft = carousel.scrollLeft;
            };

            const dragging = (e) => {
                if (!isDragging) return;

                // Calculate the new scroll position 
                const newScrollLeft = startScrollLeft - (e.pageX - startX);

                // Check if the new scroll position exceeds  
                // the carousel boundaries 
                if (newScrollLeft <= 0 || newScrollLeft >=
                    carousel.scrollWidth - carousel.offsetWidth) {

                    // If so, prevent further dragging 
                    isDragging = false;
                    return;
                }

                // Otherwise, update the scroll position of the carousel 
                carousel.scrollLeft = newScrollLeft;
            };

            const dragStop = () => {
                isDragging = false;
                carousel.classList.remove("dragging");
            };

            const autoPlay = () => {

                // Return if window is smaller than 800 

                if (window.innerWidth < 800) return;

                // Calculate the total width of all doctorss 
                const totaldoctorsWidth = carousel.scrollWidth;

                // Calculate the maximum scroll position 
                const maxScrollLeft = totaldoctorsWidth - carousel.offsetWidth;

                // If the carousel is at the end, stop autoplay 
                if (carousel.scrollLeft >= maxScrollLeft) return;

                // Autoplay the carousel after every 2500ms 
                timeoutId = setTimeout(() =>
                    carousel.scrollLeft += firstdoctorsWidth, 2500);
            };

            carousel.addEventListener("mousedown", dragStart);
            carousel.addEventListener("mousemove", dragging);
            document.addEventListener("mouseup", dragStop);
            wrapper.addEventListener("mouseenter", () =>
                clearTimeout(timeoutId));
            wrapper.addEventListener("mouseleave", autoPlay);

            // Add event listeners for the arrow buttons to  
            // scroll the carousel left and right 
            arrowBtns.forEach(btn => {
                btn.addEventListener("click", () => {
                    carousel.scrollLeft += btn.id === "left" ?
                        -firstdoctorsWidth : firstdoctorsWidth;
                });
            });
        });
    </script>


    <!-- Meet our Doctors -->
    <div class="container">
        <h1 class="text-center meetourdoctors mt-3">Our Happy Clients</h1>
        <p class="text-center weuse">

            Join our satisfied clients who have experienced transformative results and exceptional service.</p>
    </div>

    <div class="owl-carousel owl-theme">
        <div class="item container">
            <div class="blog_cardss row">
                <div class="col-3">
                    <img class="rounded-circle shadow-1-strong mt-4" src="assets/images/others/4.png" alt="avatar" style="width: 80px;" />
                </div>
                <div class="col-5 me-3 mt-5">
                    <h5 class="">Deepika </h5>
                    <p class="">⭐⭐⭐⭐⭐</p>
                </div>

                <!-- <p>UX Designer</p> -->
                <p class="text-muted">
                    <!-- <i class="fas fa-quote-left pe-2"></i> -->
                    I got dark spots all over my face, so the doctor suggested I get freckle treatment, but I was not convinced... Now, I really got the best result, and we don't need to go to Hyderabad anymore; even our Kakinada has such treatments available. Thank you so much, Rainbow skin clinic
                </p>

            </div>
        </div>
        <div class="item container">
            <div class="  blog_cardss row">
                <div class="col-3">
                    <img class="rounded-circle shadow-1-strong mt-4" src="assets/images/others/6.png" alt="avatar" style="width: 80px;" />
                </div>
                <div class="col-5 me-3 mt-5">
                    <h5 class="">Konna Chilla</h5>
                    <p class="">⭐⭐⭐⭐⭐</p>
                </div>
                <!-- <p>Web Developer</p> -->
                <p class="text-muted">
                    <!-- <i class="fas fa-quote-left pe-2"></i> -->
                    Excellent consultation & service. Although I was sceptical before the first visit, I can strongly recommend now about the treatment, service you get here. Best part is that there's almost no wait time.

                    Treatment started showing postive signs within a single day after visit. Undoubtedly the best skin doctor out of all the unskilled so called big names in the town.
                </p>
            </div>
        </div>
        <div class="item container">
            <div class=" blog_cardss row">
                <div class="col-3">
                    <img class="rounded-circle shadow-1-strong mt-4" src="assets/images/others/5.png" alt="avatar" style="width: 80px;" />
                </div>
                <div class="col-5 me-3 mt-5">
                    <h5 class=""> Saikumari</h5>
                    <p class="">⭐⭐⭐⭐⭐</p>
                </div>
                <p class="text-muted">
                    <!-- <i class="fas fa-quote-left pe-2"></i> -->
                    Excellent treatment and good result. I had severe acne on my face, and I tried many medicines but nothing worked. Then my friend suggested Rainbow Hospital. Now all my problems are resolved. The doctors there patiently listened to my concerns and provided the best treatment. It's a highly recommended hospital. I love it!
                </p>
            </div>
        </div>
        <!-- Add more items as needed -->
    </div>

    <div class="custom-nav-buttons">
        <button class="prev"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8" />
            </svg></button>
        <button class="next"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8" />
            </svg></button>
    </div>

    <!-- Owl Carousel JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <script>
        $(document).ready(function() {
            var owl = $('.owl-carousel');
            owl.owlCarousel({
                loop: true,
                margin: 10,
                nav: false,
                dots: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 3
                    },
                    1000: {
                        items: 3
                    }
                }
            });

            // Custom Navigation Buttons
            $('.next').click(function() {
                owl.trigger('next.owl.carousel');
            });
            $('.prev').click(function() {
                owl.trigger('prev.owl.carousel');
            });
        });
    </script>



    <!-- Frequently Ask Question -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center meetourdoctors">Frequently Ask Question</h1>
                <p class="text-center weuse alignments">Explore answers to common queries regarding our treatments, procedures, and clinic policies to ensure you're well-informed before your visit.</p>
            </div>
        </div>
    </div>


    <div class="last-sec">
        <div class="container">
            <div class="row">
                <div class="accordion" id="faqAccordion">
                    <div class="accordion-item shadow mb-5">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" style="color:#011632; font-weight: bold;" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                How long does a typical laser skin reduction session take?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                <p class="paracolor what_provides_para">Laser skin reduction sessions typically range from 15 to 45 minutes, depending on the area being treated and the specific laser technology utilized, with minimal to no downtime for most individuals.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item shadow mb-5">
                        <h2 class="accordion-header" id="headingTwo">
                            <button style="color:#011632; font-weight: bold;" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Is PRP therapy painful?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                <p class="paracolor what_provides_para">PRP therapy involves minimal discomfort, similar to a routine blood draw, as a small amount of blood is drawn from the patient's arm and then centrifuged to isolate the platelet-rich plasma, which is then injected into the treatment area.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item shadow mb-5">
                        <h2 class="accordion-header" id="headingThree">
                            <button style="color:#011632; font-weight: bold;" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                What is the downtime for GFC therapy?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                <p class="paracolor what_provides_para"> Growth Factor Concentrate (GFC) therapy typically has minimal downtime, with most patients experiencing mild redness or swelling at the injection site for a day or two following the procedure, but able to resume normal activities immediately.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item shadow">
                        <h2 class="accordion-header" id="headingFour">
                            <button style="color:#011632; font-weight: bold;" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                How many LED therapy sessions are recommended for optimal results?
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                <p class="paracolor what_provides_para">The number of LED therapy sessions needed for optimal results can vary depending on the individual's skin condition and treatment goals, but a series of sessions spaced one to two weeks apart is typically recommended for best results.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>
        // Wait for the DOM content to load before executing the script
        document.addEventListener('DOMContentLoaded', function() {
            // Select all accordion buttons
            const accordionButtons = document.querySelectorAll('.accordion-button');

            // Add event listener to each accordion button
            accordionButtons.forEach(button => {
                button.addEventListener('click', () => {
                    // Get the associated collapse target ID
                    // const targetId = button.getAttribute('data-bs-target');

                    // Get the associated collapse target element
                    const collapseTarget = document.querySelector(targetId);

                    // Toggle the 'show' class on the collapse target
                    collapseTarget.classList.toggle('show');

                    // Toggle the 'collapsed' class on the clicked button based on the collapse target's visibility
                    button.classList.toggle('collapsed');
                });
            });
        });
    </script>







    <!-- Image -->
    <div class="container mt-5 pt-5 d-flex flex-row justify-content-center">
        <img src="./assets/images/Home_page_before_footer_image (3).png" alt="slider_img" class="img-fluid">
    </div>



    <!-- Model  -->

    <?php include 'modal.php' ?>



    <!-- Scroll Up Button  -->
    <button id="scrollBtn" onclick="scrollToTop()"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5" />
        </svg>
    </button>

    <script>
        // Function to scroll to the top of the page
        function scrollToTop() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth' // Optional, smooth scrolling animation
            });
        }

        // Show scroll button when scrolling down
        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("scrollBtn").style.display = "block";
            } else {
                document.getElementById("scrollBtn").style.display = "none";
            }
        }
    </script>


    <?php include('footer.php'); ?>

    

    <!-- St Modal -->

    <div class="modal fade" id="imageModal" tabindex="-1" role="dialog" aria-labelledby="imageModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header popup-div">
                    <button type="button" class="close popup-div-close" data-dismiss="modal" aria-label="Close" onclick="hideModal()" style="border:none;  margin-left: auto;">
                        <span aria-hidden="true" style="color: red;"> <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                                <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708" />
                            </svg></span>
                    </button>
                </div>
                <div class="modal-body">
                    <img src="assets/images/Tripura_Slider_5.jpg" class="img-fluid" alt="Full Size Image">
                    <!-- <div class="text-center m-4">
                        <a href="appointment.html" class="btn btn-secondary">Book Appointment</a>
                    </div> -->
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->


    <!-- Modal Scripits -->
    <script>
        $(document).ready(function() {
            $('#imageModal').modal('show');
        });

        function hideModal() {
            $('#imageModal').modal('hide');
        }
    </script>



    <!-- Modal Scripits -->

    <!-- whatsapp icon  -->
    <a href="https://api.whatsapp.com/send?phone=919493066633
" target="_blank">
        <div class="whatsapp_logo">
            <img src="assets/images/whatsapp.png" alt="whatsapp" class="img-fluid" height="50px" width="50px">
        </div>
    </a>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>



</body>

</html>