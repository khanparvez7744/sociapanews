<?php include("header.php"); ?>
  <?php
   $category=$_GET['cat'];
     $data=0;
     $sql="SELECT * FROM category where category='$category' and is_active=0";
     $result=$pdo->query($sql);
     $data=$result->fetch();
     if(empty($data)){
        $result=$pdo->query("SELECT * FROM subcategory where sub_category='$category' and is_active=0");
        $data=$result->fetch();
     }
   ?>
  <!--<section>-->
  <!--  <div class="row">-->
  <!--    <div class="col-sm-12">-->
  <!--      <img src="images/<?php echo $data['banner']; ?>" class="img-fluid w-100" alt="Marketing Banner">-->
  <!--    </div>-->
  <!--  </div>-->
  <!--</section>-->
  <!--<section class="py-lg-4 py-sm-2 py-1">-->
  <!--<div class="container">-->
  <!--<div class="row justify-content-center py-1 pb-sm-3 mb-sm-3">-->
  <!--  <div class="col-12 text-center">-->
      <!--<?php if($globalad[9]['ads_type'] == 'google_ad'){ if(!empty($globalad[9]['ad_code'])){ ?>-->
      <!--  <div>-->
      <!--   <?php echo $globalad[9]['ad_code'] ?>-->
      <!--  </div>-->
      <!--<?php }}else if($globalad[9]['ads_type']=='native_ad'){ if(!empty($globalad[9]['ad_img'])){ ?>-->
      <!--<div>-->
      <!--   <img src="./images/ads/<?php echo $globalad[9]['ad_img']; ?>" alt="ads11" />-->
      <!--  </div>-->
      <!--  <?php }} ?>-->
  <!--  </div>-->
  <!--</div>-->
  <section class="container">
      <div class="row">
          <div class="col-12 text-center">
                    <?php if($globalad[9]['ads_type'] == 'google_ad'){ if(!empty($globalad[9]['ad_code'])){ ?>
        <div>
         <?php echo $globalad[9]['ad_code'] ?>
        </div>
      <?php }}else if($globalad[9]['ads_type']=='native_ad'){ if(!empty($globalad[9]['ad_img'])){ ?>
      <div>
         <img src="./images/ads/<?php echo $globalad[9]['ad_img']; ?>" alt="ads11" class="img-fluid"/>
        </div>
        <?php }} ?>
          </div>
      </div>
  </section>

<section class="py-md-5 py-3 mrktCard">
  <div class="container">
    <div class="row">

<!-- advertisment area -->
<div class="col-lg-2 col-3">
  <div class="bg-white text-center p-2">
          <?php if($globalad[5]['ads_type'] == 'google_ad'){ if(!empty($globalad[5]['ad_code'])){ ?>
        <div>
         <?php echo $globalad[5]['ad_code'] ?>
        </div>
      <?php }}else if($globalad[5]['ads_type']=='native_ad'){ if(!empty($globalad[5]['ad_img'])){ ?>
      <div>
         <img src="./images/ads/<?php echo $globalad[5]['ad_img']; ?>" alt="ads11" />
        </div>
         <?php }} if($globalad[6]['ads_type'] == 'google_ad'){ if(!empty($globalad[6]['ad_code'])){ ?>
        <div>
         <?php echo $globalad[6]['ad_code'] ?>
        </div>
      <?php }}else if($globalad[6]['ads_type']=='native_ad'){ if(!empty($globalad[6]['ad_img'])){ ?>
      <div>
         <img src="./images/ads/<?php echo $globalad[6]['ad_img']; ?>" alt="ads11" />
        </div>
         <?php }} if($globalad[7]['ads_type'] == 'google_ad'){ if(!empty($globalad[7]['ad_code'])){ ?>
        <div>
         <?php echo $globalad[7]['ad_code'] ?>
        </div>
      <?php }}else if($globalad[7]['ads_type']=='native_ad'){ if(!empty($globalad[7]['ad_img'])){ ?>
      <div>
         <img src="./images/ads/<?php echo $globalad[7]['ad_img']; ?>" alt="ads11" />
        </div>
       <?php }} if($globalad[8]['ads_type'] == 'google_ad'){ if(!empty($globalad[8]['ad_code'])){ ?>
        <div>
         <?php echo $globalad[8]['ad_code'] ?>
        </div>
      <?php }}else if($globalad[8]['ads_type']=='native_ad'){ if(!empty($globalad[8]['ad_img'])){ ?>
      <div>
         <img src="./images/ads/<?php echo $globalad[8]['ad_img']; ?>" alt="ads11" />
        </div>
        <?php }} ?>

      </div>
      </div>
