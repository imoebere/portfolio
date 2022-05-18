<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- ========================== UNICONS ======================-->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">


    <!-- ========================== SWIPER CSS ======================-->
    <link rel="stylesheet" href="css/swiper-bundle.min.css">

    <!-- =========================== CSS ============================-->
    <link rel="stylesheet" href="css/styles.css">
    <title>MY PORTFOLIO WEBSITE</title>
</head>
<body>
<!-- =========================== HEADER ============================-->
<header class="header" id="header">
    <nav class="nav container">
            <a href="#" class="nav_logo">Edward</a> 
        <div class="nav_menu" id="nav-menu">
            <ul class="nav_list grid">
                <li class="nav_item">
                   <a href="#home" class="nav_link active-link">
                        <i class="uil uil-home nav_icon"></i> Home
                   </a> 
                </li>
                <li class="nav_item">
                   <a href="#about" class="nav_link">
                        <i class="uil uil-user nav_icon"></i> About
                   </a> 
                </li>
                <li class="nav_item">
                   <a href="#skills" class="nav_link">
                        <i class="uil uil-file-alt nav_icon"></i> Skills
                   </a> 
                </li>
                <li class="nav_item">
                   <a href="#services" class="nav_link">
                        <i class="uil uil-briefcase-alt nav_icon"></i> Services
                   </a> 
                </li>
                <li class="nav_item">
                   <a href="#portfolio" class="nav_link">
                        <i class="uil uil-scenery nav_icon"></i> Portfolio
                   </a> 
                </li>
                <li class="nav_item">
                   <a href="#contact" class="nav_link">
                        <i class="uil uil-message nav_icon"></i> Contactme
                   </a> 
                </li>
            </ul>
            <i class="uil uil-times nav_close" id="nav-close"></i>
        </div>

        <div class="nav_btns">
             <!--   Theme change button -->
                <i class="uil uil-moon change-theme" id="theme-button"></i>
            <div class="nav_toggle" id="nav-toggle">
                <i class="uil uil-apps"></i>
            </div>
        </div>
    </nav>
</header>


<!-- =========================== MAIN ============================--> 
<main class="main">
<!-- =========================== HOME ============================--> 
<section class="home section" id="home">
    <div class="home_container container grid">
        <div class="home_content grid">
            <div class="home_social">
                <a href="https://www.linkedin.com/" target="_blank" class="home_social-icon">
                    <i class="uil uil-linkedin-alt"></i>
                </a>
                <a href="https://www.facebook.com/" target="_blank" class="home_social-icon">
                    <i class="uil uil-facebook-f"></i>
                </a>
                <a href="https://www.github.com/"  target="_blank"  class="home_social-icon">
                    <i class="uil uil-github"></i>
                </a>
            </div>
            <div class="home_img">
                <svg class="home_blob" viewBox="0 0 479 467" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <mask id="mask0" mask-type="alpha">
                            <path d="M9.19024 145.964C34.0253 76.5814 114.865 54.7299 184.111 29.4823C245.804 6.98884 
                            311.86 -14.9503 370.735 14.143C431.207 44.026 467.948 107.508 477.191 174.311C485.897 237.229 
                            454.931 294.377 416.506 344.954C373.74 401.245 326.068 462.801 255.442 466.189C179.416 469.835 111.552 
                            422.137 65.1576 361.805C17.4835 299.81 -17.1617 219.583 9.19024 145.964Z"/>
                        </mask>
                        <g mask="url(#mask0)">
                            <path d="M9.19024 145.964C34.0253 76.5814 114.865 54.7299 184.111 29.4823C245.804 6.98884
                             311.86 -14.9503 370.735 14.143C431.207 44.026 467.948 107.508 477.191 174.311C485.897 
                             237.229 454.931 294.377 416.506 344.954C373.74 401.245 326.068 462.801 255.442 466.189C179.416 
                             469.835 111.552 422.137 65.1576 361.805C17.4835 299.81 -17.1617 219.583 9.19024 145.964Z"/>
                            
                             <image class="home_blob-img" x='12' y='18' xlink:href="Img/PASSPORT.jpg"/>
                        </g>
                </svg>
            </div>
            <div class="home_data">
                <h1 class="home_title">Hi, I'm Edward</h1>
                <h3 class="home_subtitle">Fullstack Developer</h3>
                <p class="home_description">
                    High Level experience in web design and development
                    Lorem ipsum dolor sit amet consectetur adipisicing 
                    elit. Sed animi cupiditate veniam, officiis nihil 
                    minima, quae recusandae, odio aperiam sint ratione. 
                    Blanditiis omnis perferendis alias facere pariatur 
                    quas quia! Quidem!
                </p> 
                <a href="#contact" class="button button--flex">
                   Contact Me   <i class="uil uil-message button_icon"></i>
                </a>
            </div>
        </div>
        <div class="home_scroll">
           <a href="#about" class="home_scroll-button button--flex">
                <i class="uil uil-mouse-alt home_scroll-mouse"></i>
                <span class="home_scroll-name">Scroll Down</span>
                    <i class="uil uil-arrow-down home_scroll-arrow"></i>
           </a>
        </div>
    </div>
