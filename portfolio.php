    <section id="inner-headline">
      <div class="container">
        <div class="row">
          <div class="span4">
            <div class="inner-heading">
              <h2>Portfolio </h2>
            </div>
          </div>
          <div class="span8">
            <ul class="breadcrumb">
              <li><a href="index.php?file=home"><i class="icon-home"></i></a><i class="icon-angle-right"></i></li>
              </li>
              <li class="active">Portfolio</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <section id="content">
      <div class="container">
        <div class="row">
          <div class="span12">
            <ul class="portfolio-categ filter">
              <li class="all active"><a href="#">All</a></li>
              <?php
              $sql = "SELECT * FROM portfollio_category ";
              $prepare = $conn->prepare($sql);
              $exe = $prepare->execute();
              $catogry_details = $prepare->fetchAll();

              foreach ($catogry_details as $details) { ?>
                <li class="<?php echo $details['categories']; ?>"><a href="#" title=""><?php echo ucfirst($details['categories']); ?></a></li>
              <?php
              }
              ?>
            </ul>
            <div class="clearfix">
            </div>
            <div class="row">
              <section id="projects">
                <ul id="thumbs" class="portfolio">
                  <?php
                  $sql = "SELECT * FROM portfolio ";

                  $prepare = $conn->prepare($sql);
                  $exe = $prepare->execute();
                  $fetch_details = $prepare->fetchAll();
                  $si_no = 0;
                  foreach ($fetch_details as $values) {
                    $si_no++;
                    $catogry = $values['portfolio_categori'];

                    $sql_find_cat = "SELECT categories FROM portfollio_category WHERE cate_id = '$catogry' ";
                    $prepare_cat = $conn->prepare($sql_find_cat);
                    $exe = $prepare_cat->execute();
                    $catname = $prepare_cat->fetchAll();
                    $catogry = $catname[0]['categories'];
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
      </div>
    </section>