<?php include("socialmedia.php"); ?>
<!-- start back-to-top -->
<div id="back-to-top" class="element-3"> <i class="fas fa-long-arrow-alt-up" title="Go top"></i> </div>
<!-- end back-to-top --> 
<!--active users-->
<div id="active-users" class="toolTipC position-relative"> 
	<span class="user__counts">3</span> 
	<span class="tooltiptext">Online Users</span> 
</div>
<!-- Facebook share Starts  --> 
<!--<div id="likeshareadd"></div>--> 
<!-- Facebook Share Ends Here -->
<footer>
  <div class="footer">
    <div class="footer__form" id="_subscribe_form">
      <form action="#">
        <input type="text" name="subscribe_email" class="footer__input" placeholder="Email">
        <button type="button" class="footer__submit _sub_btn" data-bs-toggle="modal" data-bs-target="#exampleModal">Subscribe</button>
      </form>
    </div>
    <div class="footer__icons">
      <div class="footer__icon"><a href="https://twitter.com/dgapscom" target="_blank" rel="nofollow noopner"><i class="fab fa-twitter"></i></a> </div>
      <div class="footer__icon"><a href="https://www.facebook.com/dgaps" target="_blank" rel="nofollow noopner"><i class="fab fa-facebook"></i></a> </div>
      <div class="footer__icon"><a href="#" target="_blank" rel="nofollow noopner"><i class="fab fa-google"></i></a> </div>
      <div class="footer__icon"><a href="#" target="_blank" rel="nofollow noopner"><i class="fab fa-youtube"></i></a> </div>
    </div>
  </div>
  <div class="footer-b">
    <div class="container">
      <div class="row">
        <nav class="col-12 col-sm-12 col-md-12 col-lg-6 footer-b__nav">
          <ul class="d-flex justify-content-center justify-content-lg-start list-unstyled m-0 p-0">
            <li><a href="/about.php" target="_blank"> About Us </a></li>
            <li><a href="/blog.php" target="_blank"> Job Opportunity </a></li>
            <li><a href="/faqs.php" target="_blank"> FAQs </a></li>
            <li><a href="/privacy.php" target="_blank"> Privacy Policy </a></li>
            <li><a href="/terms.php" target="_blank"> Terms &amp; Conditions </a></li>
          </ul>
        </nav>
        <div class="col-12 col-sm-12 col-md-12 col-lg-6 d-flex justify-content-center justify-content-lg-end">
          <div class="footer-b__copy">© Copyright 2013 - 2021 | All rights reserved</div>
        </div>
      </div>
    </div>
  </div>
</footer>
<!--Add This-->
<div id="add-this"></div>
<!--Web Designer--> 
<!--Abdullah Yousaf--> 
<!--fb.com/raoabdullah07/--> 
<!--Jquery 3.5.1--> 
<script src="assets/js/jquery.min.js" defer></script> 
<!--Lazy load--> 
<script src="assets/js/lazyloadimage.js" async></script> 
<!--Bootstrap latest 5.0--> 
<script src="assets/js/bootstrap.min.js" defer></script> 
<script>
</script> 
<!-- Modal -->
<div class="modal fade pe-0" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-center" id="exampleModalLabel">User Subscription</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body bg-info py-5 text-center">
        <div>
          <p class="text-success h3 fw-bold">Congratulations! <i class="far fa-smile"></i></p>
          <p class="text-black-50 h6 fw-bolder">You Have Successfuly Subscribed our Newsletter</p>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<script>
 	function loadfiles(filename, filetype) {
		if (filetype == "js") { //if filename is a external JavaScript file
			 var fileref = document.createElement('script');
			 fileref.setAttribute("type", "text/javascript");
			 fileref.setAttribute("src", filename);
			 fileref.setAttribute("defer", "");} else if (filetype == "css") { //if filename is an external CSS file
			 var fileref = document.createElement("link");
			 fileref.setAttribute("rel", "stylesheet");
			 fileref.setAttribute("type", "text/css");
			 fileref.setAttribute("href", filename);
			 fileref.setAttribute("async", "");}if (typeof fileref != "undefined")document.getElementsByTagName("body")[0].appendChild(fileref);}
//    loadfiles("","js");
//  	setTimeout(function(){ loadfiles("assets/css/owl.carousel.min.css", "css");}, 500);
//  	setTimeout(function(){ loadfiles("assets/js/owl.carousel.min.js", "js");}, 600);
  	setTimeout(function(){ loadfiles("assets/js/main.js", "js");}, 1000);
</script> 
<script src="../assets/js/owl.carousel.min.js" defer></script>
<!-- Owl Carousel -->
<link rel="preload" href="assets/css/owl.carousel.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
<noscript>
	<link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.min.css">
</noscript>
<!-- fontawesome -->
<link rel="preload" href="assets/css/all.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
<noscript>
	<link rel="stylesheet" type="text/css" href="assets/css/all.min.css">
</noscript>
<!-- Messenger Chat Plugin Code -->
    <!-- Your Chat Plugin code -->
<div class="fb-customerchat"
		attribution=setup_tool
		page_id="369246633679487"
 greeting_dialog_display="fade">
</div>