</section>
<!-- =========================== ABOUT ============================--> 
<section class="about section" id="about">
    <h2 class="section_title">About Me</h2>
    <span class="section_subtitle">My Introduction</span>
    <div class="about_container container grid">
    <img src="Img/passport.jpg" alt="" class="about_img">   
     <div class="about_data">
         <p class="about_description">
             Full Stack Developer, with extensive knowledge and years of experience,
             working in web technologies and UI/UX design, delivering quality work.
         </p>
         <div class="about_info">
             <div>
                 <span class="about_info-title">04+</span>
                 <span class="about_info-name">Years <br> Experience</span>
             </div>

             <div>
                 <span class="about_info-title">10+</span>
                 <span class="about_info-name">Completed <br> Project</span>
             </div>

             <div>
                 <span class="about_info-title">05+</span>
                 <span class="about_info-name">Companies <br> Worked</span>
             </div>
         </div>
         <div class="about_buttons">
             <a download="" href="pdf/IMO.pdf" class="button button--flex">
                Download CV<i class="uil uil-download-alt button_icon"></i>
             </a>
                
         </div>
     </div>
    </div>
</section>
<!-- =========================== SKILL ============================--> 
<section class="skills section" id="skills">
    <h2 class="section_title">Skills</h2>
    <span class="section_subtitle">My technical level</span>

    <div class="skills_container container grid">
        <div>

          <!-- =========================== SKILL 1 ============================-->
            <div class="skills_content skills_open">
                <div class="skills_header">
                    <i class="uil uil-brackets-curly skills_icon"></i>

                    <div>
                        <h1 class="skills_title">Frontend Developer</h1>
                        <span class="skills_subtitle">More than 4 years</span>
                    </div>
                    <i class="uil uil-angle-down skills_arrow"></i>
                </div>
                <div class="skills_list grid">
                     <div class="skills_data">
                         <div class="skills_titles">
                             <h3 class="skills_name">HTML</h3>
                             <span class="skills_number">90%</span>
                         </div>
                         <div class="skills_bar">
                             <span class="skills_percentage skills_html"></span>
                         </div>
                     </div>

                     <div class="skills_data">
                         <div class="skills_titles">
                             <h3 class="skills_name">CSS</h3>
                             <span class="skills_number">80%</span>
                         </div>
                         <div class="skills_bar">
                             <span class="skills_percentage skills_css"></span>
                         </div>
                     </div>

                     <div class="skills_data">
                         <div class="skills_titles">
                             <h3 class="skills_name">JavaScript</h3>
                             <span class="skills_number">60%</span>
                         </div>
                         <div class="skills_bar">
                             <span class="skills_percentage skills_js"></span>
                         </div>
                     </div>

                     <div class="skills_data">
                         <div class="skills_titles">
                             <h3 class="skills_name">Bootstrap</h3>
                             <span class="skills_number">80%</span>
                         </div>
                         <div class="skills_bar">
                             <span class="skills_percentage skills_bs"></span>
                         </div>
                     </div>
                </div>
            </div> 
             <!-- =========================== SKILL 2 ============================-->
            <div class="skills_content skills_close">
                <div class="skills_header">
                    <i class="uil uil-server-network skills_icon"></i>
                    <div>
                        <h1 class="skills_title">Backend Developer</h1>
                        <span class="skills_subtitle">More than 2 years</span>
                    </div>
                    <i class="uil uil-angle-down skills_arrow"></i>
                </div>
                <div class="skills_list grid">
                     <div class="skills_data">
                         <div class="skills_titles">
                             <h3 class="skills_name">PHP</h3>
                             <span class="skills_number">75%</span>
                         </div>
                         <div class="skills_bar">
                             <span class="skills_percentage skills_php"></span>
                         </div>
                     </div>

                     <div class="skills_data">
                         <div class="skills_titles">
                             <h3 class="skills_name">Node JS</h3>
                             <span class="skills_number">50%</span>
                         </div>
                         <div class="skills_bar">
                             <span class="skills_percentage skills_node"></span>
                         </div>
                     </div>

                     <div class="skills_data">
                         <div class="skills_titles">
                             <h3 class="skills_name">C Sharp</h3>
                             <span class="skills_number">50%</span>
                         </div>
                         <div class="skills_bar">
                             <span class="skills_percentage skills_c"></span>
                         </div>
                     </div>

                     <div class="skills_data">
                         <div class="skills_titles">
                             <h3 class="skills_name">Python</h3>
                             <span class="skills_number">60%</span>
                         </div>
                         <div class="skills_bar">
                             <span class="skills_percentage skills_python"></span>
                         </div>
                     </div>
                </div>
            </div> 
            <div>
             <!-- =========================== SKILL 3 ============================-->
             <div class="skills_content skills_close">
                <div class="skills_header">
                    <i class="uil uil-swatchbook skills_icon"></i>
                    <div>
                        <h1 class="skills_title">Design</h1>
                        <span class="skills_subtitle">More than 4 years</span>
                    </div>
                    <i class="uil uil-angle-down skills_arrow"></i>
                </div>
                <div class="skills_list grid">
                     <div class="skills_data">
                         <div class="skills_titles">
                             <h3 class="skills_name">Figma</h3>
                             <span class="skills_number">90%</span>
                         </div>
                         <div class="skills_bar">
                             <span class="skills_percentage skills_figma"></span>
                         </div>
                     </div>

                     <div class="skills_data">
                         <div class="skills_titles">
                             <h3 class="skills_name">Sketch</h3>
                             <span class="skills_number">85%</span>
                         </div>
                         <div class="skills_bar">
                             <span class="skills_percentage skills_sketch"></span>
                         </div>
                     </div>

                     <div class="skills_data">
                         <div class="skills_titles">
                             <h3 class="skills_name">photoshop</h3>
                             <span class="skills_number">90%</span>
                         </div>
                         <div class="skills_bar">
                             <span class="skills_percentage skills_photoshop"></span>
                         </div>
                     </div>
                </div>
             </div>
        </div>
    </div>
