<?php include("inc/header.php"); ?>
<link rel="stylesheet" href="assets/css/head_foot.css">
<link rel="stylesheet" href="assets/css/index.css">
<style>
.isLoading {
	min-height: 100vh;
	margin-bottom: 80px;
	height: 100%;
	width: 100%;
}
.isLoading>div {
	display: none;
}
</style>
<script>
		window.addEventListener("load", (event) => {["sectionTwo","sectionThree","sectionFour","sectionFive","sectionSix","sectionSeven","sectionNine","sectionTen","section14"].forEach(name =>{
				handleEachCategory(name);
			});
		}, false);

			function handleEachCategory(category) {
				let target = document.getElementById(category);
				let observer;
				let isVis;
				createObserver();

			function createObserver() {
				let options = {
					root: null,
					rootMargin: '0px',
					threshold: 0.15
				}
				observer = new IntersectionObserver(handleIntersect, options);
				observer.observe(target);
			}  

			function handleIntersect(entries, observer) {
				entries.forEach(entry => {
					if (entry.isIntersecting) {
						entry.target.classList.remove('isLoading');
						entry.target.childNodes[1].display = "block";
					}
			});
		}
	}
</script>
</head>
<body>
<?php include("inc/main-menu.php"); ?>
<div class="slider__carousel container-fluid bg-same position-relative overflow-hidden">
  <div class="container">
    <div class="slider">
      <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
        </div>
        <div class="carousel-inner fixed-height">
          <div class="carousel-item active">
            <div class="row left-pad">
              <div class="col-md-12 col-lg-4 slider-img align-self-center"> <img class="img-fluid mx-auto" src="images/web-application-development-mid.png" alt="Software Development" height="300" width="300"> </div>
              <div class="col-md-12 col-lg-8 col-xl-8">
                <h2 class="slider__title text-light text-end fw-bold">Software Development</h2>
                <p class="slider__text text-light text-end fw-normal fs-6">Do difficult software apps cause a lag between your business and employees? Our tailored to your needs Web-based Software solutions consolidate your internal &amp; external resources to create smooth business run-through.</p>
                <div class="slider__btn text-end"> <a class="btn btn-lg" href="/" target="_blank">VIEW PLAN</a> </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row left-pad">
              <div class="col-md-12 col-lg-4 slider-img align-self-center"> <img class="img-fluid mx-auto" src="images/it-consultancy-mid.png" alt="Website Development" width="300" height="200"> </div>
              <div class="col-md-12 col-lg-8 col-xl-8">
                <h2 class="slider__title text-light text-end fw-bold">Website Development</h2>
                <p class="slider__text text-light text-end fw-normal fs-6">Our professional website artists exactly know how to create a digital landscape to convert ideas on your mind canvas into something live, vibrant and useful for your business and clients.</p>
                <div class="slider__btn text-end"> <a class="btn btn-lg bg-same-2 slider-button" href="/" target="_blank">VIEW PLAN</a> </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row left-pad">
              <div class="col-md-12 col-lg-4 slider-img align-self-center"> <img class="img-fluid mx-auto lazyload" src="images/image-loader.gif" data-src="images/android-app-development-image.png" alt="Mobile Apps Development"> </div>
              <div class="col-md-12 col-lg-8 col-xl-8">
                <h2 class="slider__title text-light text-end fw-bold">Mobile Apps Development</h2>
                <p class="slider__text text-light text-end fw-normal fs-6">Do you want to increase your reach? Leverage our strong custom-made, easy to use, native UI/UX, faster and modern Android Mobile Apps Development Expertise to have up-to-the-minute Online Experience.</p>
                <div class="slider__btn text-end"> <a class="btn btn-lg bg-same-2 slider-button" href="/" target="_blank">VIEW PLAN</a> </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row left-pad">
              <div class="col-md-12 col-lg-4 slider-img align-self-center"> <img class="img-fluid mx-auto lazyload" src="images/image-loader.gif" data-src="images/digital-marketing-consultancy.png" alt="Digital Marketing"> </div>
              <div class="col-md-12 col-lg-8 col-xl-8">
                <h2 class="slider__title text-light text-end fw-bold">Digital Marketing</h2>
                <p class="slider__text text-light text-end fw-normal fs-6">Do you want to expand your Startup Business beyond the limits? Use our ten years of Digital Marketing and SEO expertise to establish your Online Business visibility Online around the world.</p>
                <div class="slider__btn text-end"> <a class="btn btn-lg bg-same-2 slider-button" href="/" target="_blank">VIEW PLAN</a> </div>
              </div>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="visually-hidden">Previous</span> </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="visually-hidden">Next</span> </button>
      </div>
    </div>
  </div>
