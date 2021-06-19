<?php include("inc/header.php"); ?>
<link rel="stylesheet" href="assets/css/head_foot.css">
<link rel="stylesheet" href="assets/css/work_detail.css">
</head>
<body>
<?php include("inc/main-menu.php"); ?>
<div class="page-header">
  <div class="container">
    <div class="row">
      <div class="col-6 col-sm-6 col-md-10">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb float-start">
            <li class="breadcrumb-item"><i class="fa fa-map-marker-alt text-white me-3"></i><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="/our-work.php">Our Works</a></li>
            <li class="breadcrumb-item active" aria-current="page">BoxSix</li>
          </ol>
        </nav>
      </div>
      <div class="col-6 col-sm-6 col-md-2 text-end"> <span class="post_views"> <i class="fas fa-eye me-2"></i>1576 </span> </div>
    </div>
  </div>
</div>
<section class="section_work my-2 my-sm-3 my-md-4 my-lg-5">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2 class="work__title text-center mb-3">Box Six</h2>
      </div>
      <div class="col-12 col-sm-12 col-md-12 col-lg-6">
        <div id="carouselExampleControls" class="carousel slide pointer-event" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active"> <img class="d-block w-100" src="images/boxsix.png" alt="First slide"> </div>
            <div class="carousel-item"> <img class="d-block w-100 lazyload" src="images/image-loader.gif" data-src="images/boxsix.png" alt="First slide"> </div>
            <div class="carousel-item"> <img class="d-block w-100 lazyload" src="images/image-loader.gif" data-src="images/work-detail.jpg" alt="First slide"> </div>
            <div class="carousel-item"> <img class="d-block w-100 lazyload" src="images/image-loader.gif" data-src="images/GA.jpg" alt="First slide"> </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="visually-hidden">Previous</span> </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="visually-hidden">Next</span> </button>
        </div>
      </div>
      <div class="col-12 col-sm-12 col-md-12 col-lg-6">
        <div class="work__detail ourwork">
          <ul class="ourwork__ul">
            <li><span class="ourwork__heading"> <i class="fas fa-user me-2"></i>Client:</span><span class="ourwork__value">Box Six</span> </li>
            <li><span class="ourwork__heading"><i class="fas fa-check me-2"></i>COMPLETION DATE:</span><span class="ourwork__value">01 Jan 1970</span> </li>
            <li><span class="ourwork__heading"><i class="fas fa-location-arrow me-2"></i>PROJECT URL:</span><span class="ourwork__value"><a href="http://box-six.com/" target="_blank" rel="nofollow noopener">http://box-six.com/</a></span> </li>
            <li><span class="ourwork__heading"><i class="fas fa-user me-2"></i>Location:</span><span class="ourwork__value"><img src="images/us.png" alt="" class="me-3">United States</span> </li>
            <li><span class="ourwork__heading"><i class="fas fa-trophy me-2"></i>Skills:</span>
              <ul class="ul">
                <li> <span class="icon"><i class="fas fa-check"></i></span> <span class="list__text">custom php</span> </li>
                <li> <span class="icon"><i class="fas fa-check"></i></span> <span class="list__text">jquery</span> </li>
                <li> <span class="icon"><i class="fas fa-check"></i></span> <span class="list__text">music player</span> </li>
              </ul>
            </li>
          </ul>
          <div id="skills">
            <div class="skills__item d-flex flex-column w-100 py-3">
              <div class="skills__title">Project Complete – (100%)</div>
              <div class="skills__outer">
						<div class="skills__inner" data-percent="100%"></div>
              </div>
            </div>
          </div>
					<div class="skills__title"><i class="fas fa-user me-2"></i>Project Description</div>
          <p> "Box Six" was officially launched in August of 2008 and is a collection of our body of work from 2005 to the present. The main difference between this site and the many other sites available is that every single piece of music found on Box 6 is composed and arranged by the same two people. We (John Mapes and Ian Grom) met at Cal State University Long Beach in the music department in the Fall of 1998 and started actively working together from 2004 to the present.</p>
					<div class="skills__title"><i class="fas fa-user me-2"></i>Client Reveiws</div>
					<blockquote class="well testimonial-body"> 
            <p class="testimonial"><i class="fas fa-quote-left me-3 mb-1"></i> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Suscipit quo hic vero atque perferendis? Temporibus harum suscipit quia consequuntur labore sit, officia nesciunt quo, aliquam necessitatibus fuga veniam architecto eligendi.</p>
            <footer class="source">Our valued user <cite title="Source Title">Kiki Kariotou, Greece</cite></footer>
         </blockquote>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="section__news my-3" id="section14">
  <div class="container">
    <h2 class="portfolio_title my-3"><i class="fas fa-crosshairs me-2"></i>Related Portfolio</h2>
    <div class="owl-carousel owl-theme owl-portfolio">
      <div class="item">
        <div class="news__item">
          <div class="news__body"><a href=""> <img class="lazyload" src="images/image-loader.gif" data-src="/images/work1.jpg" alt="internet-merits-demertis" width="300" height="200"></a>
          </div>
          <div class="news__head d-flex justify-content-between align-self-center align-items-center px-2"> <a href="/" target="_blank">Box Six</a> <img src="images/us.png" alt="USA" title="United States" width="30" height="20"> </div>
          <hr class="hr-dual">
          <div class="news__footer">
            <div class="news__date"> <i class="far fa-calendar-alt me-2"></i> <span class="news__text">18 Dec 2018</span> </div>
            <div class="news__views"> <i class="fa fa-eye me-2"></i>
              <div class="news__text">267,414 </div>
            </div>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="news__item">
          <div class="news__body"><a href=""> <img class="lazyload" src="images/image-loader.gif" data-src="/images/work2.jpg" alt="internet-merits-demertis" width="300" height="200"></a>
          </div>
          <div class="news__head d-flex justify-content-between align-self-center align-items-center px-2"> <a href="/" target="_blank">Box Six</a> <img src="images/us.png" alt="USA" title="United States" width="30" height="20"> </div>
          <hr class="hr-dual">
          <div class="news__footer">
            <div class="news__date"> <i class="far fa-calendar-alt me-2"></i> <span class="news__text">18 Dec 2018</span> </div>
            <div class="news__views"> <i class="fa fa-eye me-2"></i>
              <div class="news__text">267,414 </div>
            </div>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="news__item">
          <div class="news__body"><a href=""> <img class="lazyload" src="images/image-loader.gif" data-src="/images/work3.jpg" alt="internet-merits-demertis" width="300" height="200"></a>
          </div>
          <div class="news__head d-flex justify-content-between align-self-center align-items-center px-2"> <a href="/" target="_blank">Box Six</a> <img src="images/us.png" alt="USA" title="United States" width="30" height="20"> </div>
          <hr class="hr-dual">
          <div class="news__footer">
            <div class="news__date"> <i class="far fa-calendar-alt me-2"></i> <span class="news__text">18 Dec 2018</span> </div>
            <div class="news__views"> <i class="fa fa-eye me-2"></i>
              <div class="news__text">267,414 </div>
            </div>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="news__item">
          <div class="news__body"><a href=""> <img class="lazyload" src="images/image-loader.gif" data-src="/images/work4.jpg" alt="internet-merits-demertis" width="300" height="200"></a>
          </div>
          <div class="news__head d-flex justify-content-between align-self-center align-items-center px-2"> <a href="/" target="_blank">Box Six</a> <img src="images/us.png" alt="USA" title="United States" width="30" height="20"> </div>
          <hr class="hr-dual">
          <div class="news__footer">
            <div class="news__date"> <i class="far fa-calendar-alt me-2"></i> <span class="news__text">18 Dec 2018</span> </div>
            <div class="news__views"> <i class="fa fa-eye me-2"></i>
              <div class="news__text">267,414 </div>
            </div>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="news__item">
          <div class="news__body"><a href=""> <img class="lazyload" src="images/image-loader.gif" data-src="/images/work5.jpg" alt="internet-merits-demertis" width="300" height="200"></a>
          </div>
          <div class="news__head d-flex justify-content-between align-self-center align-items-center px-2"> <a href="/" target="_blank">Box Six</a> <img src="images/us.png" alt="USA" title="United States" width="30" height="20"> </div>
          <hr class="hr-dual">
          <div class="news__footer">
            <div class="news__date"> <i class="far fa-calendar-alt me-2"></i> <span class="news__text">18 Dec 2018</span> </div>
            <div class="news__views"> <i class="fa fa-eye me-2"></i>
              <div class="news__text">267,414 </div>
            </div>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="news__item">
          <div class="news__body"><a href=""> <img class="lazyload" src="images/image-loader.gif" data-src="/images/work6.jpg" alt="internet-merits-demertis" width="300" height="200"></a>
          </div>
          <div class="news__head d-flex justify-content-between align-self-center align-items-center px-2"> <a href="/" target="_blank">Box Six</a> <img src="images/us.png" alt="USA" title="United States" width="30" height="20"> </div>
          <hr class="hr-dual">
          <div class="news__footer">
            <div class="news__date"> <i class="far fa-calendar-alt me-2"></i> <span class="news__text">18 Dec 2018</span> </div>
            <div class="news__views"> <i class="fa fa-eye me-2"></i>
              <div class="news__text">267,414 </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--	end work detail section -->
<?php include("inc/footer.php"); ?>
</body>
</html>