</section>

<!-- =========================== QUALIFICATION ============================--> 
<section class="qualification section">
    <h2 class="section_title">Qualification</h2>
    <span class="section_subtitle">My Personal Journey</span>

    <div class="qualification_container container">
        <div class="qualification_tabs">
            <div class="qualification_button button--flex qualification_active" data-target="#education">
                <i class="uil uil-graduation-cap qualification_icon"></i>
                Education 
            </div>
            <div class="qualification_button button--flex" data-target="#work">
                <i class="uil uil-briefcase-alt qualificatiion_icon"></i>
                Work Experience
            </div>
        </div>
        <div class="qualification_sections">
            <!-- =========================== QUALIFICATION CONTENT 1 ============================--> 
            <div class="qualification_content qualification_active" data-content id="education">
                <!-- =========================== QUALIFICATION  1 ============================-->
                <div class="qualification_data">
                    <div>
                        <h3 class="qualification_title">Computer Science</h3>
                        <span class="qualification_subtitle">Unwana, Ebonyi state - Akanu Ibiam Federal Polytechnic</span>
                        <div class="qualification_calender">
                            <i class="uil uil-calendar-alt"></i>
                            2013 - 2018
                        </div>
                    </div>
                    <div>
                        <span class="qualification_rounder"></span>
                        <span class="qualification_line"></span>
                    </div>
                </div>

                <!-- =========================== QUALIFICATION  2 ============================-->
                <div class="qualification_data">
                    <div></div>

                    <div>
                        <span class="qualification_rounder"></span>
                        <span class="qualification_line"></span>
                    </div>

                    <div>
                        <h3 class="qualification_title">Web Development</h3>
                        <span class="qualification_subtitle">Abakaliki, Ebonyi State - St Patrick ICT firm</span>
                        <div class="qualification_calender">
                            <i class="uil uil-calendar-alt"></i>
                            2015 - 2016
                        </div>
                    </div>
                    
                </div>

                <!-- =========================== QUALIFICATION  3 ============================-->
                <div class="qualification_data">
                    <div>
                        <h3 class="qualification_title">Web Design</h3>
                        <span class="qualification_subtitle">Abakaliki, Ebonyi State - St Patrick ICT firm</span>
                        <div class="qualification_calender">
                            <i class="uil uil-calendar-alt"></i>
                            2014 - 2015
                        </div>
                    </div>
                    <div>
                        <span class="qualification_rounder"></span>
                        <span class="qualification_line"></span>
                    </div>
                </div>
                 <!-- =========================== QUALIFICATION  4 ============================-->
                 <div class="qualification_data">
                    <div></div>

                    <div>
                        <span class="qualification_rounder"></span>
                        <!--<span class="qualification_line"></span>-->
                    </div>

                    <div>
                        <h3 class="qualification_title">Python Programming</h3>
                        <span class="qualification_subtitle">Katsina - Institute</span>
                        <div class="qualification_calender">
                            <i class="uil uil-calendar-alt"></i>
                            2020 - 2021
                        </div>
                    </div>
                </div>
            </div>
            <!-- =========================== QUALIFICATION CONTENT 2 ============================--> 
            <div class="qualification_content" data-content id="work">
                <!-- =========================== QUALIFICATION  1 ============================-->
                <div class="qualification_data">
                    <div>
                        <h3 class="qualification_title">Software Enginner</h3>
                        <span class="qualification_subtitle">Microsoft - Peru</span>
                        <div class="qualification_calender">
                            <i class="uil uil-calendar-alt"></i>
                            2016 - 2018
                        </div>
                    </div>
                    <div>
                        <span class="qualification_rounder"></span>
                        <span class="qualification_line"></span>
                    </div>
                </div>

                <!-- =========================== QUALIFICATION  2 ============================-->
                <div class="qualification_data">
                    <div></div>

                    <div>
                        <span class="qualification_rounder"></span>
                        <span class="qualification_line"></span>
                    </div>

                    <div>
                        <h3 class="qualification_title">Frontend Developer</h3>
                        <span class="qualification_subtitle">Apple Inc - Spain</span>
                        <div class="qualification_calender">
                            <i class="uil uil-calendar-alt"></i>
                            2018 - 2020
                        </div>
                    </div>
                    
                </div>

                <!-- =========================== QUALIFICATION  3 ============================-->
                <div class="qualification_data">
                    <div>
                        <h3 class="qualification_title">Ui Designer</h3>
                        <span class="qualification_subtitle">Figma - Spain</span>
                        <div class="qualification_calender">
                            <i class="uil uil-calendar-alt"></i>
                            2014 - 2015
                        </div>
                    </div>
                    <div>
                        <span class="qualification_rounder"></span>
                        <!--<span class="qualification_line"></span>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- =========================== SERVICES ============================--> 
