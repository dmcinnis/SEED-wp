<?php
/**
 * The template for displaying front page pages.
 *
 */
?>
<?php get_header(); ?>  
<div class="clear"></div>
<!--Start Slider Wrapper-->
<style type="text/css">
.carousel {
  position: relative;
}

.carousel-inner {
  position: relative;
  width: 100%;
  overflow: hidden;
}

.carousel-inner > .item {
  position: relative;
  display: none;
  -webkit-transition: 0.6s ease-in-out left;
          transition: 0.6s ease-in-out left;
}

.carousel-inner > .item > img,
.carousel-inner > .item > a > img {
  display: inline-block;
  height: auto;
  max-width: 100%;
  line-height: 1;
}

.carousel-inner > .active,
.carousel-inner > .next,
.carousel-inner > .prev {
  display: block;
}

.carousel-inner > .active {
  left: 0;
}

.carousel-inner > .next,
.carousel-inner > .prev {
  position: absolute;
  top: 0;
  width: 100%;
}

.carousel-inner > .next {
  left: 100%;
}

.carousel-inner > .prev {
  left: -100%;
}

.carousel-inner > .next.left,
.carousel-inner > .prev.right {
  left: 0;
}

.carousel-inner > .active.left {
  left: -100%;
}

.carousel-inner > .active.right {
  left: 100%;
}

.carousel-control {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  width: 15%;
  font-size: 20px;
  color: #ffffff;
  text-align: center;
  text-shadow: 0 1px 2px rgba(0, 0, 0, 0.6);
  opacity: 0.5;
  filter: alpha(opacity=50);
}

.carousel-control.left {
  background-color: rgba(0, 0, 0, 0.0001);
  background-color: transparent;
  background-image: -webkit-gradient(linear, 0 top, 100% top, from(rgba(0, 0, 0, 0.5)), to(rgba(0, 0, 0, 0.0001)));
  background-image: -webkit-linear-gradient(left, color-stop(rgba(0, 0, 0, 0.5) 0), color-stop(rgba(0, 0, 0, 0.0001) 100%));
  background-image: -moz-linear-gradient(left, rgba(0, 0, 0, 0.5) 0, rgba(0, 0, 0, 0.0001) 100%);
  background-image: linear-gradient(to right, rgba(0, 0, 0, 0.5) 0, rgba(0, 0, 0, 0.0001) 100%);
  background-repeat: repeat-x;
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#80000000', endColorstr='#00000000', GradientType=1);
}

.carousel-control.right {
  right: 0;
  left: auto;
  background-color: rgba(0, 0, 0, 0.5);
  background-color: transparent;
  background-image: -webkit-gradient(linear, 0 top, 100% top, from(rgba(0, 0, 0, 0.0001)), to(rgba(0, 0, 0, 0.5)));
  background-image: -webkit-linear-gradient(left, color-stop(rgba(0, 0, 0, 0.0001) 0), color-stop(rgba(0, 0, 0, 0.5) 100%));
  background-image: -moz-linear-gradient(left, rgba(0, 0, 0, 0.0001) 0, rgba(0, 0, 0, 0.5) 100%);
  background-image: linear-gradient(to right, rgba(0, 0, 0, 0.0001) 0, rgba(0, 0, 0, 0.5) 100%);
  background-repeat: repeat-x;
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#00000000', endColorstr='#80000000', GradientType=1);
}

.carousel-control:hover,
.carousel-control:focus {
  color: #ffffff;
  text-decoration: none;
  opacity: 0.9;
  filter: alpha(opacity=90);
}

.carousel-control .glyphicon,
.carousel-control .icon-prev,
.carousel-control .icon-next {
  position: absolute;
  top: 50%;
  left: 50%;
  z-index: 5;
  display: inline-block;
  width: 20px;
  height: 20px;
  margin-top: -10px;
  margin-left: -10px;
  font-family: serif;
}

.carousel-control .icon-prev:before {
  content: '\2039';
}

.carousel-control .icon-next:before {
  content: '\203a';
}

.carousel-indicators {
  position: absolute;
  bottom: 10px;
  left: 50%;
  z-index: 15;
  width: 120px;
  padding-left: 0;
  margin-left: -60px;
  text-align: center;
  list-style: none;
}

.carousel-indicators li {
  display: inline-block;
  width: 10px;
  height: 10px;
  margin: 1px;
  text-indent: -999px;
  cursor: pointer;
  border: 1px solid #ffffff;
  border-radius: 10px;
}

.carousel-indicators .active {
  width: 12px;
  height: 12px;
  margin: 0;
  background-color: #ffffff;
}

