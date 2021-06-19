<header>
  <div class="container">
    <div class="header">
      <div class="header__logo"> <a href="/"> <img src="images/dsapp-logo.png" width="500" height="100" alt="Digital Applications"> </a> </div>
      <div class="header__information">
        <div class="header__item">
          <div class="icon"> <i class="fa fa-map-marker-alt "></i> </div>
          <div class="header__text"> Block # 13, Bhutta Chowk, Khanewal </div>
        </div>
        <div class="header__item">
          <div class="icon"> <i class="fa fa-copy "></i> </div>
          <div class="header__text"> <a id="email-text"> dgaps.com@gmail.com </a> <br>
            +92 (0) 343-786-1234 </div>
        </div>
        <div class="header__item"> 
					<a href="/contact" class="a-btn hvr-bounce-to-right">
          	Get a free quote
          </a> </div>
      </div>
    </div>
  </div>
</header>
	<nav class="navbar navbar-expand-md navbar-light header_aera" id="navbar">
  <div class="container"> <a class="navbar-brand p-0" href="/"><img src="../images/DG-tag.png" title="Digital Applications" alt="Website Logo"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <ul class="navbar-nav me-auto" id="navbar-nav">
          <li class="nav-item"> <a class="nav-link d-md-none d-lg-block" href="/">Home</a><a class="nav-link d-none d-md-block d-lg-none" href="/"><i class="fas fa-home"></i> </a> </li>
          <li class="nav-item"> <a class="nav-link" href="/about.php">About Us</a> </li>
          <li class="nav-item"> <a class="nav-link rounded-top rounded-0">services</a> 
          <!--						<i class="d-block d-md-none fa-xs fas fa-plus text-white"></i>-->
          <ul class="dropdown-menu-item">
              <li><a href="/service.php"><i class="fas fa-globe me-2"></i>Website Development</a></li>
              <li><a href="/service.php"><i class="fab fa-android me-2"></i>Mobile App Development</a></li>
              <li><a href="/service.php"><i class="fas fa-chart-line me-2"></i>SEO Services</a></li>
              <li><a href="/service.php"><i class="fas fa-bullhorn me-2"></i>Digital Marketing</a></li>
              <li><a href="/service.php"><i class="fas fa-pen me-2"></i>Content Writing</a></li>
            </ul>
        </li>
          <li class="nav-item"> <a class="nav-link rounded-top rounded-0" >Trainings </a> 
          <!--						<i class="d-block d-md-none fa-xs fas fa-plus text-white"></i>-->
          <ul class="dropdown-menu-item" id="trainingdrop">
              <li><a href="/our-work.php"><i class="fas fa-code me-2"></i>Our works</a></li>
              <li><a href="/blog.php"><i class="fas fa-chart-line me-2"></i>Job Opportunity</a></li>
              <li><a href="/blog.php"><i class="fas fa-laptop-code me-2"></i>Earning Guide</a></li>
            </ul>
        </li>
          <li class="nav-item"> <a class="nav-link" href="/our-work.php">Our works</a> </li>
          <li class="nav-item"> <a class="nav-link" href="/blog.php">Job Opportunity</a> </li>
          <li class="nav-item"> <a class="nav-link" href="/blog.php">Earning Guide</a> </li>
          <li class="nav-item"> <a class="nav-link" href="/contact.php">Contact</a> </li>
        </ul>
    </div>
    </div>
</nav>
	<script>
			document.addEventListener('scroll', function(e){
				var navbar = document.getElementById("navbar");
				var navbarNav = document.getElementById("navbar-nav");
				var sticky = navbar.offsetTop;
				if (window.pageYOffset > sticky) {
					navbar.classList.add("sticky");
					navbarNav.classList.add("ms-auto")
					navbarNav.classList.remove("me-auto")
					
				} else {
					navbar.classList.remove("sticky");
					navbarNav.classList.remove("ms-auto");
				}
			});
		</script>