<section class="services section" id="services">
    <h2 class="section_title">Services</h2>
    <span class="section_subtitle">What i offer</span>

    <div class="services_container container grid">
        <!-- =========================== SERVICES 1============================-->
        <div class="services_content">
            <div>
                <i class="uil uil-web-grid services_icon"></i>
                <h3 class="services_title">Ui/Ux <br>Designer</h3>
            </div>

            <span class="button button--flex button--small button--link services_button">
                View More
                <i class="uil uil-arrow-right button_icon"></i> 
            </span>

            <div class="services_modal">
                <div class="services_modal-content">
                    <h4 class="services_modal-title">Ui/Ux <br> Designer</h4>
                    <i class="uil uil-times services_modal-close"></i>

                    <ul class="services_modal-services grid">
                        <li class="services_modal-service">
                            <i class="uil uil-check-circle services_modal-icon"></i>
                            <p>I develop the user interface.</p>
                        </li>

                        <li class="services_modal-service">
                            <i class="uil uil-check-circle services_modal-icon"></i>
                            <p>Web page development</p>
                        </li>

                        <li class="services_modal-service">
                            <i class="uil uil-check-circle services_modal-icon"></i>
                            <p>I create ux element interactions.</p>
                        </li>

                        <li class="services_modal-service">
                            <i class="uil uil-check-circle services_modal-icon"></i>
                            <p>I position your company brand</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- =========================== SERVICES 2============================-->
        <div class="services_content">
            <div>
            <i class="uil uil-arrow services_icon"></i>
                <h3 class="services_title">Frontend <br>Developer</h3>
            </div>

            <span class="button button--flex button--small button--link services_button">
                View More
                <i class="uil uil-arrow-right button_icon"></i> 
            </span>

            <div class="services_modal">
                <div class="services_modal-content">
                    <h4 class="services_modal-title">Frontend <br>Developer</h4>
                    <i class="uil uil-times services_modal-close"></i>

                    <ul class="services_modal-services grid">
                        <li class="services_modal-service">
                            <i class="uil uil-check-circle services_modal-icon"></i>
                            <p>I develop the user interface.</p>
                        </li>

                        <li class="services_modal-service">
                            <i class="uil uil-check-circle services_modal-icon"></i>
                            <p>Web page development</p>
                        </li>

                        <li class="services_modal-service">
                            <i class="uil uil-check-circle services_modal-icon"></i>
                            <p>I create ux element interactions.</p>
                        </li>

                        <li class="services_modal-service">
                            <i class="uil uil-check-circle services_modal-icon"></i>
                            <p>I position your company brand</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- =========================== SERVICES 3============================-->
        <div class="services_content">
            <div>
                <i class="uil uil-pen services_icon"></i>
                <h3 class="services_title">Backend <br>Developer</h3>
            </div>

            <span class="button button--flex button--small button--link services_button">
                View More
                <i class="uil uil-arrow-right button_icon"></i> 
            </span>

            <div class="services_modal">
                <div class="services_modal-content">
                    <h4 class="services_modal-title">Backend <br>Developer</h4>
                    <i class="uil uil-times services_modal-close"></i>

                    <ul class="services_modal-services grid">
                        <li class="services_modal-service">
                            <i class="uil uil-check-circle services_modal-icon"></i>
                            <p>I develop the user interface.</p>
                        </li>

                        <li class="services_modal-service">
                            <i class="uil uil-check-circle services_modal-icon"></i>
                            <p>Web page development</p>
                        </li>

                        <li class="services_modal-service">
                            <i class="uil uil-check-circle services_modal-icon"></i>
                            <p>I create ux element interactions.</p>
                        </li>

                        <li class="services_modal-service">
                            <i class="uil uil-check-circle services_modal-icon"></i>
                            <p>I position your company brand</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- =========================== PORTFOLIO ============================--> 
