<?php require 'view/public/header.php';

$count = 0;
?>


<div id="main">
  <div id="content">
    <div class="box">

      <div class="head">
        <h2>SON RÖMORKLAR</h2>
        <p class="text-right"><a href="#">HEPSİNİ GÖR</a></p>
      </div>


      <?php foreach ($movies as $movie) { ?>
      <?php if ($movie["movie_id"]==7 ){?>
        <hr>
        <h2>EN ÇOK OY ALAN</h2>
        <p class="text-right"><a href="#">HEPSİNİ GÖR</a></p>
        <?php } ?> 
        <?php if ($movie["movie_id"]==13){?>
        <hr>
          <h2>EN ÇOK YORUMLANAN</h2>
        <p class="text-right"><a href="#">HEPSİNİ GÖR</a></p>
        <?php } ?> 
          <div class="movie">
            <div class="movie-image"> <span class="play"><a href="<?= $movie["movie_youtube"];?>"><span class="name"><?= $movie['movie_title']; ?><br><?= $movie['movie_year']; ?><br></span></a></span><img src="<?= CSS_URL ?><?= $movie["image_path"]; ?>" alt="" /></div>
            <div class="rating">
              <p><?= $movie['movie_category']; ?></p>
              <span class="comments"><b>IMDb: </b><?= $movie["IMDb"]; ?></span><br>
            </div>
          </div>
        <?php } ?>
      
    <div id="news">
      <div class="head">
        <h3>NEWS</h3>
        <p class="text-right"><a href="#">See all</a></p>
      </div>
      <div class="content">
        <p class="date">12.04.09</p>
        <h4>Disney's A Christmas Carol</h4>
        <p>&quot;Disney's A Christmas Carol,&quot; a multi-sensory thrill ride re-envisioned by Academy
          Award&reg;-winning filmmaker Robert Zemeckis, captures... </p>
        <a href="#">Read more</a>
      </div>
      <div class="content">
        <p class="date">11.04.09</p>
        <h4>Where the Wild Things Are</h4>
        <p>Innovative director Spike Jonze collaborates with celebrated author Maurice Sendak to bring one of
          the most beloved books of all time to the big screen in &quot;Where the Wild Things Are,&quot;...
        </p>
        <a href="#">Read more</a>
      </div>
      <div class="content">
        <p class="date">10.04.09</p>
        <h4>The Box</h4>
        <p>Norma and Arthur Lewis are a suburban couple with a young child who receive an anonymous gift bearing
          fatal and irrevocable consequences.</p>
        <a href="#">Read more</a>
      </div>
    </div>
    <div id="coming">
      <div class="head">
        <h3>COMING SOON<strong>!</strong></h3>
        <p class="text-right"><a href="#">See all</a></p>
      </div>
      <div class="content">
        <h4>The Princess and the Frog </h4>
        <a href="#"><img src="<?= CSS_URL ?>css/images/coming-soon1.jpg" alt="" /></a>
        <p>Walt Disney Animation Studios presents the musical &quot;The Princess and the Frog,&quot; an animated
          comedy set in the great city of New Orleans...</p>
        <a href="#">Read more</a>
      </div>
      <div class="cl">&nbsp;</div>
      <div class="content">
        <h4>The Princess and the Frog </h4>
        <a href="#"><img src="<?= CSS_URL ?>css/images/coming-soon2.jpg" alt="" /></a>
        <p>Walt Disney Animation Studios presents the musical &quot;The Princess and the Frog,&quot; an animated
          comedy set in the great city of New Orleans...</p>
        <a href="#">Read more</a>
      </div>
    </div><
    <div class="cl">&nbsp;</div>

    <?php


    ?>
  </div>


</div>
  <?php require 'view/public/footer.php'; ?>