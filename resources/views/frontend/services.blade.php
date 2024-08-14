@extends('frontend.layouts.main')

@section('main-container')

    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <h2>Our Services</h2>
                            {{-- <p>Home<span>/</span>Courses</p> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->

        <!--================ Start Robotics devlopmrnt =================-->
        <section class="course_details_area section_padding " id="Robotics" >
            <div class="container border">
                <div class="row">
                    <div class="col-xl-12 col-md-6 col-sm-4 text-center mb-5 text-bold ">
                        <h1>Robotics</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-7 course_details_left">
                        <div class="main_image">
                            <img class="img-fluid" src="{{url('frontend/img/roboticsCopy.jpg')}}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-5 right-contents">
                        
                            <h4 class="title">Robotics Development Kits</h4>
                            <div class="content">
                                We design and deliver state-of-the-art robotics kits that cater to various applications and industries, ensuring your projects are equipped with the latest technology and capabilities.
                                <br> <br>
                                Custom Robotics Solutions: Our team of experts develops bespoke robotics solutions that integrate seamlessly with your existing systems, enhancing productivity and efficiency.
                                <br> <br>
                                Training Programs: Committed to nurturing the next generation of robotics experts, we offer comprehensive training programs covering all aspects of robotics development, from basic principles to advanced applications.
                            </div>
                    </div>
                </div>
            </div>
        </section>
    
    
        <!--================ End App Development =================-->
        <section class="course_details_area section_padding" id="IoT">
            <div class="container border">
                <div class="row">
                    <div class="col-xl-12 col-md-6 col-sm-4 text-center mb-5 text-bold ">
                        <h1>Internet Of Thinks</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-5 right-contents">
                            <h4 class="title" >IoT Development</h4>
                            <div class="content">
                                We offer comprehensive IoT development services, creating smart devices and systems that connect seamlessly and function optimally. Our solutions cover everything from initial concept and prototyping to deployment and maintenance.
                                <br><br>
                                Custom IoT Solutions: Our team of experts crafts bespoke IoT solutions that integrate smoothly with your existing infrastructure, enhancing operational efficiency and enabling real-time data insights.
                                <br><br>
                                Training Programs: Dedicated to fostering the next generation of IoT professionals, we provide extensive training programs. Our courses cover all aspects of IoT, from basic concepts to advanced implementation strategies.
                            
                            </div>
                    </div>
                    <div class="col-lg-7 course_details_left">
                        <div class="main_image">
                            <img class="img-fluid" src="{{url('frontend/img/iot - Copy.jpg')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>

            <!--================ Start AI/ML devlopmrnt =================-->
    <section class="course_details_area section_padding" id="AIML">
        <div class="container border">
            <div class="row">
                <div class="col-xl-12 col-md-6 col-sm-4 text-center mb-5 text-bold ">
                    <h1>AI ML</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7 course_details_left">
                    <div class="main_image">
                        <img class="img-fluid" src="{{url('frontend/img/ai_mlCopy.jpg')}}" alt="">
                    </div>
                </div>
                <div class="col-lg-5 right-contents">
                    
                        <h4 class="title" >Artificial Inteligence</h4>
                        <div class="content">
                            Artificial Inteligence and Machine Learning, We offer compreh   ensive AI and ML development services, crafting intelligent systems and algorithms that enhance decision-making, automate tasks, and provide actionable insights.
                            <br> <br>
                            Custom AI Solutions: Our team of experts creates bespoke AI solutions that seamlessly integrate with your existing infrastructure, improving efficiency and delivering competitive advantages.
                            <br> <br>
                            Training Programs: Committed to cultivating the next generation of AI professionals, we provide extensive training programs. Our courses cover the full spectrum of AI and ML, from foundational principles to advanced techniques and applications.
                        </div>
                </div>
            </div>
        </div>
    </section>


    <!--================ End App Development =================-->
    <section class="course_details_area section_padding" id="Printer3D">
        <div class="container border" id="Printer3D">
            <div class="row">
                <div class="col-xl-12 col-md-6 col-sm-4 text-center mb-5 text-bold ">
                    <h1>3D Printer</h1>
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-5 right-contents">
                        <h4 class="title" >3D Printing Development</h4>
                        <div class="content">
                            We offer comprehensive 3D printing services, from prototyping to full-scale production. Our expertise ensures high-quality, accurate, and innovative 3D printed solutions that meet your exact specifications.
                            <br> <br>
                            Custom 3D Solutions: Our team of specialists develops bespoke 3D printing solutions that integrate seamlessly with your existing processes, enhancing creativity, efficiency, and product development.
                            <br> <br>
                            Training Programs: Dedicated to nurturing the next generation of 3D printing experts, we provide extensive training programs. Our courses cover the entire spectrum of 3D printing, from basic concepts to advanced applications and techniques.
                        </div>
                </div>
                <div class="col-lg-7 course_details_left">
                    <div class="main_image">
                        <img class="img-fluid" src="{{url('frontend/img/3D_PrinterCopy.jpg')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!--================ Start Web devlopmrnt =================-->
    <section class="course_details_area section_padding" id="webdev">
        <div class="container border">
            {{-- <div class="row justify-content-center">
                <div class="col-xl-5">
                    <div class="section_tittle text-center">
                        <h2>Courses</h2>
                    </div>
                </div>
            </div> --}}

            <div class="row">
                <div class="col-xl-12 col-md-6 col-sm-4 text-center mb-5 text-bold ">
                    <h1>Web Development</h1>
                </div>
            </div>
            <div class="row" >
                <div class="col-lg-7 course_details_left">
                    <div class="main_image">
                        <img class="img-fluid" src="{{url('frontend/img/web_devCopy.jpg')}}" alt="">
                    </div>
                </div>
                <div class="col-lg-5 right-contents">
                    
                        <h4 class="title" >Websites</h4>
                        <div class="content">
                             We offer comprehensive web development services, including dynamic websites, e-commerce platforms, and enterprise-level applications, using the latest technologies and frameworks.
                            <br>
                            <br>
                            Custom Software Development: Our custom software solutions are designed to address specific business challenges, integrating seamlessly with existing processes to enhance efficiency and productivity.
                            <br>  
                            <br>       
                            Training and Development: Committed to nurturing the next generation of tech talent, we provide training programs covering coding, software development, and project management, catering to all skill levels.
                        </div>
                </div>
            </div>
        </div>
    </section>


    <!--================ End App Development =================-->
    <section class="course_details_area section_padding" id="appdev">
        <div class="container border">
            <div class="row">
                <div class="col-xl-12 col-md-6 col-sm-4 text-center mb-5 text-bold ">
                    <h1>App Development</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-5 right-contents">
                        <h4 class="title" id="appdev">Mobile App</h4>
                        <div class="content">
                         We provide comprehensive app development services, covering everything from initial concept to deployment and maintenance. Our expertise spans both iOS and Android platforms, ensuring your app reaches the widest possible audience with a seamless, high-quality user experience.
                             <br>
                            Custom Software Solutions: Understanding that every business is unique, we develop bespoke software solutions that integrate smoothly with your existing systems, enhancing efficiency and productivity.
                            <br><br>
                            Training Programs: Beyond our development services, we are dedicated to fostering the next generation of tech talent. Our training programs cover a wide range of topics, including coding, app development, and project management, designed for beginners to advanced professionals.    
                        </div>
                </div>
                <div class="col-lg-7 course_details_left">
                    <div class="main_image">
                        <img class="img-fluid" src="{{url('frontend/img/app_devCopy.jpg')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--::review_part start::-->
    {{-- <section class="special_cource padding_top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5">
                    <div class="section_tittle text-center">
                        <p>popular courses</p>
                        <h2>Special Courses</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-lg-4">
                    <div class="single_special_cource">
                        <img src="img/special_cource_1.png" class="special_img" alt="">
                        <div class="special_cource_text">
                            <a href="course-details.html" class="btn_4">Web Development</a>
                            <h4>$130.00</h4>
                            <a href="course-details.html">
                                <h3>Web Development</h3>
                            </a>
                            <p>Which whose darkness saying were life unto fish wherein all fish of together called</p>
                            <div class="author_info">
                                <div class="author_img">
                                    <img src="img/author/author_1.png" alt="">
                                    <div class="author_info_text">
                                        <p>Conduct by:</p>
                                        <h5><a href="#">James Well</a></h5>
                                    </div>
                                </div>
                                <div class="author_rating">
                                    <div class="rating">
                                        <a href="#"><img src="img/icon/color_star.svg" alt=""></a>
                                        <a href="#"><img src="img/icon/color_star.svg" alt=""></a>
                                        <a href="#"><img src="img/icon/color_star.svg" alt=""></a>
                                        <a href="#"><img src="img/icon/color_star.svg" alt=""></a>
                                        <a href="#"><img src="img/icon/star.svg" alt=""></a>
                                    </div>
                                    <p>3.8 Ratings</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="single_special_cource">
                        <img src="img/special_cource_2.png" class="special_img" alt="">
                        <div class="special_cource_text">
                            <a href="course-details.html" class="btn_4">design</a>
                            <h4>$160.00</h4>
                            <a href="course-details.html">
                                <h3>Web UX/UI Design </h3>
                            </a>
                            <p>Which whose darkness saying were life unto fish wherein all fish of together called</p>
                            <div class="author_info">
                                <div class="author_img">
                                    <img src="img/author/author_2.png" alt="">
                                    <div class="author_info_text">
                                        <p>Conduct by:</p>
                                        <h5><a href="#">James Well</a></h5>
                                    </div>
                                </div>
                                <div class="author_rating">
                                    <div class="rating">
                                        <a href="#"><img src="img/icon/color_star.svg" alt=""></a>
                                        <a href="#"><img src="img/icon/color_star.svg" alt=""></a>
                                        <a href="#"><img src="img/icon/color_star.svg" alt=""></a>
                                        <a href="#"><img src="img/icon/color_star.svg" alt=""></a>
                                        <a href="#"><img src="img/icon/star.svg" alt=""></a>
                                    </div>
                                    <p>3.8 Ratings</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="single_special_cource">
                        <img src="img/special_cource_3.png" class="special_img" alt="">
                        <div class="special_cource_text">
                            <a href="course-details.html" class="btn_4">Wordpress</a>
                            <h4>$140.00</h4>
                            <a href="course-details.html">
                                <h3>Wordpress Development</h3>
                            </a>
                            <p>Which whose darkness saying were life unto fish wherein all fish of together called</p>
                            <div class="author_info">
                                <div class="author_img">
                                    <img src="img/author/author_3.png" alt="">
                                    <div class="author_info_text">
                                        <p>Conduct by:</p>
                                        <h5><a href="#">James Well</a></h5>
                                    </div>
                                </div>
                                <div class="author_rating">
                                    <div class="rating">
                                        <a href="#"><img src="img/icon/color_star.svg" alt=""></a>
                                        <a href="#"><img src="img/icon/color_star.svg" alt=""></a>
                                        <a href="#"><img src="img/icon/color_star.svg" alt=""></a>
                                        <a href="#"><img src="img/icon/color_star.svg" alt=""></a>
                                        <a href="#"><img src="img/icon/star.svg" alt=""></a>
                                    </div>
                                    <p>3.8 Ratings</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!--::blog_part end::-->

    <!--::review_part start::-->
    <section class="testimonial_part section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5">
                    <div class="section_tittle text-center">
                        {{-- <p>tesimonials</p> --}}
                        <h2>Our Clients</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="textimonial_iner owl-carousel">
                        <div class="testimonial_slider">
                            <div class="row">
                                <div class="col-lg-8 col-xl-4 col-sm-8 align-self-center">
                                    <div class="testimonial_slider_text">
                                        {{-- <p>Behold place was a multiply creeping creature his domin to thiren open void
                                            hath herb divided divide creepeth living shall i call beginning
                                            third sea itself set</p> --}}
                                        {{-- <h4>Michel Hashale</h4> --}}
                                        <h5>XYZ</h5>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-2 col-sm-4">
                                    <div class="testimonial_slider_img">
                                        <img src="frontend/img/quote.png" alt="#">
                                    </div>
                                </div>
                                <div class="col-xl-4 d-none d-xl-block">
                                    <div class="testimonial_slider_text">
                                        {{-- <p>Behold place was a multiply creeping creature his domin to thiren open void
                                            hath herb divided divide creepeth living shall i call beginning
                                            third sea itself set</p> --}}
                                        {{-- <h4>Michel Hashale</h4> --}}
                                        <h5>XYZ</h5>
                                    </div>
                                </div>
                                <div class="col-xl-2 d-none d-xl-block">
                                    <div class="testimonial_slider_img">
                                        <img src="img/testimonial_img_1.png" alt="#">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial_slider">
                            <div class="row">
                                <div class="col-lg-8 col-xl-4 col-sm-8 align-self-center">
                                    <div class="testimonial_slider_text">
                                        {{-- <p>Behold place was a multiply creeping creature his domin to thiren open void
                                            hath herb divided divide creepeth living shall i call beginning
                                            third sea itself set</p> --}}
                                        {{-- <h4>Michel Hashale</h4> --}}
                                        <h5> XYZC</h5>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-2 col-sm-4">
                                    <div class="testimonial_slider_img">
                                        <img src="img/testimonial_img_1.png" alt="#">
                                    </div>
                                </div>
                                <div class="col-xl-4 d-none d-xl-block">
                                    <div class="testimonial_slider_text">
                                        {{-- <p>Behold place was a multiply creeping creature his domin to thiren open void
                                            hath herb divided divide creepeth living shall i call beginning
                                            third sea itself set</p> --}}
                                        {{-- <h4>Michel Hashale</h4> --}}
                                        <h5> XYZDC</h5>
                                    </div>
                                </div>
                                <div class="col-xl-2 d-none d-xl-block">
                                    <div class="testimonial_slider_img">
                                        <img src="img/testimonial_img_1.png" alt="#">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial_slider">
                            <div class="row">
                                <div class="col-lg-8 col-xl-4 col-sm-8 align-self-center">
                                    <div class="testimonial_slider_text">
                                        {{-- <p>Behold place was a multiply creeping creature his domin to thiren open void
                                            hath herb divided divide creepeth living shall i call beginning
                                            third sea itself set</p> --}}
                                        {{-- <h4>Michel Hashale</h4> --}}
                                        <h5> XYZSDC</h5>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-2 col-sm-4">
                                    <div class="testimonial_slider_img">
                                        <img src="img/testimonial_img_1.png" alt="#">
                                    </div>
                                </div>
                                <div class="col-xl-4 d-none d-xl-block">
                                    <div class="testimonial_slider_text">
                                        {{-- <p>Behold place was a multiply creeping creature his domin to thiren open void
                                            hath herb divided divide creepeth living shall i call beginning
                                            third sea itself set</p> --}}
                                        {{-- <h4>Michel Hashale</h4> --}}
                                        <h5>NSXYZDC</h5>
                                    </div>
                                </div>
                                <div class="col-xl-2 d-none d-xl-block">
                                    <div class="testimonial_slider_img">
                                        <img src="img/testimonial_img_1.png" alt="#">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>



    
 {{-- Our mission --}}

 <div class="row">
    <div class="col-xl-12 col-md-6 col-sm-4 text-center mb-3 text-bold ">
        <h2>Our Mission</h2>
    </div>
</div>

    <section class="mission mission_bg">
        <div class="container">
            
            <div class="row">
                <div class="col-lg-12 col-md-6 col-sm-4">
                    <div class="mission_iner text-center">
                        <div class="mission_iner_item">
                                <p>Our mission is to revolutionize education by empowering students with cutting-edge 
                                    skills in AI, ML, robotics, IoT, and 3D printing. We strive to create an engaging and 
                                    innovative learning environment that inspires creativity and critical thinking. By providing 
                                    hands-on projects and comprehensive training, we aim to equip students with the knowledge and 
                                    experience needed to excel in the technology-driven world. We are committed to fostering a 
                                    culture of continuous learning and development, ensuring that students are well-prepared for 
                                    future challenges and opportunities. Join us in shaping the future of education through 
                                    technology and innovation.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- footer part start-->
   @endsection