<section class="portfolio section" id="portfolio">
    <h2 class="section_title">Portfolio</h2>
    <span class="section_subtitle">Most recent work</span>

    <div class="portfolio_container container swiper mySwiper">
        <div class="swiper-wrapper">
           <!-- =========================== PORTFOLIO 1 ============================-->
           <div class="portfolio_content grid swiper-slide">
               <img src="Img/PASSPORT.jpg" alt="" class="portfolio_img">

               <div class="portfolio_data">
                   <h3 class="portfolio_title">Modern Website</h3>
                   <p class="portfolio_description">
                       Website adaptable to all devices, with UI component
                        and animated interactions.</p>
                    <a href="#" class="button button--flex button--small portfolio_button">
                        Demo
                        <i class="uil uil-arrow-right button_icon"></i>
                    </a>
               </div>
           </div> 

              <!-- =========================== PORTFOLIO 2 ============================-->
            <div class="portfolio_content grid swiper-slide">
               <img src="Img/PASSPORT.jpg" alt="" class="portfolio_img">

               <div class="portfolio_data">
                   <h3 class="portfolio_title">Backend Development</h3>
                   <p class="portfolio_description">
                       Website adaptable to all devices, with UI component
                        and animated interactions.</p>
                    <a href="#" class="button button--flex button--small portfolio_button">
                        Demo
                        <i class="uil uil-arrow-right button_icon"></i>
                    </a>
               </div>
           </div> 
           
              <!-- =========================== PORTFOLIO 3 ============================-->
              <div class="portfolio_content grid swiper-slide">
               <img src="Img/PASSPORT.jpg" alt="" class="portfolio_img">

               <div class="portfolio_data">
                   <h3 class="portfolio_title">Online Store</h3>
                   <p class="portfolio_description">
                       Website adaptable to all devices, with UI component
                        and animated interactions.</p>
                    <a href="#" class="button button--flex button--small portfolio_button">
                        Demo
                        <i class="uil uil-arrow-right button_icon"></i>
                    </a>
               </div>
           </div> 
        </div>

        <!-- Add Arrows -->
        <div class="swiper-button-next">
            <i class="uil uil-angle-right-b swiper-portfolio-icon"></i>
        </div>
        <div class="swiper-button-prev">
            <i class="uil uil-angle-left-b swiper-portfolio-icon"></i>
        </div>

        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
    </div>
