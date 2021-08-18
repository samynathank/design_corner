<section id="featured">
    <!-- start slider -->
    <!-- Slider -->
    <div id="nivo-slider">
        <div class="nivo-slider">
            <?php
            $sql_slider = "SELECT * FROM tb_slider WHERE page_name='1'";
            $sql_prepare = $conn->prepare($sql_slider);
            $sql_prepare->execute();
            $slider_array = $sql_prepare->fetchAll();

            foreach ($slider_array as $file_path) {
            ?>
                <img class="img-fluid img-thumbnail" src="uploads/<?php echo $file_path['file_path']; ?>" alt="" title="#caption-<?php echo $file_path['slider_id']; ?>" />

            <?php } ?>
        </div>
        <div class="container">
            <div class="row">
                <div class="span12">
                    <!-- Slide #1 caption -->
                    <?php

                    foreach ($slider_array as $values) {

                    ?>
                        <div class="nivo-caption" id="caption-<?php echo $values['slider_id']; ?>">
                            <div>
                                <h2><?php echo $values['caption_heading']; ?></h2>
                                <p>
                                    <?php echo $values['caption_details']; ?>
                                </p>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    <!-- end slider -->
</section>
<!-- <section class="callaction">

</section> -->
<section id="content">
    <div class="container">
        <!-- <div class="row">
            <div class="span12">
                <div class="big-cta">
                    <div class="cta-text">
                        <h3>
                            Our <strong> Services</strong>
                        </h3>
                    </div>
                    <div style="display: none;" class="cta floatright">
                        <a class="btn btn-large btn-theme btn-rounded" href="#">Request a quote</a>
                    </div>
                </div>
            </div>
        </div> -->
        <div class="row">
            <div class="span12">
            <div class="cta-text">
                        <h3>
                            Our <strong> Services</strong>
                        </h3>
                </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="span12">
                <div class="row">
                    <?php
                    $sql_services = "SELECT * FROM our_service WHERE 1";
                    $sql_prepare = $conn->prepare($sql_services);
                    $sql_prepare->execute();
                    $service_array = $sql_prepare->fetchAll();

                    foreach ($service_array as $service) {

                    ?>
                        <style>
                            div.nivo-caption {
                                display: none !important;
                            }
                        </style>
                        <div class="span3">
                            <div class="box aligncenter">
                                <div class="aligncenter icon">
                                    <i class="<?php echo $service['service_icon']; ?> icon-circled icon-64 active"></i>
                                </div>
                                <?php if ($service['service_head'] != '' || $service['service_content'] != '') { ?>

                                    <div class="text">

                                        <h6><?php echo ucfirst($service['service_head']); ?></h6>
                                        <p>
                                            <?php echo $service['service_content']; ?>
                                        </p>
                                        <!-- <a href="#">Learn more</a> -->
                                    </div>
                                <?php  } ?>
                            </div>
                        </div>
                    <?php } ?>
                    <!-- <div class="span3">
                        <div class="box aligncenter">
                            <div class="aligncenter icon">
                                <i class="icon-desktop icon-circled icon-64 active"></i>
                            </div>
                            <div class="text">
                                <h6>Responsive theme</h6>
                                <p>
                                    Lorem ipsum dolor sit amet, has ei ipsum scaevola deseruisse am sea facilisis.
                                </p>
                                <a href="#">Learn more</a>
                            </div>
                        </div>
                    </div>
                    <div c/lass="span3">
                        <div class="box aligncenter">
                            <div class="aligncenter icon">
                                <i class="icon-beaker icon-circled icon-64 active"></i>
                            </div>
                            <div class="text">
                                <h6>Coded carefully</h6>
                                <p>
                                    Lorem ipsum dolor sit amet, has ei ipsum scaevola deseruisse am sea facilisis.
                                </p>
                                <a href="#">Learn more</a>
                            </div>
                        </div>
                    </div>
                    <div class="span3">
                        <div class="box aligncenter">
                            <div class="aligncenter icon">
                                <i class="icon-coffee icon-circled icon-64 active"></i>
                            </div>
                            <div class="text">
                                <h6>Sit and enjoy</h6>
                                <p>
                                    Lorem ipsum dolor sit amet, has ei ipsum scaevola deseruisse am sea facilisis.
                                </p>
                                <a href="#">Learn more</a>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
        <!-- divider -->
        <div class="row">
            <div class="span12">
                <div class="solidline">
                </div>
            </div>
        </div>
        <!-- end divider -->
        <!-- Portfolio Projects -->
        <div class="row">
            <div class="span12">
                <h4 class="heading">Our recent <strong>works</strong></h4>
                <div class="row">
                    <section id="projects">
                        <ul id="thumbs" class="portfolio">
                            <?php
                            $sql = "SELECT * FROM portfolio WHERE homepage_display = 1";

                            $prepare = $conn->prepare($sql);
                            $exe = $prepare->execute();
                            $fetch_details = $prepare->fetchAll();
                            $si_no = 0;
                            foreach ($fetch_details as $values) {
                                $si_no++;
                                $catogry = $values['portfolio_categori'];
                            ?>

                                <!-- Item Project and Filter Name -->
                                <li class="item-thumbs span3 design" data-id="id-<?php echo $si_no; ?>" data-type="<?php echo $catogry; ?>">
                                    <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                                    <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="<?php echo $values['portfolio_name']; ?>" href="uploads/portfolio/<?php echo $values['portfolio_image_path']; ?>">
                                        <span class="overlay-img"></span>
                                        <span class="overlay-img-thumb font-icon-plus"></span>
                                    </a>
                                    <!-- Thumb Image and Description -->
                                    <img class="" src="uploads/portfolio/<?php echo $values['portfolio_image_path']; ?>" alt="<?php echo $values['portfolio_content'] ?>">
                                </li>
                                <!-- End Item Project -->

                            <?php
                            }
                            ?>
                        </ul>
                    </section>
                </div>
            </div>
        </div>
        <!-- End Portfolio Projects -->
        <!-- divider -->
        <div class="row">
            <div class="span12">
                <div class="solidline">
                </div>
            </div>
        </div>
        <!-- end divider -->
        <div class="row">
            <div class="span12">
                <h4>Very satisfied <strong>clients</strong></h4>
                <ul id="mycarousel" class="jcarousel-skin-tango recent-jcarousel clients">
                    <?php
                    $sql_slider = "SELECT * FROM tb_slider WHERE page_name='3'";
                    $sql_prepare = $conn->prepare($sql_slider);
                    $sql_prepare->execute();
                    $slider_array = $sql_prepare->fetchAll();

                    foreach ($slider_array as $file_path) {
                    ?>
                        <li>
                            <a href="javascript:">

                                <img src="uploads/<?php echo $file_path['file_path']; ?>" class="client-logo" alt="" />
                            </a>
                        </li>
                    <?php } ?>

                </ul>
            </div>
        </div>
    </div>
</section>
<section id="bottom">
    <div class="container">
        <div class="row">
            <div class="span12">
                <div class="aligncenter">
                    <div id="twitter-wrapper">
                        <div id="twitter">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>