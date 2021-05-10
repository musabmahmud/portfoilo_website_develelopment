<?php
    require "header.php";

    $service = "SELECT * FROM service WHERE status = 1";
    $service_query = mysqli_query($db,$service);

    $educations = "SELECT * FROM educations ORDER BY year DESC";
    $educations_query = mysqli_query($db,$educations);

    $portfolio = "SELECT * FROM portfolio WHERE status = 1";
    $portfolio_query = mysqli_query($db,$portfolio);
    
    $counter = "SELECT * FROM customer_count";
    $counter_query = mysqli_query($db,$counter);

    $testimonials = "SELECT * FROM testimonials WHERE status = 1";
    $testimonials_query = mysqli_query($db,$testimonials);

    
    $banner = "SELECT * FROM banner WHERE status = 1";
    $banner_query = mysqli_query($db,$banner);
?>
        <!-- main-area -->
        <main>

            <!-- banner-area -->
            <section id="home" class="banner-area banner-bg fix">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-7 col-lg-6">
                            <div class="banner-content">
                                <h6 class="wow fadeInUp" data-wow-delay="0.2s">HELLO!</h6>
                                <h2 class="wow fadeInUp" data-wow-delay="0.4s">I am Will Musab</h2>
                                <p class="wow fadeInUp" data-wow-delay="0.6s">I'm Will Musab, <?= $settings_assoc['tagline']?></p>
                                <div class="banner-social wow fadeInUp" data-wow-delay="0.8s">
                                <ul>
                                    <?php
                                        $i = 0;
                                        foreach ($social_query as $social) {
                                          $i++;
                                    ?>  
                                        <li><a href="<?= $social['link'] ?>"><i class="<?= $social['icon'] ?>"></i></a></li>
                                    <?php
                                        }
                                    ?>
                                </ul>
                                </div>
                                <a href="#" class="btn wow fadeInUp" data-wow-delay="1s">SEE PORTFOLIOS</a>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-6 d-none d-lg-block">
                            <div class="banner-img text-right">
                                <img src="front/img/banner/banner_img.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="banner-shape"><img src="front/img/shape/dot_circle.png" class="rotateme" alt="img"></div>
            </section>
            <!-- banner-area-end -->

            <!-- about-area-->
            <section id="about" class="about-area primary-bg pt-120 pb-120">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="about-img">
                                <img src="front/img/banner/banner_img2.png" title="me-01" alt="me-01">
                            </div>
                        </div>
                        <div class="col-lg-6 pr-90">
                            <div class="section-title mb-25">
                                <span>Introduction</span>
                                <h2>About Me</h2>
                            </div>
                            <div class="about-content">
                                <p><?= $settings_assoc['about']?></p>
                                <h3>Education:</h3>
                            </div>
                            <!-- Education Item -->
                            <?php
                                $i = 0;
                                foreach ($educations_query as $education) {
                                    $i++;
                            ?>
                                
                            <div class="education">
                                <div class="year"><?= $education['year']?></div>
                                <div class="line"></div>
                                <div class="location">
                                    <span><?= $education['title']?></span>
                                    <div class="progressWrapper">
                                        <div class="progress">
                                            <div class="progress-bar wow slideInLefts" data-wow-delay="0.2s" data-wow-duration="2s" role="progressbar" style="width: <?= $education['progress']?>%;" aria-valuenow="<?= $education['progress']?>" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Education Item -->
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </section>
            <!-- about-area-end -->

            <!-- Services-area -->
            <section id="service" class="services-area pt-120 pb-50">
				<div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8">
                            <div class="section-title text-center mb-70">
                                <span>WHAT WE DO</span>
                                <h2>Services and Solutions</h2>
                            </div>
                        </div>
                    </div>
					<div class="row">
                        <?php
                            $i = 0;
                            foreach ($service_query as $service) {
                                $i++;
                            ?>
    						<div class="col-lg-4 col-md-6">
    							<div class="icon_box_01 wow fadeInLeft" data-wow-delay="0.2s">
                                    <i class="<?= $service['icon'];?>"></i>
    								<h3><?= $service['name'];?></h3>
    								<p>
                                        <?= $service['summary'];?>
    								</p>
    							</div>
    						</div>
                        <?php } ?>
					</div>
				</div>
			</section>
            <!-- Services-area-end -->

            <!-- Portfolios-area -->
            <section id="portfolio" class="portfolio-area primary-bg pt-120 pb-90">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8">
                            <div class="section-title text-center mb-70">
                                <span>Portfolio Showcase</span>
                                <h2>My Recent Best Works</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <?php
                            $i = 0;
                            foreach ($portfolio_query as $portfolio_value) {
                                $i++;
                        ?>  
                        <div class="col-lg-4 col-md-6 pitem">
                            <div class="speaker-box">
								<div class="speaker-thumb">
									<img src="front/img/images/<?= $portfolio_value['thumbnail'];?>" alt="img">
								</div>
								<div class="speaker-overlay">
									<span><?=$portfolio_value['category']?></span>
									<h4><a href="portfolio-single.php?id=<?= $portfolio_value['id'];?>"><?=$portfolio_value['title']?></a></h4>
									<a href="portfolio-single.php?id=<?= $portfolio_value['id'];?>" class="arrow-btn">More Here <span></span></a>
								</div>
							</div>
                        </div>
                        <?php
                            }
                        ?>
                    </div>
                </div>
            </section>
            <!-- services-area-end -->


            <!-- fact-area -->
            <section class="fact-area">
                <div class="container">
                    <div class="fact-wrap">
                        <div class="row justify-content-between">
                            <?php
                            $i = 0;
                            foreach ($counter_query as $count) {
                                $i++;
                            ?>
                            <div class="col-xl-2 col-lg-3 col-sm-6">
                                <div class="fact-box text-center mb-50">
                                    <div class="fact-icon">
                                        <i class="<?= $count['icon']?>"></i>
                                    </div>
                                    <div class="fact-content">
                                        <h2><span class="count"><?= $count['number']?></span>+</h2>
                                        <span><?= $count['name']?></span>
                                    </div>
                                </div>
                            </div>
                            <?php }?>
                        </div>
                    </div>
                </div>
            </section>
            <!-- fact-area-end -->

            <!-- testimonial-area -->
            <section class="testimonial-area primary-bg pt-115 pb-115">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8">
                            <div class="section-title text-center mb-70">
                                <span>testimonial</span>
                                <h2>happy customer quotes</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-xl-9 col-lg-10">
                            <div class="testimonial-active">
                            <?php
                                $i = 0;
                                foreach ($testimonials_query as $testi_value) {
                                    $i++;
                            ?>
                                <div class="single-testimonial text-center">
                                    <div class="testi-avatar">
                                    <img src="front/img/images/<?= $testi_value['image'];?>" alt="img">
                                    </div>
                                    <div class="testi-content">
                                        <h4><span>“</span> <?= $testi_value['quotes'];?> <span>”</span></h4>
                                        <div class="testi-avatar-info">
                                            <h5><?= $testi_value['name'];?></h5>
                                            <span><?= $testi_value['position'];?></span>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- testimonial-area-end -->

            <!-- brand-area -->
            <div class="barnd-area pt-100 pb-100">
                <div class="container">
                    <div class="row brand-active">
                    <?php
                        $i = 0;
                        foreach ($banner_query as $banner) {
                            $i++;
                    ?>
                        <div class="col-xl-2">
                            <div class="single-brand">
                                <img src="front/img/brand/<?= $banner['image'];?>" alt="img">
                            </div>
                        </div>
                    <?php } ?>
                    </div>
                </div>
            </div>
            <!-- brand-area-end -->

            <!-- contact-area -->
            <section id="contact" class="contact-area primary-bg pt-120 pb-120">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="section-title mb-20">
                                <span>information</span>
                                <h2>Contact Information</h2>
                            </div>
                            <div class="contact-content">
                                <p>Event definition is - somthing that happens occurre How evesnt sentence. Synonym when an unknown printer took a galley.</p>
                                <h5>OFFICE IN <span>NEW YORK</span></h5>
                                <div class="contact-list">
                                    <ul>
                                        <li><i class="fas fa-map-marker"></i><span>Address :</span><?=$settings_assoc['office_address']?></li>
                                        <li><i class="fas fa-headphones"></i><span>Phone :</span><?=$settings_assoc['phone']?></li>
                                        <li><i class="fas fa-globe-asia"></i><span>e-mail :</span><?=$settings_assoc['email']?></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="contact-form">
                                <form action="contact-post.php" method="post">
                                    <input type="text" placeholder="your name *" name="name">
                                    <input type="email" placeholder="your email *" name="email">
                                    <textarea id="message" placeholder="your message *" name="summary"></textarea>
                                    <button class="btn">SEND</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- contact-area-end -->

        </main>
        <!-- main-area-end -->
        

<?php
    require "footer.php";
?>