</section>
<!-- =========================== PROJECT IN MIND ============================--> 
<section class="project section">
    <div class="project_bg">
        <div class="project_container container grid">
            <div class="project_data">
               <h2 class="project_title">You have a new project</h2> 
               <p class="project_description">Contact me now and get 30% discount on your new project.</p>
               <a href="#contact" class="button button--flex button--white">
                   Contact Me <i class="uil uil-message project_icon button_icon"></i>
               </a>
            </div> 

            <img src="Img/PASSPORT.jpg" alt="" class="project_img">
        </div>
    </div>
</section>
<!-- =========================== TESTIMONIAL ============================--> 
<section class="testimonial section">
    <h2 class="section_title">Testimonial</h2>
    <span class="section_subtitle">My client saying</span>

    <div class="testimonial_container container swiper mySwiper">
        <div class="swiper-wrapper">
           <!-- =========================== TESTIMONIAL 1 ============================-->
           <div class="testimonial_content swiper-slide">
               <div class="testimonial_data">
                   <div class="testimonial_header">
                       <img src="Img/PASSPORT.jpg" alt="" class="testimonial_img">

                       <div>
                           <h3 class="testimonial_name">Sara Smith</h3>
                           <span class="testimonial_client">Client</span>
                       </div>
                   </div>

                   <div>
                        <i class="uil uil-star testimonial_icon-star"></i>
                        <i class="uil uil-star testimonial_icon-star"></i>
                        <i class="uil uil-star testimonial_icon-star"></i>
                        <i class="uil uil-star testimonial_icon-star"></i>
                        <i class="uil uil-star testimonial_icon-star"></i>
                   </div>
               </div>

               <p class="testimonial_description">I get a good impression, I carry 
                   out my project with all the possible quality and attention and 
                   support 24 hours a day.</p>
           </div>  

           <!-- =========================== TESTIMONIAL 2 ============================-->
           <div class="testimonial_content swiper-slide">
               <div class="testimonial_data">
                   <div class="testimonial_header">
                       <img src="Img/PASSPORT.jpg" alt="" class="testimonial_img">

                       <div>
                           <h3 class="testimonial_name">Matt Robbins</h3>
                           <span class="testimonial_client">Client</span>
                       </div>
                   </div>

                   <div>
                        <i class="uil uil-star testimonial_icon-star"></i>
                        <i class="uil uil-star testimonial_icon-star"></i>
                        <i class="uil uil-star testimonial_icon-star"></i>
                        <i class="uil uil-star testimonial_icon-star"></i>
                        <i class="uil uil-star testimonial_icon-star"></i>
                   </div>
               </div>

               <p class="testimonial_description">I get a good impression, I carry 
                   out my project with all the possible quality and attention and 
                   support 24 hours a day.</p>
           </div>

           <!-- =========================== TESTIMONIAL 3 ============================-->
           <div class="testimonial_content swiper-slide">
               <div class="testimonial_data">
                   <div class="testimonial_header">
                       <img src="Img/PASSPORT.jpg" alt="" class="testimonial_img">

                       <div>
                           <h3 class="testimonial_name">Raul Harrison</h3>
                           <span class="testimonial_client">Client</span>
                       </div>
                   </div>

                   <div>
                        <i class="uil uil-star testimonial_icon-star"></i>
                        <i class="uil uil-star testimonial_icon-star"></i>
                        <i class="uil uil-star testimonial_icon-star"></i>
                        <i class="uil uil-star testimonial_icon-star"></i>
                        <i class="uil uil-star testimonial_icon-star"></i>
                   </div>
               </div>

               <p class="testimonial_description">I get a good impression, I carry 
                   out my project with all the possible quality and attention and 
                   support 24 hours a day.</p>
           </div>
        </div>

        <!-- === Add Pagination ==--> 
        <div class="swiper-pagination swiper-pagination-testimonial"></div>
    </div>