.carousel-caption {
  position: absolute;
  right: 15%;
  bottom: 20px;
  left: 15%;
  z-index: 10;
  padding-top: 20px;
  padding-bottom: 20px;
  color: #ffffff;
  text-align: center;
  text-shadow: 0 1px 2px rgba(0, 0, 0, 0.6);
}

.carousel-caption .btn {
  text-shadow: none;
}

@media screen and (min-width: 768px) {
  .carousel-control .glyphicon,
  .carousel-control .icon-prev,
  .carousel-control .icon-next {
    width: 30px;
    height: 30px;
    margin-top: -15px;
    margin-left: -15px;
    font-size: 30px;
  }
  .carousel-caption {
    right: 20%;
    left: 20%;
    padding-bottom: 30px;
  }
  .carousel-indicators {
    bottom: 20px;
  }
}
</style>
<script src="/wp-content/themes/blackbird/js/jquery-1.10.2.min.js"></script>
<script src="/wp-content/themes/blackbird/js/bootstrap.min.js"></script>
<script>
  $(document).ready(function() {
    $('.carousel').carousel({
      interval: 5000
    });

    $('.carousel').carousel('cycle');

  });
</script>

<section id="caro">
  <div id="myCarousel" class="carousel slide">
      <ol class="carousel-indicators">
          <li class="active" data-slide-to="0" data-target="#myCarousel"></li>
          <li class="" data-slide-to="1" data-target="#myCarousel"></li>
          <li class="" data-slide-to="2" data-target="#myCarousel"></li>
          <li class="" data-slide-to="3" data-target="#myCarousel"></li>
      </ol>
      <div class="carousel-inner">
          <div class="item active">
              <img alt="" style="width: 950px; height: 390px; margin: 0 auto" src="http://i.imgur.com/aVl4kYo.png"></img>
                <div class="flex-caption">
                    <h1>
                        <a href="http://www.linkedin.com/pub/mayank-bhatia/53/452/650">Our President, Mayank Bhatia</a>
                    </h1>
                    <p>                    
                        Under Mayank's leadership, SEED has expanded to over 60 clients and has strengthened ties in existing partnerships.
                    </p>
                </div>
          </div>
          <div class="item">
              <img alt="" style="width: 950px; height: 390px; margin: 0 auto" src="http://i.imgur.com/2xpMxiO.png"></img>
                <div class="flex-caption">
                    <h1>
                        <a href="#">Our Students</a>
                    </h1>
                    <p>                    
                        SEED recruits the most talented individuals the University has to offer.
                    </p>
                </div>
          </div>
          <div class="item">
              <img alt="" style="width: 950px; height: 390px; margin: 0 auto" src="http://i.imgur.com/GbukwCK.png"></img>
                <div class="flex-caption">
                    <h1>
                        <a href="#">Our Reach</a>
                    </h1>
                    <p>                    
                        SEED's impact extends from the Charlottesville area to 5 continents.
                    </p>
                </div>
          </div>
          <div class="item">
              <img alt="" style="width: 950px; height: 390px; margin: 0 auto" src="http://i.imgur.com/50fJqvT.png"></img>
                <div class="flex-caption">
                    <h1>
                        <a href="#">Project Launch</a>
                    </h1>
                    <p>                    
                        Groups meet for the first time and plan for their semester project
                    </p>
                </div>
          </div>
      </div>
      <a class="left carousel-control" data-slide="prev" href="#myCarousel">
        <span class="icon-prev"></span>
      </a>
      <a class="right carousel-control" data-slide="next" href="#myCarousel">
        <span class="icon-next"></span>
      </a>
  </div>
</section>
<!--End Silder Wrapper-->
<div class="clear"></div>
<div class="seprator"></div>
<div class="content">
    <?php if (blackbird_get_option('blackbird_mainheading') != '') { ?>
        <h1><?php echo stripslashes(blackbird_get_option('blackbird_mainheading')); ?></h1>
    <?php } else { ?>
        <h1><?php _e('Student Entrepreneurs for Economic Development', 'black-bird'); ?></h1>
<?php } ?>
</div>
<div class="feature-content">
    <div class="circle-content">
        <div class="grid_6 alpha">
            <div class="feature-content-inner one">
                <?php if (blackbird_get_option('blackbird_wimg1') != '') { ?>
                    <div class="circle"><img src="<?php echo blackbird_get_option('blackbird_wimg1'); ?>" /></div>
                <?php } else { ?>
                    <div class="circle moveCircle"><img src="http://i.imgur.com/tylIh1B.jpg" /></div>
                        <?php } ?>
                        <?php if (blackbird_get_option('blackbird_headline1') != '') { ?><h1><a href="<?php
                        if (blackbird_get_option('blackbird_link1') != '') {
                            echo blackbird_get_option('blackbird_link1');
                        }
                            ?>"><?php echo stripslashes(blackbird_get_option('blackbird_headline1')); ?></a></h1>
                <?php } else { ?> <h1><a href="#"><?php _e('News & Events', 'black-bird'); ?></a></h1>
                <?php } ?>

                    <p><?php _e('A new school year begins. Check out the latest updates from the team. ', 'black-bird'); ?></p>

                <a class="read-more" href="<?php
