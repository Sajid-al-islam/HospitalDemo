<?php

	require_once('class/library.php');
	$library = new Library();
	if(isset($_POST['btn'])){
		$appt = $library->saveAppt($_POST);
	}

?>
<!doctype html>
<html class="no-js" lang="zxx">

<!-- Mirrored from preview.colorlib.com/theme/docmed/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 15 Nov 2020 12:57:32 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Docmed</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/xfavicon.png.pagespeed.ic.xjuSQ5i6l5.png">
    <!-- Place favicon.ico in the root directory -->
    <!-- CSS here -->
    <link rel="stylesheet"
          href="css/A.bootstrap.min.css%2bowl.carousel.min.css%2bmagnific-popup.css%2bfont-awesome.min.css%2bthemify-icons.css%2bnice-select.css%2bflaticon.css%2bgijgo.css%2banimate.css%2bslicknav.css"/>
    <link rel="stylesheet" href="css/A.style.css.pagespeed.cf.pFog_mR5yI.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>
<body>
<!--[if lte IE 9]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade
    your browser</a> to improve your experience and security.</p>
<![endif]-->
<!-- header-start -->
<header>
    <div class="header-area ">
        <div class="header-top_area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-md-6 ">
                        <div class="social_media_links">
                            <a href="#">
                                <i class="fa fa-linkedin"></i>
                            </a>
                            <a href="#">
                                <i class="fa fa-facebook"></i>
                            </a>
                            <a href="#">
                                <i class="fa fa-google-plus"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-6">
                        <div class="short_contact_list">
                            <ul>
                                <li><a href="#"> <i class="fa fa-envelope"></i> info@docmed.com</a></li>
                                <li><a href="#"> <i class="fa fa-phone"></i> 160160</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="sticky-header" class="main-header-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-3 col-lg-2">
                        <div class="logo">
                            <a href="index.php">
                                <img src="img/xlogo.png.pagespeed.ic.yEpHUukmy1.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-7">
                        <div class="main-menu  d-none d-lg-block">
                            <nav>
                                <ul id="navigation">
                                    <li><a class="active" href="index.php">home</a></li>
                                    <li><a href="Department.html">Department</a></li>
                                    <li><a href="#">blog <i class="ti-angle-down"></i></a>
                                        <ul class="submenu">
                                            <li><a href="blog.html">blog</a></li>
                                            <li><a href="single-blog.html">single-blog</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">pages <i class="ti-angle-down"></i></a>
                                        <ul class="submenu">
                                            <li><a href="elements.html">elements</a></li>
                                            <li><a href="about.html">about</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="Doctors.html">Doctors</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header-end -->
<!-- bradcam_area_start  -->
<div class="bradcam_area breadcam_bg_2 bradcam_overlay">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="bradcam_text">
                    <h3>Make an Appointment</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- bradcam_area_end  -->