</div>
<!--	Start Home page Section -->
<section class="text-center h_services isLoading bg-images" id="sectionTwo">
  <div class="container">
    <div class="row">
      <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-3">
        <div class="services__item"> <a href="/">
          <div class="icon services__icon"><i class="fab fa-chrome"></i> </div>
          <div class="services__head"><img class="w-100 lazyload h-100" src="images/image-loader.gif" data-src="images/website-development-1.jpg" width="262" height="100" alt="website-development"> </div>
          <div class="services__body p-2">
            <h3>Website development</h3>
            <p> We use cutting edge technology to develop SEO friendly websites that cater to every niche. </p>
          </div>
          <div class="services__hover"> <span class="services__hover-icon"><i class="fa fa-link"></i> </span> </div>
          </a> </div>
      </div>
      <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-3">
        <div class="services__item"> <a href="/">
          <div class="icon services__icon"><i class="fa fa-tablet-alt"></i> </div>
          <div class="services__head"><img class="w-100 lazyload h-100" src="images/image-loader.gif" data-src="images/mob-app-development-1.jpg" width="262" height="100" alt="mob-app-development"> </div>
          <div class="services__body p-2">
            <h3>App development</h3>
            <p>We utilize intuitive designs along with functional website features and rapid support in our projects.</p>
          </div>
          <div class="services__hover"> <span class="services__hover-icon"><i class="fa fa-link"></i> </span> </div>
          </a> </div>
      </div>
      <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-3 d-none d-lg-block">
        <div class="services__item"> <a href="/">
          <div class="icon services__icon"><i class="fa fa-chart-line"></i> </div>
          <div class="services__head"><img class="w-100 lazyload h-100" src="images/image-loader.gif" data-src="images/seo-image-1.jpg" width="262" height="100" alt="seo-image"> </div>
          <div class="services__body p-2">
            <h3>Search Engine Optimization</h3>
            <p>Our services are geared towards ranking your websites at the top of Google search lists. </p>
          </div>
          <div class="services__hover"> <span class="services__hover-icon"><i class="fa fa-link"></i> </span> </div>
          </a> </div>
      </div>
      <div class="col-12 col-sm-6 col-md-6 col-lg-3 d-none d-xl-block">
        <div class="services__item"> <a href="/">
          <div class="icon services__icon"><i class="fa fa-dollar-sign"></i> </div>
          <div class="services__head"><img class="w-100 lazyload h-100" src="images/image-loader.gif" data-src="images/earn-money-1.jpg" width="262" height="100" alt="earn-money"> </div>
          <div class="services__body p-2">
            <h3>Earn money online</h3>
            <p>Our websites use the best practices to get Google AdSense approval and start generating money.</p>
          </div>
          <div class="services__hover"> <span class="services__hover-icon"><i class="fa fa-link"></i> </span> </div>
          </a> </div>
      </div>
    </div>
  </div>
