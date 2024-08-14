@extends('frontend.layouts.main')


@section('main-container')

    <!-- banner part start-->
    <section class="banner_part">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-xl-6">
                    <div class="banner_text">
                        <div class="banner_text_iner">
                            <h5>Learn Young Grow Young</h5>
                            <h1>Leading Innovators Educational Tech, AI and ML</h1>
                            <p>MahadhyutaEdTech, a leader in technology innovation focused on AI and ML projects for the education sector. Our solutions empower students with cutting-edge tools,
                                 enhancing learning experiences and outcomes. Join us in shaping the future of education through technology and innovation.</p>
                            {{-- <p>We specialize in cutting-edge AI and ML solutions for the education sector, empowering students with 
                                advanced technology to enhance learning and innovation.</p> --}}
                            {{-- <a href="#" class="btn_1">View Course </a>
                            <a href="#" class="btn_2">Get Started </a> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner part start-->

    <!-- feature_part start-->
<section class="feature_part">
    <div class="container">
        <div class="col-sm-12 col-xl-12 align-self-center">
            <div class="row justify-content-center">
                <div class="col-xl-5">
                    <div class="section_tittle text-center">
                        <h2>Our Approach</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
   
    <section class="feature_part">
        <div class="container">
            <div class="row">
                
                <div class="col-sm-6 col-xl-3">
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <span class="single_feature_icon"><i class="ti-book"></i></span>
                            <h4>Learning Experiences</h4>
                            <p>Develop interactive and immersive AI and ML projects that make learning fun and engaging.
                                Use gamification elements to keep students motivated and interested.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <span class="single_feature_icon"><i class="ti-wand"></i></span>
                            <h4> Hands-On Practice</h4>
                            <p>Provide practical, hands-on projects that allow students to apply theoretical knowledge.
                                Offer step-by-step guides and tutorials to help students build their own AI and ML models.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="single_feature">
                        <div class="single_feature_part single_feature_part_2">
                            <span class="single_service_icon style_icon"><i class="ti-world"></i></span>
                            <h4>Communities</h4>
                            <p>Encourage collaboration through online forums, group projects, and peer reviews. Build a strong online community where students can share ideas, ask questions, and support each.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="single_feature">
                        <div class="single_feature_part single_feature_part_2">
                            <span class="single_service_icon style_icon"><i class="ti-light-bulb"></i></span>
                            <h4>Real-World App</h4>
                            <p>Design projects that solve real-world problems, making learning relevant and impactful.
                                Highlight how AI and ML can be used to address current challenges in various fields.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- upcoming_event part start-->

 

    <!-- member_counter counter start -->
    <section class="member_counter">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="single_member_counter">
                        <span class="counter">100</span>
                        <h4>All Teachers</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_member_counter">
                        <span class="counter">860</span>
                        <h4> All Students</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_member_counter">
                        <span class="counter">500</span>
                        <h4>Online Students</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_member_counter">
                        <span class="counter">360</span>
                        <h4>Ofline Students</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- member_counter counter end -->

    <!--::review_part start::-->
    <section class="special_cource padding_top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5">
                    <div class="section_tittle text-center">
                        <h2>Our Service</h2>
                    </div>
                </div>
            </div>
            <div class="row">
               
                <div class="col-sm-6 col-lg-4">
                    <div class="single_special_cource">
                        <img src="{{ url('frontend/img/robotics.jpg')}}" class="special_img" alt="">
                        <div class="special_cource_text">
                            <a href="#" onclick="Robotics()" class="btn_4">Robotics</a>
                            {{-- <h4>$140.00</h4> --}}
                            <a href="#">  <h3>Robotics Development kit</h3> </a> 
                            <p>We create Robotics Development Kit projects, delivering innovative projects, offering kits and training for various client needs.</p>
                            {{-- <div class="author_info">
                                <div class="author_img">
                                    <img src="{{ url('frontend/img/author/author_3.png')}}" alt="">
                                    <div class="author_info_text">
                                        <p>Conduct by:</p>
                                        <h5><a href="#">James Well</a></h5>
                                    </div>
                                </div>
                                <div class="author_rating">
                                    <div class="rating">
                                        <a href="#"><img src="{{ url('frontend/img/icon/color_star.svg')}}" alt=""></a>
                                        <a href="#"><img src="{{ url('frontend/img/icon/color_star.svg')}}" alt=""></a>
                                        <a href="#"><img src="{{ url('frontend/img/icon/color_star.svg')}}" alt=""></a>
                                        <a href="#"><img src="{{ url('frontend/img/icon/color_star.svg')}}" alt=""></a>
                                        <a href="#"><img src="{{ url('frontend/img/icon/star.svg')}}" alt=""></a>
                                    </div>
                                    <p>3.8 Ratings</p>
                                </div>
                            </div> --}}
                        </div>

                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="single_special_cource">
                        <img src="{{ url('frontend/img/iot.jpg')}}" class="special_img" alt="">
                        <div class="special_cource_text">
                            <a href="#" onclick="IoT()" class="btn_4">Internet of Think</a>
                            {{-- <h4>$130.00</h4> --}}
                            <a href="course-details.html"><h3>IoT</h3></a>
                            <p>We specialize in Internet of Things projects, offering innovative solutions, kits, and training for diverse student/client needs, equipments.</p>
                            {{-- <div class="author_info">
                                <div class="author_img">
                                    <img src="{{ url('frontend/img/author/author_1.png')}}" alt="">
                                    <div class="author_info_text">
                                        <p>Conduct by:</p>
                                        <h5><a href="#">James Well</a></h5>
                                    </div>
                                </div>
                                <div class="author_rating">
                                    <div class="rating">
                                        <a href="#"><img src="{{ url('frontend/img/icon/color_star.svg')}}" alt=""></a>
                                        <a href="#"><img src="{{ url('frontend/img/icon/color_star.svg')}}" alt=""></a>
                                        <a href="#"><img src="{{ url('frontend/img/icon/color_star.svg')}}" alt=""></a>
                                        <a href="#"><img src="{{ url('frontend/img/icon/color_star.svg')}}" alt=""></a>
                                        <a href="#"><img src="{{ url('frontend/img/icon/star.svg')}}" alt=""></a>
                                    </div>
                                    <p>3.8 Ratings</p>
                                </div>
                            </div> --}}
                        </div>

                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="single_special_cource">
                        <img src="{{ url('frontend/img/ai_ml.jpg')}}" class="special_img" alt="">
                        <div class="special_cource_text">
                            <a href="#" onclick="AIML()" class="btn_4">Artificial Inteligence</a>
                            {{-- <h4>$160.00</h4> --}}
                            <a href="#"> <h3>Learn AI/ML </h3></a>
                            <p>We deliver AI/ML projects, offering advanced solutions, kits, and comprehensive training tailored to student/client needs.</p>
                            {{-- <div class="author_info">
                                <div class="author_img">
                                    <img src="{{ url('frontend/img/author/author_2.png')}}" alt="">
                                    <div class="author_info_text">
                                        <p>Conduct by:</p>
                                        <h5><a href="#">James Well</a></h5>
                                    </div>
                                </div>
                                <div class="author_rating">
                                    <div class="rating">
                                        <a href="#"><img src="{{ url('frontend/img/icon/color_star.svg')}}" alt=""></a>
                                        <a href="#"><img src="{{ url('frontend/img/icon/color_star.svg')}}" alt=""></a>
                                        <a href="#"><img src="{{ url('frontend/img/icon/color_star.svg')}}" alt=""></a>
                                        <a href="#"><img src="{{ url('frontend/img/icon/color_star.svg')}}" alt=""></a>
                                        <a href="#"><img src="{{ url('frontend/img/icon/star.svg')}}" alt=""></a>
                                    </div>
                                    <p>3.8 Ratings</p>
                                </div>
                            </div> --}}
                        </div>

                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="single_special_cource">
                        <img src="{{ url('frontend/img/3D_Printer.jpg')}}" class="special_img" alt="">
                        <div class="special_cource_text">
                            <a href="#" onclick="Printer3D()" class="btn_4">3D Printer</a>
                            {{-- <h4>$140.00</h4> --}}
                            <a href="course-details.html">  <h3>3D Model Design</h3> </a> 
                            <p>We create innovative 3D printing solutions, offering advanced printers, kits, and training for diverse student/client needs.</p>
                            {{-- <div class="author_info">
                                <div class="author_img">
                                    <img src="{{ url('frontend/img/author/author_3.png')}}" alt="">
                                    <div class="author_info_text">
                                        <p>Conduct by:</p>
                                        <h5><a href="#">James Well</a></h5>
                                    </div>
                                </div>
                                <div class="author_rating">
                                    <div class="rating">
                                        <a href="#"><img src="{{ url('frontend/img/icon/color_star.svg')}}" alt=""></a>
                                        <a href="#"><img src="{{ url('frontend/img/icon/color_star.svg')}}" alt=""></a>
                                        <a href="#"><img src="{{ url('frontend/img/icon/color_star.svg')}}" alt=""></a>
                                        <a href="#"><img src="{{ url('frontend/img/icon/color_star.svg')}}" alt=""></a>
                                        <a href="#"><img src="{{ url('frontend/img/icon/star.svg')}}" alt=""></a>
                                    </div>
                                    <p>3.8 Ratings</p>
                                </div>
                            </div> --}}
                        </div>

                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="single_special_cource">
                        <img src="{{ url('frontend/img/web_dev.jpg')}}" class="special_img" alt="">
                        <div class="special_cource_text">
                            <a href="#" onclick="webDev()" class="btn_4">Web Development</a>
                            {{-- <h4>$130.00</h4> --}}
                            <a href="#"><h3>Web Design</h3></a>
                            <p>We create innovative web development projects, empowering clients with cutting-edge technology solutions  UX/UI design.</p>
                            {{-- <div class="author_info">
                                <div class="author_img">
                                    <img src="{{ url('frontend/img/author/author_1.png')}}" alt="">
                                    <div class="author_info_text">
                                        <p>Conduct by:</p>
                                        <h5><a href="#">James Well</a></h5>
                                    </div>
                                </div>
                                <div class="author_rating">
                                    <div class="rating">
                                        <a href="#"><img src="{{ url('frontend/img/icon/color_star.svg')}}" alt=""></a>
                                        <a href="#"><img src="{{ url('frontend/img/icon/color_star.svg')}}" alt=""></a>
                                        <a href="#"><img src="{{ url('frontend/img/icon/color_star.svg')}}" alt=""></a>
                                        <a href="#"><img src="{{ url('frontend/img/icon/color_star.svg')}}" alt=""></a>
                                        <a href="#"><img src="{{ url('frontend/img/icon/star.svg')}}" alt=""></a>
                                    </div>
                                    <p>3.8 Ratings</p>
                                </div>
                            </div> --}}
                        </div>

                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="single_special_cource">
                        <img src="{{ url('frontend/img/app_dev.jpg')}}" class="special_img" alt="">
                        <div class="special_cource_text">
                            <a href="#" onclick="appDev()" class="btn_4">App Development</a>
                            {{-- <h4>$160.00</h4> --}}
                            <a href="course-details.html"> <h3>App Design </h3></a>
                            <p>We develop innovative app projects, delivering cutting-edge solutions for clients across various fields UX/UI design.</p>
                            {{-- <div class="author_info">
                                <div class="author_img">
                                    <img src="{{ url('frontend/img/author/author_2.png')}}" alt="">
                                    <div class="author_info_text">
                                        <p>Conduct by:</p>
                                        <h5><a href="#">James Well</a></h5>
                                    </div>
                                </div>
                                <div class="author_rating">
                                    <div class="rating">
                                        <a href="#"><img src="{{ url('frontend/img/icon/color_star.svg')}}" alt=""></a>
                                        <a href="#"><img src="{{ url('frontend/img/icon/color_star.svg')}}" alt=""></a>
                                        <a href="#"><img src="{{ url('frontend/img/icon/color_star.svg')}}" alt=""></a>
                                        <a href="#"><img src="{{ url('frontend/img/icon/color_star.svg')}}" alt=""></a>
                                        <a href="#"><img src="{{ url('frontend/img/icon/star.svg')}}" alt=""></a>
                                    </div>
                                    <p>3.8 Ratings</p>
                                </div>
                            </div> --}}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--::blog_part end::-->

    <!-- learning part start-->
    <section class="advance_feature learning_part">
        <div class="container">
            <div class="row align-items-sm-center align-items-xl-stretch">
                <div class="col-md-6 col-lg-6">
                    <div class="learning_member_text">
                        <h5>Our feature</h5>
                        <h2>Why Choose Us?</h2>
                        <p>With years of experience and a team of highly skilled professionals, we have the expertise to handle projects of any size and complexity. <br>
                            With a team of highly skilled professionals and a client-centric approach, we deliver 
                            solutions that are technically sound and aligned with your business goals. Partner with 
                            MahadhyutaEdTech to transform your vision into reality and drive success in the digital landscape. 
                            Contact us today to discuss your project requirements.</p>
                        <div class="row">
                            <div class="col-sm-6 col-md-12 col-lg-6">
                                <div class="learning_member_text_iner">
                                    <span class="ti-pencil-alt"></span>
                                    <h4>Innovative Solutions</h4>
                                    <p>We are passionate about technology and innovation. Our team stays abreast of the latest trends and advancements 
                                        in the industry, incorporating them into our projects to provide cutting-edge solutions.</p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-12 col-lg-6">
                                <div class="learning_member_text_iner">
                                    <span class="ti-stamp"></span>
                                    <h4>Well trained trainer</h4>
                                    <p>Expeiance dedicated trainer deliver solutions that are not only technically sound but also aligned with your business goals.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="learning_img">
                        <img src="{{ url('frontend/img/advance_feature_img.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- learning part end-->

    <!--::review_part start::-->
    {{-- <section class="testimonial_part">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-xl-5">
                    <div class="section_tittle text-center">
                        <p>tesimonials</p>
                        <h2>Happy Students</h2>
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
                                        <p>Behold place was a multiply creeping creature his domin to thiren open void
                                            hath herb divided divide creepeth living shall i call beginning
                                            third sea itself set</p>
                                        <h4>Michel Hashale</h4>
                                        <h5> Sr. Web designer</h5>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-2 col-sm-4">
                                    <div class="testimonial_slider_img">
                                        <img src="{{ url('frontend/img/testimonial_img_1.png')}}" alt="#">
                                    </div>
                                </div>
                                <div class="col-xl-4 d-none d-xl-block">
                                    <div class="testimonial_slider_text">
                                        <p>Behold place was a multiply creeping creature his domin to thiren open void
                                            hath herb divided divide creepeth living shall i call beginning
                                            third sea itself set</p>
                                        <h4>Michel Hashale</h4>
                                        <h5> Sr. Web designer</h5>
                                    </div>
                                </div>
                                <div class="col-xl-2 d-none d-xl-block">
                                    <div class="testimonial_slider_img">
                                        <img src="{{ url('frontend/img/testimonial_img_1.png')}}" alt="#">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial_slider">
                            <div class="row">
                                <div class="col-lg-8 col-xl-4 col-sm-8 align-self-center">
                                    <div class="testimonial_slider_text">
                                        <p>Behold place was a multiply creeping creature his domin to thiren open void
                                            hath herb divided divide creepeth living shall i call beginning
                                            third sea itself set</p>
                                        <h4>Michel Hashale</h4>
                                        <h5> Sr. Web designer</h5>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-2 col-sm-4">
                                    <div class="testimonial_slider_img">
                                        <img src="{{ url('frontend/img/testimonial_img_2.png')}}" alt="#">
                                    </div>
                                </div>
                                <div class="col-xl-4 d-none d-xl-block">
                                    <div class="testimonial_slider_text">
                                        <p>Behold place was a multiply creeping creature his domin to thiren open void
                                            hath herb divided divide creepeth living shall i call beginning
                                            third sea itself set</p>
                                        <h4>Michel Hashale</h4>
                                        <h5> Sr. Web designer</h5>
                                    </div>
                                </div>
                                <div class="col-xl-2 d-none d-xl-block">
                                    <div class="testimonial_slider_img">
                                        <img src="{{ url('frontend/img/testimonial_img_1.png')}}" alt="#">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial_slider">
                            <div class="row">
                                <div class="col-lg-8 col-xl-4 col-sm-8 align-self-center">
                                    <div class="testimonial_slider_text">
                                        <p>Behold place was a multiply creeping creature his domin to thiren open void
                                            hath herb divided divide creepeth living shall i call beginning
                                            third sea itself set</p>
                                        <h4>Michel Hashale</h4>
                                        <h5> Sr. Web designer</h5>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-2 col-sm-4">
                                    <div class="testimonial_slider_img">
                                        <img src="{{ url('frontend/img/testimonial_img_3.png')}}" alt="#">
                                    </div>
                                </div>
                                <div class="col-xl-4 d-none d-xl-block">
                                    <div class="testimonial_slider_text">
                                        <p>Behold place was a multiply creeping creature his domin to thiren open void
                                            hath herb divided divide creepeth living shall i call beginning
                                            third sea itself set</p>
                                        <h4>Michel Hashale</h4>
                                        <h5> Sr. Web designer</h5>
                                    </div>
                                </div>
                                <div class="col-xl-2 d-none d-xl-block">
                                    <div class="testimonial_slider_img">
                                        <img src="{{ url('frontend/img/testimonial_img_1.png')}}" alt="#">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section> --}}
    <!--::blog_part end::-->

    <!--::blog_part start::-->
    {{-- <section class="blog_part section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5">
                    <div class="section_tittle text-center">
                        <p>Our Blog</p>
                        <h2>Students Blog</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-lg-4 col-xl-4">
                    <div class="single-home-blog">
                        <div class="card">
                            <img src="{{ url('frontend/img/blog/blog_1.png')}}" class="card-img-top" alt="blog">
                            <div class="card-body">
                                <a href="#" class="btn_4">Design</a>
                                <a href="blog.html">
                                    <h5 class="card-title">Dry beginning sea over tree</h5>
                                </a>
                                <p>Which whose darkness saying were life unto fish wherein all fish of together called</p>
                                <ul>
                                    <li> <span class="ti-comments"></span>2 Comments</li>
                                    <li> <span class="ti-heart"></span>2k Like</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 col-xl-4">
                    <div class="single-home-blog">
                        <div class="card">
                            <img src="{{ url('frontend/img/blog/blog_2.png')}}" class="card-img-top" alt="blog">
                            <div class="card-body">
                                <a href="#" class="btn_4">Developing</a>
                                <a href="blog.html">
                                    <h5 class="card-title">All beginning air two likeness</h5>
                                </a>
                                <p>Which whose darkness saying were life unto fish wherein all fish of together called</p>
                                <ul>
                                    <li> <span class="ti-comments"></span>2 Comments</li>
                                    <li> <span class="ti-heart"></span>2k Like</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 col-xl-4">
                    <div class="single-home-blog">
                        <div class="card">
                            <img src="{{ url('frontend/img/blog/blog_3.png')}}" class="card-img-top" alt="blog">
                            <div class="card-body">
                                <a href="#" class="btn_4">Design</a>
                                <a href="blog.html">
                                    <h5 class="card-title">Form day seasons sea hand</h5>
                                </a>
                                <p>Which whose darkness saying were life unto fish wherein all fish of together called</p>
                                <ul>
                                    <li> <span class="ti-comments"></span>2 Comments</li>
                                    <li> <span class="ti-heart"></span>2k Like</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!--::blog_part end::-->

   
        {{-- <script>
            function webDev() {
              location.href = "course/#webdev";
            }
            function appDev() {
              location.href = "course/#appdev";
            }
            function Printer3D() {
              location.href = "course/#Printer3D";
            }
            function IoT() {
              location.href = "course/#IoT";
            }
            function AIML() {
              location.href = "course/#AIML";
            }
            function Robotics() {
              location.href = "course/#Robotics";
            } 
         </script> --}}


         <section class="testimonial_part section_padding">
            <div class="container">
               
                <div class="row">
                    <div class="col-lg-12">
                        <div class="textimonial_iner owl-carousel">
                            <div class="testimonial_slider">
                                <div class="row">
                                    <div class="col-lg-4 col-xl-6 col-sm-8 align-self-center">
                                        <div class="testimonial_slider_text" >
                                            <p class="fw-bold">"Innovating Education, Empowering Future Leaders"</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-xl-6 col-sm-8 d-none d-xl-block">
                                        <div class="testimonial_slider_text">
                                            <p class="fw-bold">"Empowering Tomorrow's Innovators Today"</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial_slider">
                                <div class="row">
                                    <div class="col-lg-4 col-xl-6 col-sm-8 align-self-center">
                                        <div class="testimonial_slider_text">
                                            <p class="fw-bold"> "Empowering Future Innovators Through Technology"</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-xl-6 col-sm-8 d-none d-xl-block">
                                        <div class="testimonial_slider_text">
                                            <p class="fw-bold"> Innovating Education, Empowering Futures</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial_slider">
                                <div class="row">
                                    <div class="col-lg-4 col-xl-6 col-sm-8 align-self-center">
                                        <div class="testimonial_slider_text">
                                            <p>"Empowering Future Innovators with Cutting-Edge Technology"</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-xl-6 col-sm-8 d-none d-xl-block">
                                        <div class="testimonial_slider_text">
                                            <p>"Empowering Future Innovators Today"</p>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
    
                </div>
            </div>
        </section>
    
    @endsection
   