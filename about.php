<section id="inner-headline">
            <div class="container">
                <div class="row">
                    <div class="span4">
                        <div class="inner-heading">
                            <h2>About Us</h2>
                        </div>
                    </div>
                    <div class="span8">
                        <ul class="breadcrumb">
                            <li><a href="index.php?file=home"><i class="icon-home"></i></a><i class="icon-angle-right"></i></li>
                            <li class="active">About Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
<section id="content">
    <div class="container">
        <div class="row">
            <div class="span6">
            <?php
                        $sql_mini = "SELECT * FROM about ";
                        $sql_prepare = $conn->prepare($sql_mini);
                        $sql_prepare->execute();
                        $mini_array = $sql_prepare->fetchAll();
                        $si_no = 0;
                        foreach ($mini_array as $value) {
                            $si_no++;
                        ?>
                <h2><?php echo $value['cat_heading']; ?></h2>
                <p><?php echo $value['cat_content']; ?></p>
                <?php } ?>
            </div>
            <div class="span6">
                <!-- start flexslider -->
                <div class="flexslider">
                    <ul class="slides">
                        <?php
                        $sql_slider = "SELECT * FROM tb_slider WHERE page_name='2'";
                        $sql_prepare = $conn->prepare($sql_slider);
                        $sql_prepare->execute();
                        $slider_array = $sql_prepare->fetchAll();

                        foreach ($slider_array as $file_path) {
                        ?>
                            <li>
                                <img src="./uploads/<?php echo $file_path['file_path']; ?>" alt="" title="#caption-<?php echo $file_path['slider_id']; ?>" />
                            </li>
                        <?php } ?>
                    </ul>
                </div>
                <!-- end flexslider -->
            </div>
        </div>
        <!-- divider -->
        <div class="row">
            <div class="span12">
                <!-- <div class="solidline">
                </div> -->
            </div>
        </div>
        <!-- end divider -->
        <div class="row">
            <div class="row">
                <div class="span12">
                    <div class="solidline">
                    </div>
                </div>
            </div>
            <!-- end divider -->
            <div class="row">
                <div class="span12" style="display: none;">
                    <h4>More about us</h4>
                    <div class="accordion" id="accordion2">
                        <?php
                        $sql_mini = "SELECT * FROM about ";
                        $sql_prepare = $conn->prepare($sql_mini);
                        $sql_prepare->execute();
                        $mini_array = $sql_prepare->fetchAll();
                        $si_no = 0;
                        foreach ($mini_array as $value) {
                            $si_no++;
                        ?>
                            <div class="accordion-group">
                                <div class="accordion-heading">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse<?php echo $value['cat_id']; ?>">
                                        <?php echo $si_no . "." . $value['cat_heading']; ?></a>
                                </div>
                                <div id="collapse<?php echo $value['cat_id']; ?>" class="accordion-body collapse">
                                    <div class="accordion-inner">
                                        <p>
                                            <?php echo $value['cat_content']; ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                        <!-- <div class="accordion-group">
                            <div class="accordion-heading">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
                                    2. Our Work </a>
                            </div>
                            <div id="collapseTwo" class="accordion-body collapse">
                                <div class="accordion-inner">
                                    <p>
                                        Nihil suscipit posidonium eos id. An cetero fierent insolens mel, ex sit rebum falli erroribus. Ius in nemore dolorum officiis. Et vel harum dicant, vix eius persius an. Ex eam malis postea, erat nihil consulatu nam ea. Ex quem dolores euripidis eum,
                                        tempor aperiam voluptaria has ad. Ea est persecuti dissentiet voluptatibus, at illum malorum minimum usu eum aeterno tritani.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-group">
                            <div class="accordion-heading">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">
                                    3. Quality assurance </a>
                            </div>
                            <div id="collapseThree" class="accordion-body collapse">
                                <div class="accordion-inner">
                                    <p>
                                        Vel purto oportere principes ne, ut mel graeco omnesque. Habeo justo congue mei cu, eu est molestie sensibus, oratio tibique ad mei. Admodum consetetur cu eam, nec cu doming prompta inciderint, ne vim ceteros mnesarchum scriptorem. Ex eam malis postea,
                                        erat nihil consulatu nam ea. Ex quem dolores euripidis eum, tempor aperiam voluptaria has ad. Et vel harum dicant vix.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-group">
                            <div class="accordion-heading">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseFour">
                                    4. What we can deliver </a>
                            </div>
                            <div id="collapseFour" class="accordion-body collapse">
                                <div class="accordion-inner">
                                    <p>
                                        Diam alienum oporteat ad vis, latine intellegebat cu his. Ei eros dicam commodo duo, an assum meliore eam. In sed albucius dissentiet. Sit laudem graece malorum ne, at eam omnesque expetenda pertinacia, tale meliore vim ea. Dolore legere deleniti ius
                                        at, mea nibh discere perfecto ex. Mea ea iuvaret eripuit, eos no vivendo intellegat definiebas, patrioque eloquentiam eos et.
                                    </p>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
                <div class="span6" style="display: none;">
                    <h4>Our expertise</h4>
                    <?php
                    $sql_mini = "SELECT * FROM `percentage` Where 1";
                    $sql_prepare = $conn->prepare($sql_mini);
                    $sql_prepare->execute();
                    $mini_array = $sql_prepare->fetchAll();
                    $si_no = 0;
                    foreach ($mini_array as $value) {
                        $si_no++;

                    ?>
                        <label><?php echo $value['per_title']; ?></label>
                        <div class="progress progress-info progress-striped active">
                            <div class="bar" style="width: <?php echo $value['percentage'];  ?>"><?php } ?>
                            </div>
                        </div>
                        <label>Web design :</label>
                        <div class="progress progress-success progress-striped active">
                            <div class="bar" style="width: 60%">
                            </div>
                        </div>
                        <label>Logo Design :</label>
                        <div class="progress progress-warning progress-striped active">
                            <div class="bar" style="width: 80%">
                            </div>
                        </div>
                        <label>Ilustrator :</label>
                        <div class="progress progress-danger progress-striped active">
                            <div class="bar" style="width: 40%">
                            </div>
                        </div>
                </div>
            </div>
        </div>
</section>