</section>
<!--	Start Grow Section -->
<section class="text-center section__grow py-4 isLoading bg-images" id="sectionThree">
  <div class="container">
    <div class="grow">
      <div class="icon-section text-center"><i class="fa fa-sun"></i> </div>
      <div class="heading">
        <h1>Best Software House in Pakistan </h1>
        <span class="sp-h1"> to grow your Business Online</span></div>
      <h2 class="h2-sub">Top Rated Software Company in Pakistan</h2>
      <p class="ta-justify"><strong>Digital Applications </strong>is one of the <strong>Most Popular Software Companies in Pakistan</strong>. Our highly professional team will get your project running quickly and realise your IT goals. We are experienced in developing IT solutions that cater to all your business needs and let your business flourish organically. Our holistic approach to <strong>SEO Friendly Website Development</strong> will not only make your website look great, but they will also be able to perform and meet your expectations. We are known as<em> Best Software Company in Pakistan</em> in delivering end to end IT solutions for a business. In this fast-paced world that is rapidly globalizing, having a presence on the internet is paramount towards the long-term sustainability for a <a href="#">business</a>. <em>Digital Applications</em> is Top Rated Software House in Pakistan at the forefront of the technological revolution of our world where every business is trying to make a mark, and with our help, you can do just that. </p>
      <p class="ta-justify">Having a successful website depends on a lot of factors, and you should trust only the experts to execute your vision very professionally. A website can only succeed if it uses SEO properly, and our <strong>Software House in Pakistan</strong> is highly rated &amp; very popular in developing great SEO strategies with user friendly web designs. Our <strong>Professional Software Company</strong> is in this space for a very long time now and have a track record of delivering highly optimized websites that bring thousands of visitors daily. Our content strategies are <a href="#">geared</a> towards bringing organic traffic to sites and increase sale revenues for a business. So, when it comes to a <em>Software House</em> for<strong> SEO Friendly Website development</strong> or a <strong>Professional Mobile App Development</strong>, you can trust our expertise and experience in this field.</p>
      <p class="ta-justify"> Our portfolio includes a lot of successful websites that are now performing according to our customer’s expectations. We put creativity as our cornerstone, delivering stellar websites that are geared towards growing your business and our results driven approach will bring in instant rewards for you. A website is a quintessential element in increasing the credibility of an organization, and we believe that we are one of the Most Popular &amp;<strong> Best Software Houses in Pakistan</strong> to execute your vision and deliver a high quality responsive website that can really put your business in the global stage.</p>
      <div class="grow__images">
        <div class="grow__img"> <a href="/" target="_blank"> <img class="lazyload" src="images/image-loader.gif" data-src="images/web-developmet-image-1.jpg" width="360" height="270" alt="web-developmet-image">
          <div class="grow__hover"></div>
          <div class="grow__icon"><i class="fa fa-link"></i> </div>
          </a> </div>
        <div class="grow__img d-none d-lg-block"> <a href="/" target="_blank"> <img class=" lazyload" src="images/image-loader.gif" data-src="images/seo-ranking-services-13-1.jpg" width="360" height="270" alt="seo-ranking-services-13">
          <div class="grow__hover"></div>
          <div class="grow__icon"><i class="fa fa-link"></i> </div>
          </a> </div>
        <div class="grow__img"><a href="/" target="_blank"><img class="lazyload" src="images/image-loader.gif" data-src="images/mobile-app-development-12-1.jpg" width="360" height="270" alt="mobile-app-development-12">
          <div class="grow__hover"></div>
          <div class="grow__icon"><i class="fa fa-link"></i> </div>
          </a> </div>
      </div>
      <div class="grow__btn py-4"><a href="/" class="a-btn a-btn-round border" target="_blank">See more about us</a> </div>
    </div>
  </div>
</section>
<!--Starts Counts Section -->
<div class="section__counts isLoading" id="sectionFour">
  <div class="container">
    <div class="row" id="count1">
      <div class="col-6 col-sm-6 col-md-4 col-lg-3 counts__item position-relative text-center">
        <div class="counts__icon"><i class="fas fa-project-diagram"></i></div>
        <div class="counts__plus d-flex align-items-center">
          <div class="counts__count counter" data-count="1500">1500 <span>+</span></div>
        </div>
        <div class="counts__text">SUCCESSFULL PROJECTS</div>
      </div>
      <div class="counts__item position-relative col-6 col-sm-6 col-md-4 col-lg-3 text-center">
        <div class="counts__icon"><i class="fas fa-smile"></i></div>
        <div class="counts__plus d-flex align-items-center">
          <div class="counts__count counter" data-count="600">600 <span>+</span></div>
        </div>
        <div class="counts__text">HAPPY CLIENTS</div>
      </div>
      <div class="counts__item position-relative col-6 col-sm-4 col-md-4 col-lg-3 text-center">
        <div class="counts__icon"><i class="fab fa-connectdevelop"></i></div>
        <div class="counts__plus d-flex align-items-center">
          <div class="counts__count counter" data-count="22">22 <span>+</span></div>
        </div>
        <div class="counts__text">EXPERT DEVELOPERS</div>
      </div>
      <div class="counts__item position-relative col-6 col-sm-4 col-md-4 col-lg-3 text-center">
        <div class="counts__icon"><i class="fas fa-users"></i></div>
        <div class="counts__plus d-flex align-items-center">
          <div class="counts__count counter" data-count="45000">45000 <span>+</span></div>
        </div>
        <div class="counts__text">FACEBOOK FOLLOWERS</div>
      </div>
    </div>
  </div>