<!-- ================ contact section start ================= -->
<section class="contact-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="contact-title">Get in Touch</h2>
            </div>
            <div class="col-lg-8">
                <div class="reg-form">
				       <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" enctype="multipart/form-data">
					         <div class="form-group">
							      <label for="name"><b>patient Name</b></label>
								  <input type="text" id="name" class="form-control" name="p_name" placeholder="Type patient name">
							 </div>
							 <div class="form-group">
							      <label for="degree"><b>Doctor Name</b></label>
								  <input type="text" id="degree" class="form-control" name="d_name" placeholder="Type Doctor name">
							 </div>
							 <div class="form-group">
							      <label for="phone"><b>Age</b></label>
								  <input type="text" id="phone" class="form-control" name="age" placeholder="age">
							 </div>
							 <div class="form-group">
							      <label for="email"><b>Phone</b></label>
								  <input type="text" id="email" class="form-control" name="phone" placeholder="your Phone number">
							 </div>
							 <div class="form-group">
							      <label for="visit-time"><b>Date</b></label>
								  <input type="date" id="visit-time" class="form-control" name="date">
							 </div>
							<input type="submit" class="btn btn-primary btn-block" value="Get An Appointment" name="btn">
					   </form>
				  </div>
                <!-- <form class="form-contact contact_form"
                      action="https://preview.colorlib.com/theme/docmed/contact_process.php" method="post"
                      id="contactForm" novalidate>
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9"
                                          onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'"
                                          placeholder=" Name"></textarea>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input class="form-control valid" name="name" id="name" type="text"
                                       onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'"
                                       placeholder="Enter your name">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input class="form-control valid" name="email" id="email" type="email"
                                       onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'"
                                       placeholder="Email">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <input class="form-control" name="subject" id="subject" type="text"
                                       onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'"
                                       placeholder="Enter Subject">
                            </div>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <button type="submit" class="button button-contactForm boxed-btn">Send</button>
                    </div>
                </form> -->
            </div>
            <div class="col-lg-3 offset-lg-1">
                <div class="media contact-info">
                    <span class="contact-info__icon"><i class="ti-home"></i></span>
                    <div class="media-body">
                        <h3>Buttonwood, California.</h3>
                        <p>Rosemead, CA 91770</p>
                    </div>
                </div>
                <div class="media contact-info">
                    <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                    <div class="media-body">
                        <h3>+1 253 565 2365</h3>
                        <p>Mon to Fri 9am to 6pm</p>
                    </div>
                </div>
                <div class="media contact-info">
                    <span class="contact-info__icon"><i class="ti-email"></i></span>
                    <div class="media-body">
                        <h3>support@colorlib.com</h3>
                        <p>Send us your query anytime!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ================ contact section end ================= -->
<!-- footer start -->
<footer class="footer">
    <div class="footer_top">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="footer_widget">
                        <div class="footer_logo">
                            <a href="#">
                                <img src="img/xfooter_logo.png.pagespeed.ic.mcE_cWV2dy.png" alt="">
                            </a>
                        </div>
                        <p>
                            Firmament morning sixth subdue darkness
                            creeping gathered divide.
                        </p>
                        <div class="socail_links">
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="ti-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="ti-twitter-alt"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 offset-xl-1 col-md-6 col-lg-3">
                    <div class="footer_widget">
                        <h3 class="footer_title">
                            Departments
                        </h3>
                        <ul>
                            <li><a href="#">Eye Care</a></li>
                            <li><a href="#">Skin Care</a></li>
                            <li><a href="#">Pathology</a></li>
                            <li><a href="#">Medicine</a></li>
                            <li><a href="#">Dental</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-2 col-md-6 col-lg-2">
                    <div class="footer_widget">
                        <h3 class="footer_title">
                            Useful Links
                        </h3>
                        <ul>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">About</a></li>
                            <li><a href="#"> Contact</a></li>
                            <li><a href="#"> Appointment</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-lg-3">
                    <div class="footer_widget">
                        <h3 class="footer_title">
                            Address
                        </h3>
                        <p>
                            200, D-block, Green lane USA <br>
                            +10 367 467 8934 <br>
                            docmed@contact.com
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copy-right_text">
        <div class="container">
            <div class="footer_border"></div>
            <div class="row">
                <div class="col-xl-12">
                    <p class="copy_right text-center">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script>
                        All rights reserved | This template is made with <i class="fa fa-heart-o"
                                                                            aria-hidden="true"></i> by <a
                            href="https://colorlib.com/" target="_blank">Colorlib</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer end  -->
<!-- link that opens popup -->
<!-- form itself end-->
<form id="test-form" class="white-popup-block mfp-hide">
    <div class="popup_box ">
        <div class="popup_inner">
            <h3>Make an Appointment</h3>
            <form action="#">
                <div class="row">
                    <div class="col-xl-6">
                        <input id="datepicker" placeholder="Pick date">
                    </div>
                    <div class="col-xl-6">
                        <input id="datepicker2" placeholder="Suitable time">
                    </div>
                    <div class="col-xl-6">
                        <select class="form-select wide" id="default-select" class="">
                            <option data-display="Select Department">Department</option>
                            <option value="1">Eye Care</option>
                            <option value="2">Physical Therapy</option>
                            <option value="3">Dental Care</option>
                        </select>
                    </div>
                    <div class="col-xl-6">
                        <select class="form-select wide" id="default-select" class="">
                            <option data-display="Doctors">Doctors</option>
                            <option value="1">Mirazul Alom</option>
                            <option value="2">Monzul Alom</option>
                            <option value="3">Azizul Isalm</option>
                        </select>
                    </div>
                    <div class="col-xl-6">
                        <input type="text" placeholder="Name">
                    </div>
                    <div class="col-xl-6">
                        <input type="text" placeholder="Phone no.">
                    </div>
                    <div class="col-xl-12">
                        <input type="email" placeholder="Email">
                    </div>
                    <div class="col-xl-12">
                        <button type="submit" class="boxed-btn3">Confirm</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</form>
