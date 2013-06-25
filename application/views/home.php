<style type="text/css">
 /* CUSTOMIZE THE CAROUSEL
    -------------------------------------------------- */
    .carousel .item {
      height: 400px;
    }

    .carousel img {
      top: 0;
      left: 0;
      min-width: 100%;
      height: 400px;
    }

    .carousel {
     margin-left: 130px;
     margin-right: 150px;
     text-align: center;
    }
</style>

<!--<script type="text/javascript">

jQuery(document).ready(function() {
  
  $('#myCarousel').carousel({
  interval: 2000
});

});
</script>-->

<div class="jumbotron">
  <p class="lead">
        Welcome to <b>Shackshirt</b>
  </p>
</div>


<div id="myCarousel" class="carousel slide">
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>
  <!-- Carousel items -->
  <div class="carousel-inner">
    <div class="active item">
      <img src="/assets/images/Carousel/bootstrap-mdo-sfmoma-01.jpg" alt="">
      <div class="container">
        <div class="carousel-caption">
          <h4>First Thumbnail label</h4>
          <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
        </div>
    </div>
    </div>
    <div class="item">
      <img src="/assets/images/Carousel/bootstrap-mdo-sfmoma-02.jpg" alt="">
      <div class="container">
        <div class="carousel-caption">
          <h4>Second Thumbnail label</h4>
          <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
        </div>
    </div>
    </div>
    <div class="item">
      <img src="/assets/images/Carousel/bootstrap-mdo-sfmoma-03.jpg" alt="">
      <div class="container">
        <div class="carousel-caption">
          <h4>Third Thumbnail label</h4>
          <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
        </div>
    </div>
    </div>
  </div>
  <!-- Carousel nav -->
  <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
  <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
</div>

<div class="jumbotron">
  <a class="btn btn-large btn-getStarted" href="<?php echo base_url(); ?>site/design">Get started today</a>
</div>