</div>
<!--	Start Product Section -->
<section class="section__products isLoading" id="sectionFive">
  <div class="container-fluid p-0">
    <div class="products row m-0">
      <div class="col-6 products__right"></div>
      <div class="col-6 products__left">
        <h2 class="fc-white">Great Product of Best Software Company</h2>
        <h3 class="products__h3">Responsive SEO Friendly Website</h3>
        <p class="products__p">We incorporate various responsive elements to web designing to attract more traffic to your site and generate sales. This also makes your website look good and perform optimally across all devices. </p>
        <h3 class="products__h3">High Quality Mobile Application</h3>
        <p class="products__p">We are one of the popular software houses in Pakistan in building professional apps that are optimized according to industry standards. We focus on simplicity and a user-friendly design that makes your users stay for longer periods of time. </p>
        <h3 class="products__h3">Top Rated in Google Searches</h3>
        <p class="products__p">Our search engine optimization strategies are guaranteed to rank your site high among Google search lists. We are top rated software house in the world of organic searches thus putting your website at the top.</p>
      </div>
    </div>
  </div>
</section>
<!--	Start Choose Section -->
<section class="section__choose isLoading pt-2 bg-images" id="sectionSix">
  <div class="container">
    <div class="icon-section text-center"><i class="fa fa-sun"></i> </div>
    <h2>Why to Choose Digital Applications</h2>
    <h2 class="h2-sub">Most Popular Top Rated Software House in Pakistan</h2>
    <div class="row">
      <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-4 pt-4">
        <div class="choose__item row">
          <div class="col-3">
            <div class="choose__icon"> <i class="fa fa-life-ring"></i> </div>
          </div>
          <div class="choose__text col-9">
            <h3 class="choose__h">Affordable Web Services</h3>
            <p class="choose__p">All our services are offered at competitive market rates which offer excellent value for your money. </p>
          </div>
        </div>
        <div class="choose__item row">
          <div class="col-3">
            <div class="choose__icon"> <i class="fa fa-star"></i></div>
          </div>
          <div class="choose__text col-9">
            <h3 class="choose__h">Great Support</h3>
            <p class="choose__p">We have a robust support structure which you can utilize 24/7, getting answers to all queries. </p>
          </div>
        </div>
        <div class="choose__item row">
          <div class="col-3">
            <div class="choose__icon"> <i class="fa fa-umbrella"></i> </div>
          </div>
          <div class="choose__text col-9">
            <h3 class="choose__h">We Are On Time And Budget</h3>
            <p class="choose__p">You can stay assured that we will never go over budget as fees are paid upfront. </p>
          </div>
        </div>
        <div class="choose__item row">
          <div class="col-3">
            <div class="choose__icon"> <i class="fa fa-coffee"></i> </div>
          </div>
          <div class="choose__text col-9 col-8">
            <h3 class="choose__h">Social Marketing</h3>
            <p class="choose__p">We create social marketing tactics that are creative and geared towards gaining traffic quickly and efficiently. </p>
          </div>
        </div>
      </div>
      <div class="col-4 d-none d-sm-none d-md-none d-lg-none d-xl-block choose__center"> <img class="lazyload" src="images/image-loader.gif" data-src="images/man1.png" alt="man-image"> </div>
      <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-4 d-none d-sm-none d-md-block d-lg-block pt-4">
        <div class="choose__item row">
          <div class="choose__text col-9">
            <h3 class="choose__h">ROI Driven Focus</h3>
            <p class="choose__p">Our solutions are focused towards high ROI and getting the most out of every penny spent. </p>
          </div>
          <div class="col-3">
            <div class="choose__icon"> <i class="fa fa-gem"></i> </div>
          </div>
        </div>
        <div class="choose__item row">
          <div class="choose__text col-9">
            <h3 class="choose__h">Talented Team Of Developers</h3>
            <p class="choose__p">Our team has some very talented individuals in the industry that have a wealth of experience. </p>
          </div>
          <div class="col-3">
            <div class="choose__icon"> <i class="fa fa-gift"></i> </div>
          </div>
        </div>
        <div class="choose__item row">
          <div class="choose__text col-9">
            <h3 class="choose__h">Continuous Improvement</h3>
            <p class="choose__p">Our strategies and services are constantly evolving with our past experiences which improves our future projects. </p>
          </div>
          <div class="col-3">
            <div class="choose__icon"> <i class="fa fa-cut"></i> </div>
          </div>
        </div>
        <div class="choose__item row">
          <div class="choose__text col-9">
            <h3 class="choose__h">Clear Communication</h3>
            <p class="choose__p">We are a firm that listens to our clients and understands them to deliver amazing results. </p>
          </div>
          <div class="col-3">
            <div class="choose__icon"> <i class="fa fa-shopping-cart"></i></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--	Starts Buying Section -->
