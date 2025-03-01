   <div class="row">
      <div class="col-md-4 p-4 ">
        <div class="row">
          <h3 class="border-3 border-start border-danger mb-3">
         Your Trusted Local Home Services in, Satara
          </h3>
          
          <?php 
          include 'connection.php';
                   $qs="SELECT * FROM   business_category LIMIT 4";
                   $rs=mysqli_query($cn,$qs);
        $i=1;
                   while ($dataC=mysqli_fetch_array($rs)) {
                ?>
          <div class="col-3 col-sm-3 col-md-6 p-3 ">
            <div class="col-md-11 mx-auto p-1 bg-white text-center">
              <img src="admin/<?php echo $dataC['ct_photo']?>" alt=""
              width="50">
              <p>
                <?php echo $dataC['ctnm']?>
              </p>
            </div>
          </div>
          <?php
                   }
          ?>
          
          


          
         <div class="text-center">
          <a href="browse-categories.php" class="btn btn-danger">
            Browse More
          </a>
         </div>
         
        </div>
      </div>

      <div class="col-md-8  p-3"><div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/plumber.webp" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/salon1.webp" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/claning.webp" class="d-block w-100" alt="...">
    </div>
  </div>
  
</div></div>
    </div>
    
  </div>