</section>
<!-- =========================== CONTACT ME ============================--> 
<section class="contact section" id="contact">
    <h2 class="section_title">Contact Me</h2>
    <span class="section_subtitle">Get in touch</span>

    <div class="contact_container container grid">
        <div>
           <div class="contact_information">
                <i class="uil uil-phone contact_icon"></i>

                <div>
                    <h3 class="contact_title">Call Me</h3>
                    <span class="contact_subtitle">+234-81-3432-6791 </span>
                </div>
           </div> 
           
           <div class="contact_information">
                <i class="uil uil-envelope contact_icon"></i>

                <div>
                    <h3 class="contact_title">Email</h3>
                    <span class="contact_subtitle">imoebereedward2017@gmail.com</span>
                </div>
           </div>

           <div class="contact_information">
                <i class="uil uil-map-marker contact_icon"></i>

                <div>
                    <h3 class="contact_title">Location</h3>
                    <span class="contact_subtitle">Katsina - Makera Estate, 15 mukan</span>
                </div>
           </div>
        </div>

        <form action="" method="" class="contact_form grid">
            <div class="contact_inputs grid">
                <div class="contact_content">
                    <label for="" class="contact_label">Name</label>
                    <input type="text" class="contact_input">
                </div>

                <div class="contact_content">
                    <label for="" class="contact_label">Email</label>
                    <input type="email" class="contact_input">
                </div>
            </div>
            <div class="contact_content">
                    <label for="" class="contact_label">Project</label>
                    <input type="text" class="contact_input">
            </div>

            <div class="contact_content">
                    <label for="" class="contact_label">Message</label>
                    <textarea name="" id="" cols="0" rows="7" class="contact_input"></textarea>
            </div>

            <div>
                <a href="#" class="button button--flex">
                    Send Message
                    <i class="uil uil-message button_icon"></i>
                </a>
            </div>
        </form>
    </div>
</section>
</main>

<!-- =========================== FOOTER ============================--> 
<footer class="footer">
    <div class="footer_bg">
        <div class="footer_container container grid">
            <div>
                <h1 class="footer_title">Edward</h1>
                <span class="footer_subtitle">Full Stack Developer</span>
            </div>

            <ul class="footer_links">
                 <li>
                     <a href="#services" class="footer_link">Services</a>
                 </li>
                 <li>
                     <a href="#portfolio" class="footer_link">Portfolio</a>
                 </li>
                 <li>
                     <a href="#contact" class="footer_link">Contact Me</a>
                 </li>
            </ul>

            <div class="footer_socials">
                <a href="https://www.faacebook.com/" target="_blank" class="footer_social">
                    <i class="uil uil-facebook-f"></i>
                </a>

                <a href="https://www.instagram.com/" target="_blank" class="footer_social">
                    <i class="uil uil-instagram"></i>
                </a>

                <a href="https://twitter.com/" target="_blank" class="footer_social">
                    <i class="uil uil-twitter-alt"></i>
                </a>
            </div>
        </div>

        <p class="footer_copy">&#169; ImoCode. All right reserved</p>
    </div>
</footer>

<!-- =========================== SCROLL TOP ============================--> 
<a href="#" class="scrollup" id="scroll-up">
    <i class="uil uil-arrow-up scrollup_icon"></i>
</a>
<!-- =========================== SWIPER JS ============================--> 
<script src="js/swiper-bundle.min.js"> </script>
<!-- =========================== MAIN JS ============================--> 
<script src="js/main.js"></script>
</body>
</html>