<section class="section__buy isLoading text-center" id="sectionSeven">
  <div class="container">
    <div class="col-12">
      <div class="money d-flex justify-content-center flex-wrap"><span class="sp-h1"> Manage Your Projects with </span>
        <h2>Best Software Company </h2>
      </div>
      <p class="buy__p">Doing business like this takes much more effort with an element of risk but with Digital Applications, you can stay assured about every penny spent on your projects because we are the one very popular &amp; highly rated software company around the world.</p>
      <a href="/contact.php">
      <div class="a-btn a-btn-corner hvr-bounce-to-right"><span>Purchase</span></div>
      </a> </div>
  </div>
</section>
<!--	Starts Skills Section -->
<section class="section__skills bg-images" id="sectionEight">
  <div class="container">
    <div class="row">
      <div id="skills" class="col-12 col-sm-12 col-md-12 col-lg-7 align-self-center">
        <h2>Main Area of Expertise</h2>
        <div class="skills__item d-flex flex-column w-100">
          <div class="skills__title">Website Development – (98%)</div>
          <div class="skills__outer">
            <div class="skills__inner" data-percent="98%"></div>
            <span>98 %</span> </div>
        </div>
        <div class="skills__item d-flex flex-column w-100 my-2">
          <div class="skills__title">Android App Development – (96%)</div>
          <div class="skills__outer">
            <div class="skills__inner" data-percent="96%"></div>
            <span>96 %</span> </div>
        </div>
        <div class="skills__item d-flex flex-column w-100 my-2">
          <div class="skills__title">Digital Marketing – (95%)</div>
          <div class="skills__outer">
            <div class="skills__inner" data-percent="95%"></div>
            <span>95 %</span> </div>
        </div>
        <div class="skills__item d-flex flex-column w-100 my-2">
          <div class="skills__title">Graphics Designing – (92%)</div>
          <div class="skills__outer">
            <div class="skills__inner" data-percent="92%"></div>
            <span>92 %</span> </div>
        </div>
        <div class="skills__item d-flex flex-column w-100 my-2">
          <div class="skills__title">Online Trainings – (97%)</div>
          <div class="skills__outer">
            <div class="skills__inner" data-percent="97%"></div>
            <span>97 %</span> </div>
        </div>
        <div class="skills__item d-flex flex-column w-100 my-2 mb-0 mb-md-4 mb-lg-4 mb-xl-0">
          <div class="skills__title">PhotoGraphy – (91%)</div>
          <div class="skills__outer">
            <div class="skills__inner" data-percent="91%"></div>
            <span>91 %</span> </div>
        </div>
      </div>
      <div class="col-12 col-sm-5 col-md-6 col-lg-5 align-self-center d-none d-lg-block">
        <div class="skills__image"> <img class="lazyload" src="images/image-loader.gif" data-src="images/man2.png" alt="man-image" width="330" height="400"> </div>
      </div>
    </div>
  </div>