if (blackbird_get_option('blackbird_link1') != '') {
    echo blackbird_get_option('blackbird_link1');
}
?>">Read More</a> </div>
        </div>
        <div class="grid_6">
            <div class="feature-content-inner two">
                        <?php if (blackbird_get_option('blackbird_fimg2') != '') { ?>
                    <div class="circle"><img src="<?php echo blackbird_get_option('blackbird_fimg2'); ?>" /></div>
                <?php } else { ?>
                    <div class="circle moveCircle"><img src="http://i.imgur.com/6lb7mLZ.png" /></div>
                <?php } ?>
                <?php if (blackbird_get_option('blackbird_headline2') != '') { ?><h1><a href="<?php
                    if (blackbird_get_option('blackbird_link2') != '') {
                        echo blackbird_get_option('blackbird_link2');
                    }
                    ?>"><?php echo stripslashes(blackbird_get_option('blackbird_headline2')); ?></a></h1>
                <?php } else { ?> <h1><a href="#"><?php _e('Join Us', 'black-bird'); ?></a></h1>
                   <?php } ?>


                    <p><?php _e('Think you have what it takes to join SEED? Start your application now for fall interviews.', 'black-bird'); ?></p>

                <a class="read-more" href="<?php
                if (blackbird_get_option('blackbird_link2') != '') {
                    echo blackbird_get_option('blackbird_link2');
                }
                ?>"><?php _e('Read More', 'black-bird') ?></a> </div>
        </div>
        <div class="grid_6">
            <div class="feature-content-inner two">
                        <?php if (blackbird_get_option('blackbird_fimg2') != '') { ?>
                    <div class="circle"><img src="<?php echo blackbird_get_option('blackbird_fimg2'); ?>" /></div>
                <?php } else { ?>
                    <div class="circle moveCircle"><img src="http://i.imgur.com/TI3mv4n.png" /></div>
                <?php } ?>
                <?php if (blackbird_get_option('blackbird_headline2') != '') { ?><h1><a href="<?php
                    if (blackbird_get_option('blackbird_link2') != '') {
                        echo blackbird_get_option('blackbird_link2');
                    }
                    ?>"><?php echo stripslashes(blackbird_get_option('blackbird_headline2')); ?></a></h1>
                <?php } else { ?> <h1><a href="#"><?php _e('Engage as a Client', 'black-bird'); ?></a></h1>
                   <?php } ?>

                    <p><?php _e('Get in touch with our leadership to see how SEED can help your organization.', 'black-bird'); ?></p>

                <a class="read-more" href="<?php
                if (blackbird_get_option('blackbird_link2') != '') {
                    echo blackbird_get_option('blackbird_link2');
                }
                ?>"><?php _e('Read More', 'black-bird') ?></a> </div>
        </div>        
        <div class=" grid_6 omega">
            <div class="feature-content-inner three">
                <?php if (blackbird_get_option('blackbird_fimg3') != '') { ?>
                    <div class="circle"><img src="<?php echo blackbird_get_option('blackbird_fimg3'); ?>" /></div>
                <?php } else { ?>
                    <div class="circle moveCircle"><img src="http://i.imgur.com/C8TUhqW.png" /></div>
                <?php } ?>
                <?php if (blackbird_get_option('blackbird_headline3') != '') { ?><h1><a href="<?php
                    if (blackbird_get_option('blackbird_link3') != '') {
                        echo blackbird_get_option('blackbird_link3');
                    }
                    ?>"><?php echo stripslashes(blackbird_get_option('blackbird_headline3')); ?></a></h1>
                <?php } else { ?> <h1><a href="#"><?php _e('Support Us', 'black-bird'); ?></a></h1>
                <?php } ?>

                                    <p><?php _e('SEED is a registered 501c3 that takes tax-deductible donations. Your generosity is crucial. ', 'black-bird'); ?></p>

                <a class="read-more" href="<?php
if (blackbird_get_option('blackbird_link3') != '') {
    echo blackbird_get_option('blackbird_link3');
}
?>"><?php _e('Read More', 'black-bird'); ?></a> </div>
        </div>
    </div>
</div>      
<div class="clear"></div>
</div>
</div>
</div>
</div>
<?php get_footer(); ?>