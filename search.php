<?php include("header.php"); ?>
  <?php
   $search=$_POST['search'];
   ?>

  <section class="container">
      <div class="row">
          <div class="col-12 text-center pt-1">
                    <?php if($globalad[26]['ads_type'] == 'google_ad'){ if(!empty($globalad[26]['ad_code'])){ ?>
        <div>
         <?php echo $globalad[26]['ad_code'] ?>
        </div>
      <?php }}else if($globalad[26]['ads_type']=='native_ad'){ if(!empty($globalad[26]['ad_img'])){ ?>
      <div>
         <img src="./images/ads/<?php echo $globalad[26]['ad_img']; ?>" alt="ads11" class="img-fluid" />
        </div>
        <?php }} ?>
          </div>
      </div>
  </section>
<section class="py-md-5 py-3">
  <div class="container">
    <div class="row">
      <div class="col-9 col-sm-10 pe-lg-5 pe-md-2 pe-0">
        <h2 class="Poppins-Bold">Searched result</h2>
        <div class="h-3 w-110 bg-red mb-md-5 mb-sm-3 mb-2"></div>
        <div class="row g-3">
          <?php $sql="SELECT * FROM news where is_active=0 and (category LIKE '%$search%' or sub_category LIKE '%$search%' or tegs LIKE '%$search%' or heading LIKE '%$search%')";
           $result=$pdo->query($sql);
          $data=$result->fetchAll();
          if(isset($data)){
          foreach ($data as $value) {
             # code...
             $a = strip_tags( $value['heading']);
              $b = strip_tags( $value['description']);
           ?>
          <div class="col-md-6 col-lg-4">
            <div class="card shadow-lg" style="height:400px">

              <img src="images/<?php echo $value['image']; ?>" class="card-img-top" alt="weekly-news">
              <div class="card-body">
                <a href="category/news.php?cat=<?php echo $value['id']; ?>&cat1=<?php echo $value['category']; ?>" class="text-decoration-none text-dark">
                <h6 class="card-title Poppins-Bold"><?php echo $a; ?></h5>
                <p class="card-text fs-16"><?php echo substr($b, 0, 100); ?><a href="category/news.php?cat=<?php echo $value['id']; ?>&cat1=<?php echo $value['category']; ?>" class="removeunderline text-primary"> read more...</a></p>
              </a>
                <div class="share">
                <!-- <a href="#" class="me-2"><i class="fab fa-facebook text-secondary"></i></a>
                <a href="#" class="me-2"><i class="fab fa-twitter text-secondary"></i></a>
                <a href="#" class="me-2"><i class="fab fa-linkedin text-secondary"></i></a>
                <a href="#" class="me-2"><i class="fab fa-youtube text-secondary"></i></a>
                <a href="#" class="me-2"><i class="fab fa-whatsapp text-secondary"></i></a> -->
              </div>
              </div>

            </div>
          </div>
        <?php } }
        else{?>
          <div class="col-md-6 col-lg-4">
            <h4>Search not found</h4>
          </div>
        <?php }?>
        </div>
      </div>
    <div class="col-3 col-sm-2">
       <div class="bg-white border p-2 ">
      <?php if($globalad[14]['ads_type'] == 'google_ad'){ if(!empty($globalad[14]['ad_code'])){ ?>
        <div>

         <?php echo $globalad[14]['ad_code'] ?>

        </div>
      <?php }}else if($globalad[14]['ads_type']=='native_ad'){ if(!empty($globalad[14]['ad_img'])){ ?>
      <div>
         <img src="./images/ads/<?php echo $globalad[14]['ad_img']; ?>" alt="ads11" />
        </div>
         <?php }} if($globalad[15]['ads_type'] == 'google_ad'){ if(!empty($globalad[15]['ad_code'])){ ?>
        <div>
         <?php echo $globalad[15]['ad_code'] ?>
        </div>
      <?php }}else if($globalad[15]['ads_type']=='native_ad'){ if(!empty($globalad[15]['ad_img'])){ ?>
      <div>
         <img src="./images/ads/<?php echo $globalad[15]['ad_img']; ?>" alt="ads11" />
        </div>
         <?php }} if($globalad[16]['ads_type'] == 'google_ad'){ if(!empty($globalad[16]['ad_code'])){ ?>
        <div>
         <?php echo $globalad[16]['ad_code'] ?>
        </div>
      <?php }}else if($globalad[16]['ads_type']=='native_ad'){ if(!empty($globalad[16]['ad_img'])){ ?>
      <div>
         <img src="./images/ads/<?php echo $globalad[16]['ad_img']; ?>" alt="ads11" />
        </div>
       <?php }} if($globalad[17]['ads_type'] == 'google_ad'){ if(!empty($globalad[17]['ad_code'])){ ?>
        <div>
         <?php echo $globalad[17]['ad_code'] ?>
        </div>
      <?php }}else if($globalad[17]['ads_type']=='native_ad'){ if(!empty($globalad[17]['ad_img'])){ ?>
      <div>
         <img src="./images/ads/<?php echo $globalad[17]['ad_img']; ?>" alt="ads11" />
        </div>
        <?php }} ?>
        </div>
      </div>
    </div>
 </div>
  </div>
</section>

 <?php include("footer.php"); ?>