</section>
<!--Starts Counts Section -->
<div class="section__counts isLoading" id="sectionNine">
  <div class="container">
    <div class="row" id="count2">
      <div class="counts__item position-relative col-6 col-sm-6 col-md-4 col-lg-3 text-center">
        <div class="counts__icon"><i class="fas fa-project-diagram"></i></div>
        <div class="counts__plus d-flex align-items-center">
          <div class="counts__count counter" data-count="1500">1500 <span>+</span></div>
        </div>
        <div class="counts__text">SUCCESSFULL PROJECTS</div>
      </div>
      <div class="counts__item position-relative col-6 col-sm-6 col-md-4 col-lg-3 text-center">
        <div class="counts__icon"><i class="fas fa-smile"></i></div>
        <div class="counts__plus d-flex align-items-center">
          <div class="counts__count counter" data-count="600">600 <span>+</span></div>
        </div>
        <div class="counts__text">HAPPY CLIENTS</div>
      </div>
      <div class="counts__item position-relative col-6 col-sm-4 col-md-4 col-lg-3 text-center">
        <div class="counts__icon"><i class="fab fa-connectdevelop"></i></div>
        <div class="counts__plus d-flex align-items-center">
          <div class="counts__count counter" data-count="22">22 <span>+</span></div>
        </div>
        <div class="counts__text">EXPERT DEVELOPERS</div>
      </div>
      <div class="counts__item position-relative col-6 col-sm-4 col-md-4 col-lg-3 text-center">
        <div class="counts__icon"><i class="fas fa-users"></i></div>
        <div class="counts__plus d-flex align-items-center">
          <div class="counts__count counter" data-count="45000">45000 <span>+</span></div>
        </div>
        <div class="counts__text">FACEBOOK FOLLOWERS</div>
      </div>
    </div>
  </div>
