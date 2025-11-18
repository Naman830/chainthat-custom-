<?php

/**
 * Front Page Tempalte
 *
 */
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css" />

	<style>
		@import url("https://fonts.googleapis.com/css2?family=Figtree:ital,wght@0,300..900;1,300..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100..900;1,100..900&family=Sora:wght@100..800&display=swap");

		* {
			box-sizing: border-box;
			margin: 0;
			padding: 0;
			font-family: "Poppins", sans-serif;
			text-decoration: none;
		}

		:root {
			--main-color: #eb7923;
			--white-color: #ffffff;
			--green-color: #00524c;
			--black-color: #000;
		}

		img {
			max-width: 100%;
		}

		body {
			position: relative;
			
		}

		.container-all {
			width: 100% !important;
			max-width: 1600px !important;
			margin-left: auto !important;
			margin-right: auto !important;
			padding-left: 15px !important;
			padding-right: 15px !important;
			box-sizing: border-box !important;
		}

		.hero-area{
			width: 100%;
			height: 100vh;
		}


		

		/* TOP BARS */
		.swiper-pagination {
			top: 20px !important;
			bottom: auto !important;
			display: flex;
			justify-content: center;
			gap: 10px;
		}

		.swiper-pagination-bullet {
			width: 40px;
			height: 4px;
			border-radius: 2px;
			background: rgba(255, 255, 255, 0.3);
			opacity: 1;
			transition: 0.3s;
		}

		.swiper-pagination-bullet-active {
			background: #fff;
			width: 50px;
		}

		/* Slide styling */
		.swiper-slide {
			background: var(--white-color);
			display: flex;
			justify-content: flex-end;
			align-items: flex-start;
			flex-direction: column;
		}

		.swiper-pagination.swiper-pagination-clickable.swiper-pagination-bullets.swiper-pagination-horizontal {
    background: var(--main-color);
}

		.hero-img-col {
			position: absolute;
			top: 80px;
			right: 0;
		}

		.hero-img-col image {
			position: absolute;
			right: 0;
			max-width: 800px
		}

		.heading {
			margin-bottom: 22px;
			font-size: 3.7vw;
			font-weight: 700;
			color: var(--green-color);
		}

		.paragraph {
			margin-bottom: 26px;
			color: var(--black-color);
			font-size: 1.1vw;
			font-weight: 400;
		}

		.btn-all {
			padding: 15px 25px;
			text-decoration: none;
			transition: all 0.3s;
			color: var(--white-color);
			background: var(--main-color);
			border-width: 0px;
			border-radius: 26px;
			color: #FFFFFF;
			transition-duration: 400ms;
		}

		.btn-all:hover {
			color: var(--white-color);
			background: var(--green-color);
		}
	</style>
</head>

<body>
	<?php get_header(); ?>

	<section class="hero-area">
		<div class="container-all">
			<div class="row align-items-center">

				<!-- LEFT: HERO TEXT SLIDER -->
				<div class="col-lg-6 col-md-12">
					<div class="swiper mySwiper">
						<div class="swiper-wrapper">

							<div class="swiper-slide">
								<h3 class="heading">Insurance Focus</h3>
								<p class="paragraph">Empowering (re)insurers, MGAs, and brokers with advanced technology, we streamline
									operations and drive innovation. ChainThat enables agile insurance organizations
									that meet evolving customer needs to stay ahead in the market.</p>
								<button class="btn-all">Book a demo</button>
							</div>
							<div class="swiper-slide">
								<h3 class="heading">Industry Insider</h3>
								<p class="paragraph">Our team brings decades of combined experience from within the insurance sector,
									coupled with cutting-edge technological expertise.</p>
								<button class="btn-all">Book a demo</button>
							</div>
							<div class="swiper-slide">
								<h3 class="heading">Activate Agility</h3>
								<p class="paragraph">Activate your growth with ChainThat’s cloud-agnostic, SaaS-enabled platforms. Our
									intuitive and configurable technology enables your business to unlock its full
									potential.</p>
								<button class="btn-all">Book a demo</button>
							</div>

						</div>

						<!-- ONLY PAGINATION (3 bars) -->
						<div class="swiper-pagination"></div>

					</div>
				</div>

				<!-- RIGHT: FIXED IMAGE -->
				<div class="col-lg-6 col-md-12 hero-img-col">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/swoos3.png"
						alt="hero image">
				</div>

			</div>
		</div>
	</section>



	<?php get_footer(); ?>

	<script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
	<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
	<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
	<script>
		var swiper = new Swiper(".mySwiper", {
			slidesPerView: 1,
			loop: true,
			autoplay: {
				delay: 3000,
				disableOnInteraction: false,
			},
			speed: 700,
			pagination: {
				el: ".swiper-pagination",
				clickable: true,
			},
		});
	</script>
</body>

</html>