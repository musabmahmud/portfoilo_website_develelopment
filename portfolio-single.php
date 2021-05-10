<?php
    require "header.php";
    
    $id = $_GET['id'];

    $portfolio_count = "SELECT * FROM portfolio WHERE id = '$id'"; 
    $portfolio_query = mysqli_query($db,$portfolio_count);
    $portfolio_assoc = mysqli_fetch_assoc($portfolio_query);


?>
        <main>
            <!-- breadcrumb-area -->
            <section class="breadcrumb-area breadcrumb-bg d-flex align-items-center">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-10">
                            <div class="breadcrumb-content text-center">
                                <h1><?= $portfolio_assoc['title'];?></h1>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- breadcrumb-area-end -->

            <!-- portfolio-details-area -->
            <section class="portfolio-details-area pt-120 pb-120">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-9 col-lg-10">
                            <div class="single-blog-list">
                                <div class="blog-list-thumb mb-35">
                                    <img src="front/img/images/<?= $portfolio_assoc['thumbnail'];?>" alt="img">
                                </div>
                                <div class="blog-list-content blog-details-content portfolio-details-content">
                                    <h2><?= $portfolio_assoc['title'];?></h2>
                                    <p><?= $portfolio_assoc['summary'];?></p>
                                    <p><?= $portfolio_assoc['summary'];?></p>
                                    <p><?= $portfolio_assoc['summary'];?></p>

                                    <div class="blog-list-meta">
                                        <ul>
                                            <li class="blog-post-date">
                                                <h3>Share On</h3>
                                            </li>
                                            <li class="blog-post-share">
                                            <?php
                                                $i = 0;
                                                foreach ($social_query as $social) {
                                                $i++;
                                            ?>  
                                                <a href="<?= $social['link'] ?>"><i class="<?= $social['icon'] ?>"></i></a>
                                            <?php
                                                }
                                            ?>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="avatar-post mt-70 mb-60">
                                    <ul>
                                        <li>
                                            <div class="post-avatar-img">
                                                <img src="front/img/logo/<?php echo $settings_assoc['logo'];?>" alt="">
                                            </div>
                                            <div class="post-avatar-content">
                                                <h5>Musab Herlihy</h5>
                                                <p><?php echo $settings_assoc['about'];?></p>
                                                <div class="post-avatar-social mt-15">
                                            <?php
                                                $i = 0;
                                                foreach ($social_query as $social) {
                                                $i++;
                                            ?>  
                                                    <a href="<?= $social['link'] ?>"><i class="<?= $social['icon'] ?>"></i></a>
                                            <?php
                                                    }
                                            ?>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- portfolio-details-area-end -->

        </main>
<?php
    require "footer.php";
?>