</div>
<!--Starts Faqs Section -->
<section class="router-section p-0 isLoading text-center bg-images" id="sectionTen">
  <div class="container-fluid">
    <div class="container py-2 py-sm-3 py-md-4 py-lg-4 py-xl-5">
      <div class="row align-items-center">
        <div class="col-md-12 col-lg-4 pt-5 py-2"> <img class="img-fluid lazyload" src="images/image-loader.gif" data-src="images/it-consultancy-mid.png" alt="Service_Image"> </div>
        <div class="col-md-12 col-lg-8 pt-5 py-2 ord-sm-2">
          <h2 class=" sec-shead">Why Is It Important To Have A High Quality Business Website?</h2>
          <p class="py-2">Having a website allows a business to tap into the huge user base that the internet offers. Nowadays, almost everyone is online and so having a high-quality website helps a business to increase its revenue stream. It is a cost-effective method to increase sales and increases the credibility of a brand. <span class="only-pc"> We are known as <strong>Best Software House for Website Development</strong>. Our developed websites are fully responsive, cross browser compatible, SEO friendly and most importantly, highly secure from hacking and spamming. </span> .</p>
          <a href="#">
          <div class="a-btn a-btn-corner hvr-bounce-to-right"><span>Read more </span><i class="fa fa-arrow-right "></i> </div>
          </a> </div>
      </div>
    </div>
  </div>
  <div class="container-fluid bg-same bg-gradient">
    <div class="container py-2 py-sm-3 py-md-4 py-lg-4 py-xl-5">
      <div class="row align-items-center">
        <div class="col-md-12 col-lg-8 py-2 py-md-3 py-lg-4 py-xl-5 ord-sm-2">
          <h2 class="sec-shead text-white">What Are The Recent Trends of Mobile Apps in Business?</h2>
          <p class="py-2 text-light">Mobile applications have always focused itself on innovation to keep pace with the rapid development of the market. Recent trends suggest mobile apps are heading towards the blockchain technology and augmented reality. Artificial intelligence and Internet of Things (IoT) are also trending currently<span class="only-pc">, and a vast number of mobile apps are being developed in this niche to capture newer customers. We are also one of the <em>Software Companies in Pakistan </em>in the field of this race.</span> </p>
          <a href="#">
          <div class="a-btn a-btn-corner hvr-bounce-to-right"><span>Read more </span><i class="fa fa-arrow-right "></i> </div>
          </a> </div>
        <div class="col-md-12 col-lg-4 py-2 py-md-3 py-lg-4 py-xl-5"> <img class="img-fluid lazyload" src="images/image-loader.gif" data-src="images/web-development-mid.png" alt="Service_Image"> </div>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <div class="container py-2 py-sm-3 py-md-4 py-lg-4 py-xl-5">
      <div class="row align-items-center">
        <div class="col-md-12 col-lg-4 pt-5"> <img class="img-fluid lazyload" src="images/image-loader.gif" data-src="images/website-development-services-mid.png" alt="Custom Web Applications"> </div>
        <div class="col-md-12 col-lg-8 pt-5 ord-sm-2">
          <h2 class="sec-shead">Is Search Engine Optimization Necessary?</h2>
          <p class="py-2">A site that uses good SEO practices will always get good traffic. SEO is very important for ranking webpages high in Google searches. SEO is an efficient way of making website more user friendly and easier for your visitors to navigate. Using proper SEO and getting your site well optimized can help your business grow and meet your desired goals. Digital Applications is highly focused Software House in Pakistan for SEO based Web Development..</p>
          <a href="#">
          <div class="a-btn a-btn-corner hvr-bounce-to-right"><span>Read more </span><i class="fa fa-arrow-right "></i> </div>
          </a> </div>
      </div>
    </div>
  </div>
  <div class="container-fluid bg-same bg-gradient">
    <div class="container py-2 py-sm-3 py-md-4 py-lg-4 py-xl-5">
      <div class="row align-items-center">
        <div class="col-md-12 col-lg-8 py-2 py-md-3 py-lg-4 py-xl-5 ord-sm-2">
          <h2 class="sec-shead text-white">How to Grow A Business Online? (Training Program)</h2>
          <p class="py-2 text-light">Blogging along with videos and infographics make up a core part of the online business strategy for successful brands. Optimizing website according to industry standards and using high-quality content on your site will create a steady stream of traffic. Using social media marketing will also help to create more buzz about your business and generate sales in the long run. Our Professional Software Company teaches you, how to grow a business online.</p>
          <a href="#">
          <div class="a-btn a-btn-corner hvr-bounce-to-right"><span>Read more </span><i class="fa fa-arrow-right "></i> </div>
          </a> </div>
        <div class="col-md-12 col-lg-4 py-2 py-md-3 py-lg-4 py-xl-5"> <img class="img-fluid lazyload" src="images/image-loader.gif" data-src="images/responsive-web-design-and-development-mid.png" alt="Responsive Website Design"> </div>
      </div>
    </div>
  </div>