<!-- form itself end -->
<!-- JS here -->
<script src="js/vendor/modernizr-3.5.0.min.js.pagespeed.jm.L_Pj9CgKas.js"></script>
<script src="js/vendor/jquery-1.12.4.min.js.pagespeed.jm.29OAZzvhfX.js"></script>
<script src="js/popper.min.js%2bbootstrap.min.js.pagespeed.jc.1gZTJnTm_c.js"></script>
<script>eval(mod_pagespeed_Wg1ghn079g);</script>
<script>eval(mod_pagespeed_l4j4h98Fuo);</script>
<script src="js/owl.carousel.min.js%2bisotope.pkgd.min.js%2bajax-form.js%2bwaypoints.min.js%2bjquery.counterup.min.js.pagespeed.jc.0ClCUVAHOm.js"></script>
<script>eval(mod_pagespeed_HnhwjW_InZ);</script>
<script>eval(mod_pagespeed_zal2vTGUrb);</script>
<script>eval(mod_pagespeed_vXjTGNjwqZ);</script>
<script>eval(mod_pagespeed_vlx8QI$ceE);</script>
<script>eval(mod_pagespeed_3XPc$tpE8P);</script>
<script src="js/imagesloaded.pkgd.min.js%2bscrollIt.js%2bjquery.scrollUp.min.js%2bwow.min.js%2bnice-select.min.js%2bjquery.slicknav.min.js%2bjquery.magnific-popup.min.js%2bplugins.js.pagespeed"></script>
<script>eval(mod_pagespeed__gK2jkRKUU);</script>
<script>eval(mod_pagespeed_O4kg_ZyOB_);</script>
<script>eval(mod_pagespeed_7psiNvlkIO);</script>
<script>eval(mod_pagespeed_R7vp8C7fLA);</script>
<script>eval(mod_pagespeed_BbLcuJjEHi);</script>
<script>eval(mod_pagespeed_Di$K7wkOUE);</script>
<script>eval(mod_pagespeed_0YXLPGuNQ2);</script>
<script>eval(mod_pagespeed_B$0jefONcZ);</script>
<script src="js/gijgo.min.js.pagespeed.ce.Jhxbkf3sVo.js"></script>
<!--contact js-->
<script src="js/contact.js%2bjquery.ajaxchimp.min.js%2bjquery.form.js%2bjquery.validate.min.js%2bmail-script.js%2bmain.js.pagespeed.jc.3IpknOehg9.js"></script>
<script>eval(mod_pagespeed_DuSzzTDZNK);</script>
<script>eval(mod_pagespeed_MrfmLjxfTZ);</script>
<script>eval(mod_pagespeed_in_if2LqV5);</script>
<script>eval(mod_pagespeed_t$$qqw5FXj);</script>
<script>eval(mod_pagespeed_EphGjvx2yw);</script>
<script>eval(mod_pagespeed_K$dCl48UyR);</script>
<script>$('#datepicker').datepicker({
    iconsLibrary: 'fontawesome',
    icons: {rightIcon: '<span class="fa fa-caret-down"></span>'}
});
$('#datepicker2').datepicker({
    iconsLibrary: 'fontawesome',
    icons: {rightIcon: '<span class="fa fa-caret-down"></span>'}
});</script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>window.dataLayer = window.dataLayer || [];

function gtag() {
    dataLayer.push(arguments);
}

gtag('js', new Date());
gtag('config', 'UA-23581568-13');</script>
</body>

<!-- Mirrored from preview.colorlib.com/theme/docmed/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 15 Nov 2020 12:57:32 GMT -->
</html>