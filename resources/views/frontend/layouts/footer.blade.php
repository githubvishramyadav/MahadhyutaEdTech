 <!-- footer part start-->
 <footer class="footer-area">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-sm-6 col-md-4 col-xl-3">
                <div class="single-footer-widget footer_1">
                    <a href="{{ url('/')}}"> <img src="{{ url('frontend/img/logo.png')}}" alt=""> </a>
                    <p>Our mission is to empower students with cutting-edge tools and projects that enhance 
                        learning and inspire innovation. By providing practical, hands-on experiences, 
                        we help students understand and apply AI and ML concepts in real-world scenarios.</p>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-xl-2">
                <div class="single-footer-widget footer_2">
                    <h4>Newsletter</h4>
                    <p>Stay updated with our latest trends Seed heaven so said place winged over given forth fruit.
                    </p>
                    <form action="#">
                        <div class="form-group">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder='Enter email address'
                                    onfocus="this.placeholder = ''"
                                    onblur="this.placeholder = 'Enter email address'">
                                <div class="input-group-append">
                                    <button class="btn btn_1" type="button"><i class="ti-angle-right"></i></button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="social_icon">
                        <a href="#"> <i class="ti-facebook"></i> </a>
                        <a href="#"> <i class="ti-twitter-alt"></i> </a>
                        <a href="#"> <i class="ti-instagram"></i> </a>
                        <a href="#"> <i class="ti-skype"></i> </a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-md-2">
                <div class="single-footer-widget footer_2">
                    <h4>Contact us</h4>
                    <div class="contact_info">
                        <p><span> Corporate Office :</span> IRC Village Nayapalli Bhubaneswar Khordah Odisha 751015 </p>
                        <p><span> Phone :</span> +91 123456789</p>
                        <p><span> Email : </span>info@example.com </p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-sm-6 col-md-6">
                <div class="single-footer-widget footer_2">
                    <h4>Contact us</h4>
                    <div class="row">
                        <div class="col-md-6">
                            <h6 class="text-start   text-uppercase">Company</h6>
                            <a class="text-secondary" href="{{ url('about') }}">About Us</a><br>
                            <a class="text-secondary" href="{{ url('about') }}">Contact Us</a><br>
                            <a class="text-secondary" data-bs-toggle="modal" data-bs-target="#tinkering" href="#">Privacy Policy</a>
                            <a class="text-secondary" data-bs-toggle="modal" data-bs-target="#tinkering" href="#">Terms & Condition</a>
                            <a class="text-secondary" data-bs-toggle="modal" data-bs-target="#tinkering" href="#">Support</a>
                        </div>
                        <div class="col-md-6">
                            <h6 class=" text-start  text-uppercase">Services</h6>
                            <a class="text-secondary"  data-bs-toggle="modal" data-bs-target="#web" href="#">Web Developmwent</a>
                            <a class="text-secondary"  data-bs-toggle="modal" data-bs-target="#app" href="#">App Development</a>
                            <a class="text-secondary"  data-bs-toggle="modal" data-bs-target="#skill" href="#">Skill Development</a>
                            <a class="text-secondary"  data-bs-toggle="modal" data-bs-target="#vocational" href="#">Vocational Training</a>
                            <a class="text-secondary"  data-bs-toggle="modal" data-bs-target="#csr" href="#">CSR Implimantation</a>
                            <a class="text-secondary"  data-bs-toggle="modal" data-bs-target="#training" href="#">Training & IT Support</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="copyright_part_text text-center">
                    <div class="row">
                        <div class="col-lg-12">
                            <p class="footer-text m-0">
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved <i class="ti-heart" aria-hidden="true"></i> by <a href="http://mahadhyuta.valeurfabtex.in/" target="_blank">MahadhyutaEdTech</a>
</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer part end-->

<!-- jquery plugins here-->
<!-- jquery -->
<script src="{{url('frontend/js/jquery-1.12.1.min.js')}}"></script>
<!-- popper js -->
<script src="{{url('frontend/js/popper.min.js')}}"></script>
<!-- bootstrap js -->
<script src="{{url('frontend/js/bootstrap.min.js')}}"></script>
<!-- easing js -->
<script src="{{url('frontend/js/jquery.magnific-popup.js')}}"></script>
<!-- swiper js -->
<script src="{{url('frontend/js/swiper.min.js')}}"></script>
<!-- swiper js -->
<script src="{{url('frontend/js/masonry.pkgd.js')}}"></script>
<!-- particles js -->
<script src="{{url('frontend/js/owl.carousel.min.js')}}"></script>
<script src="{{url('frontend/js/jquery.nice-select.min.js')}}"></script>
<!-- swiper js -->
<script src="{{url('frontend/js/slick.min.js')}}"></script>
<script src="{{url('frontend/js/jquery.counterup.min.js')}}"></script>
<script src="{{url('frontend/js/waypoints.min.js')}}"></script>
<!-- custom js -->
<script src="{{url('frontend/js/custom.js')}}"></script>
</body>
</html>