</section>
<!--Starts Slider Section -->
<section class="section__news isLoading py-5 bg-images" id="section14">
  <div class="container">
    <div class="icon-section icon-center"><i class="fa fa-sun"></i> </div>
    <h2>Latest News</h2>
    <h2 class="h2-sub">before they talk to investors. </h2>
    <div class="owl-carousel owl-theme">
      <div class="item">
        <div class="news__body"> <img class="lazyload" src="images/image-loader.gif" data-src="/images/internet-merits-demertis.jpg" alt="internet-merits-demertis">
          <div class="news__hover"> <a href="/" target="_blank">
            <p class="news__hover-icon"> <i class="fa fa-link"></i> </p>
            </a> </div>
        </div>
        <div class="news__head"><a href="/" target="_blank"> What are the Advantages and Disadvantages of Internet?</a></div>
        <hr class="hr-dual">
        <div class="news__footer">
          <div class="news__date">
            <div class="news__icon"><i class="far fa-calendar-alt"></i> </div>
            <div class="news__text">18 Dec 2018</div>
          </div>
          <div class="news__views">
            <div class="news__icon"><i class="fa fa-eye"></i> </div>
            <div class="news__text">267,414 </div>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="news__body"> <img class="lazyload" src="images/image-loader.gif" data-src="images/domain-names.jpg" alt="domain-names">
          <div class="news__hover"> <a href="/" target="_blank">
            <p class="news__hover-icon"> <i class="fa fa-link"></i> </p>
            </a> </div>
        </div>
        <div class="news__head"><a href="/" target="_blank">10 Best Tips of Choosing Domain Names for Online Business </a></div>
        <hr class="hr-dual">
        <div class="news__footer">
          <div class="news__date">
            <div class="news__icon"><i class="far fa-calendar-alt"></i> </div>
            <div class="news__text">19 Dec 2018</div>
          </div>
          <div class="news__views">
            <div class="news__icon"><i class="fa fa-eye"></i> </div>
            <div class="news__text">1,809 </div>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="news__body"> <img class="lazyload" src="images/image-loader.gif" data-src="/images/keyword-research-for-Ranking.jpg" alt="keyword-research-for-Ranking">
          <div class="news__hover"> <a href="/" target="_blank">
            <p class="news__hover-icon"> <i class="fa fa-link"></i> </p>
            </a> </div>
        </div>
        <div class="news__head"><a href="/" target="_blank">Importance of Keywords for Ranking a Website in Google Search Engine </a></div>
        <hr class="hr-dual">
        <div class="news__footer">
          <div class="news__date">
            <div class="news__icon"><i class="far fa-calendar-alt"></i> </div>
            <div class="news__text">20 Dec 2018</div>
          </div>
          <div class="news__views">
            <div class="news__icon"><i class="fa fa-eye"></i> </div>
            <div class="news__text">2,019 </div>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="news__body"> <img class="lazyload" src="images/image-loader.gif" data-src="/images/default-image.png" alt="news blog image">
          <div class="news__hover"> <a href="/" target="_blank">
            <p class="news__hover-icon"> <i class="fa fa-link"></i> </p>
            </a> </div>
        </div>
        <div class="news__head"><a href="/" target="_blank"> Why Is It Important To Have A High Quality Business Website? </a></div>
        <hr class="hr-dual">
        <div class="news__footer">
          <div class="news__date">
            <div class="news__icon"><i class="far fa-calendar-alt"></i> </div>
            <div class="news__text">27 Feb 2019</div>
          </div>
          <div class="news__views">
            <div class="news__icon"><i class="fa fa-eye"></i> </div>
            <div class="news__text">1,878 </div>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="news__body"> <img class="lazyload" src="images/image-loader.gif" data-src="/images/link-building.png" alt="link-building">
          <div class="news__hover"> <a href="/" target="_blank">
            <p class="news__hover-icon"> <i class="fa fa-link"></i> </p>
            </a> </div>
        </div>
        <div class="news__head"><a href="/" target="_blank">7 Ways of Organic Link Building to Improve SERP Rankings </a></div>
        <hr class="hr-dual">
        <div class="news__footer">
          <div class="news__date">
            <div class="news__icon"><i class="far fa-calendar-alt"></i> </div>
            <div class="news__text">24 Nov 2018</div>
          </div>
          <div class="news__views">
            <div class="news__icon"><i class="fa fa-eye"></i> </div>
            <div class="news__text">1,892 </div>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="news__body"> <img class="lazyload" src="images/image-loader.gif" data-src="images/internet-merits-demertis.jpg" alt="internet-merits-demertis">
          <div class="news__hover"> <a href="/" target="_blank">
            <p class="news__hover-icon"> <i class="fa fa-link"></i> </p>
            </a> </div>
        </div>
        <div class="news__head"><a href="/" target="_blank"> What are the Advantages and Disadvantages of Internet? </a></div>
        <hr class="hr-dual">
        <div class="news__footer">
          <div class="news__date">
            <div class="news__icon"><i class="far fa-calendar-alt"></i> </div>
            <div class="news__text">18 Dec 2018</div>
          </div>
          <div class="news__views">
            <div class="news__icon"><i class="fa fa-eye"></i> </div>
            <div class="news__text">267,414 </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php include("inc/footer.php"); ?>
</body>
</html>