<!-- !advertisment area -->



      <div class="col-lg-8 col-6 px-lg-5 px-0">
        <h2 class="Poppins-Bold"><?php echo $data['heading']; ?></h2>
        <div class="h-3 w-110 bg-red mb-md-4 mb-sm-3 mb-2 hoverRed"></div>
        <div class="row g-3">
          <?php $sql="SELECT * FROM news where (category='$category' or sub_category='$category') and is_active=0";
           $result=$pdo->query($sql);
          $data=$result->fetchAll();
          foreach ($data as $value) {
              $a = strip_tags( $value['heading']);
              $b = strip_tags( $value['description']);
           ?>
          <div class="col-xl-6 col-xxl-4">
            <div class="card shadow-lg">
              <img src="images/<?php echo $value['image']; ?>" class="card-img-top" alt="weekly-news">
              <div class="card-body">
                <a href="child.php?cat=<?php echo $value['id']; ?>&cat1=<?php echo $value['category']; ?>" class="text-decoration-none text-dark">
                <h6 class="card-title Poppins-Bold hoverRed"><?php echo substr($a,0,50); ?>...</h6></a>
                <p class="card-text fs-16"><?php echo  substr($b, 0, 80); ?><a href="child.php?cat=<?php echo $value['id']; ?>&cat1=<?php echo $value['category']; ?>" class="removeunderline text-primary"> read more...</a></p>
                <div class="border-top col-6 mx-auto pb-1"></div>
               <div class="share text-center">
                <a href="https://www.facebook.com/sharer/sharer.php?u=https://sociapanews.com/child.php?cat=<?php echo $value['id'] ?>&cat1=<?php echo $value['category'] ?>&t=<?php echo $a ?>" class="me-3" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Share on Facebook"><i class="fab fa-facebook text-secondary"></i></a>
                <a href="https://twitter.com/share?u=https://sociapanews.com/child.php?cat=<?php echo $value['id'] ?>&cat1=<?php echo $value['category'] ?>&t=<?php echo $a ?>" class="me-3" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Share on Twitter"><i class="fab fa-twitter text-secondary"></i></a>
                <a href="https://www.linkedin.com/shareArticle?mini=true&u=https://sociapanews.com/child.php?cat=<?php echo $value['id'] ?>&cat1=<?php echo $value['category'] ?>&t=<?php echo $a ?>" class="me-3" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Share on Linkedin"><i class="fab fa-linkedin text-secondary"></i></a>
                <a href="whatsapp://send?text=u=https://sociapanews.com/child.php?cat=<?php echo $value['id'] ?>&cat1=<?php echo $value['category'] ?>&t=<?php echo $a ?>" class="me-3" data-action="share/whatsapp/share" onClick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Share on whatsapp"><i class="fab fa-whatsapp text-secondary"></i></a>
              </div>
              </div>

            </div>
          </div>
        <?php } ?>
        </div>
      </div>

<!-- advertisment area -->
   <div class="col-lg-2 col-3">
      <div class="bg-white text-center p-2 stickyRightSide">
         <?php if($globalad[21]['ads_type'] == 'google_ad'){ if(!empty($globalad[21]['ad_code'])){ ?>
        <div>
         <?php echo $globalad[21]['ad_code'] ?>
        </div>
      <?php }}else if($globalad[21]['ads_type']=='native_ad'){ if(!empty($globalad[21]['ad_img'])){ ?>
      <div>
         <img src="./images/ads/<?php echo $globalad[21]['ad_img']; ?>" alt="ads11" />
        </div>
         <?php }} if($globalad[22]['ads_type'] == 'google_ad'){ if(!empty($globalad[22]['ad_code'])){ ?>
        <div>
         <?php echo $globalad[22]['ad_code'] ?>
        </div>
      <?php }}else if($globalad[22]['ads_type']=='native_ad'){ if(!empty($globalad[22]['ad_img'])){ ?>
      <div>
         <img src="./images/ads/<?php echo $globalad[22]['ad_img']; ?>" alt="ads11" />
        </div>
         <?php }} if($globalad[23]['ads_type'] == 'google_ad'){ if(!empty($globalad[23]['ad_code'])){ ?>
        <div>
         <?php echo $globalad[23]['ad_code'] ?>
        </div>
      <?php }}else if($globalad[23]['ads_type']=='native_ad'){ if(!empty($globalad[23]['ad_img'])){ ?>
      <div>
         <img src="./images/ads/<?php echo $globalad[23]['ad_img']; ?>" alt="ads11" />
        </div>
       <?php }} if($globalad[24]['ads_type'] == 'google_ad'){ if(!empty($globalad[24]['ad_code'])){ ?>
        <div>
         <?php echo $globalad[24]['ad_code'] ?>
        </div>
      <?php }}else if($globalad[24]['ads_type']=='native_ad'){ if(!empty($globalad[24]['ad_img'])){ ?>
      <div>
         <img src="./images/ads/<?php echo $globalad[24]['ad_img']; ?>" alt="ads11" />
        </div>
        <?php }} ?>
        </div> </div>
<!-- !advertisment area -->

    </div>
</div>
  </div>
</section>
 <?php include("footer.php"); ?>