        <section id="inner-headline">
            <div class="container">
                <div class="row">
                    <div class="span4">
                        <div class="inner-heading">
                            <h2>Testimonials</h2>
                        </div>
                    </div>
                    <div class="span8">
                        <ul class="breadcrumb">
                            <li><a href="index.php?file=home"><i class="icon-home"></i></a><i class="icon-angle-right"></i></li>
                            <li class="active">Testimonials</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section id="content">
            <div class="container">
                <div class="row marginbot30">
                    <div class="span12">
                        <h4 class="heading"><strong>Client</strong> testimonials<span></span></h4>
                        <?php
                        $sql_mini = "SELECT * FROM `testimonial` Where 1";
                        $sql_prepare = $conn->prepare($sql_mini);
                        $sql_prepare->execute();
                        $mini_array = $sql_prepare->fetchAll();
                        $si_no = 0;
                        foreach ($mini_array as $value) {
                            $si_no++;
                            if ($si_no % 2 == 1) {
                        ?>
                                <div class="row">
                                <?php  }     ?>

                                <div class="span6">
                                    <div class="wrapper">
                                        <div class="testimonial">
                                            <p class="text">
                                                <i class="icon-quote-left icon-48"></i> <?php echo $value['testimonial_content']; ?>
                                            </p>
                                            <div class="author">
                                                <img src="img/dummies/testimonial-author1.png" class="img-circle bordered" alt="" />
                                                <p class="name">
                                                    <?php echo $value['customer_name']; ?>
                                                </p>
                                                <span class="info"><?php echo $value['company_name']; ?> <a href="#"></a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php if ($si_no % 2 == 0) {  ?>
                                </div>
                        <?php    }
                            } ?>
                    </div>
                </div>
            </div>
        </section>